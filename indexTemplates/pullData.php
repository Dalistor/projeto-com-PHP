<?php
include_once ('data/posts.php');
?>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="materia">Matéria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $item): ?>

                <tr style="cursor: pointer; ">

                    <th scope="row"><?= $item['id'] ?></th>
                    <td><?= $item['title'] ?></td>
                    <td><a href="<?= $BASE_URL ?>post.php?id=<?= $item['id'] ?>">Matéria</td></a>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>