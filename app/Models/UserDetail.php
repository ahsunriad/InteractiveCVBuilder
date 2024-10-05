<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class User extends Authenticatable {
//     public function userDetail() {
//         return $this->hasOne(UserDetail::class, 'user_id');
//     }
// }
class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'linkedin',
        'github',
        'profile_photo',
        'summary',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
