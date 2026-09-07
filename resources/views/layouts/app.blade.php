<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Evolusi PL')</title>
    <style>
        :root { --bg: #f4f5f7; --card: #ffffff; --ink: #1f2933; --muted: #616e7c; --accent: #2563eb; }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--bg); color: var(--ink);
               font-family: system-ui, -apple-system, "Segoe UI", sans-serif; line-height: 1.6; }
        header { background: var(--card); border-bottom: 1px solid #e4e7eb; }
        nav { max-width: 720px; margin: 0 auto; padding: 16px 24px; display: flex; gap: 20px; align-items: center; }
        nav .brand { font-weight: 700; margin-right: auto; }
        nav a { color: var(--muted); text-decoration: none; }
        nav a:hover { color: var(--accent); }
        main { max-width: 720px; margin: 0 auto; padding: 32px 24px; }
        .card { background: var(--card); border: 1px solid #e4e7eb; border-radius: 10px; padding: 24px; }
        h1 { margin-top: 0; font-size: 1.6rem; }
        footer { max-width: 720px; margin: 0 auto; padding: 16px 24px 40px; color: var(--muted); font-size: .85rem; }
    </style>
</head>
<body>
    <header>
        <nav>
            <span class="brand">Evolusi PL</span>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('about') }}">Tentang</a>
        </nav>
    </header>
    <main>@yield('content')</main>
    <footer>Konstruksi dan Evolusi Perangkat Lunak &middot; {{ date('Y') }}</footer>
</body>
</html>
