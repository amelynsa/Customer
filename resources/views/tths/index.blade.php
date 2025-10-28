@extends('layouts.app')

@section('content')
<a href="{{ route('customer-tth.create') }}" class="btn btn-success mb-2">Tambah TTH</a>
<table class="table table-bordered">
    <tr>
        <th>TTHNo</th>
        <th>Customer</th>
        <th>SalesID</th>
        <th>Nominal</th>
        <th>Aksi</th>
    </tr>
    @foreach($tths as $t)
    <tr>
        <td>{{ $t->TTHNo }}</td>
        <td>{{ optional($t->customer)->Name ?? '-' }}</td>
        <td>{{ $t->SalesID }}</td>
        <td>{{ $t->Nominal ?? '-' }}</td>
        <td>
           <a href="{{ route('customer-tth.show', $t->ID) }}" class="btn btn-info btn-sm">Detail</a>
            <form action="{{ route('customer-tth.destroy',$t->ID) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
