<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel CRUD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Laravel CRUD TTH + Customer</h1>
    <nav class="mb-3">
        <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm">Customers</a>
        <a href="{{ route('customer-tth.index') }}" class="btn btn-success btn-sm">Customer TTH</a>
    </nav>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @yield('content')
</div>
</body>
</html>
