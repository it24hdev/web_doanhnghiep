<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'name',
        'link_target',
        'image', 'user_id','position','status',
        'subtitle','description'
    ];

    const IMAGE = 'no-images.jpg';
    const ACTIVE = 1;
    const DISABLE = 0;


    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }
}
