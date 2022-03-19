@include("header")
<body>
    <div class="information_line">
        <p>T-shorts, Tops and Hoodies!</p>
    </div>
    @include("navigation")
    <div class="header header_part_two">
        <div class="slider_container">
            <i class="fas fa-angle-left"></i>
            <div class="img">
                <img src="{{asset("res/banner1.png")}}" alt="" class="header_img show_product_img">
            </div>
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="network_line">
            <a href="https://www.tiktok.com/@drive_life_car"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-discord discord"></i></a>
            <a href="https://www.instagram.com/drive_life_car/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    @include("product_sea")
    @include("content")
    @include("footer")
</body>
<script src="{{asset("js/home.js")}}"></script>
</html>
