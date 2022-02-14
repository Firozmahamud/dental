
@section('title')
About us
@endsection

@extends('admin.master')

@section('table')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4" style="text-align: center">Social Links</h1>
            <div class="card mb-4">
                <div class="card-header">
                   <div class="pull-right">

                </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>About us details</th>
                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $about_us as $key=>$about_uses)
                            <tr>
                                <td>{{ $about_uses->about_us_details}}</td>


                                <td>
                                    <a class="btn btn-primary" href="{{ route('aboutus.edit',$about_uses->id) }}">Edit</a>

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
