<form action="/publishers/add">
    <input type="submit" value="Add publisher" class="btn btn-primary">
</form>

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