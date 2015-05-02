<?PHP
	//place this script @ test/boudoir
	//lets test if this work on boudoir 
	//please add include ("loadimages.php"); on the middle of <ul data-cat="category 1"> but remove its content first.
	//ATM it only load the jpg files.. if you need other format please do tell.

	$path = dirname(__FILE__) . "/load/images/";
	$thumbpath = dirname(__FILE__) . "/load/thumbnails/";
	if($handle = opendir($path)){
		while(false !== ($file = readdir($handle))){
			if($file!="."&&$file!=".."){
				$tmp = explode(".",$file);
				if($tmp[1] == "jpg" || $tmp[1] == "png"){
					//get width
					list($width, $height, $type, $attr) = getimagesize($thumbpath . $file);
					//thumb 200
					if($width < 300){
						$i++;
					   $hor[$i] = "<ul>
							<li data-type=\"media\" data-url=\"load/images/".$tmp[0].".".$tmp[1]."\"></li>
							<li data-thumbnail-path=\"load/thumbnails/".$tmp[0].".".$tmp[1]."\"></li>
							<li data-thumbnail-text=\"ver\"></li>
						</ul>\n";
					}else{
						$j++;
						$ver[$j] = "<ul>
									<li data-type=\"media\" data-url=\"load/images/".$tmp[0].".".$tmp[1]."\"></li>
									<li data-thumbnail-path=\"load/thumbnails/".$tmp[0].".".$tmp[1]."\"></li>
									<li data-thumbnail-text=\"hor\"></li>
								</ul>\n";
					}
				}
			}
		}
	}
	$a = true;
	$i=1;
	$j=1;
	$alt = 0;
	while($a==true){
	$html = "";
		if($alt==0){
			for($i=$i;$i<=count($hor);$i++){
				echo $hor[$i];
				if($i%3==0){
					$i++;
					break;
				}
			}
			
			for($j=$j;$j<=count($ver);$j++){
				echo $ver[$j];
				if($j%2==0){
				$j++;
				break;
				}
			}
			$alt = 1;
		}else{
			for($j=$j;$j<=count($ver);$j++){
				echo $ver[$j];
				if($j%2==0){
				$j++;
				break;
				}
				for($i=$i;$i<=count($hor);$i++){
				echo $hor[$i];
				if($i%3==0){
					$i++;
					break;
				}
			}
			}
			
			
			$alt = 0;
		}
			if($i>=count($hor) && $j>=count($ver)){
			
				$a=false;
			}
	}
	
	
?>
	
