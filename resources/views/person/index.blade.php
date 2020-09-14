@extends('templates.main-header')

@section('name', 'Person index')

@section('body')

<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <div class="col-12">
                Persons to be printed
            </div>
        </div>
    </div>
</div>


@endsection
