<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Category extends Model
{
    use HasFactory,Notifiable;

    protected $fillable=['category_name'];
    protected $table="categories";
}
