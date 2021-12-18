<?php

namespace App\Helpers\System;

use Illuminate\Support\Facades\Cache;

class MrCacheHelper extends Cache
{
  /**
   * Load objects array
   *
   * @param string $key
   * @param string $class_name
   * @param callable $ids
   * @return array
   */
  public static function GetCachedObjectList(string $key, string $class_name, callable $ids): array
  {
    $ids = Cache::rememberForever($key, function () use ($ids) {
      return $ids();
    });

    $out = array();
    foreach ($ids as $id)
    {
      $object_name = $class_name;

      /** @var object $object_name */
      $out[] = $object_name::loadByOrDie($id);
    }

    return $out;
  }

  /**
   * @param string $key
   * @param $value
   */
  public static function SetCachedData(string $key, $value)
  {
    Cache::rememberForever($key, function () use ($value) {
      return $value;
    });
  }

  /**
   * получить кэшированные данные
   *
   * @param string $key
   * @param callable $object
   * @return mixed
   */
  public static function GetCachedData(string $key, callable $object)
  {
    return Cache::rememberForever($key, function () use ($object) {
      return $object();
    });
  }
}