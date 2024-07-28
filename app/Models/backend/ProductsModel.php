<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductsModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "pname","pprice","pimg","pdes"
    ];
    protected $table="products";
}
