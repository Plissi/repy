<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tache',
        'heure',
        'bank_id',
    ];

    public function bank()
    {
        return $this -> belongsTo(Bank::class);
    }
}
