<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $guarded = ['id'];
     protected $table = 'pertemuans';

   public function  user()
    {
      return $this->BelongsTo(User::class);
    }
}
