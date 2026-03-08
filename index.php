<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Luís Paulo | Portfólio</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="projetos.html">
</head>

<body>

<header>
<h1>Luís Paulo</h1>
<p>Estudante de Tecnologia / Ciência da Computação</p>
</header>

<nav>
<a href="#sobre">Sobre</a>
<a href="projetos.html">Projetos</a>
<a href="#contato">Contato</a>
</nav>

<section id="sobre">
<h2>Sobre mim</h2>
<p>
Sou estudante de tecnologia interessado em programação,
desenvolvimento web e ciência da computação.
</p>
</section>

<section id="projetos">
<h2>Projetos</h2>

<div class="projeto">
<h3>Estou criando meu primeiro projeto para colocar no currículo</h3>
</div>

<div class="projeto">
<h3>Site Portfólio</h3>
<p>Site criado em HTML, CSS e JavaScript para mostrar meus projetos.</p>
</div>

</section>

<section id="contato">

<h2>Contato</h2>

<form action="salvar.php" method="POST">

<input type="text" name="nome" placeholder="Seu nome" required>
<br><br>

<input type="email" name="email" placeholder="Seu email" required>
<br><br>

<textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
<br><br>

<button type="submit">Enviar Mensagem</button>

</form>

</section>

<footer>
<p>© 2026 - Luís Paulo</p>
</footer>

</body>
</html>