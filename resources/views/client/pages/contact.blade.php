@extends('client.master')

@section('content')

<!-- banner-2 -->
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.html">Trang chủ</a>
                    <i>|</i>
                </li>
                <li>Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- contact page -->
<div class="contact-w3l">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Liên hệ
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        
        <!-- contact -->
        <div class="contact agileits">
            <div class="contact-agileinfo">                
                <div class="contact-right wthree">
                    <div class="col-xs-7 contact-text w3-agileits">
                        <h4>Thông tin liên lạc :</h4>
                        <p>
                            <i class="fa fa-map-marker"></i> Số 1, Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, HN</p>
                        <p>
                            <i class="fa fa-phone"></i> SĐT : 333 222 3333</p>
                        <p>
                            <i class="fa fa-fax"></i> FAX : +1 888 888 4444</p>
                        <p>
                            <i class="fa fa-envelope-o"></i> Email :
                            <a href="mailto:example@mail.com">mail@example.com</a>
                        </p>
                    </div>
                    <div class="col-xs-5 contact-agile">
                        <img src="images/contact2.jpg" alt="">
                    </div>                    
                    <div class="clearfix"> </div>
                </div>
                <!-- map -->
                <div class="map w3layouts">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.639319006183!2d105.84069301429739!3d21.007090393894956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8ac0a8def5%3A0xa76484d5add02445!2zMSDEkOG6oWkgQ-G7kyBWaeG7h3QsIELDoWNoIEtob2EsIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1609735017328!5m2!1svi!2s"
                            allowfullscreen></iframe>
                    </div>
                    <!-- //map -->
                <div class="contact-form wthree">
                    <form action="#" method="post">
                        <div class="">
                            <input type="text" name="name" placeholder="Tên" required="">
                        </div>
                        <div class="">
                            <input class="text" type="text" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="">
                            <input class="email" type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="">
                            <textarea placeholder="Message" name="message" required=""></textarea>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <!-- //contact -->
    </div>
</div>


@endsection