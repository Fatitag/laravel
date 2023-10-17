<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = ['id','nomprenom', 'email',  'adresse', 'ville'  ];
    use HasFactory;
    public function CommandeVente () {
        return $this->hasMany(CommandeVente::class);
    }


}

