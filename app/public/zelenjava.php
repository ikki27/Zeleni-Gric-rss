<?php
$title = 'Zeleni Grič — Dobrodošli';
include __DIR__ . '/includes/header.php'; // to že vključi nav
?>

<main class="frame">
  <div class="content-section">
    <h2 class="section-title">Sadje</h2>

    <div class="frame" style="padding-top: 1rem;">
      <div class="mb-3">
        <input id="productSearch" class="form-control" type="search" placeholder="Išči izdelke …">
      </div>
    </div>

    <div class="product-list">
      <div class="product-card">
        <span class="product-label">Jabolka</span>
        <img src="src/images/Krompir.png" class="product-image" alt="Krompir">
      </div>
      <div class="product-card">
        <span class="product-label">Hruške</span>
        <img src="src/images/Solata.png" class="product-image" alt="Solata">
      </div>
      <div class="product-card">
        <span class="product-label">Grozdje</span>
        <img src="src/images/Bucke.png" class="product-image" alt="Bucke">
      </div>
      <div class="product-card">
        <span class="product-label">Jagode</span>
        <img src="src/images/Korenje.png" class="product-image" alt="Korenje">
      </div>
      <div class="product-card">
        <span class="product-label">Slive</span>
        <img src="src/images/Paprika.png" class="product-image" alt="Paprika">
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>