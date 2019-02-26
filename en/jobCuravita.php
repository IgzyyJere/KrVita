<?

// if(isset($_POST['mail'])){
// $email_to = $_POST['mail'];
// $email_message = "Form details below.\n\n";
// $email_subject = "coici";

// // create email headers
// $headers = 'From: '.$email_from."\r\n".
// 'Reply-To: '.$email_from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);
// echo'<h1>poslano</h1>';
// }





$poruka_obavezno = "Obavezno polje";


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Centar za pomoć u kući Cura vita 24 — održavanja i poboljšanja kvalitete života osoba treće životne dobi.
  </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="curavita24.com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!--<link rel="shortcut icon" href="img/favicon.ico">-->
  <!-- Font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+sans:300,400,700,400italic,700italic'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
  <!-- Font Awesome Icons -->
  <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css' />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/hover-dropdown-menu.css" rel="stylesheet">
  <!-- Icomoon Icons -->
  <link href="css/icons.css" rel="stylesheet">
  <!-- Revolution Slider -->
  <link href="css/revolution-slider.css" rel="stylesheet">
  <link href="rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Animations -->
  <link href="css/animate.min.css" rel="stylesheet">
  <!-- Owl Carousel Slider -->
  <link href="css/owl/owl.carousel.css" rel="stylesheet">
  <link href="css/owl/owl.theme.css" rel="stylesheet">
  <link href="css/owl/owl.transitions.css" rel="stylesheet">
  <!-- PrettyPhoto Popup -->
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <!-- Custom Style -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Color Scheme -->
  <link href="css/color.css" rel="stylesheet">
</head>




<body>
  <div id="page">
    <!-- Page Loader -->
    <!-- <div id="pageloader">
				<div class="loader-item fa fa-spin text-color"></div>
			</div> -->
    <header id="sticker" class="sticky-navigation">
      <!-- Sticky Menu -->
      <div class="sticky-menu relative">
        <!-- navbar -->
        <div id="navigation" class="navbar navbar-default navbar-bg-light" role="navigation">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="navbar-header">
                  <!-- Button For Responsive toggle -->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navigacija</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Logo -->
                  <a class="navbar-brand" href="index.html"><img class="site_logo" alt="Site Logo"
                      src="img/logo.png"></a>
                </div>
                <!-- Navbar Collapse -->
                <div id="topnav" class="navbar-collapse collapse">
                  <!-- nav -->
                  <ul class="nav navbar-nav">
                    <li><a href="index.html#team" class="scroll">O nama</a></li>
                    <li><a href="index.html" class="scroll">Naslovna</a></li>


                    <li><a href="index.html#faq" class="scroll">Vaša pitanja</a></li>
                    <li><a href="index.html#contact-us" class="scroll">Kontakt</a></li>
                    <li><a href="index-de.html" class="scroll"><img alt="Deutsch" src="img/ger15.png"></a></li>
                    <li><a href="index.html" class="scroll"><img alt="Hrvatski" src="img/cro15.png"></a></li>
                    <li><a href="index-en.html" class="scroll"><img alt="English" src="img/uk15.png"> </a></li>
                    <!-- Header Contact -->
                    <li class="hidden-767">
                      <a href="#" class="header-contact">
                        <!-- <span>
														<i class="fa fa-mobile"></i>
													</span> -->
                      </a>
                    </li>
                    <!-- Header Search
											<li class="hidden-767">
												<a href="#" class="header-search">
													<span>
														<i class="fa fa-search"></i>
													</span>
												</a>
											</li>
											<!-- Header Share -->
                    <li class="hidden-767">
                      <a href="#" class="header-share">
                        <span>
                          <i class="fa fa-share-alt"></i>
                        </span>
                      </a>

                    </li>
                  </ul><!-- Right nav -->
                  <!-- Header Contact Content -->
                  <div class="bg-white hide-show-content no-display header-contact-content">
                    <p class="vertically-absolute-middle">Nazovite nas:
                      <strong>00385 1 7988 708</strong></p>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>

                  <div class="bg-white hide-show-content no-display header-share-content">
                    <div class="vertically-absolute-middle social-icon gray-bg icons-circle i-3x">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>


                    </div>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Share Content -->
                </div><!-- /.navbar-collapse -->
              </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- navbar -->
      </div><!-- Sticky Menu -->
    </header>
    <!-- Sticky Navbar -->

    <!-- <div class="privacy-banner" style="border-top: 2px solid #ff910e; display: none;">
                    <div class="banner-wrapper">
                      <p>Koristimo kolačiće u svrhu pružanja boljeg korisničkog iskustva na stranici. Ukoliko nastavite s pregledavanjem ove stranice pretpostavit ćemo da se slažete s tim <a href="#">Više...</a></p>
                      <button aria-label="Close" style="background: #ff910e;" type="button"><span aria-hidden="true"></span></button>
                    </div>
                  </div> -->



    <section id="services" class="page-section">
      <div class="container-fluid">
        <div class="section-title" data-animation="fadeInUp">
          <h2 class="title">Posao u curavita24</h2>
        </div>




        <div class="row bottom-pad-0">
          <div class="col-sm-8 col-md-8 col-md-offset-2 col-lg-offset-2 col-xs-offset-0" data-animation="fadeInLeft">
            <p class="text-center opacity">
              <ul class="listPosao">
                <li class="list-style">CuraVita24 Vam pruža rad u pozitivnom okruženju i s ljudima kojima je stalo do
                  Vas.</li>
                <li>Svjesni smo da je posao njegovatelja iznimno zahtjevan, kako na fizičkoj tako i na psihičkoj razini.
                  Iako svoju djelatnost njegovatelji često smatraju pozivom ona iziskuje osobni angažman i odricanja.
                </li>
                <li>Mnogi ostavljaju svoju obitelj kako bi se s puno ljubavi, profesionalnošću i uloženim trudom
                  posvetili i brinuli o ljudima kojima je njihova pomoć i podrška neophodna. Zato je iznimno važno da
                  prilikom traženja posla njegovatelja uz sebe imate pouzdanog partnera koji će za vas pronaći pravu
                  obitelj, a pritom vam biti snažan oslonac tijekom cijelog vašeg boravka na radnom mjestu.</li>
                <li>Što očekujemo od Vas? Vrlo jednostavno – posvećenost poslu, spremnost na nove izazove i rad s
                  ljudima. </li>
              </ul>
            </p>
            <br />
            <br />
          </div>
        </div>
    </section>




    <section class="page-section no-pad">
      <div class="container">
        <div class="row">
          <div class="col-md-12 top-pad-40 bottom-pad-40 text-center">
            <div class="section-title" data-animation="fadeInUp">
              <h2 class="title">Potrebne kvalifikacije</h2>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 top-pad-40 bottom-pad-40 text-left">
            <h3>Kvalifikacije:</h3>
            <ul class="listPosao">
              <li>Poznavanje osnova njemačkog jezika za rad na njemačkom govornom području</li>
              <li>Zaposlenica/zaposlenik mora biti punoljetna/punoljetan te imati prebivalište u Republici Hrvatskoj
              </li>
              <li>Poželjno je iskustvo brige za starije i nemoćne osobe (koje ste možda stekli i brigom o svojim
                članovima obitelji) te iskustvo u prepoznavanju i pravilnom odgovoru na potrebe starije i nemoćne osobe
                o kojoj se brinete</li>
              <li>Zaposlenica/zaposlenik mora biti dobrog psihofizičkog zdravlja</li>
              <li>Proaktivni i odgovoran pristup prema poslu</li>
              <li>Ugodan i profesionalan pristup prema klijentima</li>
              <li>Komunikativnost</li>
              <li>Organiziranost i pouzdanost</li>
              <li>Poželjna je vozačka dozvola B kategorije (nije uvjet)</li>
            </ul>
          </div>

          <div class="col-md-6 top-pad-40 bottom-pad-40 text-left">
            <h3>Pravni uvjeti:</h3>
            <ul class="listPosao">
              <li>Hrvatska osobna iskaznica</li>
              <li>OIB (osobni identifikacijski broj)</li>
              <li>Prijavljeno prebivalište u Hrvatskoj</li>
              <li>Hrvatska porezna kartica</li>

            </ul>
          </div>


        </div>


        <div class="row">
          <div class="col-md-6 top-pad-40 bottom-pad-40 text-left">
            <h3 data-animation="fadeInUp">Opis Posla:</h3>

            <p><b>Njegovateljica/njegovatelj</b> je osoba koja pomaže starijim i nemoćnim osobama u obavljanju
              aktivnosti svakodnevnog života i provodi osnovne postupke iz područja zdravstvene njege.
              Dostojanstvo ove dobno osjetljive populacije njeguje se ublažavanjem socijalne izolacije, pružanjem
              emocionalne potpore razgovorima i druženjem u svrhu prevladavanja usamljenosti,
              te uključivanjem u društveni život zajednice. Na praktičnoj razini, pomaže im rasterećenje od kućanskih
              poslova, odlazaka u nabavku stvari i pripremanja hrane.
              Ako su ograničenog zdravlja, dragocjena im je pratnja i pomoć u zadovoljavanju vlastitih zdravstvenih i
              higijenskih potreba.
              Briga o starijoj i nemoćnoj osobi uključuje slijedeće poslove :</p>
            <ul class="listPosao">
              <li>Vođenje kućanstva – Vaš će zadatak u mjestu boravka starije i nemoćne osobe biti organizirati
                kućanstvo te voditi brigu o čistoći i urednosti kako kuće tako i odjeće.</li>
              <li>Nabavka i priprema hrane - planiranje prehrane uključuje brigu o nabavci namirnica, pripremanje obroka
                prema dogovorenom rasporedu i željama osobe koju njegujete ili preporukama liječnika i nutricionista te
                pomoć pri hranjenju ukoliko je potrebna.</li>
              <li>Pomoć pri kretanju i rekreaciji – pomoć primjerena tjelesnim mogućnostima osobi o kojoj se brinete pri
                kretanju u kući i izvan nje ili pomoć pri rekreaciji i šetnji.</li>
              <li>Pomoć o održavanju osobne higijene – privremene ili trajne zdravstvene poteškoće ili ograničenja
                iziskuju pomoć pri oblačenju i svlačenju, pomoć pri kupanju te ostalim higijenskim potrebama ovisno o
                klijentu i njegovom zdravstvenom stanju.</li>
              <li>Društvene i socijalne aktivnosti – uključuje razgovore, šetnje, čitanje, odlazak na izlete, društvene
                igre sa osobom o kojoj brinete.</li>
            </ul>



          </div>

          <div class="col-md-6 top-pad-150 bottom-pad-40">
            <img src="img/sections/slider/curavita1_sm.jpg">
          </div>
        </div>


      </div>
    </section>






    <section class="page-section no-pad bg-color">
      <div class="container">
        <div class="row">
          <div class="col-md-12 top-pad-40 bottom-pad-40 text-center">
            <h3 class="text-uppercase" data-animation="fadeInUp">Što za mene znači rad u CuraVita24</h3>
            <p>Upravo ste Vi, naši njegovatelji, uvelike pridonijeli našem poslovnom uspjehu, jer ste svojim osobnim
              angažmanom i požrtvovanosti prema svojoj profesiji dokazali kako jedno nadasve humano zanimanje ima
              budućnost.</p>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="section-titleJob" data-animation="fadeInUp">
        <h5 class="title"><a href="#" id="jobInt"><i class="fa fa-2x fa-angle-double-down down" aria-hidden="true"></i>
            PRIJAVITE SE NA NATJEČAJ <i class="fa fa-2x fa-angle-double-down down" aria-hidden="true"></i></h5></a>
      </div>
      </sectoin>









      <section class="page-section form">
        <div class="container">
          <div class="row" id="jobForm" data-animation="fadeInLeft">


            <div class="row natjecaji">
              <div class="col-sm-8 col-md-8 col-md-offset-2 col-lg-offset-2 col-xs-offset-0"
                data-animation="fadeInRight">
                <div class="section-title" data-animation="fadeInUp">
                  <h2 class="title">Natječaji</h2>
                </div>
                <p>trenutno nema</p>
              </div>
            </div>



            <div class="section-titleJob" data-animation="fadeInUp">
              <h5 class="title">Forma za posao</h5>
            </div>
            <div class="well well-sm">
              <p>polja označeno s * su obavezna polja</p>
            </div>


            <div class="col-lg-12 col-md-10 col-sm-8">
              <form id="contact-form" class="contact-form" method="post">

                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <label class="ime">
                      <input type="text" class="form-control" placeholder="Ime*:" data-constraints="@Required" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>

                  <div class="col-lg-2 col-md-2 ">
                    <label class="prezime">
                      <input type="text" class="form-control" placeholder="Prezime*:" data-constraints="@Required" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>
                  <div class="col-lg-2 col-md-2 ">
                    <label class="datum_rodjenja">
                      <input type="text" class="form-control" placeholder="Datum rođenja :*"
                        data-constraints="@Required" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>

                  <div class="col-lg-3 col-md-3 ">
                    <label class="adresa">
                      <input type="text" class="form-control" placeholder="Adresa :" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>

                </div>



                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <label class="mjesto">
                      <input type="text" class="form-control" placeholder="Mjesto i poštanski broj :" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="mail">
                      <input type="text" class="form-control" placeholder="E-mail adresa :*"
                        data-constraints="@Required" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="tel">
                      <input type="text" class="form-control" placeholder="Broj Telefona :" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="mob">
                      <input type="text" class="form-control" placeholder="Broj mobitela* :"
                        data-constraints="@Required" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>
                </div>



                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <label class="visina">
                      <input type="text" class="form-control" placeholder="Visina cm*:" data-constraints="@Required" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>



                  <div class="col-lg-2 col-md-2">
                    <label class="tezina">
                      <input type="text" class="form-control" placeholder="težina:" />
                      <span class="error-message">
                        <? print $poruka_tekst; ?></span>
                    </label>
                  </div>



                  <div class="col-lg-3 col-md-3">
                    <label class="voz_dozvola">
                      <select id="voz_dozvola" class="form-control">
                        <option value="">Imate li vozačku dozvolu?</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                    </label>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="aktiv_voz">
                      <select class="form-control">
                        <option value="">Jeste li aktivan vozač?</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                    </label>
                  </div>

                </div>



                <div class="row">

                  <div class="col-lg-3 col-md-3">
                    <label class="pusac">
                      <select id="pusac" class="form-control">
                        <option>Jeste li pušač?</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                    </label>
                  </div>

                </div>



                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <label class="radno_iskustvo" class="form-control">
                      <textarea class="form-control"
                        placeholder="Radno iskustvo - kronološki navedite o kome ste se brinuli, koliko dugo, u kakvom je stanju bila osoba o kojoj ste se brinuli te ukratko opišite što ste sve radili*:"
                        data-constraints='@Required @Length(min=10,max=999999)'></textarea>
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>
                      <span class="error-message">*Nedovoljno podataka.</span>
                    </label>
                  </div>
                </div>





                <hr>
                <h5>Navedite bolesti i stanja sa kojima ste spremni raditi </h5>
                <div class="row">


                  <div class="col-lg-2 col-md-2">
                    <label class="demencija">
                      <select class="form-control">
                        <option value="">Demencija/Alzheimer</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                  <div class="col-lg-2 col-md-2">
                    <label class="inkontinencija">
                      <select class="form-control">
                        <option value="">Inkontinencija</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>



                  <div class="col-lg-2 col-md-2">
                    <label class="park_bol">
                      <select class="form-control">
                        <option value="">Parkinsonova bolest</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                  <div class="col-lg-2 col-md-2">
                    <label class="tumo">
                      <select class="form-control">
                        <option value="">Tumor/rak</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="oste">
                      <select class="form-control">
                        <option value="">Osteoporoza</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                      <div class="col-lg-2 col-md-2">
                        <label class="kateter">
                          <select class="form-control">
                            <option value="">Trajni kateter</option>
                            <option value="da">da</option>
                            <option value="ne">ne</option>
                          </select>
                      </div>


                </div>


                <div class="row">

             


                  <div class="col-lg-2 col-md-2">
                    <label class="mozdani">
                      <select class="form-control">
                        <option value="">Moždani udar</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                  <div class="col-lg-2 col-md-2">
                    <label class="peg">
                      <select class="form-control">
                        <option value="">PEG sonda</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                  <div class="col-lg-2 col-md-2">
                    <label class="depra">
                      <select class="form-control">
                        <option value="">Depresija</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="astma">
                      <select class="form-control">
                        <option value="">Astma</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="deku">
                      <select class="form-control">
                        <option value="">Dekubitus</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="prolj">
                      <select class="form-control">
                        <option value="">Kronični proljev</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                </div>




                <div class="row">


                      <div class="col-lg-2 col-md-2">
                        <label class="rem">
                          <select class="form-control">
                            <option value="">Reuma</option>
                            <option value="da">da</option>
                            <option value="ne">ne</option>
                          </select>
                      </div>

                  <div class="col-lg-2 col-md-2">
                    <label class="multi_sk">
                      <select class="form-control">
                        <option value="">Multipla skleroza</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="src_napad">
                      <select class="form-control">
                        <option value="">Srčani udar</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="dijab">
                      <select class="form-control">
                        <option value="">Dijabetes</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="osVid">
                      <select class="form-control">
                        <option value="">Oštećeni vid</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                  <div class="col-lg-2 col-md-2">
                    <label class="osSluh">
                      <select class="form-control">
                        <option value="">Oštećeni sluh</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>


                </div>




                <div class="row">


                  <div class="col-lg-2 col-md-2">
                    <label class="sljep">
                      <select class="form-control">
                        <option value="">Slijepoća</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>
                  
                  
                  <div class="col-lg-2 col-md-2">
                    <label class="gluh">
                      <select class="form-control">
                        <option value="">Gluhoća</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>
                  
                  
                  <div class="col-lg-2 col-md-2">
                    <label class="nepokretan">
                      <select class="form-control">
                        <option value="">Nepokretna osoba</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

                  <div class="col-lg-3 col-md-3">
                    <label class="kard">
                      <select class="form-control">
                        <option value="">Kardiovaskularne bolesti</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>
                  </div>

      
                </div>




                <div class="row">


                    
                    
                    <div class="col-lg-3 col-md-3">
                      <label class="boles_kretanje">
                        <select class="form-control">
                          <option value="">Bolesnik s poteškoćama u kretanju</option>
                          <option value="da">da</option>
                          <option value="ne">ne</option>
                        </select>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-4">
                      <label class="ostalo">
                        <input type="text" class="form-control" placeholder="Ostalo:" />
                      </label>
                    </div>

                  <div class="col-lg-4 col-md-4">
                    <label class="rad_nj">
                      <input type="text" class="form-control"
                        placeholder="Koliko dugo i od kada ste spremni raditi u Njemačkoj?:" />
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>

                    </label>
                  </div>


                  

                </div>

                <div class="row">

                      <div class="col-lg-2 col-md-2">
                        <label class="posaoUpit">
                          <select class="form-control">
                            <option>Zanima me posao</option>
                            <option value="hr">u Hrvatskoj</option>
                            <option value="inz">u inozemstvu</option>
                          </select>
                      </div>
                        
                        
                        <div class="col-lg-2 col-md-2">
                          <label class="alergija">
                            <select id="alergija" class="form-control">
                              <option>Imate li alergije?</option>
                              <option value="da">da</option>
                              <option value="ne">ne</option>
                            </select>
                        </div>
                        
                        
                        <div class="col-lg-3 col-md-3 form-group">
                          <label class="alergija_opis">
                            <input type="text" class="form-control" placeholder="Ako da, koje?:" />
                            <span class="empty-message">
                              <? print $poruka_obavezno; ?></span>
                        
                          </label>
                        </div>
                </div>


                            <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <label class="jezik">
                                <select class="form-control">
                                  <option value="">Koliko dobro bi ocijenili svoje znanje njemačkog jezika?</option>
                                  <option value="A1">A1</option>
                                  <option value="A2">A2</option>
                                  <option value="B1">B1</option>
                                  <option value="B2">B2</option>
                                  <option value="C1">C1</option>
                                  <option value="C2">C2</option>
                                </select>
                            </div>

                </div>




                <div class="panel panel-default mix all">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#faq7">A1 Stupanj</a>
                    </div>
                  </div>
                  <div id="faq7" class="panel-collapse collapse panelJob">
                    <div class="panel-body">
                      Mogu razumjeti svakodnevne izraze i vrlo jednostavne fraze i izraze usmjerene na zadovoljavanje
                      konkretnih potreba. Mogu predstaviti sebe i druge ,pitati druge ljude na pitanja o njima - npr.
                      gdje žive, sto posjeduju, što znaju te mogu odgovoriti na pitanja ove prirode.
                      Mogu voditi jednostavan razgovor pod uvjetom da sugovornik govori polako i razgovijetno te da je
                      spreman pomoći.</p>
                    </div>
                  </div>
                </div>


                <div class="panel panel-default mix panel-bg graphic-design all">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#faq8">A2 Stupanj</a>
                    </div>
                  </div>
                  <div id="faq8" class="panel-collapse collapse panelJob">
                    <div class="panel-body">
                      <p>
                        Mogu razumjeti izolirane rečenice i često rabljene riječi iz područja od neposrednog osobnog
                        interesa (npr. jednostavne podatke o sebi i obitelji, informacije vezane uz kupovanje,
                        neposredni okoliš, rad).
                        Mogu komunicirati u jednostavnim situacijama i kada je riječ o jednostavnoj i izravnoj razmjeni
                        informacija o poznatim i redovitim pitanjima. </p>
                    </div>
                  </div>
                </div>




                <div class="panel panel-default mix panel-bg graphic-design all">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#faq9">B1 Stupanj</a>
                    </div>
                  </div>
                  <div id="faq9" class="panel-collapse collapse panelJob">
                    <div class="panel-body">
                      <p>
                        Mogu razumjeti glavne misli jasnog standardnog razgovora o poznatim temama kad je riječ o poslu,
                        u školi, u slobodno vrijeme, itd...
                        Mogu se snalaziti u većini situacija koje se mogu pojaviti tijekom putovanja u jezičnom
                        području. Mogu proizvesti jednostavan vezani tekst o poznatoj temi ili temi od osobnog interesa.
                      </p>
                    </div>
                  </div>
                </div>




                <div class="panel panel-default mix panel-bg graphic-design all">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#faq10">B2 Stupanj</a>
                    </div>
                  </div>
                  <div id="faq10" class="panel-collapse collapse panelJob">
                    <div class="panel-body">
                      <p>
                        Mogu razumjeti glavne ideje složenog teksta i konkretnih i apstraktnih tema, uključujući i
                        tehničku u svom području,
                        uključujući tehničke razgovore. Mogu komunicirati tako spontano i tečno da normalno razgovoram s
                        izvornim govornikom bez napora s ijedne strane moguće.
                      </p>
                    </div>
                  </div>
                </div>




                <div class="panel panel-default mix panel-bg graphic-design all">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#faq11">C1 Stupanj</a>
                    </div>
                  </div>
                  <div id="faq11" class="panel-collapse collapse panelJob">
                    <div class="panel-body">
                      <p>
                        Mogu razumjeti širok spektar zahtjevnih, dužih tekstova, i prepoznati implicitna značenja.
                        Mogu razgovarati tečno i spontano, bez puno očitog traženja odgovarajućih izraza. Mogu se
                        koristiti fleksibilno i učinkovito jezikom u društvenom i poslovnom životu.
                        Mogu proizvesti jasan, dobro strukturiran, detaljan tekst o složenim temama. </p>
                    </div>
                  </div>
                </div>




                <div class="panel panel-default mix panel-bg graphic-design all">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#faq12">C2 Stupanj</a>
                    </div>
                  </div>
                  <div id="faq12" class="panel-collapse collapse panelJob">
                    <div class="panel-body">
                      <p>
                        Mogu gotovo sve što on / ona čita ili sluša razumijeti s lakoćom. Mogu sažeti informacije iz
                        različitih izvora pisanih i izgovorenih, rekonstrukciji argumenata u koherentnu
                        prezentaciju. Mogu sama spontano, vrlo tečno i precizno, razlikovati i finije nijanse značenja
                        čak i u složenijim situacijama.</p>
                    </div>
                  </div>
                </div>




                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <label class="hobi" class="form-control">
                      <textarea class="form-control" placeholder="Navedite svoje hobije:"
                        data-constraints='@Required @Length(min=10,max=999999)'></textarea>
                      <span class="empty-message">
                        <? print $poruka_obavezno; ?></span>
                      <span class="error-message">*Nedovoljno podataka.</span>
                    </label>
                  </div>

                  <div class="col-lg-6 col-md-6 top-pad-40 bottom-pad-40">

                    <img src="img/logo2.png">

                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <h4>PRIVOLA</h4>
                    <p>
                      Ovim izjavljujem da sam suglasna/an s korištenjem mojih osobnih podataka, sukladno s Uredbom (EU)
                      br. 2016/679 Europskog parlamenta i Vijeća Europe od 27. travnja 2016.
                      o zaštiti pojedinaca, u vezi s obradom osobnih podataka i o slobodnom kretanju takvih podataka,
                      čl.4. st.11.</p>
                    <br />
                    Slažem se da se moji osobni podaci koriste u obradi opisanoj u evidenciji aktivnosti obrade
                    Evidencija prijava za posao. Podaci će se obrađivati povjerljivo i s njima će se postupati u skladu
                    s Uredbom (EU) br. 2016/679, te će se koristiti samo u svrhu navedenu u evidenciji.
                    <b>Svoju privolu u svakom trenutku možete povući.</b>

                    </p>
                  </div>
                </div>



                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <label class="gdpr">
                      <select id="gdpr" class="form-control">
                        <option value="">Pristajete li na Priovlu</option>
                        <option value="da">da</option>
                        <option value="ne">ne</option>
                      </select>

                      <br />
                      <a href="" data-type="submit" id="btn" class="btn btn-orange btn-lg btn5">Pošalji <i
                          class="icon-paper-plane"></i></button></a>


                  </div>





                  <label class="email_from">
                    <input type="hidden" value="<? print $var_e_mail_from; ?>" />
                  </label>

                  <label class="email_to">
                    <input type="hidden" value="<? print $var_e_mail; ?>" />
                  </label>

                  <label class="grupa_naziv">
                    <input type="hidden" value="<? print $grupa_naziv; ?>" />
                  </label>

                  <div class="success-message">Upitnik je poslan.</div>

                </div>



                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="alert alert-danger" id="negPoruka">
                      <strong>Niste pristali na privolu</strong>
                    </div>
                  </div>
                </div>
            </div>


            <br />



            </form>
          </div>
        </div>
  </div>
  </section>





  <footer id="footer">
    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
            <div class="widget-title">
              <!-- Title -->
              <h3 class="title">Adresa</h3>
            </div>
            <!-- Text -->
            <!-- Address -->
            <p><strong>Adresa:</strong> <br> CURA VITA 24<br> Velimira Škorpika 12a,<br> Zagreb, Hrvatska.</p>
            <!-- Phone -->
            <p><strong>Kontakt:</strong> <br> Telefon: 00385 1 7988 708
              <br> Fax: 00385 1 3460 111
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
            <div class="widget-title">
              <!-- Title -->
              <h3 class="title">Obrazac za posao</h3>
            </div>
            <nav>
              <ul>
                <!-- List Items -->
                <li><a href="posaoCuraVita.php">PRIJAVA ZA POSAO</a></li>
                <li><a href="opis_posla.html">OPIS POSLOVA</a></li>

              </ul>
            </nav>

            <div class="widget-title">
              <!-- Title -->
              <h3 class="title">IZJAVA O PRIVATNOSTI</h3>
            </div>
            <nav>
              <ul>
                <!-- List Items -->
                <li><a href="http://curavita24.com/download/Cura Vita - Politika privatnosti.pdf">Skinite ovdje Izjavu o
                    privatnosti.</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3 widget bottom-xs-pad-20">
            <div class="widget-title">
              <!-- Title -->
              <h3 class="title">Zadnje novosti</h3>
            </div>
            <nav>
              <ul class="footer-blog">
                <!-- List Items -->
                <li><a href="#tourism">U najnoviju ponudu usluga uvrstili smo turistički posjet i odmor klijenata u
                    Hrvatskoj, uz prijevoz, pomoć i pratnju našeg osoblja. Destinacije i rute putovanja bira klijent
                    prema vlasitom izboru ili uz našu preporuku. Brinemo o organizaciji ugodnog smještaja i prehrane za
                    vrijeme tog odmora. </a></li>
                <!-- <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></li>-->
              </ul>
            </nav>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 widget newsletter bottom-xs-pad-20">
            <div class="widget-title">




              <!-- Title -->
              <h3 class="title">Linkovi</h3>
            </div>
            <div>
              <!-- Text -->
              <nav>
                <ul>
                  <!-- List Items -->
                  <li><a href="najcescaPitanja.html">Najčešća pitanja</a></li>


                </ul>
              </nav>

              <!-- Count
                <div class="footer-count">
                  <p class="count-number" data-count="93550">total downloads : <span class="counter"></span></p>
                </div>
                <div class="footer-count">
                  <p class="count-number" data-count="79550">happy clients : <span class="counter"></span></p>
                </div>-->


            </div>
            <!-- .newsletter -->
          </div>
        </div>
      </div>






      <!-- footer-top -->
      <div class="copyright">
        <div class="container">
          <div class="row">

            <!-- Copyrights -->
            <div class="col-xs-12 col-sm-6 col-md-6">
              <strong>&copy; 2019 </strong><a href="https://adricongroup.com/"><strong>Adricongroup d.o.o.</strong></a>
              <br>
              <!-- Terms Link -->
              <a href="https://adricongroup.com/"><strong>Web project & design: Adricongroup d.o.o.</strong></a>
            </div>
            <div class="col-xs-2  col-sm-6 col-md-6 text-right page-scroll gray-bg icons-circle i-3x">
              <!-- Goto Top -->
              <a href="#page">
                <i class="glyphicon glyphicon-arrow-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom -->
  </footer>
  <!-- footer -->
  </div>
  <!-- page -->





  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Menu jQuery plugin -->
  <script type="text/javascript" src="js/hover-dropdown-menu.js"></script>
  <!-- Menu jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>
  <!-- Scroll Top Menu -->
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <!-- Sticky Menu -->
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <!-- Bootstrap Validation -->
  <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
  <!-- Revolution Slider -->
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/revolution-custom.js"></script>
  <!-- Portfolio Filter -->
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
  <!-- Animations -->
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/effect.js"></script>
  <!-- Owl Carousel Slider -->
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <!-- Pretty Photo Popup -->
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <!-- Parallax BG -->
  <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
  <!-- Fun Factor / Counter -->
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <!-- Twitter Feed -->
  <script type="text/javascript" src="js/tweet/carousel.js"></script>
  <script type="text/javascript" src="js/tweet/scripts.js"></script>
  <script type="text/javascript" src="js/tweet/tweetie.min.js"></script>
  <!-- Background Video -->
  <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
  <!-- Custom Js Code -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Scripts -->
  <script src="js/TMForm.js"></script>
  <script>
    $(document).ready(function () {
      // $("button, option, a").click(function(){
      //     $("body").css("overflow","hidden");
      // });
      $('#jobForm').hide();

      //function with form
      $(function () {
        $('#jobInt').click(function () {
          $('#jobForm').show(100);
          $('#jobInt').hide();
          event.preventDefault();
          $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
        });

      });
    });
  </script>



  <script>
    $(document).ready(function () {
      //hide elements on load
      $('#btn').hide();
      $('#negPoruka').hide();
      $('.aktiv_voz').hide();
      $('#pus_opcija').hide();
      $('.alergija_opis').hide();


      $(function () {
        $('#gdpr').change(function () {
          if ($('#gdpr').val() == 'da') {
            $('#btn').show();
            $('#negPoruka').hide();
          } else if ($('#gdpr').val() == 'ne') {
            $('#btn').hide();
            $('#negPoruka').show();
          }
        });//gdpr

        $('#voz_dozvola').change(function () {
          if ($('#voz_dozvola').val() == 'da') {
            $('.aktiv_voz').show();
          } else {
            $('.aktiv_voz').hide();
          }
        });//vozacka

        $('.pusac').change(function () {
          if ($('#pusac').val() == 'da') {
            $('#pus_opcija').show();
          } else {
            $('#pus_opcija').hide();
          }
        });//pušać

        $('.alergija').change(function () {
          if ($('#alergija').val() == 'da') {
            $('.alergija_opis').show();
          } else {
            $('.alergija_opis').hide();
          }
        });//alergija
      }); //endfunction
    }); //endfunction

  </script>

</body>

</html>