@extends('template.layout')

@section('content')

<h1 class="mt-4">Senarai Pelanggan</h1>

<div class="container-fluid px-4">

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Edit 
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
                    
                    
                    
                </tbody>
            </table>
           
        </div>
    </div>

</div>


@endsection