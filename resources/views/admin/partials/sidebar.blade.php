<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{route('admin.posts.index')}}">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Menu</li>
      <li class="dropdown {{ request()->is('admin/posts*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-copy"></i> <span>Notícias</span></a>
          <ul class="dropdown-menu" style="display: none;">
              <li><a class="nav-link" href="{{ route('admin.posts.index') }}">Todas as notícias</a></li>
              <li><a class="nav-link" href="{{ route('admin.posts.create') }}">Criar nova notícia</a></li>
          </ul>
      </li>
      <li class="{{ request()->is('admin/categories*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="fas fa-list-alt"></i> <span>Categorias</span></a></li>
      <li class="menu-header">Mais opções</li>
      <li class="{{ request()->is('admin/users*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> <span>Usuários</span></a></li>
  </ul>
</aside>
