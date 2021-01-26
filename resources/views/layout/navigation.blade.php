<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ request()->is('/')? 'active' :''}}">
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item {{ request()->is('documentation')? 'active' :''}}">
          <a class="nav-link" href="/documentation">Documentation</a>
        </li>
        <li class="nav-item {{ request()->is('about')? 'active' :''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{ request()->is('/')? 'active' :''}}">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>