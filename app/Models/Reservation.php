<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function client(){
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

    public function bien_immobilier(){
        return $this->belongsTo(BienImmobilier::class);
    }
}