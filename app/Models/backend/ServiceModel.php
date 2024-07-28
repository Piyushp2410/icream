<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ServiceModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = ["service_name","service_img","service_des"];
    protected $table ="services";
    
}
