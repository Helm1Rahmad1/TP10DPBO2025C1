<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Photoshoot Schedule List</h2>
<a href="index.php?entity=photoshoot&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Photoshoot Schedule</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">ID</th>
        <th class="border p-2">Client Name</th>
        <th class="border p-2">Photographer Name</th>
        <th class="border p-2">Date</th>
        <th class="border p-2">Location</th>
        <th class="border p-2">Status</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($photoshootList as $photoshoot): ?>
    <tr>
        <td class="border p-2"><?php echo htmlspecialchars($photoshoot['id']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($photoshoot['client_name']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($photoshoot['photographer_name']); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars(date('d/m/Y', strtotime($photoshoot['date']))); ?></td>
        <td class="border p-2"><?php echo htmlspecialchars($photoshoot['location']); ?></td>
        <td class="border p-2">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                <?php 
                switch($photoshoot['status']) {
                    case 'booked':
                        echo 'bg-yellow-100 text-yellow-800';
                        break;
                    case 'completed':
                        echo 'bg-green-100 text-green-800';
                        break;
                    case 'cancelled':
                        echo 'bg-red-100 text-red-800';
                        break;
                    default:
                        echo 'bg-gray-100 text-gray-800';
                }
                ?>">
                <?php echo ucfirst($photoshoot['status']); ?>
            </span>
        </td>
        <td class="border p-2">
            <a href="index.php?entity=photoshoot&action=edit&id=<?php echo $photoshoot['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=photoshoot&action=delete&id=<?php echo $photoshoot['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure you want to delete this photoshoot schedule?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>
