<div class="text card_container">
    <div class="text_container">
        <div class="number">
            @for($i = 1; $i < 3; $i++)
                <span class="number_page number_{{$i}}">{{$i}}</span>
            @endfor
        </div>
        <i class="fas fa-toggle-off toggle_on_text"></i>
        <h2>Choose your product</h2>
        <div class="star_veb">
            @for($i = 1; $i < 6; $i++)
                <i class="fas fa-star star star_number_{{$i}}"></i>
            @endfor
            <p class="rate">rate our site</p>
        </div>
        <div class="advice">
            <p class="conditions">buy 3 and get one as a gift!</p>
            <p>Make your merch!</p>
        </div>
        <button onmouseover="show_number()">next</button>
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
            <div class="product_kind_choice">
                <div class="choice_container">
                    <div class="basic_choice">
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/shert.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off" onclick="toggle_on(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/sweater.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off" onclick="toggle_on(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/pants.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off" onclick="toggle_on(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/sock.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off" onclick="toggle_on(this)"></i>
                        </div>
                        <div class="card_choice">
                            <div class="img">
                                <img src="{{asset("res/shorts.png")}}" alt="" class="choice_kind">
                            </div>
                            <p>Good wear!</p>
                            <i class="fas fa-toggle-off" onclick="toggle_on(this)"></i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
