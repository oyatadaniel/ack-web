@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | History
@endsection
@section('content')
<div class="container">
    <h6 style="margin-bottom: 20px;margin-top: 10px;font-size:smaller;font-weight:bold;"">ABOUT US >Governance System</h6>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="3000">
            <div class="row">
                <h5 style="margin-top: 10px;margin-bottom: 10px;">Governance System</h5>
               <ul style="list-style: none;">
                   <li style="font-weight: bold;">The Diocesan Synod</li>
                   <p>This is the highest governance organ of the diocese. It is made up of all canonically resident clergy in good standing and 2 laity from each parish and the ordinary sessions are held once every two years.</p>
                   <li style="font-weight: bold;">The Standing Committee of the Synod</li>
                   <p>The Synod elects from its delegates members who together with ex-officio members (Archdeacons, Provost and Administrative Secretary), form the Standing Committee of Synod. It offers oversight to the management of the diocese. It also appoints members to various boards and committees of the diocese.</p>
                   <li style="font-weight: bold;">The Parish Church Council</li>
                   <p>The parish is governed by the Parish Church Council (PCC) made up of members from Local Churches of the parish. They assist the Vicar or parish priest in managing the affairs of the parish.</p>
                   <li style="font-weight: bold;">The Local Church Council</li>
                   <p>Every congregation or local church is governed by the Local Church Council which manages its day-to-day services.</p>
                   <p>The diocese also has two other regional levels, the Archdeaconries and Deaneries, which are advisory by nature and assist in unify the diocese in their delivery of convenient pastoral services. The archdeaconry is managed by an Archdeacon and the deanery is led by Rural or Urban Dean.</p>
               </ul>
               <h5>Diocesan Standing Committee -September 2019 to August 2021.</h5>
            </div>
        </div>
        
        <div class="col-md-2">
            @include('layouts.quick_links')
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection