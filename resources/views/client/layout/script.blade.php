<script src="{{ asset('client/assets/js/jquery-1.11.3.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('client/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- count down -->
<script src="{{ asset('client/assets/js/jquery.countdown.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('client/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
<!-- waypoints -->
<script src="{{ asset('client/assets/js/waypoints.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('client/assets/js/owl.carousel.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('client/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- mean menu -->
<script src="{{ asset('client/assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- sticker js -->
<script src="{{ asset('client/assets/js/sticker.js') }}"></script>
<!-- main js -->
<script src="{{ asset('client/assets/js/main.js') }}"></script>


@yield('script')
<script>
    $('.infoMessage').delay(4000).slideUp();
</script>
<script>
    function Huydonhang(id){
        var _token = $('input[name="_token"]').val();
        var id = id;
        var lydohuydon = $('#lydo').val();
        var url = window.location.origin;     
        $.ajax({
				url: url + '/destroy',
				method:"POST",				
				data:{
                    id:id,
                    lydo:lydohuydon, 
                    _token:_token,
                },
				success: function(data){					   
                    alert('Huy don hang thanh cong'); 
                    location.reload();                                                    
				}
			});
    }
</script>