<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomGallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function room()
    {
        return $this->belongsTo(Room::class, 'rooms_id', 'id');
    }
}