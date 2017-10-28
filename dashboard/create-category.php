<?php 
$categories = ['Technology', 'Web', 'Business', 'City'];
 ?>
<?php require 'dashboard_partials/header.php'; ?>
<div class="container">
  <div class="bg-info text-light p-4">
    <h3>All Category</h3>
  </div>
  <table class="table table-bordered my-4">
    <tr>
      <th>#</th>
      <th>Name</th>
    </tr>
    <?php for($i = 0; $i < count($categories); $i++) : ?>
      <tr>
        <td><?= $i + 1; ?></td>
        <td><?= $categories[$i]; ?></td>
      </tr>
    <?php endfor; ?>
  </table>

  <div class="bg-success text-light p-4">
    <h3>Add Category</h3>
  </div>
  <div class="p-4">
    <form action="#" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info">Create Category</button>
      </div>
    </form>
  </div>
</div>
<?php require 'dashboard_partials/footer.php'; ?>
