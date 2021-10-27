<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    public function pharmacist()
    {
        return $this->hasOne(Pharmacist::class);
    }
    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
}
