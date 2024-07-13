<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 60px;
        }
        .container {
            max-width: 1500px;
            margin: 0 auto;
        }
        .row {
            margin-bottom: 40px;
        }
        .row h2 {
            font-size: 48px;
            margin-bottom: 40px;
        }
        .daftarfilms {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .daftarfilm {
            flex: 1 1 calc(50% - 30px);
            box-sizing: border-box;
            text-align: center;
            background: #1e1e1e;
            border-radius: 14px;
            padding: 10px;
            position: relative; /* Menambahkan posisi relatif untuk konten tersembunyi */
        }
        .daftarfilm img {
            max-width: 100%;
            border-radius: 8px;
        }
        .daftarfilm-title {
            margin-top: 10px;
            font-size: 16px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .detail-info {
            display: none;
            margin-top: 10px;
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
        }
        .showtimes {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
    <script>
        function showDetail(event, film) {
            event.preventDefault();
            const detailInfo = document.getElementById(`detail-info-${film}`);
            if (detailInfo.style.display === "none") {
                detailInfo.style.display = "block";
            } else {
                detailInfo.style.display = "none";
            }
        }

        function showSynopsis(event, film) {
            event.preventDefault();
            const synopsis = document.getElementById(`synopsis-${film}`);
            if (synopsis.style.display === "none") {
                synopsis.style.display = "block";
            } else {
                synopsis.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <center><h2>Daftar Film</h2></center>
            <div class="daftarfilms">
                <div class="daftarfilm">
                    <img src="{{ asset('images/vina.jpeg') }}" alt="vina">
                    <h5 class="daftarfilm-title">VINA : SEBELUM 7 HARI</h5>
                    <p>GENRE : HORROR</p>
                    <a href="#" class="btn" onclick="showDetail(event, 'vina')">Detail</a>
                    <a href="#" class="btn">Booking Kursi</a>
                    <div id="detail-info-vina" class="detail-info">
                        <div class="showtimes">Jam Tayang: 15:00, 18:00, 21:00</div>
                        <p>VINA adalah film horor yang mengisahkan... <a href="#" onclick="showSynopsis(event, 'vina')">sinopsis lengkap</a></p>
                        <div id="synopsis-vina" style="display: none;">
                            <p>Kisah horor ini menceritakan kronologi kematian seorang gadis berusia 16 tahun bernama Vina di tahun 2016. Pada saat itu, Vina ditemukan tewas dengan kekasihnya bernama Eky dengan keadaan tubuh yang hancur.

                                Setelah ditemukan, kasus ini pun segera diserahkan kepada pihak kepolisian. Keluarga yang melihat jasad mereka mulanya mengira keduanya tewas karena kecelakaan lalu lintas yang mengakibatkan jatuh dari jembatan layang.
                                
                                Akan tetapi, saat proses pemeriksaan berlangsung pihak kepolisian menemukan kejanggalan. Mereka pun memutuskan untuk melakukan penyelidikan lebih lanjut atas kasus kematian Vina dan Eky.
                                
                                Kemudian pada hari ke-6 sejak kematian Vina dan Eky, seorang sahabat Vina bernama Linda tiba-tiba menghubungi keluarga Vina. Pihak keluarga Vina pun langsung mendatangi Linda.
                                
                                Sesampainya di tujuan, Linda mendadak kerasukan arwah Vina. Melalui tubuh Linda, arwah Vina lantas menceritakan kronologi kematiannya.
                                
                                Arwah Vina mengatakan dia dan kekasihnya Eky diserang oleh anggota geng motor sampai ke jalan layang Talun. Geng motor yang berjumlah 11 orang itupun mulai menyiksa Vina dengan brutal.
                                
                                Tidak hanya itu, Vina juga sempat diperkosa oleh para pelaku geng motor. Salah satu pelaku bahkan merupakan kenalan Vina yang bernama Egi.
                                
                                Egi merupakan sahabat dari Eky, pacar Vina. Sebelumnya Egi pernah menyimpan rasa pada Vina namun ditolak dengan cara yang tidak baik.
                                
                                Vina meludahi Egi sehingga dia menyimpan rasa kesal yang mendalam. Maka, dengan penuh amarah Egi bersama geng motornya menyiksa, memperkosa, dan membunuh Vina di depan Eky. Setelahnya, Eky pun turut dibunuh.
                                
                                Arwah Vina yang tidak terima dengan kabar palsu tentang kematiannya itu, memutuskan turun tangan. Lantas, bagaimana kelanjutan kisahnya? Akankah Vina berhasil mengungkapkan kronologis sebenarnnya?...</p>
                        </div>
                    </div>
                </div>
                <div class="daftarfilm">
                    <img src="{{ asset('images/badarawuhi.jpeg') }}" alt="badarawuhi">
                    <h5 class="daftarfilm-title">BADARAWUHI DI DESA PENARI</h5>
                    <p>GENRE : HORROR</p>
                    <a href="#" class="btn" onclick="showDetail(event, 'badarawuhi')">Detail</a>
                    <a href="#" class="btn">Booking Kursi</a>
                    <div id="detail-info-badarawuhi" class="detail-info">
                        <div class="showtimes">Jam Tayang: 15:00, 18:00, 21:00</div>
                        <p>BADARAWUHI adalah film horor yang mengisahkan... <a href="#" onclick="showSynopsis(event, 'badarawuhi')">sinopsis lengkap</a></p>
                        <div id="synopsis-badarawuhi" style="display: none;">
                            <p>Badarawuhi masuk dalam deretan film lebaran yang patut untuk ditonton. Film yang tayang mulai 11 April 2024 ini diproduseri oleh Manoj Punjabi dan disutradarai oleh Kimo Stamboel ini turut dibintangi oleh aktris kenamaan, seperti Aulia Sarah, Jourdy Pranata, Ardit Erwandha, Maudy Effrosina, M. Iqbal Sulaiman, dan lain-lain.
                                Film Badarawuhi di Desa Penari menceritakan empat anak muda yang terdiri dari Mila (Maudy Effrosina), Yuda (Jourdy Pranata), Jito (M. Iqbal Sulaiman), dan Roy (Ardit Erwandha) yang tengah berkunjung ke sebuah desa yakni Desa Penari. Desa tersebut masih menjunjung tinggi seni budaya Jawa, salah satunya seni tari tradisional.
                                Setelah tiba di Desa Penari, mereka pun langsung bertanya akan keberadaan sesepuh desa untuk kebutuhan wawancara. Tapi, rupanya sesepuh desa yang bernama Mbah Putri itu baru saja meninggal dunia. Maka dari itu, mereka disarankan untuk mendatangi Mbah Buyut selaku sesepuh yang lain
                                Mila cs rupanya memiliki sebuah misi khusus yakni mencari keberadaan penari berparas cantik. Sebelumnya mereka sudah mengantongi sketsa penari tersebut yang pada gambarnya terlihat sebuah bangunan dan gelang berwarna emas. Sayangnya, kedatangan Mila rupanya sudah ditunggu oleh sosok siluman berwujud wanita penari yang dikenal dengan nama Badarawuhi (Aulia Sarah).
                                Usut punya usut, Badarawuhi yang merupakan seorang ratu penguasa roh Desa Penari itu mengincar Mila untuk menjadi dhawuh atau penari desa. Tanpa Mila sadari, ia pun merasakan berbagai peristiwa janggal yang mengantarkan dirinya kepada Badarawuhi.
                                Setelah mengalami kejadian mistis, ia pun harus melalui sebuah ritual untuk mengetahui kenapa Badarawuhi menginginkannya sebagai calon dhawuh. Dalam ritual tersebut, Mila cs dibawa ke sebuah sandang untuk dimandikan. Namun, setelah ritual itu justru Mila malah mengalami peristiwa yang semakin tidak masuk akal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="daftarfilm">
                    <img src="{{ asset('images/dilan1983.jpeg') }}" alt="dilan1983">
                    <h5 class="daftarfilm-title">DILAN 1983</h5>
                    <p>GENRE : ROMANCE</p>
                    <a href="#" class="btn" onclick="showDetail(event, 'dilan1983')">Detail</a>
                    <a href="#" class="btn">Booking Kursi</a>
                    <div id="detail-info-dilan1983" class="detail-info">
                        <div class="showtimes">Jam Tayang: 15:00, 18:00, 21:00</div>
                        <p>DILAN 1983 adalah film romantis yang mengisahkan... <a href="#" onclick="showSynopsis(event, 'dilan1983')">sinopsis lengkap</a></p>
                        <div id="synopsis-dilan1983" style="display: none;">
                            <p>Dilan 1983: Wo Ai Ni dibintangi Muhammad Adhiyat sebagai Dilan, sang pemeran utama. Ia memerankan karakter Dilan versi muda, sekitar 7 tahun sebelum Dilan versi Iqbaal Ramadhan.
                                Dilan 1983: Wo Ai Ni berlatar pada 1983, ketika ayah Dilan (Bucek Deep), bertugas sebagai tentara di Timor Timur. Saat itu, Dilan (Muhammad Adhiyat) berusia 12 tahun dan ikut ayahnya bertugas di Timor Timur.Setelah menghabiskan 1,6 tahun di Timor Timur, Dilan kembali ke Bandung dan melanjutkan sekolah di tempat sebelumnya. Ia kembali bertemu teman-teman lama di sekolah.
                                Tetapi, sebelum Dilan kembali, ternyata ada murid pindahan dari Semarang, Jawa Tengah. Murid itu bernama Mei Lien (Malea Emma), seorang gadis keturunan Tionghoa
                                Dilan yang tertarik kepada Mei Lien pun seringkali menggoda gadis tersebut. Ia pun berusaha semakin dekat dengan murid baru itu lewat berbagai cara.
                                Tak hanya itu, ketertarikannya dengan Mei Lien membuat Dilan jadi mempelajari bahasa Mandarin dan tertarik membaca buku yang membahas tentang China.
                                Perasaan cinta monyet Dilan tidak berhenti di situ. Ia juga merasa cemburu hingga bersaing dengan murid lain bernama Furqon yang lebih sering menghabiskan waktu bersama Mei Lien di kelas.
                                ...</p>
                        </div>
                    </div>
                </div>
                <div class="daftarfilm">
                    <img src="{{ asset('images/ancika.jpeg') }}" alt="ancika">
                    <h5 class="daftarfilm-title">ANCIKA : DIA YANG BERSAMAKU 1995s</h5>
                    <p>GENRE : ROMANCE</p>
                    <a href="#" class="btn" onclick="showDetail(event, 'ancika')">Detail</a>
                    <a href="#" class="btn">Booking Kursi</a>
                    <div id="detail-info-ancika" class="detail-info">
                        <div class="showtimes">Jam Tayang: 15:00, 18:00, 21:00</div>
                        <p>ANCIKA adalah film romantis yang mengisahkan... <a href="#" onclick="showSynopsis(event, 'ancika')">sinopsis lengkap</a></p>
                        <div id="synopsis-ancika" style="display: none;">
                            <p>Ancika Mehrunisa Rabu (Zee JKT48) merupakan siswi kelas 3 SMA yang terobsesi dengan pendidikan dan ilmu pengetahuan. Kehidupannya lebih banyak dihabiskan dengan belajar, dan mengerjakan tugas di rumah.
                                Ancika merasa kehidupan remaja seperti teman-temannya tidak cocok baginya. Bahkan, ia tak ingin pacaran lantaran merasa membuang-buang waktu dan peluang mengejar cita-citanya.
                                Padahal Ancika termasuk cewek populer di sekolah. Banyak cowok berusaha untuk mendekatinya, mulai dari teman lesnya, anggota geng motor bernama Bono (Jefan Nathanio), hingga pria dewasa yang dijodohkan kepadanya bernama Yadit (Daffa Wardhana).
                                Ancika bukan hanya terobsesi dengan belajar, ia juga tak takut menolak hingga mengusir cowok-cowok itu. Jutek adalah bagian dari wajah Ancika sehari-hari.
                                Hingga suatu kali, Ancika datang ke rumah kakeknya untuk membawakan oleh-oleh. Di rumah kakek yang ia sebut Abah (Mathias Muchus) tersebut, ada sekelompok pemuda yang sedang membahas koleksi motor Abah.
                                Salah satu cowok usia kulihan tersebut, adalah Dilan (Arbani Yasiz). Dilan sempat terpesona sesaat melihat Ancika. Namun Ancika cuek bebek terhadap mereka, sama seperti ke cowok lainnya.
                                Ketika Ancika sudah selesai memberikan bingkisan untuk Abah, ia mendapati teman-teman lesnya diinterogasi oleh Dilan dan dua temannya hingga ketakutan.
                                Ancika pun maju pasang badan melawan Dilan. Ancika yang tak suka dengan arogansi Dilan berhasil membawa teman-teman lesnya untuk pergi dari situ.
                                Namun Ancika tak menyangka, bahwa Dilan merupakan teman dari saudaranya, Mang Anwar (Dito Darmawan). Ancika sempat mengutarakan ketidaksukaannya soal Dilan kepada Mang Anwar.
                                Mang Anwar justru heran dengan tanggapan Ancika. Ia pun memberitahu bahwa Dilan adalah sosok yang pintar hingga bisa masuk Institut Teknologi Bandung (ITB). Ancika tak percaya dan menilai Dilan nyogok untuk masuk ITB.
                                ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
