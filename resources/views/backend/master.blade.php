<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | Imunisasi Terpadu</title>
    
    <link rel="apple-touch-icon" href="{{ asset('backend/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    
    <!-- Stylesheets -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> -->
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/site.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/examples/css/apps/message.css') }}">
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/flag-icon-css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/fullcalendar/fullcalendar.css') }}">
        <link rel="stylesheet" href="{{ asset('global/vendor/chartist/chartist.css') }}">
        <link rel="stylesheet" href="{{ asset('global/vendor/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/examples/css/dashboard/v1.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> 
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('global/fonts/material-design/material-design.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/fonts/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('global/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <style>

    </style>
    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{ asset('global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- header -->
    @include('backend.partials.header')
      <!-- Sidebar -->
    @include('backend.partials.sidebar')
    
    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
      
          
          @yield('content')
          

      </div>
    </div>
    <!-- End Page -->
    @include('backend.partials.footer')


    <!-- Core  -->
    <script src="{{ asset('global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ asset('global/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('global/vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('global/vendor/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('global/vendor/animsition/animsition.js') }}"></script>
    <script src="{{ asset('global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ asset('global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
    <script src="{{ asset('global/vendor/waves/waves.js') }}"></script>
    
    <!-- Plugins -->
    <script src="{{ asset('global/vendor/switchery/switchery.js') }}"></script>
    <script src="{{ asset('global/vendor/intro-js/intro.js') }}"></script>
    <script src="{{ asset('global/vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ asset('global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
    <script src="{{ asset('global/vendor/fullcalendar/fullcalendar.js') }}"></script>
        <!-- <script src="{{ asset('global/vendor/chartist/chartist.min.js') }}"></script> -->
        <!-- <script src="{{ asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js') }}"></script> -->
        <script src="{{ asset('global/vendor/jvectormap/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('global/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>
        <script src="{{ asset('global/vendor/peity/jquery.peity.min.js') }}"></script>
    
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('global/js/Component.js') }}"></script>
    <script src="{{ asset('global/js/Plugin.js') }}"></script>
    <script src="{{ asset('global/js/Base.js') }}"></script>
    <script src="{{ asset('global/js/Config.js') }}"></script>
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>  -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="{{ asset('backend/assets/js/Section/Menubar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Section/GridMenu.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Section/Sidebar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Section/PageAside.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Plugin/menu.js') }}"></script>
    
    <script src="{{ asset('global/js/config/colors.js') }}"></script>
    <script src="{{ asset('backend/assets/js/config/tour.js') }}"></script>
    <!-- <script>Config.set('assets', "{{ asset('backend/assets')}}";)</script> -->
    
    <!-- Page -->
    <script src="{{ asset('backend/assets/js/Site.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ asset('global/js/Plugin/switchery.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/matchheight.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/jvectormap.js') }}"></script>
        <script src="{{ asset('global/js/Plugin/peity.js') }}"></script>
        
       
        
        
        <script src="{{ asset('backend/assets/examples/js/dashboard/v1.js') }}"></script>
    <script>
      @yield('pageScript')
      $(document).ready(function(){
      $('.upload').click(function(){
            $('.user-photo input[type="file"]').click();
            return false;
        });
        
            $('.summernote').summernote({

            height:500,

            }); 
            
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-image').attr('src', e.target.result);
                    $('#photo').val(e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function(){
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                //get the file size and file type from file input field
                var fsize = $(this)[0].files[0].size;

                if(fsize > 1048576) { //do something if file size more than 1 MB (1048576)
                    alert("Ukuran file terlalu besar");
                    $(this).val('');
                }else {
                    $("#preview-image").css('opacity','1');
                    readURL(this);
                }
            }else{
                alert("Silahkan upgrade browser untuk untuk mendapatkan fitur validasi file max size");
                $("#preview-image").css('opacity','1');
                readURL(this);
            }
        });
      });
    </script>
    
  </body>
</html>
