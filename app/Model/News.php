<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class News extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title' , 'description','date', 'image' , "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getArSubDesAttribute()
  {
      // return substr(strip_tags($this->description), 0 ,  120 );
      return substr( strip_tags(html_entity_decode($this->description)) ,50);
      return  substr( strip_tags(html_entity_decode($this->description)  ) , 0 ,  50 );
  }
}
