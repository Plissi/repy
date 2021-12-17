<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flux extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'bank_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'flux';

    public function integrations()
    {
        return $this -> hasMany(Integration::class);
    }

    public function bank()
    {
        return $this -> belongsTo(Bank::class);
    }

    use HasFactory;
}
