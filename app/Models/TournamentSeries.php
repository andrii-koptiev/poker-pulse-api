<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentSeries extends Model
{
    use HasFactory;

    public function tournaments() {
        return $this->hasMany(Tournament::class);
    }
}
