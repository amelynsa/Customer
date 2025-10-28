<?php
namespace App\Http\Controllers;
use App\Models\CustomerTTHDetail;
use Illuminate\Http\Request;

class CustomerTTHDetailController extends Controller {
    public function edit($id) {
        $detail = CustomerTTHDetail::find($id);
        return view('tthdetails.edit', compact('detail'));
    }

    public function update(Request $request, $id) {
        $detail = CustomerTTHDetail::find($id);
        $request->validate([
            'Jenis'=>'required',
            'Qty'=>'required|integer'
        ]);
        $detail->update($request->all());
        return redirect()->route('customer-tth.show',$detail->TTHNo)->with('success','Detail updated');
    }

    public function destroy($id) {
        $detail = CustomerTTHDetail::find($id);
        $detail->delete();
        return redirect()->back()->with('success','Detail deleted');
    }
}
