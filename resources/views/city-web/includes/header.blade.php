<div class="headOverlay" style="background-image: url(); opacity: 0.5;"></div> <!-- .headOverlay -->
<div id="headInner" class="default-page-header-footer">
    <div class="container">
        <header class="top-default">
            <div class="logo">
                <a href="{!! env('APP_ENV') !!}" title="CityCRM">
                    <img src="{!! asset('/images/CityCRM-Black.png') !!}" alt="CityCRM" width="200">
                </a>
            </div>

            <div class="menu-header-menu-container">
                <ul id="menu-header-menu-1" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-54064">
                        <a>Solutions</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54310"><a href="/solutions/solo/">CityCRM Solo™</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-53815 current_page_item menu-item-54311"><a href="/solutions/cloud" aria-current="page">CityCRM Cloud™</a></li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54061">
                        <a>Features</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54234"><a href="{!! env('APP_URL') !!}/features/reporting-and-analytics/">Reporting and Analytics</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54235"><a href="{!! env('APP_URL') !!}/features/constituent-insights-and-intelligence/">Content Management</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54236"><a href="{!! env('APP_URL') !!}/features/privacy-and-data-security/">Privacy and Data Security</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54237"><a href="{!! env('APP_URL') !!}/features/smart-messaging/">Department ACL</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54238"><a href="{!! env('APP_URL') !!}/features/team-collaboration/">eCommerce Support</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54238"><a href="{!! env('APP_URL') !!}/features/team-collaboration/">Mobile App Support</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54239"><a href="{!! env('APP_URL') !!}/features/client-support/">Client Support</a></li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54358">
                        <a href="{!! env('APP_URL') !!}/pricing/">Pricing</a>
                    </li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54063">
                        <a>Resources</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54496">
                                <a href="https://capeandbay.com/blog/">Blog</a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-54313">
                                <a href="https://helpdesk.citycrm.com/">Knowledge Base</a>
                            </li>
                        </ul>
                    </li>
                    <li class="login-button menu-item menu-item-type-custom menu-item-object-custom menu-item-54067">
                        <a href="/login?client=true">Login</a>
                    </li>
                    <li class="book-button menu-item menu-item-type-post_type menu-item-object-page menu-item-54062" data-popup-id="54251"><a href="#formcta">Book a Demo</a></li>
                </ul>
            </div>

            <a href="#" id="menuIcon"><i class="fa fa-bars"></i></a>
        </header>

        <style type="text/css" data-type="vc_shortcodes-custom-css-54075">
            .vc_custom_1594929641803{
                padding-top: 0px !important;
                padding-bottom: 0px !important;
                background-color: #06369e !important;
            }

            .vc_custom_1595211239930{
                padding-left: 5px !important;
            }
        </style>

        <div id="alertBanner" data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid white-font font-weight-400 notification-banner vc_custom_1594929641803 vc_row-has-fill" style="position: relative; left: -153px; box-sizing: border-box; width: 1370px; padding-left: 153px; padding-right: 153px;">
            <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-xs-11">
                <div class="vc_column-inner vc_custom_1595211239930"><div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;font-size: 2.35em;font-weight: 300;">Respond to COVID-19 with agility and scale.
                                    <a href="https://capeandbay.com/shipyardblog/google-clairvoyance-how-the-google-algorithm-may-be-able-to-predict-the-next-pandemic/">
                                        <strong style="font-weight: 900;">Learn&nbsp;more.</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-2 vc_col-xs-1"><div class="vc_column-inner"><div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p>
                                    <img id="alertClose" style="cursor: pointer; height: 15px; width: 15px; display: flex; position: absolute; right: 0; top: 10px; opacity: 0.7;" src="{!! asset('/images/notification_close.svg') !!}">
                                    <br>
                                    <script>document.getElementById('alertClose').addEventListener('click', function () {
                                            document.getElementById("alertBanner").outerHTML = "";
                                            sessionStorage.setItem("alertBanner", "closed");
                                        })
                                    </script>
                                </p>

                            </div>
                        </div>
                    </div></div></div></div>

        <div class="vc_row-full-width vc_clearfix"></div>
    </div>    </div> <!-- .container -->
<!-- #headInner -->
<script>let alertBanner = sessionStorage.getItem("alertBanner");
    if (alertBanner != null) {
        //document.getElementById("alertBanner").outerHTML = "";
    }
</script>
