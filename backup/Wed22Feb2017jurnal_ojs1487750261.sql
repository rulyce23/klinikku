DROP TABLE jurnal;

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO jurnal VALUES("1","1","018415","rce23","Acianta(LPKIA),Rikki(LPKIA),Farah(LPKIA)","","Jurnal National Akreditasi","","Game","Ati Suci Dian Martha1, Fauziyyah Hanif Basuki2","Perancangan GAME","Jurnal Game Education","Matematika merupakan ilmu universal yang memiliki peranan penting dalam perkembangan ilmu pengetahuan\ndan teknologi modern. Matematika sangat erat kaitannya dengan perkembangan pola pikir manusia yang\nberpengaruh bagi peningkatan kualitas sumber daya manusia. Proses pembelajaran matematika di sekolah pada\numumnya berkonsentrasi pada latihan menyelesaikan soal yang bersifat prosedural yang cenderung\nmembosankan daripada menanamkan pemahaman. Siswa hanya menerima konsep pemahaman secara\ninformatif, menerima contoh soal dan dituntut untuk menyelesaikan soal-soal latihan.","2","4","6","COVER.png","2008-11-04","2017-02-19","","0","0","","TERBIT","APPROVED","");
INSERT INTO jurnal VALUES("30","1","","rce23`","Amaliah(UPI),Maman(UPI),Nurindah(UPI),Ikhwan(UPI)","","Jurnal National Akreditasi","Bisnis","bisnis nasabah e-banking","Amaliah","Sistem Pendistribusian E-Banking commerce ","Transaksi Pendistribusian melalui Bisnis E-Banking ","bisnis","4","4","6","COVER.png","2017-02-17","2017-02-20","Tugas P.I.K.docx","0","0","","","","");
INSERT INTO jurnal VALUES("2","1","","rce23","Sonty Lena, Charel Samuel, Richard Victor","0983184985","Jurnal National Akreditasi","Management Information","Seminar ","Sonty Lena","Teknologi Interaksi Interface Seminar Program ","Perangkat Lunak Interface Seminar Program","Mengenai Interface Seminar Perangkat Lunak","8","7","6","COVER.png","2007-02-13","2017-02-02","242.pdf","0","0","","TERBIT","APPROVED","");
INSERT INTO jurnal VALUES("3","1","014841","rce23","Hasan balubita,Hanif Fakhruroja, Faiz Muqorir Kaffah","0983184986","Jurnal National Akreditasi","","Teknologi","Hasan Balubita","Teknologi Struktur Proyek Program ","Perangkat Proyek Struktural Bisnis","Mengenai Bisnis perangkat, Proyeksi Struktural bisnis","4","3","6","COVER.png","2007-02-09","2017-02-19","","0","0","","TERBIT","APPROVED","");
INSERT INTO jurnal VALUES("4","1","","rce","Bertha Musty(LPKIA),Charel Samuel(LPKIA),Richard Genteng(LPKIA)","01934841945","Jurnal National Akreditasi","Komputer","Information benesoft skill ","Richard Victor Genteng","Informatika Bisnis menggunakan Android Power Over","Perangkat Lunak Android Berorientasi Object Bisnis","Android","4","3","6","COVER.png","2008-02-13","2017-02-07","formmenu.pdf","0","0","","TERBIT","APPROVED","");
INSERT INTO jurnal VALUES("5","3","","lisdah","Sofia(UPI),Tety(Kepkes)","039451585857","Jurnal National Akreditasi","Kantor","Informasi Kesehatan","Sofia","Informasi Kesehatan Sumber Daya Bagi Bisnis Tata Usaha","Sistem Informasi Kesehatan Bisnis SDM & Tata Usaha","Kesehatan SDM bagi tata usaha & bisnis kantor","5","4","8","COVER.png","2006-02-16","2017-02-08","A.pdf","0","0","","TERBIT","APPROVED","");
INSERT INTO jurnal VALUES("31","1","","rce23","Zulfikar(UNPAD),Soni(UNPAD),HAfiz(UNPAD)","01934842094","Jurnal International","\n						Management Information","Information of technology benesofting","Andika","Informasi Teknologi benesoft ilmu komunikasi it","Sistem Informasi Ilmu Komunikasi benesoft ","mi komunikasi","5","4","6","COVER.png","2004-02-19","2017-02-20","5.pdf","12000","0","","","","");
INSERT INTO jurnal VALUES("32","1","","rce23`","Andy(LPKIA),Rvg(LPKIA),Gunawan(LPKIA)","09238482","Jurnal International","\n						Management Information","Information benesoft skill ","Andy","Informatika Bisnis menggunakan Android Power Over","Sistem Informasi Kesehatan Bisnis SDM & Tata Usaha","Sistem Informasi Kesehatan Bisnis","0","0","0","","2004-02-19","2017-02-22","30.pdf","0","0","","","","");
INSERT INTO jurnal VALUES("33","1","","rce23","johni","01481484","Jurnal International","SPK","Informasi Teknologi robotik ","Johny setiadi","Informasi Kesehatan Sumber Daya Bagi Bisnis Tata Usaha","Sistem Informasi Kesehatan Bisnis SDM & Tata Usaha","robotik","0","0","0","","2004-02-19","2017-02-22","6. Vol 5-2 Ati Suci Dian Martha & Fauziyyah.pdf","0","0","","","","");



