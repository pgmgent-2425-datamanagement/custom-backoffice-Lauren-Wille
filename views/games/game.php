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
        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this game?');" style="display:inline;">
            <input type="hidden" name="id" value="<?= htmlspecialchars($game->game_id); ?>">
            <input type="submit" value="delete">
        </form>
    </td>
</tr>