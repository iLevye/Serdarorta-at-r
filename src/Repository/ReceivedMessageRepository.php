<?php

namespace App\Repository;

use App\Entity\ReceivedMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ReceivedMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReceivedMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReceivedMessage[]    findAll()
 * @method ReceivedMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReceivedMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReceivedMessage::class);
    }

    // /**
    //  * @return ReceivedMessage[] Returns an array of ReceivedMessage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReceivedMessage
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
