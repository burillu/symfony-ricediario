<?php

namespace App\Repository;

use App\Entity\Ricette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ricette>
 *
 * @method Ricette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ricette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ricette[]    findAll()
 * @method Ricette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RicetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ricette::class);
    }

    //    /**
    //     * @return Ricette[] Returns an array of Ricette objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Ricette
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
