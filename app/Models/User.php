<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
        'api_token', // Hide token from serialization
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

    /**
     * Generate a new API token for the user.
     *
     * @return string
     */
    public function generateToken()
    {
        $token = base64_encode(hash_hmac('sha256', $this->id . now(), config('app.key')));
        $this->api_token = $token;
        $this->save();

        return $token;
    }

    /**
     * Get all records with roles.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    static public function getRecord()
    {
        return User::select('users.*', 'role.name as role_name')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->orderBy('users.id', 'desc')
            ->get();
    }

    /**
     * Get a single user by ID.
     *
     * @param int $id
     * @return \App\Models\User|null
     */
    static public function getSingle($id)
    {
        return User::find($id);
    }
}
