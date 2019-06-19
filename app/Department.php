<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'description'];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }

    public function nurses()
    {
    	return $this->hasMany(Nurse::class);
    }
    public function pharmacists()
    {
    	return $this->hasMany(Pharmacist::class);
    }
    public function labaratorists()
    {
    	return $this->hasMany(Labaratorist::class);
    }
}
