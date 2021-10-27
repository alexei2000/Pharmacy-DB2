<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacistUniversityDegree extends Model
{
    use HasFactory;

    protected $fillable = ['university', 'date_of_graduation'];
}
