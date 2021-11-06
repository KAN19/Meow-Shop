<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- {{-- Bootstrap Jquery Ajax --}} -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="/css/client/master.css">
    <title>
        @yield('title')
    </title>

    @yield('jquery')

    {{-- custom style --}}
    @yield('style')

</head>

<body>
    @include('client.header')

    @yield('content')

    @include('client.footer')
</body>

<script>
$(document).ready(function() {
    $('#burger-top').click(() => {
        $(".modal-overlay").show();
        $(".sidenav").show();
        $(".sidenav").addClass('sidenav-active');
        $(".sidenav").attr("tabindex", -1).focus();
    })

    $('#sidenav__burger').click(() => {
        $(".modal-overlay").hide();
        $(".sidenav").removeClass('sidenav-active');

        // $(".sidenav").hide();
    })

    $('.sidenav').blur(() => {
        $(".modal-overlay").hide();
        // $(".sidenav").hide();
        $(".sidenav").removeClass('sidenav-active');

    })
});
</script>


@yield('javascript')

</html>