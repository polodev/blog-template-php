<?php require 'dashboard_partials/header.php'; ?>
    <div class="container">
      <h2>All Posts</h2>
      <table class="table table-bordered table-responsive">
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Category</th>
          <th>Actions</th>
        </tr>
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <tr>
            <td><?= ($i + 1); ?></td>
            <td><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, nostrum. This is the title <?= ($i + 1); ?></a></td>
            <td><a href="#">Polo Dev</a></td>
            <td><a href="#">Web Technology</a></td>
            <td>
              <a href="#" class="btn btn-info">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endfor; ?>
      </table>
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
<?php require 'dashboard_partials/footer.php'; ?>