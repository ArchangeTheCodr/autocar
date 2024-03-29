<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperImages
 */
class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        "image"
    ];

    public function galerie(){
        return $this->belongsTo(Galeries::class);
    }
}
