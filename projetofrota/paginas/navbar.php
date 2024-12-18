<?php
  session_start();
  if(!isset($_SESSION['acesso']))
    header("Location: login.php");
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/projetofrota/paginas/dashboard.php">Sistema de Controle de Frota</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <!-- Após desenvolver o código em PHP, essa funcionalidade só será visível ao administrador -->
        <!-- Início -->
        <?php if ($_SESSION['nivel'] == 'adm'): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="usuarios.php">Gerenciar</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <!-- Fim -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Veículos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="marcas.php">Gerenciar Marcas</a></li>
            <li><a class="dropdown-item" href="veiculos.php">Gerenciar Veículos</a></li> <!-- Colocar o link da página -->
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Motoristas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="motoristas.php">Gerenciar</a></li> <!-- Colocar o link da página -->
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rotas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="rotas.php">Gerenciar</a></li> <!-- Colocar o link da página -->
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Viagens
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="viagens.php">Gerenciar</a></li>
            <li><a class="dropdown-item" href="relatorio_viagens.php">Relatórios</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Seja bem vindo(a) <?= $_SESSION['usuario'] ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="editar_usuario.php?id=<?= $_SESSION['id'] ?>">Editar dados</a></li>
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>