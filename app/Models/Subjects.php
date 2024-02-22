<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Subjects extends Model
{
    use HasFactory;
    use HasUlids;

    public $table = "subjects";

    protected $primaryKey = 'id';
}
