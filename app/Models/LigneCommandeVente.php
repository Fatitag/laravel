<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommandeVente extends Model
{
    protected $fillable = ['commandeVente_id','produit_id','qt'];
    use HasFactory;
    public function CommandeVente() {
        return $this->BelongsTo(CommandeVente::class);
    }

    public function Produit() {
        return $this->BelongsTo(Produit::class);
}

}
