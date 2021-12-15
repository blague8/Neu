<?php
session_start();
require_once '../includes/template.inc.php';
 $name = filter_input(INPUT_GET, 'name',FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);
head('Person');
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
									$nam = '';
									sommere($ind, $inde, $nom, $nam); 
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
								$inde=1;
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
       
    
        <br><br><br>
		
<div class="col-lg-12">

	<span class="texten-effect">Fachbereich Mathematik und Naturwissenschaften <br>Institut für Mathematik </span>  
              
</div> 

	
<?php 
	
if ($name !=''){
	if ($name == 1){
		
		$titel1= 'Informationen';
		$titel2='Personen';
		$titel3='Alle - Mathematik Team';
	titeln($titel1, $titel2, $titel3);
?>
    <div class="row">
		<h3 style="text-align:center;"><b> Liebe Studierende,</b><br>
			auf dieser Seite stellen wir Ihnen das Mathematik-Team
			des Standorts Wilhelmshöher Allee der Universität Kassel vor. 
		</h3>
	</div><br><br>
		<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-header1">
					<?php 
							// Prof bley //
							$nomu = 'Prof. Dr. Andreas Bley';
							$bild = 'paul';
							$var1= 'Vorlesung: Diskrete Strukturen I';
							$var2 ='Federf&uuml;hrung';
							$tel = '+ 49 561 804 6229';
							$fax ='+ 49 561 804 6436';
							$zeit ='Mi 10:00-10:45 Uhr <br>Raum 2304 A';
							  
							 profil($nomu, $bild, $var1, $var2, $tel, $fax, $zeit); 
							 
							 
						   // Frau Goessel //
							$nom = 'Frau Birgit G&ouml;ssel';
							$bild = 'paul';
							$var1= 'Sekretariat';
							$var2 ='';
							$tel = '+ 49 561 804 6416';
							$fax ='+ 49 561 804 6436';
							$zeit ='Mo.: ,  Di.:  und  Do.: 08:30-12:30 Uhr<br>
											Mi. 8:00-12:30 Uhr<br>
											Fr. 08:15 - 11:45 Uhr<br>Raum 2304 / 2306';
							  
							 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
						
							
							// Prof Rueck //
							$nom = 'Prof. Hans-Georg R&uuml;ck';
							$bild = 'paul';
							$var1= 'Vorlesung: Analysis';
							$var2 ='Web Developer';
							$tel = '+ 49 561 804 6229';
							$fax ='+ 49 561 804 6436';
							$zeit ='Mi.10:00-10:45 Uhr';
							  
							 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
							 
							
							// Prof Petersen //
							$nom = 'PD. Dr. habil Petersen';
							$bild = 'paul';
							$var1= 'Kryptographie, H&ouml;rsaalanleitung';
							$var2 ='&Uuml;bung: Analysis';
							$tel = '+ 49 561 804 4420';
							$fax ='+ 49 561 804 4646';
							$zeit ='';
							  
							 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
						 ?>
						</div>
					</div>
				</div>
						<!-- row -->
				<div class="row">
			   <div class="col-lg-12">
					<div class="page-header1">
			   <?php 
			   
					// Prof Mueller //
						$nom = 'Dr. Detlef M&uuml;ller';
						$bild = 'paul';
						$var1= 'Mathematik-Vorkurs';
						$var2 ='';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
						 
					
					// Dr Lakhal //
						$nom = 'Dr. Anen Lakhal';
						$bild = 'paul';
						$var1= 'Hörsaalübungen';
						$var2 ='Übung: Analysis';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 
						// Dr Fanghaenel //
						$nom = 'Dr. Diana Fangh&auml;nel';
						$bild = 'paul';
						$var1 = 'Mathematischer Br&uuml;ckenkurs';
						$var2 ='';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						
						// Dr Janssen //
						$nom = 'Dr. D&ouml;rthe Janssen';
						$bild = 'paul';
						$var1= 'Mathematischer Br&uuml;ckenkurs';
						$var2 ='&Uuml;bung: Analysis';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						
			   ?>
					</div>
			   </div>
			</div>
			<!-- row -->
			<!-- row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header1">
			   
				 <?php 
				 
					   // Dr Mouafo //
						$nom = 'Dr. Merlin Mouafo';
						$bild = 'paul';
						$var1= '&Uuml;bung: Analysis';
						$var2 ='';
						$tel = '+ 49 561 804 4678';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						// M.Sc Luo //
						$nom = 'M.Sc. Yongming Luo';
						$bild = 'pao';
						$var1 = '&Uuml;bung: Analysis';
						$var2 ='';
						$tel = '+ 49 561 804    --- ---';
						$fax ='+ 49 561 804 4443';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 
						// Herr Gusen //
						$nom = 'Herr Marvin Gusen';
						$bild = 'pao';
						$var1 = 'Mathematik-Vorkurs';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 
						// Dipl.-Math. Schmidtpott //
						$nom = 'Dipl.-Math. Schmidtpott';
						$bild = 'pao';
						$var1= '&Uuml;bung: Analysis';
						$var2 ='';
						$tel = '+ 49 561 804 4697';
						$fax ='+ 49 561  804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
				 ?>
				 </div>
			  </div>
			</div>
			<!-- row -->
			<!-- row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header1">
					<?php
						
						// Frau Johannes Breidenbach //
						$nom= 'Johannes Breidenbach';
						$bild= 'pao';
						$var1= 'Lernzentrum';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='Di.16:00-18:00 Uhr <br> Raum 1332';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit);
						
						
						// Herr Raphael Mbewou //
						$nom= 'Herr Raphael Mbewou';
						$bild= 'pao';
						$var1= 'Lernzentrum';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='Fr. 14:00-16:00 Uhr<br> Raum -1607';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit);
						 
						 
						// Frau Johannes Breidenbach //
						$nom= 'Herr Hamza Ouerrachi';
						$bild= 'pao';
						$var1= 'Lernzentrum';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='Mo.16:00-18:00Uhr<br>Mi.: 16:00-18:00 Uhr<br> Raum -1605';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit);
						 
					?>
					</div>
			  </div>
			</div>
			</div>
			<!-- row -->
	<?php } else if ($name ==2){
		
		
		$titel1= 'Informationen';
		$titel2='Personen';
		$titel3='Professuren und Doktorat';
	titeln($titel1, $titel2, $titel3);
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header1">
				<?php 
						// Prof bley //
						$nom= 'Prof. Dr. Andreas Bley';
						$bild = 'paul';
						$var1= 'Vorlesung: Diskrete Strukturen I';
						$var2 ='Federf&uuml;hrung';
						$tel = '+ 49 561 804 6229';
						$fax ='+ 49 561 804 6436';
						$zeit ='Mi 10:00-10:45 Uhr <br>Raum 2304 A';
						  
						 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
						 
						 
					   // Prof Rueck //
						$nom = 'Prof. Hans-Georg R&uuml;ck';
						$bild = 'paul';
						$var1= 'Vorlesung: Analysis';
						$var2 ='Web Developer';
						$tel = '+ 49 561 804 6229';
						$fax ='+ 49 561 804 6436';
						$zeit ='Mi.10:00-10:45 Uhr';
						  
						 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
					
						
						// Prof Petersen //
						$nom = 'PD. Dr. habil Petersen';
						$bild = 'paul';
						$var1= 'Kryptographie, H&ouml;rsaalanleitung';
						$var2 ='&Uuml;bung: Analysis';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
						 
						// Dr Mueller //
						$nom = 'Dr. Detlef M&uuml;ller';
						$bild = 'paul';
						$var1= 'Mathematik-Vorkurs';
						$var2 ='';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2,$tel, $fax, $zeit); 
						 
						 ?>
						</div>
					</div>
				</div>
						<!-- row -->
				<div class="row">
			   <div class="col-lg-12">
					<div class="page-header1">
			   <?php 
						 
					
						// Dr Lakhal //
						$nom = 'Dr. Anen Lakhal';
						$bild = 'paul';
						$var1= 'Hörsaalübungen';
						$var2 ='Übung: Analysis';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 
						// Dr Fanghaenel //
						$nom = 'Dr. Diana Fangh&auml;nel';
						$bild = 'paul';
						$var1 = 'Mathematischer Br&uuml;ckenkurs';
						$var2 ='';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						
						// Dr Janssen //
						$nom = 'Dr. D&ouml;rthe Janssen';
						$bild = 'paul';
						$var1= 'Mathematischer Br&uuml;ckenkurs';
						$var2 ='&Uuml;bung: Analysis';
						$tel = '+ 49 561 804 4420';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 // Dr Mouafo //
						$nom = 'Dr. Merlin Mouafo';
						$bild = 'paul';
						$var1= '&Uuml;bung: Analysis';
						$var2 ='';
						$tel = '+ 49 561 804 4678';
						$fax ='+ 49 561 804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
					 ?>
					</div>
				</div>
			</div>
		</div>
	<?php	
	
	} else if ($name ==3){
		
		$titel1= 'Informationen';
		$titel2='Personen';
		$titel3='Mitarbeitende';
	titeln($titel1, $titel2, $titel3);
		?>
	    <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header1">
				<?php 
						// M.Sc Luo //
						$nom = 'M.Sc. Yongming Luo';
						$bild = 'pao';
						$var1 = '&Uuml;bung: Analysis';
						$var2 ='';
						$tel = '+ 49 561 804    --- ---';
						$fax ='+ 49 561 804 4443';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 
						// Herr Gusen //
						$nom = 'Herr Marvin Gusen';
						$bild = 'pao';
						$var1 = 'Mathematik-Vorkurs';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						 
						 
						// Dipl.-Math. Schmidtpott //
						$nom = 'Dipl.-Math. Schmidtpott';
						$bild = 'pao';
						$var1= '&Uuml;bung: Analysis';
						$var2 ='';
						$tel = '+ 49 561 804 4697';
						$fax ='+ 49 561  804 4646';
						$zeit ='';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit); 
						
						// Frau Johannes Breidenbach //
						
						$nom= 'Johannes Breidenbach';
						$bild= 'pao';
						$var1= 'Lernzentrum';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='Di.16:00-18:00 Uhr <br> Raum 1332';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit);
						 ?>
				 </div>
			  </div>
			</div>
			<!-- row -->
			<!-- row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header1">
					<?php
						// Herr Raphael Mbewou //
						$nom= 'Herr Raphael Mbewou';
						$bild= 'pao';
						$var1= 'Lernzentrum';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='Fr. 14:00-16:00 Uhr<br> Raum -1607';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit);
						 
						 
						// Frau Johannes Breidenbach //
						$nom= 'Herr Hamza Ouerrachi';
						$bild= 'pao';
						$var1= 'Lernzentrum';
						$var2 ='';
						$tel = '';
						$fax ='';
						$zeit ='Mo.16:00-18:00Uhr<br>Mi.: 16:00-18:00 Uhr<br> Raum -1605';
						  
						 profil($nom, $bild, $var1, $var2, $tel, $fax, $zeit);
					 ?>
					</div>
				</div>
			</div>
		</div>
	
	<?php } else if ($name ==4){
		$titel1= 'Informationen';
		$titel2='Personen';
		$titel3='Lerhbeauftragte';
		titeln($titel1, $titel2, $titel3); ?>
	     <div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive text-nowrap">
							<!--Table-->
							<table class="table table-striped">

							  <!--Table head-->
								<thead style="background-color: #A80F4F; color: #fff; font-weight: bold;">
									<tr>
									  <th>Titel</th>
									  <th>Name</th>
									  <th>Vorname</th>
									  <th>Lehrgebiet</th>
									  <th>Tel</th>
									  <th>E-mail</th>
									</tr>
								</thead>
							  <!--Table head-->

							  <!--Table body-->
								<tbody>
									
							    </tbody>
							  <!--Table body-->


							</table>
        <!--Table-->
						</div>
						
	<?php }else if ($name==5){
		look();
		
		
	}

} 	
		foot();
		?>