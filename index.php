<?php
include 'connection.php';

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">User List</h1>
        <a href="create.php" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add New User</a>
        <table class="min-w-full bg-white shadow-md rounded my-6">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b"><?php echo $row['id']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $row['name']; ?></td>
                    <td class="py-2 px-4 border-b"><?php echo $row['email']; ?></td>
                    <td class="py-2 px-4 border-b">
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="bg-red-500 text-white px-2 py-1 rounded">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
