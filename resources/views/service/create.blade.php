 
@section('title')
Create services
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                       
                    <h3 class="mt-4" style="text-align: center">Create service</h3>
                
                </div>
                </div>
                <div class="card-body">
                                     
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                         
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="Image">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Header:</strong>
                                    <input type="text" name="header" class="form-control" placeholder="Header">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Details:</strong>
                                    <input type="text" name="details" class="form-control" placeholder="details">
                                </div>
                            </div>
                            
                            
                            

                            

                           
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">create service</button>
                            </div>
                        </div>
                         
                    </form>
            </div>
        </div>
    </main>
    
</div>
    
@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/js/datatables-simple-demo.js"></script>
