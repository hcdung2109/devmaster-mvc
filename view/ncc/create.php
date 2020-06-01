<?php
    require_once 'view/layout/header.php';
?>
<div class="col-md-6">
    <h4 class="my-2">Thêm Nhà Cung Cấp</h4>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Mã NCC</label>
            <input type="text" name="MaNCC" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tên NCC</label>
            <input type="text" name="TenNCC" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Điện Thoại</label>
            <input type="text" name="Dienthoai" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Địa Chỉ</label>
            <textarea class="form-control" name="Diachi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="btnCreate">Tạo</button>
    </form>
</div>

<?php
    require_once 'view/layout/footer.php';
?>

