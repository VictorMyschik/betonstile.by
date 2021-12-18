<?php

namespace App\Models;

use App\Models\Lego\Traits\Fields\MrDescriptionNullableFieldTrait;
use App\Models\Lego\Traits\Fields\MrIsActiveFieldTrait;
use App\Models\Lego\Traits\Fields\MrKindFieldTrait;
use App\Models\Lego\Traits\Fields\MrOrmDateTimeNullableFieldTrait;
use App\Models\Lego\Traits\Fields\MrWriteDateFieldTrait;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\ArrayShape;
use Myschik\ORM\ORM;

class MrPrice extends ORM
{
  use MrWriteDateFieldTrait;
  use MrOrmDateTimeNullableFieldTrait;
  use MrIsActiveFieldTrait;
  use MrDescriptionNullableFieldTrait;
  use MrKindFieldTrait;

  protected $table = 'mr_price';
  protected $fillable = [
    'Name',
    'Value',
    'Kind',
    'IsActive',
    'Description'
    //'WriteDate'
  ];

  const ZABOR = 1;

  #[ArrayShape([self::ZABOR => "string"])]
  public static function getKindList(): array
  {
    return [self::ZABOR => 'Заборы'];
  }

  public function getName(): string
  {
    return $this->Name;
  }

  public function setName(string $value): void
  {
    $this->Name = $value;
  }

  public function getValue(): ?string
  {
    return $this->Value;
  }

  public function setValue(?string $value): void
  {
    $this->Value = $value;
  }

  public function isActive(): bool
  {
    return $this->IsActive;
  }

  public function setIsActive(bool $value): void
  {
    $this->IsActive = $value;
  }

  /**
   * @return MrPrice[]
   */
  public static function getZaborList(): array
  {
    $list = DB::table(self::getTableName())->where('Kind', self::ZABOR)->get(['id'])->toArray();
    $listOut = array();
    foreach($list as $row) {
      $listOut[] = MrPrice::loadBy($row->id);
    }

    return $listOut;
  }
}