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
	$environments =            array($environment_test, $environment_testSec, $environment_prod, $environment_prodSec);
	
	
	//**************** Partner ID ***********************************************************************************
	$partnerId_test =          new Option("1091","limeGreen","1091 - testing regular");
	$partnerId_test_drm =      new Option("4171","green","4171 - testing DRM");
	$partnerId_prod =          new Option("1740481","dodgerBlue","1740481 - production regular");
	$partnerId_prod_drm =      new Option("1804331","blue","1804331 - production DRM");
	$partnerIds =              array($partnerId_test, $partnerId_test_drm, $partnerId_prod, $partnerId_prod_drm);
	
	
	//**************** UI Conf IDs **********************************************************************************
	$uiConfId_test =           new Option("testReg","limeGreen","15211585 - Testing ");
	$uiConfId_test_drm =       new Option("testDrm","green","15211591 - Testing DRM");
	$uiConfId_prod =           new Option("prodReg","dodgerBlue","41565881 - Production");
	$uiConfId_prod_drm =       new Option("prodDrm","blue","41566121 - Production DRM");
	$uiConfIds =               array($uiConfId_test, $uiConfId_test_drm, $uiConfId_prod, $uiConfId_prod_drm);
	
	
	//**************** Entry IDs ************************************************************************************
	$entryId_empty =           new Option("empty","limeGreen","default entry");
	$entryId_testBasic =       new Option("tstBasic","limeGreen","0_wifqaipd: basic vod - testing");
	$entryId_testLong =        new Option("tstLong","limeGreen","0_4ktof5po: long vod - testing");
	$entryId_testABR =         new Option("tstAbr","limeGreen","0_wu32qrt3: ABR - testing");
	$entryId_testManSwitch =   new Option("tstManSw","limeGreen","0_clvqgcxy: Manual switch - testing");
	$entryId_testCapAud =      new Option("tstCapAud","limeGreen","0_df8g87v8: cap/multAud(Disney) - testing");
	$entryId_testCapDef =      new Option("tstCapDef","limeGreen","0_fl4ioobl: def captions Ger - testing");
	$entryId_testAud =         new Option("tstAud","limeGreen","0_ttfy4uu0: multAud(it/en/ru) - testing");
	$entryId_testAudEnt =      new Option("tstAudEnt","limeGreen","0_12xzpcxr: audio entry - testing");
	$entryId_testDrm =         new Option("tstDrm","green","0_2jiaa9tb: DRM - testing");
	$entryId_testDrmAbr =      new Option("tstDrmAbr","green","0_7o8zceol: DRM ABR - testing");
	$entryId_prodBasic =       new Option("prBasic","dodgerBlue","1_kbyh1guy: basic vod - prod");
	$entryId_prodCap =         new Option("prCap","dodgerBlue","1_av4ptxvx: captions vod - prod");
	$entryId_prodAud =         new Option("prAud","dodgerBlue","1_1tvsf9ru: multiaudio vod - prod");
	$entryId_prodDrm =         new Option("prDrm","blue","1_r62g23gz: DRM - prod");
	$entryId_testKltLive =     new Option("tstKlive","limeGreen","0_f8re4ujs: Kaltura Live no DVR - testing");
	$entryId_testKltLiveDvr =  new Option("tstKliveDvr","limeGreen","0_nwkp7jtx: Kaltura Live with DVR - testing");
	$entryId_testUniLive =     new Option("tstUlive","limeGreen","0_uwai8bwr: Universal Live no DVR - testing");
	$entryId_testUniLiveDvr =  new Option("tstUliveDvr","limeGreen","0_popae503: Universal Live with DVR - testing");
	$entryId_testExtLive =     new Option("tstExLive","limeGreen","0_dkiz5qwp: WhetherNation Live external - testing");
	$entryId_testWnIntSrcLive= new Option("tstWnIntSrc","limeGreen","0_fdb6sbgm: WhetherNation Live internal - testing");
	$entryId_testCarbonLive =  new Option("tstCarbonLive","limeGreen","0_6su9qlhl: Carbon TV Live - testing");
	$entryId_test1TVRusLive =  new Option("tst1RusLive","limeGreen","0_6su9qlhl: 1 Channel Russia Live - testing");
	$entryId_testExtLiveAbc =  new Option("tstLiveAbc","limeGreen","0_itdftc7v: ABC Live - testing");
	$entryId_prodKltLiveDvr =  new Option("prodKLiveDvr","dodgerBlue","1_fdv46dba: Kaltura Live with - DVR prod");
	$entryId_prodKltLiveDrm =  new Option("prodKLiveDrm","dodgerBlue","1_6vjig5vg: Kaltura Live DRM - prod");
	$entryId_10SecQrMidRight = new Option("10QrMidRight","red","0_yzkvj5qp: 10sec QR mid right - auto");
	$entryId_30SecQrMidRight = new Option("30QrMidRight","red","0_y8an8mze: 30sec QR mid right - auto");
	$entryId_30SecQr =         new Option("30SecQr","red","0_l55rpce1: QR Code 30 sec - auto");
	$entryId_60SecQr =         new Option("60SecQr","red","0_pueqvb6y: QR Code 60 sec - auto");

	$entriesId =               array($entryId_empty, $entryId_testBasic, $entryId_testLong, $entryId_testABR, $entryId_testManSwitch, $entryId_testCapAud, $entryId_testCapDef, $entryId_testAud, $entryId_testAudEnt, $entryId_testDrm, $entryId_testDrmAbr, $entryId_prodBasic, $entryId_prodCap,
	                               $entryId_prodAud, $entryId_prodDrm, $entryId_testKltLive, $entryId_testKltLiveDvr, $entryId_testUniLive, $entryId_testExtLive, $entryId_testWnIntSrcLive, $entryId_testCarbonLive, $entryId_testExtLiveAbc,
								   $entryId_test1TVRusLive, $entryId_prodKltLiveDvr, $entryId_prodKltLiveDrm, $entryId_10SecQrMidRight, $entryId_30SecQrMidRight, $entryId_30SecQr, $entryId_60SecQr);
	
	
	//**************** Log level **************************************************************************************
	$chkTrace = 			   new Checkbox("trace","Trace");
	$chkDebug = 			   new Checkbox("deb","Debug");
	$chkInfo = 			  	   new Checkbox("inf","Info");
	$chkWarning = 			   new Checkbox("warn","Warning");
	$chkError = 			   new Checkbox("err","Error");
	
	
	//***************** Stream priority ******************************************************************************
	$stPr_def =                new Option("def","black","");
	$stPr_hls =                new Option("hls","black","HLS");
	$stPr_dash =               new Option("dash","black","DASH");
	$stPr_mp4 =                new Option("progressive","black","MP4");
	$streamPriority =         array($stPr_def, $stPr_hls, $stPr_dash, $stPr_mp4);
		
	
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
	
	
	//**************** Playback options checkboxes for first media ****************************************************************
	$chkPreLoad_1 = new Checkbox("preEnb","Preload");
	$chkAutoPlay_1 =             new Checkbox("autoPlay","Auto Play");
	$chkMuted_1 =                new Checkbox("muted","Muted");
	$chkMuted_1 =                new Checkbox("muted","Muted");
	$chkMutedAutoPlay_1 =        new Checkbox("MutAutPl","Allow muted Auto play");
	$chkNativeTxtTrack_1 =       new Checkbox("natTxtTr","Use native text track");
	$chkPlaysInline_1 =          new Checkbox("plIn","Plays Inline (iPhone only)");

	//**************** Playback options checkboxes for second media ****************************************************************
	$chkPreLoad_2 = new Checkbox("preEnb","Preload");
	$chkAutoPlay_2 =             new Checkbox("autoPlay","Auto Play");
	$chkMuted_2 =                new Checkbox("muted","Muted");
	$chkMuted_2 =                new Checkbox("muted","Muted");
	$chkMutedAutoPlay_2 =        new Checkbox("MutAutPl","Allow muted Auto play");
	$chkNativeTxtTrack_2 =       new Checkbox("natTxtTr","Use native text track");
	$chkPlaysInline_2 =          new Checkbox("plIn","Plays Inline (iPhone only)");
	
	
	
	//***************** Advertisiments *****************************************************************************
	$noAd =                    new Option("noAd","black","No ads");
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
	$advertisiments =          array($noAd, $preWithoutSkip, $preWithSkip, $redirectLinear, $redirectError, $redirectBrokFall, $nonLinear, $vmapPreroll, $vmapPrerollBumper, $vmapPostroll, 
	                              $vmapPostrollBumper, $vmapPreMidPost, $vmapPreMidStPost, $vmapPreMidOpPost, $vmapPreMidStPostBumper, $vmapPreMidOpPostBumper, $vmapPre10MidPost, $preCompanions);
								  
	
	//**************** Plugins **************************************************************************************
	$chkYoubora = 		new Checkbox("Youbora","Youbora");
	$chkKava = 			  new Checkbox("Kava","Kava custom params");
	$chkWatermark =   new Checkbox("Watermark","Watermark");
	
	//**************** OTT configurations ***************************************************************************
	$empty  = new Option("","black","");
	$ottPartner198 = new Option("198","black","198");
	$ottPartnerId =  array($empty, $ottPartner198);
	
	$ottBasicUiConf = new Option("15211574","black","15211574");
	$ottUiConfId =  array($empty, $ottBasicUiConf);
	
	$entry259153 = new Option("259153","black","259153");
	$ottEntryId =  array($empty, $entry259153);
	
	
	$webSd = new Option("webSd","black","Web SD");
	$ottFormat1 =         array($empty, $webSd);
	
	$mobDevMainSd = new Option("mobDevMainSd","black","Mobile Devices Main SD");
	$ottFormat2 =         array($empty, $mobDevMainSd);
	
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
	
	
	
    echo '
    
	<input type="button" id="expBut" style="background-color:dodgerBlue; font-size:16px; font-weight:bold" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Open menu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="document.getElementById(\'playerConf\').style.display=\'\'; document.getElementById(\'expBut\').style.display=\'none\';" />  

	<table class="tg" id="playerConf" style="display:none">
		<form name="frmPlayer">
		<tr>
			<tr>
				<th class="tg-title">First media config</th>
				<th class="tg-title">Second media config</th>
			</tr>

			<tr>
				<th class="tg-title">Environment</th>
				<th class="tg-title">Environment</th>
			</tr>
					  
			<tr>
				<td>Is this secure? (Required for DRM) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
					<input type="button" value="HTTPS" onclick="window.location.href=\'https://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page_change_media.php\'" />
				</td>

				<td>Is this secure? (Required for DRM) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
					<input type="button" value="HTTPS" onclick="window.location.href=\'https://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page_change_media.php\'" />
				</td>
		  </tr>
					  
		  <tr>		
				<td class="tg-text"> cdn Url &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
					<select id="chkEnv" name="cdnUrl_1" >'
					 . optionsMakerWithSelected($environments,'cdnUrl_1') . 
					  '
					</select>
				</td>

				<td class="tg-text"> cdn Url &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
					<select id="chkEnv" name="cdnUrl_2" >'
					 . optionsMakerWithSelected($environments,'cdnUrl_2') . 
					  '
					</select>
				</td>
			</tr>	
				   
			<tr>				  
				<td class="tg-text"> Partner ID &nbsp;&nbsp
					<select id="chkPartner" name="parnterId_1" >'
					  . optionsMakerWithSelected($partnerIds,'parnterId_1') .
					'</select>
				</td>
				
				<td class="tg-text"> Partner ID &nbsp;&nbsp
					<select id="chkPartner" name="parnterId_2" >'
					  . optionsMakerWithSelected($partnerIds,'parnterId_2') .
					'</select>
			  </td>
			</tr>	
			  
			<tr>				  
				<td class="tg-text"> UIConf ID &nbsp;&nbsp
					<select id="chkEnv" name="uiConfId_1" >'
					  . optionsMakerWithSelected($uiConfIds,'uiConfId_1') .
					'</select>
				</td>
				
				<td class="tg-text"> UIConf ID &nbsp;&nbsp
					<select id="chkEnv" name="uiConfId_2" >'
					  . optionsMakerWithSelected($uiConfIds,'uiConfId_2') .
					'</select>
			  </td>
			</tr>	
			  
			<tr>				  
				<td class="tg-text"> Entry ID &nbsp;&nbsp
					<select id="chkEnv" name="entryId_1" >'
					  . optionsMakerWithSelected($entriesId,'entryId_1') .
					'</select>
				</td>
				
				<td class="tg-text"> Entry ID &nbsp;&nbsp
					<select id="chkEnv" name="entryId_2" >'
					  . optionsMakerWithSelected($entriesId,'entryId_2') .
					'</select>
			  </td>
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
					<th class="tg-title">Stream priority</th>
				<tr>
					<td class="tg-text"> 1st
						<select id="chkStreamPriority" name="stPr1_1" >'
						  . optionsMakerWithSelected($streamPriority,'stPr1_1') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp 2nd
						<select id="chkStreamPriority" name="stPr2_1" >'
						  . optionsMakerWithSelected($streamPriority,'stPr2_1') .
						'</select>
				    
     					&nbsp;&nbsp;&nbsp 3rd
						<select id="chkStreamPriority" name="stPr3_1" >'
						  . optionsMakerWithSelected($streamPriority,'stPr3_1') .
						'</select>
					</td>

					<td class="tg-text"> 1st
						<select id="chkStreamPriority" name="stPr1_2" >'
						  . optionsMakerWithSelected($streamPriority,'stPr1_2') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp 2nd
						<select id="chkStreamPriority" name="stPr2_2" >'
						  . optionsMakerWithSelected($streamPriority,'stPr2_2') .
						'</select>
				    
     					&nbsp;&nbsp;&nbsp 3rd
						<select id="chkStreamPriority" name="stPr3_2" >'
						  . optionsMakerWithSelected($streamPriority,'stPr3_2') .
						'</select>
					</td>
			  </tr>	
			</tr>	
				  
			<tr>
				<th class="tg-title">Captions</th>
				<th class="tg-title">Captions</th>
			</tr>

			<tr>				  
				<td class="tg-text"> Explicit text language &nbsp;&nbsp;&nbsp
					<select id="chkTextLanguage" name="txtLang_1" >'
					  . optionsMakerWithSelected($captions,'txtLang_1') .
					'</select>
				</td>

				<td class="tg-text"> Explicit text language &nbsp;&nbsp;&nbsp
					<select id="chkTextLanguage" name="txtLang_2" >'
					  . optionsMakerWithSelected($captions,'txtLang_2') .
					'</select>
				</td>
			</tr>	
		
			<tr>
				<th class="tg-title">Multi Audio</th>
				<th class="tg-title">Multi Audio</th>
			</tr>

			<tr>				  
				<td class="tg-text"> Explicit audio language &nbsp;&nbsp;&nbsp
					<select id="chkAudioLanguage" name="audioLang_1" >'
					  . optionsMakerWithSelected($audioTracks,'audioLang_1') .
					'</select>
				</td>

				<td class="tg-text"> Explicit audio language &nbsp;&nbsp;&nbsp
					<select id="chkAudioLanguage" name="audioLang_2" >'
					  . optionsMakerWithSelected($audioTracks,'audioLang_2') .
					'</select>
				</td>
			</tr>	
			
			<tr>
				<th class="tg-title">Player options</th>
				<th class="tg-title">Player options</th>
			</tr>
						
			<tr>
				<td class="tg-text">'
					.	checkBoxChecked($chkPreLoad_1) .
				'</td>

				<td class="tg-text">'
					.	checkBoxChecked($chkPreLoad_2) .
				'</td>
												
			</tr>	
			
			<tr>
					<td>'
						.	checkBoxChecked($chkAutoPlay_1) .
					'</td>

					<td>'
						.	checkBoxChecked($chkAutoPlay_2) .
					'</td>
			</tr>	
			
			<tr>
					<td>'
						.	checkBoxChecked($chkMuted_1) .
					'</td>

					<td>'
						.	checkBoxChecked($chkMuted_2) .
					'</td>
			</tr>
			
			<tr>
					<td>'
						.	checkBoxChecked($chkMutedAutoPlay_1) .
					'</td>

					<td>'
						.	checkBoxChecked($chkMutedAutoPlay_2) .
					'</td>
			</tr>

			<tr>
					<td>'
						.	checkBoxChecked($chkNativeTxtTrack_1) .
					'</td>

					<td>'
						.	checkBoxChecked($chkNativeTxtTrack_2) .
					'</td>
			</tr>

			<tr>
					<td>'
						.	checkBoxChecked($chkPlaysInline_1) .
					'</td>

					<td>'
						.	checkBoxChecked($chkPlaysInline_2) .
					'</td>
			</tr>	
				
				<tr>
					<th class="tg-title">Advertisiments</th>
				</tr>
				
				<tr>				  
					<td class="tg-text"> Ad tag &nbsp;&nbsp;&nbsp
						<select id="chkAdTags" name="adTag" >'
						  . optionsMakerWithSelected($advertisiments,'adTag') .
						'</select>
					</td>
				</tr>	
					
				<tr>
					<th class="tg-title">Plugins</th>
				</tr>
				
				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkYoubora) .
					'</td>
				</tr>	
				
				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkWatermark) .
					'</td>
				</tr>

				<tr>				  
					<td class="tg-text"> '
							.	checkBoxChecked($chkKava) .
					'</td>
				</tr>
				
				<tr>
					<th class="tg-title">OTT</th>
				</tr>
				
				<tr>		
				<td class="tg-text"> Partner ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
					<select id="chkEnv" name="partnerIdProv" >'
					 . optionsMakerWithSelected($ottPartnerId,'partnerIdProv') . 
					  
					'</select>
				</td>
			  </tr>	
			  
			  <tr>		
				<td class="tg-text"> UI Config &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
					<select id="chkEnv" name="ottUiConf" >'
					 . optionsMakerWithSelected($ottUiConfId,'ottUiConf') . 
					  
					'</select>
				</td>
			  </tr>	
				   
			  <tr>				  
				<td class="tg-text"> Entry ID &nbsp;&nbsp
					<select id="chkPartner" name="ottEntry" >'
					  . optionsMakerWithSelected($ottEntryId,'ottEntry') .
					'</select>
			    </td>
			  </tr>	
			  <tr>
			        <td class="tg-text"> Formats &nbsp;&nbsp
						<select id="chkStreamPriority" name="format1" >'
						  . optionsMakerWithSelected($ottFormat1,'format1') .
						'</select>  
					
						&nbsp;&nbsp;&nbsp 
						<select id="chkStreamPriority" name="format2" >'
						  . optionsMakerWithSelected($ottFormat2,'format2') .
						'</select>
				    </td>
			   </tr>	
			

				<tr>
				    <td>&nbsp;&nbsp;&nbsp
						<input type="button" style="background-color:dodgerBlue; font-size:16px; font-weight:bold" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Hide &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="document.getElementById(\'playerConf\').style.display=\'none\';document.getElementById(\'expBut\').style.display=\'\';" />
						<input type="button" style="background-color:red; font-size:16px; font-weight:bold" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Clear &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="window.location.href=\'http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/Player_V3_generic_page.php\'" />
						<input type="submit" style="background-color:green; font-size:16px; font-weight:bold" align="center" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" onclick="doRefresh()">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>
				</tr>
			</td>
		</tr>	
			  
	</table>'
        

?>


