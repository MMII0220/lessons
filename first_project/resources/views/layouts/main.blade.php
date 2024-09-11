<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <div>
        This is Main.Blade.php page
    </div>
    <div>
        <div>
            <nav>
                <ul>
                    <li><a href="#">Main</a></li>
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>
