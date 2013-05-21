<?php

namespace Sensio\Bundle\TrainingBundle\Controller;

use Sensio\Bundle\TrainingBundle\Model\CelsiusConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConverterController extends Controller
{
  public function celsiusAction($celsius, $_format)
  {
    $converter = new CelsiusConverter();

    return $this->render(
      sprintf('SensioTrainingBundle:Converter:celsius.%s.twig', $_format),
      array(
        'celsius' => $celsius,
        'fahrenheit' => $converter->toFahrenheit($celsius)
      )
    );
  }
}