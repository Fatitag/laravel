<?php

namespace App\Models;

use App\Models\clients;
use App\Models\LigneCommandeVente;
use App\Models\Produit;
use App\Models\CommandeVente;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeVente extends Model
{

    protected $fillable = ['id','commandes' ,'dateCom','client_id'];

    use HasFactory;

    public function clients() {

        return $this->belongsTo(clients::class );

    }

    public function LigneCommendeAchat() {
        return $this->hasOne(LigneCommendeAchat::class);
    }

    public function Produit(){
        return $this->hasMany(Produit::class);
    }
}
