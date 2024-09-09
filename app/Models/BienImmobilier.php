<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienImmobilier extends Model
{
    use HasFactory;


    public function localite(){
        return $this->belongsTo(Localite::class);
    }


    public function type_bien(){
        return $this->belongsTo(TypeBien::class);
    }


    public function annonces(){
        return $this->hasMany(Annonce::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }


    public function contrats(){
        return $this->hasMany(Contrat::class);
    }


    public function parcelles(){
        return $this->hasMany(Parcelle::class);
    }

    public function appartements(){
        return $this->hasMany(Appartement::class);
    }


    public function agent(){
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }

    public function proprietaire(){
        return $this->belongsTo(User::class, 'proprietaire_id', 'id');
    }

}