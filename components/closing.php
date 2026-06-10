<?php // components/closing.php ?>
<section id="closing">
  <div class="section" style="max-width:680px">
    <div class="ornament-divider reveal">
      <span class="line"></span>
      <span class="icon">✦</span>
      <span class="line"></span>
    </div>

    <h2 class="section-title reveal">Terima Kasih</h2>

    <p class="closing-text reveal reveal-delay-1">
      <?= $data['closing'] ?>
    </p>

    <p class="closing-text reveal reveal-delay-2" style="font-size:0.85rem;margin-bottom:0">
      Kami yang berbahagia,
    </p>

    <div class="reveal reveal-delay-3" style="margin-top:1rem">
      <p class="closing-family"><?= $data['groom']['name'] ?></p>
      <p style="font-family:var(--ff-script);font-size:2rem;color:var(--gold);line-height:1">&amp;</p>
      <p class="closing-family"><?= $data['bride']['name'] ?></p>
    </div>

    <div class="ornament-divider reveal" style="margin-top:3rem">
      <span class="line"></span>
      <span class="icon">🌸</span>
      <span class="line"></span>
    </div>

    <p class="section-sub reveal" style="margin-bottom:0"><?= $data['closing_family'] ?></p>

    <div class="closing-footer reveal">
      Made with ♥ — <?= $data['groom']['name'] ?> &amp; <?= $data['bride']['name'] ?>
    </div>
  </div>
</section>
