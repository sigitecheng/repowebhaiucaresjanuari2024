<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    //     ######################################### FILLABLE ###########################
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];


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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function fe_adminberanda()
    {
        return $this->hasMany(Fe_AdminBeranda::class);
    }

    public function be_datakontraktor()
    {
        return $this->hasMany(Be_datakontraktor::class);
    }

    public function be_datarumahmakan()
    {
        return $this->hasMany(Be_datarumahmakan::class);
    }

    public function be_datarumahsakit()
    {
        return $this->hasMany(Be_datarumahsakit::class);
    }

    public function be_instansipendidikan()
    {
        return $this->hasMany(Be_datainstansipendidikan::class);
    }



    // public function adminitembrangdanhargas()
    // {
    //     return $this->hasMany(adminitembarangdanharga::class);
    // }
}
