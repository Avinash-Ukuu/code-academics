<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enquiry extends Model
{
    use HasFactory;

    protected $guarded      =       ['id'];
    protected $table        =       'enquiries';

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
