<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Menu</li>

      <li class="{{ request()->is('admin') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.index') }}"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a></li>

      <li class="dropdown {{ request()->is('posts') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-copy"></i> <span>Postagens</span></a>
          <ul class="dropdown-menu" style="display: none;">
              <li><a class="active" href="{{ route('admin.posts.index') }}">Todas as Postagens</a></li>
              <li><a class="nav-link" href="{{ route('admin.posts.create') }}">Criar Nova Postagens</a></li>
          </ul>
      </li>
      <li class="{{ request()->is('cases') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.cases.index') }}"><i class="fas fa-user-check"></i> <span>Cases e Denúncias</span></a></li>
      <li class="menu-header">Mais Opções</li>
    <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Usuários</span></a></li>


  </ul>
</aside>
