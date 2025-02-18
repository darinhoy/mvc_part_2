<div class="container mt-5">
    <h2>Create User</h2>
    <form action="/user/store" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="username" name = "name">
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>
       
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="role" class="form-control" id="role" placeholder="role" name ="role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>