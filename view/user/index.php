<?php
require_once 'view/layout/header.php';
?>
<br>
<h2>Danh SÁCH THÀNH VIÊN </h2>
<p>
    <a href="/index.php?controller=user&action=create" class="btn btn-primary">Thêm mới</a>
</p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Họ và Tên</th>
        <th scope="col">Ngày Sinh</th>
        <th scope="col">Quê Quán</th>
        <th scope="col">Hành Động</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($data)): ?> <!-- if (isset($data) && $data != ''):  -->
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['birthday'] ?></td>
                <td><?= $item['address'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                    <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>

<?php
require_once 'view/layout/footer.php';
?>
