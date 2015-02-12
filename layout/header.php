<?php
/**
 * Short description for file
 *
 * @FileName		header.php
 * @Created On		11 Sep 2014
 * @author			Ravi Srivastava <ravi.srivastava@srmtechsol.com> 
 * @copyright		2014-2015 The PHP Group
 * @license			http://www.php.net
 * @Description		Header View in admin panel

 */
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Natoa Admin</title>
<!--css and js starts-->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/stylesheet.css');?>"/>
<script src="<?php echo base_url('assets/jQueryAssets/jquery_lib.js');?>"></script>
<script>
	$(document).ready(function(){
	  $(".notification").hover(function(){
		$(".notification_nav").toggle();
	  });
	  
	  $(".account_inner").hover(function(){
		$(".profile_nav").toggle();
	  });
	  
	   $(".select_bg").hover(function(){
		$(".book_nav").toggle();
	  });
	  
	});
	</script>
    <script>
	$(document).ready(function(){
		
		
		 
	   var height = $(window).height();
	   $('.mainpage').css('min-height', (height-125));
	   
	   $('.navigation').height($('.mainpage').height()+14);
		
	  $(".notification_nav").hover(function(){
		$(".notification_nav").toggle();
	  });
	  
	  $(".profile_nav").hover(function(){
		$(".profile_nav").toggle();
	  });
	  
	   $(".book_nav").hover(function(){
		$(".book_nav").toggle();
	  });
	  
	});
	</script>
<!--css and js starts-->
<link href="<?php echo base_url('assets/jQueryAssets/jquery.ui.core.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/jQueryAssets/jquery.ui.theme.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/jQueryAssets/jquery.ui.datepicker.min.css');?>" rel="stylesheet" type="text/css">
<!--css and js starts-->

<script src="<?php echo base_url('assets/jQueryAssets/jquery-1.8.3.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js');?>" type="text/javascript"></script>
</head>

<body>
<!---wrapper starts--->
	<div class="wrapper2">
    
    	<!---header starts--->
        	<div class="header2">
       	    	<div class="logo"><a href="<?php echo base_url();?>/admin"><img src="<?php echo base_url('assets/images/logoSml.png');?>" alt="Admin"></a></div>
                <!--profile starts-->
									
                    	<div class="profile">
                        	
                            <!--account starts-->
                            	<div class="account">
                                	<ul class="account_inner">
                                    	<li>
                                    		<img src="<?php echo base_url('assets/images/profile_image.png');?>"  alt="profile">
                                    	</li>
                                        <li class="li_text">
                                        	<?php echo $this->admin_user->get_name() ?>
                                        </li>
                                        <li class="li_text">
                                        	<span>&#8744;</span>
                                        </li>
                                        <div class="clear"></div>
                                    </ul>
                                    
                                    <!--notification nav starts-->
                                        <div class="profile_nav">
                                            <!--nav option starts-->
                                                <div class="nav_option">
                                                    <div class="nav_menu_option">
                                                        <ul>
                                                            <a href="<?php echo base_url('account/logout');?>">
                                                                <li>
                                                                   <img src="<?php echo base_url('assets/images/logout_icon.png');?>" alt="logout"> Logout
                                                                </li>
                                                            </a>
                                                        </ul>
                                                        <div class="clear"></div>
                                                    </div>
                                                    
                                                </div>
                                            <!--nav option closed-->
                                            
                                        </div>
                                     <!--notification nav closed-->
                                </div>
                            <!--account closed-->
                    	</div>
                    <!--profile closed-->
                
                <div class="clear"></div>
      		</div>
        <!---header closed--->
        <div class="clear"></div>
        
    	<!---navigation starts--->
    	<div class="navigation">
		<?php
		$segment3 = $this->uri->segment(2);	
		?>
    	  <!---navigation menu starts--->
    	  <ul>
              <li <?php if($page=='' || $page=='dashboard') echo 'id="active3"';?>> 
                    <a href="<?php echo base_url('admin');?>">
                        <div class="icontext">Dashboard</div>
                    </a>
              </li>	
        <!-- Added / Modified By Pradeep Pal on 10-09-2014 -->
            <?php 
          if($page=='setting')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('setting');?>"><div class="icontext">Admin Settings</div></a>
				  <ul>
					<li <?php if($segment3=='change_username' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('setting/change_username');?>"><span>&#8250;</span> Change Username</a></li>
                    <li <?php if($segment3=='change_password') echo 'id="active2"';?>><a href="<?php echo base_url('setting/change_password');?>"><span>&#8250;</span> Change Password</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('setting');?>">
                        <div class="icontext">Admin Settings</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
		<!-- Added / Modified By Pradeep Pal on 04-09-2014 -->
		<?php 
          if($page=='user')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('user');?>"><div class="icontext">Members</div></a>
				  <ul>
					<li <?php if($segment3=='create_user') echo 'id="active2"';?>><a href="<?php echo base_url('user/create_user');?>"><span>&#8250;</span> Create Member</a></li>
                     <li <?php if($segment3=='view_user' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('user/view_user');?>"><span>&#8250;</span> View Members</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('user');?>">
                        <div class="icontext">Members</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
           <!-- Added / Modified By Pradeep Pal on 15-09-2014 -->
            <?php 
          if($page=='category')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('category');?>"><div class="icontext">Menu</div></a>
				  <ul>
					<li <?php if($segment3=='add_category') echo 'id="active2"';?>><a href="<?php echo base_url('category/add_category');?>"><span>&#8250;</span> Add Menu</a></li>
                    <li <?php if($segment3=='view_category' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('category/view_category');?>"><span>&#8250;</span> View Menu</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('category');?>">
                        <div class="icontext">Menu</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
			<!-- Added / Modified By Pradeep Pal on 18-09-2014 -->
			<?php 
			if($page=='cms')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('cms');?>"><div class="icontext">CMS</div></a>
				  <ul>
					<li <?php if($segment3=='create_cms') echo 'id="active2"';?>><a href="<?php echo base_url('cms/create_cms');?>"><span>&#8250;</span> Create CMS</a></li>
                    <li <?php if($segment3=='view_cms' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('cms/view_cms');?>"><span>&#8250;</span> View CMS</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('cms');?>">
                        <div class="icontext">CMS</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
            
            <!-- Added / Modified By Pradeep Pal on 18-09-2014 -->
			<?php 
			if($page=='board_of_director')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('board_of_director');?>"><div class="icontext">Board of Director</div></a>
				  <ul>
					<li <?php if($segment3=='create_board_of_director') echo 'id="active2"';?>><a href="<?php echo base_url('board_of_director/create_board_of_director');?>"><span>&#8250;</span>Create Board of Director</a></li>
                    <li <?php if($segment3=='view_board_of_director' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('board_of_director/view_board_of_director');?>"><span>&#8250;</span>View Board of Director</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('board_of_director');?>">
                        <div class="icontext">Board of Director</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
            
             <!-- Added / Modified By Pradeep Pal on 18-09-2014 -->
			<?php 
			if($page=='history')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('history');?>"><div class="icontext">History</div></a>
				  <ul>
					<li <?php if($segment3=='create_history') echo 'id="active2"';?>><a href="<?php echo base_url('history/create_history');?>"><span>&#8250;</span>Create History</a></li>
                    <li <?php if($segment3=='view_history' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('history/view_history');?>"><span>&#8250;</span>View History Page</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('history');?>">
                        <div class="icontext">History</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
            
            <!-- Added / Modified By Pradeep Pal on 18-09-2014 -->
			<?php 
			if($page=='policy')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('policy');?>"><div class="icontext">Policy / Advocacy</div></a>
				  <ul>
					<li <?php if($segment3=='create_policy') echo 'id="active2"';?>><a href="<?php echo base_url('policy/create_policy');?>"><span>&#8250;</span>Create Policy / Advocacy</a></li>
                    <li <?php if($segment3=='view_policy' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('policy/view_policy');?>"><span>&#8250;</span>View Policy / Advocacy Page</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('policy');?>">
                        <div class="icontext">Policy / Advocacy</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?>
            
           <!-- Added / Modified By Pradeep Pal on 19-09-2014 -->
           
        <!-- Closed on 12-11-14  <?php 
      //    if($page=='newsletter')
		//	{
			?>
			<li id="active"> 
				<a href="<?php //echo base_url('newsletter');?>"><div class="icontext">Newsletter</div></a>
				  <ul>
					<li <?php //if($segment3=='create_newsletter') echo 'id="active2"';?>><a href="<?php //echo base_url('newsletter/create_newsletter');?>"><span>&#8250;</span> Create Newsletter</a></li>
                     <li <?php //if($segment3=='view_newsletter' || $segment3=='') echo 'id="active2"';?>><a href="<?php //echo base_url('newsletter/view_newsletter');?>"><span>&#8250;</span> View Newsletter</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			//}
			//else
		//	{
			?>
			<li>
                    <a href="<?php //echo base_url('newsletter');?>">
                        <div class="icontext">Newsletter</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
		//	} 
			?>
            --> 
            
             <!-- Added / Modified By Pradeep Pal on 12-11-2014 -->
           <?php /*?><?php 
          if($page=='emailtemplate')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('emailtemplate');?>"><div class="icontext">Email Template</div></a>
				  <ul>
					<li <?php if($segment3=='create_emailtemplate') echo 'id="active2"';?>><a href="<?php echo base_url('emailtemplate/create_emailtemplate');?>"><span>&#8250;</span> Create Email Template</a></li>
                     <li <?php if($segment3=='view_emailtemplate' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('emailtemplate/view_emailtemplate');?>"><span>&#8250;</span> View Email Template</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('emailtemplate');?>">
                        <div class="icontext">Email Template</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?><?php */?>
            
          <!-- Added / Modified By Pradeep Pal on 25-09-2014 -->
           <?php /*?><?php 
          if($page=='newsupdate')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('newsupdate');?>"><div class="icontext">News / Update</div></a>
				  <ul>
					<li <?php if($segment3=='create_newsupdate') echo 'id="active2"';?>><a href="<?php echo base_url('newsupdate/create_newsupdate');?>"><span>&#8250;</span> Create News Update</a></li>
                     <li <?php if($segment3=='view_newsupdate' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('newsupdate/view_newsupdate');?>"><span>&#8250;</span> View News Update</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('newsupdate');?>">
                        <div class="icontext">News / Update</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} */
			?> 
            
            <?php /*?><?php 
          if($page=='issue')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('issue');?>"><div class="icontext">Issue</div></a>
				  <ul>
					<li <?php if($segment3=='create_issue') echo 'id="active2"';?>><a href="<?php echo base_url('issue/create_issue');?>"><span>&#8250;</span> Create Issue</a></li>
                     <li <?php if($segment3=='view_issue' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('issue/view_issue');?>"><span>&#8250;</span>View Issue</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('issue');?>">
                        <div class="icontext">Issue</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} */
			?>
            
             <!-- Added / Modified By Pradeep Pal on 25-09-2014 -->
           <?php /*?><?php 
          if($page=='events_admin' || $page=='view_events_admin')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('events_admin/view_events_admin');?>"><div class="icontext">Events</div></a>
				  <ul>
					<li <?php if($segment3=='create_events_admin') echo 'id="active2"';?>><a href="<?php echo base_url('events_admin/create_events_admin');?>"><span>&#8250;</span> Create Event</a></li>
                     <li <?php if($segment3=='view_events_admin' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('events_admin/view_events_admin');?>"><span>&#8250;</span> View Event</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('events_admin/view_events_admin');?>">
                        <div class="icontext">Events</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} */
			?>  
            
           <!-- Added / Modified By Pradeep Pal on 11-10-2014 -->
          <?php /*?> <?php 
          if($page=='gallery' || $page=='video_gallery')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('gallery');?>"><div class="icontext">Gallery</div></a>
				  <ul>
					<li <?php if($segment3=='add_photo_gallery' || $segment3=='add_gallery_image') echo 'id="active2"';?>><a href="<?php echo base_url('gallery/add_photo_gallery');?>"><span>&#8250;</span> Add Picture Album</a></li>
                     <li <?php if($segment3=='view_photo_gallery' || $segment3=='view_gallery_image') echo 'id="active2"';?>><a href="<?php echo base_url('gallery/view_photo_gallery');?>"><span>&#8250;</span> View / Add Pictures</a></li>
                   
                     <li <?php if($segment3=='add_video_gallery' || $segment3=='add_gallery_video') echo 'id="active2"';?>><a href="<?php echo base_url('video_gallery/add_video_gallery');?>"><span>&#8250;</span> Add Video Album</a></li>
                     <li <?php if($segment3=='view_video_gallery' || $segment3=='view_gallery_video') echo 'id="active2"';?>><a href="<?php echo base_url('video_gallery/view_video_gallery');?>"><span>&#8250;</span> View / Add Videos</a></li>
					
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                <a href="<?php echo base_url('gallery');?>">
                    <div class="icontext">Gallery</div>
                    <span class="arrow_left">&#8249;</span>
                </a>
            </li>
			<?php 
			} 
			?> <?php */?>
            
           <!-- Added / Modified By Pradeep Pal on 10-11-2014 -->
			<?php /*?><?php 
			if($page=='subscription')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('subscription');?>"><div class="icontext">Subscription</div></a>
				  <ul>
					<li <?php if($segment3=='view_subscription' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('subscription/view_subscription');?>"><span>&#8250;</span> View Subscription</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('subscription');?>">
                        <div class="icontext">Subscription</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?><?php */?>

			<!-- Added / Modified By Ravi Srivastava on 03-12-2014 -->
			<?php /*?><?php 
			if($page=='fpdf')
			{
			?>
			<li id="active"> 
				<a href="<?php echo base_url('fpdf/manage_pdf');?>"><div class="icontext">Manage PDF</div></a>
				  <ul>
					<li <?php if($segment3=='manage_pdf' || $segment3=='') echo 'id="active2"';?>><a href="<?php echo base_url('fpdf/manage_pdf');?>"><span>&#8250;</span> Manage PDF</a></li>
					<div class="clear"></div>
				  </ul>
  			</li>
			<?php
			}
			else
			{
			?>
			<li>
                    <a href="<?php echo base_url('fpdf/manage_pdf');?>">
                        <div class="icontext">Manage PDF</div>
                        <span class="arrow_left">&#8249;</span>
                    </a>
            </li>
			<?php 
			} 
			?><?php */?>
            
  	     </ul>
    	  <!---navigation menu closed--->
    	  <!--copyright starts-->
    	 <!-- <div class="copyright_remove" style="color: #afb1b4;margin: 48px 0px 15px 40px;position: relative;bottom: -200px;">Copyright &copy; 2014</div>-->
    	  <!--copyright closed-->
  	  </div>
    	<!---navigation closed--->