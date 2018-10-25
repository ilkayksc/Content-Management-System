<?php 
ob_start();
session_start();
include 'baglan.php';
if (isset($_POST['login'])) {

	 $kullanici_ad=$_POST['kullanici_ad'];
	 $kullanici_sifre=md5($_POST['kullanici_sifre']);
	
	
		if($kullanici_ad && $kullanici_sifre){


			$kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_sifre=:sifre");
			$kullanicisor->execute(array(  
  			'ad' => $kullanici_ad,
  			'sifre' => $kullanici_sifre
));
			 $verisay=$kullanicisor->rowCount();
			


			if ($verisay>0) {
				$_SESSION['kullanici_ad']=$kullanici_ad;
				header("Location:../index.php");

							}
			else{
				header("Location:../login.php?durum=no");
			}
		}




}

include 'baglan.php';
if (isset($_POST['genelayarkaydet'])) {
					
				$ayarkaydet=$db->prepare("UPDATE ayar SET
					ayar_siteurl=:siteurl,
					ayar_title=:title,
					ayar_description=:description,
					ayar_keyword=:keyword,
					ayar_author=:author,
					ayar_footer=:footer
					WHERE ayar_id=0");
				$update=$ayarkaydet->execute(array(
				'siteurl'=>$_POST['ayar_siteurl'],
				'title'=>$_POST['ayar_title'],
				'description'=>$_POST['ayar_description'],
				'keyword'=>$_POST['ayar_keyword'],
				'author'=>$_POST['ayar_author'],
				'footer'=>$_POST['ayar_footer']

				));

				if ($update) {
				header("Location:../genel-ayarlar.php?durum=ok");



				}
				else {

					header("Location:../genel-ayarlar.php?durum=no");



				}



				}
				if (isset($_POST['iletisimayarkaydet'])) {
					
				$iletisimayarkaydet=$db->prepare("UPDATE ayar SET
					ayar_mail=:mail,
					ayar_tel=:tel,
					ayar_gsm=:gsm,
					ayar_fax=:fax,
					ayar_mesai=:mesai,
					ayar_facebook=:facebook,
					ayar_twitter=:twitter,
					ayar_instagram=:instagram,
					ayar_google=:google,
					ayar_youtube=:youtube,
					ayar_adres=:adres,
					ayar_ilce=:ilce,
					ayar_il=:il
					WHERE ayar_id=0");
				$update=$iletisimayarkaydet->execute(array(
				'mail'=>$_POST['ayar_mail'],
				'tel'=>$_POST['ayar_tel'],
				'gsm'=>$_POST['ayar_gsm'],
				'fax'=>$_POST['ayar_fax'],
				'mesai'=>$_POST['ayar_mesai'],
				'facebook'=>$_POST['ayar_facebook'],
				'twitter'=>$_POST['ayar_twitter'],
				'instagram'=>$_POST['ayar_instagram'],
				'google'=>$_POST['ayar_google'],
				'youtube'=>$_POST['ayar_youtube'],
				'adres'=>$_POST['ayar_adres'],
				'ilce'=>$_POST['ayar_ilce'],
				'il'=>$_POST['ayar_il']



				));

				if ($update) {
				header("Location:../iletisim-ayarlari.php?durum=ok");



				}
				else {

					header("Location:../iletisim-ayarlari.php?durum=no");



				}



				}
				if (isset($_POST['logokaydet'])) {
	


					$uploads_dir = '../uploads';
					@$tmp_name=$_FILES['ayar_logo']["tmp_name"];
					@$name=$_FILES['ayar_logo']["name"];
					$benzersizsayi1=rand(20000,32000);
					$benzersizsayi2=rand(20000,32000);
					$benzersizsayi3=rand(20000,32000);
					$benzersizsayi4=rand(20000,32000);
					$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
					$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
					@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

					$logokaydet=$db->prepare("UPDATE ayar SET
							
							ayar_logo=:logo
							WHERE ayar_id=0");
							$update=$logokaydet->execute(array(
							'logo'=>$refimgyol,
							



							));
						
							if ($update) {
							header("Location:../genel-ayarlar.php?durum=ok");

							$resimsil=$_POST['eski_yol'];
							unlink("../$resimsil");
							}
							else {

							header("Location:../genel-ayarlar.php?durum=no");



							}


	




}
				if (isset($_POST['apiayarkaydet'])) {
					
				$apiayarkaydet=$db->prepare("UPDATE ayar SET
					ayar_recapctha=:recapctha,
					ayar_googlemap=:map,
					ayar_analystic=:analystic
					


					WHERE ayar_id=0");
				$update=$apiayarkaydet->execute(array(
				'recapctha'=>$_POST['ayar_recapctha'],
				'map'=>$_POST['ayar_googlemap'],
				'analystic'=>$_POST['ayar_analystic']



				));

				if ($update) {
				header("Location:../api-ayarlari.php?durum=ok");



				}
				else {

					header("Location:../api-ayarlari.php?durum=no");



				}



				}
				if (isset($_POST['smtpayarkaydet'])) {
					
				$smtpayarkaydet=$db->prepare("UPDATE ayar SET
					ayar_smtphost=:host,
					ayar_smtpuser=:user,
					ayar_smtppassword=:password,
					ayar_smtpport=:port


					WHERE ayar_id=0");
				$update=$smtpayarkaydet->execute(array(
				'host'=>$_POST['ayar_smtphost'],
				'user'=>$_POST['ayar_smtpuser'],
				'password'=>$_POST['ayar_smtppassword'],
				'port'=>$_POST['ayar_smtpport']


				));

				if ($update) {
				header("Location:../smtp-ayarlari.php?durum=ok");



				}
				else {

					header("Location:../smtp-ayarlari.php?durum=no");



				}



				}
				if (isset($_POST['hakkimizdaayarkaydet'])) {
	
				$hakkimizdaayarkaydet=$db->prepare("UPDATE hakkimizda SET
					hakkimizda_baslik=:baslik,
					hakkimizda_icerik=:icerik,
					hakkimizda_video=:video,
					hakkimizda_vizyon=:vizyon,
					hakkimizda_misyon=:misyon

					WHERE hakkimizda_id=0");
				$update=$hakkimizdaayarkaydet->execute(array(
				'baslik'=>$_POST['hakkimizda_baslik'],
				'icerik'=>$_POST['hakkimizda_icerik'],
				'video'=>$_POST['hakkimizda_video'],
				'vizyon'=>$_POST['hakkimizda_vizyon'],
				'misyon'=>$_POST['hakkimizda_misyon']


				));

				if ($update) {

				header("Location:../hakkimizda.php?durum=ok");



				}
				else {

					header("Location:../hakkimizda.php?durum=no");



				}


				}
if (isset($_POST['profilresmikaydet'])) {
	


	$uploads_dir = '../uploads/kullanici';
	@$tmp_name=$_FILES['kullanici_resim']["tmp_name"];
	@$name=$_FILES['kullanici_resim']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$duzenle=$db->prepare("UPDATE kullanici SET
			
			kullanici_resim=:resim
			WHERE kullanici_id={$_POST['kullanici_id']}");
			$update=$duzenle->execute(array(
			'resim'=>$refimgyol

			));
		
			if ($update) {
			header("Location:../kullanici-profil.php?durum=ok");

			$resimsil=$_POST['eski_yol'];
			unlink("../$resimsil");
			}
			else {

			header("Location:../kullanici-profil.php?durum=no");



			}


	




}
if (isset($_POST['kullaniciprofilkaydet'])) {
	

	$kullaniciprofilkaydet=$db->prepare("UPDATE kullanici SET
			kullanici_adsoyad=:adsoyad
			
			
			WHERE kullanici_id={$_POST['kullanici_id']}");
			$update=$kullaniciprofilkaydet->execute(array(
			'adsoyad'=>$_POST['kullanici_adsoyad']
			

			));
			$kullanici_id=$_POST['kullanici_id'];
			if ($update) {
			header("Location:../kullanici-profil.php?durum=ok");

			
			}
			else {

			header("Location:../kullanici-profil.php?durum=no");



			}


	
}
if (isset($_POST['ekipkaydet'])) {
	$uploads_dir = '../uploads/ekip';
	@$tmp_name=$_FILES['ekip_resimyol']["tmp_name"];
	@$name=$_FILES['ekip_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$ekipkaydet=$db->prepare("INSERT INTO ekip SET
	ekip_ad=:ad,
	ekip_unvan=:unvan,
	ekip_facebook=:facebook,
	ekip_instagram=:instagram,
	ekip_twitter=:twitter,
	ekip_linkedin=:linkedin,
	ekip_resimyol=:resimyol");
$insert=$ekipkaydet->execute(array(
'ad'=>$_POST['ekip_ad'],
'unvan'=>$_POST['ekip_unvan'],
'facebook'=>$_POST['ekip_facebook'],
'instagram'=>$_POST['ekip_instagram'],
'twitter'=>$_POST['ekip_twitter'],
'linkedin'=>$_POST['ekip_linkedin'],
'resimyol'=>$refimgyol


));

if ($insert) {
header("Location:../calisan-ekle.php?durum=ok");



}
else {

	header("Location:../calisan-ekle.php?durum=no");



}



}
if ($_GET['ekipsil']=="ok") {
	$sil=$db->prepare("DELETE from ekip where ekip_id=:ekip_id");
	$kontrol=$sil->execute(array(
		'ekip_id' =>$_GET['ekip_id']
	));

	if ($kontrol) {
		header("Location:../calisan.php?durum=ok");
		$resimsil=$_POST['ekip_eskiresimyol'];
			unlink("../$resimsil");
	}
	else
	{
				header("Location:../calisan.php?durum=no");

	}
}

if (isset($_POST['ekipduzenle'])) {
	if ($_FILES['ekip_resimyol']["size"] > 0 ) {


	$uploads_dir = '../uploads/ekip';
	@$tmp_name=$_FILES['ekip_resimyol']["tmp_name"];
	@$name=$_FILES['ekip_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$ekipduzenle=$db->prepare("UPDATE ekip SET
			ekip_ad=:ad,
			ekip_unvan=:unvan,
			ekip_facebook=:facebook,
			ekip_instagram=:instagram,
			ekip_twitter=:twitter,
			ekip_twitter=:twitter,
			ekip_linkedin=:linkedin,
			ekip_resimyol=:resimyol
			WHERE ekip_id={$_POST['ekip_id']}");
			$update=$ekipduzenle->execute(array(
			'ad'=>$_POST['ekip_ad'],
			'unvan'=>$_POST['ekip_unvan'],
			'facebook'=>$_POST['ekip_facebook'],
			'instagram'=>$_POST['ekip_instagram'],
			'twitter'=>$_POST['ekip_twitter'],
			'linkedin'=>$_POST['ekip_linkedin'],
			'resimyol'=>$refimgyol



			));
			$ekip_id=$_POST['ekip_id'];
			if ($update) {
			header("Location:../calisan-duzenle.php?ekip_id=$ekip_id&durum=ok");

			$resimsil=$_POST['ekip_eskiresimyol'];
			unlink("../$resimsil");
			}
			else {

			header("Location:../calisan-duzenle.php?durum=no");



			}


	}
	else{
			$ekipduzenle=$db->prepare("UPDATE ekip SET
			ekip_ad=:ad,
			ekip_unvan=:unvan,
			ekip_facebook=:facebook,
			ekip_instagram=:instagram,
			ekip_twitter=:twitter,
			ekip_linkedin=:linkedin
			WHERE ekip_id={$_POST['ekip_id']}");
			$update=$ekipduzenle->execute(array(
			'ad'=>$_POST['ekip_ad'],
			'unvan'=>$_POST['ekip_unvan'],
			'facebook'=>$_POST['ekip_facebook'],
			'instagram'=>$_POST['ekip_instagram'],
			'twitter'=>$_POST['ekip_twitter'],
			'linkedin'=>$_POST['ekip_linkedin']






			));
			$ekip_id=$_POST['ekip_id'];
			if ($update) {
			header("Location:../calisan-duzenle.php?ekip_id=$ekip_id&durum=ok");



			}
			else {

			header("Location:../calisan-duzenle.php?durum=no");



			}
		}
	
}
if (isset($_POST['icerikkaydet'])) {
	$uploads_dir = '../uploads/icerik';
	@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	@$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$tarih=$_POST['icerik_tarih'];
	$saat=$_POST['icerik_saat'];
	$zaman=$tarih." ".$saat;






$icerikkaydet=$db->prepare("INSERT INTO icerik SET
	icerik_ad=:ad,
	icerik_detay=:detay,
	icerik_keyword=:keyword,
	icerik_durum=:durum,
	icerik_resimyol=:resimyol,
	icerik_zaman=:zaman");
$insert=$icerikkaydet->execute(array(
'ad'=>$_POST['icerik_ad'],
'detay'=>$_POST['icerik_detay'],
'keyword'=>$_POST['icerik_keyword'],
'durum'=>$_POST['icerik_durum'],
'resimyol'=>$refimgyol,
'zaman'=>$zaman

));

if ($insert) {
header("Location:../icerik-ekle.php?durum=ok");



}
else {

	header("Location:../icerik-ekle.php?durum=no");



}



}
if ($_GET['iceriksil']=="ok") {
	$sil=$db->prepare("DELETE from icerik where icerik_id=:icerik_id");
	$kontrol=$sil->execute(array(
		'icerik_id' =>$_GET['icerik_id']
	));

	if ($kontrol) {
		header("Location:../icerik.php?durum=ok");
		$resimsil=$_POST['icerik_resimyol'];
			unlink("../$resimsil");
	}
	else
	{
				header("Location:../icerik.php?durum=no");

	}
}

if (isset($_POST['icerikduzenle'])) {
	if ($_FILES['icerik_resimyol']["size"] > 0 ) {


	$uploads_dir = '../uploads/icerik';
	@$tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
	@$name=$_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

			$tarih=$_POST['icerik_tarih'];
			$saat=$_POST['icerik_saat'];
			$zaman=$tarih." ".$saat;

	$icerikduzenle=$db->prepare("UPDATE icerik SET
			icerik_ad=:ad,
			icerik_detay=:detay,
			icerik_durum=:durum,
			icerik_keyword=:keyword,
			icerik_zaman=:zaman,
			icerik_resimyol=:resimyol
			WHERE icerik_id={$_POST['icerik_id']}");
			$update=$icerikduzenle->execute(array(
			'ad'=>$_POST['icerik_ad'],
			'detay'=>$_POST['icerik_detay'],
			'durum'=>$_POST['icerik_durum'],
			'keyword'=>$_POST['icerik_keyword'],
			'zaman'=>$zaman,
			'resimyol'=>$refimgyol



			));
			$icerik_id=$_POST['icerik_id'];
			if ($update) {
			header("Location:../icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");

			$resimsil=$_POST['icerik_resimyol'];
			unlink("../$resimsil");
			}
			else {

			header("Location:../icerik-duzenle.php?durum=no");



			}


	}
	else{

			$tarih=$_POST['icerik_tarih'];
			$saat=$_POST['icerik_saat'];
			$zaman=$tarih." ".$saat;

			$icerikduzenle=$db->prepare("UPDATE icerik SET
			icerik_ad=:ad,
			icerik_detay=:detay,
			icerik_durum=:durum,
			icerik_keyword=:keyword,
			icerik_zaman=:zaman
			WHERE icerik_id={$_POST['icerik_id']}");
			$update=$icerikduzenle->execute(array(
			'ad'=>$_POST['icerik_ad'],
			'detay'=>$_POST['icerik_detay'],
			'durum'=>$_POST['icerik_durum'],
			'keyword'=>$_POST['icerik_keyword'],
			'zaman'=>$zaman




			));
			$icerik_id=$_POST['icerik_id'];
			if ($update) {

			header("Location:../icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");



			}
			else {

			header("Location:../icerik-duzenle.php?durum=no");



			}
		}
	




}
if (isset($_POST['sliderkaydet'])) {
	$uploads_dir = '../uploads/slider';
	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
$sliderkaydet=$db->prepare("INSERT INTO slider SET
	slider_ad=:ad,
	slider_url=:url,
	slider_sira=:sira,
	slider_aciklama=:aciklama,
	slider_durum=:durum,
	slider_resimyol=:resimyol");
$insert=$sliderkaydet->execute(array(
'ad'=>$_POST['slider_ad'],
'url'=>$_POST['slider_url'],
'sira'=>$_POST['slider_sira'],
'aciklama'=>$_POST['slider_aciklama'],
'durum'=>$_POST['slider_durum'],
'resimyol'=>$refimgyol


));

if ($insert) {
header("Location:../slider-ekle.php?durum=ok");



}
else {

	header("Location:../slider-ekle.php?durum=no");



}



}
if ($_GET['slidersil']=="ok") {
	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id' =>$_GET['slider_id']
	));

	if ($kontrol) {
		header("Location:../slider.php?durum=ok");
		$resimsil=$_POST['slider_resimyol'];
			unlink("../$resimsil");
	}
	else
	{
				header("Location:../slider.php?durum=no");

	}
}

if (isset($_POST['sliderduzenle'])) {
	if ($_FILES['slider_resimyol']["size"] > 0 ) {


	$uploads_dir = '../uploads/slider';
	@$tmp_name=$_FILES['slider_resimyol']["tmp_name"];
	@$name=$_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$sliderduzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_aciklama=:aciklama,
			slider_durum=:durum,
			slider_sira=:sira,
			slider_url=:url,
			slider_resimyol=:resimyol
			WHERE slider_id={$_POST['slider_id']}");
			$update=$sliderduzenle->execute(array(
			'ad'=>$_POST['slider_ad'],
			'aciklama'=>$_POST['slider_aciklama'],
			'durum'=>$_POST['slider_durum'],
			'sira'=>$_POST['slider_sira'],
			'url'=>$_POST['slider_url'],
			'resimyol'=>$refimgyol,



			));
			$slider_id=$_POST['slider_id'];
			if ($update) {
			header("Location:../slider-duzenle.php?slider_id=$slider_id&durum=ok");

			$resimsil=$_POST['slider_resimyol'];
			unlink("../$resimsil");
			}
			else {

			header("Location:../slider-duzenle.php?durum=no");



			}


	}
	else{
			$sliderduzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_aciklama=:aciklama,
			slider_durum=:durum,
			slider_sira=:sira,
			slider_url=:url
			WHERE slider_id={$_POST['slider_id']}");
			$update=$sliderduzenle->execute(array(
			'ad'=>$_POST['slider_ad'],
			'aciklama'=>$_POST['slider_aciklama'],
			'durum'=>$_POST['slider_durum'],
			'sira'=>$_POST['slider_sira'],
			'url'=>$_POST['slider_url']




			));
			$slider_id=$_POST['slider_id'];
			if ($update) {
			header("Location:../slider-duzenle.php?slider_id=$slider_id&durum=ok");



			}
			else {

			header("Location:../slider-duzenle.php?durum=no");



			}
		}
	




}

?>