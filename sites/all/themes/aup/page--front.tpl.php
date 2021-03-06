<?php 
	/*
	 * Home Page Template
	*/
?>

<div class="outer">
	<div class="outerBg">
		<div class="header homeHeader">
	        <div class="audience">
	            <?php print render($page['top_links']);?>
	        </div>
	        <div class="title"></div>
	        <div class="main">
	        	<div class="mobileShow">
	                <div class="mobileSiteSearch">
	                   <?php if ($page['header_search']): print render($page['header_search']); endif; ?>
	                </div>
	            </div>
	            <div class="logo">
	                <a href="<?php echo base_path(); ?>"><img src="<?php echo base_path().path_to_theme(); ?>/images/logo.png" alt="" /></a>
	                <div class="mobileShow mobileSearchButton"><a href="#"><span>Search</span></a></div>
	            </div>
	        	<div class="topic">
		        	<?php if($primary_navigation): echo $primary_navigation; endif; ?>
	            </div>
	            <div class="utility">
	            	<?php if ($page['search_menu']): print render($page['search_menu']); endif; ?>
	                <div class="siteSearch">
	                    <?php if ($page['header_search']): print render($page['header_search']); endif; ?>
	                </div>
	            </div>
	        </div>
	        <div class="mobileShow mobileHeader">
	            <div class="tabs">
	            	<div class="menu">
	                	<a href="#">Menu</a>
	                </div>
	            	<div class="search">
	                	<a href="#">Info for</a>
	                </div>
	            </div>
	            <div class="ddContainer">
	            	<div class="siteSearch">
	                
	                </div>
	                <div class="topic">
	                    <?php if($primary_navigation): echo $primary_navigation; endif; ?>
	                </div>
	                <div class="infomenulist">
	                	
	                </div>
	            </div>
	        </div>
	    </div>
		
		 <!-- Start of Slide Show -->
		<?php if($home_slideshow): ?>
		 	<?php echo $home_slideshow; ?> 
		<?php endif; ?>
		 <!-- End of Slide Show -->
	    
	    <!-- Start of wrapper -->
	    <div class="wrapper">
	        <!-- Start of Content -->
	        <div class="page-content homeContent">
	    		<div class="fullWidth promos">
	            	<ul class="feed">
	                    <li>
	                    	<?php echo render($page['homepage_left_spif']); ?>
	                    </li>
	                    <li class="wideCol">
	                        <?php echo render($page['homepage_middle_spif']); ?>
	                    </li>
	                    <li>
							<?php echo render($page['homepage_right_spif']); ?>
	                    </li>
	                </ul>
	            </div>
	    		<div class="fullWidth news">
	    			
	            	<div class="feedTitle">
	                	<h3>News <a href="/aup/news-feed" class="rss"><img src="<?php echo base_path().path_to_theme(); ?>/images/rss.png" alt=""/></a></h3>
	                    <div class="more">
	                    	<a href="/aup/news-events">View more</a>
	                    </div>
	                </div>
	                <?php echo views_embed_view('news_events', 'block_3'); ?>
	            </div>
	    		<div class="fullWidth events">
	            	<div class="feedTitle">
	                	<h3>Events <a href="/aup/events-feed" class="rss"><img src="<?php echo base_path().path_to_theme(); ?>/images/rss.png" alt=""/></a></h3>
	                    <div class="more">
	                    	<a href="/aup/news-events">View more</a>
	                    </div>
	                </div>
	                <?php echo views_embed_view('news_events', 'block_2'); ?>
	            </div>
	    		<div class="fullWidth social">
	                <ul class="feed">
	                    <li>
	                         <h5>
	                            <img src="<?php echo base_path().path_to_theme(); ?>/images/facebook32.png" alt="" />
	                            <span>Facebook</span>
	                            <a href="#">View more</a>
	                         </h5>
	                         <p>Have you seen the website dedicated to AUP's 50th anniversary? Check it out! http://50years.aup.edu/ There are two 50th anniversary celebration events in November: Alumni Event in San Francisco- 1 November, 2012 Alumni... <a href="#">Read More</a></p>
	                    </li>
	                    <li class="wideCol">
	                         <h5>
	                            <img src="<?php echo base_path().path_to_theme(); ?>/images/youtube32.png" alt="" />
	                            <span>youtube</span>
	                            <a href="#">View more</a>
	                         </h5>
	                         <iframe width="100%" height="180" src="http://www.youtube-nocookie.com/embed/jBFilmmihcc?rel=0" frameborder="0" allowfullscreen></iframe>
	                         <h4><a href="#">VIDEO: At home in the world</a></h4>
	                    </li>
	                    <li>
	                         <h5>
	                            <img src="<?php echo base_path().path_to_theme(); ?>/images/twitter32.png" alt="" />
	                            <span>Twitter</span>
	                            <a href="#">View more</a>
	                         </h5>
	                         <div class="tweet">
	                         	<p>Tonight at #TheAUP "Ou va l'Amerique?", roundtable with incredible guests. RSVP now for last minutes spots <a href="#">http://t.co/JC16asP8</a> <a href="#">#aupevents</a></p>
	                            <p>Oct 08, 2012</p>
	                         </div>
	                         <div class="tweet last">
	                         	<p>Fantastic event tonight at #TheAUP, 19h00 "Ou va l'Amerique?" with <a href="#">@gbiassette</a> <a href="#">#ChristineOckrent</a> <a href="#">http://t.co/Q5VVILDI</a> - Open to the... </p>
	                            <p>Oct 08, 2012</p>
	                         </div>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        <!-- End of Content -->
	        <!-- Start of footer -->
	        <?php include('_includes/footer.php'); ?>
	        <!-- End of Footer -->
	    </div>
	    <!-- End of wrapper -->
	</div>
</div>