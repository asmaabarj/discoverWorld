<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','created_at', 'destination_id', 'user_id'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
    public function UserDestination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

   

  
}
