<?php
include 'getOttKs.php';

// Service URLs for testing and production environment
define("CDN_URL_TESTING", "//qa-apache-php7.dev.kaltura.com");
define("CDN_URL_TESTING_SECURE", "//qa-apache-php7.dev.kaltura.com");
define("CDN_URL_PRODUCTION", "//cdnapi.kaltura.com");
define("CDN_URL_PRODUCTION_SECURE", "//cdnapisec.kaltura.com");
define("CDN_URL_INVALID", "//qa-apache-php777.dev.kaltura.com");
 
// Service URLs for testing and production environment
define("SERVICE_URL_TESTING", "http://qa-apache-php7.dev.kaltura.com");
define("SERVICE_URL_PRODUCTION", "//www.kaltura.com");
define("SERVICE_URL_PRODUCTION_HTTP", "http://www.kaltura.com");

// Partner's IDs for testing and production clear/DRM
define("PARTNER_ID_TESTING", "1091");
define("PARTNER_ID_TESTING_DRM", "4171");
define("PARTNER_ID_PRODUCTION", "1740481");
define("PARTNER_ID_PRODUCTION_DRM", "1804331");
define("PARTNER_ID_OTT", "198");
//define("OTT_KS", getOttKs());

// UIConf IDs testing and production
//define("testReg", "15213699"); - old default player
define("testReg", "15215933");
define("testlatestReg", "15215773");
define("testNoPlug", "15214756");
define("testReg_studio", "15214757");
define("testReg_youbora", "15213618"); //youbora
define("testDrm", "15213831");
define("prodReg", "42690372");
define("prodlatest", "42897261");
define("prodDrm", "42699992");
define("ott", "15213832");
define("ottNoPlug", "15216119");
define("ottProd", "42700261");


//OTT partner ID
define("ottPartId", "198");

//OTT UIConf ID
define("15213832", "15213832");

//OTT entries ID 
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

define("tstAbr", "0_wu32qrt3");

define("tstManSw", "0_clvqgcxy");



//OVP testing media ID - Disney - captions --> Ger, Rus, Eng, Off ; multi audio --> Spanish, English
define("tstCapAud", "0_df8g87v8");

//OVP testing media ID - captions --> Ger, Rus, Eng, Off , default captions - Eng
define("tstEngCapDef", "0_x8n0mub7");

//OVP testing media ID - Disney - captions --> Ger, Rus, Eng, Off , default captions - Ger; multi audio --> Spanish, English
define("tstCapDef", "0_fl4ioobl");

//OVP testing media ID - CAP - captions --> Japanese, English
define("tstCapCapt", "0_qq9jh1i3");

//OVP testing media ID - multi audio --> Italian, Russian, English
define("tstAud", "0_ttfy4uu0");

// Audio entry - AC/DC 
define("tstAudEnt", "0_12xzpcxr");

//audio entry - hotel California
define("tstAudEnt2", "0_p8aigvgu");

define("tstDrm", "0_2jiaa9tb");

define("tstDrmAbr", "0_7o8zceol");

define("prBasic", "1_kbyh1guy");

//OVP production media ID - shuttle launch - captions --> Ger, Rus, Eng, Off ;
define("prCap", "1_av4ptxvx");

//OVP production media ID - Disney - captions --> Ger, Rus, Eng, Off ; multi audio --> Spanish, English
define("prAud", "1_1tvsf9ru");

define("prDrm", "1_r62g23gz");

define("prDrm", "1_etkmak5i");

define("tstKlive", "0_f8re4ujs");

// Fairplay testing
define("tstFairplay", "0_4s6xvtx3");

define("tstKliveDvr", "0_nwkp7jtx");

define("tstUlive", "0_uwai8bwr");

define("tstUliveDvr", "0_popae503");

//OVP testing external live - Whether Nation internal source(production)
define("tstWnIntSrc", "0_fdb6sbgm");

//OVP testing external live - Whether Nation external source(Akamai)
define("tstExLive", "0_dkiz5qwp");

//OVP testing external live - ABC
define("tstExLiveAbc", "0_itdftc7v");

//OVP Kaltura live - DRM Dash
define("prodKLiveDrm", "1_6vjig5vg");

//OVP production Kaltura Live with DVR
define("prodKLiveDvr", "1_fdv46dba");

//OVP Carbon TV - Live
define("tstCarbonLive", "0_6su9qlhl");

//External Live with captions
define("tstExLiveCap", "0_baicmo96");

//OVP 1 Channel Russia - Live
define("tst1RusLive", "0_a4igk6ub");

//OVP Match TV - Live
define("matchTvLive", "0_o7luih60");

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

//OTT - long VOD (51:30 minutes)
define("ottLongVod", "259153");

//OTT - VOD (37:17 minutes)
define("ottVod", "258459");

//OTT - Whether Nation Live
define("ottExtLive", "276507");

//OTT - VOD Dash DRM
define("ottDrm", "460627");




// ******************** Functions ***********************

function getCdnUrl(){
	switch ($_GET['cdnUrl']) {
		case "test":
			$selectedEnv = CDN_URL_TESTING;
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

function getPartnerId(){
	switch ($_GET['partnerId']) {
		case "1091":
			$partnerId = PARTNER_ID_TESTING;
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
		default:
			$partnerId = PARTNER_ID_TESTING;
	}
	   return $partnerId;
}

function getPartnerIdProvider(){
	if ($_GET['partnerId'] == "198") {
		$partnerIdProvider = PARTNER_ID_OTT;
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

function getUIConf() {
	if (empty($_GET['ottUiConf'])){
		if (!empty($_GET['uiConfId'])){
			$uiConfId = constant($_GET['uiConfId']) ;
		}else{
			$uiConfId = testReg;
		}
	}else{
		$uiConfId = constant($_GET['ottUiConf']);
	}	
	return $uiConfId;
}

function getEntryID() {
	if ($_GET['entryId'] == "empty" OR empty($_GET['entryId'])){
		if (!empty($_GET['ottEntry'])){
			$entryID = constant($_GET['ottEntry']);
		}else{
			$entryID = tstBasic;
		}
	}else{
		$entryID = constant($_GET['entryId']);
		}
	return $entryID;
}


function logLevel(){
	// Available log levels: "TRACE" -> "DEBUG" -> "INFO" -> "WARN" -> "ERROR" -> "OFF"
	
		if ( $_GET['trace']=='on'){
			$logLevel = "\"TRACE\",";
		}elseif ($_GET['deb']=='on'){
			$logLevel = "\"DEBUG\",";
		}elseif($_GET['inf']=='on'){
			$logLevel = "\"INFO\",";
		}elseif($_GET['warn']=='on'){
			$logLevel = "\"WARN\",";
		}elseif($_GET['err']=='on'){
			$logLevel = "\"ERROR\",";
		}else{
			$logLevel = "\"OFF\",";
		}
	return "
		logLevel: $logLevel
		 ";
}


function getPlayerLoaderPath() {
   return PLAYER_LOADER_PATH;
}

function getTargetId() {
   return TARGET_ID;
}

function getOvpTestingEntryIdCaptions() {
   return OVP_TESTING_ENTRY_ID_CAPTIONS;
}

function mediaInfo($entryID) {
   return "
			entryId: '$entryID'," ;
}

function providerConf($partnerID,$uiConfId) {
	$uiConfRemark = "";
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
		
	if ($_GET['partnerId']== '198') {
		if ( $_GET['ottLog']=='on'){
			$ottValidKs = getOttKs();
		}else{
			$ottValidKs = '';
		}
		
		$uiConfRemark = "
		$ottValidKs 
			env: {
				serviceUrl: 'http://api-preprod.ott.kaltura.com/v4_7/api_v3/'
			}
		";
	}else{	
		$uiConfRemark = "
			uiConfId: $uiConfId
		";
	}	
   return "
		partnerId: $partnerID,
		
				$uiConfRemark 
				";
}

function playbackLoadingOptions() {
	
   
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
		$preload
		$autoPlay
		$muted
		$mutedAutoPlay
		$useNativeTextTrack
		$playsInline
		$explicitTextLanguage
		$explicitAudioLanguage" ;		
	
}

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
			
				

		$selectedStreamPriority = 	"
			\"streamPriority\": [
				{
					\"engine\": \"$eng1\",
					\"format\": \"$first\"
				},
				{
					\"engine\": \"$eng2\",
					\"format\": \"$second\"
				},
				{
					\"engine\": \"$eng3\",
					\"format\": \"$third\"
				}
			]";
		}
	}else{				
	   $selectedStreamPriority = '';
	}
 return  	"$selectedStreamPriority";
}

function getAutomationCode(){
    if (!empty($_GET['a_s'])){
        if ($_GET['a_s'] == "1"){
            return 'kalturaPlayer.play();let playerPaused = false;let playerSeeked=false;let pausePlayer=()=>{if (kalturaPlayer.currentTime>20 && !playerSeeked){kalturaPlayer.currentTime = kalturaPlayer.duration-10;playerSeeked=true};if (kalturaPlayer.currentTime >= 10 && !playerPaused){playerPaused=true; kalturaPlayer.pause();setTimeout(()=>{kalturaPlayer.play()},2000)}};setInterval(pausePlayer,200)';
        }
    }
}




?>


