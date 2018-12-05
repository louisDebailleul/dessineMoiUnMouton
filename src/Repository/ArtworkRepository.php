<?php

namespace App\Repository;

use App\Entity\Artwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Artwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artwork[]    findAll()
 * @method Artwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtworkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Artwork::class);
    }


    // /**
    //  * @return Artwork[] Returns an array of Artwork objects
    //  */
    public function findLast()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }
    // /**
    //  * @return Artwork[] Returns an array of Artwork objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Artwork
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
