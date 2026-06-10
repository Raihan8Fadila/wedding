<?php // components/gallery.php 
?>
<section id="gallery">
  <div style="max-width:900px;margin:0 auto;padding:0 clamp(1rem,3vw,2rem);">
    <p class="section-eyebrow reveal" style="text-align:center">Momen Berharga</p>
    <h2 class="section-title reveal">Galeri Foto</h2>

    <div class="ornament-divider reveal">
      <span class="line"></span>
      <span class="icon">📸</span>
      <span class="line"></span>
    </div>
  </div>

  <div class="gallery-grid reveal">
    <?php foreach ($data['gallery'] as $i => $photo): ?>
      <div class="gallery-item"
        onclick="openLightbox('assets/images/gallery/<?= $photo['file'] ?>', '<?= htmlspecialchars($photo['caption']) ?>')">
        <img src="assets/images/gallery/<?= $photo['file'] ?>"
          alt="<?= htmlspecialchars($photo['caption']) ?>"
          loading="lazy"
          onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
        <div class="gallery-placeholder" style="display:none">
          <span>🌸</span>
        </div>
        <div class="gallery-overlay">
          <span><?= htmlspecialchars($photo['caption']) ?></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>