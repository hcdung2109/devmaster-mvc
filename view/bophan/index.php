<?php
require_once 'view/layout/header.php';
?>
<h4 class="my-2">Danh Sách Bộ Phận</h4>
<p>
    <a href="/index.php?controller=bo-phan&action=create" class="btn btn-primary">Thêm Bộ Phận</a>
</p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên BP</th>
        <th scope="col">Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($data)): ?> <!-- if (isset($data) && $data != ''):  -->
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td>
                    <a href="/index.php?controller=bo-phan&action=edit&id=<?= $item['id'] ?>" class="btn btn-primary btn-sm">Sửa</a>
                    <button type="button" class="btn btn-danger btn-sm btn-xoa" data-id="<?= $item['id'] ?>" >Xóa</button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>

<?php
require_once 'view/layout/footer.php';
?>
