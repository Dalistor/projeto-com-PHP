<?php
include_once ('helpers/url.php');
include_once ('data/posts.php');

$key = false;

if (isset($_GET['id'])) {
    $key = array_search($_GET['id'], array_column($posts, 'id'));
    $key !== false ? $posts[$key] : null;
}
?>

<?php if ($key !== false): ?>
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
            <div class="card">
                <div class="card-header">
                    <?= $posts[$key]['title'] ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Descrição</h5>
                    <p class="card-text"><?= $posts[$key]['description'] ?></p>
                    <a href="<?= $BASE_URL ?>" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </main>

        <?php include_once ('indexTemplates/footer.php') ?>
    </body>

    </html>
<?php else: ?>
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
            <div class="card">
                <div class="card-header">
                    Erro
                </div>
                <div class="card-body">
                    <p class="card-text">Post não encontrado.</p>
                    <a href="<?= $BASE_URL ?>" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </main>

        <footer class="mt-5">
            <?php include_once ('indexTemplates/footer.php') ?>
        </footer>
    </body>

    </html>
<?php endif; ?>