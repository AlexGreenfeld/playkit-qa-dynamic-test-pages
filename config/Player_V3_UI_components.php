<?php
// *****************************Watermark ***************************
// image 
define("WMPlace", "15213699");
// placement
define("botRight", "bottom-right");
define("botLeft" , "bottom-left");
define("topRight", "top-right");
define("topLeft" , "top-left");


function UI_Components(){
	if ( $_GET['Watermark']=='on'){
		$watermark = Watermark(getWatermarkPlace());
	}else{
		$watermark = '';
	}

	if ( $_GET['iOSFull']=='on'){
		$iosFullscreen = iosFullscreen('true');
	}else{
		$iosFullscreen = iosFullscreen('false');
	}

	return "
	   ui: {
		 components: {
			$watermark $iosFullscreen
		  }
      }, 
	";
}

function iosFullscreen($state){
	return "
		fullscreen: {
			inBrowserFullscreenForIOS: $state
	  	},
	";
}

function Watermark($place){
	return "
		watermark: {
			img: 'http://www.kaltura.com/content/uiconf/kaltura/kmc/appstudio/kdp3/exampleWatermark.png',
			url: 'http://www.kaltura.com',
			timeout: 0,
			placement: '$place'
		},
	";
}

function getWatermarkPlace(){
	if (empty($_GET['WMPlace'])){
		$waterPlace = botRight;
	}else{
		$waterPlace = constant($_GET['WMPlace']);
		}
	return $waterPlace;
}
?>

