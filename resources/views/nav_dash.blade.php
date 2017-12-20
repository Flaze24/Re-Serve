<nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('img/re-serve-logo.png')}}" alt=""></a>
        </div>
        <ul class="nav navbar-top-links navbar-right">                
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse collapse" aria-expanded="false">
                <ul class="nav">
                    <li>
                        <a class="active" href="index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                    </li>
                    @if(auth()->check())
                    <li>
                        <a href="{{route('backUsers')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Users</a>
                    </li>
                    <li>
                        <a href="{{route('message.index')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Messages</a>
                    </li>
                    <li>
                    @endif
                        <a href="{{route('backProfile')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Profile</a>
                    </li>
                    <li>
                        <a href="{{route('backRestaurant')}}"><i class="fa fa-edit fa-fw"></i> Restaurants</a>
                    </li>
                </ul>
            </div>
        </div>
	</nav>

