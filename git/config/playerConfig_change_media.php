<?php

function changeMediaConfig(){
	if ( $_GET['chgMedia']=='on'){
		return '
			function changeMedia(){
				var newConfig = {
				"sources": {
					"type": "Vod",
					"options": {
							"forceRedirectExternalStreams": true
					},
					"poster": "http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/images/Kaltura_poster.png",
					"metadata": {
							"name": "HLS media",
							"MediaType": "Movie",
							"WatchPermissionRule": "Parrent Allowed"
					} 
			},'
			. logLevel() .
				'targetId:"' . getTargetId() . '",'
			.	UI_Components() .
			'provider:{'
			. providerConf(getPartnerIdProvider(),getUIConf()) .
				'},'
				. enableDvr() .
				'playback: {' . playbackLoadingOptions() . ' '
				. playbackOptions() .
				' , '
			. streamPriority() . 
			'
			},'
			. plugins() .
			' };
			kalturaPlayer.configure(newConfig);
			' . getChangeMedia() . '
			
		  } 
		';
	}
	else{
		return '';
	};
}
?>


