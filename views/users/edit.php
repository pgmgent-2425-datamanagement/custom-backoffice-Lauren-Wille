<form method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $user->email; ?>">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?= $user->password; ?>">
        <input type="checkbox" onclick="show()">Show Password
    </div>

    <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <input type="text" class="form-control" id="bio" name="bio" value="<?= $user->bio; ?>">
    </div>

    <input type="submit" value="Save" class="btn btn-primary">
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