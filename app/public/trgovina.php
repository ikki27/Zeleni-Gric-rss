<?php
$title = 'Zeleni Grič — Dobrodošli';
include __DIR__ . '/includes/header.php'; // to že vključi nav
?>

<main class="frame">
  <div class="content-section">
    <h1 class="section-title">Naši izdelki</h1>

    <!-- 
      POPRAVEK: Odstranjen je razred "row-cols-md-2".
      Zdaj bo "row-cols-1" veljal za vse velikosti zaslona,
      kar pomeni, da bo vedno samo en stolpec (vertikalna postavitev).
    -->
    <div class="row row-cols-1 g-3">
      <div class="col">
        <a href="zelenjava.php" class="category-card">
          <span class="category-label">Zelenjava</span>
          <img src="src/images/Zelenjava.png" class="category-image" alt="Zelenjava">
        </a>
      </div>
      <div class="col">
        <a href="sadje.php" class="category-card">
          <span class="category-label">Sadje</span>
          <img src="src/images/Sadje.png" class="category-image" alt="Sadje">
        </a>
      </div>
      <div class="col">
        <a href="#" class="category-card">
          <span class="category-label">Zelišča</span>
          <img src="src/images/Zalisce.png" class="category-image" alt="Zelišča">
        </a>
      </div>
      <div class="col">
        <a href="#" class="category-card">
          <span class="category-label">Predelani izdelki</span>
          <img src="src/images/PredelaniIzdelki.png" class="category-image" alt="Predelani izdelki">
        </a>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>