
<?php
/***********************************************************************************************
*** Back end side of the test pages                                                          ***
*** Define constants with values for selected by user menu elements                          ***
*** Functions received values from GET and create player environemts and configuration       ***
*** The functions calling in body file                                                       ***
*** Created by Alex Greenfeld                                                                ***
***********************************************************************************************/

include 'getOttKs.php';

// Service URLs for testing and production environment
define("CDN_URL_TESTING", "//qa-apache-php7.dev.kaltura.com");
define("CDN_URL_TESTING_EXTERNAL", "//testing.origin.qa.mkaltura.com");
define("CDN_URL_TESTING_SECURE", "//qa-apache-php7.dev.kaltura.com");
define("CDN_URL_PRODUCTION", "//cdnapi.kaltura.com");
define("CDN_URL_PRODUCTION_SECURE", "//cdnapisec.kaltura.com");
define("CDN_URL_INVALID", "//qa-apache-php777.dev.kaltura.com");
 
// Service URLs for testing and production environment
define("SERVICE_URL_TESTING", "http://qa-apache-php7.dev.kaltura.com");
define("SERVICE_URL_PRODUCTION", "//www.kaltura.com");
define("SERVICE_URL_PRODUCTION_HTTP", "https://www.kaltura.com");

// Partner's IDs for testing and production clear/DRM
define("PARTNER_ID_TESTING", "1091");
define("PARTNER_ID_SAAS_S3", "6627");
define("PARTNER_ID_TESTING_DRM", "4171");
define("PARTNER_ID_PRODUCTION", "1740481");
define("PARTNER_ID_PRODUCTION_DRM", "1804331");
define("PARTNER_ID_OTT", "198");
define("PARTNER_ID_OTT_PROD", "3009");
//define("OTT_KS", getOttKs());

// UIConf IDs testing and production
//define("testReg", "15213699"); - old default player
define("testReg", "15215933");
define("testCanary", "15225670");
define("testlatestReg", "15215773");
define("testNoPlug", "15214756");
define("testOvpOren", "15220044");
define("testReg_studio", "15214757");
define("testReg_youbora", "15213618"); //youbora
define("testDrm", "15213831");
define("prodReg", "42690372");
define("prodlatest", "42897261");
define("prodDrm", "42699992");
define("ott", "15213832");
define("ottNoPlug", "15216119");
define("ottProd", "42700261");


//OTT partner ID - testing
define("ottPartId", "198");

//OTT partner ID - production
define("ottPartIdProd", "3009");

//OTT UIConf ID - testing
define("15213832", "15213832");

//OTT UIConf ID - production
define("44323041", "44323041");

//OTT entries ID - testing
// 259153 - Web SD, Mobile_Devices_Main_SD
define("259153", "259153");

//OTT formats
define("webSd", "Web SD");
define("mobDevMainSd", "Mobile_Devices_Main_SD");


//Path for player loader JS 
define("PLAYER_LOADER_PATH", "../New_player-loader.js");

//Target ID - player placeholder
define("TARGET_ID", "player-placeholder");


//OVP testing media ID - long video
define("tstBasic", "0_wifqaipd");

define("tstLong", "0_4ktof5po");

define("tstNoCap", "0_8m28fcj9");

define("tstAbr", "0_wu32qrt3");

define("tstManSw", "0_clvqgcxy");

define("tstSintel", "0_creai7om");

//OVP testing media ID - Disney - captions --> Ger, Rus, Eng, Off ; multi audio --> Spanish, English
define("tstCapAud", "0_df8g87v8");

//OVP testing media ID - Access Control - Unautorized domain
define("tstAcConUnDom", "0_18w3samm");

//OVP testing media ID - captions --> Ger, Rus, Eng, Off , default captions - Eng
define("tstEngCapDef", "0_x8n0mub7");

//OVP testing media ID - Disney - captions --> Ger, Rus, Eng, Off , default captions - Ger; multi audio --> Spanish, English
define("tstCapDef", "0_ibls79gu");

//OVP testing media ID - captions with styling
define("tstCapStyle", "0_e0hrp0mt");

//OVP testing media ID - CAP - captions --> Japanese, English
define("tstCapCapt", "0_qq9jh1i3");

//OVP testing media ID - CAP - captions --> Ger, Rus, Eng, Fre, Spa, Off
define("tstMultiCapt", "0_hut6q26s");

//OVP testing media ID - DFXP captions
define("tstDfxpCap", "0_v779yrzt");

//OVP testing media ID - multi audio --> Italian, Russian, English
define("tstAud", "0_ttfy4uu0");

// Audio entry - AC/DC 
define("tstAudEnt", "0_12xzpcxr");

//audio entry - hotel California
define("tstAudEnt2", "0_p8aigvgu");

//audio entry - with no default captions
define("audNoDefCap", "0_r1jgnbku");

//audio entry - with default captions
define("audDefCap", "0_rujs51rc");

//VOD with QR Code - 15 minutes
define("tstQr15", "0_k1yesaha");

define("tstbp", "0_tvhgji01");

define("tstDrm", "0_2jiaa9tb");

define("tstDrmAbr", "0_7o8zceol");

// Youtube entry - The Hobbit (04:40)
define("tstYoutube1", "0_m0vc6n31");

// Youtube entry - Lord 
define("tstYoutube2", "0_k8ifo4xm");


define("prBasic", "1_kbyh1guy");

//OVP production media ID - shuttle launch - captions --> Ger, Rus, Eng, Off ;
define("prCap", "1_av4ptxvx");

//OVP production media ID - Disney - captions --> Ger, Rus, Eng, Off ; multi audio --> Spanish, English
define("prAud", "1_1tvsf9ru");

// Youtube entry - The Hobbit (04:40)
define("tstYoutube1", "0_m0vc6n31");

define("prDrm", "1_r62g23gz");

define("prFair", "1_etkmak5i");

define("tstKlive", "0_f8re4ujs");

// Fairplay testing
define("tstFairplay", "0_4s6xvtx3");

define("tstKliveDvr", "0_nwkp7jtx");

define("tstUlive", "0_uwai8bwr");

define("tstUliveDvr", "0_popae503");

// DRM testing QR Code video - 15 minutes
define("tstDrmQr15m", "0_pfm0w31u");

// DRM testing QR Code video - 10 seconds
define("tstDrmQr10s", "0_002sdr66");

//OVP testing external live - Whether Nation internal source(production)
define("tstWnIntSrc", "0_fdb6sbgm");

//OVP Kaltura live - DRM Dash
define("prodKLiveDrm", "1_6vjig5vg");

//OVP production Kaltura Live with DVR
define("prodKLiveDvr", "1_fdv46dba");

//OVP production Whether Nation Live
define("prodWNLive", "0_3ai9qbgy");

//OVP Inter - Live
define("tstInter", "0_dfail5wb");

//TRT Live 
define("tstTrtLive", "0_3n2hernr");

//OVP Exoplanet 360 video - testing
define("tstExo360", "0_d8u8u878");

//OVP Swiss Airbus 360 video - testing
define("tstAir360", "0_dod3wrta");

//OVP Sky dive 360 video - testing
define("tstStar360", "0_20ul8164");

//OVP Wilderness 360 video - testing
define("tstWild360", "0_xjjki1id");

//OVP Exoplanet 360 video - testing
define("tstSky360", "0_od42vb2y");

//OVP prod 360 video - prod
define("pr360", "1_ppzfk01p");

//OVP prod 360 video - prod
define("prYoutube", "1_wbiziece");

//OVP DRM 360 video - testing (no supported)
define("tstDrm360", "0_nq4v8mc2");

//OVP ABC - Live
define("tstLiveAbc", "0_itdftc7v");

//OVP - 10 sec QA mid right - Oleg's entry for automation
define("10QrMidRight", "0_yzkvj5qp");

//OVP - 30 sec QA mid right - Oleg's entry for automation
define("30QrMidRight", "0_y8an8mze");

//OVP - 30 sec QA code - Oleg's entry for automation
define("30SecQr", "0_l55rpce1");

//OVP - 60 sec QA code - Oleg's entry for automation
define("60SecQr", "0_pueqvb6y");

//OVP - 60 sec QA code with text in each QR frame
define("60SecQrTxt", "0_y3kjob5z");

//OTT - long VOD (51:30 minutes)
define("ottLongVod", "259153");

//OTT - VOD (37:17 minutes)
define("ottVod", "258459");

//OTT - Whether Nation Live
define("ottExtLive", "276507");

//OTT - VOD Dash DRM
define("ottDrm", "460627");




// ******************** Functions ***********************
// Retrieve SDN URL, selected by user
function getCdnUrl(){
	switch ($_GET['cdnUrl']) {
		case "test":
			$selectedEnv = CDN_URL_TESTING;
			break;
		case "testExt":
			$selectedEnv = CDN_URL_TESTING_EXTERNAL;
			break;
		case "testSec":
			$selectedEnv = CDN_URL_TESTING_SECURE;
			break;
		case "prod":
			$selectedEnv = SERVICE_URL_PRODUCTION_HTTP;
			break;
		case "prodSec":
			$selectedEnv = CDN_URL_PRODUCTION_SECURE;
			break;
		case "invalid":
			$selectedEnv = CDN_URL_INVALID;
		break;
		default:
			$selectedEnv = CDN_URL_TESTING;
	}
	   return $selectedEnv;
}

// Retrieve Partner ID, selected by user
function getPartnerId(){
	switch ($_GET['partnerId']) {
		case "1091":
			$partnerId = PARTNER_ID_TESTING;
			break;
		case "6627":
			$partnerId = PARTNER_ID_SAAS_S3;
			break;
		case "4171":
			$partnerId = PARTNER_ID_TESTING_DRM;
			break;
		case "1740481":
			$partnerId = PARTNER_ID_PRODUCTION;
			break;
		case "1804331":
			$partnerId = PARTNER_ID_PRODUCTION_DRM;
			break;
		case "198":
			$partnerId = PARTNER_ID_TESTING;
			break;
		case "3009":
			$partnerId = PARTNER_ID_PRODUCTION;
			break;	
		default:
			$partnerId = PARTNER_ID_TESTING;
	}
	   return $partnerId;
}

// Checked ,whether Partner is OTT or OVP and return selected partner
function getPartnerIdProvider(){
	if ($_GET['partnerId'] == "198") {
		$partnerIdProvider = PARTNER_ID_OTT;
	}elseif($_GET['partnerId'] == "3009"){
        $partnerIdProvider = PARTNER_ID_OTT_PROD;
	}else{
		$partnerIdProvider = getPartnerId();
	}
	return $partnerIdProvider;
}
/* no relevant for now
function ottFormats(){
	if (empty($_GET['format1']) OR empty($_GET['format2'])){
		$ottFormat = "";
	}else{
		$f1 = constant($_GET['format1']);
		$f2 = constant($_GET['format2']);
		$ottFormat = "
				formats: ['$f1','$f2']
				";
	}
	return $ottFormat;
}
*/

//Retrieve UI Config ,selected by user
function getUIConf() {
	if (empty($_GET['ottUiConf'])){
		if (!empty($_GET['uiConfId'])){
			if (is_numeric($_GET['uiConfId'])){
				$uiConfId = $_GET['uiConfId'] ;
			} else {
				if (!empty($_GET['selectedUiConf'])){
					$uiConfId = $_GET['selectedUiConf'];
				} else {
					$uiConfId = constant($_GET['uiConfId']) ;
				}	
			}
		}else{
			$uiConfId = testReg;
		}
	}else{
		$uiConfId = constant($_GET['ottUiConf']);
	}	
	return $uiConfId;
}

// Retrieve Entry ID ,selected by user
function getEntryID() {
	if (!empty($_GET['selectedEntryId'])){
		$entryID = $_GET['selectedEntryId'];
	} else {
		if ($_GET['entryId'] == "empty" OR empty($_GET['entryId'])){
			if (!empty($_GET['ottEntry'])){
				$entryID = constant($_GET['ottEntry']);
			}else{
				$entryID = tstBasic;
			}
		}else{
			$entryID = constant($_GET['entryId']);
			if (empty($entryID)) {
				$entryID = $_GET['entryId'];
			}
		}
	}
	return $entryID;
}

// Adding change media code, when user enabled the feature
function getChangeMedia() {
	if ($_GET['chgMed'] == "empty"){
		return "
			var media = get_input_url(\"secondEntry\");
			window.mediaList = window.mediaList || media.split(\",\");
			if (mediaList.length >0){
			kalturaPlayer.loadMedia({entryId:mediaList[0]});
			mediaList = mediaList.slice(1);
			}";
	}	
	else{
		$mediaID = constant($_GET['chgMed']);
		return "
			kalturaPlayer.loadMedia({entryId:'$mediaID'});
		";
	}	
}


function logLevel(){
	// Available log levels: "TRACE" -> "DEBUG" -> "INFO" -> "WARN" -> "ERROR" -> "OFF"
	
		if ( $_GET['logs']=='trace'){
			$logLevel = "\"TRACE\",";
		}elseif ($_GET['logs']=='deb'){
			$logLevel = "\"DEBUG\",";
		}elseif($_GET['logs']=='inf'){
			$logLevel = "\"INFO\",";
		}elseif($_GET['logs']=='warn'){
			$logLevel = "\"WARN\",";
		}elseif($_GET['logs']=='err'){
			$logLevel = "\"ERROR\",";
		}else{
			$logLevel = "\"DEBUG\",";
		}
	return "\n logLevel: $logLevel\n";
}

/* Adding playlist code, when user selected Playlist by Playlist ID or Playlist by Entries list
 Also added auto continue, loop, countdown - when checked 
 Calling in the test_page_body file */
function getPlayerWhenPlaylist(){
	$autoCont = '';
	$showCountDown = '';
	$playlistId = $_GET['pllstId'];
	//receive entries list as string
	$entriesList = $_GET['pllstByEntId'];
	
	$countDownTTS = $_GET['cntDwnTTS'];
	$countDownDuration = $_GET['cntDwnDur'];

	if (empty($countDownTTS)){
		$countDownTTS = "10";
	}
	if(empty($countDownDuration)){
		$countDownDuration = "5";
	}

	// move entries list string to array
	$entriesArray = explode(",",$entriesList);
	// Adding quotation marks to each element of the array
	foreach ($entriesArray as &$value){
		$value = '"'.$value.'"';
	}
	unset($value);
	//move updated array back to string
	$entriesList = implode(",",$entriesArray);

	if ($_GET['plLstAutoCont']=='on'){
		$autoCont = "true";
	}else{
		$autoCont = "false";
	}

	if ($_GET['plLstLoop']=='on'){
		$playlistLoop = "true";
	}else{
		$playlistLoop = "false";
	}

	if ($_GET['cntDwn']=='on'){
		$showCountDown = "true";
	}else{
		$showCountDown = "false";
	}

	if (!empty($entriesList) AND $_GET['plLstEntId']=='on'){
		// Adding code for Playlist by Entries IDs list
		return 
		"\n\t try {
			var kalturaPlayer = KalturaPlayer.setup(playerConfig);
			kalturaPlayer.loadPlaylistByEntryList({entries: [$entriesList]}, {options: {autoContinue: $autoCont , loop: $playlistLoop}, countdown: {timeToShow: $countDownTTS , duration: $countDownDuration, showing: $showCountDown}});
		  } catch (e) {
			console.error(e.message)
		  }";
	}elseif(!empty($playlistId) AND $_GET['plLstPlLstId']=='on'){
		// Adding code for Playlist by Playlist ID
		return 
			"\n\t try {
			var kalturaPlayer = KalturaPlayer.setup(playerConfig);
			kalturaPlayer.loadPlaylist({playlistId: '$playlistId'}, {options: {autoContinue: $autoCont , loop: $playlistLoop}, countdown: {timeToShow: $countDownTTS, duration: $countDownDuration, showing: $showCountDown}});
		  } catch (e) {
			console.error(e.message)
		  }";
	}else{
		return "getPlayer(playerConfig, mediaInfo);";
	}	
}


// The function return path for .js file with player setup and load media
function getPlayerLoaderPath() {
   return PLAYER_LOADER_PATH;
}

// Return div ID the player will be loaded
function getTargetId() {
   return TARGET_ID;
}

function getOvpTestingEntryIdCaptions() {
   return OVP_TESTING_ENTRY_ID_CAPTIONS;
}

// Media info section ,includes for now entry ID
function mediaInfo($entryID) {
   return "
			entryId: '$entryID'," ;
}

//Adding CDN URL and service URL  and provide configuration
function providerConf($partnerID,$uiConfId) {
	$uiConfRemark = "";
	$receivedPartnerID = $_GET['partnerId'];
	switch ($_GET['cdnUrl']) {
		case "test":
			$selectedCdnUrl = CDN_URL_TESTING;
			$selectedServiceUrl = SERVICE_URL_TESTING;
			break;
		case "testSec":
			$selectedCdnUrl = CDN_URL_TESTING_SECURE;
			$selectedServiceUrl = CDN_URL_TESTING_SECURE;
			break;
		case "prod":
			$selectedCdnUrl = CDN_URL_PRODUCTION;
			$selectedServiceUrl = SERVICE_URL_PRODUCTION;
			break;
		case "prodSec":
			$selectedCdnUrl = CDN_URL_PRODUCTION_SECURE;
			$selectedServiceUrl = SERVICE_URL_PRODUCTION;
			break;
		default:
			$selectedCdnUrl = CDN_URL_TESTING;
			$selectedServiceUrl = SERVICE_URL_TESTING;
	}
		
	if ($receivedPartnerID == '198' OR $receivedPartnerID == '3009') {
		if ($receivedPartnerID == '198'){
			$env = "env: {
				serviceUrl: 'https://api-preprod.ott.kaltura.com/v5_2_8/api_v3/' 
			}";
		}elseif($receivedPartnerID == '3009'){
            $env = "env: {
				serviceUrl: 'https://rest-us.ott.kaltura.com/v4_5/api_v3/' 
			}";
		}	
	
		if ( $_GET['ottLog']=='on'){
			$ottValidKs = getOttKs();
		}else{
			$ottValidKs = '';
		}
		
		$uiConfRemark = "
		uiConfId: $uiConfId,
		$ottValidKs 
		$env ";
	}else{	
		$uiConfRemark = "\tuiConfId: $uiConfId";
	}

	if (empty($_GET['aecEnb'])){
								$autoExtCaptions = "";
							}else{
								$autoExtCaptions = "env: {
															experimentalLoadApiCaptions: true	
														 } ";
							}	
   return "\n\t\t\t\t\tpartnerId: $partnerID,		
				$uiConfRemark, $autoExtCaptions
				";
}

// Adding Playback options that selected by user: start time, preload, autoplay, loop, mute, mute auto play fallback, native tracks, plays inline
function playbackLoadingOptions() {
	$startValue = $_GET['strPos'];
	$startPosition ="";
			                if ($startValue == 0){
								$startPosition = " \"startTime\": -1, ";
							}else{
								$startPosition = " \"startTime\": $startValue, ";
							}
   
							if ( isset($_GET['preEnb'])){
								$preload = " \"preload\": \"auto\", ";
							}else{
								$preload = " \"preload\": \"none\", ";
							}
						
	
							if ( isset($_GET['autoPlay'])){
								$autoPlay = " \"autoplay\": true, ";
							}else{
								$autoPlay = " \"autoplay\": false, ";
							}
							
							if ( isset($_GET['loopEnb'])){
								$loop = " \"loop\": true, ";
							}else{
								$loop = " \"loop\": false, ";
							}
						
	
							if ( isset($_GET['muted'])){
								$muted = " \"muted\": true, ";
							}else{
								$muted = " \"muted\": false, ";
							}
						
						
	
							if ( isset($_GET['MutAutPl'])){
								$mutedAutoPlay = " \"allowMutedAutoPlay\": true, ";
							}else{
								$mutedAutoPlay = " \"allowMutedAutoPlay\": false, ";
							}
						
						
							if ( isset($_GET['natTxtTr'])){
								$useNativeTextTrack = " \"useNativeTextTrack\": true, ";
							}else{
								$useNativeTextTrack = " \"useNativeTextTrack\": false, ";
							}
						
						
							if ( isset($_GET['plIn'])){
								$playsInline = " \"playsinline\": true, ";
							}else{
								$playsInline = " \"playsinline\": false, ";
							}

							if ( isset($_GET['iOSFull'])){
								$browserFullscreen = " \"inBrowserFullscreen\": true, ";
							}else{
								$browserFullscreen = " \"inBrowserFullscreen\": false, ";
							}
						
	// Adding text captions, selected by user in available captions list or auto						
	if (!empty($_GET['txtLang'])){
							if ( $_GET['txtLang']=='eng'){
								$explicitTextLanguage = " \"textLanguage\": \"eng\", ";
							}elseif ( $_GET['txtLang']=='nld'){
								$explicitTextLanguage = " \"textLanguage\": \"nld\", ";
							}elseif ( $_GET['txtLang']=='rus'){
								$explicitTextLanguage = " \"textLanguage\": \"rus\", ";
							}elseif ( $_GET['txtLang']=='heb'){
								$explicitTextLanguage = " \"textLanguage\": \"heb\", ";
							}elseif ( $_GET['txtLang']=='esp'){
								$explicitTextLanguage = " \"textLanguage\": \"esp\", ";
							}elseif ( $_GET['txtLang']=='auto'){
								$explicitTextLanguage = " \"textLanguage\": \"auto\", ";
							}
						}
	
	// Adding audio language ,selected by user
	if (!empty($_GET['audioLang'])){
							if ( $_GET['audioLang']=='eng'){
								$explicitAudioLanguage = " \"audioLanguage\": \"en\", ";
							}elseif ( $_GET['audioLang']=='ita'){
								$explicitAudioLanguage = " \"audioLanguage\": \"it\", ";
							}elseif ( $_GET['audioLang']=='rus'){
								$explicitAudioLanguage = " \"audioLanguage\": \"ru\", ";
							}elseif ( $_GET['audioLang']=='esp'){
								$explicitAudioLanguage = " \"audioLanguage\": \"es\", ";
							}
						}
	
		return 	"
		$startPosition
		$preload
		$loop
		$autoPlay
		$muted
		$mutedAutoPlay
		$useNativeTextTrack
		$playsInline
		$explicitTextLanguage
		$explicitAudioLanguage
		$browserFullscreen" ;		
	
}

// Return playback options - media engine: html/flash, delivery type: hls/dash/mp4
function playbackOptions() {
   return '
			"options": {	
				 "html5": {
					"hls": {
					},
					"dash": {
					}
				 }
				  }' ;
}

// adding delivery type by priority (3 levels), available delivery types: hls/dash/progressive
// adding media engine by priority (3 leveles), available media engines: flash/html
function streamPriority() {
	$selectedStreamPriority = '';
	if (!empty($_GET['stPr1'])){
		if ($_GET['stPr1']!='def' AND $_GET['stPr2']!='def' AND $_GET['stPr3']!='def'){   
			if ( $_GET['stPr1']=='hls'){
				$first = "hls";
			}elseif ( $_GET['stPr1']=='dash'){
				$first = "dash";
			}elseif ( $_GET['stPr1']=='progressive'){
				$first = "progressive";
			}
				
			if ( $_GET['stPr2']=='hls'){
				$second = "hls";
			}elseif ( $_GET['stPr2']=='dash'){
				$second = "dash";
			}elseif ( $_GET['stPr2']=='progressive'){
				$second = "progressive";
			}
	
			if ( $_GET['stPr3']=='hls'){
				$third = "hls";
			}elseif ( $_GET['stPr3']=='dash'){
				$third = "dash";
			}elseif ( $_GET['stPr3']=='progressive'){
				$third = "progressive";
			}
			
			if ( $_GET['eng1']=='flash'){
				$eng1 = "flash";
			}else{
				$eng1 = "html5";
			}

			if ( $_GET['eng2']=='flash'){
				$eng2 = "flash";
			}else{
				$eng2 = "html5";
			}

			if ( $_GET['eng3']=='flash'){
				$eng3 = "flash";
			}else{
				$eng3 = "html5";
			}
			
				

		$selectedStreamPriority = 	"\n\t\t\t\t\t\t \"streamPriority\": [
			\t\t\t\t\t{
				\t\t\t\t\"engine\": \"$eng1\",
				\t\t\t\t\"format\": \"$first\"
			\t\t\t\t\t},
			\t\t\t\t\t{
				\t\t\t\t\"engine\": \"$eng2\",
				\t\t\t\t\"format\": \"$second\"
			\t\t\t\t\t},
			\t\t\t\t\t{
				\t\t\t\t\"engine\": \"$eng3\",
				\t\t\t\t\"format\": \"$third\"
			\t\t\t\t\t}
			\t\t\t]";
		}
	}else{				
	   $selectedStreamPriority = '';
	}
 return  	"$selectedStreamPriority";
}

// Run automation scenarios 
function getAutomationCode(){
    if (!empty($_GET['a_s'])){
        if ($_GET['a_s'] == "1"){
            return 'kalturaPlayer.play();let playerPaused = false;let playerSeeked=false;let pausePlayer=()=>{if (kalturaPlayer.currentTime>20 && !playerSeeked){kalturaPlayer.currentTime = kalturaPlayer.duration-10;playerSeeked=true};if (kalturaPlayer.currentTime >= 10 && !playerPaused){playerPaused=true; kalturaPlayer.pause();setTimeout(()=>{kalturaPlayer.play()},2000)}};setInterval(pausePlayer,200)';
        }
    }
}

//Adding parameters to Source section
function sourcesOptions() {
	if (empty($_GET['frcExtStr'])){
		$forceRedirectExtStream = "";
	}elseif($_GET['frcExtStr'] == "frcExtStrDis"){
		$forceRedirectExtStream = "\t\t\t\t \"forceRedirectExternalStreams\": false, ";
	}elseif($_GET['frcExtStr'] == "frcExtStrEnb"){
		$forceRedirectExtStream = "\t\t\t\t \"forceRedirectExternalStreams\": true, ";
	}

	return "\n\t\t\t\t\t\"options\":{
		$forceRedirectExtStream
	\t\t\t\t},\n";
}

function externalCaptions() {
	$hebrewCaptions = "";
	$japaneseCaptions = "";
	$russianCaptions = "";

	if ($_GET['extHeb'] == "on"){
		if ($_GET['extHebDef'] == "on"){
			$isHebDefault = "true";
		}else{
			$isHebDefault = "false";
		}
		$hebrewCaptions = "
		    \t\t\t{
			\t\t\turl: \"http://externaltests.dev.kaltura.com/player/library_Player_V3/Captions/Caption_files_VTT/hebrew.vtt\",
			\t\t\t\"label\": \"Heb\",
			\t\t\t\"language\": \"he\",
			\t\t\t\"type\": \"vtt\",
			\t\t\t\"default\": $isHebDefault
			\t\t\t},";
	}
	if($_GET['extJap'] == "on"){
		if ($_GET['extJapDef'] == "on"){
			$isJapDefault = "true";
		}else{
			$isJapDefault = "false";
		}
		$japaneseCaptions = "
		    \t\t\t{
			\t\t\turl: \"http://externaltests.dev.kaltura.com/player/library_Player_V3/Captions/Caption_files_VTT/japanese.vtt\",
			\t\t\t\"label\": \"Jap\",
			\t\t\t\"language\": \"ja\",
			\t\t\t\"type\": \"vtt\",
			\t\t\t\"default\": $isJapDefault
		    \t\t\t},";
	}
	if($_GET['extRus'] == "on"){
		if ($_GET['extRusDef'] == "on"){
			$isRusDefault = "true";
		}else{
			$isRusDefault = "false";
		}
		$russianCaptions = "
		    \t\t\t{
			\t\t\turl: \"http://externaltests.dev.kaltura.com/player/library_Player_V3/Captions/Caption_files_VTT/russian.vtt\",
			\t\t\t\"label\": \"Rus\",
			\t\t\t\"language\": \"ru\",
			\t\t\t\"type\": \"vtt\",
		    \t\t\t\"default\": $isRusDefault
			\t\t\t},";
	}
	
	if (empty($_GET['extHeb']) & empty($_GET['extJap']) & empty($_GET['extRus'])){
		$selectedCaptions = "";
	}else{
		$selectedCaptions = "\n\t\t\t\t\t\"captions\":[
			$hebrewCaptions
			$japaneseCaptions
			$russianCaptions
		    ]";
	}
	return $selectedCaptions;
}

function componentsVersions(){
	$componentsList = $_GET['compVers'];
	$componentsList = substr($componentsList,0,-1);
	return "/versions/$componentsList" ;
}




?>


