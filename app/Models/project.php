<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\phase;
class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'description',
        'priorite'
    ];
    public function phases(){
        return $this->hasMany(phase::class);
    }
}
