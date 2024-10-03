<?php

namespace App\Models;

use Illuminate\Datebase\Eloquent\Model;

class Visiteur extends Model
{
    // ON declare la table visiteur
    protected $table='visiteur';

    protected $primaryKey='id_visiteur';

    protected $timestamps=false;

}
