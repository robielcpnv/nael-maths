<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function operation()
    {
        return $this->belongsTo(Operation::class);
    }
    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}