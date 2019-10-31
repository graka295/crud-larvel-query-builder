@extends('layout/content')
@section('title', 'CRUD with Laravel')
@section('content')
    <div>
        <div>
            <table class="table-data">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>
                        <a href="{{ url('user/create') }}">Insert data</a>
                    </th>
                </tr>
                @foreach ($dataUsers as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->username }}</td>
                    <th>
                        <a href="{{ url('user/update', [$data->id]) }}">edit</a> 
                        <a   onclick="return confirm('Are you sure ?');" href="{{ url('user/delete', [$data->id]) }}">delete</a> 
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection