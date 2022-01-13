<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function time(){
        return $this->belongsTo(Location::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function transfer(){
        return $this->belongsTo(Transfer::class,'transfer_id');
    }
    public function fromLocation(){
        return $this->belongsTo(Location::class,'from_location_id');
    }
    public function toLocation(){
        return $this->belongsTo(Location::class,'to_location_id');
    }
}
