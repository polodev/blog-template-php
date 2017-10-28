<?php $page = 'home'; ?>
<?php require 'partials/header.php'; ?>
    <div class="container">

      <div class="jumbotron">
        <h1 class="display-3">Welcome to my Khata blog</h1>
        <p class="lead">This is simple oop blog. built with Love <i class="fa fa-heart"></i> </p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="lead">
          <a class="btn btn-info btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div> <!--end jumbotron -->

      <div class="my-4"></div>
      <div class="row">
        <div class="col-md-8">
          <?php 
            for ($i = 0; $i < 10; $i++) {
              require 'partials/article.php';
            }
           ?>
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

        <div class="col-md-4">
          <?php require 'partials/sidebar.php'; ?>
        </div>
        
      </div>
    </div>
<?php require 'partials/footer.php'; ?>