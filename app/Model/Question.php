<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'question' , 'answer', "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
