<?php
require_once 'view/layout/header.php';
?>
<h4 class="my-2">Danh Sách Nhà Cung Cấp</h4>
<p>
    <a href="/index.php?controller=ncc&action=create" class="btn btn-primary">Thêm NCC</a>
</p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Mã NCC</th>
        <th scope="col">Tên NCC</th>
        <th scope="col">Địa Chỉ</th>
        <th scope="col">Điện Thoại</th>
        <th scope="col">Hành Động</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($data)): ?> <!-- if (isset($data) && $data != ''):  -->
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item['MaNCC'] ?></td>
                <td><?= $item['TenNCC'] ?></td>
                <td><?= $item['Dienthoai'] ?></td>
                <td><?= $item['Diachi'] ?></td>
                <td>
                    <a href="/index.php?controller=ncc&action=edit&id=<?= $item['MaNCC'] ?>" class="btn btn-primary btn-sm">Sửa</a>
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
