<tr>
    <td><img class="img-thumbnail img-circle  img-sm" src="/images/publishers/<?= $publisher->image;?>" alt="<?= $publisher->name;?>"></td>
    <td><?= $publisher->name;?></td>
    <td><?= $publisher->about;?></td>
    <td>
        <a href=<?= "/publishers/edit/" . $publisher->id?>>edit</a>
        <a href=<?= "/publishers/delete/" . $publisher->id?>>delete</a>
    </td>
</tr>