<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <tbody>
                    <?php foreach ($albums as $album): ?>
                    <tr>
                    <td><?= $album['name'] ?></td>
                    <td><?= $album['year'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>