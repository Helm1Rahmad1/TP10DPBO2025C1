# TP10DPBO2025C1

## Janji
Saya Muhammad Helmi Rahmadi dengan NIM 2311574 mengerjakan soal TP 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi
Photography System adalah sebuah aplikasi berbasis web yang dirancang untuk membantu pengelolaan layanan fotografi, seperti manajemen fotografer, klien, dan jadwal pemotretan. Aplikasi ini menggunakan pola arsitektur MVVM (Model-View-ViewModel) yang bertujuan untuk memisahkan antara tampilan (antarmuka pengguna) dan logika bisnis. Dengan pendekatan ini, pengembangan dan pemeliharaan aplikasi menjadi lebih mudah, terstruktur, dan efisien.

## Arsitektur
Aplikasi ini dibangun dengan arsitektur MVVM (Model-View-ViewModel):

- **Model**: Representasi data dan logika akses database
  - Photographer.php
  - Client.php
  - Photoshoot.php
  - Database.php

- **View**: Antarmuka pengguna
  - Form dan halaman daftar untuk fotografer, klien, dan sesi pemotretan
  - Template untuk header dan footer

- **ViewModel**: Penghubung antara Model dan View
  - PhotographerViewModel.php
  - ClientViewModel.php
  - PhotoshootViewModel.php

Arsitektur ini memungkinkan pemisahan yang jelas antara data dan tampilan, dengan ViewModel sebagai perantara yang mengelola data binding dan logika presentasi.

## Fitur
- **Manajemen Fotografer**
  - Menambah, melihat, mengedit, dan menghapus data fotografer
  
- **Manajemen Klien**
  - Menambah, melihat, mengedit, dan menghapus data klien
  
- **Manajemen Sesi Pemotretan**
  - Menjadwalkan, melihat, mengedit, dan membatalkan sesi pemotretan
  
- **Data Binding**
  - Perubahan data otomatis tercermin antara Model dan View


## Struktur Proyek
```
photography_system/
│
├── config/
│   └── Database.php
│
├── database/
│   └── photography_system.sql
│
├── model/
│   ├── Photographer.php
│   ├── Client.php
│   └── Photoshoot.php
│
├── viewmodel/
│   ├── PhotographerViewModel.php
│   ├── ClientViewModel.php
│   └── PhotoshootViewModel.php
│
├── views/
│   ├── template/
│   │   ├── header.php
│   │   └── footer.php
│   │
│   ├── photographer_list.php
│   ├── photographer_form.php
│   ├── client_list.php
│   ├── client_form.php
│   ├── photoshoot_list.php
│   └── photoshoot_form.php
│
└── index.php
```

## Implementasi CRUD
- **Create**: Menambahkan data fotografer, klien, dan sesi pemotretan baru
- **Read**: Menampilkan data fotografer, klien, dan sesi pemotretan yang tersimpan
- **Update**: Memperbarui data fotografer, klien, dan sesi pemotretan yang sudah ada
- **Delete**: Menghapus data fotografer, klien, dan sesi pemotretan dari sistem

## Data Binding
Data Binding merupakan fitur utama dalam arsitektur MVVM yang diimplementasikan dalam sistem ini. Dengan data binding:

- Perubahan pada formulir secara otomatis memperbarui objek Model
- Pembaruan pada Model secara otomatis diperbarui di tampilan
- ViewModel berfungsi sebagai perantara yang memastikan sinkronisasi data dua arah

## Dokumentasi


https://github.com/user-attachments/assets/34f1e623-1d06-4586-aa15-2da279ffa891


