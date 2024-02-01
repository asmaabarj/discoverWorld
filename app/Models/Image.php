<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'aventure_id'];

    public function aventure()
    {
        return $this->belongsTo(Aventure::class, 'aventure_id');
    }

    public function aventures()
    {
        return $this->belongsTo(Aventure::class);
    }
}


