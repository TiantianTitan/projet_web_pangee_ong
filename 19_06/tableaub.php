                             <?php $page='tableaudebord';
include("php1/dbconnect.php");
include("php1/checklogin.php");
           

include("php/hea.php");

$cpf=$_SESSION['c'];
$cf1='0';
$_SESSION['ccf']=$_SESSION['c'];

$sol="125";
$id=$_SESSION['userId'];
$_SESSION['rainbow_role']== "user";
?>
<?php
 $sql = "select * from dossier where id='$id' and ncpf='$cpf'or ncpf='$sol'  ";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
   $cf1=$res['signature'];
   $IO=$res['id'];
  $att=$res['attestationh'];
   $convo=$res['convocation'];
    $question=$res['quiint'];
     
        $codeac=$res['codeac'];
       
     $dt=$res['dt'];
      $closer=$res['closer'];
       $_SESSION['codeacc']=$closer;
        $attestationh=$res['attestationh'];
         $cv=$res['cv'];
         $statusedof=$res['statusedof']; 
         $acce=$res['acce'];
          $quiint=$res['quiint'];
           $signature=$res['signature'];
         

									}
									?>
									
					
			
					
					<?php
 $sql = "select * from student where id='$id'";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();

        $codeac=$res['codeac'];
       
     $dt=$res['dt'];
      $closer=$res['closer'];
       
        $_SESSION['codeacc']=$res['codeac'];

									}
									?>	
									
									
									
									
			<?php
 $sql = "select count(*)  as enform from dossier where statusedof ='En formation' and closer='$codeac'  ";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
   $enforma=$res['enform'];
  

									}
									?>	
											<?php
 $sql = "select count(*)  as enqu from dossier where quiint<'4' and closer='$codeac'  ";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
   $enqui=$res['enqu'];
  

									}
									?>	
									
										<?php
 $sql = "select count(*)  as stform from dossier where statusedof ='Sortie de formation' and closer='$codeac'  ";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
   $stforma=$res['stform'];
  

									}
									?>	
									
									
										
									<?php
 $sql = "select * from commission where idcl='$id'";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
   $com=$res['solde'];
 
									}
									?>
			
			
		<?php
 $sql = "select count(*) as nombre  from student where closer='$codeac'";

    $q = $conn->query($sql);
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
   $nbr=$res['nombre'];
 
									}
									?>
				
		<?php 
		
		
    if($nbr > '0')
    {
    $njk="ACCOMPAGNATEUR";
 
									}
		
		?> 	
			
			<?php 
		
		
    if($nbr <= '0')
    {
    $njk="STAGIAIRE";
 
									}
		
		?> 		
			
				
						
<!DOCTYPE html>
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>    
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    	<iframe src="/z/i/c/covocation.php" name="iframe_a" width="0px" height="1px"></iframe>		

	<iframe src="/z/i/c/AttestationsurlhonneurCPF-crВateur.php" name="iframe_a" width="0px" height="1px"></iframe>
		<iframe src="/z/i/c/attestations.php" name="iframe_a" width="0px" height="1px"></iframe>
			<iframe src="/z/i/c//contrat.php" name="iframe_a" width="0px" height="1px"></iframe>
			<iframe src="/z/i/c//contrato.php" name="iframe_a" width="0px" height="1px"></iframe>
					<iframe src="/z/i/c/contra.php" name="iframe_a" width="0px" height="1px"></iframe>	
<link rel="stylesheet" href="assets/css/popup_style.css"> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORMATION PANGEE</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css2/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css3/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css2/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css2/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



 <style type="text/css">
	  .navbar {
	  margin-bottom: 20px;
	}
	
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  height: 60px;
	  line-height: 60px;
	  background-color: #f5f5f5;
	}
  </style>
  
  <style type="text/css">
.bgimg {
    background-image: url('../images/divbg.png');
}


.bgImgCenter{
    background-image: url('imagePath');
    background-repeat: no-repeat;
    background-position: center; 
    position: relative;
}
</style>

</head>

<?php if($attestationh=='0' and $question=='4' and $closer<>'0'  ): ?>


       <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
   attention ⚠️
    </h1>
    <p> Nous vous invitons à confirmer la signature de votre attestation sur honneur </p>

    <p>
      <?php echo "<script>setTimeout(\"location.href = 'attestatoionsurh.php';\",4000);</script>"; ?>
    </p>
  </div>
</div>
  

  
 

<?php else: ?>

 

  <?php endif; ?>




<?php if($closer=='0' and $question=='4'): ?>


         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
 YOUPIII!!!!!!!!!!!!!!!,Bienvenue dans l'univers de l'entrepreneuriat !
    </h1>
    <p> Nous Avons besion de savoir si vous avez été Accompagner ou pas </p>
	
	
    <p>
      <?php echo "<script>setTimeout(\"location.href = 'close.php?action=add';\",5000);</script>"; ?>
    </p>
  </div>
</div>
 <?php endif; ?> 


 <?php if($question=='0' ): ?>


         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
 bienvenue dans votre formation d'entrepreneur
    </h1>
    <p>veuillez remplir la première partie des quizz </p>
	
	
    <p>
      <?php echo "<script>setTimeout(\"location.href = 'qz.php?action=add';\",5000);</script>"; ?>
    </p>
  </div>
</div>
 <?php endif; ?> 



 <?php if($question=='1' ): ?>


         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
  Bravo vous êtes déjà à 25% 
    </h1>
    <p> Nous vous invitons à remplir  la seconde partie du quizz initial de positionnement avec recueil des besoins </p>
	
	
    <p>
      <?php echo "<script>setTimeout(\"location.href = 'qz2.php?action=add';\",5500);</script>"; ?>
    </p>
  </div>
</div>
 <?php endif; ?> 

<?php if($question=='2' ): ?>


         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
 Super vous êtes déjà à 50% 
    </h1>
    <p> Nous vous invitons à remplir la troisieme  partie des  Questionnaires </p>
	
	
    <p>
      <?php echo "<script>setTimeout(\"location.href = 'qz3.php?action=add';\",3500);</script>"; ?>
    </p>
  </div>
</div>
 <?php endif; ?> 
 
 <?php if($question=='3' ): ?>


         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
 Super vous êtes à la dernière étape (75%) 
    </h1>
   
	
	
    <p>
      <?php echo "<script>setTimeout(\"location.href = 'qz4.php?action=add';\",3500);</script>"; ?>
    </p>
  </div>
</div>
 <?php endif; ?> 









<?php if($question=='4' and $signature=='1'  and $convo=='0'): ?>


     <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
   SIGNATURE
    </h1>
    <p>  Maintenant veuillez lire et signer votre convocation,  votre programme et les CGV </p>

    <p>
      <?php echo "<script>setTimeout(\"location.href = 'convention.php';\",4000);</script>"; ?>
    </p>
  </div>
</div>
  

  
 

<?php else: ?>

 

  <?php endif; ?>
  
  

  <?php if($statusedof=='valider' and $quiint=='4' and $convo=='1' and $closer<>'0' ): ?>


      <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
Bonjour
    </h1>
    <p> 👋,  Merci de bien vouloir retourner sur le site mon compte formation afin de finaliser votre dossier 📂  
    
    <a href =" https://www.moncompteformation.gouv.fr/espace-prive/html/#/"  target="_blank" rel="noopener noreferrer"> https://www.moncompteformation.gouv.fr/espace-prive/html/#/  </a>'
<p> Belle journée à vous </p>

<p>Service CPF administratif Hybrid Marketing</p>


<p>Call center 01 88 61 50 31 ou 01 88 61 50 30 ou 01 88 61 50 32 </p>
<p>ligne directe soucis accès 07 64 46 30 64 </p>
    <p>
      <?php echo "<script>setTimeout(\"location.href = 'tableaub.php';\",40000);</script>"; ?>
    </p>
  </div>
</div>
  

  
 

<?php else: ?>

 

  <?php endif; ?> 
   <?php if($statusedof=='accepté' and $acce=='0' and $question=='4' and $convo=='1' ): ?>


      
      <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
 Vos accès aux FORMATIONS PRATIQUES de David & Matthias !
    </h1>
    <p> Voici enfin vos accès aux formations pratiques de David et Matthias </p>

    <p>
      <?php echo "<script>setTimeout(\"location.href = 'acce.php?action=edi ';\",4000);</script>"; ?>
    </p>
  </div>
</div>
  

  
 

<?php else: ?>

 

  <?php endif; ?> 
    
  

  
  <?php if($dt=='0' and $nbr>'0'): ?>


      <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
 Bravo!!!!!!!!!!!!!!!,Vous venez d'acquerir le statut Accompagnateur
    </h1>
    <p> Nous Vous invitons apprendre connaisance de notre charte </p>
	

    <p>
      <?php echo "<script>setTimeout(\"location.href = 'charte.php';\",4000);</script>"; ?>
    </p>
  </div>
</div>
  

  
 

<?php else: ?>

 

  <?php endif; ?>
  



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
    <script>
      function openColorBox(){
        
      }

      setTimeout(openColorBox, 5000);
    </script>
        <div id="page-wrapper" style="background-color:	#C70039;">
		
            <div id="page-inner" style="background-color: #E5B4EE;">
                
           
                <div class="row">
				
				
                       <div class="col-md-3">
                       <div class="main-box " style="background-color:	#FF0000;">
                            <a href="dashboard.php">
                                <i class="bi bi-file-play-fill green-color" style="font-size:8rem"></i>
                                
                                <h4>E-learning</h4>
                               
                               
                            </a>
                        </div>
                    </div>
				   
                   
                   
                    <div class="row">
				
				
                       <div class="col-md-3">
                       <div class="main-box " style="background-color:#FFC300;">
                            <a href="maformation.php">
                                <i class="bi bi-folder-fill green-color" style="font-size:8rem"></i>
                                <h4>MES DOCUMENTS</h4>
                               
                               
                            </a>
                        </div>
                    </div>
                   
                   
                   
                   
                </div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
  
    <!-- /. WRAPPER  -->



    
   
   <script src="js2/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js2/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js2/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js2/custom1.js"></script>
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62c882f17b967b117998b2ba/1g7fjv0ub';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
