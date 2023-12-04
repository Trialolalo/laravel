@extends('admin.layout.master')

@section('content')
    
    <div class="container">

        

        <div class="tables">
            @yield('table')
        </div>

        <section class="form">
            @yield('form')
        </section>

    </div>
@endsection
       