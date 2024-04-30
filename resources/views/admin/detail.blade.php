<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data</title>
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- jquery --}}
</head>
<body>
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Name</td>
                <td>{{ $admin->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $admin->email }}</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>{{ $admin->age }} Years</td>
            </tr>
        </table>
    </div>
</body>
</html>