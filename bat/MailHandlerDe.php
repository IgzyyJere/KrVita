<?php

	//SMTP server settings
// 	$host = "mail.adricongroup.com";
//     $port = "25";
//     $username = "test@adricongroup.com";
//     $password = "pastasuta123";
    iconv_set_encoding("internal_encoding", "utf-8");
    $senderMail ="";


	$messageBody = "";

	if($_POST['ime']!='false'){
		$messageBody .= '<p>Ime: ' . $_POST["ime"] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['prezime']!='false'){
		$messageBody .= '<p>Prezime: ' . $_POST["prezime"] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['datum_rodjenja']!='false'){
		$messageBody .= '<p>Datum rodjenja: ' . $_POST["datum_rodjenja"] . '</p>' . "\n";
		$messageBody .= '<br>';
	}
	if($_POST['mjesto']!='false'){
		$messageBody .= '<p>Mjesto i poštanski broj: ' . $_POST['mjesto'] . '</p>' . "\n";
		$messageBody .= '<br>';


	}

	if($_POST['mail']!='false'){
		$messageBody .= '<p>Email adresa: ' . $_POST['mail'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['voz_dozvola']!='false'){
		$messageBody .= '<p>Posjeduje vozaćku dozvolu: ' . $_POST['voz_dozvola'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}else{$messageBody .= '<p>vozaćka dozvola : nije odgovorio/la</p>' . "\n"; 	$messageBody .= '<br>';}

	if($_POST['aktiv_voz']!='false'){
	$messageBody .= '<p>Aktivan vozać: ' . $_POST['aktiv_voz'] . '</p>' . "\n";
	$messageBody .= '<br>';
	}

	if($_POST['tel']!='false'){
	$messageBody .= '<p>Broj telefona: ' . $_POST['tel'] . '</p>' . "\n";
	$messageBody .= '<br>';
	}

	if($_POST['mob']!='false'){
		$messageBody .= '<p>Broj mobitela: ' . $_POST['mob'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}


	if($_POST['pusac']!='false'){
	$messageBody .= '<p>Pušać: ' . $_POST['pusac'] . '</p>' . "\n";
	$messageBody .= '<br>';
	}


	if($_POST['visina']!='false'){
		$messageBody .= '<p>Visina osobe u cm: ' . $_POST['visina'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['tezina']!='false'){
		$messageBody .= '<p>Težina: ' . $_POST['tezina'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	// if($_POST['pus_opcija']!='false'){
	// 	$messageBody .= '<p>Ukoliko jeste, jeste li spremni pušiti vani?: ' . $_POST['pus_opcija'] . '</p>' . "\n";
	// 	$messageBody .= '<br>';
	// }


	if($_POST['radno_iskustvo']!='false'){
		$messageBody .= '<p>Radno iskustvo: ' . $_POST['radno_iskustvo'] . '</p>' . "\n";
		$messageBody .= '<br></hr>' . "\n";
	}


	if($_POST['inkontinencija']!='false'){
		$messageBody .= '<p>Inkontinencija: ' . $_POST['inkontinencija'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	// if($_POST['alzheimer']!='false'){
	// 	$messageBody .= '<p>Alzheimer: ' . $_POST['alzheimer'] . '</p>' . "\n";
	// 	$messageBody .= '<br>';
	// }


	if($_POST['demencija']!='false'){
		$messageBody .= '<p>Demencija/Alzheimer: ' . $_POST['demencija'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}


	if($_POST['park_bol']!='false'){
		$messageBody .= '<p>Parkinsonova bolest: ' . $_POST['park_bol'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}


	if($_POST['tumo']!='false'){
		$messageBody .= '<p>Tumor/rak: ' . $_POST['tumo'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['oste']!='false'){
		$messageBody .= '<p>Osteoporoza: ' . $_POST['oste'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}


	if($_POST['kateter']!='false'){
		$messageBody .= '<p>Trajni kateter: ' . $_POST['kateter'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['mozdani']!='false'){
		$messageBody .= '<p>Moždani udar: ' . $_POST['mozdani'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

		if($_POST['peg']!='false'){
		$messageBody .= '<p>Peg sonda: ' . $_POST['peg'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['depra']!='false'){
		$messageBody .= '<p>Depresija: ' . $_POST['depra'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['astma']!='false'){
		$messageBody .= '<p>Astma: ' . $_POST['astma'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['deku']!='false'){
		$messageBody .= '<p>Dekubitus: ' . $_POST['deku'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['prolj']!='false'){
			$messageBody .= '<p>Kronični proljev: ' . $_POST['prolj'] . '</p>' . "\n";
			$messageBody .= '<br>';
 }

 if($_POST['rem']!='false'){
		 $messageBody .= '<p>Reuma: ' . $_POST['rem'] . '</p>' . "\n";
		 $messageBody .= '<br>';
 }

 if($_POST['multi_sk']!='false'){
		$messageBody .= '<p>Multipla skleroza: ' . $_POST['multi_sk'] . '</p>' . "\n";
		$messageBody .= '<br>';
 }


 if($_POST['src_napad']!='false'){
	 $messageBody .= '<p>Srčani napad: ' . $_POST['src_napad'] . '</p>' . "\n";
	 $messageBody .= '<br>';
 }

 if($_POST['dijab']!='false'){
	$messageBody .= '<p>Dijabetes: ' . $_POST['dijab'] . '</p>' . "\n";
	$messageBody .= '<br>';
 }


if($_POST['osVid']!='false'){
	$messageBody .= '<p>Oštećeni vid: ' . $_POST['osVid'] . '</p>' . "\n";
	$messageBody .= '<br>';
 }

if($_POST['osSluh']!='false'){
	$messageBody .= '<p>Oštećeni sluh: ' . $_POST['osSluh'] . '</p>' . "\n";
	$messageBody .= '<br>';
 }

 if($_POST['sljep']!='false'){
 $messageBody .= '<p>Slijepoća: ' . $_POST['sljep'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

 if($_POST['gluh']!='false'){
 $messageBody .= '<p>Gluhoća: ' . $_POST['gluh'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['nepokretan']!='false'){
 $messageBody .= '<p>Nepokretna osoba: ' . $_POST['nepokretan'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['kard']!='false'){
 $messageBody .= '<p>Kardiovaskularne bolesti: ' . $_POST['kard'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['boles_kretanje']!='false'){
 $messageBody .= '<p>Bolesnik s poteškoćama u kretanju: ' . $_POST['boles_kretanje'] . '</p>' . "\n";
 $messageBody .= '<br>' . "\n";
 }

if($_POST['ostalo']!='false'){
	$messageBody .= '<p>Ostalo: ' . $_POST['ostalo'] . '</p>' . "\n";
	$messageBody .= '<br>';
 }


 if($_POST['pratnja_dokt']!='false'){
 $messageBody .= '<p>Pratnja doktoru: ' . $_POST['pratnja_dokt'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['odrzavanje']!='false'){
 $messageBody .= '<p>Održavanje kućanstva: ' . $_POST['odrzavanje'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['vrt']!='false'){
 $messageBody .= '<p>Održavanje vrta: ' . $_POST['vrt'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['ljubimci']!='false'){
 $messageBody .= '<p>Briga o kućnim ljubimcima: ' . $_POST['ljubimci'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['rad_nj']!='false'){
 $messageBody .= '<p>Koliko dugo i od kada ste spremni raditi u Njemačkoj?: ' . $_POST['rad_nj'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['alergija']!='false'){
 $messageBody .= '<p>Imate li alergije?: ' . $_POST['alergija'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

 if($_POST['alergija_opis']!='false'){
 $messageBody .= '<p>Ako da, koje?: ' . $_POST['alergija_opis'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['jezik']!='false'){
 $messageBody .= '<p>Koliko dobro bi ocijenili svoje znanje njemačkog jezika?: ' . $_POST['jezik'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['hobi']!='false'){
 $messageBody .= '<p>Hobi: ' . $_POST['hobi'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['gdpr']!='false'){
 $messageBody .= '<p>Privolu : ' . $_POST['gdpr'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }



	if($_POST["stripHTML"] == 'true'){
		$messageBody = strip_tags($messageBody);
	}

    if($_POST['mail']!='false'){
         $mail = $_POST['mail'];
    }else{ $mail = 'test@adricongroup.com';}

           // $mail = 'igorsfera7@gmail.com';// $_POST['mail']; //'igzyy.j@gmail.com';
  			$owner_email = 'test@adricongroup.com';




        $headers = 'From: test@adricongroup.com'."\r\n".
        'Reply-To: test@adricongroup.com' . "\r\n" .
        'Content-Type: text/plain; charset=UTF-8' . "\r\n" .
        'Para: WebSite'  .  "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($owner_email, 'Forma za posao s obrasca za posao', $messageBody, $headers);
        mail($mail, 'Potvrda prijave za posao Curavita24', $messageBody, $headers); //radi na studio4web


        // if($_POST['mail']!='false'){
        // $email_to = $_POST['mail'];
        // $email_message = "Form details below.\n\n";
        // $email_subject = "s forme mail";

        // // create email headers
        // $headers = 'From: '.$email_from."\r\n".
        // 'Reply-To: '.$email_from."\r\n" .
        // 'X-Mailer: PHP/' . phpversion();
        // @mail($email_to, $email_subject, $email_message, $headers);
        // echo'<h1>poslano</h1>';
        // }



?>
