<nav class="pull-right">
    <ul class="nav nav-pills">
        <li><a href="/games">Games</a></li>
        @if (Auth::guest())
            <li><a href="/signup">Sign up</a></li>
            <li><a href="/login">Login</a></li>
        @else
            <li>{{ link_to_profile('View Profile') }}</li>
            <li><a href="/logout">Logout</a></li>
        @endif
    </ul>
</nav>