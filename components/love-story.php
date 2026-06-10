<?php // components/love-story.php ?>
<section id="love-story">
  <div class="section">
    <p class="section-eyebrow reveal">Perjalanan Kami</p>
    <h2 class="section-title reveal">Love Story</h2>
    <p class="section-sub reveal">Setiap langkah yang kami lalui adalah bagian dari rencana indah-Nya</p>

    <div class="ornament-divider reveal">
      <span class="line"></span>
      <span class="icon">✨</span>
      <span class="line"></span>
    </div>

    <div class="timeline">
      <?php foreach ($data['love_story'] as $i => $story): ?>
      <div class="timeline-item reveal reveal-delay-<?= min($i + 1, 3) ?>">
        <?php if ($i % 2 === 0): ?>
          <div class="timeline-content">
            <p class="timeline-year"><?= $story['year'] ?></p>
            <h3 class="timeline-title"><?= $story['title'] ?></h3>
            <p class="timeline-desc"><?= $story['desc'] ?></p>
          </div>
          <div class="timeline-dot"><?= $story['icon'] ?></div>
          <div class="timeline-spacer"></div>
        <?php else: ?>
          <div class="timeline-spacer"></div>
          <div class="timeline-dot"><?= $story['icon'] ?></div>
          <div class="timeline-content">
            <p class="timeline-year"><?= $story['year'] ?></p>
            <h3 class="timeline-title"><?= $story['title'] ?></h3>
            <p class="timeline-desc"><?= $story['desc'] ?></p>
          </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
