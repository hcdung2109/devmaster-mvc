<?php
    require_once 'view/layout/header.php';
?>
<div class="col-md-6">
    <h4 class="my-2">Thêm Thành Viên</h4>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Họ và Tên</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ngày Sinh</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quê Quán</label>
            <textarea class="form-control" name="address"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="btnCreate">Tạo</button>
    </form>
</div>

<?php
    require_once 'view/layout/footer.php';
?>

