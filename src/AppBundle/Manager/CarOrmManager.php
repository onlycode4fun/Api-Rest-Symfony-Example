<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 24/09/17
 * Time: 12:59
 */

namespace AppBundle\Manager;

use AppBundle\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class CarOrmManager
{
    /** @var  EntityRepository */
    private $repository;
    /** @var EntityManager */
    private $em;

    function __construct(Registry $entityManager)
    {
        $this->repository = $entityManager->getRepository('AppBundle:Car');
        $this->em = $entityManager->getManager();
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }

    /**
     * @return array
     */
    public function findByColor($color)
    {
        return $this->repository->findByColor($color);
    }
}