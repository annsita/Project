<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Rubic Landing page | Free Bootstrap 4.1 landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" ><strong class="text-primary">RU</strong><span class="text-light">BIC</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
	<section class="section" id="contact" style="min-height:700px;">
        <div class="container text-center">
            <h6 class="display-4 has-line">Mushroom Analysis </h6>
			
			<div class="row justify-content-center " style="background-color:#ffdcec" > 
				<div class="col-lg-12 col-md-12 well" data-aos="fade-up" data-aos-delay="300" >
				<form method="POST" enctype="multipart/form-data">
					<br><br>
					<input type="file" name="f1">
					<button type="submit" class="file-upload-browse btn btn-primary" name="submit">Submit<br></button><br><br><br>
				</form>
				</div>
			</div>
			<br><br><br>
			<div class="row justify-content-center "    >
		
			<?php
			set_time_limit(0);
			if(isset($_POST['submit']))
				{
				echo "<br><br>";	
				echo"<div class='display-4 has-line' data-aos='fade-up'>
			  <h2>OUTPUT </h2>
			</div>";
					
				move_uploaded_file($_FILES['f1']['tmp_name'],"test/test/test.jpg");
				/*$img=$_FILES['f1']['name'];
				//$python="C:\\ProgramData\\Anaconda3\\python.exe";
				
				//$file = "C:\\xampp\\htdocs\\test.py";
				$output=exec($python . " " . $file);
				*/
				
			
				$python = `python test.py`;
				//echo $python;
				$myfile = fopen("out.txt", "r") or die("Unable to open file!");
				$out= fread($myfile,filesize("out.txt"));
				fclose($myfile);
                                  
				echo " 
				<div class='col-lg-6 col-md-12 well' style='background-color:#aad6ff' >
				<br>
				<center><br><br><pre><h2>$out</h2></pre>
				<br><br>
				</center></div>";
				
				}   
			?>
			</div>
			
			
        </div>
    </section>
    
	<?php
	include("footer.php");
	?>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

</body>
</html>
