<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
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
	
	class Checkbox{
		public $value;
		public $label;
		public function  __construct($val,$text) {
			$this->value = $val;
			$this->label = $text;
		}
    }
	
	
	
	
	// *************** CDN URL options *****************************************************************************
	$environment_test =        new Option("test","limeGreen","Testing");
	$environment_testSec =     new Option("testSec","green","Testing secure");
	$environment_prod =        new Option("prod","dodgerBlue","Production");
	$environment_prodSec =     new Option("prodSec","blue","Production secure");
	$environment_invalid =     new Option("invalid","black","invalid URL");
	$environments =            array($environment_test, $environment_testSec, $environment_prod, $environment_prodSec, $environment_invalid);
	
	
	//**************** Partner ID ***********************************************************************************
	$partnerId_test =          new Option("1091","limeGreen","1091 - testing regular");
	$partnerId_test_drm =      new Option("4171","green","4171 - testing DRM");
	$partnerId_prod =          new Option("1740481","dodgerBlue","1740481 - production regular");
	$partnerId_prod_drm =      new Option("1804331","blue","1804331 - production DRM");
	$partnerId_ott =           new Option("198","purple","198 - OTT");
	$partnerIds =              array($partnerId_test, $partnerId_test_drm, $partnerId_prod, $partnerId_prod_drm, $partnerId_ott);
	
	
	//**************** UI Conf IDs **********************************************************************************
	$uiConfId_test =           new Option("testReg","limeGreen","15215933 - Testing");
	$uiConfId_test_latest =      new Option("testlatestReg","limeGreen","15215773 - Testing latest");
	$uiConfId_no_plug_test =   new Option("testNoPlug","limeGreen","15214756 - Testing no plugins");
  $uiConfId_test_studio =    new Option("testReg_studio","limeGreen","Testing - Studio");
	$uiConfId_test_youbora =   new Option("testReg_youbora","red","15213618 - Testing - youbora");
  $uiConfId_test_drm =       new Option("testDrm","green","15213831 - Testing DRM");
	$uiConfId_prod =           new Option("prodReg","dodgerBlue","42690372 - Production");
	$uiConfId_prod_latest =    new Option("prodlatest","dodgerBlue","42897261 - Production latest");
	$uiConfId_prod_drm =       new Option("prodDrm","blue","42699992 - Production DRM");
	$uiConfId_ott_test =       new Option("ott","purple","15213832 - OTT testing");
	$uiConfId_no_plug_ott =    new Option("ottNoPlug","purple","15216119 - OTT Testing no plugins");
	$uiConfId_ott_prod =       new Option("ottProd","purple","42700261 - OTT production");
	$uiConfIds =               array($uiConfId_test, $uiConfId_test_latest, $uiConfId_no_plug_test, $uiConfId_test_studio, $uiConfId_test_youbora, $uiConfId_test_drm, $uiConfId_prod, $uiConfId_prod_latest, $uiConfId_prod_drm, $uiConfId_no_plug_ott, $uiConfId_ott_test, $uiConfId_ott_prod);
	
	
	//**************** Entry IDs ************************************************************************************
	$entryId_empty =           new Option("empty","limeGreen","default entry");
	$entryId_testBasic =       new Option("tstBasic","limeGreen","0_wifqaipd: basic vod - testing");
	$entryId_testLong =        new Option("tstLong","limeGreen","0_4ktof5po: long vod - testing");
	$entryId_testABR =         new Option("tstAbr","limeGreen","0_wu32qrt3: ABR - testing");
	$entryId_testManSwitch =   new Option("tstManSw","limeGreen","0_clvqgcxy: Manual switch - testing");
	$entryId_testCapAud =      new Option("tstCapAud","limeGreen","0_df8g87v8: cap/multAud(Disney) - testing");
	$entryId_testEngCapDef =   new Option("tstEngCapDef","limeGreen","0_x8n0mub7: default Eng captions - testing");
	$entryId_testCapDef =      new Option("tstCapDef","limeGreen","0_fl4ioobl: def captions Ger - testing");
	$entryId_testCapCaption =  new Option("tstCapCapt","limeGreen","0_qq9jh1i3: CAP captions - testing");
	$entryId_testAud =         new Option("tstAud","limeGreen","0_ttfy4uu0: multAud(it/en/ru) - testing");
	$entryId_testAudEnt =      new Option("tstAudEnt","limeGreen","0_12xzpcxr: audio entry - testing");
	$entryId_testAudEnt2 =     new Option("tstAudEnt2","limeGreen","0_p8aigvgu: audio entry 2 - testing");
	$entryId_testDrm =         new Option("tstDrm","green","0_2jiaa9tb: DRM - testing");
	$entryId_testFair =        new Option("tstFairplay","green","0_4s6xvtx3: Fairplay - testing");
	$entryId_testDrmAbr =      new Option("tstDrmAbr","green","0_7o8zceol: DRM ABR - testing");
	$entryId_prodBasic =       new Option("prBasic","dodgerBlue","1_kbyh1guy: basic vod - prod");
	$entryId_prodCap =         new Option("prCap","dodgerBlue","1_av4ptxvx: captions vod - prod");
	$entryId_prodAud =         new Option("prAud","dodgerBlue","1_1tvsf9ru: multiaudio vod - prod");
	$entryId_prodDrm =         new Option("prDrm","blue","1_r62g23gz: DRM - prod");
	$entryId_prodFairPlay =    new Option("prFair","blue","1_etkmak5i: Fairplay - prod");
	$entryId_testKltLive =     new Option("tstKlive","limeGreen","0_f8re4ujs: Kaltura Live no DVR - testing");
	$entryId_testKltLiveDvr =  new Option("tstKliveDvr","limeGreen","0_nwkp7jtx: Kaltura Live with DVR - testing");
	$entryId_testUniLive =     new Option("tstUlive","limeGreen","0_uwai8bwr: Universal Live no DVR - testing");
	$entryId_testUniLiveDvr =  new Option("tstUliveDvr","limeGreen","0_popae503: Universal Live with DVR - testing");
	$entryId_testExtLive =     new Option("tstExLive","limeGreen","0_dkiz5qwp: WhetherNation Live external - testing");
	$entryId_testExtLiveCapt = new Option("tstExLiveCap","limeGreen","0_baicmo96: External Live with captions - testing");
	$entryId_testWnIntSrcLive= new Option("tstWnIntSrc","limeGreen","0_fdb6sbgm: WhetherNation Live internal - testing");
	$entryId_testCarbonLive =  new Option("tstCarbonLive","limeGreen","0_6su9qlhl: Carbon TV Live - testing");
	$entryId_test1TVRusLive =  new Option("tst1RusLive","limeGreen","0_6su9qlhl: 1 Channel Russia Live - testing");
	$entryId_testMatchTv    =  new Option("matchTvLive","limeGreen","0_o7luih60: Match TV Live - testing");
	$entryId_testExtLiveAbc =  new Option("tstLiveAbc","limeGreen","0_itdftc7v: ABC Live - testing");
	$entryId_prodKltLiveDvr =  new Option("prodKLiveDvr","dodgerBlue","1_fdv46dba: Kaltura Live with - DVR prod");
	$entryId_prodKltLiveDrm =  new Option("prodKLiveDrm","dodgerBlue","1_6vjig5vg: Kaltura Live DRM - prod");
	$entryId_10SecQrMidRight = new Option("10QrMidRight","red","0_yzkvj5qp: 10sec QR mid right - auto");
	$entryId_30SecQrMidRight = new Option("30QrMidRight","red","0_y8an8mze: 30sec QR mid right - auto");
	$entryId_30SecQr =         new Option("30SecQr","red","0_l55rpce1: QR Code 30 sec - auto");
	$entryId_60SecQr =         new Option("60SecQr","red","0_pueqvb6y: QR Code 60 sec - auto");
	$entryId_ottLongVod =      new Option("ottLongVod","purple","259153 - OTT long VOD (51:30)");
	$entryId_ottVod =      		 new Option("ottVod","purple","258459 - OTT VOD - 360 config (37:17)");
	$entryId_ottExtLive =  		 new Option("ottExtLive","purple","276507 - OTT Whether Nation Live");
	$entryId_ottDrm =      		 new Option("ottDrm","purple","460627 - OTT Dash DRM");
	$entryId_testExoplan360 =  new Option("tstExo360","black","0_d8u8u878 - Exoplanet 360");
	$entryId_testAirbus360 =   new Option("tstAir360","black","0_dod3wrta - Airbus 360");
	$entryId_testStarWars360 = new Option("tstStar360","black","0_20ul8164 - StarWars 360");
	$entryId_testWild360 =     new Option("tstWild360","black","0_xjjki1id - Wild 360");
	$entryId_testSkyDive360 =  new Option("tstSky360","black","0_od42vb2y - Sky Dive 360");
	$entryId_prod360 =       new Option("pr360","dodgerBlue","1_ppzfk01p: 360 vod - prod");
	$entryId_testDrm360 =      new Option("tstDrm360","black","0_nq4v8mc2 - DRM 360 (no supported)");

	$entriesId =  array($entryId_empty, $entryId_testBasic, $entryId_testLong, $entryId_testABR, $entryId_testManSwitch, $entryId_testCapAud, $entryId_testEngCapDef, $entryId_testCapDef, $entryId_testCapCaption, $entryId_testAud, $entryId_testAudEnt, $entryId_testAudEnt2, $entryId_testDrm, $entryId_testFair, $entryId_testDrmAbr, $entryId_prodBasic, $entryId_prodCap,
	        $entryId_prodAud, $entryId_prodDrm, $entryId_prodFairPlay, $entryId_testKltLive, $entryId_testKltLiveDvr, $entryId_testUniLive, $entryId_testUniLiveDvr, $entryId_testExtLive, $entryId_testExtLiveCapt, $entryId_testWnIntSrcLive, $entryId_testCarbonLive, $entryId_testExtLiveAbc,
					$entryId_test1TVRusLive, $entryId_testMatchTv, $entryId_prodKltLiveDvr, $entryId_prodKltLiveDrm, $entryId_10SecQrMidRight, $entryId_30SecQrMidRight, $entryId_30SecQr, $entryId_60SecQr, $entryId_ottLongVod, $entryId_ottVod, $entryId_ottExtLive, $entryId_ottDrm,
					$entryId_testExoplan360, $entryId_testAirbus360, $entryId_testStarWars360, $entryId_testWild360, $entryId_testSkyDive360, $entryId_prod360, $entryId_testDrm360);
	
	
	//**************** Log level **************************************************************************************
	$chkTrace = 			   new Checkbox("trace","Trace");
	$chkDebug = 			   new Checkbox("deb","Debug");
	$chkInfo = 			  	 new Checkbox("inf","Info");
	$chkWarning = 			 new Checkbox("warn","Warning");
	$chkError = 			   new Checkbox("err","Error");
	
	
	//***************** Stream priority ******************************************************************************
	
	//***************** Format ******************************************
	$stPr_def =                new Option("def","black","");
	$stPr_hls =                new Option("hls","black","HLS");
	$stPr_dash =               new Option("dash","black","DASH");
	$stPr_mp4 =                new Option("progressive","black","MP4");
	$streamPriority =         array($stPr_def, $stPr_hls, $stPr_dash, $stPr_mp4);

	//***************** Engine *******************************************
	$eng_html =         new Option("html","black","HTML");
	$eng_flash =        new Option("flash","black","FLASH");
	$engine =           array($eng_html, $eng_flash);
		
	
	//**************** Explicit captions ******************************************************************************
	$explCaptDef =             new Option("default","black","Default");
	$explCaptAuto =            new Option("auto","black","Auto");
	$explCaptEng =             new Option("eng","black","English");
	$explCaptDutch =           new Option("nld","black","Dutch");
	$explCaptRus =             new Option("rus","black","Russian");
	$explCaptHeb =             new Option("heb","black","Hebrew");
	$explCaptSpa =             new Option("esp","black","Spanish");
	$captions =                array($explCaptDef, $explCaptAuto, $explCaptEng, $explCaptDutch, $explCaptRus, $explCaptHeb, $explCaptSpa);
	
	
	//**************** Audio tracks ******************************************************************************
	$audioDef =                new Option("default","black","Default");
	$audioEng =                new Option("eng","black","English");
	$audioDutch =              new Option("nld","black","Dutch");
	$audioRus =                new Option("rus","black","Russian");
	$audioHeb =                new Option("heb","black","Hebrew");
	$audioSpa =                new Option("esp","black","Spanish");
	$audioIta =                new Option("ita","black","Italian");
	$audioTracks =             array($audioDef, $audioEng, $audioDutch, $audioRus, $audioHeb, $audioSpa, $audioIta);
	
	
	//**************** Playback options checkboxes ****************************************************************
	$chkNewPlayerConf = 			 new Checkbox("newConf","Load with new configuration structure");
	$chkPreLoad = 			       new Checkbox("preEnb","Preload");
	$chkAutoPlay =             new Checkbox("autoPlay","Auto Play");
	$chkMuted =                new Checkbox("muted","Muted");
	$chkMuted =                new Checkbox("muted","Muted");
	$chkMutedAutoPlay =        new Checkbox("MutAutPl","Allow muted Auto play");
	$chkNativeTxtTrack =       new Checkbox("natTxtTr","Use native text track");
	$chkPlaysInline =          new Checkbox("plIn","Plays Inline (iPhone only)");
	
	
	//***************** Advertisiments *****************************************************************************
	$imaDis =                  new Checkbox("imaDis","Disable Ads");

	$noAd =                    new Option("noAd","black","No ads","Default");
	$emptyAdTag=			         new Option("emptyAdTag","black","Empty Ad Tag");
	$preWithoutSkip =          new Option("preWithoutSkip","black","Preroll without skip");
	$preWithSkip =             new Option("preWithSkip","black","Preroll with skip");
	$redirectLinear =          new Option("redLin","black","Redirect Linear");
	$redirectError =           new Option("redErr","black","Redirect Error");
	$redirectBrokFall =        new Option("redBrFall","black","Redirect Broken Fallback");
	$nonLinear =               new Option("noLin","black","Non Linear");
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
	$advertisiments =          array($noAd, $emptyAdTag, $preWithoutSkip, $preWithSkip, $redirectLinear, $redirectError, $redirectBrokFall, $nonLinear, $vmapPreroll, $vmapPrerollBumper, $vmapPostroll, $vmapPostrollBumper, $vmapPreMidPost, $vmapPreMidStPost, $vmapPreMidOpPost, $vmapPreMidStPostBumper, $vmapPreMidOpPostBumper, $vmapPre10MidPost, $preCompanions);
								  
	
	//**************** Plugins **************************************************************************************
	$chkYoubora = 		new Checkbox("Youbora","Youbora");
	$youboraDis = 		new Checkbox("youbDis","Disable Youbora");
	$chkKava = 			  new Checkbox("Kava","Kava custom params");
	$kavaDis = 			  new Checkbox("kavaDis","Disable Kava");
	$chkGA = 			    new Checkbox("GA","Google analytics");
	$GAdis = 			    new Checkbox("gaDis","Disable GA");
	$chkComscore =    new Checkbox("Comscore","Comscore");
	$comscDis =       new Checkbox("comscDis","Disable Comscore");
	$VrDis =          new Checkbox("VrDis","Disable VR mode");
	
	$chkDvr =    			new Checkbox("Dvr","Enable Live DVR");
	$chkVRTS =    			new Checkbox("VRTS","toggleStereo");
	$chkVRSIS =    			new Checkbox("VRSIS","startInStereo");

  //******* Automation **********/
  $automationDefault = new Option("0","black","none");
  $automation1 = new Option("1","black","Player - pause after 10 sec - seek after 20 sec to 10 sec from the end");
  $automationOptions = array($automationDefault,$automation1);	
	

	//****************** UI components *****************************************************************************
	$chkWatermark =       new Checkbox("Watermark","Watermark");
	$chkIosFullscreen =   new Checkbox("iOSFull","iOS Fullscreen");

	//****************** OTT *****************************************************************************
	$chkOttAnalytics = new Checkbox("ottAnalyt","OTT analytics");
	$ottDis =          new Checkbox("ottDis","Disable OTT analytics");
	$chkOttlogged =    new Checkbox("ottLog","OTT logged user (Anonymus by default)");
	$disMediaMark =    new Checkbox("disMedMark","Disable Media Mark");
	$disMediaHit =     new Checkbox("disMedHit","Disable Media Hit");
	
	//****************** Watermark placement ***********************************************************************
	$watermark_top_left    = new Option("topLeft","black","top-left");
	$watermark_top_right   = new Option("topRight","black","top-right");
	$watermark_bottom_left = new Option("botLeft","black","bottom-left");
	$watermark_bottom_right = new Option("botRight","black","bottom-right");
	$watermarkPlace = array($watermark_bottom_right, $watermark_bottom_left, $watermark_top_left, $watermark_top_right);

	// The function received options array and options name - return the array with selected option
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
	function checkBoxChecked($chkName){
		$checkBoxString = '';
		$chkText = '';
			if ( $_GET[$chkName->value]== 'on'){
				$chkText = 'checked';
			}
			 $checkBoxString = $checkBoxString . '<input ' .$chkText. ' type="checkbox" name="' .$chkName->value. '">' .$chkName->label. ' ';
		
		return $checkBoxString;
	}
?>	
	<script type="text/javascript">
		function currentDeliveryType(){
			return	kalturaPlayer.ready().then(()=>{
							document.getElementById("curDelType").value = kalturaPlayer.streamType;
							document.getElementById("curEngine").value = kalturaPlayer.engineType;
			});		
	  }	
	</script>
<?php
	echo '
	<div id="menuButton">
		<input type="button" id="expBut" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Open menu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="document.getElementById(\'playerConf\').style.display=\'\'; document.getElementById(\'expBut\').style.display=\'none\';" />  
	</div>
	<div id="clearStorage">
		<input type="button" id="clearStorage" value="&nbsp Clear local storage &nbsp" onclick="localStorage.clear()" />  
	</div>
	<div id="curDeliveryType">
		<input type="text" id="curDelType" size="7" disabled />
	</div>
	
	<table class="tg" id="playerConf" style="display:none">
		<form name="frmPlayer">
			<tr>
			  <tr>
				<th class="tg-title">Environment</th>
			  </tr>
				  
			  <tr>
				<td>Is this secure? (Required for DRM) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
					<input type="button" value="HTTPS" onclick="window.location.href=\'https://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page.php\'" />
				</td>
			  </tr>
					  
			  <tr>		
				<td class="tg-text"> cdn Url &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
					<select id="chkEnv" name="cdnUrl" >'
					 . optionsMakerWithSelected($environments,'cdnUrl') . 
					  '
					</select>
				</td>
			  </tr>	
				   
			  <tr>				  
				<td class="tg-text"> Partner ID &nbsp;&nbsp
					<select id="chkPartner" name="partnerId" >'
					  . optionsMakerWithSelected($partnerIds,'partnerId') .
					'</select>
			    </td>
			  </tr>	  
			  
			  <tr>				  
				<td class="tg-text"> UIConf ID &nbsp;&nbsp
					<select id="chkEnv" name="uiConfId" >'
					  . optionsMakerWithSelected($uiConfIds,'uiConfId') .
					'</select>
			    </td>
			  </tr>	
			  
			  <tr>				  
				<td class="tg-text"> Entry ID &nbsp;&nbsp
					<select id="chkEnv" name="entryId" >'
					  . optionsMakerWithSelected($entriesId,'entryId') .
					'</select>
			    </td>
			  </tr>	
			</tr>	
				
			<tr>
				  <th class="tg-title">Log level</th>
				<tr>
				  <td class="tg-text">
					Please select one option only: &nbsp;&nbsp&nbsp;&nbsp <b>OFF is default </b>
				  </td>
				</tr>
				<tr>
					<tr>				  
					<td class="tg-text">'
					.checkBoxChecked($chkTrace), checkBoxChecked($chkDebug), checkBoxChecked($chkInfo), checkBoxChecked($chkWarning), checkBoxChecked($chkError) .
					'</td>
				</tr>
			    </tr>	
			</tr>		
				
			<tr>
					<th class="tg-title">Stream priority</th>
				<tr>
					<td class="tg-text"> Engine &nbsp;&nbsp
						<select id="chkStreamEngine" name="eng1" >'
						  . optionsMakerWithSelected($engine,'eng1') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp 
						<select id="chkStreamEngine" name="eng2" >'
						  . optionsMakerWithSelected($engine,'eng2') .
						'</select>

						&nbsp;&nbsp;&nbsp 
						<select id="chkStreamEngine" name="eng3" >'
						  . optionsMakerWithSelected($engine,'eng3') .
						'</select>
				   
					</td>
				</tr>
				
				<tr>
					<td class="tg-text"> Format &nbsp;&nbsp
						<select id="chkStreamPriority" name="stPr1" >'
						  . optionsMakerWithSelected($streamPriority,'stPr1') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp;&nbsp 
						<select id="chkStreamPriority" name="stPr2" >'
						  . optionsMakerWithSelected($streamPriority,'stPr2') .
						'</select>
				    
     					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						<select id="chkStreamPriority" name="stPr3" >'
						  . optionsMakerWithSelected($streamPriority,'stPr3') .
						'</select>
					 
					</td>
			  </tr>	
			</tr>	
				  
			<tr>
				<th class="tg-title">Captions</th>
			</tr>
			<tr>				  
				<td class="tg-text"> Explicit text language &nbsp;&nbsp;&nbsp
					<select id="chkTextLanguage" name="txtLang" >'
					  . optionsMakerWithSelected($captions,'txtLang') .
					'</select>
				</td>
			</tr>	
		
			<tr>
				<th class="tg-title">Multi Audio</th>
			</tr>
			<tr>				  
				<td class="tg-text"> Explicit audio language &nbsp;&nbsp;&nbsp
					<select id="chkAudioLanguage" name="audioLang" >'
					  . optionsMakerWithSelected($audioTracks,'audioLang') .
					'</select>
				</td>
            </tr>	
            
            <tr>
				<th class="tg-title">Automation</th>
			</tr>
			<tr>				  
				<td class="tg-text"> Automation script &nbsp;&nbsp;&nbsp
					<select id="chkAutomation" name="a_s" >'
					  . optionsMakerWithSelected($automationOptions,'a_s') .
					'</select>
				</td>
			</tr>	
			
			<tr>
			  <th class="tg-title">Player options</th>
			</tr>
						
			  <tr>
					<td class="tg-text">'
						.	checkBoxChecked($chkNewPlayerConf) .
					'</td>
				</tr>
				
				<tr> 
					<td class="tg-text">'
						.	checkBoxChecked($chkPreLoad) .
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
					<td>'
						.	checkBoxChecked($chkDvr) .
					'</td>
				</tr>	

				<tr>
					<th class="tg-title">Advertisiments</th>
				</tr>
				
				<tr>				  
					<td class="tg-text"> Ad tag &nbsp;&nbsp;&nbsp
						<select id="chkAdTags" name="adTag" >'
							. optionsMakerWithSelected($advertisiments,'adTag') .
							'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp'
							.	checkBoxChecked($imaDis) . 
						'</select>
					</td>
				</tr>	
					
				<tr>
					<th class="tg-title">Plugins</th>
				</tr>
				
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
					<th class="tg-title">UI Components</th>
				</tr>

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
							.	checkBoxChecked($chkIosFullscreen) .
					'</td>
				</tr>

				<tr>
					<th class="tg-title">OTT</th>
				</tr>

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

				</tr>
				
				<tr>
				    <td>&nbsp;&nbsp;&nbsp
						<input type="button" style="background-color:dodgerBlue; font-size:16px; font-weight:bold" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Hide &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="document.getElementById(\'playerConf\').style.display=\'none\';document.getElementById(\'expBut\').style.display=\'\';" />
						<input type="button" style="background-color:red; font-size:16px; font-weight:bold" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="window.location.href=\'http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page.php\'" />
						<input type="submit" style="background-color:green; font-size:16px; font-weight:bold" align="center" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="doRefresh()">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>
				</tr>
			</tr>	
			  
		</table>

		
        '

?>


