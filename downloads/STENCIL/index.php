<html>
<head>
<title>tritechsc.org/downloads</title>
<script type='text/javascript' src='jwplayer/jwplayer.js'></script>

<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#8d1af8;
font-family:"Arial","sans-serif";color:#700070;font-size:12px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#71b9cf;font-size:18px;}


a.menu {
font-family:"Arial","sans-serif";
font-size:18px;
font-size:1em;
color: #ffffff;
background-color: #8d1af8;
text-decoration:none;
border-color: #000000;
border-style:solid;
border-width:1px 0px 1px 0px; 

}

a.menu:hover {
font-family: arial, san-serif;
font-size:18px;
font-size:1em;
color: #8d1af8;
background-color: #fff;
text-decoration:none;
border-color: #000000;
border-style:solid;
border-width:1px 1px 1px 1px; 
}

#list{
text-align: left;
font-size:18px;
color: #ff0000;
position:absolute;
top: 15px;
left :50px;
width: 1000px;
height: 800px;
z-index:0;
}
#video-location{
text-align: left;
font-size:18px;
color: #8d1af8;
position:absolute;
top: 150px;
left :10px;
width: 680px;
height: 500px;
z-index:0;
}


}

</style>


</head>



<?php
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'" target = "_blank">'.$file.'</a>';
        }
    }
    closedir($handle);
    }
?>




<div id = "list">
<hr />
Open Source Downloads <br />
os = Open Source <br />
<a href = "http://opensource.org/"> Open Source Software</a>
<hr />
All files linked are OpenSource or 100% free.
<hr />
<p>Files:</p>
<ul>
<p><?php echo $thelist?></p>
</ul>
<hr />
To download a file "Right Click" then choose to save the selected file. (Windows)<br />
Using a Mac with a single button mouse "Control+Click" then choose to download the files.
<hr />
</div>
</body>
</head>
