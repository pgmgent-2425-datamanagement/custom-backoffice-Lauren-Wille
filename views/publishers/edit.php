<form method="POST">
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