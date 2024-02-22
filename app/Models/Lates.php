<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Lates extends Model
{
    use HasFactory;
    use HasUlids;

    public $table = "lates";

    protected $primaryKey = 'id';
}
