<?php // components/cover.php 
?>
<section id="cover">
  <canvas id="petals-canvas" aria-hidden="true"></canvas>

  <!-- Loading Screen -->
  <div id="loading-screen" aria-hidden="true">
    <div class="loading-monogram">
      <?= substr($data['groom']['name'], 0, 1) . ' &amp; ' . substr($data['bride']['name'], 0, 1) ?>
    </div>
    <div class="loading-ornament">
      <span class="line"></span>
      <span>Wedding Invitation</span>
      <span class="line"></span>
    </div>
    <div class="loading-bar-wrap">
      <div class="loading-bar"></div>
    </div>
  </div>

  <div class="cover-frame">
    <?php if ($guest): ?>
      <p class="cover-to">Kepada Yth.</p>
      <p class="cover-guest"><?= $guest ?></p>
    <?php endif; ?>

    <div class="cover-photo-wrap">
      <img src="assets/images/couple.png"
        alt="Foto Pasangan"
        onerror="this.style.background='#1a2d42';this.style.minHeight='100%'">
    </div>

    <p class="cover-eyebrow">The Wedding of</p>
    <div class="cover-names">
      <?= $data['groom']['name'] ?>
      <span class="amp">&amp;</span>
      <?= $data['bride']['name'] ?>
    </div>

    <div class="cover-divider">
      <span class="line"></span>
      <span class="diamond"></span>
      <span class="line"></span>
    </div>

    <p class="cover-date"><?= $data['akad']['date'] ?></p>

    <button class="btn-open" onclick="openInvitation()">
      Buka Undangan
    </button>
  </div>
</section>