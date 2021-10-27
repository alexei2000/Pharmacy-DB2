<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable= ['laboratory_id', "name", "principal_component", "monodrug", "content", "unit", "therapeutic_action"];
    

    public function laboratories(){
        return $this->hasOne(Laboratory::class);
    }
}
