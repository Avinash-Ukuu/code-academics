<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use App\Models\StudentCourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $guarded  =   ['id'];
    protected $table    =   'students';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->unique_id = self::generateUniqueId();
        });
    }

    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value),
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value),
        );
    }

    protected function fatherName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value),
        );
    }

    public static function generateUniqueId()
    {
        $yearSuffix = date('y');
        $prefix = 'SBCA-' . $yearSuffix;

        $latestStudent = self::where('unique_id', 'like', $prefix . '%')
            ->latest('id')
            ->first();

        if ($latestStudent && preg_match('/^SBCA-' . $yearSuffix . '(\d{4})$/', $latestStudent->unique_id, $matches)) {
            $latestNumber = (int) $matches[1];
        } else {
            $latestNumber = 0;
        }

        $newNumber = str_pad($latestNumber + 1, 4, '0', STR_PAD_LEFT);

        return $prefix . $newNumber;
    }

    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }

    public function studentCourse(): HasOne
    {
        return $this->hasOne(StudentCourse::class);
    }

    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hasPendingInstallment(): bool
    {
        $studentCourse = $this->studentCourse;
        return $studentCourse && !$studentCourse->isFeesFullyPaid();
    }

    public function pendingAmount(): float
    {
        $studentCourse = $this->studentCourse;
        return $studentCourse ? $studentCourse->pendingAmount() : 0;
    }
}
