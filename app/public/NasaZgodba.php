<?php
$title = 'Zeleni Grič — Dobrodošli';
include __DIR__ . '/includes/header.php'; // to že vključi nav
?>

<!-- GLAVNA SLIKA (zdaj čez cel zaslon) -->
<div class="hero-container">
  <img src="src/images/Kmetija4.jpg" class="hero-img" alt="Kmetija Zeleni Grič">
</div>

<!-- GLAVNA VSEBINA (ostane enaka) -->
<main class="frame">
  <div class="content-section">
    <section class="mb-5">
      <h1 class="section-title">Naša zgodba</h1>
      <p>Dobrodošli na ekološki kmetiji Zeleni grič! Naša družina Koštaj že več kot 30 let obdeluje zemljo na obrobju čudovitih gričev Goričkega. Pred desetletjem smo se odločili, da svojo kmetijo povsem usmerimo v ekološko pridelavo, saj verjamemo, da naravi in ljudem dolgujemo zdrav način življenja.</p>
    </section>

    <section class="mb-5">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <h2 class="section-title">Povezanost z naravo</h2>
          <p>Naš vsakdan je povezan z letnimi časi in naravnimi ritmi. Obdelujemo starodavne sadovnjake, skrbimo za zeliščne gredice in gojimo raznoliko sezonsko zelenjavo – vse brez uporabe pesticidov in umetnih gnojil. Zemlji vračamo tisto, kar nam daje, zato so naši pridelki bogatega okusa in polni hranil.</p>
        </div>
        <div class="col-lg-6">
          <img src="src/images/Sadovnjak.png" class="content-img" alt="Sadovnjak">
        </div>
      </div>
    </section>

    <section>
      <div class="row g-4 align-items-center flex-lg-row-reverse">
        <div class="col-lg-6">
            <h2 class="section-title">Sodelovanje</h2>
            <p>Našo zgodbo gradi tudi sodelovanje z lokalno skupnostjo. Ob koncu tedna nas lahko najdete na tržnici v Murski Soboti, za najbolj zveste kupce pa nudimo možnost naročila svežih pridelkov kar prek spleta – hitro, enostavno in neposredno z naše kmetije na vaš krožnik.</p>
        </div>
        <div class="col-lg-6">
            <img src="src/images/Trznica.png" class="content-img" alt="Tržnica">
        </div>
      </div>
    </section>
  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>