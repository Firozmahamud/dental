 
@section('title')
Serevice
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center">Services</h1>            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                    <a class="btn btn-info" href="{{ route('service.crate') }}"> Create New service</a>
                
                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Service Logo</th>
                                <th>Service Title</th>
                                <th>Details</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>


                            @foreach( $services as $key=>$service)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img src="{{asset('public/service/image/')}}/{{  $service->image }}" width="50px" height="50px"></td>
                                    
                                {{--  <td>{{ $contact->image }}</td>  --}}
                                
                                <td>{{ $service->header}}</td>
                                <td>{{ $service->details}}</td>
                                
                                <td>                                                                                  
                                    <a class="btn btn-primary" href="{{ route('service.edit',$service->id) }}">Edit</a>
                                   
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
