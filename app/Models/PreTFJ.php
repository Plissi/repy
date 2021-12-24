<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreTFJ extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pre_tfj';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tache',
        'debut',
        'fin',
        'observation',
        'eod_reports_id'
    ];

    public function report()
    {
        return $this -> belongsTo(eod_report::class, 'eod_reports_id');
    }

    use HasFactory;
}
