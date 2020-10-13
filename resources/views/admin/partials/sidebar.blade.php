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
      <li class="{{ request()->is('posts') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.posts.index') }}"><i class="fas fa-copy"></i> <span>Postagens</span></a></li>
      <li class="{{ request()->is('categories') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="fas fa-list-alt"></i> <span>Categorias</span></a></li>
      <li class="{{ request()->is('tags') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tags.index') }}"><i class="fas fa-tags"></i> <span>Tags</span></a></li>
      <li class="{{ request()->is('comments') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.comments.index') }}"><i class="fas fa-comments"></i> <span>Comentários</span></a></li>
      <li class="{{ request()->is('cases') ? 'active' : '' }}"><a class="nav-link" href="#"><i class="fas fa-comments"></i> <span>Cases e Denúncias</span></a></li>
      <li class="{{ request()->is('cases') ? 'active' : '' }}"><a class="nav-link" href="#"><i class="fas fa-comments"></i> <span>Gerenciador de arquivos</span></a></li>
      <li class="menu-header">Mais Opções</li>
    <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Usuários</span></a></li>
  </ul>
</aside>
