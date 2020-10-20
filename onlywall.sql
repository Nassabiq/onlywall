-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2020 pada 10.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(13, 'Tips');

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
(47, 'How to Train Your Dragon', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ex condimentum, ultricies orci eu, pretium purus. Morbi lacinia condimentum ante et ullamcorper. Pellentesque eu nibh metus. Mauris aliquam erat dolor, vel mollis dolor eleifend sed. Aliquam pharetra tempus ipsum, in ultrices elit elementum et. Pellentesque sed massa in lacus finibus euismod. Pellentesque aliquet venenatis felis, eu bibendum nisl malesuada sit amet. Vivamus convallis mollis nisi in luctus. Quisque ultrices orci quis urna pretium finibus. Maecenas sit amet convallis eros. Fusce vestibulum fermentum fringilla. Vestibulum mauris sem, laoreet non sapien vitae, vestibulum faucibus nulla. Nulla ut ornare massa, sit amet auctor lectus. Ut eleifend convallis eros, non bibendum nisi fringilla et. Nunc ornare arcu at sagittis rhoncus. Vestibulum nibh nibh, fringilla vitae leo sed, congue viverra tellus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cras fermentum euismod scelerisque. Suspendisse potenti. Vestibulum eu scelerisque felis. Morbi aliquet sed libero quis convallis. Phasellus vel quam ex. Aenean sit amet augue mollis, auctor orci eu, ultrices massa. Maecenas vitae volutpat elit.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nunc velit velit, scelerisque ac tortor vel, faucibus laoreet enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada mollis massa, sed cursus augue venenatis condimentum. Ut in ultricies sem. Etiam commodo velit venenatis neque gravida accumsan. Morbi porttitor odio urna, sit amet lobortis metus auctor nec. Vivamus aliquet quam eu massa tincidunt, vitae tincidunt erat fermentum. Nunc nulla est, suscipit ut risus vel, euismod facilisis nunc. Ut ut dictum nisl, non egestas dui. Morbi ut elementum est. Nam in libero dui. Mauris tincidunt, nisi quis pharetra vulputate, quam lectus scelerisque est, sed condimentum metus eros id urna. Vestibulum porttitor neque sit amet mauris rutrum, eu rhoncus lectus egestas. Etiam id sapien sed orci tempor sollicitudin. Suspendisse dapibus nulla nec cursus tristique. Mauris cursus tincidunt mi non sodales.&lt;/p&gt;\r\n\r\n&lt;p&gt;Duis a augue quis arcu condimentum condimentum. Donec cursus mi quis nisi feugiat dictum. Nunc quis nibh eu neque viverra auctor. Aliquam id maximus ipsum. Aliquam dignissim vestibulum eros, et congue libero rhoncus a. Suspendisse fringilla tempor tincidunt. Suspendisse non nulla semper, lacinia dui sit amet, auctor dui. In hac habitasse platea dictumst.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed eu maximus arcu. Nullam in ex vel arcu condimentum molestie. Nam nec rutrum tortor. Nam at condimentum ligula. Etiam scelerisque et arcu ut scelerisque. Vestibulum quis accumsan erat, sit amet finibus lacus. Nullam efficitur gravida diam vitae fringilla. Curabitur sit amet justo sem. Donec elementum sit amet leo a iaculis. Nam efficitur porta lacus at ultricies.&lt;/p&gt;\r\n', 12, '2020-10-15', 'OwArtikel-How_to_Train_Your_Dragon.jpg'),
(48, 'How to Train Your Dragon 2', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ex condimentum, ultricies orci eu, pretium purus. Morbi lacinia condimentum ante et ullamcorper. Pellentesque eu nibh metus. Mauris aliquam erat dolor, vel mollis dolor eleifend sed. Aliquam pharetra tempus ipsum, in ultrices elit elementum et. Pellentesque sed massa in lacus finibus euismod. Pellentesque aliquet venenatis felis, eu bibendum nisl malesuada sit amet. Vivamus convallis mollis nisi in luctus. Quisque ultrices orci quis urna pretium finibus. Maecenas sit amet convallis eros. Fusce vestibulum fermentum fringilla. Vestibulum mauris sem, laoreet non sapien vitae, vestibulum faucibus nulla. Nulla ut ornare massa, sit amet auctor lectus. Ut eleifend convallis eros, non bibendum nisi fringilla et. Nunc ornare arcu at sagittis rhoncus. Vestibulum nibh nibh, fringilla vitae leo sed, congue viverra tellus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cras fermentum euismod scelerisque. Suspendisse potenti. Vestibulum eu scelerisque felis. Morbi aliquet sed libero quis convallis. Phasellus vel quam ex. Aenean sit amet augue mollis, auctor orci eu, ultrices massa. Maecenas vitae volutpat elit.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nunc velit velit, scelerisque ac tortor vel, faucibus laoreet enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada mollis massa, sed cursus augue venenatis condimentum. Ut in ultricies sem. Etiam commodo velit venenatis neque gravida accumsan. Morbi porttitor odio urna, sit amet lobortis metus auctor nec. Vivamus aliquet quam eu massa tincidunt, vitae tincidunt erat fermentum. Nunc nulla est, suscipit ut risus vel, euismod facilisis nunc. Ut ut dictum nisl, non egestas dui. Morbi ut elementum est. Nam in libero dui. Mauris tincidunt, nisi quis pharetra vulputate, quam lectus scelerisque est, sed condimentum metus eros id urna. Vestibulum porttitor neque sit amet mauris rutrum, eu rhoncus lectus egestas. Etiam id sapien sed orci tempor sollicitudin. Suspendisse dapibus nulla nec cursus tristique. Mauris cursus tincidunt mi non sodales.&lt;/p&gt;\r\n\r\n&lt;p&gt;Duis a augue quis arcu condimentum condimentum. Donec cursus mi quis nisi feugiat dictum. Nunc quis nibh eu neque viverra auctor. Aliquam id maximus ipsum. Aliquam dignissim vestibulum eros, et congue libero rhoncus a. Suspendisse fringilla tempor tincidunt. Suspendisse non nulla semper, lacinia dui sit amet, auctor dui. In hac habitasse platea dictumst.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed eu maximus arcu. Nullam in ex vel arcu condimentum molestie. Nam nec rutrum tortor. Nam at condimentum ligula. Etiam scelerisque et arcu ut scelerisque. Vestibulum quis accumsan erat, sit amet finibus lacus. Nullam efficitur gravida diam vitae fringilla. Curabitur sit amet justo sem. Donec elementum sit amet leo a iaculis. Nam efficitur porta lacus at ultricies.&lt;/p&gt;\r\n', 12, '2020-10-15', 'OwArtikel-How_to_Train_Your_Dragon_2.jpg'),
(49, 'How to Train Your Dragon 3', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ex condimentum, ultricies orci eu, pretium purus. Morbi lacinia condimentum ante et ullamcorper. Pellentesque eu nibh metus. Mauris aliquam erat dolor, vel mollis dolor eleifend sed. Aliquam pharetra tempus ipsum, in ultrices elit elementum et. Pellentesque sed massa in lacus finibus euismod. Pellentesque aliquet venenatis felis, eu bibendum nisl malesuada sit amet. Vivamus convallis mollis nisi in luctus. Quisque ultrices orci quis urna pretium finibus. Maecenas sit amet convallis eros. Fusce vestibulum fermentum fringilla. Vestibulum mauris sem, laoreet non sapien vitae, vestibulum faucibus nulla. Nulla ut ornare massa, sit amet auctor lectus. Ut eleifend convallis eros, non bibendum nisi fringilla et. Nunc ornare arcu at sagittis rhoncus. Vestibulum nibh nibh, fringilla vitae leo sed, congue viverra tellus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cras fermentum euismod scelerisque. Suspendisse potenti. Vestibulum eu scelerisque felis. Morbi aliquet sed libero quis convallis. Phasellus vel quam ex. Aenean sit amet augue mollis, auctor orci eu, ultrices massa. Maecenas vitae volutpat elit.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nunc velit velit, scelerisque ac tortor vel, faucibus laoreet enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada mollis massa, sed cursus augue venenatis condimentum. Ut in ultricies sem. Etiam commodo velit venenatis neque gravida accumsan. Morbi porttitor odio urna, sit amet lobortis metus auctor nec. Vivamus aliquet quam eu massa tincidunt, vitae tincidunt erat fermentum. Nunc nulla est, suscipit ut risus vel, euismod facilisis nunc. Ut ut dictum nisl, non egestas dui. Morbi ut elementum est. Nam in libero dui. Mauris tincidunt, nisi quis pharetra vulputate, quam lectus scelerisque est, sed condimentum metus eros id urna. Vestibulum porttitor neque sit amet mauris rutrum, eu rhoncus lectus egestas. Etiam id sapien sed orci tempor sollicitudin. Suspendisse dapibus nulla nec cursus tristique. Mauris cursus tincidunt mi non sodales.&lt;/p&gt;\r\n\r\n&lt;p&gt;Duis a augue quis arcu condimentum condimentum. Donec cursus mi quis nisi feugiat dictum. Nunc quis nibh eu neque viverra auctor. Aliquam id maximus ipsum. Aliquam dignissim vestibulum eros, et congue libero rhoncus a. Suspendisse fringilla tempor tincidunt. Suspendisse non nulla semper, lacinia dui sit amet, auctor dui. In hac habitasse platea dictumst.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed eu maximus arcu. Nullam in ex vel arcu condimentum molestie. Nam nec rutrum tortor. Nam at condimentum ligula. Etiam scelerisque et arcu ut scelerisque. Vestibulum quis accumsan erat, sit amet finibus lacus. Nullam efficitur gravida diam vitae fringilla. Curabitur sit amet justo sem. Donec elementum sit amet leo a iaculis. Nam efficitur porta lacus at ultricies.&lt;/p&gt;\r\n', 12, '2020-10-15', 'OwArtikel-How_to_Train_Your_Dragon_3.jpg'),
(50, 'How to Train Your Dragon 4', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ex condimentum, ultricies orci eu, pretium purus. Morbi lacinia condimentum ante et ullamcorper. Pellentesque eu nibh metus. Mauris aliquam erat dolor, vel mollis dolor eleifend sed. Aliquam pharetra tempus ipsum, in ultrices elit elementum et. Pellentesque sed massa in lacus finibus euismod. Pellentesque aliquet venenatis felis, eu bibendum nisl malesuada sit amet. Vivamus convallis mollis nisi in luctus. Quisque ultrices orci quis urna pretium finibus. Maecenas sit amet convallis eros. Fusce vestibulum fermentum fringilla. Vestibulum mauris sem, laoreet non sapien vitae, vestibulum faucibus nulla. Nulla ut ornare massa, sit amet auctor lectus. Ut eleifend convallis eros, non bibendum nisi fringilla et. Nunc ornare arcu at sagittis rhoncus. Vestibulum nibh nibh, fringilla vitae leo sed, congue viverra tellus.&lt;/p&gt;\r\n\r\n&lt;p&gt;Cras fermentum euismod scelerisque. Suspendisse potenti. Vestibulum eu scelerisque felis. Morbi aliquet sed libero quis convallis. Phasellus vel quam ex. Aenean sit amet augue mollis, auctor orci eu, ultrices massa. Maecenas vitae volutpat elit.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nunc velit velit, scelerisque ac tortor vel, faucibus laoreet enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada mollis massa, sed cursus augue venenatis condimentum. Ut in ultricies sem. Etiam commodo velit venenatis neque gravida accumsan. Morbi porttitor odio urna, sit amet lobortis metus auctor nec. Vivamus aliquet quam eu massa tincidunt, vitae tincidunt erat fermentum. Nunc nulla est, suscipit ut risus vel, euismod facilisis nunc. Ut ut dictum nisl, non egestas dui. Morbi ut elementum est. Nam in libero dui. Mauris tincidunt, nisi quis pharetra vulputate, quam lectus scelerisque est, sed condimentum metus eros id urna. Vestibulum porttitor neque sit amet mauris rutrum, eu rhoncus lectus egestas. Etiam id sapien sed orci tempor sollicitudin. Suspendisse dapibus nulla nec cursus tristique. Mauris cursus tincidunt mi non sodales.&lt;/p&gt;\r\n\r\n&lt;p&gt;Duis a augue quis arcu condimentum condimentum. Donec cursus mi quis nisi feugiat dictum. Nunc quis nibh eu neque viverra auctor. Aliquam id maximus ipsum. Aliquam dignissim vestibulum eros, et congue libero rhoncus a. Suspendisse fringilla tempor tincidunt. Suspendisse non nulla semper, lacinia dui sit amet, auctor dui. In hac habitasse platea dictumst.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sed eu maximus arcu. Nullam in ex vel arcu condimentum molestie. Nam nec rutrum tortor. Nam at condimentum ligula. Etiam scelerisque et arcu ut scelerisque. Vestibulum quis accumsan erat, sit amet finibus lacus. Nullam efficitur gravida diam vitae fringilla. Curabitur sit amet justo sem. Donec elementum sit amet leo a iaculis. Nam efficitur porta lacus at ultricies.&lt;/p&gt;\r\n', 13, '2020-10-15', 'OwArtikel-How_to_Train_Your_Dragon_4.jpg');

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
(22, 'Kaos Oblong Pria dan Wanita', 80000, 2, '2020-10-12', '&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;[Exclusive] Kaos Polos Cotton Combed 30 s / Kaos Oblong Pria dan Wanita.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;Kali ini onlywall menjual kaos polos oblong dari bahan cotton combed 30 s, bahan terbaik dari 100 % katun. Nyaman dan adem saat digunakan serta mudah menyerap keringat. Spesifikasi :&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpFirst&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;Material : Cotton Combed 30 s&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;Type : Unisex (bisa digunakan untuk laki-laki atau perempuan)&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;Warna : Hitam, Putih, Abu [Exclusive]&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;Ukuran : &lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;S = Panjang 72 x Lebar 47&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;M = Panjang 76 x Lebar 50 cm&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;L = Panjang 79 x Lebar 53 cm&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoListParagraphCxSpLast&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;XL = Panjang 80 cm x Lebar 56 cm&lt;/span&gt;&lt;/p&gt;\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span lang=&quot;EN-US&quot;&gt;#Exclusive #KaosPolos #KaosPolosTerbaru2020 #Kaos #Polos #KaosOblong #Kaos #Oblong #KaosHitam #KaosPutih #KaosAbu&lt;/span&gt;&lt;/p&gt;', '[{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-1.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-2.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-3.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-4.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-5.jpg\"},{\"image\":\"OwProduk-Kaos_Oblong_Pria_dan_Wanita-6.jpg\"}]'),
(23, 'Topi Rajut BUCKET HAT ', 80000, 6, '2020-10-13', '&lt;p&gt;Topi Rajut BUCKET HAT terbaru 2020&lt;/p&gt;\r\n\r\n&lt;p&gt;Cocok untuk liburan kemana mana 100 % handmade Nyaman digunakan dimana saja. lembut dan tidak panas. cocok digunakan untuk berlibur dan 100 % Hand made&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Material Bahan : Polyster Ukuran :&lt;/li&gt;\r\n &lt;li&gt;All Size Varian Warna :&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Coklat-Hitam&lt;/p&gt;\r\n\r\n&lt;p&gt;Hitam-Coklat&lt;/p&gt;\r\n\r\n&lt;p&gt;Regae&lt;/p&gt;\r\n\r\n&lt;p&gt;One Piece&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Harga : 80.000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#KerajinanTangan #Bucket #TopiBucket #HandMade #TopiRajut #Topi #TopiMurah #TopiHits #Regae # Onepiece&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-1.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-2.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-3.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-4.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-5.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-6.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-7.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-8.jpg\"},{\"image\":\"OwProduk-Topi_Rajut_BUCKET_HAT_-9.jpg\"}]'),
(24, 'Sandal Jepit Wanita', 32500, 1, '2020-10-13', '&lt;p&gt;Sandal Jepit Wanita Kanan Kiri Terbaru 2020&lt;/p&gt;\r\n\r\n&lt;p&gt;Sandal wanita Kiri Kanan terbuat dari bahan paylon sehingga ramah lingkungan, desain trendi dan awet . Cocok dan nyaman digunakan dimana saja baik saat santai maupun aktivitas sehari hari. yuk beli Ledies :&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Material : Paylon&lt;/li&gt;\r\n &lt;li&gt;Berat : 0.6 kg&lt;/li&gt;\r\n &lt;li&gt;Warna : Toska, Pink, Krem, Ungu.&lt;/li&gt;\r\n &lt;li&gt;Ukuran : 36, 37, 38, 39, 40&lt;/li&gt;\r\n &lt;li&gt;Panduan Ukuran :&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Size 36 = Panjang 22 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 37 = Panjang: 22.5 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 38 = Panjang: 23 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 39 = Panjang: 23.5 cm&lt;/p&gt;\r\n\r\n&lt;p&gt;Size 40 = Panjang: 24 cm&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Harga = 32.500&lt;/li&gt;\r\n &lt;li&gt;Min Pembelian 2 Buah diskon 2 rb&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#sandal #kanankiri #sandalwanita #sandalterbatu2020 #terbaru2020 #sandaltrendi #trending #viral #wanita #perempuan #sendal #sepatu #karet&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Sandal_Jepit_Wanita-1.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-2.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-3.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-4.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-5.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-6.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-7.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-8.jpg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-9.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-10.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-11.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-12.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-13.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-14.jpeg\"},{\"image\":\"OwProduk-Sandal_Jepit_Wanita-15.jpeg\"}]'),
(25, 'Masker Merah Putih HUT RI 75 ', 9000, 5, '2020-10-13', '&lt;p&gt;Masker Merah Putih HUT RI 75&lt;/p&gt;\r\n\r\n&lt;p&gt;Menjual Masker Merah Putih Spesifikasi :&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Bahan : Kain&lt;/li&gt;\r\n &lt;li&gt;Ukuran : All-SIze&lt;/li&gt;\r\n &lt;li&gt;Cocok digunakan ketika upacara peringatan HUT RI ke 75 dan menjaga agar tetap sehat selama pandemi berlangsung&lt;/li&gt;\r\n &lt;li&gt;Harga : 9.000&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;#Masker #MaskerHUTRI #MaskerMerahPutih #BenderaMerahPutih #Bendera #MerahPutih #HUTRI #HUTRI75 #Onlywall&lt;/p&gt;\r\n', '[{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-1.jpeg\"},{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-2.jpeg\"},{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-3.jpeg\"},{\"image\":\"OwProduk-Masker_Merah_Putih_HUT_RI_75_-4.jpeg\"}]');

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
(5, 'Tes'),
(6, 'Topi');

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
(4, 'nassabiq', 'nasirudinsabiq@gmail.com', 'OwAkun-nassabiq.jpg', '$2y$10$kzhaE9dGyPCVktAFz6yt6OO91JLZ8dvYhlfgRiXq4q5fKqzaqo9r.', 1, 1, '2020-10-04', '2020-10-09'),
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
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `artikel_post`
--
ALTER TABLE `artikel_post`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
