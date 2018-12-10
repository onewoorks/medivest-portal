<div class='row'>
    <div class='col-sm-12'>
        <div class='card'>
            <div class='card-body'>
                <table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>No</th>
                            <th>Activity Time</th>
                            <th>Serial No</th>
                            <th>Asset Description</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>