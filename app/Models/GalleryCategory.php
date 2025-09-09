<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryCategory extends Model
{
    use HasFactory;

    protected $table    =    'gallery_categories';
    protected $guarded  =    ['id'];

    public function galleries():HasMany
    {
        return $this->hasMany(Gallery::class, 'gallery_category_id');
    }
}
