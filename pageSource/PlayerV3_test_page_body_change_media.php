<?php
 
 include 'config/playerConfig_first_media.php';
 include 'config/playerConfig_change_media.php';
 include 'config/Player_V3_plugins.php';
 include 'config/Player_V3_UI_components.php';
 include 'config/testPageConfig_Player_V3.php';
    echo '
	<body>
	<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
	</script>
	
	<script src="' . getCdnUrl() . '/p/' . getPartnerId() . '/sp/' . getPartnerId() . '00/embedPlaykitJs/uiconf_id/' . getUIConf() . '/partner_id/' . getPartnerId() . '"></script>
	

    <script src="' . getPlayerLoaderPath() . '" type="text/javascript"></script>
 
 
 <body>
	<div class="col-md-12 col-lg-8 col-sm-12 embed-responsive embed-responsive-16by9">
  		<div id="' . getTargetId() . '" class="embed-responsive-item"></div>
	</div>

	<script> 
	' . changeMediaConfig() . '

	    var mediaInfo = {'
			 . mediaInfo(getEntryId()), ottFormats() .
		'};
		var playerConfig = '. playerConfig() .
		'
getPlayer(playerConfig, mediaInfo);
currentDeliveryType();  
</script>
</body>
</html>' ?>