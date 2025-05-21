<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Photographer List</h2>
<a href="index.php?entity=photographer&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Photographer</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Name</th>
        <th class="border p-2">Specialty</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($photographerList as $photographer): ?>
    <tr>
        <td class="border p-2"><?php echo htmlspecialchars($photographer['name']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($photographer['specialty']); ?></td>
        <td class="border p-2">
            <a href="index.php?entity=photographer&action=edit&id=<?php echo $photographer['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=photographer&action=delete&id=<?php echo $photographer['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>
