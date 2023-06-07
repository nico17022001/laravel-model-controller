<header class="p-3">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : '' }} " href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'films' ? 'active' : ''}} " href=" {{route('films')}}">Elenco Film</a>
        </li>
    </ul>
</header>
