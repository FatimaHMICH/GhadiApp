<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnounceDriver extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','address','contact_phone','vehicule_type','notes','image'];
}
