<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnounceClient extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','starting_address','arrival_address','contact_phone','luggage_type','notes','image'];
}
