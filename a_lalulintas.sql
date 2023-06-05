-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:45 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_lalulintas`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kat` int(3) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` varchar(9) NOT NULL,
  `isi` text NOT NULL,
  `dilihat` int(5) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kat`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`) VALUES
(1, 1, 'PERESMIAN KANTOR SEMENTARA POLRES PESISIR BARAT', '05/06/2023', '06:11 AM', '<p>Kadis Kominfotiksan, Suryadi, S.IP., M.M., menginformasikan bahwa kegiatan peresmian kantor sementara Polisi Resor (Polres) Pesisir Barat dipimpin langsung oleh Kapolda (Kepala Polisi Daerah) Lampung, Irjen Pol Dr. Akhmad Wiyagus, S.IK., M.Si., M.M., berlokasi di Jl. Kuala Stabas No. 1, Krui, Kec. Pesisir Tengah. Peresmian kantor sementara Polres Pesisir Barat ditandai dengan penandatanganan surat keputusan dan pembunyian bel oleh Kapolda Lampung. Hadirnya kantor sementara Polres Pesisir Barat ini merupakan salah satu wujud nyata dari Pemerintah Pusat dalam merealisasikan program prioritas Kepolisian Republik Indonesia (POLRI), yaitu transformasi menuju POLRI yang presisi dan diakselerasikan melalui program quick wins presisi guna mendukung atau menunjang tugas pokok POLRI sebagai pelindung, pengayom dan pelayan masyarakat serta penegakan hukum yang berlandaskan keadilan.</p>\r\n\r\n<p>Hadir dalam kegiatan tersebut, Wakapolda Lampung, Brigjen Pol. Umar Efendi, beserta pejabat utama Polda Lampung; Ketua Bhayangkari Lampung, Ges Akhmad Wiyagus; Bupati Pesisir Barat, Dr. Drs. Agus Istiqlal, S.H., M.H.; Wakil Bupati Pesisir Barat, A. Zulqoini Syarif, S.H.; Plt. Sekda Pesisir Barat, Ir. Jalaludin, MP.; Ketua DPRD Pesisir Barat, Agus Cik, beserta jajaran; Ketua DPRD Lampung Barat, Edi Novial, S. Kom., beserta jajaran; Pj. Bupati Lampung Barat, Drs. H Nukman M.M.; Kapolres se-Lampung; serta tokoh masyarakat, adat dan agama dari Pesisir Barat-Lampung Barat.</p>\r\n\r\n<p>Dalam amantnya, Kapolda Lampung, menyampaikan ucapan terima kasih dan penghargaan setinggi-tingginya kepada Bupati Pesisir Barat serta stakeholder terkait yang telah memberikan dukungan, baik secara moril maupun materil atas berdirinya kantor sementara Polres Pesisir Barat. Beliau menambahkan bahwa, hal ini merupakan wujud kemitraan yang harmonis antara Pemerintah Daerah (Provinsi Lampung dan Kabupaten Pesisir Barat) dengan Polda Lampung dalam rangka meningkatkan pelayanan kepada masyarakat guna memelihara dan menciptakan situasi KAMTIBMAS (Keamanan dan Ketertiban Masyarakat) yang kondusif di wilayah Provinsi Lampung, khususnya Kabupaten Pesisir Barat.&nbsp;</p>\r\n\r\n<p>&quot;Kepada oara Kapolres dan personel yang bertugas di Polres Pesisir Barat, laksanakanlah tgas secara profesional serta aktif untuk turun ke lapangan dalam menghadapi keluhan di masyarakat, menyerap aspirasi dan melayani masyarakat. Yang terpenting, hindari segala macam bentuk pelanggaran yang dapat menurunkan citra POLRI di masyarakat&quot;, imbuh Kapolda Lampung.&nbsp;</p>\r\n', 0, '05062023061117.jpg'),
(2, 1, 'PENGAJIAN RUTIN BULANAN BKMT KABUPATEN PESISIR BAR', '05/06/2023', '06:16 AM', '<p>Kadis Kominfotiksan Kabupaten Pesisir Barat, Suryadi, S.IP., M.M. menginformasikan bahwa, Ketua Umum Badan Kontak Majelis Ta&rsquo;lim (BKMT) Kabupaten Pesisir Barat, Hj. Septi Istiqlal, menghadiri kegiatan Pengajian Rutin Bulanan BKMT dengan penceramah Ustadz Bahirman Hamka dan pemberian santunan kepada anak yatim dan kaun dhuafa bertempat di Masjid Jami&#39;, Pekon Lintik, Kecamatan Krui Selatan, Kabupaten Pesisir Barat.</p>\r\n\r\n<p>Kegiatan ini rutin dilaksanakan setiap bulannya oleh BKMT Pesisir Barat dengan cara berkeliling ke Masjid-Masjid diwilayah Kabupaten Pesisir Barat yang bertujuan untuk bersilaturahmi sekaligus meningkatkan keimanan, ketaqwaan dan kesadaran beragama dalam aspek wawasan dan pengetahuan dalam Agama Islam kepada lapisan masyarakat di wilayah Kabupaten Pesisir Barat.</p>\r\n\r\n<p>Turut hadir dalam pengajian tersebut, para Camat dan Peratin se-Kecamatan Krui Selatan; jajaran pengurus BKMT Kabupaten dan pengurus Kecamatan se-Kabupaten Pesisir Barat; dan lapisan masyarakat dari Kecamatan Lemong dan sekitarnya.</p>\r\n\r\n<p>Dalam sambutannya, Ketua Umum BKMT Pesisir Barat, Hj. Septi Istiqlal, menyampaikan apresiasi setinggi-tingginya kepada Ustadz dan para jama&#39;ah majelis taklim yang telah hadir dan mendukung kegiatan pengajian yang digelar oleh BKMT Pesisir Barat secara rutin dengan berkeliling di setiap masjid-masjid di wilayah Kabupaten Pesisir Barat setiap bulannya tersebut.</p>\r\n\r\n<p>&quot;Pengajian ini adalah kegiatan yang sangat berdampak positif untuk mengajak masyarakat memperdalam Islam-nya dan sekaligus menjadi wahana untuk bersilaturahmi&quot; ungkap Ketua BKMT</p>\r\n\r\n<p>Ketua BKMT juga menghimbau kepada masyarakat setempat untuk tidak pernah bosan dalam menghadiri kegiatan Majelis Taklim dan menyarankan untuk meminta kepada peratin atau camat setempat untuk mengadakan kegiatan-kegiatan keagamaan seperti ini secara mandiri.</p>\r\n\r\n<p>&quot;Karena kegiatan seperti ini (majelis taklim) sangat bermanfaat bagi kita semua (umat muslim), untuk itu, saya berharap, teruslah berusaha dan jangan pernah untuk mencari keridhon di jalan Allah SWT. Nantinya, para jama&#39;ah boleh mengadakan kegiatan Majelis Taklim secara mandiri, boleh juga minta kepada peratin atau camat-nya untuk mengadakan kegiatan Majelis Taklim&quot;, tambah Ketua BKMT</p>\r\n', 0, '05062023061647.jpg'),
(3, 1, 'Peduli lingkungan Polres Pesisir Barat bersihkan s', '05/06/2023', '06:18 AM', '<p>Polres Pesisir Barat peduli lingkungan dengan membersihkan sampah yang ada di pinggir pantai pasar mulya hingga pantai di villa desa, Sabtu sekira pukul 07.30 wib (03/06/2023).</p>\r\n\r\n<p>Kapolres Pesisir Barat AKBP ALSYAHENDRA, S.IK, M.H pimpin langsung kegiatan peduli lingkungan bersama para PJU dan personel Polres Pesisir Barat yaitu dengan cara menyisir pinggiran pantai Kuala hingga pantai di Villa desa pekon walur kecamatan Krui selatan.</p>\r\n\r\n<p>Kapolres menambahkan sampah anorganik yang sudah kita kumpulkan kemudian kita buang ke tempat pembuangan sampah, kegiatan ini bertujuan menciptakan lingkungan yang bersih sehingga pengunjung/wisatawan dapat nyaman dalam berlibur</p>\r\n\r\n<p>Kemudian kami juga mengajak bagi para pengunjung, pengusaha kuliner dan pengusaha penginapan untuk peduli dengan lingkungan,tidak membuang sampah sembarangan, siapkan kantong sampah sampah di tempat kuliner maupun hotel sehingga lingkungan bisa bebas dari sampah anorganik.</p>\r\n\r\n<p>Kegiatan ini bertujuan untuk Memberikan rasa aman dan nyaman kepada pengunjung pantai, Menjadikan Pantai Krui Bersih dari sampah Khususnya Sampah Anorganik dan memberikan contoh langsung kepada wisatawan Untuk peduli lingkungan.</p>\r\n', 0, '05062023061823.jpg'),
(4, 1, 'Jumat curhat Polres Pesisir Barat bersama Pengurus', '05/06/2023', '06:20 AM', '<p>&nbsp;Polres Pesisir Barat melaksanakan kegiatan Jum&#39;at Curhat bersama Pengurus POPB (Persatuan Ojek Pesisir Barat) di Pondok curhat Polres Pesisir Barat, Jum&#39;at sekira pukul 09.00 wib (02/06/2023).</p>\r\n\r\n<p>Kabag SDM Polres Pesisir Barat AKP ONO KARYONO, S.H,.M.H mewakili Kapolres Pesisir Barat AKBP ALSYAHENDRA, S.ik, M.H &nbsp;melaksanaan kegiatan Jumat Curhat tersebut dan dampingi oleh Kasat Binmas IPTU TOTOK TRI. W dan Kanit Lantas Polsek Pesisir Tengah AIPTU RULIS menampung keluh kesah POPB (Persatuan Ojek Pesisir Barat).</p>\r\n\r\n<p>Kegiatan Jumat curhat merupakan Program prioritas Kapolri yang dilaksanakan dari tingkat Polda, Polres hingga Polsek dan merupakan Program lanjutan Quick wins Presisi.</p>\r\n\r\n<p>Kegiatan Jumat Curhat Polres Pesisir Barat untuk menjalin Silaturahmi dan Menyampaikan Pesan Pesan Kamtibmas serta keluh kesah masyarakat Pesisir Barat.</p>\r\n\r\n<p>Adapun penyampaian SARPANI (55) ketua POPB ) Menyampaikan usulan di mohon agar,pihak polres dan polsek &nbsp;menertibkan kembali penggunaan helm &nbsp;terhadap masyarakat yang mengendarai kendaraan &nbsp;bermotor milik pribadi maupun menyewa milik losmen /penginapan.&nbsp;<br />\r\nKabag SDM Menangggapi penyampain Sarpani ketua POPB bahwa penggunaan helm merupakan kewajiban setiap orang yg mengendarai kendaan bermotor karena helm. Merupakan alat pelindung kepala &nbsp;jika terjadi kecelakaan yg bisacterjadi benturan kepala terhadap benda keras. Dan selanjutnya polres pesisir barat &nbsp;memberikan pemahaman terhadap wisatawan pemilik losmen / penginapan yg menyediakan jasa sewa motor terhadap wisatawan untuk menyediakan helm.</p>\r\n\r\n<p>Bendahara POPB MAWARDI(50) &nbsp;menyampaikan usulan agar di dukungan / arahan untuk pembentukan dana kas POPB sehingga bisa menunjang kemajuan organisasi POPB ke depannya.&nbsp;<br />\r\nKasat Binmas memberikan arahan terhadap sdr Mawardi selaku bendahara POPB bahwa Polres Pesisir Barat sangat mendukung POPB membentuk kas organisasi karena sangat membantu jika ada kebutuhan yg sangat penting seperti contoh ada anggota Ojek yg mengalami musibah / lakalantas saat menjalankan kegiatan, bisa membantu meringanhkan beban yg bersangkutan, bisa juga meningkatkan kesejahteraan keanggotaan POPB dgn jalan simpan pinjam dana &nbsp;kas ojek namun harus di kelola dengan benar Di tambahkan lagi bahwa rekan2 ojek yg sudah tergabung di POPB Harus bisa menjadi contoh warga yg lain dan menjaga kamtibmas.</p>\r\n\r\n<p><br />\r\nKemudian sekira pukul 09.30 wib kegiatan Jumat curhat di Pondok Curhat Polres Pesisir Barat telah selesai dan berjalan lancar serta kondusif.</p>\r\n', 0, '05062023062000.jpg'),
(5, 1, 'Polres Pesisir Barat melaksanakan upacara dalam ra', '05/06/2023', '06:20 AM', '<p>Polres Pesisir Barat menggelar upacara dalam rangka memperingati hari lahir Pancasila di mako Polres Pesisir Barat, Kamis pukul 07.00 wib (01/06/2023).</p>\r\n\r\n<p>Kapolres Pesisir Barat AKBP ALSYAHENDRA, S.IK, M.H memimpin langsung kegiatan upacara tersebut dan dihadiri oleh Para Pejabat Utama (PJU), personel polres Pesisir Barat dan personel polsek jajarannya.</p>\r\n\r\n<p>Dalam sambutannya Kapolres Pesisir Barat membacakan amanat dari PROF. DRS. KH. YUDIAN WAHYUDI, M.H menyampaikan &quot;seperti yang sudah kita ketahui &nbsp;bersama, bahwa &nbsp;hari ini tanggal &nbsp;1 &nbsp;juni &nbsp;merupakan salah satu hari bersejarah bagi bangsa indonesia, yang mana pada hari ini kita memperingati hari lahirnya pancasila, &nbsp;bung karno &nbsp;proklamator kemerdekaan bapak pendiri &nbsp;bangsa merenungkan dan merumuskan pancasila yang kemudian disahkan oleh ppki sebagai dasar negara &nbsp;dan mewariskan pancasila bagi bangsa dan negara, tema besar hari lahir pancasila th 2023 adalah gotong royong membangun peradaban dan pertumbuhan global, hari lahir pancasila ini jadi momentum untuk kita semua agar terus bersama bergotong royong untuk membangun peradaban dan memajukan ekonomi global, kami mengajak dimanapun kita berada untuk bersama-sama membumikan pancasila dan mengaktualisasikan nilai-nilai luhur pancasila dalam kehidupan bermasyarakat, berbangsa dan bernegara, pancasila bukan hanya lelah mempersatukan kita semua &nbsp;pancasila juga telah menjadi bintang penuntun ketika bangsa indonesia menghadapi tantangan dan ujian-ujian, dan ini sudah dibuktikan berkali-kali &nbsp;dalam perjalanan sejarah bagsa indonesia bahwa bangsa dan negara kita bisa tetap berdiri kokoh menjadi negara yang kuat karena kita semua sepakat untuk berlandaskan kepada pancasila, inilah tugas kita bersama tugas seluruh komponen bangsa, menjadikan pancasila sebagai ideologi yang bekerja, yang dirasakan kehadirannya dan dirasakan manfaatnya oleh seluruh tumpah darah indonesia, pancasila bukanlah hanya kata-kata yang terdapat dalam lembaran kertas atau terpampang di ruang kelas, pancasila adalah semangat dan &nbsp;jiwa bangsa indonesia yang harus tercermin dalam tindakan dan sikap kita sehari-hari.&nbsp;<br />\r\nMelalui peringatan hari &nbsp;lahir pancasila ini, &nbsp;semoga kita semua mampu menjadi warga negara dan masyarakat yang terus mengingatkan jati diri &nbsp;bangsa, tolong menolong dan bergotong royong untuk masa depan bangsa indonesia, &nbsp;marilah kita melangkah maju dengan semangat pancasila sebagai pedoman hidup kita&quot; Ujarnya.</p>\r\n\r\n<p>Kegiatan &nbsp;berlangsung hikmat dan berjalan lancar kondusif di lanjutkan dengan foto bersama seluruh personel yang hadir dalam upacara tersebut.</p>\r\n', 0, '05062023062051.jpg'),
(6, 1, 'Polres Pesisir Barat sambut baik kunjungan silatur', '05/06/2023', '06:23 AM', '<p>Wakapolres Pesisir Barat KOMPOL RAFLI YUSUF NUGRAHA, S.H,S.Ik,M.I.P mewakili Kapolres Pesisir Barat AKBP ALSYAHENDRA, S.IK, M.H menerima &nbsp;kunjungan dari dinas imigrasi provinsi Lampung di Mako Polres Pesisir Barat jalan Kuala Stabas Lingkungan Pasar Mulya Kel. Pasar Krui Kec.Pesisir Tengah Kab. pesisir Barat pada hari Selasa sekitar pukul 10.00 wib (25/05/2023).</p>\r\n\r\n<p>Wakapolres Pesisir Barat KOMPOL RAFLI YUSUF NUGRAHA, S.H,S.Ik,M.I.P didampingi oleh Kasat Intel Polres Pesisir Barat IPTU FERY YULIANSYAH, S. Sos dan Kasat Samapta Polres Pesisir Barat AKP FIRDAUS menyambut baik kedatangan Kabid perizinan dan informasi keimigrasian MIRZA, kasubid informasi keimigrasian NEWIN dan &nbsp;kasubid perizinan keimigrasian MAKMUM dari dinas imigrasi provinsi Lampung.</p>\r\n\r\n<p>Dalam kunjungan tersebut &nbsp;Membahas adanya rencana sinergitas antara polres Pesisir Barat dengan imigrasi untuk mendukung event WSL QS 5000 tahun 2023 yang akan berlangsung di tanjung setia dan rencana untuk bergabung dalam program satu atap antara Polri,imigrasi dan dinas Pariwisata demi kelancaran dan keamanan event tersebut.</p>\r\n\r\n<p>Kegiatan berjalan aman dan lancar kemudian dilanjutkan dengan sesi foto bersama menandakan telah selesai nya kunjungan &nbsp;silaturahmi tersebut pukul 11.00 wib.</p>\r\n', 0, '05062023062334.jpg'),
(7, 2, 'Pelaku Curanmor berhasil di amankan Sat Reskrim Po', '05/06/2023', '06:24 AM', '<p>Sat reskrim Polres Pesisir Barat Polda Lampung berhasil mengamankan pelaku curanmor yang terjadi di Pelabuhan Agung Pekon Marang Kecamatan Pesisir Selatan Kabupaten Pesisir Barat, pada hari Senin sekitar pukul 08.00 wib (22/05/2023).</p>\r\n\r\n<p>Petugas berhasil mengamankan pelaku ber inisial S (34) Alamat Pekon Sumber Agung Kec. Ngambur Kab. Pesisir Barat</p>\r\n\r\n<p>Hal itu dibenarkan oleh KASAT RESKRIM POLRES PESISIR BARAT IPTU RIKI NOPARIANSYAH, S.H,M.H mewakili Kapolres Pesisir Barat AKBP ALSYAHENDRA, S.IK, M.H saat dikonfirmasi,pada Selasa (23/05/23).</p>\r\n\r\n<p>Kejadian tersebut terjadi Pada hari Selasa 16 Mei 2023 pukul 08.00 wib saat pelapor memarkirkan sepeda motor honda BLADE tanpa body samping kiri kanan di pinggir pantai pelabuhan agung pekon marang kec. pesisir selatan kab. pesisir barat bersama saudara Sopiyan untuk pergi melaut dengan menggunakan perahu untuk mencari ikan.</p>\r\n\r\n<p>Kemudian Pada hari Senin tanggal 22 Mei 2023 sekira jam 08.00 wib, Sat Reskrim Polres Pesisir Barat yang dipimpin oleh AIPTU KADAR RAHMAN, SH bersama dengan team melakukan serangkaian penyelidikan, dan mendapatkan informasi bahwa berinisial S dikediamannya yang beralamat di pekon Sumber Agung kec. Ngambur kab. Pesisir barat. kemudian team langsung bergerak menuju lokasi Dan pelaku berhasil diamankan. Setelah dilakukan itrogasi, pelaku mengakui bahwa memang benar ia telah melakukan pencurian 1 (Satu) sepeda motor honda BLADE tanpa Body samping kiri dan kanan dengan nomor polisi B 3545 TBG, no. mesin : JBB1E1260871, No rangka : MH1JBB114AK268227 milik korban di pelabuhan agung pekon marang kec. Pesisir selatan. Selanjutnya &nbsp;pelaku di bawa ke Sat Reskrim Polres Pesisir Barat guna proses Penyidikan lebih lanjut.</p>\r\n\r\n<p>Barang bukti yang di amankan antara lain :<br />\r\n- 1 unit rangka sepeda motor honda BLADE tanpa Body samping kiri dan kanan, dan &nbsp;dengan nomor No rangka : MH1JBB114AK268227<br />\r\n- 1 (Satu) unit mesin sepeda motor honda BLADE no. mesin : JBB1E1260871 yang sudah dihapus<br />\r\n- 1 (satu) lembar STNK sepeda motor honda BLADE warna biru-silver dengan nomor polisi B 3545 TBG, no. mesin : JBB1E1260871, No rangka : MH1JBB114AK268227<br />\r\n- 1 (satu) buah BPKB sepeda motor honda BLADE warna biru-silver dengan nomor polisi B 3545 TBG, no. mesin : JBB1E1260871, No rangka : MH1JBB114AK268227</p>\r\n\r\n<p>Akibat perbuatannya pelaku dijerat Pasal 363 KUHP tentang Pencurian dengan Pemberatan dengan hukuman maksimal 7 tahun penjara.</p>\r\n', 0, '05062023062407.jpg'),
(8, 1, 'Kapolres Pesibar Dukung Penuh Kepariwisataan dan P', '05/06/2023', '06:25 AM', '<p>Pesisir Barat - Kepolisian resot (Polres) Pesisir Barat &nbsp;bersama Perhimpunan Hotel dan Restoran Indonesia - BPC Pesisir Barat mengadakan Pertemuan Rapat kordinasi Sekaligus Silahturahmi Bersama Kapolres Pesisir Barat beserta seluruh PJU Polres Pesisir Barat dan Seluruh pengurus PHRI Pesibar bertempat di Inna&#39;s Villa Desa, pekon way redak Kecamatan Krui selatan kabupaten Pesisir barat, Senin ( 22/05/2023)</p>\r\n\r\n<p>Dalam Sambutannya dan arahannya Kapolres Pesisir Barat, AKBP Alsyahendra, SIK, M.H. mengapresiasi kegiatan rakor ini, dan mengatakan bahwa rapat kordinasi bersama ini akan terus di lakukan dalam rangka menjalin komunikasi dalam hal keamanan, Pengawasan orang asing, patroli pengamanan di objek - objek wisata karena Pesisir Barat merupakan destinasi wisata yang banyak dikunjungi wisatawan lokal maupun wisman mancanegara baik liburan ataupun Berselancar/surfing dan bersinergi bersama antara pihak Hotel bersama kepolisian untuk memajukan Kepariwisataan Pesisir Barat karena perhotelan termasuk ujung tombak kepariwisataan setempat&quot; . Ujar Kapolres.</p>\r\n\r\n<p>dalam waktu dekat ini Pihak kepolisian juga akan akan merencanakan adanya polisi wisata sekaligus Beach Guard / Pengamanan pantai yang nantinya akan di tugaskan menjaga, mengayomi, Melindungi wisatawan lokal maupun mancanegara yang berkunjung dan berlibur di pesisir barat,&quot; Terang Kapolres.</p>\r\n\r\n<p>&quot;dalam dukungannya pada agenda Krui Pro 2023 ini Kejuaraan surfing internasional - WSL QS 5000 yang bertempat tanjung setia pesisir barat, pihak Polres Pesisir Barat juga berkordinasi dengan Banyak pihak mulai dari Internal kepolisian , Pemkab dan Stakeholder guna pengamanan dan sukses di gelarnya kejuaraan Surfing Internasional,&quot; Tambah Kapolres</p>\r\n\r\n<p>Dalam arahan kapolres, beliau juga meminta untuk &quot;Pemilik/managemant hotel dan restoran se pesisir barat &nbsp;wajib melaporkan kedatangan Warga negara asing yang tinggal di hotel/akomodasi agar dapat &nbsp;memonitoring,keamanan dan Kenyamanan Tamu asing dan Pengawasan dan tamu undangan, baik pada hari - hari biasa atau pada saat persiapan perhelatan kejuaraan surfing internasional,&quot; Jelas Kapolres.</p>\r\n\r\n<p>Sementara Bowo, Ketua PHRI beserta pengurus, pemilik hotel dan restoran se pesisir barat mengapresiasi Terbentuknya Polres, kami atas nama Perhimpunan Hotel &amp; Restoran Kabupaten Pesisir Barat berterimakasih kepada Kapolres Pesisir barat, Bahwasannya kapolres beserta jajarannya mengadakan giat rutin patroli penjagaan di seluruh destinasi wisata dan merespon dengan cepat untuk mencegah hal - hal yang tidak diinginkan baik keamanan masyarakat, giat &nbsp;Keamanan Pantai/wisatawan lokal maupun macanegara dan dekat dengan masyarakat di pesisir barat.</p>\r\n\r\n<p>Acara dilanjutkan dengan diskusi &amp; ramah tamah bersama, antara Seluruh PJU Polres pesibar dan Pengurus PHRI terkait dengan dunia kepariwisataan pesisir barat.<br />\r\nAcara selesai pukul 13.45 wib dilanjutkan dengan foto bersama Kapolres serta seluruh peserta yg hadir.</p>\r\n\r\n<p>Hadir dalam Acara imendampingi Kapolres Pesibar Beserta Seluruh PJU,<br />\r\nKabag Ops, AKP. Abdul Rasyid, S.H, MH. Kasat Reskrim, IPTU Riki Nopariansyah,S.H, M.H.<br />\r\nKasat Itelkam, Feri Yuliansyah, S.Sos,M.H. Kasat Lantas, IPTU Rudy Afriansyah Unyi, S.H. Kasat Res Narkoba, Jefri Saifullah, S.H,M.H. Kasat Bimas IPTU Totok tri w. Kasat Tahti, IPDA Hermanto Beserta Seluruh Pengurus PHRI, Ketua Hotel, Remon Lekatompessy. Bend, Reyndy. Ketua Promosi, Budaya dan Hub.Luar Negeri, A. Prisillia Patimahu. Ketua Litbang, SDM &amp; Sertifikasi, Yugo Prakoso. Dewan Penasehat Hj. Monalisa, kanjeng ibu, novita &amp; Zane dan tamu undangan yang hadir. (*).<br />\r\n(Humas pesisir barat)</p>\r\n', 0, '05062023062536.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar_kat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `gambar_kat`) VALUES
(1, 'INFORMASI', '05062023060930.jpg'),
(2, 'KRIMINAL', '05062023062255.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alias` text NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `tahun`, `nama`, `alias`, `alamat`, `isi`) VALUES
(1, '0823232724274', 'POLRES PESISIR  BARAT', 'polrespesisirbarat@gmail.com', ' JL. Pelabuhan Kuala Stabas I. Krui Kel. Pasar Krui,  Kec. Pesisir Tengah Kab. Pesisir Barat Kodepos 34874', '<p>Polres Pesisir Barat ini merupakan salah satu wujud nyata dari Pemerintah Pusat dalam merealisasikan program prioritas Kepolisian Republik Indonesia (POLRI), yaitu transformasi menuju POLRI yang presisi dan diakselerasikan melalui program quick wins presisi guna mendukung atau menunjang tugas pokok POLRI sebagai pelindung, pengayom dan pelayan masyarakat serta penegakan hukum yang berlandaskan keadilan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_log` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jam_log` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `id_session`, `tgl_log`, `jam_log`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@yahoo.com', 'vjg1d11n5d2p6ufrh8tm7mpjj0', '05/06/2023', '08:22 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
