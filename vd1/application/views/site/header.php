<!-- The box-header-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>			        
<link rel="stylesheet" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">	
<script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    $( "#text-search" ).autocomplete({
        source: "<?php echo site_url('product/search/1')?>",
    });
});
</script>


<div class="top">
      <!-- The top -->
      <div id="logo"><!-- the logo -->
           <a title="web ban hang" href="<?php echo base_url('home')?>">
	           <img alt="web ban hang" src="<?php echo public_url()?>/site/images/2.png" style="width:100%;height: 150%;">
	       </a>
       </div>
       <!-- End logo -->
       
       <!--  load gio hàng -->
      
       
      <div class="cart" id="cart_expand"> 
            <a class="cart_link" href="<?php echo base_url('cart')?>">
               Giỏ hàng <span id="in_cart"><?php echo $total_items?></span> sản phẩm
            </a> 
            <img src="<?php echo public_url()?>/site/images/cart.png" alt="cart bnc"> 
</div> 
    
       <div id="search"><!-- the search -->

			<form action="<?php echo site_url('product/search')?>" method="get">
			     <input type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($key) ? $key : ''?>" name="key-search" id="text-search">
				 <input type="submit" value="" name="but" id="but">
			</form>
       </div><!-- End search -->
       
              
    <div class="clear"></div><!-- clear float --> 
</div><!-- End top -->			   <!-- End box-header  -->
               
               <!-- The box-header-->
			        <div id="menu"><!-- the menu -->
           <ul class="menu_top">
                <li ><a href="<?php echo base_url('home')?>">Trang chủ </a></li>
                
                
                <li class=""><a href="<?php echo base_url('all_product');?>">Sản phẩm</a></li>
               
                <li class=""><a href=""data-toggle="modal" data-target="#modalContactForm">Liên hệ</a></li>
                <?php if(isset($user_info)):?>
                <li class=""><a href="<?php echo site_url('user')?>">Xin chào: <?php echo $user_info->name?></a></li>
                <li class=""><a href="" data-toggle="modal" data-target="#modalLoginAdminForm"target="_blank">Quản trị admin</a></li>
                <li class=""><a href="<?php echo site_url('user/logout')?>">Thoát</a></li>
                <?php else:?>
                <li class=""><a href=""data-toggle="modal" data-target="#dangki">Đăng ký</a></li>
                <li class=""><a href=""class="" data-toggle="modal" data-target="#modalLoginForm">Đăng nhập</a></li>
                <li class=""><a href="<?php echo base_url('gioithieu');?>">About</a></li><!--class="active index-li"-->
                <?php endif;?>
                
          </ul>
</div><!-- End menu -->
               <!-- End box-header  -->
		       
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <form class="t-form form_action" method="post" action="<?php echo site_url('user/login')?>" enctype="multipart/form-data">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Đăng nhập</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="defaultForm-email" style="color: blue;">Your email</label>
          <input type="email" id="defaultForm-email" class="form-control validate" name="email">
         
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Your password</label>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn" style="margin-right: 250px;
    width: 129px;background-color: aqua;">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- //////////////////////// -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- s -->
       <form class="t-form form_action" method="post" action="<?php echo base_url();?>admin/Sendmail/send" enctype="multipart/form-data">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Thông tin Liên hệ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
       <!--  <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Họ và Tên</label>
          <input type="text" id="form34" class="form-control validate" name="name">
          
        </div> -->

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form29">Email</label>
          <input type="email" id="form29" class="form-control validate" name="to_email">
         
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="form32">Số Điện Thoại</label>
          <input type="text" id="form32" class="form-control validate" name="subject" >
         
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form8">Lời Nhắn</label>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4" name="message"></textarea>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn" style="margin-right: 211px;
    width: 190px;background-color: aqua">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- /////////////////////// -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="dangki" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form class="t-form form_action" method="post" action="<?php echo site_url('user/register')?>" enctype="multipart/form-data">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Đăng ký</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="defaultForm-email" style="color: blue;">Email</label>
         <input type="email" id="form29" class="form-control validate" name="email">
         
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Mật khẩu:<span class="req">*</span></label>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
          
        </div>
         <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Gõ lại mật khẩu:<span class="req">*</span></label>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="re_password">
          
        </div>
         <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Họ và tên:</label>
           <input type="text" id="form34" class="form-control validate" name="name" >
          
        </div>
         <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Số điện thoại:</label>
          <input type="text" id="form32" class="form-control validate" name="phone">
          
        </div>
         <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Địa chỉ:</label>
           <textarea type="text" id="form8" class="md-textarea form-control" rows="2" name="address"></textarea>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn" style="margin-right: 250px;
    width: 129px;background-color: aqua;">Đăng ký</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="modal fade" id="modalLoginAdminForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <form class="t-form form_action" method="post" action="<?php echo base_url('admin/login');?>" enctype="multipart/form-data">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Đăng nhập</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -30px">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
           <label data-error="wrong" data-success="right" for="defaultForm-email" style="color: blue;">UserName</label>
          <input type="text" id="param_username" class="form-control validate" name="username">
         
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color: blue;">Your password</label>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn" style="margin-right: 250px;
    width: 129px;background-color: aqua;">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>
