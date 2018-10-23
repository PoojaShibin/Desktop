<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Media Monitoring</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

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
    </head>
    <body >
<div id="msg" style="font-size:largest;">
<!-- you can set whatever style you want on this -->
Loading, please wait...
</div>
<div id="body" style="display:none;">
<!-- everything else -->
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#body').show();
    $('#msg').hide();
});
</script>
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
        <section class="static_area">
        <a href="http://192.168.70.32:8081/desktop/video.php" class="btn btn-warning pull-right" style="position:fixed;">Back to Video Editing Page</a> 
            <div class="container">
             
                           <!-----====================================Ticket Generation===================------------------>
                           
                     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>      

  <div class="container" style="background-color:white">
  <?php
  $a=$_REQUEST['job'];
  set_time_limit(3600);
  if($a==1)
  {
	  if(!isset($_POST['one']))
				{?>

<div class="w3-container">
  <h2>Input Part</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Video Input</h1>
    </header>

    <div class="w3-container">
      <p>
      
       <form action="#" method="post" enctype="multipart/form-data">
       <h1 style="color:#FFF">Please Choose Your File...</h1>
       <input type="file" name="file" id="file_multi_video" accept="video/*" autoplay class="btn btn-primary" />
       <video width="600" height="400" controls playsinline webkit-playsinline style="margin:-60px 0px 12px 401px;">
  <source src="mov_bbb.mp4" id="video_here">
    Your browser does not support HTML5 video.
</video>
   
       
       </p>
    </div>

    <footer class="w3-container w3-blue">
      <h5> <input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/>
    </form></h5>
    </footer>
  </div>
</div>

<?php
  }
////////////////////////////////////////////// Coding for Compression //////////////////////////////////////////////

if(isset($_POST['one']))
				{
					if (file_exists('ab.mp4'))
					{
					$src='C:\wamp\www\desktop\ab.mp4';
					unlink($src);
					}
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
			//$cmd="$ffmpeg -i $name -s 640x480 -b 512k -vcodec mpeg1video -acodec copy ab.mp4";
			/*
			-i input file

-b:v videobitrate of output video in kilobytes (you have to try)

-s dimensions of output video

-fs FILESIZE of output video in kilobytes

-vcodec videocodec (use ffmpeg -codecs to list all available codecs)

-acodec audio codec for output video (only copy the audiostream, don't temper)

$cmd="$ffmpeg -i $name -s 640x480 -c:v h264 -crf 18 -preset slow -profile high -strict -1 -async 1 ab.mp4";
*/
				$cmd="$ffmpeg -i $name -s 640x480 -b 512k  -c:v h264  ab.mp4";
				
					if(!shell_exec($cmd))
					{
			
			?>
       
<div class="w3-container">
  <h2>Output Of Compression</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p> <center> <video controls width="100%" height="100%">
  <source src="ab.mp4" type="video/mp4">
  
</video></center></p>
    </div>

   <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="ab.mp4" download>
     <input type="button" style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>
     
        <script>
		window.alert("Your Video Compressed");
		</script>
        <?php
					}
					else
					{
						echo "Sorry";
					}
				}

	
  }
  
  
  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 else if($a==2)
  { 
 
if(!isset($_POST['one']))
				{
					 ?>
                     <div class="w3-container">
  <h2>TRIM VIDEO</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Please select the video...</h1>
    </header>

    <div class="w3-container">
      <p> 
      <br>
<br>

      <form action="#" method="post" enctype="multipart/form-data">
      <input type="file" name="file" id="file_multi_video" class="btn btn-primary" accept="video/*" autoplay/>
        <video width="600" height="400" controls playsinline webkit-playsinline style="margin:-40px 0px 12px 401px;" id="video_here">
  <source src="mov_bbb.mp4" id="video_here">
    Your browser does not support HTML5 video.
</video>
<div style="margin:5px 5px 5px 40px">
<span style="color:#FFF;font-size:16px">Start time<input type="text" name="s" id="s" step="5" /></span>&nbsp;&nbsp;&nbsp;<button onClick="getCurTime()" class="btn btn-warning" type="button">Start Time</button>
<span style="color:#FFF;font-size:16px">End Time<input type="text" name="t" id="t" step="5"/></span>&nbsp;&nbsp;&nbsp;<button onClick="getCurTime1()" class="btn btn-warning" type="button">End Time</button>
</div>
      </p>
    </div>

    <footer class="w3-container w3-blue">
     <input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/>
    </footer>
  </div>
</div>



<?php
  }
////////////////////////////////////////////// Coding for trimming //////////////////////////////////////////////

if(isset($_POST['one']))
				{
					//exec("C:\wamp\www\desktop\1.bat");
				if (file_exists('cut.mp4'))
					{
					$src='C:\wamp\www\desktop\cut.mp4';
					unlink($src);
					
					}
				
					$t=$_POST['t'];
					$s1=$_POST['s'];
$s = date("H:i:s",strtotime($s1));

//echo $s;
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
				$cmd="$ffmpeg -i $name -ss $s -to $t -c copy  -c:v h264 cut.mp4"; 
				
					if(!shell_exec($cmd))
					{?>	
      <div class="w3-container">
  <h2>OUTPUT</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p><video width="100%"  controls>
  <source src="cut.mp4" type="video/mp4" poster="images/loading.gif">
  
</video></p>
    </div>
 <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="cut.mp4" download>
     <input type="button" style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>
     
        <script>
		window.alert("Your Video trimmed");
		</script>
        <?php
					
					}
					else
					{
						echo "Sorry";
					}
				}

	
  }
  
  
  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Create Thumbnail/////////////////////////////////////
 else if($a==3)
  { 
  if(!isset($_POST['one']))
				{?>
<div class="w3-container">
  <h2>Input for Creating Thumbnail</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Please Select Your File...</h1>
    </header>
<br>
<br>


    <div class="w3-container">
      <p>
      <form action="#" method="post" enctype="multipart/form-data">
      <input type="file" name="file" id="file_multi_video" class="btn btn-primary" style="background-color:#096;padding:20px 130px 20px 130px;border-radius:10px" accept="video/*" autoplay/>
      </p>
    </div>
<br>
<br>
    <footer class="w3-container w3-blue">
      <h5><input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/></td>
    </form></h5>
    </footer>
  </div>
</div>


<?php
////////////////////////////////////////////// Coding for 1 thubnail //////////////////////////////////////////////
				}
if(isset($_POST['one']))
				{
				if (file_exists('one.jpg'))
					{
					$src='C:\wamp\www\desktop\one.jpg';
					unlink($src);
					}
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
						$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
				$imageFile="one.jpg";
					//echo $imageFile;
					$size="120x90";
					$second=50;
					//echo $imageFile."<br>";
					//echo $size."<br>";
					//echo $second."<br>";
					//echo $name."<br>";
					//$cmd="$ffmpeg -i video.mp4  -an -ss 50 -s 120x90 one.jpg";
					//echo $cmd;
					$cmd="$ffmpeg -i $name -an -ss $second -s $size one.jpg";
					//echo $cmd;
					//shell_exec($cmd);
					if(!shell_exec($cmd))
					{
						?>
    <div class="w3-container">
  <h2>Output</h2>
  <p></p>

  <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Priview</h1>
    </header>
<br>
<br>
<br>

    <div class="w3-container">
      <p><img src="one.jpg"/></p>
    </div>
<br>
<br>

 <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="one.jpg" download>
     <input type="button" style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>

        <script>
		window.alert("Your Images Created");
		</script>
        <?php
						
					
					}
					
				}
				else
				{
					echo "Sorry";
				}
  }

	
  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 else if($a==4)
  { 
if(!isset($_POST['one']))
				{
				?>	
<div class="w3-container">  <h2>Input</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Please Choose Your File</h1>
    </header>

    <div class="w3-container">
      <p><form action="#" method="post" enctype="multipart/form-data"><br>
<br>
<input type="file" name="file" id="file_multi_video"  accept="video/*" class="btn btn-primary" autoplay/><br>
<div style="margin: -36px 372px 23px"><lable>Give Limit </label><input type="number" min="1" max="50" name="ll" class="btn btn-primary" /></div></p>
    </div>

    <footer class="w3-container w3-blue">
      <h5><input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/></form></h5>
    </footer>
  </div>
</div>

<?php
//////////////////////////////////////////////Multiple Thumbnail //////////////////////////////////////////////
  }
if(isset($_POST['one']))
				{
					$ll=$_POST['ll'];
					/*for($r=1;$r<=$ll;$r++)
					{
						
						$src="C:\wamp\www\desktop\$r"."."."jpg";
					unlink($src);
					
					}*/
					array_map('unlink', glob("C:\wamp\www\desktop\mul\*.jpg"));

					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
				$size="1024x960";
				
				for($num=1;$num<=$ll;$num++)
				{
					$interval=$num*3;
					
					//echo $imageFile;
				
					
					$cmd="$ffmpeg -i $name -an -ss $interval -s $size mul/$num.jpg";
					shell_exec($cmd);
					
		
				}
				$rootPath = realpath('C:\wamp\www\desktop\mul');

// Initialize archive object
$zip = new ZipArchive();
$zip->open('file.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();
				 
              
       ?>

<div class="w3-container">  <h2>Output</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p> <table cellpadding="20">
     
         <tr >
                <?php
				$a=0;
				for($num=1;$num<=$ll;$num++)
				{ 
				$a++;
				?>
					 <td><img src="mul/<?php echo $num.'.'.'jpg';?>" width="200" height="200"/></td>
                     <?php
					 if($a%4==0)
					 {
						 ?>
                         </tr>
                         <?php
					 }
				}
				?>
       </tr></table>
        <script>
		window.alert("Your Images Created");
		</script></p>
    </div>
 <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="one.jpg" download>
  <input style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" type="button" value=" Zip Download"/>
    </a>
     
    </footer>
</div>
       
        <?php
					
				}

	
  }
  

  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 else if($a==5)
  {
	  if(!isset($_POST['one']))
				{
					?>

<div class="w3-container"> 
 <h2>Input</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Please Choose Your file</h1>
    </header>

    <div class="w3-container">
      <p><br>
       <form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file_multi_video" class="btn btn-primary" accept="video/*" autoplay/>
<div style="margin: -36px 372px 23px"><label>Select Format</label>
<select name="e"> 
<option>---------</option>
    <option value="mp4">MP4</option>
     <option value="3gp">3GP</option>
      <option value="avi">AVI</option>
       <option value="ogg">OGG</option>
        <option value="wmv">WMV</option>
         <option value="flv">FLV</option>
          <option value="mxf">MXF</option>
          </select></div></p>
    </div>

</p>
    </div>

    <footer class="w3-container w3-blue">
      <h5><input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/> </form></h5>
    </footer>
  </div>
</div>

<?php
////////////////////////////////////////////// Change Format //////////////////////////////////////////////
				}
if(isset($_POST['one']))
				{
					$e=$_POST['e'];
					
					if (file_exists('video.mp4'))
					{
						
  $src='C:\wamp\www\desktop\video.mp4';
					unlink($src);
						}
						 
					
						
				
					//echo $e;
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
				$cmd="$ffmpeg -i $name -c:v h264   video.$e";
				$format="video".".".$e;
				//echo $format;
					if(!shell_exec($cmd))
					{
						
			?>
    
<div class="w3-container">  
<h2>Output</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p><iframe src="<?php echo $format;?>"  width="540" height="310"></iframe>
      <?php
      echo $format;?></p>
    </div>

  <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="<?php echo $format;?>" download>
     <input type="button" style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>
    
        <script>
		window.alert("Your Video Format Changed");
		</script>
        <?php
						
					}
					else
					{
						echo "Sorry";
					}
				}

	

  
  }
  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 else if($a==6)
  { if(!isset($_POST['one']))
				{?>

<div class="w3-container"> 
 <h2>Input</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Plaese Choose your Video</h1>
    </header>

    <div class="w3-container">
      <p>
       <form action="#" method="post" enctype="multipart/form-data"><br>
<br>
<input type="file" name="file" id="file_multi_video" style="background-color:#096;padding:20px 130px 20px 130px;border-radius:10px" accept="video/*" autoplay/>
      </p>
    </div>

    <footer class="w3-container w3-blue">
      <h5><input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/>
    </form></h5>
    </footer>
  </div>
</div>

<?php
////////////////////////////////////////////// Create audio from video //////////////////////////////////////////////
  }
if(isset($_POST['one']))
				{
					if (file_exists('output.mp3'))
					{
					$src='C:\wamp\www\desktop\output.mp3';
					unlink($src);
					}
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
				$cmd="$ffmpeg -i $name -vn -ab 320 output.mp3";
				
				
					if(!shell_exec($cmd))
					{	echo '<script type="text/javascript">',
     'jsfunction();',
     '</script>';
		?>
        <script>
		window.alert("Your Audio Created");
		</script>
        
<div class="w3-container">  <h2>Output</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p><br>
<br>
<br>
<audio controls poster="images/loading.gif">
  <source src="output.mp3" type="audio/mp3">
</audio>

<br>
</p>
    </div>
  <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="output.mp3" download>
     <input type="button" style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>
        
        <?php
					}
					else
					{
						echo "Sorry";
					}
				}

	
  }
  
  
  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 else if($a==7)
  { if(!isset($_POST['one']))
				{?>

<div class="w3-container"> 
 <h2>Input</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Plaese Select the Video..</h1>
    </header>

    <div class="w3-container">
      <p> <form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file_multi_video" class="btn btn-primary" accept="video/*" autoplay/></p>
    </div>

    <footer class="w3-container w3-blue">
   <input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/>
    </form>
    </footer>
  </div>
</div>

<?php
////////////////////////////////////////////// Know Duration//////////////////////////////////////////////
  }
if(isset($_POST['one']))
				{
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
				$a=$_FILES["file"]["name"];
			$cmd="$ffmpeg -i $name 2>&1";
				
				 $data['ff']=shell_exec($cmd);
					if($data['ff'])
					{
			
				preg_match('/Duration:([^,]+)/',$data['ff'],$matches);
				//echo $data['ff'];
				$duration=$matches[1];
				//echo $duration;
		?>
        
<div class="w3-container"> 
 <h2>Output</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p><br>
<br>
<center><h1>Duration=<?php echo $duration;?></h1></center><br>
<br>
</p>
    </div>

  </div>
</div>
				   <?php	}
					else
					{
						echo "Sorry";
					}
				}

	
  }
  
  
  
  
  

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////Coding for watermark///////////////////////////////////////
else if($a==8)
  { if(!isset($_POST['one']))
				{?>

<div class="w3-container">  <h2>Input</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Please Select The Video</h1>
    </header>

    <div class="w3-container">
      <p> <br>
<br>
<br>
<br>
<br>
<form action="#" method="post" enctype="multipart/form-data">
      <label><h4>Video&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></label><input type="file" name="file" id="file_multi_video" class="btn btn-primary" accept="video/*" autoplay/><br><br>


<label><h4>Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></label><input type="file" name="f"  class="btn btn-primary" accept="image/*" required/>
<br><br>


<label><h4>Select position</h4></label>
<select name="ch" class="btn btn-primary" >
   <option value="a">Top Left</option>
   <option value="b">Top Right</option>
  <!-- <option value="c">Bottom Left</option>
   <option value="d">Bottom Right</option>-->
   </select>
   </div>
      </p>
      <br>
<br>
<br>
<br>
<br>

    </div>

    <footer class="w3-container w3-blue">
      <h5><input type="submit"  class="btn btn-success" style="padding: 32px 86px 22px 88px; border-radius: 10px;margin: 26px 12px 23px;" name="one"/></form></h5>
    </footer>
  </div>
</div>


<?php
////////////////////////////////////////////// Coding for watermark //////////////////////////////////////////////
  }
if(isset($_POST['one']))
				{
					//exec("C:\wamp\www\desktop\1.bat");
				if (file_exists('watermark.mp4'))
					{
					$src='C:\wamp\www\desktop\watermark.mp4';
					unlink($src);
					}
//echo $s;
					$ffmpeg="C:\\wamp\\www\\desktop\\ffmpeg\\bin\\ffmpeg";
					//echo $ffmpeg;
					$name=$_FILES["file"]["tmp_name"];
					$image=$_FILES["f"]["tmp_name"];
					$ch=$_POST['ch'];
					$rr="";
					if($ch=='a')
					{
						$rr='20:20';
					}
					else if($ch=='b')
					{
						$rr='1200:20';
					}
					else if($ch=='c')
					{
						$rr='100:960';
					}
					else if($ch=='d')
					{
						$rr='1200:500';
					}
				$a=$_FILES["file"]["name"];
				$cmd="$ffmpeg -i $name -i $image -filter_complex overlay=$rr watermark.mp4";
				
					if(!shell_exec($cmd))
					{?>	
 
<div class="w3-container">  <h2>Output</h2> <p></p> <div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-blue">
      <h1>Preview</h1>
    </header>

    <div class="w3-container">
      <p>  <video width="100%"  controls>
  <source src="watermark.mp4" type="video/mp4" poster="images/loading.gif">
  
</video></p>
    </div>

  <footer class="w3-container w3-blue" style="background-color:#09F">
      <h5>DownLoad</h5>
          <a href="watermark.mp4" download>
     <input type="button" style="margin:-8px 0px 12px 901px;"  class="btn btn-warning" value="Download"/>
    </a>
     
    </footer>
  </div>
</div>
      
        <script>
		window.alert("Your Video Prepared");
		</script>
        <?php
					}
					else
					{
						echo "Sorry";
					}
				}

	
  }
  
  
  
  
  

/////////////////////////////////////////////////////////////Coding for watermark////////////////////////////////////////

?>
</div>
                           
                           
                           
                            <!-----====================================Ticket Generation===================------------------>
                           
                        </div>          
                    </div>
                 </div>
            </div>
        </section>
        <!--================End Static Area =================-->

<script type="text/javascript">
$(document).on("change", "#file_multi_video", function(evt) {
  var $source = $('#video_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});</script>

<script>
var vid = document.getElementById("video_here");

function getCurTime() { 
    var a=vid.currentTime;
	//document.getElementById("s").value = a;
	var date = new Date(null);
date.setSeconds(a); // specify value for SECONDS here
var timeString = date.toISOString().substr(11, 8);
document.getElementById("s").value = timeString;
} 
</script>
<script>
var vid = document.getElementById("video_here");
function getCurTime1() { 
    var a=vid.currentTime;
	//document.getElementById("s").value = a;
	var date = new Date(null);
date.setSeconds(a); // specify value for SECONDS here
var timeString = date.toISOString().substr(11, 8);
document.getElementById("t").value = timeString;
} 
</script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
