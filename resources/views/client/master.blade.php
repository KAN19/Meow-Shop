<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/client/master.css">

    {{-- Bootstrap Jquery Ajax --}}
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
    <script src="{{url('adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <title>
        @yield('title')
    </title>

    @yield('jquery')

    {{-- custom style --}}
    @yield('style')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    @include('client.header')

    <div class="main-content">
        @yield('content')
    </div>

    @include('client.footer')
</body>

<script>
$(document).ready(function() {
    $('#burger-top').click(() => {
        // $(".modal-overlay").show();
        $('#burger-top').css('display', 'none');
        $('#close-top').css('display', 'inline-block');
        $(".panel").slideToggle();
    })

    $('#close-top').click(() => {
        $('#burger-top').css('display', 'inline-block');
        $('#close-top').css('display', 'none');
        $(".panel").slideToggle();
    })

    //Search icon navbar
    $('#topnav__search__icon').click(() => {
        SearchActive();
    })
    $('#topnav__search__input').blur(() => {
        SearchInactive();
    })
    // end search

    // Shopping cart dropdown
    $('#topnav__item__cart').click(() => {
        $('.cart__dropdown').slideToggle();
    })

    //Sticky navbar
    const navbarOffset = $('.navbar__topnav').offset();
    window.onscroll = function() {
        StickNavBar(navbarOffset.top)
    };

    // console.log(offset.top);
});


function SearchActive() {
    $('#topnav__search__input').show();
    $('#topnav__search__input').animate({
        width: '200px',
        paddingTop: '4px',
        paddingBottom: '4px',
        paddingLeft: '10px',
        paddingRight: '10px',
    })
    $('#topnav__search__input').focus();
    $('#topnav__search__icon').css('corlor')
}

function SearchInactive() {
    $('#topnav__search__input').animate({
        width: '0px',
        padding: '0px',
        display: 'none',

        // margin: '0px',
    })
}

function StickNavBar(navbarOffset) {
    if (window.pageYOffset >= 80) {
        $('.navbar__topnav').addClass('navbar__topnav-sticky ');
        $(".panel").addClass('panel-stickey');

    } else {
        $('.navbar__topnav').removeClass('navbar__topnav-sticky ');
        $(".panel").removeClass('panel-stickey');

    }
}
</script>


@yield('javascript')

</html>