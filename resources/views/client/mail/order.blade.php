<body>
    <p>Họ tên: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Điện thoại: {{ $data['phone'] }}</p>
    <p>Địa chỉ: {{ $data['address'] }}</p>
    @if (isset($data['password']))
        <p>Đây là mật khẩu để đăng nhập lần sau cho khách hàng mới: {{ $data['password'] }}</p>
    @endif
    <p><a href="{{ route('user-order') }}">Link đơn hàng</a></p>
</body>