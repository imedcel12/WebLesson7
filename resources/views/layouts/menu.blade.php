<li class="nav-item">
    <a href="{{ route('songs.index') }}"
       class="nav-link {{ Request::is('songs*') ? 'active' : '' }}">
        <p>Songs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


