<?php

	//SMTP server settings
	$host = "smtp.host.com";
    $port = "587";
    $username = "";
    $password = "";
    iconv_set_encoding("internal_encoding", "utf-8");


	$messageBody = "";

	if($_POST['artikl_naziv']!='false'){
		$messageBody .= '<p>Proizvod: ' . $_POST["artikl_naziv"] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['promjer_trake']!='false'){
		$messageBody .= '<p>Promjer pogonskog/pogonjenog valjka: ' . $_POST["promjer_trake"] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['sirina_dosadasnje']!='false'){
		$messageBody .= '<p>Širina dosadašnje trake: ' . $_POST["sirina_dosadasnje"] . '</p>' . "\n";
		$messageBody .= '<br>';
	}
	if($_POST['osni_razmak']!='false'){
		$messageBody .= '<p>Osni razmak remenica ili : ' . $_POST['osni_razmak'] . '</p>' . "\n";
		$messageBody .= '<br>';
	//}else{
	//	$headers = '';
	}
	if($_POST['geometrijska_duljina']!='false'){
		$messageBody .= '<p>Geometrijska duljina trake: ' . $_POST['geometrijska_duljina'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['spojena_traka']!='false'){
		$messageBody .= '<p>Spojena beskonačna/traka: ' . $_POST['spojena_traka'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['topli_spoj']!='false'){
		$messageBody .= '<p>Topli spoj ili mehanički/rastaljivi spoj: ' . $_POST['topli_spoj'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['potrebno_spajanje']!='false'){
		$messageBody .= '<p>Potrebno spajanje u pogonu naručitelja: ' . $_POST['potrebno_spajanje'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['podloga_trake']!='false'){
		$messageBody .= '<p>Podloga trak: ' . $_POST['podloga_trake'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['transport']!='false'){
		$messageBody .= '<p>Horizontalni ili kosi transport: ' . $_POST['transport'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['transport2']!='false'){
		$messageBody .= '<p>Komandni transport ili rasuti teret: ' . $_POST['transport2'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['transport3']!='false'){
		$messageBody .= '<p>Transport od A do B ili akomuliranje proizvoda: ' . $_POST['transport3'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['temp_rada']!='false'){
		$messageBody .= '<p>Temperatura rada: ' . $_POST['temp_rada'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['prehrambena_norm']!='false'){
		$messageBody .= '<p>Prehrambena norma: ' . $_POST['prehrambena_norm'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['antistatic']!='false'){
		$messageBody .= '<p>Antistatička svojstva: ' . $_POST['antistatic'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['natezni']!='false'){
		$messageBody .= '<p>Natezni: ' . $_POST['natezni'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}


	if($_POST['duljina_natezanja']!='false'){
		$messageBody .= '<p>Duljina natezanja (opcija): ' . $_POST['duljina_natezanja'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['tip_trake']!='false'){
		$messageBody .= '<p>do sada upotrebljavani tip trake: ' . $_POST['tip_trake'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	// if($_POST['opis_uredjaja']!='false'){
	// 	$messageBody .= '<p>Opis uređaja: ' . $_POST['opis_uredjaja'] . '</p>' . "\n";
	// 	$messageBody .= '<br>' . "\n";
	// }

	if($_POST['polozaj_motora']!='false'){
		$messageBody .= '<p>Položaj elektro motora: ' . $_POST['polozaj_motora'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}


	if($_POST['kontakt_podaci']!='false'){
		$messageBody .= '<p>Kontakt podaci: ' . $_POST['kontakt_podaci'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST["stripHTML"] == 'true'){
		$messageBody = strip_tags($messageBody);
	}

//      $crlf = "\r\n";
// 		$owner_email = 'info@webzy.com.hr';
// 		$header="Content-type: text/html; charset=utf-8". $crlf;  
// 		$headers = 'Od upitnik forme:'. $header . $crlf;
// 		$subject = 'Upitnik subjekt šćčžđ';
		
		
// 		//ovaj isto ne radi
        $mail = 'igzyy.j@gmail.com';
  		$owner_email = 'info@webzy.com.hr,'.$mail;
  		
//  		$headers = "Od upitnik forme :". "\r\n" . "Content-type: text/html; charset=utf-8" . "\r\n";
//  		$subject = 'Upitnik subjekt šćčžđ';

 
	
        $headers = 'From: '."\r\n".
       'Content-Type: text/plain; charset=UTF-8' . "\r\n" .
       'Para: WebSite'  .  "\r\n" .
       'X-Mailer: PHP/' . phpversion();
        mail($owner_email, 'ćžđđš', $messageBody, $headers);
      //  mail('igzyy.j@gmail.com', 'potvrda', 'nešto', $headers);
      mail("igzyy.j@gmail.com , info@webzy.com.hr", "Test e-mail", "Hi, this is a test message!");
		
		

// 		try{
// 			if(!mail($owner_email, $subject, utf8_decode($messageBody), $headers)){    //	if(!mail($email,$sbj_visitor,$msg_visitor,$header.'From: '.$owner_email)){
// 				throw new Exception('mail failed');
// 				}else{
// 				echo 'mail sent';
// 			}
// 			}catch(Exception $e){
// 			echo $e->getMessage() ."\n";
// 		}




// 			try{
// 				if(!mail($owner_email,$sbj_owner,$msg_owner,$header.'From: '.$email)){
// 					throw new Exception('mail failed');
// 				}else{
// 					echo "mail to owner sent";
// 				}
// 			}catch(Exception $e){
// 				echo $e->getMessage() ."\n";
// 			}


?>
