<?php
session_start();
require_once '../includes/template.inc.php';

head('Index');
?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                          <br><br> <?php titre(); ?><br><br>
                        </li>
                        <li>
                            <a class="active" href="index.php"><b> Startseite</b></a>
                        </li>
									<?php 
									$ind = 0; 
									$inde=1;
									$nom = '';
									$name= '';
									sommer($ind, $inde, $nom, $name); ?>
						<li>
                            <a href="#"><b>Vergangene Semester</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              
									<?php 
									$ind = 0; 
									$inde= 0;
									$nom = 'WS20_21';
									$name= 'WS 2020/2021';
									winter($ind, $inde, $nom, $name); 
                                
									$ind = 0; 
									$inde= 0;
									$nom = 'SS_20';
									$name= 'SS 2020';
									sommer($ind, $inde, $nom, $name); 
                              
									$ind = 0;
									$inde= 0;
									$nom = 'WS19_18';
									$name= 'WS 2019/2020';
									winter($ind, $inde, $nom, $name); 
                                
									$ind = 0;
									$inde= 0;
									$nom = 'SS_19';
									$name= 'SS 2019';
									sommer($ind, $inde, $nom, $name); 
                              
									$ind = 0;
									$inde= 0;
									$nom = 'WS18_19';
									$name= 'WS 2018/2019';
									winter($ind, $inde, $nom, $name); 
                               
									$ind = 0;	
									$inde= 0;									
									$nom = 'SS_18';
									$name= 'SS 2018';
									sommer($ind, $inde, $nom, $name); 
                                
									$ind = 0;
									$inde= 0;
									$nom = 'WS17_18';
									$name= 'WS 2017/2018';
									winter($ind, $inde, $nom, $name); 
                               
									$ind = 0;
									$inde=0;
									$nom = 'SS_17';
									$name= 'SS 2017';
									sommer($ind, $inde, $nom, $name); 
                               
									$ind = 0;
									$inde= 0;
									$nom = 'WS16_17';
									$name= 'WS 2016/2017';
									winter($ind, $inde, $nom, $name); 

									$ind = 0;
									$inde= 0;
									$nom = 'SS_16';
									$name= 'SS 2016';
									sommer($ind, $inde, $nom, $name); 

									$ind = 0;
									$inde= 0;
									$nom = 'WS15_16';
									$name= 'WS 2015//2016';
									winter($ind, $inde, $nom, $name);

									$ind = 0;
									$inde= 0;
									$nom = 'SS_15'; 
									$name= 'SS 2015';
									sommer($ind, $inde, $nom, $name); 

									$ind = 0;
									$inde= 0;
									$nom = 'WS14_15';
									$name= 'WS 2014/2015';
									winter($ind, $inde, $nom, $name); 

									$ind = 0;
									$inde= 0;
									$nom = 'SS_14'; 
									$name= 'SS 2014';
									sommer($ind, $inde, $nom, $name); 
                               
									$ind = 0;
									$inde= 0;
									$nom = 'WS13_14';
									$name= 'WS 2013/2014';
									winter($ind, $inde, $nom, $name); 
 
									$ind = 0;
									$inde= 0;
									$nom = 'SS_13'; 
									$name= 'SS 2013';
									sommer($ind, $inde, $nom, $name); 
 
									$ind = 0;
									$inde= 0;
									$nom = 'WS12_13';
									$name= 'WS 2012/2013';
									winter($ind, $inde, $nom, $name);
 
									$ind = 0;
									$inde= 0;
									$nom = 'SS_12'; 
									$name= 'SS 2012';
									sommer($ind, $inde, $nom, $name); 
									 
									$ind = 0;
									$inde= 0;
									$nom = 'WS11_12';
									$name= 'WS 2011/2012';
									winter($ind, $inde, $nom, $name); 
                                 
									$ind = 0;
									$inde= 0;
									$nom = 'SS_11'; 
									$name= 'SS 2011';
									sommer($ind, $inde, $nom, $name); ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li> 
                            <a href="#"><b>Informationen</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../information/termine.php">Termine</a>
                                </li>
								<?php 
								$inde=1;
								persone($inde);
								?>
                                <li>
                                    <a href="../information/sekretariat.php">Studiensekretariat</a>
                                </li>
                                <li>
                                    <a href="../information/anfahrt.php"> Anfahrt</a>
                                </li>
                                <li>
                                    <a href="../information/kontakt.php">Kontakt</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level-->
                        </li>
						<li>
                            <a href="../andere/archiv.php"><b>Archiv</b></a>
                        </li>
						<?php 
						$inde=0;
						stellenangebot($inde); 
						?>
						<li>
                            <a href="../andere/klausur.php"><b>Klausuren</b></a>
                        </li>
                        <li>
                            <a href="../andere/moodle.php"><b>Moodle</b></a>
                        </li>
                        <li>
                            <a href="../andere/lageplan.php"><b>Lageplan</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
		 </nav>
		 <div id="page-wrapper">
       
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
				<img src="../bild/bild7.jpg"></div>
                <div class="carousel-caption">
                    <h2>Tag der offenen T&uuml;r des Fachbereichs Elektrotechnik/Informatik (FB 16)</h2>
                </div>
            </div>
            <div class="item">
               <div class="fill">
				<img src="../bild/bild5.jpg"></div>
                <div class="carousel-caption">
                    <h2>Viele Studienanf&auml;nger k&ouml;nnen laut der Uni Kassel die einfachsten Rechenaufgaben nicht l&ouml;sen.</h2>
                </div>
            </div>
            <div class="item">
               <div class="fill">
				<img src="../bild/bild1.jpg"></div>
                <div class="carousel-caption">
                    <h2>Mathematik (Bachelor)</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header><br><br><br><br>
        <!-- Marketing Icons Section -->
        <div class="row">
		    <div class="col-lg-12">
		    <?php
            titel();
			?>
			</div>
		</div><br><br><br>
	
  <!-- Marketing Icons Section -->
        <div class="container">
			<div class="row">
			    <div class="col-lg-8">
				 <h2><b>Allgemeine Bestimmungen</b></h2>
					<p>Das Institut f&uuml;r Mathematik bietet ein konsekutives Bachelor-/Masterprogramm in Mathematik. 
					<p>Dabei zeichnet sich der Mathematik <b>Bachelor</b> durch eine intensive Betreuung und verschiedene Unterst&uuml;tzungsma&szlig;nahmen aus, 
					mit denen unterschiedlichen Vorkenntnissen begegnet wird. 
					Vielf&auml;ltige Wahlm&ouml;glichkeiten aus Natur- und Ingenieurwissenschaften bieten individuelle Akzentsetzungen.</p>
					Im <b>Master</b> arbeiten unsere Studierenden ein Jahr lang in der aktuellen Forschung der Fachgebiete mit.
					Zus&auml;tzlich ist das Institut f&uuml;r die mathematische Grundausbildung in den Natur- und Ingenieurwissenschaften verantwortlich.</p>
					<div class="row">
					    <div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Allgemeine Bestimmungen</b></h4>
								</div>
								<div class="panel-body">
									<p>In den Allgemeinen Bestimmungen finden sich allgemeine Regelungen z. B. zu Modulen, Credits sowie Einzelheiten der Studien- und Pr&uuml;fungsleistungen (Arten, Anmeldung, Bewertung, Notengewichtung, Vers&auml;umnis, R&uuml;cktritt, T&auml;uschung, Bestehen, Wiederholung, Fristen, Anrechnung), zum Widerspruch und zur Akteneinsicht. </p>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Modulhandb&uuml;cher</b></h4>
								</div>
								<div class="panel-body">
									<p>Wenn Sie die Datei mit einem PDF-Reader &ouml;ffnen, k&ouml;nnen Sie per Lesezeichen durch das Dokument navigieren.</p>
									<p>Falls Sie den Firefox-Browser nutzen, k&ouml;nnen Sie nach dem &Ouml;ffnen des Dokuments auf die "Sidebar" und anschlie&szlig;end auf "Dokumentstruktur anzeigen" klicken. </p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Pr&uuml;fungsordnungen</b></h4>
								</div>
								<div class="panel-body">
									<p>Fachpr&uuml;fungsordnungen konkretisieren die Allgemeinen Bestimmungen durch auf den Studiengang bezogene Regelungen. </p>
			  
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Zus&auml;tzliche Module und Erg&auml;nzungen</b></h4>
								</div>
								<div class="panel-body">
									<p>Hier werden Modulbeschreibungen von Wahlpflichtmodulen gelistet, die erst sp&auml;ter hinzugekommen sind:</p>

								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Studienverlaufspl&auml;ne</b></h4>
								</div>
								<div class="panel-body">
									<p>Studienverlaufspl&auml;ne zeigen Ihnen auf den ersten Blick, zu welchen Zeitpunkt in Ihrem Studium die Module zu absolvieren
									sind. Dieser Ablauf ist nicht als starre Struktur zu verstehen. Es besteht bei der Semesterzuordnung meistens eine gewisse
									Flexibilit&auml;t, allerdings sollten Sie auch beachten, dass die Belegung einzelner Module vom vorherigen erfolgreichen 
									Abschluss anderer Module abh&auml;ngig sein kann. </p>
			  
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Klausurregelung L1</b></h4>
								</div>
								<div class="panel-body">
									<p>Alle L1-Klausuren werden in jedem Semester angeboten.
									<p>Studienleistungen k&ouml;nnen nur in den Semestern erbracht werden, in denen die Vorlesung stattfindet.</p>
									Die Klausurtermine finden in der Regel in der ersten Woche nach Vorlesungsende statt.
									Das Pr&uuml;ferblatt senden Sie mit einem freien Feld in Mathematik L1 an die Hessische Lehrkr&auml;fteakademie.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>M&uuml;ndliche Pr&uuml;fung</b></h4>
								</div>
								<div class="panel-body">
									Um sich f&uuml;r die m&uuml;ndliche Examenspr&uuml;fung Mathematik L 1 anzumelden, schreiben Sie eine kurze Email mit der Angabe,
									ob Sie im Herbst oder im Fr&uuml;hjahr gepr&uuml;ft werden m&ouml;chten. 
			  
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div id="panel-heading">
									<h4><b>Schriftliche Pr&uuml;fung</b></h4>
								</div>
								<div class="panel-body">
									Sollten Sie eine schriftliche Examenspr&uuml;fung in Mathematik L1 planen, 
									so m&uuml;ssen Sie das Pr&uuml;ferblatt weiterhin von dem von Ihnen gew&uuml;nschten Pr&uuml;fer unterschreiben lassen.
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-4">
					<div class="row">
						<div class="news-demo">
							<h1>Nachrichten - Info</h1>
						    <div class="news-holder cf">
								<ul class="news-headlines">
									<li class="selected">Das HoPla-Kinderhaus - Raum f&uuml;r Kinder und Eltern</li>
								    <li>Touristen-informationen &uuml;ber Kassel.</li>
								    <li>Studienf&uuml;hrer: Informatik studieren</li>
								    <li>Uni Kassel entwickelt virtuellen Feuerl&ouml;scher</li>
								    <li>Expertengremium</li>
								    <li>Institut f&uuml;r Mathematik</li>
								  <!-- li.highlight gets inserted here -->
								</ul>
								<div class="news-preview">
									<div class="news-content top-content">
										<img src="../bild/foto1.jpg">
										<p><a href="#"><b>Das HoPla-Kinderhaus - Raum f&uuml;r Kinder und Eltern</b></a></p>	
										<p>Im HoPla-Kinderhaus des Studentenwerks Kassel direkt auf dem Campus Nord werden Kinder von Studierenden, Besch&auml;ftigten der Universit&auml;t Kassel und Eltern aus dem Stadtteil betreut.</p>
									</div><!-- .news-content -->
									<div class="news-content">
										<img src="../bild/foto2.jpg">
										<p><a href="#"><b>Touristen-informationen &uuml;ber Kassel.</b>Wir hei&szlig;en Sie herzlich Willkommen in der Urlaubsregion Kassel</a></p>

										<p>Kassel bietet viele verschiedene Veranstaltungen f&uuml;r jung und alt.
										Es gibt in dieser Stadt einen Weihnachtsmarkt, der einheimische sowie touristische G&auml;ste gerne zum Schlendern und Bummeln einl&auml;dt.</p>
									</div><!-- .news-content -->
									<div class="news-content">
										 <img src="../bild/foto3.jpg">
										<p><a href="#"><b>Studienf&uuml;hrer: Informatik studieren</b></a></p>
										<p>Der 14. M&auml;rz ist der internationale Tag der Zahl Pi. Ein guter Anlass, sich das Studienfach Informatik n&auml;her anzuschauen. 
										Was man sonst damit beruflich machen kann und wie das Studium aufgebaut ist, erfahrt ihr hier..</p>
									</div><!-- .news-content -->
									<div class="news-content">
										<img src="../bild/foto4.jpeg">
										<p><a href="#"><b>Uni Kassel entwickelt virtuellen Feuerl&ouml;scher</b></a></p>
										<p>Informatiker der Universit&auml;t Kassel haben einen virtuellen Feuerl&ouml;scher entwickelt,
										mit dem Nachwuchs-Feuerwehrleute den Umgang mit L&ouml;schern &uuml;ben k&ouml;nnen.</p>
									</div><!-- .news-content -->
									<div class="news-content">
										<img src="../bild/foto5.jpeg">
										<p><a href="#"><b>Expertengremium</b></a></p>
										<p>Neue Bundesregierung muss beim Datenschutz konkreter werden. 
										Nutzervertrauen basiert auf wirksamen Datenschutz-ma&szlig;nahmen </p>
									</div><!-- .news-content -->
									<div class="news-content">
										<img src="../bild/foto6.jpg">
										<p><a href="#"><b>Institut f&uuml;r Mathematik</b></a></p>
										<p>Das bietet ein konsekutives Bachelor-/ Masterprogramm in Mathematik. 
										Dabei zeichnet sich der Mathematik Bachelor durch eine intensive Betreuung und verschiedene Unterst&uuml;tzungs-ma&szlig;nahmen aus,
										mit denen unterschiedlichen Vorkenntnissen begegnet wird.</p>
									</div><!-- .news-content -->
								</div><!-- .news-preview -->
							  </div><!-- .news-holder -->
							</div>
						</div>
					<div class="row">
						<div id='calendar-wrap' class='calendar-wrap'></div>
					</div>
			</div>
		</div>
	</div>	
        <hr>

        <!-- Footer -->
        <?php
		foot();
		?>
