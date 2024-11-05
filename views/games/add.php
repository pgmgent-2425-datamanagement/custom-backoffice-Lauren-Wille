<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
        <label for="release_date" class="form-label">Release date</label>
        <input type="date" class="form-control" id="release_date" name="release_date">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>

    <div class="mb-3">
        <label for="developer" class="form-label">Developer</label>
        <input type="text" class="form-control" id="developer" name="developer">
    </div>

    <div class="mb-3">
        <label for="summary" class="form-label">Summary</label>
        <input type="text" class="form-control" id="summary" name="summary">
    </div>

    <div class="mb-3">
        <label for="average_rating" class="form-label">Average rating</label>
        <input type="text" class="form-control" id="average_rating" name="average_rating" value="4">
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


    <input type="submit" value="Add game" class="btn btn-primary">
</form>