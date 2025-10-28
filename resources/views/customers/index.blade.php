@extends('layouts.app')

@section('content')
<a href="{{ route('customers.create') }}" class="btn btn-success mb-2">Tambah Customer</a>
<table class="table table-bordered">
    <tr>
        <th>CustID</th>
        <th>Name</th>
        <th>Address</th>
        <th>BranchCode</th>
        <th>PhoneNo</th>
        <th>Aksi</th>
    </tr>
    @foreach($customers as $c)
    <tr>
        <td>{{ $c->CustID }}</td>
        <td>{{ $c->Name }}</td>
        <td>{{ $c->Address }}</td>
        <td>{{ $c->BranchCode }}</td>
        <td>{{ $c->PhoneNo }}</td>
        <td>
            <form action="{{ route('customers.destroy',$c->CustID) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
