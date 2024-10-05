<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function userDetail()
    {
        return $this->hasOne(UserDetail::class, 'user_id');
    }
    // Method to create the user along with user details
    public static function createWithDetails($data)
    {
        // Create the user first
        $user = self::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']), // Hash the password
        ]);

        // Create the user details
        $user->userDetail()->create([
            'name' => $data['name'],
            'phone' => $data['phone'],
        ]);

        return $user;
    }
    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class, 'user_id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'user_id');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class, 'user_id');
    }

    public function languages()
    {
        return $this->hasMany(Language::class, 'user_id');
    }
}
