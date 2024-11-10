<tr>
<td>
        <img 
            class="img-thumbnail img-circle img-sm" 
            src="/images/<?= file_exists(BASE_DIR . '/public/images/profile-pictures/' . $user->profile_picture) ? 'profile-pictures/' . $user->profile_picture : 'placeholder.jpeg'; ?>" 
            alt="<?= htmlspecialchars($user->username); ?>"
        >
    </td>
    <td><?= $user-> username;?></td>
    <td><?= $user-> email;?></td>
    <td><?= $user-> bio;?></td>
    <td>
        <a href=<?= "/users/edit/" . $user->id; ?>>edit</a>
        <a href=<?= "/users/delete/" . $user->id?>>delete</a>
    </td>
</tr>