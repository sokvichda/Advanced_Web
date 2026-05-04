<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'class_model_id'];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class);
    }
}
