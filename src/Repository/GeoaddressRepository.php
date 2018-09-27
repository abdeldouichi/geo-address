<?php

namespace App\Repository;

use App\Entity\Geoaddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Geoaddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method Geoaddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method Geoaddress[]    findAll()
 * @method Geoaddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeoaddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Geoaddress::class);
    }

//    /**
//     * @return Geoaddress[] Returns an array of Geoaddress objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Geoaddress
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
