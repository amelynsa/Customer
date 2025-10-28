@extends('layouts.app')

@section('content')
<h2>Edit TTH</h2>
<form action="{{ route('customer-tth.update', $customerTTH->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Customer:</label><br>
    <select name="customer_id" required>
        @foreach($customers as $c)
            <option value="{{ $c->id }}" {{ $c->id == $customerTTH->customer_id ? 'selected' : '' }}>{{ $c->name }}</option>
        @endforeach
    </select><br>
    <label>Event Name:</label><br>
    <input type="text" name="event_name" value="{{ $customerTTH->event_name }}" required><br><br>
    <button type="submit">Update</button>
</form>
@endsection
