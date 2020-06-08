@extends('admin_layout')
@section('add_product')
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
                        @foreach($edit_product as $key => $edit_value)
                        <form action="{{URL::to('/update-product/'.$edit_value->product_id)}}" method="post"  role="form" enctype="multipart/form-data" >
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="name brand"
                            value="{{$edit_value->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="name brand">
                            <img src="{{URL::to('public/Upload/product/'.$edit_value->product_image)}}" width="100" height="100"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="name brand"
                            value="{{$edit_value->product_gia}}">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                            <select name="category_product" class="form-control input-lg m-bot15">
                                @foreach ($cate_product as $Key=>$cate_value)
                                    @if($cate_value->category_id==$edit_value->category_id)
                                    <option selected value="{{$cate_value->category_id}}">{{$cate_value->category_name}}</option>
                                    @else
                                    <option value="{{$cate_value->category_id}}">{{$cate_value->category_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hiệu sản phẩm</label>
                            <select name="brand_product" class="form-control input-lg m-bot15">
                                @foreach ($brand_product as $Key=>$brand_value)
                                    @if($brand_value->brand_id==$edit_value->brand_id)
                                    <option selected value="{{$brand_value->brand_id}}">{{$brand_value->brand_name}}</option>
                                    @else
                                    <option value="{{$brand_value->brand_id}}">{{$brand_value->brand_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea name="product_desc" style="resize:none" rows="5" 
                            class="form-control" id="exampleInputPassword1"
                             placeholder="Mô tả danh mục" >{{$edit_value->product_desc}}
                            </textarea>
                        </div>
                        
                        <button type="submit" name="update_product" class="btn btn-info">Cập nhật Hiệu Sản Phẩm</button>
                    </form>
                    @endforeach
                    </div>

                </div>
            </section>

    </div>
   
</div>
@endsection