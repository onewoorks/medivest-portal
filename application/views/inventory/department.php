<div class='row'>
    <div class='col-sm-12'>
        <div class="card">
            <div class="card-header">Department <?= $head_title; ?></div>
            <div class="card-body">
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Department Code</th>
                            <th>Department Name</th>
                            <th class='text-center'>Total Location</th>
                            <th>QR Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($departments as $key => $department): ?>
                            <?php
                            $data = array(
                                'areaCode' => $department['user_area_code'],
                                'areaName' => $department['user_area_name'],
                                'locationName' => $department['user_location_name'],
                                'userLocationCode' => $department['user_location_code'],
                                'userLocationName' => $department['user_location_name'],
                                'departmentCode' => $department['user_department_code']
                            );
                            $encoded_data = urlencode(json_encode($data));
                            ?>
                            <tr>
                                <td><?= ($key + 1); ?></td>
                                <td><?= $department['user_location_code']; ?></td>
                                <td><?= $department['user_location_name']; ?></td>
                                <td class='text-center'>
                                    <a href='<?= SITE_ROOT; ?>inventory/location?dept_id=<?= $department['user_department_code']; ?>&loc_id=<?= $department['user_location_code']; ?>'>
                                        <?= $department['total_asset']; ?></a>
                                </td>
                                <td class='text-center'>
                                    <a target="_blank" href='<?= QR_LINK;?>?code=<?= $department['user_location_code']; ?>&code=<?= $encoded_data; ?>&size=260'>
                                    <img src='<?= QR_LINK;?>?code=<?= $department['user_location_code']; ?>&code=<?= $encoded_data; ?>&size=60' />
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