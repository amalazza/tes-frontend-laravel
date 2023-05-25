<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Tes Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

    </style>
</head>

<body>

    @include('layouts/navbar')

    @include('layouts/hero')

    @include('layouts/footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <script>
        // JavaScript
        var bukaUndanganButton = document.getElementById('buka-undangan-button');
        var bodyElement = document.getElementsByTagName('body')[0];

        // bukaUndanganButton.addEventListener('click', function() {
        //     bodyElement.classList.add('animate__animated animate__fadeInUp');
        // });

        // jQuery
        $(document).ready(function() {
            $('#buka-undangan-button').on('click', function() {
                $('#animated').addClass('animate__animated animate__fadeOutUp');
            });
        });
    </script>

    <!-- Include Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>