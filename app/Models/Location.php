<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}

