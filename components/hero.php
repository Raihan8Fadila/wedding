<?php // components/hero.php ?>
<section id="hero">
  <div class="section">
    <p class="section-eyebrow reveal">Bismillahirrahmanirrahim</p>

    <div class="hero-quote reveal reveal-delay-1">
      <?= $data['quote'] ?>
      <span class="hero-quote-source"><?= $data['quote_source'] ?></span>
    </div>

    <div class="ornament-divider reveal reveal-delay-2">
      <span class="line"></span>
      <span class="icon">✦</span>
      <span class="line"></span>
    </div>

    <div class="hero-names-display reveal">
      <?= $data['groom']['name'] ?>
      <span class="amp">&amp;</span>
      <?= $data['bride']['name'] ?>
    </div>

    <p class="hero-date-display reveal reveal-delay-1">
      <?= $data['akad']['date'] ?>
    </p>
  </div>
</section>
