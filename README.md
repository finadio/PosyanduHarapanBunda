# Posyandu Project

Selamat datang di **Posyandu Project**! 🎉 Proyek ini dibangun menggunakan Laravel 12 dan template dashboard **Bootstrap Stisla**.

## 🖥️ Screenshot

1. Login Page
![Login Page](public/img/screenshot/Screenshot_001.png)

2. Dashboard
![Dashboard](public/img/screenshot/Screenshot_002.png)

## ✨ Fitur

1. **Login Multi-User**: Admin, Bidan, Tenaga Medis Puskesmas, Orang Tua (Ibu), Kepala Desa/Lurah, dan Kepala Dusun/Lingkungan.
2. **Kelola Data Orang Tua**.
3. **Kelola Data Anak**.
4. **Kelola Data Lansia**.
5. **Kelola Data Petugas**: Akses hanya untuk Admin.
6. **Kelola Jadwal**.
7. **Kelola Imunisasi**.
8. **Kelola Penimbangan**.
9. **Kelola Pemeriksaan Ibu Hamil**.
10. **Kelola Pemeriksaan Lansia**.
11. **Kelola Persedian Vaksin**.
12. **Kelola Persediaan Obat**.
13. **Kelola Identitas Situs**: Akses hanya untuk Admin.

## 🚀 Teknologi yang Digunakan

- ![Laravel 12](https://img.shields.io/badge/Laravel-12-red?style=flat-square&logo=laravel) **Laravel 12**: Framework PHP untuk membangun aplikasi web.
- **Boostrap Stisla**: Template dashboard responsif dan komponen UI base on **Boostrap 4**.

## 📦 Instalasi

### 📝 Prasyarat

Pastikan Anda telah menginstal:

- PHP >= 8.2
- Composer
- MySQL / MariaDB

Ikuti langkah-langkah berikut untuk menjalankan proyek Laravel **Posyandu** di servel lokal.

### 1. Clone Repository
Clone repositori dari GitHub ke direktori lokal:
```bash
git clone https://github.com/alfian742/posyandu.git
```

### 2. Masuk ke Direktori Proyek
Pindah ke folder proyek:
```bash
cd posyandu
```

### 3. Install Dependensi
Pastikan Anda sudah menginstall Composer. Lalu jalankan:
```bash
composer update
```

### 4. Konfigurasi File ENV
Laravel menggunakan file `.env` untuk konfigurasi lingkungan.

1. Duplikat file `.env.example` dan ubah namanya menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

2. Buka file `.env` dan sesuaikan konfigurasi berikut:
    - `DB_DATABASE`: Nama database yang akan digunakan
    - `DB_USERNAME`: Username database
    - `DB_PASSWORD`: Password database
    - `APP_TIMEZONE`: Zona waktu aplikasi, sesuaikan dengan wilayah Anda (misalnya `Asia/Makassar`)

    Contoh:
    ```
    DB_DATABASE=posyandu
    DB_USERNAME=root
    DB_PASSWORD=
    APP_TIMEZONE=Asia/Makassar
    ```

3. Generate application key:
    ```bash
    php artisan key:generate
    ```

### 5. Jalankan Migrasi dan Seeder
**Migrasi** digunakan untuk membuat struktur tabel database:
```bash
php artisan migrate
```

**Seeder** digunakan untuk mengisi data awal:
```bash
php artisan db:seed
```

### 6. Jalankan Aplikasi
Gunakan perintah berikut untuk menjalankan server development:
```bash
php artisan serve
```

Aplikasi akan berjalan di:
```
http://localhost:8000
```

---

## 📖 Panduan Penggunaan

1. **Login**:
   - Gunakan kredensial berikut untuk login ke aplikasi:
   - Admin
     - **Username**: `admin`
     - **Password**: `123`

2. **Login Selain Admin**:
   - Anda dapat login dengan menggunakan **Username**: `nik yang terdaftar pada aplikasi` dan **Password**: `123` untuk login dengan role Bidan, Petugas, dan Orang Tua (Ibu).

3. **Kelola Semua Menu**:
   - Menu dapat dikelola oleh semua user dengan batasan akses tertentu.

4. **Demo**:
   - Demo aplikasi dapat diakses melalui link berikut: [Demo Aplikasi Posyandu](http://my-public-project.infinityfreeapp.com/posyandu/public/)

---

Terima kasih telah mengunjungi repositori ini! Jika ada pertanyaan atau saran, jangan ragu untuk menghubungi saya.

```
posyandu-master
├─ .editorconfig
├─ app
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Api
│  │  │  │  └─ LocationController.php
│  │  │  ├─ Auth
│  │  │  │  └─ AuthController.php
│  │  │  ├─ Controller.php
│  │  │  └─ Dashboard
│  │  │     ├─ DashboardController.php
│  │  │     ├─ ElderlyCheckController.php
│  │  │     ├─ ElderlyController.php
│  │  │     ├─ EventScheduleController.php
│  │  │     ├─ FamilyChildrenController.php
│  │  │     ├─ FamilyParentController.php
│  │  │     ├─ ImmunizationController.php
│  │  │     ├─ MedicineController.php
│  │  │     ├─ OfficerController.php
│  │  │     ├─ PregnancyCheckController.php
│  │  │     ├─ SiteIdentityController.php
│  │  │     ├─ VaccineController.php
│  │  │     └─ WeighingController.php
│  │  └─ Middleware
│  │     ├─ Auth.php
│  │     ├─ CheckRole.php
│  │     └─ RedirectAuth.php
│  ├─ Models
│  │  ├─ Elderly.php
│  │  ├─ ElderlyCheck.php
│  │  ├─ EventSchedule.php
│  │  ├─ FamilyChildren.php
│  │  ├─ FamilyParent.php
│  │  ├─ Immunization.php
│  │  ├─ Medicine.php
│  │  ├─ Officer.php
│  │  ├─ PregnancyCheck.php
│  │  ├─ SiteIdentity.php
│  │  ├─ User.php
│  │  ├─ Vaccine.php
│  │  └─ Weighing.php
│  └─ Providers
│     ├─ AppServiceProvider.php
│     └─ ViewServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2025_04_02_100419_create_officers_table.php
│  │  ├─ 2025_04_02_100501_create_family_parents_table.php
│  │  ├─ 2025_04_02_100534_create_family_children_table.php
│  │  ├─ 2025_04_02_100540_create_elderlies_table.php
│  │  ├─ 2025_04_02_100548_create_users_table.php
│  │  ├─ 2025_04_06_040510_create_vaccines_table.php
│  │  ├─ 2025_04_06_040523_create_medicines_table.php
│  │  ├─ 2025_04_06_091847_create_immunizations_table.php
│  │  ├─ 2025_04_06_093017_create_weighings_table.php
│  │  ├─ 2025_04_08_041611_create_pregnancy_checks_table.php
│  │  ├─ 2025_04_08_043110_create_elderly_checks_table.php
│  │  ├─ 2025_04_08_043644_create_medicine_usages_table.php
│  │  ├─ 2025_04_16_081201_create_event_schedules_table.php
│  │  └─ 2025_04_19_072628_create_site_identity_table.php
│  └─ seeders
│     ├─ DatabaseSeeder.php
│     ├─ ElderlyCheckSeeder.php
│     ├─ ElderlySeeder.php
│     ├─ EventScheduleSeeder.php
│     ├─ ImmunizationSeeder.php
│     ├─ OfficerSeeder.php
│     ├─ ParentChildrenSeeder.php
│     ├─ PregnancyCheckSeeder.php
│     ├─ SiteIdentitySeeder.php
│     ├─ VaccineMedicineSeeder.php
│     └─ WeighingSeeder.php
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ css
│  │  ├─ components.css
│  │  ├─ components.css.map
│  │  ├─ components.min.css
│  │  ├─ components.min.css.map
│  │  ├─ custom.css
│  │  ├─ custom.css.map
│  │  ├─ skins
│  │  │  ├─ reverse.css
│  │  │  └─ reverse.css.map
│  │  ├─ style.css
│  │  ├─ style.css.map
│  │  ├─ style.min.css
│  │  └─ style.min.css.map
│  ├─ favicon.ico
│  ├─ fonts
│  │  ├─ nunito-v9-latin-600.eot
│  │  ├─ nunito-v9-latin-600.svg
│  │  ├─ nunito-v9-latin-600.ttf
│  │  ├─ nunito-v9-latin-600.woff
│  │  ├─ nunito-v9-latin-600.woff2
│  │  ├─ nunito-v9-latin-700.eot
│  │  ├─ nunito-v9-latin-700.svg
│  │  ├─ nunito-v9-latin-700.ttf
│  │  ├─ nunito-v9-latin-700.woff
│  │  ├─ nunito-v9-latin-700.woff2
│  │  ├─ nunito-v9-latin-800.eot
│  │  ├─ nunito-v9-latin-800.svg
│  │  ├─ nunito-v9-latin-800.ttf
│  │  ├─ nunito-v9-latin-800.woff
│  │  ├─ nunito-v9-latin-800.woff2
│  │  ├─ nunito-v9-latin-regular.eot
│  │  ├─ nunito-v9-latin-regular.svg
│  │  ├─ nunito-v9-latin-regular.ttf
│  │  ├─ nunito-v9-latin-regular.woff
│  │  └─ nunito-v9-latin-regular.woff2
│  ├─ img
│  │  ├─ americanexpress.png
│  │  ├─ auth-image.jpeg
│  │  ├─ avatar
│  │  │  ├─ avatar-1.png
│  │  │  ├─ avatar-2.png
│  │  │  ├─ avatar-3.png
│  │  │  ├─ avatar-4.png
│  │  │  └─ avatar-5.png
│  │  ├─ browsers
│  │  │  ├─ chrome.png
│  │  │  ├─ firefox.png
│  │  │  ├─ internet-explorer.png
│  │  │  ├─ opera.png
│  │  │  └─ safari.png
│  │  ├─ dinersclub.png
│  │  ├─ discover.png
│  │  ├─ example-image-50.jpg
│  │  ├─ example-image.jpg
│  │  ├─ jcb.png
│  │  ├─ logo.png
│  │  ├─ mastercard.png
│  │  ├─ news
│  │  │  ├─ img01.jpg
│  │  │  ├─ img02.jpg
│  │  │  ├─ img03.jpg
│  │  │  ├─ img04.jpg
│  │  │  ├─ img05.jpg
│  │  │  ├─ img06.jpg
│  │  │  ├─ img07.jpg
│  │  │  ├─ img08.jpg
│  │  │  ├─ img09.jpg
│  │  │  ├─ img10.jpg
│  │  │  ├─ img11.jpg
│  │  │  ├─ img12.jpg
│  │  │  ├─ img13.jpg
│  │  │  ├─ img14.jpg
│  │  │  ├─ img15.jpg
│  │  │  ├─ img16.jpg
│  │  │  └─ img17.jpg
│  │  ├─ p-250.png
│  │  ├─ p-50.png
│  │  ├─ paypal.png
│  │  ├─ products
│  │  │  ├─ product-1-50.png
│  │  │  ├─ product-1.jpg
│  │  │  ├─ product-2-50.png
│  │  │  ├─ product-2.jpg
│  │  │  ├─ product-3-50.png
│  │  │  ├─ product-3.jpg
│  │  │  ├─ product-4-50.png
│  │  │  ├─ product-4.jpg
│  │  │  ├─ product-5-50.png
│  │  │  └─ product-5.jpg
│  │  ├─ screenshot
│  │  │  ├─ Screenshot_001.png
│  │  │  └─ Screenshot_002.png
│  │  ├─ spinner-primary.svg
│  │  ├─ spinner-white.svg
│  │  ├─ spinner.svg
│  │  ├─ stisla-fill.svg
│  │  ├─ stisla-light.svg
│  │  ├─ stisla-transparent.svg
│  │  ├─ stisla.svg
│  │  ├─ typing.svg
│  │  ├─ unsplash
│  │  │  ├─ andre-benz-1214056-unsplash.jpg
│  │  │  └─ eberhard-grossgasteiger-1207565-unsplash.jpg
│  │  └─ visa.png
│  ├─ index.php
│  ├─ js
│  │  ├─ bundle.js
│  │  ├─ custom.js
│  │  ├─ page
│  │  │  ├─ auth-register.js
│  │  │  ├─ bootstrap-modal.js
│  │  │  ├─ components-chat-box.js
│  │  │  ├─ components-multiple-upload.js
│  │  │  ├─ components-statistic.js
│  │  │  ├─ components-table.js
│  │  │  ├─ components-user.js
│  │  │  ├─ features-post-create.js
│  │  │  ├─ features-posts.js
│  │  │  ├─ features-setting-detail.js
│  │  │  ├─ forms-advanced-forms.js
│  │  │  ├─ gmaps-advanced-route.js
│  │  │  ├─ gmaps-draggable-marker.js
│  │  │  ├─ gmaps-geocoding.js
│  │  │  ├─ gmaps-geolocation.js
│  │  │  ├─ gmaps-marker.js
│  │  │  ├─ gmaps-multiple-marker.js
│  │  │  ├─ gmaps-route.js
│  │  │  ├─ gmaps-simple.js
│  │  │  ├─ index-0.js
│  │  │  ├─ index.js
│  │  │  ├─ modules-calendar.js
│  │  │  ├─ modules-chartjs.js
│  │  │  ├─ modules-datatables.js
│  │  │  ├─ modules-ion-icons.js
│  │  │  ├─ modules-slider.js
│  │  │  ├─ modules-sparkline.js
│  │  │  ├─ modules-sweetalert.js
│  │  │  ├─ modules-toastr.js
│  │  │  ├─ modules-vector-map.js
│  │  │  └─ utilities-contact.js
│  │  ├─ scripts.js
│  │  └─ stisla.js
│  ├─ modules
│  │  ├─ bootstrap
│  │  │  ├─ css
│  │  │  │  ├─ .DS_Store
│  │  │  │  ├─ bootstrap-grid.css
│  │  │  │  ├─ bootstrap-grid.css.map
│  │  │  │  ├─ bootstrap-grid.min.css
│  │  │  │  ├─ bootstrap-grid.min.css.map
│  │  │  │  ├─ bootstrap-reboot.css
│  │  │  │  ├─ bootstrap-reboot.css.map
│  │  │  │  ├─ bootstrap-reboot.min.css
│  │  │  │  ├─ bootstrap-reboot.min.css.map
│  │  │  │  ├─ bootstrap.css
│  │  │  │  ├─ bootstrap.css.map
│  │  │  │  ├─ bootstrap.min.css
│  │  │  │  └─ bootstrap.min.css.map
│  │  │  └─ js
│  │  │     ├─ bootstrap.bundle.js
│  │  │     ├─ bootstrap.bundle.js.map
│  │  │     ├─ bootstrap.bundle.min.js
│  │  │     ├─ bootstrap.bundle.min.js.map
│  │  │     ├─ bootstrap.js
│  │  │     ├─ bootstrap.js.map
│  │  │     ├─ bootstrap.min.js
│  │  │     └─ bootstrap.min.js.map
│  │  ├─ bootstrap-colorpicker
│  │  │  ├─ dist
│  │  │  │  ├─ css
│  │  │  │  │  ├─ bootstrap-colorpicker.css
│  │  │  │  │  ├─ bootstrap-colorpicker.css.map
│  │  │  │  │  ├─ bootstrap-colorpicker.min.css
│  │  │  │  │  └─ bootstrap-colorpicker.min.css.map
│  │  │  │  └─ js
│  │  │  │     ├─ bootstrap-colorpicker.js
│  │  │  │     ├─ bootstrap-colorpicker.js.map
│  │  │  │     ├─ bootstrap-colorpicker.min.js
│  │  │  │     └─ bootstrap-colorpicker.min.js.map
│  │  │  └─ LICENSE
│  │  ├─ bootstrap-daterangepicker
│  │  │  ├─ daterangepicker.css
│  │  │  ├─ daterangepicker.js
│  │  │  ├─ daterangepicker.scss
│  │  │  └─ drp.png
│  │  ├─ bootstrap-social
│  │  │  ├─ bootstrap-social.css
│  │  │  ├─ bootstrap-social.less
│  │  │  ├─ bootstrap-social.scss
│  │  │  └─ LICENSE
│  │  ├─ bootstrap-tagsinput
│  │  │  ├─ dist
│  │  │  │  ├─ bootstrap-tagsinput-angular.js
│  │  │  │  ├─ bootstrap-tagsinput-angular.min.js
│  │  │  │  ├─ bootstrap-tagsinput-angular.min.js.map
│  │  │  │  ├─ bootstrap-tagsinput.css
│  │  │  │  ├─ bootstrap-tagsinput.js
│  │  │  │  ├─ bootstrap-tagsinput.less
│  │  │  │  ├─ bootstrap-tagsinput.min.js
│  │  │  │  └─ bootstrap-tagsinput.min.js.map
│  │  │  └─ LICENSE
│  │  ├─ bootstrap-timepicker
│  │  │  ├─ css
│  │  │  │  ├─ bootstrap-timepicker.css
│  │  │  │  ├─ bootstrap-timepicker.min.css
│  │  │  │  └─ timepicker.less
│  │  │  └─ js
│  │  │     ├─ bootstrap-timepicker.js
│  │  │     └─ bootstrap-timepicker.min.js
│  │  ├─ chart.min.js
│  │  ├─ chocolat
│  │  │  └─ dist
│  │  │     ├─ css
│  │  │     │  └─ chocolat.css
│  │  │     ├─ images
│  │  │     │  ├─ close.png
│  │  │     │  ├─ fullscreen-black.png
│  │  │     │  ├─ fullscreen.png
│  │  │     │  ├─ left.png
│  │  │     │  ├─ loader.gif
│  │  │     │  └─ right.png
│  │  │     ├─ index.html
│  │  │     └─ js
│  │  │        ├─ jquery.chocolat.js
│  │  │        └─ jquery.chocolat.min.js
│  │  ├─ cleave-js
│  │  │  ├─ dist
│  │  │  │  ├─ addons
│  │  │  │  │  ├─ cleave-phone.ac.js
│  │  │  │  │  ├─ cleave-phone.ad.js
│  │  │  │  │  ├─ cleave-phone.ae.js
│  │  │  │  │  ├─ cleave-phone.af.js
│  │  │  │  │  ├─ cleave-phone.ag.js
│  │  │  │  │  ├─ cleave-phone.ai.js
│  │  │  │  │  ├─ cleave-phone.al.js
│  │  │  │  │  ├─ cleave-phone.am.js
│  │  │  │  │  ├─ cleave-phone.ao.js
│  │  │  │  │  ├─ cleave-phone.ar.js
│  │  │  │  │  ├─ cleave-phone.as.js
│  │  │  │  │  ├─ cleave-phone.at.js
│  │  │  │  │  ├─ cleave-phone.au-cn.js
│  │  │  │  │  ├─ cleave-phone.au.js
│  │  │  │  │  ├─ cleave-phone.aw.js
│  │  │  │  │  ├─ cleave-phone.ax.js
│  │  │  │  │  ├─ cleave-phone.az.js
│  │  │  │  │  ├─ cleave-phone.ba.js
│  │  │  │  │  ├─ cleave-phone.bb.js
│  │  │  │  │  ├─ cleave-phone.bd.js
│  │  │  │  │  ├─ cleave-phone.be.js
│  │  │  │  │  ├─ cleave-phone.bf.js
│  │  │  │  │  ├─ cleave-phone.bg.js
│  │  │  │  │  ├─ cleave-phone.bh.js
│  │  │  │  │  ├─ cleave-phone.bi.js
│  │  │  │  │  ├─ cleave-phone.bj.js
│  │  │  │  │  ├─ cleave-phone.bl.js
│  │  │  │  │  ├─ cleave-phone.bm.js
│  │  │  │  │  ├─ cleave-phone.bn.js
│  │  │  │  │  ├─ cleave-phone.bo.js
│  │  │  │  │  ├─ cleave-phone.bq.js
│  │  │  │  │  ├─ cleave-phone.br.js
│  │  │  │  │  ├─ cleave-phone.bs.js
│  │  │  │  │  ├─ cleave-phone.bt.js
│  │  │  │  │  ├─ cleave-phone.bw.js
│  │  │  │  │  ├─ cleave-phone.by.js
│  │  │  │  │  ├─ cleave-phone.bz.js
│  │  │  │  │  ├─ cleave-phone.ca.js
│  │  │  │  │  ├─ cleave-phone.cc.js
│  │  │  │  │  ├─ cleave-phone.cd.js
│  │  │  │  │  ├─ cleave-phone.cf.js
│  │  │  │  │  ├─ cleave-phone.cg.js
│  │  │  │  │  ├─ cleave-phone.ch.js
│  │  │  │  │  ├─ cleave-phone.ci.js
│  │  │  │  │  ├─ cleave-phone.ck.js
│  │  │  │  │  ├─ cleave-phone.cl.js
│  │  │  │  │  ├─ cleave-phone.cm.js
│  │  │  │  │  ├─ cleave-phone.cn.js
│  │  │  │  │  ├─ cleave-phone.co.js
│  │  │  │  │  ├─ cleave-phone.cr.js
│  │  │  │  │  ├─ cleave-phone.cu.js
│  │  │  │  │  ├─ cleave-phone.cv.js
│  │  │  │  │  ├─ cleave-phone.cw.js
│  │  │  │  │  ├─ cleave-phone.cx.js
│  │  │  │  │  ├─ cleave-phone.cy.js
│  │  │  │  │  ├─ cleave-phone.cz.js
│  │  │  │  │  ├─ cleave-phone.de.js
│  │  │  │  │  ├─ cleave-phone.dj.js
│  │  │  │  │  ├─ cleave-phone.dk.js
│  │  │  │  │  ├─ cleave-phone.dm.js
│  │  │  │  │  ├─ cleave-phone.do.js
│  │  │  │  │  ├─ cleave-phone.dz.js
│  │  │  │  │  ├─ cleave-phone.ec.js
│  │  │  │  │  ├─ cleave-phone.ee.js
│  │  │  │  │  ├─ cleave-phone.eg.js
│  │  │  │  │  ├─ cleave-phone.eh.js
│  │  │  │  │  ├─ cleave-phone.er.js
│  │  │  │  │  ├─ cleave-phone.es.js
│  │  │  │  │  ├─ cleave-phone.et.js
│  │  │  │  │  ├─ cleave-phone.fi.js
│  │  │  │  │  ├─ cleave-phone.fj.js
│  │  │  │  │  ├─ cleave-phone.fk.js
│  │  │  │  │  ├─ cleave-phone.fm.js
│  │  │  │  │  ├─ cleave-phone.fo.js
│  │  │  │  │  ├─ cleave-phone.fr.js
│  │  │  │  │  ├─ cleave-phone.ga.js
│  │  │  │  │  ├─ cleave-phone.gb.js
│  │  │  │  │  ├─ cleave-phone.gd.js
│  │  │  │  │  ├─ cleave-phone.ge.js
│  │  │  │  │  ├─ cleave-phone.gf.js
│  │  │  │  │  ├─ cleave-phone.gg.js
│  │  │  │  │  ├─ cleave-phone.gh.js
│  │  │  │  │  ├─ cleave-phone.gi.js
│  │  │  │  │  ├─ cleave-phone.gl.js
│  │  │  │  │  ├─ cleave-phone.gm.js
│  │  │  │  │  ├─ cleave-phone.gn.js
│  │  │  │  │  ├─ cleave-phone.gp.js
│  │  │  │  │  ├─ cleave-phone.gq.js
│  │  │  │  │  ├─ cleave-phone.gr.js
│  │  │  │  │  ├─ cleave-phone.gt.js
│  │  │  │  │  ├─ cleave-phone.gu.js
│  │  │  │  │  ├─ cleave-phone.gw.js
│  │  │  │  │  ├─ cleave-phone.gy.js
│  │  │  │  │  ├─ cleave-phone.hk.js
│  │  │  │  │  ├─ cleave-phone.hn.js
│  │  │  │  │  ├─ cleave-phone.hr.js
│  │  │  │  │  ├─ cleave-phone.ht.js
│  │  │  │  │  ├─ cleave-phone.hu.js
│  │  │  │  │  ├─ cleave-phone.i18n.js
│  │  │  │  │  ├─ cleave-phone.id.js
│  │  │  │  │  ├─ cleave-phone.ie.js
│  │  │  │  │  ├─ cleave-phone.il.js
│  │  │  │  │  ├─ cleave-phone.im.js
│  │  │  │  │  ├─ cleave-phone.in.js
│  │  │  │  │  ├─ cleave-phone.io.js
│  │  │  │  │  ├─ cleave-phone.iq.js
│  │  │  │  │  ├─ cleave-phone.ir.js
│  │  │  │  │  ├─ cleave-phone.is.js
│  │  │  │  │  ├─ cleave-phone.it.js
│  │  │  │  │  ├─ cleave-phone.je.js
│  │  │  │  │  ├─ cleave-phone.jm.js
│  │  │  │  │  ├─ cleave-phone.jo.js
│  │  │  │  │  ├─ cleave-phone.jp.js
│  │  │  │  │  ├─ cleave-phone.ke.js
│  │  │  │  │  ├─ cleave-phone.kg.js
│  │  │  │  │  ├─ cleave-phone.kh.js
│  │  │  │  │  ├─ cleave-phone.ki.js
│  │  │  │  │  ├─ cleave-phone.km.js
│  │  │  │  │  ├─ cleave-phone.kn.js
│  │  │  │  │  ├─ cleave-phone.kp.js
│  │  │  │  │  ├─ cleave-phone.kr.js
│  │  │  │  │  ├─ cleave-phone.kw.js
│  │  │  │  │  ├─ cleave-phone.ky.js
│  │  │  │  │  ├─ cleave-phone.kz.js
│  │  │  │  │  ├─ cleave-phone.la.js
│  │  │  │  │  ├─ cleave-phone.lb.js
│  │  │  │  │  ├─ cleave-phone.lc.js
│  │  │  │  │  ├─ cleave-phone.li.js
│  │  │  │  │  ├─ cleave-phone.lk.js
│  │  │  │  │  ├─ cleave-phone.lr.js
│  │  │  │  │  ├─ cleave-phone.ls.js
│  │  │  │  │  ├─ cleave-phone.lt.js
│  │  │  │  │  ├─ cleave-phone.lu.js
│  │  │  │  │  ├─ cleave-phone.lv.js
│  │  │  │  │  ├─ cleave-phone.ly.js
│  │  │  │  │  ├─ cleave-phone.ma.js
│  │  │  │  │  ├─ cleave-phone.mc.js
│  │  │  │  │  ├─ cleave-phone.md.js
│  │  │  │  │  ├─ cleave-phone.me.js
│  │  │  │  │  ├─ cleave-phone.mf.js
│  │  │  │  │  ├─ cleave-phone.mg.js
│  │  │  │  │  ├─ cleave-phone.mh.js
│  │  │  │  │  ├─ cleave-phone.mk.js
│  │  │  │  │  ├─ cleave-phone.ml.js
│  │  │  │  │  ├─ cleave-phone.mm.js
│  │  │  │  │  ├─ cleave-phone.mn.js
│  │  │  │  │  ├─ cleave-phone.mo.js
│  │  │  │  │  ├─ cleave-phone.mp.js
│  │  │  │  │  ├─ cleave-phone.mq.js
│  │  │  │  │  ├─ cleave-phone.mr.js
│  │  │  │  │  ├─ cleave-phone.ms.js
│  │  │  │  │  ├─ cleave-phone.mt.js
│  │  │  │  │  ├─ cleave-phone.mu.js
│  │  │  │  │  ├─ cleave-phone.mv.js
│  │  │  │  │  ├─ cleave-phone.mw.js
│  │  │  │  │  ├─ cleave-phone.mx.js
│  │  │  │  │  ├─ cleave-phone.my.js
│  │  │  │  │  ├─ cleave-phone.mz.js
│  │  │  │  │  ├─ cleave-phone.na.js
│  │  │  │  │  ├─ cleave-phone.nc.js
│  │  │  │  │  ├─ cleave-phone.ne.js
│  │  │  │  │  ├─ cleave-phone.nf.js
│  │  │  │  │  ├─ cleave-phone.ng.js
│  │  │  │  │  ├─ cleave-phone.ni.js
│  │  │  │  │  ├─ cleave-phone.nl.js
│  │  │  │  │  ├─ cleave-phone.no.js
│  │  │  │  │  ├─ cleave-phone.np.js
│  │  │  │  │  ├─ cleave-phone.nr.js
│  │  │  │  │  ├─ cleave-phone.nu.js
│  │  │  │  │  ├─ cleave-phone.nz.js
│  │  │  │  │  ├─ cleave-phone.om.js
│  │  │  │  │  ├─ cleave-phone.pa.js
│  │  │  │  │  ├─ cleave-phone.pe.js
│  │  │  │  │  ├─ cleave-phone.pf.js
│  │  │  │  │  ├─ cleave-phone.pg.js
│  │  │  │  │  ├─ cleave-phone.ph.js
│  │  │  │  │  ├─ cleave-phone.pk.js
│  │  │  │  │  ├─ cleave-phone.pl.js
│  │  │  │  │  ├─ cleave-phone.pm.js
│  │  │  │  │  ├─ cleave-phone.pr.js
│  │  │  │  │  ├─ cleave-phone.ps.js
│  │  │  │  │  ├─ cleave-phone.pt.js
│  │  │  │  │  ├─ cleave-phone.pw.js
│  │  │  │  │  ├─ cleave-phone.py.js
│  │  │  │  │  ├─ cleave-phone.qa.js
│  │  │  │  │  ├─ cleave-phone.re.js
│  │  │  │  │  ├─ cleave-phone.ro.js
│  │  │  │  │  ├─ cleave-phone.rs.js
│  │  │  │  │  ├─ cleave-phone.ru.js
│  │  │  │  │  ├─ cleave-phone.rw.js
│  │  │  │  │  ├─ cleave-phone.sa.js
│  │  │  │  │  ├─ cleave-phone.sb.js
│  │  │  │  │  ├─ cleave-phone.sc.js
│  │  │  │  │  ├─ cleave-phone.sd.js
│  │  │  │  │  ├─ cleave-phone.se.js
│  │  │  │  │  ├─ cleave-phone.sg.js
│  │  │  │  │  ├─ cleave-phone.sh.js
│  │  │  │  │  ├─ cleave-phone.si.js
│  │  │  │  │  ├─ cleave-phone.sj.js
│  │  │  │  │  ├─ cleave-phone.sk.js
│  │  │  │  │  ├─ cleave-phone.sl.js
│  │  │  │  │  ├─ cleave-phone.sm.js
│  │  │  │  │  ├─ cleave-phone.sn.js
│  │  │  │  │  ├─ cleave-phone.so.js
│  │  │  │  │  ├─ cleave-phone.sr.js
│  │  │  │  │  ├─ cleave-phone.ss.js
│  │  │  │  │  ├─ cleave-phone.st.js
│  │  │  │  │  ├─ cleave-phone.sv.js
│  │  │  │  │  ├─ cleave-phone.sx.js
│  │  │  │  │  ├─ cleave-phone.sy.js
│  │  │  │  │  ├─ cleave-phone.sz.js
│  │  │  │  │  ├─ cleave-phone.ta.js
│  │  │  │  │  ├─ cleave-phone.tc.js
│  │  │  │  │  ├─ cleave-phone.td.js
│  │  │  │  │  ├─ cleave-phone.tg.js
│  │  │  │  │  ├─ cleave-phone.th.js
│  │  │  │  │  ├─ cleave-phone.tj.js
│  │  │  │  │  ├─ cleave-phone.tk.js
│  │  │  │  │  ├─ cleave-phone.tl.js
│  │  │  │  │  ├─ cleave-phone.tm.js
│  │  │  │  │  ├─ cleave-phone.tn.js
│  │  │  │  │  ├─ cleave-phone.to.js
│  │  │  │  │  ├─ cleave-phone.tr.js
│  │  │  │  │  ├─ cleave-phone.tt.js
│  │  │  │  │  ├─ cleave-phone.tv.js
│  │  │  │  │  ├─ cleave-phone.tw.js
│  │  │  │  │  ├─ cleave-phone.tz.js
│  │  │  │  │  ├─ cleave-phone.ua.js
│  │  │  │  │  ├─ cleave-phone.ug.js
│  │  │  │  │  ├─ cleave-phone.us.js
│  │  │  │  │  ├─ cleave-phone.uy.js
│  │  │  │  │  ├─ cleave-phone.uz.js
│  │  │  │  │  ├─ cleave-phone.va.js
│  │  │  │  │  ├─ cleave-phone.vc.js
│  │  │  │  │  ├─ cleave-phone.ve.js
│  │  │  │  │  ├─ cleave-phone.vg.js
│  │  │  │  │  ├─ cleave-phone.vi.js
│  │  │  │  │  ├─ cleave-phone.vn.js
│  │  │  │  │  ├─ cleave-phone.vu.js
│  │  │  │  │  ├─ cleave-phone.wf.js
│  │  │  │  │  ├─ cleave-phone.ws.js
│  │  │  │  │  ├─ cleave-phone.ye.js
│  │  │  │  │  ├─ cleave-phone.yt.js
│  │  │  │  │  ├─ cleave-phone.za.js
│  │  │  │  │  ├─ cleave-phone.zm.js
│  │  │  │  │  └─ cleave-phone.zw.js
│  │  │  │  ├─ cleave-angular.js
│  │  │  │  ├─ cleave-angular.min.js
│  │  │  │  ├─ cleave-react-node.js
│  │  │  │  ├─ cleave-react-node.min.js
│  │  │  │  ├─ cleave-react.js
│  │  │  │  ├─ cleave-react.min.js
│  │  │  │  ├─ cleave.js
│  │  │  │  └─ cleave.min.js
│  │  │  └─ LICENSE
│  │  ├─ codemirror
│  │  │  ├─ addon
│  │  │  │  ├─ comment
│  │  │  │  │  ├─ comment.js
│  │  │  │  │  └─ continuecomment.js
│  │  │  │  ├─ dialog
│  │  │  │  │  ├─ dialog.css
│  │  │  │  │  └─ dialog.js
│  │  │  │  ├─ display
│  │  │  │  │  ├─ autorefresh.js
│  │  │  │  │  ├─ fullscreen.css
│  │  │  │  │  ├─ fullscreen.js
│  │  │  │  │  ├─ panel.js
│  │  │  │  │  ├─ placeholder.js
│  │  │  │  │  └─ rulers.js
│  │  │  │  ├─ edit
│  │  │  │  │  ├─ closebrackets.js
│  │  │  │  │  ├─ closetag.js
│  │  │  │  │  ├─ continuelist.js
│  │  │  │  │  ├─ matchbrackets.js
│  │  │  │  │  ├─ matchtags.js
│  │  │  │  │  └─ trailingspace.js
│  │  │  │  ├─ fold
│  │  │  │  │  ├─ brace-fold.js
│  │  │  │  │  ├─ comment-fold.js
│  │  │  │  │  ├─ foldcode.js
│  │  │  │  │  ├─ foldgutter.css
│  │  │  │  │  ├─ foldgutter.js
│  │  │  │  │  ├─ indent-fold.js
│  │  │  │  │  ├─ markdown-fold.js
│  │  │  │  │  └─ xml-fold.js
│  │  │  │  ├─ hint
│  │  │  │  │  ├─ anyword-hint.js
│  │  │  │  │  ├─ css-hint.js
│  │  │  │  │  ├─ html-hint.js
│  │  │  │  │  ├─ javascript-hint.js
│  │  │  │  │  ├─ show-hint.css
│  │  │  │  │  ├─ show-hint.js
│  │  │  │  │  ├─ sql-hint.js
│  │  │  │  │  └─ xml-hint.js
│  │  │  │  ├─ lint
│  │  │  │  │  ├─ coffeescript-lint.js
│  │  │  │  │  ├─ css-lint.js
│  │  │  │  │  ├─ html-lint.js
│  │  │  │  │  ├─ javascript-lint.js
│  │  │  │  │  ├─ json-lint.js
│  │  │  │  │  ├─ lint.css
│  │  │  │  │  ├─ lint.js
│  │  │  │  │  └─ yaml-lint.js
│  │  │  │  ├─ merge
│  │  │  │  │  ├─ merge.css
│  │  │  │  │  └─ merge.js
│  │  │  │  ├─ mode
│  │  │  │  │  ├─ loadmode.js
│  │  │  │  │  ├─ multiplex.js
│  │  │  │  │  ├─ multiplex_test.js
│  │  │  │  │  ├─ overlay.js
│  │  │  │  │  └─ simple.js
│  │  │  │  ├─ runmode
│  │  │  │  │  ├─ colorize.js
│  │  │  │  │  ├─ runmode-standalone.js
│  │  │  │  │  ├─ runmode.js
│  │  │  │  │  └─ runmode.node.js
│  │  │  │  ├─ scroll
│  │  │  │  │  ├─ annotatescrollbar.js
│  │  │  │  │  ├─ scrollpastend.js
│  │  │  │  │  ├─ simplescrollbars.css
│  │  │  │  │  └─ simplescrollbars.js
│  │  │  │  ├─ search
│  │  │  │  │  ├─ jump-to-line.js
│  │  │  │  │  ├─ match-highlighter.js
│  │  │  │  │  ├─ matchesonscrollbar.css
│  │  │  │  │  ├─ matchesonscrollbar.js
│  │  │  │  │  ├─ search.js
│  │  │  │  │  └─ searchcursor.js
│  │  │  │  ├─ selection
│  │  │  │  │  ├─ active-line.js
│  │  │  │  │  ├─ mark-selection.js
│  │  │  │  │  └─ selection-pointer.js
│  │  │  │  ├─ tern
│  │  │  │  │  ├─ tern.css
│  │  │  │  │  ├─ tern.js
│  │  │  │  │  └─ worker.js
│  │  │  │  └─ wrap
│  │  │  │     └─ hardwrap.js
│  │  │  ├─ bin
│  │  │  │  ├─ authors.sh
│  │  │  │  ├─ lint
│  │  │  │  ├─ release
│  │  │  │  ├─ source-highlight
│  │  │  │  └─ upload-release.js
│  │  │  ├─ keymap
│  │  │  │  ├─ emacs.js
│  │  │  │  ├─ sublime.js
│  │  │  │  └─ vim.js
│  │  │  ├─ lib
│  │  │  │  ├─ codemirror.css
│  │  │  │  └─ codemirror.js
│  │  │  ├─ LICENSE
│  │  │  ├─ mode
│  │  │  │  ├─ apl
│  │  │  │  │  ├─ apl.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ asciiarmor
│  │  │  │  │  ├─ asciiarmor.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ asn.1
│  │  │  │  │  ├─ asn.1.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ asterisk
│  │  │  │  │  ├─ asterisk.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ brainfuck
│  │  │  │  │  ├─ brainfuck.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ clike
│  │  │  │  │  ├─ clike.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ scala.html
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ clojure
│  │  │  │  │  ├─ clojure.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ cmake
│  │  │  │  │  ├─ cmake.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ cobol
│  │  │  │  │  ├─ cobol.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ coffeescript
│  │  │  │  │  ├─ coffeescript.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ commonlisp
│  │  │  │  │  ├─ commonlisp.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ crystal
│  │  │  │  │  ├─ crystal.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ css
│  │  │  │  │  ├─ css.js
│  │  │  │  │  ├─ gss.html
│  │  │  │  │  ├─ gss_test.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ less.html
│  │  │  │  │  ├─ less_test.js
│  │  │  │  │  ├─ scss.html
│  │  │  │  │  ├─ scss_test.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ cypher
│  │  │  │  │  ├─ cypher.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ d
│  │  │  │  │  ├─ d.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ dart
│  │  │  │  │  ├─ dart.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ diff
│  │  │  │  │  ├─ diff.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ django
│  │  │  │  │  ├─ django.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ dockerfile
│  │  │  │  │  ├─ dockerfile.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ dtd
│  │  │  │  │  ├─ dtd.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ dylan
│  │  │  │  │  ├─ dylan.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ ebnf
│  │  │  │  │  ├─ ebnf.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ ecl
│  │  │  │  │  ├─ ecl.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ eiffel
│  │  │  │  │  ├─ eiffel.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ elm
│  │  │  │  │  ├─ elm.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ erlang
│  │  │  │  │  ├─ erlang.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ factor
│  │  │  │  │  ├─ factor.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ fcl
│  │  │  │  │  ├─ fcl.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ forth
│  │  │  │  │  ├─ forth.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ fortran
│  │  │  │  │  ├─ fortran.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ gas
│  │  │  │  │  ├─ gas.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ gfm
│  │  │  │  │  ├─ gfm.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ gherkin
│  │  │  │  │  ├─ gherkin.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ go
│  │  │  │  │  ├─ go.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ groovy
│  │  │  │  │  ├─ groovy.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ haml
│  │  │  │  │  ├─ haml.js
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ handlebars
│  │  │  │  │  ├─ handlebars.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ haskell
│  │  │  │  │  ├─ haskell.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ haskell-literate
│  │  │  │  │  ├─ haskell-literate.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ haxe
│  │  │  │  │  ├─ haxe.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ htmlembedded
│  │  │  │  │  ├─ htmlembedded.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ htmlmixed
│  │  │  │  │  ├─ htmlmixed.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ http
│  │  │  │  │  ├─ http.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ idl
│  │  │  │  │  ├─ idl.js
│  │  │  │  │  └─ index.html
│  │  │  │  ├─ index.html
│  │  │  │  ├─ javascript
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ javascript.js
│  │  │  │  │  ├─ json-ld.html
│  │  │  │  │  ├─ test.js
│  │  │  │  │  └─ typescript.html
│  │  │  │  ├─ jinja2
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ jinja2.js
│  │  │  │  ├─ jsx
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ jsx.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ julia
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ julia.js
│  │  │  │  ├─ livescript
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ livescript.js
│  │  │  │  ├─ lua
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ lua.js
│  │  │  │  ├─ markdown
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ markdown.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ mathematica
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ mathematica.js
│  │  │  │  ├─ mbox
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ mbox.js
│  │  │  │  ├─ meta.js
│  │  │  │  ├─ mirc
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ mirc.js
│  │  │  │  ├─ mllike
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ mllike.js
│  │  │  │  ├─ modelica
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ modelica.js
│  │  │  │  ├─ mscgen
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ mscgen.js
│  │  │  │  │  ├─ mscgen_test.js
│  │  │  │  │  ├─ msgenny_test.js
│  │  │  │  │  └─ xu_test.js
│  │  │  │  ├─ mumps
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ mumps.js
│  │  │  │  ├─ nginx
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ nginx.js
│  │  │  │  ├─ nsis
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ nsis.js
│  │  │  │  ├─ ntriples
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ ntriples.js
│  │  │  │  ├─ octave
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ octave.js
│  │  │  │  ├─ oz
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ oz.js
│  │  │  │  ├─ pascal
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ pascal.js
│  │  │  │  ├─ pegjs
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ pegjs.js
│  │  │  │  ├─ perl
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ perl.js
│  │  │  │  ├─ php
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ php.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ pig
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ pig.js
│  │  │  │  ├─ powershell
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ powershell.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ properties
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ properties.js
│  │  │  │  ├─ protobuf
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ protobuf.js
│  │  │  │  ├─ pug
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ pug.js
│  │  │  │  ├─ puppet
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ puppet.js
│  │  │  │  ├─ python
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ python.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ q
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ q.js
│  │  │  │  ├─ r
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ r.js
│  │  │  │  ├─ rpm
│  │  │  │  │  ├─ changes
│  │  │  │  │  │  └─ index.html
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ rpm.js
│  │  │  │  ├─ rst
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ rst.js
│  │  │  │  ├─ ruby
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ ruby.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ rust
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ rust.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ sas
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ sas.js
│  │  │  │  ├─ sass
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ sass.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ scheme
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ scheme.js
│  │  │  │  ├─ shell
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ shell.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ sieve
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ sieve.js
│  │  │  │  ├─ slim
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ slim.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ smalltalk
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ smalltalk.js
│  │  │  │  ├─ smarty
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ smarty.js
│  │  │  │  ├─ solr
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ solr.js
│  │  │  │  ├─ soy
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ soy.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ sparql
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ sparql.js
│  │  │  │  ├─ spreadsheet
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ spreadsheet.js
│  │  │  │  ├─ sql
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ sql.js
│  │  │  │  ├─ stex
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ stex.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ stylus
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ stylus.js
│  │  │  │  ├─ swift
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ swift.js
│  │  │  │  │  └─ test.js
│  │  │  │  ├─ tcl
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ tcl.js
│  │  │  │  ├─ textile
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ test.js
│  │  │  │  │  └─ textile.js
│  │  │  │  ├─ tiddlywiki
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ tiddlywiki.css
│  │  │  │  │  └─ tiddlywiki.js
│  │  │  │  ├─ tiki
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ tiki.css
│  │  │  │  │  └─ tiki.js
│  │  │  │  ├─ toml
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ toml.js
│  │  │  │  ├─ tornado
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ tornado.js
│  │  │  │  ├─ troff
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ troff.js
│  │  │  │  ├─ ttcn
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ ttcn.js
│  │  │  │  ├─ ttcn-cfg
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ ttcn-cfg.js
│  │  │  │  ├─ turtle
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ turtle.js
│  │  │  │  ├─ twig
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ twig.js
│  │  │  │  ├─ vb
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ vb.js
│  │  │  │  ├─ vbscript
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ vbscript.js
│  │  │  │  ├─ velocity
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ velocity.js
│  │  │  │  ├─ verilog
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ test.js
│  │  │  │  │  └─ verilog.js
│  │  │  │  ├─ vhdl
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ vhdl.js
│  │  │  │  ├─ vue
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ vue.js
│  │  │  │  ├─ webidl
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ webidl.js
│  │  │  │  ├─ xml
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ test.js
│  │  │  │  │  └─ xml.js
│  │  │  │  ├─ xquery
│  │  │  │  │  ├─ index.html
│  │  │  │  │  ├─ test.js
│  │  │  │  │  └─ xquery.js
│  │  │  │  ├─ yacas
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ yacas.js
│  │  │  │  ├─ yaml
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ yaml.js
│  │  │  │  ├─ yaml-frontmatter
│  │  │  │  │  ├─ index.html
│  │  │  │  │  └─ yaml-frontmatter.js
│  │  │  │  └─ z80
│  │  │  │     ├─ index.html
│  │  │  │     └─ z80.js
│  │  │  ├─ rollup.config.js
│  │  │  └─ theme
│  │  │     ├─ 3024-day.css
│  │  │     ├─ 3024-night.css
│  │  │     ├─ abcdef.css
│  │  │     ├─ ambiance-mobile.css
│  │  │     ├─ ambiance.css
│  │  │     ├─ base16-dark.css
│  │  │     ├─ base16-light.css
│  │  │     ├─ bespin.css
│  │  │     ├─ blackboard.css
│  │  │     ├─ cobalt.css
│  │  │     ├─ colorforth.css
│  │  │     ├─ dracula.css
│  │  │     ├─ duotone-dark.css
│  │  │     ├─ duotone-light.css
│  │  │     ├─ eclipse.css
│  │  │     ├─ elegant.css
│  │  │     ├─ erlang-dark.css
│  │  │     ├─ hopscotch.css
│  │  │     ├─ icecoder.css
│  │  │     ├─ isotope.css
│  │  │     ├─ lesser-dark.css
│  │  │     ├─ liquibyte.css
│  │  │     ├─ material.css
│  │  │     ├─ mbo.css
│  │  │     ├─ mdn-like.css
│  │  │     ├─ midnight.css
│  │  │     ├─ monokai.css
│  │  │     ├─ neat.css
│  │  │     ├─ neo.css
│  │  │     ├─ night.css
│  │  │     ├─ panda-syntax.css
│  │  │     ├─ paraiso-dark.css
│  │  │     ├─ paraiso-light.css
│  │  │     ├─ pastel-on-dark.css
│  │  │     ├─ railscasts.css
│  │  │     ├─ rubyblue.css
│  │  │     ├─ seti.css
│  │  │     ├─ solarized.css
│  │  │     ├─ the-matrix.css
│  │  │     ├─ tomorrow-night-bright.css
│  │  │     ├─ tomorrow-night-eighties.css
│  │  │     ├─ ttcn.css
│  │  │     ├─ twilight.css
│  │  │     ├─ vibrant-ink.css
│  │  │     ├─ xq-dark.css
│  │  │     ├─ xq-light.css
│  │  │     ├─ yeti.css
│  │  │     └─ zenburn.css
│  │  ├─ datatables
│  │  │  ├─ DataTables-1.10.16
│  │  │  │  ├─ css
│  │  │  │  │  ├─ dataTables.bootstrap.css
│  │  │  │  │  ├─ dataTables.bootstrap.min.css
│  │  │  │  │  ├─ dataTables.bootstrap4.css
│  │  │  │  │  ├─ dataTables.bootstrap4.min.css
│  │  │  │  │  ├─ dataTables.foundation.css
│  │  │  │  │  ├─ dataTables.foundation.min.css
│  │  │  │  │  ├─ dataTables.jqueryui.css
│  │  │  │  │  ├─ dataTables.jqueryui.min.css
│  │  │  │  │  ├─ dataTables.semanticui.css
│  │  │  │  │  ├─ dataTables.semanticui.min.css
│  │  │  │  │  ├─ jquery.dataTables.css
│  │  │  │  │  └─ jquery.dataTables.min.css
│  │  │  │  ├─ images
│  │  │  │  │  ├─ sort_asc.png
│  │  │  │  │  ├─ sort_asc_disabled.png
│  │  │  │  │  ├─ sort_both.png
│  │  │  │  │  ├─ sort_desc.png
│  │  │  │  │  └─ sort_desc_disabled.png
│  │  │  │  └─ js
│  │  │  │     ├─ dataTables.bootstrap.js
│  │  │  │     ├─ dataTables.bootstrap.min.js
│  │  │  │     ├─ dataTables.bootstrap4.js
│  │  │  │     ├─ dataTables.bootstrap4.min.js
│  │  │  │     ├─ dataTables.foundation.js
│  │  │  │     ├─ dataTables.foundation.min.js
│  │  │  │     ├─ dataTables.jqueryui.js
│  │  │  │     ├─ dataTables.jqueryui.min.js
│  │  │  │     ├─ dataTables.semanticui.js
│  │  │  │     ├─ dataTables.semanticui.min.js
│  │  │  │     ├─ jquery.dataTables.js
│  │  │  │     └─ jquery.dataTables.min.js
│  │  │  ├─ datatables.css
│  │  │  ├─ datatables.js
│  │  │  ├─ dataTables.min.css
│  │  │  ├─ dataTables.min.js
│  │  │  ├─ Responsive-2.2.1
│  │  │  │  ├─ css
│  │  │  │  │  ├─ responsive.bootstrap.css
│  │  │  │  │  ├─ responsive.bootstrap.min.css
│  │  │  │  │  ├─ responsive.bootstrap4.css
│  │  │  │  │  ├─ responsive.bootstrap4.min.css
│  │  │  │  │  ├─ responsive.dataTables.css
│  │  │  │  │  ├─ responsive.dataTables.min.css
│  │  │  │  │  ├─ responsive.foundation.css
│  │  │  │  │  ├─ responsive.foundation.min.css
│  │  │  │  │  ├─ responsive.jqueryui.css
│  │  │  │  │  ├─ responsive.jqueryui.min.css
│  │  │  │  │  ├─ responsive.semanticui.css
│  │  │  │  │  └─ responsive.semanticui.min.css
│  │  │  │  └─ js
│  │  │  │     ├─ dataTables.responsive.js
│  │  │  │     ├─ dataTables.responsive.min.js
│  │  │  │     ├─ responsive.bootstrap.js
│  │  │  │     ├─ responsive.bootstrap.min.js
│  │  │  │     ├─ responsive.bootstrap4.js
│  │  │  │     ├─ responsive.bootstrap4.min.js
│  │  │  │     ├─ responsive.foundation.js
│  │  │  │     ├─ responsive.foundation.min.js
│  │  │  │     ├─ responsive.jqueryui.js
│  │  │  │     ├─ responsive.jqueryui.min.js
│  │  │  │     ├─ responsive.semanticui.js
│  │  │  │     └─ responsive.semanticui.min.js
│  │  │  └─ Select-1.2.4
│  │  │     ├─ css
│  │  │     │  ├─ select.bootstrap.css
│  │  │     │  ├─ select.bootstrap.min.css
│  │  │     │  ├─ select.bootstrap4.css
│  │  │     │  ├─ select.bootstrap4.min.css
│  │  │     │  ├─ select.dataTables.css
│  │  │     │  ├─ select.dataTables.min.css
│  │  │     │  ├─ select.foundation.css
│  │  │     │  ├─ select.foundation.min.css
│  │  │     │  ├─ select.jqueryui.css
│  │  │     │  ├─ select.jqueryui.min.css
│  │  │     │  ├─ select.semanticui.css
│  │  │     │  └─ select.semanticui.min.css
│  │  │     └─ js
│  │  │        ├─ dataTables.select.js
│  │  │        └─ dataTables.select.min.js
│  │  ├─ dropzonejs
│  │  │  ├─ basic.css
│  │  │  ├─ dropzone-amd-module.js
│  │  │  ├─ dropzone.css
│  │  │  ├─ dropzone.js
│  │  │  └─ min
│  │  │     ├─ basic.min.css
│  │  │     ├─ dropzone-amd-module.min.js
│  │  │     ├─ dropzone.min.css
│  │  │     └─ dropzone.min.js
│  │  ├─ flag-icon-css
│  │  │  ├─ css
│  │  │  │  ├─ flag-icon.css
│  │  │  │  └─ flag-icon.min.css
│  │  │  ├─ flags
│  │  │  │  ├─ 1x1
│  │  │  │  │  ├─ ad.svg
│  │  │  │  │  ├─ ae.svg
│  │  │  │  │  ├─ af.svg
│  │  │  │  │  ├─ ag.svg
│  │  │  │  │  ├─ ai.svg
│  │  │  │  │  ├─ al.svg
│  │  │  │  │  ├─ am.svg
│  │  │  │  │  ├─ ao.svg
│  │  │  │  │  ├─ aq.svg
│  │  │  │  │  ├─ ar.svg
│  │  │  │  │  ├─ as.svg
│  │  │  │  │  ├─ at.svg
│  │  │  │  │  ├─ au.svg
│  │  │  │  │  ├─ aw.svg
│  │  │  │  │  ├─ ax.svg
│  │  │  │  │  ├─ az.svg
│  │  │  │  │  ├─ ba.svg
│  │  │  │  │  ├─ bb.svg
│  │  │  │  │  ├─ bd.svg
│  │  │  │  │  ├─ be.svg
│  │  │  │  │  ├─ bf.svg
│  │  │  │  │  ├─ bg.svg
│  │  │  │  │  ├─ bh.svg
│  │  │  │  │  ├─ bi.svg
│  │  │  │  │  ├─ bj.svg
│  │  │  │  │  ├─ bl.svg
│  │  │  │  │  ├─ bm.svg
│  │  │  │  │  ├─ bn.svg
│  │  │  │  │  ├─ bo.svg
│  │  │  │  │  ├─ bq.svg
│  │  │  │  │  ├─ br.svg
│  │  │  │  │  ├─ bs.svg
│  │  │  │  │  ├─ bt.svg
│  │  │  │  │  ├─ bv.svg
│  │  │  │  │  ├─ bw.svg
│  │  │  │  │  ├─ by.svg
│  │  │  │  │  ├─ bz.svg
│  │  │  │  │  ├─ ca.svg
│  │  │  │  │  ├─ cc.svg
│  │  │  │  │  ├─ cd.svg
│  │  │  │  │  ├─ cf.svg
│  │  │  │  │  ├─ cg.svg
│  │  │  │  │  ├─ ch.svg
│  │  │  │  │  ├─ ci.svg
│  │  │  │  │  ├─ ck.svg
│  │  │  │  │  ├─ cl.svg
│  │  │  │  │  ├─ cm.svg
│  │  │  │  │  ├─ cn.svg
│  │  │  │  │  ├─ co.svg
│  │  │  │  │  ├─ cr.svg
│  │  │  │  │  ├─ cu.svg
│  │  │  │  │  ├─ cv.svg
│  │  │  │  │  ├─ cw.svg
│  │  │  │  │  ├─ cx.svg
│  │  │  │  │  ├─ cy.svg
│  │  │  │  │  ├─ cz.svg
│  │  │  │  │  ├─ de.svg
│  │  │  │  │  ├─ dj.svg
│  │  │  │  │  ├─ dk.svg
│  │  │  │  │  ├─ dm.svg
│  │  │  │  │  ├─ do.svg
│  │  │  │  │  ├─ dz.svg
│  │  │  │  │  ├─ ec.svg
│  │  │  │  │  ├─ ee.svg
│  │  │  │  │  ├─ eg.svg
│  │  │  │  │  ├─ eh.svg
│  │  │  │  │  ├─ er.svg
│  │  │  │  │  ├─ es-ct.svg
│  │  │  │  │  ├─ es.svg
│  │  │  │  │  ├─ et.svg
│  │  │  │  │  ├─ eu.svg
│  │  │  │  │  ├─ fi.svg
│  │  │  │  │  ├─ fj.svg
│  │  │  │  │  ├─ fk.svg
│  │  │  │  │  ├─ fm.svg
│  │  │  │  │  ├─ fo.svg
│  │  │  │  │  ├─ fr.svg
│  │  │  │  │  ├─ ga.svg
│  │  │  │  │  ├─ gb-eng.svg
│  │  │  │  │  ├─ gb-nir.svg
│  │  │  │  │  ├─ gb-sct.svg
│  │  │  │  │  ├─ gb-wls.svg
│  │  │  │  │  ├─ gb.svg
│  │  │  │  │  ├─ gd.svg
│  │  │  │  │  ├─ ge.svg
│  │  │  │  │  ├─ gf.svg
│  │  │  │  │  ├─ gg.svg
│  │  │  │  │  ├─ gh.svg
│  │  │  │  │  ├─ gi.svg
│  │  │  │  │  ├─ gl.svg
│  │  │  │  │  ├─ gm.svg
│  │  │  │  │  ├─ gn.svg
│  │  │  │  │  ├─ gp.svg
│  │  │  │  │  ├─ gq.svg
│  │  │  │  │  ├─ gr.svg
│  │  │  │  │  ├─ gs.svg
│  │  │  │  │  ├─ gt.svg
│  │  │  │  │  ├─ gu.svg
│  │  │  │  │  ├─ gw.svg
│  │  │  │  │  ├─ gy.svg
│  │  │  │  │  ├─ hk.svg
│  │  │  │  │  ├─ hm.svg
│  │  │  │  │  ├─ hn.svg
│  │  │  │  │  ├─ hr.svg
│  │  │  │  │  ├─ ht.svg
│  │  │  │  │  ├─ hu.svg
│  │  │  │  │  ├─ id.svg
│  │  │  │  │  ├─ ie.svg
│  │  │  │  │  ├─ il.svg
│  │  │  │  │  ├─ im.svg
│  │  │  │  │  ├─ in.svg
│  │  │  │  │  ├─ io.svg
│  │  │  │  │  ├─ iq.svg
│  │  │  │  │  ├─ ir.svg
│  │  │  │  │  ├─ is.svg
│  │  │  │  │  ├─ it.svg
│  │  │  │  │  ├─ je.svg
│  │  │  │  │  ├─ jm.svg
│  │  │  │  │  ├─ jo.svg
│  │  │  │  │  ├─ jp.svg
│  │  │  │  │  ├─ ke.svg
│  │  │  │  │  ├─ kg.svg
│  │  │  │  │  ├─ kh.svg
│  │  │  │  │  ├─ ki.svg
│  │  │  │  │  ├─ km.svg
│  │  │  │  │  ├─ kn.svg
│  │  │  │  │  ├─ kp.svg
│  │  │  │  │  ├─ kr.svg
│  │  │  │  │  ├─ kw.svg
│  │  │  │  │  ├─ ky.svg
│  │  │  │  │  ├─ kz.svg
│  │  │  │  │  ├─ la.svg
│  │  │  │  │  ├─ lb.svg
│  │  │  │  │  ├─ lc.svg
│  │  │  │  │  ├─ li.svg
│  │  │  │  │  ├─ lk.svg
│  │  │  │  │  ├─ lr.svg
│  │  │  │  │  ├─ ls.svg
│  │  │  │  │  ├─ lt.svg
│  │  │  │  │  ├─ lu.svg
│  │  │  │  │  ├─ lv.svg
│  │  │  │  │  ├─ ly.svg
│  │  │  │  │  ├─ ma.svg
│  │  │  │  │  ├─ mc.svg
│  │  │  │  │  ├─ md.svg
│  │  │  │  │  ├─ me.svg
│  │  │  │  │  ├─ mf.svg
│  │  │  │  │  ├─ mg.svg
│  │  │  │  │  ├─ mh.svg
│  │  │  │  │  ├─ mk.svg
│  │  │  │  │  ├─ ml.svg
│  │  │  │  │  ├─ mm.svg
│  │  │  │  │  ├─ mn.svg
│  │  │  │  │  ├─ mo.svg
│  │  │  │  │  ├─ mp.svg
│  │  │  │  │  ├─ mq.svg
│  │  │  │  │  ├─ mr.svg
│  │  │  │  │  ├─ ms.svg
│  │  │  │  │  ├─ mt.svg
│  │  │  │  │  ├─ mu.svg
│  │  │  │  │  ├─ mv.svg
│  │  │  │  │  ├─ mw.svg
│  │  │  │  │  ├─ mx.svg
│  │  │  │  │  ├─ my.svg
│  │  │  │  │  ├─ mz.svg
│  │  │  │  │  ├─ na.svg
│  │  │  │  │  ├─ nc.svg
│  │  │  │  │  ├─ ne.svg
│  │  │  │  │  ├─ nf.svg
│  │  │  │  │  ├─ ng.svg
│  │  │  │  │  ├─ ni.svg
│  │  │  │  │  ├─ nl.svg
│  │  │  │  │  ├─ no.svg
│  │  │  │  │  ├─ np.svg
│  │  │  │  │  ├─ nr.svg
│  │  │  │  │  ├─ nu.svg
│  │  │  │  │  ├─ nz.svg
│  │  │  │  │  ├─ om.svg
│  │  │  │  │  ├─ pa.svg
│  │  │  │  │  ├─ pe.svg
│  │  │  │  │  ├─ pf.svg
│  │  │  │  │  ├─ pg.svg
│  │  │  │  │  ├─ ph.svg
│  │  │  │  │  ├─ pk.svg
│  │  │  │  │  ├─ pl.svg
│  │  │  │  │  ├─ pm.svg
│  │  │  │  │  ├─ pn.svg
│  │  │  │  │  ├─ pr.svg
│  │  │  │  │  ├─ ps.svg
│  │  │  │  │  ├─ pt.svg
│  │  │  │  │  ├─ pw.svg
│  │  │  │  │  ├─ py.svg
│  │  │  │  │  ├─ qa.svg
│  │  │  │  │  ├─ re.svg
│  │  │  │  │  ├─ ro.svg
│  │  │  │  │  ├─ rs.svg
│  │  │  │  │  ├─ ru.svg
│  │  │  │  │  ├─ rw.svg
│  │  │  │  │  ├─ sa.svg
│  │  │  │  │  ├─ sb.svg
│  │  │  │  │  ├─ sc.svg
│  │  │  │  │  ├─ sd.svg
│  │  │  │  │  ├─ se.svg
│  │  │  │  │  ├─ sg.svg
│  │  │  │  │  ├─ sh.svg
│  │  │  │  │  ├─ si.svg
│  │  │  │  │  ├─ sj.svg
│  │  │  │  │  ├─ sk.svg
│  │  │  │  │  ├─ sl.svg
│  │  │  │  │  ├─ sm.svg
│  │  │  │  │  ├─ sn.svg
│  │  │  │  │  ├─ so.svg
│  │  │  │  │  ├─ sr.svg
│  │  │  │  │  ├─ ss.svg
│  │  │  │  │  ├─ st.svg
│  │  │  │  │  ├─ sv.svg
│  │  │  │  │  ├─ sx.svg
│  │  │  │  │  ├─ sy.svg
│  │  │  │  │  ├─ sz.svg
│  │  │  │  │  ├─ tc.svg
│  │  │  │  │  ├─ td.svg
│  │  │  │  │  ├─ tf.svg
│  │  │  │  │  ├─ tg.svg
│  │  │  │  │  ├─ th.svg
│  │  │  │  │  ├─ tj.svg
│  │  │  │  │  ├─ tk.svg
│  │  │  │  │  ├─ tl.svg
│  │  │  │  │  ├─ tm.svg
│  │  │  │  │  ├─ tn.svg
│  │  │  │  │  ├─ to.svg
│  │  │  │  │  ├─ tr.svg
│  │  │  │  │  ├─ tt.svg
│  │  │  │  │  ├─ tv.svg
│  │  │  │  │  ├─ tw.svg
│  │  │  │  │  ├─ tz.svg
│  │  │  │  │  ├─ ua.svg
│  │  │  │  │  ├─ ug.svg
│  │  │  │  │  ├─ um.svg
│  │  │  │  │  ├─ un.svg
│  │  │  │  │  ├─ us.svg
│  │  │  │  │  ├─ uy.svg
│  │  │  │  │  ├─ uz.svg
│  │  │  │  │  ├─ va.svg
│  │  │  │  │  ├─ vc.svg
│  │  │  │  │  ├─ ve.svg
│  │  │  │  │  ├─ vg.svg
│  │  │  │  │  ├─ vi.svg
│  │  │  │  │  ├─ vn.svg
│  │  │  │  │  ├─ vu.svg
│  │  │  │  │  ├─ wf.svg
│  │  │  │  │  ├─ ws.svg
│  │  │  │  │  ├─ ye.svg
│  │  │  │  │  ├─ yt.svg
│  │  │  │  │  ├─ za.svg
│  │  │  │  │  ├─ zm.svg
│  │  │  │  │  └─ zw.svg
│  │  │  │  └─ 4x3
│  │  │  │     ├─ ad.svg
│  │  │  │     ├─ ae.svg
│  │  │  │     ├─ af.svg
│  │  │  │     ├─ ag.svg
│  │  │  │     ├─ ai.svg
│  │  │  │     ├─ al.svg
│  │  │  │     ├─ am.svg
│  │  │  │     ├─ ao.svg
│  │  │  │     ├─ aq.svg
│  │  │  │     ├─ ar.svg
│  │  │  │     ├─ as.svg
│  │  │  │     ├─ at.svg
│  │  │  │     ├─ au.svg
│  │  │  │     ├─ aw.svg
│  │  │  │     ├─ ax.svg
│  │  │  │     ├─ az.svg
│  │  │  │     ├─ ba.svg
│  │  │  │     ├─ bb.svg
│  │  │  │     ├─ bd.svg
│  │  │  │     ├─ be.svg
│  │  │  │     ├─ bf.svg
│  │  │  │     ├─ bg.svg
│  │  │  │     ├─ bh.svg
│  │  │  │     ├─ bi.svg
│  │  │  │     ├─ bj.svg
│  │  │  │     ├─ bl.svg
│  │  │  │     ├─ bm.svg
│  │  │  │     ├─ bn.svg
│  │  │  │     ├─ bo.svg
│  │  │  │     ├─ bq.svg
│  │  │  │     ├─ br.svg
│  │  │  │     ├─ bs.svg
│  │  │  │     ├─ bt.svg
│  │  │  │     ├─ bv.svg
│  │  │  │     ├─ bw.svg
│  │  │  │     ├─ by.svg
│  │  │  │     ├─ bz.svg
│  │  │  │     ├─ ca.svg
│  │  │  │     ├─ cc.svg
│  │  │  │     ├─ cd.svg
│  │  │  │     ├─ cf.svg
│  │  │  │     ├─ cg.svg
│  │  │  │     ├─ ch.svg
│  │  │  │     ├─ ci.svg
│  │  │  │     ├─ ck.svg
│  │  │  │     ├─ cl.svg
│  │  │  │     ├─ cm.svg
│  │  │  │     ├─ cn.svg
│  │  │  │     ├─ co.svg
│  │  │  │     ├─ cr.svg
│  │  │  │     ├─ cu.svg
│  │  │  │     ├─ cv.svg
│  │  │  │     ├─ cw.svg
│  │  │  │     ├─ cx.svg
│  │  │  │     ├─ cy.svg
│  │  │  │     ├─ cz.svg
│  │  │  │     ├─ de.svg
│  │  │  │     ├─ dj.svg
│  │  │  │     ├─ dk.svg
│  │  │  │     ├─ dm.svg
│  │  │  │     ├─ do.svg
│  │  │  │     ├─ dz.svg
│  │  │  │     ├─ ec.svg
│  │  │  │     ├─ ee.svg
│  │  │  │     ├─ eg.svg
│  │  │  │     ├─ eh.svg
│  │  │  │     ├─ er.svg
│  │  │  │     ├─ es-ct.svg
│  │  │  │     ├─ es.svg
│  │  │  │     ├─ et.svg
│  │  │  │     ├─ eu.svg
│  │  │  │     ├─ fi.svg
│  │  │  │     ├─ fj.svg
│  │  │  │     ├─ fk.svg
│  │  │  │     ├─ fm.svg
│  │  │  │     ├─ fo.svg
│  │  │  │     ├─ fr.svg
│  │  │  │     ├─ ga.svg
│  │  │  │     ├─ gb-eng.svg
│  │  │  │     ├─ gb-nir.svg
│  │  │  │     ├─ gb-sct.svg
│  │  │  │     ├─ gb-wls.svg
│  │  │  │     ├─ gb.svg
│  │  │  │     ├─ gd.svg
│  │  │  │     ├─ ge.svg
│  │  │  │     ├─ gf.svg
│  │  │  │     ├─ gg.svg
│  │  │  │     ├─ gh.svg
│  │  │  │     ├─ gi.svg
│  │  │  │     ├─ gl.svg
│  │  │  │     ├─ gm.svg
│  │  │  │     ├─ gn.svg
│  │  │  │     ├─ gp.svg
│  │  │  │     ├─ gq.svg
│  │  │  │     ├─ gr.svg
│  │  │  │     ├─ gs.svg
│  │  │  │     ├─ gt.svg
│  │  │  │     ├─ gu.svg
│  │  │  │     ├─ gw.svg
│  │  │  │     ├─ gy.svg
│  │  │  │     ├─ hk.svg
│  │  │  │     ├─ hm.svg
│  │  │  │     ├─ hn.svg
│  │  │  │     ├─ hr.svg
│  │  │  │     ├─ ht.svg
│  │  │  │     ├─ hu.svg
│  │  │  │     ├─ id.svg
│  │  │  │     ├─ ie.svg
│  │  │  │     ├─ il.svg
│  │  │  │     ├─ im.svg
│  │  │  │     ├─ in.svg
│  │  │  │     ├─ io.svg
│  │  │  │     ├─ iq.svg
│  │  │  │     ├─ ir.svg
│  │  │  │     ├─ is.svg
│  │  │  │     ├─ it.svg
│  │  │  │     ├─ je.svg
│  │  │  │     ├─ jm.svg
│  │  │  │     ├─ jo.svg
│  │  │  │     ├─ jp.svg
│  │  │  │     ├─ ke.svg
│  │  │  │     ├─ kg.svg
│  │  │  │     ├─ kh.svg
│  │  │  │     ├─ ki.svg
│  │  │  │     ├─ km.svg
│  │  │  │     ├─ kn.svg
│  │  │  │     ├─ kp.svg
│  │  │  │     ├─ kr.svg
│  │  │  │     ├─ kw.svg
│  │  │  │     ├─ ky.svg
│  │  │  │     ├─ kz.svg
│  │  │  │     ├─ la.svg
│  │  │  │     ├─ lb.svg
│  │  │  │     ├─ lc.svg
│  │  │  │     ├─ li.svg
│  │  │  │     ├─ lk.svg
│  │  │  │     ├─ lr.svg
│  │  │  │     ├─ ls.svg
│  │  │  │     ├─ lt.svg
│  │  │  │     ├─ lu.svg
│  │  │  │     ├─ lv.svg
│  │  │  │     ├─ ly.svg
│  │  │  │     ├─ ma.svg
│  │  │  │     ├─ mc.svg
│  │  │  │     ├─ md.svg
│  │  │  │     ├─ me.svg
│  │  │  │     ├─ mf.svg
│  │  │  │     ├─ mg.svg
│  │  │  │     ├─ mh.svg
│  │  │  │     ├─ mk.svg
│  │  │  │     ├─ ml.svg
│  │  │  │     ├─ mm.svg
│  │  │  │     ├─ mn.svg
│  │  │  │     ├─ mo.svg
│  │  │  │     ├─ mp.svg
│  │  │  │     ├─ mq.svg
│  │  │  │     ├─ mr.svg
│  │  │  │     ├─ ms.svg
│  │  │  │     ├─ mt.svg
│  │  │  │     ├─ mu.svg
│  │  │  │     ├─ mv.svg
│  │  │  │     ├─ mw.svg
│  │  │  │     ├─ mx.svg
│  │  │  │     ├─ my.svg
│  │  │  │     ├─ mz.svg
│  │  │  │     ├─ na.svg
│  │  │  │     ├─ nc.svg
│  │  │  │     ├─ ne.svg
│  │  │  │     ├─ nf.svg
│  │  │  │     ├─ ng.svg
│  │  │  │     ├─ ni.svg
│  │  │  │     ├─ nl.svg
│  │  │  │     ├─ no.svg
│  │  │  │     ├─ np.svg
│  │  │  │     ├─ nr.svg
│  │  │  │     ├─ nu.svg
│  │  │  │     ├─ nz.svg
│  │  │  │     ├─ om.svg
│  │  │  │     ├─ pa.svg
│  │  │  │     ├─ pe.svg
│  │  │  │     ├─ pf.svg
│  │  │  │     ├─ pg.svg
│  │  │  │     ├─ ph.svg
│  │  │  │     ├─ pk.svg
│  │  │  │     ├─ pl.svg
│  │  │  │     ├─ pm.svg
│  │  │  │     ├─ pn.svg
│  │  │  │     ├─ pr.svg
│  │  │  │     ├─ ps.svg
│  │  │  │     ├─ pt.svg
│  │  │  │     ├─ pw.svg
│  │  │  │     ├─ py.svg
│  │  │  │     ├─ qa.svg
│  │  │  │     ├─ re.svg
│  │  │  │     ├─ ro.svg
│  │  │  │     ├─ rs.svg
│  │  │  │     ├─ ru.svg
│  │  │  │     ├─ rw.svg
│  │  │  │     ├─ sa.svg
│  │  │  │     ├─ sb.svg
│  │  │  │     ├─ sc.svg
│  │  │  │     ├─ sd.svg
│  │  │  │     ├─ se.svg
│  │  │  │     ├─ sg.svg
│  │  │  │     ├─ sh.svg
│  │  │  │     ├─ si.svg
│  │  │  │     ├─ sj.svg
│  │  │  │     ├─ sk.svg
│  │  │  │     ├─ sl.svg
│  │  │  │     ├─ sm.svg
│  │  │  │     ├─ sn.svg
│  │  │  │     ├─ so.svg
│  │  │  │     ├─ sr.svg
│  │  │  │     ├─ ss.svg
│  │  │  │     ├─ st.svg
│  │  │  │     ├─ sv.svg
│  │  │  │     ├─ sx.svg
│  │  │  │     ├─ sy.svg
│  │  │  │     ├─ sz.svg
│  │  │  │     ├─ tc.svg
│  │  │  │     ├─ td.svg
│  │  │  │     ├─ tf.svg
│  │  │  │     ├─ tg.svg
│  │  │  │     ├─ th.svg
│  │  │  │     ├─ tj.svg
│  │  │  │     ├─ tk.svg
│  │  │  │     ├─ tl.svg
│  │  │  │     ├─ tm.svg
│  │  │  │     ├─ tn.svg
│  │  │  │     ├─ to.svg
│  │  │  │     ├─ tr.svg
│  │  │  │     ├─ tt.svg
│  │  │  │     ├─ tv.svg
│  │  │  │     ├─ tw.svg
│  │  │  │     ├─ tz.svg
│  │  │  │     ├─ ua.svg
│  │  │  │     ├─ ug.svg
│  │  │  │     ├─ um.svg
│  │  │  │     ├─ un.svg
│  │  │  │     ├─ us.svg
│  │  │  │     ├─ uy.svg
│  │  │  │     ├─ uz.svg
│  │  │  │     ├─ va.svg
│  │  │  │     ├─ vc.svg
│  │  │  │     ├─ ve.svg
│  │  │  │     ├─ vg.svg
│  │  │  │     ├─ vi.svg
│  │  │  │     ├─ vn.svg
│  │  │  │     ├─ vu.svg
│  │  │  │     ├─ wf.svg
│  │  │  │     ├─ ws.svg
│  │  │  │     ├─ ye.svg
│  │  │  │     ├─ yt.svg
│  │  │  │     ├─ za.svg
│  │  │  │     ├─ zm.svg
│  │  │  │     └─ zw.svg
│  │  │  ├─ less
│  │  │  │  ├─ flag-icon-base.less
│  │  │  │  ├─ flag-icon-list.less
│  │  │  │  ├─ flag-icon-more.less
│  │  │  │  ├─ flag-icon.less
│  │  │  │  └─ variables.less
│  │  │  ├─ LICENSE
│  │  │  └─ sass
│  │  │     ├─ flag-icon.scss
│  │  │     ├─ _flag-icon-base.scss
│  │  │     ├─ _flag-icon-list.scss
│  │  │     ├─ _flag-icon-more.scss
│  │  │     └─ _variables.scss
│  │  ├─ fontawesome
│  │  │  ├─ attribution.js
│  │  │  ├─ css
│  │  │  │  ├─ all.css
│  │  │  │  ├─ all.min.css
│  │  │  │  ├─ brands.css
│  │  │  │  ├─ brands.min.css
│  │  │  │  ├─ fontawesome.css
│  │  │  │  ├─ fontawesome.min.css
│  │  │  │  ├─ regular.css
│  │  │  │  ├─ regular.min.css
│  │  │  │  ├─ solid.css
│  │  │  │  ├─ solid.min.css
│  │  │  │  ├─ svg-with-js.css
│  │  │  │  ├─ svg-with-js.min.css
│  │  │  │  ├─ v4-font-face.css
│  │  │  │  ├─ v4-font-face.min.css
│  │  │  │  ├─ v4-shims.css
│  │  │  │  ├─ v4-shims.min.css
│  │  │  │  ├─ v5-font-face.css
│  │  │  │  └─ v5-font-face.min.css
│  │  │  ├─ js
│  │  │  │  ├─ all.js
│  │  │  │  ├─ all.min.js
│  │  │  │  ├─ brands.js
│  │  │  │  ├─ brands.min.js
│  │  │  │  ├─ conflict-detection.js
│  │  │  │  ├─ conflict-detection.min.js
│  │  │  │  ├─ fontawesome.js
│  │  │  │  ├─ fontawesome.min.js
│  │  │  │  ├─ regular.js
│  │  │  │  ├─ regular.min.js
│  │  │  │  ├─ solid.js
│  │  │  │  ├─ solid.min.js
│  │  │  │  ├─ v4-shims.js
│  │  │  │  └─ v4-shims.min.js
│  │  │  ├─ less
│  │  │  │  ├─ brands.less
│  │  │  │  ├─ fontawesome.less
│  │  │  │  ├─ regular.less
│  │  │  │  ├─ solid.less
│  │  │  │  ├─ v4-shims.less
│  │  │  │  ├─ _animated.less
│  │  │  │  ├─ _bordered-pulled.less
│  │  │  │  ├─ _core.less
│  │  │  │  ├─ _fixed-width.less
│  │  │  │  ├─ _icons.less
│  │  │  │  ├─ _list.less
│  │  │  │  ├─ _mixins.less
│  │  │  │  ├─ _rotated-flipped.less
│  │  │  │  ├─ _screen-reader.less
│  │  │  │  ├─ _shims.less
│  │  │  │  ├─ _sizing.less
│  │  │  │  ├─ _stacked.less
│  │  │  │  └─ _variables.less
│  │  │  ├─ LICENSE.txt
│  │  │  ├─ metadata
│  │  │  │  ├─ categories.yml
│  │  │  │  ├─ icons.yml
│  │  │  │  ├─ shims.yml
│  │  │  │  └─ sponsors.yml
│  │  │  ├─ package.json
│  │  │  ├─ scss
│  │  │  │  ├─ brands.scss
│  │  │  │  ├─ fontawesome.scss
│  │  │  │  ├─ regular.scss
│  │  │  │  ├─ solid.scss
│  │  │  │  ├─ v4-shims.scss
│  │  │  │  ├─ _animated.scss
│  │  │  │  ├─ _bordered-pulled.scss
│  │  │  │  ├─ _core.scss
│  │  │  │  ├─ _fixed-width.scss
│  │  │  │  ├─ _functions.scss
│  │  │  │  ├─ _icons.scss
│  │  │  │  ├─ _list.scss
│  │  │  │  ├─ _mixins.scss
│  │  │  │  ├─ _rotated-flipped.scss
│  │  │  │  ├─ _screen-reader.scss
│  │  │  │  ├─ _shims.scss
│  │  │  │  ├─ _sizing.scss
│  │  │  │  ├─ _stacked.scss
│  │  │  │  └─ _variables.scss
│  │  │  ├─ sprites
│  │  │  │  ├─ brands.svg
│  │  │  │  ├─ regular.svg
│  │  │  │  └─ solid.svg
│  │  │  ├─ svgs
│  │  │  │  ├─ brands
│  │  │  │  │  ├─ 42-group.svg
│  │  │  │  │  ├─ 500px.svg
│  │  │  │  │  ├─ accessible-icon.svg
│  │  │  │  │  ├─ accusoft.svg
│  │  │  │  │  ├─ adn.svg
│  │  │  │  │  ├─ adversal.svg
│  │  │  │  │  ├─ affiliatetheme.svg
│  │  │  │  │  ├─ airbnb.svg
│  │  │  │  │  ├─ algolia.svg
│  │  │  │  │  ├─ alipay.svg
│  │  │  │  │  ├─ amazon-pay.svg
│  │  │  │  │  ├─ amazon.svg
│  │  │  │  │  ├─ amilia.svg
│  │  │  │  │  ├─ android.svg
│  │  │  │  │  ├─ angellist.svg
│  │  │  │  │  ├─ angrycreative.svg
│  │  │  │  │  ├─ angular.svg
│  │  │  │  │  ├─ app-store-ios.svg
│  │  │  │  │  ├─ app-store.svg
│  │  │  │  │  ├─ apper.svg
│  │  │  │  │  ├─ apple-pay.svg
│  │  │  │  │  ├─ apple.svg
│  │  │  │  │  ├─ artstation.svg
│  │  │  │  │  ├─ asymmetrik.svg
│  │  │  │  │  ├─ atlassian.svg
│  │  │  │  │  ├─ audible.svg
│  │  │  │  │  ├─ autoprefixer.svg
│  │  │  │  │  ├─ avianex.svg
│  │  │  │  │  ├─ aviato.svg
│  │  │  │  │  ├─ aws.svg
│  │  │  │  │  ├─ bandcamp.svg
│  │  │  │  │  ├─ battle-net.svg
│  │  │  │  │  ├─ behance-square.svg
│  │  │  │  │  ├─ behance.svg
│  │  │  │  │  ├─ bilibili.svg
│  │  │  │  │  ├─ bimobject.svg
│  │  │  │  │  ├─ bitbucket.svg
│  │  │  │  │  ├─ bitcoin.svg
│  │  │  │  │  ├─ bity.svg
│  │  │  │  │  ├─ black-tie.svg
│  │  │  │  │  ├─ blackberry.svg
│  │  │  │  │  ├─ blogger-b.svg
│  │  │  │  │  ├─ blogger.svg
│  │  │  │  │  ├─ bluetooth-b.svg
│  │  │  │  │  ├─ bluetooth.svg
│  │  │  │  │  ├─ bootstrap.svg
│  │  │  │  │  ├─ bots.svg
│  │  │  │  │  ├─ btc.svg
│  │  │  │  │  ├─ buffer.svg
│  │  │  │  │  ├─ buromobelexperte.svg
│  │  │  │  │  ├─ buy-n-large.svg
│  │  │  │  │  ├─ buysellads.svg
│  │  │  │  │  ├─ canadian-maple-leaf.svg
│  │  │  │  │  ├─ cc-amazon-pay.svg
│  │  │  │  │  ├─ cc-amex.svg
│  │  │  │  │  ├─ cc-apple-pay.svg
│  │  │  │  │  ├─ cc-diners-club.svg
│  │  │  │  │  ├─ cc-discover.svg
│  │  │  │  │  ├─ cc-jcb.svg
│  │  │  │  │  ├─ cc-mastercard.svg
│  │  │  │  │  ├─ cc-paypal.svg
│  │  │  │  │  ├─ cc-stripe.svg
│  │  │  │  │  ├─ cc-visa.svg
│  │  │  │  │  ├─ centercode.svg
│  │  │  │  │  ├─ centos.svg
│  │  │  │  │  ├─ chrome.svg
│  │  │  │  │  ├─ chromecast.svg
│  │  │  │  │  ├─ cloudflare.svg
│  │  │  │  │  ├─ cloudscale.svg
│  │  │  │  │  ├─ cloudsmith.svg
│  │  │  │  │  ├─ cloudversify.svg
│  │  │  │  │  ├─ cmplid.svg
│  │  │  │  │  ├─ codepen.svg
│  │  │  │  │  ├─ codiepie.svg
│  │  │  │  │  ├─ confluence.svg
│  │  │  │  │  ├─ connectdevelop.svg
│  │  │  │  │  ├─ contao.svg
│  │  │  │  │  ├─ cotton-bureau.svg
│  │  │  │  │  ├─ cpanel.svg
│  │  │  │  │  ├─ creative-commons-by.svg
│  │  │  │  │  ├─ creative-commons-nc-eu.svg
│  │  │  │  │  ├─ creative-commons-nc-jp.svg
│  │  │  │  │  ├─ creative-commons-nc.svg
│  │  │  │  │  ├─ creative-commons-nd.svg
│  │  │  │  │  ├─ creative-commons-pd-alt.svg
│  │  │  │  │  ├─ creative-commons-pd.svg
│  │  │  │  │  ├─ creative-commons-remix.svg
│  │  │  │  │  ├─ creative-commons-sa.svg
│  │  │  │  │  ├─ creative-commons-sampling-plus.svg
│  │  │  │  │  ├─ creative-commons-sampling.svg
│  │  │  │  │  ├─ creative-commons-share.svg
│  │  │  │  │  ├─ creative-commons-zero.svg
│  │  │  │  │  ├─ creative-commons.svg
│  │  │  │  │  ├─ critical-role.svg
│  │  │  │  │  ├─ css3-alt.svg
│  │  │  │  │  ├─ css3.svg
│  │  │  │  │  ├─ cuttlefish.svg
│  │  │  │  │  ├─ d-and-d-beyond.svg
│  │  │  │  │  ├─ d-and-d.svg
│  │  │  │  │  ├─ dailymotion.svg
│  │  │  │  │  ├─ dashcube.svg
│  │  │  │  │  ├─ deezer.svg
│  │  │  │  │  ├─ delicious.svg
│  │  │  │  │  ├─ deploydog.svg
│  │  │  │  │  ├─ deskpro.svg
│  │  │  │  │  ├─ dev.svg
│  │  │  │  │  ├─ deviantart.svg
│  │  │  │  │  ├─ dhl.svg
│  │  │  │  │  ├─ diaspora.svg
│  │  │  │  │  ├─ digg.svg
│  │  │  │  │  ├─ digital-ocean.svg
│  │  │  │  │  ├─ discord.svg
│  │  │  │  │  ├─ discourse.svg
│  │  │  │  │  ├─ dochub.svg
│  │  │  │  │  ├─ docker.svg
│  │  │  │  │  ├─ draft2digital.svg
│  │  │  │  │  ├─ dribbble-square.svg
│  │  │  │  │  ├─ dribbble.svg
│  │  │  │  │  ├─ dropbox.svg
│  │  │  │  │  ├─ drupal.svg
│  │  │  │  │  ├─ dyalog.svg
│  │  │  │  │  ├─ earlybirds.svg
│  │  │  │  │  ├─ ebay.svg
│  │  │  │  │  ├─ edge-legacy.svg
│  │  │  │  │  ├─ edge.svg
│  │  │  │  │  ├─ elementor.svg
│  │  │  │  │  ├─ ello.svg
│  │  │  │  │  ├─ ember.svg
│  │  │  │  │  ├─ empire.svg
│  │  │  │  │  ├─ envira.svg
│  │  │  │  │  ├─ erlang.svg
│  │  │  │  │  ├─ ethereum.svg
│  │  │  │  │  ├─ etsy.svg
│  │  │  │  │  ├─ evernote.svg
│  │  │  │  │  ├─ expeditedssl.svg
│  │  │  │  │  ├─ facebook-f.svg
│  │  │  │  │  ├─ facebook-messenger.svg
│  │  │  │  │  ├─ facebook-square.svg
│  │  │  │  │  ├─ facebook.svg
│  │  │  │  │  ├─ fantasy-flight-games.svg
│  │  │  │  │  ├─ fedex.svg
│  │  │  │  │  ├─ fedora.svg
│  │  │  │  │  ├─ figma.svg
│  │  │  │  │  ├─ firefox-browser.svg
│  │  │  │  │  ├─ firefox.svg
│  │  │  │  │  ├─ first-order-alt.svg
│  │  │  │  │  ├─ first-order.svg
│  │  │  │  │  ├─ firstdraft.svg
│  │  │  │  │  ├─ flickr.svg
│  │  │  │  │  ├─ flipboard.svg
│  │  │  │  │  ├─ fly.svg
│  │  │  │  │  ├─ font-awesome.svg
│  │  │  │  │  ├─ fonticons-fi.svg
│  │  │  │  │  ├─ fonticons.svg
│  │  │  │  │  ├─ fort-awesome-alt.svg
│  │  │  │  │  ├─ fort-awesome.svg
│  │  │  │  │  ├─ forumbee.svg
│  │  │  │  │  ├─ foursquare.svg
│  │  │  │  │  ├─ free-code-camp.svg
│  │  │  │  │  ├─ freebsd.svg
│  │  │  │  │  ├─ fulcrum.svg
│  │  │  │  │  ├─ galactic-republic.svg
│  │  │  │  │  ├─ galactic-senate.svg
│  │  │  │  │  ├─ get-pocket.svg
│  │  │  │  │  ├─ gg-circle.svg
│  │  │  │  │  ├─ gg.svg
│  │  │  │  │  ├─ git-alt.svg
│  │  │  │  │  ├─ git-square.svg
│  │  │  │  │  ├─ git.svg
│  │  │  │  │  ├─ github-alt.svg
│  │  │  │  │  ├─ github-square.svg
│  │  │  │  │  ├─ github.svg
│  │  │  │  │  ├─ gitkraken.svg
│  │  │  │  │  ├─ gitlab.svg
│  │  │  │  │  ├─ gitter.svg
│  │  │  │  │  ├─ glide-g.svg
│  │  │  │  │  ├─ glide.svg
│  │  │  │  │  ├─ gofore.svg
│  │  │  │  │  ├─ golang.svg
│  │  │  │  │  ├─ goodreads-g.svg
│  │  │  │  │  ├─ goodreads.svg
│  │  │  │  │  ├─ google-drive.svg
│  │  │  │  │  ├─ google-pay.svg
│  │  │  │  │  ├─ google-play.svg
│  │  │  │  │  ├─ google-plus-g.svg
│  │  │  │  │  ├─ google-plus-square.svg
│  │  │  │  │  ├─ google-plus.svg
│  │  │  │  │  ├─ google-wallet.svg
│  │  │  │  │  ├─ google.svg
│  │  │  │  │  ├─ gratipay.svg
│  │  │  │  │  ├─ grav.svg
│  │  │  │  │  ├─ gripfire.svg
│  │  │  │  │  ├─ grunt.svg
│  │  │  │  │  ├─ guilded.svg
│  │  │  │  │  ├─ gulp.svg
│  │  │  │  │  ├─ hacker-news-square.svg
│  │  │  │  │  ├─ hacker-news.svg
│  │  │  │  │  ├─ hackerrank.svg
│  │  │  │  │  ├─ hashnode.svg
│  │  │  │  │  ├─ hips.svg
│  │  │  │  │  ├─ hire-a-helper.svg
│  │  │  │  │  ├─ hive.svg
│  │  │  │  │  ├─ hooli.svg
│  │  │  │  │  ├─ hornbill.svg
│  │  │  │  │  ├─ hotjar.svg
│  │  │  │  │  ├─ houzz.svg
│  │  │  │  │  ├─ html5.svg
│  │  │  │  │  ├─ hubspot.svg
│  │  │  │  │  ├─ ideal.svg
│  │  │  │  │  ├─ imdb.svg
│  │  │  │  │  ├─ instagram-square.svg
│  │  │  │  │  ├─ instagram.svg
│  │  │  │  │  ├─ instalod.svg
│  │  │  │  │  ├─ intercom.svg
│  │  │  │  │  ├─ internet-explorer.svg
│  │  │  │  │  ├─ invision.svg
│  │  │  │  │  ├─ ioxhost.svg
│  │  │  │  │  ├─ itch-io.svg
│  │  │  │  │  ├─ itunes-note.svg
│  │  │  │  │  ├─ itunes.svg
│  │  │  │  │  ├─ java.svg
│  │  │  │  │  ├─ jedi-order.svg
│  │  │  │  │  ├─ jenkins.svg
│  │  │  │  │  ├─ jira.svg
│  │  │  │  │  ├─ joget.svg
│  │  │  │  │  ├─ joomla.svg
│  │  │  │  │  ├─ js-square.svg
│  │  │  │  │  ├─ js.svg
│  │  │  │  │  ├─ jsfiddle.svg
│  │  │  │  │  ├─ kaggle.svg
│  │  │  │  │  ├─ keybase.svg
│  │  │  │  │  ├─ keycdn.svg
│  │  │  │  │  ├─ kickstarter-k.svg
│  │  │  │  │  ├─ kickstarter.svg
│  │  │  │  │  ├─ korvue.svg
│  │  │  │  │  ├─ laravel.svg
│  │  │  │  │  ├─ lastfm-square.svg
│  │  │  │  │  ├─ lastfm.svg
│  │  │  │  │  ├─ leanpub.svg
│  │  │  │  │  ├─ less.svg
│  │  │  │  │  ├─ line.svg
│  │  │  │  │  ├─ linkedin-in.svg
│  │  │  │  │  ├─ linkedin.svg
│  │  │  │  │  ├─ linode.svg
│  │  │  │  │  ├─ linux.svg
│  │  │  │  │  ├─ lyft.svg
│  │  │  │  │  ├─ magento.svg
│  │  │  │  │  ├─ mailchimp.svg
│  │  │  │  │  ├─ mandalorian.svg
│  │  │  │  │  ├─ markdown.svg
│  │  │  │  │  ├─ mastodon.svg
│  │  │  │  │  ├─ maxcdn.svg
│  │  │  │  │  ├─ mdb.svg
│  │  │  │  │  ├─ medapps.svg
│  │  │  │  │  ├─ medium.svg
│  │  │  │  │  ├─ medrt.svg
│  │  │  │  │  ├─ meetup.svg
│  │  │  │  │  ├─ megaport.svg
│  │  │  │  │  ├─ mendeley.svg
│  │  │  │  │  ├─ microblog.svg
│  │  │  │  │  ├─ microsoft.svg
│  │  │  │  │  ├─ mix.svg
│  │  │  │  │  ├─ mixcloud.svg
│  │  │  │  │  ├─ mixer.svg
│  │  │  │  │  ├─ mizuni.svg
│  │  │  │  │  ├─ modx.svg
│  │  │  │  │  ├─ monero.svg
│  │  │  │  │  ├─ napster.svg
│  │  │  │  │  ├─ neos.svg
│  │  │  │  │  ├─ nfc-directional.svg
│  │  │  │  │  ├─ nfc-symbol.svg
│  │  │  │  │  ├─ nimblr.svg
│  │  │  │  │  ├─ node-js.svg
│  │  │  │  │  ├─ node.svg
│  │  │  │  │  ├─ npm.svg
│  │  │  │  │  ├─ ns8.svg
│  │  │  │  │  ├─ nutritionix.svg
│  │  │  │  │  ├─ octopus-deploy.svg
│  │  │  │  │  ├─ odnoklassniki-square.svg
│  │  │  │  │  ├─ odnoklassniki.svg
│  │  │  │  │  ├─ old-republic.svg
│  │  │  │  │  ├─ opencart.svg
│  │  │  │  │  ├─ openid.svg
│  │  │  │  │  ├─ opera.svg
│  │  │  │  │  ├─ optin-monster.svg
│  │  │  │  │  ├─ orcid.svg
│  │  │  │  │  ├─ osi.svg
│  │  │  │  │  ├─ padlet.svg
│  │  │  │  │  ├─ page4.svg
│  │  │  │  │  ├─ pagelines.svg
│  │  │  │  │  ├─ palfed.svg
│  │  │  │  │  ├─ patreon.svg
│  │  │  │  │  ├─ paypal.svg
│  │  │  │  │  ├─ perbyte.svg
│  │  │  │  │  ├─ periscope.svg
│  │  │  │  │  ├─ phabricator.svg
│  │  │  │  │  ├─ phoenix-framework.svg
│  │  │  │  │  ├─ phoenix-squadron.svg
│  │  │  │  │  ├─ php.svg
│  │  │  │  │  ├─ pied-piper-alt.svg
│  │  │  │  │  ├─ pied-piper-hat.svg
│  │  │  │  │  ├─ pied-piper-pp.svg
│  │  │  │  │  ├─ pied-piper-square.svg
│  │  │  │  │  ├─ pied-piper.svg
│  │  │  │  │  ├─ pinterest-p.svg
│  │  │  │  │  ├─ pinterest-square.svg
│  │  │  │  │  ├─ pinterest.svg
│  │  │  │  │  ├─ pix.svg
│  │  │  │  │  ├─ playstation.svg
│  │  │  │  │  ├─ product-hunt.svg
│  │  │  │  │  ├─ pushed.svg
│  │  │  │  │  ├─ python.svg
│  │  │  │  │  ├─ qq.svg
│  │  │  │  │  ├─ quinscape.svg
│  │  │  │  │  ├─ quora.svg
│  │  │  │  │  ├─ r-project.svg
│  │  │  │  │  ├─ raspberry-pi.svg
│  │  │  │  │  ├─ ravelry.svg
│  │  │  │  │  ├─ react.svg
│  │  │  │  │  ├─ reacteurope.svg
│  │  │  │  │  ├─ readme.svg
│  │  │  │  │  ├─ rebel.svg
│  │  │  │  │  ├─ red-river.svg
│  │  │  │  │  ├─ reddit-alien.svg
│  │  │  │  │  ├─ reddit-square.svg
│  │  │  │  │  ├─ reddit.svg
│  │  │  │  │  ├─ redhat.svg
│  │  │  │  │  ├─ renren.svg
│  │  │  │  │  ├─ replyd.svg
│  │  │  │  │  ├─ researchgate.svg
│  │  │  │  │  ├─ resolving.svg
│  │  │  │  │  ├─ rev.svg
│  │  │  │  │  ├─ rocketchat.svg
│  │  │  │  │  ├─ rockrms.svg
│  │  │  │  │  ├─ rust.svg
│  │  │  │  │  ├─ safari.svg
│  │  │  │  │  ├─ salesforce.svg
│  │  │  │  │  ├─ sass.svg
│  │  │  │  │  ├─ schlix.svg
│  │  │  │  │  ├─ screenpal.svg
│  │  │  │  │  ├─ scribd.svg
│  │  │  │  │  ├─ searchengin.svg
│  │  │  │  │  ├─ sellcast.svg
│  │  │  │  │  ├─ sellsy.svg
│  │  │  │  │  ├─ servicestack.svg
│  │  │  │  │  ├─ shirtsinbulk.svg
│  │  │  │  │  ├─ shopify.svg
│  │  │  │  │  ├─ shopware.svg
│  │  │  │  │  ├─ simplybuilt.svg
│  │  │  │  │  ├─ sistrix.svg
│  │  │  │  │  ├─ sith.svg
│  │  │  │  │  ├─ sitrox.svg
│  │  │  │  │  ├─ sketch.svg
│  │  │  │  │  ├─ skyatlas.svg
│  │  │  │  │  ├─ skype.svg
│  │  │  │  │  ├─ slack.svg
│  │  │  │  │  ├─ slideshare.svg
│  │  │  │  │  ├─ snapchat-square.svg
│  │  │  │  │  ├─ snapchat.svg
│  │  │  │  │  ├─ soundcloud.svg
│  │  │  │  │  ├─ sourcetree.svg
│  │  │  │  │  ├─ speakap.svg
│  │  │  │  │  ├─ speaker-deck.svg
│  │  │  │  │  ├─ spotify.svg
│  │  │  │  │  ├─ square-font-awesome-stroke.svg
│  │  │  │  │  ├─ square-font-awesome.svg
│  │  │  │  │  ├─ squarespace.svg
│  │  │  │  │  ├─ stack-exchange.svg
│  │  │  │  │  ├─ stack-overflow.svg
│  │  │  │  │  ├─ stackpath.svg
│  │  │  │  │  ├─ staylinked.svg
│  │  │  │  │  ├─ steam-square.svg
│  │  │  │  │  ├─ steam-symbol.svg
│  │  │  │  │  ├─ steam.svg
│  │  │  │  │  ├─ sticker-mule.svg
│  │  │  │  │  ├─ strava.svg
│  │  │  │  │  ├─ stripe-s.svg
│  │  │  │  │  ├─ stripe.svg
│  │  │  │  │  ├─ studiovinari.svg
│  │  │  │  │  ├─ stumbleupon-circle.svg
│  │  │  │  │  ├─ stumbleupon.svg
│  │  │  │  │  ├─ superpowers.svg
│  │  │  │  │  ├─ supple.svg
│  │  │  │  │  ├─ suse.svg
│  │  │  │  │  ├─ swift.svg
│  │  │  │  │  ├─ symfony.svg
│  │  │  │  │  ├─ teamspeak.svg
│  │  │  │  │  ├─ telegram.svg
│  │  │  │  │  ├─ tencent-weibo.svg
│  │  │  │  │  ├─ the-red-yeti.svg
│  │  │  │  │  ├─ themeco.svg
│  │  │  │  │  ├─ themeisle.svg
│  │  │  │  │  ├─ think-peaks.svg
│  │  │  │  │  ├─ tiktok.svg
│  │  │  │  │  ├─ trade-federation.svg
│  │  │  │  │  ├─ trello.svg
│  │  │  │  │  ├─ tumblr-square.svg
│  │  │  │  │  ├─ tumblr.svg
│  │  │  │  │  ├─ twitch.svg
│  │  │  │  │  ├─ twitter-square.svg
│  │  │  │  │  ├─ twitter.svg
│  │  │  │  │  ├─ typo3.svg
│  │  │  │  │  ├─ uber.svg
│  │  │  │  │  ├─ ubuntu.svg
│  │  │  │  │  ├─ uikit.svg
│  │  │  │  │  ├─ umbraco.svg
│  │  │  │  │  ├─ uncharted.svg
│  │  │  │  │  ├─ uniregistry.svg
│  │  │  │  │  ├─ unity.svg
│  │  │  │  │  ├─ unsplash.svg
│  │  │  │  │  ├─ untappd.svg
│  │  │  │  │  ├─ ups.svg
│  │  │  │  │  ├─ usb.svg
│  │  │  │  │  ├─ usps.svg
│  │  │  │  │  ├─ ussunnah.svg
│  │  │  │  │  ├─ vaadin.svg
│  │  │  │  │  ├─ viacoin.svg
│  │  │  │  │  ├─ viadeo-square.svg
│  │  │  │  │  ├─ viadeo.svg
│  │  │  │  │  ├─ viber.svg
│  │  │  │  │  ├─ vimeo-square.svg
│  │  │  │  │  ├─ vimeo-v.svg
│  │  │  │  │  ├─ vimeo.svg
│  │  │  │  │  ├─ vine.svg
│  │  │  │  │  ├─ vk.svg
│  │  │  │  │  ├─ vnv.svg
│  │  │  │  │  ├─ vuejs.svg
│  │  │  │  │  ├─ watchman-monitoring.svg
│  │  │  │  │  ├─ waze.svg
│  │  │  │  │  ├─ weebly.svg
│  │  │  │  │  ├─ weibo.svg
│  │  │  │  │  ├─ weixin.svg
│  │  │  │  │  ├─ whatsapp-square.svg
│  │  │  │  │  ├─ whatsapp.svg
│  │  │  │  │  ├─ whmcs.svg
│  │  │  │  │  ├─ wikipedia-w.svg
│  │  │  │  │  ├─ windows.svg
│  │  │  │  │  ├─ wirsindhandwerk.svg
│  │  │  │  │  ├─ wix.svg
│  │  │  │  │  ├─ wizards-of-the-coast.svg
│  │  │  │  │  ├─ wodu.svg
│  │  │  │  │  ├─ wolf-pack-battalion.svg
│  │  │  │  │  ├─ wordpress-simple.svg
│  │  │  │  │  ├─ wordpress.svg
│  │  │  │  │  ├─ wpbeginner.svg
│  │  │  │  │  ├─ wpexplorer.svg
│  │  │  │  │  ├─ wpforms.svg
│  │  │  │  │  ├─ wpressr.svg
│  │  │  │  │  ├─ xbox.svg
│  │  │  │  │  ├─ xing-square.svg
│  │  │  │  │  ├─ xing.svg
│  │  │  │  │  ├─ y-combinator.svg
│  │  │  │  │  ├─ yahoo.svg
│  │  │  │  │  ├─ yammer.svg
│  │  │  │  │  ├─ yandex-international.svg
│  │  │  │  │  ├─ yandex.svg
│  │  │  │  │  ├─ yarn.svg
│  │  │  │  │  ├─ yelp.svg
│  │  │  │  │  ├─ yoast.svg
│  │  │  │  │  ├─ youtube-square.svg
│  │  │  │  │  ├─ youtube.svg
│  │  │  │  │  └─ zhihu.svg
│  │  │  │  ├─ regular
│  │  │  │  │  ├─ address-book.svg
│  │  │  │  │  ├─ address-card.svg
│  │  │  │  │  ├─ bell-slash.svg
│  │  │  │  │  ├─ bell.svg
│  │  │  │  │  ├─ bookmark.svg
│  │  │  │  │  ├─ building.svg
│  │  │  │  │  ├─ calendar-check.svg
│  │  │  │  │  ├─ calendar-days.svg
│  │  │  │  │  ├─ calendar-minus.svg
│  │  │  │  │  ├─ calendar-plus.svg
│  │  │  │  │  ├─ calendar-xmark.svg
│  │  │  │  │  ├─ calendar.svg
│  │  │  │  │  ├─ chart-bar.svg
│  │  │  │  │  ├─ chess-bishop.svg
│  │  │  │  │  ├─ chess-king.svg
│  │  │  │  │  ├─ chess-knight.svg
│  │  │  │  │  ├─ chess-pawn.svg
│  │  │  │  │  ├─ chess-queen.svg
│  │  │  │  │  ├─ chess-rook.svg
│  │  │  │  │  ├─ circle-check.svg
│  │  │  │  │  ├─ circle-dot.svg
│  │  │  │  │  ├─ circle-down.svg
│  │  │  │  │  ├─ circle-left.svg
│  │  │  │  │  ├─ circle-pause.svg
│  │  │  │  │  ├─ circle-play.svg
│  │  │  │  │  ├─ circle-question.svg
│  │  │  │  │  ├─ circle-right.svg
│  │  │  │  │  ├─ circle-stop.svg
│  │  │  │  │  ├─ circle-up.svg
│  │  │  │  │  ├─ circle-user.svg
│  │  │  │  │  ├─ circle-xmark.svg
│  │  │  │  │  ├─ circle.svg
│  │  │  │  │  ├─ clipboard.svg
│  │  │  │  │  ├─ clock.svg
│  │  │  │  │  ├─ clone.svg
│  │  │  │  │  ├─ closed-captioning.svg
│  │  │  │  │  ├─ comment-dots.svg
│  │  │  │  │  ├─ comment.svg
│  │  │  │  │  ├─ comments.svg
│  │  │  │  │  ├─ compass.svg
│  │  │  │  │  ├─ copy.svg
│  │  │  │  │  ├─ copyright.svg
│  │  │  │  │  ├─ credit-card.svg
│  │  │  │  │  ├─ envelope-open.svg
│  │  │  │  │  ├─ envelope.svg
│  │  │  │  │  ├─ eye-slash.svg
│  │  │  │  │  ├─ eye.svg
│  │  │  │  │  ├─ face-angry.svg
│  │  │  │  │  ├─ face-dizzy.svg
│  │  │  │  │  ├─ face-flushed.svg
│  │  │  │  │  ├─ face-frown-open.svg
│  │  │  │  │  ├─ face-frown.svg
│  │  │  │  │  ├─ face-grimace.svg
│  │  │  │  │  ├─ face-grin-beam-sweat.svg
│  │  │  │  │  ├─ face-grin-beam.svg
│  │  │  │  │  ├─ face-grin-hearts.svg
│  │  │  │  │  ├─ face-grin-squint-tears.svg
│  │  │  │  │  ├─ face-grin-squint.svg
│  │  │  │  │  ├─ face-grin-stars.svg
│  │  │  │  │  ├─ face-grin-tears.svg
│  │  │  │  │  ├─ face-grin-tongue-squint.svg
│  │  │  │  │  ├─ face-grin-tongue-wink.svg
│  │  │  │  │  ├─ face-grin-tongue.svg
│  │  │  │  │  ├─ face-grin-wide.svg
│  │  │  │  │  ├─ face-grin-wink.svg
│  │  │  │  │  ├─ face-grin.svg
│  │  │  │  │  ├─ face-kiss-beam.svg
│  │  │  │  │  ├─ face-kiss-wink-heart.svg
│  │  │  │  │  ├─ face-kiss.svg
│  │  │  │  │  ├─ face-laugh-beam.svg
│  │  │  │  │  ├─ face-laugh-squint.svg
│  │  │  │  │  ├─ face-laugh-wink.svg
│  │  │  │  │  ├─ face-laugh.svg
│  │  │  │  │  ├─ face-meh-blank.svg
│  │  │  │  │  ├─ face-meh.svg
│  │  │  │  │  ├─ face-rolling-eyes.svg
│  │  │  │  │  ├─ face-sad-cry.svg
│  │  │  │  │  ├─ face-sad-tear.svg
│  │  │  │  │  ├─ face-smile-beam.svg
│  │  │  │  │  ├─ face-smile-wink.svg
│  │  │  │  │  ├─ face-smile.svg
│  │  │  │  │  ├─ face-surprise.svg
│  │  │  │  │  ├─ face-tired.svg
│  │  │  │  │  ├─ file-audio.svg
│  │  │  │  │  ├─ file-code.svg
│  │  │  │  │  ├─ file-excel.svg
│  │  │  │  │  ├─ file-image.svg
│  │  │  │  │  ├─ file-lines.svg
│  │  │  │  │  ├─ file-pdf.svg
│  │  │  │  │  ├─ file-powerpoint.svg
│  │  │  │  │  ├─ file-video.svg
│  │  │  │  │  ├─ file-word.svg
│  │  │  │  │  ├─ file-zipper.svg
│  │  │  │  │  ├─ file.svg
│  │  │  │  │  ├─ flag.svg
│  │  │  │  │  ├─ floppy-disk.svg
│  │  │  │  │  ├─ folder-closed.svg
│  │  │  │  │  ├─ folder-open.svg
│  │  │  │  │  ├─ folder.svg
│  │  │  │  │  ├─ font-awesome.svg
│  │  │  │  │  ├─ futbol.svg
│  │  │  │  │  ├─ gem.svg
│  │  │  │  │  ├─ hand-back-fist.svg
│  │  │  │  │  ├─ hand-lizard.svg
│  │  │  │  │  ├─ hand-peace.svg
│  │  │  │  │  ├─ hand-point-down.svg
│  │  │  │  │  ├─ hand-point-left.svg
│  │  │  │  │  ├─ hand-point-right.svg
│  │  │  │  │  ├─ hand-point-up.svg
│  │  │  │  │  ├─ hand-pointer.svg
│  │  │  │  │  ├─ hand-scissors.svg
│  │  │  │  │  ├─ hand-spock.svg
│  │  │  │  │  ├─ hand.svg
│  │  │  │  │  ├─ handshake.svg
│  │  │  │  │  ├─ hard-drive.svg
│  │  │  │  │  ├─ heart.svg
│  │  │  │  │  ├─ hospital.svg
│  │  │  │  │  ├─ hourglass.svg
│  │  │  │  │  ├─ id-badge.svg
│  │  │  │  │  ├─ id-card.svg
│  │  │  │  │  ├─ image.svg
│  │  │  │  │  ├─ images.svg
│  │  │  │  │  ├─ keyboard.svg
│  │  │  │  │  ├─ lemon.svg
│  │  │  │  │  ├─ life-ring.svg
│  │  │  │  │  ├─ lightbulb.svg
│  │  │  │  │  ├─ map.svg
│  │  │  │  │  ├─ message.svg
│  │  │  │  │  ├─ money-bill-1.svg
│  │  │  │  │  ├─ moon.svg
│  │  │  │  │  ├─ newspaper.svg
│  │  │  │  │  ├─ note-sticky.svg
│  │  │  │  │  ├─ object-group.svg
│  │  │  │  │  ├─ object-ungroup.svg
│  │  │  │  │  ├─ paper-plane.svg
│  │  │  │  │  ├─ paste.svg
│  │  │  │  │  ├─ pen-to-square.svg
│  │  │  │  │  ├─ rectangle-list.svg
│  │  │  │  │  ├─ rectangle-xmark.svg
│  │  │  │  │  ├─ registered.svg
│  │  │  │  │  ├─ share-from-square.svg
│  │  │  │  │  ├─ snowflake.svg
│  │  │  │  │  ├─ square-caret-down.svg
│  │  │  │  │  ├─ square-caret-left.svg
│  │  │  │  │  ├─ square-caret-right.svg
│  │  │  │  │  ├─ square-caret-up.svg
│  │  │  │  │  ├─ square-check.svg
│  │  │  │  │  ├─ square-full.svg
│  │  │  │  │  ├─ square-minus.svg
│  │  │  │  │  ├─ square-plus.svg
│  │  │  │  │  ├─ square.svg
│  │  │  │  │  ├─ star-half-stroke.svg
│  │  │  │  │  ├─ star-half.svg
│  │  │  │  │  ├─ star.svg
│  │  │  │  │  ├─ sun.svg
│  │  │  │  │  ├─ thumbs-down.svg
│  │  │  │  │  ├─ thumbs-up.svg
│  │  │  │  │  ├─ trash-can.svg
│  │  │  │  │  ├─ user.svg
│  │  │  │  │  ├─ window-maximize.svg
│  │  │  │  │  ├─ window-minimize.svg
│  │  │  │  │  └─ window-restore.svg
│  │  │  │  └─ solid
│  │  │  │     ├─ 0.svg
│  │  │  │     ├─ 1.svg
│  │  │  │     ├─ 2.svg
│  │  │  │     ├─ 3.svg
│  │  │  │     ├─ 4.svg
│  │  │  │     ├─ 5.svg
│  │  │  │     ├─ 6.svg
│  │  │  │     ├─ 7.svg
│  │  │  │     ├─ 8.svg
│  │  │  │     ├─ 9.svg
│  │  │  │     ├─ a.svg
│  │  │  │     ├─ address-book.svg
│  │  │  │     ├─ address-card.svg
│  │  │  │     ├─ align-center.svg
│  │  │  │     ├─ align-justify.svg
│  │  │  │     ├─ align-left.svg
│  │  │  │     ├─ align-right.svg
│  │  │  │     ├─ anchor-circle-check.svg
│  │  │  │     ├─ anchor-circle-exclamation.svg
│  │  │  │     ├─ anchor-circle-xmark.svg
│  │  │  │     ├─ anchor-lock.svg
│  │  │  │     ├─ anchor.svg
│  │  │  │     ├─ angle-down.svg
│  │  │  │     ├─ angle-left.svg
│  │  │  │     ├─ angle-right.svg
│  │  │  │     ├─ angle-up.svg
│  │  │  │     ├─ angles-down.svg
│  │  │  │     ├─ angles-left.svg
│  │  │  │     ├─ angles-right.svg
│  │  │  │     ├─ angles-up.svg
│  │  │  │     ├─ ankh.svg
│  │  │  │     ├─ apple-whole.svg
│  │  │  │     ├─ archway.svg
│  │  │  │     ├─ arrow-down-1-9.svg
│  │  │  │     ├─ arrow-down-9-1.svg
│  │  │  │     ├─ arrow-down-a-z.svg
│  │  │  │     ├─ arrow-down-long.svg
│  │  │  │     ├─ arrow-down-short-wide.svg
│  │  │  │     ├─ arrow-down-up-across-line.svg
│  │  │  │     ├─ arrow-down-up-lock.svg
│  │  │  │     ├─ arrow-down-wide-short.svg
│  │  │  │     ├─ arrow-down-z-a.svg
│  │  │  │     ├─ arrow-down.svg
│  │  │  │     ├─ arrow-left-long.svg
│  │  │  │     ├─ arrow-left.svg
│  │  │  │     ├─ arrow-pointer.svg
│  │  │  │     ├─ arrow-right-arrow-left.svg
│  │  │  │     ├─ arrow-right-from-bracket.svg
│  │  │  │     ├─ arrow-right-long.svg
│  │  │  │     ├─ arrow-right-to-bracket.svg
│  │  │  │     ├─ arrow-right-to-city.svg
│  │  │  │     ├─ arrow-right.svg
│  │  │  │     ├─ arrow-rotate-left.svg
│  │  │  │     ├─ arrow-rotate-right.svg
│  │  │  │     ├─ arrow-trend-down.svg
│  │  │  │     ├─ arrow-trend-up.svg
│  │  │  │     ├─ arrow-turn-down.svg
│  │  │  │     ├─ arrow-turn-up.svg
│  │  │  │     ├─ arrow-up-1-9.svg
│  │  │  │     ├─ arrow-up-9-1.svg
│  │  │  │     ├─ arrow-up-a-z.svg
│  │  │  │     ├─ arrow-up-from-bracket.svg
│  │  │  │     ├─ arrow-up-from-ground-water.svg
│  │  │  │     ├─ arrow-up-from-water-pump.svg
│  │  │  │     ├─ arrow-up-long.svg
│  │  │  │     ├─ arrow-up-right-dots.svg
│  │  │  │     ├─ arrow-up-right-from-square.svg
│  │  │  │     ├─ arrow-up-short-wide.svg
│  │  │  │     ├─ arrow-up-wide-short.svg
│  │  │  │     ├─ arrow-up-z-a.svg
│  │  │  │     ├─ arrow-up.svg
│  │  │  │     ├─ arrows-down-to-line.svg
│  │  │  │     ├─ arrows-down-to-people.svg
│  │  │  │     ├─ arrows-left-right-to-line.svg
│  │  │  │     ├─ arrows-left-right.svg
│  │  │  │     ├─ arrows-rotate.svg
│  │  │  │     ├─ arrows-spin.svg
│  │  │  │     ├─ arrows-split-up-and-left.svg
│  │  │  │     ├─ arrows-to-circle.svg
│  │  │  │     ├─ arrows-to-dot.svg
│  │  │  │     ├─ arrows-to-eye.svg
│  │  │  │     ├─ arrows-turn-right.svg
│  │  │  │     ├─ arrows-turn-to-dots.svg
│  │  │  │     ├─ arrows-up-down-left-right.svg
│  │  │  │     ├─ arrows-up-down.svg
│  │  │  │     ├─ arrows-up-to-line.svg
│  │  │  │     ├─ asterisk.svg
│  │  │  │     ├─ at.svg
│  │  │  │     ├─ atom.svg
│  │  │  │     ├─ audio-description.svg
│  │  │  │     ├─ austral-sign.svg
│  │  │  │     ├─ award.svg
│  │  │  │     ├─ b.svg
│  │  │  │     ├─ baby-carriage.svg
│  │  │  │     ├─ baby.svg
│  │  │  │     ├─ backward-fast.svg
│  │  │  │     ├─ backward-step.svg
│  │  │  │     ├─ backward.svg
│  │  │  │     ├─ bacon.svg
│  │  │  │     ├─ bacteria.svg
│  │  │  │     ├─ bacterium.svg
│  │  │  │     ├─ bag-shopping.svg
│  │  │  │     ├─ bahai.svg
│  │  │  │     ├─ baht-sign.svg
│  │  │  │     ├─ ban-smoking.svg
│  │  │  │     ├─ ban.svg
│  │  │  │     ├─ bandage.svg
│  │  │  │     ├─ barcode.svg
│  │  │  │     ├─ bars-progress.svg
│  │  │  │     ├─ bars-staggered.svg
│  │  │  │     ├─ bars.svg
│  │  │  │     ├─ baseball-bat-ball.svg
│  │  │  │     ├─ baseball.svg
│  │  │  │     ├─ basket-shopping.svg
│  │  │  │     ├─ basketball.svg
│  │  │  │     ├─ bath.svg
│  │  │  │     ├─ battery-empty.svg
│  │  │  │     ├─ battery-full.svg
│  │  │  │     ├─ battery-half.svg
│  │  │  │     ├─ battery-quarter.svg
│  │  │  │     ├─ battery-three-quarters.svg
│  │  │  │     ├─ bed-pulse.svg
│  │  │  │     ├─ bed.svg
│  │  │  │     ├─ beer-mug-empty.svg
│  │  │  │     ├─ bell-concierge.svg
│  │  │  │     ├─ bell-slash.svg
│  │  │  │     ├─ bell.svg
│  │  │  │     ├─ bezier-curve.svg
│  │  │  │     ├─ bicycle.svg
│  │  │  │     ├─ binoculars.svg
│  │  │  │     ├─ biohazard.svg
│  │  │  │     ├─ bitcoin-sign.svg
│  │  │  │     ├─ blender-phone.svg
│  │  │  │     ├─ blender.svg
│  │  │  │     ├─ blog.svg
│  │  │  │     ├─ bold.svg
│  │  │  │     ├─ bolt-lightning.svg
│  │  │  │     ├─ bolt.svg
│  │  │  │     ├─ bomb.svg
│  │  │  │     ├─ bone.svg
│  │  │  │     ├─ bong.svg
│  │  │  │     ├─ book-atlas.svg
│  │  │  │     ├─ book-bible.svg
│  │  │  │     ├─ book-bookmark.svg
│  │  │  │     ├─ book-journal-whills.svg
│  │  │  │     ├─ book-medical.svg
│  │  │  │     ├─ book-open-reader.svg
│  │  │  │     ├─ book-open.svg
│  │  │  │     ├─ book-quran.svg
│  │  │  │     ├─ book-skull.svg
│  │  │  │     ├─ book.svg
│  │  │  │     ├─ bookmark.svg
│  │  │  │     ├─ border-all.svg
│  │  │  │     ├─ border-none.svg
│  │  │  │     ├─ border-top-left.svg
│  │  │  │     ├─ bore-hole.svg
│  │  │  │     ├─ bottle-droplet.svg
│  │  │  │     ├─ bottle-water.svg
│  │  │  │     ├─ bowl-food.svg
│  │  │  │     ├─ bowl-rice.svg
│  │  │  │     ├─ bowling-ball.svg
│  │  │  │     ├─ box-archive.svg
│  │  │  │     ├─ box-open.svg
│  │  │  │     ├─ box-tissue.svg
│  │  │  │     ├─ box.svg
│  │  │  │     ├─ boxes-packing.svg
│  │  │  │     ├─ boxes-stacked.svg
│  │  │  │     ├─ braille.svg
│  │  │  │     ├─ brain.svg
│  │  │  │     ├─ brazilian-real-sign.svg
│  │  │  │     ├─ bread-slice.svg
│  │  │  │     ├─ bridge-circle-check.svg
│  │  │  │     ├─ bridge-circle-exclamation.svg
│  │  │  │     ├─ bridge-circle-xmark.svg
│  │  │  │     ├─ bridge-lock.svg
│  │  │  │     ├─ bridge-water.svg
│  │  │  │     ├─ bridge.svg
│  │  │  │     ├─ briefcase-medical.svg
│  │  │  │     ├─ briefcase.svg
│  │  │  │     ├─ broom-ball.svg
│  │  │  │     ├─ broom.svg
│  │  │  │     ├─ brush.svg
│  │  │  │     ├─ bucket.svg
│  │  │  │     ├─ bug-slash.svg
│  │  │  │     ├─ bug.svg
│  │  │  │     ├─ bugs.svg
│  │  │  │     ├─ building-circle-arrow-right.svg
│  │  │  │     ├─ building-circle-check.svg
│  │  │  │     ├─ building-circle-exclamation.svg
│  │  │  │     ├─ building-circle-xmark.svg
│  │  │  │     ├─ building-columns.svg
│  │  │  │     ├─ building-flag.svg
│  │  │  │     ├─ building-lock.svg
│  │  │  │     ├─ building-ngo.svg
│  │  │  │     ├─ building-shield.svg
│  │  │  │     ├─ building-un.svg
│  │  │  │     ├─ building-user.svg
│  │  │  │     ├─ building-wheat.svg
│  │  │  │     ├─ building.svg
│  │  │  │     ├─ bullhorn.svg
│  │  │  │     ├─ bullseye.svg
│  │  │  │     ├─ burger.svg
│  │  │  │     ├─ burst.svg
│  │  │  │     ├─ bus-simple.svg
│  │  │  │     ├─ bus.svg
│  │  │  │     ├─ business-time.svg
│  │  │  │     ├─ c.svg
│  │  │  │     ├─ cake-candles.svg
│  │  │  │     ├─ calculator.svg
│  │  │  │     ├─ calendar-check.svg
│  │  │  │     ├─ calendar-day.svg
│  │  │  │     ├─ calendar-days.svg
│  │  │  │     ├─ calendar-minus.svg
│  │  │  │     ├─ calendar-plus.svg
│  │  │  │     ├─ calendar-week.svg
│  │  │  │     ├─ calendar-xmark.svg
│  │  │  │     ├─ calendar.svg
│  │  │  │     ├─ camera-retro.svg
│  │  │  │     ├─ camera-rotate.svg
│  │  │  │     ├─ camera.svg
│  │  │  │     ├─ campground.svg
│  │  │  │     ├─ candy-cane.svg
│  │  │  │     ├─ cannabis.svg
│  │  │  │     ├─ capsules.svg
│  │  │  │     ├─ car-battery.svg
│  │  │  │     ├─ car-burst.svg
│  │  │  │     ├─ car-on.svg
│  │  │  │     ├─ car-rear.svg
│  │  │  │     ├─ car-side.svg
│  │  │  │     ├─ car-tunnel.svg
│  │  │  │     ├─ car.svg
│  │  │  │     ├─ caravan.svg
│  │  │  │     ├─ caret-down.svg
│  │  │  │     ├─ caret-left.svg
│  │  │  │     ├─ caret-right.svg
│  │  │  │     ├─ caret-up.svg
│  │  │  │     ├─ carrot.svg
│  │  │  │     ├─ cart-arrow-down.svg
│  │  │  │     ├─ cart-flatbed-suitcase.svg
│  │  │  │     ├─ cart-flatbed.svg
│  │  │  │     ├─ cart-plus.svg
│  │  │  │     ├─ cart-shopping.svg
│  │  │  │     ├─ cash-register.svg
│  │  │  │     ├─ cat.svg
│  │  │  │     ├─ cedi-sign.svg
│  │  │  │     ├─ cent-sign.svg
│  │  │  │     ├─ certificate.svg
│  │  │  │     ├─ chair.svg
│  │  │  │     ├─ chalkboard-user.svg
│  │  │  │     ├─ chalkboard.svg
│  │  │  │     ├─ champagne-glasses.svg
│  │  │  │     ├─ charging-station.svg
│  │  │  │     ├─ chart-area.svg
│  │  │  │     ├─ chart-bar.svg
│  │  │  │     ├─ chart-column.svg
│  │  │  │     ├─ chart-gantt.svg
│  │  │  │     ├─ chart-line.svg
│  │  │  │     ├─ chart-pie.svg
│  │  │  │     ├─ chart-simple.svg
│  │  │  │     ├─ check-double.svg
│  │  │  │     ├─ check-to-slot.svg
│  │  │  │     ├─ check.svg
│  │  │  │     ├─ cheese.svg
│  │  │  │     ├─ chess-bishop.svg
│  │  │  │     ├─ chess-board.svg
│  │  │  │     ├─ chess-king.svg
│  │  │  │     ├─ chess-knight.svg
│  │  │  │     ├─ chess-pawn.svg
│  │  │  │     ├─ chess-queen.svg
│  │  │  │     ├─ chess-rook.svg
│  │  │  │     ├─ chess.svg
│  │  │  │     ├─ chevron-down.svg
│  │  │  │     ├─ chevron-left.svg
│  │  │  │     ├─ chevron-right.svg
│  │  │  │     ├─ chevron-up.svg
│  │  │  │     ├─ child-dress.svg
│  │  │  │     ├─ child-reaching.svg
│  │  │  │     ├─ child-rifle.svg
│  │  │  │     ├─ child.svg
│  │  │  │     ├─ children.svg
│  │  │  │     ├─ church.svg
│  │  │  │     ├─ circle-arrow-down.svg
│  │  │  │     ├─ circle-arrow-left.svg
│  │  │  │     ├─ circle-arrow-right.svg
│  │  │  │     ├─ circle-arrow-up.svg
│  │  │  │     ├─ circle-check.svg
│  │  │  │     ├─ circle-chevron-down.svg
│  │  │  │     ├─ circle-chevron-left.svg
│  │  │  │     ├─ circle-chevron-right.svg
│  │  │  │     ├─ circle-chevron-up.svg
│  │  │  │     ├─ circle-dollar-to-slot.svg
│  │  │  │     ├─ circle-dot.svg
│  │  │  │     ├─ circle-down.svg
│  │  │  │     ├─ circle-exclamation.svg
│  │  │  │     ├─ circle-h.svg
│  │  │  │     ├─ circle-half-stroke.svg
│  │  │  │     ├─ circle-info.svg
│  │  │  │     ├─ circle-left.svg
│  │  │  │     ├─ circle-minus.svg
│  │  │  │     ├─ circle-nodes.svg
│  │  │  │     ├─ circle-notch.svg
│  │  │  │     ├─ circle-pause.svg
│  │  │  │     ├─ circle-play.svg
│  │  │  │     ├─ circle-plus.svg
│  │  │  │     ├─ circle-question.svg
│  │  │  │     ├─ circle-radiation.svg
│  │  │  │     ├─ circle-right.svg
│  │  │  │     ├─ circle-stop.svg
│  │  │  │     ├─ circle-up.svg
│  │  │  │     ├─ circle-user.svg
│  │  │  │     ├─ circle-xmark.svg
│  │  │  │     ├─ circle.svg
│  │  │  │     ├─ city.svg
│  │  │  │     ├─ clapperboard.svg
│  │  │  │     ├─ clipboard-check.svg
│  │  │  │     ├─ clipboard-list.svg
│  │  │  │     ├─ clipboard-question.svg
│  │  │  │     ├─ clipboard-user.svg
│  │  │  │     ├─ clipboard.svg
│  │  │  │     ├─ clock-rotate-left.svg
│  │  │  │     ├─ clock.svg
│  │  │  │     ├─ clone.svg
│  │  │  │     ├─ closed-captioning.svg
│  │  │  │     ├─ cloud-arrow-down.svg
│  │  │  │     ├─ cloud-arrow-up.svg
│  │  │  │     ├─ cloud-bolt.svg
│  │  │  │     ├─ cloud-meatball.svg
│  │  │  │     ├─ cloud-moon-rain.svg
│  │  │  │     ├─ cloud-moon.svg
│  │  │  │     ├─ cloud-rain.svg
│  │  │  │     ├─ cloud-showers-heavy.svg
│  │  │  │     ├─ cloud-showers-water.svg
│  │  │  │     ├─ cloud-sun-rain.svg
│  │  │  │     ├─ cloud-sun.svg
│  │  │  │     ├─ cloud.svg
│  │  │  │     ├─ clover.svg
│  │  │  │     ├─ code-branch.svg
│  │  │  │     ├─ code-commit.svg
│  │  │  │     ├─ code-compare.svg
│  │  │  │     ├─ code-fork.svg
│  │  │  │     ├─ code-merge.svg
│  │  │  │     ├─ code-pull-request.svg
│  │  │  │     ├─ code.svg
│  │  │  │     ├─ coins.svg
│  │  │  │     ├─ colon-sign.svg
│  │  │  │     ├─ comment-dollar.svg
│  │  │  │     ├─ comment-dots.svg
│  │  │  │     ├─ comment-medical.svg
│  │  │  │     ├─ comment-slash.svg
│  │  │  │     ├─ comment-sms.svg
│  │  │  │     ├─ comment.svg
│  │  │  │     ├─ comments-dollar.svg
│  │  │  │     ├─ comments.svg
│  │  │  │     ├─ compact-disc.svg
│  │  │  │     ├─ compass-drafting.svg
│  │  │  │     ├─ compass.svg
│  │  │  │     ├─ compress.svg
│  │  │  │     ├─ computer-mouse.svg
│  │  │  │     ├─ computer.svg
│  │  │  │     ├─ cookie-bite.svg
│  │  │  │     ├─ cookie.svg
│  │  │  │     ├─ copy.svg
│  │  │  │     ├─ copyright.svg
│  │  │  │     ├─ couch.svg
│  │  │  │     ├─ cow.svg
│  │  │  │     ├─ credit-card.svg
│  │  │  │     ├─ crop-simple.svg
│  │  │  │     ├─ crop.svg
│  │  │  │     ├─ cross.svg
│  │  │  │     ├─ crosshairs.svg
│  │  │  │     ├─ crow.svg
│  │  │  │     ├─ crown.svg
│  │  │  │     ├─ crutch.svg
│  │  │  │     ├─ cruzeiro-sign.svg
│  │  │  │     ├─ cube.svg
│  │  │  │     ├─ cubes-stacked.svg
│  │  │  │     ├─ cubes.svg
│  │  │  │     ├─ d.svg
│  │  │  │     ├─ database.svg
│  │  │  │     ├─ delete-left.svg
│  │  │  │     ├─ democrat.svg
│  │  │  │     ├─ desktop.svg
│  │  │  │     ├─ dharmachakra.svg
│  │  │  │     ├─ diagram-next.svg
│  │  │  │     ├─ diagram-predecessor.svg
│  │  │  │     ├─ diagram-project.svg
│  │  │  │     ├─ diagram-successor.svg
│  │  │  │     ├─ diamond-turn-right.svg
│  │  │  │     ├─ diamond.svg
│  │  │  │     ├─ dice-d20.svg
│  │  │  │     ├─ dice-d6.svg
│  │  │  │     ├─ dice-five.svg
│  │  │  │     ├─ dice-four.svg
│  │  │  │     ├─ dice-one.svg
│  │  │  │     ├─ dice-six.svg
│  │  │  │     ├─ dice-three.svg
│  │  │  │     ├─ dice-two.svg
│  │  │  │     ├─ dice.svg
│  │  │  │     ├─ disease.svg
│  │  │  │     ├─ display.svg
│  │  │  │     ├─ divide.svg
│  │  │  │     ├─ dna.svg
│  │  │  │     ├─ dog.svg
│  │  │  │     ├─ dollar-sign.svg
│  │  │  │     ├─ dolly.svg
│  │  │  │     ├─ dong-sign.svg
│  │  │  │     ├─ door-closed.svg
│  │  │  │     ├─ door-open.svg
│  │  │  │     ├─ dove.svg
│  │  │  │     ├─ down-left-and-up-right-to-center.svg
│  │  │  │     ├─ down-long.svg
│  │  │  │     ├─ download.svg
│  │  │  │     ├─ dragon.svg
│  │  │  │     ├─ draw-polygon.svg
│  │  │  │     ├─ droplet-slash.svg
│  │  │  │     ├─ droplet.svg
│  │  │  │     ├─ drum-steelpan.svg
│  │  │  │     ├─ drum.svg
│  │  │  │     ├─ drumstick-bite.svg
│  │  │  │     ├─ dumbbell.svg
│  │  │  │     ├─ dumpster-fire.svg
│  │  │  │     ├─ dumpster.svg
│  │  │  │     ├─ dungeon.svg
│  │  │  │     ├─ e.svg
│  │  │  │     ├─ ear-deaf.svg
│  │  │  │     ├─ ear-listen.svg
│  │  │  │     ├─ earth-africa.svg
│  │  │  │     ├─ earth-americas.svg
│  │  │  │     ├─ earth-asia.svg
│  │  │  │     ├─ earth-europe.svg
│  │  │  │     ├─ earth-oceania.svg
│  │  │  │     ├─ egg.svg
│  │  │  │     ├─ eject.svg
│  │  │  │     ├─ elevator.svg
│  │  │  │     ├─ ellipsis-vertical.svg
│  │  │  │     ├─ ellipsis.svg
│  │  │  │     ├─ envelope-circle-check.svg
│  │  │  │     ├─ envelope-open-text.svg
│  │  │  │     ├─ envelope-open.svg
│  │  │  │     ├─ envelope.svg
│  │  │  │     ├─ envelopes-bulk.svg
│  │  │  │     ├─ equals.svg
│  │  │  │     ├─ eraser.svg
│  │  │  │     ├─ ethernet.svg
│  │  │  │     ├─ euro-sign.svg
│  │  │  │     ├─ exclamation.svg
│  │  │  │     ├─ expand.svg
│  │  │  │     ├─ explosion.svg
│  │  │  │     ├─ eye-dropper.svg
│  │  │  │     ├─ eye-low-vision.svg
│  │  │  │     ├─ eye-slash.svg
│  │  │  │     ├─ eye.svg
│  │  │  │     ├─ f.svg
│  │  │  │     ├─ face-angry.svg
│  │  │  │     ├─ face-dizzy.svg
│  │  │  │     ├─ face-flushed.svg
│  │  │  │     ├─ face-frown-open.svg
│  │  │  │     ├─ face-frown.svg
│  │  │  │     ├─ face-grimace.svg
│  │  │  │     ├─ face-grin-beam-sweat.svg
│  │  │  │     ├─ face-grin-beam.svg
│  │  │  │     ├─ face-grin-hearts.svg
│  │  │  │     ├─ face-grin-squint-tears.svg
│  │  │  │     ├─ face-grin-squint.svg
│  │  │  │     ├─ face-grin-stars.svg
│  │  │  │     ├─ face-grin-tears.svg
│  │  │  │     ├─ face-grin-tongue-squint.svg
│  │  │  │     ├─ face-grin-tongue-wink.svg
│  │  │  │     ├─ face-grin-tongue.svg
│  │  │  │     ├─ face-grin-wide.svg
│  │  │  │     ├─ face-grin-wink.svg
│  │  │  │     ├─ face-grin.svg
│  │  │  │     ├─ face-kiss-beam.svg
│  │  │  │     ├─ face-kiss-wink-heart.svg
│  │  │  │     ├─ face-kiss.svg
│  │  │  │     ├─ face-laugh-beam.svg
│  │  │  │     ├─ face-laugh-squint.svg
│  │  │  │     ├─ face-laugh-wink.svg
│  │  │  │     ├─ face-laugh.svg
│  │  │  │     ├─ face-meh-blank.svg
│  │  │  │     ├─ face-meh.svg
│  │  │  │     ├─ face-rolling-eyes.svg
│  │  │  │     ├─ face-sad-cry.svg
│  │  │  │     ├─ face-sad-tear.svg
│  │  │  │     ├─ face-smile-beam.svg
│  │  │  │     ├─ face-smile-wink.svg
│  │  │  │     ├─ face-smile.svg
│  │  │  │     ├─ face-surprise.svg
│  │  │  │     ├─ face-tired.svg
│  │  │  │     ├─ fan.svg
│  │  │  │     ├─ faucet-drip.svg
│  │  │  │     ├─ faucet.svg
│  │  │  │     ├─ fax.svg
│  │  │  │     ├─ feather-pointed.svg
│  │  │  │     ├─ feather.svg
│  │  │  │     ├─ ferry.svg
│  │  │  │     ├─ file-arrow-down.svg
│  │  │  │     ├─ file-arrow-up.svg
│  │  │  │     ├─ file-audio.svg
│  │  │  │     ├─ file-circle-check.svg
│  │  │  │     ├─ file-circle-exclamation.svg
│  │  │  │     ├─ file-circle-minus.svg
│  │  │  │     ├─ file-circle-plus.svg
│  │  │  │     ├─ file-circle-question.svg
│  │  │  │     ├─ file-circle-xmark.svg
│  │  │  │     ├─ file-code.svg
│  │  │  │     ├─ file-contract.svg
│  │  │  │     ├─ file-csv.svg
│  │  │  │     ├─ file-excel.svg
│  │  │  │     ├─ file-export.svg
│  │  │  │     ├─ file-image.svg
│  │  │  │     ├─ file-import.svg
│  │  │  │     ├─ file-invoice-dollar.svg
│  │  │  │     ├─ file-invoice.svg
│  │  │  │     ├─ file-lines.svg
│  │  │  │     ├─ file-medical.svg
│  │  │  │     ├─ file-pdf.svg
│  │  │  │     ├─ file-pen.svg
│  │  │  │     ├─ file-powerpoint.svg
│  │  │  │     ├─ file-prescription.svg
│  │  │  │     ├─ file-shield.svg
│  │  │  │     ├─ file-signature.svg
│  │  │  │     ├─ file-video.svg
│  │  │  │     ├─ file-waveform.svg
│  │  │  │     ├─ file-word.svg
│  │  │  │     ├─ file-zipper.svg
│  │  │  │     ├─ file.svg
│  │  │  │     ├─ fill-drip.svg
│  │  │  │     ├─ fill.svg
│  │  │  │     ├─ film.svg
│  │  │  │     ├─ filter-circle-dollar.svg
│  │  │  │     ├─ filter-circle-xmark.svg
│  │  │  │     ├─ filter.svg
│  │  │  │     ├─ fingerprint.svg
│  │  │  │     ├─ fire-burner.svg
│  │  │  │     ├─ fire-extinguisher.svg
│  │  │  │     ├─ fire-flame-curved.svg
│  │  │  │     ├─ fire-flame-simple.svg
│  │  │  │     ├─ fire.svg
│  │  │  │     ├─ fish-fins.svg
│  │  │  │     ├─ fish.svg
│  │  │  │     ├─ flag-checkered.svg
│  │  │  │     ├─ flag-usa.svg
│  │  │  │     ├─ flag.svg
│  │  │  │     ├─ flask-vial.svg
│  │  │  │     ├─ flask.svg
│  │  │  │     ├─ floppy-disk.svg
│  │  │  │     ├─ florin-sign.svg
│  │  │  │     ├─ folder-closed.svg
│  │  │  │     ├─ folder-minus.svg
│  │  │  │     ├─ folder-open.svg
│  │  │  │     ├─ folder-plus.svg
│  │  │  │     ├─ folder-tree.svg
│  │  │  │     ├─ folder.svg
│  │  │  │     ├─ font-awesome.svg
│  │  │  │     ├─ font.svg
│  │  │  │     ├─ football.svg
│  │  │  │     ├─ forward-fast.svg
│  │  │  │     ├─ forward-step.svg
│  │  │  │     ├─ forward.svg
│  │  │  │     ├─ franc-sign.svg
│  │  │  │     ├─ frog.svg
│  │  │  │     ├─ futbol.svg
│  │  │  │     ├─ g.svg
│  │  │  │     ├─ gamepad.svg
│  │  │  │     ├─ gas-pump.svg
│  │  │  │     ├─ gauge-high.svg
│  │  │  │     ├─ gauge-simple-high.svg
│  │  │  │     ├─ gauge-simple.svg
│  │  │  │     ├─ gauge.svg
│  │  │  │     ├─ gavel.svg
│  │  │  │     ├─ gear.svg
│  │  │  │     ├─ gears.svg
│  │  │  │     ├─ gem.svg
│  │  │  │     ├─ genderless.svg
│  │  │  │     ├─ ghost.svg
│  │  │  │     ├─ gift.svg
│  │  │  │     ├─ gifts.svg
│  │  │  │     ├─ glass-water-droplet.svg
│  │  │  │     ├─ glass-water.svg
│  │  │  │     ├─ glasses.svg
│  │  │  │     ├─ globe.svg
│  │  │  │     ├─ golf-ball-tee.svg
│  │  │  │     ├─ gopuram.svg
│  │  │  │     ├─ graduation-cap.svg
│  │  │  │     ├─ greater-than-equal.svg
│  │  │  │     ├─ greater-than.svg
│  │  │  │     ├─ grip-lines-vertical.svg
│  │  │  │     ├─ grip-lines.svg
│  │  │  │     ├─ grip-vertical.svg
│  │  │  │     ├─ grip.svg
│  │  │  │     ├─ group-arrows-rotate.svg
│  │  │  │     ├─ guarani-sign.svg
│  │  │  │     ├─ guitar.svg
│  │  │  │     ├─ gun.svg
│  │  │  │     ├─ h.svg
│  │  │  │     ├─ hammer.svg
│  │  │  │     ├─ hamsa.svg
│  │  │  │     ├─ hand-back-fist.svg
│  │  │  │     ├─ hand-dots.svg
│  │  │  │     ├─ hand-fist.svg
│  │  │  │     ├─ hand-holding-dollar.svg
│  │  │  │     ├─ hand-holding-droplet.svg
│  │  │  │     ├─ hand-holding-hand.svg
│  │  │  │     ├─ hand-holding-heart.svg
│  │  │  │     ├─ hand-holding-medical.svg
│  │  │  │     ├─ hand-holding.svg
│  │  │  │     ├─ hand-lizard.svg
│  │  │  │     ├─ hand-middle-finger.svg
│  │  │  │     ├─ hand-peace.svg
│  │  │  │     ├─ hand-point-down.svg
│  │  │  │     ├─ hand-point-left.svg
│  │  │  │     ├─ hand-point-right.svg
│  │  │  │     ├─ hand-point-up.svg
│  │  │  │     ├─ hand-pointer.svg
│  │  │  │     ├─ hand-scissors.svg
│  │  │  │     ├─ hand-sparkles.svg
│  │  │  │     ├─ hand-spock.svg
│  │  │  │     ├─ hand.svg
│  │  │  │     ├─ handcuffs.svg
│  │  │  │     ├─ hands-asl-interpreting.svg
│  │  │  │     ├─ hands-bound.svg
│  │  │  │     ├─ hands-bubbles.svg
│  │  │  │     ├─ hands-clapping.svg
│  │  │  │     ├─ hands-holding-child.svg
│  │  │  │     ├─ hands-holding-circle.svg
│  │  │  │     ├─ hands-holding.svg
│  │  │  │     ├─ hands-praying.svg
│  │  │  │     ├─ hands.svg
│  │  │  │     ├─ handshake-angle.svg
│  │  │  │     ├─ handshake-simple-slash.svg
│  │  │  │     ├─ handshake-simple.svg
│  │  │  │     ├─ handshake-slash.svg
│  │  │  │     ├─ handshake.svg
│  │  │  │     ├─ hanukiah.svg
│  │  │  │     ├─ hard-drive.svg
│  │  │  │     ├─ hashtag.svg
│  │  │  │     ├─ hat-cowboy-side.svg
│  │  │  │     ├─ hat-cowboy.svg
│  │  │  │     ├─ hat-wizard.svg
│  │  │  │     ├─ head-side-cough-slash.svg
│  │  │  │     ├─ head-side-cough.svg
│  │  │  │     ├─ head-side-mask.svg
│  │  │  │     ├─ head-side-virus.svg
│  │  │  │     ├─ heading.svg
│  │  │  │     ├─ headphones-simple.svg
│  │  │  │     ├─ headphones.svg
│  │  │  │     ├─ headset.svg
│  │  │  │     ├─ heart-circle-bolt.svg
│  │  │  │     ├─ heart-circle-check.svg
│  │  │  │     ├─ heart-circle-exclamation.svg
│  │  │  │     ├─ heart-circle-minus.svg
│  │  │  │     ├─ heart-circle-plus.svg
│  │  │  │     ├─ heart-circle-xmark.svg
│  │  │  │     ├─ heart-crack.svg
│  │  │  │     ├─ heart-pulse.svg
│  │  │  │     ├─ heart.svg
│  │  │  │     ├─ helicopter-symbol.svg
│  │  │  │     ├─ helicopter.svg
│  │  │  │     ├─ helmet-safety.svg
│  │  │  │     ├─ helmet-un.svg
│  │  │  │     ├─ highlighter.svg
│  │  │  │     ├─ hill-avalanche.svg
│  │  │  │     ├─ hill-rockslide.svg
│  │  │  │     ├─ hippo.svg
│  │  │  │     ├─ hockey-puck.svg
│  │  │  │     ├─ holly-berry.svg
│  │  │  │     ├─ horse-head.svg
│  │  │  │     ├─ horse.svg
│  │  │  │     ├─ hospital-user.svg
│  │  │  │     ├─ hospital.svg
│  │  │  │     ├─ hot-tub-person.svg
│  │  │  │     ├─ hotdog.svg
│  │  │  │     ├─ hotel.svg
│  │  │  │     ├─ hourglass-empty.svg
│  │  │  │     ├─ hourglass-end.svg
│  │  │  │     ├─ hourglass-start.svg
│  │  │  │     ├─ hourglass.svg
│  │  │  │     ├─ house-chimney-crack.svg
│  │  │  │     ├─ house-chimney-medical.svg
│  │  │  │     ├─ house-chimney-user.svg
│  │  │  │     ├─ house-chimney-window.svg
│  │  │  │     ├─ house-chimney.svg
│  │  │  │     ├─ house-circle-check.svg
│  │  │  │     ├─ house-circle-exclamation.svg
│  │  │  │     ├─ house-circle-xmark.svg
│  │  │  │     ├─ house-crack.svg
│  │  │  │     ├─ house-fire.svg
│  │  │  │     ├─ house-flag.svg
│  │  │  │     ├─ house-flood-water-circle-arrow-right.svg
│  │  │  │     ├─ house-flood-water.svg
│  │  │  │     ├─ house-laptop.svg
│  │  │  │     ├─ house-lock.svg
│  │  │  │     ├─ house-medical-circle-check.svg
│  │  │  │     ├─ house-medical-circle-exclamation.svg
│  │  │  │     ├─ house-medical-circle-xmark.svg
│  │  │  │     ├─ house-medical-flag.svg
│  │  │  │     ├─ house-medical.svg
│  │  │  │     ├─ house-signal.svg
│  │  │  │     ├─ house-tsunami.svg
│  │  │  │     ├─ house-user.svg
│  │  │  │     ├─ house.svg
│  │  │  │     ├─ hryvnia-sign.svg
│  │  │  │     ├─ hurricane.svg
│  │  │  │     ├─ i-cursor.svg
│  │  │  │     ├─ i.svg
│  │  │  │     ├─ ice-cream.svg
│  │  │  │     ├─ icicles.svg
│  │  │  │     ├─ icons.svg
│  │  │  │     ├─ id-badge.svg
│  │  │  │     ├─ id-card-clip.svg
│  │  │  │     ├─ id-card.svg
│  │  │  │     ├─ igloo.svg
│  │  │  │     ├─ image-portrait.svg
│  │  │  │     ├─ image.svg
│  │  │  │     ├─ images.svg
│  │  │  │     ├─ inbox.svg
│  │  │  │     ├─ indent.svg
│  │  │  │     ├─ indian-rupee-sign.svg
│  │  │  │     ├─ industry.svg
│  │  │  │     ├─ infinity.svg
│  │  │  │     ├─ info.svg
│  │  │  │     ├─ italic.svg
│  │  │  │     ├─ j.svg
│  │  │  │     ├─ jar-wheat.svg
│  │  │  │     ├─ jar.svg
│  │  │  │     ├─ jedi.svg
│  │  │  │     ├─ jet-fighter-up.svg
│  │  │  │     ├─ jet-fighter.svg
│  │  │  │     ├─ joint.svg
│  │  │  │     ├─ jug-detergent.svg
│  │  │  │     ├─ k.svg
│  │  │  │     ├─ kaaba.svg
│  │  │  │     ├─ key.svg
│  │  │  │     ├─ keyboard.svg
│  │  │  │     ├─ khanda.svg
│  │  │  │     ├─ kip-sign.svg
│  │  │  │     ├─ kit-medical.svg
│  │  │  │     ├─ kitchen-set.svg
│  │  │  │     ├─ kiwi-bird.svg
│  │  │  │     ├─ l.svg
│  │  │  │     ├─ land-mine-on.svg
│  │  │  │     ├─ landmark-dome.svg
│  │  │  │     ├─ landmark-flag.svg
│  │  │  │     ├─ landmark.svg
│  │  │  │     ├─ language.svg
│  │  │  │     ├─ laptop-code.svg
│  │  │  │     ├─ laptop-file.svg
│  │  │  │     ├─ laptop-medical.svg
│  │  │  │     ├─ laptop.svg
│  │  │  │     ├─ lari-sign.svg
│  │  │  │     ├─ layer-group.svg
│  │  │  │     ├─ leaf.svg
│  │  │  │     ├─ left-long.svg
│  │  │  │     ├─ left-right.svg
│  │  │  │     ├─ lemon.svg
│  │  │  │     ├─ less-than-equal.svg
│  │  │  │     ├─ less-than.svg
│  │  │  │     ├─ life-ring.svg
│  │  │  │     ├─ lightbulb.svg
│  │  │  │     ├─ lines-leaning.svg
│  │  │  │     ├─ link-slash.svg
│  │  │  │     ├─ link.svg
│  │  │  │     ├─ lira-sign.svg
│  │  │  │     ├─ list-check.svg
│  │  │  │     ├─ list-ol.svg
│  │  │  │     ├─ list-ul.svg
│  │  │  │     ├─ list.svg
│  │  │  │     ├─ litecoin-sign.svg
│  │  │  │     ├─ location-arrow.svg
│  │  │  │     ├─ location-crosshairs.svg
│  │  │  │     ├─ location-dot.svg
│  │  │  │     ├─ location-pin-lock.svg
│  │  │  │     ├─ location-pin.svg
│  │  │  │     ├─ lock-open.svg
│  │  │  │     ├─ lock.svg
│  │  │  │     ├─ locust.svg
│  │  │  │     ├─ lungs-virus.svg
│  │  │  │     ├─ lungs.svg
│  │  │  │     ├─ m.svg
│  │  │  │     ├─ magnet.svg
│  │  │  │     ├─ magnifying-glass-arrow-right.svg
│  │  │  │     ├─ magnifying-glass-chart.svg
│  │  │  │     ├─ magnifying-glass-dollar.svg
│  │  │  │     ├─ magnifying-glass-location.svg
│  │  │  │     ├─ magnifying-glass-minus.svg
│  │  │  │     ├─ magnifying-glass-plus.svg
│  │  │  │     ├─ magnifying-glass.svg
│  │  │  │     ├─ manat-sign.svg
│  │  │  │     ├─ map-location-dot.svg
│  │  │  │     ├─ map-location.svg
│  │  │  │     ├─ map-pin.svg
│  │  │  │     ├─ map.svg
│  │  │  │     ├─ marker.svg
│  │  │  │     ├─ mars-and-venus-burst.svg
│  │  │  │     ├─ mars-and-venus.svg
│  │  │  │     ├─ mars-double.svg
│  │  │  │     ├─ mars-stroke-right.svg
│  │  │  │     ├─ mars-stroke-up.svg
│  │  │  │     ├─ mars-stroke.svg
│  │  │  │     ├─ mars.svg
│  │  │  │     ├─ martini-glass-citrus.svg
│  │  │  │     ├─ martini-glass-empty.svg
│  │  │  │     ├─ martini-glass.svg
│  │  │  │     ├─ mask-face.svg
│  │  │  │     ├─ mask-ventilator.svg
│  │  │  │     ├─ mask.svg
│  │  │  │     ├─ masks-theater.svg
│  │  │  │     ├─ mattress-pillow.svg
│  │  │  │     ├─ maximize.svg
│  │  │  │     ├─ medal.svg
│  │  │  │     ├─ memory.svg
│  │  │  │     ├─ menorah.svg
│  │  │  │     ├─ mercury.svg
│  │  │  │     ├─ message.svg
│  │  │  │     ├─ meteor.svg
│  │  │  │     ├─ microchip.svg
│  │  │  │     ├─ microphone-lines-slash.svg
│  │  │  │     ├─ microphone-lines.svg
│  │  │  │     ├─ microphone-slash.svg
│  │  │  │     ├─ microphone.svg
│  │  │  │     ├─ microscope.svg
│  │  │  │     ├─ mill-sign.svg
│  │  │  │     ├─ minimize.svg
│  │  │  │     ├─ minus.svg
│  │  │  │     ├─ mitten.svg
│  │  │  │     ├─ mobile-button.svg
│  │  │  │     ├─ mobile-retro.svg
│  │  │  │     ├─ mobile-screen-button.svg
│  │  │  │     ├─ mobile-screen.svg
│  │  │  │     ├─ mobile.svg
│  │  │  │     ├─ money-bill-1-wave.svg
│  │  │  │     ├─ money-bill-1.svg
│  │  │  │     ├─ money-bill-transfer.svg
│  │  │  │     ├─ money-bill-trend-up.svg
│  │  │  │     ├─ money-bill-wave.svg
│  │  │  │     ├─ money-bill-wheat.svg
│  │  │  │     ├─ money-bill.svg
│  │  │  │     ├─ money-bills.svg
│  │  │  │     ├─ money-check-dollar.svg
│  │  │  │     ├─ money-check.svg
│  │  │  │     ├─ monument.svg
│  │  │  │     ├─ moon.svg
│  │  │  │     ├─ mortar-pestle.svg
│  │  │  │     ├─ mosque.svg
│  │  │  │     ├─ mosquito-net.svg
│  │  │  │     ├─ mosquito.svg
│  │  │  │     ├─ motorcycle.svg
│  │  │  │     ├─ mound.svg
│  │  │  │     ├─ mountain-city.svg
│  │  │  │     ├─ mountain-sun.svg
│  │  │  │     ├─ mountain.svg
│  │  │  │     ├─ mug-hot.svg
│  │  │  │     ├─ mug-saucer.svg
│  │  │  │     ├─ music.svg
│  │  │  │     ├─ n.svg
│  │  │  │     ├─ naira-sign.svg
│  │  │  │     ├─ network-wired.svg
│  │  │  │     ├─ neuter.svg
│  │  │  │     ├─ newspaper.svg
│  │  │  │     ├─ not-equal.svg
│  │  │  │     ├─ note-sticky.svg
│  │  │  │     ├─ notes-medical.svg
│  │  │  │     ├─ o.svg
│  │  │  │     ├─ object-group.svg
│  │  │  │     ├─ object-ungroup.svg
│  │  │  │     ├─ oil-can.svg
│  │  │  │     ├─ oil-well.svg
│  │  │  │     ├─ om.svg
│  │  │  │     ├─ otter.svg
│  │  │  │     ├─ outdent.svg
│  │  │  │     ├─ p.svg
│  │  │  │     ├─ pager.svg
│  │  │  │     ├─ paint-roller.svg
│  │  │  │     ├─ paintbrush.svg
│  │  │  │     ├─ palette.svg
│  │  │  │     ├─ pallet.svg
│  │  │  │     ├─ panorama.svg
│  │  │  │     ├─ paper-plane.svg
│  │  │  │     ├─ paperclip.svg
│  │  │  │     ├─ parachute-box.svg
│  │  │  │     ├─ paragraph.svg
│  │  │  │     ├─ passport.svg
│  │  │  │     ├─ paste.svg
│  │  │  │     ├─ pause.svg
│  │  │  │     ├─ paw.svg
│  │  │  │     ├─ peace.svg
│  │  │  │     ├─ pen-clip.svg
│  │  │  │     ├─ pen-fancy.svg
│  │  │  │     ├─ pen-nib.svg
│  │  │  │     ├─ pen-ruler.svg
│  │  │  │     ├─ pen-to-square.svg
│  │  │  │     ├─ pen.svg
│  │  │  │     ├─ pencil.svg
│  │  │  │     ├─ people-arrows-left-right.svg
│  │  │  │     ├─ people-carry-box.svg
│  │  │  │     ├─ people-group.svg
│  │  │  │     ├─ people-line.svg
│  │  │  │     ├─ people-pulling.svg
│  │  │  │     ├─ people-robbery.svg
│  │  │  │     ├─ people-roof.svg
│  │  │  │     ├─ pepper-hot.svg
│  │  │  │     ├─ percent.svg
│  │  │  │     ├─ person-arrow-down-to-line.svg
│  │  │  │     ├─ person-arrow-up-from-line.svg
│  │  │  │     ├─ person-biking.svg
│  │  │  │     ├─ person-booth.svg
│  │  │  │     ├─ person-breastfeeding.svg
│  │  │  │     ├─ person-burst.svg
│  │  │  │     ├─ person-cane.svg
│  │  │  │     ├─ person-chalkboard.svg
│  │  │  │     ├─ person-circle-check.svg
│  │  │  │     ├─ person-circle-exclamation.svg
│  │  │  │     ├─ person-circle-minus.svg
│  │  │  │     ├─ person-circle-plus.svg
│  │  │  │     ├─ person-circle-question.svg
│  │  │  │     ├─ person-circle-xmark.svg
│  │  │  │     ├─ person-digging.svg
│  │  │  │     ├─ person-dots-from-line.svg
│  │  │  │     ├─ person-dress-burst.svg
│  │  │  │     ├─ person-dress.svg
│  │  │  │     ├─ person-drowning.svg
│  │  │  │     ├─ person-falling-burst.svg
│  │  │  │     ├─ person-falling.svg
│  │  │  │     ├─ person-half-dress.svg
│  │  │  │     ├─ person-harassing.svg
│  │  │  │     ├─ person-hiking.svg
│  │  │  │     ├─ person-military-pointing.svg
│  │  │  │     ├─ person-military-rifle.svg
│  │  │  │     ├─ person-military-to-person.svg
│  │  │  │     ├─ person-praying.svg
│  │  │  │     ├─ person-pregnant.svg
│  │  │  │     ├─ person-rays.svg
│  │  │  │     ├─ person-rifle.svg
│  │  │  │     ├─ person-running.svg
│  │  │  │     ├─ person-shelter.svg
│  │  │  │     ├─ person-skating.svg
│  │  │  │     ├─ person-skiing-nordic.svg
│  │  │  │     ├─ person-skiing.svg
│  │  │  │     ├─ person-snowboarding.svg
│  │  │  │     ├─ person-swimming.svg
│  │  │  │     ├─ person-through-window.svg
│  │  │  │     ├─ person-walking-arrow-loop-left.svg
│  │  │  │     ├─ person-walking-arrow-right.svg
│  │  │  │     ├─ person-walking-dashed-line-arrow-right.svg
│  │  │  │     ├─ person-walking-luggage.svg
│  │  │  │     ├─ person-walking-with-cane.svg
│  │  │  │     ├─ person-walking.svg
│  │  │  │     ├─ person.svg
│  │  │  │     ├─ peseta-sign.svg
│  │  │  │     ├─ peso-sign.svg
│  │  │  │     ├─ phone-flip.svg
│  │  │  │     ├─ phone-slash.svg
│  │  │  │     ├─ phone-volume.svg
│  │  │  │     ├─ phone.svg
│  │  │  │     ├─ photo-film.svg
│  │  │  │     ├─ piggy-bank.svg
│  │  │  │     ├─ pills.svg
│  │  │  │     ├─ pizza-slice.svg
│  │  │  │     ├─ place-of-worship.svg
│  │  │  │     ├─ plane-arrival.svg
│  │  │  │     ├─ plane-circle-check.svg
│  │  │  │     ├─ plane-circle-exclamation.svg
│  │  │  │     ├─ plane-circle-xmark.svg
│  │  │  │     ├─ plane-departure.svg
│  │  │  │     ├─ plane-lock.svg
│  │  │  │     ├─ plane-slash.svg
│  │  │  │     ├─ plane-up.svg
│  │  │  │     ├─ plane.svg
│  │  │  │     ├─ plant-wilt.svg
│  │  │  │     ├─ plate-wheat.svg
│  │  │  │     ├─ play.svg
│  │  │  │     ├─ plug-circle-bolt.svg
│  │  │  │     ├─ plug-circle-check.svg
│  │  │  │     ├─ plug-circle-exclamation.svg
│  │  │  │     ├─ plug-circle-minus.svg
│  │  │  │     ├─ plug-circle-plus.svg
│  │  │  │     ├─ plug-circle-xmark.svg
│  │  │  │     ├─ plug.svg
│  │  │  │     ├─ plus-minus.svg
│  │  │  │     ├─ plus.svg
│  │  │  │     ├─ podcast.svg
│  │  │  │     ├─ poo-storm.svg
│  │  │  │     ├─ poo.svg
│  │  │  │     ├─ poop.svg
│  │  │  │     ├─ power-off.svg
│  │  │  │     ├─ prescription-bottle-medical.svg
│  │  │  │     ├─ prescription-bottle.svg
│  │  │  │     ├─ prescription.svg
│  │  │  │     ├─ print.svg
│  │  │  │     ├─ pump-medical.svg
│  │  │  │     ├─ pump-soap.svg
│  │  │  │     ├─ puzzle-piece.svg
│  │  │  │     ├─ q.svg
│  │  │  │     ├─ qrcode.svg
│  │  │  │     ├─ question.svg
│  │  │  │     ├─ quote-left.svg
│  │  │  │     ├─ quote-right.svg
│  │  │  │     ├─ r.svg
│  │  │  │     ├─ radiation.svg
│  │  │  │     ├─ radio.svg
│  │  │  │     ├─ rainbow.svg
│  │  │  │     ├─ ranking-star.svg
│  │  │  │     ├─ receipt.svg
│  │  │  │     ├─ record-vinyl.svg
│  │  │  │     ├─ rectangle-ad.svg
│  │  │  │     ├─ rectangle-list.svg
│  │  │  │     ├─ rectangle-xmark.svg
│  │  │  │     ├─ recycle.svg
│  │  │  │     ├─ registered.svg
│  │  │  │     ├─ repeat.svg
│  │  │  │     ├─ reply-all.svg
│  │  │  │     ├─ reply.svg
│  │  │  │     ├─ republican.svg
│  │  │  │     ├─ restroom.svg
│  │  │  │     ├─ retweet.svg
│  │  │  │     ├─ ribbon.svg
│  │  │  │     ├─ right-from-bracket.svg
│  │  │  │     ├─ right-left.svg
│  │  │  │     ├─ right-long.svg
│  │  │  │     ├─ right-to-bracket.svg
│  │  │  │     ├─ ring.svg
│  │  │  │     ├─ road-barrier.svg
│  │  │  │     ├─ road-bridge.svg
│  │  │  │     ├─ road-circle-check.svg
│  │  │  │     ├─ road-circle-exclamation.svg
│  │  │  │     ├─ road-circle-xmark.svg
│  │  │  │     ├─ road-lock.svg
│  │  │  │     ├─ road-spikes.svg
│  │  │  │     ├─ road.svg
│  │  │  │     ├─ robot.svg
│  │  │  │     ├─ rocket.svg
│  │  │  │     ├─ rotate-left.svg
│  │  │  │     ├─ rotate-right.svg
│  │  │  │     ├─ rotate.svg
│  │  │  │     ├─ route.svg
│  │  │  │     ├─ rss.svg
│  │  │  │     ├─ ruble-sign.svg
│  │  │  │     ├─ rug.svg
│  │  │  │     ├─ ruler-combined.svg
│  │  │  │     ├─ ruler-horizontal.svg
│  │  │  │     ├─ ruler-vertical.svg
│  │  │  │     ├─ ruler.svg
│  │  │  │     ├─ rupee-sign.svg
│  │  │  │     ├─ rupiah-sign.svg
│  │  │  │     ├─ s.svg
│  │  │  │     ├─ sack-dollar.svg
│  │  │  │     ├─ sack-xmark.svg
│  │  │  │     ├─ sailboat.svg
│  │  │  │     ├─ satellite-dish.svg
│  │  │  │     ├─ satellite.svg
│  │  │  │     ├─ scale-balanced.svg
│  │  │  │     ├─ scale-unbalanced-flip.svg
│  │  │  │     ├─ scale-unbalanced.svg
│  │  │  │     ├─ school-circle-check.svg
│  │  │  │     ├─ school-circle-exclamation.svg
│  │  │  │     ├─ school-circle-xmark.svg
│  │  │  │     ├─ school-flag.svg
│  │  │  │     ├─ school-lock.svg
│  │  │  │     ├─ school.svg
│  │  │  │     ├─ scissors.svg
│  │  │  │     ├─ screwdriver-wrench.svg
│  │  │  │     ├─ screwdriver.svg
│  │  │  │     ├─ scroll-torah.svg
│  │  │  │     ├─ scroll.svg
│  │  │  │     ├─ sd-card.svg
│  │  │  │     ├─ section.svg
│  │  │  │     ├─ seedling.svg
│  │  │  │     ├─ server.svg
│  │  │  │     ├─ shapes.svg
│  │  │  │     ├─ share-from-square.svg
│  │  │  │     ├─ share-nodes.svg
│  │  │  │     ├─ share.svg
│  │  │  │     ├─ sheet-plastic.svg
│  │  │  │     ├─ shekel-sign.svg
│  │  │  │     ├─ shield-cat.svg
│  │  │  │     ├─ shield-dog.svg
│  │  │  │     ├─ shield-halved.svg
│  │  │  │     ├─ shield-heart.svg
│  │  │  │     ├─ shield-virus.svg
│  │  │  │     ├─ shield.svg
│  │  │  │     ├─ ship.svg
│  │  │  │     ├─ shirt.svg
│  │  │  │     ├─ shoe-prints.svg
│  │  │  │     ├─ shop-lock.svg
│  │  │  │     ├─ shop-slash.svg
│  │  │  │     ├─ shop.svg
│  │  │  │     ├─ shower.svg
│  │  │  │     ├─ shrimp.svg
│  │  │  │     ├─ shuffle.svg
│  │  │  │     ├─ shuttle-space.svg
│  │  │  │     ├─ sign-hanging.svg
│  │  │  │     ├─ signal.svg
│  │  │  │     ├─ signature.svg
│  │  │  │     ├─ signs-post.svg
│  │  │  │     ├─ sim-card.svg
│  │  │  │     ├─ sink.svg
│  │  │  │     ├─ sitemap.svg
│  │  │  │     ├─ skull-crossbones.svg
│  │  │  │     ├─ skull.svg
│  │  │  │     ├─ slash.svg
│  │  │  │     ├─ sleigh.svg
│  │  │  │     ├─ sliders.svg
│  │  │  │     ├─ smog.svg
│  │  │  │     ├─ smoking.svg
│  │  │  │     ├─ snowflake.svg
│  │  │  │     ├─ snowman.svg
│  │  │  │     ├─ snowplow.svg
│  │  │  │     ├─ soap.svg
│  │  │  │     ├─ socks.svg
│  │  │  │     ├─ solar-panel.svg
│  │  │  │     ├─ sort-down.svg
│  │  │  │     ├─ sort-up.svg
│  │  │  │     ├─ sort.svg
│  │  │  │     ├─ spa.svg
│  │  │  │     ├─ spaghetti-monster-flying.svg
│  │  │  │     ├─ spell-check.svg
│  │  │  │     ├─ spider.svg
│  │  │  │     ├─ spinner.svg
│  │  │  │     ├─ splotch.svg
│  │  │  │     ├─ spoon.svg
│  │  │  │     ├─ spray-can-sparkles.svg
│  │  │  │     ├─ spray-can.svg
│  │  │  │     ├─ square-arrow-up-right.svg
│  │  │  │     ├─ square-caret-down.svg
│  │  │  │     ├─ square-caret-left.svg
│  │  │  │     ├─ square-caret-right.svg
│  │  │  │     ├─ square-caret-up.svg
│  │  │  │     ├─ square-check.svg
│  │  │  │     ├─ square-envelope.svg
│  │  │  │     ├─ square-full.svg
│  │  │  │     ├─ square-h.svg
│  │  │  │     ├─ square-minus.svg
│  │  │  │     ├─ square-nfi.svg
│  │  │  │     ├─ square-parking.svg
│  │  │  │     ├─ square-pen.svg
│  │  │  │     ├─ square-person-confined.svg
│  │  │  │     ├─ square-phone-flip.svg
│  │  │  │     ├─ square-phone.svg
│  │  │  │     ├─ square-plus.svg
│  │  │  │     ├─ square-poll-horizontal.svg
│  │  │  │     ├─ square-poll-vertical.svg
│  │  │  │     ├─ square-root-variable.svg
│  │  │  │     ├─ square-rss.svg
│  │  │  │     ├─ square-share-nodes.svg
│  │  │  │     ├─ square-up-right.svg
│  │  │  │     ├─ square-virus.svg
│  │  │  │     ├─ square-xmark.svg
│  │  │  │     ├─ square.svg
│  │  │  │     ├─ staff-aesculapius.svg
│  │  │  │     ├─ stairs.svg
│  │  │  │     ├─ stamp.svg
│  │  │  │     ├─ star-and-crescent.svg
│  │  │  │     ├─ star-half-stroke.svg
│  │  │  │     ├─ star-half.svg
│  │  │  │     ├─ star-of-david.svg
│  │  │  │     ├─ star-of-life.svg
│  │  │  │     ├─ star.svg
│  │  │  │     ├─ sterling-sign.svg
│  │  │  │     ├─ stethoscope.svg
│  │  │  │     ├─ stop.svg
│  │  │  │     ├─ stopwatch-20.svg
│  │  │  │     ├─ stopwatch.svg
│  │  │  │     ├─ store-slash.svg
│  │  │  │     ├─ store.svg
│  │  │  │     ├─ street-view.svg
│  │  │  │     ├─ strikethrough.svg
│  │  │  │     ├─ stroopwafel.svg
│  │  │  │     ├─ subscript.svg
│  │  │  │     ├─ suitcase-medical.svg
│  │  │  │     ├─ suitcase-rolling.svg
│  │  │  │     ├─ suitcase.svg
│  │  │  │     ├─ sun-plant-wilt.svg
│  │  │  │     ├─ sun.svg
│  │  │  │     ├─ superscript.svg
│  │  │  │     ├─ swatchbook.svg
│  │  │  │     ├─ synagogue.svg
│  │  │  │     ├─ syringe.svg
│  │  │  │     ├─ t.svg
│  │  │  │     ├─ table-cells-large.svg
│  │  │  │     ├─ table-cells.svg
│  │  │  │     ├─ table-columns.svg
│  │  │  │     ├─ table-list.svg
│  │  │  │     ├─ table-tennis-paddle-ball.svg
│  │  │  │     ├─ table.svg
│  │  │  │     ├─ tablet-button.svg
│  │  │  │     ├─ tablet-screen-button.svg
│  │  │  │     ├─ tablet.svg
│  │  │  │     ├─ tablets.svg
│  │  │  │     ├─ tachograph-digital.svg
│  │  │  │     ├─ tag.svg
│  │  │  │     ├─ tags.svg
│  │  │  │     ├─ tape.svg
│  │  │  │     ├─ tarp-droplet.svg
│  │  │  │     ├─ tarp.svg
│  │  │  │     ├─ taxi.svg
│  │  │  │     ├─ teeth-open.svg
│  │  │  │     ├─ teeth.svg
│  │  │  │     ├─ temperature-arrow-down.svg
│  │  │  │     ├─ temperature-arrow-up.svg
│  │  │  │     ├─ temperature-empty.svg
│  │  │  │     ├─ temperature-full.svg
│  │  │  │     ├─ temperature-half.svg
│  │  │  │     ├─ temperature-high.svg
│  │  │  │     ├─ temperature-low.svg
│  │  │  │     ├─ temperature-quarter.svg
│  │  │  │     ├─ temperature-three-quarters.svg
│  │  │  │     ├─ tenge-sign.svg
│  │  │  │     ├─ tent-arrow-down-to-line.svg
│  │  │  │     ├─ tent-arrow-left-right.svg
│  │  │  │     ├─ tent-arrow-turn-left.svg
│  │  │  │     ├─ tent-arrows-down.svg
│  │  │  │     ├─ tent.svg
│  │  │  │     ├─ tents.svg
│  │  │  │     ├─ terminal.svg
│  │  │  │     ├─ text-height.svg
│  │  │  │     ├─ text-slash.svg
│  │  │  │     ├─ text-width.svg
│  │  │  │     ├─ thermometer.svg
│  │  │  │     ├─ thumbs-down.svg
│  │  │  │     ├─ thumbs-up.svg
│  │  │  │     ├─ thumbtack.svg
│  │  │  │     ├─ ticket-simple.svg
│  │  │  │     ├─ ticket.svg
│  │  │  │     ├─ timeline.svg
│  │  │  │     ├─ toggle-off.svg
│  │  │  │     ├─ toggle-on.svg
│  │  │  │     ├─ toilet-paper-slash.svg
│  │  │  │     ├─ toilet-paper.svg
│  │  │  │     ├─ toilet-portable.svg
│  │  │  │     ├─ toilet.svg
│  │  │  │     ├─ toilets-portable.svg
│  │  │  │     ├─ toolbox.svg
│  │  │  │     ├─ tooth.svg
│  │  │  │     ├─ torii-gate.svg
│  │  │  │     ├─ tornado.svg
│  │  │  │     ├─ tower-broadcast.svg
│  │  │  │     ├─ tower-cell.svg
│  │  │  │     ├─ tower-observation.svg
│  │  │  │     ├─ tractor.svg
│  │  │  │     ├─ trademark.svg
│  │  │  │     ├─ traffic-light.svg
│  │  │  │     ├─ trailer.svg
│  │  │  │     ├─ train-subway.svg
│  │  │  │     ├─ train-tram.svg
│  │  │  │     ├─ train.svg
│  │  │  │     ├─ transgender.svg
│  │  │  │     ├─ trash-arrow-up.svg
│  │  │  │     ├─ trash-can-arrow-up.svg
│  │  │  │     ├─ trash-can.svg
│  │  │  │     ├─ trash.svg
│  │  │  │     ├─ tree-city.svg
│  │  │  │     ├─ tree.svg
│  │  │  │     ├─ triangle-exclamation.svg
│  │  │  │     ├─ trophy.svg
│  │  │  │     ├─ trowel-bricks.svg
│  │  │  │     ├─ trowel.svg
│  │  │  │     ├─ truck-arrow-right.svg
│  │  │  │     ├─ truck-droplet.svg
│  │  │  │     ├─ truck-fast.svg
│  │  │  │     ├─ truck-field-un.svg
│  │  │  │     ├─ truck-field.svg
│  │  │  │     ├─ truck-front.svg
│  │  │  │     ├─ truck-medical.svg
│  │  │  │     ├─ truck-monster.svg
│  │  │  │     ├─ truck-moving.svg
│  │  │  │     ├─ truck-pickup.svg
│  │  │  │     ├─ truck-plane.svg
│  │  │  │     ├─ truck-ramp-box.svg
│  │  │  │     ├─ truck.svg
│  │  │  │     ├─ tty.svg
│  │  │  │     ├─ turkish-lira-sign.svg
│  │  │  │     ├─ turn-down.svg
│  │  │  │     ├─ turn-up.svg
│  │  │  │     ├─ tv.svg
│  │  │  │     ├─ u.svg
│  │  │  │     ├─ umbrella-beach.svg
│  │  │  │     ├─ umbrella.svg
│  │  │  │     ├─ underline.svg
│  │  │  │     ├─ universal-access.svg
│  │  │  │     ├─ unlock-keyhole.svg
│  │  │  │     ├─ unlock.svg
│  │  │  │     ├─ up-down-left-right.svg
│  │  │  │     ├─ up-down.svg
│  │  │  │     ├─ up-long.svg
│  │  │  │     ├─ up-right-and-down-left-from-center.svg
│  │  │  │     ├─ up-right-from-square.svg
│  │  │  │     ├─ upload.svg
│  │  │  │     ├─ user-astronaut.svg
│  │  │  │     ├─ user-check.svg
│  │  │  │     ├─ user-clock.svg
│  │  │  │     ├─ user-doctor.svg
│  │  │  │     ├─ user-gear.svg
│  │  │  │     ├─ user-graduate.svg
│  │  │  │     ├─ user-group.svg
│  │  │  │     ├─ user-injured.svg
│  │  │  │     ├─ user-large-slash.svg
│  │  │  │     ├─ user-large.svg
│  │  │  │     ├─ user-lock.svg
│  │  │  │     ├─ user-minus.svg
│  │  │  │     ├─ user-ninja.svg
│  │  │  │     ├─ user-nurse.svg
│  │  │  │     ├─ user-pen.svg
│  │  │  │     ├─ user-plus.svg
│  │  │  │     ├─ user-secret.svg
│  │  │  │     ├─ user-shield.svg
│  │  │  │     ├─ user-slash.svg
│  │  │  │     ├─ user-tag.svg
│  │  │  │     ├─ user-tie.svg
│  │  │  │     ├─ user-xmark.svg
│  │  │  │     ├─ user.svg
│  │  │  │     ├─ users-between-lines.svg
│  │  │  │     ├─ users-gear.svg
│  │  │  │     ├─ users-line.svg
│  │  │  │     ├─ users-rays.svg
│  │  │  │     ├─ users-rectangle.svg
│  │  │  │     ├─ users-slash.svg
│  │  │  │     ├─ users-viewfinder.svg
│  │  │  │     ├─ users.svg
│  │  │  │     ├─ utensils.svg
│  │  │  │     ├─ v.svg
│  │  │  │     ├─ van-shuttle.svg
│  │  │  │     ├─ vault.svg
│  │  │  │     ├─ vector-square.svg
│  │  │  │     ├─ venus-double.svg
│  │  │  │     ├─ venus-mars.svg
│  │  │  │     ├─ venus.svg
│  │  │  │     ├─ vest-patches.svg
│  │  │  │     ├─ vest.svg
│  │  │  │     ├─ vial-circle-check.svg
│  │  │  │     ├─ vial-virus.svg
│  │  │  │     ├─ vial.svg
│  │  │  │     ├─ vials.svg
│  │  │  │     ├─ video-slash.svg
│  │  │  │     ├─ video.svg
│  │  │  │     ├─ vihara.svg
│  │  │  │     ├─ virus-covid-slash.svg
│  │  │  │     ├─ virus-covid.svg
│  │  │  │     ├─ virus-slash.svg
│  │  │  │     ├─ virus.svg
│  │  │  │     ├─ viruses.svg
│  │  │  │     ├─ voicemail.svg
│  │  │  │     ├─ volcano.svg
│  │  │  │     ├─ volleyball.svg
│  │  │  │     ├─ volume-high.svg
│  │  │  │     ├─ volume-low.svg
│  │  │  │     ├─ volume-off.svg
│  │  │  │     ├─ volume-xmark.svg
│  │  │  │     ├─ vr-cardboard.svg
│  │  │  │     ├─ w.svg
│  │  │  │     ├─ walkie-talkie.svg
│  │  │  │     ├─ wallet.svg
│  │  │  │     ├─ wand-magic-sparkles.svg
│  │  │  │     ├─ wand-magic.svg
│  │  │  │     ├─ wand-sparkles.svg
│  │  │  │     ├─ warehouse.svg
│  │  │  │     ├─ water-ladder.svg
│  │  │  │     ├─ water.svg
│  │  │  │     ├─ wave-square.svg
│  │  │  │     ├─ weight-hanging.svg
│  │  │  │     ├─ weight-scale.svg
│  │  │  │     ├─ wheat-awn-circle-exclamation.svg
│  │  │  │     ├─ wheat-awn.svg
│  │  │  │     ├─ wheelchair-move.svg
│  │  │  │     ├─ wheelchair.svg
│  │  │  │     ├─ whiskey-glass.svg
│  │  │  │     ├─ wifi.svg
│  │  │  │     ├─ wind.svg
│  │  │  │     ├─ window-maximize.svg
│  │  │  │     ├─ window-minimize.svg
│  │  │  │     ├─ window-restore.svg
│  │  │  │     ├─ wine-bottle.svg
│  │  │  │     ├─ wine-glass-empty.svg
│  │  │  │     ├─ wine-glass.svg
│  │  │  │     ├─ won-sign.svg
│  │  │  │     ├─ worm.svg
│  │  │  │     ├─ wrench.svg
│  │  │  │     ├─ x-ray.svg
│  │  │  │     ├─ x.svg
│  │  │  │     ├─ xmark.svg
│  │  │  │     ├─ xmarks-lines.svg
│  │  │  │     ├─ y.svg
│  │  │  │     ├─ yen-sign.svg
│  │  │  │     ├─ yin-yang.svg
│  │  │  │     └─ z.svg
│  │  │  └─ webfonts
│  │  │     ├─ fa-brands-400.ttf
│  │  │     ├─ fa-brands-400.woff2
│  │  │     ├─ fa-regular-400.ttf
│  │  │     ├─ fa-regular-400.woff2
│  │  │     ├─ fa-solid-900.ttf
│  │  │     ├─ fa-solid-900.woff2
│  │  │     ├─ fa-v4compatibility.ttf
│  │  │     └─ fa-v4compatibility.woff2
│  │  ├─ fullcalendar
│  │  │  ├─ fullcalendar.css
│  │  │  ├─ fullcalendar.js
│  │  │  ├─ fullcalendar.min.css
│  │  │  ├─ fullcalendar.min.js
│  │  │  ├─ fullcalendar.print.css
│  │  │  ├─ fullcalendar.print.min.css
│  │  │  ├─ gcal.js
│  │  │  ├─ gcal.min.js
│  │  │  ├─ LICENSE.txt
│  │  │  ├─ locale
│  │  │  │  ├─ af.js
│  │  │  │  ├─ ar-dz.js
│  │  │  │  ├─ ar-kw.js
│  │  │  │  ├─ ar-ly.js
│  │  │  │  ├─ ar-ma.js
│  │  │  │  ├─ ar-sa.js
│  │  │  │  ├─ ar-tn.js
│  │  │  │  ├─ ar.js
│  │  │  │  ├─ bg.js
│  │  │  │  ├─ ca.js
│  │  │  │  ├─ cs.js
│  │  │  │  ├─ da.js
│  │  │  │  ├─ de-at.js
│  │  │  │  ├─ de-ch.js
│  │  │  │  ├─ de.js
│  │  │  │  ├─ el.js
│  │  │  │  ├─ en-au.js
│  │  │  │  ├─ en-ca.js
│  │  │  │  ├─ en-gb.js
│  │  │  │  ├─ en-ie.js
│  │  │  │  ├─ en-nz.js
│  │  │  │  ├─ es-do.js
│  │  │  │  ├─ es-us.js
│  │  │  │  ├─ es.js
│  │  │  │  ├─ et.js
│  │  │  │  ├─ eu.js
│  │  │  │  ├─ fa.js
│  │  │  │  ├─ fi.js
│  │  │  │  ├─ fr-ca.js
│  │  │  │  ├─ fr-ch.js
│  │  │  │  ├─ fr.js
│  │  │  │  ├─ gl.js
│  │  │  │  ├─ he.js
│  │  │  │  ├─ hi.js
│  │  │  │  ├─ hr.js
│  │  │  │  ├─ hu.js
│  │  │  │  ├─ id.js
│  │  │  │  ├─ is.js
│  │  │  │  ├─ it.js
│  │  │  │  ├─ ja.js
│  │  │  │  ├─ kk.js
│  │  │  │  ├─ ko.js
│  │  │  │  ├─ lb.js
│  │  │  │  ├─ lt.js
│  │  │  │  ├─ lv.js
│  │  │  │  ├─ mk.js
│  │  │  │  ├─ ms-my.js
│  │  │  │  ├─ ms.js
│  │  │  │  ├─ nb.js
│  │  │  │  ├─ nl-be.js
│  │  │  │  ├─ nl.js
│  │  │  │  ├─ nn.js
│  │  │  │  ├─ pl.js
│  │  │  │  ├─ pt-br.js
│  │  │  │  ├─ pt.js
│  │  │  │  ├─ ro.js
│  │  │  │  ├─ ru.js
│  │  │  │  ├─ sk.js
│  │  │  │  ├─ sl.js
│  │  │  │  ├─ sq.js
│  │  │  │  ├─ sr-cyrl.js
│  │  │  │  ├─ sr.js
│  │  │  │  ├─ sv.js
│  │  │  │  ├─ th.js
│  │  │  │  ├─ tr.js
│  │  │  │  ├─ uk.js
│  │  │  │  ├─ vi.js
│  │  │  │  ├─ zh-cn.js
│  │  │  │  └─ zh-tw.js
│  │  │  └─ locale-all.js
│  │  ├─ gmaps.js
│  │  ├─ ionicons
│  │  │  ├─ builder
│  │  │  │  ├─ build_data.json
│  │  │  │  ├─ cheatsheet
│  │  │  │  │  ├─ icon-row.html
│  │  │  │  │  └─ template.html
│  │  │  │  ├─ generate.py
│  │  │  │  ├─ manifest.json
│  │  │  │  └─ scripts
│  │  │  │     ├─ eotlitetool.py
│  │  │  │     ├─ generate_font.py
│  │  │  │     └─ sfnt2woff
│  │  │  ├─ cheatsheet.html
│  │  │  ├─ css
│  │  │  │  ├─ ionicons.css
│  │  │  │  └─ ionicons.min.css
│  │  │  ├─ fonts
│  │  │  │  ├─ ionicons.eot
│  │  │  │  ├─ ionicons.svg
│  │  │  │  ├─ ionicons.ttf
│  │  │  │  └─ ionicons.woff
│  │  │  ├─ less
│  │  │  │  ├─ ionicons.less
│  │  │  │  ├─ _ionicons-font.less
│  │  │  │  ├─ _ionicons-icons.less
│  │  │  │  └─ _ionicons-variables.less
│  │  │  ├─ LICENSE
│  │  │  ├─ png
│  │  │  │  └─ 512
│  │  │  │     ├─ alert-circled.png
│  │  │  │     ├─ alert.png
│  │  │  │     ├─ android-add-contact.png
│  │  │  │     ├─ android-add.png
│  │  │  │     ├─ android-alarm.png
│  │  │  │     ├─ android-archive.png
│  │  │  │     ├─ android-arrow-back.png
│  │  │  │     ├─ android-arrow-down-left.png
│  │  │  │     ├─ android-arrow-down-right.png
│  │  │  │     ├─ android-arrow-forward.png
│  │  │  │     ├─ android-arrow-up-left.png
│  │  │  │     ├─ android-arrow-up-right.png
│  │  │  │     ├─ android-battery.png
│  │  │  │     ├─ android-book.png
│  │  │  │     ├─ android-calendar.png
│  │  │  │     ├─ android-call.png
│  │  │  │     ├─ android-camera.png
│  │  │  │     ├─ android-chat.png
│  │  │  │     ├─ android-checkmark.png
│  │  │  │     ├─ android-clock.png
│  │  │  │     ├─ android-close.png
│  │  │  │     ├─ android-contact.png
│  │  │  │     ├─ android-contacts.png
│  │  │  │     ├─ android-data.png
│  │  │  │     ├─ android-developer.png
│  │  │  │     ├─ android-display.png
│  │  │  │     ├─ android-download.png
│  │  │  │     ├─ android-drawer.png
│  │  │  │     ├─ android-dropdown.png
│  │  │  │     ├─ android-earth.png
│  │  │  │     ├─ android-folder.png
│  │  │  │     ├─ android-forums.png
│  │  │  │     ├─ android-friends.png
│  │  │  │     ├─ android-hand.png
│  │  │  │     ├─ android-image.png
│  │  │  │     ├─ android-inbox.png
│  │  │  │     ├─ android-information.png
│  │  │  │     ├─ android-keypad.png
│  │  │  │     ├─ android-lightbulb.png
│  │  │  │     ├─ android-locate.png
│  │  │  │     ├─ android-location.png
│  │  │  │     ├─ android-mail.png
│  │  │  │     ├─ android-microphone.png
│  │  │  │     ├─ android-mixer.png
│  │  │  │     ├─ android-more.png
│  │  │  │     ├─ android-note.png
│  │  │  │     ├─ android-playstore.png
│  │  │  │     ├─ android-printer.png
│  │  │  │     ├─ android-promotion.png
│  │  │  │     ├─ android-reminder.png
│  │  │  │     ├─ android-remove.png
│  │  │  │     ├─ android-search.png
│  │  │  │     ├─ android-send.png
│  │  │  │     ├─ android-settings.png
│  │  │  │     ├─ android-share.png
│  │  │  │     ├─ android-social-user.png
│  │  │  │     ├─ android-social.png
│  │  │  │     ├─ android-sort.png
│  │  │  │     ├─ android-stair-drawer.png
│  │  │  │     ├─ android-star.png
│  │  │  │     ├─ android-stopwatch.png
│  │  │  │     ├─ android-storage.png
│  │  │  │     ├─ android-system-back.png
│  │  │  │     ├─ android-system-home.png
│  │  │  │     ├─ android-system-windows.png
│  │  │  │     ├─ android-timer.png
│  │  │  │     ├─ android-trash.png
│  │  │  │     ├─ android-user-menu.png
│  │  │  │     ├─ android-volume.png
│  │  │  │     ├─ android-wifi.png
│  │  │  │     ├─ aperture.png
│  │  │  │     ├─ archive.png
│  │  │  │     ├─ arrow-down-a.png
│  │  │  │     ├─ arrow-down-b.png
│  │  │  │     ├─ arrow-down-c.png
│  │  │  │     ├─ arrow-expand.png
│  │  │  │     ├─ arrow-graph-down-left.png
│  │  │  │     ├─ arrow-graph-down-right.png
│  │  │  │     ├─ arrow-graph-up-left.png
│  │  │  │     ├─ arrow-graph-up-right.png
│  │  │  │     ├─ arrow-left-a.png
│  │  │  │     ├─ arrow-left-b.png
│  │  │  │     ├─ arrow-left-c.png
│  │  │  │     ├─ arrow-move.png
│  │  │  │     ├─ arrow-resize.png
│  │  │  │     ├─ arrow-return-left.png
│  │  │  │     ├─ arrow-return-right.png
│  │  │  │     ├─ arrow-right-a.png
│  │  │  │     ├─ arrow-right-b.png
│  │  │  │     ├─ arrow-right-c.png
│  │  │  │     ├─ arrow-shrink.png
│  │  │  │     ├─ arrow-swap.png
│  │  │  │     ├─ arrow-up-a.png
│  │  │  │     ├─ arrow-up-b.png
│  │  │  │     ├─ arrow-up-c.png
│  │  │  │     ├─ asterisk.png
│  │  │  │     ├─ at.png
│  │  │  │     ├─ bag.png
│  │  │  │     ├─ battery-charging.png
│  │  │  │     ├─ battery-empty.png
│  │  │  │     ├─ battery-full.png
│  │  │  │     ├─ battery-half.png
│  │  │  │     ├─ battery-low.png
│  │  │  │     ├─ beaker.png
│  │  │  │     ├─ beer.png
│  │  │  │     ├─ bluetooth.png
│  │  │  │     ├─ bonfire.png
│  │  │  │     ├─ bookmark.png
│  │  │  │     ├─ briefcase.png
│  │  │  │     ├─ bug.png
│  │  │  │     ├─ calculator.png
│  │  │  │     ├─ calendar.png
│  │  │  │     ├─ camera.png
│  │  │  │     ├─ card.png
│  │  │  │     ├─ cash.png
│  │  │  │     ├─ chatbox-working.png
│  │  │  │     ├─ chatbox.png
│  │  │  │     ├─ chatboxes.png
│  │  │  │     ├─ chatbubble-working.png
│  │  │  │     ├─ chatbubble.png
│  │  │  │     ├─ chatbubbles.png
│  │  │  │     ├─ checkmark-circled.png
│  │  │  │     ├─ checkmark-round.png
│  │  │  │     ├─ checkmark.png
│  │  │  │     ├─ chevron-down.png
│  │  │  │     ├─ chevron-left.png
│  │  │  │     ├─ chevron-right.png
│  │  │  │     ├─ chevron-up.png
│  │  │  │     ├─ clipboard.png
│  │  │  │     ├─ clock.png
│  │  │  │     ├─ close-circled.png
│  │  │  │     ├─ close-round.png
│  │  │  │     ├─ close.png
│  │  │  │     ├─ closed-captioning.png
│  │  │  │     ├─ cloud.png
│  │  │  │     ├─ code-download.png
│  │  │  │     ├─ code-working.png
│  │  │  │     ├─ code.png
│  │  │  │     ├─ coffee.png
│  │  │  │     ├─ compass.png
│  │  │  │     ├─ compose.png
│  │  │  │     ├─ connection-bars.png
│  │  │  │     ├─ contrast.png
│  │  │  │     ├─ cube.png
│  │  │  │     ├─ disc.png
│  │  │  │     ├─ document-text.png
│  │  │  │     ├─ document.png
│  │  │  │     ├─ drag.png
│  │  │  │     ├─ earth.png
│  │  │  │     ├─ edit.png
│  │  │  │     ├─ egg.png
│  │  │  │     ├─ eject.png
│  │  │  │     ├─ email.png
│  │  │  │     ├─ eye-disabled.png
│  │  │  │     ├─ eye.png
│  │  │  │     ├─ female.png
│  │  │  │     ├─ filing.png
│  │  │  │     ├─ film-marker.png
│  │  │  │     ├─ fireball.png
│  │  │  │     ├─ flag.png
│  │  │  │     ├─ flame.png
│  │  │  │     ├─ flash-off.png
│  │  │  │     ├─ flash.png
│  │  │  │     ├─ flask.png
│  │  │  │     ├─ folder.png
│  │  │  │     ├─ fork-repo.png
│  │  │  │     ├─ fork.png
│  │  │  │     ├─ forward.png
│  │  │  │     ├─ funnel.png
│  │  │  │     ├─ game-controller-a.png
│  │  │  │     ├─ game-controller-b.png
│  │  │  │     ├─ gear-a.png
│  │  │  │     ├─ gear-b.png
│  │  │  │     ├─ grid.png
│  │  │  │     ├─ hammer.png
│  │  │  │     ├─ happy.png
│  │  │  │     ├─ headphone.png
│  │  │  │     ├─ heart-broken.png
│  │  │  │     ├─ heart.png
│  │  │  │     ├─ help-buoy.png
│  │  │  │     ├─ help-circled.png
│  │  │  │     ├─ help.png
│  │  │  │     ├─ home.png
│  │  │  │     ├─ icecream.png
│  │  │  │     ├─ icon-social-google-plus-outline.png
│  │  │  │     ├─ icon-social-google-plus.png
│  │  │  │     ├─ image.png
│  │  │  │     ├─ images.png
│  │  │  │     ├─ information-circled.png
│  │  │  │     ├─ information.png
│  │  │  │     ├─ ionic.png
│  │  │  │     ├─ ios7-alarm-outline.png
│  │  │  │     ├─ ios7-alarm.png
│  │  │  │     ├─ ios7-albums-outline.png
│  │  │  │     ├─ ios7-albums.png
│  │  │  │     ├─ ios7-americanfootball-outline.png
│  │  │  │     ├─ ios7-americanfootball.png
│  │  │  │     ├─ ios7-analytics-outline.png
│  │  │  │     ├─ ios7-analytics.png
│  │  │  │     ├─ ios7-arrow-back.png
│  │  │  │     ├─ ios7-arrow-down.png
│  │  │  │     ├─ ios7-arrow-forward.png
│  │  │  │     ├─ ios7-arrow-left.png
│  │  │  │     ├─ ios7-arrow-right.png
│  │  │  │     ├─ ios7-arrow-thin-down.png
│  │  │  │     ├─ ios7-arrow-thin-left.png
│  │  │  │     ├─ ios7-arrow-thin-right.png
│  │  │  │     ├─ ios7-arrow-thin-up.png
│  │  │  │     ├─ ios7-arrow-up.png
│  │  │  │     ├─ ios7-at-outline.png
│  │  │  │     ├─ ios7-at.png
│  │  │  │     ├─ ios7-barcode-outline.png
│  │  │  │     ├─ ios7-barcode.png
│  │  │  │     ├─ ios7-baseball-outline.png
│  │  │  │     ├─ ios7-baseball.png
│  │  │  │     ├─ ios7-basketball-outline.png
│  │  │  │     ├─ ios7-basketball.png
│  │  │  │     ├─ ios7-bell-outline.png
│  │  │  │     ├─ ios7-bell.png
│  │  │  │     ├─ ios7-bolt-outline.png
│  │  │  │     ├─ ios7-bolt.png
│  │  │  │     ├─ ios7-bookmarks-outline.png
│  │  │  │     ├─ ios7-bookmarks.png
│  │  │  │     ├─ ios7-box-outline.png
│  │  │  │     ├─ ios7-box.png
│  │  │  │     ├─ ios7-briefcase-outline.png
│  │  │  │     ├─ ios7-briefcase.png
│  │  │  │     ├─ ios7-browsers-outline.png
│  │  │  │     ├─ ios7-browsers.png
│  │  │  │     ├─ ios7-calculator-outline.png
│  │  │  │     ├─ ios7-calculator.png
│  │  │  │     ├─ ios7-calendar-outline.png
│  │  │  │     ├─ ios7-calendar.png
│  │  │  │     ├─ ios7-camera-outline.png
│  │  │  │     ├─ ios7-camera.png
│  │  │  │     ├─ ios7-cart-outline.png
│  │  │  │     ├─ ios7-cart.png
│  │  │  │     ├─ ios7-chatboxes-outline.png
│  │  │  │     ├─ ios7-chatboxes.png
│  │  │  │     ├─ ios7-chatbubble-outline.png
│  │  │  │     ├─ ios7-chatbubble.png
│  │  │  │     ├─ ios7-checkmark-empty.png
│  │  │  │     ├─ ios7-checkmark-outline.png
│  │  │  │     ├─ ios7-checkmark.png
│  │  │  │     ├─ ios7-circle-filled.png
│  │  │  │     ├─ ios7-circle-outline.png
│  │  │  │     ├─ ios7-clock-outline.png
│  │  │  │     ├─ ios7-clock.png
│  │  │  │     ├─ ios7-close-empty.png
│  │  │  │     ├─ ios7-close-outline.png
│  │  │  │     ├─ ios7-close.png
│  │  │  │     ├─ ios7-cloud-download-outline.png
│  │  │  │     ├─ ios7-cloud-download.png
│  │  │  │     ├─ ios7-cloud-outline.png
│  │  │  │     ├─ ios7-cloud-upload-outline.png
│  │  │  │     ├─ ios7-cloud-upload.png
│  │  │  │     ├─ ios7-cloud.png
│  │  │  │     ├─ ios7-cloudy-night-outline.png
│  │  │  │     ├─ ios7-cloudy-night.png
│  │  │  │     ├─ ios7-cloudy-outline.png
│  │  │  │     ├─ ios7-cloudy.png
│  │  │  │     ├─ ios7-cog-outline.png
│  │  │  │     ├─ ios7-cog.png
│  │  │  │     ├─ ios7-compose-outline.png
│  │  │  │     ├─ ios7-compose.png
│  │  │  │     ├─ ios7-contact-outline.png
│  │  │  │     ├─ ios7-contact.png
│  │  │  │     ├─ ios7-copy-outline.png
│  │  │  │     ├─ ios7-copy.png
│  │  │  │     ├─ ios7-download-outline.png
│  │  │  │     ├─ ios7-download.png
│  │  │  │     ├─ ios7-drag.png
│  │  │  │     ├─ ios7-email-outline.png
│  │  │  │     ├─ ios7-email.png
│  │  │  │     ├─ ios7-expand.png
│  │  │  │     ├─ ios7-eye-outline.png
│  │  │  │     ├─ ios7-eye.png
│  │  │  │     ├─ ios7-fastforward-outline.png
│  │  │  │     ├─ ios7-fastforward.png
│  │  │  │     ├─ ios7-filing-outline.png
│  │  │  │     ├─ ios7-filing.png
│  │  │  │     ├─ ios7-film-outline.png
│  │  │  │     ├─ ios7-film.png
│  │  │  │     ├─ ios7-flag-outline.png
│  │  │  │     ├─ ios7-flag.png
│  │  │  │     ├─ ios7-folder-outline.png
│  │  │  │     ├─ ios7-folder.png
│  │  │  │     ├─ ios7-football-outline.png
│  │  │  │     ├─ ios7-football.png
│  │  │  │     ├─ ios7-gear-outline.png
│  │  │  │     ├─ ios7-gear.png
│  │  │  │     ├─ ios7-glasses-outline.png
│  │  │  │     ├─ ios7-glasses.png
│  │  │  │     ├─ ios7-heart-outline.png
│  │  │  │     ├─ ios7-heart.png
│  │  │  │     ├─ ios7-help-empty.png
│  │  │  │     ├─ ios7-help-outline.png
│  │  │  │     ├─ ios7-help.png
│  │  │  │     ├─ ios7-home-outline.png
│  │  │  │     ├─ ios7-home.png
│  │  │  │     ├─ ios7-infinite-outline.png
│  │  │  │     ├─ ios7-infinite.png
│  │  │  │     ├─ ios7-information-empty.png
│  │  │  │     ├─ ios7-information-outline.png
│  │  │  │     ├─ ios7-information.png
│  │  │  │     ├─ ios7-ionic-outline.png
│  │  │  │     ├─ ios7-keypad-outline.png
│  │  │  │     ├─ ios7-keypad.png
│  │  │  │     ├─ ios7-lightbulb-outline.png
│  │  │  │     ├─ ios7-lightbulb.png
│  │  │  │     ├─ ios7-location-outline.png
│  │  │  │     ├─ ios7-location.png
│  │  │  │     ├─ ios7-locked-outline.png
│  │  │  │     ├─ ios7-locked.png
│  │  │  │     ├─ ios7-loop-strong.png
│  │  │  │     ├─ ios7-loop.png
│  │  │  │     ├─ ios7-medkit-outline.png
│  │  │  │     ├─ ios7-medkit.png
│  │  │  │     ├─ ios7-mic-off.png
│  │  │  │     ├─ ios7-mic-outline.png
│  │  │  │     ├─ ios7-mic.png
│  │  │  │     ├─ ios7-minus-empty.png
│  │  │  │     ├─ ios7-minus-outline.png
│  │  │  │     ├─ ios7-minus.png
│  │  │  │     ├─ ios7-monitor-outline.png
│  │  │  │     ├─ ios7-monitor.png
│  │  │  │     ├─ ios7-moon-outline.png
│  │  │  │     ├─ ios7-moon.png
│  │  │  │     ├─ ios7-more-outline.png
│  │  │  │     ├─ ios7-more.png
│  │  │  │     ├─ ios7-musical-note.png
│  │  │  │     ├─ ios7-musical-notes.png
│  │  │  │     ├─ ios7-navigate-outline.png
│  │  │  │     ├─ ios7-navigate.png
│  │  │  │     ├─ ios7-paper-outline.png
│  │  │  │     ├─ ios7-paper.png
│  │  │  │     ├─ ios7-paperplane-outline.png
│  │  │  │     ├─ ios7-paperplane.png
│  │  │  │     ├─ ios7-partlysunny-outline.png
│  │  │  │     ├─ ios7-partlysunny.png
│  │  │  │     ├─ ios7-pause-outline.png
│  │  │  │     ├─ ios7-pause.png
│  │  │  │     ├─ ios7-paw-outline.png
│  │  │  │     ├─ ios7-paw.png
│  │  │  │     ├─ ios7-people-outline.png
│  │  │  │     ├─ ios7-people.png
│  │  │  │     ├─ ios7-person-outline.png
│  │  │  │     ├─ ios7-person.png
│  │  │  │     ├─ ios7-personadd-outline.png
│  │  │  │     ├─ ios7-personadd.png
│  │  │  │     ├─ ios7-photos-outline.png
│  │  │  │     ├─ ios7-photos.png
│  │  │  │     ├─ ios7-pie-outline.png
│  │  │  │     ├─ ios7-pie.png
│  │  │  │     ├─ ios7-play-outline.png
│  │  │  │     ├─ ios7-play.png
│  │  │  │     ├─ ios7-plus-empty.png
│  │  │  │     ├─ ios7-plus-outline.png
│  │  │  │     ├─ ios7-plus.png
│  │  │  │     ├─ ios7-pricetag-outline.png
│  │  │  │     ├─ ios7-pricetag.png
│  │  │  │     ├─ ios7-pricetags-outline.png
│  │  │  │     ├─ ios7-pricetags.png
│  │  │  │     ├─ ios7-printer-outline.png
│  │  │  │     ├─ ios7-printer.png
│  │  │  │     ├─ ios7-pulse-strong.png
│  │  │  │     ├─ ios7-pulse.png
│  │  │  │     ├─ ios7-rainy-outline.png
│  │  │  │     ├─ ios7-rainy.png
│  │  │  │     ├─ ios7-recording-outline.png
│  │  │  │     ├─ ios7-recording.png
│  │  │  │     ├─ ios7-redo-outline.png
│  │  │  │     ├─ ios7-redo.png
│  │  │  │     ├─ ios7-refresh-empty.png
│  │  │  │     ├─ ios7-refresh-outline.png
│  │  │  │     ├─ ios7-refresh.png
│  │  │  │     ├─ ios7-reload.png
│  │  │  │     ├─ ios7-reverse-camera-outline.png
│  │  │  │     ├─ ios7-reverse-camera.png
│  │  │  │     ├─ ios7-rewind-outline.png
│  │  │  │     ├─ ios7-rewind.png
│  │  │  │     ├─ ios7-search-strong.png
│  │  │  │     ├─ ios7-search.png
│  │  │  │     ├─ ios7-settings-strong.png
│  │  │  │     ├─ ios7-settings.png
│  │  │  │     ├─ ios7-shrink.png
│  │  │  │     ├─ ios7-skipbackward-outline.png
│  │  │  │     ├─ ios7-skipbackward.png
│  │  │  │     ├─ ios7-skipforward-outline.png
│  │  │  │     ├─ ios7-skipforward.png
│  │  │  │     ├─ ios7-snowy.png
│  │  │  │     ├─ ios7-speedometer-outline.png
│  │  │  │     ├─ ios7-speedometer.png
│  │  │  │     ├─ ios7-star-half.png
│  │  │  │     ├─ ios7-star-outline.png
│  │  │  │     ├─ ios7-star.png
│  │  │  │     ├─ ios7-stopwatch-outline.png
│  │  │  │     ├─ ios7-stopwatch.png
│  │  │  │     ├─ ios7-sunny-outline.png
│  │  │  │     ├─ ios7-sunny.png
│  │  │  │     ├─ ios7-telephone-outline.png
│  │  │  │     ├─ ios7-telephone.png
│  │  │  │     ├─ ios7-tennisball-outline.png
│  │  │  │     ├─ ios7-tennisball.png
│  │  │  │     ├─ ios7-thunderstorm-outline.png
│  │  │  │     ├─ ios7-thunderstorm.png
│  │  │  │     ├─ ios7-time-outline.png
│  │  │  │     ├─ ios7-time.png
│  │  │  │     ├─ ios7-timer-outline.png
│  │  │  │     ├─ ios7-timer.png
│  │  │  │     ├─ ios7-toggle-outline.png
│  │  │  │     ├─ ios7-toggle.png
│  │  │  │     ├─ ios7-trash-outline.png
│  │  │  │     ├─ ios7-trash.png
│  │  │  │     ├─ ios7-undo-outline.png
│  │  │  │     ├─ ios7-undo.png
│  │  │  │     ├─ ios7-unlocked-outline.png
│  │  │  │     ├─ ios7-unlocked.png
│  │  │  │     ├─ ios7-upload-outline.png
│  │  │  │     ├─ ios7-upload.png
│  │  │  │     ├─ ios7-videocam-outline.png
│  │  │  │     ├─ ios7-videocam.png
│  │  │  │     ├─ ios7-volume-high.png
│  │  │  │     ├─ ios7-volume-low.png
│  │  │  │     ├─ ios7-wineglass-outline.png
│  │  │  │     ├─ ios7-wineglass.png
│  │  │  │     ├─ ios7-world-outline.png
│  │  │  │     ├─ ios7-world.png
│  │  │  │     ├─ ipad.png
│  │  │  │     ├─ iphone.png
│  │  │  │     ├─ ipod.png
│  │  │  │     ├─ jet.png
│  │  │  │     ├─ key.png
│  │  │  │     ├─ knife.png
│  │  │  │     ├─ laptop.png
│  │  │  │     ├─ leaf.png
│  │  │  │     ├─ levels.png
│  │  │  │     ├─ lightbulb.png
│  │  │  │     ├─ link.png
│  │  │  │     ├─ load-a.png
│  │  │  │     ├─ load-b.png
│  │  │  │     ├─ load-c.png
│  │  │  │     ├─ load-d.png
│  │  │  │     ├─ location.png
│  │  │  │     ├─ locked.png
│  │  │  │     ├─ log-in.png
│  │  │  │     ├─ log-out.png
│  │  │  │     ├─ loop.png
│  │  │  │     ├─ magnet.png
│  │  │  │     ├─ male.png
│  │  │  │     ├─ man.png
│  │  │  │     ├─ map.png
│  │  │  │     ├─ medkit.png
│  │  │  │     ├─ merge.png
│  │  │  │     ├─ mic-a.png
│  │  │  │     ├─ mic-b.png
│  │  │  │     ├─ mic-c.png
│  │  │  │     ├─ minus-circled.png
│  │  │  │     ├─ minus-round.png
│  │  │  │     ├─ minus.png
│  │  │  │     ├─ model-s.png
│  │  │  │     ├─ monitor.png
│  │  │  │     ├─ more.png
│  │  │  │     ├─ mouse.png
│  │  │  │     ├─ music-note.png
│  │  │  │     ├─ navicon-round.png
│  │  │  │     ├─ navicon.png
│  │  │  │     ├─ navigate.png
│  │  │  │     ├─ network.png
│  │  │  │     ├─ no-smoking.png
│  │  │  │     ├─ nuclear.png
│  │  │  │     ├─ outlet.png
│  │  │  │     ├─ paper-airplane.png
│  │  │  │     ├─ paperclip.png
│  │  │  │     ├─ pause.png
│  │  │  │     ├─ person-add.png
│  │  │  │     ├─ person-stalker.png
│  │  │  │     ├─ person.png
│  │  │  │     ├─ pie-graph.png
│  │  │  │     ├─ pin.png
│  │  │  │     ├─ pinpoint.png
│  │  │  │     ├─ pizza.png
│  │  │  │     ├─ plane.png
│  │  │  │     ├─ planet.png
│  │  │  │     ├─ play.png
│  │  │  │     ├─ playstation.png
│  │  │  │     ├─ plus-circled.png
│  │  │  │     ├─ plus-round.png
│  │  │  │     ├─ plus.png
│  │  │  │     ├─ podium.png
│  │  │  │     ├─ pound.png
│  │  │  │     ├─ power.png
│  │  │  │     ├─ pricetag.png
│  │  │  │     ├─ pricetags.png
│  │  │  │     ├─ printer.png
│  │  │  │     ├─ pull-request.png
│  │  │  │     ├─ qr-scanner.png
│  │  │  │     ├─ quote.png
│  │  │  │     ├─ radio-waves.png
│  │  │  │     ├─ record.png
│  │  │  │     ├─ refresh.png
│  │  │  │     ├─ reply-all.png
│  │  │  │     ├─ reply.png
│  │  │  │     ├─ ribbon-a.png
│  │  │  │     ├─ ribbon-b.png
│  │  │  │     ├─ sad.png
│  │  │  │     ├─ scissors.png
│  │  │  │     ├─ search.png
│  │  │  │     ├─ settings.png
│  │  │  │     ├─ share.png
│  │  │  │     ├─ shuffle.png
│  │  │  │     ├─ skip-backward.png
│  │  │  │     ├─ skip-forward.png
│  │  │  │     ├─ social-android-outline.png
│  │  │  │     ├─ social-android.png
│  │  │  │     ├─ social-apple-outline.png
│  │  │  │     ├─ social-apple.png
│  │  │  │     ├─ social-bitcoin-outline.png
│  │  │  │     ├─ social-bitcoin.png
│  │  │  │     ├─ social-buffer-outline.png
│  │  │  │     ├─ social-buffer.png
│  │  │  │     ├─ social-designernews-outline.png
│  │  │  │     ├─ social-designernews.png
│  │  │  │     ├─ social-dribbble-outline.png
│  │  │  │     ├─ social-dribbble.png
│  │  │  │     ├─ social-dropbox-outline.png
│  │  │  │     ├─ social-dropbox.png
│  │  │  │     ├─ social-facebook-outline.png
│  │  │  │     ├─ social-facebook.png
│  │  │  │     ├─ social-foursquare-outline.png
│  │  │  │     ├─ social-foursquare.png
│  │  │  │     ├─ social-freebsd-devil.png
│  │  │  │     ├─ social-github-outline.png
│  │  │  │     ├─ social-github.png
│  │  │  │     ├─ social-google-outline.png
│  │  │  │     ├─ social-google.png
│  │  │  │     ├─ social-googleplus-outline.png
│  │  │  │     ├─ social-googleplus.png
│  │  │  │     ├─ social-hackernews-outline.png
│  │  │  │     ├─ social-hackernews.png
│  │  │  │     ├─ social-instagram-outline.png
│  │  │  │     ├─ social-instagram.png
│  │  │  │     ├─ social-linkedin-outline.png
│  │  │  │     ├─ social-linkedin.png
│  │  │  │     ├─ social-pinterest-outline.png
│  │  │  │     ├─ social-pinterest.png
│  │  │  │     ├─ social-reddit-outline.png
│  │  │  │     ├─ social-reddit.png
│  │  │  │     ├─ social-rss-outline.png
│  │  │  │     ├─ social-rss.png
│  │  │  │     ├─ social-skype-outline.png
│  │  │  │     ├─ social-skype.png
│  │  │  │     ├─ social-tumblr-outline.png
│  │  │  │     ├─ social-tumblr.png
│  │  │  │     ├─ social-tux.png
│  │  │  │     ├─ social-twitter-outline.png
│  │  │  │     ├─ social-twitter.png
│  │  │  │     ├─ social-usd-outline.png
│  │  │  │     ├─ social-usd.png
│  │  │  │     ├─ social-vimeo-outline.png
│  │  │  │     ├─ social-vimeo.png
│  │  │  │     ├─ social-windows-outline.png
│  │  │  │     ├─ social-windows.png
│  │  │  │     ├─ social-wordpress-outline.png
│  │  │  │     ├─ social-wordpress.png
│  │  │  │     ├─ social-yahoo-outline.png
│  │  │  │     ├─ social-yahoo.png
│  │  │  │     ├─ social-youtube-outline.png
│  │  │  │     ├─ social-youtube.png
│  │  │  │     ├─ speakerphone.png
│  │  │  │     ├─ speedometer.png
│  │  │  │     ├─ spoon.png
│  │  │  │     ├─ star.png
│  │  │  │     ├─ stats-bars.png
│  │  │  │     ├─ steam.png
│  │  │  │     ├─ stop.png
│  │  │  │     ├─ thermometer.png
│  │  │  │     ├─ thumbsdown.png
│  │  │  │     ├─ thumbsup.png
│  │  │  │     ├─ toggle-filled.png
│  │  │  │     ├─ toggle.png
│  │  │  │     ├─ trash-a.png
│  │  │  │     ├─ trash-b.png
│  │  │  │     ├─ trophy.png
│  │  │  │     ├─ umbrella.png
│  │  │  │     ├─ university.png
│  │  │  │     ├─ unlocked.png
│  │  │  │     ├─ upload.png
│  │  │  │     ├─ usb.png
│  │  │  │     ├─ videocamera.png
│  │  │  │     ├─ volume-high.png
│  │  │  │     ├─ volume-low.png
│  │  │  │     ├─ volume-medium.png
│  │  │  │     ├─ volume-mute.png
│  │  │  │     ├─ wand.png
│  │  │  │     ├─ waterdrop.png
│  │  │  │     ├─ wifi.png
│  │  │  │     ├─ wineglass.png
│  │  │  │     ├─ woman.png
│  │  │  │     ├─ wrench.png
│  │  │  │     └─ xbox.png
│  │  │  ├─ scss
│  │  │  │  ├─ ionicons.scss
│  │  │  │  ├─ _ionicons-font.scss
│  │  │  │  ├─ _ionicons-icons.scss
│  │  │  │  └─ _ionicons-variables.scss
│  │  │  └─ src
│  │  │     ├─ alert-circled.svg
│  │  │     ├─ alert.svg
│  │  │     ├─ android-add-circle.svg
│  │  │     ├─ android-add.svg
│  │  │     ├─ android-alarm-clock.svg
│  │  │     ├─ android-alert.svg
│  │  │     ├─ android-apps.svg
│  │  │     ├─ android-archive.svg
│  │  │     ├─ android-arrow-back.svg
│  │  │     ├─ android-arrow-down.svg
│  │  │     ├─ android-arrow-dropdown-circle.svg
│  │  │     ├─ android-arrow-dropdown.svg
│  │  │     ├─ android-arrow-dropleft-circle.svg
│  │  │     ├─ android-arrow-dropleft.svg
│  │  │     ├─ android-arrow-dropright-circle.svg
│  │  │     ├─ android-arrow-dropright.svg
│  │  │     ├─ android-arrow-dropup-circle.svg
│  │  │     ├─ android-arrow-dropup.svg
│  │  │     ├─ android-arrow-forward.svg
│  │  │     ├─ android-arrow-up.svg
│  │  │     ├─ android-attach.svg
│  │  │     ├─ android-bar.svg
│  │  │     ├─ android-bicycle.svg
│  │  │     ├─ android-boat.svg
│  │  │     ├─ android-bookmark.svg
│  │  │     ├─ android-bulb.svg
│  │  │     ├─ android-bus.svg
│  │  │     ├─ android-calendar.svg
│  │  │     ├─ android-call.svg
│  │  │     ├─ android-camera.svg
│  │  │     ├─ android-cancel.svg
│  │  │     ├─ android-car.svg
│  │  │     ├─ android-cart.svg
│  │  │     ├─ android-chat.svg
│  │  │     ├─ android-checkbox-blank.svg
│  │  │     ├─ android-checkbox-outline-blank.svg
│  │  │     ├─ android-checkbox-outline.svg
│  │  │     ├─ android-checkbox.svg
│  │  │     ├─ android-checkmark-circle.svg
│  │  │     ├─ android-clipboard.svg
│  │  │     ├─ android-close.svg
│  │  │     ├─ android-cloud-circle.svg
│  │  │     ├─ android-cloud-done.svg
│  │  │     ├─ android-cloud-outline.svg
│  │  │     ├─ android-cloud.svg
│  │  │     ├─ android-color-palette.svg
│  │  │     ├─ android-compass.svg
│  │  │     ├─ android-contact.svg
│  │  │     ├─ android-contacts.svg
│  │  │     ├─ android-contract.svg
│  │  │     ├─ android-create.svg
│  │  │     ├─ android-delete.svg
│  │  │     ├─ android-desktop.svg
│  │  │     ├─ android-document.svg
│  │  │     ├─ android-done-all.svg
│  │  │     ├─ android-done.svg
│  │  │     ├─ android-download.svg
│  │  │     ├─ android-drafts.svg
│  │  │     ├─ android-exit.svg
│  │  │     ├─ android-expand.svg
│  │  │     ├─ android-favorite-outline.svg
│  │  │     ├─ android-favorite.svg
│  │  │     ├─ android-film.svg
│  │  │     ├─ android-folder-open.svg
│  │  │     ├─ android-folder.svg
│  │  │     ├─ android-funnel.svg
│  │  │     ├─ android-globe.svg
│  │  │     ├─ android-hand.svg
│  │  │     ├─ android-hangout.svg
│  │  │     ├─ android-happy.svg
│  │  │     ├─ android-home.svg
│  │  │     ├─ android-image.svg
│  │  │     ├─ android-laptop.svg
│  │  │     ├─ android-list.svg
│  │  │     ├─ android-locate.svg
│  │  │     ├─ android-lock.svg
│  │  │     ├─ android-mail.svg
│  │  │     ├─ android-map.svg
│  │  │     ├─ android-menu.svg
│  │  │     ├─ android-microphone-off.svg
│  │  │     ├─ android-microphone.svg
│  │  │     ├─ android-more-horizontal.svg
│  │  │     ├─ android-more-vertical.svg
│  │  │     ├─ android-navigate.svg
│  │  │     ├─ android-notifications-none.svg
│  │  │     ├─ android-notifications-off.svg
│  │  │     ├─ android-notifications.svg
│  │  │     ├─ android-open.svg
│  │  │     ├─ android-options.svg
│  │  │     ├─ android-people.svg
│  │  │     ├─ android-person-add.svg
│  │  │     ├─ android-person.svg
│  │  │     ├─ android-phone-landscape.svg
│  │  │     ├─ android-phone-portrait.svg
│  │  │     ├─ android-pin.svg
│  │  │     ├─ android-plane.svg
│  │  │     ├─ android-playstore.svg
│  │  │     ├─ android-print.svg
│  │  │     ├─ android-radio-button-off.svg
│  │  │     ├─ android-radio-button-on.svg
│  │  │     ├─ android-refresh.svg
│  │  │     ├─ android-remove-circle.svg
│  │  │     ├─ android-remove.svg
│  │  │     ├─ android-restaurant.svg
│  │  │     ├─ android-sad.svg
│  │  │     ├─ android-search.svg
│  │  │     ├─ android-send.svg
│  │  │     ├─ android-settings.svg
│  │  │     ├─ android-share-alt.svg
│  │  │     ├─ android-share.svg
│  │  │     ├─ android-star-half.svg
│  │  │     ├─ android-star-outline.svg
│  │  │     ├─ android-star.svg
│  │  │     ├─ android-stopwatch.svg
│  │  │     ├─ android-subway.svg
│  │  │     ├─ android-sunny.svg
│  │  │     ├─ android-sync.svg
│  │  │     ├─ android-textsms.svg
│  │  │     ├─ android-time.svg
│  │  │     ├─ android-train.svg
│  │  │     ├─ android-unlock.svg
│  │  │     ├─ android-upload.svg
│  │  │     ├─ android-volume-down.svg
│  │  │     ├─ android-volume-mute.svg
│  │  │     ├─ android-volume-off.svg
│  │  │     ├─ android-volume-up.svg
│  │  │     ├─ android-walk.svg
│  │  │     ├─ android-warning.svg
│  │  │     ├─ android-watch.svg
│  │  │     ├─ android-wifi.svg
│  │  │     ├─ aperture.svg
│  │  │     ├─ archive.svg
│  │  │     ├─ arrow-down-a.svg
│  │  │     ├─ arrow-down-b.svg
│  │  │     ├─ arrow-down-c.svg
│  │  │     ├─ arrow-expand.svg
│  │  │     ├─ arrow-graph-down-left.svg
│  │  │     ├─ arrow-graph-down-right.svg
│  │  │     ├─ arrow-graph-up-left.svg
│  │  │     ├─ arrow-graph-up-right.svg
│  │  │     ├─ arrow-left-a.svg
│  │  │     ├─ arrow-left-b.svg
│  │  │     ├─ arrow-left-c.svg
│  │  │     ├─ arrow-move.svg
│  │  │     ├─ arrow-resize.svg
│  │  │     ├─ arrow-return-left.svg
│  │  │     ├─ arrow-return-right.svg
│  │  │     ├─ arrow-right-a.svg
│  │  │     ├─ arrow-right-b.svg
│  │  │     ├─ arrow-right-c.svg
│  │  │     ├─ arrow-shrink.svg
│  │  │     ├─ arrow-swap.svg
│  │  │     ├─ arrow-up-a.svg
│  │  │     ├─ arrow-up-b.svg
│  │  │     ├─ arrow-up-c.svg
│  │  │     ├─ asterisk.svg
│  │  │     ├─ at.svg
│  │  │     ├─ backspace-outline.svg
│  │  │     ├─ backspace.svg
│  │  │     ├─ bag.svg
│  │  │     ├─ battery-charging.svg
│  │  │     ├─ battery-empty.svg
│  │  │     ├─ battery-full.svg
│  │  │     ├─ battery-half.svg
│  │  │     ├─ battery-low.svg
│  │  │     ├─ beaker.svg
│  │  │     ├─ beer.svg
│  │  │     ├─ bluetooth.svg
│  │  │     ├─ bonfire.svg
│  │  │     ├─ bookmark.svg
│  │  │     ├─ bowtie.svg
│  │  │     ├─ briefcase.svg
│  │  │     ├─ bug.svg
│  │  │     ├─ calculator.svg
│  │  │     ├─ calendar.svg
│  │  │     ├─ camera.svg
│  │  │     ├─ card.svg
│  │  │     ├─ cash.svg
│  │  │     ├─ chatbox-working.svg
│  │  │     ├─ chatbox.svg
│  │  │     ├─ chatboxes.svg
│  │  │     ├─ chatbubble-working.svg
│  │  │     ├─ chatbubble.svg
│  │  │     ├─ chatbubbles.svg
│  │  │     ├─ checkmark-circled.svg
│  │  │     ├─ checkmark-round.svg
│  │  │     ├─ checkmark.svg
│  │  │     ├─ chevron-down.svg
│  │  │     ├─ chevron-left.svg
│  │  │     ├─ chevron-right.svg
│  │  │     ├─ chevron-up.svg
│  │  │     ├─ clipboard.svg
│  │  │     ├─ clock.svg
│  │  │     ├─ close-circled.svg
│  │  │     ├─ close-round.svg
│  │  │     ├─ close.svg
│  │  │     ├─ closed-captioning.svg
│  │  │     ├─ cloud.svg
│  │  │     ├─ code-download.svg
│  │  │     ├─ code-working.svg
│  │  │     ├─ code.svg
│  │  │     ├─ coffee.svg
│  │  │     ├─ compass.svg
│  │  │     ├─ compose.svg
│  │  │     ├─ connection-bars.svg
│  │  │     ├─ contrast.svg
│  │  │     ├─ crop.svg
│  │  │     ├─ cube.svg
│  │  │     ├─ disc.svg
│  │  │     ├─ document-text.svg
│  │  │     ├─ document.svg
│  │  │     ├─ drag.svg
│  │  │     ├─ earth.svg
│  │  │     ├─ easel.svg
│  │  │     ├─ edit.svg
│  │  │     ├─ egg.svg
│  │  │     ├─ eject.svg
│  │  │     ├─ email-unread.svg
│  │  │     ├─ email.svg
│  │  │     ├─ erlenmeyer-flask-bubbles.svg
│  │  │     ├─ erlenmeyer-flask.svg
│  │  │     ├─ eye-disabled.svg
│  │  │     ├─ eye.svg
│  │  │     ├─ female.svg
│  │  │     ├─ filing.svg
│  │  │     ├─ film-marker.svg
│  │  │     ├─ fireball.svg
│  │  │     ├─ flag.svg
│  │  │     ├─ flame.svg
│  │  │     ├─ flash-off.svg
│  │  │     ├─ flash.svg
│  │  │     ├─ folder.svg
│  │  │     ├─ fork-repo.svg
│  │  │     ├─ fork.svg
│  │  │     ├─ forward.svg
│  │  │     ├─ funnel.svg
│  │  │     ├─ gear-a.svg
│  │  │     ├─ gear-b.svg
│  │  │     ├─ grid.svg
│  │  │     ├─ hammer.svg
│  │  │     ├─ happy-outline.svg
│  │  │     ├─ happy.svg
│  │  │     ├─ headphone.svg
│  │  │     ├─ heart-broken.svg
│  │  │     ├─ heart.svg
│  │  │     ├─ help-buoy.svg
│  │  │     ├─ help-circled.svg
│  │  │     ├─ help.svg
│  │  │     ├─ home.svg
│  │  │     ├─ icecream.svg
│  │  │     ├─ image.svg
│  │  │     ├─ images.svg
│  │  │     ├─ information-circled.svg
│  │  │     ├─ information.svg
│  │  │     ├─ ionic.svg
│  │  │     ├─ ios-alarm-outline.svg
│  │  │     ├─ ios-alarm.svg
│  │  │     ├─ ios-albums-outline.svg
│  │  │     ├─ ios-albums.svg
│  │  │     ├─ ios-americanfootball-outline.svg
│  │  │     ├─ ios-americanfootball.svg
│  │  │     ├─ ios-analytics-outline.svg
│  │  │     ├─ ios-analytics.svg
│  │  │     ├─ ios-arrow-back.svg
│  │  │     ├─ ios-arrow-down.svg
│  │  │     ├─ ios-arrow-forward.svg
│  │  │     ├─ ios-arrow-left.svg
│  │  │     ├─ ios-arrow-right.svg
│  │  │     ├─ ios-arrow-thin-down.svg
│  │  │     ├─ ios-arrow-thin-left.svg
│  │  │     ├─ ios-arrow-thin-right.svg
│  │  │     ├─ ios-arrow-thin-up.svg
│  │  │     ├─ ios-arrow-up.svg
│  │  │     ├─ ios-at-outline.svg
│  │  │     ├─ ios-at.svg
│  │  │     ├─ ios-barcode-outline.svg
│  │  │     ├─ ios-barcode.svg
│  │  │     ├─ ios-baseball-outline.svg
│  │  │     ├─ ios-baseball.svg
│  │  │     ├─ ios-basketball-outline.svg
│  │  │     ├─ ios-basketball.svg
│  │  │     ├─ ios-bell-outline.svg
│  │  │     ├─ ios-bell.svg
│  │  │     ├─ ios-body-outline.svg
│  │  │     ├─ ios-body.svg
│  │  │     ├─ ios-bolt-outline.svg
│  │  │     ├─ ios-bolt.svg
│  │  │     ├─ ios-book-outline.svg
│  │  │     ├─ ios-book.svg
│  │  │     ├─ ios-bookmarks-outline.svg
│  │  │     ├─ ios-bookmarks.svg
│  │  │     ├─ ios-box-outline.svg
│  │  │     ├─ ios-box.svg
│  │  │     ├─ ios-briefcase-outline.svg
│  │  │     ├─ ios-briefcase.svg
│  │  │     ├─ ios-browsers-outline.svg
│  │  │     ├─ ios-browsers.svg
│  │  │     ├─ ios-calculator-outline.svg
│  │  │     ├─ ios-calculator.svg
│  │  │     ├─ ios-calendar-outline.svg
│  │  │     ├─ ios-calendar.svg
│  │  │     ├─ ios-camera-outline.svg
│  │  │     ├─ ios-camera.svg
│  │  │     ├─ ios-cart-outline.svg
│  │  │     ├─ ios-cart.svg
│  │  │     ├─ ios-chatboxes-outline.svg
│  │  │     ├─ ios-chatboxes.svg
│  │  │     ├─ ios-chatbubble-outline.svg
│  │  │     ├─ ios-chatbubble.svg
│  │  │     ├─ ios-checkmark-empty.svg
│  │  │     ├─ ios-checkmark-outline.svg
│  │  │     ├─ ios-checkmark.svg
│  │  │     ├─ ios-circle-filled.svg
│  │  │     ├─ ios-circle-outline.svg
│  │  │     ├─ ios-clock-outline.svg
│  │  │     ├─ ios-clock.svg
│  │  │     ├─ ios-close-empty.svg
│  │  │     ├─ ios-close-outline.svg
│  │  │     ├─ ios-close.svg
│  │  │     ├─ ios-cloud-download-outline.svg
│  │  │     ├─ ios-cloud-download.svg
│  │  │     ├─ ios-cloud-outline.svg
│  │  │     ├─ ios-cloud-upload-outline.svg
│  │  │     ├─ ios-cloud-upload.svg
│  │  │     ├─ ios-cloud.svg
│  │  │     ├─ ios-cloudy-night-outline.svg
│  │  │     ├─ ios-cloudy-night.svg
│  │  │     ├─ ios-cloudy-outline.svg
│  │  │     ├─ ios-cloudy.svg
│  │  │     ├─ ios-cog-outline.svg
│  │  │     ├─ ios-cog.svg
│  │  │     ├─ ios-color-filter-outline.svg
│  │  │     ├─ ios-color-filter.svg
│  │  │     ├─ ios-color-wand-outline.svg
│  │  │     ├─ ios-color-wand.svg
│  │  │     ├─ ios-compose-outline.svg
│  │  │     ├─ ios-compose.svg
│  │  │     ├─ ios-contact-outline.svg
│  │  │     ├─ ios-contact.svg
│  │  │     ├─ ios-copy-outline.svg
│  │  │     ├─ ios-copy.svg
│  │  │     ├─ ios-crop-strong.svg
│  │  │     ├─ ios-crop.svg
│  │  │     ├─ ios-download-outline.svg
│  │  │     ├─ ios-download.svg
│  │  │     ├─ ios-drag.svg
│  │  │     ├─ ios-email-outline.svg
│  │  │     ├─ ios-email.svg
│  │  │     ├─ ios-eye-outline.svg
│  │  │     ├─ ios-eye.svg
│  │  │     ├─ ios-fastforward-outline.svg
│  │  │     ├─ ios-fastforward.svg
│  │  │     ├─ ios-filing-outline.svg
│  │  │     ├─ ios-filing.svg
│  │  │     ├─ ios-film-outline.svg
│  │  │     ├─ ios-film.svg
│  │  │     ├─ ios-flag-outline.svg
│  │  │     ├─ ios-flag.svg
│  │  │     ├─ ios-flame-outline.svg
│  │  │     ├─ ios-flame.svg
│  │  │     ├─ ios-flask-outline.svg
│  │  │     ├─ ios-flask.svg
│  │  │     ├─ ios-flower-outline.svg
│  │  │     ├─ ios-flower.svg
│  │  │     ├─ ios-folder-outline.svg
│  │  │     ├─ ios-folder.svg
│  │  │     ├─ ios-football-outline.svg
│  │  │     ├─ ios-football.svg
│  │  │     ├─ ios-game-controller-a-outline.svg
│  │  │     ├─ ios-game-controller-a.svg
│  │  │     ├─ ios-game-controller-b-outline.svg
│  │  │     ├─ ios-game-controller-b.svg
│  │  │     ├─ ios-gear-outline.svg
│  │  │     ├─ ios-gear.svg
│  │  │     ├─ ios-glasses-outline.svg
│  │  │     ├─ ios-glasses.svg
│  │  │     ├─ ios-grid-view-outline.svg
│  │  │     ├─ ios-grid-view.svg
│  │  │     ├─ ios-heart-outline.svg
│  │  │     ├─ ios-heart.svg
│  │  │     ├─ ios-help-empty.svg
│  │  │     ├─ ios-help-outline.svg
│  │  │     ├─ ios-help.svg
│  │  │     ├─ ios-home-outline.svg
│  │  │     ├─ ios-home.svg
│  │  │     ├─ ios-infinite-outline.svg
│  │  │     ├─ ios-infinite.svg
│  │  │     ├─ ios-information-empty.svg
│  │  │     ├─ ios-information-outline.svg
│  │  │     ├─ ios-information.svg
│  │  │     ├─ ios-ionic-outline.svg
│  │  │     ├─ ios-keypad-outline.svg
│  │  │     ├─ ios-keypad.svg
│  │  │     ├─ ios-lightbulb-outline.svg
│  │  │     ├─ ios-lightbulb.svg
│  │  │     ├─ ios-list-outline.svg
│  │  │     ├─ ios-list.svg
│  │  │     ├─ ios-location-outline.svg
│  │  │     ├─ ios-location.svg
│  │  │     ├─ ios-locked-outline.svg
│  │  │     ├─ ios-locked.svg
│  │  │     ├─ ios-loop-strong.svg
│  │  │     ├─ ios-loop.svg
│  │  │     ├─ ios-medical-outline.svg
│  │  │     ├─ ios-medical.svg
│  │  │     ├─ ios-medkit-outline.svg
│  │  │     ├─ ios-medkit.svg
│  │  │     ├─ ios-mic-off.svg
│  │  │     ├─ ios-mic-outline.svg
│  │  │     ├─ ios-mic.svg
│  │  │     ├─ ios-minus-empty.svg
│  │  │     ├─ ios-minus-outline.svg
│  │  │     ├─ ios-minus.svg
│  │  │     ├─ ios-monitor-outline.svg
│  │  │     ├─ ios-monitor.svg
│  │  │     ├─ ios-moon-outline.svg
│  │  │     ├─ ios-moon.svg
│  │  │     ├─ ios-more-outline.svg
│  │  │     ├─ ios-more.svg
│  │  │     ├─ ios-musical-note.svg
│  │  │     ├─ ios-musical-notes.svg
│  │  │     ├─ ios-navigate-outline.svg
│  │  │     ├─ ios-navigate.svg
│  │  │     ├─ ios-nutrition-outline.svg
│  │  │     ├─ ios-nutrition.svg
│  │  │     ├─ ios-paper-outline.svg
│  │  │     ├─ ios-paper.svg
│  │  │     ├─ ios-paperplane-outline.svg
│  │  │     ├─ ios-paperplane.svg
│  │  │     ├─ ios-partlysunny-outline.svg
│  │  │     ├─ ios-partlysunny.svg
│  │  │     ├─ ios-pause-outline.svg
│  │  │     ├─ ios-pause.svg
│  │  │     ├─ ios-paw-outline.svg
│  │  │     ├─ ios-paw.svg
│  │  │     ├─ ios-people-outline.svg
│  │  │     ├─ ios-people.svg
│  │  │     ├─ ios-person-outline.svg
│  │  │     ├─ ios-person.svg
│  │  │     ├─ ios-personadd-outline.svg
│  │  │     ├─ ios-personadd.svg
│  │  │     ├─ ios-photos-outline.svg
│  │  │     ├─ ios-photos.svg
│  │  │     ├─ ios-pie-outline.svg
│  │  │     ├─ ios-pie.svg
│  │  │     ├─ ios-pint-outline.svg
│  │  │     ├─ ios-pint.svg
│  │  │     ├─ ios-play-outline.svg
│  │  │     ├─ ios-play.svg
│  │  │     ├─ ios-plus-empty.svg
│  │  │     ├─ ios-plus-outline.svg
│  │  │     ├─ ios-plus.svg
│  │  │     ├─ ios-pricetag-outline.svg
│  │  │     ├─ ios-pricetag.svg
│  │  │     ├─ ios-pricetags-outline.svg
│  │  │     ├─ ios-pricetags.svg
│  │  │     ├─ ios-printer-outline.svg
│  │  │     ├─ ios-printer.svg
│  │  │     ├─ ios-pulse-strong.svg
│  │  │     ├─ ios-pulse.svg
│  │  │     ├─ ios-rainy-outline.svg
│  │  │     ├─ ios-rainy.svg
│  │  │     ├─ ios-recording-outline.svg
│  │  │     ├─ ios-recording.svg
│  │  │     ├─ ios-redo-outline.svg
│  │  │     ├─ ios-redo.svg
│  │  │     ├─ ios-refresh-empty.svg
│  │  │     ├─ ios-refresh-outline.svg
│  │  │     ├─ ios-refresh.svg
│  │  │     ├─ ios-reload.svg
│  │  │     ├─ ios-reverse-camera-outline.svg
│  │  │     ├─ ios-reverse-camera.svg
│  │  │     ├─ ios-rewind-outline.svg
│  │  │     ├─ ios-rewind.svg
│  │  │     ├─ ios-rose-outline.svg
│  │  │     ├─ ios-rose.svg
│  │  │     ├─ ios-search-strong.svg
│  │  │     ├─ ios-search.svg
│  │  │     ├─ ios-settings-strong.svg
│  │  │     ├─ ios-settings.svg
│  │  │     ├─ ios-shuffle-strong.svg
│  │  │     ├─ ios-shuffle.svg
│  │  │     ├─ ios-skipbackward-outline.svg
│  │  │     ├─ ios-skipbackward.svg
│  │  │     ├─ ios-skipforward-outline.svg
│  │  │     ├─ ios-skipforward.svg
│  │  │     ├─ ios-snowy.svg
│  │  │     ├─ ios-speedometer-outline.svg
│  │  │     ├─ ios-speedometer.svg
│  │  │     ├─ ios-star-half.svg
│  │  │     ├─ ios-star-outline.svg
│  │  │     ├─ ios-star.svg
│  │  │     ├─ ios-stopwatch-outline.svg
│  │  │     ├─ ios-stopwatch.svg
│  │  │     ├─ ios-sunny-outline.svg
│  │  │     ├─ ios-sunny.svg
│  │  │     ├─ ios-telephone-outline.svg
│  │  │     ├─ ios-telephone.svg
│  │  │     ├─ ios-tennisball-outline.svg
│  │  │     ├─ ios-tennisball.svg
│  │  │     ├─ ios-thunderstorm-outline.svg
│  │  │     ├─ ios-thunderstorm.svg
│  │  │     ├─ ios-time-outline.svg
│  │  │     ├─ ios-time.svg
│  │  │     ├─ ios-timer-outline.svg
│  │  │     ├─ ios-timer.svg
│  │  │     ├─ ios-toggle-outline.svg
│  │  │     ├─ ios-toggle.svg
│  │  │     ├─ ios-trash-outline.svg
│  │  │     ├─ ios-trash.svg
│  │  │     ├─ ios-undo-outline.svg
│  │  │     ├─ ios-undo.svg
│  │  │     ├─ ios-unlocked-outline.svg
│  │  │     ├─ ios-unlocked.svg
│  │  │     ├─ ios-upload-outline.svg
│  │  │     ├─ ios-upload.svg
│  │  │     ├─ ios-videocam-outline.svg
│  │  │     ├─ ios-videocam.svg
│  │  │     ├─ ios-volume-high.svg
│  │  │     ├─ ios-volume-low.svg
│  │  │     ├─ ios-wineglass-outline.svg
│  │  │     ├─ ios-wineglass.svg
│  │  │     ├─ ios-world-outline.svg
│  │  │     ├─ ios-world.svg
│  │  │     ├─ ipad.svg
│  │  │     ├─ iphone.svg
│  │  │     ├─ ipod.svg
│  │  │     ├─ jet.svg
│  │  │     ├─ key.svg
│  │  │     ├─ knife.svg
│  │  │     ├─ laptop.svg
│  │  │     ├─ leaf.svg
│  │  │     ├─ levels.svg
│  │  │     ├─ lightbulb.svg
│  │  │     ├─ link.svg
│  │  │     ├─ load-a.svg
│  │  │     ├─ load-b.svg
│  │  │     ├─ load-c.svg
│  │  │     ├─ load-d.svg
│  │  │     ├─ location.svg
│  │  │     ├─ lock-combination.svg
│  │  │     ├─ locked.svg
│  │  │     ├─ log-in.svg
│  │  │     ├─ log-out.svg
│  │  │     ├─ loop.svg
│  │  │     ├─ magnet.svg
│  │  │     ├─ male.svg
│  │  │     ├─ man.svg
│  │  │     ├─ map.svg
│  │  │     ├─ medkit.svg
│  │  │     ├─ merge.svg
│  │  │     ├─ mic-a.svg
│  │  │     ├─ mic-b.svg
│  │  │     ├─ mic-c.svg
│  │  │     ├─ minus-circled.svg
│  │  │     ├─ minus-round.svg
│  │  │     ├─ minus.svg
│  │  │     ├─ model-s.svg
│  │  │     ├─ monitor.svg
│  │  │     ├─ more.svg
│  │  │     ├─ mouse.svg
│  │  │     ├─ music-note.svg
│  │  │     ├─ navicon-round.svg
│  │  │     ├─ navicon.svg
│  │  │     ├─ navigate.svg
│  │  │     ├─ network.svg
│  │  │     ├─ no-smoking.svg
│  │  │     ├─ nuclear.svg
│  │  │     ├─ outlet.svg
│  │  │     ├─ paintbrush.svg
│  │  │     ├─ paintbucket.svg
│  │  │     ├─ paper-airplane.svg
│  │  │     ├─ paperclip.svg
│  │  │     ├─ pause.svg
│  │  │     ├─ person-add.svg
│  │  │     ├─ person-stalker.svg
│  │  │     ├─ person.svg
│  │  │     ├─ pie-graph.svg
│  │  │     ├─ pin.svg
│  │  │     ├─ pinpoint.svg
│  │  │     ├─ pizza.svg
│  │  │     ├─ plane.svg
│  │  │     ├─ planet.svg
│  │  │     ├─ play.svg
│  │  │     ├─ playstation.svg
│  │  │     ├─ plus-circled.svg
│  │  │     ├─ plus-round.svg
│  │  │     ├─ plus.svg
│  │  │     ├─ podium.svg
│  │  │     ├─ pound.svg
│  │  │     ├─ power.svg
│  │  │     ├─ pricetag.svg
│  │  │     ├─ pricetags.svg
│  │  │     ├─ printer.svg
│  │  │     ├─ pull-request.svg
│  │  │     ├─ qr-scanner.svg
│  │  │     ├─ quote.svg
│  │  │     ├─ radio-waves.svg
│  │  │     ├─ record.svg
│  │  │     ├─ refresh.svg
│  │  │     ├─ reply-all.svg
│  │  │     ├─ reply.svg
│  │  │     ├─ ribbon-a.svg
│  │  │     ├─ ribbon-b.svg
│  │  │     ├─ sad-outline.svg
│  │  │     ├─ sad.svg
│  │  │     ├─ scissors.svg
│  │  │     ├─ search.svg
│  │  │     ├─ settings.svg
│  │  │     ├─ share.svg
│  │  │     ├─ shuffle.svg
│  │  │     ├─ skip-backward.svg
│  │  │     ├─ skip-forward.svg
│  │  │     ├─ social-android-outline.svg
│  │  │     ├─ social-android.svg
│  │  │     ├─ social-angular-outline.svg
│  │  │     ├─ social-angular.svg
│  │  │     ├─ social-apple-outline.svg
│  │  │     ├─ social-apple.svg
│  │  │     ├─ social-bitcoin-outline.svg
│  │  │     ├─ social-bitcoin.svg
│  │  │     ├─ social-buffer-outline.svg
│  │  │     ├─ social-buffer.svg
│  │  │     ├─ social-chrome-outline.svg
│  │  │     ├─ social-chrome.svg
│  │  │     ├─ social-codepen-outline.svg
│  │  │     ├─ social-codepen.svg
│  │  │     ├─ social-css3-outline.svg
│  │  │     ├─ social-css3.svg
│  │  │     ├─ social-designernews-outline.svg
│  │  │     ├─ social-designernews.svg
│  │  │     ├─ social-dribbble-outline.svg
│  │  │     ├─ social-dribbble.svg
│  │  │     ├─ social-dropbox-outline.svg
│  │  │     ├─ social-dropbox.svg
│  │  │     ├─ social-euro-outline.svg
│  │  │     ├─ social-euro.svg
│  │  │     ├─ social-facebook-outline.svg
│  │  │     ├─ social-facebook.svg
│  │  │     ├─ social-foursquare-outline.svg
│  │  │     ├─ social-foursquare.svg
│  │  │     ├─ social-freebsd-devil.svg
│  │  │     ├─ social-github-outline.svg
│  │  │     ├─ social-github.svg
│  │  │     ├─ social-google-outline.svg
│  │  │     ├─ social-google.svg
│  │  │     ├─ social-googleplus-outline.svg
│  │  │     ├─ social-googleplus.svg
│  │  │     ├─ social-hackernews-outline.svg
│  │  │     ├─ social-hackernews.svg
│  │  │     ├─ social-html5-outline.svg
│  │  │     ├─ social-html5.svg
│  │  │     ├─ social-instagram-outline.svg
│  │  │     ├─ social-instagram.svg
│  │  │     ├─ social-javascript-outline.svg
│  │  │     ├─ social-javascript.svg
│  │  │     ├─ social-linkedin-outline.svg
│  │  │     ├─ social-linkedin.svg
│  │  │     ├─ social-markdown.svg
│  │  │     ├─ social-nodejs.svg
│  │  │     ├─ social-octocat.svg
│  │  │     ├─ social-pinterest-outline.svg
│  │  │     ├─ social-pinterest.svg
│  │  │     ├─ social-python.svg
│  │  │     ├─ social-reddit-outline.svg
│  │  │     ├─ social-reddit.svg
│  │  │     ├─ social-rss-outline.svg
│  │  │     ├─ social-rss.svg
│  │  │     ├─ social-sass.svg
│  │  │     ├─ social-skype-outline.svg
│  │  │     ├─ social-skype.svg
│  │  │     ├─ social-snapchat-outline.svg
│  │  │     ├─ social-snapchat.svg
│  │  │     ├─ social-tumblr-outline.svg
│  │  │     ├─ social-tumblr.svg
│  │  │     ├─ social-tux.svg
│  │  │     ├─ social-twitch-outline.svg
│  │  │     ├─ social-twitch.svg
│  │  │     ├─ social-twitter-outline.svg
│  │  │     ├─ social-twitter.svg
│  │  │     ├─ social-usd-outline.svg
│  │  │     ├─ social-usd.svg
│  │  │     ├─ social-vimeo-outline.svg
│  │  │     ├─ social-vimeo.svg
│  │  │     ├─ social-whatsapp-outline.svg
│  │  │     ├─ social-whatsapp.svg
│  │  │     ├─ social-windows-outline.svg
│  │  │     ├─ social-windows.svg
│  │  │     ├─ social-wordpress-outline.svg
│  │  │     ├─ social-wordpress.svg
│  │  │     ├─ social-yahoo-outline.svg
│  │  │     ├─ social-yahoo.svg
│  │  │     ├─ social-yen-outline.svg
│  │  │     ├─ social-yen.svg
│  │  │     ├─ social-youtube-outline.svg
│  │  │     ├─ social-youtube.svg
│  │  │     ├─ soup-can-outline.svg
│  │  │     ├─ soup-can.svg
│  │  │     ├─ speakerphone.svg
│  │  │     ├─ speedometer.svg
│  │  │     ├─ spoon.svg
│  │  │     ├─ star.svg
│  │  │     ├─ stats-bars.svg
│  │  │     ├─ steam.svg
│  │  │     ├─ stop.svg
│  │  │     ├─ thermometer.svg
│  │  │     ├─ thumbsdown.svg
│  │  │     ├─ thumbsup.svg
│  │  │     ├─ toggle-filled.svg
│  │  │     ├─ toggle.svg
│  │  │     ├─ transgender.svg
│  │  │     ├─ trash-a.svg
│  │  │     ├─ trash-b.svg
│  │  │     ├─ trophy.svg
│  │  │     ├─ tshirt-outline.svg
│  │  │     ├─ tshirt.svg
│  │  │     ├─ umbrella.svg
│  │  │     ├─ university.svg
│  │  │     ├─ unlocked.svg
│  │  │     ├─ upload.svg
│  │  │     ├─ usb.svg
│  │  │     ├─ videocamera.svg
│  │  │     ├─ volume-high.svg
│  │  │     ├─ volume-low.svg
│  │  │     ├─ volume-medium.svg
│  │  │     ├─ volume-mute.svg
│  │  │     ├─ wand.svg
│  │  │     ├─ waterdrop.svg
│  │  │     ├─ wifi.svg
│  │  │     ├─ wineglass.svg
│  │  │     ├─ woman.svg
│  │  │     ├─ wrench.svg
│  │  │     └─ xbox.svg
│  │  ├─ izitoast
│  │  │  ├─ css
│  │  │  │  ├─ iziToast.css
│  │  │  │  └─ iziToast.min.css
│  │  │  └─ js
│  │  │     ├─ iziToast.js
│  │  │     └─ iziToast.min.js
│  │  ├─ jquery-pwstrength
│  │  │  ├─ jquery.pwstrength.js
│  │  │  └─ jquery.pwstrength.min.js
│  │  ├─ jquery-selectric
│  │  │  ├─ jquery.selectric.min.js
│  │  │  ├─ LICENSE
│  │  │  └─ selectric.css
│  │  ├─ jquery-ui
│  │  │  ├─ AUTHORS.txt
│  │  │  ├─ images
│  │  │  │  ├─ ui-icons_444444_256x240.png
│  │  │  │  ├─ ui-icons_555555_256x240.png
│  │  │  │  ├─ ui-icons_777620_256x240.png
│  │  │  │  ├─ ui-icons_777777_256x240.png
│  │  │  │  ├─ ui-icons_cc0000_256x240.png
│  │  │  │  └─ ui-icons_ffffff_256x240.png
│  │  │  ├─ jquery-ui.css
│  │  │  ├─ jquery-ui.js
│  │  │  ├─ jquery-ui.min.css
│  │  │  ├─ jquery-ui.min.js
│  │  │  ├─ jquery-ui.structure.css
│  │  │  ├─ jquery-ui.structure.min.css
│  │  │  ├─ jquery-ui.theme.css
│  │  │  ├─ jquery-ui.theme.min.css
│  │  │  └─ LICENSE.txt
│  │  ├─ jquery.min.js
│  │  ├─ jquery.sparkline.min.js
│  │  ├─ jqvmap
│  │  │  ├─ dist
│  │  │  │  ├─ jquery.vmap.js
│  │  │  │  ├─ jquery.vmap.min.js
│  │  │  │  ├─ jqvmap.css
│  │  │  │  ├─ jqvmap.min.css
│  │  │  │  └─ maps
│  │  │  │     ├─ continents
│  │  │  │     │  ├─ jquery.vmap.africa.js
│  │  │  │     │  ├─ jquery.vmap.asia.js
│  │  │  │     │  ├─ jquery.vmap.australia.js
│  │  │  │     │  ├─ jquery.vmap.europe.js
│  │  │  │     │  ├─ jquery.vmap.north-america.js
│  │  │  │     │  └─ jquery.vmap.south-america.js
│  │  │  │     ├─ jquery.vmap.algeria.js
│  │  │  │     ├─ jquery.vmap.argentina.js
│  │  │  │     ├─ jquery.vmap.brazil.js
│  │  │  │     ├─ jquery.vmap.canada.js
│  │  │  │     ├─ jquery.vmap.croatia.js
│  │  │  │     ├─ jquery.vmap.europe.js
│  │  │  │     ├─ jquery.vmap.france.js
│  │  │  │     ├─ jquery.vmap.germany.js
│  │  │  │     ├─ jquery.vmap.greece.js
│  │  │  │     ├─ jquery.vmap.indonesia.js
│  │  │  │     ├─ jquery.vmap.iran.js
│  │  │  │     ├─ jquery.vmap.iraq.js
│  │  │  │     ├─ jquery.vmap.new_regions_france.js
│  │  │  │     ├─ jquery.vmap.russia.js
│  │  │  │     ├─ jquery.vmap.serbia.js
│  │  │  │     ├─ jquery.vmap.tunisia.js
│  │  │  │     ├─ jquery.vmap.turkey.js
│  │  │  │     ├─ jquery.vmap.ukraine.js
│  │  │  │     ├─ jquery.vmap.usa.districts.js
│  │  │  │     ├─ jquery.vmap.usa.js
│  │  │  │     └─ jquery.vmap.world.js
│  │  │  └─ LICENSE
│  │  ├─ moment.min.js
│  │  ├─ nicescroll
│  │  │  ├─ dist
│  │  │  │  ├─ jquery.nicescroll.iframehelper.js
│  │  │  │  ├─ jquery.nicescroll.iframehelper.min.js
│  │  │  │  ├─ jquery.nicescroll.js
│  │  │  │  ├─ jquery.nicescroll.min.js
│  │  │  │  └─ zoomico.png
│  │  │  ├─ jquery.nicescroll.iframehelper.js
│  │  │  ├─ jquery.nicescroll.iframehelper.min.js
│  │  │  ├─ jquery.nicescroll.js
│  │  │  ├─ jquery.nicescroll.min.js
│  │  │  ├─ MIT.LICENSE
│  │  │  └─ zoomico.png
│  │  ├─ owlcarousel2
│  │  │  ├─ dist
│  │  │  │  ├─ assets
│  │  │  │  │  ├─ ajax-loader.gif
│  │  │  │  │  ├─ owl.carousel.css
│  │  │  │  │  ├─ owl.carousel.min.css
│  │  │  │  │  ├─ owl.theme.default.css
│  │  │  │  │  ├─ owl.theme.default.min.css
│  │  │  │  │  ├─ owl.theme.green.css
│  │  │  │  │  ├─ owl.theme.green.min.css
│  │  │  │  │  └─ owl.video.play.png
│  │  │  │  ├─ LICENSE
│  │  │  │  ├─ owl.carousel.js
│  │  │  │  ├─ owl.carousel.min.js
│  │  │  │  └─ README.md
│  │  │  └─ LICENSE
│  │  ├─ perfect-scrollbar
│  │  │  ├─ perfect-scrollbar.css
│  │  │  └─ perfect-scrollbar.min.js
│  │  ├─ popper.js
│  │  ├─ prism
│  │  │  ├─ prism.css
│  │  │  └─ prism.js
│  │  ├─ select2
│  │  │  ├─ dist
│  │  │  │  ├─ css
│  │  │  │  │  ├─ select2.css
│  │  │  │  │  └─ select2.min.css
│  │  │  │  └─ js
│  │  │  │     ├─ i18n
│  │  │  │     │  ├─ af.js
│  │  │  │     │  ├─ ar.js
│  │  │  │     │  ├─ az.js
│  │  │  │     │  ├─ bg.js
│  │  │  │     │  ├─ bs.js
│  │  │  │     │  ├─ ca.js
│  │  │  │     │  ├─ cs.js
│  │  │  │     │  ├─ da.js
│  │  │  │     │  ├─ de.js
│  │  │  │     │  ├─ dsb.js
│  │  │  │     │  ├─ el.js
│  │  │  │     │  ├─ en.js
│  │  │  │     │  ├─ es.js
│  │  │  │     │  ├─ et.js
│  │  │  │     │  ├─ eu.js
│  │  │  │     │  ├─ fa.js
│  │  │  │     │  ├─ fi.js
│  │  │  │     │  ├─ fr.js
│  │  │  │     │  ├─ gl.js
│  │  │  │     │  ├─ he.js
│  │  │  │     │  ├─ hi.js
│  │  │  │     │  ├─ hr.js
│  │  │  │     │  ├─ hsb.js
│  │  │  │     │  ├─ hu.js
│  │  │  │     │  ├─ hy.js
│  │  │  │     │  ├─ id.js
│  │  │  │     │  ├─ is.js
│  │  │  │     │  ├─ it.js
│  │  │  │     │  ├─ ja.js
│  │  │  │     │  ├─ km.js
│  │  │  │     │  ├─ ko.js
│  │  │  │     │  ├─ lt.js
│  │  │  │     │  ├─ lv.js
│  │  │  │     │  ├─ mk.js
│  │  │  │     │  ├─ ms.js
│  │  │  │     │  ├─ nb.js
│  │  │  │     │  ├─ nl.js
│  │  │  │     │  ├─ pl.js
│  │  │  │     │  ├─ ps.js
│  │  │  │     │  ├─ pt-BR.js
│  │  │  │     │  ├─ pt.js
│  │  │  │     │  ├─ ro.js
│  │  │  │     │  ├─ ru.js
│  │  │  │     │  ├─ sk.js
│  │  │  │     │  ├─ sl.js
│  │  │  │     │  ├─ sr-Cyrl.js
│  │  │  │     │  ├─ sr.js
│  │  │  │     │  ├─ sv.js
│  │  │  │     │  ├─ th.js
│  │  │  │     │  ├─ tr.js
│  │  │  │     │  ├─ uk.js
│  │  │  │     │  ├─ vi.js
│  │  │  │     │  ├─ zh-CN.js
│  │  │  │     │  └─ zh-TW.js
│  │  │  │     ├─ select2.full.js
│  │  │  │     ├─ select2.full.min.js
│  │  │  │     ├─ select2.js
│  │  │  │     └─ select2.min.js
│  │  │  └─ LICENSE.md
│  │  ├─ simple-weather
│  │  │  ├─ jquery.simpleWeather.js
│  │  │  ├─ jquery.simpleWeather.min.js
│  │  │  └─ MIT-LICENSE.txt
│  │  ├─ sticky-kit.js
│  │  ├─ summernote
│  │  │  ├─ font
│  │  │  │  ├─ summernote.eot
│  │  │  │  ├─ summernote.ttf
│  │  │  │  └─ summernote.woff
│  │  │  ├─ lang
│  │  │  │  ├─ summernote-ar-AR.js
│  │  │  │  ├─ summernote-bg-BG.js
│  │  │  │  ├─ summernote-ca-ES.js
│  │  │  │  ├─ summernote-cs-CZ.js
│  │  │  │  ├─ summernote-da-DK.js
│  │  │  │  ├─ summernote-de-DE.js
│  │  │  │  ├─ summernote-el-GR.js
│  │  │  │  ├─ summernote-es-ES.js
│  │  │  │  ├─ summernote-es-EU.js
│  │  │  │  ├─ summernote-fa-IR.js
│  │  │  │  ├─ summernote-fi-FI.js
│  │  │  │  ├─ summernote-fr-FR.js
│  │  │  │  ├─ summernote-gl-ES.js
│  │  │  │  ├─ summernote-he-IL.js
│  │  │  │  ├─ summernote-hr-HR.js
│  │  │  │  ├─ summernote-hu-HU.js
│  │  │  │  ├─ summernote-id-ID.js
│  │  │  │  ├─ summernote-it-IT.js
│  │  │  │  ├─ summernote-ja-JP.js
│  │  │  │  ├─ summernote-ko-KR.js
│  │  │  │  ├─ summernote-lt-LT.js
│  │  │  │  ├─ summernote-lt-LV.js
│  │  │  │  ├─ summernote-mn-MN.js
│  │  │  │  ├─ summernote-nb-NO.js
│  │  │  │  ├─ summernote-nl-NL.js
│  │  │  │  ├─ summernote-pl-PL.js
│  │  │  │  ├─ summernote-pt-BR.js
│  │  │  │  ├─ summernote-pt-PT.js
│  │  │  │  ├─ summernote-ro-RO.js
│  │  │  │  ├─ summernote-ru-RU.js
│  │  │  │  ├─ summernote-sk-SK.js
│  │  │  │  ├─ summernote-sl-SI.js
│  │  │  │  ├─ summernote-sr-RS-Latin.js
│  │  │  │  ├─ summernote-sr-RS.js
│  │  │  │  ├─ summernote-sv-SE.js
│  │  │  │  ├─ summernote-ta-IN.js
│  │  │  │  ├─ summernote-th-TH.js
│  │  │  │  ├─ summernote-tr-TR.js
│  │  │  │  ├─ summernote-uk-UA.js
│  │  │  │  ├─ summernote-vi-VN.js
│  │  │  │  ├─ summernote-zh-CN.js
│  │  │  │  └─ summernote-zh-TW.js
│  │  │  ├─ plugin
│  │  │  │  ├─ databasic
│  │  │  │  │  ├─ summernote-ext-databasic.css
│  │  │  │  │  └─ summernote-ext-databasic.js
│  │  │  │  ├─ hello
│  │  │  │  │  └─ summernote-ext-hello.js
│  │  │  │  └─ specialchars
│  │  │  │     └─ summernote-ext-specialchars.js
│  │  │  ├─ summernote-bs4.css
│  │  │  ├─ summernote-bs4.js
│  │  │  ├─ summernote-bs4.min.js
│  │  │  ├─ summernote-lite.css
│  │  │  ├─ summernote-lite.js
│  │  │  ├─ summernote.css
│  │  │  ├─ summernote.js
│  │  │  └─ summernote.min.js
│  │  ├─ sweetalert
│  │  │  ├─ LICENSE.md
│  │  │  └─ sweetalert.min.js
│  │  ├─ tooltip.js
│  │  ├─ upload-preview
│  │  │  ├─ assets
│  │  │  │  ├─ css
│  │  │  │  │  ├─ application.css
│  │  │  │  │  └─ application.scss
│  │  │  │  └─ js
│  │  │  │     ├─ jquery-2.0.3.min.js
│  │  │  │     ├─ jquery.uploadPreview.js
│  │  │  │     └─ jquery.uploadPreview.min.js
│  │  │  ├─ index.html
│  │  │  ├─ LICENSE
│  │  │  └─ README.md
│  │  └─ weather-icon
│  │     ├─ css
│  │     │  ├─ weather-icons-wind.css
│  │     │  ├─ weather-icons-wind.min.css
│  │     │  ├─ weather-icons.css
│  │     │  └─ weather-icons.min.css
│  │     └─ font
│  │        ├─ weathericons-regular-webfont.eot
│  │        ├─ weathericons-regular-webfont.svg
│  │        ├─ weathericons-regular-webfont.ttf
│  │        ├─ weathericons-regular-webfont.woff
│  │        └─ weathericons-regular-webfont.woff2
│  └─ robots.txt
├─ README-Laravel.md
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  └─ views
│     ├─ auth
│     │  ├─ login.blade.php
│     │  └─ register.blade.php
│     ├─ components
│     │  ├─ dashboard-footer.blade.php
│     │  ├─ dashboard-navbar.blade.php
│     │  ├─ dashboard-sidebar.blade.php
│     │  ├─ help-center-modal.blade.php
│     │  ├─ role-list.blade.php
│     │  └─ schedule-list.blade.php
│     ├─ dashboard
│     │  ├─ index.blade.php
│     │  ├─ master-data
│     │  │  ├─ children
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  ├─ elderly
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  ├─ officer
│     │  │  │  ├─ admin-data.blade.php
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  ├─ midwife-data.blade.php
│     │  │  │  ├─ officer-data.blade.php
│     │  │  │  ├─ profile.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  └─ parent
│     │  │     ├─ create.blade.php
│     │  │     ├─ edit.blade.php
│     │  │     ├─ index.blade.php
│     │  │     ├─ profile.blade.php
│     │  │     └─ show.blade.php
│     │  ├─ schedule
│     │  │  ├─ create.blade.php
│     │  │  ├─ edit.blade.php
│     │  │  ├─ index.blade.php
│     │  │  └─ show.blade.php
│     │  ├─ service
│     │  │  ├─ elderly-check
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  ├─ manage-medicine.blade.php
│     │  │  │  ├─ report.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  ├─ immunization
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  ├─ manage-medicine.blade.php
│     │  │  │  ├─ report.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  ├─ pregnancy-check
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  ├─ manage-medicine.blade.php
│     │  │  │  ├─ report.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  └─ weighing
│     │  │     ├─ create.blade.php
│     │  │     ├─ edit.blade.php
│     │  │     ├─ index.blade.php
│     │  │     └─ report.blade.php
│     │  ├─ site-identity
│     │  │  └─ index.blade.php
│     │  └─ supply
│     │     ├─ medicine
│     │     │  ├─ create.blade.php
│     │     │  ├─ edit.blade.php
│     │     │  ├─ history.blade.php
│     │     │  ├─ index.blade.php
│     │     │  ├─ report.blade.php
│     │     │  └─ stock-report.blade.php
│     │     └─ vaccine
│     │        ├─ create.blade.php
│     │        ├─ edit.blade.php
│     │        ├─ index.blade.php
│     │        └─ stock-report.blade.php
│     ├─ layouts
│     │  ├─ auth.blade.php
│     │  ├─ dashboard.blade.php
│     │  └─ print.blade.php
│     └─ welcome.blade.php
├─ routes
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 06cc47d9ef5129b324669a151fa98a7a.php
│  │     ├─ 0aaff5509b8323fc8a01fc559c3ed455.php
│  │     ├─ 0c87db19f9e538f704a45dc7e7d73001.php
│  │     ├─ 121b588c4c06b5ecaaa70731cec458b3.php
│  │     ├─ 1d9b6cc9a16987d4e825c10b957531bf.php
│  │     ├─ 347e85c07159946ee6c045b09005ecc0.php
│  │     ├─ 3b1f702a3753fee257e57b27b49581b5.php
│  │     ├─ 4cbc46680ae46a94e2b6b43dbb9a6ab5.php
│  │     ├─ 54af394494672c81eb839d5db6d0b0f0.php
│  │     ├─ 6133d4d0622a47dcd00b8afe5bec2e95.php
│  │     ├─ 62af5d8b39f43e7b80e83fe893416e84.php
│  │     ├─ 6a3e29cf316c9e0f2602d0c309b8b52c.php
│  │     ├─ 769ccfda62a5c13621f822195657974b.php
│  │     ├─ 799097bab2df37ae1f7b50da6cc184dd.php
│  │     ├─ 82bc52dedfe0f3e138ab5f43f7f03103.php
│  │     ├─ 8335d1f0cbf4c8f2963f36f80273196f.php
│  │     ├─ 9a87ab751339bec786ba55b19ba38f1c.php
│  │     ├─ a54489dc386725d07f94334fd3897edc.php
│  │     ├─ aabb1df51bc9ecb873b2dbb0397bf548.php
│  │     ├─ bc8a210b0e30425bf9ddd9b3d6cfd8ff.php
│  │     ├─ c23de2457a79f6e7fe6fcd76ca463f46.php
│  │     ├─ c823d4847582bcab3c9c0412444ebe11.php
│  │     ├─ cefec496c6727d1fe31ed21db9d5e5aa.php
│  │     ├─ d599454d506a4b7d84ed9bea0016180a.php
│  │     ├─ d6f48e696200833cddf5f11a5b46ee6f.php
│  │     ├─ ddcdb8a687c65b6d40685423a28ae5a2.php
│  │     ├─ f29db1606484bf78a64fee3177c6711f.php
│  │     └─ f3d169228afafc2d7b4eea3bb36b4458.php
│  └─ logs
│     └─ laravel.log
├─ structure.txt
├─ tests
│  ├─ Feature
│  │  └─ ExampleTest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js

```