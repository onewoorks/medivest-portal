<div class='row'>
    <div class='col-sm-12'>
        <div class='card'>
            <div class='card-body'>
                <table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Staff Id</th>
                            <th>Location</th>
                            <th>Task Completion</th>
                            <th>Upload Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($maintenance_activity_nj)):?>
                        <?php foreach ($maintenance_activity_nj as $key => $activity): ?>
                            <tr>
                                <td><?= $activity['staff_id'];?></td>
                                <td>
                                    <div class='locdata' style='white-space: pre; font-size:0.8em'><?= $activity['location']; ?></div>
                                </td>
                                <td>
                                    <div class='jsondata' data='jsonview-<?= $key;?>' style='white-space: pre; font-size:0.8em'>
                                        <?= $activity['json_data']; ?>
                                    </div>
                                </td>
                                
                                <td><?= $activity['timestamp'];?></td>
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
<script>
    var locData = $('.locdata');
    $(locData).each(function(k,v){
        var data = JSON.parse($(v).text())
        $(this).text(JSON.stringify(data,null,4))
    })
  var jsonDiv = $('.jsondata')
  $(jsonDiv).each(function(v,k){
      var data = JSON.parse($(k).text())
      $(this).text(JSON.stringify(data,null,4))
  });
</script>