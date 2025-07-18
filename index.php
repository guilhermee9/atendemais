<!DOCTYPE html>
<html>

<head>
	<title>Agenda</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.43/moment-timezone-with-data-10-year-range.js"></script>
	<script src="https://www.gstatic.com/firebasejs/11.1.0/firebase-app-compat.js"></script>
	<script src="https://www.gstatic.com/firebasejs/11.1.0/firebase-firestore-compat.js"></script>
	<script src="js/firebase-config.js" defer></script>
	<script src="js/main.js"></script>
</head>

<body>
	<header>
		<div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
		<h1>Agenda</h1>
	</header>
    <div class="sidebar" id="mySidebar">
        <a href="#" onclick="closeMenu()"><span class="menu-icon close-icon">&#9776;</span></a>
        <a href="agenda.html">Agenda do dia</a>
        <a href="atendimentos.html">Atendimentos</a>
        <a href="busca.html">Busca pessoa</a>
        <a href="cadastroPessoa.html">Pessoas</a>
        <a href="cadastroAtendimento.html">Criar atendimento</a>
        <a href="verVisitas.html">Ver visitas</a>
    </div>

	<div class="sidebar" id="mySidebar">
		<a href="#" onclick="closeMenu()"><span class="menu-icon close-icon">&#9776;</span></a>
		<a href="ordens.html">Ordens de Serviço</a>
		<a href="busca.html">Consultar</a>
		<a href="cadastro.html">Criar atendimento</a>
	</div>