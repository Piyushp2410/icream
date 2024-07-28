<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class GalleryModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=['category_id','catname','pgalleryimg'];
    protected $table="product_gallery";

    public function  Category(){

        return $this->belongsTo(Category::class);
        
    }
}
