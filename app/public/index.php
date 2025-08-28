<?php
$title = 'Zeleni Grič — Dobrodošli';
include __DIR__ . '/includes/header.php'; // to že vključi nav
?>

<main>
  <!-- 1. HERO -->
  <section class="position-relative text-center text-white hero-section">
    <img src="/src/images/Domačija.png" alt="Kmetija Zeleni Grič v sončnem jutru" class="hero-section-image">
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center hero-overlay">
      <h1 class="display-3 fw-bold">Dobrodošli na Kmetiji Zeleni Grič</h1>
      <p class="lead fs-4 col-md-8">Kjer se narava sreča z okusom.</p>
      <a href="/trgovina.php" class="btn btn-lg mt-3 btn-custom-green">Obiščite našo spletno trgovino</a>
    </div>
  </section>

  <!-- 2. VREDNOTE -->
  <div class="container content-section text-center">
    <div class="row gy-5">
      <div class="col-md-4">
        <h2 class="section-title fs-3">Svežina z Goričkega</h2>
        <p>Naši pridelki so zrasli na sončnih pobočjih Goričkega, kjer čista narava zagotavlja poln in avtentičen okus.</p>
      </div>
      <div class="col-md-4">
        <h2 class="section-title fs-3">Ekološka Pridelava</h2>
        <p>Zavezani smo k trajnostnemu kmetovanju. Brez pesticidov in umetnih gnojil, le skrb za zemljo in vaše zdravje.</p>
      </div>
      <div class="col-md-4">
        <h2 class="section-title fs-3">Družinska Tradicija</h2>
        <p>Znanje in ljubezen do zemlje prenašamo iz generacije v generacijo. Vsak pridelek nosi pečat naše družinske predanosti.</p>
      </div>
    </div>
  </div>

  <!-- 3. IZDELKI SEZONE -->
  <section class="section-highlight">
    <div class="container content-section">
      <h2 class="section-title text-center mb-5">Okusi Sezone</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 border-0 shadow-sm">
            <img src="/src/images/Hruske.png" class="card-img-top" alt="Sveže hruške">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Sočne Hruške</h5>
              <p class="card-text">Hrustljava in polna vitaminov, idealna za svež prigrizek ali domač zavitek.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 border-0 shadow-sm">
            <img src="/src/images/Solata.png" class="card-img-top" alt="Hrustljava solata">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Hrustljava Solata</h5>
              <p class="card-text">Sveže nabrana z našega vrta, ki bo popestrila vsak vaš obrok.</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100 border-0 shadow-sm">
            <img src="/src/images/PredelaniIzdelki.png" class="card-img-top" alt="Domači med">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Domači Med</h5>
              <p class="card-text">Zlati nektar naših pridnih čebel, poln naravne sladkosti in zdravja.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="/trgovina.php" class="btn btn-lg btn-custom-green">Odkrijte vse izdelke</a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>