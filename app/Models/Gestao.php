<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestao extends Model
{
    use HasFactory;
    protected $table = 'gestaos';
    public $timestamps= false;
}
