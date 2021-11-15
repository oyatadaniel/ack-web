@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | About Us
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10   ">
        <h6 style="margin-bottom: 20px;margin-top: 10px;font-size:smaller;font-weight:bold;">UP COMMING EVENTS</h6>
    <div class="row ">
    @foreach($data as $dataum)
                  <div class="col-md-12" style="padding: 0rem 1.5rem 0rem 1.5rem;margin-bottom: 10px;">
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
@include('layouts.footer')
@endsection