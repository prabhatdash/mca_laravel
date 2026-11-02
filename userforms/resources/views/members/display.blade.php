<html>

<head>
    <title>Laravel 10 CRUD Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 

<body>

@foreach ($members as $member)
    <div class="container mt-5">
        <h2>Member Details</h2>
        <p><strong>Name:</strong> {{ $member->name }}</p>
        <p><strong>Email:</strong> {{ $member->email }}</p>
    </div>
@endforeach

</body>