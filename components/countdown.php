<?php // components/countdown.php ?>
<section id="countdown">
  <div class="section">
    <p class="section-eyebrow reveal">Menghitung Hari</p>
    <h2 class="section-title reveal">Menuju Hari Bahagia</h2>
    <p class="section-sub reveal"><?= $data['akad']['date'] ?></p>

    <div class="countdown-grid reveal" id="countdown-target" data-date="<?= $data['countdown_target'] ?>">
      <div class="countdown-unit">
        <span class="countdown-number" id="cd-days">00</span>
        <span class="countdown-label">Hari</span>
      </div>
      <span class="countdown-sep">:</span>
      <div class="countdown-unit">
        <span class="countdown-number" id="cd-hours">00</span>
        <span class="countdown-label">Jam</span>
      </div>
      <span class="countdown-sep">:</span>
      <div class="countdown-unit">
        <span class="countdown-number" id="cd-mins">00</span>
        <span class="countdown-label">Menit</span>
      </div>
      <span class="countdown-sep">:</span>
      <div class="countdown-unit">
        <span class="countdown-number" id="cd-secs">00</span>
        <span class="countdown-label">Detik</span>
      </div>
    </div>
  </div>
</section>
