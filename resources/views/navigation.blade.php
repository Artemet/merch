<div class="header">
    <div class="navigation">
        <div class="navigation_part navigation_part_one">
            <a href="#"><h1>drive_life_car</h1></a>
            <i class="fas fa-stream"></i>
            <label for="navigation_search">
                <i class="fas fa-search search"></i>
                <input type="text" id="navigation_search" placeholder="Search">
            </label>
        </div>
        <div class="navigation_part navigation_part_two">
            <div class="link_list">
                <div class="link_list_part">
                    <a href="">HOME</a>
                </div>
                <div class="link_list_part">
                    <a href="">MEN</a>
                    <div class="part_sub">
                        <p>Sherts</p>
                    </div>
                </div>
                <div class="link_list_part">
                    <a href="">WOMEN</a>
                    <div class="part_sub"></div>
                </div>
                <div class="link_list_part">
                    <a href="">KIDS</a>
                    <div class="part_sub"></div>
                </div>
            </div>
            <div class="basket">
                <i class="fas fa-shopping-bag" onclick="no_entry()"></i>
                <div class="hr"></div>
                <span>0</span>
            </div>
        </div>
    </div>
    <div class="slider_container">
        <i class="fas fa-arrow-left left_arrow" onclick="slider_click(0)"></i>
        <div class="img">
            <img src="{{asset("res/banner1.png")}}" alt="" class="header_img">
        </div>
        <i class="fas fa-arrow-right right_arrow" onclick="slider_click(1)"></i>
    </div>
    <div class="network_line">
        <a href="https://www.tiktok.com/@drive_life_car"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-discord discord"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</div>
