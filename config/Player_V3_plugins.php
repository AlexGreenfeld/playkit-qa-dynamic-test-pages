<?php

// Preroll without Skip
define("preWithoutSkip", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&cust_params=sample_ct%3Dlinear&correlator=");

// Preroll with Skip
define("preWithSkip", "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator=");

// Redirect Linear
define("redLin", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&cust_params=sample_ct%3Dredirectlinear&correlator=");

// Redirect Error
define("redErr", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=xml_vast2&unviewed_position_start=1&cust_params=sample_ct%3Dredirecterror&nofb=1&correlator=");

// Redirect Broken Fallback
define("redBrFall", "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dredirecterror&correlator=");

// Non linear
define("noLin", "https://pubads.g.doubleclick.net/gampad/ads?sz=480x70&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dnonlinear&correlator=");

// VMAP Preroll
define("vmPre", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpreonly&cmsid=496&vid=short_onecue&correlator=");

// VMAP Preroll and Bumper
define("vmPreBum", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpreonlybumper&cmsid=496&vid=short_onecue&correlator=");

// VMAP Postroll
define("vmPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpostonly&cmsid=496&vid=short_onecue&correlator=");

// VMAP Postroll and bumper
define("vmPostBum", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpostonlybumper&cmsid=496&vid=short_onecue&correlator=");

// VMAP Pre-mid-post rolls
define("vmPreMidPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpost&cmsid=496&vid=short_onecue&correlator=[timestamp]");

// VMAP Pre-3mid-standard-post rolls
define("vmPreMidStPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostpod&cmsid=496&vid=short_onecue&correlator=");

// VMAP Pre-3mid-standard-post rolls and bumper
define("vmPreMidStPostBum", "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=vmap&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ar%3Dpremidpostpodbumper&cmsid=496&vid=short_onecue&correlator=");

// VMAP Pre-3mid-optimized-post rolls
define("vmPreMidOpPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostoptimizedpod&cmsid=496&vid=short_onecue&correlator=");

// VMAP Pre-3mid-optimized-post rolls and bumper
define("vmPreMidOpPostBum", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostoptimizedpodbumper&cmsid=496&vid=short_onecue&correlator=");

// VMAP Pre-10mid-post rolls
define("vmPre10MidPost", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpremidpostlongpod&cmsid=496&vid=short_tencue&correlator=");

// Pre-roll with companions
define("preWithComp", "http://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&impl=s&gdfp_req=1&env=vp&output=xml_vmap1&unviewed_position_start=1&cust_params=sample_ar%3Dpreonly&cmsid=496&vid=short_onecue&correlator=[timestamp]");

//Empty Ad Tag
define ("emptyAdTag", '');

//No ad
define ("noAd", null);

// The function return selected Ad tag
function getSelectedAdTag() {
	return constant($_GET['adTag']);
}


function plugins() {
	
		if ( $_GET['Youbora']=='on' AND empty($_GET['youbDis'])){
		    $youboraPlugin = Youbora("false");
		}elseif ( $_GET['youbDis']=='on' OR ($_GET['youbDis']=='on' AND $_GET['Youbora']=='on')){
			$youboraPlugin = Youbora("true");
		}else{
			$youboraPlugin = '';
		}

		if ( $_GET['Kava']=='on' AND empty($_GET['kavaDis'])){
			$kavaPlugin = Kava("false");
		}elseif ( $_GET['kavaDis']=='on' OR ($_GET['kavaDis']=='on' AND $_GET['Kava']=='on')){
			$kavaPlugin = Kava("true");
		}else{
			$kavaPlugin = '';
		}

		if ( $_GET['GA']=='on' AND empty($_GET['gaDis'])){
			$gaPlugin = GA("false");
		}elseif ( $_GET['gaDis']=='on' OR ($_GET['gaDis']=='on' AND $_GET['GA']=='on')){
			$gaPlugin = GA("true");
		}else{
			$gaPlugin = '';
		}

		if ($_GET['adTag']=="noAd" AND empty($_GET['imaDis'])){
			$imaPlugin = '';
		}elseif (!($_GET['adTag']=='noAd') AND $_GET['imaDis']=='on'){
			$imaPlugin = imaPlugin(getSelectedAdTag(),"true");
        }elseif (!($_GET['adTag']=='noAd') AND empty($_GET['imaDis'])){
			$imaPlugin = imaPlugin(getSelectedAdTag(),"false");
		}elseif ($_GET['imaDis']=='on'){
			$imaPlugin = imaPlugin(getSelectedAdTag(),"true");
		}

        if ( $_GET['Comscore'] == 'on' AND empty($_GET['comscDis'])){
			$comscorePlugin = Comscore("false");
		}elseif ( $_GET['comscDis']=='on' OR ($_GET['comscDis']=='on' AND $_GET['Comscore']=='on')){
			$comscorePlugin = GA("true");
        }else{
			$comscorePlugin = '';
		}
		
		if ($_GET['uiConfId'] =='ott'){
			if ($_GET['ottAnalyt']=='on' AND empty($_GET['ottDis'])){
				$ottAnalytics = ottAnalytics("false");
			}elseif ( $_GET['ottDis']=='on' OR ($_GET['ottDis']=='on' AND $_GET['ottAnalyt']=='on')){
				$ottAnalytics = ottAnalytics("true");
			}	
        }else{
			$ottAnalytics = '';
		}

		if (($_GET['VrDis'])=='on') {
			$switchVR = vrPlugin("true");
		}else{
			$switchVR = vrPlugin("false");
		}

	return "
			plugins: {
				$youboraPlugin $kavaPlugin $gaPlugin $imaPlugin $comscorePlugin $ottAnalytics $switchVR
			}";
}	

function imaPlugin($adTag,$switch) {
	if ($adTag == "preWithComp"){
		$plugin = "
		ima: {
		disable: $switch ,
        adTagUrl: '\'$adTag\'',
        companions: {
          testCompanionSquare: {
            width: 300,
            height: 250,
            sizeCriteria: 'SelectExactMatch'
          },
          testCompanionLong: {
            width: 728,
            height: 90,
            sizeCriteria: 'SelectExactMatch'
          }
        }
      }, ";
	}else{
	   $plugin = "
			ima: {
				disable: $switch ,
				adTagUrl: '$adTag',
				debug: true
			}, " ;
	}
	return $plugin;
}

function enableDvr() {
	
	if ( $_GET['Dvr']=='on'){
		$dvrStatus = "\n \"dvr\" : true,\n";
	}else{
		$dvrStatus = "";
	}
	return $dvrStatus;
}

function Youbora($switch) {
   return "
		youbora: {
			disable: $switch ,
            options: {
               'accountCode': 'kalturatest'
            },
        }, " ;
}

function Kava($switch) {
	return "
		kava:{
			disable: $switch ,
			customVar1: 100,
			customVar2: \"Hello\",
			customVar3: \"my custom var 3\",
			applicationVersion: \"V3 0.28.0\",
			playbackContext: \"Any\",
			}, " ;
}

function GA($switch) {
	return "
	googleAnalytics: {
		disable: $switch ,
		trackingId: 'UA-1234567-89',
		tracking: {
			events: {
			//	PLAYING: {
			//		action: 'playing'
			//	}	
			}
		}
	}," ;
}


function Comscore($switch) {
		return "
		comscore: {
			disable: $switch ,
        	publisherId: \"QA2105\"
      	}," ;
}
		

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
		return "
		ottAnalytics: {
			disable: $switch ,
			disableMediaMark: $disMark,
   			disableMediaHit: $disHit
        }," ;
}	

		
function vrPlugin($switch){
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
	
	return "
	vr: {
		
		disable: $switch,
		toggleStereo: $enVRTS,
		startInStereo: $enVRSIS
	  },";
}		
?>


