@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | History
@endsection
@section('content')
<div class="container">
    <h6 style="margin-bottom: 20px;margin-top: 10px;font-size:smaller;font-weight:bold;">ACK DIOCESE OF MASENO NORTH > Departments > Education</h6>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="3000">
        <img src="{{ asset('photos/education.png') }}" class="rounded float-start img-thumbnail" style="margin-right: 30px;" width="30%" alt="">
        <p>The mother’s union is a world-wide Christian organization of the Anglican communion which consents to accept the office under the patronage of the Archbishops, Bishops and the priests, joined in prayer and in fellowship.

            Diocese of Maseno North Mothers Union has its members and several committees which are led by its own women office bearers i.e., chairperson, secretary, treasurer, and treasurer and their assistants at the diocesan level we have the diocesan council. This is in turn divided into general committee, executive committee and development committee. each committee has a different chairperson. Members are free to form any other committee if they wish according to the need in the fellowship.
           
           Mrs. Mary Elizabeth Sumner was born in 1828, and got married to Rev. George Sumner an Anglican clergy in 1848.she founded the mother’s union in 1876 at old Arresford in Hampshire County, England.
           
           Mary’s main work was to pray and run meetings in the parish for all mothers. She encouraged them to desire more for their families and have their children get religious education. she brought all mothers in one organization dedicated to upholding Christian family life family life.
           
            
           </p>
            <div style="text-align: center;margin-top:20px;">
                <span style="font-weight: bold;">Ven. Antony Olwenyi Diocesan secretary education department</span>
            </div>
        </div>
        
        <div class="col-md-2">
            @include('layouts.quick_links')
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection