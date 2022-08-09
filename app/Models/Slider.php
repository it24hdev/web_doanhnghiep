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
        'location',
        'link_target',
        'image', 'user_id','position','status',
        'subtitle','description'
    ];

    const IMAGE = 'no-images.jpg';
    const ACTIVE = 1;
    const DISABLE = 0;

    public static $arr_location = [
        1 => 'Banner',
        2 => 'Slider_Home',
        // 3 => 'Banner_3',
        // 4 => 'Banner_4',
        // 5 => 'Banner_5',
        // 6 => 'Banner_6',
        // 7 => 'Banner_7',
        // 8 => 'Banner_8',
        // 9 => 'Slider_Home',
    ];

    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }
}
