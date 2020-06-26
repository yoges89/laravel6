<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Post extends Model {
  protected $fillable = ['title', 'slug', 'body'];

  /**
   *
   */
  public function getRouteKeyName() {
    return 'slug';
  }

  /**
   *
   */
  public function author() {
    return $this->belongsTo(User::class, 'user_id');
  }

  /**
   *
   */
  public function tags() {
    return $this->belongsToMany(Tag::class);
  }

}
