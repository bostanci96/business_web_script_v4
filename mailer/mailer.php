<?php
require_once('../admin/host/a.php');
require_once('../admin/host/f.php');

if(isset($_POST["anasayfa"])){

}elseif(isset($_POST["contact_form"])){
	$adsoyad = p("con_name");
	$telefon = p("lisans");
	$parca = p("cars");
	$eposta = p("con_email");
	$mesaj 	 = p("con_message");
	$gelen_ip = GetIP();
	if(empty($adsoyad) || empty($mesaj) || empty($telefon) || empty($eposta)){
		echo "bos-deger";
	}else{
		$ileti ="Merhaba Yönetici; <br>Satın Alma Formundan Bir Yeni Mesaj Alıdın. Detaylar aşağıdaki gibidir;";
		$ileti .=  "<br><p><strong><h4><u>Gönderilen Mesaj Detayları</u></h4></strong></p>";
		$ileti .= "<b>Ad Soyad :</b> ".$adsoyad."<br>";
		$ileti .= "<b>E-Posta  :</b> ".$eposta."<br>";
		$ileti .= "<b>Lisans :</b> ".$telefon."<br>";
		$ileti .= "<b>Ürün :</b> ".$parca."<br>";
		$ileti .= "<b>Mesaj  :</b> ".$mesaj."<br>";
		$ileti .= "<h5><u>Bu mesaj <b>".$gelen_ip."</b> numaralı ip adresinden gönderildi !</u></h5>";
		require 'class.phpmailer.php';
		$mail = new PHPMailer();
		require 'mail_functions_2.php';
		if($mail->Send()){
			echo "basarili";
			die();
		}else{
			echo 'basarisiz';
		}
	}
}elseif(isset($_POST["contact_form2"])){
	$urun = p("urun");
	$isimsoyisim = p("con_name");
	$telefon = p("con_email");
	$mesaj 	 = p("con_message");
	$gelen_ip = GetIP();
	if(empty($isimsoyisim) || empty($telefon) || empty($mesaj)){
	?>
		<script>

			alert("Please Fill In The Fields!");
			window.location="/";
		</script>
	<?php 
	}else{
		$ileti ="Merhaba Yönetici; <br>İletişim Formundan Bir Yeni Mesaj Alıdın. Detaylar aşağıdaki gibidir;";
		$ileti .=  "<br><p><strong><h4><u>Gönderilen Mesaj Detayları</u></h4></strong></p>";
		$ileti .= "<b>Ad Soyad :</b> ".$isimsoyisim."<br>";
		$ileti .= "<b>Telefon :</b> ".$telefon."<br>";
		$ileti .= "<b>Mesaj  :</b> ".$mesaj."<br>";
		$ileti .= "<h5><u>Bu mesaj <b>".$gelen_ip."</b> numaralı ip adresinden gönderildi !</u></h5>";
		require 'class.phpmailer.php';
		$mail = new PHPMailer();
		require 'mail_functions_2.php';
		if($mail->Send()){
		?>
			<script>
				alert("Message Sent Successfully!");
				window.location="/";
			</script>
			<?php
			die();
		}else{
				?>
			<script>
				alert("There was a Problem While Sending the Message!");
				window.location="/";
			</script>
			<?php
		}
	}
}
