<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CustomerTTHDetail extends Model {
    protected $table = 'customer_tth_detail';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;

    public function tth() {
        return $this->belongsTo(CustomerTTH::class, 'TTHNo', 'TTHNo');
    }
}
