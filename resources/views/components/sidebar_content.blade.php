{{-- ------------------------------------------ Home Page Content ---------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Home
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Home Page</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Home Components:</h6>
            <a class="collapse-item" href="{{ route('background.create') }}">Create Content</a>
            <a class="collapse-item" href="{{ route('background.index') }}">View All Content</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

{{-- ------------------------------------------ Home Page Content ---------------------------------------------- --}}

{{-- ------------------------------------------ About Page Content ---------------------------------------------- --}}


<!-- Heading -->
<div class="sidebar-heading">
    About
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout"
       aria-expanded="true" aria-controls="collapseAbout">
        <i class="fas fa-fw fa-cog"></i>
        <span>About Page</span>
    </a>
    <div id="collapseAbout" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">About Components:</h6>
            <a class="collapse-item" href="{{ route('about.create') }}">Create Content</a>
            <a class="collapse-item" href="{{ route('about.index') }}">View All Content</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

{{-- ------------------------------------------ About Page Content ---------------------------------------------- --}}

{{-- ------------------------------------------ Tutorial Page Content ---------------------------------------------- --}}


<!-- Heading -->
<div class="sidebar-heading">
    Tutorial link
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTutorial"
       aria-expanded="true" aria-controls="collapseTutorial">
        <i class="fas fa-fw fa-cog"></i>
        <span>Tutorial link</span>
    </a>
    <div id="collapseTutorial" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Home Components:</h6>
            <a class="collapse-item" href="{{ route('tutorial.create') }}">Create Content</a>
            <a class="collapse-item" href="{{ route('tutorial.index') }}">View All Content</a>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

{{-- ------------------------------------------ Tutorial Page Content ---------------------------------------------- --}}
