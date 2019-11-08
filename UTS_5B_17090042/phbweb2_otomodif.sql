-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 05:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phbweb2_otomodif`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `id_kat` int(10) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `spesifikasi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` tinyint(1) NOT NULL,
  `status` enum('Ready','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kat`, `nama_barang`, `spesifikasi`, `gambar`, `harga`, `stok`, `status`) VALUES
(1, 1, 'EK Chain | NX Ring Seal Chain 525ZVX3', '<p>[Spesifikasi]</p><p>Warna: Hitam / Hitam<br />Rantai segel<br />NXRing<br />Ukuran: 525<br />Volume Pemindahan Engine yang Didukung: Hingga -1300cc<br />dengan HolePlateSpec.<br />JointType: MLJ (CrimpType)<br />Rantai Bertulang<br />Untuk Volume Pemindahan Engine Besar<br />Ringan<br />Rentang hidup yang tinggi<br />Daya tahan tinggi</p><p>[Deskripsi]</p><p>Diam-diam berbaur dengan Mesin, ZV-X3Seri yang terkait dengan kendaraan Volume Pemindahan LargeEngine yang belum pernah dilakukan sebelumnya. Lineup &quot;Hitam &amp; Hitam&quot;!<br /><br />NXRing EK sendiri menyadari daya tahan dan penghematan berat yang lebih tinggi daripada QXRing.<br />Selain itu, dengan mengubah bentuk Seal, kami mencapai kekuatan tinggi Chain.<br /><br />[Fitur]<br />&middot; Bentuk ModelPlate Baru diadopsi untuk Plat<br />? Kekakuan terhadap kekuatan tarik ditingkatkan dibandingkan dengan ZVX Series konvensional<br />&middot; Busing padat untuk memastikan umur panjang<br />&middot; Daya tahan tinggi Rol padat<br />&middot; Pin crimp empat arah<br />&middot; GoldPlate Khusus<br />Adopsi lubang Plat bagian dalam untuk pengurangan berat<br />&middot; PTFEGrease khusus sangat baik dalam adhesi dan berkontribusi terhadap peningkatan ketahanan aus<br /><br />ZVX 3: Kualitas tinggi, kekuatan tinggi, daya tahan tinggi, ringan NXRingChain. Volume Pemindahan Mesin Besar, rantai NXSeal menyadari kekuatan tinggi, daya tahan tinggi, ringan sesuai dengan mesin daya tinggi.</p><p>[Catatan]</p><p>* Rantai pabrik bukan nomor tautan asli dan Anda perlu menyesuaikannya sendiri.<br />* Lapisan hitam pada pelat luar dan dalam dapat terkelupas karena gangguan pada benda keras.<br />* Permukaan yang bersentuhan dengan sproket pelat bagian dalam tidak dicat hitam.<br />* Ada kemungkinan bahwa warna dapat hilang dengan menggunakan rantai pemrosesan pin roller black.</p>', '1.PNG', 2553803, 9, 'Ready'),
(2, 1, 'DI | Vxserieschain 428 VX Silver Crimp (ZJ)', '<p>[Spesifikasi]</p><p>[Rincian]<br />Jumlah Tautan: 92<br />Ukuran rantai: 428<br />Warna: Perak<br />Tipe Bersama: ZJ ? Crimp [Direkomendasikan Pabrikan]</p><p>[Deskripsi]</p><p><br />LightRidingChain membawa perasaan operasi yang ringan<br />Naik lampu &quot;LightRiding&quot; Anda dapat menikmati, X-Ring yang diadopsi, Rantai Standar berkinerja tinggi berkualitas tinggi dari sekarang<br /><br /><br />? Fitur 1: Kekakuan tinggi memungkinkan cahaya berjalan<br /><br />[Apa yang kaku]<br />Kinerja operasi Rantai tidak ditentukan oleh kekuatan putus tetapi oleh kekakuan.<br />Kekakuan adalah pengaruh Rantai pada operabilitas Mesin &quot;distorsi&quot; &quot;Defleksi&quot; Ini adalah indikator yang menunjukkan nilai kontrol.<br />Semakin tinggi nilai kekakuan, semakin sedikit deformasi Rantai, semakin baik respon, percepatan dan penanganan.<br />Ketika bertukar untuk Chain yang kaku, Response for Rider&#39;s operation secara dramatis meningkatkan dan merealisasikan penanganan cahaya dan perasaan akselerasi langsung.<br /><br /><br />? Fitur 2: Umur layanan panjang<br />Kehidupan wear yang luar biasa dengan adopsi X-Ring of DID patent, terealisasi 1,4 kali lebih lama daripada OEM O-ring Chain.<br /><br /><br />? Fitur 3: Gesekan Rendah<br />XRing paten DID memiliki bentuknya sendiri dan memberikan pengurangan 50% pada hambatan geser, kelancaran dan peningkatan ekonomi bahan bakar dibandingkan dengan Rantai O-ring yang setara dengan OEM.</p><p>&nbsp;</p>', '2.PNG', 1313055, 10, 'Ready'),
(3, 1, 'PLO | Rantai PR 420', '<p>[Spesifikasi]</p><p>MATERI: Baja<br />Ukuran: 420<br />Nomor tautan rantai: 104L<br />Volume Pemindahan Mesin yang Diterapkan: 50cc - 110cc<br />Rantai Non-seal<br />Dengan sambungan Klip</p><p>[Deskripsi]</p><p>Ini adalah Rantai bisnis yang unggul dalam kinerja Biaya.<br />Ini adalah rantai yang tidak disegel menggunakan sambungan Klip.<br />Sambungan klip dilampirkan sebagai standar.<br />UNTUK JEPANG MODEL Terkenal ChainManufacturer Karena kami telah mendapatkan kualitas dan kualitas yang sama, &quot;PR CHAINS&quot; silakan gunakan!</p>', '3.PNG', 232890, 1, 'Ready'),
(4, 1, 'EK Chain | Qxring Seal Chain 530MVXZ2', '<p>[Spesifikasi]</p><p>Warna merah<br />Rantai segel<br />QXRing<br />Ukuran: 530<br />JointType: MLJ (CrimpType)<br />Termasuk Bagian :: Joint</p><p>[Deskripsi]</p><p>Rantai penggerak Enuma MVXZ2 berwarna adalah penangkap mata yang nyata pada sepeda motor Anda.<br />Desain luar biasa dan fitur teknis berarti mengurangi keausan dan hingga 17 kali umur pemakaian lebih lama dibandingkan dengan rantai standar.<br />Misalnya, teknologi Quadra-X-Ring yang sangat baik.<br />Segel berbentuk X dari rantai ini memastikan penyegelan yang lebih baik dan mengurangi gesekan.<br /><br />[Fitur secara rinci]<br />? Desain yang dikuatkan secara khusus dan berjalan lancar<br />? Kekuatan tarik yang besar<br />? Teknologi Quadra-X dengan pemeliharaan rendah<br />? Pra-pelumasan berkualitas tinggi untuk pelumasan tahan lama<br />? Pelat bagian dalam berlubang menghemat berat, mengurangi risiko kerusakan jika terjadi kelebihan beban dan memberikan pembersihan diri yang lebih baik<br />? Perubahan rantai cepat<br />? Rantai dilengkapi dengan tautan tautan paku keling<br />? Kualitas buatan Jepang</p><p>[Catatan]</p><p>* Rantai pabrik bukan nomor tautan asli dan Anda perlu menyesuaikannya sendiri.<br />* Untuk barang-barang impor, tanggal pengiriman mungkin ditunda. Harap diperingatkan.<br />* Buku instruksi akan berbahasa Inggris.<br />* Untuk rantai ini, adalah ide yang baik untuk membeli tautan master enuma sekrup-jenis yang dipatenkan.<br />* Ini menghemat waktu untuk memukau rantai Anda dengan alat khusus.</p>', '4.PNG', 2943075, 10, 'Ready'),
(5, 1, 'MINIMOTO | Rantai Racing SFR 428HV-O-98L', '<p>[Spesifikasi]</p><p>[Ukuran Rantai] 428<br />[Nomor LINK] 98L<br />[Termasuk Bagian:] Pin bersama<br />[Spec.] Paket berisi</p><p>[Deskripsi]</p><p>428HV-O-98L (Pin sendi termasuk) Ini adalah daya tahan NickelChain yang luar biasa.</p>', '5.PNG', 590003, 2, 'Ready'),
(6, 1, 'DID | Vxserieschain 520 VX 3 Perak [Crimp (ZJ) Bersama Terlampir]', '<p>[Spesifikasi]</p><p>Warna: Perak<br />Ukuran rantai: 520<br />ChainNo: 520VX3<br />JointType: Crimp (ZJ) Bersama [Direkomendasikan Pabrikan]</p><p>[Deskripsi]</p><p>LightRidingChain membawa perasaan operasi yang ringan<br />Naik lampu &quot;LightRiding&quot; Anda dapat menikmati, X-Ring yang diadopsi, Rantai Standar berkinerja tinggi berkualitas tinggi dari sekarang<br /><br /><br />? Fitur 1: Kekakuan tinggi memungkinkan cahaya berjalan<br /><br />[Apa yang kaku]<br />Kinerja operasi Rantai tidak ditentukan oleh kekuatan putus tetapi oleh kekakuan.<br />Kekakuan adalah pengaruh Rantai pada operabilitas Mesin &quot;distorsi&quot; &quot;Defleksi&quot; Ini adalah indikator yang menunjukkan nilai kontrol.<br />Semakin tinggi nilai kekakuan, semakin sedikit deformasi Rantai, semakin baik respon, percepatan dan penanganan.<br />Ketika bertukar untuk Chain yang kaku, Response for Rider&#39;s operation secara dramatis meningkatkan dan merealisasikan penanganan cahaya dan perasaan akselerasi langsung.<br /><br /><br />? Fitur 2: Umur layanan panjang<br />Kehidupan wear yang luar biasa dengan adopsi X-Ring of DID patent, terealisasi 1,4 kali lebih lama daripada OEM O-ring Chain.<br /><br /><br />? Fitur 3: Gesekan Rendah<br />XRing paten DID memiliki bentuknya sendiri dan memberikan pengurangan 50% pada hambatan geser, kelancaran dan peningkatan ekonomi bahan bakar dibandingkan dengan Rantai O-ring yang setara dengan OEM.</p><p>&nbsp;</p><p>[Catatan]</p><p>* Jumlah tautan yang sesuai adalah jumlah tautan dalam kasus mobil normal penuh. Harap perhatikan bahwa jumlah tautan yang sesuai mungkin berbeda jika Anda mengubah jumlah sprockets atau custom.<br />* Alat khusus diperlukan untuk instalasi.</p>', '6.PNG', 797039, 6, 'Ready'),
(7, 1, 'DID | Erserieschain 520 ERVT Gold [Crimp (ZJ) Bersama Terlampir]', '<p>[Spesifikasi]</p><p>Warna: Emas<br />Ukuran rantai: 520<br />ChainNo: 520ERVT<br />JointType: Crimp (ZJ) Bersama [Direkomendasikan Pabrikan]</p><p>[Deskripsi]</p><p>Perasaan operasi ringan, kinerja stabil dalam penggunaan jangka panjang<br /><br />? Fitur 1: Rantai segel ringan khusus untuk Off-road<br />Performa mantap dengan perasaan operasi ringan, Operasi ringan terasa unik untuk rantai Seal dan ketahanan abrasi yang tinggi menunjukkan kinerja yang sangat baik di Enduro dan tempat-tempat lain, dan MOTARD terus-menerus mempercepat dan memperlambat bahkan dengan daya tahan tinggi. Kami akan menunjukkan.<br /><br />? Fitur 2: Klasik balap jalan &quot;X-Ring&quot; Diadopsi untuk Off-road<br />X-Ring dari paten DID mencegah penghilangan gemuk pada empat SealPoints dan menghasilkan gesekan rendah sekitar 50% dibandingkan dengan O-Ring. (Semua data dibandingkan dengan perusahaan DID)<br /><br />? Fitur 3: Umur pakai dengan penempaan dingin Adopsi semak padat UP<br />Bush dengan kekakuan tinggi dengan permukaan yang mulus dan sirkularitas yang sangat baik. Penyesuaian permukaan kontak antara Pin &middot; Bush dan Grease khusus yang dikembangkan menahan keausan pin yang merupakan penyebab perpanjangan Rantai, Masa pakai telah meningkat sebesar 1,2-4 kali dibandingkan dengan konvensional mengetik.</p><p>&nbsp;</p>', '7.PNG', 797039, 5, 'Ready'),
(8, 1, 'EK Chain | Qxring Seal Chain 520MVXZ2 [571032]', '<p>[Spesifikasi]</p><p>Jumlah Tautan: 120<br />Warna biru<br />Rantai segel<br />QXRing<br />Ukuran: 520<br />JointType: MLJ (CrimpType)<br />Termasuk Bagian :: Joint</p><p>[Deskripsi]</p><p>Rantai penggerak Enuma MVXZ2 berwarna adalah penangkap mata yang nyata pada sepeda motor Anda.<br />Desain luar biasa dan fitur teknis berarti mengurangi keausan dan hingga 17 kali umur pemakaian lebih lama dibandingkan dengan rantai standar.<br />Misalnya, teknologi Quadra-X-Ring yang sangat baik.<br />Segel berbentuk X dari rantai ini memastikan penyegelan yang lebih baik dan mengurangi gesekan.<br /><br />[Fitur secara rinci]<br />? Desain yang dikuatkan secara khusus dan berjalan lancar<br />? Kekuatan tarik yang besar<br />? Teknologi Quadra-X dengan pemeliharaan rendah<br />? Pra-pelumasan berkualitas tinggi untuk pelumasan tahan lama<br />? Pelat bagian dalam berlubang menghemat berat, mengurangi risiko kerusakan jika terjadi kelebihan beban dan memberikan pembersihan diri yang lebih baik<br />? Perubahan rantai cepat<br />? Rantai dilengkapi dengan tautan tautan paku keling<br />? Kualitas buatan Jepang</p><p>[Catatan]</p><p>* Rantai pabrik bukan nomor tautan asli dan Anda perlu menyesuaikannya sendiri.<br />* Untuk barang-barang impor, tanggal pengiriman mungkin ditunda. Harap diperingatkan.<br />* Buku instruksi akan berbahasa Inggris.<br />* Untuk rantai ini, adalah ide yang baik untuk membeli tautan master enuma sekrup-jenis yang dipatenkan.<br />* Ini menghemat waktu untuk memukau rantai Anda dengan alat khusus.</p><p>&nbsp;</p>', '8.PNG', 2482760, 3, 'Ready'),
(9, 3, 'EASYRIDERS | [Item Layak Untuk Outletsale] BAR FALLAL [Spesial]', '<p>[Spesifikasi]</p><p>dengan Dent<br />Warna hitam<br />Bahan: Stainless Steel Black. Finishing coat<br />Dengan 1 inci&Phi; Lesung pipi<br />Ukuran: Lebar 650mm X Panjang 180mm X Tinggi 50mm X Lebar Pemasangan 145mm</p><p>[Deskripsi]</p><p>NAPS-sama Asli peluru ke-4 &quot;JATUH (dekorasi) BAR &quot;Muncul.<br />Selain bentuk standar yang mudah ditandingi untuk kendaraan apa pun, kilau cantik adalah item dekorasi peringkat teratas.</p><p>[Catatan]</p><p>* Ada kasus di mana ada beberapa goresan, kotoran, dll. dalam paket untuk produk target penjualan outlet.<br />* Ada sejumlah item yang terbatas untuk penjualan outlet. Tidak dapat membeli barang pada saat barang target terjual habis.<br />* Isi dari penjualan outlet dapat berubah tanpa pemberitahuan.<br /><br />* Hati-hati saat memindahkan Riser, S / W Box, Holder dll. sementara memperbaiki itu akan merusak permukaan yang dicat.<br />* Jika stok pabrikan hilang, maka akan diterima di urutan belakang.<br />Harap pahami bahwa pengiriman mungkin membutuhkan waktu lebih dari satu bulan hingga pengiriman ke beberapa produk.<br />* Harap perhatikan sebelumnya bahwa pembatalan dan / atau pengembalian produk ini tidak dapat diterima setelah pesanan telah ditempatkan.</p><p>&nbsp;</p>', '12.PNG', 3747513, 10, 'Ready'),
(10, 3, 'EASYRIDERS | Super Bar Without Dents', '<p>[Spesifikasi]</p><p>Material:Made by Steel<br />Finish:BlackPowder coat finish<br />Size:1 inch&Phi;, width 750mmX depth 130mmX height 85mmX mounting width 150mm</p><p>[Deskripsi]</p><p>An excellent 1 pc that can be recommended for most Custom-styles!<br />Bobber, Free Scauper, ClubMotorcycleStyle, Dirt series, etc.!</p><p>[Catatan]</p><p>* HD&#39;82y-dent for wiring escape (dimple) Is not attached.<br />* It is a general purpose item.<br />* Processing may be required depending on the installation method.<br />* Extension of various cables &middot; wiring etc. may be necessary.<br />* Installation may not be possible depending on the combination of vehicle type, tank and riser.<br />* Extension of various wires/harness etc. may be necessary along with handle exchange.</p><p>&nbsp;</p>', '13.PNG', 1853704, 4, 'Ready'),
(11, 3, 'AC Schnitzer | Handlebar Kit Superbike', '<p>[Spesifikasi]</p><p>Warna hitam<br />Ukuran: Sekitar 65mmUp dari OEM, sekitar 40mm sebelumnya, lebar sekitar 30mm<br />Isi Produk: Stang, Ujung Stang, Selang rem</p><p>[Deskripsi]</p><p>Dengan mengganti Handlebar, itu akan menjadi sekitar 65mm ke atas, sekitar 40mm sebelumnya, sekitar 30mm Lebar, dan efek yang sama dengan kit Handlebar Up dapat diperoleh.<br />Kit memiliki semua bagian yang diperlukan.</p><p>[Catatan]</p><p>* Spesifikasi mobil ABS saja.</p><p>&nbsp;</p>', '14.PNG', 10727020, 2, 'Ready'),
(12, 3, 'Neofactory | Handlebar Zpipe 12 inci', '<p>[Spesifikasi]</p><p>1Inch bar<br />MATERI: Baja<br />Isi: HandlebarX1 pc<br /><br />[Ukuran]<br />? Lebar penuh: sekitar 710mm<br />&middot; Tinggi: sekitar 280mm<br />? Tarik kembali: sekitar 105mm<br />? En Dry&#39;s: sekitar 265mm<br />? Lebar yang bisa dipasang: sekitar 180mm</p><p>[Deskripsi]</p><p>Anda juga dapat menghubungi Robot Handlebar Bar.<br />Ini adalah klasik KCustom.</p><p>[Catatan]</p><p>* Silakan gunakan No Hike hingga model -82, dan gunakan Hike setelah itu.<br />* Saat menggunakannya untuk model adopsi throttle yang dikontrol secara elektronik, pemrosesan menjadi perlu.<br />* Gambar dengan sentuhan juga digunakan tanpa sentuhan.<br />* Harap konfirmasi lebar yang dapat diinstal.<br />* Heki adalah pelarian kabel.</p><p>&nbsp;</p>', '15.PNG', 2211176, 9, 'Ready'),
(13, 2, 'K-PIT | Front Fork Seal Set', '<p>[Spesifikasi]</p><p>Quantity:Quantity:1 Set (Front fork1 pc)</p><p>[Deskripsi]</p><p>Grom, MONKEY125 for Front Fork!<br />All-in-one package including Dust Seal, O-rings etc. required for Front fork Maintenance and Tuning.<br />Front set is a seal set that comes with a set of new seals useful for disassembly.<br />If oil leakage or bleeding occurs, replacement with a new one is required.</p><p>[Catatan]</p><p>* Two sets are required for one car.</p><p>&nbsp;</p>', '9.PNG', 432571, 8, 'Ready'),
(14, 2, 'HYPERPRO | Front Spring', '<p>[Spesifikasi]</p><p>FrontData:Oil count # 5/oil level 130mm<br />Spring Type:ConstantGod of thunderColor:Gray<br />Remarks:2L Oil Included</p><p>[Deskripsi]</p><p>Hyper pro proprietary design &quot;ConstantGod of thunderColor:Suspension spring with Gray.<br />The Spring rate constantly changes following the movement of Suspension, maintaining a state that it is not too soft and not too hard, it also has the power to step on even with high loading Cornering and sudden Brake.<br /><br />? Corner Corrects the change of Caster at the time of Breaking in front so as to make it easier for you to move to the next movement.It absorbs the fine Gap during the caring and eliminates the vibration that will get in the way of the rider.<br />? Unlike normal Spring, there is no constant Spring rate, so it will not resonate.<br />? Shot processing is applied to the Spring wound by a machine tool controlled by Computer to remove the fine Wound of the surface which leads to performance degradation.In addition, performance is checked by Tester one by one after completion.<br />? Hyper pro company home base Netherlands, Hyper pro Spring is fitted to all emergency Motorcycle vehicles.</p>', '100.PNG', 3739863, 3, 'Ready'),
(15, 2, 'HYPERPRO | Lowdown Rear Spring', '<p>[Spesifikasi]</p><p>Lowdown type:Approx. -35mm<br />Spring Type:ConstantGod of thunderColor:Gray</p><p>[Deskripsi]</p><p>The lowdown spring unique to Hyper pro that reduces the height by changing the Rate and adjusting the oil level without changing the free length of Spring.<br />Vehicle weight only (1G) In the state of Large do not sink down, boarding state (1G&#39;) Because it is designed to firmly lowdown, it is not necessary to shorten Side Stand.</p><p>[Catatan]</p><p>* In the case of lowdown of 30mm or more, short side stands may be required depending on the body condition.If you want to adjust the preload, please adjust while adjusting to the lowdown amount that side stand can use.<br />* When using the side stand, please stop at the first speed in a flat place. (Because the lowdown causes the car body to wake up when it is normal)<br />* After installation, the body balance will change greatly.Please be sure to carry out setting before and after setting.<br />* Low-down parts are designated parts, so there is no need to change the structure.</p>', '11.PNG', 4036271, 10, 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `quantity` tinyint(2) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_pesanan`, `id_barang`, `quantity`, `harga`) VALUES
(2, 6, 1, 2900000),
(2, 5, 1, 12700000),
(3, 13, 1, 2700000),
(3, 1, 1, 7800000),
(3, 11, 1, 10100000),
(4, 7, 2, 6134000),
(4, 12, 1, 7250000),
(8, 10, 1, 4800000),
(8, 5, 1, 12700000),
(9, 14, 1, 3739863),
(9, 8, 1, 2482760);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(10) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `status` enum('Publish','Unpublish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `kategori`, `status`) VALUES
(1, 'Rantai', 'Publish'),
(2, 'Shockbreaker', 'Publish'),
(3, 'Stang', 'Publish'),
(4, 'Lampu', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `id_konf` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nama_akun` varchar(150) NOT NULL,
  `tanggal_transfer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`id_konf`, `id_pesanan`, `no_rek`, `nama_akun`, `tanggal_transfer`) VALUES
(1, 2, '0008888', 'Jeong', '2016-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(10) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `tarif` int(10) NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`, `tarif`, `status`) VALUES
(1, 'Jakarta', 6000, 'Aktif'),
(2, 'Bandung', 8000, 'Aktif'),
(3, 'Surabaya', 11000, 'Aktif'),
(4, 'Semarang', 9000, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_kota` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_kota`, `id_user`, `nama_penerima`, `nomor_telepon`, `alamat`, `tanggal_pemesanan`, `status`) VALUES
(2, 2, 2, 'Jeong', '00000', 'Jl. XXXXX', '2016-10-08 06:11:24', 1),
(3, 3, 6, 'Lee', '0000', 'Jl. aaaa', '2016-10-08 10:48:45', 2),
(4, 1, 6, 'Lee', '0000', 'Jl. AAA', '2016-10-08 12:01:55', 2),
(8, 1, 8, 'ismi', '09283498', 'tega', '2019-11-06 18:54:59', 0),
(9, 1, 9, 'ismi', '029834', 'ismi', '2019-11-08 14:58:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `level`, `nama`, `email`, `alamat`, `notelp`, `password`, `status`) VALUES
(2, 'SuperAdmin', 'Admin', 'admin@otomodif.com', 'Tegal', '085798000773', '1b3231655cebb7a1f783eddf27d254ca', 'Aktif'),
(6, 'Customer', 'Customer', 'cust@otomodif.com', 'Tegal', '08224027774', '5f4dcc3b5aa765d61d8327deb882cf99', 'Aktif'),
(8, 'Customer', 'member', 'member@gmail.com', 'tegal', '08234878', 'aa08769cdcb26674c6706093503ff0a3', 'Aktif'),
(9, 'Customer', 'ismi', 'ismi@gmail.com', 'tegal', '09234857824', '67f8ae13ab63364777f9d721bcb5bce3', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_konf`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `id_konf` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `kategori` (`id_kat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `pesanan_detail_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_detail_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
