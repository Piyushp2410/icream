<?php

namespace App\Models\iceream;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class IcereamContactModel extends Model
{
    use HasFactory,notifiable;
    protected $fillable=["name","email","subject","message"];
    protected $table="contacts";
}
