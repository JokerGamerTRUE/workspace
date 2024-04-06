<?php require_once "actions/country.php";?>
<?php require_once "layout/parameters.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "layout/header.html"?>
    <title>Countries</title>
</head>
<body>
<div class="container-lg">
    <div class="card mt-5 px-3 py-4 shadow-lg rounded-5">
        <h1 class="text-center">Countries</h1>
        <hr class="w-50 mx-auto">
        <form class="px-4 mb-4">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="col">
                    <input type="search" name="search" class="form-control form-control-lg rounded-pill" placeholder="searching..." value="<?php echo $search ?? null?>">
                </div>
                <div class="col">
                    <select name="sort" class="form-select form-select-lg rounded-pill">
                        <option value="id|desc" <?php echo $sort == 'id|desc' ? "selected":"" ?>>Sorting: Latest - Oldes</option>
                        <option value="id|asc" <?php echo $sort == 'id|asc' ? "selected":"" ?>>Sorting: Oldes - Latest</option>
                        <option value="name|asc" <?php echo $sort == 'name|asc' ? "selected":"" ?>>Sorting: A - Z</option>
                        <option value="name|desc" <?php echo $sort == 'name|desc' ? "selected":"" ?>>Sorting: Z - A</option>
                    </select>
                </div>
            </div>
            <div align="center" class="mt-4">
                <input type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-bolder" value="Sort">
            </div>
        </form>
        <?php include "layout/alerts.php"?>
        <a href="/pages/create.php" class="btn btn-outline-success px-4 py-2 rounded-pill d-inline-block ms-auto mb-3 fw-bolder">
            <i class="fa-plus fa-solid fa-1x"></i>
            Create
        </a>
        <h3>Total (<span class="text-primary"><?php echo count($countries)?></span>)</h3>
        <table class="table table-secondary table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Currency</th>
                    <th>PhoneCode</th>
                    <th>States</th>
                    <th>event</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($countries as $country){?>
                <tr>
                    <th>#<?php echo $country['id'] ?? null ?></th>
                    <td><?php echo $country['name'] ?? null ?></td>
                    <td><?php echo $country['capital'] ?? null ?></td>
                    <td><?php echo $country['currency'] ?? null ?></td>
                    <td><?php echo $country['phonecode'] ?? null ?></td>
                    <td><?php echo $country['count_states'] ?? null ?> state</td>
                    <td>
                        <a class="text-decoration-none" href="/actions/country/delete.php?id=<?php echo $country['id']?>">
                            <i class="fa-x fa-solid fa-1x text-danger"></i>
                        </a>
                        <a class="text-decoration-none" href="/pages/edit.php?id=<?php echo $country['id']?>">
                            <i class="fa-pen fa-solid fa-1x text-primary"></i>
                        </a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <br>
    </div>
</div>
<?php include "layout/footer.html"?>
</body>
</html>
