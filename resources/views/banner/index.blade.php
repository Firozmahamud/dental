 
@section('title')
Banner 
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center">Banner</h1>            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                    {{-- <a class="btn btn-info" href="{{ route('banner.crate') }}"> Create New </a> --}}
                
                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Banner Image</th>
                                <th>Header Title</th>
                                <th>Details</th>
                                <th>Learnmore Link</th>
                                <th>Booknow link</th>
                                
                            </tr>
                        </thead>
                        <tbody>


                            @foreach( $banners as $key=>$banner)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img src="{{asset('public/banner/image/')}}/{{  $banner->image }}" width="50px" height="50px"></td>
                                    
                                {{--  <td>{{ $contact->image }}</td>  --}}
                                
                                <td>{{ $banner->header}}</td>
                                <td>{{ $banner->details}}</td>
                                <td>{{ $banner->learnmore}}</td>
                                <td>{{ $banner->booknow}}</td>
                                <td>                                                                                  
                                    <a class="btn btn-primary" href="{{ route('banner.edit',$banner->id) }}">Edit</a>
                                   
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
