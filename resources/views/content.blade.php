<div class="text card_container">
    <div class="text_container">
        <h2>Rate our site</h2>
        <div class="star_veb">
            @for($i = 1; $i < 6; $i++)
                <i class="fas fa-star star star_number_{{$i}}"></i>
            @endfor
        </div>
{{--        <div class="card_arrow_slider">--}}
{{--            <i class="fas fa-chevron-left" onclick="slide_left()"></i>--}}
{{--            <span>1</span>--}}
{{--            <i class="fas fa-chevron-right" onclick="slide_right()"></i>--}}
{{--        </div>--}}
        <div class="comment">
            <input type="text" placeholder="Rate here">
        </div>
        <button onmouseover="show_number()">send!</button>
    </div>
    <div class="text_container text_container_two">
        <img src="{{asset("res/cat.jpeg")}}" alt="">
        <label for="comment">
            <input type="text" id="comment">
            <button>send</button>
        </label>
    </div>
    <div class="cardList_rapper" id="element">
        <div class="cardList">
            <div class="number">
                <span class="number_page number_1" onclick="list_cards_left()">1</span>
                <span class="number_page number_2" onclick="list_cards_right()">2</span>
            </div>
            <div class="product_kind_choice">
                <div class="choice_container">
                    <div class="basic_choice basic_left basic_right" onclick="slider_right_side()">
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/shert.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off card_toggle" onclick="toggle_on()" onmouseover="toggle_hover(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/sweater.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off card_toggle" onclick="toggle_on()" onmouseover="toggle_hover(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/pants.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off card_toggle" onclick="toggle_on()" onmouseover="toggle_hover(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/sock.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off card_toggle" onclick="toggle_on()" onmouseover="toggle_hover(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/shorts.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off card_toggle" onclick="toggle_on()" onmouseover="toggle_hover(this)"></i>
                        </div>
                    </div>
                    <div class="wear_container">
                        <div class="wear_choice">
                            <div class="img">
                                <img src="{{asset("res/merchs/merch(1).png")}}" alt="" class="show_product_img">
                            </div>
                            <div class="img">
                                <img src="{{asset("res/merchs/merch(2).png")}}" alt="" class="show_product_img">
                            </div>
                            <div class="img">
                                <img src="{{asset("res/merchs/merch(3).png")}}" alt="" class="show_product_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
