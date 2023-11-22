
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #9A6B75; color: #fff;">
  <div class="container">
    <a class="navbar-brand" href="/">Hymarra Beauty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>