<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <img src="../img/free-wifi.svg" width="40" height="40" alt="">
    <a class="navbar-brand ml-5" href="#">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
  </nav>

  <div class="container">
    <h2>Hello World</h2>
    <button type="submit" class="btn btn-primary">Sign Up</button>
    <button type="submit" class="btn btn-danger">Danger</button>
    <button type="submit" class="btn btn-success">Success</button>
    <button type="submit" class="btn btn-secondary">Secondary</button>
    <button type="submit" class="btn btn-warning">Warming</button>
    <button type="submit" class="btn btn-info">Info</button>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-4">
        <h3>Colom 1</h3>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae voluptatibus repellendus error amet aliquam a, repellat eos vero facere cumque ratione optio, accusantium porro fugit vel laboriosam sit quas.
      </div>
      <div class="col-4">
        <h3>Coloum 2</h3>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci expedita a, inventore eum natus impedit placeat voluptatem porro qui excepturi dolores dolorem cum optio iste, quidem fugit voluptatibus architecto magnam.
      </div>
      <div class="col-4">
        <h3>Coloum 3</h3>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab eius animi ad perspiciatis est aut laboriosam. Quas, maiores aperiam. Deserunt exercitationem ipsa ad fuga ea enim saepe quis molestiae?
      </div>
    </div>
  </div>

</body>

</html>