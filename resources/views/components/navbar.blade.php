<nav class="navbar bg-body-tertiary mb-2">
      <div class="container-fluid">
            <a class="navbar-brand">Watchwise Critiques</a>
            <form class="d-flex" method="POST" action="{{ route('search.series') }}">
                  @csrf
                  <a href="/series/criar" class="btn btn-primary">Adicionar</a>
            </form>
      </div>
</nav>
