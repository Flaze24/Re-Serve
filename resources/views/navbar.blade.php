
		<nav class="navbar  navbar-expand-lg navbar-toggleable-lg navbar-dark bg-primary">
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
					        <a class="nav-link" href="{{route('restaurant.index')}}">Restaurants</a>
					      </li>
					      @if(auth()->check())
					      <li class="nav-item active">
					      	<a href="#" class="nav-link">Reserves</a>
					      </li>
					      @endif
					    </ul>
					    <ul class="nav navbar-nav navbar-right">
					      @if(auth()->guest())
					      <li class="nav-item active"><a class="nav-link" href="{{route('login')}}">Login</a></li>
						  @else
						  <li class="nav-item dropdown">
						    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}} <span class="caret"></span></a>
						    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						      <a href="#" class="dropdown-item">Profile</a>
						      <a href="#" class="dropdown-item">Reserves</a>
						      @if(auth()->user()->type_id==2||auth()->user()->type_id==3)
						      <a href="{{route('backIndex')}}" class="dropdown-item">Dashboard</a>
						      @endif
						      <div role="separator" class="dropdown-divider"></div>
						      <a href="{{route('logout')}}" class="dropdown-item">Logout</a>
						    </div>
						  </li>
						  @endif
					    </ul>
					  </div>
					</div>
			</nav>