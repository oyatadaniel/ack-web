@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | Achideconaries
@endsection
@section('content')
<div class="container">
    <h6 style="margin-bottom: 20px;margin-top: 10px;font-size:smaller;font-weight:bold;">ACK DIOCESE OF MASENO NORTH > ARCHDECONARIES > Kiminini Archdeconary</h6>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="3000">
            <div class="row">
                <h5 style="margin-top: 5px;margin-bottom:5px;">Kiminini Archdeconary</h5>
                <ul style="list-style: none;">
                    <li>Example</li>
                </ul>
                <h5 style="margin-top: 5px;margin-bottom: 5px;">Shikulu Archdeconary</h5>
                <ul style="list-style: none;">
                    <li>Example</li>
                </ul>
                <h5 style="margin-top: 5px;margin-bottom: 5px;">Nzoia Archdeconary</h5>
                <ul style="list-style: none;">
                    <li>Example</li>
                </ul>
                <h5 style="margin-top: 5px;margin-bottom: 5px;">Maliki Archdeconary</h5>
                <ul style="list-style: none;">
                    <li>Example</li>
                </ul>
                <h5 style="margin-top: 5px;margin-bottom: 5px;">St Marks Nzoia Archdeconary</h5>
                <ul style="list-style: none;">
                    <li>Example</li>
                </ul>
               
            </div>
        </div>
        
        <div class="col-md-2">
            @include('layouts.quick_links')
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection