@extends('welcome')
@section('content')

<form action="{{route('login')}}" method="post" class="beta-form-checkout">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
    <div class="col-sm-3"></div>
    @if(Session::has('thanhcong'))
    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
    @endif
    @if(count($errors)>0)
            
    <div class="alert alert-danger">
    @foreach($errors->all() as $err)
    <br>
    {{$err}}
    @endforeach

@endif

    <div class="col-sm-6">
        <h4>ĐĂNG NHẬP</h4>
        <div class="space20">&nbsp;</div>

        <div class="form-block">
                <label for="email">Email address : </label>
                <input type="email" name="email" required>
        </div>
        <div class="form-block">
                <label for="password">Password : </label>
                <input type="password" name="password" required>
        </div>
        <div class="form-block">
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </div>
        <div class="col-sm-3"></div>   
    </div>    
</form>

@endsection