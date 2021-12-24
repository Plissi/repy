<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eod_report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date',
        'bank_id',
    ];
    
    public function integrations()
    {
        return $this -> hasMany(Integration::class, 'eod_reports_id');
    }
    
    public function pre_tfj()
    {
        return $this -> hasMany(PreTFJ::class, 'eod_reports_id');
    }
    
    public function synthesis()
    {
        return $this -> hasOne(syntheses_tfj::class, 'eod_reports_id');
    }

    public function bank()
    {
        return $this -> belongsTo(Bank::class);
    }

    use HasFactory;
}
