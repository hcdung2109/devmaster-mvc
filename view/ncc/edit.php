<?php
require_once 'view/layout/header.php';
?>
<div class="col-md-6">
    <h4 class="my-2">Sửa Thông Tin Nhà Cung Cấp</h4>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Mã NCC</label>
            <input value="<?php  if (isset($data['MaNCC'])) echo $data['MaNCC']; ?>" type="text" name="MaNCC" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tên NCC</label>
            <input value="<?php  if (isset($data['TenNCC'])) echo $data['TenNCC']; ?>" type="text" name="TenNCC" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Điện Thoại</label>
            <input value="<?php  if (isset($data['Dienthoai'])) echo $data['Dienthoai']; ?>" type="text" name="Dienthoai" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Địa Chỉ</label>
            <textarea class="form-control" name="Diachi"><?php  if (isset($data['Diachi'])) echo $data['TenNCC']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="btnUpdate">Sửa</button>
    </form>
</div>

<?php
require_once 'view/layout/footer.php';
?>

