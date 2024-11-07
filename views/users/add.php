<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <input type="checkbox" onclick="show()">Show Password
    </div>

    <div class="mb-3">
        <label for="bio" class="form-label">Biography</label>
        <input type="text" class="form-control" id="bio" name="bio">
    </div>

    <input type="submit" value="Add user" class="btn btn-primary">
</form>

<script>
    function show() {
        let field = document.getElementById("password");
        if (field.type === "password") {
            field.type = "text";
        } else {
            field.type = "password";
        }
    }
</script>