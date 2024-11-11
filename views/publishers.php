<form action="/publishers/add">
    <input type="submit" value="Add publisher" class="btn btn-primary add-btn">
</form>

<table>
    <tr>
        <th></th>
        <th>name</th>
        <th style="
    width: 22rem;
">about</th>
    </tr>
    
    <?php foreach($publishers as $publisher){
            include 'publishers/publisher.php';
        }
    ?>
</table>