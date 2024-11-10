<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>
 
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="about" class="form-label">About</label>
        <input type="text" class="form-control" id="about" name="about">
    </div>

    <input type="submit" value="Add game" class="btn btn-primary">
</form>