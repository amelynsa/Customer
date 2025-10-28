<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    protected $table = 'customer';
    protected $primaryKey = 'CustID';
    public $incrementing = false;
    public $timestamps = false;

    public function tths() {
        return $this->hasMany(CustomerTTH::class, 'CustID', 'CustID');
    }
}
