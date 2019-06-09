<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	
<div class="container" style="margin-top: 50px">
<p>
	<span class="message">
		<?php echo $this->session->flashdata('email_sent') ?>
	</span>
</p>
<!-- <form action="<?php echo base_url();?>admin/Sendmail/send" method="post"> -->
	
  <!-- <div class="form-group">
  	<label for="toemail">To:</label>
         <input type="email" id="to_email" name="to_email" class="form-control" placeholder="To Email" required >
  </div>
  <div class="form-group">
    <label for='subject'>Subject</label>
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required >
  </div>
  <div class="form-group">
    <label for='body'>Body</label>
      <textarea  id="body" class="form-control" placeholder="body" name="message">
     </textarea>
   
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-outline-primary">Send</button>
  </div> -->                
             <!--    <div class="formRow">
                  <label for="param_name" class="formLeft"><b>To:</b></label>
                  <div class="formRight">
                    <span class="oneTwo"><input type="email" _autocheck="true" id="param_name" name="to_email" style="height: 23px;
    width: 255px;"></span>

                  </div>
                  <div class="clear"></div>
                </div>
                
                 <div class="formRow">
                  <label for="param_name" class="formLeft"><b>Subject:</b></label>
                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="subject" style="height: 23px;
    width: 255px;"></span>

                  </div>
                  <div class="clear"></div>
                </div>
                
                 <div class="formRow">
                  <label for="param_name" class="formLeft"><b>Body:</b></label>
                  <div class="formRight">
                    <span class="oneTwo"><textarea type="text" _autocheck="true" id="param_sort_order" name="message" rows="4" style="width: 450px;"></textarea></span>
                  </div>
                  <div class="clear"></div>
                </div>
                
                
                <div class="formSubmit" >
                  <input type="submit" class="redB" value="Send" style="    width: 101px;
    height: 37px;
    background: aqua;
    margin-left: 120px;">
              </div>
</form> -->

</div>