<?php
 include 'config/Player_V3_plugins.php';
 include 'config/testPageConfig_Player_V3.php';
 include 'config/Player_V3_UI_components.php';
		echo '

	<body>
	  <script src="' . getCdnUrl() . '/p/' . getPartnerId() . '/sp/' . getPartnerId() . '00/embedPlaykitJs/uiconf_id/' . getUIConf() . '/partner_id/' . getPartnerId() . '"></script>
		<script src="' . getPlayerLoaderPath() . '" type="text/javascript"></script>

	<div class="col-md-12 col-lg-8 col-sm-12 embed-responsive embed-responsive-16by9">
  	<div id="' . getTargetId() . '" class="embed-responsive-item"></div>
	</div>

	<script> 
	    var mediaInfo = {'
			 . mediaInfo(getEntryId()) .
		'};
		  var playerConfig = {
				"sources": {
					"type": "Vod",
					"options": {
							"forceRedirectExternalStreams": true
					},
					"poster": "http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/images/Kaltura_poster.png",
					"metadata": {
							"name": "HLS video",
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
		'};

getPlayer(playerConfig, mediaInfo);
currentDeliveryType();  
'.getAutomationCode().'
</script>
</body>
</html>' ?>