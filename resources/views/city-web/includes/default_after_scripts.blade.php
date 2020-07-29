<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>

    $(document).ready(function() {
        AOS.init();
        // Slide-in Menu Toggle & Animation
        $("#menuIcon").click( function(e){
            e.preventDefault();
            $("#popup").fadeIn(250);
            $('#popup .mainMenu').delay(250).animate({
                'right': '0%',
            }, 500);
            $("#popup .close").click( function(e){
                e.preventDefault();
                $('#popup .mainMenu').animate({
                    'right': '-400px',
                }, 500);
                $("#popup").delay(500).fadeOut(250);
            });
        });
        // Home Page browser carousel
        $('.browser .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        });
        $('.blog.owl-carousel').owlCarousel({
            items: 3,
            loop: true,
            margin: 30,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    loop:true,
                    margin: 5,
                    stagePadding: 50
                },
                649:{
                    items:2,
                    nav:true,
                    loop:false
                },
                1024:{
                    items:3,
                    nav:false,
                    loop:false
                }
            }
        });
        // Tabs
        $('.tabs').tabslet();
        // $('.tabs').on("_after", function() {
        //   // Tabs content type carousel
        //   $('.tabs .owl-carousel').owlCarousel({
        //     items: 1,
        //     loop: true,
        //     margin: 30,
        //     autoplay: false,
        //     autoplayTimeout: 2000,
        //     autoplayHoverPause: true
        //   });
        // });
        // Home Page signup form animation
        $('.arrowDown').click(function(){
            $('html,body').animate({scrollTop: $("#signup").offset().top},500);
        });
        $(window).scroll(function() {
            var wheight = $(window).height() - 100;
            if ( $(window).scrollTop() > wheight ) {
                $('.modalSignup').stop().animate({
                    'right': '-33.333%',
                }, 500 );
            } else {
                $('.modalSignup').stop().animate({
                    'right': '0%',
                }, 500 );
            }
        });
    })
</script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-155058940-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-155058940-1');
</script>

<div style="position:fixed;bottom: -999999999999999999999px;">
    <div class="sg-popup-builder-content" id="sg-popup-content-wrapper-54251" data-id="54251" data-events="[{&quot;param&quot;:&quot;click&quot;,&quot;operator&quot;:&quot;clickActionCustomClass&quot;,&quot;value&quot;:&quot;ctaform&quot;,&quot;hiddenOption&quot;:[]},{&quot;param&quot;:&quot;click&quot;,&quot;operator&quot;:&quot;clickActionCustomClass&quot;,&quot;value&quot;:&quot;menu-item-54062&quot;,&quot;hiddenOption&quot;:[]}]" data-options="YTo0OTp7czo5OiJzZ3BiLXR5cGUiO3M6NDoiaHRtbCI7czoxNToic2dwYi1pcy1wcmV2aWV3IjtzOjE6IjAiO3M6MTQ6InNncGItaXMtYWN0aXZlIjtzOjc6ImNoZWNrZWQiO3M6MzQ6InNncGItYmVoYXZpb3ItYWZ0ZXItc3BlY2lhbC1ldmVudHMiO2E6MTp7aTowO2E6MTp7aTowO2E6MTp7czo1OiJwYXJhbSI7czoxMjoic2VsZWN0X2V2ZW50Ijt9fX1zOjIwOiJzZ3BiLWNvbnRlbnQtcGFkZGluZyI7czoyOiIxMiI7czoxODoic2dwYi1wb3B1cC16LWluZGV4IjtzOjQ6Ijk5OTkiO3M6MTc6InNncGItcG9wdXAtdGhlbWVzIjtzOjEyOiJzZ3BiLXRoZW1lLTYiO3M6MTk6InNncGItZGlzYWJsZS1ib3JkZXIiO3M6Mjoib24iO3M6MjU6InNncGItb3ZlcmxheS1jdXN0b20tY2xhc3MiO3M6MTg6InNncGItcG9wdXAtb3ZlcmxheSI7czoxODoic2dwYi1vdmVybGF5LWNvbG9yIjtzOjA6IiI7czoyMDoic2dwYi1vdmVybGF5LW9wYWNpdHkiO3M6MzoiMC44IjtzOjI1OiJzZ3BiLWNvbnRlbnQtY3VzdG9tLWNsYXNzIjtzOjE2OiJzZy1wb3B1cC1jb250ZW50IjtzOjI2OiJzZ3BiLWJhY2tncm91bmQtaW1hZ2UtbW9kZSI7czo5OiJuby1yZXBlYXQiO3M6MTI6InNncGItZXNjLWtleSI7czoyOiJvbiI7czoyNDoic2dwYi1lbmFibGUtY2xvc2UtYnV0dG9uIjtzOjI6Im9uIjtzOjIzOiJzZ3BiLWNsb3NlLWJ1dHRvbi1kZWxheSI7czoxOiIwIjtzOjI2OiJzZ3BiLWNsb3NlLWJ1dHRvbi1wb3NpdGlvbiI7czo4OiJ0b3BSaWdodCI7czoyNDoic2dwYi1idXR0b24tcG9zaXRpb24tdG9wIjtzOjM6Ii0xOCI7czoyNjoic2dwYi1idXR0b24tcG9zaXRpb24tcmlnaHQiO3M6MzoiLTE4IjtzOjI3OiJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi1ib3R0b20iO3M6MToiMCI7czoyNToic2dwYi1idXR0b24tcG9zaXRpb24tbGVmdCI7czowOiIiO3M6MTc6InNncGItYnV0dG9uLWltYWdlIjtzOjA6IiI7czoyMzoic2dwYi1idXR0b24taW1hZ2Utd2lkdGgiO3M6MjoiMzAiO3M6MjQ6InNncGItYnV0dG9uLWltYWdlLWhlaWdodCI7czoyOiIzMCI7czoxNzoic2dwYi1ib3JkZXItY29sb3IiO3M6NzoiIzAwMDAwMCI7czoxODoic2dwYi1ib3JkZXItcmFkaXVzIjtzOjE6IjAiO3M6MjM6InNncGItYm9yZGVyLXJhZGl1cy10eXBlIjtzOjE6IiUiO3M6MTY6InNncGItYnV0dG9uLXRleHQiO3M6NToiQ2xvc2UiO3M6MTg6InNncGItb3ZlcmxheS1jbGljayI7czoyOiJvbiI7czoyNToic2dwYi1wb3B1cC1kaW1lbnNpb24tbW9kZSI7czoxNDoicmVzcG9uc2l2ZU1vZGUiO3M6MzM6InNncGItcmVzcG9uc2l2ZS1kaW1lbnNpb24tbWVhc3VyZSI7czoyOiI5MCI7czoxMDoic2dwYi13aWR0aCI7czo1OiI2NDBweCI7czoxMToic2dwYi1oZWlnaHQiO3M6NToiNDgwcHgiO3M6MTQ6InNncGItbWF4LXdpZHRoIjtzOjU6IjgwMHB4IjtzOjE1OiJzZ3BiLW1heC1oZWlnaHQiO3M6MDoiIjtzOjE0OiJzZ3BiLW1pbi13aWR0aCI7czozOiIxMjAiO3M6MTU6InNncGItbWluLWhlaWdodCI7czowOiIiO3M6MjY6InNncGItb3Blbi1hbmltYXRpb24tZWZmZWN0IjtzOjk6Ik5vIGVmZmVjdCI7czoyNzoic2dwYi1jbG9zZS1hbmltYXRpb24tZWZmZWN0IjtzOjk6Ik5vIGVmZmVjdCI7czoyOToic2dwYi1lbmFibGUtY29udGVudC1zY3JvbGxpbmciO3M6Mjoib24iO3M6MTY6InNncGItcG9wdXAtb3JkZXIiO3M6MToiMCI7czoxNjoic2dwYi1wb3B1cC1kZWxheSI7czoxOiIwIjtzOjc6InNncGItanMiO3M6MjoiSlMiO3M6ODoic2dwYi1jc3MiO3M6MzoiQ1NTIjtzOjEyOiJzZ3BiLXBvc3QtaWQiO3M6NToiNTQyNTEiO3M6MjU6InNncGItZW5hYmxlLXBvcHVwLW92ZXJsYXkiO3M6Mjoib24iO3M6MjI6InNncGItYnV0dG9uLWltYWdlLWRhdGEiO3M6MDoiIjtzOjI2OiJzZ3BiLWJhY2tncm91bmQtaW1hZ2UtZGF0YSI7czowOiIiO3M6MTQ6InNncGJDb25kaXRpb25zIjtOO30=">
        <div class="sgpb-popup-builder-content-54251 sgpb-popup-builder-content-html"><div class="sgpb-main-html-content-wrapper"><p>
                </p><div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_18"><form method="post" enctype="multipart/form-data" id="gform_18" action="/govtext/">
                        <div class="gform_heading">
                            <span class="gform_description"></span>
                        </div>
                        <div class="gform_body"><ul id="gform_fields_18" class="gform_fields top_label form_sublabel_below description_above"><li id="field_18_10" class="gfield full-width gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_above gfield_visibility_visible"><label class="gfield_label" for="gen">Request a Demo</label>
                                    <p>or <a href="#sign-in" class="blue-font">Sign in to your account</a></p></li><li id="field_18_8" class="gfield gf_left_half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_18_8">Name:<span class="gfield_required"> * <span class="sr-only"> Required</span></span></label><div class="ginput_container ginput_container_text"><input name="input_8" id="input_18_8" type="text" value="" class="medium" placeholder="Your name" aria-required="true" aria-invalid="false"></div></li><li id="field_18_3" class="gfield gf_right_half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_18_3">Organization Name:<span class="gfield_required"> * <span class="sr-only"> Required</span></span></label><div class="ginput_container ginput_container_text"><input name="input_3" id="input_18_3" type="text" value="" class="medium" placeholder="Your Organization Name" aria-required="true" aria-invalid="false"></div></li><li id="field_18_6" class="gfield gf_left_half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_18_6">Phone Number:<span class="gfield_required"> * <span class="sr-only"> Required</span></span></label><div class="ginput_container ginput_container_phone"><input name="input_6" id="input_18_6" type="tel" value="" class="medium" placeholder="Your Phone Number" aria-required="true" aria-invalid="false"></div></li><li id="field_18_2" class="gfield gf_right_half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_18_2">Email Address:<span class="gfield_required"> * <span class="sr-only"> Required</span></span></label><div class="ginput_container ginput_container_email">
                                        <input name="input_2" id="input_18_2" type="email" value="" class="medium" placeholder="Your Email Address" aria-required="true" aria-invalid="false">
                                    </div></li><li id="field_18_11" class="gfield full-width checkboxes field_sublabel_below field_description_above gfield_visibility_visible"><fieldset class="gfieldset"><legend class="gfield_label">What Product are you Interested in?</legend><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_18_11"><li class="gchoice_18_11_1">
                                                    <input name="input_11.1" type="checkbox" value="GovText" id="choice_18_11_1">
                                                    <label for="choice_18_11_1" id="label_18_11_1">GovText</label>
                                                </li><li class="gchoice_18_11_2">
                                                    <input name="input_11.2" type="checkbox" value="CEP" id="choice_18_11_2">
                                                    <label for="choice_18_11_2" id="label_18_11_2">CEP</label>
                                                </li></ul></div></fieldset></li><li id="field_18_9" class="gfield full-width field_sublabel_below field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_18_9">CAPTCHA</label><div id="input_18_9" class="ginput_container ginput_recaptcha" data-sitekey="6LfuaG0UAAAAAPXfk6HBLofsFFFNJT7PQpwrmHQ-" data-theme="light" data-tabindex="0" data-badge=""><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LfuaG0UAAAAAPXfk6HBLofsFFFNJT7PQpwrmHQ-&amp;co=aHR0cHM6Ly9pY29uc3RpdHVlbnQuY29tOjQ0Mw..&amp;hl=en&amp;v=r8WWNwsCvXtk22_oRSVCCZx9&amp;theme=light&amp;size=normal&amp;cb=d0tg12jzq55e" width="304" height="78" role="presentation" name="a-kdemeq41g1we" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div></li>
                            </ul></div>
                        <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_18" class="gform_button button" value="Submit" onclick="if(window[&quot;gf_submitting_18&quot;]){return false;}  if( !jQuery(&quot;#gform_18&quot;)[0].checkValidity || jQuery(&quot;#gform_18&quot;)[0].checkValidity()){window[&quot;gf_submitting_18&quot;]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_18&quot;]){return false;} if( !jQuery(&quot;#gform_18&quot;)[0].checkValidity || jQuery(&quot;#gform_18&quot;)[0].checkValidity()){window[&quot;gf_submitting_18&quot;]=true;}  jQuery(&quot;#gform_18&quot;).trigger(&quot;submit&quot;,[true]); }">
                            <input type="hidden" class="gform_hidden" name="is_submit_18" value="1">
                            <input type="hidden" class="gform_hidden" name="gform_submit" value="18">

                            <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                            <input type="hidden" class="gform_hidden" name="state_18" value="WyJbXSIsIjVmN2U0ZjkzZDQyMzE3NDlhMGE1YjgyNTc1MWY4Mjc0Il0=">
                            <input type="hidden" class="gform_hidden" name="gform_target_page_number_18" id="gform_target_page_number_18" value="0">
                            <input type="hidden" class="gform_hidden" name="gform_source_page_number_18" id="gform_source_page_number_18" value="1">
                            <input type="hidden" name="gform_field_values" value="">

                        </div>
                    </form>
                </div><script type="text/javascript"> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 18) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }jQuery('#input_18_6').mask('(999) 999-9999').bind('keypress', function(e){if(e.which == 13){jQuery(this).blur();} } );} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [18, 1]) } ); </script><p></p>
                <style></style></div></div>
    </div>
</div>

<link rel="stylesheet" id="owl_carousel_css-css" href="https://iconstituent.com/wp-content/plugins/slide-anything/owl-carousel/owl.carousel.css?ver=2.2.1.1" type="text/css" media="all">
<link rel="stylesheet" id="owl_theme_css-css" href="https://iconstituent.com/wp-content/plugins/slide-anything/owl-carousel/sa-owl-theme.css?ver=2.0" type="text/css" media="all">
<link rel="stylesheet" id="owl_animate_css-css" href="https://iconstituent.com/wp-content/plugins/slide-anything/owl-carousel/animate.min.css?ver=2.0" type="text/css" media="all">
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en&amp;render=explicit&amp;ver=5.4.2"></script>
<script type="text/javascript">
    var renderInvisibleReCaptcha = function() {

        for (var i = 0; i < document.forms.length; ++i) {
            var form = document.forms[i];
            var holder = form.querySelector('.inv-recaptcha-holder');

            if (null === holder) continue;
            holder.innerHTML = '';

            (function(frm){
                var cf7SubmitElm = frm.querySelector('.wpcf7-submit');
                var holderId = grecaptcha.render(holder,{
                    'sitekey': '6LeELKQUAAAAAHZqcZjT1QhCTAx_Tud_14T4Bzgf', 'size': 'invisible', 'badge' : 'inline',
                    'callback' : function (recaptchaToken) {
                        if((null !== cf7SubmitElm) && (typeof jQuery != 'undefined')){jQuery(frm).submit();grecaptcha.reset(holderId);return;}
                        HTMLFormElement.prototype.submit.call(frm);
                    },
                    'expired-callback' : function(){grecaptcha.reset(holderId);}
                });

                if(null !== cf7SubmitElm && (typeof jQuery != 'undefined') ){
                    jQuery(cf7SubmitElm).off('click').on('click', function(clickEvt){
                        clickEvt.preventDefault();
                        grecaptcha.execute(holderId);
                    });
                }
                else
                {
                    frm.onsubmit = function (evt){evt.preventDefault();grecaptcha.execute(holderId);};
                }


            })(form);
        }
    };
</script>
<script type="text/javascript" async="" defer="" src="https://www.google.com/recaptcha/api.js?onload=renderInvisibleReCaptcha&amp;render=explicit"></script>
<script type="text/javascript" src="https://iconstituent.com/wp-includes/js/wp-embed.min.js?ver=5.4.2"></script>
<script type="text/javascript" src="https://iconstituent.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.2.0"></script>
<script type="text/javascript" src="https://iconstituent.com/wp-content/plugins/slide-anything/owl-carousel/owl.carousel.min.js?ver=2.2.1"></script>
<script type="text/javascript">
    ( function( $ ) {
        $( document ).bind( 'gform_post_render', function() {
            var gfRecaptchaPoller = setInterval( function() {
                if( ! window.grecaptcha || ! window.grecaptcha.render ) {
                    return;
                }
                renderRecaptcha();
                clearInterval( gfRecaptchaPoller );
            }, 100 );
        } );
    } )( jQuery );
</script>
<script type="text/javascript">
    ( function( $ ) {
        $( document ).bind( 'gform_post_render', function() {
            var gfRecaptchaPoller = setInterval( function() {
                if( ! window.grecaptcha || ! window.grecaptcha.render ) {
                    return;
                }
                renderRecaptcha();
                clearInterval( gfRecaptchaPoller );
            }, 100 );
        } );
    } )( jQuery );
</script>

<div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
    <div style="z-index: 2000000000; position: relative;">
        <iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=r8WWNwsCvXtk22_oRSVCCZx9&amp;k=6LfuaG0UAAAAAPXfk6HBLofsFFFNJT7PQpwrmHQ-&amp;cb=i2k3psggacsd" name="c-og3ahwnx0eft" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe>
    </div>
</div>

<div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
    <div style="z-index: 2000000000; position: relative;">
        <iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=r8WWNwsCvXtk22_oRSVCCZx9&amp;k=6LfuaG0UAAAAAPXfk6HBLofsFFFNJT7PQpwrmHQ-&amp;cb=52p07qp07avd" name="c-kdemeq41g1we" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe>
    </div>
</div>
