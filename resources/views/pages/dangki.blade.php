@extends('welcome')
@section('content')

<form action="{{route('signin')}}" method="post" class="beta-form-checkout" > 
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
        <div class="col-sm-3"></div>
        @if(count($errors)>0)
            
            <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            <br>
            {{$err}} 
            @endforeach

        @endif


        @if(Session::has('thanhcong'))
            <div class="alert alert-success">{{Session::get('thanhcong')}}</div> 
        @endif
        <div class="col-sm-6">
            <h4>ĐĂNG KÝ</h4>
            <div class="space20"></div>

            <div class="form-block">
                <label for="email">Email address : </label>
                <input type="email" name="email" required>
            </div>

            <div class="form-block">
                <label for="your_last_name">Họ tên : </label>
                <input type="text" name="name" required>
            </div>

            <div class="form-block">
                <label for="password">Password : </label>
                <input type="password" name="password" required>
            </div>

            <div class="form-block">
                <label for="re_password">Re Password : </label>
                <input type="password" name="re_password" required>
            </div>

            <div class="form-block">
                <button type="submit" class="btn btn-primary">Tạo tài khoản</button>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</form>

@endsection