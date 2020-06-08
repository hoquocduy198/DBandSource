@extends('admin_layout')
@section('admin_content')
<h3>Chào mừng bạn !!!</h3>
<?php 
$message=Session::get('successorder');
if($message){
?>
    <script>
        var msg = '{{$message}}';
        var exist = '{{$message}}';
        if(exist){
            
          alert(msg);
          
        }
      </script>
<?php
	Session::put('success',null);
}

?>
@endsection
