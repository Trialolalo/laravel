@extends('admin.layout.master')

@section('content')
    
    <div class="container">

        

        <div class="tables">
            @yield('table')
        </div>

        <div class="form">
            @yield('form')
        </div>

    </div>
@endsection
       