<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Slider extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=["slide_name","slide_btn_name","slide_img"];
    protected $table="sliders";
}
