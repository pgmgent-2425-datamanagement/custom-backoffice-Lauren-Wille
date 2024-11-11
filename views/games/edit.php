<form method="POST" enctype="multipart/form-data">
    <div class="mb-3 flex-sm-column d-lg-flex">
        <label for="image" class="form-label">Image</label>
        <img class="img-me" src="/images/<?= $game->image?>" alt="<?= $game->title?>">
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $game->title; ?>">
    </div>

    <div class="mb-3">
        <label for="release_date" class="form-label">Release date</label>
        <input type="date" class="form-control" id="release_date" name="release_date" value="<?= $game->release_date; ?>">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="<?= $game->price; ?>">
    </div>

    <div class="mb-3">
        <label for="developer" class="form-label">Developer</label>
        <input type="text" class="form-control" id="developer" name="developer" value="<?= $game->developer; ?>">
    </div>

    <div class="mb-3">
        <label for="summary" class="form-label">Summary</label>
        <input type="text" class="form-control" id="summary" name="summary" value="<?= $game->summary; ?>">
    </div>

     <div class="mb-3">
        <label for="publisher" class="form-label">Publisher</label>
        <select name="publisher_id" id="publisher_id">
            <option value="">-- Select Publisher --</option>
            <?php foreach ($publishers as $publisher) :
                $is_selected = '';
                if ($publisher->id == $game->publisher_id)
                {
                    $is_selected = 'selected';
                }
                ?>
                <option value="<?= $publisher->id ?>" <?= $is_selected?>><?= $publisher->name?></option>
                
                <?php endforeach; ?>
            
        </select>
    </div>

    <input type="submit" value="Save" class="btn btn-primary add-btn">
</form>