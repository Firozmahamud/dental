
@section('title')
Edit Social links
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                       
                    <h3 class="mt-4" style="text-align: center">Edit social links</h3>
                
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
                         
                    <form action="{{ route('social.update', $socials->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        
                         <div class="row">
                            
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Linkedin Id Link:</strong>
                                    <input type="text" name="linkedin" class="form-control" placeholder="linkedin"value="{{ $socials->linkedin }}">
                                </div>
                            </div>                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Twitter Id link:</strong>
                                    <input type="text" name="twitter" class="form-control" placeholder="twitter"value="{{ $socials->twitter }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Youtube link:</strong>
                                    <input type="text" name="youtube" class="form-control" placeholder="youtube "value="{{ $socials->youtube }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Github link:</strong>
                                    <input type="text" name="github" class="form-control" placeholder="github"value="{{ $socials->github }}">
                                </div>
                            </div>

                           

                            

                           
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
