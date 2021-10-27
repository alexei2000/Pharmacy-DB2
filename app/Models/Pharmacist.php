<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function degrees()
    {
        return $this->hasMany(PharmacistUniversityDegree::class, 'pharmacist_id', 'employee_id');
    }
}
