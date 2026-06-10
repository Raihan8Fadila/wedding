<?php // components/gift.php ?>
<section id="gift">
  <div class="section">
    <p class="section-eyebrow reveal">Hadiah Pernikahan</p>
    <h2 class="section-title reveal">Wedding Gift</h2>
    <p class="section-sub reveal">
      Doa dan kehadiran Anda adalah hadiah terbaik bagi kami.<br>
      Namun jika ingin memberikan hadiah, berikut informasinya:
    </p>

    <div class="ornament-divider reveal">
      <span class="line"></span>
      <span class="icon">🎁</span>
      <span class="line"></span>
    </div>

    <!-- Bank Accounts -->
    <div class="gift-grid reveal">
      <?php foreach ($data['gifts'] as $gift): ?>
      <div class="gift-card">
        <p class="gift-bank"><?= $gift['bank'] ?></p>
        <p class="gift-number"><?= $gift['number'] ?></p>
        <p class="gift-holder">a.n. <?= $gift['name'] ?></p>
        <button class="btn-copy"
                onclick="copyToClipboard('<?= $gift['number'] ?>', this)"
                aria-label="Salin nomor rekening">
          📋 Salin Nomor
        </button>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- QRIS -->
    <div class="qris-wrap reveal" style="margin-top:2.5rem">
      <p class="qris-label">Atau via QRIS</p>
      <div class="qris-img">
        <img src="<?= $data['qris_image'] ?>"
             alt="QRIS Payment"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
        <div class="qris-placeholder" style="display:none">
          <span>⬛</span>
          <span>QRIS</span>
        </div>
      </div>
    </div>
  </div>
</section>
