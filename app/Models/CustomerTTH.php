<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTTH extends Model
{
    use HasFactory;

    protected $table = 'customer_tth';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $fillable = [
        'TTHNo',
        'SalesID',
        'TTOTTPNo',
        'CustID',
        'DocDate',
        'Received',
        'ReceivedDate',
        'FailedReason'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustID', 'CustID');
    }

    public function details()
    {
        return $this->hasMany(CustomerTTHDetail::class, 'TTHNo', 'TTHNo');
    }
}
