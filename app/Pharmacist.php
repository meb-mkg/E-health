<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
	protected $fillable = [
        'username', 'email', 'password', 'phone', 'address', 'department_id',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function department()
   {
   	return $this->belongsTo(Department::class);
   }

   public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
