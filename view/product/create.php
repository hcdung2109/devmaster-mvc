<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Thêm Sản Phẩm</h2>
    <!-- Lỗi validate -->
    <?php if (!empty($errorMsg)): ?>
        <div class="alert alert-danger">
            <p><?php echo $errorMsg; ?></p>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="email">Tên SP</label>
            <input value="" type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name">
            <span style="font-size: 12px;color: red;" id="errorName"></span>
        </div>
        <div class="form-group">
            <label for="pwd">Ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="email">Số Lượng SP</label>
            <input type="number" class="form-control" id="stock" placeholder="Nhập số lượng" name="stock" min="1" value="1">
            <span style="font-size: 12px;color: red;" id="errorStock"></span>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="is_active" id="is_active" value="1"> Hiển thị</label>
        </div>
        <button name="btnCreate" id="btnCreate" type="submit" class="btn btn-default">Thêm</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnCreate').click(function () {
            var flag = true; // đúng

            var name = $('#name').val(); // lấy vaule của ô tên
            if (name == '') {
                $('#errorName').text('Tên không được để trống');
                flag = false;
            }

            var stock = $('#stock').val(); // lấy giá trị của ô stock
            if (stock == '' || stock <= 0) {
                $('#errorStock').text('Số lượng phải lớn hơn không');
                flag = false;
            }
            // validate ....

            if (!flag) { // flag = false
                return false;
            }

        });
    });
</script>

</body>
</html>
