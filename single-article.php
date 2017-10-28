<?php require 'partials/header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <article class="card my-4">
        <div class="card-body">
          <h3 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, sunt.</a></h3>
          <h5>Posted by <a href="#" class="btn btn-link">Polo Dev</a> on <span class="text-muted">Oct 22, 2017</span></h5>
          <p class="cart-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident est, nihil! Accusamus obcaecati, a possimus, sequi quod ab. Qui nihil alias praesentium optio architecto aspernatur placeat laborum nemo beatae pariatur.</p>
          <p class="cart-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident est, nihil! Accusamus obcaecati, a possimus, sequi quod ab. Qui nihil alias praesentium optio architecto aspernatur placeat laborum nemo beatae pariatur.</p>
          <p class="cart-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident est, nihil! Accusamus obcaecati, a possimus, sequi quod ab. Qui nihil alias praesentium optio architecto aspernatur placeat laborum nemo beatae pariatur.</p>
          <p class="cart-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident est, nihil! Accusamus obcaecati, a possimus, sequi quod ab. Qui nihil alias praesentium optio architecto aspernatur placeat laborum nemo beatae pariatur.</p>
        </div>
      </article>

      <div>
        <h2>All comments</h2>
        <hr>
        <?php for ($i = 0; $i < 7; $i++) : ?>
          <div class="card my-4 p-2">
            <h4 class="card-title">Mehedi hasan on <span class="text-muted">Oct 4, 2017</span> </h4>
            <div class="card-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        <?php endfor; ?>
      </div>


    </div>
    <div class="col-md-4">
      <?php require 'partials/sidebar.php' ?>
    </div>
  </div>
</div>
<?php require 'partials/footer.php' ?>