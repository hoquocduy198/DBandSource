@extends('admin_layout')
@section('add_brand_product')
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
                        <form action="{{URL::to('/save-brand-product')}}" method="post"  role="form" >
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên hiệu sản phẩm</label>
                            <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="name brand">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea name="brand_product_desc" style="resize:none" rows="5" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục" ></textarea>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm Hiệu Sản Phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
   
</div>
@endsection