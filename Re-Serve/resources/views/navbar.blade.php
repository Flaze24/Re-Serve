
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container-fluid">
					  <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('img/re-serve-logo.png')}}" alt=""></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarColor01">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item active">
					        <a class="nav-link" href="{{route('index')}}">Home</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="{{route('about')}}">About</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="{{route('message.create')}}">Contact</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Restaurants</a>
					      </li>
					    </ul>
					    <ul class="nav navbar-nav navbar-right">
					      <li class="nav-item active"><a class="nav-link" href="{{route('login')}}">Login</a></li>
					    </ul>
					  </div>
					</div>
			</nav>