<p>Hi, Xin chào mình là Admin</p>
<p>Bạn đã đặt hàng thành công </p>
<p>Thông tin đơn hàng : </p>
<p>Đỉa chỉ khách hàng : {{$data['diachi']}}</p>
<p>Tổng tiền thanh toán : {{$data['giatong']}}</p>
<p>Chi tiết đơn hàng</p>
@foreach ($data['chitiet'] as $item)
<p>Tên món hàng: {{$item->oder_name}}</p>
<p>Giá món hàng: {{$item->oder_price}}</p>
<p>Số lượng món hàng: {{$item->order_qty}}</p>
@endforeach