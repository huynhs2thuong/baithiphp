
<div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
            <h2><?php echo $catalog->name?> (Có <?php echo $total_rows?> sản phẩm)</h2>
          </div>
          <div class="box-content-center product"><!-- The box-content-center -->
                <?php foreach ($list as $row):?>
                <div class="product_item">
                       <h3>
                         <a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
                              <?php echo $row->name?>                     
                          </a>
                     </h3>
                       <div class="product_img">
                             <a title="<?php echo $row->name?>" href="<?php echo base_url('product/view/'.$row->id)?>">
                                <img alt="<?php echo $row->name?>" src="<?php echo base_url('upload/product/'.$row->image_link)?>">
                            </a>
                       </div>
          
                       <p class="price">
                              <?php if($row->discount > 0):?>
                              <?php $price_new = $row->price - $row->discount;?>
                              <?php echo number_format($price_new)?> đ <span class="price_old"><?php echo number_format($row->price)?> đ</span>
                      <?php else:?>
                        <?php echo number_format($row->price)?> đ
                      <?php endif;?>
                     </p>
                     
                        <center>
                           <div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
                        </center>
                        
                       <div class="action">
                           <p style="float:left;margin-left:10px">Lượt xem: <b><?php echo $row->view?></b></p>
                         <a title="Mua ngay" href="<?php echo base_url('product/view/'.$row->id)?>" class="button">Chi tiết</a>
                         <div class="clear"></div>
                       </div>
                   </div>
                   <?php endforeach;?>
                <div class="clear"></div>
          </div><!-- End box-content-center -->
          
          <div class="pagination">
              <?php echo $this->pagination->create_links()?>
             </div>
</div>

<!-- </div><?php
//$this->load->library('cart');
//$this->load->model('product_model');
?>
<div class="box-center">
             <div class="tittle-box-center">
		        <h2><?php //echo $catalog->name?> (Có <?php //echo $total_rows?> sản phẩm)</h2>
		      </div>
		      <div class="box-content-center product">
		            <?php //foreach ($list as $row):?>
		            <div class="product_item">
                       <h3>
                         <a title="<?php //echo $row->name?>" href="<?php //echo base_url('product/view/'.$row->id)?>">
                              <?php //echo $row->name?>	                    
                          </a>
	                   </h3>
                       <div class="product_img">
                             <a title="<?php //echo $row->name?>" href="<?php //echo base_url('product/view/'.$row->id)?>">
                                <img alt="<?php //echo $row->name?>" src="<?php //echo base_url('upload/product/'.$row->image_link)?>">
                            </a>
                       </div>
          
                       <p class="price">
                              <?php //if($row->discount > 0):?>
                              <?php //$price_new = $row->price - $row->discount;?>
                              <?php //echo number_format($price_new)?> đ <span class="price_old"><?php //echo number_format($row->price)?> đ</span>
				              <?php //else:?>
				                <?php //echo number_format($row->price)?> đ
				              <?php //endif;?>
		                 </p>
		                 
                        <center>
                           <div class='raty' style='margin:10px 0px' id='9' data-score='4'></div>
                        </center>
                        
                       <div class="action">
                           <p style="float:left;margin-left:10px">Lượt xem: <b><?php //echo $row->view?></b></p>
	                       <a title="Mua ngay" href="#" onclick="return addCart('<?php //echo .$product->id ?>')" class="button">Mua ngay</a>
	                       <div class="clear"></div>
                       </div>
                   </div>
                   <?php// endforeach;?>
		            <div class="clear"></div>
		      </div>
		      
		      <div class="pagination">
		          <?php //echo $this->pagination->create_links()?>
             </div>
</div>

<script type="text/javascript">
  function addCart(id)
  {
        $product = $this->product_model->get_info($id);
        if(!$product)
        {
            redirect();
        }
        //tong so san pham
        $qty = 1;
        $price = $product->price;
        if($product->discount > 0)
        {
            $price = $product->price - $product->discount;
        }
        
        //thong tin them vao gio hang
        $data = array();
        $data['id'] = $product->id;
        $data['qty'] = $qty;
        $data['name'] = url_title($product->name);
        $data['image_link']  = $product->image_link;
        $data['price'] = $price;
        $this->cart->insert($data);
       // print_r($this->cart->contents());
        
        //chuyen sang trang danh sach san pham trong gio hang
        redirect(base_url('cart'));
  }
</script> -->