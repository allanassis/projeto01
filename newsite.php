<!doctype html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='all.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta charset='utf-8'>
		<title>Facshelp</title>
		<link rel='shortcut icon' href='melancia.ico' type='image/x-icon'/>
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
			<li class='active'><a href='newsite.php'>Home</a></li>
			<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Disciplinas<span class='caret'></span></a>
				<ul class='dropdown-menu'>
				<li><a href='#'>Algebra Linear</a></li>
				<li><a href='#'>Calculo 2</a></li>
				<li><a href='geometria_analitica.php'>Geometria Analítica</a></li>
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
	<article class='article1'>
		<h1 class='article-title'>Seja muito bem vindo</h1>

		<p class='article-text'><br><br><br>Olá estudante, se você acessou esse site é porque necessita de ajuda em algo relacionado ao seu curso...<br> Tudo bem, nós te ajudamos.. basta clicar no botão 'disciplinas', escolher a matéria e tirar suas dúvidas.<br> Muito obrigado pela preferência</p>
	</article>

	<article class='article2'>
		<h2 class='article-title'>Desenvolvimento</h2>
		<p class='article-text'><br><br><br>Nosso site foi criado com o objetivo de ajudar os alunos de engenharia, que possuem dificuldades,<br> ou querem estudar para as avaliações utilizando nossos exercícios retirados de provas de semestres passados<br>Fique a vontade e bons estudos :D<br></p>
	</article>

	<article class='article3'>
		<img src='todeprova.jpg' alt='To de prova' id='prova'>
	</article>

	<footer>Copyright &copy; LSCF.com</footer>

</body>
</html>
