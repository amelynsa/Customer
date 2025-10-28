<?php
namespace App\Http\Controllers;
use App\Models\CustomerTTH;
use App\Models\Customer;
use App\Models\CustomerTTHDetail;
use Illuminate\Http\Request;

class CustomerTTHController extends Controller {
    public function index() {
        $tths = CustomerTTH::with('customer')->get();
        return view('tths.index', compact('tths'));
    }

    public function create() {
        $customers = Customer::all();
        return view('tths.create', compact('customers'));
    }

    public function store(Request $request) {
        $request->validate([
            'TTHNo'=>'required|unique:CustomerTTH,TTHNo',
            'CustID'=>'required|exists:Customer,CustID',
            'SalesID'=>'required',
            'TTOTTPNo'=>'required',
            'DocDate'=>'required',
            'Received'=>'required'
        ]);

        $tth = CustomerTTH::create($request->all());

        // Tambah hadiah
        if($request->has('hadiah')){
            foreach($request->hadiah as $i => $h){
                CustomerTTHDetail::create([
                    'TTHNo'=>$request->TTHNo,
                    'TTOTTPNo'=>$request->ttottpno[$i],
                    'Jenis'=>$h,
                    'Qty'=>$request->qty[$i],
                    'Unit'=>$h=='Emas'?'Buah':'Lembar'
                ]);
            }
        }

        return redirect()->route('customer-tth.index')->with('success','TTH added');
    }

    public function show(CustomerTTH $customer_tth)
{
    // $customer_tth sudah otomatis diambil dari DB
    return view('customer_tth.show', compact('customer_tth'));
}

    public function destroy(CustomerTTH $customerTTH) {
        $customerTTH->delete();
        return redirect()->route('customer-tth.index')->with('success','TTH deleted');
    }
}
