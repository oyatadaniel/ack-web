@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | History
@endsection
@section('content')
<div class="container">
    <h6 style="margin-bottom: 20px;margin-top: 10px;font-size:smaller;font-weight:bold;">ACK DIOCESE OF MASENO NORTH > Departments > Mothers Union</h6>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="3000">
        <img src="{{ asset('photos/image.png') }}" class="rounded float-start img-thumbnail" style="margin-right: 30px;" width="30%" alt="">
        <p>The mother’s union is a world-wide Christian organization of the Anglican communion which consents to accept the office under the patronage of the Archbishops, Bishops and the priests, joined in prayer and in fellowship.

            Diocese of Maseno North Mothers Union has its members and several committees which are led by its own women office bearers i.e., chairperson, secretary, treasurer, and treasurer and their assistants at the diocesan level we have the diocesan council. This is in turn divided into general committee, executive committee and development committee. each committee has a different chairperson. Members are free to form any other committee if they wish according to the need in the fellowship.
           
           Mrs. Mary Elizabeth Sumner was born in 1828, and got married to Rev. George Sumner an Anglican clergy in 1848.she founded the mother’s union in 1876 at old Arresford in Hampshire County, England.
           
           Mary’s main work was to pray and run meetings in the parish for all mothers. She encouraged them to desire more for their families and have their children get religious education. she brought all mothers in one organization dedicated to upholding Christian family life family life.
           
            
           </p>
            <div style="text-align: center;margin-top:20px;">
                <span style="font-weight: bold;">Mrs. Ann Brenda Kascan Asilutwa <br>
                    Mothers' Union President</span>
            </div>
           
        </div>
        
        <div class="col-md-2">
            @include('layouts.quick_links')
        </div>
    </div>
    <div class="row">
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="3000">
            <div>
                <h5 style="margin-bottom: 10px;font-weight: bold;margin-top: 40px;">Mothers Union in Kenya</h5>
                <p>The mothers’ union started in Kenya in the year 1908 with women fellowships amongst the wives of settlers, government officials and church leaders. These women were enrolled as members in 1918.

                In 1956, the first African women were enrolled after being trained on the objectives and the purpose of mothers’ union in all our dioceses the bishops wife is the president of mothers’ union and automatically the Archbishops wife becomes the provincial president of mothers’ union.</p>
                <h5 style="margin-bottom: 10px;font-weight: bold;">Mothers Union in MasenoNorth</h5>
                <p>The mothers’ union started in the Diocese of Maseno North in the year 1972 and the same year the members were trained and enrolled, a trend which is ongoing.

                    The presidents of mother’s union since then are</p>
    
                <ul style="font-weight: bold;list-style: none;line-height: 200%;">
                    <li> MRS. ESHERI OLANG                  1970-  FOR EIGHT MONTHS.</li>
                    <li>MRS. PHANICE MUNDIA  1970 -1992</li>
                    <li>MRS.MARGARET NYANDIKO MUTINGOLE OKETCH     1993-2018</li>
                    <li> MRS. ANN BRENDA KASCAN ASILUTWA          2018- PRESENT</li>
                </ul>
    
                <h6 style="margin-bottom: 10px;font-weight: bold;">AIM</h6>
               <p>The advancement of the Christian religion in the sphere of marriage and family life.</p>
               <h6 style="margin-bottom: 10px;font-weight: bold;">VISION</h6>
               <p>A stable family grounded in Christ</p>
               <h6 style="margin-bottom: 10px;font-weight: bold;">MISSION</h6>
               <p>To promote programs that contribute to the wellbeing of families.</p>
                <h6 style="margin-bottom: 10px;font-weight: bold;">PURPOSE</h6>
                <p>To strengthen and preserve marriage and Christian family life</p>

                <h5 style="margin-bottom: 10px;font-weight: bold;margin-top: 40px;">Objectives of Mothers Union/Functions</h5>
                <ul>
                    <li>To uphold Christ teachings on the nature of marriage and to promote its wider understanding.</li>
                    <li>To encourage parents to bring up their children in faith of the church.</li>
                    <li>To maintain a worldwide fellowship of Christians united in prayer worship and service.</li>
                    <li> To promote conditions in society to stable family life and the protection of children</li>
                    <li>To help those whose families have met with adversity.</li>
                </ul>
                <h5 style="margin-bottom: 10px;font-weight: bold;margin-top: 40px;">Future Plans ofMothers Union</h5>
                <ul>
                    <li>Development of activities of mother’s union that gear towards improving family life</li>
                    <li>Development of spiritual programs towards improving family life.</li>
                </ul>
                
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection