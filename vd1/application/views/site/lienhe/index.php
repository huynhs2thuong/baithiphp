    
<div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
             <h2>Liên Hệ</h2>
		      </div>
             
		 <div class="box-content-center product"><!-- The box-content-center -->
         
		            <form class="t-form form_action" method="post" action="<?php echo site_url('lienhe/index')?>" enctype="multipart/form-data">
                    
                    <div class="form-row">
        						<label for="param_name" class="form-label">Họ và tên:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="name" name="name" value="<?php echo set_value('name')?>">
        							<div class="clear"></div>
        							<div class="error" id="name_error"><?php echo form_error('name')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
                          
                          <div class="form-row">
        						<label for="param_email" class="form-label">Gmail:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="email" name="email" value="<?php echo set_value('email')?>">
        							<div class="clear"></div>
        							<div class="error" id="email_error"><?php echo form_error('email')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				 
        				  
        				 
        				  
        				  <div class="form-row">
        						<label for="param_phone" class="form-label">Số điện thoại:<span class="req">*</span></label>
        						<div class="form-item">
        							<input type="text" class="input" id="phone" name="phone" value="<?php echo set_value('phone')?>">
        							<div class="clear"></div>
        							<div class="error" id="phone_error"><?php echo form_error('phone')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label for="param_address" class="form-label">Điều bạn muốn nói:<span class="req">*</span></label>
        						<div class="form-item">
        							<textarea class="input" id="address" name="address"><?php echo set_value('content')?></textarea>
        							<div class="clear"></div>
        							<div class="error" id="address_error"><?php echo form_error('content')?></div>
        						</div>
        						<div class="clear"></div>
        				  </div>
        				  
        				  <div class="form-row">
        						<label class="form-label">&nbsp;</label>
        						<div class="form-item">
        				           	<input type="submit" class="button" value="Gửi" name="submit">
        						</div>
        				   </div>
                    </form>
		            <div class="clear"></div>
		      </div><!-- End box-content-center -->
</div>