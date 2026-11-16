# Kalkulator Diskon Belanja

## Deskripsi

Kalkulator Diskon Belanja adalah aplikasi web sederhana untuk membantu
pengguna menghitung potongan harga berdasarkan total belanja. Pengguna
memasukkan jumlah belanja, kemudian sistem memprosesnya sesuai ketentuan
diskon yang telah ditentukan.

## Fitur

-   Input total belanja dalam rupiah.
-   Menghitung diskon berdasarkan total belanja.
-   Menampilkan ketentuan diskon pada halaman utama.
-   Antarmuka sederhana dengan tema kalkulator belanja.

## Ketentuan Diskon

  Total Belanja                             Diskon
  --------------------------------------- --------
  Rp100.000 atau lebih                         10%
  Rp50.000 sampai kurang dari Rp100.000         5%
  Kurang dari Rp50.000                          0%

## Teknologi

-   **HTML** untuk struktur halaman.
-   **CSS** untuk mengatur tampilan.
-   **PHP** untuk memproses perhitungan diskon.

## Struktur File

Pastikan file-file berikut berada dalam satu folder proyek:

``` text
kalkulator-diskon/
├── index.php
├── style.css
└── proses.php
```

-   `index.php`: halaman utama berisi formulir input total belanja dan
    informasi ketentuan diskon.
-   `style.css`: mengatur desain dan tata letak halaman.
-   `proses.php`: menerima data dari formulir dan menghitung diskon.

## Cara Menjalankan

1.  Instal dan jalankan server lokal seperti **XAMPP**.

2.  Simpan folder proyek `kalkulator-diskon` di dalam folder `htdocs`.

3.  Pastikan file `index.php`, `style.css`, dan `proses.php` tersedia di
    dalam folder yang sama.

4.  Jalankan **Apache** melalui XAMPP.

5.  Buka browser dan akses alamat berikut:

    ``` text
    http://localhost/kalkulator-diskon/
    ```

6.  Masukkan total belanja, lalu klik tombol **Hitung Diskon** untuk
    mengirim data dan melihat hasil perhitungan.

## Catatan

Formulir pada `index.php` mengirimkan data menggunakan metode `POST` ke
`proses.php`, sedangkan tampilan halaman memanggil `style.css`. Karena
itu, kedua file tersebut harus tersedia agar aplikasi dapat berjalan dan
tampil dengan benar.
