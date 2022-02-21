@extends('template.layout')

@section('content')

<h1 class="mt-4">Senarai Pelanggan</h1>

<div class="container-fluid px-4">

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>REGISTER DATE</th>
                        <th>ACTION</th>
                       
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user -> id}}</td>
                        <td>{{$user ->name}}</td>
                        <td>{{$user ->email}}</td>
                        <td>{{$user ->created_at}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger">Delete </a>
                        <a href="{{route('admin.edit',$user -> id) }}" class="btn btn-sm btn-primary">Edit </a>
                        </td>
                    </tr>
                   
                    @endforeach
                    
                    
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>

</div>


@endsection