<?php
/**
 * Wedding Invitation — index.php
 * Entry point. Data loaded once, components assembled here.
 */

$data = require __DIR__ . '/config/data.php';

require __DIR__ . '/components/header.php';
require __DIR__ . '/components/cover.php';
?>

<!-- ══ MAIN CONTENT (revealed after button click) ══════════ -->
<div id="main-content">

  <?php require __DIR__ . '/components/hero.php'; ?>
  <div class="section-separator" aria-hidden="true">· · ✦ · ·</div>
  <?php require __DIR__ . '/components/profile.php'; ?>
  <div class="section-separator" aria-hidden="true">· · ✦ · ·</div>
  <?php require __DIR__ . '/components/love-story.php'; ?>
  <div class="section-separator" aria-hidden="true">· · ✦ · ·</div>
  <?php require __DIR__ . '/components/events.php'; ?>
  <?php require __DIR__ . '/components/countdown.php'; ?>
  <div class="section-separator" aria-hidden="true">· · ✦ · ·</div>
  <?php require __DIR__ . '/components/gallery.php'; ?>
  <div class="section-separator" aria-hidden="true">· · ✦ · ·</div>
  <?php require __DIR__ . '/components/gift.php'; ?>
  <?php require __DIR__ . '/components/closing.php'; ?>

</div><!-- /main-content -->

<?php require __DIR__ . '/components/footer.php'; ?>
