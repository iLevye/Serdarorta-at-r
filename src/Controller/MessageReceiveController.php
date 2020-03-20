<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MessageReceiveController extends AbstractController
{
    /**
     * @Route("/message/receive", name="message_receive")
     */
    public function index()
    {

        return $this->json(['status'=>'ok']);
    }
}
