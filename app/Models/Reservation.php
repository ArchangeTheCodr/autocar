<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperReservation
 */
class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function items(){
        return $this->hasMany(ReservationItem::class);
    }
}
