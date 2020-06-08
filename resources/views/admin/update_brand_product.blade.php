@extends('admin_layout')
@section('add_brand_product')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật hiệu sản phẩm
                </header>
                <div class="panel-body">
                        <?php 
                        $message=Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                    <div class="position-center">
                        @foreach($edit_brand_product as $key => $edit_value)
                        <form action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post"  role="form" >
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên hiệu sản phẩm</label>
                            <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="name brand"
                            value="{{$edit_value->brand_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea name="brand_product_desc" style="resize:none" rows="5" 
                            class="form-control" id="exampleInputPassword1"
                             placeholder="Mô tả danh mục" >{{$edit_value->brand_desc}}
                            </textarea>
                        </div>
                        
                        <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật Hiệu Sản Phẩm</button>
                    </form>
                    @endforeach
                    </div>

                </div>
            </section>

    </div>
   
</div>
@endsection