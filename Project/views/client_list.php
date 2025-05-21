<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Client List</h2>
<a href="index.php?entity=client&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Client</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Name</th>
        <th class="border p-2">Contact</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($clientList as $client): ?>
    <tr>
        <td class="border p-2"><?php echo htmlspecialchars($client['name']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($client['contact']); ?></td>
        <td class="border p-2">
            <a href="index.php?entity=client&action=edit&id=<?php echo $client['id']; ?>" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
            <a href="index.php?entity=client&action=delete&id=<?php echo $client['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>
