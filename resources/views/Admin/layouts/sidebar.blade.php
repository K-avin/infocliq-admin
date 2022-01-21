<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('view.dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('view.tasks')}}">
          <i class="icon-book menu-icon"></i>
          <span class="menu-title">My Tasks</span>
        </a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Project</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('view.projects')}}">All Projects</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('add.project')}}">Add Project</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('add.task')}}">
          <i class="icon-book menu-icon"></i>
          <span class="menu-title">Add Tasks</span>
        </a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="{{route('view.profile-setting')}}">
          <i class="icon-cog menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </li>
    </ul>
  </nav>