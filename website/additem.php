<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Item - Signature Cuisine</title>
  <link rel="stylesheet" href="stylees.css"> <!-- Assuming you have a separate CSS file -->
</head>
<body>
  <div class="background-image">
    <div class="center-container">
      <h1 class="restaurant-name">Signature Cuisine</h1>
      <div class="add-item-form-container">
        <h2>Add New Food Item</h2>
        <form id="add-food-item-form">
          <div class="form-group">
            <label for="food-name">Food Name:</label>
            <input type="text" class="form-control" id="food-name" name="food-name" required>
          </div>
          <div class="form-group">
            <label for="food-price">Food Price:</label>
            <input type="number" step="0.01" class="form-control" id="food-price" name="food-price" required>
          </div>
          <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
