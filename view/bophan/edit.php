<?php
require_once 'view/layout/header.php';
?>
<div class="col-md-6">
    <h4 class="my-2">Sửa Thông Tin Bộ Phận</h4>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên Bộ Phận</label>
            <input value="<?php  if (isset($data['name'])) echo $data['name']; ?>" type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" name="btnUpdate">Sửa</button>
    </form>
</div>

<?php
require_once 'view/layout/footer.php';
?>

