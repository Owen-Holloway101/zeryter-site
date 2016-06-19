<?php
//Owen Holloway 2016
//@Zeryter
?>
<!--Navigation-->
<nav class="grey darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">@Zeryter</a>
        <!--NAV Bar START-->
        <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/calendar">Calendar</a></li>
            <li><a href="/links">Links</a></li>
        </ul>
        <!--NAV Bar END-->
        <!--Mobile NAV START-->
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/calendar">Calendar</a></li>
            <li><a href="/links">Links</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
    <!--Mobile NAV END-->
</nav>
<script type="text/javascript">
//Enable mobile pull out menu
(function($){
    $(function(){
    $('.button-collapse').sideNav();
    });
})(jQuery);
</script>