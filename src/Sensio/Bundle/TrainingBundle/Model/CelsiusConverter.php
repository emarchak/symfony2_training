<?php
namespace Sensio\Bundle\TrainingBundle\Model;

class CelsiusConverter
{
  public function toFahrenheit($celsius)
  {
    $celsius = (integer) $celsius;
    return ($celsius * 9) / 5 + 32;
  }

}
