<div class="container mt-5">
    <h2>Edit User</h2>
    <form action="/user/update/<?= $user['id']?>" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>"> <!-- Add this -->

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="name" value="<?= $user['name'] ?>" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" >
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="password">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" id="role" name="role" value="<?= $user['role'] ?>" >
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
