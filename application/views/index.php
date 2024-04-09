<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $Number = 1;
            foreach($ListData['api'] as $rows) { 
        ?>
        <tr>
            <td><?= $Number++ ?></td>
            <td><?= $rows['Name'] ?></td>
            <td>
                <a href="<?= base_url('Path?id='). $rows['ID'] ?>">View</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>