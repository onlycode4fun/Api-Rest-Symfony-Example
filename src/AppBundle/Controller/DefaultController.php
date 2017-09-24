<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 24/09/17
 * Time: 12:48
 */

namespace AppBundle\Controller;

use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/cars", name="cars")
     * @Method({"GET"})
     */
    public function carsAction(Request $request)
    {
        $cars = $this->container->get('app.car_manager')->findAll();

        $context = SerializationContext::create()->setGroups([
            'car_simple'
        ]);

        $serializer = $this->container->get('jms_serializer');
        $response = $serializer->toArray($cars, $context);

        return new JsonResponse($response);
    }

    /**
     * @Route("/cars/color/{color}", name="cars_by_color")
     * @Method({"GET"})
     */
    public function searchCarsByColorAction(Request $request, $color)
    {
        $cars = $this->container->get('app.car_manager')->findByColor($color);

        $context = SerializationContext::create()->setGroups([
            'car_simple'
        ]);

        $serializer = $this->container->get('jms_serializer');
        $response = $serializer->toArray($cars, $context);

        return new JsonResponse($response);
    }
}
