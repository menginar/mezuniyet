<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
            Profil
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- The styles -->

	{{ HTML::style('assets/asset/css/bootstrap-cerulean.css') }}
	{{ HTML::style('assets/asset/css/bootstrap-responsive.css') }}
	{{ HTML::style('assets/asset/css/charisma-app.css') }}
	{{ HTML::style('assets/asset/css/jquery-ui-1.8.21.custom.css') }}
	{{ HTML::style('assets/asset/css/fullcalendar.css') }}
	{{ HTML::style('assets/asset/css/fullcalendar.print.css') }}
	{{ HTML::style('assets/asset/css/chosen.css') }}
	{{ HTML::style('assets/asset/css/uniform.default.css') }}
	{{ HTML::style('assets/asset/css/colorbox.css') }}
	{{ HTML::style('assets/asset/css/jquery.cleditor.css') }}
	{{ HTML::style('assets/asset/css/jquery.noty.css') }}
	{{ HTML::style('assets/asset/css/noty_theme_default.css') }}
	{{ HTML::style('assets/asset/css/elfinder.min.css') }}
	{{ HTML::style('assets/asset/css/elfinder.theme.css') }}
	{{ HTML::style('assets/asset/css/jquery.iphone.toggle.css') }}
	{{ HTML::style('assets/asset/css/opa-icons.css') }}
	{{ HTML::style('assets/asset/css/uploadify.css') }}

    @yield('styles')
    <link rel="shortcut icon" href="{{asset('assets/img/kep.jpg')}}" type="image/x -icon">

</head>
<body background="{{asset('assets/img/duvar.png')}}">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="btn-group pull-right" >
					<a class="btn " href="{{ URL::route('admin/profile') }}"><i class="icon-user"></i> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
					<a class="btn " href="{{ URL::to('admin/logout') }}"> <i class="icon-lock"></i> Çıkış</a>
					
				</div>
				
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="{{ URL::to('admin/profile') }}">Mezuniyet Yıllığı Projesi Yönetici Paneli</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid" style="margin-top:15px;">
		<div class="row-fluid">
	
	@yield('content')



	<!-- Javascripts -->
    {{ HTML::script('assets/asset/js/jquery-1.7.2.min.js') }}
    {{ HTML::script('assets/asset/js/jquery-ui-1.8.21.custom.min.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-transition.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-alert.js') }}    
    {{ HTML::script('assets/asset/js/bootstrap-modal.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-dropdown.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-scrollspy.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-tab.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-tooltip.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-popover.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-button.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-collapse.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-carousel.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-typeahead.js') }}
    {{ HTML::script('assets/asset/js/bootstrap-tour.js') }}
    {{ HTML::script('assets/asset/js/jquery.cookie.js') }}
    {{ HTML::script('assets/asset/js/fullcalendar.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.dataTables.min.js') }}
    {{ HTML::script('assets/asset/js/excanvas.js') }}
    {{ HTML::script('assets/asset/js/jquery.flot.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.flot.pie.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.flot.stack.js') }}
    {{ HTML::script('assets/asset/js/jquery.flot.resize.min.js') }}
    
    {{ HTML::script('assets/asset/js/jquery.chosen.min.js')}}
    
    {{ HTML::script('assets/asset/js/jquery.uniform.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.colorbox.min.js') }}
    
    {{ HTML::script('assets/asset/js/jquery.cleditor.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.noty.js') }}
    {{ HTML::script('assets/asset/js/jquery.elfinder.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.raty.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.iphone.toggle.js') }}
    {{ HTML::script('assets/asset/js/jquery.autogrow-textarea.js') }}
    {{ HTML::script('assets/asset/js/jquery.uploadify-3.1.min.js') }}
    {{ HTML::script('assets/asset/js/jquery.history.js') }}
    {{ HTML::script('assets/asset/js/charisma.js') }}

    @yield('scripts')
</body>

</html>
