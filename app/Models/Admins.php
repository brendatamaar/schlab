<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Admins extends Model
{
    use HasUlids;

    public $table = "admins";

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->morphOne('App\Models\Users', 'profile');
    }
}
