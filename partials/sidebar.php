<?php 
$authors =  array('Tasnia', 'Tanim', 'Nizam'); 
$categories = ['Technology', 'Web', 'Business', 'City'];
?>
          <div class="card my-4">
            <div class="card-header">
              <h2>Authors</h2>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <?php foreach ($authors as $author): ?>
                  <li class="list-group-item"> <a href="/author?name=<?= strtolower($author); ?>"><?= $author; ?></a> </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="card my-4">
            <div class="card-header">
              <h2>Categories</h2>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <?php foreach($categories as $category): ?>
                  <li class="list-group-item"><a href="/category?name=<?= strtolower($category); ?>"><?= $category; ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

        