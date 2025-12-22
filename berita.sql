-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2025 at 08:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikelpengajuan`
--

CREATE TABLE `artikelpengajuan` (
  `idArtikel` int(11) NOT NULL,
  `judulArtikel` varchar(100) NOT NULL,
  `isiArtikel` text NOT NULL,
  `tglPengajuan` date NOT NULL,
  `kodePenulis` int(11) NOT NULL,
  `gambarjurnal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikelpengajuan`
--

INSERT INTO `artikelpengajuan` (`idArtikel`, `judulArtikel`, `isiArtikel`, `tglPengajuan`, `kodePenulis`, `gambarjurnal`) VALUES
(1, 'JOURNAL SCHOOL MENYELANGKAHKAN PENDIDIKAN KE ERA BARU', 'Journal School, sebuah institusi pendidikan yang dikenal dengan inovasi pendidikannya yang progresif, telah mengumumkan serangkaian langkah revolusioner yang akan mengubah paradigma pendidikan di tahun-tahun mendatang.\r\n\r\nDikenal sebagai \"Sekolah Masa Depan,\" Journal School telah menetapkan standar baru dalam menyelenggarakan pendidikan. Dengan fokus pada pengembangan keterampilan kritis, kreativitas, dan kemampuan berpikir adaptif, sekolah ini berkomitmen untuk mempersiapkan generasi mendatang menghadapi tantangan dunia modern.\r\n\r\nSalah satu inisiatif terbaru yang diumumkan oleh Journal School adalah penggunaan teknologi blockchain dalam pengelolaan administrasi dan pencatatan kemajuan siswa. Ini merupakan langkah besar dalam menciptakan transparansi dan keamanan data siswa, serta memberikan akses yang mudah bagi guru, orang tua, dan siswa untuk melacak perkembangan pendidikan mereka.\r\n\r\nSelain itu, sekolah ini juga telah merancang kurikulum baru yang menekankan pada pembelajaran berbasis proyek, di mana siswa akan belajar melalui proyek kolaboratif yang relevan dengan dunia nyata. Ini diharapkan dapat membangun keterampilan praktis yang diperlukan di era globalisasi saat ini.\r\n\r\nDr. Amanda Lee, Kepala Sekolah Journal School, menyatakan, \"Kami berkomitmen untuk menjadi pelopor dalam membawa perubahan positif dalam dunia pendidikan. Melalui inisiatif-inisiatif terbaru kami, kami percaya bahwa para siswa akan lebih siap menghadapi dunia yang kompleks dan berubah dengan cepat.\"\r\n\r\nTanggapan terhadap perubahan ini sangat positif dari berbagai kalangan. Orang tua siswa sangat antusias dengan langkah-langkah inovatif yang dilakukan oleh sekolah ini dan berharap ini akan memberikan manfaat besar bagi masa depan pendidikan anak-anak mereka.\r\n\r\nJournal School telah menarik perhatian dunia pendidikan dengan visi baru mereka yang revolusioner. Dengan terus menerapkan inovasi dalam kurikulum dan pengelolaan sekolah, mereka bertekad untuk membentuk pemimpin masa depan yang siap menghadapi tantangan global.', '2024-01-01', 1, 'pipo era Pendidikan Baru journal school.jpg'),
(2, 'Journal School Merayakan Kesuksesan Peserta Didiknya dalam Kompetisi Ilmiah Nasional', 'Sekolah Menengah Journal School, sebuah lembaga pendidikan ternama di wilayahnya, merayakan kemenangan gemilang dalam Kompetisi Ilmiah Nasional terbaru. Dalam acara prestisius ini, siswa-siswi berbakat dari sekolah ini berhasil meraih berbagai penghargaan atas penelitian dan karya ilmiah yang inovatif.\r\n\r\nTim Journal School mengukir prestasi gemilang dengan memenangkan beberapa kategori penting. Salah satunya adalah kategori Inovasi Teknologi, di mana proyek mereka tentang energi terbarukan mendapatkan pengakuan tertinggi dari dewan juri. Keberhasilan ini merupakan hasil dari dedikasi dan kerja keras para siswa yang dibimbing oleh para pengajar berkualitas di sekolah tersebut.\r\n\r\nSelain itu, penelitian dalam bidang Kesehatan dan Lingkungan dari Journal School juga mencuri perhatian dengan solusi kreatif dan berkelanjutan yang diusulkan. Ini tidak hanya menunjukkan komitmen sekolah terhadap penelitian ilmiah yang berdampak positif bagi masyarakat tetapi juga menegaskan posisi mereka dalam mendorong pemikiran kritis dan inovasi di kalangan siswa.\r\n\r\nKepala Sekolah, Bapak Adi Prabowo, menyampaikan kebanggaannya atas prestasi luar biasa ini. \"Kami sangat bangga melihat semangat dan dedikasi siswa-siswi kami dalam mengeksplorasi pengetahuan dan merumuskan solusi untuk tantangan dunia nyata. Prestasi ini adalah hasil dari kerja keras, ketekunan, dan semangat kolaborasi mereka.\"\r\n\r\nSekolah Journal School terus berkomitmen untuk memberikan pendidikan yang memungkinkan siswa untuk berkembang secara akademis dan pribadi. Dengan dukungan penuh dari staf pengajar dan lingkungan yang mendorong eksplorasi intelektual, sekolah ini bertekad untuk terus menjadi wadah bagi generasi masa depan yang berinovasi dan peduli terhadap dunia di sekitarnya.', '2024-01-07', 1, 'kompetisi ilmiah nasional pipo.jpg'),
(3, ' Journal School Membuka Program Baru untuk Pengembangan Keterampilan Kreatif Siswa', 'Sekolah Menengah Journal School mengumumkan peluncuran program inovatif yang bertujuan untuk meningkatkan keterampilan kreatif siswa-siswinya. Program baru ini, yang diberi nama \"Creative Minds Initiative,\" dirancang untuk memberikan ruang lebih besar bagi ekspresi kreatif, kolaborasi, dan eksplorasi ide di antara peserta didik.\r\n\r\nDibimbing oleh para profesional dan pengajar ahli di bidangnya, inisiatif ini akan memberikan siswa kesempatan untuk memperluas wawasan mereka melalui beragam kegiatan kreatif. Diantaranya termasuk workshop seni, kompetisi penulisan, pengembangan permainan interaktif, dan proyek seni multidisiplin.\r\n\r\nKepala Sekolah, Ibu Maya Wardhani, berbagi pemikirannya tentang tujuan program ini. \"Kami percaya bahwa kreativitas adalah kunci utama untuk mempersiapkan siswa menjadi pemimpin masa depan yang inovatif. Dengan Creative Minds Initiative, kami berharap dapat membangun kemampuan berpikir kritis, kreatif, dan kolaboratif yang kuat di antara siswa kami.\"\r\n\r\nSalah satu elemen yang menarik dari program ini adalah kolaborasi lintas disiplin. Siswa akan diundang untuk bekerja sama dengan sesama siswa dari berbagai bidang keahlian untuk menciptakan proyek-proyek yang menggabungkan beragam perspektif. Hal ini diharapkan dapat membangun pemahaman yang lebih luas tentang pentingnya integrasi antara seni, sains, teknologi, dan humaniora.\r\n\r\nSiswa Journal School sangat antusias dengan kesempatan baru ini. Maya, seorang siswa kelas 11, menyatakan, \"Saya sangat senang bahwa sekolah kami memberikan kesempatan untuk mengeksplorasi kreativitas kami di luar kurikulum akademis. Saya berharap bisa belajar banyak dari program ini dan mungkin menciptakan sesuatu yang berarti bersama teman-teman saya.\"\r\n\r\nProgram \"Creative Minds Initiative\" Journal School diharapkan tidak hanya akan memperkaya pengalaman belajar siswa, tetapi juga akan menjadi tonggak penting dalam pendidikan yang bertujuan untuk menghasilkan pemimpin masa depan yang inovatif dan berdaya saing tinggi.', '2024-01-08', 4, '1756751305_berita.jpg'),
(4, 'Journal School Mengadakan Program Penanaman Pohon untuk Kelestarian Lingkungan', 'Sekolah Menengah Journal School mengambil langkah besar dalam upaya keberlanjutan dengan meluncurkan program penanaman pohon massal di sekitar wilayah sekolah. Dalam keterlibatan aktif siswa, program ini bertujuan untuk meningkatkan kesadaran akan pentingnya pelestarian lingkungan dan memberikan kontribusi nyata terhadap upaya global dalam perlindungan alam.\r\n\r\nDengan dukungan dari staf pengajar dan partisipasi siswa dari berbagai tingkatan, lebih dari 500 bibit pohon telah ditanam di sekitar area sekolah. Program ini bukan hanya tentang menanam pohon, tetapi juga tentang membangun kesadaran akan pentingnya menjaga lingkungan bagi generasi masa depan.\r\n\r\nKepala Sekolah, Bapak Rahmat Santoso, menegaskan tujuan dari inisiatif ini, \"Kami di Journal School percaya bahwa pendidikan tidak hanya terjadi di dalam kelas, tetapi juga melalui tindakan nyata. Dengan penanaman pohon ini, kami ingin melibatkan siswa dalam merawat alam sekitar kami, memberikan pelajaran penting tentang tanggung jawab terhadap lingkungan.\"\r\n\r\nProgram ini juga melibatkan edukasi terkait pentingnya pepohonan bagi ekosistem dan perubahan iklim. Para siswa tidak hanya terlibat dalam kegiatan fisik menanam pohon, tetapi juga mendapatkan pengetahuan mendalam tentang cara menjaga dan merawat lingkungan sekitar mereka.\r\n\r\n\"Ini adalah pengalaman yang luar biasa. Saya belajar betapa pentingnya pohon bagi kita semua dan bagaimana kita dapat berperan dalam menjaga alam,\" ujar Nia, seorang siswi kelas 9 yang aktif dalam kegiatan penanaman pohon.\r\n\r\nProgram penanaman pohon ini hanya merupakan awal dari komitmen Journal School dalam berkontribusi pada keberlanjutan lingkungan. Diharapkan, langkah ini akan memicu semangat berkelanjutan untuk menjaga alam dan mendorong tindakan nyata lainnya di masa depan.', '2024-01-03', 4, 'penanaman pohon ara.jpeg'),
(5, 'Tim Basket Journal School Raih Kemenangan Dramatis di Turnamen Regional', 'Tim basket unggulan dari Sekolah Menengah Journal School memperoleh kemenangan spektakuler dalam pertandingan terbaru mereka di turnamen basket tingkat regional. Dalam pertandingan yang penuh ketegangan dan intensitas, mereka berhasil menaklukkan rival kuat mereka dalam pertandingan yang berakhir dengan skor dramatis.\r\n\r\nMenghadapi tim lawan yang diunggulkan, para pemain Journal School mempertontonkan keterampilan dan semangat juang yang luar biasa. Dengan koordinasi yang solid dan strategi yang baik, mereka berhasil membalikkan keadaan di babak kedua dan mengejar ketertinggalan dengan permainan yang sangat memukau.\r\n\r\nPelatih tim, Pak Dito Santoso, mengungkapkan kebanggaannya atas semangat dan dedikasi timnya. \"Ini adalah kemenangan yang luar biasa bagi kami. Anak-anak menunjukkan tekad yang luar biasa dan tidak pernah menyerah, bahkan ketika situasinya sulit. Mereka memperlihatkan kerja keras dan semangat tim yang luar biasa.\"\r\n\r\nPemain kunci dari tim Journal School menunjukkan performa yang mengesankan sepanjang pertandingan, memimpin serangan dengan kecerdasan taktis dan ketangguhan dalam pertahanan. Kemenangan ini tidak hanya membawa kegembiraan bagi tim basket, tetapi juga membangun semangat komunitas sekolah yang merayakan pencapaian gemilang mereka.\r\n\r\n\"Kami sangat bangga dengan pencapaian tim basket kami,\" kata Ibu Ani, salah satu orang tua siswa. \"Mereka tidak hanya menunjukkan keterampilan dalam bermain, tetapi juga semangat komunitas yang kuat. Ini adalah contoh bagus bagi siswa lain untuk terus berjuang dan berusaha mencapai tujuan mereka.\"\r\n\r\nKemenangan dramatis ini telah memotivasi tim basket Journal School untuk terus berlatih dengan keras dan menatap ke turnamen-tournament mendatang dengan semangat yang lebih besar. Diharapkan, prestasi gemilang ini akan menjadi pemicu semangat bagi seluruh siswa untuk mengejar prestasi tinggi dalam olahraga dan bidang lainnya.', '2024-01-04', 3, 'Turnamen Basket fadly.jpg'),
(6, 'Journal School Torehkan Prestasi Gemilang dalam Kejuaraan Sepak Bola Antarsekolah', 'Prestasi luar biasa diraih oleh tim sepak bola Sekolah Menengah Journal School dalam kejuaraan antarsekolah yang diselenggarakan di wilayah mereka. Tim sepak bola sekolah tersebut menunjukkan kekuatan dan ketangguhan mereka dengan mencapai final dan akhirnya meraih gelar juara dalam turnamen yang sengit dan penuh semangat.\r\n\r\nDalam pertandingan final yang sangat dinanti-nantikan, para pemain Journal School tampil dengan performa yang mengesankan. Mereka tidak hanya menunjukkan keterampilan teknis yang luar biasa, tetapi juga semangat bertanding yang tak kenal lelah sepanjang 90 menit pertandingan.\r\n\r\nPelatih tim sepak bola, Pak Budi Santoso, menyatakan kebanggaannya terhadap pencapaian timnya. \"Anak-anak telah bekerja keras sepanjang musim ini dan melalui kerja tim yang solid, mereka berhasil mencapai puncak turnamen. Ini adalah hasil dari kerja keras dan dedikasi mereka.\"\r\n\r\nPemain kunci dari tim sepak bola Journal School menunjukkan permainan yang mengesankan sepanjang turnamen, menginspirasi rekan-rekannya dengan semangat dan keterampilan bermain yang luar biasa. Kemenangan ini tidak hanya membanggakan tim sepak bola, tetapi juga meriahkan semangat dan kebanggaan dalam komunitas sekolah.\r\n\r\n\"Kami sangat bangga dengan prestasi tim sepak bola kami,\" ujar Ibu Maya, seorang guru di sekolah tersebut. \"Mereka tidak hanya berhasil meraih gelar juara tetapi juga telah menunjukkan sikap sportif dan semangat yang positif sepanjang kompetisi.\"\r\n\r\nKemenangan gemilang ini menjadi bukti dari komitmen Journal School dalam mendukung dan membangun potensi siswa di bidang olahraga. Harapannya, prestasi ini akan menjadi motivasi bagi siswa lainnya untuk terus mengejar keunggulan dalam bidang olahraga serta membawa semangat kompetitif yang positif dalam setiap aspek kehidupan mereka.', '2023-12-12', 3, 'kejuaran sepak bola sekolah fadli.jpg'),
(7, 'Tim Atletik Journal School Mencatat Prestasi Luar Biasa dalam Kejuaraan Lari', 'Sekolah Menengah Journal School merayakan keberhasilan gemilang dari tim atletik mereka yang mengambil bagian dalam kejuaraan lari lintas alam tingkat regional. Atlet-atlet muda ini tidak hanya menunjukkan keuletan dan kekuatan, tetapi juga mencatat prestasi yang mengesankan di dalam kompetisi yang sangat ketat.\r\n\r\nPara pelari dari Journal School menunjukkan kecepatan, daya tahan, dan semangat yang luar biasa sepanjang lintasan. Dengan dorongan kuat dari pelatih dan dukungan penuh dari komunitas sekolah, mereka berhasil meraih sejumlah medali emas, perak, dan perunggu dalam berbagai kategori lomba.\r\n\r\nPelatih tim atletik, Ibu Sari Indah, menyatakan kebanggaannya atas pencapaian para atletnya. \"Mereka telah menunjukkan komitmen yang luar biasa dalam latihan dan dalam kompetisi. Kemenangan ini adalah hasil dari kerja keras mereka dan semangat bertanding yang tidak pernah pudar.\"\r\n\r\nSelain meraih medali, tim atletik Journal School juga membanggakan dengan sikap sportivitas mereka. Mereka memberikan dukungan satu sama lain, memberikan semangat positif, dan menunjukkan rasa saling menghormati terhadap lawan-lawannya.\r\n\r\n\"Kami sangat bangga dengan pencapaian tim atletik sekolah kami,\" kata Bapak Ari, seorang wali murid. \"Mereka tidak hanya atlet yang hebat tetapi juga contoh teladan dalam sikap sportif dan semangat kompetitif yang sehat.\"\r\n\r\nPrestasi gemilang ini menjadi inspirasi bagi siswa-siswa lain di Journal School untuk mengejar prestasi tinggi dalam olahraga. Diharapkan, pencapaian yang luar biasa ini akan memicu semangat kompetitif yang positif serta semakin memperkuat semangat kebersamaan dalam komunitas sekolah.', '2023-12-21', 1, 'kejuaran lari pipo.jpg'),
(8, 'Journal School Sabet Kemenangan Bersejarah dalam Kejuaraan Bulu Tangkis Regional', 'Sekolah Menengah Journal School merayakan kemenangan gemilang setelah tim bulu tangkis mereka mencatat sejarah dalam kejuaraan regional terbaru. Para pemain bulu tangkis sekolah ini menunjukkan kepiawaian dan dedikasi yang luar biasa, berhasil meraih gelar juara dalam kompetisi yang berlangsung sangat ketat.\r\n\r\nDalam pertandingan final yang penuh tensi, tim bulu tangkis Journal School tampil dengan performa yang memukau. Mereka menunjukkan teknik yang solid, kecepatan, dan ketangguhan mental dalam menghadapi lawan-lawannya yang tangguh.\r\n\r\nPelatih tim bulu tangkis, Pak Arif Wijaya, menyampaikan kebanggaannya terhadap pencapaian timnya. \"Anak-anak telah memberikan yang terbaik dari diri mereka dalam kompetisi ini. Mereka telah berlatih keras dan fokus untuk mencapai hasil yang luar biasa ini.\"\r\n\r\nPara pemain kunci dari tim bulu tangkis Journal School menunjukkan permainan yang memukau sepanjang turnamen, menginspirasi teman-teman setim mereka dengan semangat dan keterampilan yang luar biasa. Kemenangan ini tidak hanya menjadi kebanggaan bagi tim, tetapi juga mengukuhkan posisi sekolah dalam kancah olahraga regional.\r\n\r\n\"Kami sangat bangga dengan pencapaian tim bulu tangkis kami,\" kata Ibu Yuni, seorang guru di sekolah tersebut. \"Mereka tidak hanya menang, tetapi juga menunjukkan kerja keras, semangat kompetitif yang sehat, dan sikap sportif yang patut dicontoh.\"\r\n\r\nKemenangan bersejarah ini memberikan semangat baru bagi siswa-siswa Journal School untuk terus mengejar prestasi tinggi dalam olahraga. Di samping itu, pencapaian gemilang ini juga menegaskan komitmen sekolah dalam mendukung dan mengembangkan potensi siswa di bidang olahraga.', '2023-11-30', 4, 'kejuaraan bulu tangkis ara.jpeg'),
(9, 'Menggali Kekayaan Sastra dan Budaya di Journal School: Menyemai Cinta pada Kreativitas dan Kemanusia', 'Sekolah Menengah Journal School bukan hanya sekadar lembaga pendidikan, tetapi juga medan subur bagi eksplorasi kekayaan sastra dan budaya. Di tengah fokus akan kurikulum akademis yang kuat, sekolah ini menanamkan benih cinta pada seni, sastra, dan warisan budaya dalam pembelajaran siswa.\r\n\r\nSalah satu hal yang membuat Journal School berbeda adalah perhatian yang mereka berikan pada mata pelajaran sastra. Dalam kelas-kelasnya, siswa diajak untuk memahami karya-karya klasik dan kontemporer, dari sastra lokal hingga internasional. Diskusi tentang sastra bukan hanya sebatas menganalisis cerita, tetapi juga menggali makna mendalam, mengeksplorasi karakter, dan memahami konteks budaya di balik setiap karya.\r\n\r\nSelain itu, sekolah ini secara aktif menggelar acara dan festival budaya yang memamerkan berbagai ekspresi seni, seperti pementasan teater, pertunjukan musik, festival sastra, dan pameran seni visual. Ini tidak hanya memberikan platform bagi siswa untuk menunjukkan bakat mereka tetapi juga memberikan wawasan tentang pluralitas budaya kepada seluruh komunitas sekolah.\r\n\r\nKepala Sekolah, Ibu Devi Suryani, menjelaskan, \"Kami percaya bahwa memahami sastra dan budaya bukan hanya penting untuk pengembangan intelektual, tetapi juga untuk membangun empati, pemahaman, dan penghargaan terhadap keragaman di dunia ini. Ini adalah keterampilan yang tak ternilai bagi generasi masa depan.\"\r\n\r\nSelain itu, Journal School juga memiliki klub sastra dan budaya yang aktif, di mana siswa dapat berpartisipasi dalam kegiatan menulis, diskusi sastra, dan pertunjukan budaya. Klub ini menjadi wadah bagi mereka yang ingin mengekspresikan diri, menumbuhkan minat pada sastra, dan menyelami keindahan budaya dari berbagai penjuru dunia.\r\n\r\nPendidikan di Journal School bukan hanya tentang pengetahuan akademis, tetapi juga tentang mengasah kreativitas, mendorong pemikiran kritis, dan memupuk rasa ingin tahu akan dunia yang luas. Dengan demikian, sekolah ini tidak hanya mencetak siswa cerdas secara akademis, tetapi juga menjadikan mereka warga dunia yang peduli dan peka terhadap keindahan sastra dan budaya.', '2023-12-30', 3, 'kreatifitas dan kemanusiaan fadli.jpg'),
(10, 'Menyelami Kekayaan Sastra dan Budaya di Journal School: Memupuk Kreativitas dan Kemanusiaan', 'Sekolah Menengah Journal School telah menjadi ladang subur bagi penjelajahan mendalam dalam dunia sastra dan kebudayaan. Lebih dari sekadar penekanan pada kurikulum akademis, sekolah ini memancarkan semangat akan seni, sastra, dan kekayaan budaya kepada para siswa.\r\n\r\nSalah satu pilar utama dalam kurikulum mereka adalah kecintaan pada sastra. Dalam setiap kelas, siswa tidak hanya mempelajari karya-karya sastra, tetapi juga diajak untuk meresapi, menganalisis, dan menyelami makna yang tersembunyi di balik kata-kata. Diskusi tentang sastra bukanlah sekadar pembahasan cerita, melainkan penelusuran jiwa, eksplorasi karakter, dan pemahaman mendalam tentang peradaban di balik setiap karya.\r\n\r\nSekolah ini juga menjadi tuan rumah bagi berbagai acara budaya, mulai dari pertunjukan teater hingga festival seni dan sastra. Melalui platform ini, siswa berkesempatan untuk mengekspresikan kreativitas mereka dalam berbagai bentuk seni, sambil memperkaya pemahaman mereka akan beragam budaya di dunia.\r\n\r\nKepala Sekolah, Bapak Adi Prasetyo, menjelaskan, \"Penting bagi kami untuk mengajarkan sastra dan budaya, bukan hanya sebagai bagian dari kurikulum, tetapi sebagai jendela ke dunia yang lebih luas. Hal ini tidak hanya mengasah keterampilan kritis, tetapi juga memupuk sikap empati dan penghargaan terhadap keragaman.\"\r\n\r\nTak hanya itu, klub sastra dan budaya di Journal School menjadi wadah bagi para siswa untuk mengekspresikan diri dan menyalurkan minat mereka dalam sastra. Diskusi, kajian, serta karya kreatif menjadi inti dari klub ini, menciptakan ruang yang subur bagi bakat-bakat muda untuk berkembang.\r\n\r\nPendidikan di Journal School adalah tentang memberdayakan kreativitas, membangun pola pikir yang inklusif, dan membuka mata serta hati terhadap keindahan sastra dan budaya. Dengan demikian, sekolah ini bukan hanya mencetak siswa cerdas secara akademis, tetapi juga mendewasakan generasi yang cerdas secara emosional dan kultural.', '2024-01-04', 1, 'memupuk kreatifitas dan kemanusiaan pipo.jpg'),
(11, 'Menginspirasi Melalui Keanekaragaman: Acara Kebudayaan Berkilau di Journal School', 'Sekolah Menengah Journal School telah menciptakan gelombang kegembiraan dan kekayaan melalui acara kebudayaan yang memukau. Dari panggung teater hingga galeri seni, sekolah ini menjadi lahan subur bagi penggalian serta perayaan keanekaragaman budaya.\r\n\r\nAcara kebudayaan di Journal School bukan hanya sekadar pertunjukan, tetapi sebuah perayaan akan pluralitas yang membentuk ciri khas sekolah ini. Dalam setiap acara, terdapat kesempatan bagi siswa dan komunitas sekolah untuk merayakan warisan budaya dari berbagai penjuru dunia.\r\n\r\nSalah satu momen berharga adalah panggung teater sekolah yang menjadi pusat perhatian. Dalam pementasan-pementasan mereka, siswa tidak hanya menghidupkan karakter, tetapi juga membawa penonton dalam perjalanan melintasi budaya, sejarah, dan cerita yang memukau.\r\n\r\nPameran seni juga menjadi sorotan utama, di mana karya-karya kreatif siswa dipajang dengan bangga. Dari lukisan hingga karya seni digital, galeri seni sekolah ini menjadi jendela yang memperlihatkan keberagaman bakat dan ekspresi di antara siswa.\r\n\r\nIbu Maya Wardhani, koordinator acara kebudayaan, menyatakan, \"Acara kebudayaan adalah tentang memperluas pemahaman kita akan dunia. Kami di Journal School percaya bahwa melalui seni dan budaya, kita dapat membangun jembatan yang menghubungkan berbagai komunitas dan menghormati keragaman.\"\r\n\r\nAcara-acara ini juga menjadi tempat di mana siswa dapat menunjukkan keahlian mereka dalam berbagai bentuk seni, musik, tari, dan penampilan lainnya. Ini tidak hanya mengasah keterampilan, tetapi juga memperkaya pengalaman siswa dalam mengekspresikan diri.\r\n\r\nPendidikan di Journal School bukan hanya tentang prestasi akademis, tetapi juga tentang memperluas wawasan serta memperkaya jiwa melalui seni dan budaya. Dengan demikian, acara kebudayaan di sekolah ini tidak hanya merayakan kekayaan budaya, tetapi juga menjadi panggung bagi penemuan dan pertumbuhan individu.', '2023-12-17', 3, 'acara kebudayaan fadli.jpeg'),
(12, 'Menyemai Kebudayaan: Journal School Merayakan Kesenian Minangkabau dengan Penuh Keindahan dan Kebera', 'Sekolah Menengah Journal School, dalam semangat keberagaman dan penghargaan terhadap warisan budaya, menggelar perayaan khusus yang memukau untuk merayakan keindahan kesenian Minangkabau. Acara ini bukan hanya menjadi perayaan, tetapi juga menjadi penghormatan akan kekayaan budaya yang tak ternilai dari suku Minangkabau.\r\n\r\nDari tarian tradisional hingga kuliner khas, acara tersebut menjadi arena di mana siswa dan komunitas sekolah dapat menyelami, mempelajari, dan menikmati pesona kebudayaan Minangkabau. Panggung utama dimeriahkan dengan tarian-tarian yang memukau, menampilkan gerak yang elegan dan cerita yang menyentuh.\r\n\r\nKegiatan kuliner turut menjadi daya tarik, di mana makanan khas Minangkabau seperti rendang, sate padang, dan gulai dipamerkan dan disajikan dengan penuh kehangatan. Siswa dan pengunjung diajak untuk menikmati cita rasa khas dari daerah tersebut.\r\n\r\nKepala Sekolah, Ibu Devi Suryani, menekankan pentingnya perayaan budaya seperti ini. \"Acara seperti ini adalah tentang mendukung keragaman budaya yang kita miliki. Kami di Journal School berkomitmen untuk memberikan ruang bagi siswa kami untuk memahami dan menghargai keanekaragaman budaya di Indonesia dan dunia.\"\r\n\r\nAcara ini juga menjadi peluang bagi siswa untuk belajar dan berpartisipasi dalam workshop seni, belajar tentang sejarah dan nilai-nilai yang terkandung dalam kesenian Minangkabau, serta merasakan kehangatan budaya yang terkandung dalam setiap aspek acara.\r\n\r\nPerayaan kesenian Minangkabau di Journal School adalah bukti nyata dari komitmen sekolah dalam memperluas wawasan siswa serta mendorong penghargaan terhadap keberagaman budaya. Dengan perayaan budaya semacam ini, sekolah ini tidak hanya menjadi tempat pendidikan, tetapi juga menjadi panggung bagi perjumpaan dan apresiasi terhadap keindahan budaya Indonesia.', '2024-01-03', 4, 'acara kesenian minangkabau ara.jpg'),
(13, 'Journal School Merayakan Kebesaran Mawlid Nabi Muhammad SAW dengan Penuh Kehormatan dan Kebahagiaan', 'Sekolah Menengah Journal School dengan penuh semangat dan penghormatan merayakan peristiwa besar dalam agama Islam, yaitu Mawlid Nabi Muhammad SAW. Acara ini menjadi momen penting di mana siswa dan staf sekolah bersama-sama merenungkan dan merayakan kehidupan dan ajaran Nabi Muhammad SAW.\r\n\r\nMawlid di Journal School tidak hanya menjadi perayaan keagamaan, tetapi juga menjadi kesempatan untuk memahami ajaran dan teladan Nabi Muhammad. Dalam suasana yang penuh dengan bacaan shalawat, kisah inspiratif, dan pidato-pidato tentang kebaikan dan kemurahan hati Nabi, siswa diajak untuk menggali makna mendalam dari kehidupan beliau.\r\n\r\nKepala Sekolah, Ibu Fatimah Rahayu, menyampaikan, \"Mawlid Nabi Muhammad SAW adalah momen yang memberikan inspirasi dan pengetahuan bagi siswa kami. Kami berupaya untuk mengajarkan nilai-nilai kemurahan hati, toleransi, dan kasih sayang yang diperjuangkan Nabi kepada seluruh umat manusia.\"\r\n\r\nAcara ini juga menyediakan ruang bagi siswa untuk mengekspresikan penghargaan mereka melalui pengisian acara dengan nasyid, pembacaan puisi, dan persembahan seni yang menggambarkan kebaikan dan ajaran-ajaran Nabi.\r\n\r\nMelalui perayaan Mawlid ini, Journal School tidak hanya menjadi tempat belajar, tetapi juga menjadi wadah untuk meningkatkan pemahaman spiritual dan moral siswa. Dengan merayakan Mawlid, sekolah ini berperan penting dalam memperkuat akhlak, nilai-nilai kebaikan, dan penghargaan terhadap ajaran agama di antara siswa-siswanya.', '2023-09-27', 5, 'perayaan maulid nabi azzhra.jpg'),
(14, 'Membangun Spiritualitas dalam Bulan Suci: Journal School Gelar Acara Pesantren Ramadan', 'Sekolah Menengah Journal School menggelar acara Pesantren Ramadan yang memukau untuk menyambut dan merayakan kedatangan bulan suci Ramadan. Acara ini menjadi wadah yang penting bagi siswa dan staf sekolah untuk memperdalam spiritualitas, mempelajari nilai-nilai agama Islam, dan meningkatkan koneksi dengan Tuhan.\r\n\r\nPesantren Ramadan di Journal School dirancang sebagai platform pembelajaran spiritual yang intens selama bulan suci ini. Dalam suasana yang penuh kekhusyukan, kegiatan ini mencakup pelajaran agama, kajian Al-Quran, tadarus, serta diskusi dan ceramah yang mengangkat berbagai aspek kehidupan Islami.\r\n\r\nKepala Sekolah, Bapak Ahmad Fitri, mengungkapkan, \"Pesantren Ramadan adalah momen yang penting bagi siswa kami untuk memperdalam pemahaman mereka tentang ajaran Islam dan nilai-nilai yang terkandung di dalamnya. Kami ingin memastikan mereka merasakan keberkahan dari bulan Ramadan dan mendapatkan manfaat spiritual yang mendalam.\"\r\n\r\nSelain aktivitas pembelajaran agama, acara ini juga menyediakan ruang bagi siswa untuk berpartisipasi dalam kegiatan sosial dan amal. Mereka diajak untuk terlibat dalam program kegiatan sosial seperti berbagi makanan berbuka puasa, penggalangan dana untuk yayasan, atau kegiatan sosial lainnya yang bertujuan memberikan manfaat bagi masyarakat.\r\n\r\nPesantren Ramadan di Journal School bukan hanya tentang peningkatan pengetahuan agama, tetapi juga tentang membentuk karakter dan moral yang kuat. Dengan merayakan spiritualitas dalam bulan suci ini, sekolah ini memainkan peran penting dalam memperkuat nilai-nilai kebaikan, kasih sayang, dan koneksi spiritual siswa-siswanya.', '2023-03-23', 5, 'pesantren ramdhan azzhra.jpg'),
(15, 'Journal School: Merayakan Awal Tahun Baru Hijriah Dengan Semangat Kebajikan dan Kepedulian', 'Sekolah Menengah Journal School merayakan awal tahun baru Hijriah dengan penuh semangat dan kepedulian. Acara penyambutan tahun baru ini tidak hanya menjadi momen perayaan, tetapi juga menjadi kesempatan untuk merenungkan nilai-nilai kebaikan, kepemimpinan, dan kepedulian dalam ajaran Islam.\r\n\r\nPenyambutan Tahun Baru Hijriah di Journal School tidak hanya menjadi perayaan agama, tetapi juga sebuah pembelajaran tentang sejarah dan nilai-nilai yang terkandung dalam kalender Hijriah. Melalui ceramah, diskusi, dan kegiatan refleksi, siswa diajak untuk memahami makna dari pergantian tahun Hijriah dan pesan-pesan yang terkandung di dalamnya.\r\n\r\nKepala Sekolah, Ibu Siti Aisyah, menyatakan, \"Penyambutan tahun baru Hijriah adalah momen yang penting bagi kami di Journal School untuk mengajarkan nilai-nilai kepemimpinan, kebaikan, dan kepedulian. Kami berupaya untuk memperkokoh pemahaman siswa akan sejarah Islam dan bagaimana nilai-nilai ini dapat membentuk karakter mereka.\"\r\n\r\nAcara ini juga menjadi wadah bagi siswa untuk menunjukkan kepedulian mereka terhadap sesama melalui kegiatan amal dan sosial. Mereka terlibat dalam berbagai kegiatan seperti penggalangan dana, bakti sosial, atau kunjungan ke panti asuhan, sebagai upaya untuk memberikan manfaat kepada masyarakat sekitar.\r\n\r\nPenyambutan tahun baru Hijriah di Journal School adalah bukti nyata dari komitmen sekolah untuk memperdalam pemahaman spiritual siswa dan membangun karakter yang kuat. Dengan merayakan nilai-nilai kebaikan dan kepedulian, sekolah ini berperan penting dalam membentuk siswa-siswanya menjadi individu yang peduli, bertanggung jawab, dan peka terhadap kebutuhan masyarakat.', '2023-12-27', 5, 'penyambutan tahun baru hijriyah azzhra.jpg'),
(16, 'Semangat Silaturahmi dan Kebajikan: Acara Halal Bihalal di Journal School', 'Sekolah Menengah Journal School dengan penuh kehangatan dan semangat menggelar acara Halal Bihalal sebagai bagian dari tradisi silaturahmi dan kebaikan dalam ajaran Islam. Acara ini menjadi momentum penting bagi siswa, staf, dan komunitas sekolah untuk berkumpul, berbagi kebahagiaan, serta memperkuat hubungan antarindividu.\r\n\r\nHalal Bihalal di Journal School bukan hanya menjadi ajang bersilahturahmi, tetapi juga momen refleksi dan memaafkan antara satu sama lain. Dalam suasana yang penuh kehangatan, siswa dan staf sekolah diajak untuk saling memaafkan, membangun kembali hubungan yang harmonis, serta mempererat ikatan persaudaraan.\r\n\r\nKepala Sekolah, Bapak Imam Santoso, menyatakan, \"Halal Bihalal adalah saat yang tepat bagi kami untuk mengajarkan nilai-nilai toleransi, kerukunan, dan kebaikan yang terkandung dalam ajaran Islam. Kami percaya bahwa memaafkan dan membangun hubungan yang baik adalah langkah penting dalam memperkokoh komunitas kami.\"\r\n\r\nAcara ini juga menjadi kesempatan bagi siswa untuk belajar tentang pentingnya menjaga silaturahmi dan menghargai hubungan antarindividu. Mereka terlibat dalam berbagai kegiatan seperti diskusi, ceramah, dan kegiatan seni yang mengangkat tema-tema persahabatan, kebaikan, dan perdamaian.\r\n\r\nHalal Bihalal di Journal School adalah contoh nyata dari komitmen sekolah untuk membangun lingkungan yang penuh kasih sayang, toleransi, dan saling pengertian. Dengan merayakan nilai-nilai kebaikan dan harmoni, sekolah ini berperan penting dalam membentuk siswa-siswanya menjadi individu yang peduli, bertanggung jawab, dan peka terhadap kebutuhan masyarakat.', '2023-05-05', 3, 'acara halal bi halal fadli.jpg'),
(34, 'Berita Terbaru', 'Demo Besar Besaran', '2025-08-31', 12, '1756639695_berita.jpg'),
(43, 'Berita Terbaru', 'Demo Besar Besaran Di Kantor DPR', '2025-08-31', 12, '1756655619_berita.jpg'),
(45, 'Berita Terbaru', 'Demo Hari Ini', '2025-09-01', 1, '1756727254_berita.jpg'),
(51, 'Berita Terbaru', 'Gani Gustio', '2025-09-01', 12, '1756739036_berita.jpg'),
(53, 'Berita Terbaru', 'Isi Artikel', '2025-09-01', 1, '1756740598_berita.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikelpublish`
--

CREATE TABLE `artikelpublish` (
  `idArtikelPublish` int(10) NOT NULL,
  `judulArtikelPublish` varchar(100) NOT NULL,
  `isiArtikelPublish` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tglTerbit` date NOT NULL,
  `idArtikel` int(11) NOT NULL,
  `kodePenulis` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikelpublish`
--

INSERT INTO `artikelpublish` (`idArtikelPublish`, `judulArtikelPublish`, `isiArtikelPublish`, `kategori`, `tglTerbit`, `idArtikel`, `kodePenulis`, `status`) VALUES
(7, 'JOURNAL SCHOOL MELANGKAHKAN PENDIDIKAN KE ERA BARU', 'Journal School, sebuah institusi pendidikan yang dikenal dengan inovasi pendidikannya yang progresif, telah mengumumkan serangkaian langkah revolusioner yang akan mengubah paradigma pendidikan di tahun-tahun mendatang. Dikenal sebagai ', 'Berita', '2024-01-02', 1, 1, 'lama'),
(8, 'JOURNAL SCHOOL Gelar Acara Pesantren Ramadhan', 'Sekolah Menengah Journal School menggelar acara Pesantren Ramadan yang memukau untuk menyambut dan merayakan kedatangan bulan suci Ramadan. Acara ini menjadi wadah yang penting bagi siswa dan staf sekolah untuk memperdalam spiritualitas, mempelajari nilai-nilai agama Islam, dan meningkatkan koneksi dengan Tuhan. Pesantren Ramadan di Journal School dirancang sebagai platform pembelajaran spiritual yang intens selama bulan suci ini. Dalam suasana yang penuh kekhusyukan, kegiatan ini mencakup pelajaran agama, kajian Al-Quran, tadarus, serta diskusi dan ceramah yang mengangkat berbagai aspek kehidupan Islami. Kepala Sekolah, Bapak Ahmad Fitri, mengungkapkan, \"Pesantren Ramadan adalah momen yang penting bagi siswa kami untuk memperdalam pemahaman mereka tentang ajaran Islam dan nilai-nilai yang terkandung di dalamnya. Kami ingin memastikan mereka merasakan keberkahan dari bulan Ramadan dan mendapatkan manfaat spiritual yang mendalam.\" Selain aktivitas pembelajaran agama, acara ini juga menyediakan ruang bagi siswa untuk berpartisipasi dalam kegiatan sosial dan amal. Mereka diajak untuk terlibat dalam program kegiatan sosial seperti berbagi makanan berbuka puasa, penggalangan dana untuk yayasan, atau kegiatan sosial lainnya yang bertujuan memberikan manfaat bagi masyarakat. Pesantren Ramadan di Journal School bukan hanya tentang peningkatan pengetahuan agama, tetapi juga tentang membentuk karakter dan moral yang kuat. Dengan merayakan spiritualitas dalam bulan suci ini, sekolah ini memainkan peran penting dalam memperkuat nilai-nilai kebaikan, kasih sayang, dan koneksi spiritual siswa-siswanya.', 'keagamaan', '2023-03-24', 14, 5, 'lama'),
(9, 'Untuk Memupuk Silaturahmi Siswa Siswa, SMK Journal School mengadakan acara halal bihalal', 'Sekolah Menengah Journal School dengan penuh kehangatan dan semangat menggelar acara Halal Bihalal sebagai bagian dari tradisi silaturahmi dan kebaikan dalam ajaran Islam. Acara ini menjadi momentum penting bagi siswa, staf, dan komunitas sekolah untuk berkumpul, berbagi kebahagiaan, serta memperkuat hubungan antarindividu. Halal Bihalal di Journal School bukan hanya menjadi ajang bersilahturahmi, tetapi juga momen refleksi dan memaafkan antara satu sama lain. Dalam suasana yang penuh kehangatan, siswa dan staf sekolah diajak untuk saling memaafkan, membangun kembali hubungan yang harmonis, serta mempererat ikatan persaudaraan. Kepala Sekolah, Bapak Imam Santoso, menyatakan, \"Halal Bihalal adalah saat yang tepat bagi kami untuk mengajarkan nilai-nilai toleransi, kerukunan, dan kebaikan yang terkandung dalam ajaran Islam. Kami percaya bahwa memaafkan dan membangun hubungan yang baik adalah langkah penting dalam memperkokoh komunitas kami.\" Acara ini juga menjadi kesempatan bagi siswa untuk belajar tentang pentingnya menjaga silaturahmi dan menghargai hubungan antarindividu. Mereka terlibat dalam berbagai kegiatan seperti diskusi, ceramah, dan kegiatan seni yang mengangkat tema-tema persahabatan, kebaikan, dan perdamaian. Halal Bihalal di Journal School adalah contoh nyata dari komitmen sekolah untuk membangun lingkungan yang penuh kasih sayang, toleransi, dan saling pengertian. Dengan merayakan nilai-nilai kebaikan dan harmoni, sekolah ini berperan penting dalam membentuk siswa-siswanya menjadi individu yang peduli, bertanggung jawab, dan peka terhadap kebutuhan masyarakat.', 'keagamaan', '2023-05-06', 16, 3, 'lama'),
(10, 'JOURNAL SCHOOL Merayakan Maulid Nabi Muhammad SAW dengan Penuh Kebahagiaan', 'Sekolah Menengah Journal School dengan penuh semangat dan penghormatan merayakan peristiwa besar dalam agama Islam, yaitu Mawlid Nabi Muhammad SAW. Acara ini menjadi momen penting di mana siswa dan staf sekolah bersama-sama merenungkan dan merayakan kehidupan dan ajaran Nabi Muhammad SAW. Mawlid di Journal School tidak hanya menjadi perayaan keagamaan, tetapi juga menjadi kesempatan untuk memahami ajaran dan teladan Nabi Muhammad. Dalam suasana yang penuh dengan bacaan shalawat, kisah inspiratif, dan pidato-pidato tentang kebaikan dan kemurahan hati Nabi, siswa diajak untuk menggali makna mendalam dari kehidupan beliau. Kepala Sekolah, Ibu Fatimah Rahayu, menyampaikan, \"Mawlid Nabi Muhammad SAW adalah momen yang memberikan inspirasi dan pengetahuan bagi siswa kami. Kami berupaya untuk mengajarkan nilai-nilai kemurahan hati, toleransi, dan kasih sayang yang diperjuangkan Nabi kepada seluruh umat manusia.\" Acara ini juga menyediakan ruang bagi siswa untuk mengekspresikan penghargaan mereka melalui pengisian acara dengan nasyid, pembacaan puisi, dan persembahan seni yang menggambarkan kebaikan dan ajaran-ajaran Nabi. Melalui perayaan Mawlid ini, Journal School tidak hanya menjadi tempat belajar, tetapi juga menjadi wadah untuk meningkatkan pemahaman spiritual dan moral siswa. Dengan merayakan Mawlid, sekolah ini berperan penting dalam memperkuat akhlak, nilai-nilai kebaikan, dan penghargaan terhadap ajaran agama di antara siswa-siswanya.', 'keagamaan', '2023-09-28', 13, 5, 'baru'),
(11, 'Journal School Merayakan Kesuksesan Peserta Didiknya Dalam Kompetisi Ilmiah Nasional', 'Sekolah Menengah Journal School, sebuah lembaga pendidikan ternama di wilayahnya, merayakan kemenangan gemilang dalam Kompetisi Ilmiah Nasional terbaru. Dalam acara prestisius ini, siswa-siswi berbakat dari sekolah ini berhasil meraih berbagai penghargaan atas penelitian dan karya ilmiah yang inovatif. Tim Journal School mengukir prestasi gemilang dengan memenangkan beberapa kategori penting. Salah satunya adalah kategori Inovasi Teknologi, di mana proyek mereka tentang energi terbarukan mendapatkan pengakuan tertinggi dari dewan juri. Keberhasilan ini merupakan hasil dari dedikasi dan kerja keras para siswa yang dibimbing oleh para pengajar berkualitas di sekolah tersebut. Selain itu, penelitian dalam bidang Kesehatan dan Lingkungan dari Journal School juga mencuri perhatian dengan solusi kreatif dan berkelanjutan yang diusulkan. Ini tidak hanya menunjukkan komitmen sekolah terhadap penelitian ilmiah yang berdampak positif bagi masyarakat tetapi juga menegaskan posisi mereka dalam mendorong pemikiran kritis dan inovasi di kalangan siswa. Kepala Sekolah, Bapak Adi Prabowo, menyampaikan kebanggaannya atas prestasi luar biasa ini. \"Kami sangat bangga melihat semangat dan dedikasi siswa-siswi kami dalam mengeksplorasi pengetahuan dan merumuskan solusi untuk tantangan dunia nyata. Prestasi ini adalah hasil dari kerja keras, ketekunan, dan semangat kolaborasi mereka.\" Sekolah Journal School terus berkomitmen untuk memberikan pendidikan yang memungkinkan siswa untuk berkembang secara akademis dan pribadi. Dengan dukungan penuh dari staf pengajar dan lingkungan yang mendorong eksplorasi intelektual, sekolah ini bertekad untuk terus menjadi wadah bagi generasi masa depan yang berinovasi dan peduli terhadap dunia di sekitarnya.', 'berita', '2024-01-08', 2, 1, 'baru'),
(12, 'Tim Atletik Journal School Mencatat Prestasi Luar Biasa Dalam Kejuaraan Lari', 'Sekolah Menengah Journal School merayakan keberhasilan gemilang dari tim atletik mereka yang mengambil bagian dalam kejuaraan lari lintas alam tingkat regional. Atlet-atlet muda ini tidak hanya menunjukkan keuletan dan kekuatan, tetapi juga mencatat prestasi yang mengesankan di dalam kompetisi yang sangat ketat. Para pelari dari Journal School menunjukkan kecepatan, daya tahan, dan semangat yang luar biasa sepanjang lintasan. Dengan dorongan kuat dari pelatih dan dukungan penuh dari komunitas sekolah, mereka berhasil meraih sejumlah medali emas, perak, dan perunggu dalam berbagai kategori lomba. Pelatih tim atletik, Ibu Sari Indah, menyatakan kebanggaannya atas pencapaian para atletnya. \"Mereka telah menunjukkan komitmen yang luar biasa dalam latihan dan dalam kompetisi. Kemenangan ini adalah hasil dari kerja keras mereka dan semangat bertanding yang tidak pernah pudar.\" Selain meraih medali, tim atletik Journal School juga membanggakan dengan sikap sportivitas mereka. Mereka memberikan dukungan satu sama lain, memberikan semangat positif, dan menunjukkan rasa saling menghormati terhadap lawan-lawannya. \"Kami sangat bangga dengan pencapaian tim atletik sekolah kami,\" kata Bapak Ari, seorang wali murid. \"Mereka tidak hanya atlet yang hebat tetapi juga contoh teladan dalam sikap sportif dan semangat kompetitif yang sehat.\" Prestasi gemilang ini menjadi inspirasi bagi siswa-siswa lain di Journal School untuk mengejar prestasi tinggi dalam olahraga. Diharapkan, pencapaian yang luar biasa ini akan memicu semangat kompetitif yang positif serta semakin memperkuat semangat kebersamaan dalam komunitas sekolah.', 'olahraga', '2023-12-22', 7, 1, 'baru'),
(13, 'Menyelami Kekayaan Sastra dan Budaya di Journal School: Memupuk Kreativitas dan Kemanusiaan', 'Sekolah Menengah Journal School telah menjadi ladang subur bagi penjelajahan mendalam dalam dunia sastra dan kebudayaan. Lebih dari sekadar penekanan pada kurikulum akademis, sekolah ini memancarkan semangat akan seni, sastra, dan kekayaan budaya kepada para siswa. Salah satu pilar utama dalam kurikulum mereka adalah kecintaan pada sastra. Dalam setiap kelas, siswa tidak hanya mempelajari karya-karya sastra, tetapi juga diajak untuk meresapi, menganalisis, dan menyelami makna yang tersembunyi di balik kata-kata. Diskusi tentang sastra bukanlah sekadar pembahasan cerita, melainkan penelusuran jiwa, eksplorasi karakter, dan pemahaman mendalam tentang peradaban di balik setiap karya. Sekolah ini juga menjadi tuan rumah bagi berbagai acara budaya, mulai dari pertunjukan teater hingga festival seni dan sastra. Melalui platform ini, siswa berkesempatan untuk mengekspresikan kreativitas mereka dalam berbagai bentuk seni, sambil memperkaya pemahaman mereka akan beragam budaya di dunia. Kepala Sekolah, Bapak Adi Prasetyo, menjelaskan, \"Penting bagi kami untuk mengajarkan sastra dan budaya, bukan hanya sebagai bagian dari kurikulum, tetapi sebagai jendela ke dunia yang lebih luas. Hal ini tidak hanya mengasah keterampilan kritis, tetapi juga memupuk sikap empati dan penghargaan terhadap keragaman.\" Tak hanya itu, klub sastra dan budaya di Journal School menjadi wadah bagi para siswa untuk mengekspresikan diri dan menyalurkan minat mereka dalam sastra. Diskusi, kajian, serta karya kreatif menjadi inti dari klub ini, menciptakan ruang yang subur bagi bakat-bakat muda untuk berkembang. Pendidikan di Journal School adalah tentang memberdayakan kreativitas, membangun pola pikir yang inklusif, dan membuka mata serta hati terhadap keindahan sastra dan budaya. Dengan demikian, sekolah ini bukan hanya mencetak siswa cerdas secara akademis, tetapi juga mendewasakan generasi yang cerdas secara emosional dan kultural.', 'sastra & budaya', '2024-01-05', 10, 1, 'baru'),
(14, 'Tim Basket Basket Journal School Raih Kemenangan Dramatis di Turnamen Regional', 'Tim basket unggulan dari Sekolah Menengah Journal School memperoleh kemenangan spektakuler dalam pertandingan terbaru mereka di turnamen basket tingkat regional. Dalam pertandingan yang penuh ketegangan dan intensitas, mereka berhasil menaklukkan rival kuat mereka dalam pertandingan yang berakhir dengan skor dramatis. Menghadapi tim lawan yang diunggulkan, para pemain Journal School mempertontonkan keterampilan dan semangat juang yang luar biasa. Dengan koordinasi yang solid dan strategi yang baik, mereka berhasil membalikkan keadaan di babak kedua dan mengejar ketertinggalan dengan permainan yang sangat memukau. Pelatih tim, Pak Dito Santoso, mengungkapkan kebanggaannya atas semangat dan dedikasi timnya. \"Ini adalah kemenangan yang luar biasa bagi kami. Anak-anak menunjukkan tekad yang luar biasa dan tidak pernah menyerah, bahkan ketika situasinya sulit. Mereka memperlihatkan kerja keras dan semangat tim yang luar biasa.\" Pemain kunci dari tim Journal School menunjukkan performa yang mengesankan sepanjang pertandingan, memimpin serangan dengan kecerdasan taktis dan ketangguhan dalam pertahanan. Kemenangan ini tidak hanya membawa kegembiraan bagi tim basket, tetapi juga membangun semangat komunitas sekolah yang merayakan pencapaian gemilang mereka. \"Kami sangat bangga dengan pencapaian tim basket kami,\" kata Ibu Ani, salah satu orang tua siswa. \"Mereka tidak hanya menunjukkan keterampilan dalam bermain, tetapi juga semangat komunitas yang kuat. Ini adalah contoh bagus bagi siswa lain untuk terus berjuang dan berusaha mencapai tujuan mereka.\" Kemenangan dramatis ini telah memotivasi tim basket Journal School untuk terus berlatih dengan keras dan menatap ke turnamen-tournament mendatang dengan semangat yang lebih besar. Diharapkan, prestasi gemilang ini akan menjadi pemicu semangat bagi seluruh siswa untuk mengejar prestasi tinggi dalam olahraga dan bidang lainnya.', 'olahraga', '2024-01-05', 5, 3, 'baru'),
(16, 'Menggali Kekayaan Sastra dan Budaya di Journal School: Menyemai Cinta pada Kreativitas dan Kemanusia', 'Sekolah Menengah Journal School bukan hanya sekadar lembaga pendidikan, tetapi juga medan subur bagi eksplorasi kekayaan sastra dan budaya. Di tengah fokus akan kurikulum akademis yang kuat, sekolah ini menanamkan benih cinta pada seni, sastra, dan warisan budaya dalam pembelajaran siswa. Salah satu hal yang membuat Journal School berbeda adalah perhatian yang mereka berikan pada mata pelajaran sastra. Dalam kelas-kelasnya, siswa diajak untuk memahami karya-karya klasik dan kontemporer, dari sastra lokal hingga internasional. Diskusi tentang sastra bukan hanya sebatas menganalisis cerita, tetapi juga menggali makna mendalam, mengeksplorasi karakter, dan memahami konteks budaya di balik setiap karya. Selain itu, sekolah ini secara aktif menggelar acara dan festival budaya yang memamerkan berbagai ekspresi seni, seperti pementasan teater, pertunjukan musik, festival sastra, dan pameran seni visual. Ini tidak hanya memberikan platform bagi siswa untuk menunjukkan bakat mereka tetapi juga memberikan wawasan tentang pluralitas budaya kepada seluruh komunitas sekolah. Kepala Sekolah, Ibu Devi Suryani, menjelaskan, ', 'sastra & budaya', '2023-12-31', 9, 3, 'lama'),
(17, 'Menginspirasi Melalui Keanekaragaman: Acara Kebudayaan Berkilau di Journal School', 'Sekolah Menengah Journal School telah menciptakan gelombang kegembiraan dan kekayaan melalui acara kebudayaan yang memukau. Dari panggung teater hingga galeri seni, sekolah ini menjadi lahan subur bagi penggalian serta perayaan keanekaragaman budaya. Acara kebudayaan di Journal School bukan hanya sekadar pertunjukan, tetapi sebuah perayaan akan pluralitas yang membentuk ciri khas sekolah ini. Dalam setiap acara, terdapat kesempatan bagi siswa dan komunitas sekolah untuk merayakan warisan budaya dari berbagai penjuru dunia. Salah satu momen berharga adalah panggung teater sekolah yang menjadi pusat perhatian. Dalam pementasan-pementasan mereka, siswa tidak hanya menghidupkan karakter, tetapi juga membawa penonton dalam perjalanan melintasi budaya, sejarah, dan cerita yang memukau. Pameran seni juga menjadi sorotan utama, di mana karya-karya kreatif siswa dipajang dengan bangga. Dari lukisan hingga karya seni digital, galeri seni sekolah ini menjadi jendela yang memperlihatkan keberagaman bakat dan ekspresi di antara siswa. Ibu Maya Wardhani, koordinator acara kebudayaan, menyatakan, \"Acara kebudayaan adalah tentang memperluas pemahaman kita akan dunia. Kami di Journal School percaya bahwa melalui seni dan budaya, kita dapat membangun jembatan yang menghubungkan berbagai komunitas dan menghormati keragaman.\" Acara-acara ini juga menjadi tempat di mana siswa dapat menunjukkan keahlian mereka dalam berbagai bentuk seni, musik, tari, dan penampilan lainnya. Ini tidak hanya mengasah keterampilan, tetapi juga memperkaya pengalaman siswa dalam mengekspresikan diri. Pendidikan di Journal School bukan hanya tentang prestasi akademis, tetapi juga tentang memperluas wawasan serta memperkaya jiwa melalui seni dan budaya. Dengan demikian, acara kebudayaan di sekolah ini tidak hanya merayakan kekayaan budaya, tetapi juga menjadi panggung bagi penemuan dan pertumbuhan individu.', 'sastra & budaya', '2023-12-18', 11, 3, 'lama'),
(19, 'Journal School Membuka Program Baru untuk Pengembangan Keterampilan Kreatif Siswa', 'Sekolah Menengah Journal School mengumumkan peluncuran program inovatif yang bertujuan untuk meningkatkan keterampilan kreatif siswa-siswinya. Program baru ini, yang diberi nama \"Creative Minds Initiative,\" dirancang untuk memberikan ruang lebih besar bagi ekspresi kreatif, kolaborasi, dan eksplorasi ide di antara peserta didik. Dibimbing oleh para profesional dan pengajar ahli di bidangnya, inisiatif ini akan memberikan siswa kesempatan untuk memperluas wawasan mereka melalui beragam kegiatan kreatif. Diantaranya termasuk workshop seni, kompetisi penulisan, pengembangan permainan interaktif, dan proyek seni multidisiplin. Kepala Sekolah, Ibu Maya Wardhani, berbagi pemikirannya tentang tujuan program ini. \"Kami percaya bahwa kreativitas adalah kunci utama untuk mempersiapkan siswa menjadi pemimpin masa depan yang inovatif. Dengan Creative Minds Initiative, kami berharap dapat membangun kemampuan berpikir kritis, kreatif, dan kolaboratif yang kuat di antara siswa kami.\" Salah satu elemen yang menarik dari program ini adalah kolaborasi lintas disiplin. Siswa akan diundang untuk bekerja sama dengan sesama siswa dari berbagai bidang keahlian untuk menciptakan proyek-proyek yang menggabungkan beragam perspektif. Hal ini diharapkan dapat membangun pemahaman yang lebih luas tentang pentingnya integrasi antara seni, sains, teknologi, dan humaniora. Siswa Journal School sangat antusias dengan kesempatan baru ini. Maya, seorang siswa kelas 11, menyatakan, \"Saya sangat senang bahwa sekolah kami memberikan kesempatan untuk mengeksplorasi kreativitas kami di luar kurikulum akademis. Saya berharap bisa belajar banyak dari program ini dan mungkin menciptakan sesuatu yang berarti bersama teman-teman saya.\" Program \"Creative Minds Initiative\" Journal School diharapkan tidak hanya akan memperkaya pengalaman belajar siswa, tetapi juga akan menjadi tonggak penting dalam pendidikan yang bertujuan untuk menghasilkan pemimpin masa depan yang inovatif dan berdaya saing tinggi.', 'berita', '2024-01-09', 3, 4, 'baru'),
(20, 'Journal School Mengadakan Program Penanaman Pohon untuk Kelestarian Lingkungan', 'Sekolah Menengah Journal School mengambil langkah besar dalam upaya keberlanjutan dengan meluncurkan program penanaman pohon massal di sekitar wilayah sekolah. Dalam keterlibatan aktif siswa, program ini bertujuan untuk meningkatkan kesadaran akan pentingnya pelestarian lingkungan dan memberikan kontribusi nyata terhadap upaya global dalam perlindungan alam. Dengan dukungan dari staf pengajar dan partisipasi siswa dari berbagai tingkatan, lebih dari 500 bibit pohon telah ditanam di sekitar area sekolah. Program ini bukan hanya tentang menanam pohon, tetapi juga tentang membangun kesadaran akan pentingnya menjaga lingkungan bagi generasi masa depan. Kepala Sekolah, Bapak Rahmat Santoso, menegaskan tujuan dari inisiatif ini, \"Kami di Journal School percaya bahwa pendidikan tidak hanya terjadi di dalam kelas, tetapi juga melalui tindakan nyata. Dengan penanaman pohon ini, kami ingin melibatkan siswa dalam merawat alam sekitar kami, memberikan pelajaran penting tentang tanggung jawab terhadap lingkungan.\" Program ini juga melibatkan edukasi terkait pentingnya pepohonan bagi ekosistem dan perubahan iklim. Para siswa tidak hanya terlibat dalam kegiatan fisik menanam pohon, tetapi juga mendapatkan pengetahuan mendalam tentang cara menjaga dan merawat lingkungan sekitar mereka. \"Ini adalah pengalaman yang luar biasa. Saya belajar betapa pentingnya pohon bagi kita semua dan bagaimana kita dapat berperan dalam menjaga alam,\" ujar Nia, seorang siswi kelas 9 yang aktif dalam kegiatan penanaman pohon. Program penanaman pohon ini hanya merupakan awal dari komitmen Journal School dalam berkontribusi pada keberlanjutan lingkungan. Diharapkan, langkah ini akan memicu semangat berkelanjutan untuk menjaga alam dan mendorong tindakan nyata lainnya di masa depan.', 'berita', '2024-01-03', 4, 4, 'lama'),
(21, 'Journal School Sabet Kemenangan Bersejarah dalam Kejuaraan Bulu Tangkis Regional', 'Sekolah Menengah Journal School merayakan kemenangan gemilang setelah tim bulu tangkis mereka mencatat sejarah dalam kejuaraan regional terbaru. Para pemain bulu tangkis sekolah ini menunjukkan kepiawaian dan dedikasi yang luar biasa, berhasil meraih gelar juara dalam kompetisi yang berlangsung sangat ketat. Dalam pertandingan final yang penuh tensi, tim bulu tangkis Journal School tampil dengan performa yang memukau. Mereka menunjukkan teknik yang solid, kecepatan, dan ketangguhan mental dalam menghadapi lawan-lawannya yang tangguh. Pelatih tim bulu tangkis, Pak Arif Wijaya, menyampaikan kebanggaannya terhadap pencapaian timnya. \"Anak-anak telah memberikan yang terbaik dari diri mereka dalam kompetisi ini. Mereka telah berlatih keras dan fokus untuk mencapai hasil yang luar biasa ini.\" Para pemain kunci dari tim bulu tangkis Journal School menunjukkan permainan yang memukau sepanjang turnamen, menginspirasi teman-teman setim mereka dengan semangat dan keterampilan yang luar biasa. Kemenangan ini tidak hanya menjadi kebanggaan bagi tim, tetapi juga mengukuhkan posisi sekolah dalam kancah olahraga regional. \"Kami sangat bangga dengan pencapaian tim bulu tangkis kami,\" kata Ibu Yuni, seorang guru di sekolah tersebut. \"Mereka tidak hanya menang, tetapi juga menunjukkan kerja keras, semangat kompetitif yang sehat, dan sikap sportif yang patut dicontoh.\" Kemenangan bersejarah ini memberikan semangat baru bagi siswa-siswa Journal School untuk terus mengejar prestasi tinggi dalam olahraga. Di samping itu, pencapaian gemilang ini juga menegaskan komitmen sekolah dalam mendukung dan mengembangkan potensi siswa di bidang olahraga.', 'olahraga', '2023-11-30', 8, 4, 'lama'),
(22, 'Menyemai Kebudayaan: Journal School Merayakan Kesenian Minangkabau dengan Penuh Keindahan dan Kebera', 'Sekolah Menengah Journal School, dalam semangat keberagaman dan penghargaan terhadap warisan budaya, menggelar perayaan khusus yang memukau untuk merayakan keindahan kesenian Minangkabau. Acara ini bukan hanya menjadi perayaan, tetapi juga menjadi penghormatan akan kekayaan budaya yang tak ternilai dari suku Minangkabau. Dari tarian tradisional hingga kuliner khas, acara tersebut menjadi arena di mana siswa dan komunitas sekolah dapat menyelami, mempelajari, dan menikmati pesona kebudayaan Minangkabau. Panggung utama dimeriahkan dengan tarian-tarian yang memukau, menampilkan gerak yang elegan dan cerita yang menyentuh. Kegiatan kuliner turut menjadi daya tarik, di mana makanan khas Minangkabau seperti rendang, sate padang, dan gulai dipamerkan dan disajikan dengan penuh kehangatan. Siswa dan pengunjung diajak untuk menikmati cita rasa khas dari daerah tersebut. Kepala Sekolah, Ibu Devi Suryani, menekankan pentingnya perayaan budaya seperti ini. \"Acara seperti ini adalah tentang mendukung keragaman budaya yang kita miliki. Kami di Journal School berkomitmen untuk memberikan ruang bagi siswa kami untuk memahami dan menghargai keanekaragaman budaya di Indonesia dan dunia.\" Acara ini juga menjadi peluang bagi siswa untuk belajar dan berpartisipasi dalam workshop seni, belajar tentang sejarah dan nilai-nilai yang terkandung dalam kesenian Minangkabau, serta merasakan kehangatan budaya yang terkandung dalam setiap aspek acara. Perayaan kesenian Minangkabau di Journal School adalah bukti nyata dari komitmen sekolah dalam memperluas wawasan siswa serta mendorong penghargaan terhadap keberagaman budaya. Dengan perayaan budaya semacam ini, sekolah ini tidak hanya menjadi tempat pendidikan, tetapi juga menjadi panggung bagi perjumpaan dan apresiasi terhadap keindahan budaya Indonesia.', 'sastra & budaya', '2024-01-04', 12, 4, 'baru'),
(23, 'Journal School: Merayakan Awal Tahun Baru Hijriah Dengan Semangat Kebajikan dan Kepedulian', 'Sekolah Menengah Journal School merayakan awal tahun baru Hijriah dengan penuh semangat dan kepedulian. Acara penyambutan tahun baru ini tidak hanya menjadi momen perayaan, tetapi juga menjadi kesempatan untuk merenungkan nilai-nilai kebaikan, kepemimpinan, dan kepedulian dalam ajaran Islam. Penyambutan Tahun Baru Hijriah di Journal School tidak hanya menjadi perayaan agama, tetapi juga sebuah pembelajaran tentang sejarah dan nilai-nilai yang terkandung dalam kalender Hijriah. Melalui ceramah, diskusi, dan kegiatan refleksi, siswa diajak untuk memahami makna dari pergantian tahun Hijriah dan pesan-pesan yang terkandung di dalamnya. Kepala Sekolah, Ibu Siti Aisyah, menyatakan, \"Penyambutan tahun baru Hijriah adalah momen yang penting bagi kami di Journal School untuk mengajarkan nilai-nilai kepemimpinan, kebaikan, dan kepedulian. Kami berupaya untuk memperkokoh pemahaman siswa akan sejarah Islam dan bagaimana nilai-nilai ini dapat membentuk karakter mereka.\" Acara ini juga menjadi wadah bagi siswa untuk menunjukkan kepedulian mereka terhadap sesama melalui kegiatan amal dan sosial. Mereka terlibat dalam berbagai kegiatan seperti penggalangan dana, bakti sosial, atau kunjungan ke panti asuhan, sebagai upaya untuk memberikan manfaat kepada masyarakat sekitar. Penyambutan tahun baru Hijriah di Journal School adalah bukti nyata dari komitmen sekolah untuk memperdalam pemahaman spiritual siswa dan membangun karakter yang kuat. Dengan merayakan nilai-nilai kebaikan dan kepedulian, sekolah ini berperan penting dalam membentuk siswa-siswanya menjadi individu yang peduli, bertanggung jawab, dan peka terhadap kebutuhan masyarakat.', 'keagamaan', '2023-12-28', 15, 5, 'baru'),
(24, 'Journal School Torehkan Prestasi Gemilang dalam Kejuaraan Sepak Bola Antarsekolah', 'Prestasi luar biasa diraih oleh tim sepak bola Sekolah Menengah Journal School dalam kejuaraan antarsekolah yang diselenggarakan di wilayah mereka. Tim sepak bola sekolah tersebut menunjukkan kekuatan dan ketangguhan mereka dengan mencapai final dan akhirnya meraih gelar juara dalam turnamen yang sengit dan penuh semangat. Dalam pertandingan final yang sangat dinanti-nantikan, para pemain Journal School tampil dengan performa yang mengesankan. Mereka tidak hanya menunjukkan keterampilan teknis yang luar biasa, tetapi juga semangat bertanding yang tak kenal lelah sepanjang 90 menit pertandingan. Pelatih tim sepak bola, Pak Budi Santoso, menyatakan kebanggaannya terhadap pencapaian timnya. ', 'berita', '2023-12-12', 6, 3, 'lama'),
(29, 'Berita Terbaru', 'Demo Besar Besaran Di Kantor DPR', 'berita', '2025-08-31', 43, 12, 'lama');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idKomentar` int(10) NOT NULL,
  `isiKomentar` text NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `idArtikelPublish` int(10) NOT NULL,
  `tglKomentar` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idKomentar`, `isiKomentar`, `nisn`, `idArtikelPublish`, `tglKomentar`) VALUES
(1, 'bagus sekali', '00324315', 19, '2025-08-29 23:01:14'),
(2, 'Wah Ini Sangat Bagus Sekali!', '00324315', 11, '2025-08-29 23:41:59'),
(3, 'hebat!', '00324315', 8, '2025-08-29 23:43:29'),
(8, 'ini berita yang bagus!', '00324316', 19, '2025-08-30 00:39:16'),
(9, 'Berita yang keren', '00324316', 13, '2025-08-30 00:49:05'),
(10, 'Berita yang bermanfaat!', '00324315', 11, '2025-08-30 15:17:40'),
(11, 'Bagus!!!', '00324315', 19, '2025-08-30 15:56:20'),
(12, 'Bagus!!!', '00324316', 19, '2025-08-30 16:30:43'),
(14, 'Mantap!!!', '00324336', 13, '2025-08-30 17:36:33'),
(15, 'sangat bagus sekali!', '00324315', 19, '2025-08-30 17:40:17'),
(16, 'Keren!!!', '00324325', 19, '2025-08-31 12:04:01'),
(17, 'Keren!!!', '00324316', 23, '2025-08-31 12:43:06'),
(19, 'Keren!', '00324325', 29, '2025-08-31 23:01:19'),
(20, 'sangat bagus sekali beritanya!', '00324325', 19, '2025-09-01 09:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `kodePenulis` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `namaPenulis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`kodePenulis`, `nisn`, `namaPenulis`) VALUES
(1, '00324316', 'pipo'),
(3, '00324315', 'fadli'),
(4, '00324318', 'araa'),
(5, '00324323', 'azzhra19'),
(6, '00324336', 'admin'),
(12, '00324325', 'Gani Gustio');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `namaSiswa` varchar(30) NOT NULL,
  `kelas` int(3) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `namaSiswa`, `kelas`, `jurusan`, `jk`) VALUES
('00324315', 'Muhammad Fadli Fahrezi', 10, 'Teknik Otomotif', 'Laki - Laki'),
('00324316', 'Mifta', 10, 'Teknik Mesin', 'perempuan'),
('00324317', 'Gita Ramadani', 12, 'Rekayasa Perangkat Lunak', 'Perempuan'),
('00324318', 'Dara Ayuni', 11, 'Teknik Audio Video', 'Perempuan'),
('00324319', 'Muhammad Irfan Alkhairy', 11, 'Teknik Mesin', 'Laki-Laki'),
('00324320', 'Arya Danuarta', 11, 'DPIB', 'Laki-Laki'),
('00324321', 'Cintia Sepriza Adelti', 10, 'KKBT', 'Perempuan'),
('00324322', 'Rahma Nadya', 10, 'Teknik Komputer Jaringan', 'Perempuan'),
('00324323', 'Dewi Fatimah Azzahra', 12, 'Rekayasa Perangkat Lunak', 'Perempuan'),
('00324325', 'Gani Gustio', 12, 'Rekayasa Perangkat Lunak', 'Laki-Laki'),
('00324333', 'Alghifari Maulana', 12, 'TITL', 'Laki-Laki'),
('00324336', 'Zakia', 12, 'Rekayasa Perangkat Lunak', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(10) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `nisn`, `nama`, `pass`, `level`) VALUES
(324316, '00324336', 'Zakia ', '12345', 'admin'),
(324318, '00324316', 'pipo', '123', 'penulis'),
(324319, '00324318', 'araa', '123456', 'penulis'),
(324324, '00324336', 'Zakia', '123456', 'siswa'),
(324325, '00324316', 'pipo', '1234', 'admin'),
(324339, '00324315', 'fadli', '123', 'penulis'),
(324344, '00324325', 'Gani Gustio', '1234', 'penulis'),
(324345, '00324325', 'Gani Gustio', '123', 'admin'),
(324346, '00324325', 'Gani Gustio', '12345', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikelpengajuan`
--
ALTER TABLE `artikelpengajuan`
  ADD PRIMARY KEY (`idArtikel`),
  ADD KEY `kodePenulis` (`kodePenulis`);

--
-- Indexes for table `artikelpublish`
--
ALTER TABLE `artikelpublish`
  ADD PRIMARY KEY (`idArtikelPublish`),
  ADD KEY `kodePenulis` (`kodePenulis`),
  ADD KEY `idArtikel` (`idArtikel`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idKomentar`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `idArtikelPublish` (`idArtikelPublish`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`kodePenulis`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikelpengajuan`
--
ALTER TABLE `artikelpengajuan`
  MODIFY `idArtikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `artikelpublish`
--
ALTER TABLE `artikelpublish`
  MODIFY `idArtikelPublish` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idKomentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `kodePenulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324347;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikelpengajuan`
--
ALTER TABLE `artikelpengajuan`
  ADD CONSTRAINT `artikelpengajuan_ibfk_1` FOREIGN KEY (`kodePenulis`) REFERENCES `penulis` (`kodePenulis`);

--
-- Constraints for table `artikelpublish`
--
ALTER TABLE `artikelpublish`
  ADD CONSTRAINT `artikelpublish_ibfk_1` FOREIGN KEY (`kodePenulis`) REFERENCES `penulis` (`kodePenulis`),
  ADD CONSTRAINT `artikelpublish_ibfk_2` FOREIGN KEY (`idArtikel`) REFERENCES `artikelpengajuan` (`idArtikel`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`idArtikelPublish`) REFERENCES `artikelpublish` (`idArtikelPublish`);

--
-- Constraints for table `penulis`
--
ALTER TABLE `penulis`
  ADD CONSTRAINT `penulis_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`);

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
