<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTest extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'kinestetik', 'visual', 'auditori'];
}
