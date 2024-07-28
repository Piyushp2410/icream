<?php

namespace App\Models\iceream;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifialble;

class IcreamProductsModel extends Model
{
    use HasFactory,Notifiable;
    protected $table='products';
}
