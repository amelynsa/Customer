<head>
    <meta charset="utf-8">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-3">Welcome Laravel</h1>
    <nav class="mb-3">
        <a class="btn btn-primary btn-sm" href="{{ route('customers.index') }}">Customers</a>
        <a class="btn btn-secondary btn-sm" href="{{ route('customer-tth.index') }}">Customer TTH</a>
    </nav>
    <hr>
    @yield('content')
</div>
</body>
