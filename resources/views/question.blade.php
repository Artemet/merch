@include("header")
@include("navigation")
<div class="page_container other_css question_css" onmouseover="open_question_print()" onmouseleave="clouse_question_print()">
    <p><span>?</span>Ask a question to Artemka</p>
    <span class="arrow">↴</span>
    <div class="page_container sub">
        <label for="question_input">
            <input type="text" id="question_input" placeholder="Print">
            <button>send</button>
        </label>
    </div>
</div>
<div class="page_container other_css question_css">
    <a href=""><p>Look at answers of Artemka</p></a>
    <span class="arrow">↴</span>
</div>
@include("footer")
<script src="{{asset("js/pages.js")}}"></script>
