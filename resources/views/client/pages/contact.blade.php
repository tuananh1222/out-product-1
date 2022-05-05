@extends('client.home')
@section('link')

@endsection
@section('index')

<div class="contact-from-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="form-title">
					<h2>Đặt câu hỏi cho cửa hàng</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
				</div>
				 <div id="form_status"></div>
				<div class="contact-form">
					<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
						<p>
							<input type="text" placeholder="Họ Tên" name="name" id="name">
							<input type="email" placeholder="Email" name="email" id="email">
						</p>
						<p>
							<input type="tel" placeholder="Phone" name="phone" id="phone">
							<input type="text" placeholder="Tiêu đề" name="subject" id="subject">
						</p>
						<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea></p>
						<input type="hidden" name="token" value="FsWga4&@f6aw" />
						<p><input type="submit" value="Gửi"></p>
					</form>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact-form-wrap">
					<div class="contact-form-box">
						<h4><i class="fas fa-map"></i> Địa chỉ</h4>
						<p>Số 110 Láng Hạ, Đống Đa, Hà Nội</p>
					</div>
					<div class="contact-form-box">
						<h4><i class="far fa-clock"></i> Giờ mở cửa</h4>
						<p>Thứ 2 - Chủ Nhật: 08h00 đến 21h00</p>
					</div>
					<div class="contact-form-box">
						<h4><i class="fas fa-address-book"></i> Liên hệ</h4>
						<p>Điện thoại: 0964 085 245 | 0973 386 780 <br> Email: thaianhtuanss@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact form -->

<!-- find our location -->
<div class="find-location blue-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p> <i class="fas fa-map-marker-alt"></i> Tìm kiếm tại địa chỉ</p>
			</div>
		</div>
	</div>
</div>
<!-- end find our location -->

<!-- google map section -->
<div class="embed-responsive embed-responsive-21by9">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5403186614935!2d105.80911931535458!3d21.01105589375745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9e00439f1b%3A0xd09d7c500c4a51a1!2zMTEwIFAuIEzDoW5nIEjhuqEsIEzDoW5nIEjhuqEsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1645721851119!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


@endsection
@section('script')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{ asset('client/js/map-active.js') }}"></script>
@endsection