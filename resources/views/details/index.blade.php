@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-2">
    <h2>TTH Detail</h2>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>TTHNo</th>
            <th>TTOTTPNo</th>
            <th>Jenis</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($details as $d)
        <tr>
            <td>{{ $d->TTHNo }}</td>
            <td>{{ $d->TTOTTPNo }}</td>
            <td>{{ $d->Jenis }}</td>
            <td>{{ $d->Qty }}</td>
            <td>{{ $d->Unit }}</td>
            <td>
                <a href="{{ route('customer-tth.show', $tth->id) }}" class="btn btn-info btn-sm">Detail</a>
                <form action="{{ route('customer-tth-detail.destroy',$d->ID) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
