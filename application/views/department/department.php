<?php $data['header'];?>

<div class='row'>
    <div class='col-sm-12'>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Department Code</th>
                    <th>Department Name</th>
                    <th class='text-center'>Total Location</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($departments as $key=>$department):?>
                <tr>
                    <td><?= ($key+1);?></td>
                    <td><?= $department['user_department_code'];?></td>
                    <td><?= $department['user_department_name'];?></td>
                    <td class='text-center'><a href='./department/location?dept_id=<?= $department['user_department_code'];?>'><?= $department['total_location'];?></a></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>