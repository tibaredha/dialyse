<div class="sheader1l"><p id="lacceuil"><?php echo "";echo $this->msg; echo "";?></p></div><div class="sheader1r"><p id="lsetup"><?php html::NAV();?></p></div>
<div class="sheader2l">Système électronique d'enregistrement des insuffisants renaux chroniques dialyses algerien</div>
<div class="sheader2r"></div>
<div class="contentl">
<marquee behavior="slide" direction="up" scrollamount="2">
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;L’insuffisance rénale chronique terminale (IRCT) </p>

<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;est devenue un défi économique majeur de santé publique </p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;Malheureusement, l’absence de données épidémiologiques fiables</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;et exhaustives amène à des réflexions et des décisions ne s’appuyant que sur </p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;des approximations quant à la population concernée et aux coûts engendrés</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;Les néphrologues ont besoin de données fiables .</p>
<p><font color="#FF0000">*</font>&nbsp;&nbsp;&nbsp;afin d’améliorer pratiques, recherche et prévention</p>
<span class="import" onclick="show_popup('popup_upload')">Import CSV to MySQL</span>


	
</marquee>
 <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onclick="close_popup('popup_upload')">x</span>
            <h2>Upload CSV file</h2>
            <form action="import.php" method="post" enctype="multipart/form-data">
                <input type="file"   name="csv_file" id="csv_file" class="file_input">
                <input type="submit" value="Upload file" id="upload_btn">
            </form>
        </div>
</div>
	
<?php 
// html::mysqliconnect();
// echo "";
// echo dsp; 
// echo "";
?>	
	

	
	
</div>	
<div class="content"><img id="image" src="<?php echo URL;?>public/images/accueil.jpg"></div>
<div class="contentr"><img id="image" src="<?php echo URL;?>public/images/<?php echo logod;?>"></div>	
<div class="scontentl2"><?php echo ""; echo "Algerian Electronic chronic renal failure Registration System";?></div>		
<div class="scontentl3"><?php html::rsc();?></div>
<div class="scontentr1"><?php echo "";echo dsp; echo "";?></div>		