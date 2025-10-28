@extends('layouts.app')
@section('content')
<h2>Edit TTH Detail</h2>
<form action="{{ route('customer-tth-detail.update', $detail->ID) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-2">
        <label>TTHNo</label>
        <input type="text" name="TTHNo" class="form-control" value="{{ $detail->TTHNo }}" readonly>
    </div>
    <div class="mb-2">
        <label>TTOTTPNo</label>
        <input type="text" name="TTOTTPNo" class="form-control" value="{{ $detail->TTOTTPNo }}" readonly>
    </div>
    <div class="mb-2">
        <label>Jenis</label>
        <select name="Jenis" class="form-control" required>
            <option value="Emas" @if($detail->Jenis=='Emas') selected @endif>Emas</option>
            <option value="Voucher" @if($detail->Jenis=='Voucher') selected @endif>Voucher</option>
        </select>
    </div>
    <div class="mb-2">
        <label>Qty</label>
        <input type="number" name="Qty" class="form-control" value="{{ $detail->Qty }}" required>
    </div>
    <div class="mb-2">
        <label>Unit</label>
        <input type="text" class="form-control" value="{{ $detail->Unit }}" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
