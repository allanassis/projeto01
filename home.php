<!doctype html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SITE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel='stylesheet' type='text/css' href='home.css'>
</head>
<body>
	<div class='container'>
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-default">
			<div class='container-fluid'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class="navbar-brand test" href='#'>GTA V</a>
				</div>
				<div class="collapse navbar-collapse" id='myNavbar'>
					<ul class="nav navbar-nav">
						<li><a href='#'>Home</a>
						<li class='dropdown'>
							<a class="dropdown-toggle link-menu" data-toggle='dropdown' href='#'>Page 1 <span class='caret'></span></a>
							<ul class='dropdown-menu'>
								<li><a href='#'>Page 1-1</a></li>
								<li><a href='#'>Page 1-2</a></li>
								<li><a href='#'>Page 1-3</a></li>
							</ul>
						</li>
						<li><a href='#'>Page 2</a></li>
						<li><a href='#'>Page 3</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href='#'><span class="glyphicon glyphicon-user"></span> Sign UP</a></li>
						<li><a href='#'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<header>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-12'>
						<div class='intro-text'>
							<span class='name'>Portal do GTA V</span>
							<p class='skills'>Landing page layout</p>
							<p class='skills'>Scrolla ai pra ver o efeito</p>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>	
</body>
<!-- 
Função para adicionar o active no link quando o link for clicado
 <script>
	$(document).ready(function () {
        $('ul.nav > li').click(function (e) {
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');                
        });            
    });
</script>
-->
</html>
