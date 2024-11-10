<form method="POST" enctype="multipart/form-data">
    <div class="mb-3 flex-sm-column d-lg-flex">
        <label for="image" class="form-label">Image</label>
        <img class="img-me" src="/images/publishers/<?= $publisher->image?>" alt="<?= $publisher->name?>">
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $publisher->name; ?>">
    </div>

    <div class="mb-3">
        <label for="about" class="form-label">About</label>
        <input type="text" class="form-control" id="about" name="about" value="<?= $publisher->about; ?>">
    </div>

    <input type="submit" value="Save" class="btn btn-primary">
</form>