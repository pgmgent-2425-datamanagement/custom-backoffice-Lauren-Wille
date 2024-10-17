<table>
    <tr>
        <th></th>
        <th>title</th>
        <th>release_date</th>
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