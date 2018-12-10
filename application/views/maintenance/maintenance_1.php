<div class='row'>
    <div class='col-sm-12'>
        <div class='card'>
            <div class='card-body'>
                <table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Engineer</th>
                            <th>Asset No</th>
                            <th>Asset Description</th>
                            <th>Task Not Complete</th>
                            <th>Last Scan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($maintenance_activity)):?>
                        <?php foreach ($maintenance_activity as $key => $activity): ?>
                            <tr>
                                <td><?= ($key + 1); ?></td>
                                <td><?= $activity['asset_no']; ?></td>
                                <td>
                                    <?= $activity['asset_description']; ?>
                                    <div style='font-size:0.8rem; font-style: italic'>
                                        <?= $activity['model'] . ', ' . $activity['brand'] . ', ' . $activity['manufacturer']; ?>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="5"><i>No record</i></td>
                            </tr>
                            <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>