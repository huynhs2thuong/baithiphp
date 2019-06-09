<?php $this->load->view('site/slide', $this->data);?>
<style type="text/css">
body,td,th {
  color: #000;
}
table,th,tr{
  border: 1px solid black;
  border-collapse: collapse;
}
tr,th{
  padding: 5px;
  text-align: left;
}
</style>

<div class="box-center"><!-- The box-center product-->
             <div class="tittle-box-center">
            <h2>Báo cáo bài thi giữa kì</h2>
  </div>
              <div class="box-content-center product" style="font-size:18px">
              <h3 style="color:#9C9"><p>Mô tả về bài thi giữa kì</p></h3>
              <p><br />
               + web đc dựa trên famework CodeIgniter<br/>
               + Dữ liệu được lấy từ cơ sở dữ liêu<br/>
               + giao diện được viết trên nền html-css + bootstrap
              <br/>
              <h4>1.Cơ sở dữ liệu có các bảng chính như :</h4>
              + admin : lưu trữ tài khoản admin để truy cập vào trang admin của web size
              <br/>
              + user : •    lưu lại thông tin của khách hàng.
               <br/>
           
              + catalog : •    lưu trữ danh mục sản phẩm .
               <br/>
              +  product :  •    lưu trữ dữ liệu sản phẩm(tên , giá , hình ảnh, ....) .       
               <br/>
               + các  bảng còn lại liên quan đến phần mua hàng , phần comment, giao hàng.
              <br/>
               <br/>
              <h4>2.web size có giao diện bố cục như sau:</h4>
              • <b>header</b> : gồm tên web size , tìm kiếm , giỏ hàng và phần menu
               <br/>
              •<b> conten-left</b> : là danh sách danh mục sản phẩm; 
               <br/>
              •<b> conten-right</b> : là phần hỗ trợ , tin tức,...
               <br/>
              •<b> conten</b> : danh sách các sản phẩm .
               <br/>
              •<b> footer</b> : giới thiệu về người bán hàng
               <br/>
               <b>lỗi</b> Phần thêm vào giỏ hàng (ko sử dụng được thư viện shopping cart trong codeiginter được tích sẵn trong Session) 
                <br/>
                 <br/>
             <b>Thành viên trong nhóm</b>
              <br/>
             1: Phạm Văn Huỳnh
              <br/>
              2 : Lê thị Thương
              <br/>
              3 : Nguyễn Thiết Tuấn
              <br>
               <h2>Công việc từng Thành viên trong nhóm</h2>
               <table>
                 <tr>
                   <th>Stt</th>
                   <th>MSSV</th>
                   <th>Tên Thành viên</th>
                   <th>Hình</th>
                   <th>Công việc</th>
                 </tr>
                 <tr>
                   <th>1</th>
                   <th>1706020034</th>
                   <th>Phạm Văn Huỳnh</th>
                   <th style="width: 100px; height: 100px;"><img width="100%" height="100%" alt="" src="<?php echo base_url('upload/user/2.jpg')?>"></th>
                   <th>chỉnh sửa, thêm mới dữ liệu lưu vào database</th>
                 </tr>
                  <tr>
                   <th>1</th>
                   <th>MSSV</th>
                   <th>Lê thị Thương</th>
                   <th style="width: 100px; height: 100px;"><img width="100%" height="100%" alt="" src="<?php echo base_url('upload/user/1.jpg')?>"></th>
                   <th>thiết kế modal form</th>
                 </tr>
                 <tr>
                   <th>1</th>
                   <th>MSSV</th>
                   <th>Nguyễn Thiết Tuấn</th>
                   <th style="width: 100px; height: 100px;"><img width="100%" height="100%" alt="" src="<?php echo base_url('upload/user/3.jpg')?>"></th>
                   <th>,thiết kế giao diện(Views)</th>
                 </tr>
               </table>
              </p>
              <div class="clear"></div>
              
  </div>
</div>