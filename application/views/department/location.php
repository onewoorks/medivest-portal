<div class='row'>
    <div class='col-sm-12'>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Area Code</th>
                    <th>Area Name</th>
                    <th>User Location Name</th>
                    <th class='text-center'>Total Active Assets</th>
                    <th class='text-center'>QR</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($locations as $key=>$location):?>
                <tr>
                    <td><?= ($key+1);?></td>
                    <td><?= $location['user_area_code'];?></td>
                    <td><?= $location['user_area_name'];?></td>
                    <td><?= $location['user_location_name'];?></td>
                    <td class='text-center'><a href='<?= SITE_ROOT;?>inventory/location?loc_id=<?= $location['user_location_code'];?>'><?= $location['total_asset'];?></a></td>
                    <td class='text-center'><img src='<?= QR_LINK;?>?code=<?= $location['user_location_code'];?>&size=60' /></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>