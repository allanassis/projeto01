<!doctype html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='all.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Facshelp</title>
	</head>

<body>

	<div class='container'>

	<header>
		<h1 class='text-header'>Facshelp</h1>
	</header>

	<nav class='navbar navbar-inverse'>
		<div class='container-fluid'>
			<div class='navbar-head'>
				<a class='navbar-brand' href='newsite.php'>Facshelp</a>
			</div>
		<ul class='nav navbar-nav'>
			<li class='active'><a href='#'>Home</a></li>
			<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Disciplinas<span class='caret'></span></a>
				<ul class='dropdown-menu'>
				<li><a href='#'>Algebra Linear</a></li>
				<li><a href='#'>Calculo 2</a></li>
				<li><a href='#'>Geometria Analítica</a></li>
				<li class='divider'></li>
				<li><a href='materias.php'>Mais..</a></li>
				</ul>
			</li>
			<li><a href='#'>Forum</a></li>
			<li><a href='#'>Contato</a></li>
		</ul>
		<form class='navbar-form navbar-left' action='/action_page.php'>
			<div class='input-group'>
				<input type='text' class='form-control' placeholder='O que procuras?'>
				<div class='input-group-btn'>
					<button class='btn btn-default' type='submit'>
					<i class='glyphicon glyphicon-search'></i>
					</button>
				</div>
			</div>
		</form>
		<ul class='nav navbar-nav navbar-right'>
			<li><a href='#'><span class='glyphicon glyphicon-user'></span> Cadastrar-se</a></li>
			<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
		</ul>
	</div>
	</nav>
	<article>
		<h1 class='article-title'>Seja muito bem vindo</h1>
		<p class='article-text'>Olá estudante, se você acessou esse site é porque necessita de ajuda em algo relacionado ao seu curso...<br> Tudo bem, nós te ajudamos.. basta clicar no botão 'disciplinas', escolher a matéria e tirar suas dúvidas.<br> Muito obrigado pela preferência</p>
		<div class='row'>
			<div class="col-sm-4" style="background-color: lavender;height: 100px;">
				 <h3>Coluna 1</h3>
				<p>Testando paragrafo do div testando para colocar artigos</p>
			</div>
			<div class='col-sm-4' style='background-color: black;height: lem;'>
				<h3>Geometria Analítica - Espaço vetorial</h3>
				<p>Espaço vetorial é um espaço que tem bla bla bla....</p>
			</div>
			<div class='col-sm-4' style='background-color: white;height: lam;'>
				<h3>Algebra Linear - Vetores</h3>
				<p>Vetores são setas que fodem com as notas bla bla bla...</p>
			</div>
		</div>
	</article>
	<footer>Copyright &copy; LSCF.com</footer>

</body>
</html>
