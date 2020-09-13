@extends('templates.main-header')

@section('name','Index')

@section('body')
<div class="top-right links">
    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @extends('templates.main-menu')
            </div>
            <div class="col-12">
                Proyecto Oriana |..|
            </div>
        </div>
    </div>
</div>
@endsection
