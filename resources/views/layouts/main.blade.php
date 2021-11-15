<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.scss') }}">
    <title>
        @yield('title')
    </title>
</head>
<body style="font-family: 'Inder', sans-serif;;background-color: #f5f5f5;">
    <nav class="navbar navbar-light bg-light " id="navbar">
    <div class="container">
        <a class="navbar-brand" style="color: #fff;"><img src="{{ asset('photos/logo.png') }}" alt="" width="50"> ACK DIOCESE OF<br> MASENO NORTH</a>
        <span class="input-group-text border-0" id="search-addon">
            <i class="fab fa-facebook ico"></i>
            <i class="fab fa-twitter ico"></i>
            <i class="fab fa-instagram ico"></i>
        </span>
        </form>
    </div>

    
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #9900cc;" id="navigation">
      <div class="container">
       
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <span style="color: #fff;margin-left: 30px;">ACK MASENO NORTH DIOCESE</span>
          <i class="fas fa-bars"></i>
         
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
              About Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="{{ route('about.church') }}">About Us</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('history') }}">History Of Diocese</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('governance') }}">Diocese Governence System</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Diocese Boads and Committees</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Strategic Plan</a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
              Archdeaconries
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="{{ route('maseno') }}">Maseno Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('bunyore') }}">Bunyore Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('ekwanda') }}">Ekwanda Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="esiandumba">Esiandumba Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="kakamega">Kakamega Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="eshiamboko">Eshiamboko Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('soy') }}">Soy Archdeaconry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('kiminini') }}">Kiminini Archdeaconry</a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                Departments
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="{{ route('mothers-union') }}">Mothers Union</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('kama') }}">KAMA- Kenya Anglican Men Mission</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('kayo') }}">KAYO- Kenya Anglican Youths Organization</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('children-ministry') }}">Children Ministry</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('education') }}">Education</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('tee') }}">TEE- Theological Education Experise</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('music') }}">Music</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link active" href="#">Projects</a>
            </li>
            <li>
              <a class="nav-link active" href="#">Patners & Donate</a>
            </li>
            <li>
              <a class="nav-link active" href="#">News/Events</a>
            </li>
          </ul>
          <span class="navbar-text" style="color: red;">
            Book Of The Day: John 3:16
          </span>
        </div>
      </div>
    </nav>
    @yield('content')
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
 
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
    <script>
        $(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 100) {
      $('#navigation').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 101) {
      $('#navigation').removeClass('navbar-fixed');
    }
  });
});
    </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>