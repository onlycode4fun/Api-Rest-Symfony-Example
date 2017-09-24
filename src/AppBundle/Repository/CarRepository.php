<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 24/09/17
 * Time: 12:56
 */

namespace AppBundle\Repository;

/**
 * CarRepository
 */
class CarRepository extends \Doctrine\ORM\EntityRepository
{

    public function findByColor($color)
    {
        $qb = $this->createQueryBuilder('c')
            ->where('c.color = :color')
            ->setParameters([
                'color' => $color
            ])
        ;

        return $qb->getQuery()->getResult();
    }
}