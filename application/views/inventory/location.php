<div class='row'>
    <div class='col-sm-12'>
        <div class="card">
            <div class="card-header">Location <?= $head_title;?> Asset List</div>
            <div class="card-body">
                <table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>No</th>
                            <th>Asset No</th>
                            <th>Asset Description</th>
                            <th>Serial No</th>
                            <th>Asset Status</th>
                            <th>Current Status</th>
                            <th class='text-center'>QR Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inventories as $key => $inventory): ?>
                        <?php
                            $data = array(
                                'assetNo' => $inventory['asset_no'],
                                'assetName' => $inventory['asset_description'],
                                'model' => $inventory['model'],
                                'brand' => $inventory['brand'],
                                'manufacturer' => $inventory['manufacturer'],
                                'serialNo' => $inventory['serial_no']
                            );
                            $encoded_data = urlencode(json_encode($data));
                            ?>
                            <tr>
                                <td><?= ($key + 1); ?></td>
                                <td><?= $inventory['asset_no']; ?></td>
                                <td>
                                    <?= $inventory['asset_description']; ?>
                                    <div style='font-size:0.8rem; font-style: italic'>
                                        <?= $inventory['model'] . ', ' . $inventory['brand'] . ', ' . $inventory['manufacturer']; ?>
                                    </div>
                                </td>
                                <td><?= $inventory['serial_no']; ?></td>
                                <td class='text-center'><?= $inventory['asset_status']; ?></td>
                                <td class='text-center'><?= $inventory['real_time_status']; ?></td>
                                <td class='text-center'>
                                    <a target='_blank' href='<?= QR_LINK;?>?code=<?= $inventory['asset_no']; ?>&code=<?= $encoded_data;?>&size=260'>
                                    <img src='<?= QR_LINK;?>?code=<?= $inventory['asset_no']; ?>&code=<?= $encoded_data;?>&size=60' />
                                    </a>
                                    </td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>        
            </div>
        </div>

    </div>
</div>