<?php
session_start();
require_once '../includes/template.inc.php';

head('Termine');
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
								$inde = 0;
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
						$inde=1;
						stellenangebot($inde);
						?>
						<li>
                            <a href="../andere/klausur.php"><b>Klausuren</b></a>
                        </li>
                        <li>
                            <a href="#"><b>Moodle</b></a>
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
			<span class="texten-effect">Termine rund um das Studium </span>           
		</div> 
		<h3> Hier finden Sie alle <b>Fristen & Termine an der Universit&auml;t Kassel</b>, 
		u.z. vom aktuellen Semester an in die Zukunft. Dazu z&auml;hlen</h3><br><br><br>
	<div class="col-md-12">
            <div class="main-timeline">
                <?php
				$nom= 'Einige Daten';
				$text= '
				<ul>
					<li>m&uuml;ndliche Pr&uuml;fungen: <b>01.07. – 03.07</b></li>
					<li>Zeugnisausgabe und Grillfest: <b>04.07</b></li>
					<li>Ende der Kurse / Datum des Zeugnisses: <b>05.07</b></li>
					<li>abschließende Sitzung des Pr&uuml;fungsausschusses: <b>10.07</b></li>
			   </ul>
				';
                $uhr='07. 2019';

				termin($nom, $text, $uhr); 
				
				
                $nom= 'Terminplan: Juni- Monat';
				$text= '
				<ul>
					<li>Disposition der m&uuml;ndlichen Pr&uuml;fungen mit den Studierenden: <b>25.06</b></li>
					<li>1. Sitzung des Pr&uuml;fungsausschusses: <b>24.06</b></li>
					<li>Fronleichnam: <b>20.06 </b></li>
					<li>schriftliche Pr&uuml;fung PHYSIK/CHEMIE, VWL: <b>19.06</b></li>
					<li>schriftliche Pr&uuml;fung MATHEMATIK: <b>17.06</b></li>
					<li>schriftliche Pr&uuml;fung DEUTSCH: <b>14.06</b></li>
					<li>Bekanntgabe der Vornoten durch die Leiterin des SK/ Erkl&auml;rung der
                 Studierenden zur Wahl der schriftlichen Pr&uuml;fungsf&auml;cher: <b>12.06</b></li>
				    <li>Vornotenkonferenz: <b>11.06</b></li>
					<li>Pfingstmontag (Feiertag): <b>10.06</b></li>
			   </ul>
				';
                $uhr='06. 2019';

				termin($nom, $text, $uhr);
				
				$nom= 'Terminplan: Mai-Monat';
				$text= '
				<ul>
					<li>Meldung der Studierenden zur Pr&uuml;fung / Klausurstopp
                 interne Vorlage der Pr&uuml;fungsaufgaben: <b>31.05</b></li>
					<li>Himmelfahrt (Feiertag): <b>30.05</b></li>
					<li>Maifeiertag: <b>01.05</b></li>
			   </ul>
				';
                $uhr='05. 2019';

				termin($nom, $text, $uhr);
				
				$nom= 'Beginn - Studienjahr';
				$text= '
				<ul>
				    <li>Bewerbungsschluss f&uuml;r das Studienjahr 2019/20: <b>30.04.2019</b></li>
					<li>erster Tag der Lehrveranstaltungen nach Ostern
Fr&uuml;hlingsfest: Termin wird auf der Webseite unter "Aktuelles" bekanntgegeben!: <b>29.04.19</b></li>
					<li>letzter Tag der Lehrveranstaltungen vor Ostern (4 U-Tage Ferien): <b>18.04.19</b></li>
			   </ul>
				';
                $uhr='04.2019';

				termin($nom, $text, $uhr);
				
				$nom= 'Terminplan: Wintersemester 2018/19';
				$text= '
				<ul>
					<li>Beginn der Lehrveranstaltungen im Sommersemester 2019: <b>25.02.19</b></li>
					<li>Bewerbungsschluss f&uuml;r die Externenpr&uuml;fung 2019: <b> 31.01.2019 </b></li>
					<li>Aufnahmetest (Deutsch und Mathematik): <b>29. Juni 2019</b></li>
			   </ul>
				';
                $uhr='WS18_19';

				termin($nom, $text, $uhr);
				?>
                
            </div>
       
		</div>		
		
	</div>
        <!-- Footer -->
        <?php
		foot();
		?>