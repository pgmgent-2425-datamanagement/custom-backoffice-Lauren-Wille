<table>
    <tr>
        <th></th>
        <th>name</th>
        <th>about</th>
    </tr>
    
    <?php foreach($publishers as $publisher){
            include 'publishers/publisher.php';
        }
    ?>
</table>