<?php if(isset($title) && !empty($title)) : ?>
    <h1><?php echo $title; ?></h1>
<?php endif; ?>

<?php if(isset($list) && count($list)) : ?>
    <table>
        <thead>
            <tr>
            	<th>Name</th>
            	<th>E-mail</th>
            	<th>Registered date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $row) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['registered_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <h3>No results found!</h3>
<?php endif; ?>
