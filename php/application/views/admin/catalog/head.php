<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Danh mục</h5>
			<span>Quản lý danh mục sản phẩm</span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo admin_url('catalog/add')?>">
					<img src="<?php echo public_url('admin')?>/images/icons/control/16/add.png">
					<span>Thêm mới</span>
				</a></li>
				
				<li><a href="<?php echo admin_url('catalog/index')?>">
					<img src="<?php echo public_url('admin')?>/images/icons/control/16/list.png">
					<span>Danh sách</span>
				</a></li>
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<!-- <div class="modal fade" id="danhmuc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	 <form id="form" class="form" enctype="multipart/form-data" method="post" action="<?php //echo admin_url('catalog/add')?>">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Thêm Danh Mục Sản Phẩm</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-name">Tên</label>
          <input type="text" id="defaultForm-name" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-name">Danh mục</label>
          <input type="text" id="defaultForm-name" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-name">Thứ tự hiển thị</label>
         <span class="oneTwo">
                    		<select _autocheck="true" id="param_parent_id"  name="parent_id">
                    		     <option value="0">Là danh mục cha</option>
                    		     <?php //foreach ($list as $row):?>
                    		       <option value="<?php// echo $row->id?>"><?php echo $row->name?></option>
                    		     <?php //endforeach;?>
                    		</select>
                		</span>
                		<span class="autocheck" name="parent_id_autocheck"></span>

          
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
  </form>
    </div>
  </div>
</div>

 -->