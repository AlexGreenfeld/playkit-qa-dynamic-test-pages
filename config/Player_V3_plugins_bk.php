<?php

/*********************************************************************************************************
*** Constants with Ads tags for monetization testing                                                   ***
*** Defines functions for adding different plugins to player configuration                             ***
*** Plugins: IMA, analytics, VR, Chromecast                                                            ***
*** Created by Alex Greenfeld                                                                          ***
*********************************************************************************************************/


// Preroll without Skip
define("VAMPAdsPlaylistWithSkip", "https://pubads.g.doubleclick.net/gampad/ads?sz=850x478&iu=%2F21633895671%2FQA%2Fdesktop%2FCOH&gdfp_req=1&env=vp&output=vmap&unviewed_position_start=1&ad_rule=1&cmsid=2467608&vid=0_yzueovgc&url=https%3A%2F%2Fphoenix.voot.com%2Fshows%2Fsilsila%2F1%2F606786%2Fis-rajdeep-following-nandini-%2F619893&correlator=3802680835283530&cust_params=sample_ar%3Dskippablelinear%26age%3Dnull%26gender%3Dnull%26Aud%3D3p_PersonalFinance%26Aud%3D3ponly_males_35-44_precision%26Aud%3D3p_fashionandbeauty%26Aud%3D3p_Branded_OnlineFnBDelivery%26Aud%3D3p_affluent_plow%26Aud%3D3p_BusinessCareer%26Aud%3Dall%26Aud%3Dparents_phigh%26Aud%3D3p_finance%26Aud%3D3p_WellnessConscious%26Aud%3Dparents_kids9-15yrs_phigh%26Aud%3Dviewers_KaisiYehYaariaan_RoadiesXtreme%26Aud%3D3p_news%26Aud%3D3p_NotOnlineShoppers%26Aud%3D3p1p_Parents_pmed%26Aud%3D3p_TechSavvy%26Aud%3D3p_OfflineShoppers%26Aud%3D3p_CarOwners%26Aud%3D3p_beauty%26Aud%3D3p_travel%26Aud%3D3p_affluent_pmed%26Aud%3D%20viewers_2times%26Aud%3Dhul_brylcreemjul18_lookalike%26Aud%3D3p_OnlineFnBDelivery%26Aud%3D3p_Automobiles%26Aud%3Dparents_kids5-8yrs_phigh%26Aud%3D3p_CarOwnersOnly&ppid=164caf3253454-067338de8904e5-47e1039-144000-164caf325369af&sdkv=h.3.225.0&sdki=3c0d&scor=2511038084234114&adk=1603479852&u_so=l&osd=2&frm=0&sdr=1&is_amp=0&adsid=NT&vpa=auto&vpmute=0&mpt=kaltura-player-js&mpv=0.31.5&cookie=ID%3Dff45c1e3342e3048%3AT%3D1532413302%3AS%3DALNI_MY31mnzIjQ-HQqBrw_pmW3qVDhFXg&afvsz=450x50%2C468x60%2C480x70%2C728x90&ged=ve4_td5_tt2_pd5_la5000_er14.80.164.80_vi0.0.759.1010_vp0_eb16491");


// Preroll without Skip
define("preWithoutSkip", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&cust_params=sample_ct%3Dlinear&correlator=[timestamp]");

// Long preroll without Skip
define("longPreSkip", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x360&iu=/6062/iab_vast_samples/skippable&ciu_szs=300x250,728x90&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&url=[referrer_url]&correlator=[timestamp]");

// Preroll with Skip
define("preWithSkip", "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator=[timestamp]");

// Redirect Linear
define("redLin", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&cust_params=sample_ct%3Dredirectlinear&correlator=[timestamp]");

// Redirect Error
define("redErr", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&cust_params=sample_ct%3Dredirecterror&nofb=1&correlator=[timestamp]");

// Redirect Broken Fallback
define("redBrFall", "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dredirecterror&correlator=[timestamp]");

// Non linear
define("noLin", "https://pubads.g.doubleclick.net/gampad/ads?sz=480x70&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dnonlinear&correlator=[timestamp]");

// Small Non linear
define("smNoLin", "http://externaltests.dev.kaltura.com/player/Vast_xml/kaltura_overlay.xml");

// VMAP Preroll
define("vmPre", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpreonly&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Preroll and Bumper
define("vmPreBum", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpreonlybumper&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Postroll
define("vmPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpostonly&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Postroll and bumper
define("vmPostBum", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpostonlybumper&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-mid-post rolls
define("vmPreMidPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpost&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-3mid-standard-post rolls
define("vmPreMidStPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostpod&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-3mid-standard-post rolls and bumper
define("vmPreMidStPostBum", "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=vmap&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ar%3Dpremidpostpodbumper&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-3mid-optimized-post rolls
define("vmPreMidOpPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostoptimizedpod&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-3mid-optimized-post rolls and bumper
define("vmPreMidOpPostBum", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostoptimizedpodbumper&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-10mid-post rolls
define("vmPre10MidPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostlongpod&cmsid=496&vid=short_tencue&correlator=[timestamp]");

// Pre-roll with companions
define("preWithComp", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpreonly&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP: Midroll & Postroll
define("VmapMidPost", "http://externaltests.dev.kaltura.com/standalonePlayer/Ads/adManager/customAdTags/vmap/inline/mid_post.xml");

// Vast 3 Pre-roll pod - second URL broken
define("VastPrePod1", "https://externaltests.dev.kaltura.com/standalonePlayer/Ads/adManager/customAdTags/vast/preroll_pod_3_middle_broken.xml");

// Vast 3 Pre-roll pod
define("VastPrePod3", "https://externaltests.dev.kaltura.com/standalonePlayer/Ads/adManager/customAdTags/vast/preroll_pod_3.xml");

// Vast pre-roll with 3 redirects
define("Vast3Redirect", "http://externaltests.dev.kaltura.com/playKitApp/adManager/customAdTags/vast/wrapper_in_wrapper_2.xml");

// Vast pre-roll with 5 redirects
define("Vast5Redirect", "http://externaltests.dev.kaltura.com/playKitApp/adManager/customAdTags/vast/wrapper_in_wrapper.xml");

//Empty Ad Tag
define ("emptyAdTag", '');

//No ad
define ("noAd", null);

// Empty bumper URL
define("noBump", "");

// Kaltura KMC bumper - 8 seconds duration
define("kmcBump", "http://externaltests.dev.kaltura.com/player/library_Player_V3/Bumper/bumper_samples/Bumper.mp4");

// Cat and mirror- 30 seconds duration
define("catBump", "http://externaltests.dev.kaltura.com/player/library_Player_V3/Bumper/bumper_samples/Funny_Cat_And_mirror_Video_Funny_video_Whats_App_Videos_30_Seconds_Status_Video.mp4");



// The function return selected Ad tag
function getSelectedAdTag() {
	return constant($_GET['adTag']);
}

// The function return selected bumper
function getSelectedBumper() {
	return constant($_GET['bumper']);
}

// List of plugins were moved by GET
function plugins() {
		// Youbora plugin
		if ( $_GET['Youbora']=='on' AND empty($_GET['youbDis'])){
		    $youboraPlugin = Youbora("false");
		}elseif ( $_GET['youbDis']=='on' OR ($_GET['youbDis']=='on' AND $_GET['Youbora']=='on')){
			$youboraPlugin = Youbora("true");
		}else{
			$youboraPlugin = '';
		}

		// Kava plugin
		if ( $_GET['Kava']=='on' AND empty($_GET['kavaDis'])){
			$kavaPlugin = Kava("false");
		}elseif ( $_GET['kavaDis']=='on' OR ($_GET['kavaDis']=='on' AND $_GET['Kava']=='on')){
			$kavaPlugin = Kava("true");
		}else{
			$kavaPlugin = '';
		}

		// Google analytics plugin
		if ( $_GET['GA']=='on' AND empty($_GET['gaDis'])){
			$gaPlugin = GA("false");
		}elseif ( $_GET['gaDis']=='on' OR ($_GET['gaDis']=='on' AND $_GET['GA']=='on')){
			$gaPlugin = GA("true");
		}else{
			$gaPlugin = '';
		}

		// Advertisiment plugin 
		if ($_GET['adTag']=="noAd" AND empty($_GET['imaDis'])){
			$imaPlugin = '';
		}elseif (!($_GET['adTag']=='noAd') AND $_GET['imaDis']=='on'){
			$imaPlugin = imaPlugin(getSelectedAdTag(),"true");
        }elseif (!($_GET['adTag']=='noAd') AND empty($_GET['imaDis'])){
			$imaPlugin = imaPlugin(getSelectedAdTag(),"false");
		}elseif ($_GET['imaDis']=='on'){
			$imaPlugin = imaPlugin(getSelectedAdTag(),"true");
		}

		// Comscore plugin
        if ( $_GET['Comscore'] == 'on' AND empty($_GET['comscDis'])){
			$comscorePlugin = Comscore("false");
		}elseif ( $_GET['comscDis']=='on' OR ($_GET['comscDis']=='on' AND $_GET['Comscore']=='on')){
			$comscorePlugin = GA("true");
        }else{
			$comscorePlugin = '';
		}
		
		// Enable/disable OTT analytics
		if ($_GET['uiConfId'] =='ott'){
			if ($_GET['ottAnalyt']=='on' AND empty($_GET['ottDis'])){
				$ottAnalytics = ottAnalytics("false");
			}elseif ( $_GET['ottDis']=='on' OR ($_GET['ottDis']=='on' AND $_GET['ottAnalyt']=='on')){
				$ottAnalytics = ottAnalytics("true");
			}	
        }else{
			$ottAnalytics = '';
		}

		// VR plugin
		if (($_GET['VrDis'])=='on') {
			$switchVR = vrPlugin("true");
		}else{
			$switchVR = vrPlugin("false");
		}

		if ($_GET['dai'] =='noDai' AND empty($_GET['daiDis'])) {
			$daiPlugin = '';
		}elseif ($_GET['dai'] !='noDai' AND empty($_GET['daiDis'])){
			$daiPlugin = daiPlugin("false");
		}elseif ($_GET['dai'] !='noDai' AND $_GET['daiDis'] == 'on'){
			$daiPlugin = daiPlugin("true");
		}elseif ($_GET['dai'] =='noDai' AND $_GET['daiDis'] == 'on'){
			$daiPlugin = daiPlugin("true");
		}

		// Bumper plugin 
		if (($_GET['bumper']=="noBump" AND empty($_GET['bumpDis'])) OR empty($_GET['bumper'])){
			$bumperPlugin = '';
		}elseif (!($_GET['bumper']=="noBump") AND $_GET['bumpDis']=='on'){
			$bumperPlugin = bumperPlugin(getSelectedBumper(),"true");
        }elseif (!($_GET['bumper']=="noBump") AND empty($_GET['bumpDis'])){
			$bumperPlugin = bumperPlugin(getSelectedBumper(),"false");
		}elseif ($_GET['bumpDis']=='on'){
			$bumperPlugin = bumperPlugin(getSelectedBumper(),"true");
		} 

	return "\n\t\t\t\t\tplugins: { $youboraPlugin $kavaPlugin $daiPlugin $gaPlugin $imaPlugin $bumperPlugin $comscorePlugin $ottAnalytics $switchVR
			\t\t}               //Plugins";
}	

// Adding IMA plugin configuration 
function imaPlugin($adTag,$switch) {
	$playAdAfterTime = $_GET['adAftTime'];
	$enablePreload = $_GET['imaPre'];
	$timeValue = "";
	$numRedirects = $_GET['numRedirects'];

	if (empty($playAdAfterTime)){
		$timeValue = "";
	}else{
		$timeValue = "playAdsAfterTime: $playAdAfterTime";
	}

	if (empty($enablePreload)){
		$imaPreload = "";
	}else{
		$imaPreload = "enablePreloading: true,";
	}

	if (empty($numRedirects)){
		$numOfAdRedirects = "";
	}else{
		$numOfAdRedirects = "numRedirects: $numRedirects,";
	}

	if ($adTag == "preWithComp"){
		$plugin = "\n\t\t\t\t\t\t ima: {
		\t\t\t\t disable: $switch ,
		\t\t\t\t $numOfAdRedirects
		\t\t\t\t adsRenderingSettings:{ $imaPreload $timeValue },
        \t\t\t\t adTagUrl: '\'$adTag\'',
        \t\t\t\t companions: {
          \t\t\t\t\t testCompanionSquare: {
            \t\t\t\t\t\t width: 300,
            \t\t\t\t\t\t height: 250,
            \t\t\t\t\t\t sizeCriteria: 'SelectExactMatch'
			\t\t\t\t\t },
			\t\t\t\t\t testCompanionLong: {
				\t\t\t\t\t\t width: 728,
				\t\t\t\t\t\t height: 90,
				\t\t\t\t\t\t sizeCriteria: 'SelectExactMatch'
				\t\t\t\t\t }
				\t\t\t\t }
				\t\t\t }, ";
	}else{
		if ($_GET['adTag']=='VAMPAdsPlaylistWithSkip'){   
		$plugin = "\n\t\t\t\t\t\t ima: {
				\t\t\t\t disable: $switch ,
				\t\t\t\t adTagUrl: '$adTag',
				\t\t\t\t debug: true,
				\t\t\t\t $numOfAdRedirects
				\t\t\t\t adsRenderingSettings: { $imaPreload useStyledLinearAds:true, $timeValue },
				\t\t\t }," ;
		}
		else{
			$plugin = "\n\t\t\t\t\t\t ima: {
				\t\t\t disable: $switch ,
				\t\t\t adTagUrl: '$adTag',
				\t\t\t debug: true,
				\t\t\t\t $numOfAdRedirects
				\t\t\t adsRenderingSettings:{ $imaPreload $timeValue },
				\t\t }," ;
			}
	}
	return $plugin;
}

// Enable Live DVR
function enableDvr() {
	
	if (empty($_GET['Dvr'])){
		$dvrStatus = "";
	}elseif($_GET['Dvr'] == "on"){
		$dvrStatus = "\n\t\t\t\t\t \"dvr\" : true,\n\t\t\t\t\t ";
	}
	return $dvrStatus;
}

// Return Youbora configuration
function Youbora($switch) {
   return "\n\t\t\t\t\t\t youbora: {
			\t\t\t\t disable: $switch ,
            \t\t\t\t options: {
               \t\t\t\t\t 'accountCode': 'kalturatest'
            \t\t\t\t },
        	\t\t\t }," ;
}

// return Kava configuration
function Kava($switch) {
	return "\n\t\t\t\t\t\t kava:{
			\t\t\t\t disable: $switch ,
			\t\t\t\t customVar1: 100,
			\t\t\t\t customVar2: \"Hello\",
			\t\t\t\t customVar3: \"my custom var 3\",
			\t\t\t\t applicationVersion: \"V3 0.28.0\",
			\t\t\t\t playbackContext: \"Any\",
			\t\t\t }, " ;
}

// Return Google analytics configuration
function GA($switch) {
	return "\n\t\t\t\t\t\t googleAnalytics: {
			\t\t\t\t disable: $switch ,
			\t\t\t\t trackingId: 'UA-1234567-89',
			\t\t\t\t tracking: {
			\t\t\t\t\t events: {
			\t\t\t\t\t\t //	PLAYING: {
			\t\t\t\t\t\t //		action: 'playing'
			\t\t\t\t\t\t //	}	
			\t\t\t\t\t }
			\t\t\t\t }
			\t\t\t }," ;
}

// Return Comscore configuration
function Comscore($switch) {
	return "\n\t\t\t\t\t\t comscore: {
			\t\t\t\t disable: $switch ,
       		\t\t\t\t publisherId: \"QA2105\"
			\t\t\t }," ;
}
		
// Return OTT analytics
function ottAnalytics($switch) {
	if ( $_GET['disMedMark']=='on'){
		$disMark = "true";
	}else{
		$disMark = "false";
	}

	if ( $_GET['disMedHit']=='on'){
		$disHit = "true";
	}else{
		$disHit = "false";
	}
		return "\n\t\t\t\t\t\tottAnalytics: {
			\t\t\t\t disable: $switch ,
			\t\t\t\t disableMediaMark: $disMark,
			\t\t\t\t disableMediaHit: $disHit,
			\t\t\t\t experimentalEnableLiveMediaHit: true
			\t\t\t }," ;
}	

// Return VR configuration		
function vrPlugin($switch){
	$vrconfig = "";
	if ($_GET['VRTS']=='on' OR $_GET['VRSIS']=='on' OR $_GET['VrDis']=='on'){
		if ( $_GET['VRTS']=='on'){
			$enVRTS = "true";
		}else{
			$enVRTS = "false";
		}
		
		if ( $_GET['VRSIS']=='on'){
			$enVRSIS = "true";
		}else{
			$enVRSIS = "false";
		}
		
		$vrConfig =  "\n\t\t\t\t\t\t vr: {
					\t\t\t disable: $switch,
					\t\t\t toggleStereo: $enVRTS,
					\t\t\t startInStereo: $enVRSIS
				\t\t\t },";
				
	}else{
		$vrConfig = "";
	}			
    return $vrConfig;			  
}


// Return Chromecast configuration, according to chromecast application ID
function chromeCast(){
	// if ( $_GET['vastEn']=='on'){
	// 	$vastEnable = "{\n vast: true \n}";
	// }
	// else{
	// 	$vastEnable = "{\n vast: false \n}";
	// }

	if ($_GET['adTag'] == "noAd"){
		$vastEnable = "";
	}elseif (ereg("^vm", $_GET['adTag'])){
		$vastEnable = "\n\t\t\t\t\t advertising: \n\t\t\t\t\t\t{ vast: false \n\t\t\t\t\t }";
	}else{
		$vastEnable = "\n\t\t\t\t\t advertising: \n\t\t\t\t\t\t{ vast: true \n\t\t\t\t\t }";
	}

	if ( $_GET['ccEnb']=='on'){
		if ($_GET[partnerId]=='198'){
				$ccConfiguration = "\t\t\t\t cast: {\n\t\t\t\t\t receiverApplicationId: \"7A7E9AA2\", $vastEnable \n\t\t\t\t }, \n";
			}elseif ($_GET[partnerId]=='1091'){
				$ccConfiguration = "\t\t\t\t cast: {\n\t\t\t\t\t receiverApplicationId: \"B202D11C\" , $vastEnable \n\t\t\t\t }, \n";
				}elseif ($_GET[partnerId]=='4171'){
					$ccConfiguration = "\t\t\t\t cast: {\n\t\t\t\t\t receiverApplicationId: \"9F2FB15E\" , $vastEnable \n\t\t\t\t }, \n";
					}elseif ($_GET[partnerId]=='1740481' OR $_GET[partnerId]=='1804331'){
						$ccConfiguration = "\t\t\t\t cast: {\n\t\t\t\t\t receiverApplicationId: \"40A30D06\" , $vastEnable \n\t\t\t\t }, \n";
					}
	}else{
		$ccConfiguration = "";
	}
		
return $ccConfiguration;
}

function daiPlugin($switch){
	if ($_GET['dai'] == "daiHls") {
		return "\n\t\t\t\t\t\t imadai: {
			    \t\t\t\tdisable: $switch,
				\t\t\t\tassetTitle:'VOD - Tears of Steel',
				\t\t\t\tcontentSourceId: '19463',
				\t\t\t\tvideoId: 'tears-of-steel'
				\t\t\t\t},";
	}elseif ($_GET['dai'] == "daiDash"){
			return "\n\t\t\t\t\t\t imadai: {
				\t\t\t\tdisable: $switch,
				\t\t\t\tassetTitle:'BBB-widevine',
				\t\t\t\tcontentSourceId: '2474148',
					\t\t\t\tvideoId: 'bbb-widevine'
				\t\t\t\t},";
	}elseif ($_GET['dai'] == "daiLive"){
			return "\n\t\t\t\t\t\t imadai: {
				\t\t\t\tdisable: $switch,
				\t\t\t\tassetTitle:'Live Video - Big Buck Bunny',
				\t\t\t\tassetKey: 'sN_IYUG8STe1ZzhIIE_ksA',
				\t\t\t\t},";
	}elseif ($_GET['dai'] == "noDai"){
			return "\n\t\t\t\t\t\t imadai: {
				\t\t\t\tdisable:$switch},";
	}elseif ($_GET['dai'] == "daiErr"){
			return "\n\t\t\t\t\t\t imadai: {
				\t\t\t\tdisable: $switch,
				\t\t\t\tassetTitle:'VOD - Tears of Steel',
				\t\t\t\tcontentSourceId: '19463000',
				\t\t\t\tvideoId: 'tears-of-steellll'
				\t\t\t\t},";
	}
}

function bumperPlugin($bumpURL, $switch){
	
	$bumpPosition = $_GET['bumpPos'];

	if (empty($_GET['bumpClick'])){
		$isClickThrough = "";
	}else{
		$isClickThrough = "clickThroughUrl: 'https://www.ynet.co.il/home/0,7340,L-8,00.html',";
	}

	if (empty($_GET['enbPre'])){
		$enablePreloading = "";
	}else{
		$enablePreloading = "preload: true,";
	}

	if (empty($_GET['disMedPre'])){
		$disableMediaPreload = "false,";
	}else{
		$disableMediaPreload = "true,";
	}

	if ($_GET['bumpPos'] == "defBump"){
		$bumpPosition = "";
	}elseif ($_GET['bumpPos'] == "preBump"){
		$bumpPosition = "position: [0]";
	}elseif ($_GET['bumpPos'] == "postBump"){
		$bumpPosition = "position: [-1]";
	}

	
		return "\n\t\t\t\t\t\t bumper: {
			\t\t\t\tdisable: $switch,
			\t\t\t\tid: '123456',
			\t\t\t\tdisableMediaPreload: $disableMediaPreload
			\t\t\t\t$enablePreloading
			\t\t\t\turl: '$bumpURL',
			\t\t\t\t$isClickThrough
			\t\t\t\t$bumpPosition
			\t\t\t\t},";
	
}
?>


