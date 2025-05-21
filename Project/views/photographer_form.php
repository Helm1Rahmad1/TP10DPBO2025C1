<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($viewModel->id) ? 'Edit Photographer' : 'Add Photographer'; ?></h2>
<form action="index.php?entity=photographer&action=<?php echo isset($viewModel->id) ? 'update&id=' . $viewModel->id : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Name:</label>
        <input type="text" name="name" value="<?php echo $viewModel->name ?? ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Specialty:</label>
        <input type="text" name="specialty" value="<?php echo $viewModel->specialty ?? ''; ?>" class="border p-2 w-full" required>
    </div>
    <div class="flex justify-between">
        <a href="index.php?entity=photographer" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancel</a>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </div>
</form>

<?php
require_once 'views/template/footer.php';
?>
