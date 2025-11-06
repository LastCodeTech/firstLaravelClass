<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimal Homepage</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 2em;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Minimal Homepage</h1>
    </header>
    <main>
        <p>This is a simple, clean, and minimal homepage built with basic HTML.</p>
        <p>Feel free to customize it to your needs.</p>
        <a href="{{ route('ct') }}">contact us</a>
    </main>
    <footer>
        <p>&copy; 2025 Your Name</p>
    </footer>
</body>
</html>