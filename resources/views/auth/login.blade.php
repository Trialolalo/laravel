@extends('auth.layout.auth-master')

@section('content')
   
    <form class="log-form" method="POST" action="{{ route('login') }}">

        @csrf

        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 2V3H12V9H11V10H9V11H8V12H7V13H5V12H4V11H3V9H2V15H3V16H4V17H5V18H6V22H8V21H7V20H8V19H9V18H10V19H11V22H13V21H12V17H13V16H14V15H15V12H16V13H17V11H15V9H20V8H17V7H22V3H21V2M14 3H15V4H14Z" /></svg>
        </div>
        <div class="log-element">
            <div class="log-element-label">
                <label>
                    Email
                </label>
            </div>
            <div class="log-element-input">
                <input class="validate" data-mail="true" name="email" value="{{$user->email ?? ''}}" autocomplete="name" />
            </div>
        </div>
        <div class="log-element">
            <div class="log-element-label">
                <label>
                    Password
                </label>
            </div>
            <div class="log-element-input">
                <input class="validate" data-minlength="8" type="password" name="password" autocomplete="name" />
            </div>
        </div>
        <div class="log-menu">
            <div class="log-row">
                <div class="recover">
                    <button>
                        ¿Has olvidado la contraseña?
                    </button>
                </div>
                <div class="button-log-in">
                    <button>
                        Log In
                    </button>
                </div>
            </div>
        </div>  
    </form>
    
@endsection
