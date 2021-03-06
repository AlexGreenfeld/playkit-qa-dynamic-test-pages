<?php
 
/***********************************************************************************************
*** Creating embed code of the player using old player configuration                         ***
*** Loading player with selected configuration by calling the functions from back-end side   ***
*** also calling the function for adding relevant plugins and UI components                  ***
*** Created by Alex Greenfeld                                                                ***
************************************************************************************************/

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
	   ' var mediaInfo = {'
			 . mediaInfo(getEntryId()) .
		'};
		  var playerConfig = {'
		       . logLevel() 
			   . chromeCast() 
				.'targetId:"' . getTargetId() . '",'
			.	UI_Components() .
			'provider:{'
			. providerConf(getPartnerIdProvider(),getUIConf()) .
				'},
			player: {'
				. enableDvr() .
				'playback: {' . playbackLoadingOptions() . ' '
			  . playbackOptions() .
				' , '
			. streamPriority() . 
			'
			},'
			. plugins() .
		'
	     }
		  };
		  
		  
getPlayer(playerConfig, mediaInfo); 
currentDeliveryType();
playerVersion();

accessControlEvents();
'.getAutomationCode().'
</script>
	<div style="position:relative; width:18%; border-style:solid; border-width:thick; border-color:blue; background-color:lightgrey">
		<h5>Plugins versions:</h5>
		<ul id="availablePlugins"></ul>
	</div>
</body>
</html>' ?>
