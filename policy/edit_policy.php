<?php
/**
 * Short description for file
 *
 * @FileName		edit_cms.php
 * @Created On		16 Sep 2014
 * @author			Ravi Srivastava <ravi.srivastava@srmtechsol.com> 
 * @copyright		2014-2015 The PHP Group
 * @license			http://www.php.net
 * @Description		Edit CMS Page in admin panel

 */
 ?>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/javascript/fileuploader.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/fileuploader.css');?>" type="text/css" media="screen" />
<!--- Script Added by Pradeep Pal on 19-09-2014 -->
<script type="text/javascript">

	$(document).ready(function(){ 
		$("input").attr("autocomplete", "off"); 
	});
	
	function clickReset()
	{
		window.location = "<?php echo base_url();?>policy/view_policy";
	}
</script>
<!--- Script Added by Pradeep Pal on 19-09-2014 End -->
<!---main starts--->
   	  <div class="mainpage">
      			<!--Mainheading starts-->
                	<div class="main_heading">Edit Policy Page</div>
                <!--Mainheading closed-->
                <div class="clear"></div>
                		<div class="alert alert-error" style="text-align:right;">[* Required fields.]</div>
                    	<!---CMS form starts--->
							<?php 
							$error = $this->session->userdata('error');
							if ($error): ?>
							<div class="alert alert-error" style="text-align:center;"><?= $error ?></div>
							<?php endif; ?>
                      		<div class="blog_uploading">
                                <?php echo form_open("policy/edit_policy/".$cms['id'], "enctype='multipart/form-data'") ?>

                                 	<!---Page Name starts--->
                                    <div class="blog_uploading_label"><span class="alert-error">*</span>Page Title:</div>
                                    <div class="blog_uploading_field"><input name="page_name" type="text" class="textbox3" value="<?php echo $cms['page_name'];?>" required/></div>
                                    <?php if(form_error('page_name')) { ?>
                                    <div class="blog_uploading_label">&nbsp;</div>
                                    <div class="blog_uploading_field"><?php echo form_error('page_name'); ?></div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                    <!---Page Name closed--->

                                    <!---Meta Title starts--->
                                    <div class="blog_uploading_label"><span class="alert-error">*</span>Meta Title:</div>
                                    <div class="blog_uploading_field"><input name="meta_title" type="text" class="textbox3" value="<?php echo $cms['meta_title'];?>" required/></div>
                                     <?php if(form_error('meta_title')) { ?>
                                    <div class="blog_uploading_label">&nbsp;</div>
                                    <div class="blog_uploading_field"><?php echo form_error('meta_title'); ?></div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                    <!---Meta Title closed--->

									<!---Meta Keywords starts--->
                                    <div class="blog_uploading_label"><span class="alert-error">*</span>Meta Keywords:</div>
                                    <div class="blog_uploading_field"><input name="meta_keyword" type="text" class="textbox3" value="<?php echo $cms['meta_keyword'];?>" required/></div>
                                     <?php if(form_error('meta_keyword')) { ?>
                                    <div class="blog_uploading_label">&nbsp;</div>
                                    <div class="blog_uploading_field"><?php echo form_error('meta_keyword'); ?></div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                    <!---Meta Keywords closed--->

									<!---Meta Description starts--->
                                    <div class="blog_uploading_label"><span class="alert-error">*</span>Meta Description:</div>
                                    <div class="blog_uploading_field"><input name="meta_description" type="text" class="textbox3" value="<?php echo $cms['meta_description'];?>" required/></div>
                                     <?php if(form_error('meta_description')) { ?>
                                    <div class="blog_uploading_label">&nbsp;</div>
                                    <div class="blog_uploading_field"><?php echo form_error('meta_description'); ?></div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                    <!---Meta Description closed--->
                                    
                                    <!---Page Content starts--->
                                    <div class="blog_uploading_label"><span class="alert-error">*</span>Page Content:</div>
                                    <div class="blog_uploading_field">
									<?php echo form_textarea(array("name" => "page_content", "value" => stripslashes($cms["page_content"]), "class" => "ckeditor")) ?>
									</div>
                                     <?php if(form_error('page_content')) { ?>
                                    <div class="blog_uploading_label">&nbsp;</div>
                                    <div class="blog_uploading_field"><?php echo form_error('page_content'); ?></div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                    <!---Page Content closed--->
                                   
                                    <!--Submit starts--->
                                    <div class="blog_uploading_field">
                                    	<input name="id" type="hidden" value="<?php echo $cms['id'];?>"/>
										<input name="submit" type="submit" value="Update" class="cssButton" title="Click to Update"/>
                                        <input name="reset" type="button" value="Cancel" class="cssButton" onclick="clickReset()" title="Click to Cancel"/>
                                    </div>
                                    <div class="clear"></div>
                                    <!---Submit closed--->
                                </form>
                            </div>
                        <!---CMS form closed--->
                   
       	<!---table body starts---><!---table body closed--->
      </div>
        <!---main closed--->