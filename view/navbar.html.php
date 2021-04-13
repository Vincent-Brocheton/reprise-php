<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?= $page==='welcome'? 'active' : ""?>">
        <a class="nav-link" href="?page=welcome">Home</a>
      </li>
      <li class="nav-item <?= $page==='films'? 'active' : ""?>">
        <a class="nav-link" href="?page=films">Liste des films</a>
      </li>
      <li class="nav-item <?= $page==='add'? 'active' : ""?>">
        <a class="nav-link" href="?page=add">Ajouter un film</a>
      </li>
    </ul>
  </div>
</nav>