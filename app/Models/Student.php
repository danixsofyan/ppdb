<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function Job()
    {
        return $this->belongsTo(Job::class);
    }

    public function Registration()
    {
        return $this->hasMany(Registration::class);
    }
}
