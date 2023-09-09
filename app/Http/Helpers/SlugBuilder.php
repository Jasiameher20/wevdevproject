<?php

namespace App\Http\Helpers;



trait SlugBuilder{
    public function slugGenerator($req, $model)
    {
  //*SLUG GENERATE
  $oldSlugCount = $model::where('slug', 'LIKE' , '%' . str($req->title)->slug() . '%' )->count();
  if($oldSlugCount > 0){
      $oldSlugCount += 1;
      $slug = str($req->title)->slug() . '-' . $oldSlugCount;
  }else{
      $slug = str($req->title)->slug();
  }
  return $slug ;
    }
}