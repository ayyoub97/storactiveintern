<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absences extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'date_du',
        'date_au',
        'cause',
    ];
    public function calcule_absence(){
        $nombre_jours = abs($date_au - $date_du);
    }
}
