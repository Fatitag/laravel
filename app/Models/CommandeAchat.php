<?php

namespace App\Models;
use App\Models\Fournisseur;
use App\Models\LigneCommendeAchat;
use App\Models\Produit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeAchat extends Model
{

    protected $fillable = ['dateCom','fournisseur_id'];

    use HasFactory;

    public function Fournisseur() {

        return $this->belongsTo(Fournisseur::class);

    }

    public function LigneCommendeAchat() {
        return $this->hasOne(LigneCommendeAchat::class);
    }

    public function Produit(){
        return $this->belongsToMany(Produit::class);
    }
}
