<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction(Request $request, $name)
    {
        $name = $request->attributes->get('name');
        return $this->render(
          'SensioTrainingBundle:Default:index.html.twig',
          array('name' => $name)
        );
    }

    public function getVisitorsOnlineAction(Request $request)
    {

      return $this->render(
        'SensioTrainingBundle:Default:count.html.twig',
        array('count' => rand(1000, 9999))
      );
    }
}
