<?php

namespace App\Repository;

use App\Entity\Pasto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pasto>
 *
 * @method Pasto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pasto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pasto[]    findAll()
 * @method Pasto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PastoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pasto::class);
    }

    //    /**
    //     * @return Pasto[] Returns an array of Pasto objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Pasto
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
