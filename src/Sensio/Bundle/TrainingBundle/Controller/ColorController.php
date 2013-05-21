<?php

namespace Sensio\Bundle\TrainingBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;

class ColorController extends Controller
{
  public function setColorAction(Request $request, $color)
  {
    $response = $this->redirect($this->generateUrl('training_color'));
    // $cookie = new Cookie('color', $color, new \DateTime('now + 1 hour'));
    $request->getSession()->set('color',  $color);
//    $response->headers->setCookie($cookie);

    return $response;
  }
  public function showColorAction(Request $request)
  {
     return $this->render(
       'SensioTrainingBundle:Color:showColor.html.twig',
       array('color' => $request->getSession()->get('color', 'chartruse'))
     );
  }
}