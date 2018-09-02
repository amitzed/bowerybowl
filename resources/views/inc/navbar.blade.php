<nav class="navbar navbar-expand-md bg-dark">
  <link rel="icon" href="images/food1.jpg" />
      <a class="navbar-brand" href="/">Bowery <img class="logo" src="{{ asset('images/logo2.jpg') }}"> Bowl</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/reservations">Reservations</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search Ramen Recipes" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">GO</button>
        </form>
      </div>
    </nav>
