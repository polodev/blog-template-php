<?php require 'dashboard_partials/header.php'; ?>
<?php
Class Category {
  public $name;
  public $id;
  public function __construct($name, $id){
    $this->name = $name;
    $this->id = $id;
  }
}

$categories = [
  new Category('Web technology', 1),
  new Category('City', 2),
  new Category('PHP', 3),
  new Category('ASP', 4),
  new Category('Mysql', 5)
];

  ?>
<div class="container">
  <div class="bg-info text-light px-4 py-5">
    <h1>Create Post</h1>
  </div>
  <form class="from p-4" method="post" action="#">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter post title">
      <small id="titleHelp" class="form-text text-muted">Give a title of your post</small>
    </div>
    <div class="form-group">
      <label for="category">Select a category</label>
      <select name="category" id="category" class="form-control">
        <?php foreach ($categories as $category) : ?>
          <option value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="excerpt">Excerpt</label>
      <textarea name="excerpt" id="excerpt" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" id="content" class="form-control" rows="6"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>


</div>
<?php require 'dashboard_partials/footer.php'; ?>