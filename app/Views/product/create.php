<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
    <link rel="stylesheet" href="<?php echo base_url('css/addproduct.css'); ?>">
</head>
<body>
  <div class="card">
    <h1>Add a New Product</h1>
    <form action="<?php echo base_url('product/store'); ?>" method="POST">
      <?= csrf_field() ?>

      <label for="Title">Title:</label>
      <input type="text" name="Title" id="Title" required>

      <label for="content">Content:</label>
      <textarea name="content" id="content" required></textarea>

      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>

      <label for="rate">Rate:</label>
      <input type="number" step="0.01" name="rate" id="rate" required>

      <button type="submit">Add Product</button>
    </form>
  </div>
</body>
</html>
