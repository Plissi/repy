<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'monetique',
        'paywallet',
        'contentieux',
        'integration-flux'
    ];

    public function reports()
    {
        return $this -> hasMany(eod_report::class);
    }
    
    public function norm()
    {
        return $this -> hasOne(Norm::class);
    }
    
    public function flux()
    {
        return $this -> hasMany(Flux::class);
    }

    use HasFactory;
}
