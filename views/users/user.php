<tr>
    <td><img src="/images/<?= $game->image;?>" alt="<?= ""?>"></td>
    <td>
        <a href=<?= "/games/edit/" . "" ?>>edit</a>
        <form method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline;">
            <input type="hidden" name="id" value="<?= htmlspecialchars($game->game_id); ?>">
            <input type="submit" value="delete">
        </form>
    </td>
</tr>