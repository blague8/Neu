<?php
session_start();
require_once '../includes/template.inc.php';

head('Moodle');
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
                        <li> 
                            <a href="#"><b>Informationen</b><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../information/termine.php">Termine</a>
                                </li>
								<?php 
								$inde=0;
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
                            <a href="archiv.php"><b>Archiv</b></a>
                        </li>
						<?php 
						$inde=0;
						stellenangebote($inde);
						?>
						<li>
                            <a href="klausur.php"><b>Klausuren</b></a>
                        </li>
                        <li>
                            <a  class="active" href="moodle.php"><b>Moodle</b></a>
                        </li>
                        <li>
                            <a href="lageplan.php"><b>Lageplan</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
		 </nav>
		 <div id="page-wrapper">
		    <div class="col-lg-12">
				<span class="texten-effect">Moodle </span>  	  
			</div>
       
       
	
		
        <hr>
</div></div>
        <!-- Footer -->
        <?php
		foot();
		?>