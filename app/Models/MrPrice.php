<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Myschik\ORM\ORM;

class MrPrice extends ORM
{
  protected $table = 'mr_price';
  protected $fillable = [
    'Name',
    'Value',
    'Kind',
    'IsVisible',
    //'WriteDate'
  ];

  const ZABOR = 1;

  public function getName(): string
  {
    return $this->Name;
  }

  public function setName(string $value)
  {
    return $this->Name = $value;
  }

  public function getValue(): string
  {
    return $this->Value;
  }

  public function setValue(string $value)
  {
    return $this->Value = $value;
  }

  public function isVisible(): bool
  {
    return $this->IsVisible;
  }

  public function setIsVisible(bool $value)
  {
    return $this->IsVisible = $value;
  }

  /**
   * @return MrPrice[]
   */
  public static function getZaborList(): array
  {
    $list = DB::table(self::getTableName())->where('Kind', self::ZABOR)->get(['id'])->toArray();
    $list_out = array();
    foreach($list as $row) {
      $list_out[] = MrPrice::loadBy($row->id);
    }

    return $list_out;
  }
}