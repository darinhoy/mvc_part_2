
<div>
    <h1>Users List</h1>
    <a href="/user/create" class="btn btn-primary">Create User</a>
<!-- </div> -->
    <table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $index=> $user)  : ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['role']; ?></td>
            <!-- delete and edite -->
                <td>
                      <a href="/user/delete/<?= $user['id'] ?>"><i class="material-icons text-danger">delete</i></a>
                      <a href="/user/edit/<?= $user['id'] ?>"><i class="material-icons">edit</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

