<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopParticipant extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'workshop_term_id',
    ];
}
