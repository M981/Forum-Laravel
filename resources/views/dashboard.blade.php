<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Lang" content="nl">
    <meta name="author" content="J.J. Strootman">
    <meta http-equiv="Reply-to" content="noreply@forum.ao-alfa.nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creation-date" content="16/01/2018">
    <meta name="revisit-after" content="60 days">
    <meta name="google" content="nostranslate">
    <meta name="robots" content="noodp, noarchive">

    <title>AO Forum</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/android-chrome-192x192.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="img/smalltile.png">
    <meta name="msapplication-square150x150logo" content="img/mediumtile.png">
    <meta name="msapplication-wide310x150logo" content="img/widetile.png">
    <meta name="msapplication-square310x310logo" content="img/largetile.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="js/ckeditor/plugins/prism/lib/prism/prism_patched.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/forum.css">
</head>
<body>
<!-- BEGIN MENU -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper white">
            <div class="container">
                <a href="{{ route('home.index') }}" class="brand-logo">
                    <img alt="" title="" src="{{ asset('img/weblogo.png') }}" class="responsive-img">
                    <span class="forum-title">Forum</span>
                </a>
                <ul id="theme-menu" class="dropdown-content">
                    <li><a href="profile.html">Profiel</a></li>
                    <li><a href="{{ route('admin.dashboard') }}">Beheer</a></li>
                    <li><a href="{{ route('logout') }}">Afmelden</a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('register') }}">Registreren</a></li>
                    <li><a href="{{ route('login') }}">Aanmelden</a></li>
                    <li>
                        <a href="/" data-activates="theme-menu" class="dropdown-button">
                            <img src="http://www.gravatar.com/avatar/fc7d81525f7040b7e34b073f0218084d?s=20" alt="" class="square"> Username &dtrif;
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- END MENU -->

<!-- BEGIN PAGE CONTAINER -->
<div class="container main-content">
    <div class="row first-row">
        <!-- Dashboard content here -->
        <div class="card">
            <div class="card-content">
                <span class="card-title">Dashboard</span>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTAINER -->

<!-- BEGIN FOOTER -->
<footer class="page-footer white">
    <!-- Your footer content here -->
</footer>
<!-- END FOOTER -->

<!-- Your JavaScript imports here -->
<script type="text/javascript" src="{{ asset('js/ckeditor/plugins/prism/lib/prism/prism_patched.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/forum.js') }}"></script>
</body>
</html>
