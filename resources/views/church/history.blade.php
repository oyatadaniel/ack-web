@extends('layouts.main')
@section('title')
ACK Diocese of Maseno North | History
@endsection
@section('content')
<div class="container">
    <h6 style="margin-bottom: 20px;margin-top: 10px;font-size:smaller;font-weight:bold;"">ABOUT US >History</h6>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-10" data-aos="fade-up" data-aos-duration="3000">
            <div class="row">
                <h5 style="margin-top: 10px;margin-bottom: 10px;">Diocese History</h5>
                <p style="font-size: small;line-height: 250%;">The history of the Anglican Church of Kenya dates back to 1844 when the first missionary from the Church Missionary Society (CMS), Dr. Johann Ludwig Krapf arrived in Mombasa. He then moved 30 miles to the west to start a church at Rabai. He was joined, two years later, by Rev. Johann Rebman. In 1884, the Diocese of Eastern Equatorial Africa was created and it included Uganda, Kenya and Tanganyika with James Hannington as the first Bishop. In 1898, the diocese was split into two, with the new diocese of Mombasa governing Kenya and northern Tanzania while the other diocese later became the Church of Uganda); northern Tanzania was separated from the diocese in 1927.

                    Mr. Hugh Osborn Saville, who had started a CMS station at Vihiga in 1904 relocated to Maseno where he established a Mission station on 14th January 1906. His relocation to Maseno would later lead to the growth of Christianity in the region. He was joined by the Rev. J.J Willies on 21st October 1906. Through their efforts, evangelism work started under the Omuseno tree (hence the name Emuseno and Maseno). The church was built at this spot and foundation stone laid in August 1908 and named St. Paul’s Maseno.
                    
                    On 8th May 1909, the first candidates for baptism (catechumens) were admitted and baptized on 30th January 1910 by Rev. Willis. On 3rd January 1912, the Rt. Rev. R. Tucker confirmed fifteen people who had been baptized by Rev. Willis. One of the priests whose work will not be forgotten is Archdeacon Ven. Walter Edward Owen of Kavirondo. He was appalled by the level of poverty and sickness of the people he interacted with and therefore spearheaded the expansion of the dispensary, which had been started in 1908 at the same place, with funds granted by the Red Cross for the Kavirondo members of the army carrier corps. He championed the rights of the African majority through the Kavirondo taxpayer’s welfare Association whose aim was to teach civic education and aiding economic development. He fought for African liberty progress and social welfare. The Maseno School of nursing was started in 1935 with enrollment of assistant enrolled midwives.
                    
                    Thirty five years later this diocese was formed in 1970 by the division of the Diocese of Maseno, and the Rt. Rev. Festo Olang’ became its first Bishop. However later in the year he was elected first African Archbishop of the Anglican Church, and was succeeded in the Diocese by the Rt. Rev. James I. Mundia, who served until 1993. The Rt. Rev. Isaack Namango was the assistant Bishop, serving between 1984 to 1987. He then became the 1st Bishop of the newly created Diocese of Nambale. In 1995, the Rt. Rev. Simon M. Oketch was consecrated as the 3rd Bishop of the Diocese, where he has served till 2018. He was succeeded by the Rt. Rev. Charles Asilutwa.
                    
                    The History of Maseno cannot be complete without mentioning the Bishops who have led this diocese from its inception </p>
            </div>
        </div>
        
        <div class="col-md-2">
            @include('layouts.quick_links')
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection