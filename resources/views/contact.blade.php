@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/banner.css">
<div class="banner">
    <div class="banner-judul">
        <h1>Contact</h1>
        <h3> <a href="/"> Home/</a><span><a href="/kontak">contact</a></span></h3>
    </div>
</div>
<div class="contents">
    <div class="content-kontak">
        <h3>Contact Us</h3>
        <h2>Keep in touch</h2>


        @if(Session::has('message_sent'))
        <div class="alert">
            <script>
                alert("{{ Session::get('message_sent') }}")
            </script>
        </div>
        @endif
        <form action="{{ route('contact.send') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="kontak">
            <input type="text" name="name" placeholder="Your name">

            <input type="text"  name="email" placeholder="Email">
            </div>
            <div class="kontak">
                <input type="text" name="subject" placeholder="Subject">
    
                <input type="text" name="phone" placeholder="Phone">
                
            </div>
            <div class="textarea">
            <textarea name="msg" cols="30" rows="10"  placeholder="Message" ></textarea>
            <input type="submit" value="Send">
            </div> 
        </form>

    </div>
    <div class="address">
        <h3>Address</h3>
        <p>If you have any further questions, please don’t hesitate to contact me.
            <div class="address-content">
                <ul>
                    <li><i class="fa-solid fa-house-chimney"></i>  Jl. Raya Wangun Kelurahan Sindangsari <br> Bogor Timur 16720</li>
                    <li class="jarak"><i class="fa-solid fa-phone"></i> 085694031604</li>
                    <li class="jarak"><i class="fa-solid fa-envelope"></i> wikramaindonesia@gmail.com</li>
                    <li class="jarak"><i class="fa-solid fa-earth-asia"></i> www.smkwikrama.com</li>
                </ul>
            </div>

        </p>
    </div>
</div>
<div class="map">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="2000" height="193" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Raya%20Wangun%20Kelurahan%20Sindangsari%20Bogor%20Timur%2016720&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right:center;:193px;width:100%;}</style><a href="https://www.embedgooglemap.net">add google map to html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:193px;width:100%;}</style></div></div>
</div>
@endsection