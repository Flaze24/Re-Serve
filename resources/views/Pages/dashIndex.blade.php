@extends('layout')

@section('contenido')

<nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="hidden-sm hidden-xs" href="index.php"><img id="logo" src="hotlogo.png" alt=""></a>
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
                    <li>
                        <a href="usuarios.php"><i class="fa fa-bar-chart-o fa-fw"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="reservaciones.php"><i class="fa fa-table fa-fw"></i> Reservaciones</a>
                    </li>
                    <li>
                        <a href="reportes.php"><i class="fa fa-edit fa-fw"></i> Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
	</nav>

	
		<div class="row">
			<div class="col-md-12">
                <h2>Bienvenido,</h2>
				<h3>Elija una opción del panel principal</h3>
			</div>
		</div>

@stop