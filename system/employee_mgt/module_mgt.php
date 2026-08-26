<?php
ob_start();
include '../../config.php';
include '../../function.php';

$con = dbConnect();
?>

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title"> Module Table</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
            </div>
            </div>
        </div>
    </div>
<div class="card-body table-responsive p-0">

<?php
        
// Load all modules with parent name
$sql = "
SELECT
m.*,
p.module_name AS parent_name
FROM modules m
LEFT JOIN modules p ON m.parent_id = p.id
ORDER BY
COALESCE(m.parent_id, m.id),
m.parent_id IS NULL DESC,
m.module_index ASC
";
$result = $con->query($sql);
$modules =[];

while($row=$result->num_rows > 0) {
    $modules [] = $row;
}

// Separate main and Sub modules 
$main_modules = [];
$sub_modules = [];
foreach ($modules as $m) {
    if ($m['parent_id'] == NULL) {
        $main_modules[] = $m;
    } else {
        $sub_modules[] = $m;
        }
}
?>
<table class="table table-bordered table-hover">

    <thead class="table-dark">

        <tr>
            <th>#</th>
            <th>Module Name</th>
            <th>Parent Module</th>
            <th>URL</th>
            <th>Action</th>
            <th>Menu</th>
            <th>Order</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>

    </thead>

    <tbody>

   
               
<?php  
$count =1;
foreach ($main_modules as $main): 
?>

<!-- MAIN MODULE -->
<tr class="table-primary fw-bold">
<td><?= $count++ ?></td>
<td><?= $main['module_name'] ?></td>
<td>—</td>
<td><?= $main['module_url'] ?></td>
<td><?= strtoupper($main['action']) ?></td>
<td><?= $main['ismenu'] ? 'Yes' : 'No' ?></td>
<td><?= $main['module_index'] ?></td>
<td>
<a href="edit.php?id=<?= $main['module_id'] ?>" class="btn
btn-sm btn-warning">Edit</a>
<a href="delete.php?id=<?= $main['module_id'] ?>" class="btn
btn-sm btn-danger"
onclick="return confirm('Delete this
module?')">Delete</a>
</td>
</tr>
<!-- SUB MODULES -->
<?php foreach ($sub_modules as $sub): ?>
<?php if ($sub['parent_id'] == $main['id']): ?>
<tr>
<td><?= $count++ ?></td>
<td class="ps-4">↳ <?= $sub['module_name'] ?></td>
<td><?= $main['module_name'] ?></td>
<td><?= $sub['module_url'] ?></td>
<td><?= strtoupper($sub['action']) ?></td>
<td><?= $sub['ismenu'] ? 'Yes' : 'No' ?></td>
<td><?= $sub['module_index'] ?></td>
<td>
<a href="edit.php?id=<?= $sub['module_id'] ?>"
class="btn btn-sm btn-warning">Edit</a>
<a href="delete.php?id=<?= $sub['module_id'] ?>"
class="btn btn-sm btn-danger"
onclick="return confirm('Delete this
module?')">Delete</a>
</td>
</tr>
<?php endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>
</tbody>
</table>
<?php
$content=ob_get_clean();
include '../layout.php';
?>