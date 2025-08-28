<?php
// Pokaži aktivni zavihek glede na ime trenutne datoteke:
$current = basename($_SERVER['SCRIPT_NAME']);
function active($file, $current) { return $current === $file ? ' active' : ''; }
?>
<header class="app-header">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php">
        <img src="/src/images/Logo.png" alt="Zeleni Grič" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ms-lg-auto">
          <li class="nav-item"><a class="nav-link<?= active('index.php', $current) ?>" href="/index.php">DOMOV</a></li>
          <li class="nav-item"><a class="nav-link<?= active('trgovina.php', $current) ?>" href="/trgovina.php">TRGOVINA</a></li>
          <li class="nav-item"><a class="nav-link<?= active('NasaZgodba.php', $current) ?>" href="/NasaZgodba.php">NAŠA ZGODBA</a></li>
          <li class="nav-item"><a class="nav-link<?= active('kontakt.php', $current) ?>" href="/kontakt.php">KONTAKT</a></li>
          <li class="nav-item d-flex align-items-center ms-lg-3">
               <button id="themeToggle" class="btn btn-sm btn-outline-secondary" type="button" aria-label="Preklopi temo">🌓</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>