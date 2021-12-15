<?php
session_start();
require_once '../includes/template.inc.php';
$angebot = filter_input(INPUT_GET, 'angebot',FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);

head('Stellenangebote');
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
									sommere($ind, $inde, $nom, $name); ?>
						<li>
                            <a href="#"><b>Vergangene Semester</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
									<?php 
									$ind = 0; 
									$inde=0;
									$nom = 'WS20_21';
									$name= 'WS 2020/2021';
									wintere($ind, $inde, $nom, $name); ?>
                                
									<?php 
									$ind = 0; 
									$inde=0;
									$nom = 'SS_20';
									$name= 'SS 2020';
									sommere($ind, $inde, $nom, $name); ?>
                              
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS19_18';
									$name= 'WS 2019/2020';
									wintere($ind, $inde, $nom, $name); ?>
                                
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_19';
									$name= 'SS 2019';
									sommere($ind, $inde, $nom, $name); ?>
                              
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS18_19';
									$name= 'WS 2018/2019';
									wintere($ind, $inde, $nom, $name); ?>
                               
									<?php
									$ind = 0;	
									$inde=0;									
									$nom = 'SS_18';
									$name= 'SS 2018';
									sommere($ind, $inde, $nom, $name); ?>
                                
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS17_18';
									$name= 'WS 2017/2018';
									wintere($ind, $inde, $nom, $name); ?>
                               
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_17';
									$name= 'SS 2017';
									sommere($ind, $inde, $nom, $name); ?>
                               
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS16_17';
									$name= 'WS 2016/2017';
									wintere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_16';
									$name= 'SS 2016';
									sommere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS15_16';
									$name= 'WS 2015//2016';
									wintere($ind, $inde, $nom, $name);?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_15'; 
									$name= 'SS 2015';
									sommere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS14_15';
									$name= 'WS 2014/2015';
									wintere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_14'; 
									$name= 'SS 2014';
									sommere($ind, $inde, $nom, $name); ?>
                               
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS13_14';
									$name= 'WS 2013/2014';
									wintere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_13'; 
									$name= 'SS 2013';
									sommere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS12_13';
									$name= 'WS 2012/2013';
									wintere($ind, $inde, $nom, $name); ?>

									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_12'; 
									$name= 'SS 2012';
									sommere($ind, $inde, $nom, $name); ?>
									
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'WS11_12';
									$name= 'WS 2011/2012';
									wintere($ind, $inde, $nom, $name); ?>
                                
									<?php 
									$ind = 0;
									$inde=0;
									$nom = 'SS_11'; 
									$name= 'SS 2011';
									sommere($ind, $inde, $nom, $name); ?>
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
						$inde=1;
						stellenangebote($inde); 
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
		  
			<?php 
				if ($angebot !=''){
					if ($angebot ==1){
			?> 
				<!-- Stellenangebote: Professuren -->
				<div class="col-lg-12">
					<span class="texten-effect">Stellenangebote: <br>Professorinnen und Professoren</span>
				</div> 
				<h4><p>Herzlich willkommen im Stellenausschreibungsportal der Universit&auml;t Kassel!</p></h4>
				<h4><p>Als attraktive Lehr- und Forschungsst&auml;tte sind wir bestrebt, die besten Wissenschaftlerinnen und Wissenschaftler an die Universit&auml;t Kassel zu holen. <br>
		Hier finden Sie alle vakanten Stellen f&uuml;r Hochschullehrende und leitende Angestellte:</p></h4><br><br>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel-group" id="corde" role="tablist" aria-multiselectable="true">
						
						<?php 
						$i = 1;
                           $nom= 'Lehrbeauftragte (m/w/d)';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
						$i = 2;
                           $nom= 'W 2  Professur &quot; Bildende Kunst f&uuml;r Performance, Installation, Medien &quot; (m/w/d) - an der Kunst­hochschule Kassel ';
						   $texte= '
						   <p><b>Gesucht wird ein/e K&uuml;nstler/in, der/die eine international erfolgreiche, zeitgem&auml;&szlig;e Praxis innerhalb des Themenbereichs „Performance, Installation, Medien“ im Spannungsfeld aktueller gesellschaftlicher Entwicklungen nachweisen kann.</b> </p>
						   <p> <ul>
									<li><b> Bewerbungsfrist:</b> 16.05.2019</li>
									<li><b>Einstellungsbeginn:</b> baldm&ouml;glichst</li>
									<li><b>Kennziffer:</b> 32213</li>
									<li><b>Bewerbungen an: </b>bewerbungen@uni-kassel.de</li>
						   </ul>
						   Die Vielf&auml;ltigkeit der gegenw&auml;rtigen k&uuml;nstlerischen Positionen sowie die eigenen Interessenschwerpunkte
						   dienen als Ausgangspunkt einer k&uuml;nstlerischen medien&uuml;bergreifenden Lehre. Bewerberinnen und Bewerber m&uuml;ssen Lehrerfahrung nachweisen..
						   </p>
						   <p>
						  Die Stelleninhaberin/der Stelleninhaber muss folgende Voraussetzungen erf&uuml;llen:
                            <ul>
								<li>herausragendes und eigenst&auml;ndiges k&uuml;nstlerisches Werk,</li>
								<li>mehrj&auml;hrige internationale Ausstellungserfahrung,</li>
								<li>Bereitschaft zur sowohl klassen- als auch f&auml;cher&uuml;bergreifenden Lehre,</li>
								<li>Bereitschaft zur Mitarbeit an der weiteren Entwicklung der Kunsthochschule,</li>
								<li>sinnvolle Erg&auml;nzung der Lehrpositionen der Kunsthochschule,</li>
								<li>St&auml;rkung des &uuml;berregionalen und internationalen Renommees der Kunsthochschule.</li>
                            </ul>
							Transkulturelle Praxis ist erw&uuml;nscht.
						   </p>
						   <p>Zu dem Profil der Kunsthochschule geh&ouml;ren die direkte Nachbarschaft der Studieng&auml;nge Kunst, Kunstp&auml;dagogik, Kunstwissenschaft, Visuelle Kommunikation und Produkt Design und der unmittelbare
						   Austausch sowie die gute Zusammenarbeit mit den Werkst&auml;tten. Die Mitwirkung an der akademischen Selbstverwaltung 
						   geh&ouml;rt zu den Dienstaufgaben.</p>
						   <p> 
                           Es gelten die Einstellungsvoraussetzungen und die Leistungsanforderungen gem&auml;&szlig; §§ 61, 62 des Hessischen Hochschulgesetzes. Die Stelle ist ggf. teilbar.
						   </p>
						   <p>
						   Bitte reichen Sie f&uuml;r Ihre Bewerbung folgende Unterlagen ein: ein Anschreiben, einen Lebenslauf, ein Portfolio sowie ein Lehrkonzept.
						   </p>
						   <p>
						   Zur inhaltlichen Ausrichtung der Professur steht Ihnen Herr Prof. Jens Brand (brand@kunsthochschulekassel.de)
						   und zu verfahrenstechnischen Fragen Herr Thomas Fr&ouml;hlich (Tel. 0561/804-5386, E-Mail: thomas.froehlich@uni-kassel.de) zur Verf&uuml;gung.
						   </p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
						   
						   $i = 3;
                           $nom= 'W 2 Professorship for High Voltage Engineering - in the Faculty of Electrical Engineering and Computer Science';
						   $texte= '
						   <p>The professorship focuses on systems engineering and high-voltage engineering 
						   for electrical energy supply systems as well as the teaching of electro-technical fundamentals. </p>
						   <p> <ul>
									<li><b> deadline for submission:</b> 16.05.2019</li>
									<li><b>start of recruitment:</b> baldm&ouml;glichst</li>
									<li><b>reference number:</b> 32196</li>
									<li><b>applications to: </b>bewerbungen@uni-kassel.de</li>
						   </ul>
						   For research and integration into the research profile of the department, an orientation towards the effect of high field strengths in materials and structures is wanted.
						   Experience and future activities in applied research and development in some of the following areas will be expected:.
						   </p>
						   <p>
                            <ul>
								<li>Forming in insulating and functional systems and using smart materials in special functions (mechanical and electronic switches or nanotechnology)</li>
								<li>Aging and failure mechanisms of novel materials and composite systems</li>
								<li>Monitoring and diagnosis of components and systems in HV installations</li>
								<li>Methods of empirically supported analytic-physical modeling, experimental characterization and parameterization</li>
								<li>Lifetime models of components and systems, eg. for example, with the aim of asset management</li>
                            </ul>
						   </p>
						   <p>The position explicitly offers the option of working closely with the Fraunhofer Institute for Energy Economics and Energy Systems Technology (Fh IEE). 
						   There is also the possibility of a cooperation with the Institute of Nanostructure Technology and Analytics (INA). 
						   The cooperation with the Kompetenzzentrum f&uuml;r Dezentrale Elektrische Energieversorgungstechnik (KDEE) is welcomed. 
						   The planned interdisciplinary orientation of the professorship, combined with the corresponding personnel, 
						   equipment and financial equipment, requires a leader who will meet the requirements of teaching, research and science management./p>
						   <p>Outstanding scientific achievements are expected in the above –mentioned fields, which are proven by a habilitation or habilitation-equivalent achievements as well as by relevant, peer-reviewed publications.
						   The publications should prove the ability for interdisciplinary cooperation.</p>
						   <p>
						   Experience in the acquisition of third-party funding, e.g. from the DFG, the EU and Federal Ministries, as well as pedagogical aptitude and commitment in teaching are expected.
						   </p>
						   <p>
                            The department is aiming to increase the proportion of female professors and therefore urges female researchers to apply.
						   </p>
						   <p>
						   The advertised position is subjects to the requirements set out in paragraphs §§ 61, 62 of the Higher Education Act of Hessen (Hessisches Hochschulgesetz).
						   </p>
						   <p>
						   For further information, please contact Prof. Dr.-Ing Peter Zacharias (peter.zacharias@uni-kassel.de, Tel.: 0561/804-6344).
						   </p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
						   $i = 4;
                           $nom= 'Dozenten (m/w/d) f&uuml;r den Fachbereich &quot; International Management &quot; als nebenberufliche T&auml;tigkeit';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   $i = 5;
                           $nom= 'W 3  Professur &quot; Didaktik der Biologie &quot; (m/w/d) - im Fachbereich Mathematik und Naturwissenschaften (m/w/d)';
						   $texte= '
						   <p><b>Gesucht wird eine wissenschaftlich hervorragend ausgewiesene Pers&ouml;nlichkeit, die die Didaktik der Biologie in Forschung und Leh-re vertritt. Der Forschungsschwerpunkt soll der empirischen Bil-dungs- und Unterrichtsforschung in der Biologiedidaktik zugeord-net sein.
						   W&uuml;nschenswert ist eine verantwortliche Mitarbeit im Pro-jekt PRONET2 der Universit&auml;t Kassel im Rahmen der Qualit&auml;tsoffen-sive Lehrebildung.</b></p>
						   <p> <ul>
									<li><b> Bewerbungsfrist:</b> 09.05.2019</li>
									<li><b>Einstellungsbeginn:</b> 01.01.2020</li>
									<li><b>Kennziffer:</b> 32191</li>
									<li><b>Bewerbungen an: </b>bewerbungen@uni-kassel.de</li>
						   </p>
						   <p>
						  In der Lehre ist die Fachdidaktik Biologie in den Lehramtsstudieng&auml;ngen f&uuml;r Gymnasien, f&uuml;r Haupt- und Realschulen sowie im Sachunterricht 
						  f&uuml;r Grundschulen zu vertreten. W&uuml;nschenswert sind Lehrerfahrungen im Kontext von Bildung f&uuml;r nachhaltige Entwicklung, 
						  Erfahrungen mit biologiedidaktischen Lehr-Lern-Laboren sowie die Bereitschaft, 
						  bestehende Angebote der Biologiedidaktik an der Universit&auml;t Kassel fortzuf&uuml;hren und weiterzuentwickeln. 
						  Die Bereitschaft zur Mitwirkung im Zentrum f&uuml;r Lehrerbildung (ZLB) und im Zentrum f&uuml;r empirische Lehr-/Lernforschung (ZELL) wird ebenso erwartet 
						  wie die erfolgreiche Einwerbung und Durchf&uuml;hrung von Drittmittelprojekten sowie Erfahrungen in den Bereichen Projektleitung und Personalf&uuml;hrung.
						   </p>
						   <p>F&uuml;r diese Professur geh&ouml;rt die Beteiligung an der akademischen Selbstverwaltung der Universit&auml;t zu den Dienstaufgaben.</p>
						   <p>Es gelten die Einstellungsvoraussetzungen und die Leistungsanforderungen gem&auml;&szlig; §§ 61, 62 des Hessischen Hochschulgesetzes.</p>
						   <p> Einstellungsvoraussetzungen sind neben der Promotion in der Biologiedidaktik oder im Fach Biologie eine einschl&auml;gige Habilitation bzw. habilitations&auml;quivalente Leistungen sowie Lehrerfahrung im Bereich der Biologiedidaktik.
						   Gem&auml;&szlig; § 62 des Hessischen Hochschulgesetzes sind schulpraktische Erfahrungen nachzuweisen. </p>
						   <p>F&uuml;r weitere Ausk&uuml;nfte steht Ihnen die Vorsitzende der Berufungskommission, Frau Prof. Dr. Rita Wodzinski (wodzinski@uni-kassel.de, Tel.: 0561/804-4531) zur Verf&uuml;gung.</p>
						   ';
                           angebot($i, $nom, $texte);
						?>
						
					</div>
				</div>
			</div>

			
			
			
			<!-- Stellenangebote: Studentische oder nichtwissenschaftliche Hilfskraft -->
			
	<?php }else if ($angebot==2){ ?>
	
		<div class="col-lg-12">
			<span class="texten-effect">Stellenangebote: <br>T&auml;tigkeit im nicht wissenschaftlichen Bereich</span>  
		</div> 

			<h4><p>Um den laufenden Lehr- und Forschungsbetrieb sicherzustellen, ben&ouml;tigt unsere Universit&auml;t nicht nur wissenschaftliches Personal.<br>
			Aktuell haben wir Stellen in vielen verschiedenen Bereichen zu besetzen:</p></h4>
			
		<h4><p><b>Z&ouml;gern Sie nicht mit einer Bewerbung!</b></p></h4><br><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group" id="corde" role="tablist" aria-multiselectable="true">
					<?php 
						$i = 1;
                           $nom= 'Besch&auml;ftigten/r im Verwaltungsdienst (m/w/d) EG 6 TV-H - im Arbeitsbereich technisches und infrastrukturelles Geb&auml;udemanagement (m/w/d)';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						    
						$i = 2;
                           $nom= 'Besch&auml;ftigte/r im Verwaltungsdienst (m/w/d) (EG 6 TV-H) - im Dekanat';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						$i = 3;
                           $nom= 'G&auml;rtner/-in (m/w/d), EG 7 TV-H - im Fachgebiet Landschaftsbau, -management und Vegetationsentwicklung';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
 
						$i = 4;
                           $nom= 'Projektmitarbeiter/-in (m/w/d), EG 13 TV-H - im Fachbereich Bau- und Umweltingenieurwesen';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   $i = 5;
                           $nom= 'Energieeffizienzmanagement/Umsetzung Intracting (m/w/d), bis EG 11 TV-H - in der Abteilung Bau, Technik, Liegenschaften';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   $i = 6;
                           $nom= 'Projektmitarbeiter/in in der Graduiertenakademie (m/w/d), EG 13 TV-H';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   ?>
						   
				   
				   
				</div>
			</div>
		</div>

		
		
		
		
	
	
<!-- Stellenangebote: T&auml;tigkeit im Wissenschaftlichen Bereich -->
<?php
	}else if ($angebot==3){?>
	
            <div class="col-lg-12">
				<span class="texten-effect">Stellenangebote: <br>T&auml;tigkeit im Wissenschaftlichen Bereich</span>  
			</div> 
		
		<h4><p>Als innovative Wissenschafts- und Bildungseinrichtung sucht die Universit&auml;t Kassel – von der 
		Auszubildenden bis zur Professorin – Mitarbeiterinnen und Mitarbeiter mit fachlicher und pers&ouml;nlicher Kompetenz, 
		die konstruktiv und engagiert an der Weiterentwicklung der Hochschule mitwirken m&ouml;chten.</p><h4>
		<h4><p>Im wissenschaftlichen Bereich erwartet Sie ein interessantes und abwechslungsreiches Aufgabenspektrum.<br>
		Folgende Stellen sind derzeit zu besetzen:</p></h4><br><br>
		
			
		  <div class="row">
				<div class="col-lg-12">
					<div class="panel-group" id="corde" role="tablist" aria-multiselectable="true">
						<?php
						$i = 1;
                           $nom= 'Wiss. Mitarbeiter/-in (m/w/d), EG 13 TV-H - im Fachgebiet Wasserbau und Wasserwirtschaft ';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
						   $i = 2;
                           $nom= 'Wiss. Mitarbeiter/-in (m/w/d), EG 13 TV-H - im Center for Environmental Systems Research (CESR)';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
						   $i = 3;
                           $nom= 'Wiss. Mitarbeiter/-in (m/w/d), EG 13 TV-H - im Fachgebiet Computational Mathematics';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> 
								<ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
								</ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im K&ouml;lner Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   $i = 4;
                           $nom= '1,5 Wiss. Mitarbeiter/-in (m/w/d) EG 13 TV-H - im Fachgebiet Verkehrsplanung und Verkehrssysteme';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&Uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li> spannende Aufgaben</li>
								<li>ein tolles/sympathisches Team</li>
								<li>ein hoher Home-Officeanteil</li>
								<li> flexible Arbeitszeiten</li>
								<li> umfassende Entfaltungsm&ouml;glichkeiten</li>
                            </ul>
						   </p>
						   <p>Wir lieben das, was wir tun - und wenn Sie Interesse haben, Teil unseres Team zu werden, so freuen 
						   wir uns auf Ihre aussagekr&auml;ftige Bewerbung.</p>
						   <p>
						  <b> Kenntnisse in:</b>
                            <ul>
								<li>PHP/HTML/CSS/JS/Twig/Bootstrap</li>
								<li>Mysql und MongoDB</li>
								<li> MVC-Architekturen</li>
								<li> Anwendung von Design Patterns</li>
								<li>  jQuery/React/Redux</li>
                            </ul>
						   </p>
						   ';
                           angebot($i, $nom, $texte);
						?>
					   
					   
					</div>
				</div>
			</div>

			
			
			<!-- Stellenangebote: Studentische oder wissenschaftliche Hilfskraft -->
<?php
		
	}else if ($angebot==4){?>    
	
            <div class="col-lg-12">
				<span class="texten-effect">Stellenangebote: <br>Studentische oder wissenschaftliche Hilfskraft</span> 
			</div> 
			<h4><p>Bewerberinnen und Bewerber erwarten attraktive studentische oder wissenschaftliche Hilfskraft mit Entwicklungsm&ouml;glichkeiten, 
		flankiert durch eine familienfreundliche Infrastruktur, in einem weltoffenen, von Internationalisierung und Vielf&auml;ltigkeit gepr&auml;gten Umfeld.</p><h4><br><br>

			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group" id="corde" role="tablist" aria-multiselectable="true">
				<?php 
					$i = 1;
                           $nom= 'Absolventenjobs';
						   $texte= '
						   <p>Sie werden Teil eines verteilten, kleinen, eingespielten und leistungsf&auml;higen Teams von erfahrenen Software-Entwicklern.</p>
						   <p>Durch die gezielte Anwendung von agilen Projektmanagementmethoden stellen wir sicher, dass die Anforderungen immer gem&auml;&szlig; den aktuellen Priorit&auml;ten unserer Kunden umgesetzt werden.
							Tourbook ist ein Enterprise-System, daher z&auml;hlen eine nachhaltige Software-Architektur und hohe Wartbarkeit zu den Prim&auml;ranforderungen. 
							Die Umsetzung der Anforderung erfolgt durch testgetriebene Softwareentwicklung. 
							Automatisierte Tools unterst&uuml;tzen dabei, eine hohe Softwarequalit&auml;t zu gew&auml;hrleisten.
						   </p>
						   <p>
						   Zu den Aufgabenbereichen im Frontend geh&ouml;rt neben der Umsetzung der Masken die Erarbeitung von Mock-Ups und UX-Optimierung der umzusetzenden Anforderungen.
						   <p>
						   <p>
						  Die Vorz&uuml;ge der Arbeit bei Tourbook sind::
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im K&ouml;lner Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
						   
						   
						   
						   $i = 2;
                           $nom= '1,5 Wiss. Mitarbeiter/-in (m/w/d) EG 13 TV-H - im Fachgebiet Verkehrsplanung und Verkehrssysteme';
						   $texte= '
						   <p>Im Zuge der Weiterentwicklung unserer Studienprogramme suchen wir f&uuml;r unseren Standort in Kassel f&uuml;r die folgenden Fachgebiete:</p>
						   <b style= "text-align:center;" >Lehrbeauftragte (m/w/d)</b>
						   <p> <ul>
									<li> Search Engine Marketing & Targeting</li>
									<li>E-Mail Marketing & Online Advertising</li>
									<li>Social Media Marketing</li>
									<li>Consulting (Projects/Marketing)</li>
						   </ul>
						   auf Honorarbasis.
						   </p>
						   <p>
						  <b> Ihr Profil:</b>
                            <ul>
								<li>Hochschulabschluss (zwingend erforderlich)</li>
								<li>Berufs- und Managementerfahrung, in dem oben aufgef&uuml;hrten Bereich</li>
								<li>Unterrichts-/Trainererfahrung sowie p&auml;dagogisches Geschick im Umgang mit jungen Erwachsenen</li>
								<li>F&auml;higkeit zur Durchf&uuml;hrung von Lehrveranstaltungen in englischer Sprache</li>
								<li>Wohnhaft in Kassel oder im Kasseler Umland</li>
                            </ul>
						   </p>
						   <p>Neben Ihren fundierten fachlichen Qualifikationen sollten Sie Freude daran haben, jungen Menschen fachrelevante Zusammenh&auml;nge durch zeitgem&auml;&szlig;e Unterrichtsmethoden verst&auml;ndlich zu vermitteln. 
						   Au&szlig;erdem sollten Sie ein hohes Ma&szlig; an Selbstst&auml;ndigkeit, Eigeninitiative sowie Kommunikations- und Kooperationsf&auml;higkeit besitzen.</p>
						   <p>Wenn Ihr Pers&ouml;nlichkeitsprofil unseren Anforderungen entspricht, senden Sie bitte Ihre Bewerbungsunterlagen gerne auch per E-Mail 
						   an laura.steinbach@ism.de, z.Hd. Laura Steinbach, Studienorganisation Campus Kassel.</p>
						   ';
                           angebot($i, $nom, $texte);
				   ?>
				   
				</div>
			</div>
		</div>

	
       
	<?php }else if ($angebot ==5){
			?> 
	
            <div class="col-lg-12">
				<span class="texten-effect">Stellenangebote: <br>Ausbildungsstellen</span> <br><br><br> 
			</div> <br><br><br>
			<h4><p>An unserer Universit&auml;t k&ouml;nnen nicht nur akademische Abschl&uuml;sse erworben werden, sondern wir bilden auch selbst aus.<br>
			Interessierte haben die Wahl zwischen ein paar Berufen in verschiedenen spannenden Bereichen.</p></h4><br><br>
			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group" id="corde" role="tablist" aria-multiselectable="true">
					<?php
					$i = 1;
                           $nom= 'Berufsausbildung an der Universit&auml;t Kassel';
						   $texte= '
						   <p>Die Universit&auml;t Kassel bildet in den Bereichen Chemie, Elektronik, Feinmechanik, Zierpflanzen oder Staudeng&auml;rtnerei sowie im Kaufm&auml;nnischen Bereich aus. 
						   F&uuml;r den Ausbildungsbeginn 01.08.2019 ist der Bewerbungsschluss abgelaufen und die Auswahlverfahren haben begonnen.</p>

						   <p> Ausbildungspl&auml;tze, die nicht besetzt werden k&ouml;nnen erscheinen ggfs. zu einem sp&auml;teren Zeitpunkt erneut auf der Homepage der Universit&auml;t Kassel.
						   </p>
						   <p>
						  Die Ausbildungspl&auml;tze f&uuml;r das Jahr 2020 werden voraussichtlich ab Juli 2019 auf der Homepage der Universit&auml;t Kassel ausgeschrieben.
						   
						   ';
                           angebot($i, $nom, $texte);
					?>
				</div>
			</div>
		</div>

	<?php
	
	}} ?>
</div>

        <!-- Footer -->
        <?php
		
		foot();
		?>