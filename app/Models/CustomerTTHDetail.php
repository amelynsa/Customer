<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTTHDetail extends Model
{
    protected $table = 'customer_tth_details'; 
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'TTHNo',
        'TTOTTPNo',
        'Jenis',
        'Qty',
        'Unit'
    ];

    public function tth()
    {
        return $this->belongsTo(CustomerTTH::class, 'TTHNo', 'TTHNo');
    }
}
