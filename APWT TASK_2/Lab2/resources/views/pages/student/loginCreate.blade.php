@extends('layouts.app')
@section('content')
<h2>Please Fill up the From</h2>
<form action="{{route('loginCreate')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <div class="col-md-4 form-group">
        <span>Id</span>
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <div class="col-md-4 form-group">
        <span>password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
    </div>
    
    <input type="submit" class="btn btn-success" value="Submit" >                  
</form>
@endsection