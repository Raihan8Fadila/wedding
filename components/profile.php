<?php // components/profile.php ?>
<section id="profile">
  <div class="section">
    <p class="section-eyebrow reveal">Mempelai</p>
    <h2 class="section-title reveal">Dua Hati, Satu Tujuan</h2>

    <div class="ornament-divider reveal">
      <span class="line"></span>
      <span class="icon">💍</span>
      <span class="line"></span>
    </div>

    <div class="profile-grid">
      <!-- Groom -->
      <div class="profile-card reveal reveal-left">
        <div class="profile-photo">
          <img src="<?= $data['groom']['photo'] ?>"
               alt="Foto <?= $data['groom']['name'] ?>"
               onerror="this.parentElement.style.background='#1a2d42'">
        </div>
        <p class="profile-name"><?= $data['groom']['name'] ?></p>
        <p class="profile-fullname"><?= $data['groom']['full_name'] ?></p>
        <div class="profile-parents">
          Putra dari<br>
          <strong><?= $data['groom']['father'] ?></strong><br>
          &amp; <strong><?= $data['groom']['mother'] ?></strong>
        </div>
      </div>

      <!-- Divider -->
      <div class="profile-center reveal">
        <span class="gold-line"></span>
        <span class="ampersand">&amp;</span>
        <span class="gold-line"></span>
      </div>

      <!-- Bride -->
      <div class="profile-card reveal reveal-right">
        <div class="profile-photo">
          <img src="<?= $data['bride']['photo'] ?>"
               alt="Foto <?= $data['bride']['name'] ?>"
               onerror="this.parentElement.style.background='#1a2d42'">
        </div>
        <p class="profile-name"><?= $data['bride']['name'] ?></p>
        <p class="profile-fullname"><?= $data['bride']['full_name'] ?></p>
        <div class="profile-parents">
          Putri dari<br>
          <strong><?= $data['bride']['father'] ?></strong><br>
          &amp; <strong><?= $data['bride']['mother'] ?></strong>
        </div>
      </div>
    </div>
  </div>
</section>
