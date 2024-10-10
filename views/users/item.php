<div class="item">
    <div>
        <?=$user->username?>
    </div>
    <div>
        <?=$user->bio?>
    </div>
    <div class="buttons">
        <a href="/user/edit/<?=$user->id?>">Edit</a>
        <a href="">Delete</a>
    </div>
</div>