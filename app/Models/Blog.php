<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    public function getBlogCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }
}
