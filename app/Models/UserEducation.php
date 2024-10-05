<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'degree',
        'subject',
        'institute_name',
        'passing_year',
        'result',
        'result_scale'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
