<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- jquery --}}
</head>
<body>
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->age }} Years</td>
                    <td>{{ $admin->created_at }}</td>
                    <td>{{ $admin->updated_at }}</td>
                    <td>
                        {{-- <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.delete', $admin->id) }}" class="btn btn-danger">Delete</a> --}}
                        <a href="{{ route('admins.detail', $admin->id) }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
            @endforeach
        </table>
    </div>
</body>
</html>