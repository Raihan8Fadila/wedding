# 💍 Wedding Invitation — Deep Navy & Champagne

Website undangan pernikahan digital premium berbasis PHP Native.

---

## 🗂️ Struktur Folder

```
wedding/
├── index.php               ← Entry point utama
├── vercel.json             ← Konfigurasi deploy Vercel
├── config/
│   └── data.php            ← ⭐ SATU-SATUNYA file yang perlu diubah
├── components/
│   ├── header.php
│   ├── cover.php
│   ├── hero.php
│   ├── profile.php
│   ├── love-story.php
│   ├── events.php
│   ├── countdown.php
│   ├── gallery.php
│   ├── gift.php
│   ├── closing.php
│   └── footer.php
├── css/
│   └── main.css
├── js/
│   └── main.js
└── assets/
    ├── images/
    │   ├── couple.jpg          ← Foto pasangan (cover)
    │   ├── groom.jpg           ← Foto mempelai pria
    │   ├── bride.jpg           ← Foto mempelai wanita
    │   ├── qris.jpg            ← Gambar QRIS
    │   └── gallery/
    │       ├── gallery-1.jpg
    │       ├── gallery-2.jpg
    │       ├── gallery-3.jpg
    │       ├── gallery-4.jpg
    │       ├── gallery-5.jpg
    │       └── gallery-6.jpg
    └── music/
        └── backsound.mp3       ← Musik latar romantis
```

---

## ✏️ Cara Kustomisasi

### 1. Ubah Data Konten
Edit hanya `config/data.php` — ganti nama, tanggal, lokasi, love story, rekening, dan WhatsApp.

### 2. Ganti Foto
Letakkan foto dengan **nama file yang sama** di folder `assets/images/`:
- `couple.jpg` → Foto berdua di cover
- `groom.jpg` → Foto mempelai pria
- `bride.jpg` → Foto mempelai wanita
- `qris.jpg` → QR Code pembayaran
- `gallery/gallery-1.jpg` s.d. `gallery-6.jpg` → Galeri foto

### 3. Ganti Musik
Ganti file `assets/music/backsound.mp3` dengan musik pilihan (format MP3).

### 4. Kirim Undangan Personal
Tambahkan parameter `?to=NamaTamu` di URL:
```
https://yourdomain.com/?to=Budi+Santoso
```
Nama tamu akan tampil otomatis di halaman cover.

---

## 🚀 Deploy ke Vercel

1. Install Vercel CLI: `npm i -g vercel`
2. Di folder project, jalankan: `vercel`
3. Ikuti instruksi — pilih **PHP** sebagai framework
4. Selesai! Website siap diakses.

Atau upload via **Vercel Dashboard** → Import Git Repository.

---

## 🏃 Jalankan Lokal

```bash
php -S localhost:8000
```
Buka `http://localhost:8000` di browser.

---

## 🎨 Tema Warna

| Token       | Hex       | Digunakan untuk          |
|-------------|-----------|--------------------------|
| Navy        | `#0d1b2a` | Background utama         |
| Navy Mid    | `#1a2d42` | Background section alt   |
| Champagne   | `#e8d5a3` | Teks utama, nama         |
| Gold        | `#c9a84c` | Aksen, border, ornamen   |
| Text Muted  | `#7a8c99` | Teks sekunder            |
