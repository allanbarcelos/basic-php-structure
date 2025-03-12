<h2>List of Users</h2>
<a href="/user/create">Create New User</a>

<table>
    <th>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    </th>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= htmlspecialchars($user->email) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>