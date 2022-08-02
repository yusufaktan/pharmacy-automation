<?php

function temizID($metin)
{
	return( intval(preg_replace("#[^0-9]#",'', $metin)));
}
function temizle( &$yazi ) {
		$yazi = preg_replace( "'<script[^>]*>.*?</script>'si", '', $yazi );
		$yazi = preg_replace( '/<a\s+.*?href="([^"]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)', $yazi );
		$yazi = preg_replace( '/<!--.+?-->/', '', $yazi );
		$yazi = preg_replace( '/{.+?}/', '', $yazi );
		$yazi = preg_replace( '/&nbsp;/', '', $yazi );
		$yazi = preg_replace( '/&amp;/', '', $yazi );
		$yazi = preg_replace( '/&quot;/', '', $yazi );
		$yazi = trim(strip_tags($yazi)); //html etikerlerini ayıklar
		//$yazi = htmlentities($yazi, ENT_QUOTES, 'UTF-8');  //html etiketlerini zararsız hale getirir.
		//$yazi=addslashes($yazi); //yazarken stripslashes
		$yazi = htmlspecialchars($yazi, ENT_QUOTES);
		return $yazi;
		//htmlspecialchars(strip_tags(mysql_escape_string($value)));

		//if ( get_magic_quotes_gpc() )
		//$arapca = htmlspecialchars( stripslashes((string) $_POST['arapca']) );
}

function hash_islem($bilgi)
{
	$tuz="12345++!!&&..ELAZIG";
	$sonuc=hash('ripemd160', $bilgi.$tuz);
	return($sonuc);
}

?>