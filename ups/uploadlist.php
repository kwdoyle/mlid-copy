<script src="masonry.pkgd.min.js"></script>

<style>
.item { width: 25%; width:400px; height:140px; margin:10px; float:left; display:block;}
</style>

<body onload="loadMason()">
<?php

$dir = getcwd(); 
	//open dir 
	$x=0;
	if ($opendir = opendir($dir)) 
	{ 
		//read dir 
		while (($file = readdir($opendir)) !==FALSE) 
		{ 
			if ($file!="."&&$file!=".."&&(strrchr($file,'.')=='.jpg'||strrchr($file,'.')=='.jpeg'||strrchr($file,'.')=='.png'||strrchr($file,'.')=='.gif')){
				$ctime = filectime($file) . ',' . $file;
				$list[$ctime] = $file;
			}
		else
		{
			$c2time=filectime($file) . ',' . $file;
			$list2[$c2time]=$file;
		}}
		krsort($list);
		echo "<div id='container'>";
			foreach ($list as $value){
				if (filesize($value)<=1000000)
					echo "<div class='item'><a href='$value' border=0><img src='$value' style='max-width:100%;max-height:100%;'></a></div>";
			}
		echo "</div>";
		krsort($list2);
			foreach ($list2 as $value){
				echo "<br><a href='$value'>$value</a>";
			}
		}
?> 

<script>
function loadMason()
{
var container = document.querySelector('#container');
var msnry = new Masonry( container, {
  // options
  columnWidth: 200,
  itemSelector: '.item'
});
}
</script> 

</body>
