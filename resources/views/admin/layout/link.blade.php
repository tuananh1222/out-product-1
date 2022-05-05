<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<link rel="stylesheet" href="{{ asset('dist/css/general.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/morris.css') }}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $( function() {
      $( "#datepicker" ).datepicker({
        dateFormat:"yy-mm-dd"
      });
      $( "#datepicker2" ).datepicker({
        dateFormat:"yy-mm-dd"
      });
        });
    
    </script>
<style>
    .main-header .logo {
        background: linear-gradient(264deg, #007eeade, #3dae3f) !important;
    }

    .main-header nav.navbar {
        background: linear-gradient(264deg, #3dae3f, #007eeade) !important;
    }

    /* .box.box-solid.box-warning>.box-header {
        background: #c49e38 !important;
        background-color: #c49e38 !important;
    }

    .main-header li.user-header {
        background-color: #c49e38 !important;
    } */
    
    .skin-purple .wrapper, .skin-purple .main-sidebar, .skin-purple .left-side {
        background: linear-gradient(264deg, #3dae3f, #007eeade) !important;
    }

    /* .skin-purple .sidebar-menu>li>a {
        color: white;
    } */

    @media print {
        .noPrint {
            display: none;
        }
    }
</style>
