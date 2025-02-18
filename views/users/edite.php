<div class="container mt-5">
    <h2>Create User</h2>
    <form action="/user/update/<?= $user['id'] ?>" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="username" name = "name"  value="<?= $user['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?= $user['email'] ?>" >
        </div>
        <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?= $user['password'] ?>">
  </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" id="role" placeholder="role" name="role" value="<?= $user['role'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </>
</div>