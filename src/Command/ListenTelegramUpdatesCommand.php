<?php

namespace App\Command;

use App\Controller\MessageReceiveController;
use App\Entity\ReceivedMessage;
use App\Repository\ReceivedMessageRepository;
use App\Service\SerdarOrtac;
use App\Service\Telegram;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ListenTelegramUpdatesCommand extends Command
{

    /** @var EntityManagerInterface $em */
    private $em;

    protected static $defaultName = 'listen-telegram-updates';

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->em = $entityManager;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');


        $repliedIds = [];
        /** @var ReceivedMessage[] $repliedMessages */
        $repliedMessages = $this->em->getRepository(ReceivedMessage::class)->findAll();
        foreach ($repliedMessages as $r){
            $repliedIds[] = $r->getTelegramId();
        }

        $serdarOrtac = new SerdarOrtac();
        $telegramApi = new Telegram();

        while(1){
            $updates = json_decode(file_get_contents('https://api.telegram.org/bot1067857543:AAEcA2KaRpKAKXrOl6rvLmvPW-3aW2T_CjI/getUpdates'));
            sleep(1);
            if(isset($updates->result) && count($updates->result) > 0){
                foreach($updates->result as $r){
                    if(!in_array($r->message->message_id, $repliedIds)){
                        $repliedMessages[] = $r->update_id;
                        $io->writeln($r->message->text);
                        $message = new ReceivedMessage();
                        $date = new \DateTime();
                        $date->setTimestamp($r->message->date);
                        $message->setDate($date);
                        $message->setFromId($r->message->from->id);
                        $message->setIsReplied(true);
                        $message->setTelegramId($r->message->message_id);
                        $message->setText($r->message->text);
                        $repliedIds[] = $r->message->message_id;
                        $this->em->persist($message);
                        $this->em->flush($message);

                        $content = $serdarOrtac->generate();
                        $telegramApi->sendMessage($r->message->chat->id, $content);

                    }
                }

            }
        }

        return 0;
    }
}
