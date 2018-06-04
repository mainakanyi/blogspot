@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if($errors->all())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </div>
    @endif



    {{--{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}--}}
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{--{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}--}}
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{--{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}--}}
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    {{--{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}--}}
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {{--{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}--}}
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control"
                           placeholder="Confirm Password">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}


                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Add Post</button>
                </div>
                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
            </div>
        </div>
    </form>
    {{--{!! Form::close() !!}--}}


@endsection
