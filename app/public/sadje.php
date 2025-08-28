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
        <img src="src/images/Jaboljka.png" class="product-image" alt="Jabolka">
      </div>
      <div class="product-card">
        <span class="product-label">Hruške</span>
        <img src="src/images/Hruske.png" class="product-image" alt="Hruške">
      </div>
      <div class="product-card">
        <span class="product-label">Grozdje</span>
        <img src="src/images/Grozdje.png" class="product-image" alt="Grozdje">
      </div>
      <div class="product-card">
        <span class="product-label">Jagode</span>
        <img src="src/images/Jagode.png" class="product-image" alt="Jagode">
      </div>
      <div class="product-card">
        <span class="product-label">Slive</span>
        <img src="src/images/Slive.png" class="product-image" alt="Slive">
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>