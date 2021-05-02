<html>
	<head>
		<title>@yield('title')</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/css/blog.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
				<a class="navbar-brand" href="#">CSC227 Blog</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">About</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						@guest
							<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
						@else
							<li class="nav-item"><a class="nav-link" href="/post/create">New Post</a></li>
							@if(Route::currentRouteName() == 'post.show')
								<li class="nav-item"><a class="nav-link" href="/post/{{ $post->url }}/edit">Edit Post</a></li>
							@endif
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									{{ Auth::user()->name }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="/logout"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
									<form id="logout-form" action="/logout" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</nav>

			<main role="main">
				<div class="jumbotron">
					<div class="col-sm-8 mx-auto">
						@yield('content')
					</div>
				</div>
			</main>
		</div>
	</body>
</html>
