<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_addres FROM  db_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
</html><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<title>Hijab Style | Beauty Hijab</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/image-slider.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

		<!-- Bootstrap core CSS -->
	<link href="bootstrap-5.1/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 

	<!-----------------CSS FOOTER ------------------>
	    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .main{
            margin: 150px 230px 70px 230px;
            font-size: 15px;
        }
        h3{
            margin-top: 30px;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="footers.css" rel="stylesheet">


</head>
<body>
	<!-------------------- HEADER ------------------------>
	<header>
		<div class="busanas">
            <ul>
                <li><a href="koleksi.php">KOLEKSI</a></li>
                <li><a href="hijab.php">HIJAB</a></li>
                <li><a href="aksesoris.php">AKSESORIS</a></li>
				<li><a href="index.php"><img src="img/lambang.png" width="185px" top="0" class="logo"></li>
                <li><a href="login-user.php"><img src="img/ikon-user.png" width="20px" class="ikon"></a></li>
                <li><a href="search.php"><img src="img/ikon-search.png" width="20px" class="ikon"></a></li>
            </ul>
        </div>
    </header>

    <div class="main">
        <h3>Hijab Muslim Wanita Modern</h3>
        <p>
            Belakangan ini model hijab modern bagi muslimah menjadi salah satu trend fashion yang berkembang semakin maju. 
            Hal ini disebabkan karena sudah semakin banyak wanita muslim di Indonesia yang mengenakan hijab dalam kehidupan
            sehari-hari. Inilah yang akhirnya membuat banyak para perancang model Indonesia beramai-ramai membuat 
            berbagai rancangan hijab muslim wanita. Dimana hal ini pun senada dengan mulai meningkatnya permintaan para penikmat 
            fashion muslim wanita akan kehadiran koleksi terbaru hijab muslim trendy yang bisa dipakai dalam kehidupan sehari-hari.
        </p>

        <h3>Memilih Hijab Muslim Terbaru</h3>
        <p>
            Ada beberapa hal yang bisa anda perhatikan ketika hendak membeli hijab muslim untuk melengkapi 
            penampilan harian anda. Di antaranya adalah aspek syariah Islam yang harus dijaga. Model hijab muslim terbaru 
            haruslah mencerminkan nilai-nilai Islami yang syari, seperti tidak terlalu pendek, tidak dari bahan yang ketat dsb. 
            Karena walaupun ingin mengikuti trend fashion yang ada, jangan sampai trend 
            tersebut tidak mengindahkan nilai-nilai islami yang seharusnya ada pada hijab muslim wanita.
        </p>

        <h3>Jual Hijab Muslim Terbaru di Beauty Hijab</h3>
        <p>
            Jaman sekarang tak perlu bingung lagi ketika anda ingin berbelanja yang cepat, pilihan lengkap, murah dan efisien. Seperti ketika anda ingin
            membeli hijab muslim wanita, cukup dengan membuka website Beauty Hijab. Anda dapat memilih berbagai model hijab muslim terbaru online 
            yang modern dan sesuai dengan yang anda inginkan untuk keperluan apapun; mulai dari acara formal, pesta, hingga keperluan santai.
            Selain itu, andapun bisa memilih proses pembayaran yang paling anda sukai. Mulai dari metode pembayaran dengan 
            menggunakan kartu kredit, metode pembayaran dengan menggunakan internet banking, bahkan sampai metode pembayaran yang dilakukan 
            di Indomaret bisa anda pilih sesuai keinginan anda. Soal pengiriman barang, Beauty Hijab menjamin barang yang sudah anda beli akan dikirimkan dalam waktu singkat. 
            Jadi jangan sampai anda kehabisan hijab muslim terbaru dan ketinggalan pengalaman belanja happy di Beauty Hijab! Segera hubungi kami pada nomor ini (082231541634).
            Terimakasih🧕
        </p>
    </div>
</body>
</html>