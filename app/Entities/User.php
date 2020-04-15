<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{

    use Notifiable;
    use SoftDeletes;
    
    public $timestamps = true;
    protected $table = 'user';

    protected $fillable = ['cpf', 'nome', 'phone','birth','gender','notes','email','password','status','permission'];
    protected $hidden = ['password', 'remember_token'];
    
}
