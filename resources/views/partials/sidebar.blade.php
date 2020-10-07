<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Admnistração</li>
    <li class="{{ request()->is('admin') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fas fa-table"></i> <span>Tables</span></a></li>
    <li class="menu-header">Outras Opções</li>
    <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Users</span></a></li>
  </ul>
</aside>
