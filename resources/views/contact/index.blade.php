 
@section('title')
Contact
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center">Contact info</h1>            
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">
                    {{-- <a class="btn btn-info" href="{{ route('contact.crate') }}"> Create New contact</a> --}}
                
                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Logo</th>
                                <th>Phone No</th>
                                <th>E-mail</th>
                                <th>Address</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>


                            @foreach( $contacts as $key=>$contact)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img src="{{asset('public/logo/image/')}}/{{  $contact->image }}" width="50px" height="50px"></td>
                                    
                                {{--  <td>{{ $contact->image }}</td>  --}}
                                <td>{{ $contact->phone}}</td>
                                <td>{{ $contact->email}}</td>
                                <td>{{ $contact->address}}</td>
                                <td>                                                                                  
                                    <a class="btn btn-primary" href="{{ route('contact.edit',$contact->id) }}">Edit</a>
                                   
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

{{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>  --}}
{{--  <script src="{{asset('backend')}}/js/scripts.js"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('backend')}}/assets/demo/chart-bar-demo.js"></script>
{{--  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  --}}
{{--  <script src="{{asset('backend')}}/js/datatables-simple-demo.js"></script>  --}}
