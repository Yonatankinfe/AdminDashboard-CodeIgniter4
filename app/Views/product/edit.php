<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/update.css'); ?>">
    
</head>
<body>

    <div class="container">
        <h2 class="text-center mb-4">Update Product</h2>

        <form action="<?= base_url('product/update/'. urlencode($product['id'])); ?>" method="POST">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="Title" class="form-label">Title:</label>
                <input type="text" class="form-control" name="Title" id="Title" value="<?= esc($product['Title']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" name="content" id="content" rows="4" required><?= esc($product['content']); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= esc($product['name']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="rate" class="form-label">Rate:</label>
                <input type="number" step="0.01" class="form-control" name="rate" id="rate" value="<?= esc($product['rate']); ?>" required>
            </div>

            <div class="text-center">
                <button type="submit">Update Product</button>
            </div>
        </form>
    </div>

</body>
</html>
