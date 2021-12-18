<?php

namespace App\Models\Lego\Traits\Fields;

use App\Models\Specification\MrSpecification;

trait MrSpecificationFieldTrait
{
  public function getSpecification(): MrSpecification
  {
    return MrSpecification::loadByOrDie($this->SpecificationID);
  }

  public function setSpecificationID(int $value): void
  {
    $this->SpecificationID = $value;
  }
}