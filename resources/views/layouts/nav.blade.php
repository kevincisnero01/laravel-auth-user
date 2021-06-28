<nav class="navbar navbar-default" id="nav-menu">
<div class="container-fluid">

	<div class="navbar-header">
		<a class="navbar-brand" href="/">App Authentication</a>
	</div>

	@auth
  <div class="collapse navbar-collapse">

	<ul class="nav navbar-nav">
		<li><a href="/dashboard"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
	</ul>
	
	<ul class="nav navbar-nav navbar-right">
    <li>
      <a href="{{ route('admin.users.index') }}">Usuarios</a>
    </li>
		<li class="dropdown" id="nav-profile">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      	<span class="glyphicon glyphicon-user"></span>
        @php
            $names = explode(" ",auth()->user()->name);

            $name1 = $names[0];
            if(empty($names[1])){ $name2 = ""; } 
            else{ $name2 = str_limit($names[1],6); }

            echo "<b>$name1 $name2</b>";
        @endphp
      	<span class="caret"></span>
      </a>

      <ul class="dropdown-menu" role="menu">
        <li>
        	<a href="#">
        		<span class="glyphicon glyphicon-tasks"></span> Perfil
        	</a>
        </li>
        <li role="separator" class="divider"></li>
        <li>
        	<form action="logout" method="POST" id="logout">
        		{{ csrf_field() }}
        		<a href="#" onClick="document.getElementById('logout').submit()"><span class="glyphicon glyphicon-log-out"></span> Salir</a>
        	</form>
        </li>
      </ul>
    </li>
  </ul>

  </div><!-- /.navbar-collapse -->
  @endauth

</div><!--.container-->
</nav><!--nav-->