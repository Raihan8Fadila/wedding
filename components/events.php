<?php // components/events.php ?>
<section id="events">
  <div class="section">
    <p class="section-eyebrow reveal">Rangkaian Acara</p>
    <h2 class="section-title reveal">Hari Bahagia</h2>

    <div class="ornament-divider reveal">
      <span class="line"></span>
      <span class="icon">🕌</span>
      <span class="line"></span>
    </div>

    <div class="events-grid">
      <!-- AKAD -->
      <div class="event-card reveal reveal-left">
        <span class="event-card-corner tl"></span>
        <span class="event-card-corner br"></span>
        <div class="event-icon">🌙</div>
        <p class="event-type">Akad Nikah</p>
        <h3 class="event-name">Ijab Qabul</h3>
        <div class="event-detail">
          <span class="event-detail-label">Tanggal</span>
          <span class="event-detail-value"><?= $data['akad']['date'] ?></span>
        </div>
        <div class="event-detail">
          <span class="event-detail-label">Waktu</span>
          <span class="event-detail-value"><?= $data['akad']['time'] ?></span>
        </div>
        <div class="event-detail">
          <span class="event-detail-label">Lokasi</span>
          <span class="event-detail-value"><?= $data['akad']['venue'] ?></span>
        </div>
        <div class="event-detail" style="margin-top:0.25rem">
          <span class="event-detail-value" style="font-size:0.78rem;color:var(--text-muted)">
            <?= $data['akad']['address'] ?>
          </span>
        </div>
        <a href="<?= $data['akad']['maps_url'] ?>" target="_blank" rel="noopener" class="btn-maps">
          <span>📍</span> Buka Google Maps
        </a>
      </div>

      <!-- RESEPSI -->
      <div class="event-card reveal reveal-right">
        <span class="event-card-corner tl"></span>
        <span class="event-card-corner br"></span>
        <div class="event-icon">🥂</div>
        <p class="event-type">Resepsi Pernikahan</p>
        <h3 class="event-name">Walimatul 'Ursy</h3>
        <div class="event-detail">
          <span class="event-detail-label">Tanggal</span>
          <span class="event-detail-value"><?= $data['resepsi']['date'] ?></span>
        </div>
        <div class="event-detail">
          <span class="event-detail-label">Waktu</span>
          <span class="event-detail-value"><?= $data['resepsi']['time'] ?></span>
        </div>
        <div class="event-detail">
          <span class="event-detail-label">Lokasi</span>
          <span class="event-detail-value"><?= $data['resepsi']['venue'] ?></span>
        </div>
        <div class="event-detail" style="margin-top:0.25rem">
          <span class="event-detail-value" style="font-size:0.78rem;color:var(--text-muted)">
            <?= $data['resepsi']['address'] ?>
          </span>
        </div>
        <a href="<?= $data['resepsi']['maps_url'] ?>" target="_blank" rel="noopener" class="btn-maps">
          <span>📍</span> Buka Google Maps
        </a>
      </div>
    </div>
  </div>
</section>
