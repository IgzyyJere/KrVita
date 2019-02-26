<?php


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

	if($_POST['adresa']!='false'){
		$messageBody .= '<p>Adresa: ' . $_POST['adresa'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['datum_rodjenja']!='false'){
		$messageBody .= '<p>Datum rodjenja: ' . $_POST["datum_rodjenja"] . '</p>' . "\n";
		$messageBody .= '<br>';
	}


	if($_POST['visina']!='false'){
		$messageBody .= '<p>Visina osobe: ' . $_POST['visina'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['stnjege']!='false'){
		$messageBody .= '<p>Stupanje njege: ' . $_POST['stnjege'] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

		if($_POST['Kime']!='false'){
		$messageBody .= '<p>Korisnik ime: ' . $_POST["Kime"] . '</p>' . "\n";
		$messageBody .= '<br>';
	}

	if($_POST['Kprezime']!='false'){
		$messageBody .= '<p>Korisnik prezime: ' . $_POST["Kprezime"] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

		if($_POST['Kadresa']!='false'){
		$messageBody .= '<p>Korisnik adresa: ' . $_POST['Kadresa'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}


		if($_POST['Ktel']!='false'){
	$messageBody .= '<p>Broj telefona: ' . $_POST['Ktel'] . '</p>' . "\n";
	$messageBody .= '<br>';
	}


if($_POST['Kmail']!='false'){
		$messageBody .= '<p>Email adresa: ' . $_POST['Kmail'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}


	if($_POST['Kodnos']!='false'){
		$messageBody .= '<p>Odnos s korisnikom usluga:' . $_POST['Kodnos'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}


	if($_POST['dijagnoza']!='false'){
		$messageBody .= '<p>Dijagnoza:' . $_POST['dijagnoza'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}

	if($_POST['bolesti']!='false'){
		$messageBody .= '<p>Ostale bolesti / ograničenja:' . $_POST['bolesti'] . '</p>' . "\n";
		$messageBody .= '<br>' . "\n";
	}



	if($_POST['pusac']!='false'){
	$messageBody .= '<p>Pušać: ' . $_POST['pusac'] . '</p>' . "\n";
	$messageBody .= '<br>';
	}


	 if($_POST['alergija']!='false'){
 $messageBody .= '<p>Imate li alergije?: ' . $_POST['alergija'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 	 if($_POST['brojOsoba']!='false'){
 $messageBody .= '<p>Broj osoba u kućanstvu: ' . $_POST['brojOsoba'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 
 	 if($_POST['orijent']!='false'){
 $messageBody .= '<p>Orijentacija u prostoru: ' . $_POST['orijent'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


  	 if($_POST['orijentVr']!='false'){
 $messageBody .= '<p>Orijentacija u vremenu: ' . $_POST['orijentVr'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


  if($_POST['komu']!='false'){
 $messageBody .= '<p>Da li je moguća komunikacija: ' . $_POST['komu'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


   if($_POST['runV']!='false'){
 $messageBody .= '<p>Postoji li tenedcija bježanja : ' . $_POST['runV'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


    if($_POST['hod']!='false'){
 $messageBody .= '<p>Samostalno hoda : ' . $_POST['hod'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


if($_POST['kretanje']!='false'){
 $messageBody .= '<p>Pomoć prilikom kretanja: : ' . $_POST['kretanje'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['Pkretanje']!='false'){
 $messageBody .= '<p>Koriste li se pomagala za kretanje : ' . $_POST['Pkretanje'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


if($_POST['nu_samostalno']!='false'){
 $messageBody .= '<p>Nužda samostalno : ' . $_POST['nu_samostalno'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['nu_pomoc']!='false'){
 $messageBody .= '<p>Nužda treba pomoć : ' . $_POST['nu_pomoc'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


if($_POST['nu_djink']!='false'){
 $messageBody .= '<p>Nužda djelomična inkontinencija : ' . $_POST['nu_djink'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 if($_POST['nu_ink']!='false'){
 $messageBody .= '<p>Nužda - inkontinencija : ' . $_POST['nu_ink'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


  if($_POST['nu_pel']!='false'){
 $messageBody .= '<p>Nužda - pelene : ' . $_POST['nu_pel'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


   if($_POST['nu_ulo']!='false'){
 $messageBody .= '<p>Nužda - ulošci : ' . $_POST['nu_ulo'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }




    if($_POST['pr_jedeSamostalno']!='false'){
 $messageBody .= '<p>Samostalno jede : ' . $_POST['pr_jedeSamostalno'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


 
    if($_POST['pr_piprema']!='false'){
 $messageBody .= '<p>Potrebna pomoć (hrana i/ili piće) : ' . $_POST['pr_piprema'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }



     if($_POST['pr_hranaP']!='false'){
 $messageBody .= '<p>Priprema hrane : ' . $_POST['pr_hranaP'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


      if($_POST['pr_dijeta']!='false'){
 $messageBody .= '<p>Dijeta : ' . $_POST['pr_dijeta'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


      if($_POST['pr_posebna']!='false'){
 $messageBody .= '<p>Posebna prehrana : ' . $_POST['pr_posebna'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

       if($_POST['pr_al']!='false'){
 $messageBody .= '<p>Alergije hrana : ' . $_POST['pr_al'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

        if($_POST['pr_napomena']!='false'){
 $messageBody .= '<p>Napomena hrana : ' . $_POST['pr_napomena'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }




          if($_POST['spa_noc']!='false'){
 $messageBody .= '<p>Potrebna pomoć/njega tijekom noći: ' . $_POST['spa_noc'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


         if($_POST['spa_oblik']!='false'){
 $messageBody .= '<p>Spavanje i njega po noći: ' . $_POST['spa_oblik'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


         if($_POST['spa_njega']!='false'){
 $messageBody .= '<p>Koliko često je potrebna pomoć/njega tijekom noći: ' . $_POST['spa_njega'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

          if($_POST['spa_ljek']!='false'){
 $messageBody .= '<p>Da li koristi lijekove za spavanje?: ' . $_POST['spa_ljek'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


           if($_POST['spa_hig']!='false'){
 $messageBody .= '<p>Koristi pomoć prilikom higijene: ' . $_POST['spa_hig'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

           if($_POST['spa_svl']!='false'){
 $messageBody .= '<p>Koristi pomoć prilikom oblaćenje/svlaćenje: ' . $_POST['spa_svl'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

           if($_POST['spa_wc']!='false'){
  $messageBody .= '<p>Koristi pomoć prilikom wc-a: ' . $_POST['spa_wc'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

           if($_POST['spa_zubnaproteze']!='false'){
 $messageBody .= '<p>Koristi pomoć prilikom zubna proteze: ' . $_POST['spa_zubnaproteze'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


           if($_POST['spa_nap']!='false'){
 $messageBody .= '<p>Koristi pomoć, ostale napomene: ' . $_POST['spa_nap'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }



            if($_POST['pat_sluzba']!='false'){
 $messageBody .= '<p>Dolazi li patronažna služba: ' . $_POST['pat_sluzba'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

             if($_POST['pat_sluzba']!='false'){
 $messageBody .= '<p>Dolazi li patronažna služba: ' . $_POST['pat_sluzba'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

             if($_POST['pat_nap']!='false'){
 $messageBody .= '<p>Ukoliko dolazi patronaža, koje poslove obavlja: ' . $_POST['pat_nap'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


              if($_POST['pat_doaz']!='false'){
 $messageBody .= '<p>Koliko često dolazi patronažna služba: ' . $_POST['pat_dolaz'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }


               if($_POST['ljek']!='false'){
 $messageBody .= '<p>Lijekove uzima : ' . $_POST['ljek'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

                if($_POST['ljek_p']!='false'){
 $messageBody .= '<p>Tko priprema dozatore /lijekove : ' . $_POST['ljek_p'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }



                 if($_POST['zar']!='false'){
 $messageBody .= '<p>ZARAZNE BOLEST : ' . $_POST['zar'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                  if($_POST['zar_mbrsa']!='false'){
 $messageBody .= '<p>Zarazne bolesti ili klice (npr. MRSA) : ' . $_POST['zar_mbrsa'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                   if($_POST['zar_n']!='false'){
 $messageBody .= '<p>Ukoliko je odgovor da, navedite koje: ' . $_POST['zar_n'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                    if($_POST['osobine']!='false'){
 $messageBody .= '<p>Osobine : ' . $_POST['osobine'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                     if($_POST['sport']!='false'){
 $messageBody .= '<p>čime se voli baviti / kako voli provoditi vrijeme : ' . $_POST['sport'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                       if($_POST['pot_pomoc']!='false'){
 $messageBody .= '<p>Potrebna pomoć  od (datum) : ' . $_POST['pot_pomoc'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                      if($_POST['pot_sati']!='false'){
 $messageBody .= '<p>Predviđeno trajanje njege : ' . $_POST['pot_sati'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                       if($_POST['pot_spol']!='false'){
 $messageBody .= '<p>Preferiramo: ' . $_POST['pot_spol'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                        if($_POST['pot_voz']!='false'){
 $messageBody .= '<p>Potrebna vozačka dozvola: ' . $_POST['pot_voz'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                         if($_POST['pot_pus']!='false'){
 $messageBody .= '<p>Da li je dozvoljeno pušenje?: ' . $_POST['pot_pus'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                          if($_POST['pot_struka']!='false'){
 $messageBody .= '<p>Potrebna medicinska struka (med. sestra, fizioterapeut ili sl.): ' . $_POST['pot_struka'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                           if($_POST['pot_kuc']!='false'){
 $messageBody .= '<p>Pomoć u kućanstvu : ' . $_POST['pot_kuc'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                            if($_POST['pot_osobe']!='false'){
 $messageBody .= '<p>Da li se treba brinuti i za druge osobe u kućanstvu?: ' . $_POST['pot_osobe'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                             if($_POST['pot_poKuc']!='false'){
 $messageBody .= '<p>Pomoć u kućanstvu: ' . $_POST['pot_poKuc'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                              if($_POST['pot_brig']!='false'){
 $messageBody .= '<p>Da li se treba brinuti i za druge osobe u kućanstvu?: ' . $_POST['pot_brig'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 

                               if($_POST['pot_ziv']!='false'){
 $messageBody .= '<p>Postoje li životinje u kućanstvu?: ' . $_POST['pot_ziv'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                                if($_POST['pot_vrt']!='false'){
 $messageBody .= '<p>Da li je poželjna pomoć u vrtu?: ' . $_POST['pot_vrt'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                                 if($_POST['pot_internet']!='false'){
 $messageBody .= '<p>Da li je prisutan internet priključak?: ' . $_POST['pot_internet'] . '</p>' . "\n";
 $messageBody .= '<br>';
 }

                                  if($_POST['pot_prost']!='false'){
 $messageBody .= '<p>Da li je osigurana posebna prostorija za njegovateljicu/njegovatelja?: ' . $_POST['pot_prost'] . '</p>' . "\n";
 $messageBody .= '<br>';
 } 


                                   if($_POST['usluge']!='false'){
 $messageBody .= '<p>Kako ste saznali za naše usluge?: ' . $_POST['usluge'] . '</p>' . "\n";
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
