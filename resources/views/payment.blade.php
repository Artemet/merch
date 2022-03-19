@include("header")
@include("navigation")
<h2 class="page_h2">Payment of merch</h2>
<div class="page_container other_css">
    <p>1. Payment through the site.</p>
    <p>2. Delivery by courier - payment by cash or card</p>
    <p>When paying for an order with a bank card, information processing
        and the payment takes place on the authorization server of the processing
        Bank center. This means that your confidential information
        (card details) are not sent to the online store. Information
        over a secure SSL communication channel is transmitted in encrypted formа
        directly to the authorization server of Promsvyazbank. For transmission
        information uses special security technologies
        Internet payments Verifed by Visa and MasterCard SecureCode.
        All transactions on your card are carried out in full compliance with
        requirements of VISA International and MasterCard Worldwide. Security
        processing of Internet payments through Promsvyazbank is guaranteed
        PCI DSS international security certificate</p>
    <div class="payment_web">
        <div class="payment_web_part">
            <div class="img">
                <img src="{{asset("res/visa.png")}}" alt="">
            </div>
            <p>- Visa</p>
        </div>
        <div class="payment_web_part">
            <div class="img">
                <img src="{{asset("res/master_card.png")}}" alt="">
            </div>
            <p>- Master card</p>
        </div>
        <div class="payment_web_part">
            <div class="img">
                <img src="{{asset("res/life_card.png")}}" alt="">
            </div>
            <p>- Life</p>
        </div>
    </div>
</div>
@include("footer")
