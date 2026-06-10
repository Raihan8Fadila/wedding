<?php
// components/header.php
$guest = isset($_GET['to']) ? htmlspecialchars(strip_tags($_GET['to'])) : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Undangan Pernikahan <?= $data['groom']['name'] ?> & <?= $data['bride']['name'] ?>">
  <meta property="og:title" content="<?= $data['groom']['name'] ?> & <?= $data['bride']['name'] ?> — Wedding Invitation">
  <meta property="og:description" content="Dengan penuh kebahagiaan, kami mengundang Anda untuk hadir.">
  <title><?= $data['groom']['name'] ?> & <?= $data['bride']['name'] ?> — Wedding</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
