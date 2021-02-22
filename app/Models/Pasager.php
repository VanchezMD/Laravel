<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasager extends Model
{
    use HasFactory;
    protected $fillable = ['nume','prenume','destinatia'];
    public function getFullName()
    {
        return $this->nume." ".$this->prenume;
    }
}
