<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'language',
        'proficiency_level',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
