<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Horizontal Gridfolio Pro</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		
		<!-- Import required css and js files -->
		<link rel="stylesheet" type="text/css"  href="load/skin_minimal_dark_global.css"/>
		<script type="text/javascript" src="java/FWDGrid.js"></script>
		
		<style type="text/css">
			
			#myDiv{
	margin-top: auto;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
			}
		</style>
		
		<!-- Setup the grid (all settings are explained in detail in the documentation files) -->
		<script type="text/javascript">
			FWDUtils.onReady(function(){
				var gallery = new FWDGrid({		
					//main settings
					divHolderId:"myDiv",
					gridPlayListAndSkinId:"playlist",
					displayType:"fluidwidth",
					scrollBarType:"drag",
					autoScale:"yes",
					width:820,
					height:550,
					thumbnailOverlayType:"text",
					showContextMenu:"yes",
					addMargins:"yes",
					addMouseWheelSupport:"yes",
					scrollBarOffset:0,
					backgroundColor:"#fff",
					scrollbarDisabledColor:"#000000",
					//thumbnails settings
					thumbnailBaseWidth:365,
					thumbnailBaseHeight:550,
					nrOfThumbsToShowOnSet:35,
					horizontalSpaceBetweenThumbnails:4,
					verticalSpaceBetweenThumbnails:4,
					thumbnailBorderSize:0,
					thumbnailBorderRadius:0,
					thumbnailOverlayOpacity:.85,
					thumbnailOverlayColor:"#4f2a55",
					thumbnailBackgroundColor:"#4f2a55",
					thumbnailBorderNormalColor:"#FFFFFF",
					thumbnailBorderSelectedColor:"#FFFFFF",
					//combobox settings
					startAtCategory:1,
					selectLabel:"SELECT CATEGORIES",
					allCategoriesLabel:"All Categories",
					showAllCategories:"no",
					comboBoxPosition:"topleft",
					selctorBackgroundNormalColor:"#FFFFFF",
					selctorBackgroundSelectedColor:"#000000",
					selctorTextNormalColor:"#000000",
					selctorTextSelectedColor:"#FFFFFF",
					buttonBackgroundNormalColor:"#FFFFFF",
					buttonBackgroundSelectedColor:"#000000",
					buttonTextNormalColor:"#000000",
					buttonTextSelectedColor:"#FFFFFF",
					comboBoxShadowColor:"#000000",
					comboBoxHorizontalMargins:12,
					comboBoxVerticalMargins:12,
					comboBoxCornerRadius:3,
					//fullscreen button settings
					showFullScreenButton:"no",
					fullScreenButtonPosition:"topright",
					fullScreenButtonHorizontalMargins:10,
					fullScreenButtonVerticalMargins:10,
					//ligtbox settings
					addLightBoxKeyboardSupport:"yes",
					showLightBoxNextAndPrevButtons:"yes",
					showLightBoxZoomButton:"yes",
					showLightBoxInfoButton:"yes",
					showLighBoxSlideShowButton:"yes",
					showLightBoxInfoWindowByDefault:"no",
					slideShowAutoPlay:"no",
					lightBoxVideoAutoPlay:"no",
					lighBoxBackgroundColor:"#000000",
					lightBoxInfoWindowBackgroundColor:"#FFFFFF",
					lightBoxItemBorderColor:"#FFFFFF",
					lightBoxItemBackgroundColor:"#222222",
					lightBoxMainBackgroundOpacity:.8,
					lightBoxInfoWindowBackgroundOpacity:.9,
					lightBoxBorderSize:4,
					lightBoxBorderRadius:4,
					lightBoxSlideShowDelay:4
				});
			})
		</script>
	</head>

	<body>
	
		<!-- div used as a holder for the grid -->
		<div id="myDiv"></div>
	
		<!-- grid data -->
		<ul id="playlist" style="display: none;">

			<!-- skin -->
			<ul data-skin="">
				<li data-preloader-path="load/skin_minimal_dark_square/rotite-30-29.png"></li>
				<li data-show-more-thumbnails-button-normal-path="load/skin_minimal_dark_square/showMoreThumbsNormalState.png"></li>
				<li data-show-more-thumbnails-button-selectsed-path="load/skin_minimal_dark_square/showMoreThumbsSelectedState.png"></li>
				<li data-image-icon-path="load/skin_minimal_dark_square/photoIcon.png"></li>
				<li data-video-icon-path="load/skin_minimal_dark_square/videoIcon.png"></li>
				<li data-link-icon-path="load/skin_minimal_dark_square/linkIcon.png"></li>
				<li data-iframe-icon-path="load/skin_minimal_dark_square/iframeIcon.png"></li>
				<li data-hand-move-icon-path="load/skin_minimal_dark_square/handnmove.cur"></li>
				<li data-hand-drag-icon-path="load/skin_minimal_dark_square/handgrab.cur"></li>
				<li data-fullscreen-button-normal-normal-path="load/skin_minimal_dark_square/fbnn.png"></li>
				<li data-fullscreen-button-normal-selected-path="load/skin_minimal_dark_square/fbns.png"></li>
				<li data-fullscreen-button-full-normal-path="load/skin_minimal_dark_square/fbfn.png"></li>
				<li data-fullscreen-button-full-selected-path="load/skin_minimal_dark_square/fbfs.png"></li>
				<li data-combobox-down-arrow-icon-normal-path="load/skin_minimal_dark_square/combobox-down-arrow.png"></li>
				<li data-combobox-down-arrow-icon-selected-path="load/skin_minimal_dark_square/combobox-down-arrow-rollover.png"></li>
				<li data-combobox-up-arrow-icon-normal-path="load/skin_minimal_dark_square/combobox-up-arrow.png"></li>
				<li data-combobox-up-arrow-icon-selected-path="load/skin_minimal_dark_square/combobox-up-arrow-rollover.png"></li>
				<li data-scrollbar-track-background-normal-path="load/skin_minimal_dark_square/scrollbar-track-background.png"></li>
				<li data-scrollbar-handler-background-normal-path="load/skin_minimal_dark_square/scrollbar-handler-center-background.png"></li>
				<li data-scrollbar-handler-background-selected-path="load/skin_minimal_dark_square/scrollbar-handler-center-background-rollover.png"></li>
				<li data-scrollbar-handler-left-normal-path="load/skin_minimal_dark_square/scrollbar-handler-left.png"></li>
				<li data-scrollbar-handler-left-selected-path="load/skin_minimal_dark_square/scrollbar-handler-left-rollover.png"></li>
				<li data-scrollbar-handler-right-normal-path="load/skin_minimal_dark_square/scrollbar-handler-right.png"></li>
				<li data-scrollbar-handler-right-selected-path="load/skin_minimal_dark_square/scrollbar-handler-right-rollover.png"></li>
				<li data-scrollbar-handler-center-icon-normal-path="load/skin_minimal_dark_square/scrollbar-handler-center-icon.png"></li>
				<li data-scrollbar-handler-center-icon-selected-path="load/skin_minimal_dark_square/scrollbar-handler-center-icon-rollover.png"></li>
				<li data-lightbox-slideshow-preloader-path="load/skin_minimal_dark_square/slideShowPreloader.png"></li>
				<li data-lightbox-close-button-normal-path="load/skin_minimal_dark_square/galleryCloseButtonNormalState.png"></li>
				<li data-lightbox-close-button-selected-path="load/skin_minimal_dark_square/galleryCloseButtonSelectedState.png"></li>
				<li data-lightbox-next-button-normal-path="load/skin_minimal_dark_square/nextIconNormalState.png"></li>
				<li data-lightbox-next-button-selected-path="load/skin_minimal_dark_square/nextIconSelectedState.png"></li>
				<li data-lightbox-prev-button-normal-path="load/skin_minimal_dark_square/prevIconNormalState.png"></li>
				<li data-lightbox-prev-button-selected-path="load/skin_minimal_dark_square/prevIconSelectedState.png"></li>
				<li data-lightbox-play-button-normal-path="load/skin_minimal_dark_square/playButtonNormalState.png"></li>
				<li data-lightbox-play-button-selected-path="load/skin_minimal_dark_square/playButtonSelectedState.png"></li>
				<li data-lightbox-pause-button-normal-path="load/skin_minimal_dark_square/pauseButtonNormalState.png"></li>
				<li data-lightbox-pause-button-selected-path="load/skin_minimal_dark_square/pauseButtonSelectedState.png"></li>
				<li data-lightbox-maximize-button-normal-path="load/skin_minimal_dark_square/maximizeButtonNormalState.png"></li>
				<li data-lightbox-maximize-button-selected-path="load/skin_minimal_dark_square/maximizeButtonSelectedState.png"></li>
				<li data-lightbox-minimize-button-normal-path="load/skin_minimal_dark_square/minimizeButtonNormalState.png"></li>
				<li data-lightbox-minimize-button-selected-path="load/skin_minimal_dark_square/minimizeButtonSelectedState.png"></li>
				<li data-lightbox-info-button-open-normal-path="load/skin_minimal_dark_square/infoButtonOpenNormalState.png"></li>
				<li data-lightbox-info-button-open-selected-path="load/skin_minimal_dark_square/infoButtonOpenSelectedState.png"></li>
				<li data-lightbox-info-button-close-normal-path="load/skin_minimal_dark_square/infoButtonCloseNormalPath.png"></li>
				<li data-lightbox-info-button-close-selected-path="load/skin_minimal_dark_square/infoButtonCloseSelectedPath.png"></li>
			</ul> 
			
			<!-- image playlist category 1 -->
			<ul data-cat="category 1">
            
            <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2015-02-14KS/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_5208-.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Kinky Salon: Sweethearts Ball</p>
                        <p class="smallLabel">2/14/15</p>
                    </li>
                </ul>
                
                
             <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2015-01-31fallencosmos/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_0464.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Fallen Cosmos</p>
                        <p class="smallLabel">1/31/15</p>
                    </li>
                </ul>
            
            
            <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2014-11-22ks/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_4974.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Kinky Salon: Gameshows and Pornos</p>
                        <p class="smallLabel">11/22/14</p>
                    </li>
                </ul>

        
        
        	<ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2014-09-20KS/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_4264.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Kinky Salon: Pussyfest</p>
                        <p class="smallLabel">9/20/14</p>
                    </li>
                </ul>
        
        
        
        
        		<ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2014-07-16isotope/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_3398.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Seconds after party w/ Bryan Lee O'Malley</p>
                        <p class="smallLabel">7/16/14</p>
                    </li>
                </ul>
        		
                
           
                <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2014-06-28KS/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_3259.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Kinky Salon: Arty Party</p>
                        <p class="smallLabel">6/28/14</p>
                    </li>
                </ul>
                
                
                
                <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2014-02-15KS/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_1539.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Kinky Salon: Sweethearts Ball</p>
                        <p class="smallLabel">2/15/14</p>
                    </li>
                </ul>
                
                
                
                
                <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2013-12-6life360/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_8270.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Life360 Holiday Party</p>
                        <p class="smallLabel">12/6/13</p>
                    </li>
                </ul>
                
                
                
          
  			   <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2013-12-04gamelink/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_9964.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Gamelink Holiday Party</p>
                        <p class="smallLabel">12/4/13</p>
                    </li>
                </ul>
                
                
                
                  <ul>
				   <li data-type="link" data-url="http://www.michelleyoder.com/events_galleries/2013-11-30ks/index.html" data-target="_blank"></li>
                    <li data-thumbnail-path="load/thumbnails/DSC_9673.jpg"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">Kinky Salon: Fall in Love</p>
                        <p class="smallLabel">11/30/13</p>
                    </li>
                </ul>
          
          
          
          		<ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-11-16KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_9341.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: Sexual Revolution</p>
						<p class="smallLabel">11/16/13</p>
					</li>
				</ul>
          
          
          
            
            	<ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-09-21KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_7155.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: Pussyfest</p>
						<p class="smallLabel">9/21/13</p>
					</li>
				</ul>
            
            
				<ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-07-20ks/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_5076.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: Love Boat</p>
						<p class="smallLabel">7/20/13</p>
					</li>
				</ul>
			
            
            
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-06-28mondo/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_3472.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Master Mondo's Bizarre-o-tronic</p>
						<p class="smallLabel">6/28/13</p>
					</li>
				</ul>
                
                
                
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-06-15KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_2671.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: All Worlds Affair</p>
						<p class="smallLabel">6/15/13</p>
					</li>
				</ul>
                
                
                 <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-05-30speakeasy/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_1794.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Speakeasy: Sex Geeks</p>
						<p class="smallLabel">5/30/13</p>
					</li>
				</ul>
                
                
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-05-18KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_0751.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: Castle Cum-o-lot</p>
						<p class="smallLabel">5/18/13</p>
					</li>
				</ul>
                
                
                
                
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-04-20KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_2956.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: 10 Year Anniversary</p>
						<p class="smallLabel">4/20/13</p>
					</li>
				</ul>
                
                
                
                
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-03-16KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_0089.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: XXXmen</p>
						<p class="smallLabel">3/16/13</p>
					</li>
				</ul>
                
                
                
                
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-02-16KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_9134.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: Sweethearts Ball</p>
						<p class="smallLabel">2/16/13</p>
					</li>
				</ul>
				
                
                
                
                
                
                 <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-01-19KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_8436.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: America</p>
						<p class="smallLabel">1/19/13</p>
					</li>
				</ul>
                
                
                
                
                
                
                 <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/01-04-13artmurmur/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_4559.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Art Murmur: Pinup Edition</p>
						<p class="smallLabel">1/4/13</p>
					</li>
				</ul>
                
                
                
                
                 <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/2013-12/15KS/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_2680.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Kinky Salon: Whobilation</p>
						<p class="smallLabel">12/15/13</p>
					</li>
				</ul>
                
                
                
                <ul>
					<li data-type="link" data-url="http://michelleyoder.com/events_galleries/11-02-12artmurmur/index.html" data-target="_blank"></li>
					<li data-thumbnail-path="load/thumbnails/DSC_6076-.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">Art Murmur: Glitter Edition</p>
						<p class="smallLabel">111/2/13</p>
					</li>
				</ul>
                
                
                
			</ul>
			<!------------ end  ------------->
			
			

		</ul>
				
	</body>
</html>




