<li class="nav-item">
    <a class="nav-link {{ Route::currentRouteName() === $route ? 'active' : '' }}"
       href="{{ route($route) }}">
        {{ $title }}
    </a>
</li>
