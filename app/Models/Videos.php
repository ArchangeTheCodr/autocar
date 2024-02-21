<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $fillable = [
        "video"
    ];

    public function galerie(){
        return $this->belongsTo(Galeries::class);
    }
}
