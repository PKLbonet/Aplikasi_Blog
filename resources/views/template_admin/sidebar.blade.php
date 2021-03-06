<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#"> Admin </a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class=active>
          <a class="nav-link" href=" {{ route('home') }} "><i class="fas fa-tachometer-alt"></i> 
            <span>Dashboard</span>
          </a> 
        </li> 
        <li class="menu-header">Starter</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book  "></i> <span>Post</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('post.index') }} ">List Post</a></li>
            <li><a class="nav-link" href=" {{ route('post.post_hapus') }} ">Recycle Post</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-archive"></i> <span>Kategori</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('category.index') }} ">List Kategori</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i> <span>Tags</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('tag.index') }} ">List Tags</a></li>
          </ul>
        </li> 
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('user.index') }} ">List Users</a></li>
          </ul>
        </li> 
    </aside>
  </div>
