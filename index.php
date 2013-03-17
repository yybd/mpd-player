<html>
    <head>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <!-- Hostname -->
    <meta name="hostname" id="hostname"  content="<?php echo `hostname`;?>" />
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>

    
    <link rel="stylesheet" type="text/css" href="css/css-frames-style.css" />
    <!--For versions below Internet Explorer 7-->
    <!--[if lt IE 7]>
    <link rel="stylesheet" href="css/css-frames-style-unreal.css" type="text/css">
    <![endif]-->
    	<!-- Style Sheets -->
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  
    <script src="js/queryMPD.js" type="text/javascript" ></script>
    <script src="js/controls.js" type="text/javascript" ></script>
    <script src="js/showPages.js" type="text/javascript" ></script>
    <script src="js/pageStatus.js" type="text/javascript" ></script>
    <script src="language/he.js" type="text/javascript" ></script>

    
    <title>remote</title>
    </head>
    <body>
        
        <div id="content-wrapper">
            <div id="content">
                <div id="bar"></div>
		<div id="content-show" ></div>
            </div>
        </div>
        
        <div id="header-wrapper">
            <div id="header">
                <div>
                    <div id="buttonHolder">
                            <span id="previousButton"></span>
                            <span id="playPauseButton" class="play"></span>
                            <span id="nextButton"></span>
                    </div>
		    <div id=slideVolume>
			<input type="range" id="sliderBarVolume" min="0" max="100" step="1" value="0">
			   
		    </div>
                </div>
            </div>
        </div>
        
        <div id="footer-wrapper">
            <div id="footer">
                <div id="pagesBar">
		    <span id="playButton" class="button">play</span>
                    <span id="songsButton" class="button">songs</span>
                    <span id="albumsButton" class="button">albums</span>
                    <span id="artistButton" class="button">artist</span>
                    <span id="playlistButton" class="button">playlist</span>
                </div>
            </div>
        </div>
	
	<script type="text/javascript">
		init_page(); //controls.js
		printState();
	</script>
        
    </body>
</html>
