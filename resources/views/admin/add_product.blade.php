@extends('admin_layout')
@section('add_product')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm hiệu sản phẩm
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
                        <form action="{{URL::to('/save-product')}}" method="post"  role="form" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="name product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="name product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="number" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="name product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                        <select name="category_product" class="form-control input-lg m-bot15">
                            @foreach ($cate_product as $Key=>$cate_value)
                                <option value="{{$cate_value->category_id}}">{{$cate_value->category_name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiệu sản phẩm</label>
                        <select name="brand_product" class="form-control input-lg m-bot15">
                                @foreach ($brand_product as $Key=>$brand_value)
                                <option value="{{$brand_value->brand_id}}">{{$brand_value->brand_name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea name="product_desc" style="resize:none" rows="5" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục" ></textarea>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Hiển thị</label>
                            <select name="product_status" class="form-control input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        
                        <button type="submit" name="add_product" class="btn btn-info">Thêm Sản Phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
   
</div>
@endsection