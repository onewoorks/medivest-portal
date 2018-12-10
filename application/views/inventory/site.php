<div class='row'>
    <div class='col-sm-12'>
        <div class="card">
            <div class="card-header">Tengku Jaafar</div>
            <div class="card-body">
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Area Code</th>
                            <th>Area Name</th>
                            <th>User Location Name</th>
                            <th class='text-center'>Total Location</th>
                            <th class='text-center'>QR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($departments as $key => $location): ?>
                            <?php
                            $data = array(
                                'areaCode' => $location['user_area_code'],
                                'areaName' => $location['user_area_name'],
                                'locationName' => $location['user_location_name'],
                                'departmentCode' => $location['user_department_code']
                            );
                            $encoded_data = urlencode(json_encode($data));
                            
                            ?>
                            <tr>
                                <td><?= ($key + 1); ?></td>
                                <td><?= $location['user_area_code']; ?></td>
                                <td><?= $location['user_area_name']; ?></td>
                                <td><?= $location['user_location_name']; ?></td>
                                <td class='text-center'><a href='<?= SITE_ROOT; ?>inventory/site/department?dept_id=<?= $location['user_department_code']; ?>'><?= $location['total_location']; ?></a></td>
                                <td class='text-center'><img src='<?= QR_LINK;?>?id=<?= $location['user_department_code']; ?>&code=<?= $encoded_data; ?>&size=80' /></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>