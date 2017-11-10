    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">NoteBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $page === 'home' ? active : ''; ?>">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= $page === 'about' ? 'active' : ''; ?>" >
              <a class="nav-link" href="/about.php">About</a>
            </li>
            <li class="nav-item <?= $page === 'contact' ? 'active' : ''; ?>">
              <a class="nav-link" href="/contact.php">Contact</a>
            </li>
          </ul>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="signin.php">Login</a>
              <a class="dropdown-item" href="signup.php">Register</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/dashboard">Dashboard</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
