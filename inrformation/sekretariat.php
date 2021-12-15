<?php
session_start();
require_once '../includes/template.inc.php';

head('Sekretariat');
?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                          <br><br> <?php titre(); ?><br><br>
                        </li>
                        <li>
                            <a href="../semestre/index.php"><b> Startseite</b></a>
                        </li>
									<?php 
									$ind = 0; 
									$inde=1;
									$nom = '';
									$name= '';
									sommere($ind, $inde, $nom, $name); 
									?>
						<li>
                            <a href="#"><b>Vergangene Semester</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
									<?php 
									$ind = 0; 
									$inde= 0;
									$nom = 'WS20_21';
									$nam = 'WS 2020/2021';
									winter($ind, $inde, $nom, $nam); 
                                
									$ind = 0; 
									$inde= 0;
									$nom = 'SS_20';
									$nam = 'SS 2020';
									sommer($ind, $inde, $nom, $nam); 
                              
									$ind = 0;
									$inde= 0;
									$nom = 'WS19_18';
									$nam = 'WS 2019/2020';
									winter($ind, $inde, $nom, $nam); 
                                
									$ind = 0;
									$inde= 0;
									$nom = 'SS_19';
									$nam = 'SS 2019';
									sommer($ind, $inde, $nom, $nam); 
                              
									$ind = 0;
									$inde= 0;
									$nom = 'WS18_19';
									$nam = 'WS 2018/2019';
									winter($ind, $inde, $nom, $nam); 
                               
									$ind = 0;	
									$inde= 0;									
									$nom = 'SS_18';
									$nam = 'SS 2018';
									sommer($ind, $inde, $nom, $nam); 
                                
									$ind = 0;
									$inde= 0;
									$nom = 'WS17_18';
									$nam = 'WS 2017/2018';
									winter($ind, $inde, $nom, $nam); 
                               
									$ind = 0;
									$inde= 0;
									$nom = 'SS_17';
									$nam = 'SS 2017';
									sommer($ind, $inde, $nom, $nam); 
                               
									$ind = 0;
									$inde= 0;
									$nom = 'WS16_17';
									$nam = 'WS 2016/2017';
									winter($ind, $inde, $nom, $nam); 

									$ind = 0;
									$inde= 0;
									$nom = 'SS_16';
									$nam = 'SS 2016';
									sommer($ind, $inde, $nom, $nam); 

									$ind = 0;
									$inde= 0;
									$nom = 'WS15_16';
									$nam = 'WS 2015//2016';
									winter($ind, $inde, $nom, $nam);

									$ind = 0;
									$inde= 0;
									$nom = 'SS_15'; 
									$nam = 'SS 2015';
									sommer($ind, $inde, $nom, $nam); 

									$ind = 0;
									$inde= 0;
									$nom = 'WS14_15';
									$nam = 'WS 2014/2015';
									winter($ind, $inde, $nom, $nam); 

									$ind = 0;
									$inde= 0;
									$nom = 'SS_14'; 
									$nam = 'SS 2014';
									sommer($ind, $inde, $nom, $nam); 
                               
									$ind = 0;
									$inde= 0;
									$nom = 'WS13_14';
									$nam = 'WS 2013/2014';
									winter($ind, $inde, $nom, $nam); 
 
									$ind = 0;
									$inde= 0;
									$nom = 'SS_13'; 
									$nam = 'SS 2013';
									sommer($ind, $inde, $nom, $nam); 
 
									$ind = 0;
									$inde= 0;
									$nom = 'WS12_13';
									$nam = 'WS 2012/2013';
									winter($ind, $inde, $nom, $nam);
 
									$ind = 0;
									$inde= 0;
									$nom = 'SS_12'; 
									$nam = 'SS 2012';
									sommer($ind, $inde, $nom, $nam); 
									 
									$ind = 0;
									$inde= 0;
									$nom = 'WS11_12';
									$nam = 'WS 2011/2012';
									winter($ind, $inde, $nom, $nam); 
                                 
									$ind = 0;
									$inde= 0;
									$nom = 'SS_11'; 
									$nam = 'SS 2011';
									sommer($ind, $inde, $nom, $nam); ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active"> 
                            <a href="#"><b>Informationen</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <li>
                                    <a href="termine.php">Termine</a>
                                </li>
								<?php 
								$inde=0;
								person($inde);
								?>
                                <li>
                                    <a href="sekretariat.php">Studiensekretariat</a>
                                </li>
                                <li>
                                    <a href="anfahrt.php"> Anfahrt</a>
                                </li>
                                <li>
                                    <a href="kontakt.php">Kontakt</a>
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
       
		    <div class="col-lg-12">
				<span class="texten-effect">Sekretariat f&uuml;r Studien – und Pr&uuml;fungsangelegenheiten</span>  	  
			</div><br><br>
			
			<h4>Im Studiensekretariat werden alle erbrachten studienrelevanten Leistungen archiviert und Anmeldungen f&uuml;r Pr&uuml;fungen entgegen genommen.
			Es ist die wichtigste Anlaufstelle f&uuml;r alle Studierenden des Fachbereichs.</h4>
			<h4>Das Studierendensekretariat ist Ihr Ansprechpartner rund um die Verwaltung Ihres Studierendenstatus. 
			Sie k&ouml;nnen sich an uns wenden, wenn Sie sich bewerben, einen Fachwechsel oder eine Adress&auml;nderung vornehmen wollen.</h4><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="vertical-tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Frau Birgit G&ouml;ssel</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Dr. Christiane Potzner</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Rabia Hosseini </a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h3><b>Frau Birgit G&ouml;ssel</b></h3><br>
                        <p><b>&Ouml;ffnungszeiten:</b> Mo. Di. Do. 8:30-12:30 Uhr / Mi. 8-12:30 Uhr / Fr. 8:15-11:45 Uhr</p>
						<p><b>Telefon:</b> +49 561 804 6416</p>
						<p><b>Fax:</b> +49 561 804 6436</p>
						<p><b>E-Mail:</b> <a href="mailto:b.goessel@uni-kassel.de">b.goessel@uni-kassel.de</a></p>
						<p><b>Raum:</b> 2303/2306</p>
						<p><b>Ort:</b> Fachbereich Mathematik und Naturwissenschaften<br>
									Institut f&uuml;r Mathematik<br>
									Wilhelmsh&ouml;her Allee 71 - 73<br>
									34119 Kassel </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h3><b> Christiane Potzner</b></h3><br>
                        <p><b>&Ouml;ffnungszeiten:</b> Mo.-Mi.  08:30-16:00 Uhr / Do.-Fr.  08:30-12:30 Uhr</p>
						<p><b>Telefon:</b> +49 561 804-4308</p>
						<p><b>Fax:</b> +49 561 804-4445</p>
						<p><b>E-Mail:</b> <a href="mailto:info-fb10@mathematik.uni-kassel.de">info-fb10@mathematik.uni-kassel.de</a></p>
						<p><b>Raum:</b> 2442</p>
						<p><b>Ort:</b> Heinrich-Plett-Straße 40<br>34132 Kassel<br>Geb&auml;ude: AVZ III</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h3><b>Rabia Hosseini</b></h3><br>
                        <p><b>&Ouml;ffnungszeiten:</b> Mo.-Mi.  08:30-16:00 Uhr / Do.-Fr.  08:30-12:30 Uhr</p>
						<p><b>Telefon:</b> +49 561 804-4619</p>
						<p><b>Fax:</b> +49 561 804-4445</p>
						<p><b>E-Mail:</b> <a href="mailto:info-fb10@mathematik.uni-kassel.de">info-fb10@mathematik.uni-kassel.de</a></p>
						<p><b>Raum:</b>  2438</p>
						<p><b>Ort:</b> Heinrich-Plett-Str. 40<br>
								34132 Kassel<br>
								Geb&auml;ude: AVZ III</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>			
	
		
        <hr>
</div></div>
        <!-- Footer -->
        <?php
		foot();
		?>