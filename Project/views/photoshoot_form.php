<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($viewModel->id) ? 'Edit Photoshoot Schedule' : 'Add Photoshoot Schedule'; ?></h2>
<form action="index.php?entity=photoshoot&action=<?php echo isset($viewModel->id) ? 'update&id=' . $viewModel->id : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Client:</label>
        <select name="client_id" class="border p-2 w-full" required>
            <option value="">-- Select Client --</option>
            <?php foreach ($clients as $client): ?>
            <option value="<?php echo $client['id']; ?>" <?php echo (isset($viewModel->client_id) && $viewModel->client_id == $client['id']) ? 'selected' : ''; ?>>
                <?php echo $client['name']; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Photographer:</label>
        <select name="photographer_id" class="border p-2 w-full" required>
            <option value="">-- Select Photographer --</option>
            <?php foreach ($photographers as $photographer): ?>
            <option value="<?php echo $photographer['id']; ?>" <?php echo (isset($viewModel->photographer_id) && $viewModel->photographer_id == $photographer['id']) ? 'selected' : ''; ?>>
                <?php echo $photographer['name']; ?> (<?php echo $photographer['specialty']; ?>)
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Date:</label>
        <input type="date" name="date" value="<?php echo $viewModel->date ?? ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Location:</label>
        <input type="text" name="location" value="<?php echo $viewModel->location ?? ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Status:</label>
        <select name="status" class="border p-2 w-full" required>
            <option value="booked" <?php echo (isset($viewModel->status) && $viewModel->status == 'booked') ? 'selected' : ''; ?>>Booked</option>
            <option value="completed" <?php echo (isset($viewModel->status) && $viewModel->status == 'completed') ? 'selected' : ''; ?>>Completed</option>
            <option value="cancelled" <?php echo (isset($viewModel->status) && $viewModel->status == 'cancelled') ? 'selected' : ''; ?>>Cancelled</option>
        </select>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>
