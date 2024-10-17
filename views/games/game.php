<tr>
    <td><img src="/images/<?= $game->image;?>" alt="<?= $game->title;?>"></td>
    <td><?= $game->title;?></td>
    <td><?= $game->release_date;?></td>
    <td><?= $game->price;?></td>
    <td><?= $game->developer;?></td>
    <td><?= $game->summary;?></td>
    <td><?= $game->average_rating;?></td>
    <td><?= $game->name; ?></td>
    <td>
        <a href=<?= "/games/edit/" . $game->game_id?>>edit</a>
        <a href="/games/delete/">delete</a>
    </td>
</tr>