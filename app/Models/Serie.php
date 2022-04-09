<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;


    //protected $table = 'my_series';

     /**
    * Get the user that authored the serie.
    */
   public function author()
   {
       return $this->belongsTo(User::class,'author_id');
   }
   public function comment() 
   {
   return $this->belongsTo(Comment::class,'serie_id');

   }

}
