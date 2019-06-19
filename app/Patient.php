<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $fillable = [
        'username', 'email', 'password', 'phone', 'address', 'department_id','sex', 'birth_date', 'blood_group',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
