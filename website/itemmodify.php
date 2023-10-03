<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modify Item - Signature Cuisine</title>
  <link rel="stylesheet" href="stylees.css"> <!-- Assuming you have a separate CSS file -->
</head>
<body>
  <div class="background-image">
    <div class="center-container">
      <h1 class="restaurant-name">Signature Cuisine</h1>
      <div class="modify-item-form-container">
        <h2>Modify Food Item</h2>
        <form id="modify-food-item-form">
          <div class="form-group">
            <label for="food-select">Select Food:</label>
            <select class="form-control" id="food-select" name="food-select">
              <option value="koththu">Koththu</option>
              <option value="roti">Roti</option>
              <option value="rice">Rice</option>
              <option value="rice_and_curry">Rice and Curry</option>
              <option value="fried_rice">Fried Rice</option>
            </select>
          </div>
          <div class="form-group">
            <label for="food-name">Food Name:</label>
            <input type="text" class="form-control" id="food-name" name="food-name" required>
          </div>
          <div class="form-group">
            <label for="food-price">Food Price:</label>
            <input type="number" step="0.01" class="form-control" id="food-price" name="food-price" required>
          </div>
          <button type="submit" class="btn btn-primary">Modify Item</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
