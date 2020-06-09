<?php
 include 'config/Player_V3_plugins.php';
 include 'config/testPageConfig_Player_V3.php';
 include 'config/Player_V3_UI_components.php';
 include 'config/playerConfig_change_media.php';
		echo '

	
	  <script src="' . getCdnUrl() . '/p/' . getPartnerId() . '/sp/' . getPartnerId() . '00/embedPlaykitJs/uiconf_id/' . getUIConf() . '/partner_id/' . getPartnerId() . '"></script>
		<script src="' . getPlayerLoaderPath() . '" type="text/javascript"></script>

	<div class="col-md-12 col-lg-8 col-sm-12 embed-responsive embed-responsive-16by9">
  	<div id="' . getTargetId() . '" class="embed-responsive-item"></div>
	</div>

	<script>
		changeMediaVisible();
	</script>

	<script> '
	. changeMediaConfig() . 
	    'var mediaInfo = {'
			 . mediaInfo(getEntryId()) .
		'};
		  var playerConfig = {
				"sources": {
					"poster": "http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/images/Kaltura_poster.png",
					
					"options":{
						"forceRedirectExternalStreams": true
					}	
					
			},'
		 . logLevel() 
		 . chromeCast() 
			.	'targetId:"' . getTargetId() . '",'
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
playerVersion(); 
'.getAutomationCode().'
</script>
</body>
</html>' ?>