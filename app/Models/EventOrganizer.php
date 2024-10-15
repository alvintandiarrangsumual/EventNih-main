<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventOrganizer extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_id', 'id');
    }
}
