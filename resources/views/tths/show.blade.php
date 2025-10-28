@extends('layouts.app')

@section('content')
<h3>Detail TTH: {{ $customerTTH->TTHNo }}</h3>
<p><strong>Customer:</strong> {{ $customerTTH->customer->Name }}</p>
<p><strong>SalesID:</strong> {{ $customerTTH->SalesID }}</p>

<h4>Hadiah</h4>
<table class="table table-bordered">
<tr>
    <th>ID</th><th>Jenis</th><th>Qty</th><th>Unit</th><th>Aksi</th>
</tr>
@foreach($details as $d)
<tr>
    <td>{{ $d->ID }}</td>
    <td>{{ $d->Jenis }}</td>
    <td>{{ $d->Qty }}</td>
    <td>{{ $d->Unit }}</td>
    <td>
        <a href="{{ route('customer-tth-detail.edit',$d->ID) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('customer-tth-detail.destroy',$d->ID) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>
<a href="{{ route('customer-tth.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
