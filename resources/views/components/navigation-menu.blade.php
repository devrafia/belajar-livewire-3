<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                <x-nav-link :active="request()->routeIs('home')" href="/">Home</x-nav-link>
                {{-- <x-nav-link :active="request()->routeIs('about')" href="/about">About</x-nav-link>
                <x-nav-link :active="request()->routeIs('contact')" href="/contact">Contact</x-nav-link> --}}
                <x-nav-link :active="request()->routeIs('posts')" href="/posts">Posts</x-nav-link>
            </ul>
            <ul class="mb-2 navbar-nav mb-lg-0 ms-auto">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                @else
                    <x-nav-link href="/login">Login</x-nav-link>
                @endauth
            </ul>
        </div>
    </div>
</nav>
