<section>
	<div class="intBanner">
    	<h2>Board of Directors</h2>
    </div>	
</section>
<section class="int_post_sec">
	<div class="contentwrap">
      <div class="bc">
      <ul>
        <li><a href="">Home</a></li>
        <li>/</li>
        <li><a href="<?php echo base_url('bod');?>">Board of Director</a></li>
        <li>/</li>
        <li><?php echo $mem_data[0]['name']; ?></li>
      </ul>
      </div>
   </div>
	<div class="contentwrap"><h2 class="art_head">The NATOA <span>Board of Directors</span></h2></div>
	<div class="contentwrap">
    	<div class="int_cont_wrap int_cont_left">
            

    <div class="innercont">        
    	<strong>Board of Directors</strong>
    	<ul class="bodlist">
        	<li>
            	<a href="javascript:void(0);"><div class="bodpic"><img src="<?php echo base_url(); ?>assets/board_of_director/<?php echo $mem_data[0]['pic_name']; ?>" alt=""/></div>
                <div class="bodDescMain">
                	<div class="bodNm"><?php echo $mem_data[0]['name']; ?> - <span><?php echo $mem_data[0]['designation']; ?></span></div>
                    <div class="bodsubdomain"><?php echo $mem_data[0]['position']; ?></div>
                    <div class="bodaddress"><?php echo $mem_data[0]['address']; ?></div>
                    <div class="bodemail">Email: <a href=""><span><?php echo $mem_data[0]['email']; ?></span></a></div></a>
                    <div class="bodaddress"><?php echo $mem_data[0]['page_content']; ?></div>
                </div>
            </li>
         </ul>

         
    </div>

    
</div>
        <div class="int_cont_right">
        	<div class="colboxwrap">
            	<div class="colboxtitle">GPA Entrant Area</div>
            	<div class="colboxcont">To submit an entry into this year&#8217;s Government Programming Awards, simply log in , or create a profile and select the button below.</div>
                <div class="colboxbot"><button>Enter The GPA Area</button></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>