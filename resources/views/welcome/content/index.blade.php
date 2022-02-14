
@section('title')
welcome
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center">welcome page content details</h1>
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                   
                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        {{-- <thead>
                            <tr>
                                <th> welcome page Image</th>
                                
                                <th> Action</th>

                                
                            </tr>
                            
                        </thead> --}}
                        {{-- <tbody>

                                @foreach ($welcomes as $key=>$welcome)
                                     <tr>
                                         <td>
                                         <img src="{{asset('public/welcome/image/')}}/{{  $welcome->image }}" width="70px" height="70px"></td>                                           
                                         
                                         <td>
                                        <a class="btn btn-primary" href="{{ route('welcome.edit',$welcome->id) }}">Edit</a>
                                        </td> 
                                            </tr>
                                @endforeach
                                
                            </tbody> --}}


                            <thead>
                                <tr>
                                    <th> logo</th>
                                    <th>welcome page header</th>

                                    <th>  welcome page details</th>
                                   
                                    <th> Action</th>
                                    
                                </tr>
                                
                            </thead>
                            <tbody>
    
                                    @foreach ($contents as $key=>$content)
                                         <tr>
                                             <td>
                                             <img src="{{asset('public/welcome/logo/')}}/{{  $content->image }}" width="70px" height="70px"></td>                                           
                                             <td>{{ $content->header}}</td>
                                             <td>{{ $content->details}}</td>
                                             <td>
                                            <a class="btn btn-primary" href="{{ route('welcomecontent.edit',$content->id) }}">Edit</a>
                                            </td> 
                                                </tr>
                                    @endforeach
                                </tbody>



{{--                                 
                            <thead>
                                <tr>
                                    <th> Logo</th>
                                    <th>  Haeding </th>
                                    <th>  Details </th>
                                    
                                    <th> Action</th>
                                    
                                </tr>
                                
                            </thead>
                            <tbody>
    
                                    @foreach ($welcomes as $key=>$welcome)
                                         <tr>
                                             <td>
                                             <img src="{{asset('public/welcome/image/')}}/{{  $welcome->image }}" width="70px" height="70px"></td>                                           
                                             <td></td>
                                             <td></td>
                                             
                                             <td>
                                            <a class="btn btn-primary" href="{{ route('welcome.edit',$welcome->id) }}">Edit</a>
                                            </td> 
                                                </tr>
                                    @endforeach
                                </tbody>  --}}

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
