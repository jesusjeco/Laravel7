@extends('templates.main-header')

@section('name', 'Person index')

@section('body')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Create person</h1>
                </div>
                <div class="col-12">
                    <form class="needs-validation" action="{{ action('PersonController@store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name">
                            </div>
                            <div class="form-group col-12">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>

                            </div>
                            <div class="form-group col-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        @endsection
