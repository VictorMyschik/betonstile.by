<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MrArticle extends Model
{
  protected $table = 'mr_article';
  protected $fillable = [
    'UserID',
    'Title',
    'Text',
    'HashTag',
    'DateCreate',
    'DateUpdate',
    'Rating',
  ];

  public function getUser(): User
  {
    return User::find($this->UserID);
  }

  public function setUser(int $value): void
  {
    $this->UserID = $value;
  }

  public function getTitle(): string
  {
    return $this->Title;
  }

  public function setTitle(string $value)
  {
    $this->Title = $value;
  }

  public function getText(): string
  {
    return $this->Text;
  }

  public function setText(string $value)
  {
    $this->Text = $value;
  }

  public function getHashtag(): ?string
  {
    return $this->Hashtag;
  }

  public function getRating(): ?int
  {
    return $this->Rating;
  }

  public function setRating(int $value)
  {
    $this->Rating = $value;
  }
}
