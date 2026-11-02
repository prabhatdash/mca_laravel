<html>

</head>
    <title>Laravel 10 CRUD Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
        </body>
        <h2>Edit Member</h2>
        <form action="/members/{{ $member->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </body>
</html>