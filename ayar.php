<?php
try{
	$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=shoesgiyim;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	//echo "Bağlantı Hatası<br />" . $Hata->getMessage(); // Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin.
	die();
}

$AyarlarSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi			=	$AyarlarSorgusu->rowCount();
$Ayarlar			=	$AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarSayisi>0){
	$SiteAdi				=	$Ayarlar["SiteAdi"];
	$SiteTitle				=	$Ayarlar["SiteTitle"];
	$SiteDescription		=	$Ayarlar["SiteDescription"];
	$SiteKeywords			=	$Ayarlar["SiteKeywords"];
	$SiteCopyrightMetni		=	$Ayarlar["SiteCopyrightMetni"];
	$SiteLogosu				=	$Ayarlar["SiteLogosu"];
	$SiteLinki				=	$Ayarlar["SiteLinki"];
	$SiteEmailAdresi		=	$Ayarlar["SiteEmailAdresi"];
	$SiteEmailSifresi		=	$Ayarlar["SiteEmailSifresi"];
	
}else{
	//echo "Site Ayar Sorgusu Hatalı"; // Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin.
	die();
}

?>