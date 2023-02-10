<div class="jumbotron jumbotron-fluid pt-0 text-white mb-0">
    <div class="container text-center">
      <nav class="navbar navbar-expand-lg navbar-dark mb-5 bg-transparent">
          <a class="navbar-brand" href="#">Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @yield('navlink')  
            </ul>
          </div>
        </nav>
        @yield('hero')
  </div>
</div>

