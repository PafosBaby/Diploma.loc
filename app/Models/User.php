<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable , HasRoles;

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

    public function getRoles()
    {
        $roleNames=[];
        foreach($this->roles as $role){
            $roleNames[] =$role->name;
        }

        return implode(', ', $roleNames);
    }

    public function getPermissions()
    {
        $tmpPerms =[];
        if($this->getDirectPermissions()->count()){
            foreach($this->getDirectPermissions() as $perm){
                $tmpPerms[] = $perm->name;
            };
        }else{
            foreach($this->getAllPermissions() as $perm){
                $tmpPerms[] = $perm->name;
            };
        }
        
        return implode(', ', $tmpPerms);
    }

}
