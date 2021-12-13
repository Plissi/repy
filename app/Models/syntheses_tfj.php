<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syntheses_tfj extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'debut',
        'fin',
        'duree',
        'evenements',
        'mouvements',
        'transfert_sda',
        'eod_reports_id'
    ];

    use HasFactory;
}
