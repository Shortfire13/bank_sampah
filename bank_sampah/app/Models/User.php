<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends  Authenticatable{

    use HasFactory, Notifiable;
        /**
     * The attributes that are mass assignable.
     *
     * 
     * @var array
     */
    protected $table = 'user';
    protected $fillable = [
        'nama_user',
        'username',
        'email',
        'no_hp',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jual_sampah(){
        return $this->hasMany(jual_sampah::class);
    }

}


// class User extends Model
// {
   
//     protected $table ='user';

// }
