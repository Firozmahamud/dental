 
@section('title')
Doctor
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center"> Massages</h1>
            {{--  <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>  --}}
            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Message</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contactus as $key=>$contactuss)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $contactuss->name}}</td>
                                             <td>{{ $contactuss->email}}</td>
                                            <td>{{ $contactuss->message}}</td>
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
