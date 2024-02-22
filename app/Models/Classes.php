<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classes extends Model
{
    use HasFactory;
    use HasUlids;

    public $table = "classes";

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'class',
        'subclass',
        'status',
    ];

    public function parent(): HasOne
    {
        return $this->hasOne(Parents::class);
    }
}
