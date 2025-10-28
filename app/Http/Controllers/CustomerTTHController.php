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
            'TTHNo' => 'required|unique:customer_tth,TTHNo',
            'CustID' => 'required|exists:customer,CustID',
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

public function show($tthno)
{
    $tth = CustomerTTH::where('TTHNo', $tthno)
        ->with(['details', 'customer'])
        ->firstOrFail();

    $details = $tth->details; // ambil data detail-nya

    return view('tths.show', compact('tth', 'details'));
}


public function destroy(CustomerTTH $customerTTH)
{
    $customerTTH->delete();
    return redirect()->route('customer-tth.index')->with('success', 'TTH deleted');
}

}
