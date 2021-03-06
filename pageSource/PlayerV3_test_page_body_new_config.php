<?php

/***********************************************************************************************
*** Creating embed code of the player using new player configuration                         ***
*** Loading player with selected configuration by calling the functions from back-end side   ***
*** Also calling the function for adding relevant plugins and UI components                  ***
*** Created by Alex Greenfeld                                                                ***
***********************************************************************************************/


 include 'config/Player_V3_plugins.php';
 include 'config/testPageConfig_Player_V3.php';
 include 'config/Player_V3_UI_components.php';
 include 'config/playerConfig_change_media.php';
		echo '

	
	  <script src="' . getCdnUrl() . '/p/' . getPartnerId() . '/sp/' . getPartnerId() . '00/embedPlaykitJs/uiconf_id/' . getUIConf() . '/partner_id/' . getPartnerId(),componentsVersions(). '"></script>
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
					"poster": "http://externaltests.dev.kaltura.com/player/library_Player_V3/smartPages/images/Kaltura_poster.png",'
					. sourcesOptions(), externalCaptions() .
												
			'},'
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
'

		}; '

	. getPlayerWhenPlaylist() . '
		
currentDeliveryType(); 
playerVersion();
getActiveBandwidth();
accessControlEvents();
'.getAutomationCode().'
</script>
	<div style="position:relative; width:30%; border-style:solid; border-width:thick; border-color:blue; background-color:lightgrey; font-size: 11px;">
		<b>Plugins versions:</b>
		<ul id="availablePlugins"></ul>
	</div>
</body>
</html>' ?>