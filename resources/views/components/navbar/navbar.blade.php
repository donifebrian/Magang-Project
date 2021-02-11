<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        @include('components.navbar.search-form')
        
        <ul class="navbar-nav">

            @include('components.navbar.language-dropdown')
            @include('components.navbar.apps-dropdown')
            @include('components.navbar.message-dropdown')
            @include('components.navbar.notification-dropdown')
            @include('components.navbar.profile-dropdown')
        </ul>
    </div>
</nav>
