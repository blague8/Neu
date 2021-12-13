<?php
function titel (){
	?>
	<div class="col-lg-12">
                <h1 class="page-header">
                   <b> Mathematik an der Wilhelmsh&ouml;her Allee </b>
                </h1>
            </div>
			<div class="col-lg-12">
				<div class="well">
				   
					<div class="row">
						<div class="demo">
							<div class="text-effect">
								<span data-title="W">W</span>
								<span data-title="i">i</span>
								<span data-title="n">n</span>
								<span data-title="t">t</span>
								<span data-title="e">e</span>
								<span data-title="r">r</span>
								<span data-title="s">s</span>
								<span data-title="e">e</span>
								<span data-title="m">m</span>
								<span data-title="e">e</span>
								<span data-title="s">s</span>
								<span data-title="t">t</span>
								<span data-title="e">e</span>
								<span data-title="r">r</span>
								<span data-title=" "> </span>
								<span data-title="2">2</span>
								<span data-title="0">0</span>
								<span data-title="2">2</span>
								<span data-title="1">1</span>
								<span data-title="/">/</span>
								<span data-title="2">2</span>
								<span data-title="0">0</span>
								<span data-title="2">2</span>
								<span data-title="2">2</span>
							</div>
						</div>
					</div>
				</div>
			</div>
  <?php
}

function winter($index, $indexe, $sem, $semester){
	
	if ($index == 1){
	?>
		<li class="active">
	<?php
		}else {
	?>
		<li>
	<?php
		}
	if ($indexe == 1){
	?>
		<a href="#"><b>Aktuelles Semester</b><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
						<li>
							<a href= "aktuelle.php?fach=1">Differentialgleichungen</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=2">Diskrete Strukturen II</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=3">Formale Grundlagen der Informatik</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=4">Lernzentrum</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=5">Lineare Algebra</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=6">Mathematik III</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=7">Mathematik-Br&uuml;ckenkurs</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=8">Mathematik-Test</a>
						</li>
						<li>
							<a href="aktuelle.php?fach=9">Mathematik-Vorkurs</a>
						</li>
	<?php
		}else {
	?>
		<a href="#"><?= $semester ?> <span class="fa arrow"></span></a>
			<ul class="nav nav-third-level">
	  
						<li>
							<a href="<?= $sem?>.php?vergangene=1">Differentialgleichungen</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=2">Diskrete Strukturen II</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=3">Formale Grundlagen der Informatik</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=4">Lernzentrum</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=5">Lineare Algebra</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=6">Mathematik III</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=7">Mathematik-Br&uuml;ckenkurs</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=8">Mathematik-Test</a>
						</li>
						<li>
							<a href="<?= $sem?>.php?vergangene=9">Mathematik-Vorkurs</a>
						</li>
			   </ul>
		<?php } ?>
		</li>	
	<?php
}

function wintere($index, $indexe, $sem, $semester){
	?>
	<li>
	<?php
	if ($indexe == 1){
	?>
		<a href="#"><b>Aktuelles Semester</b><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
						<li>
							<a href= "../semestre/aktuelle.php?fach=1">Differentialgleichungen</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=2">Diskrete Strukturen II</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=3">Formale Grundlagen der Informatik</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=4">Lernzentrum</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=5">Lineare Algebra</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=6">Mathematik III</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=7">Mathematik-Br&uuml;ckenkurs</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=8">Mathematik-Test</a>
						</li>
						<li>
							<a href="../semestre/aktuelle.php?fach=9">Mathematik-Vorkurs</a>
						</li>
	<?php
		}else {
	?>
		<a href="#"><?= $semester ?> <span class="fa arrow"></span></a>
			<ul class="nav nav-third-level">
	  
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=1">Differentialgleichungen</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=2">Diskrete Strukturen II</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=3">Formale Grundlagen der Informatik</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=4">Lernzentrum</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=5">Lineare Algebra</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=6">Mathematik III</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=7">Mathematik-Br&uuml;ckenkurs</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=8">Mathematik-Test</a>
						</li>
						<li>
							<a href="../semestre/<?= $sem?>.php?vergangene=9">Mathematik-Vorkurs</a>
						</li>
			   </ul>
		<?php } ?>
		</li>	
	<?php
}


function sommer($index, $indexe, $seme, $semester){
	
	if ($index == 1){
	?>
		<li class="active">
	<?php
	}else {
	?>
		<li>
	<?php
	}
	if ($indexe == 1){
	?>
		<a href="#"><b>Aktuelles Semester</b><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="aktuelle.php?fach=1">Analysis</a>
				</li>
				<li>
					<a href="aktuelle.php?fach=2">Computer Algebra I</a>
				</li>
				<li>
					<a href="aktuelle.php?fach=3">Diskrete Strukturen I</a>
				</li>
				<li>
					<a href="aktuelle.php?fach=4">Mathematik-Br&uuml;ckenkurs</a>
				</li>
				<li>
					<a href="aktuelle.php?fach=5">Mathematik-Test</a>
				</li>
				<li>
					<a href="aktuelle.php?fach=6">Mathematik-Vorkurs</a>
				</li>
	<?php
		}else {
	?>
		<a href="#"><?= $semester ?> <span class="fa arrow"></span></a>
			<ul class="nav nav-third-level">
				<li>
					<a href="<?= $seme ?>.php?vergangene=1">Analysis</a>
				</li>
				<li>
					<a href="<?= $seme ?>.php?vergangene=2">Computer Algebra I</a>
				</li>
				<li>
					<a href="<?= $seme ?>.php?vergangene=3">Diskrete Strukturen I</a>
				</li>
				<li>
					<a href="<?= $seme ?>.php?vergangene=4">Mathematik-Br&uuml;ckenkurs</a>
				</li>
				<li>
					<a href="<?= $seme ?>.php?vergangene=5">Mathematik-Test</a>
				</li>
				<li>
					<a href="<?= $seme ?>.php?vergangene=6">Mathematik-Vorkurs</a>
				</li>
				<?php } ?>
		   </ul>
		</li>
	<?php			
									
}

function sommere($index, $indexe, $seme, $semester){
	
	if ($index == 1){
	?>
		<li class="active">
	<?php
	}else {
	?>
		<li>
	<?php
	}
	if ($indexe == 1){
	?>
		<a href="#"><b>Aktuelles Semester</b><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="../semestre/aktuelle.php?fach=1">Analysis</a>
				</li>
				<li>
					<a href="../semestre/aktuelle.php?fach=2">Computer Algebra I</a>
				</li>
				<li>
					<a href="../semestre/aktuelle.php?fach=3">Diskrete Strukturen I</a>
				</li>
				<li>
					<a href="../semestre/aktuelle.php?fach=4">Mathematik-Br&uuml;ckenkurs</a>
				</li>
				<li>
					<a href="../semestre/aktuelle.php?fach=5">Mathematik-Test</a>
				</li>
				<li>
					<a href="../semestre/aktuelle.php?fach=6">Mathematik-Vorkurs</a>
				</li>
	<?php
		}else {
	?>
		<a href="#"><?= $semester ?> <span class="fa arrow"></span></a>
			<ul class="nav nav-third-level">
				<li>
					<a href="../semestre/<?= $seme ?>.php?vergangene=1">Analysis</a>
				</li>
				<li>
					<a href="../semestre/<?= $seme ?>.php?vergangene=2">Computer Algebra I</a>
				</li>
				<li>
					<a href="../semestre/<?= $seme ?>.php?vergangene=3">Diskrete Strukturen I</a>
				</li>
				<li>
					<a href="../semestre/<?= $seme ?>.php?vergangene=4">Mathematik-Br&uuml;ckenkurs</a>
				</li>
				<li>
					<a href="../semestre/<?= $seme ?>.php?vergangene=5">Mathematik-Test</a>
				</li>
				<li>
					<a href="../semestre/<?= $seme ?>.php?vergangene=6">Mathematik-Vorkurs</a>
				</li>
				<?php } ?>
		   </ul>
		</li>
	<?php			
									
} 


function stellenangebote($inx){
	if ($inx == 1){
	?>
		<li class="active">
	<?php
	}else {
	?>
		<li>
	<?php
	} ?> 
			<a href="#"><b>Stellenangebote</b><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li> 
					<a href="stellenangebote.php?angebot=1">Professuren</a>
				</li> 
				<li> 
					<a href="stellenangebote.php?angebot=2">Nichtwissenschaftlichen Bereich</a>
				</li>
				<li>
					<a href="stellenangebote.php?angebot=3">Wissenschaftlichen Bereich</a>
				</li>
				<li>
					<a href="stellenangebote.php?angebot=4">Studentische oder wissenschaftliche Hilfskraft</a>
				</li>
				<li> 
					<a href="stellenangebote.php?angebot=5">Ausbildungsstellen</a>
				</li>
			</ul>
			<!-- /.nav-second-level -->
		</li>
	<?php
}

function stellenangebot($inx){
	?>
		<li>
			<a href="#"><b>Stellenangebote</b><span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li> 
					<a href="../andere/stellenangebote.php?angebot=1">Professuren</a>
				</li> 
				<li> 
					<a href="../andere/stellenangebote.php?angebot=2">Nichtwissenschaftlichen Bereich</a>
				</li>
				<li>
					<a href="../andere/stellenangebote.php?angebot=3">Wissenschaftlichen Bereich</a>
				</li>
				<li>
					<a href="../andere/stellenangebote.php?angebot=4">Studentische oder wissenschaftliche Hilfskraft</a>
				</li>
				<li> 
					<a href="../andere/stellenangebote.php?angebot=5">Ausbildungsstellen</a>
				</li>
			</ul>
			<!-- /.nav-second-level -->
		</li>
	<?php
}


function person($inx){
	if ($inx == 1){
	?>
		<li class="active">
	<?php
	}else {
	?>
		<li>
	<?php
	} ?> 
			<a href="#">Personen<span class="fa arrow"></span></a>
			<ul class="nav nav-third-level">
				<li>
					<a href="person.php?name=1">Alle</a>
				</li>
				<li>
					<a href="person.php?name=2">Professuren</a>
				</li>
				<li>
					<a href="person.php?name=3">Mitarbeitende</a>
				</li>
				<li>
					<a href="person.php?name=4">Lerhbeauftragte</a>
				</li>
			</ul>
			<!-- /.nav-second-level -->
		</li>
	<?php
}


function persone($inx){
	?>
		<li>
	
			<a href="#">Personen<span class="fa arrow"></span></a>
			<ul class="nav nav-third-level">
				<li>
					<a href="../information/person.php?name=1">Alle</a>
				</li>
				<li>
					<a href="../information/person.php?name=2">Professuren</a>
				</li>
				<li>
					<a href="../information/person.php?name=3">Mitarbeitende</a>
				</li>
				<li>
					<a href="../information/person.php?name=4">Lerhbeauftragte</a>
				</li>
			</ul>
			<!-- /.nav-second-level -->
		</li>
	<?php
}



function profil($nom1, $nom2, $var1, $var2, $tel, $fax, $zeit){
	?> 
	<div class="col-md-3">
        <div class="panel panel-default">
			<div id="panel-heading">
				<h4><b><?= $nom1 ?></b><br></h4>
			</div>
			<div class="panel-body">
				<div class="our-team">
					<img src="../Personen/<?= $nom2 ?>.jpg">
					<div class="team-content">
						<h3 class="title"><?= $var1 ?></h3>
						<span class="post"><?= $var2 ?></span>
						<span  class="social">
							<i  class="fa fa-phone"></i><b><?= $tel ?></b><br>
							<i  class="fa fa-fax"></i><b><?= $fax ?></b><br>
							<i  class="fa fa-user"></i><b><?= $zeit ?></b>
						</span>
					</div>
				</div>
			</div>
			<div class="profil">
				<h4><a href="person.php?name=5" class="btn btn-lg">Profil <i class="fa fa-long-arrow-right"></i></a></h4>
			</div>
		</div>
	</div>
		
<?php }

function look(){
?>	
<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="email-signature">
					<div class="signature-details">
						<div class="title">Prof. Dr. Andreas Bley 
						<ul class="head">
							<li>Federf&uuml;hrung, <br/>
								Vorlesung: Diskrete Strukturen I <br/>
							</li>
						</ul> </div>
					</div>
					<div class="signature-img">
						<img src="../Personen/paul.jpg" alt="">
					</div>
					<div class="signature-content">
						<ul>
							<li><span>Phone:</span> +49 561 804 6229 </li>
							<li><span>Fax:</span> +49 561 804 6436 </li>
							<li><span>E-mail:</span><a href="mailto:andreas.bley@mathemtik.uni-kassel.de">andreas.bley@mathematik.uni-kassel.de</a></li>
							<li><span>Address: </span> Wilhelmshöher Allee 71 - 73 <br> 34119 Kassel</li>
						</ul>
					</div>
					<div class="signature-web">
						<span>Sprechstunde:<br> Mi.: 12:00 - 12:30 Uhr, Wilh. Allee. Raum 2306 A (Eingang 2303) </span>		             
					</div>
				</div>
			</div>
		</div>
		</div>	
	<?php
}

function termin($nom, $text, $uhr){
	
?>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                       <!-- <div class="timeline-icon">
                            <i class="fa fa-globe"></i>
                        </div> -->
                        <div class="inner-content">
                            <h3 class="title"><?= $nom ?></h3>
                            <p class="description">
                                <?=$text ?>
                            </p>
                        </div>
                        <div class="timeline-year"><span><?= $uhr; ?></span></div>
                    </a>
                </div>
<?php
}



function angebot($i, $nom, $texte){
?>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="<?=$i; ?>">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#corde" href="#<?=$i+1; ?>" aria-expanded="false" aria-controls="<?=$i+1; ?>">
										<span><?= $i; ?></span>
										<?= $nom;?>
									</a>
								</h4>
							</div>
							<div id="<?=$i+1; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?=$i; ?>">
								<div class="panel-body">
									<p><?= $texte;?>  </p>
								</div>
							</div>
						</div>
<?php	
}

function titeln($titel1, $titel2, $titel3){
	?>
		<ol class="breadcrumb">
	<?php
		if (($titel1 != '') && ($titel2 != '') && ($titel3 != '')){
	?>
		<li><a href="#"><?= $titel1; ?></a></li>
		<li><a href="#"><?= $titel2; ?></a></li>
		<li class="active"><?= $titel3; ?></li>
	<?php
		}
		else if (($titel1 != '') && ($titel2 != '') && ($titel3 == '')){
	?>
		<li><a href="#"><?= $titel1; ?></a></li>
		<li class="active"><?= $titel2; ?></li>
	<?php 
		}
		else if (($titel1 != '')&& ($titel2 == '') && ($titel3 == '')){
	?>
		<li class="active"><?= $titel1; ?></li>
	<?php
		} 
	?>
		</ol>
	<?php
}
     

function slide ($nom, $nom1, $var1){
	?>
		<div class="post-slide">
			<img src="../Personen/<?= $nom ?>.jpg" alt="">
		<div class="post-date">
			<span class="month">September</span>
			<span class="date">2021</span>
		</div>
		<h3 class="post-title">
			<a href="#"><?= $nom1 ?></a>
		</h3>
		<p class="post-description">
		<?= $var1 ?>
		</p>
		<a href="../information/person.php?name=5" class="read-more">read more<i class="fa fa-chevron-right"></i></a>
	   </div>
<?php 
}

function active($url)
{
  if ($_SERVER["PHP_SELF"] == $url)
  {
    echo ' class="active"';
  }
}

function titre (){
	?>
	
		<div class="texte-effect">
			<span>WINTERSEMESTER 2021/2022</span>
		</div>
	
<?php
}
function date2mysql($date){
	$newdate=strtotime($date);
	$newdate = date('Y-m-j',$newdate);
	return $newdate;
}

function mysql2date($date = "") {
    if ($date == "") {
        return "";
    } else {
        $tmp = explode('-', $date);
        return $tmp[2] . "." . $tmp[1] . "." . $tmp[0];
    }
}
function rechnenDate($date=""){
	$newdate=strtotime('+21days',strtotime($date));
	$newdate = date('Y-m-j',$newdate);
	return $newdate;
}



