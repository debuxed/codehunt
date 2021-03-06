<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
                <strong><h1>{{ $page->site->title }}</h1></strong><br>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/puzzle">Puzzle</a></li>
                    <li><a href="/technology">Technology</a></li>
                    <li><a href="/submissions">Submissions</a></li>
                    <li><a href="https://go.generalmills.com/codehuntleaderboard" target="_blank">Leaderboard</a></li>
                    <li><a href="/vlabs">Vlabs</a></li>
                    <li><a href="/faq">FAQ</a></li>
                </ul>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
            <small>
                Made with ❤️ by the CodeHunt Team!
            </small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
