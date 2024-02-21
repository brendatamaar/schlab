<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Students extends Model
{
    use HasFactory;
    use HasUlids;

    public $table = "students";

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->morphOne('App\Models\Users', 'profile');
    }

    public function class(): HasOne
    {
        return $this->hasOne(Classes::class);
    }

    public function parent(): HasOne
    {
        return $this->hasOne(Parents::class);
    }
}
