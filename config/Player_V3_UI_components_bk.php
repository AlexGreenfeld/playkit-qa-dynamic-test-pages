<?php
/***********************************************************************************************
*** Define UI components, such as watermark, iOS fullscreen etc'                             ***
*** Functions received values from GET and added relevant components to the player config    ***
*** The functions calling in body file                                                       ***
*** Created by Alex Greenfeld                                                                ***
************************************************************************************************/



// *****************************Watermark ***************************
// image 
define("WMPlace", "15213699");
// placement
define("botRight", "bottom-right");
define("botLeft" , "bottom-left");
define("topRight", "top-right");
define("topLeft" , "top-left");

// Adding UI components configuration to the page
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

	if ( $_GET['DisUI']=='on'){
		$chkDisUI = 'true';
	}else{
		$chkDisUI = 'false';
	}
	
	if ( $_GET['Share']=='on'){
		$socialNetworks = socialNetworks('true');
	}else{
		$socialNetworks = socialNetworks('false');
	}

	return "\n\t\t\t\t ui: {
		  \n\t\t\t\t disable: $chkDisUI,  
		     \t\tcomponents: {\n $watermark $iosFullscreen $socialNetworks
		  \t\t\t}
      \t\t\t }, 
	";
}

function iosFullscreen($state){
	return "\t\t\t\t\t fullscreen: {
			\t\t\t\t\t inBrowserFullscreenForIOS: $state
	  	\t\t\t\t},
	";
}

// Return Watermark configuration
function Watermark($place){
	return "\t\t\t\t\t\t watermark: {
				\t\t\t\t img: 'http://www.kaltura.com/content/uiconf/kaltura/kmc/appstudio/kdp3/exampleWatermark.png',
				\t\t\t\t url: 'http://www.kaltura.com',
				\t\t\t\t timeout: 0,
				\t\t\t\t placement: '$place'
				\t\t },
	";
}

// Return Watermark place
function getWatermarkPlace(){
	if (empty($_GET['WMPlace'])){
		$waterPlace = botRight;
	}else{
		$waterPlace = constant($_GET['WMPlace']);
		}
	return $waterPlace;
}

function socialNetworks($state){
	return "
		share: {
			//shareUrl: '...',
			//embedUrl: '...',
			enable: $state, //default is false
			enableTimeOffset: true, //default is false
	 	}
	";
}

?>

