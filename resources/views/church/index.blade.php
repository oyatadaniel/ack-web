@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | Home
@endsection
@section('content')
<!-- Carousel wrapper -->
<div
  id="carouselDarkVariant"
  class="carousel slide carousel-fade carousel-dark"
  data-mdb-ride="carousel"
>


  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img
        src="{{ asset('photos/c.jpg') }}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block" data-aos="fade-right" data-aos-duration="3000">
        <h4>First slide label</h4>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
        <img
        src="{{ asset('photos/c2.jpg') }}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block" data-aos="fade-right" data-aos-duration="3000">
        <h4>Second slide label</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
        <img
        src="{{ asset('photos/c3.jpg') }}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block" data-aos="fade-right" data-aos-duration="3000">
        <h4>Third slide label</h4>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
    <div class="carousel-item">
        <img
        src="{{ asset('photos/c4.jpg') }}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block" data-aos="fade-right" data-aos-duration="3000">
        <h4>Third slide label</h4>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselDarkVariant"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselDarkVariant"
    data-mdb-slide="next"
  >
    <span style="color: #fff;" class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row" id="e">
            <div class="col-md-3">
                <div class="card card-body" id="mid-bar" data-aos="fade-up" data-aos-duration="3000">
                    <h6>WORKSHOPS</h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </div>
            </div>
            <div class="col-md-3">
              <div class="card card-body" id="mid-bar" data-aos="fade-down" data-aos-duration="3000" >
                  <h6>WEBSITE</h6>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </div>
          </div>
          <div class="col-md-3">
              <div class="card card-body" id="mid-bar" data-aos="fade-up" data-aos-duration="3000">
                  <h6>NEW BISHOP</h6>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </div>
          </div>
          <div class="col-md-3">
              <div class="card card-body" id="mid-bar" data-aos="fade-down" data-aos-duration="3000">
                  <h6>UP COMIMG EVENTS</h6>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </div>
          </div>
        </div>
        <div class="bishop" data-aos="fade-up" data-aos-duration="3000">
            <H5 style="font-weight: bold;margin-bottom: 20px;">WELCOME TO THE ANGLICAN CHURCH DIOCESE OF MASENO NORTH!</H5>
          <h5>2021-2024 THEME: A PROSPEROUS GOD FEARING DIOCESE (PROVERDS 9:10)</h5>
          <div class="row">
              <div class="col-md-10" >
                  <img src="{{ asset('photos/b.jpg') }}" class="rounded float-start img-thumbnail" style="margin-right: 30px;" width="40%" alt="">
                 <p style="color: #222;"> It is with great joy that I welcome you to this official website of the Diocese of Maseno North, Anglican Church of Kenya’s (ACK).
      
                    Since its inception in 1970, the Diocese of Maseno North has continued to experience many divine blessings and witnessed tremendous growth, numerically, spiritually, and physically which we wish to capture through the contents of this website.
                    
                    In the pages of this website, you will find the vision and mission statements and core values that define the foundations of our Diocese of Maseno North. Further, you will learn more about our history, organizational structures, departments, list of Archdeaconries, key partners, and news highlights which will give you a picture of the mission mandate and activities that Christ has entrusted upon us.
                    
                    As you review these various profiles of information, join in praying, and as God will lead you, partnering with us in the various mission activities we are involved in and have committed to engage as reflected in our Diocesan Strategic Plan, 2020-2024.
                    
                    Feel free to contact us for more information on any aspects of our ministries. May God bless you.</p><br>
                  <div style="text-align: center;margin-top:0px;">
                      <span style="font-weight: bold;">The Rt. Rev. Charles Kascan Asilutwa<br>
                          BISHOP, DIOCESE OF MASENO NORTH</span>
                  </div>
              </div>
              
              <div class="col-md-2" >
                  @include('layouts.quick_links')
              </div>
           
              <div>
                <div class="row" style="margin-top: 50px;">
                  <div class="col-md-4">
                    <div class="item">
                      <a href="#0" aria-labelledby="person1"></a>
                      <img id="img"  src="{{ asset('photos/viss.jpg') }}" alt=''>
                      <div class="item__overlay">
                        <h3 id="person1" aria-hidden="true">Our Vission</h3>
                        <div class="item__body">
                          <p>A strong, vibrant, self-sustaining diocese proclaiming Christ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="item">
                      <a href="#0" aria-labelledby="person1"></a>
                      <img id="img" src="{{ asset('photos/miss.jpg') }}" alt=''>
                      <div class="item__overlay">
                        <h3 id="person1" aria-hidden="true">Our Mission Statement</h3>
                        <div class="item__body">
                          <p>To build a spiritually-sound, stable and self-reliant Diocese, empowered by the Word of God to love Him and engage the world faithfully, pointing it to Jesus Christ.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="item">
                      <a href="#0" aria-labelledby="person1"></a>
                      <img id="img"  src="{{ asset('photos/thim.jpg') }}" alt=''>
                      <div class="item__overlay">
                        <h3 id="person1" aria-hidden="true">Our Theme</h3>
                        <div class="item__body">
                          <p>A Prosperous God-Fearing Diocese (Proverbs 9:10)</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="events">
                 <div class="row" data-aos="fade-up" data-aos-duration="3000">
                  <H5 style="font-weight: bold;margin-bottom: 20px;margin-top: 50px;">UP COMING EVENTS</H5>

                  @foreach($data as $dataum)
                  <div class="col-md-6" style="padding: 0rem 1.5rem 0rem 1.5rem;margin-bottom: 10px;">
                    <div class="card cad-body">
                      <div class="row">
                        <div class="col-4" style="text-align: center;background-color: #39004d;color: #fff !important;">
                          <h1 style="margin-bottom: 0px;top: 50%;">{{ date('d', strtotime($dataum->day)) }}</h1>
                          <?php $month = date('m', strtotime($dataum->day))  ?>
                          @if($month == 1)
                          <span>January</span><br>
                          @elseif($month == 2)
                          <span>February</span><br>
                          @elseif($month == 3)
                          <span>Match</span><br>
                          @elseif($month == 4)
                          <span>April</span><br>
                          @elseif($month == 5)
                          <span>May</span><br>
                          @elseif($month == 6)
                          <span>June</span><br>
                          @elseif($month == 7)
                          <span>July</span><br>
                          @elseif($month == 8)
                          <span>August</span><br>
                          @elseif($month == 9)
                          <span>September</span><br>
                          @elseif($month == 10)
                          <span>October</span><br>
                          @elseif($month == 11)
                          <span>November</span><br>
                          @elseif($month == 12)
                          <span>December</span><br>
                          @else
                          <span>Null</span><br>
                          @endif
                          <span>{{ date('Y', strtotime($dataum->day)) }}</span>
                        </div>
                        <div class="col-8" style="padding: 1rem;" >
                          <div class="time text-muted"><i class="far fa-clock"></i> {{ $dataum->time }} <span style="float: right;"><i class="fas fa-map-marker-alt"></i> {{ $dataum->location }}</span></div><hr>
                          <h4 style="text-align: center;">{{ $dataum->name }}</h4>
                        </div>
                      </div>
                    </div>  
                  </div>
                  @endforeach
              </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script>
  $(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

</script>
@include('layouts.footer')
@endsection