<?php
session_start();
require_once '../includes/template.inc.php';
$fach = filter_input(INPUT_GET, 'fach',FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);

head('Aktuelle');
?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                          <br><br> <?php titre(); ?><br><br>
                        </li>
                        <li>
                            <a href="index.php"><b> Startseite</b></a>
                        </li>
									<?php 
									$ind = 1; 
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
						stellenangebot($inde); ?>
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
		
		<?php
				
    if ($fach !=''){
		if ($fach == 1){
			?>
				<div class="col-lg-12">
			<?php
				$titel1= 'Aktuelles Semester';
				$titel2='Analysis';
				$titel3='';
			   titeln($titel1, $titel2, $titel3);
			?>              
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="news-slider" class="owl-carousel">
								<?php	
								$nom= 'rueck';
								$nom1= 'Prof. Hans-Georg R&uuml;ck';
								$var1= 'Vorlesung: Analysis';
								slide($nom, $nom1, $var1);
								
								$nom= 'petersen';
								$nom1= 'PD. Dr. Habil. Sebastian Petersen';
								$var1= 'Kryptographie <br>H&ouml;rsaalanleitung <br>&Uuml;bung: Analysis';
								slide($nom, $nom1, $var1);
								
								$nom= 'lakhal';
								$nom1= ' Dr. Anen Lakhal ';
								$var1= '&Uuml;bung: Analysis <br>H&ouml;rsaal&uuml;bungen ';
								slide($nom, $nom1, $var1);
								
								$nom= 'mouafo';
								$nom1= 'Dr. Merlin Mouafo';
								$var1= '&Uuml;bung: Analysis';
								slide($nom, $nom1, $var1);
								
								$nom= 'luo';
								$nom1= 'M.Sc. Yongming Luo ';
								$var1= '&Uuml;bung: Analysis';
								slide($nom, $nom1, $var1);
								
								$nom= 'schmidtpott';
								$nom1= 'Dipl.-Math. Hendrikje Schmidtpott';
								$var1= '&Uuml;bung: Analysis';
								slide($nom, $nom1, $var1);
								?>
							</div>
						</div>
					</div>
				</div>
			<?php
			
			   
		}else if ($fach==2){
		
		?>
		<div class="col-lg-12">
		<?php
			$titel1= 'Aktuelles Semester';
			$titel2='Computer Algebra I';
			$titel3='';
		   titeln($titel1, $titel2, $titel3);
		   
		  ?>              
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive text-nowrap">
							<!--Table-->
							<table class="table table-striped">

							  <!--Table head-->
								<thead style="background-color: #A80F4F; color: #fff; font-weight: bold;">
									<tr>
									  <th>Veranstaltung</th>
									  <th>SWS</th>
									  <th>Tag</th>
									  <th>Zeit</th>
									  <th>Ort/Raum</th>
									  <th>Dozenten</th>
									  <th>Beginn</th>
									</tr>
								</thead>
							  <!--Table head-->

							  <!--Table body-->
								<tbody>
									<tr>
									  <th scope="row">Vorlesung</th>
									  <td>2</td>
									  <td>Mittwoch</td>
									  <td>15-17 </td>
									  <td>HPS / Raum 1403</td>
									  <td>PD. Dr. habil. Sebastian Petersen</td>
									   <td>17.04.2020</td>
									</tr>
									<tr>
									  <th scope="row">&Uuml;bung</th>
									  <td>1</td>
									  <td>Mittwoch</td>
									  <td>14-15</td>
									  <td>HPS / Raum 1403</td>
									  <td>PD. Dr. habil. Sebastian Petersen</td>
									   <td>17.04.2020</td>
									</tr>
							    </tbody>
							  <!--Table body-->
							</table>
        <!--Table-->
						</div>
					</div>
				</div>
			</div>
		<?php
	} else if ($fach==3){
		?>
			<div class="col-lg-12">
		<?php
			$titel1= 'Aktuelles Semester';
			$titel2='Diskrete Strukturen I';
			$titel3='';
		   titeln($titel1, $titel2, $titel3);
		?>              
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="news-slider" class="owl-carousel">
							<?php	
							$nom= 'nn';
							$nom1= 'Johannes Breidenbach ';
							$var1= 'Lernzentrum';
							slide($nom, $nom1, $var1);
							
							$nom= 'mbewou';
							$nom1= 'Herr Raphael Mbewou ';
							$var1= 'Lernzentrum';
							slide($nom, $nom1, $var1);
							
							$nom= 'nn';
							$nom1= 'Herr Hamza El Ouerrachi ';
							$var1= 'Lernzentrum';
							slide($nom, $nom1, $var1);
							
							?>
						</div>
					</div>
				</div>
			</div>
		<?php
	}else if ($fach==4){
		?>
			<div class="col-lg-12">
		<?php
			$titel1= 'Aktuelles Semester';
			$titel2='Mathematik-Br&uuml;ckenkurs';
			$titel3='';
		   titeln($titel1, $titel2, $titel3);
		?>              
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="news-slider" class="owl-carousel">
							<?php	
							$nom= 'fanghaenel';
							$nom1= 'Dr. Diana Fangh&auml;nel';
							$var1= 'Mathematischer Br&uuml;ckenkurs';
							slide($nom, $nom1, $var1);
							
							$nom= 'janssen';
							$nom1= 'Dr. D&ouml;rthe Janssen';
							$var1= 'Übung: Analysis <br>Mathematischer Br&uuml;ckenkurs';
							slide($nom, $nom1, $var1);
							
							?>
						</div>
					</div>
				</div>
			</div>
		<?php
	}else if ($fach==5){
		?>
			<div class="col-lg-12">
		<?php
			$titel1= 'Aktuelles Semester';
			$titel2='Mathematik-Test';
			$titel3='';
		   titeln($titel1, $titel2, $titel3);
		?>              
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						
						
						
						
					</div>
				</div>
			</div>
		<?php
	}else if ($fach==6){
		?>
			<div class="col-lg-12">
		<?php
			$titel1= 'Aktuelles Semester';
			$titel2='Mathematik-Vorkurs';
			$titel3='';
		   titeln($titel1, $titel2, $titel3);
		?>              
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						
						
					</div>
				</div>
			</div>
		<?php
	}

}
	
		?>
		</div>
	</div>
        <!-- Footer -->
        <?php
		foot();
		?>