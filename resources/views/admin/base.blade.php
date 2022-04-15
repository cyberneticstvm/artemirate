<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Artemirate Global</title>
        <meta name="description" content="description" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ public_path().'/images/favicon.png' }}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ public_path().'/css/plugins.css' }}" />
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ public_path().'/css/style.css' }}" />
        <link rel="stylesheet" href="{{ public_path().'/css/responsive.css' }}" />
    </head>

    <body class="template-index diva home7-creative">
        <!-- Page Loader -->
        <div id="pre-loader"><img src="{{ public_path().'/images/loader.gif' }}" alt="Loading..." /></div>
        <!-- End Page Loader -->

        <!-- Page Wrapper -->
        <div class="pageWrapper">

            @yield("content")
            <!-- End Body Content -->
            <!-- Including Javascript -->
            <!-- Plugins JS -->
            <script src="{{ public_path().'/js/plugins.js' }}"></script>
            <!-- Main JS -->
            <script src="{{ public_path().'/js/main.js' }}"></script>

        </div>
        <!-- End Page Wrapper -->
    </body>
</html>

