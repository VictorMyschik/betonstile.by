<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MrPrice extends Model
{
  protected $table = 'mr_price';
  protected $fillable = [
    'Name',
    'Value',
    'Kind',
    'IsVisible',
    'WriteDate'
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
    return $this->value;
  }

  public function setValue(string $value)
  {
    return $this->value = $value;
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
  public static function GetZaborList(): array
  {
    $list = DB::table(static::$mr_table)->where('kind', self::ZABOR)->get(['id'])->toArray();
    $list_out = array();
    foreach($list as $row) {
      $list_out[] = MrPrice::loadBy($row->id);
    }

    return $list_out;
  }
}