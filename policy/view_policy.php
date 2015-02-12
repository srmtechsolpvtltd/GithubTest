<?php
/**
 * Short description for file
 *
 * @FileName		view_cms.php
 * @Created On		16 Sep 2014
 * @author			Ravi Srivastava <ravi.srivastava@srmtechsol.com> 
 * @copyright		2014-2015 The PHP Group
 * @license			http://www.php.net
 * @Description		View all CMS Pages in admin panel

 */
 ?>
<SCRIPT LANGUAGE="JavaScript">
function delete_function(id){
	doIt=confirm('Are you sure to delete? ');
	if(doIt){
		window.location='<?php echo base_url("policy/delete");?>/'+id;
	}
	else{
		return false;
	}
}
function status_function(id,status){
	doIt=confirm('Do you want to change status?');
	if(doIt){
		window.location='<?php echo base_url("policy/status");?>/'+id+'/'+status;
	}
	else{
		return false;
	}
}
</SCRIPT>
<!---main starts--->
   	  <div class="mainpage">
      			<!--Mainheading starts-->
                	<div class="main_heading">View Policy Pages</div>
                <!--Mainheading closed-->
                
                <div class="clear"></div>

				<?php
				$message = $this->session->userdata('success');
				if (isset($message) && $message != "") 
				{
					echo '<div style="color:#339900;text-align:center;">'.$message.'</div>';
				}
				?>
                <!---table body starts--->
                	<div class="table_body">
                    	<table width="100%" border="1" bordercolor="#d7d7d7" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                          <tr>
                            <td width="20" class="table_heading">S.No.</td>
                           <!-- <td width="170" class="table_heading">Menu Name</td>-->
                            <td width="320" class="table_heading">Page Name</td>
                           <!-- <td width="170" class="table_heading">Meta Title</td>-->
							<td width="40" class="table_heading">Action</td>
                          </tr>
						  <?php 
						$limit = $this->uri->segment(3);
						if ($limit == '') 
						{
							$i = 1;
						} 
						else 
						{
							$i = $limit + 1;
						}
						
					if(count($cms_list)>0)
					{	
						//print_r($cms_list);						
						foreach($cms_list as $cms) { ?>
                          <tr>
                            <td class="table_content"><?php echo $i;?></td>
                            <!--<td class="table_content"></td>-->
                            <td class="table_content"><?php echo $cms["page_name"]; ?></td>
                            <!--<td class="table_content"><?php //echo $cms["meta_title"]?></td>-->
							<td class="table_content">
							<?php 
							$status_img = base_url("assets/images/active.png");
							$status = 'Active';
							$send_status = 0;
							if($cms["status"]==0)
							{
								$status_img = base_url("assets/images/inactive.png");
								$status = 'Inactive';
								$send_status = 1;
							}							
							?>
							<table border="0">
							<tr><td>
                            <?php if($cms["id"] != 1 ) { ?>
							<a href = "javascript: void(0);" onclick="status_function('<?php echo $cms['id']?>','<?php echo $send_status;?>')">
							<img src="<?php echo $status_img;?>" title="<?php echo $status;?>"></a>
                            <?php } ?>
							</td>

							<td><a href = "<?php echo base_url('policy/edit_policy/'.$cms['id']);?>"><img src="<?php echo base_url("assets/images/edit.png"); ?>" width="18" height="18" title="Edit"></a></td>
							<?php if($cms["id"] != 1 ) { ?>
							<td><a href = "javascript: void(0);" onclick="delete_function('<?php echo $cms['id']?>')"><img src="<?php echo base_url("assets/images/delete.png");;?>" width="16" height="16" title="Delete"></a></td>
                            <?php } ?>
							</tr>
							</table>
							</td>
                          </tr>
                     <?php $i++;} }else { ?>
                 			<tr>
                            	<td colspan="4" style="color:#ff0000;text-align:center;">Record(s) Not found.</td>
                            </tr>
               		<?php } ?> 
                        </table>
						<div class="paging">
							<ul class="pagination paginationA paginationA01">
							<?php echo $pagination; ?>
							</ul>
						</div>

        </div>
                <!---table body closed--->
      </div>
        <!---main closed--->
<script type="text/javascript">
$(function() {
	$( "#Datepicker1" ).datepicker(); 
	$( "#Datepicker2" ).datepicker(); 
});
</script>  