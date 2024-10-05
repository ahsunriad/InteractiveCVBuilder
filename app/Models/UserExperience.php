<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    use HasFactory;protected $fillable = [
        'user_id',
        'job_title',
        'company_name',
        'company_location',
        'start_date',
        'end_date',
        'experience_summery',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
