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
    <h2>Danh Sách SP</h2>
    <a class="btn btn-primary" href="/index.php?controller=product&action=create" title="Thêm SP">Thêm SP</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên SP</th>
            <th>Hành Động</th>
        </tr>
        </thead>
        <tbody>
            <?php if(!empty($data)): ?>
                <?php foreach ($data as $key => $val): ?>
                    <tr>
                        <td><?= $val['id']; ?> </td>
                        <td><?= $val['name']; ?></td>
                        <td>
                            <button data-id="<?= $val['id']; ?>" class="btn btn-primary btnUpdate">Sửa</button>
                            <button data-id="<?= $val['id']; ?>" class="btn btn-danger btnDelete">Xóa</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.btnDelete').click(function () {
            var id_product = $(this).attr('data-id');

            // Tạo ra 1 request ngầm
            $.ajax({
                method: "GET",
                url: "http://mvc.local:8888/index.php?controller=product&action=delete",
                data: {
                    id: id_product
                },
                success: function (response) {
                    console.log(response);
                }
            });
        });
    });
</script>

</body>
</html>
