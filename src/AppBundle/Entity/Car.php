<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 24/09/17
 * Time: 12:48
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Car
 *
 * @ORM\Table(name="Car")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Groups({"car_simple", "car_detail"})
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50)
     * @JMS\Groups({"car_simple", "car_detail"})
     */
    private $color;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set color
     *
     * @param string $color
     *
     * @return Car
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    function __construct()
    {
    }
}

