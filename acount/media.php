<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>

<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/isotope.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        
        //Replaces data-rel attribute to rel.
        //We use data-rel because of w3c validation issue
        jQuery('a[data-rel]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });
        
        jQuery("#medialist a").colorbox();
        
    });
    jQuery(window).load(function(){
        jQuery('#medialist').isotope({
            itemSelector : 'li',
            layoutMode : 'fitRows'
        });
        
        // Media Filter
        jQuery('#mediafilter a').click(function(){
        
            var filter = (jQuery(this).attr('href') != 'all')? '.'+jQuery(this).attr('href') : '*';
            jQuery('#medialist').isotope({ filter: filter });
        
            jQuery('#mediafilter li').removeClass('current');
            jQuery(this).parent().addClass('current');
        
            return false;
        });
    });
</script>
</head>

<body>


    
    <?php include("menu.php"); ?>

    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Media Manager</li>
            
            <li class="right">
                <a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> Color Skins</a>
                <ul class="dropdown-menu pull-right skin-color">
                    <li><a href="default">Default</a></li>
                    <li><a href="navyblue">Navy Blue</a></li>
                    <li><a href="palegreen">Pale Green</a></li>
                    <li><a href="red">Red</a></li>
                    <li><a href="green">Green</a></li>
                    <li><a href="brown">Brown</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="pageheader">
            <form action="results.html" method="post" class="searchbar">
                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
            </form>
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>Manage Photos, Documents &amp; more</h5>
                <h1>Media Manager</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="mediamgr">
            	<div class="mediamgr_left">
                	<div class="mediamgr_head">
                    	<ul class="mediamgr_menu">
                        	<li><a class="btn prev prev_disabled"><span class="icon-chevron-left"></span></a></li>
                            <li><a class="btn next"><span class="icon-chevron-right"></span></a></li>
                            <li class="marginleft15"><a class="btn selectall"><span class="icon-check"></span> Select All</a></li>
                            <li class="marginleft15 newfoldbtn"><a class="btn newfolder" title="Add New Folder"><span class="icon-folder-open"></span></a></li>
                            <li class="marginleft5 trashbtn"><a class="btn trash" title="Trash"><span class="icon-trash"></span></a></li>
                            <li class="marginleft15 filesearch">
                            	<form>
                            		<input type="text" id="filekeyword" class="filekeyword" placeholder="Search file here" />
                                </form>
                            </li>
                            <li class="right newfilebtn"><a href="" class="btn btn-primary">Upload New File</a></li>
                        </ul>
                        <span class="clearall"></span>
                    </div><!--mediamgr_head-->
                    
                    <div class="mediamgr_category">
                    <ul id="mediafilter">
                        	<li class="current"><a href="all">All</a></li>
                            <li><a href="image">Images</a></li>
                            <li><a href="video">Video</a></li>
                            <li><a href="audio">Audio</a></li>
                            <li><a href="doc">Documents</a></li>
                            <li class="right"><span class="pagenuminfo">Showing 1 - 20 of 69</span></li>
                        </ul>
                    </div><!--mediamgr_category-->
                    
                    <div class="mediamgr_content">
						
                        
                    	
                        <ul id="medialist" class="listfile">
                        	<li class="image">
                              <a href="ajax/image.html"><img src="images/thumbs/image1.png" alt="" /></a>
                            	<span class="filename">Image1.jpg</span>
                           </li>
                        	<li class="image">
                                <a href="ajax/image.html"><img src="images/thumbs/image2.png" alt="" /></a>
                            	<span class="filename">Image2.jpg</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial1.pdf</span>
                            </li>
                            <li class="video">
                                <a href="ajax/video.html"><img src="images/thumbs/video.png" alt="" /></a>
                            	<span class="filename">Movie1.avi</span>
                            </li>
                            <li class="audio">
                                <a href="ajax/audio.html"><img src="images/thumbs/audio.png" alt="" /></a>
                            	<span class="filename">Song1.mp3</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial2.pdf</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial3.pdf</span>
                            </li>
                            <li class="image">
                                <a href="ajax/image.html"><img src="images/thumbs/image3.png" alt="" /></a>
                            	<span class="filename">Image1.jpg</span>
                            </li>
                        	<li class="image">
                                <a href="ajax/image.html"><img src="images/thumbs/image4.png" alt="" /></a>
                            	<span class="filename">Image2.jpg</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html" data-rel="doc"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutoria4.pdf</span>
                            </li>
                            <li class="video">
                                <a href="ajax/video.html"><img src="images/thumbs/video.png" alt="" /></a>
                            	<span class="filename">Movie1.avi</span>
                            </li>
                            <li class="audio">
                                <a href="ajax/audio.html"><img src="images/thumbs/audio.png" alt="" /></a>
                            	<span class="filename">Song1.mp3</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial5.pdf</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial6.pdf</span>
                            </li>
                            <li class="image">
                                <a href="ajax/image.html"><img src="images/thumbs/image5.png" alt="" /></a>
                            	<span class="filename">Image1.jpg</span>
                            </li>
                        	<li class="image">
                                <a href="ajax/image.html"><img src="images/thumbs/image6.png" alt="" /></a>
                            	<span class="filename">Image2.jpg</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial.pdf</span>
                            </li>
                            <li class="video">
                                <a href="ajax/video.html"><img src="images/thumbs/video.png" alt="" /></a>
                            	<span class="filename">Movie1.avi</span>
                            </li>
                            <li class="audio">
                                <a href="ajax/audio.html"><img src="images/thumbs/audio.png" alt="" /></a>
                            	<span class="filename">Song1.mp3</span>
                            </li>
                            <li class="doc">
                                <a href="ajax/doc.html"><img src="images/thumbs/doc.png" alt="" /></a>
                            	<span class="filename">Tutorial1.pdf</span>
                            </li>
                        </ul>
                        
                        <br class="clearall" />
                        
                    </div><!--mediamgr_content-->
                    
                </div><!--mediamgr_left -->
                
                <div class="mediamgr_right">
                	<div class="mediamgr_rightinner">
                        <h4>Browse Files</h4>
                        <ul class="menuright">
                        	<li class="current"><a href="">All Files</a></li>
                            <li><a href="">Deleted Files</a></li>
                            <li><a href="">Recently Added</a></li>
                            <li><a href="">Recently Viewed</a></li>
                            <li><a href="">New Folder</a></li>
                            <li><a href="">New Folder(2)</a></li>
                        </ul>
                    </div><!-- mediamgr_rightinner -->
                </div><!-- mediamgr_right -->
                <br class="clearall" />
            </div><!--mediamgr-->
            
            <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2013. Shamcey Admin Template. All Rights Reserved.</span>
                    </div>
                    <div class="footer-right">
                        <span>Designed by: <a href="http://themepixels.com/">ThemePixels</a></span>
                    </div>
                </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
