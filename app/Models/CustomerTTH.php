<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CustomerTTH extends Model {
    protected $table = 'customer_tth';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;

    public function getRouteKeyName()
{
    return 'ID';  // karena primary key bukan 'id'
}


    public function customer() {
        return $this->belongsTo(Customer::class, 'CustID', 'CustID');
    }

    public function details() {
        return $this->hasMany(CustomerTTHDetail::class, 'TTHNo', 'TTHNo');
    }
}
