<form action="/games/add">
    <input type="submit" value="Add game" class="btn btn-primary">
</form>

<a href="/games/add">Add game</a>

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