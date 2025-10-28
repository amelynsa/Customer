@extends('layouts.app')

@section('content')
<h3>Tambah TTH</h3>
<form action="{{ route('customer-tth.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>TTHNo</label>
        <input type="text" name="TTHNo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Customer</label>
        <select name="CustID" class="form-select" required>
            <option value="">Pilih Customer</option>
            @foreach($customers as $c)
            <option value="{{ $c->CustID }}">{{ $c->Name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>SalesID</label>
        <input type="text" name="SalesID" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>TTOTTPNo</label>
        <input type="text" name="TTOTTPNo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>DocDate</label>
        <input type="date" name="DocDate" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Received</label>
        <select name="Received" class="form-select" required>
            <option value="0">Belum</option>
            <option value="1">Sudah</option>
        </select>
    </div>

    <hr>
    <h5>Hadiah</h5>
    <table class="table table-bordered" id="hadiahTable">
        <tr>
            <th>Jenis</th>
            <th>Qty</th>
            <th>TTOTTPNo</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>
                <select name="hadiah[]" class="form-select" required>
                    <option value="Emas">Emas</option>
                    <option value="Voucher">Voucher</option>
                </select>
            </td>
            <td><input type="number" name="qty[]" class="form-control" required></td>
            <td><input type="text" name="ttottpno[]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger btn-sm removeRow">Hapus</button></td>
        </tr>
    </table>
    <button type="button" class="btn btn-primary mb-3" id="addHadiah">Tambah Hadiah</button>
    <br>
    <button type="submit" class="btn btn-success">Simpan TTH</button>
</form>

<script>
document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('addHadiah').addEventListener('click', function(){
        let table = document.getElementById('hadiahTable');
        let row = table.insertRow();
        row.innerHTML = `
            <td>
                <select name="hadiah[]" class="form-select" required>
                    <option value="Emas">Emas</option>
                    <option value="Voucher">Voucher</option>
                </select>
            </td>
            <td><input type="number" name="qty[]" class="form-control" required></td>
            <td><input type="text" name="ttottpno[]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger btn-sm removeRow">Hapus</button></td>
        `;
    });

    document.getElementById('hadiahTable').addEventListener('click', function(e){
        if(e.target && e.target.classList.contains('removeRow')){
            e.target.closest('tr').remove();
        }
    });
});
</script>
@endsection
