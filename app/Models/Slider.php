<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory ,SoftDeletes;

    protected $guarded = [];

    protected $appends = ['imageUrl'];

    public CONST BASE_LOCATION = 'sliders';

    /**
     * Convert Image File Location To URL
     *
     * @return string
     */
    public function getImageUrlAttribute(): string
    {
        if($this->image)
        {
            return url($this->image);
        }

        return 'https://picsum.photos/1920/600';
    }

}
