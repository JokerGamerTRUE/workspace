<?php require_once "../actions/country/edit.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "../layout/header.html"?>
    <title>Edit</title>
</head>
<body>
<div class="container-lg">
    <div class="card mt-5 px-3 py-4 shadow-lg rounded-5">
        <a class="d-inline-block me-auto btn btn-primary px-3 py-2 rounded-3" href="/">Back</a>
        <h1 class="text-center">Edit country #<?php echo $country['id']?></h1>
        <hr class="w-50 mx-auto">
        <?php include "../layout/alerts.php"?>
        <form method="post" action="/actions/country/update.php?id=<?php echo $country['id']?>">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="d-flex mb-4">
                        <div class="flex-fill-1 me-3 my-auto">
                            <label class="form-label fs-5" for="name">name</label>
                        </div>
                        <div class="flex-fill">
                            <input type="text" class="form-control form-control-lg py-2 px-3 rounded-pill" id="name" name="name" value="<?php echo $country['name'] ?? null?>" placeholder="name...">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex mb-4">
                        <div class="flex-fill-1 me-3 my-auto">
                            <label class="form-label fs-5" for="code">Code</label>
                        </div>
                        <div class="flex-fill">
                            <input type="number" class="form-control form-control-lg py-2 px-3 rounded-pill" id="code" name="code" value="<?php echo $country['phonecode'] ?? null?>" placeholder="code...">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex mb-4">
                        <div class="flex-fill-1 me-3 my-auto">
                            <label class="form-label fs-5" for="capital">Capital</label>
                        </div>
                        <div class="flex-fill">
                            <input type="text" class="form-control form-control-lg py-2 px-3 rounded-pill" id="capital" name="capital" value="<?php echo $country['capital'] ?? null?>" placeholder="capital...">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex mb-4">
                        <div class="flex-fill-1 me-3 my-auto">
                            <label class="form-label fs-5" for="currency">Currency</label>
                        </div>
                        <div class="flex-fill">
                            <input type="text" class="form-control form-control-lg py-2 px-3 rounded-pill" id="currency" name="currency" value="<?php echo $country['currency'] ?? null?>" placeholder="currency...">
                        </div>
                    </div>
                </div>
            </div>
            <div align="center">
                <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-bolder">Update</button>
            </div>
        </form>
    </div>
</div>
<?php include "../layout/footer.html"?>
</body>
</html>
