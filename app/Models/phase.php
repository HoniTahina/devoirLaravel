<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\project;
class phase extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'duree',
        'priorite',
        'projects_id',
       
    ];
    public function project(){
        return $this->belongsTo(project::class);
    }
}
