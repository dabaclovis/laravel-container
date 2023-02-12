<!doctype html>
<html lang="en">

<head>
    <title>my application for docker container</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    @livewireStyles
</head>

<body class="" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size:20px;">

        @include('partials.navbar')
        <div class="container py-3">
            @yield('content')
        </div>
        @include('partials.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @livewireScripts
    <script>
        $(document).ready(function () {
            $("#date").datepicker({
                numberOfMonths: 3,
            });
            $("#accord").accordion({
                collapsible: true,
                heightStyle: 'content',
                active: 0
            });
        });
    </script>
</body>

</html>
