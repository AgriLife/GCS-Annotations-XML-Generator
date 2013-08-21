<nav class="top-bar">
	<ul class="title-area">
		<li class="name">
			<h1><a href="#">GCS XML</a></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
	</ul>
	<section class="top-bar-section">
		<ul class="left"></ul>
		<ul class="right">
			@if( Auth::check() )
				<li>{{ link_to('dashboard', Auth::user()->email) }}</li>
				<li class="divider"></li>
				<li>{{ link_to('user/logout', 'Logout') }}</li>
			@else
				<li>{{ link_to('user/login', 'Login') }}</li>
			@endif
		</ul>
	</section>
</nav>