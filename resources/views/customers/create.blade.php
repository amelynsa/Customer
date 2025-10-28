@extends('layouts.app')

@section('content')
<h3>Tambah Customer</h3>
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>CustID</label>
        <input type="text" name="CustID" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Customer</label>
        <input type="text" name="Name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="Address" class="form-control">
    </div>
    <div class="mb-3">
        <label>Branch Code</label>
        <input type="text" name="BranchCode" class="form-control">
    </div>
    <div class="mb-3">
        <label>Phone No</label>
        <input type="text" name="PhoneNo" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan Customer</button>
</form>
@endsection
