<h2>Create User</h2>
<form action="/user/create" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" require>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" require>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" require>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>

<a href="/user">Back to Userr List</a>