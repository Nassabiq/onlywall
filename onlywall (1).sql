-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2020 pada 19.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlywall`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_kategori`
--

CREATE TABLE `artikel_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel_kategori`
--

INSERT INTO `artikel_kategori` (`id_kategori`, `kategori`) VALUES
(12, 'Wawasan'),
(13, 'Tips'),
(14, 'Intermezzo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_post`
--

CREATE TABLE `artikel_post` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(258) NOT NULL,
  `konten` longtext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_upload` date NOT NULL DEFAULT current_timestamp(),
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel_post`
--

INSERT INTO `artikel_post` (`id_artikel`, `judul_artikel`, `konten`, `id_kategori`, `tgl_upload`, `thumbnail`) VALUES
(51, 'Wawasan Umum Soal Alas Kaki', '&lt;p&gt;Zaman dulu sekali sebelum masehi alas kaki digunakan orang orang untuk melindungi kaki. Baik itu untuk melindungi dingin, panas, goresan benda tajam dan sebagainya. Zaman dahulu alas kaki yang digunakan orang orang dari satu wilayah dan wilayah yang lain sangatlah berbeda beda, hal ini tergantung keadaan iklim yang mereka tinggali. Diwilayah utara misalnya alas kaki terbuat dari kulit tebal dan dilengkapi dengan jerami agar melindungi kaki mereka dari dingin, sementara diwilayah selatan sebagian alas kaki terbuat dari daun kelapa dan serat sapiritus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Namun seiring berjalannya waktu alas kaki tidak hanya sebagai alat melindungi diri tapi juga menjadi salah satu bagian penting untuk penampilan seseorang. Kepercayaan diri seseorang akan meningkat ketika ia memakai sepatu yang bagus. oleh karena itu sepatu sepatu yang ada sekarang ini memiliki harga dan varian yang beragam mulai dari yang murah puluhan ribu saja hingga yang mahal hingga miliaran rupiah.&lt;/p&gt;\r\n\r\n&lt;p&gt;Setiap tahunnya selalu ada saja perubahan dan desain desain terbaru dari para produsen sepatu namun dalam beberapa tahun ini trend tepatu &lt;em&gt;flat shoes&lt;/em&gt; dan &lt;em&gt;wedges&lt;/em&gt; merupakan jenis sepatu yang sering digandrungi oleh masyarakat, dan trend sepatu sepatu tersebut umumnya dipengaruhi oleh trend dunia terutama di pusat pusat fashion dunia seperti Paris, Milan, dan New York.&lt;/p&gt;\r\n', 12, '2020-10-22', 'OwArtikel-Wawasan_Umum_Soal_Alas_Kaki.png'),
(52, 'Wawasan Umum Sandal', '&lt;p&gt;Setiap orang pasti mengetahui sandal jepit, sandal kemungkinan merupakan bentuk tertua dari alas kaki. Pada zaman dahulu sandal digunakan agar kaki tetap dingin dilingkukangan yang panas, selain itu sandal juga digunakan untuk melindungi kaki dari panasnya pasir, tanah berbatu, serangga beracun dan lainnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pada zaman dahulu di mesir kuno, sandal terbuat dari anyaman materi sayuran seperti daun papyrus dan injuk. Namun seiring berjalannya waktu sandal semakin berevolusi dengan menggunakan bahan bahan yang kuat seperti kulit hingga karet seperti saat ini.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sebelum abad ke duapuluh sandal tak lazim di eropa utara atau amerika utara karena faktor cuaca dingin. Dan pada awal abad ke duapuluh Hollwood kerap menampilkan kisah kisah epic yang bersumber dari al kitab, seperti film &lt;em&gt;the ten commandments&lt;/em&gt; dimana artis dan aktornya menggunakan sandal dari bahan seperti kulit, sehingga pada saat itu desain sandal itu menjadi trend fesyen. Sedangkan di amerika Sandal menjadi terkenal setelah perang dunia ke II, dimana serdadu amerika pulang dengan membawa souvenir dengan membawa &lt;em&gt;zori&lt;/em&gt; (sandal jepit tradisional jepang).&lt;/p&gt;\r\n\r\n&lt;p&gt;Hingga saat ini sandal telah menjadi salah satu kebutuhan masyarakat dunia terlebih lagi dimana industry plastic turut mengambil peran dalam memproduksi sandal secara massal. Kini sandal bisa ditemui dimanapun baik itu untuk keperluar alas kaki primer maupun untuk kebutuhan penanggal sepatu ketika di dalam rumah. Di zaman sekarang sandal jepit sangatlah popular disemua kalangan dari berbagai usia. Pada generasi mudah kini sandal bukan lagi masalah ketika digunakan dalam acara cara formal sedangkan untuk generasi yang lebih tua sandal biasa digunakan ketika bersantai.&lt;/p&gt;\r\n', 12, '2020-10-22', 'OwArtikel-Wawasan_Umum_Sandal.jpg'),
(53, 'Tips Mencuci Sepatu Agar Tidak Mudah Rusak', '&lt;p&gt;1. Cuci sepatu  sesuai dengan bahan sepatu&lt;/p&gt;\r\n\r\n&lt;p&gt;Cucilah sepatu sesuai dengan bahannya karena tiap bahan memerlukan treatment yang berbeda ketika dicuci.&lt;/p&gt;\r\n\r\n&lt;p&gt;Untuk sepatu bahan kain sangat tidak dianjurkan merendam sepatu dengan air karena Hampir semua sepatu kain, mengandung lem yang tidak bisa menahan banyak air. Lem bisa menjadi kendur dan membuat sepatu menjadi rusak.&lt;/p&gt;\r\n\r\n&lt;p&gt;Untuk membersihkan sepatu kulit, kamu bisa menggunakan larutan air dingin dan cuka putih. Gunakan kain bekas untuk membersihkan sepatu menggunakan larutan ini.Jika sepatu kulitmu memiliki goresan atau lecet, gunakan semir sepatu dengan warna yang sama dengan sepatumu. Namun, jika kamu tidak bisa menemukan warna yang sesuai kamu bisa membuat semir sepatumu sendiri. Caranya adalah dengan membasahi kain dan mencelupkannya ke dalam &lt;em&gt;baking soda&lt;/em&gt;.Gosok bagian sepatu kulit dengan berhati-hati dengan kain ini dan kemudian bersihkan sepatu menggunakan kain bersih.                                                     &lt;/p&gt;\r\n\r\n&lt;p&gt;2. Saat ingin mengeringkan  sepatu yang sudah dicuci jangan jemur sepatu dibawah sinar matahari langsung karena dapat membuat warna dari sepatu akan memudar. Keringkan sepatu dengan cara dilap dengan kain dan diangin-anginkan dalam ruangan sudah cukup&lt;/p&gt;\r\n\r\n&lt;p&gt;3. Sebelum mencuci sepatu bagian dalam baiknya mencuci sol sepatu terlebih dahulu agar memudahkan membersihkan sepatu bagian dalam sehingga tidak terkena noda dari pasih atau tanah yang dibawa oleh sol sepatu&lt;/p&gt;\r\n', 13, '2020-10-22', 'OwArtikel-Tips_Mencuci_Sepatu_Agar_Tidak_Mudah_Rusak.jpg'),
(54, 'Apa Kebenaran Di Balik Topi Jerami Tersebut ?', '&lt;p&gt;Bagi kalian yang menyukai anime one piece pasti sudah tidak asing lagi dong dengan topi jerami ini. Yapss… Topi jerami milik Luffy tersebut merupakan salah satu harta yang paling berharga bagi Luffy. Karena topi tersebut merupakan titipan dari salah satu orang yang Luffy kagumi yaitu Akagami no Shanks.&lt;/p&gt;\r\n\r\n&lt;p&gt;Shanks meruapakan salah satu yongkou di dunia baru. Dimana 12 tahun yang lalu Shanks pernah berlabuh di salah satu kecil bernama Desa Fusha, dimana pada saat itu ia bertemu Luffy kecil dan berteman dengannya. Karena Shanks kagum terhadap tekad Luffy yang ingin menjadi raja bajak laut akhirnya ia memutuskan untuk memberikan topi tersebut kepada Luffy. Padahal topi tersebut merupakan ciri khas Shanks dan merupakan salah satu benda berharga baginya, karena topi tersebut juga merupakan pemberian kaptennya Gold D. Roger selain Shanks juga telah banyak melewati berbagai macam pertempuran dengan topi tersebut, seperti saat melawan Shirohige, melawan Taka no me Mihawk, dan melawan kurohige.&lt;/p&gt;\r\n\r\n&lt;p&gt;Namun seiring berjalannya cerita One Piece, sepertinya topi jerami tersebut memiliki suatu rahasia yang luar biasa besar dari hanya sekedar topi peninggalan Shanks dan Gold D. Roger. Karena pada chapter 906. Diperlihatkan bahwa disuatu tempat di Mary Geoise. Terdapat topi jerami raksasa yang tersimpan dalam sebuah tempat penyimpanan harta. Pada chapter tersebut diperlihatkan terdapat seorang sosok yang membuka tempat penyimpanan harta dan memegangi poster Luffy beserta dua poster lainnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sepertinya Oda-sensei masih memiliki kejutan-kejutan bagi para pembaca tentang apa kebenaran di balik topi jerami ini.. Mari.. kita tunggu saja &lt;/p&gt;\r\n', 14, '2020-10-27', 'OwArtikel-Apa_Kebenaran_Di_Balik_Topi_Jerami_Tersebut_.jpg'),
(55, 'Sejarah Singkat Bendera Merah Putih', '&lt;p&gt;Bendera merah putih merupakan simbol dari Negara Indonsia, bendera ini disebut juga sebagai Sang Saka Merah Putih, Sang Merah Putih, Merah Putih, atau Sang Dwi Warna (dua warna).&lt;/p&gt;\r\n\r\n&lt;p&gt;Dalam sejarahnya bendera merah putih sudah dipakai telebih dahulu oleh kerajaan majapahit pada abad ke 13 hingga 16.  Bendera Merah Putih memiliki makna khusus dimana. Merah berarti berani dan putih berarti suci. Merah melambangkan tubuh manusia, sedangkan putih melambangkan jiwa manusia. Dimana keduanya saling melengkapi dan menyempurnakan.&lt;/p&gt;\r\n\r\n&lt;p&gt;#&lt;/p&gt;\r\n\r\n&lt;p&gt;Bendera pertama Indonesia adalah bendera Pusaka yang disebut Sang Saka Merah Putih. Dimana bendera tersebut dijahit oleh Fatmawati dan pertama kali dikibarkan pada 17 Agustus 1945 di Jalan Pegangsaan Timur 56, Jakarta.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pada tahun 4 Januari 1946 Bendera Sang Saka Merah Putih sempat dipisahkan menjadi dua bagian karena dituasi mendesak dimana Presiden, Wakil Presiden dan Para Menteri tidak terjamin keselamatannya di Jakarta sehingga mengharuskan pindah ke Yogyakarta.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pada 19 Desember 1948, Yogyakarta jatuh ke tangan belanda. Presiden soekarno menyelamatkan Bendera Sang Saka Merah Putih dan mempercayakannya kepada ajudan presiden Husein Mutahar. Husein mutahar mengungsi dengan membawa bendera tersebut. Karena alasan keamanan agar tidak disita belanda, husein mutahar memisahkan bagian merah dan putih menjadi dua dan memasukannya kedalam tas yang terpisah.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pada juni 1949, presiden Soekarno meminta kembali Bendera Pusaka dari Husein Mutahar. Dan pada 6 juli 1949 soekarno dengan membawa bendera pusaka sang saka merah putih tiba di Ibu kota Republik Indonesia Yogyakarta dan bendera pusaka kembali dikibarkan di halaman depan Gedung Agung Yogyakarta.&lt;/p&gt;\r\n\r\n&lt;p&gt;Setelah penandatanganan pengakuan kedaulatan Republik Indonesia oleh Belanda di Den Haag pada 28 desember 1949. Bendera Pusaka disimpan dalam peti dan diterbangkan dari Yogyakarta ke Jakarta. Dan sejak 1958, berdasarkan peraturan pemerintah nomor 40. Bendera merah putih pertama ditetapkan sebagai bendera pusaka dan dikibarkan hanya pada 17 Agustus saja.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bendera pusaka terakhir dikirbarkan pada 17 agustus 1968 dan tidak dikibarkan lagi karena sudah rapuh. Saat ini bendera tersebut disimpan di Istana Mendeka dan berstatus sebagai cagar budaya nasional.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dikutip dari &lt;strong&gt;Kompas.com&lt;/strong&gt;&lt;/p&gt;\r\n', 12, '2020-10-27', 'OwArtikel-Sejarah_Singkat_Bendera_Merah_Putih.jpg'),
(56, 'Cara Merawat Kaos', '&lt;ol&gt;\r\n &lt;li&gt;Cuci kaos sesuai dengan panduan label&lt;/li&gt;\r\n &lt;li&gt;Dalam mencuci kaos pisahkan sesuai dengan warnanya Agar menghindari terjadinya warna yg luntur&lt;/li&gt;\r\n &lt;li&gt;Untuk kaos putih dilarang mencuci dengan pemutih Hal ini dikarenakan pemutih dapat merusak bahan&lt;/li&gt;\r\n &lt;li&gt;Cucilah kaos dengan air dingin dan tidak merendam lebih dari 30 menit Dikarenakan dapat membuat warna kaos tidak awet&lt;/li&gt;\r\n &lt;li&gt;Jangan mencuci dengan mesin cuci karena dapat mebuat kaos menjadi melar dan sablonan rusak&lt;/li&gt;\r\n &lt;li&gt;Cukup cuci kaos dengan menguceknya secara perlahan saja&lt;/li&gt;\r\n &lt;li&gt;Jangan jemur kaos dengan menggunakan hanger terutama dalam keadaan basah karena dapat mengakibatkan melar pada bagian kerah&lt;/li&gt;\r\n &lt;li&gt;Jemurlah kaos dalam keadaan terbalik den jemur dengan cara diangin-anginkan saja aga warna dari kaos tetap awet&lt;/li&gt;\r\n &lt;li&gt;Setrika kaos dalam keadaan terbalik agar sablonan yang ada tidak rusak&lt;/li&gt;\r\n &lt;li&gt;Jangan setrika kaos dengan panas yang tinggi karena dapat merusak warna, dan setrikalah kaos dalam keadaan kering seutuhnya agar tidak merusak bahan&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', 13, '2020-10-27', 'OwArtikel-Cara_Merawat_Kaos.jpg'),
(57, 'Sejarah Singkat Pakaian', '&lt;p&gt;Pakaian merupakan kebutuhan wajib bagi setiap manusia. Sejak zaman dahulu manusia sudah memakai berbagai macam pakaian untuk menutupi badannya dari serangan panas matahari atau suhu yang dingin. Pakaian yang mereka kenakan juga bermacam-macam tergantung kondisi cuaca yang mereka tinggali entah itu dengan menggunakan kulit untuk melindungi dingin ataupun serat jerami yang diikatkan untuk agar tetap sejuk.&lt;/p&gt;\r\n\r\n&lt;p&gt;Semakin modern zaman, membuat pakaian bukan lagi hanya sekedar alat melindungi tubuh, tapi juga gaya hidup untuk menunjukan status sosial seseorang. karena perkembangan zaman juga, teknologi pembuatan pakaian berkembang pesat, hal ini menyebabkan pakaian memiliki banyak model dan diproduksi besar-besaran. Bila dulu pakaian dibuat dengan proses yang lama kini berkat bantuan teknologi, proses pembuatan pakaian menjadi sangat cepat. Jenis jenis pakaianpun mulai beragam. Mulai dari kaos, kemeja, dan lain sebagainya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Untuk kaos sendiri indentik digunakan untuk bersantai sedangkan kemeja identic digunakan pada acara acara formal.&lt;/p&gt;\r\n\r\n&lt;p&gt; &lt;/p&gt;\r\n', 12, '2020-10-27', 'OwArtikel-Sejarah_Singkat_Pakaian.jpg'),
(58, 'Topi benda beragam fungsi', '&lt;p&gt;Pada zaman dahulu topi digunakan untuk melindungi kepala dari cuaca yang tidak bersahabat. Namun seiring berjalannya waktu, fungsi topi berevolusi dari masa ke masa. Mulai dari melindungi kepala dari cedera, Di gunakan unntuk acara ceremonial hingga untuk trend fashion pelengkap pakaian. Berikut beberapa fungsi topi yang bisa kamu ketahui berdasarkan jenisnya :&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Sun Hat&lt;/p&gt;\r\n\r\n&lt;p&gt;Topi ini biasanya memiliki bentuk diameter yang sisinya relative lebar, dimana topi ini berfungsi untuk melindungi kepala dan bahu dari terik matahari ataupun hujan. Seiring berjalannya waktu jenis topi sun hat menjadi beragam seperti bucket hat, topi koboi, ain sebagainya.&lt;/p&gt;\r\n\r\n&lt;p&gt;2. Hard Hat&lt;/p&gt;\r\n\r\n&lt;p&gt;Topi ini memiliki fungsi utama yaitu helm safety, biasanya digunakan oleh para pekerja yang bekerja di lokasi kerja seperti tambang, pabrik, dan proyek bangunan. Penggunaan topi ini sangatlah wajib bagi pekerja atau pengunjung yang mengunjungi tempat tempat tersebut. karena bisa melindungi kepala dari cedera dan jatuhan benda benda berat.&lt;/p&gt;\r\n\r\n&lt;p&gt;3. Ceremonial Hat&lt;/p&gt;\r\n\r\n&lt;p&gt;Topi untuk ceremonial sangatlah beragam dan memiliki tujuan yang berbeda-beda. Seperti Toga digunakan untuk menandakan kelulusan sekolah, Lalu Songkok biasanya digunakan untuk ceremonial-ceremonial agama islam seperti sholat, lalu mitress yang biasa digunakan oleh uskup dan lain sebagainya.&lt;/p&gt;\r\n\r\n&lt;p&gt;4. Trend Hat&lt;/p&gt;\r\n\r\n&lt;p&gt;Perkembangan topi ini sering berubah-ubah mengikuti trend fashion seperti topi bisbol dimana dulu merupakan salah satu atribut seragam baseball saat ini digunakan orang orang untuk dipadukan dengan desain desain fashion yang casual.&lt;/p&gt;\r\n', 12, '2020-10-27', 'OwArtikel-Topi_benda_beragam_fungsi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(258) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `published_at` date NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto_produk` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`foto_produk`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `id_kategori`, `published_at`, `deskripsi`, `foto_produk`) VALUES
(26, 'Kaos Oblong Pria dan Wanita', 80000, 2, '2020-10-22', '&lt;p&gt;[Exclusive] Kaos Polos Cotton Combed 30 s / Kaos Oblong Pria dan Wanita.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kali ini onlywall menjual kaos polos oblong dari bahan cotton combed 30 s, bahan terbaik dari 100 % katun. Nyaman dan adem saat digunakan serta mudah menyerap keringat. Spesifikasi :&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Material : Cotton Combed 30 s&lt;/li&gt;\r\n &lt;li&gt;Type : Unisex (bisa digunakan untuk laki-laki atau perempuan)&lt;/li&gt;\r\n &lt;li&gt;Warna : Hitam, Putih, Abu [Exclusive]&lt;/li&gt;\r\n &lt;li&gt;Ukuran :&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;S = Panjang 72 x Lebar 47&lt;/p&gt;\r\n\r\n&lt;p&gt;M = Panjang 76 x Lebar 50 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;L = Panjang 79 x Lebar 53 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;XL = Panjang 80 cm x Lebar 56 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;#Exclusive #KaosPolos #KaosPolosTerbaru2020 #Kaos #Polos #KaosOblong #Kaos #Oblong #KaosHitam #KaosPutih #KaosAbu&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-1.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-2.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-3.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-4.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-5.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-6.jpg\"}]'),
(27, 'Sandal Jepit Wanita', 32500, 1, '2020-10-22', '&lt;p&gt;Sandal Jepit Wanita Kanan Kiri Terbaru 2020&lt;/p&gt;\r\n\r\n&lt;p&gt;Sandal wanita Kiri Kanan terbuat dari bahan paylon sehingga ramah lingkungan, desain trendi dan awet . Cocok dan nyaman digunakan dimana saja baik saat santai maupun aktivitas sehari hari. yuk beli Ledies :&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Material : Paylon&lt;/li&gt;\r\n &lt;li&gt;Berat : 0.6 kg&lt;/li&gt;\r\n &lt;li&gt;Warna : Toska, Pink, Krem, Ungu.&lt;/li&gt;\r\n &lt;li&gt;Ukuran : 36, 37, 38, 39, 40&lt;/li&gt;\r\n &lt;li&gt;Panduan Ukuran :&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Size 36 = Panjang 22 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 37 = Panjang: 22.5 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 38 = Panjang: 23 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 39 = Panjang: 23.5 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 40 = Panjang: 24 cm&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Harga = 32.500&lt;/li&gt;\r\n &lt;li&gt;Min Pembelian 2 Buah diskon 2 rb&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#sandal #kanankiri #sandalwanita #sandalterbatu2020 #terbaru2020 #sandaltrendi #trending #viral #wanita #perempuan #sendal #sepatu #karet&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Sandal_Jepit_Wanita-1.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-2.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-3.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-4.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-5.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-6.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-7.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-8.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-9.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-10.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-11.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-12.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-13.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-14.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-15.jpeg\"}]'),
(28, 'Topi Rajut BUCKET HAT ', 80000, 11, '2020-10-26', '&lt;p&gt;Cocok untuk liburan kemana mana 100 % handmade Nyaman digunakan dimana saja. lembut dan tidak panas. cocok digunakan untuk berlibur dan 100 % Hand made&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Material Bahan : Polyster Ukuran :&lt;/li&gt;\r\n &lt;li&gt;All Size Varian Warna :&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Coklat-Hitam&lt;/p&gt;\r\n\r\n&lt;p&gt;Hitam-Coklat&lt;/p&gt;\r\n\r\n&lt;p&gt;Regae&lt;/p&gt;\r\n\r\n&lt;p&gt;One Piece&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Harga : 80.000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#KerajinanTangan #Bucket #TopiBucket #HandMade #TopiRajut #Topi #TopiMurah #TopiHits #Regae # Onepiece&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-1.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-2.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-3.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-4.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-5.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-6.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-7.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-8.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-9.jpg\"}]'),
(29, 'Bendera Merah Putih HUT RI 75', 15000, 7, '2020-10-26', '&lt;p&gt;Bendera Merah Putih HUT RI 75 ukuran 60 x 90, 70 x105, 80 x 120, 90 x 135, 100 x 150 Menjual Bendera Negara Republik Indonesia, yang biasa disebut Bendera Merah Putih, Sang Saka Merah Putih, atau kadang disebut Sang Dwiwarna (dua warna). Dengan spesifikasi:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Ukuran : 60x90cm, 70 x105, 80 x 120, 90 x 135, 100 x 150&lt;/li&gt;\r\n &lt;li&gt;Bahan : kain Satin Peles/Veles&lt;/li&gt;\r\n &lt;li&gt;Jumlah Tali : 3 tali pengikat&lt;/li&gt;\r\n &lt;li&gt;cocok digunakan di : di depan rumah dengan ketinggian tiang 3M&lt;/li&gt;\r\n &lt;li&gt;Harga :&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Ukuran 60 x 90 = 15.000&lt;/p&gt;\r\n\r\n&lt;p&gt;Ukuran 70 x 105 = 18.000&lt;/p&gt;\r\n\r\n&lt;p&gt;Ukuran 80 x 120 = 20.000&lt;/p&gt;\r\n\r\n&lt;p&gt;Ukuran 90 x 135 = 25.000&lt;/p&gt;\r\n\r\n&lt;p&gt;Ukuran 100 x 150 = 30.000&lt;/p&gt;\r\n\r\n&lt;p&gt;NB: Bendera yang kami produksi berbentuk persegi panjang dengan rasio 3:2 Sesuai Peraturan Pemerintah Republik Indonesia Nomor 40 Thn. 1958&lt;/p&gt;\r\n\r\n&lt;p&gt;#BenderaMerahPutih #Bendera #MerahPutih #HUTRI #HUTRI75 #Onlywall&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Bendera_Merah_Putih_HUT_RI_75-1.jpg\"},{\"image\":\"OwProduk-Bendera_Merah_Putih_HUT_RI_75-2.jpg\"},{\"image\":\"OwProduk-Bendera_Merah_Putih_HUT_RI_75-3.jpg\"}]'),
(30, 'Bendera Merah Putih Plastik bertali dan non-tali HUT RI 75 ', 10000, 7, '2020-10-26', '&lt;p&gt;Menjual Bendera Negara Republik Indonesia, yang biasa disebut Bendera Merah Putih, Sang Saka Merah Putih, atau kadang disebut Sang Dwiwarna (dua warna). Dengan spesifikasi:&lt;/p&gt;\r\n\r\n&lt;p&gt;Non-Tali&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Ukuran : 14x21cm&lt;/li&gt;\r\n &lt;li&gt;Bahan : Plastik&lt;/li&gt;\r\n &lt;li&gt;1 kantong berisi 100 lembar bendera plastik merah putih.&lt;/li&gt;\r\n &lt;li&gt;Cocok untuk dipasang jalanan kampung, langit-langit ruang/kelas.&lt;/li&gt;\r\n &lt;li&gt;Harga : 10.000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Bertali&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Ukuran : 14x21cm&lt;/li&gt;\r\n &lt;li&gt;Bahan : Plastik&lt;/li&gt;\r\n &lt;li&gt;1 kantong berisi 25 lembar bendera plastik merah putih.&lt;/li&gt;\r\n &lt;li&gt;Apabil dibentangkan panjang kurang lebih 10 Meter&lt;/li&gt;\r\n &lt;li&gt;Cocok untuk dipasang jalanan kampung, langit-langit ruang/kelas.&lt;/li&gt;\r\n &lt;li&gt;Harga : 11.000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;NB: Bendera yang kami produksi berbentuk persegi panjang dengan rasio 3:2 Sesuai Peraturan Pemerintah Republik Indonesia Nomor 40 Thn. 1958&lt;/p&gt;\r\n\r\n&lt;p&gt;#BenderaPlastik #Plastik #BenderaMerahPutih #Bendera #MerahPutih #HUTRI #HUTRI75 #Onlywall&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Bendera_Merah_Putih_Plastik_bertali_dan_non-tali_HUT_RI_75_-1.jpeg\"},{\"image\":\"OwProduk-Bendera_Merah_Putih_Plastik_bertali_dan_non-tali_HUT_RI_75_-2.jpeg\"}]'),
(31, 'Masker Merah Putih HUT RI 75 ', 9000, 7, '2020-10-26', '&lt;p&gt;Menjual Masker Merah Putih Spesifikasi :&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Bahan : Kain&lt;/li&gt;\r\n &lt;li&gt;Ukuran : All-SIze&lt;/li&gt;\r\n &lt;li&gt;Cocok digunakan ketika upacara peringatan HUT RI ke 75 dan menjaga agar tetap sehat selama pandemi berlangsung&lt;/li&gt;\r\n &lt;li&gt;Harga : 9.000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#Masker #MaskerHUTRI #MaskerMerahPutih #BenderaMerahPutih #Bendera #MerahPutih #HUTRI #HUTRI75 #Onlywall&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-1.jpeg\"},{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-2.jpeg\"},{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-3.jpeg\"},{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-4.jpeg\"}]'),
(32, 'Bendera Backdrop Garuda HUT RI 75 ', 175000, 7, '2020-10-26', '&lt;p&gt;Menjual Backdrop Garuda dengan spesifikasi:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Ukuran : 800x50cm&lt;/li&gt;\r\n &lt;li&gt;Bahan : kain Satin Peles/Veles&lt;/li&gt;\r\n &lt;li&gt;Jumlah Legkungan : 10 lengkungan&lt;/li&gt;\r\n &lt;li&gt;Biasa dipasang di atap beranda ruko/kantor/gedung. Juga dapat dipasang melintang dijalanan kampung.&lt;/li&gt;\r\n &lt;li&gt;Harga : 175000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#Backdrop #BackdropGaruda #BenderaMerahPutih #Bendera #MerahPutih #HUTRI #HUTRI75 #Onlywall&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Bendera_Backdrop_Garuda_HUT_RI_75_-1.jpg\"}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_kategori`
--

INSERT INTO `produk_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Sendal'),
(2, 'Baju'),
(7, 'Bendera'),
(11, 'Topi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(258) NOT NULL,
  `email` varchar(258) NOT NULL,
  `image` varchar(258) NOT NULL,
  `password` varchar(258) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `updated_at`) VALUES
(4, 'nassabiq', 'nasirudinsabiq@gmail.com', 'OwAkun-nassabiq.jpg', '$2y$10$97.Hqacq2EBa9S3R80HGretYWwLIizDPtMmujXjGPIyXehd8TOssG', 1, 1, '2020-10-04', '2020-10-21'),
(11, 'Gumelar Muhammad', 'gumelar@gmail.com', 'OwAkun-Gumelar_Muhammad1.jpg', '$2y$10$Rf.TyWuoIMXQL6LIW1W1M.v.BZVq.F4aN1cQx0PfAs.GiXagooJCe', 2, 1, '2020-10-04', '2020-10-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `artikel_post`
--
ALTER TABLE `artikel_post`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `artikel_post`
--
ALTER TABLE `artikel_post`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
