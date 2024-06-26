<?php
include_once ('helpers/url.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>
    <?php include_once ('indexTemplates/header.php') ?>
    
    <main class="m-5">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample2" aria-expanded="false"
                aria-controls="multiCollapseExample2">Toggle second element</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse"
                aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both
                elements</button>
        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        Some placeholder content for the first collapse component of this multi-collapse example. This
                        panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        Some placeholder content for the second collapse component of this multi-collapse example. This
                        panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <section class="mt-3">
            <?php include_once ('indexTemplates/pullData.php') ?>
        </section>
    </main>

    <footer class="mt-5">
        <?php include_once ('indexTemplates/footer.php') ?>
    </footer>
</body>

</html>