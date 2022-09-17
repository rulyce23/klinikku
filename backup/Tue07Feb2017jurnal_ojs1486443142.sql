
CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` char(6) NOT NULL,
  `nama_publisher` varchar(50) NOT NULL,
  `anggota` text NOT NULL,
  `issn` varchar(40) NOT NULL,
  `jenis_jurnal` enum('Jurnal International','Jurnal National Akreditasi','Jurnal National Tidak Akreditasi') NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `kata_kunci` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `abstraksi` text NOT NULL,
  `vol` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `hal` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `tahun` date NOT NULL,
  `tgl_diajukan` date NOT NULL,
  `berkas` text NOT NULL,
  `biaya` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `publikasi` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status2` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nidn` (`nidn`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO jurnal VALUES("1","LP0001","rce23","Acianta(LPKIA),Rikki(LPKIA),Farah(LPKIA)","","Jurnal National Akreditasi","Education","Game","Ati Suci Dian Martha1, Fauziyyah Hanif Basuki2","P E R A N C A N G A N G A M E E D U K A T I F (PERHITUN","Jurnal Game Education","Matematika merupakan ilmu universal yang memiliki peranan penting dalam perkembangan ilmu pengetahuan\ndan teknologi modern. Matematika sangat erat kaitannya dengan perkembangan pola pikir manusia yang\nberpengaruh bagi peningkatan kualitas sumber daya manusia. Proses pembelajaran matematika di sekolah pada\numumnya berkonsentrasi pada latihan menyelesaikan soal yang bersifat prosedural yang cenderung\nmembosankan daripada menanamkan pemahaman. Siswa hanya menerima konsep pemahaman secara\ninformatif, menerima contoh soal dan dituntut untuk menyelesaikan soal-soal latihan.","0","0","0","","2008-11-04","2016-11-30","6. Vol 5-2 Ati Suci Dian Martha & Fauziyyah.pdf","0","0","","TERBIT","APPROVED","");
INSERT INTO jurnal VALUES("2","","rce23","Sonty Lena, Charel Samuel, Richard Victor","0983184985","Jurnal National Akreditasi","Management Information","Seminar ","Sonty Lena","Teknologi Interaksi Interface Seminar Program ","Perangkat Lunak Interface Seminar Program","Mengenai Interface Seminar Perangkat Lunak","0","0","0","","2007-02-13","2017-02-02","242.pdf","0","0","","","","");
INSERT INTO jurnal VALUES("3","","rce23","Hasan balubita,Hanif Fakhruroja, Faiz Muqorir Kaffah","0983184986","Jurnal National Akreditasi","Management Information","Teknologi","Hasan Balubita","Teknologi Struktur Proyek Program ","Perangkat Proyek Struktural Bisnis","Mengenai Bisnis perangkat, Proyeksi Struktural bisnis","0","0","0","","2007-02-09","2017-02-02","242.pdf","0","0","","","","");



