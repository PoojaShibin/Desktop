<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Media Monitoring</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
 
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="w3.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>

.coupon {
    border: 5px dotted #bbb;
    width: 80%;
    border-radius: 15px;
    margin: 0 auto;
    max-width: 600px;
}


.promo {
    background: #ccc;
    padding: 3px;
}

.expire {
    color: red;
}
a
{
	text-decoration:none;
	color:#FFF;
}
</style>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
 
    </head>
    <body >
        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><p style="color:#F00;font-size:3vw">Media Monitoring</p></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item active"><a class="nav-link" href="http://192.168.70.190/" style="color:#F00">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="http://192.168.70.190/link.php" style="color:#F00">Links</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://192.168.70.190/emp.php" style="color:#F00">Employee Contacts</a></li>
                        <li style="color:#FFF"><a href="http://192.168.70.32:8081/desktop/video.php" style="color:#FFF">Video Editing</a></li>
                        <li class="nav-item"><a  href="http://192.168.70.190/reg.php?job=" style="color:#F00">Register Complaints</a></li>
                    </ul>
                  
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>The ultimate guide of Media Monitoring</h4>
                    <ul>
                        <li><a href="http://192.168.70.190"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Video Editing</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area" style="background-image:url(light-wooden-background.jpg)">
        <a href="http://192.168.70.32:8081/desktop/video.php" class="btn btn-warning pull-right" style="position:fixed;">Back to Video Editing Page</a> 
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                           <!-----====================================Ticket Generation===================------------------>
                           <center><h1 style="color:#33C" >MERGE VIDEOS</h1></center>
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>      
<br />
<br />
<br />

  <div class="container" >
  <!--=============================================================== Input Part start =========================================---------------------------->
  <?php
  if(!isset($_POST['hh']))
  {
	  ?>
      
<div class="w3-container">
  <h2>INPUT FOR MERGING</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Select Videos....</h1>
    </header>

    <div class="w3-container">
      <p> <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
 <form action="" method="post" enctype="multipart/form-data">
 <center>
<div class="col-md-12">
      <div class="row">
      <div class="control-group" id="fields">
       
          
          <div class="controls">
           
              <div class="entry input-group col-xs-3">
                
             
                <input class="btn btn-primary"  type="file" class="btn btn-primary" id="file_multi_video"  accepts="video/*"  name="f[]" >

                <span class="input-group-btn">
              <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                </button>
             
                </span>
               

              </div>


          </div>
          <br />

        </div>
      </div>
    </div><br>
<br>
<br>
<br>
</center>
      
</p>
    </div>

                     <video width="400" controls style="margin:-85px 0px 12px 701px;">
  <source src="mov_bbb.mp4" id="video_here">
   
</video>
    <script>
$(document).on("change", "#file_multi_video", function(evt) {
  var $source = $('#video_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});
</script>
    <footer class="w3-container w3-blue"><br>
<br>

      <h5><input type="submit" value="MERGE VIDEOS" id="myList" class="btn btn-warning" style="padding:23px 87px 14px 18px;margin:-15px -1px 13px 2px ;" name="hh"/>
</form>

<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});

});



</script></h5>
    </footer>
  </div>
</div>

<?php
  }
  ?>

<!--=============================================================== Input Part ends =========================================---------------------------->
<!--=============================================================== Output Part start =========================================---------------------------->

<?php
  if(isset($_POST['hh']))
  {
	  $a= count($_FILES["f"]["name"]);
	  
					if (file_exists('merge.mp4'))
					{
					$src='C:\wamp\www\desktop\merge.mp4';
					unlink($src);
					$files = glob('C:\wamp\www\desktop\merge\*.mp4'); // get all file names
                    foreach($files as $file){ // iterate files
                    if(is_file($file))
                    unlink($file); // delete file
}
					}
	   $myfile=fopen("merge\merge.txt","w")or die("unable to open file");
	  //echo $_FILES['f']['name'];
	  /*
	 

$txt="Name:Shilpa\n";
fwrite($myfile,$txt);
$txt="Id:065\n";
fwrite($myfile,$txt);
*/
for($i=0;$i<$a;$i++)
{
	$b="";
	move_uploaded_file ($_FILES["f"]["tmp_name"][$i],"merge/".$_FILES["f"]["name"][$i]);
	//echo $_FILES['f']['name'][$i]."<br />";
	$b=$_FILES['f']['name'][$i];
$txt="file '$b'"."\r\n";
fwrite($myfile,$txt);
fwrite($myfile,"\n");
}
	
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					
					$name="merge\merge.txt";
				

				$cmd="$ffmpeg -f concat -safe 0 -i merge/merge.txt -c copy merge.mp4";
				if(!shell_exec($cmd))
					{
						?>
                        <div class="w3-container">
  <h2>Output Of Merging</h2>
  <p></p>

  <div class="w3-card-9" style="width:100%;">
    <header class="w3-container w3-blue" style="background-color:#09F">
      <h1>Video Preview</h1>
    </header>
<br>
<br>

    <div class="w3-container">
      <p>
			  <video controls width="1024" height="320">
  <source src="merge.mp4" type="video/mp4">
  
</video>
</p>
    </div>

    <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="merge.mp4" download>
     <input type="button" style="margin:-31px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>
 <script>
		window.alert("Your Video merged");
		</script>
<?php
					}
  }
?>

<!--=============================================================== Output Part ends =========================================---------------------------->

 
  </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
    </body>
</html>
