<?php
// ============================================================
//  WEDDING INVITATION — KONFIGURASI UTAMA
//  Ubah seluruh data pernikahan hanya di file ini.
// ============================================================

return [

    // ── IDENTITAS MEMPELAI ───────────────────────────────────
    'groom' => [
        'name'        => 'Raihan Fadila',
        'full_name'   => 'Raihan Fadila, S.Kom.',
        'father'      => 'Bapak Hendra Hidayat',
        'mother'      => 'Ibu Sari Hidayat',
        'bio'         => 'Putra pertama dari keluarga Hidayat',
        'photo'       => 'assets/images/groom.png',
        'instagram'   => '@rhnfdl8',
    ],

    'bride' => [
        'name'        => 'Jazeera Meeca',
        'full_name'   => 'Jazeera Meeca, S.Pd.',
        'father'      => 'Bapak Dadan Kusuma',
        'mother'      => 'Ibu Neni Kusuma',
        'bio'         => 'Putri pertama dari keluarga Kusuma',
        'photo'       => 'assets/images/bride.png',
        'instagram'   => '@jazeera',
    ],

    // ── DETAIL ACARA ─────────────────────────────────────────
    'akad' => [
        'date'        => 'Sabtu, 19 Desember 2026',
        'time'        => '08.00 – 10.00 WIB',
        'venue'       => 'Masjid Al-Ikhlas',
        'address'     => 'Jl. Mawar No. 12, Tangerang, Banten',
        'maps_url'    => 'https://maps.google.com/?q=Masjid+Al-Ikhlas+Tangerang',
    ],

    'resepsi' => [
        'date'        => 'Sabtu, 19 Desember 2026',
        'time'        => '11.00 – 14.00 WIB',
        'venue'       => 'Gedung Serbaguna Harmoni',
        'address'     => 'Jl. Melati No. 45, Tangerang, Banten',
        'maps_url'    => 'https://maps.google.com/?q=Gedung+Harmoni+Tangerang',
    ],

    // Tanggal countdown (format: Y/m/d H:i:s)
    'countdown_target' => '2026/12/19 08:00:00',

    // ── LOVE STORY ───────────────────────────────────────────
    'love_story' => [
        [
            'year'  => '2020',
            'title' => 'Pertemuan Pertama',
            'desc'  => 'Takdir mempertemukan kami di sebuah seminar pendidikan. Sebuah senyum sederhana menjadi awal dari segalanya.',
            'icon'  => '✨',
        ],
        [
            'year'  => '2021',
            'title' => 'Jatuh Cinta',
            'desc'  => 'Perasaan itu tumbuh perlahan, seiring dengan obrolan panjang dan momen-momen kecil yang selalu kami kenang.',
            'icon'  => '💛',
        ],
        [
            'year'  => '2023',
            'title' => 'Ta\'aruf & Lamaran',
            'desc'  => 'Dengan restu kedua keluarga, langkah selanjutnya pun diambil. Ia menerima lamaranku dengan senyum paling indah.',
            'icon'  => '💍',
        ],
        [
            'year'  => '2026',
            'title' => 'Hari Pernikahan',
            'desc'  => 'Dan kini, kami siap melangkah bersama menuju babak baru kehidupan, dalam ikatan yang halal dan penuh berkah.',
            'icon'  => '🕌',
        ],
    ],

    // ── GALERI FOTO ──────────────────────────────────────────
    // Letakkan foto di assets/images/gallery/ dengan nama sesuai list ini
    'gallery' => [
        ['file' => 'Bersama.png', 'caption' => 'Momen Bersama'],
        ['file' => 'couple.png', 'caption' => 'Senyum Bahagia'],
        ['file' => 'penuh.png', 'caption' => 'Penuh Cinta'],
        ['file' => 'kenangan.png', 'caption' => 'Kenangan Indah'],
        ['file' => 'selalu.png', 'caption' => 'Bersama Selalu'],
        ['file' => 'hati.png', 'caption' => 'Satu Hati'],
    ],

    // ── HADIAH & TRANSFER ────────────────────────────────────
    'gifts' => [
        [
            'bank'    => 'Bank BCA',
            'number'  => '1234567890',
            'name'    => 'Raihan Fadila',
        ],
        [
            'bank'    => 'Bank Mandiri',
            'number'  => '0987654321',
            'name'    => 'Jazeera Meeca',
        ],
    ],
    'qris_image' => 'assets/images/qris.jpeg',

    // ── KONTAK WHATSAPP ──────────────────────────────────────
    'whatsapp' => '6281234567890',  // format: 628xxxxxxxxxx (tanpa +)
    'whatsapp_message' => 'Assalamu\'alaikum, saya ingin mengonfirmasi kehadiran saya.',

    // ── MUSIK LATAR ──────────────────────────────────────────
    'music' => 'assets/music/backsound.mp3',

    // ── KUTIPAN PEMBUKA ──────────────────────────────────────
    'quote'  => '"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu pasangan hidup dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya."',
    'quote_source' => '— QS. Ar-Rum: 21',

    // ── PESAN PENUTUP ────────────────────────────────────────
    'closing' => 'Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada putra-putri kami.',
    'closing_family' => 'Keluarga Besar Hidayat & Kusuma',

];
