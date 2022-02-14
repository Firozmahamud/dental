 
@section('title')
Doctor
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center">Doctors Dashboard</h1>
            {{--  <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>  --}}
            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('doctor.create') }}"> Create New Doctor</a>
                
                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($doctors as $key=>$doctor)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $doctor->name}}</td>
                                            <td>
                                            <img src="{{asset('public/doctors/image/')}}/{{  $doctor->image }}" width="50px" height="50px"></td>
                                            <td>{{ $doctor->designation}}</td>
                                            <td>{{ $doctor->description}}</td>


                                           
                                            <td>                                                                                  
                                                <a class="btn btn-primary" href="{{ route('doctor.edit',$doctor->id) }}">Edit</a>
                                                <form action="{{ route('doctor.delete',$doctor->id) }}"method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>

                                                    </form>
                                            </td> 
                                        </tr>
                                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    
</div>
    
@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/datatables-simple-demo.js"></script>
