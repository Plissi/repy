<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{ 
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'flux_id',
        'mouvements',
        'eod_reports_id',
    ];

    public function report()
    {
        return $this -> belongsTo(eod_report::class, 'eod_reports_id');
    }

    public function flux()
    {
        return $this -> belongsTo(Flux::class);
    }

    use HasFactory;
}
