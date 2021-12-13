<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MrFaq extends Model
{
  protected $table = 'mr_faq';
  protected $fillable = [
    'Query',
    'Response',
  ];

  public function getQuery(): string
  {
    return $this->Query;
  }

  public function setQuery(string $value): string
  {
    return $this->Query = $value;
  }

  public function getResponse(): string
  {
    return $this->Response;
  }

  public function setResponse(string $value): string
  {
    return $this->Response = $value;
  }
}