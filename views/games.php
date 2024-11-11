
<form action="/games/add">
    <input  type="submit" value="Add game" class="btn btn-primary add-btn">
</form>

<form method="GET">
    <div>
        <div class="search">
            <input value="<?= $search ?>" name="search" placeholder="Search on title">
            <button class="btn btn-primary add-btn" type="submit">Search</button>
        </div>
    </div>
</form>


<table>
    <tr>
        <th></th>
        <th>title</th>
        <th>release date</th>
        <th>price</th>
        <th>developer</th>
        <th>summary</th>
        <th>rating</th>
        <th>publisher</th>
    </tr>
    
    <?php foreach($games as $game){
            include 'games/game.php';
        }
    ?>
</table>