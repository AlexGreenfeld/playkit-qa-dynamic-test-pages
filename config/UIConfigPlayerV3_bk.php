
<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

/********************************************************************************************************************
*** This file creating the smart pages UI, includes the menu, player, display the player and plugins info, etc'   ***
*** Details:                                                                                                      ***
*** 1. Define classes for creating dropboxes, checkboxes, radiobuttons and textboxes                              ***
*** 2. Creating an elements objects, required for the page                                                        ***
*** 3. JavaScript functions for showing menu and other elements of the smart page                                 ***
*** 4. PHP echo includes calling to the function for creating menu options                                        ***
***  Created by Alex Greenfeld                                                                                    ***
*********************************************************************************************************************/ 



	// Define class for creating dropbox objects with following parameters: value , name of class, label - the text beside a dropbox
    class Option{
		public $value;
		public $className;
		public $label;
		public function  __construct($val,$className,$text) {
			$this->value = $val;
			$this->className = $className;
			$this->label = $text;
		}
    }
	
	// Define class for creating checkbox objects with following parameters: value , name of class, label - the text beside a checkbox
	class Checkbox{
		public $value;
		public $label;
		public $class;
		public function  __construct($val,$text,$class) {
			$this->value = $val;
			$this->label = $text;
			$this->class = $class;
		}
	}

	// Define class for creating radiobutton objects with following parameters: value , name - same for radiobuttons in group
	// label - the text beside a radiobutton, class, status - checked/unchecked
	class Radiobutton{
		public $value;
		public $label;
		public $name;
		public $class;
		public $status;
		public function  __construct($name,$val,$text,$class,$status) {
			$this->name  = $name;
			$this->value = $val;
			$this->label = $text;
			$this->class = $class;
			$this->status = $status;
		}
	}
	
	// Define class for creating textbox objects with following parameters: value, name, size of the text box
	class Textbox{
		public $name;
		public $value;
		public $size;
		public $class;
		public function  __construct($name,$value,$size,$class) {
			$this->name = $name;
			$this->value = $value;
			$this->size = $size;
			$this->class = $class;
		}
    }
	
	
	
	
	// *************** CDN URL options *****************************************************************************
	// Creating dropbox with available environments: testing, testing external, testing secure, production, production secure, invalid URL
	// Parameters: 1st - value that will moved in GET, 2nd - color of the option text, 3rd - the option text
	$environment_test =        new Option("test","limeGreen","Testing");
	$environment_testExt =     new Option("testExt","limeGreen","Testing External");
	$environment_testSec =     new Option("testSec","green","Testing secure");
	$environment_prod =        new Option("prod","dodgerBlue","Production");
	$environment_prodSec =     new Option("prodSec","blue","Production secure");
	$environment_invalid =     new Option("invalid","black","invalid URL");
	$environments =            array($environment_test, $environment_testExt, $environment_testSec, $environment_prod, $environment_prodSec, $environment_invalid);
	
	
	//**************** Partner ID ***********************************************************************************
	// Creating dropbox with available partner IDs: testing - 1091, ott - 198, testing drm - 4171, production - 1740481, production drm - 1804331
	// Parameters: 1st - value that will moved in GET, 2nd - color of the option text, 3rd - the option text
	$partnerId_test =          new Option("1091","limeGreen","1091 - testing regular");
	$partnerId_ott_test =      new Option("198","purple","198 - OTT testing");
	$partnerId_ott_prod =      new Option("3009","purple","3009 - OTT production");
	$partnerId_test_drm =      new Option("4171","green","4171 - testing DRM");
	$partnerId_prod =          new Option("1740481","dodgerBlue","1740481 - production regular");
	$partnerId_prod_drm =      new Option("1804331","blue","1804331 - production DRM");
	$partnerIds =              array($partnerId_test, $partnerId_test_drm, $partnerId_prod, $partnerId_prod_drm, $partnerId_ott_test, $partnerId_ott_prod);
	
	
	//**************** UI Conf IDs **********************************************************************************
	// Creating dropbox with available UI Confs
	// Parameters: 1st - value that will moved in GET, 2nd - color of the option text, 3rd - the option text
	$uiConfId_test =           new Option("testReg","limeGreen","15215933 - Testing");
	$uiConfId_test_latest =    new Option("testlatestReg","limeGreen","15215773 - Testing latest");
	$uiConfId_no_plug_test =   new Option("testNoPlug","limeGreen","15214756 - Testing no plugins");
	$uiConfId_test_ovp_youtube=new Option("testOvpOren","","15220044 - Testing OVP Youtube");
	$uiConfId_test_youbora =   new Option("testReg_youbora","red","15213618 - Testing - youbora team only");
    $uiConfId_test_drm =       new Option("testDrm","green","15213831 - Testing DRM");//
	$uiConfId_prod =           new Option("prodReg","dodgerBlue","42690372 - Production");
	$uiConfId_prod_latest =    new Option("prodlatest","dodgerBlue","42897261 - Production latest");
	$uiConfId_prod_drm =       new Option("prodDrm","blue","42699992 - Production DRM");
	$uiConfId_ott_test =       new Option("ott","purple","15213832 - OTT Testing");
	$uiConfId_ott_prod =       new Option("ottProd","purple","44323041 - OTT Production");
	$uiConfId_no_plug_ott =    new Option("ottNoPlug","purple","15216119 - OTT Testing no plugins");
//	$uiConfId_ott_prod =       new Option("ottProd","purple","42700261 - OTT production");
	$uiConfCustom =            new Option("cust","green","Custom...");
	$uiConfIds =               array($uiConfId_test, $uiConfId_test_latest, $uiConfId_no_plug_test, $uiConfId_test_youbora, $uiConfId_test_drm, $uiConfId_prod, $uiConfId_prod_latest, $uiConfId_prod_drm, $uiConfId_ott_test, $uiConfId_no_plug_ott, $uiConfId_ott_prod, $uiConfCustom);

//	$uiConfIds = uiConfList();
	$uiConfIdOvpTest = 	array($uiConfId_test, $uiConfId_test_latest, $uiConfId_no_plug_test, $uiConfId_test_studio, $uiConfId_test_ovp_cc, $uiConfId_test_youbora);
	$uiConfIdOttTest = 	array($uiConfId_test_ott_cc, $uiConfId_no_plug_ott, $uiConfId_ott_test, $uiConfId_ott_prod);
	$uiConfIdDrm =  	array($uiConfId_test_drm);
	$uiConfIdProd =   	array($uiConfId_prod, $uiConfId_prod_latest);
	$uiConfIdProdDrm = 	array($uiConfId_prod_drm);


	
	//**************** Entry IDs ************************************************************************************
	// Creating dropbox with available Entries IDs
	// Parameters: 1st - value that will moved in GET, 2nd - color of the option text, 3rd - the option text
	$entryId_empty =           new Option("empty","limeGreen","0_wifqaipd: default entry");
	$entryId_acssContUnDom =   new Option("tstAcConUnDom","limeGreen","0_18w3samm: Access control-Unautorized Domain");
	$entryId_testBasic =       new Option("tstBasic","limeGreen","0_wifqaipd: basic vod - testing");
	$entryId_testSintel =      new Option("tstSintel","limeGreen","0_creai7om: Sintel - testing");
	$entryId_testBP =     	   new Option("tstbp","limeGreen","0_tvhgji01: basic2 vod - testing");
	$entryId_testLong =        new Option("tstLong","limeGreen","0_4ktof5po: long vod - testing");
	$entryId_testNoCap =       new Option("tstNoCap","limeGreen","0_8m28fcj9: vod no captions- testing");
	$entryId_testABR =         new Option("tstAbr","limeGreen","0_wu32qrt3: ABR - testing");
	$entryId_testManSwitch =   new Option("tstManSw","limeGreen","0_clvqgcxy: Manual switch - testing");
	$entryId_testCapAud =      new Option("tstCapAud","limeGreen","0_df8g87v8: cap/multAud(Disney) - testing");
	$entryId_testEngCapDef =   new Option("tstEngCapDef","limeGreen","0_x8n0mub7: default Eng captions - testing");
	$entryId_testCapDef =      new Option("tstCapDef","limeGreen","0_ibls79gu: def captions Ger - testing");
	$entryId_testCapStyle =    new Option("tstCapStyle","limeGreen","0_e0hrp0mt: Captions styling - testing");
	$entryId_testCapCaption =  new Option("tstCapCapt","limeGreen","0_qq9jh1i3: CAP captions - testing");
	$entryId_testMultiCaption= new Option("tstMultiCapt","limeGreen","0_hut6q26s: Multi Captions Languages - testing");
	$entryId_testDFXPCap =     new Option("tstDfxpCap","limeGreen","0_v779yrzt: DFXP Captions - testing");
	$entryId_testAud =         new Option("tstAud","limeGreen","0_ttfy4uu0: multAud(it/en/ru) - testing");
	$entryId_testAudEnt =      new Option("tstAudEnt","limeGreen","0_12xzpcxr: audio entry - testing");
	$entryId_testAudEnt2 =     new Option("tstAudEnt2","limeGreen","0_p8aigvgu: audio entry 2 - testing");
	$entryId_testQRCode15 =    new Option("tstQr15","limeGreen","0_k1yesaha: QR Code 15min - testing");
	$entryId_testYoutbHobbit = new Option("tstYoutube1","GreenYellow","0_m0vc6n31: Youtube: Hobbit - testing");
	$entryId_testYoutbLord =   new Option("tstYoutube2","GreenYellow","0_k8ifo4xm: Youtube: Lord of the rings - testing");
	$entryId_testDrm =         new Option("tstDrm","green","0_2jiaa9tb: DRM - testing");
	$entryId_testFair =        new Option("tstFairplay","green","0_4s6xvtx3: Fairplay - testing");
	$entryId_testDrmAbr =      new Option("tstDrmAbr","green","0_7o8zceol: DRM ABR - testing");
	$entryId_testDrmQr15m =    new Option("tstDrmQr15m","green","0_pfm0w31u: DRM QR Code 15min - testing");
	$entryId_testDrmQr10s =    new Option("tstDrmQr10s","green","0_002sdr66: DRM QR Code 10sec - testing");
	$entryId_prodBasic =       new Option("prBasic","dodgerBlue","1_kbyh1guy: basic vod - prod");
	$entryId_prodCap =         new Option("prCap","dodgerBlue","1_av4ptxvx: captions vod - prod");
	$entryId_prodAud =         new Option("prAud","dodgerBlue","1_1tvsf9ru: multiaudio vod - prod");
	$entryId_prodDrm =         new Option("prDrm","blue","1_r62g23gz: DRM - prod");
	$entryId_prodFairPlay =    new Option("prFair","blue","1_etkmak5i: Fairplay - prod");
	$entryId_testKltLive =     new Option("tstKlive","limeGreen","0_f8re4ujs: Kaltura Live no DVR - testing");
	$entryId_testKltLiveDvr =  new Option("tstKliveDvr","limeGreen","0_nwkp7jtx: Kaltura Live with DVR - testing");
	$entryId_testUniLive =     new Option("tstUlive","limeGreen","0_uwai8bwr: Universal Live no DVR - testing");
	$entryId_testUniLiveDvr =  new Option("tstUliveDvr","limeGreen","0_popae503: Universal Live with DVR - testing");
	$entryId_testTrtLive =     new Option("tstTrtLive","limeGreen","0_3n2hernr: TRT World External Live - testing");
	$entryId_testWnIntSrcLive= new Option("tstWnIntSrc","limeGreen","0_fdb6sbgm: WhetherNation Live internal - testing");
	$entryId_testDayStar =     new Option("tstDayStar","limeGreen","0_3n2hernr: TRT External Live - testing");
	$entryId_testInterTv =     new Option("tstInter","limeGreen","0_dfail5wb: Inter TV Live - testing");
	$entryId_prodKltLiveDvr =  new Option("prodKLiveDvr","dodgerBlue","1_fdv46dba: Kaltura Live with - DVR prod");
	$entryId_prodKltLiveDrm =  new Option("prodKLiveDrm","dodgerBlue","1_6vjig5vg: Kaltura Live DRM - prod");
	$entryId_prodWhetherNat  = new Option("prodWNLive","dodgerBlue","0_3ai9qbgy: Whether Nation Live - prod");
	$entryId_10SecQrMidRight = new Option("10QrMidRight","red","0_yzkvj5qp: 10sec QR mid right - auto");
	$entryId_30SecQrMidRight = new Option("30QrMidRight","red","0_y8an8mze: 30sec QR mid right - auto");
	$entryId_30SecQr =         new Option("30SecQr","red","0_l55rpce1: QR Code 30 sec - auto");
	$entryId_60SecQr =         new Option("60SecQr","red","0_pueqvb6y: QR Code 60 sec - auto");
	$entryId_60SecQrTxt =      new Option("60SecQrTxt","red","0_y3kjob5z: QR Code 60 sec with text - auto");
	$entryId_ottLongVod =      new Option("ottLongVod","purple","259153 - OTT long VOD (51:30)");
	$entryId_ottVod =      	   new Option("ottVod","purple","258459 - OTT VOD - 360 config (37:17)");
	$entryId_ottExtLive =  	   new Option("ottExtLive","purple","276507 - OTT Whether Nation Live");
	$entryId_ottDrm =      	   new Option("ottDrm","purple","460627 - OTT Dash DRM");
	$entryId_ottProd1 =        new Option("ottProd1","purple","548569 - OTT production 1");
	$entryId_testExoplan360 =  new Option("tstExo360","black","0_d8u8u878 - Exoplanet 360");
	$entryId_testAirbus360 =   new Option("tstAir360","black","0_dod3wrta - Airbus 360");
	$entryId_testStarWars360 = new Option("tstStar360","black","0_20ul8164 - StarWars 360");
	$entryId_testWild360 =     new Option("tstWild360","black","0_xjjki1id - Wild 360");
	$entryId_testSkyDive360 =  new Option("tstSky360","black","0_od42vb2y - Sky Dive 360");
	$entryId_prod360 =         new Option("pr360","dodgerBlue","1_ppzfk01p: 360 vod - prod");
	$entryId_prodYoutube =     new Option("prYoutube","dodgerBlue","1_wbiziece: Youtube - prod");
	$entryId_audioDefCaption = new Option("audDefCap","limeGreen","0_rujs51rc: Audio def caption - testing");
	$entryId_audioNoDefCapt =  new Option("audNoDefCap","limeGreen","0_r1jgnbku: Audio no def caption - testing");
	$entryId_Custom =          new Option("cust","green","Custom...");
//	$entryId_testDrm360 =      new Option("tstDrm360","black","0_nq4v8mc2 - DRM 360 (no supported)");

	$entriesId =  array($entryId_empty, $entryId_acssContUnDom, $entryId_testBasic, $entryId_testSintel, $entryId_testBP, $entryId_testLong, $entryId_testNoCap, $entryId_testABR, $entryId_testManSwitch, $entryId_testCapAud, $entryId_testEngCapDef, $entryId_testCapDef, $entryId_testCapCaption, $entryId_testMultiCaption, $entryId_testDFXPCap, $entryId_testAud, $entryId_testAudEnt, $entryId_testAudEnt2, $entryId_audioDefCaption, $entryId_audioNoDefCapt, $entryId_testYoutbHobbit, $entryId_testYoutbLord, $entryId_testDrm, $entryId_testFair, $entryId_testDrmAbr, $entryId_testDrmQr15m, $entryId_testDrmQr10s, $entryId_prodBasic, $entryId_prodCap, $entryId_prodAud, $entryId_prodDrm, $entryId_prodFairPlay, $entryId_testKltLive, $entryId_testKltLiveDvr, $entryId_testUniLive, $entryId_testUniLiveDvr, $entryId_testDayStar, $entryId_testInterTv, $entryId_prodWhetherNat, $entryId_prodKltLiveDvr, $entryId_prodKltLiveDrm, $entryId_10SecQrMidRight, $entryId_30SecQrMidRight, $entryId_30SecQr, $entryId_60SecQr, $entryId_ottLongVod, $entryId_ottVod, $entryId_ottExtLive, $entryId_ottDrm, $entryId_ottProd1, $entryId_testExoplan360, $entryId_testAirbus360, $entryId_testStarWars360, $entryId_testWild360, $entryId_prodYoutube, $entryId_testSkyDive360, $entryId_prod360, $entryId_Custom);

/*

**
<script type="test/javascript">

function uiConfList(){	
		var selectedOption;
		selectedOption = document.getElementById("chkPartner").value;
						
			if (selectedOption ==1091){
				$uiConfList = $uiConfIdOvpTest;
			}else if (selectedOption ==198){
				$uiConfList = $uiConfIdOttTest;
				}else if (selectedOption ==4171){
						$uiConfList = $uiConfIdDrm;
					}else if (selectedOption ==1740481){
							$uiConfList = $uiConfIdProd;
						}else if (selectedOption ==1804331){
								$uiConfList = $uiConfIdProdDrm;
							}else{
								$uiConfList = $uiConfIds;
							}
								
							return $uiConfList;
						}
</script>				
	
function StreamList(){
		if ($_GET[partnerId]=='1091'){
			$entriesId =  array($entryId_empty, $entryId_testBasic, $entryId_testLong, $entryId_testNoCap, $entryId_testABR, $entryId_testManSwitch, $entryId_testCapAud, $entryId_testEngCapDef, $entryId_testCapDef, $entryId_testCapCaption, $entryId_testMultiCaption, $entryId_testAud, $entryId_testAudEnt, $entryId_testAudEnt2, $entryId_testKltLive, $entryId_testKltLiveDvr, $entryId_testUniLive, $entryId_testUniLiveDvr, $entryId_testExtLive, $entryId_testExtLiveCapt, $entryId_testWnIntSrcLive, $entryId_testCarbonLive, $entryId_testExtLiveAbc, $entryId_test1TVRusLive, $entryId_testMatchTv, $entryId_testExoplan360, $entryId_testAirbus360, $entryId_testStarWars360, $entryId_testWild360, $entryId_testSkyDive360, $entryId_10SecQrMidRight, $entryId_30SecQrMidRight, $entryId_30SecQr, $entryId_60SecQr,);
		}else{
			if ($_GET[partnerId]=='198'){
				$entriesId =  array($entryId_ottLongVod, $entryId_ottVod, $entryId_ottExtLive, $entryId_ottDrm);
				}else{
					if ($_GET[partnerId]=='4171'){
						$entriesId =  array($entryId_testDrm, $entryId_testFair, $entryId_testDrmAbr, $entryId_testDrm360);
					}else{
						if ($_GET[partnerId]=='1740481'){
							$entriesId =  array($entryId_prodBasic, $entryId_prodCap, $entryId_prodAud, $entryId_prodKltLiveDvr, $entryId_prodKltLiveDrm, $entryId_prod360);
						}else{
							if ($_GET[partnerId]=='1804'){
								$entriesId =  array($entryId_prodDrm, $entryId_prodFairPlay)
							}		
			
	return $entriesId;
}

*/

	//**************** Components versions ***************************************************************************
	/* Components dropbox includes list of the playkit components */
	$noVersion =              new Option("","black","");
	$playerOvpVersion =       new Option("kaltura-ovp-player","black","OVP Player");
	$playerOttVersion =       new Option("kaltura-ott-player","black","OTT Player");
	$imaVersion =             new Option("playkit-ima","black","IMA");
	$imaDaiVersion =          new Option("playkit-ima-dai","black","IMA-DAI");
	$bumperVersion =          new Option("playkit-bumper","black","Bumper");
	$vrVersion =              new Option("playkit-vr","black","VR");
	$youtubeVersion =         new Option("playkit-youtube","black","Youtube");
	$comscoreVersion =        new Option("playkit-comscore","black","Comscore");
	$googleAnalytVersion =    new Option("playkit-google-analytics","black","Google analytics");
	$youboraVersion =         new Option("playkit-youbora","black","Youbora");
	$flashVersion =           new Option("playkit-flash","black","Flash");
	$castSenderVersion =      new Option("playkit-cast-sender","black","Cast sender");


	$componentsList =         array($noVersion, $playerOvpVersion, $playerOttVersion, $imaVersion, $imaDaiVersion, $bumperVersion, $vrVersion, $youtubeVersion, $comscoreVersion, $googleAnalytVersion, $youboraVersion, $flashVersion, $castSenderVersion);
	/* Textbox - inserting some versions for selected component in the dropbox */
	$compVersion =            new Textbox("compVer","","3","versions");
	
	//**************** Log level **************************************************************************************
	/* Creating radio buttons for different log levels: Trace, Debug, Info, Warning, Error
	Parameters: 1 - name of a radio button - should be same for a group, in order one only will be checked, 2 - value that will moved in GET,
	3 - text beside a radio button, 4 - class name, 5 - checked or empty if unchecked by default */
	$chkTrace = 			 new Radiobutton("logs","trace","Trace","logLevel","");
	$chkDebug = 			 new Radiobutton("logs","deb","Debug","logLevel","checked");
	$chkInfo = 			  	 new Radiobutton("logs","inf","Info","logLevel","");
	$chkWarning = 			 new Radiobutton("logs","warn","Warning","logLevel","");
	$chkError = 			 new Radiobutton("logs","err","Error","logLevel","");
	
	
	//**************** Playlist **************************************************************************************
	/* Creating checkboxes for playlist configuration
	Parameters: 1st - value that will moved in GET, 2nd - a text beside a checkbox, 3rd - class name */

	$plLstByEntryIds = 	     new Checkbox("plLstEntId","Playlist by entry IDs","playlist"); // Playlist by Enrtry IDs list
	$plLstByPlaylistIds = 	 new Checkbox("plLstPlLstId","Playlist by Playlist ID","playlist"); // Playlist by Playlist ID
	$plLstAutoCont = 	     new Checkbox("plLstAutoCont","Auto continue","playlist"); // Auto continue
	$plLstLoop = 	         new Checkbox("plLstLoop","Loop","playlist"); // Playlist Loop
	$countDownShow = 	     new Checkbox("cntDwn","Show countdown","playlist"); // Show countdown
	
	// Text boxes for inserting playlist configuration; parameters: 1 - value that will moved in GET, 2 - text into the textbox (optional), 3 - the text box length 
	//inserting entries list ,separated by commas
	$entriesList       =     new Textbox("pllstByEntId","","30","playlist"); 
	//Inserting Playlist ID
	$playlistId        =     new Textbox("pllstId","","10","playlist");
    //Time to show next media poster in the right bottom corner, 2nd parameters - time to show from beginning
	$countDownTimeShow =     new Textbox("cntDwnTTS","","4","playlist");
	//display countdown timer , 2nd parameter - how seconds to show the timer before the media finished
	$countDownDuration =     new Textbox("cntDwnDur","","4","playlist");

	//***************** Stream priority ******************************************************************************
	
	//********************************* Format ******************************************
	/* Stream priority dropboxes, available types: hls/dash/progressive
	   Parameters: 1st - value that will moved in GET, 2nd - color of the text, 3rd - the text in option field */
	//$stPr_def =                new Option("","black","");
	$str_def =                 new Option("","black","");
	$stPr_hls =                new Option("hls","black","HLS");
	$stPr_dash =               new Option("dash","black","DASH");
	$stPr_mp4 =                new Option("progressive","black","MP4");
	$streamPriorityHls =       array($str_def,$stPr_hls, $stPr_dash, $stPr_mp4);
	$streamPriorityDash =      array($str_def,$stPr_dash, $stPr_hls, $stPr_mp4);
	$streamPriorityMp4 =       array($str_def,$stPr_mp4, $stPr_hls, $stPr_dash);

	//*********************************** Engine ******************************************
	/* Stream priority dropboxes, available types: hls/dash/progressive
	   Parameters: 1st - value that will moved in GET, 2nd - color of the text, 3rd - the text in option field  */
	$eng_html =         new Option("html","black","HTML");
	$eng_flash =        new Option("flash","black","FLASH");
	$eng_youtube =      new Option("youtube","black","YOUTUBE");
	$engine =           array($eng_html, $eng_flash,$eng_youtube);
		
	
	//*********************************** Explicit captions *******************************
	/* Text subtitles dropbox, includes the list of available text languages and "auto" option
	   Parameters: 1st - value that will moved in GET, 2nd - color of the text, 3rd - the text in option field */
	$explCaptDef =             new Option("default","black","");
	$explCaptAuto =            new Option("auto","black","Auto");
	$explCaptEng =             new Option("eng","black","English");
	$explCaptDutch =           new Option("nld","black","Dutch");
	$explCaptRus =             new Option("rus","black","Russian");
	$explCaptHeb =             new Option("heb","black","Hebrew");
	$explCaptSpa =             new Option("esp","black","Spanish");
	$captions =                array($explCaptDef, $explCaptAuto, $explCaptEng, $explCaptDutch, $explCaptRus, $explCaptHeb, $explCaptSpa);
	$chkAutoExtCaptions =      new Checkbox("aecEnb","Auto External Captions","captions");
	
 
	//***************************** External captions ****************************************
	$externalCapHeb =          new Checkbox("extHeb","Hebrew","captions");
	$externalCapJap =          new Checkbox("extJap","Japanese","captions");
	$externalCapRus =          new Checkbox("extRus","Russian","captions");

	$isCapHebDefault =          new Checkbox("extHebDef","","captions");
	$isCapJapDefault =          new Checkbox("extJapDef","","captions");
	$isCapRusDefault =          new Checkbox("extRusDef","","captions");
		
	
	//***************************** Audio tracks *******************************************************
	/* Audio languages dropbox, includes the list of available audio languages
	   Parameters: 1st - value that will moved in GET, 2nd - color of the text, 3rd - the text in option field */
	$audioDef =                new Option("default","black","");
	$audioEng =                new Option("eng","black","English");
	$audioDutch =              new Option("nld","black","Dutch");
	$audioRus =                new Option("rus","black","Russian");
	$audioHeb =                new Option("heb","black","Hebrew");
	$audioSpa =                new Option("esp","black","Spanish");
	$audioIta =                new Option("ita","black","Italian");
	$audioTracks =             array($audioDef, $audioEng, $audioDutch, $audioRus, $audioHeb, $audioSpa, $audioIta);
	
	
	//**************** Playback options checkboxes ****************************************************************
	/* Creating checkboxes for playback options: load old config, preload, loppback, autoPlay, muted, allow muted autoPlay, use native text track, plays inline(iPhone), enable live DVR
	   Parameters: 1st - value that will moved in GET, 2nd - a text beside a checkbox, 3rd - class name */
	$chkNewPlayerConf = 	   new Checkbox("newConf","Load with old player configuration structure","playerOptions");
    $chkPreLoad = 			   new Checkbox("preEnb","Preload","playerOptions");
	$chkLoopBack = 			   new Checkbox("loopEnb","Loopback","playerOptions");
	$chkAutoPlay =             new Checkbox("autoPlay","Auto Play","playerOptions");
	$chkMuted =                new Checkbox("muted","Muted","playerOptions");
	$chkMutedAutoPlay =        new Checkbox("MutAutPl","Allow muted Auto play","playerOptions");
	$chkNativeTxtTrack =       new Checkbox("natTxtTr","Use native text track","playerOptions");
	$chkPlaysInline =          new Checkbox("plIn","Plays Inline (iPhone only)","playerOptions");
	$chkIosFullscreen =        new Checkbox("iOSFull","iOS Fullscreen","playerOptions");
	$chkDvr =    			   new Checkbox("Dvr","Enable Live DVR","playerOptions");
	// Text box for inserting start position value in seconds, by default = 0 (2nd parameter)
	$startPosition =           new Textbox("strPos","0","4","playerOptions");
	$forceRedExtStream =       new Checkbox("frcExtStr","Force redirect external stream","playerOptions");


	//***************** Advertisiments *****************************************************************************
	//Creating checkbox for enable/disable IMA plugin, disable when checked
	$imaDis =                  new Checkbox("imaDis","Disable IMA","advertisiment");

	//Creating checkbox for enable/disable IMA plugin, disable when checked
	$enbImaPreload =           new Checkbox("imaPre","Enable preload","advertisiment");

	/* Advertisiments dropbox, includes the list of available advertisiments
	   Parameters: 1st - value that will moved in GET, 2nd - color of the text, 3rd - the text in option field */
	$noAd =                    new Option("noAd","black","","Default");
	$emptyAdTag=			   new Option("emptyAdTag","black","Empty Ad Tag");
	$VAMPAdsPlaylistWithSkip = new Option("VAMPAdsPlaylistWithSkip","black","VAMP ads playlist with skip");
	$preWithoutSkip =          new Option("preWithoutSkip","black","Preroll without skip");
	$longPreSkip =  		   new Option("longPreSkip","black","Long preroll with skip");
	$preWithSkip =             new Option("preWithSkip","black","Preroll with skip");
	$redirectLinear =          new Option("redLin","black","Redirect Linear");
	$redirectError =           new Option("redErr","black","Redirect Error");
	$redirectBrokFall =        new Option("redBrFall","black","Redirect Broken Fallback");
	$nonLinear =               new Option("noLin","black","Non Linear");
	$smallNonLinear =          new Option("smNoLin","black","Small Non Linear");
	$vmapPreroll =             new Option("vmPre","black","VMAP Preroll");
	$vmapPrerollBumper =       new Option("vmPreBum","black","VMAP Preroll Bumper");
	$vmapPostroll =            new Option("vmPost","black","VMAP Postroll");
	$vmapPostrollBumper =      new Option("vmPostBum","black","VMAP Postroll Bumper");
	$vmapPreMidPost =          new Option("vmPreMidPost","black","VMAP Pre-Mid-Post roll");
	$vmapPreMidStPost =        new Option("vmPreMidStPost","black","VMAP Pre-3 Standard Mid-Post roll");
	$vmapPreMidOpPost =        new Option("vmPreMidOpPost","black","VMAP Pre-3 Optimized Mid-Post roll");
	$vmapPreMidStPostBumper =  new Option("vmPreMidStPostBum","black","VMAP Pre-3 Standard Mid-Post roll bumper");
	$vmapPreMidOpPostBumper =  new Option("vmPreMidOpPostBum","black","VMAP Pre-3 Optimized Mid-Post roll bumper");
	$vmapPre10MidPost =        new Option("vmPre10MidPost","black","VMAP Pre-10 Mid-Post roll");
	$preCompanions =           new Option("preWithComp","black","Preroll with companions");
	$vmapMidPost =        	   new Option("VmapMidPost","black","Custom: VMAP Mid-Post rolls - skip");
	$prePod3 =          	   new Option("VastPrePod3","black","Custom: Vast 3 Preroll pod - skip");
	$prePod1 =          	   new Option("VastPrePod1","black","Cusotm: Vast 3 Preroll pod - 2nd broken");
	$vast3redirects =          new Option("Vast3Redirect","black","Vast Preroll - 3 redirects");
	$vast5redirects =          new Option("Vast5Redirect","black","Vast Preroll - 5 redirects");
	$advertisiments =          array($noAd, $emptyAdTag, $VAMPAdsPlaylistWithSkip, $preWithoutSkip, $longPreSkip, $preWithSkip, $redirectLinear, $redirectError, $redirectBrokFall, $nonLinear, $smallNonLinear, $vmapPreroll, $vmapPrerollBumper, $vmapPostroll, $vmapPostrollBumper, $vmapPreMidPost, $vmapPreMidStPost, $vmapPreMidOpPost, $vmapPreMidStPostBumper, $vmapPreMidOpPostBumper, $vmapPre10MidPost, $preCompanions, $vmapMidPost, $prePod3, $prePod1, $vast3redirects, $vast5redirects);
	
	/* Play Ad after specific time, configured in seconds, so when insert 20 second, pre-roll Ad and mid-roll on 15th seconds will be skiped
	   2nd parameter - time in seconds, empty by default */
	$playAdsAfterTime =         new Textbox("adAftTime","","4","advertisiment");

	/*the maximum number of redirects before the subsequent redirects will be denied, and the ad load aborted */
	$numOfAdsRedirects =        new Textbox("numRedirects","","2","advertisiment");


    //***************************** DAI advertisiments *******************************************************
	//Creating checkbox for enable/disable IMA plugin, disable when checked
	$daiDis =                  new Checkbox("daiDis","Disable DAI","advertisiment");
    /* Dai sources  */
	$daiEmpty =                 new Option("noDai","black","");
	$daiVodHls =                new Option("daiHls","black","VOD HLS");
	$daiVodDash =               new Option("daiDash","black","VOD DASH");
	$daiLive =                  new Option("daiLive","black","Live HLS");
	$daiErr =                   new Option("daiErr","black","DAI Error");
	$daiSources =               array($daiEmpty, $daiVodHls, $daiVodDash, $daiLive, $daiErr);

	//***************************** Bumpers *******************************************************
	//Creating checkbox for enable/disable Bumper plugin, disable when checked
	$bumpDis =                  new Checkbox("bumpDis","Disable bumper","advertisiment");
	
	//Creating checkbox for enable/disable clickthrough option, enable when checked
	$bumpClick =                new Checkbox("bumpClick","ClickThrough","advertisiment");
	
    //Creating checkbox for enable/disable media preload, media preload disabled when checked
	$disPreload =                new Checkbox("disMedPre","Disable media preload","advertisiment");
	
	//Creating checkbox for enable bumper preload, false by default - when unchecked
	$enablePreload =           new Checkbox("enbPre","Preload","advertisiment");

	/* Bumper medias */
	$noBumper =                 new Option("noBump","black","");
	$bumperKMC =                new Option("kmcBump","black","KMC - 8 sec");
	$bumperCatMirror =          new Option("catBump","black","Cat and mirror - 30 sec");
	$bumpers =                  array($noBumper, $bumperKMC, $bumperCatMirror);

	/* Bumper position */
	$defBumperPos =              new Option("defBump","black","");
	$preBumper =                 new Option("preBump","black","Before media");
	$postBumper =                new Option("postBump","black","After media");
	$bumpPosition =                   array($defBumperPos, $preBumper, $postBumper);

	//**************** Plugins **************************************************************************************
	/* Creating checkboxes for different plugins, such as analytics, VR video, chromecast
	   Parameters: 1st - value that will moved in GET, 2nd - a text beside a checkbox, 3rd - class name */
	$chkYoubora = 	  new Checkbox("Youbora","Youbora","plugins");
	$youboraDis = 	  new Checkbox("youbDis","Disable Youbora","plugins");
	$chkKava = 		  new Checkbox("Kava","Kava custom params","plugins");
	$kavaDis = 		  new Checkbox("kavaDis","Disable Kava","plugins");
	$chkGA = 		  new Checkbox("GA","Google analytics","plugins");
	$GAdis = 		  new Checkbox("gaDis","Disable GA","plugins");
	$chkComscore =    new Checkbox("Comscore","Comscore","plugins");
	$comscDis =       new Checkbox("comscDis","Disable Comscore","plugins");
	$VrDis =          new Checkbox("VrDis","Disable VR mode","plugins");
	$chkVRTS =    	  new Checkbox("VRTS","ToggleStereo","plugins");
	$chkVRSIS =    	  new Checkbox("VRSIS","StartInStereo","plugins");
	$chkCC =          new Checkbox("ccEnb","ChromeCast Sender","plugins");
			

  //******* Automation **********/
  $automationDefault = new Option("0","black","");
  $automation1 = new Option("1","black","Player - pause after 10 sec - seek after 20 sec to 10 sec from the end");
  $automationOptions = array($automationDefault,$automation1);	
	

	//****************** UI components *******************************************************************
	/* Creating checkboxes for UI components: Watermark, iOS fullscreen, Disable UI
	   Parameters: 1st - value that will moved in GET, 2nd - a text beside a checkbox, 3rd - class name */
	$chkWatermark =       new Checkbox("Watermark","Watermark","uiComponents");
	$chkDisableUi =       new Checkbox("DisUI","Disable UI","uiComponents");
	$chkSocialNet =       new Checkbox("Share","Social networks","uiComponents");
        $chkLogo =            new Checkbox("Logo","Logo","uiComponents");


	//****************** Change Media **********************************************************************
	/* Creating chekcbox for enable/disable change media feature, unchecked by default - disabled*/
	$chkChangeMedia =     new Checkbox("chgMedia","Enable","environment");

	//****************** OTT *****************************************************************************
	/* Creating checkboxes for OTT components: OTT analytics, logged user, disable ott analytics events
	   Parameters: 1st - value that will moved in GET, 2nd - a text beside a checkbox, 3rd - class name */
	$chkOttAnalytics = new Checkbox("ottAnalyt","OTT analytics","ott");
	$ottDis =          new Checkbox("ottDis","Disable OTT analytics","ott");
	$chkOttlogged =    new Checkbox("ottLog","OTT logged user (Anonymus by default)","ott");
	$disMediaMark =    new Checkbox("disMedMark","Disable Media Mark","ott");
	$disMediaHit =     new Checkbox("disMedHit","Disable Media Hit","ott");
	
	//****************** Watermark placement ***********************************************************************
	/* Advertisiments dropbox, includes the list of available watermark positions
	   Parameters: 1st - value that will moved in GET, 2nd - color of the text, 3rd - the text in option field
	   First option is default */
	$watermark_def          = new Option("","black","");
	$watermark_top_left     = new Option("topLeft","black","top-left");
	$watermark_top_right    = new Option("topRight","black","top-right");
	$watermark_bottom_left  = new Option("botLeft","black","bottom-left");
	$watermark_bottom_right = new Option("botRight","black","bottom-right");
	$watermarkPlace = array($watermark_def, $watermark_bottom_right, $watermark_bottom_left, $watermark_top_left, $watermark_top_right);

	// The function received options array and options name - return the array with selected option
	/* Options array - list of available options for specific category
	   Options name - the text beside the drop box */
	function optionsMakerWithSelected($optArray,$optName){
		$optionsString = '';
	
		foreach($optArray as $arr){
			$selectedText = '';
			if ( $_GET[$optName]== $arr->value){
				$selectedText = 'selected';
			}
			 $optionsString = $optionsString . '<option ' .$selectedText. ' value="' .$arr->value. '" class="' .$arr->className. '">' .$arr->label. '</option>';
		}
		return $optionsString;
	}
	
	// The function received checkbox object and return it with 'checked' attribute
	/* chkName - Checkbox object includes name, id and class of the checkbox
	   Optional - optional attribute, may be checked/unchecked */ 
	function checkBoxChecked($chkName, $optional){
		$checkBoxString = '';
		$chkText = '';
			if ( $_GET[$chkName->value]== 'on'){
				$chkText = 'checked';
			}
			 $checkBoxString = $checkBoxString . '<input ' .$chkText. ' type="checkbox" id="' .$chkName->value. '" name="' .$chkName->value. '" class="' .$chkName->class. '" ' . $optional . '>' .$chkName->label. ' ';
		
		return $checkBoxString;
	}

	/* The function received textbox object and create it on the screen with name, text and size
	   txtBoxName - text box object, includes name, ID, size and text in the box (optional) */
	function textBoxMaker($txtBoxName){
		$textBoxString = '';
		$textBoxString = $textBoxString . '<input type="text" id="'.$txtBoxName->name.'" name="'.$txtBoxName->name.'" size="'.$txtBoxName->size.'" value="'.$txtBoxName->value.'" class="'.$txtBoxName->class.'">';
		
		return $textBoxString;
	}

	/* The function received radio button object and return it with 'checked' attribute
	   chkName - radio button object ID, name (same for group of radio buttons, class, label (9text beside the radio button
	   status (checked/empty) */
	function radioButtonChecked($chkName){
		$radioButtonString = '';
		$chkText = '';
		if ( $_GET[$chkName->name] == $chkName->value){
				$chkText = 'checked';
		}
			 $radioButtonString = $radioButtonString . '<input ' .$chkText. ' ' .$chkName->status.' type="radio" id ="' .$chkName->value. '" value="' .$chkName->value. '" name="' .$chkName->name. '" class="' .$chkName->class. '">' .$chkName->label. ' ';
		
		return $radioButtonString;
	}

	// Creating table headers tags with collapse option (using bootstrap collapse class)
	function collapseCategory($categoryId,$categoryName,$categoryTitle,$parentId,$onclick){
		return '
		<tr>
			<th id = "' .$categoryId. '" data-toggle="collapse" data-target="#' .$categoryName. '" class="tg-title" aria-expanded="true" aria-controls="' .$categoryName. '" onclick="' .$onclick. '">'. $categoryTitle .'</th>
		</tr>
			  
		<tbody   id="' .$categoryName. '" class="collapse" data-parent="'. $parentId .'">';

	}


?>	
	<script type="text/javascript">
		/* Display or hide elements. 
		   Parameters: elementID - ID of the element, displayStatus - "none"(hide element),empty (display element) */
		function elementDisplayStatus(elementId,displayStatus){
			document.getElementById(elementId).style.display = displayStatus;
		}

        /* Change status of textboxes from readonly to editable and vice versa 
		   Parameters: txtboxId - ID of textbox, readonly - True or False */
        function setTextBoxReadonlyStatus(txtboxId,readonly){
			document.getElementById(txtboxId).readonly = readonly;
		}
        
		/* Retrieve delivery type of the media. Calling the function in the test_page_body file
		   Available types: HLS/DASH/Progressive */
		function currentDeliveryType(){
			KalturaPlayer.getPlayer('player-placeholder').addEventListener(kalturaPlayer.Event.PLAY, function(){
			document.getElementById("curDelType").value = kalturaPlayer.streamType;
			});		
	 	}	

		/* Retrieve eccess control messages into "accessControl" textbox (hidden by default)
		   Calling the function into test_page_body file */
		function accessControlEvents(){
			 //Adding listener for Access control error events.The function will be called in body file 
			KalturaPlayer.getPlayer('player-placeholder').addEventListener(kalturaPlayer.Event.ERROR, function(e){document.getElementById("accessControl").value = e.payload.data.data.messages[0].message});
		return "error";
		}

		/* Retrieve player version into "playerVersion" textbox
		   Calling the function into test_page_body file */
		function playerVersion(){
			return document.getElementById("playerVersion").textContent = "Player version:  "  + KalturaPlayer.VERSION;
	 	}

		/* Retrive versions of available plugins into "availablePlugins" ul/li tags */ 
		function pluginsVersions(){
			let plugins = "";
			let pluginsDict = [];
			for (let pluginName in KalturaPlayer.plugins){
				pluginsDict.push({
					key: KalturaPlayer.plugins[pluginName].NAME,
					value: KalturaPlayer.plugins[pluginName].VERSION
				})
			}
			for (i =0; i < pluginsDict.length; i++){
				var plugin = pluginsDict[i].key + ":   " + pluginsDict[i].value;
					var ul = document.getElementById("availablePlugins");
					var li = document.createElement('li');
					li.appendChild(document.createTextNode(plugin));
					ul.appendChild(li);
			}
		}


		function get_input_url(elementId){
			var valueoftextfield = document.getElementById(elementId).value;
			console.log(valueoftextfield);
			return valueoftextfield;
		}

		/* Retrieve values of an elements */
		function get_elements_value(elementName){
			var elValue = document.getElementsByName(elementName).value;
			console.log(value);
			return elValue[0];
		}

		/* Visible Change media textbox (for inserting entries list for change media), when "enable" checkbox for ChangeMedia checked 
		   Unvisible, if the checkbox unchecked */
		function changeMediaVisible(){
			var	chgMediaCheckbox = document.getElementById("chgMedia");
			var	chgMediaList = document.getElementById("changeMediaList");
			
			if (chgMediaCheckbox.checked == false){
				chgMediaList.style.display = "none";
			}
			else{
				chgMediaList.style.display = "";
			}
		}

		/* Insert selected value from dropbox into compatible textbox
		   Parameters: "sel_tag_id" - ID of dropbox, "input_tag_id" - ID of textbox, 
		   Cut the text from dropbox starting from "first_char" to "last_char" */
		function getSelectValue(sel_tag_id,input_tag_id,first_char,last_char){
			var selTag = document.getElementById(sel_tag_id);
			var selTagValue = selTag.options[selTag.selectedIndex].label;
			let selectedEntryId = document.getElementById("chkEntry").value;
			let entryIdThreeChars = selectedEntryId.substring(0,3)
			var inputEl = document.getElementById(input_tag_id);
			let partnerId = document.getElementById("chkPartner").value;
			
		    if (selTagValue == "Custom..."){
				inputEl.value = "";
				inputEl.readOnly = false ;
			}else{
				if (entryIdThreeChars == "ott" & selTag.name == "entryId"){
					inputEl.value = selTagValue.slice(first_char,last_char-4);
				}else{
					inputEl.value = selTagValue.slice(first_char,last_char);   
				}	
				inputEl.readOnly = true ; 
			}	
		}

		function saveSelectedValuesOnSubmit(sel_tag_id,input_tag_id,first_char,last_char){
			var selTag = document.getElementById(sel_tag_id);
			var selTagValue = selTag.options[selTag.selectedIndex].label;
			var inputEl = document.getElementById(input_tag_id);
			
			if (selTagValue == "Custom..."){
				inputEl.value = localStorage.getItem(input_tag_id);
				inputEl.readOnly = false ;
			}else{
				if (entryIdThreeChars == "ott" & selTag.name == "entryId"){
					inputEl.value = selTagValue.slice(first_char,last_char-4);
				}else{
					inputEl.value = selTagValue.slice(first_char,last_char);   
				}	
				inputEl.readOnly = true ;  
			}	
		}
		

		/* Uncheck radio button */
		function uncheckRadio(radioButName){
			var element = document.getElementsByName(radioButName);
			for (i=0; i < element.length; i++){
				if (element[i].checked){
					element[i].checked = false;
					console.log(element[i].checked);
				}	
			}
		}

		/* when check Playlist by entries list, Playlist by ID checkbox and textbox are disabled and vice versa */
		function switchElemByClickCheckbox(chkBoxClickId, txtBoxClickId, chkBoxSwitchId, txtBoxSwitchId){
			var checkBoxClick = document.getElementById(chkBoxClickId);
			var textBoxClick = document.getElementById(txtBoxClickId);
			var checkBoxSwitch = document.getElementById(chkBoxSwitchId);
			var textBoxSwitch = document.getElementById(txtBoxSwitchId);
				if (checkBoxClick.checked){
					checkBoxSwitch.checked = false;
					textBoxSwitch.disabled = true;
					textBoxClick.disabled = false;
				}
		}
		
		function setOneDefaultExtCapOnly(capHeb, capJap, capRus){
			var extCapHeb = document.getElementById(capHeb);
			var extCapJap = document.getElementById(capJap);
			var extCapRus = document.getElementById(capRus);
			if (extCapHeb.checked){
				console.log(extCapJap.disabled);
				extCapJap.disabled = true;
				extCapRus.disabled = true;
				console.log(extCapJap.disabled);
			}else{
				extCapJap.disabled = false;
				extCapRus.disabled = false;
			}
			
		}

		function disableEnableAdsPlugins(adList){
			let checkBoxDisableIma = document.getElementById("imaDis");
			let imaAdTagsList      = document.getElementById("chkAdTags");
			let checkBoxDisableDai = document.getElementById("daiDis");
			let daiAdTagsList      = document.getElementById("chkDai");

				if (imaAdTagsList.value != "noAd" && adList == "ima"){
					checkBoxDisableDai.checked = true;
					checkBoxDisableIma.checked = false;
					daiAdTagsList.value = "noDai"
				}else{	
                    checkBoxDisableDai.checked = false;
					checkBoxDisableIma.checked = false;
				}

				if (daiAdTagsList.value != "noDai" && adList == "dai"){
					checkBoxDisableIma.checked = true;
					checkBoxDisableDai.checked = false;
					imaAdTagsList.value = "noAd"
				}else{	
                    checkBoxDisableIma.checked = false;
					checkBoxDisableDai.checked = false;
				}

		}
		/* Disable Playlist components when change media enabled and enable when change media disabled */
		function disablePlaylistOptions(){
			let enableChangeMedia = document.getElementById('chgMedia');
			let changeMediaEntry  = document.getElementById('chkChgMed');
			let entryId           = document.getElementById('chkEntry');
			let entryIdCustom     = document.getElementById('selectedEntryId');
			let playlistByEntry   = document.getElementById('plLstEntId');
			let playlistByID      = document.getElementById('plLstPlLstId');
			let entriesList       = document.getElementById('pllstByEntId');
			let playlistId        = document.getElementById('pllstId');
			let autoContinue      = document.getElementById('plLstAutoCont');
			let loop		      = document.getElementById('plLstLoop');
			let countDown         = document.getElementById('cntDwn');
			let timeToShow        = document.getElementById('cntDwnTTS');
			let timeDuration      = document.getElementById('cntDwnDur');

			if (!(playlistByEntry.checked) && !(playlistByID.checked)){
				entryId.disabled = false;
				entryIdCustom.disabled = false;
				autoContinue.disabled = true;
				countDown.disabled = true;
				autoContinue.checked = false;
				loop.checked = false;
				countDown.checked = false;
				timeToShow.disabled = true;
				timeDuration.disabled = true;
				entriesList.disabled = true;
				playlistId.disabled = true;
			} else{
				if (playlistByEntry.checked){
					entriesList.disabled = false;
				}
				if (playlistByID.checked){
					playlistId.disabled = false;
				}
				entryId.disabled = true;
				entryIdCustom.disabled = true;
				autoContinue.disabled = false;
				loop.disabled = false;
				countDown.disabled = false;
				timeToShow.disabled = false;
				timeDuration.disabled = false;
				enableChangeMedia.checked = false;
				changeMediaEntry.disabled = true;
			}
		}

		/* Disable Playlist by ID and Playlist by Entries ID when Change media checkbox checked, disable Change media 
		   checkbox when it unchecked */
		function enableChangeMedia(){
			let playlistByEntry   = document.getElementById('plLstEntId');
			let playlistByID      = document.getElementById('plLstPlLstId');
			let enableChangeMedia = document.getElementById('chgMedia');
			let changeMediaEntry  = document.getElementById('chkChgMed');
			
			if (enableChangeMedia.checked){
				playlistByEntry.checked = false;
				playlistByID.checked = false;
				changeMediaEntry.disabled = false;
			} else{
				changeMediaEntry.disabled = true;
			}
		}

		/* Retrieve active bandwidth and insert it into "curBandwidth" textbox
		   Calling in the text_page_body file */
		function getActiveBandwidth(){
			return kalturaPlayer.addEventListener(kalturaPlayer.Event.VIDEO_TRACK_CHANGED, function(){
			document.getElementById("curBandwidth").value = kalturaPlayer.getActiveTracks().video.bandwidth;
			});
	 	}

		/* Change color of the menu category when some category's element selected */
		function menuCategoryBackgroundColor(categoryId,color) {
			categoryObj = document.getElementById(categoryId);
			categoryObj.style.backgroundColor = color;
		}

        /* Checking selected elements in the category and change the category title color accordingly
		   Parameters: "className" - list of the elements in a category, "categoryID" - Id of the category */
		function checkUpdatedElementsInClass(className,categoryId){
			elementsList = document.getElementsByClassName(className);
						
			for (let i = 0; i < elementsList.length; i++){
				if (elementsList[i].tagName == "SELECT"){
					if (elementsList[i].value != "" & elementsList[i].value != "default" & elementsList[i].value != "0" & elementsList[i].value != "noAd" & elementsList[i].value != "noDai" & elementsList[i].value != "noBump" & elementsList[i].value != "defBump"){
						menuCategoryBackgroundColor(categoryId,"green");
						return;
					}
				} else if (elementsList[i].tagName == "INPUT"){
					if (elementsList[i].checked){
						menuCategoryBackgroundColor(categoryId,"green");
						return;
					}else if(elementsList[i].value != "" & elementsList[i].type == "text"){
						menuCategoryBackgroundColor(categoryId,"green");
						console.log("category name ============>" + elementsList[i].name)
						console.log("text box value ============>" + elementsList[i].value)
						return;	
					}
				}
			}	
			menuCategoryBackgroundColor(categoryId,"grey");
		}


		/* Checking for each category, what elements are selected and change color*/
		function checkUpdatedCategories(){
			categoryList = document.getElementsByClassName("tg-title");
			menuLength = categoryList.length;
			var categoryId ="";
			var categoryName = "";
			var testUrl = window.location.href;
			
			if (testUrl.search("cdnUrl") == -1){
				for (let i=0; i<menuLength; i++){
					categoryName = categoryList[i].id;
					menuCategoryBackgroundColor(categoryName.substring(categoryName.length -5,0),"grey");
				}
			}
						
			for (let i=0; i<menuLength; i++) {
				categoryId = categoryList[i].id;
			    checkUpdatedElementsInClass(categoryId.substring(categoryId.length -5,0),categoryId);
			}
			return;
		}

		function saveTextBoxValues(){
			let playlistId = document.getElementById("pllstId").value;
			let entriesList = document.getElementById("pllstByEntId").value;
			let startPosition = document.getElementById("strPos").value;
			let playAdAfterTime = document.getElementById("adAftTime").value;
			let numOfRedirects = document.getElementById("numRedirects").value;
			let changeMedia = document.getElementById("secondEntry").value;
			let compVersion  = document.getElementById("compVer").value;
			let compVerList  = document.getElementById("compVersions").value;
			//let playerOvp  = document.getElementById("plOvpVer").value;
			//let playerOtt = document.getElementById("plOttVer").value;
			//let IMA  = document.getElementById("imaVer").value;
		 	let uiConf  = document.getElementById("selectedUiConf").value;
			let entryId  = document.getElementById("selectedEntryId").value;
			
			localStorage.setItem("compVersion",compVersion);
			localStorage.setItem("compVerList",compVerList);
			localStorage.setItem("playlistId",playlistId);
			localStorage.setItem("entriesList",entriesList);
			localStorage.setItem("startPosition",startPosition);
			localStorage.setItem("playAdAfterTime",playAdAfterTime);
			localStorage.setItem("numOfRedirects",numOfRedirects);
			localStorage.setItem("changeMedia",changeMedia);
			//localStorage.setItem("playerOvp",playerOvp);
			//localStorage.setItem("playerOtt",playerOtt);
			//localStorage.setItem("IMA",IMA);
			localStorage.setItem("selectedUiConf",uiConf);
			localStorage.setItem("selectedEntryId",entryId);

		}
		
		function getTextBoxValues(){
			document.getElementById("compVer").value = localStorage.getItem("compVersion");
			document.getElementById("compVersions").value = localStorage.getItem("compVerList");
			document.getElementById("pllstId").value = localStorage.getItem("playlistId");
			document.getElementById("pllstByEntId").value = localStorage.getItem("entriesList");
			document.getElementById("strPos").value = localStorage.getItem("startPosition");
			document.getElementById("adAftTime").value = localStorage.getItem("playAdAfterTime");
			document.getElementById("numRedirects").value = localStorage.getItem("numOfRedirects");
			document.getElementById("secondEntry").value = localStorage.getItem("changeMedia");
			document.getElementById("secondEntry").value = localStorage.getItem("selectedEntryId");
			//document.getElementById("plOvpVer").value = localStorage.getItem("playerOvp");
			//document.getElementById("plOttVer").value = localStorage.getItem("playerOtt");
			//document.getElementById("imaVer").value = localStorage.getItem("IMA");
		}

		function removeTextBoxValues(){
			document.getElementById("compVer").value =       "";
			document.getElementById("compVersions").value =       "";
			document.getElementById("pllstId").value =       "";
			document.getElementById("pllstByEntId").value = "";
			document.getElementById("strPos").value = "";
			document.getElementById("adAftTime").value = "";
			document.getElementById("secondEntry").value = "";
			//document.getElementById("plOvpVer").value = "";
			//document.getElementById("plOttVer").value = "";
			//document.getElementById("imaVer").value = "";
		}

        function removeTxtValWhenMainPageLoad(){
			if (window.location.href == "http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page.php"){
				removeTextBoxValues()
			}
		} 
		
		// Javascript object for saving selected by user the player components. Using in the function setComponentVersions()
		var componentsList = {};
		
		/* The function receives input from user with component name and component version and save them in javascript object (dictionary)	
		   The components versions stored in the hidden textbox in order to send them with GET method after submit the form */
		function setComponentVersions(){
			let componentName = document.getElementById("chkCompLst").value;
			let componentVersion = document.getElementById("compVer").value;
			//Hidden textbox for storage selected by user the components versions
			let txtBoxWithVersions = document.getElementById("compVersions");
			txtBoxWithVersions.value = "";

			componentsList[componentName] = componentVersion;

			for (key in componentsList) {
				txtBoxWithVersions.value = txtBoxWithVersions.value + key + "=" + componentsList[key] + ",";
			};
		}
		
		function removeCompVerValue(){
			document.getElementById("compVer").value = "";
		}

	</script>
<?php
	echo '
	<body onload="getSelectValue(\'chkEntry\',\'selectedEntryId\',0,10); getSelectValue(\'chkUiConf\',\'selectedUiConf\',0,8); pluginsVersions(); getTextBoxValues(); removeTxtValWhenMainPageLoad()" >
	<div id="menuButton">
		<input type="button" id="expBut" style="background-color:green;" value="'. str_repeat("&nbsp;", 7) . 'Open menu'. str_repeat("&nbsp;", 7) . '" onclick="elementDisplayStatus(\'playerConf\',\'\'); elementDisplayStatus(\'expBut\',\'none\'); elementDisplayStatus(\'hideBut\',\'\'); checkUpdatedCategories(); saveSelectedValuesOnSubmit(\'chkEntry\',\'selectedEntryId\',0,10); saveSelectedValuesOnSubmit(\'chkUiConf\',\'selectedUiConf\',0,8)" />  
		<input type="button" id="hideBut" style="display: none; background-color:dodgerBlue; font-size:16px; font-weight:bold" value="'. str_repeat("&nbsp;", 7) . 'Hide menu'. str_repeat("&nbsp;", 7) . '" onclick="elementDisplayStatus(\'hideBut\',\'none\'); elementDisplayStatus(\'playerConf\',\'none\');elementDisplayStatus(\'expBut\',\'\');" />
	</div>
	
	
	<div>
		<input type="button" id="clearStorage" style="background-color:red; font-weight:bold" value="&nbsp Clear local storage &nbsp" onclick="localStorage.clear()" />
		' . str_repeat("&nbsp;", 3) . '<p id="playerVersion" style="color:blue; font-weight:bold; display:inline"></p>
		'. str_repeat("&nbsp;", 3) .'<h6 style="font-weight:bold; color:black; display:inline"> Delivery type </h6>
		<input type="text" id="curDelType" size="8" style="font-weight:bold; color:green; display:inline; text-align:center" disabled />
		'. str_repeat("&nbsp;", 3) .'<h6 style="font-weight:bold; color:black; display:inline"> Bitrate </h6>
		<input type="text" id="curBandwidth" size="6"  style="font-weight:bold; color:green; display:inline; text-align:center" disabled />
	</div>

	
	
	
	<div id="changeMediaList">
		<div id="entryList">
			<h6> Entries Ids
			<input type="text" data-tooltip title="Insert entries list for change media, separated by commas" name="secondMedia" id="secondEntry" >
		</div>

		<div id="chgMediaBut">	
			<input type="button" id="changeMediaButton" value="&nbsp Change media &nbsp" onclick="changeMedia()"></br>
		</div>
	</div>
	
	
	<table class="tg" id="playerConf" style="display:none">
		<form name="frmPlayer" onSubmit="return saveTextBoxValues()"> 
	
		' . collapseCategory('environmentTitle','environment','Environment','playerConf','enableChangeMedia()') . '
			  	  
			 	 <tr>
					<td>Is this secure? (Required for DRM) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						<input type="button" value="HTTPS" onclick="window.location.href=\'https://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page.php\'" />
					</td>
			  	</tr>
					  
			  	<tr>		
					<td class="tg-text"> cdn Url &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
						<select id="chkEnv" name="cdnUrl" class="environment">'
						 . optionsMakerWithSelected($environments,'cdnUrl') . 
					 	'</select>
					</td>
			  	</tr>	
				   
				<tr>				  
					<td class="tg-text"> Partner ID &nbsp;&nbsp
						<select id="chkPartner" name="partnerId" class="environment">'
					  		. optionsMakerWithSelected($partnerIds,'partnerId') .
						'</select>
				    </td>
				</tr>	  
			  
				<tr>				  
					<td class="tg-text"> UIConf ID &nbsp;&nbsp
						<select id="chkUiConf" name="uiConfId" class="environment" onchange="getSelectValue(\'chkUiConf\',\'selectedUiConf\',0,8)">'
						. optionsMakerWithSelected($uiConfIds,'uiConfId') .
						'</select>
						<input type="text" id="selectedUiConf" name="selectedUiConf" size="8" class="environment">
					</td>
				</tr>	
				
				<tr>				  
					<td class="tg-text"> Entry ID &nbsp;&nbsp
						<select id="chkEntry" name="entryId" class="environment" onchange="getSelectValue(\'chkEntry\',\'selectedEntryId\',0,10)">'
						. optionsMakerWithSelected($entriesId,'entryId') .
						'</select>
						<input type="text" id="selectedEntryId"  name="selectedEntryId" size="8" class="environment" >
					</td>
													
				</tr>	

				<tr>				  
					<td class="tg-text"> Change Media &nbsp;&nbsp
						<select id="chkChgMed" name="chgMed" class="environment">'
					  		. optionsMakerWithSelected($entriesId,'chgMed') .
						'</select>
						'. checkBoxChecked($chkChangeMedia,"onclick=\"enableChangeMedia();disablePlaylistOptions()\"") .
					'</td>
			    </tr>		  
			</tbody>	
				
			' . collapseCategory('versionsTitle','versions','Versions','playerConf','') . '
				<tr>				  
					<td class="tg-text"> Components &nbsp;&nbsp
						<select id="chkCompLst" name="compLst" class="versions" onchange="removeCompVerValue()">'
							. optionsMakerWithSelected($componentsList,'compLst') .
						'</select>
						&nbsp;&nbsp;&nbsp;&nbsp Version &nbsp' . textBoxMaker($compVersion), str_repeat("&nbsp;", 2) . '
						<input type="button" id="verConfirm" value="OK" onclick="setComponentVersions()" />
						
					</td>
				</tr>
				
				<tr>				  
					<td class="tg-text"> Updated versions &nbsp;&nbsp
					<input type="text" id="compVersions" name="compVers" size="40"  style="font-size:16px; color:blue; display:inline; text-align:center" class ="versions" readonly/>
					</td>
				</tr>	
				
			</tbody>

			' . collapseCategory('logLevelTitle','loglevel','Log level','playerConf','') . '

				<tr>				  
					<td class="tg-text">'
					.radioButtonChecked($chkTrace), radioButtonChecked($chkDebug), radioButtonChecked($chkInfo), radioButtonChecked($chkWarning), radioButtonChecked($chkError) .
					'&nbsp;&nbsp;&nbsp;&nbsp; <input type="button" id="logsOff" value="OFF" onclick="uncheckRadio(\'logs\')" />
					 </td>
				</tr>	
			</tbody>	
			
	
			' . collapseCategory('playlistTitle','playlist','Playlist','playerConf','disablePlaylistOptions()') . '

				<tr>				  
				  	<td class="tg-text"> '
					   . checkBoxChecked($plLstByEntryIds,"onclick=\"switchElemByClickCheckbox('plLstEntId','pllstByEntId','plLstPlLstId','pllstId');disablePlaylistOptions()\"") .
						'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
						  Entries list &nbsp;&nbsp;' . textBoxMaker($entriesList). '
					</td>
				</tr>	

				<tr>				  
				  	<td class="tg-text"> '
						. checkBoxChecked($plLstByPlaylistIds,"onclick=\"switchElemByClickCheckbox('plLstPlLstId','pllstId','plLstEntId','pllstByEntId');disablePlaylistOptions()\"") . 
						'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						Playlist ID &nbsp;&nbsp;' . textBoxMaker($playlistId). '
					</td>
			  	</tr>
			
				<tr>
					<td class="tg-text">'
						.	checkBoxChecked($plLstAutoCont) . '&nbsp;&nbsp;&nbsp;&nbsp;' . checkBoxChecked($plLstLoop) .
					'</td>
				</tr>

				<tr>				  
					<td class="tg-text"> '
						.	checkBoxChecked($countDownShow) . 
						'&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
						Time to show &nbsp;&nbsp' . textBoxMaker($countDownTimeShow). '
						&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
						Duration &nbsp;&nbsp;' . textBoxMaker($countDownDuration). '
					</td>
				</tr>	
			</tbody>

	
			' . collapseCategory('streamPriorityTitle','streamPriority','Stream priority','playerConf','') . '
				
				<tr>
					<td class="tg-text"> Engine &nbsp;&nbsp
						<select id="chkStreamEngine" name="eng1" class="streamPriority">'
						  . optionsMakerWithSelected($engine,'eng1') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp 
						<select id="chkStreamEngine" name="eng2" class="streamPriority">'
						  . optionsMakerWithSelected($engine,'eng2') .
						'</select>

						&nbsp;&nbsp;&nbsp 
						<select id="chkStreamEngine" name="eng3" class="streamPriority">'
						  . optionsMakerWithSelected($engine,'eng3') .
						'</select>
				   
					</td>
				</tr>
				
				<tr>
					<td class="tg-text"> Format &nbsp;&nbsp
						<select id="chkStreamPriority" name="stPr1" class="streamPriority">'
						  . optionsMakerWithSelected($streamPriorityHls,'stPr1') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp;&nbsp 
						<select id="chkStreamPriority" name="stPr2" class="streamPriority">'
						  . optionsMakerWithSelected($streamPriorityDash,'stPr2') .
						'</select>
				    
     					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						<select id="chkStreamPriority" name="stPr3" class="streamPriority">'
						  . optionsMakerWithSelected($streamPriorityMp4,'stPr3') .
						'</select>
					 
					</td>
			  	</tr>	
			</tbody>
			
	
			' . collapseCategory('captionsTitle','captions','Captions','playerConf','') . '

				<tr>				  
					<td class="tg-text"> Explicit text language &nbsp;&nbsp;&nbsp
						<select id="chkTextLanguage" name="txtLang" class="captions">'
						. optionsMakerWithSelected($captions,'txtLang') .
						'</select>
					</td>
				</tr>
				
				<tr>
					<td class="tg-text">'
						.	checkBoxChecked($chkAutoExtCaptions) .
					'</td>
				</tr>

				<tr>				  
					<td class="tg-text"> External captions &nbsp;&nbsp;&nbsp'
							.	checkBoxChecked($externalCapHeb), str_repeat("&nbsp;", 10), checkBoxChecked($externalCapJap), str_repeat("&nbsp;", 10), checkBoxChecked($externalCapRus) . 
					'</td>
				</tr>	

				<tr>				  
					<td class="tg-text"> Set as default &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp'
							.	checkBoxChecked($isCapHebDefault,"onclick=\"setOneDefaultExtCapOnly('extHebDef','extJapDef','extRusDef')\""), str_repeat("&nbsp;", 22), checkBoxChecked($isCapJapDefault,"onclick=\"setOneDefaultExtCapOnly('extJapDef','extHebDef','extRusDef')\""), str_repeat("&nbsp;", 26), checkBoxChecked($isCapRusDefault,"onclick=\"setOneDefaultExtCapOnly('extRusDef','extJapDef','extHebDef')\"") . 
					'</td>
				</tr>

			</tbody>

	
			' . collapseCategory('multiAudioTitle','multiAudio','Multi audio','playerConf','') . '

				<tr>				  
					<td class="tg-text"> Explicit audio language &nbsp;&nbsp;&nbsp
						<select id="chkAudioLanguage" name="audioLang" class="multiAudio">'
						. optionsMakerWithSelected($audioTracks,'audioLang') .
						'</select>
					</td>
				</tr>	
			</tbody>

	
			' . collapseCategory('automationTitle','automation','Automation','playerConf','') . '

				<tr>				  
					<td class="tg-text"> Automation script &nbsp;&nbsp;&nbsp
						<select id="chkAutomation" name="a_s" class="automation">'
						. optionsMakerWithSelected($automationOptions,'a_s') .
						'</select>
					</td>
				</tr>	
			</tbody>

	
			' . collapseCategory('playerOptionsTitle','playerOptions','Player options','playerConf','') . '

			  	<tr>
					<td class="tg-text">'
						.	checkBoxChecked($chkNewPlayerConf) .
					'</td>
				</tr>
					
				<tr>				  
					<td class="tg-text"> 
						Start position &nbsp;&nbsp;' . textBoxMaker($startPosition). '
					</td>
				</tr>	
				<tr> 
					<td class="tg-text">'
						.	checkBoxChecked($chkPreLoad) .
					'</td>
				</tr>
				<tr> 
					<td class="tg-text">'
						.	checkBoxChecked($chkLoopBack) .
					'</td>
				</tr>	
				<tr>
					<td>'
						.	checkBoxChecked($chkAutoPlay) .
					'</td>
				</tr>	
				<tr>
					<td>'
						.	checkBoxChecked($chkMuted) .
					'</td>
				</tr>
				<tr>
					<td>'
						.	checkBoxChecked($chkMutedAutoPlay) .
					'</td>
				</tr>
				<tr>
					<td>'
						.	checkBoxChecked($chkNativeTxtTrack) .
					'</td>
				</tr>
				<tr>
					<td>'
						.	checkBoxChecked($chkPlaysInline) .
					'</td>
				</tr>

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkIosFullscreen) .
					'</td>
				</tr>

				<tr>
					<td>'
						.	checkBoxChecked($chkDvr) .
					'</td>
				</tr>	

				<tr>
					<td>'
						.	checkBoxChecked($forceRedExtStream) .
					'</td>
				</tr>

				
			</tbody>

	
			' . collapseCategory('advertisimentTitle','advertisiment','Advertisiments','playerConf') . '

				<tr>				  
					<td class="tg-text"> IMA Ad tag &nbsp;&nbsp;&nbsp
						<select id="chkAdTags" name="adTag" class="advertisiment" onchange="disableEnableAdsPlugins(\'ima\')">'
							. optionsMakerWithSelected($advertisiments,'adTag') .
							'</select> 
					</td>
				</tr>	
				<tr>
				    <td  class="tg-text">'
							.	checkBoxChecked($imaDis),
							    str_repeat("&nbsp;", 2),
								checkBoxChecked($enbImaPreload)  . 
					'</td>
				</tr>
				<tr>				  
					<td class="tg-text"> 
						Play Ad after time (IMA only) &nbsp;&nbsp;' . textBoxMaker($playAdsAfterTime). '
						&nbsp;&nbsp;&nbsp Number of redirects &nbsp;&nbsp;' . textBoxMaker($numOfAdsRedirects). '
					</td>
				</tr>
				<tr>				  
					<td class="tg-text"> DAI sources &nbsp;&nbsp;&nbsp
						<select id="chkDai" name="dai" class="advertisiment" onchange="disableEnableAdsPlugins(\'dai\')">'
							. optionsMakerWithSelected($daiSources,'dai') .
						'</select>
					'.	checkBoxChecked($daiDis) . 
					'</td>
				</tr>
				<tr>				  
					<td class="tg-text"> Bumper: &nbsp;&nbsp;&nbsp URL &nbsp;&nbsp
						<select id="chkbumper" name="bumper" class="advertisiment">'
							. optionsMakerWithSelected($bumpers,'bumper') .
						'</select>
						&nbsp;&nbsp;&nbsp;&nbsp Position
						<select id="chkBumpPos" name="bumpPos" class="advertisiment">'
							. optionsMakerWithSelected($bumpPosition,'bumpPos') .
						'</select>
					</td>
				</tr>
                <tr>				  
					<td class="tg-text">
					'.	str_repeat("&nbsp;", 2), checkBoxChecked($bumpDis),
						str_repeat("&nbsp;", 7), checkBoxChecked($bumpClick),
						str_repeat("&nbsp;", 7), checkBoxChecked($disPreload),
						str_repeat("&nbsp;", 4), checkBoxChecked($enablePreload) . 
					'</td>
				</tr>
				
			</tbody>

			' . collapseCategory('pluginsTitle','plugins','Plugins','playerConf','') . '

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkYoubora) . 
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp '
							.	checkBoxChecked($youboraDis) . 
					'</td>
				</tr>	

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkGA) .
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp '
							.	checkBoxChecked($GAdis) . 
					'</td>
				</tr>	
				
				<tr>				  
					<td class="tg-text"> '
				.	checkBoxChecked($chkKava) .
				'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp '
							.	checkBoxChecked($kavaDis) . 
					'</td>
        </tr>
                
        <tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkComscore) .
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp '
							.	checkBoxChecked($comscDis) . 
					'</td>
				</tr>
				
				
				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkVRTS) .
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp '
							.	checkBoxChecked($chkVRSIS) .
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp '
							.	checkBoxChecked($VrDis) .
					'</td>
				</tr>
				
				<tr>
					<td>'
						.	checkBoxChecked($chkCC) .
					'</td>
				</tr>					
			</tbody>
			
	
			' . collapseCategory('uiComponentsTitle','uiComponents','UI Components','playerConf','') . '

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkWatermark) .
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Placement &nbsp
						<select id="chkEnv" name="WMPlace" >'
					  . optionsMakerWithSelected($watermarkPlace,'WMPlace') .
					'</select>
			    </td>
				</tr>

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkDisableUi) .
					'</td>
				</tr>

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkSocialNet) .
					'</td>
				</tr>
                                
				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkLogo) .
					'</td>
				</tr> 
			</tbody>

	
			' . collapseCategory('ottTitle','ott','OTT','playerConf','') . '

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkOttlogged) .
					'</td>
				</tr>

				<tr>				  
					<td class="tg-text"> '
						 .	checkBoxChecked($chkOttAnalytics) . '&nbsp;&nbsp;&nbsp;&nbsp' .	checkBoxChecked($ottDis) . 
					'</td>
				</tr>
				
				<tr>
					<td class="tg-text"> OTT analytics parameters: &nbsp;&nbsp;&nbsp;&nbsp' 
							.	checkBoxChecked($disMediaMark) . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp' .	checkBoxChecked($disMediaHit) . 
					'</td>
				</tr>
			</tbody>				
				
				<tr>
				    <td>&nbsp;&nbsp;&nbsp
					
						<input type="button" style="background-color:red; font-size:16px; font-weight:bold" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="window.location.href=\'http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page.php\'; localStorage.clear()" />
						<input type="submit" style="background-color:green; font-size:16px; font-weight:bold" align="center" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="doRefresh()" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>
				</tr>
			</form>  
		</table>

	    <input type="text" id="accessControl" hidden/>
		
        '

?>


