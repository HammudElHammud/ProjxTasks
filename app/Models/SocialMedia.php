<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMedia extends Model
{
    use HasFactory ,SoftDeletes;
    protected $guarded = [];

    protected $appends = ['imageUrl'];

    public CONST BASE_LOCATION = 'socialMedia';

    /**
     * Convert Image File Location To URL
     *
     * @return string
     */
    public function getImageUrlAttribute(): string
    {
        if($this->icon)
        {
            return url($this->icon);
        }

        return 'https://picsum.photos/32/32';
    }
}
