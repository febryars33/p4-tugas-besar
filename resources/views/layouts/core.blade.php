<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/w3-css/4.1.0/w3.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script>
        console.log(this)
        $(document).ready(function () {
            $('#registration').submit(function(event) {
                event.preventDefault();
                
                var formData = {
                    name: $('input[name=name]').val(),
                    email: $('input[name=email]').val(),
                }
                
                axios.post('/api/pendaftaran', formData)
                    .then(response => {
                        console.log(response.data)
                        toastr.success(response.data.results.message);
                    })
                    .catch(error => {
                        switch(error.response.status) {
                            case 422:
                                toastr.warning(error.response.data.message);
                            break;
                            case 500:
                                toastr.error(error.response.statusText);
                            break;
                            case 404:
                                toastr.error(error.response.statusText);
                            case 429:
                                toastr.error(error.response.statusText);
                            break;
                        }
                    })
            })
        })
    </script>
</body>

</html>