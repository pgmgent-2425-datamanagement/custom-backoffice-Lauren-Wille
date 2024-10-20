<tr>
    <td><img src="/images/<?= $user->profile_picture;?>" alt="<?= $user ->username?>"></td>
    <td><?= $user-> username;?></td>
    <td><?= $user-> email;?></td>
    <td><?= $user-> bio;?></td>
    <td>
        <a href=<?= "/users/edit/" . $user->id; ?>>edit</a>
        <a href=<?= "/users/delete/" . $user->id?>>delete</a>
    </td>
</tr>