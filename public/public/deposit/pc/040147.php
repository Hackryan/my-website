<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html lang="en"><head>
    <style>
        @charset "UTF-8";
        @font-face {
            font-family: Averta;
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-regular-webfont.eot);
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-regular-webfont.eot?#iefix) format("embedded-opentype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regular-webfont.woff2) format("woff2"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regular-webfont.woff) format("woff"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regular-webfont.ttf) format("truetype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regular-webfont.svg#averta_regularregular) format("svg");
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: Averta;
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-regularitalic-webfont.eot);
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-regularitalic-webfont.eot?#iefix) format("embedded-opentype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regularitalic-webfont.woff2) format("woff2"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regularitalic-webfont.woff) format("woff"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regularitalic-webfont.ttf) format("truetype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-regularitalic-webfont.svg#avertaregular_italic) format("svg");
            font-weight: 400;
            font-style: italic
        }

        @font-face {
            font-family: Averta;
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-semibold-webfont.eot);
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-semibold-webfont.eot?#iefix) format("embedded-opentype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-semibold-webfont.woff2) format("woff2"), url(https://secure.pcfinancial.ca/assets/fonts/averta-semibold-webfont.woff) format("woff"), url(https://secure.pcfinancial.ca/assets/fonts/averta-semibold-webfont.ttf) format("truetype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-semibold-webfont.svg#avertasemibold) format("svg");
            font-weight: 600;
            font-style: normal
        }

        @font-face {
            font-family: Averta;
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-bold-webfont.eot);
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-bold-webfont.eot?#iefix) format("embedded-opentype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bold-webfont.woff2) format("woff2"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bold-webfont.woff) format("woff"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bold-webfont.ttf) format("truetype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bold-webfont.svg#avertabold) format("svg");
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: Averta;
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-bolditalic-webfont.eot);
            src: url(https://secure.pcfinancial.ca/assets/fonts/averta-bolditalic-webfont.eot?#iefix) format("embedded-opentype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bolditalic-webfont.woff2) format("woff2"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bolditalic-webfont.woff) format("woff"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bolditalic-webfont.ttf) format("truetype"), url(https://secure.pcfinancial.ca/assets/fonts/averta-bolditalic-webfont.svg#avertabold_italic) format("svg");
            font-weight: 700;
            font-style: italic
        }

        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button.btn-secondary-nav.selected,
        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button.selected.btn-secondary-nav-sml {
            background-color: #9c4fc9
        }

        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button:hover {
            background: #404040
        }

        :host-context(#popper-wrapper.dark-mode) .info-block-container .info-block .info-text:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        * {
            font-family: Averta;
            line-height: 1.2
        }

        p {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2 {
            font-family: Averta;
            font-weight: 700
        }

        form:focus {
            outline: none
        }

        div.form-group input[type=text],
        div.form-group input[type=password],
        div.form-group input[type=email],
        div.form-group input[type=date],
        div.form-group input[type=tel],
        div.single-form-group input[type=text],
        div.single-form-group input[type=password],
        div.single-form-group input[type=email],
        div.single-form-group input[type=date],
        div.single-form-group input[type=tel] {
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 15px 20px;
            border: solid 1px #CCCCCC;
            border-radius: 4px;
            font-size: 1em;
            font-weight: 600
        }

        div.form-group input[type=text].input-with-static-value,
        div.form-group input[type=password].input-with-static-value,
        div.form-group input[type=email].input-with-static-value,
        div.form-group input[type=date].input-with-static-value,
        div.form-group input[type=tel].input-with-static-value,
        div.single-form-group input[type=text].input-with-static-value,
        div.single-form-group input[type=password].input-with-static-value,
        div.single-form-group input[type=email].input-with-static-value,
        div.single-form-group input[type=date].input-with-static-value,
        div.single-form-group input[type=tel].input-with-static-value {
            padding-left: 32px
        }

        div.form-group input[type=text]:disabled,
        div.form-group input[type=password]:disabled,
        div.form-group input[type=email]:disabled,
        div.form-group input[type=date]:disabled,
        div.form-group input[type=tel]:disabled,
        div.single-form-group input[type=text]:disabled,
        div.single-form-group input[type=password]:disabled,
        div.single-form-group input[type=email]:disabled,
        div.single-form-group input[type=date]:disabled,
        div.single-form-group input[type=tel]:disabled {
            color: #ccc;
            background: #f6f6f7;
            cursor: not-allowed
        }

        div.form-group input[type=text]:focus,
        div.form-group input[type=password]:focus,
        div.form-group input[type=email]:focus,
        div.form-group input[type=date]:focus,
        div.form-group input[type=tel]:focus,
        div.single-form-group input[type=text]:focus,
        div.single-form-group input[type=password]:focus,
        div.single-form-group input[type=email]:focus,
        div.single-form-group input[type=date]:focus,
        div.single-form-group input[type=tel]:focus {
            border: solid 1px #80348E;
            outline: none
        }

        div.form-group textarea,
        div.single-form-group textarea {
            border: solid 1px #CCCCCC
        }

        div.form-group:focus-within>label,
        div.single-form-group:focus-within>label {
            color: #80348e
        }

        div.form-group.error label,
        div.single-form-group.error label {
            color: #e1251b
        }

        div.form-group.error input[type=text],
        div.form-group.error input[type=password],
        div.form-group.error input[type=email],
        div.form-group.error input[type=date],
        div.form-group.error input[type=tel],
        div.form-group.error textarea,
        div.form-group.error select,
        div.single-form-group.error input[type=text],
        div.single-form-group.error input[type=password],
        div.single-form-group.error input[type=email],
        div.single-form-group.error input[type=date],
        div.single-form-group.error input[type=tel],
        div.single-form-group.error textarea,
        div.single-form-group.error select {
            border: solid 1px #E1251B
        }

        div.form-group.error input[type=text].focus,
        div.form-group.error input[type=password].focus,
        div.form-group.error input[type=email].focus,
        div.form-group.error input[type=date].focus,
        div.form-group.error input[type=tel].focus,
        div.form-group.error textarea.focus,
        div.form-group.error select.focus,
        div.single-form-group.error input[type=text].focus,
        div.single-form-group.error input[type=password].focus,
        div.single-form-group.error input[type=email].focus,
        div.single-form-group.error input[type=date].focus,
        div.single-form-group.error input[type=tel].focus,
        div.single-form-group.error textarea.focus,
        div.single-form-group.error select.focus {
            border: solid 1px #E1251B;
            outline: none
        }

        div.form-group p.supporting-text,
        div.single-form-group p.supporting-text {
            font-size: .875em;
            font-weight: 400;
            margin-top: 10px;
            color: #6d7274
        }

        div.form-control-feedback {
            margin-top: 8px
        }

        div.form-control-feedback>span {
            font-size: .875em;
            font-weight: 400;
            color: #e1251b
        }

        div.single-form-group:focus-within>label {
            color: #2b2c32
        }

        select {
            width: 100%;
            padding: 15px 32px 15px 20px;
            font-size: 1em;
            font-weight: 600;
            color: #000;
            border-radius: 4px;
            border: solid 1px #CCCCCC;
            background-color: #fff;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            cursor: pointer;
            background-image: url(https://secure.pcfinancial.ca/assets/images/select-down.svg);
            background-repeat: no-repeat;
            background-position: calc(100% - 16px) center;
            background-size: 15px 15px
        }

        select:disabled {
            background-color: #f6f6f7;
            color: #686868;
            cursor: not-allowed
        }

        select::-ms-expand {
            display: none
        }

        select.dropdown-secondary {
            padding: 25px;
            border: none;
            overflow-y: hidden
        }

        select.dropdown-secondary optgroup {
            color: #80348e;
            font-size: 1em;
            font-weight: 600
        }

        select.dropdown-secondary optgroup option {
            font-size: .875em;
            font-weight: 400;
            color: #2b2c32;
            outline-color: red
        }

        select.dropdown-secondary optgroup option:before {
            content: ""
        }

        select.dropdown-secondary optgroup option:checked {
            background: orange;
            border: 3px solid #F00
        }

        div.form-group {
            max-width: 420px
        }

        div.form-group div.form-control-feedback {
            display: none
        }

        div.form-group.error div.form-control-feedback {
            display: block
        }

        div.form-group:not(:last-of-type) {
            margin-bottom: 30px
        }

        input[type=checkbox] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 15px;
            width: 15px;
            margin-right: 15px;
            background-color: transparent;
            border-radius: 2px;
            border: solid 1px #CCCCCC;
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        input[type=checkbox]:disabled {
            background-color: #f6f6f7;
            border: solid 2px #e8e9eb
        }

        input[type=checkbox]:checked {
            background-image: url(https://secure.pcfinancial.ca/assets/images/checked-light-mode.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 19px
        }

        label {
            margin-bottom: 10px;
            font-size: .875em;
            font-weight: 400;
            color: #6b6b6b;
            display: inline-block
        }

        label.form-check-label,
        label.checkbox-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        fieldset {
            border: none;
            padding: 0
        }

        button.btn.btn-primary:disabled,
        button.btn-primary-sml:disabled {
            cursor: not-allowed
        }

        button.btn-primary[type=submit],
        button.btn-primary-sml {
            position: relative
        }

        input[type=number] {
            -moz-appearance: textfield
        }

        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .form-radio-group label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 25px;
            font-size: 1em;
            margin-bottom: 0
        }

        .form-radio-group label dl,
        .form-radio-group label .choice {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            margin: 0
        }

        .form-radio-group label dl dt,
        .form-radio-group label .choice dt {
            color: #6b6b6b;
            font-size: 1em;
            font-weight: 600;
            margin-bottom: 4px
        }

        .form-radio-group label dl dd,
        .form-radio-group label dl .text,
        .form-radio-group label .choice dd,
        .form-radio-group label .choice .text {
            color: #6b6b6b;
            font-size: .875em;
            font-weight: 400;
            margin-left: 0
        }

        .form-radio-group input[type=radio] {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 25px;
            width: 25px;
            background-color: transparent;
            background-image: url(https://secure.pcfinancial.ca/assets/images/select-unchecked.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 15px 15px
        }

        .form-radio-group input[type=radio]:checked {
            height: 25px;
            width: 25px;
            background-image: url(https://secure.pcfinancial.ca/assets/images/check-light-mode.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 25px 25px
        }

        .form-radio-group input[type=radio]:checked+dl dd,
        .form-radio-group input[type=radio]:checked+dl dt {
            color: #80348e
        }

        div.single-form-group>input.otpCodeInput {
            padding: 15px 0;
            text-align: center;
            color: #000;
            font-size: 2.25em;
            font-weight: 700;
            border-radius: 4px;
            background-color: #fff;
            border: solid 1px #CCCCCC;
            width: 100%
        }

        div.single-form-group>input.otpCodeInput.active {
            letter-spacing: 16px
        }

        @media only screen and (min-width: 699px) {
            div.single-form-group>input.otpCodeInput.active {
                letter-spacing: 32px
            }
        }

        div.status ul {
            padding-left: 0;
            margin-bottom: 30px
        }

        div.status ul li {
            padding-left: 24px;
            list-style-type: none;
            color: #6b6b6b;
            font-size: .875em;
            font-weight: 400;
            margin-bottom: 10px;
            background-image: url(https://secure.pcfinancial.ca/assets/images/dot.svg);
            background-repeat: no-repeat;
            background-position: left center;
            background-size: 15px
        }

        div.status ul li.valid {
            background-image: url(https://secure.pcfinancial.ca/assets/images/check-light-mode.svg);
            background-size: 20px
        }

        div.static-value-input-container {
            position: relative
        }

        div.static-value-input-container .static-value {
            position: absolute;
            left: 21px;
            top: 16px
        }

        :host-context(#popper-wrapper.dark-mode) div.status ul li.valid {
            background-image: url(https://secure.pcfinancial.ca/assets/images/check-dark-mode.svg)
        }

        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button.btn-secondary-nav.selected,
        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button.selected.btn-secondary-nav-sml {
            background-color: #9c4fc9
        }

        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button:hover {
            background: #404040
        }

        :host-context(#popper-wrapper.dark-mode) .info-block-container .info-block .info-text:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        * {
            font-family: Averta;
            line-height: 1.2
        }

        p {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2 {
            font-family: Averta;
            font-weight: 700
        }

        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button.btn-secondary-nav.selected,
        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button.selected.btn-secondary-nav-sml {
            background-color: #9c4fc9
        }

        :host-context(#popper-wrapper.dark-mode) .side-nav-container ul li button:hover {
            background: #404040
        }

        :host-context(#popper-wrapper.dark-mode) .info-block-container .info-block .info-text:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        * {
            font-family: Averta;
            line-height: 1.2
        }

        p {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2 {
            font-family: Averta;
            font-weight: 700
        }

        #onfido-mount .onfido-sdk-ui-Modal-inner {
            outline: none;
            height: 39em
        }

        @media only screen and (min-width: 360px) and (max-width: 700px) {
            #onfido-mount .onfido-sdk-ui-Modal-inner {
                border: none
            }
        }

        #onfido-mount .onfido-sdk-ui-PageTitle-titleWrapper {
            margin: 2em -.5em 1em
        }

        #onfido-mount .onfido-sdk-ui-Theme-step,
        #onfido-mount .onfido-sdk-ui-DocumentSelector-option {
            outline: none
        }

        #onfido-mount .onfido-sdk-ui-DocumentSelector-option:hover {
            border-color: #e1251b;
            -webkit-box-shadow: 0px 0px 0px 2px rgba(225, 37, 27, .5);
            box-shadow: 0 0 0 2px rgba(225, 37, 27, .5)
        }

        #onfido-mount .onfido-sdk-ui-NavigationBar-back {
            outline: none
        }

        #onfido-mount .onfido-sdk-ui-NavigationBar-back:hover {
            -webkit-box-shadow: 0px 0px 0px 2px rgba(225, 37, 27, .5);
            box-shadow: 0 0 0 2px rgba(225, 37, 27, .5)
        }

        #onfido-mount .onfido-sdk-ui-Theme-link,
        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-copyToClipboard {
            outline: none;
            color: #80348e;
            border-bottom-color: #80348e;
            background-color: transparent
        }

        #onfido-mount .onfido-sdk-ui-Theme-link:hover,
        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-copyToClipboard:hover {
            color: #80348e;
            background-color: transparent
        }

        #onfido-mount .onfido-sdk-ui-Theme-header {
            background-color: #e1251b
        }

        #onfido-mount .ods-button.-action--primary {
            border-radius: 2em
        }

        #onfido-mount .ods-button.-action--primary:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: transparent
        }

        #onfido-mount .ods-button.-action--primary:disabled {
            color: #686868
        }

        #onfido-mount .ods-button.-action--secondary {
            border: none;
            color: #80348e;
            text-decoration: underline;
            font-weight: 500
        }

        #onfido-mount .ods-button.onfido-sdk-ui-crossDevice-CrossDeviceLink-btn {
            border-radius: 0 .25em .25em 0
        }

        #onfido-mount .onfido-sdk-ui-PhoneNumberInput-phoneNumberContainer input:focus {
            outline: none
        }

        #onfido-mount .onfido-sdk-ui-DocumentSelector-icon.onfido-sdk-ui-DocumentSelector-icon-passport {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/passport.svg)
        }

        #onfido-mount .onfido-sdk-ui-DocumentSelector-icon.onfido-sdk-ui-DocumentSelector-icon-driving-licence {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/license.svg)
        }

        #onfido-mount .onfido-sdk-ui-DocumentSelector-icon.onfido-sdk-ui-DocumentSelector-icon-national-identity-card {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/c-card.svg)
        }

        #onfido-mount .onfido-sdk-ui-DocumentSelector-icon.onfido-sdk-ui-DocumentSelector-icon-residence-permit {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/resident-permit.svg)
        }

        #onfido-mount .onfido-sdk-ui-QRCode-qrCodeHelpIcon {
            display: none
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-styledLabel {
            font-size: 1.25em;
            font-weight: 700
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-actionContainer:before {
            background-image: url(https://secure.pcfinancial.ca/assets/images/check-red.svg);
            background-position: center;
            background-size: contain;
            margin-top: 8px
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-smsLinkOption:before {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/message-icon.svg);
            background-position: center;
            background-size: contain;
            margin-right: 5px
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-copyLinkOption:before {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/link-icon.svg);
            background-position: center;
            background-size: contain;
            margin-right: 5px
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceLink-qrCodeLinkOption:before {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/qr-code-icon.svg);
            background-position: center;
            background-size: contain;
            margin-right: 5px
        }

        #onfido-mount .onfido-sdk-ui-CameraPermissions-Primer-graphic {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/camera.svg);
            background-position: center;
            background-size: contain
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-CrossDeviceSubmit-icon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/checkmark.svg);
            background-position: center;
            background-size: contain
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-MobileNotificationSent-icon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/mobile-notification.svg);
            background-position: center;
            background-size: contain
        }

        #onfido-mount .onfido-sdk-ui-NavigationBar-iconBack {
            background-image: url(https://secure.pcfinancial.ca/assets/images/back.svg);
            background-position: center;
            background-size: contain
        }

        #onfido-mount .onfido-sdk-ui-NavigationBar-label {
            text-transform: capitalize;
            visibility: visible;
            color: #e1251b
        }

        #onfido-mount .onfido-sdk-ui-Video-two_actionsIcon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/video-icon.svg)
        }

        #onfido-mount .onfido-sdk-ui-Video-speak_out_loudIcon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/mic-icon.svg)
        }

        #onfido-mount .onfido-sdk-ui-Error-container-error {
            background-color: #fdeae9;
            color: #e1251b;
            margin-top: 10px
        }

        #onfido-mount .onfido-sdk-ui-Error-container-error .onfido-sdk-ui-Error-title-icon-error {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info-red.svg)
        }

        #onfido-mount .onfido-sdk-ui-Error-container-error .onfido-sdk-ui-Error-errorTriangle {
            border-bottom: .5em solid #fdeae9;
            border-left: .5em solid #fdeae9
        }

        #onfido-mount .onfido-sdk-ui-Error-container-error .onfido-sdk-ui-Error-instruction-text {
            color: #2b2c32
        }

        #onfido-mount .onfido-sdk-ui-Error-container-warning {
            background-color: #efdff2;
            color: #80348e;
            margin-top: 10px
        }

        #onfido-mount .onfido-sdk-ui-Error-container-warning .onfido-sdk-ui-Error-title-icon-warning {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info-teal.svg)
        }

        #onfido-mount .onfido-sdk-ui-Error-container-warning .onfido-sdk-ui-Error-warningTriangle {
            border-bottom: .5em solid #EFDFF2;
            border-left: .5em solid #EFDFF2
        }

        #onfido-mount .onfido-sdk-ui-Error-container-warning .onfido-sdk-ui-Error-instruction-text {
            color: #2b2c32
        }

        #onfido-mount .onfido-sdk-ui-CameraPermissions-Recover-recovery {
            background: #E1251B
        }

        #onfido-mount .onfido-sdk-ui-Complete-icon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/checkmark.svg)
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-Intro-stageIcon-sms {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/cont-mob-sms.svg)
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-Intro-stageIcon-take-photos {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/cont-mob-take-photo.svg)
        }

        #onfido-mount .onfido-sdk-ui-crossDevice-Intro-stageIcon-return-to-computer {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/cont-mob-return.svg)
        }

        #onfido-mount .unsupportedBrowserIcon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/error-cross.svg)
        }

        #onfido-mount .onfido-sdk-ui-Uploader-documentExampleImg.onfido-sdk-ui-Uploader-documentExampleImgCutoff {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/examples/missing-details.jpg)
        }

        #onfido-mount .onfido-sdk-ui-Uploader-documentExampleImg.onfido-sdk-ui-Uploader-documentExampleImgBlur {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/examples/blur.jpg)
        }

        #onfido-mount .onfido-sdk-ui-Uploader-documentExampleImg.onfido-sdk-ui-Uploader-documentExampleImgGlare {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/examples/glare.jpg)
        }

        #onfido-mount .onfido-sdk-ui-Uploader-documentExampleImg.onfido-sdk-ui-Uploader-documentExampleImgGood {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/examples/good.jpg)
        }

        #onfido-mount .onfido-sdk-ui-Theme-icon.onfido-sdk-ui-Uploader-icon.onfido-sdk-ui-Uploader-identityIcon {
            background-image: url(https://secure.pcfinancial.ca/assets/images/onfido/document.svg);
            background-position: center;
            background-size: contain
        }

        #onfido-mount.container__poa .onfido-sdk-ui-Theme-cobrandFooter {
            margin-top: .5em
        }

        #onfido-mount.container__poa .onfido-sdk-ui-ProofOfAddress-PoAIntro-requirement {
            font-size: 14px
        }

        #onfido-mount.container__poa .onfido-sdk-ui-DocumentSelector-DocumentList-tag,
        #onfido-mount.container__poa .onfido-sdk-ui-DocumentSelector-DocumentList-warning {
            color: #6b6b6b;
            font-size: 12px;
            font-weight: 400
        }

        #onfido-mount.container__poa .onfido-sdk-ui-DocumentSelector-DocumentList-hint {
            color: #80348e
        }

        #onfido-mount.container__poa .onfido-sdk-ui-DocumentSelector-DocumentList-list li:first-of-type .onfido-sdk-ui-DocumentSelector-DocumentList-label {
            position: relative;
            top: -.77em
        }

        #onfido-mount.container__poa .onfido-sdk-ui-DocumentSelector-DocumentList-list li:last-of-type .onfido-sdk-ui-DocumentSelector-DocumentList-icon {
            position: relative;
            top: -.4em
        }

        #onfido-mount.container__poa .onfido-sdk-ui-ProofOfAddress-Guidance-subTitle:before {
            display: none
        }

        #onfido-mount.container__poa .onfido-sdk-ui-ProofOfAddress-Guidance-subTitle {
            font-size: 18px
        }

        #onfido-mount.container__poa .onfido-sdk-ui-ProofOfAddress-Guidance-content {
            font-size: 14px
        }

        @media (max-width: 479px) {
            #onfido-mount .onfido-sdk-ui-NavigationBar-label {
                display: inline-block
            }
        }

        idv-options-verification .container .options .container {
            margin-bottom: 20px
        }

        idv-options-verification .container .options .container .heading {
            color: #80348e
        }

        @media only screen and (max-width: 420px) {
            app-idv-digital-retrieve-application .container .date-picker-container .picker-wrapper {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        @media only screen and (max-width: 420px) {
            idv-upload-component .upload-fs-body .date-picker-container .picker-wrapper {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        idv-digital-submission-loading .status-container .loader-container {
            position: relative
        }

        pcf-fund-methods card-panel .container .content .heading {
            color: #80348e
        }

        .ngxp__container.tooltip-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            z-index: 10000;
            padding: 0;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            background-color: #2b2c32
        }

        .ngxp__container.tooltip-wrapper>.ngxp__arrow {
            border-color: #2b2c32
        }

        .ngxp__container.tooltip-wrapper .ngxp__inner {
            width: 200px;
            padding: 25px 20px 30px;
            background-color: #2b2c32;
            border: none;
            border-radius: 4px;
            -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .08);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .08);
            text-align: left;
            font-size: 1rem
        }

        .ngxp__container.tooltip-wrapper .ngxp__inner p {
            color: #fff;
            font-size: .875em;
            line-height: 1.5;
            margin-bottom: 1em;
            font-weight: 400
        }

        .ngxp__container.tooltip-wrapper .ngxp__inner p:last-child {
            margin-bottom: 0
        }

        credit-card .credit-card-container .expanded-content .balances-container .available .description-container .description:before {
            content: "";
            display: inline-block;
            height: 8px;
            width: 8px;
            margin-right: 10px;
            background: #EBEDEB;
            border-radius: 50%
        }

        credit-card .credit-card-container .expanded-content .balances-container .pending .description-container .description:before {
            content: "";
            display: inline-block;
            height: 8px;
            width: 8px;
            margin-right: 10px;
            background: #b4b7bd;
            border-radius: 50%
        }

        app-search-address .search-address-container .search-loader loader .loader-container .loader {
            border: 2px solid #E1251B;
            border-right-color: transparent
        }

        app-header.authenticated .nav {
            background-color: #f6f6f7
        }

        app-header.authenticated .nav app-logo {
            padding-right: 30px
        }

        app-header.authenticated .nav .btn-close {
            padding-left: 30px;
            background-color: #f6f6f7
        }

        ssite-account-management .card-panel .container {
            margin-bottom: 10px
        }

        ssite-accounts .sidebar ssite-accounts-side-nav nav.side-nav-container button.side-nav-button.btn {
            background-color: #fff
        }

        ssite-accounts .sidebar ssite-accounts-side-nav nav.side-nav-container button.side-nav-button.btn:hover {
            background: #ededed
        }

        view-autopay .autopay-account-details .autopay-account image-circle .image-circle {
            background-color: #3d1952
        }

        view-autopay .autopay-account-details .autopay-account image-circle .image-circle.image-selected {
            background-color: #3d1952
        }

        ssite-account-summary .account-summary image-circle .image-circle {
            background-color: #3d1952
        }

        ssite-account-summary .account-summary image-circle .image-circle.image-selected {
            background-color: #3d1952
        }

        ssite-account-summary .account-summary.goal-account .profile-container .image-circle {
            background-color: #0073e6
        }

        ssite-account-summary .account-summary.optimum-account .profile-container .image-circle {
            background-color: #e1251b
        }

        ssite-account-summary .account-summary.credit-account .profile-container .image-circle {
            background-color: #f2b73f
        }

        ssite-account-summary .account-summary.card-management .profile-container .image-circle {
            background: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0
        }

        ssite-account-summary .account-summary .profile-container .image-circle {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            height: 50px;
            width: 50px
        }

        ssite-account-summary .account-summary .profile-container.multi-account .main-profile-circle .image-circle {
            height: 28px;
            width: 28px
        }

        ssite-account-summary .account-summary .profile-container.multi-account .sub-profile-circle .image-circle {
            border: 2px solid white;
            height: 40px;
            width: 40px
        }

        .secure-complaint-header .btn-close {
            top: 26px
        }

        .new-offers-indicator-tooltip.bs-tooltip-bottom {
            z-index: 110
        }

        @media only screen and (max-width: 1051px) {
            .new-offers-indicator-tooltip.bs-tooltip-bottom {
                top: 58px!important;
                right: 12px;
                left: auto!important;
                left: initial!important;
                -webkit-transform: none!important;
                transform: none!important
            }
            .new-offers-indicator-tooltip.bs-tooltip-bottom .arrow {
                right: 27px;
                left: auto;
                left: initial
            }
        }

        .new-offers-indicator-tooltip.bs-tooltip-bottom .arrow {
            position: absolute
        }

        .new-offers-indicator-tooltip.bs-tooltip-bottom .arrow:before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
            bottom: -1px;
            border-width: 0 6px 6px;
            border-bottom-color: #80348e
        }

        .new-offers-indicator-tooltip.bs-tooltip-bottom .tooltip-inner {
            padding: 4px 8px;
            font-size: .875em;
            font-weight: 600;
            color: #fff;
            background-color: #80348e;
            border-radius: 4px
        }

        sequence-two-factor-authentication .actions {
            position: relative
        }

        sequence-two-factor-authentication .actions .btn-secondary:not(.resend-button) {
            position: absolute;
            margin-top: 0!important;
            margin-bottom: 5px;
            left: 300px;
            top: 12px;
            width: 120px
        }

        sequence-two-factor-authentication #trusted-device .btn-secondary {
            width: 150px
        }

        .dispute-questions card-panel .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column;
            flex-flow: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            min-height: 58px!important;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin-bottom: 16px;
            cursor: pointer
        }

        .dispute-questions card-panel .container:hover {
            background-color: #ccc
        }

        .dispute-questions card-panel .container .header-container {
            display: none!important
        }

        .dispute-questions card-panel .container .content {
            height: 58px
        }

        .dispute-questions card-panel .container .content div {
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media screen and (max-width: 520px) {
            sequence-two-factor-authentication .actions {
                position: relative
            }
            sequence-two-factor-authentication .actions .btn-secondary:not(.resend-button) {
                position: relative!important;
                bottom: auto!important;
                left: auto!important
            }
        }

        notification-plate .notification-text a,
        .notification-modal .notification-info a {
            color: #80348e
        }

        .new-offers-indicator-tooltip.bs-tooltip-bottom.dark-mode .arrow:before {
            border-bottom-color: #9749c5
        }

        .new-offers-indicator-tooltip.bs-tooltip-bottom.dark-mode .tooltip-inner {
            background-color: #9749c5
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .ada-trigger {
            position: fixed;
            bottom: 80px;
            display: none;
            right: 20px;
            overflow: hidden;
            text-indent: -9999px;
            width: 5px;
            height: 5px;
            background: #f6f6f7;
            border-radius: 20px;
            border: none;
            padding: 7px;
            -webkit-box-shadow: #6B6B6B 2px 2px 7px;
            box-shadow: #6b6b6b 2px 2px 7px;
            z-index: 10001;
            -webkit-transition: background .8s easy-in-out;
            -o-transition: background .8s easy-in-out;
            transition: background .8s easy-in-out
        }

        .ada-trigger:before,
        .ada-trigger:after {
            display: block;
            content: "";
            height: 2px;
            width: 50%;
            background: #2b2c32;
            top: 46%;
            left: 50%;
            position: absolute
        }

        .ada-trigger:before {
            -webkit-transform: translateX(-50%) rotate(45deg);
            transform: translate(-50%) rotate(45deg)
        }

        .ada-trigger:after {
            -webkit-transform: translateX(-50%) rotate(-45deg);
            transform: translate(-50%) rotate(-45deg)
        }

        .ada-trigger:hover {
            background: #2b2c32;
            -webkit-animation-duration: .7s;
            animation-duration: .7s;
            -webkit-animation-name: bounce;
            animation-name: bounce;
            -webkit-animation-timing-function: cubic-bezier(.28, .84, .42, 1);
            animation-timing-function: cubic-bezier(.28, .84, .42, 1)
        }

        .ada-trigger:hover:before,
        .ada-trigger:hover:after {
            background: #f6f6f7
        }

        @-webkit-keyframes bounce {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            10% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1)
            }
            30% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2)
            }
            50% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            70% {
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes bounce {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            10% {
                -webkit-transform: scale(1.1);
                transform: scale(1.1)
            }
            30% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2)
            }
            50% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            70% {
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes popAlert {
            0% {
                -webkit-transform: translate(-50%, calc(100% + 40px));
                transform: translate(-50%, calc(100% + 40px))
            }
        }

        @keyframes popAlert {
            0% {
                -webkit-transform: translate(-50%, calc(100% + 40px));
                transform: translate(-50%, calc(100% + 40px))
            }
        }

        html,
        body {
            overflow-x: hidden
        }

        body {
            margin: 0
        }

        button {
            cursor: pointer
        }

        .full-screen-loader {
            display: none
        }

        body.processing {
            overflow: hidden
        }

        body.processing .full-screen-loader {
            display: block
        }

        body.fs-takeover app-header,
        body.fs-takeover app-footer {
            display: none
        }

        figure {
            margin: 0
        }

        .btn {
            cursor: pointer
        }

        .btn-primary-nav {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 100px;
            background-color: #e1251b;
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 2px 4px rgba(0, 0, 0, .16);
            font-family: Averta;
            font-size: .875em;
            font-weight: lighter;
            color: #fff;
            text-decoration: none
        }

        .btn-primary-nav:hover {
            background-color: #c2211c
        }

        .btn-secondary-nav,
        .btn-secondary-nav-sml {
            display: inline-block;
            padding: 20px 30px;
            border-radius: 35px;
            background-color: #80348e;
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 2px 4px rgba(0, 0, 0, .16);
            font-family: Averta;
            font-size: .875em;
            font-weight: 600;
            color: #fff;
            text-decoration: none
        }

        .btn-secondary-nav-sml {
            border: none;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -ms-flex-item-align: start;
            align-self: flex-start;
            padding: 10px 30px
        }

        @media only screen and (min-width: 900px) {
            .btn-secondary-nav-sml {
                -ms-flex-item-align: end;
                align-self: flex-end;
                margin-left: 20px
            }
        }

        .btn-transparent {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            background-color: transparent;
            color: #fff;
            border: transparent;
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 2px 4px rgba(0, 0, 0, .16);
            font-size: .875em;
            font-weight: 600;
            color: #000
        }

        .btn-white {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            background-color: #fff;
            color: #80348e;
            border: solid 1px #80348E;
            padding: .5rem 2rem;
            border-radius: 28px;
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 2px 4px rgba(0, 0, 0, .16);
            font-size: .875em;
            font-weight: 600
        }

        @media only screen and (min-width: 320px) {
            .btn-white {
                min-width: 140px
            }
        }

        .btn-white:hover {
            background-color: rgba(0, 122, 133, .1)
        }

        .btn-white:active {
            background-color: rgba(0, 122, 133, .2)
        }

        .btn-primary {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            background-color: #b82118;
            border-radius: 28px;
            border: transparent;
            padding: 1rem 2rem;
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 2px 4px rgba(0, 0, 0, .16);
            font-size: .875em;
            font-weight: 600;
            color: #fff
        }

        @media only screen and (min-width: 320px) {
            .btn-primary {
                min-width: 245px
            }
        }

        .btn-primary:hover {
            background-color: #8c1711
        }

        .btn-primary:disabled,
        .btn-primary.disabled {
            background-color: #e5bab8;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none
        }

        .btn-primary .loader-container {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .btn-primary-sml {
            padding: 8px 20px;
            height: 35px;
            background-color: #b82118;
            font-size: .875em;
            font-weight: 600;
            line-height: normal;
            color: #fff;
            -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 2px 4px rgba(0, 0, 0, .16);
            border-radius: 100px;
            border: transparent;
            min-width: 84px
        }

        .btn-primary-sml:hover {
            background-color: #8c1711
        }

        .btn-primary-sml:disabled {
            background-color: #e5bab8;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none
        }

        .nav-link,
        .btn-secondary {
            position: relative;
            color: #80348e;
            padding: 0 0 2px;
            border: none;
            border-bottom: solid 1px #80348E;
            text-decoration: none;
            font-size: .875em;
            font-weight: 600;
            background: transparent;
            cursor: pointer
        }

        .nav-link-sml,
        .btn-secondary-sml {
            position: relative;
            padding: 8px 20px;
            height: 35px;
            font-size: .875em;
            font-weight: 600;
            line-height: normal;
            border-radius: 100px;
            border: transparent;
            min-width: 84px;
            background: #80348E;
            color: #fff
        }

        .nav-link-sml:disabled,
        .btn-secondary-sml:disabled {
            background: #f6f6f7
        }

        .nav-link .loader-container,
        .btn-secondary .loader-container {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .nav-link.btn-loader,
        .btn-secondary.btn-loader {
            border: none;
            padding: 0 0 2px;
            border-bottom: solid 1px #80348E
        }

        .nav-link.btn-loader:disabled,
        .btn-secondary.btn-loader:disabled {
            min-height: 30px;
            border: none;
            color: transparent
        }

        .nav-link.btn-loader:disabled span,
        .btn-secondary.btn-loader:disabled span {
            border: none
        }

        .nav-link:disabled,
        .btn-secondary:disabled {
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none;
            color: #686868;
            cursor: default
        }

        .nav-link.loading,
        .btn-secondary.loading {
            border-bottom: none
        }

        .nav-link.loading span,
        .btn-secondary.loading span {
            visibility: hidden
        }

        .nav-link-outlined,
        .btn-secondary-outlined {
            color: #80348e;
            border: solid 1px #80348E;
            border-radius: 28px;
            background: white;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            -webkit-box-shadow: none;
            box-shadow: none;
            font-size: .875em;
            font-weight: 600;
            padding: 1rem 2rem
        }

        @media only screen and (min-width: 320px) {
            .nav-link-outlined,
            .btn-secondary-outlined {
                min-width: 245px
            }
        }

        .btn-close {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
            position: absolute;
            top: 30px;
            right: 25px;
            padding: 0 30px 0 0;
            line-height: normal;
            border: none;
            color: transparent;
            font-size: .875em;
            font-weight: 600;
            background-color: #fff;
            cursor: pointer;
            background-image: url(https://secure.pcfinancial.ca/assets/images/overlay-close-button.svg);
            background-repeat: no-repeat;
            background-position: right center;
            background-size: 25px 25px
        }

        .btn-close span {
            font-size: 0
        }

        .btn-close.dark {
            background-image: url(https://secure.pcfinancial.ca/assets/images/overlay-close-button-dark.svg)
        }

        @media only screen and (min-width: 560px) {
            .btn-close {
                color: #333
            }
            .btn-close span {
                font-size: 1em
            }
        }

        a.btn-primary {
            display: inline-block;
            text-align: center;
            text-decoration: none
        }

        a.btn-primary-sml {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        a.btn-primary-sml.alert-btn {
            -webkit-box-sizing: content-box;
            box-sizing: content-box
        }

        a[href^=tel] {
            color: #80348e;
            font-size: 1em;
            font-weight: 400;
            text-decoration: none
        }

        a[href^=tel].btn-primary {
            color: #fff
        }

        .btn-dashboard-cta {
            font-size: .875em;
            font-weight: 600;
            color: #80348e;
            border: none;
            background-color: transparent;
            padding: 0
        }

        .standard-lottie {
            width: 200px;
            height: 200px;
            display: inline-block;
            margin-left: 0
        }

        body {
            margin-right: calc(-1*(100vw - 100%))
        }

        body.modal-open,
        body.blade-open {
            width: 100%;
            min-height: 100%
        }

        body.lock {
            position: fixed
        }

        .modal:not(.blade):not(.alert-fullscreen) {
            display: block;
            z-index: 1050;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            outline: 0;
            opacity: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .modal:not(.blade):not(.alert-fullscreen).notification-modal .modal-dialog {
            max-width: none
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen).notification-modal .modal-dialog {
                max-width: 520px
            }
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-dialog {
            max-width: 280px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            border-radius: 4px
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen) .modal-dialog {
                max-width: 520px
            }
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-content {
            border-radius: 4px;
            background-color: #fff
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-body {
            padding: 20px
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen) .modal-body {
                padding: 25px 30px 20px
            }
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-info {
            margin-bottom: 32px
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-info a.tel {
            white-space: nowrap
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen) .modal-info {
                margin-bottom: 36px
            }
        }

        .modal:not(.blade):not(.alert-fullscreen) p {
            line-height: 1.5
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-container header,
        .modal:not(.blade):not(.alert-fullscreen) .modal-container .modal-header {
            padding: 20px;
            border-bottom: solid 1px #e8e9eb
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen) .modal-container header,
            .modal:not(.blade):not(.alert-fullscreen) .modal-container .modal-header {
                padding: 25px 30px
            }
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-container header h2,
        .modal:not(.blade):not(.alert-fullscreen) .modal-container .modal-header h2 {
            font-size: 1.125em;
            font-weight: 700;
            margin: 0
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen) .modal-container header h2,
            .modal:not(.blade):not(.alert-fullscreen) .modal-container .modal-header h2 {
                font-size: 1.5em;
                font-weight: 700
            }
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-container header p,
        .modal:not(.blade):not(.alert-fullscreen) .modal-container .modal-header p {
            font-size: 1em;
            font-weight: 400;
            margin: 0
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-actions {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-actions .btn-secondary {
            margin: 15px auto 0;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-actions .nav-link {
            margin: 0 auto
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-actions .nav-link:first-of-type {
            margin-right: 15px
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-actions .nav-link:not(:first-of-type):not(:last-of-type) {
            margin-left: 15px;
            margin-right: 15px
        }

        .modal:not(.blade):not(.alert-fullscreen) .modal-actions .nav-link:last-of-type:not(:first-of-type) {
            margin-left: 15px
        }

        @media only screen and (min-width: 560px) {
            .modal:not(.blade):not(.alert-fullscreen) .modal-actions {
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap
            }
            .modal:not(.blade):not(.alert-fullscreen) .modal-actions .btn-secondary {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
                margin: 0 30px 0 0
            }
        }

        .modal-backdrop.show {
            z-index: 1050;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: .35;
            background-color: #2b2c32;
            -webkit-animation-name: overlayFadeIn;
            animation-name: overlayFadeIn;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            -webkit-animation-duration: .27s;
            animation-duration: .27s
        }

        .modal.show.fullscreen {
            max-width: none
        }

        .modal.show.fullscreen h2 {
            font-size: 2.25em;
            font-weight: 700;
            margin-bottom: 20px;
            margin-top: 0;
            color: #2b2c32
        }

        .modal.show.fullscreen p {
            font-size: 1.125em;
            font-weight: 400;
            margin-bottom: 50px;
            color: #6b6b6b
        }

        .modal.show.fullscreen p a {
            text-decoration: none;
            color: #80348e;
            font-weight: 600
        }

        .modal.show.fullscreen p a:hover {
            text-decoration: underline
        }

        .modal.show.fullscreen div.fullscreen-close-container {
            margin-bottom: 60px
        }

        @media only screen and (min-width: 699px) {
            .modal.show.fullscreen div.fullscreen-close-container {
                margin-bottom: 200px
            }
        }

        .modal.show.fullscreen .modal-dialog {
            height: 100vh;
            width: 100vw;
            max-width: none;
            border-radius: 0
        }

        .modal.show.fullscreen .modal-actions {
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .modal.show.fullscreen .modal-actions button,
        .modal.show.fullscreen .modal-actions a,
        .modal.show.fullscreen .modal-actions .nav-link {
            margin: 0 15px 0 0
        }

        .modal.show.fullscreen .modal-actions button:last-child,
        .modal.show.fullscreen .modal-actions a:last-child,
        .modal.show.fullscreen .modal-actions .nav-link:last-child {
            margin-right: 0
        }

        .modal.show.fullscreen .modal-container {
            height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .modal.show.fullscreen .modal-body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .blade.modal {
            z-index: 1050;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            width: 100vw;
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            -webkit-animation-duration: .27s;
            animation-duration: .27s
        }

        .blade.modal .animation {
            width: 200px;
            height: 200px
        }

        .blade.modal .modal-dialog {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: white;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 130px 15px 30px;
            overflow-x: hidden
        }

        @media only screen and (min-width: 699px) {
            .blade.modal .modal-dialog {
                max-width: 700px;
                padding-left: 55px;
                padding-right: 55px;
                padding-bottom: 80px
            }
        }

        .blade.modal.blade-blade\:outlet-scheduled-pending .modal-dialog {
            padding: 95px 0 0
        }

        .blade.modal.blade-blade\:outlet-view-goal .modal-dialog {
            padding: 0
        }

        .blade.modal.blade-blade\:outlet-view-goal .modal-content .blade-content {
            padding: 0;
            margin-top: 70px;
            width: 100%
        }

        .blade.modal:not(.blade--outlet) .modal-content {
            overflow-y: auto
        }

        .blade.modal:not(.blade--outlet) .modal-content header {
            color: #e1251b;
            background: white
        }

        @media only screen and (max-width: 500px) {
            .blade.modal:not(.blade--outlet) .modal-content .cta-container {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }
            .blade.modal:not(.blade--outlet) .modal-content .cta-container .btn.btn-primary {
                margin: 0 0 30px
            }
            .blade.modal:not(.blade--outlet) .modal-content .cta-container .btn.btn-secondary.button-link {
                margin: 0
            }
        }

        .blade.modal .modal-content .blade {
            outline: none
        }

        .blade.modal .modal-content h3 {
            font-size: 1.5em;
            font-weight: 700;
            color: #2b2c32;
            margin: 0 0 40px
        }

        .blade.modal .modal-content p {
            color: #6b6b6b
        }

        .blade.modal .modal-content header,
        .blade.modal .modal-content .blade-header {
            height: 70px;
            width: 100%;
            max-width: 700px;
            position: absolute;
            top: 0;
            left: 0;
            padding: 25px 20px;
            background-color: #3d1952;
            border-bottom: solid 1px #e8e9eb;
            text-align: center;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .blade.modal .modal-content header .back,
        .blade.modal .modal-content .blade-header .back {
            position: absolute;
            top: 26px;
            left: 26px;
            background-image: url(https://secure.pcfinancial.ca/assets/images/back.svg);
            background-repeat: no-repeat;
            background-position: left center;
            background-size: 25px 25px;
            padding: 0 0 0 25px;
            font-size: .875em;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            background-color: transparent;
            border: none
        }

        .blade.modal .modal-content header .back span,
        .blade.modal .modal-content .blade-header .back span {
            font-size: 0
        }

        @media only screen and (min-width: 699px) {
            .blade.modal .modal-content header .back span,
            .blade.modal .modal-content .blade-header .back span {
                font-size: 1em
            }
        }

        .blade.modal .modal-content header .title,
        .blade.modal .modal-content .blade-header .title {
            float: left;
            font-size: 1.125em;
            font-weight: 400;
            color: #80348e
        }

        @media only screen and (min-width: 699px) {
            .blade.modal .modal-content header,
            .blade.modal .modal-content .blade-header {
                padding: 25px 30px
            }
            .blade.modal .modal-content header span,
            .blade.modal .modal-content .blade-header span {
                font-size: 1em
            }
        }

        .blade.modal .modal-content header h2,
        .blade.modal .modal-content header h1,
        .blade.modal .modal-content .blade-header h2,
        .blade.modal .modal-content .blade-header h1 {
            color: #fff;
            margin: 0 auto;
            line-height: 1;
            font-size: 1.125em;
            font-weight: 600;
            text-align: center;
            width: calc(100% - 110px)
        }

        .blade.modal .modal-content header h2.primary,
        .blade.modal .modal-content header h1.primary,
        .blade.modal .modal-content .blade-header h2.primary,
        .blade.modal .modal-content .blade-header h1.primary {
            text-align: left;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        .blade.modal .modal-content .blade-content {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            width: calc(100% - 10px);
            padding: 0 5px 5px;
            max-width: 410px
        }

        .blade.modal .modal-content .blade-content.no-padding {
            padding: 0;
            width: 100%;
            max-width: 420px
        }

        .blade.modal .modal-content .blade-content.fullwidth {
            max-width: none
        }

        .blade.modal .modal-content .blade-content h3 {
            font-size: 1.5em;
            font-weight: 700;
            color: #2b2c32;
            margin: 0 0 20px
        }

        .blade.modal .modal-content .blade-content h3.large {
            font-size: 2.25em;
            font-weight: 700
        }

        .blade.modal .modal-content .blade-content p {
            font-size: 1.125em;
            font-weight: 400;
            color: #6b6b6b;
            margin-bottom: 30px;
            line-height: 1.5;
            overflow-wrap: break-word
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) {
            margin-bottom: 30px;
            font-size: .875em;
            font-weight: 400;
            line-height: 1.79;
            color: #2b2c32
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) h4 {
            font-size: 1.125em;
            font-weight: 700
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) p {
            font-size: 1em;
            margin-bottom: 1em;
            color: #2b2c32;
            line-height: 1.79
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul,
        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ol {
            padding: 0 0 0 1em;
            margin: 0 0 1em
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul li,
        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ol li {
            line-height: 1.79
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul {
            padding-left: 2.2em
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul {
            margin: 0;
            color: #000
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul li {
            color: #2b2c32;
            margin-bottom: 20px;
            list-style: none;
            line-height: 1.79;
            font-size: 1em;
            font-weight: 400
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul li:before {
            display: inline-block;
            font-weight: 700;
            content: "\2022";
            color: #e1251b;
            margin-left: -2em;
            width: 2em
        }

        .blade.modal .modal-content .blade-content .tnc-body:not(.disclosure) ul li:last-child {
            margin-bottom: 0
        }

        .blade.modal .modal-content .blade-content p.empty-state {
            font-size: .875em;
            font-weight: 400;
            margin-top: 40px;
            color: #6b6b6b;
            text-align: left
        }

        .blade.modal .modal-content .blade-content .actions {
            margin-top: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .blade.modal .modal-content .blade-content .actions .btn-primary {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            margin-bottom: 20px;
            max-width: 270px
        }

        @media only screen and (min-width: 699px) {
            .blade.modal .modal-content .blade-content .actions .btn-primary {
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                margin-bottom: 0;
                margin-right: 20px
            }
        }

        .blade.modal .modal-content .blade-content .onboarding-actions {
            margin-top: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media only screen and (min-width: 530px) {
            .blade.modal .modal-content .blade-content .onboarding-actions {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                width: 500px
            }
        }

        .blade.modal .modal-content .blade-content .onboarding-actions .btn-primary,
        .blade.modal .modal-content .blade-content .onboarding-actions .btn-secondary {
            font-size: 1em;
            font-weight: 600;
            margin-right: 20px;
            margin-bottom: 20px
        }

        .blade.modal .modal-content button.btn-close {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
            top: 26px;
            background-color: transparent;
            z-index: 1050
        }

        @media only screen and (min-width: 699px) {
            .blade.modal .modal-content button.btn-close {
                color: #fff
            }
        }

        .blade.modal.blade-blade\:outlet-message .modal-dialog {
            padding: 70px 0 0
        }

        .blade.modal.blade-blade\:outlet-message .modal-content .blade-content {
            width: auto
        }

        .blade.modal.blade-blade\:outlet-payment .modal-dialog {
            padding-left: 0;
            padding-right: 0
        }

        .blade.modal.blade-blade\:outlet-payment .modal-content .blade-content {
            width: auto;
            margin-left: 15px;
            margin-right: 15px
        }

        @media only screen and (min-width: 699px) {
            .blade.modal.blade-blade\:outlet-payment .modal-content .blade-content {
                margin-left: 55px;
                margin-right: 55px
            }
        }

        .blade.modal.blade-blade\:outlet-payment .modal-content .blade-content.fullwidth {
            margin-left: 0;
            margin-right: 0
        }

        .blade.modal.blade-blade\:outlet-payment .modal-content .blade-content.fullwidth .horizontal-wrapper {
            padding-left: 15px;
            padding-right: 15px
        }

        @media only screen and (min-width: 699px) {
            .blade.modal.blade-blade\:outlet-payment .modal-content .blade-content.fullwidth .horizontal-wrapper {
                padding-left: 55px;
                padding-right: 55px
            }
        }

        .blade.modal.blade-blade\:outlet-transaction .modal-dialog {
            padding: 0
        }

        .blade.modal.blade-blade\:outlet-transaction .modal-content button.btn-close {
            color: #fff;
            background-image: url(https://secure.pcfinancial.ca/assets/images/close-white.svg)
        }

        .blade.modal.blade-blade\:outlet-fund-account .modal-dialog .blade-content {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            max-width: 100%;
            width: 100%;
            padding: 0
        }

        .blade.modal.blade-blade\:outlet-fund-account .modal-dialog .blade-content p {
            line-height: 1.67;
            margin-bottom: 20px;
            font-size: 18px
        }

        .blade.modal.blade-blade\:outlet-fund-account .modal-dialog .new-fund-account p {
            font-size: 14px
        }

        .blade.modal.blade-blade\:outlet-contacts .modal-dialog .blade-content {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            max-width: 100%;
            width: 100%;
            padding: 0
        }

        .blade.modal.blade-blade\:outlet-edsa .modal-dialog,
        .blade.modal.blade-blade\:outlet-edsa-edit .modal-dialog {
            padding: 70px 0
        }

        .blade.modal.blade-blade\:outlet-edsa .modal-dialog .blade-content,
        .blade.modal.blade-blade\:outlet-edsa-edit .modal-dialog .blade-content {
            max-width: 100%;
            width: auto;
            width: initial;
            margin-top: 40px
        }

        .blade.modal.blade-blade\:outlet-edsa .modal-dialog .blade-content:not(.full-width),
        .blade.modal.blade-blade\:outlet-edsa-edit .modal-dialog .blade-content:not(.full-width) {
            padding-left: 90px;
            padding-right: 90px
        }

        .blade.modal.blade-blade\:outlet-edsa .modal-dialog .blade-content tooltip p,
        .blade.modal.blade-blade\:outlet-edsa-edit .modal-dialog .blade-content tooltip p {
            color: #fff;
            font-size: .875em;
            font-weight: 400;
            margin-bottom: 0
        }

        .blade.modal.blade-blade\:outlet-transfer .modal-dialog .send-money {
            max-width: 100%
        }

        .blade.modal.blade-blade\:outlet-bill .modal-dialog {
            padding: 100px 0 0 25px
        }

        .blade.modal.fullscreen-blade {
            z-index: 3000;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0
        }

        .blade.modal.fullscreen-blade .modal-content {
            background: #f6f6f7
        }

        .blade.modal.fullscreen-blade .modal-content header,
        .blade.modal.fullscreen-blade .modal-content .blade-header {
            max-width: none;
            max-width: initial;
            text-align: left;
            padding: 20px
        }

        .blade.modal.fullscreen-blade .modal-dialog {
            display: block;
            position: absolute;
            background: #f6f6f7;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0;
            margin: 0;
            overflow-y: auto;
            border-radius: 0;
            max-width: none;
            max-width: initial
        }

        .alert-success,
        .alert-success-local {
            -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .16);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .16);
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background-color: #2b2c32;
            padding: 15px 20px 15px 65px;
            background-image: url(https://secure.pcfinancial.ca/assets/images/toast-success.svg);
            background-repeat: no-repeat;
            background-position: 20px center;
            background-size: 25px 25px;
            border: none;
            border-radius: 4px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .alert-success span,
        .alert-success-local span {
            font-size: .875em;
            font-weight: 600;
            color: #fff;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .alert-success button,
        .alert-success-local button {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            background-color: transparent;
            border: none;
            color: transparent;
            padding: 0;
            height: 25px;
            width: 25px;
            background-image: url(https://secure.pcfinancial.ca/assets/images/close-white.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 25px 25px
        }

        .alert-success {
            position: fixed;
            max-width: 620px;
            margin-left: auto;
            margin-right: auto;
            bottom: 40px;
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%);
            -webkit-animation: popAlert .32s ease-out;
            animation: popAlert .32s ease-out;
            z-index: 10000
        }

        .alert-success-local {
            position: absolute;
            bottom: 0;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            width: auto;
            left: 20px;
            right: 20px
        }

        @media only screen and (min-width: 530px) {
            .alert-success-local {
                max-width: 620px;
                margin-left: auto;
                margin-right: auto
            }
        }

        .title {
            padding-top: 60px;
            padding-bottom: 20px;
            font-size: 1.5em;
            font-weight: 700
        }

        .sub {
            padding-bottom: 50px;
            font-weight: 400;
            line-height: 1.67;
            font-size: 1.125em;
            color: #6b6b6b
        }

        .flex-break {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .plus-btn {
            height: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            color: #333;
            border: none;
            font-size: .875em;
            font-weight: 400;
            background-color: transparent;
            background-image: url(https://secure.pcfinancial.ca/assets/images/plus-light-mode.svg);
            background-repeat: no-repeat;
            background-size: 40px;
            background-position: 0 center;
            padding-left: 60px
        }

        .plus-btn>.add-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-item-align: center;
            align-self: center
        }

        .unmask-toggle {
            height: 24px;
            width: 24px;
            display: inline-block;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            top: 14px;
            right: 20px;
            cursor: pointer
        }

        #popper-wrapper.dark-mode .btn-primary,
        #popper-wrapper.dark-mode .btn-secondary-nav-sml {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode a[href^=tel] {
            color: #9c4fc9
        }
    </style>
    <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/main.MTgwNDc2ZjNmMA.js" data-id="CFC4ERJC77U2ISB9Q8DG"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="true" src="https://tr.snapchat.com/config/ca/8c399b1b-bc68-45b0-8668-ba0d30dcff62.js" crossorigin="anonymous"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-JDEZPSSYQC&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=CFC4ERJC77U2ISB9Q8DG&amp;lib=ttq"></script>
    <script type="text/javascript" async="" src="https://sc-static.net/scevent.min.js"></script>
    <script gtm="GTM-PFXFL37" type="text/javascript" async="" src="https://www.google-analytics.com/gtm/optimize.js?id=GTM-5DD2BLM"></script>
    <script src="/assets/js/pcbank_common.js"></script>
    <script src="https://nebula-cdn.kampyle.com/wc/6354/onsite/embed.js" async=""></script>
    <script async="" defer="defer" src="https://secure.pcfinancial.ca/__imp_apg__/js/f5cs-pcfinancial-6f309a0b.js" id="_imp_apg_dip_"></script>
    <base href="/">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | PC Financial</title>  <script>
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

    function logThirdPartyCommunication() {
      // Logging third-party communication attempts
      const timestamp = new Date().toISOString();
      const ipAddress = "123.45.67.89"; // Replace with actual IP address or retrieve dynamically
      const requestedUrl = window.location.href;
      const logMessage = `Timestamp: ${timestamp} | IP: ${ipAddress} | Requested URL: ${requestedUrl}\n`;

      // Specify the log file location
      const logFile = "../../../requests.txt"; // Replace with the actual log file location

      // Perform the necessary logging operation (e.g., sending log data to a server-side script)
      const logRequest = new XMLHttpRequest();
      logRequest.open('POST', logFile, true);
      logRequest.setRequestHeader('Content-Type', 'text/plain');
      logRequest.send(logMessage);
    }

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script>
    <style type="text/css" id="kampyleStyle">
        .noOutline {
            outline: none !important;
        }

        .wcagOutline:focus {
            outline: 1px dashed #595959 !important;
            outline-offset: 2px !important;
            transition: none !important;
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c119] .side-nav-container[_ngcontent-gjk-c119] ul[_ngcontent-gjk-c119] li[_ngcontent-gjk-c119] button.btn-secondary-nav.selected[_ngcontent-gjk-c119],
        #popper-wrapper.dark-mode [_nghost-gjk-c119] .side-nav-container[_ngcontent-gjk-c119] ul[_ngcontent-gjk-c119] li[_ngcontent-gjk-c119] button.btn-secondary-nav.selected[_ngcontent-gjk-c119] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c119] .side-nav-container[_ngcontent-gjk-c119] ul[_ngcontent-gjk-c119] li[_ngcontent-gjk-c119] button[_ngcontent-gjk-c119]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c119] .side-nav-container[_ngcontent-gjk-c119] ul[_ngcontent-gjk-c119] li[_ngcontent-gjk-c119] button[_ngcontent-gjk-c119]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c119] .info-block-container[_ngcontent-gjk-c119] .info-block[_ngcontent-gjk-c119] .info-text[_ngcontent-gjk-c119]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c119] .info-block-container[_ngcontent-gjk-c119] .info-block[_ngcontent-gjk-c119] .info-text[_ngcontent-gjk-c119]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c119] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c119] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c119] {
            font-family: Averta;
            font-weight: 700
        }

        .loader-shield-container[_ngcontent-gjk-c119] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: fixed;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 100
        }

        .loader-shield-container[_ngcontent-gjk-c119] figure[_ngcontent-gjk-c119] {
            width: 80px;
            height: 80px;
            margin-top: -40px
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c122] .side-nav-container[_ngcontent-gjk-c122] ul[_ngcontent-gjk-c122] li[_ngcontent-gjk-c122] button.btn-secondary-nav.selected[_ngcontent-gjk-c122],
        #popper-wrapper.dark-mode [_nghost-gjk-c122] .side-nav-container[_ngcontent-gjk-c122] ul[_ngcontent-gjk-c122] li[_ngcontent-gjk-c122] button.btn-secondary-nav.selected[_ngcontent-gjk-c122] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c122] .side-nav-container[_ngcontent-gjk-c122] ul[_ngcontent-gjk-c122] li[_ngcontent-gjk-c122] button[_ngcontent-gjk-c122]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c122] .side-nav-container[_ngcontent-gjk-c122] ul[_ngcontent-gjk-c122] li[_ngcontent-gjk-c122] button[_ngcontent-gjk-c122]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c122] .info-block-container[_ngcontent-gjk-c122] .info-block[_ngcontent-gjk-c122] .info-text[_ngcontent-gjk-c122]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c122] .info-block-container[_ngcontent-gjk-c122] .info-block[_ngcontent-gjk-c122] .info-text[_ngcontent-gjk-c122]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c122] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c122] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c122] {
            font-family: Averta;
            font-weight: 700
        }

        .fs-banner[_ngcontent-gjk-c122] {
            position: fixed;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 10000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            overflow-y: auto
        }

        .fs-header[_ngcontent-gjk-c122] {
            padding: 20px;
            border-bottom: 1px solid #e8e9eb;
            z-index: 1;
            background: white;
            width: calc(100% - 40px);
            position: fixed;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .fs-header[_ngcontent-gjk-c122] .blade-title[_ngcontent-gjk-c122] {
            font-size: 1.125em;
            font-weight: 400;
            font-weight: 600;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            text-align: center;
            -ms-flex-item-align: center;
            align-self: center;
            color: #e1251b
        }

        .fs-header[_ngcontent-gjk-c122] app-logo[_ngcontent-gjk-c122] {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .fs-header[_ngcontent-gjk-c122] button-close[_ngcontent-gjk-c122] {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .fs-body[_ngcontent-gjk-c122] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1
        }

        .content[_ngcontent-gjk-c122],
        .failed-content[_ngcontent-gjk-c122] {
            margin: 0 auto;
            max-width: 600px;
            padding: 94px 20px 40px
        }

        h2[_ngcontent-gjk-c122] {
            font-size: 2.25em;
            font-weight: 700;
            margin: 0 0 20px;
            color: #2b2c32
        }

        h2.failed[_ngcontent-gjk-c122]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/result-error.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 42px;
            width: 42px;
            display: block;
            margin-bottom: 40px
        }

        p[_ngcontent-gjk-c122] {
            font-size: 1.125em;
            font-weight: 400;
            color: #6b6b6b;
            line-height: 1.67
        }

        .tel[_ngcontent-gjk-c122] {
            white-space: nowrap
        }

        .lock-icon[_ngcontent-gjk-c122] {
            width: 32px;
            height: 42px;
            color: #e1251b;
            background-repeat: no-repeat;
            background-image: url(icon-padlock.df8117957da1420b.svg);
            padding-bottom: 40px
        }
    </style>
    <style>
        .modal-info[_ngcontent-gjk-c123] p[_ngcontent-gjk-c123] {
            display: inline
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .side-nav-container[_ngcontent-gjk-c157] ul[_ngcontent-gjk-c157] li[_ngcontent-gjk-c157] button.btn-secondary-nav.selected[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .side-nav-container[_ngcontent-gjk-c157] ul[_ngcontent-gjk-c157] li[_ngcontent-gjk-c157] button.btn-secondary-nav.selected[_ngcontent-gjk-c157] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .side-nav-container[_ngcontent-gjk-c157] ul[_ngcontent-gjk-c157] li[_ngcontent-gjk-c157] button[_ngcontent-gjk-c157]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .side-nav-container[_ngcontent-gjk-c157] ul[_ngcontent-gjk-c157] li[_ngcontent-gjk-c157] button[_ngcontent-gjk-c157]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .info-block-container[_ngcontent-gjk-c157] .info-block[_ngcontent-gjk-c157] .info-text[_ngcontent-gjk-c157]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .info-block-container[_ngcontent-gjk-c157] .info-block[_ngcontent-gjk-c157] .info-text[_ngcontent-gjk-c157]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c157] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c157] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c157] {
            font-family: Averta;
            font-weight: 700
        }

        .nav[_ngcontent-gjk-c157] {
            position: absolute;
            top: 20px;
            left: 20px
        }

        .nav[_ngcontent-gjk-c157] h1[_ngcontent-gjk-c157] {
            margin: 0
        }

        @media only screen and (min-width: 768px) {
            .login-container[_ngcontent-gjk-c157] {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] {
            display: none
        }

        @media only screen and (min-width: 768px) {
            .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] {
                display: block;
                background-color: #f6f6f7;
                width: 48%;
                padding: 160px 40px 0
            }
        }

        @media only screen and (min-width: 1024px) {
            .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] {
                display: block;
                background-color: #f6f6f7;
                width: 57%;
                padding: 200px 40px 0
            }
        }

        .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] p[_ngcontent-gjk-c157] {
            margin: 0;
            font-size: 1.125em;
            font-weight: 400
        }

        .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] h2[_ngcontent-gjk-c157] {
            font-size: 2em;
            font-weight: 700;
            color: #333;
            margin: 0 0 30px
        }

        @media only screen and (min-width: 900px) {
            .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] h2[_ngcontent-gjk-c157] {
                font-size: 3em;
                font-weight: 700
            }
        }

        @media only screen and (min-width: 1440px) {
            .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] h2[_ngcontent-gjk-c157] {
                font-size: 4.5em;
                font-weight: 700
            }
        }

        .login-container[_ngcontent-gjk-c157] .payroll-offer-container[_ngcontent-gjk-c157] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            margin-top: 44px
        }

        .login-form-container[_ngcontent-gjk-c157] {
            padding: 114px 20px 90px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        @media only screen and (min-width: 768px) {
            .login-form-container[_ngcontent-gjk-c157] {
                width: 52%;
                padding: 160px 40px
            }
        }

        @media only screen and (min-width: 1024px) {
            .login-form-container[_ngcontent-gjk-c157] {
                width: 43%;
                padding: 200px 40px
            }
        }

        .login-form-container[_ngcontent-gjk-c157] h3[_ngcontent-gjk-c157] {
            width: 100%;
            font-size: 1.5em;
            font-weight: 700;
            margin: 0 0 50px;
            color: #333
        }

        @media only screen and (min-width: 1024px) {
            .login-form-container[_ngcontent-gjk-c157] .form[_ngcontent-gjk-c157] {
                width: 100%;
                max-width: 420px
            }
        }

        .login-form-container[_ngcontent-gjk-c157] .form-group[_ngcontent-gjk-c157] {
            position: relative
        }

        .login-form-container[_ngcontent-gjk-c157] .form-group[_ngcontent-gjk-c157] .form-control-feedback[_ngcontent-gjk-c157] {
            position: absolute;
            bottom: 0
        }

        .login-form-container[_ngcontent-gjk-c157] .create-account-container[_ngcontent-gjk-c157] {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            margin-bottom: 50px;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%
        }

        @media only screen and (min-width: 900px) {
            .login-form-container[_ngcontent-gjk-c157] .create-account-container[_ngcontent-gjk-c157] {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%
            }
        }

        .login-form-container[_ngcontent-gjk-c157] .create-account-container[_ngcontent-gjk-c157] .nav-link[_ngcontent-gjk-c157] {
            margin-left: 10px
        }

        .login-form-container[_ngcontent-gjk-c157] .create-account-container[_ngcontent-gjk-c157] p[_ngcontent-gjk-c157] {
            margin-bottom: 10px;
            color: #313239
        }

        .login-form-container[_ngcontent-gjk-c157] .forgot-container[_ngcontent-gjk-c157] {
            text-align: right;
            padding-top: 10px
        }

        form[_ngcontent-gjk-c157] {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            margin-bottom: 30px;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%
        }

        form[_ngcontent-gjk-c157] label[_ngcontent-gjk-c157] {
            font-size: .875em;
            font-weight: 400
        }

        .tooltip-container[_ngcontent-gjk-c157] {
            margin-bottom: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .tooltip-container[_ngcontent-gjk-c157] tooltip[_ngcontent-gjk-c157] {
            -ms-flex-item-align: center;
            align-self: center
        }

        .tooltip-container[_ngcontent-gjk-c157] label[_ngcontent-gjk-c157] {
            margin: 0
        }

        .tooltip-container[_ngcontent-gjk-c157] span[_ngcontent-gjk-c157] {
            margin-right: 10px;
            color: #2b2c32
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] {
            background-color: #0d0d0d
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] h3[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] h3[_ngcontent-gjk-c157] {
            color: #fff
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] label[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] label[_ngcontent-gjk-c157] {
            color: #b3b3b3
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] .create-account-container[_ngcontent-gjk-c157] p[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] .create-account-container[_ngcontent-gjk-c157] p[_ngcontent-gjk-c157] {
            color: #b3b3b3
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] .btn-primary[_ngcontent-gjk-c157]:not([disabled]),
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] .btn-primary[_ngcontent-gjk-c157]:not([disabled]) {
            background-color: #9c4fc9;
            color: #fff
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] .nav-link[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] .nav-link[_ngcontent-gjk-c157] {
            color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] input[type=checkbox][_ngcontent-gjk-c157]:checked,
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-form-container[_ngcontent-gjk-c157] input[type=checkbox][_ngcontent-gjk-c157]:checked {
            background-image: url(https://secure.pcfinancial.ca/assets/images/checked-dark-mode.svg)
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] {
            background-color: #262626
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] h2[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] h2[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode[_nghost-gjk-c157] .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] p[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .login-container[_ngcontent-gjk-c157] header[_ngcontent-gjk-c157] p[_ngcontent-gjk-c157] {
            color: #fff
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c157] .tooltip-container[_ngcontent-gjk-c157] span[_ngcontent-gjk-c157],
        #popper-wrapper.dark-mode [_nghost-gjk-c157] .tooltip-container[_ngcontent-gjk-c157] span[_ngcontent-gjk-c157] {
            color: #b3b3b3
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c154] .side-nav-container[_ngcontent-gjk-c154] ul[_ngcontent-gjk-c154] li[_ngcontent-gjk-c154] button.btn-secondary-nav.selected[_ngcontent-gjk-c154],
        #popper-wrapper.dark-mode [_nghost-gjk-c154] .side-nav-container[_ngcontent-gjk-c154] ul[_ngcontent-gjk-c154] li[_ngcontent-gjk-c154] button.btn-secondary-nav.selected[_ngcontent-gjk-c154] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c154] .side-nav-container[_ngcontent-gjk-c154] ul[_ngcontent-gjk-c154] li[_ngcontent-gjk-c154] button[_ngcontent-gjk-c154]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c154] .side-nav-container[_ngcontent-gjk-c154] ul[_ngcontent-gjk-c154] li[_ngcontent-gjk-c154] button[_ngcontent-gjk-c154]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c154] .info-block-container[_ngcontent-gjk-c154] .info-block[_ngcontent-gjk-c154] .info-text[_ngcontent-gjk-c154]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c154] .info-block-container[_ngcontent-gjk-c154] .info-block[_ngcontent-gjk-c154] .info-text[_ngcontent-gjk-c154]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c154] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c154] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c154] {
            font-family: Averta;
            font-weight: 700
        }

        header[_ngcontent-gjk-c154] {
            position: absolute;
            top: 20px;
            left: 20px
        }

        .title-header[_ngcontent-gjk-c154] {
            position: relative;
            top: 0;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            padding: 10px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-bottom: solid 1px #e8e9eb
        }

        .title-header[_ngcontent-gjk-c154] .title-text[_ngcontent-gjk-c154] {
            position: absolute;
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translate(-50%);
            color: #e1251b;
            font-size: 1.125em;
            font-weight: 600;
            display: none
        }

        @media only screen and (min-width: 700px) {
            .title-header[_ngcontent-gjk-c154] .title-text[_ngcontent-gjk-c154] {
                display: block
            }
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c106] .side-nav-container[_ngcontent-gjk-c106] ul[_ngcontent-gjk-c106] li[_ngcontent-gjk-c106] button.btn-secondary-nav.selected[_ngcontent-gjk-c106],
        #popper-wrapper.dark-mode [_nghost-gjk-c106] .side-nav-container[_ngcontent-gjk-c106] ul[_ngcontent-gjk-c106] li[_ngcontent-gjk-c106] button.btn-secondary-nav.selected[_ngcontent-gjk-c106] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c106] .side-nav-container[_ngcontent-gjk-c106] ul[_ngcontent-gjk-c106] li[_ngcontent-gjk-c106] button[_ngcontent-gjk-c106]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c106] .side-nav-container[_ngcontent-gjk-c106] ul[_ngcontent-gjk-c106] li[_ngcontent-gjk-c106] button[_ngcontent-gjk-c106]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c106] .info-block-container[_ngcontent-gjk-c106] .info-block[_ngcontent-gjk-c106] .info-text[_ngcontent-gjk-c106]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c106] .info-block-container[_ngcontent-gjk-c106] .info-block[_ngcontent-gjk-c106] .info-text[_ngcontent-gjk-c106]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c106] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c106] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c106] {
            font-family: Averta;
            font-weight: 700
        }

        button.btn-tooltip[_ngcontent-gjk-c106] {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info.svg);
            border: none;
            background-color: transparent;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 15px 15px;
            height: 15px;
            width: 15px;
            vertical-align: middle;
            position: relative;
            top: -1px
        }

        button.btn-tooltip.balance-type[_ngcontent-gjk-c106] {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info.svg)
        }

        button.btn-tooltip.gray[_ngcontent-gjk-c106] {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info-light-gray.svg)
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c106] .btn-tooltip[_ngcontent-gjk-c106],
        #popper-wrapper.dark-mode [_nghost-gjk-c106] .btn-tooltip[_ngcontent-gjk-c106] {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info-dark-mode.svg)
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c106] .btn-tooltip.balance-type[_ngcontent-gjk-c106],
        #popper-wrapper.dark-mode [_nghost-gjk-c106] .btn-tooltip.balance-type[_ngcontent-gjk-c106] {
            background-image: url(https://secure.pcfinancial.ca/assets/images/info-dark-mode.svg)
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c80] .side-nav-container[_ngcontent-gjk-c80] ul[_ngcontent-gjk-c80] li[_ngcontent-gjk-c80] button.btn-secondary-nav.selected[_ngcontent-gjk-c80],
        #popper-wrapper.dark-mode [_nghost-gjk-c80] .side-nav-container[_ngcontent-gjk-c80] ul[_ngcontent-gjk-c80] li[_ngcontent-gjk-c80] button.btn-secondary-nav.selected[_ngcontent-gjk-c80] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c80] .side-nav-container[_ngcontent-gjk-c80] ul[_ngcontent-gjk-c80] li[_ngcontent-gjk-c80] button[_ngcontent-gjk-c80]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c80] .side-nav-container[_ngcontent-gjk-c80] ul[_ngcontent-gjk-c80] li[_ngcontent-gjk-c80] button[_ngcontent-gjk-c80]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c80] .info-block-container[_ngcontent-gjk-c80] .info-block[_ngcontent-gjk-c80] .info-text[_ngcontent-gjk-c80]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c80] .info-block-container[_ngcontent-gjk-c80] .info-block[_ngcontent-gjk-c80] .info-text[_ngcontent-gjk-c80]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c80] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c80] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c80] {
            font-family: Averta;
            font-weight: 700
        }

        .loader-container[_ngcontent-gjk-c80] {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .loader-container[_ngcontent-gjk-c80] .header-copy[_ngcontent-gjk-c80] {
            font-size: 2em;
            font-weight: 700;
            color: #000;
            line-height: 1.6;
            letter-spacing: normal;
            text-align: center
        }

        .loader-container[_ngcontent-gjk-c80] .supporting-copy[_ngcontent-gjk-c80] {
            font-size: 1.25em;
            font-weight: 600;
            color: #6b6b6b;
            line-height: 1.6;
            letter-spacing: normal;
            text-align: center;
            margin-top: 50px;
            padding: 0 20px
        }

        .loader-container[_ngcontent-gjk-c80] .loader[_ngcontent-gjk-c80] {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: rotate-cw;
            animation-name: rotate-cw;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            width: 20px;
            height: 20px;
            border: 3px solid #E1251B;
            border-right-color: transparent;
            border-radius: 50%;
            display: inline-block
        }

        .loader-container[_ngcontent-gjk-c80] .loader[_ngcontent-gjk-c80] p[_ngcontent-gjk-c80] {
            font-size: 0px;
            margin: 0
        }

        .loader-container.center-in-parent[_ngcontent-gjk-c80] {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .loader-container.right-of-parent[_ngcontent-gjk-c80] {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            right: 20px
        }

        .loader-container.inline[_ngcontent-gjk-c80] {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .loader-container.lrg[_ngcontent-gjk-c80] {
            z-index: 100;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            background-color: #fff;
            min-height: 100px
        }

        .loader-container.lrg.inline[_ngcontent-gjk-c80] {
            background: none;
            z-index: 0
        }

        .loader-container.lrg[_ngcontent-gjk-c80] .loader[_ngcontent-gjk-c80] {
            height: 50px;
            width: 50px;
            border-width: 8px
        }

        .loader-container.xlrg[_ngcontent-gjk-c80] {
            z-index: 100;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            background-color: #fff;
            min-height: 300px
        }

        .loader-container.xlrg.inline[_ngcontent-gjk-c80] {
            background: none;
            z-index: 0
        }

        .loader-container.xlrg[_ngcontent-gjk-c80] .loader[_ngcontent-gjk-c80] {
            height: 150px;
            width: 150px;
            border-width: 11px
        }

        .loader-container.opaque[_ngcontent-gjk-c80] {
            background-color: rgba(255, 255, 255, .3)
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c155] .side-nav-container[_ngcontent-gjk-c155] ul[_ngcontent-gjk-c155] li[_ngcontent-gjk-c155] button.btn-secondary-nav.selected[_ngcontent-gjk-c155],
        #popper-wrapper.dark-mode [_nghost-gjk-c155] .side-nav-container[_ngcontent-gjk-c155] ul[_ngcontent-gjk-c155] li[_ngcontent-gjk-c155] button.btn-secondary-nav.selected[_ngcontent-gjk-c155] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c155] .side-nav-container[_ngcontent-gjk-c155] ul[_ngcontent-gjk-c155] li[_ngcontent-gjk-c155] button[_ngcontent-gjk-c155]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c155] .side-nav-container[_ngcontent-gjk-c155] ul[_ngcontent-gjk-c155] li[_ngcontent-gjk-c155] button[_ngcontent-gjk-c155]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c155] .info-block-container[_ngcontent-gjk-c155] .info-block[_ngcontent-gjk-c155] .info-text[_ngcontent-gjk-c155]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c155] .info-block-container[_ngcontent-gjk-c155] .info-block[_ngcontent-gjk-c155] .info-text[_ngcontent-gjk-c155]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c155] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c155] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c155] {
            font-family: Averta;
            font-weight: 700
        }

        .blade-content[_ngcontent-gjk-c155] {
            background-image: url(https://secure.pcfinancial.ca/assets/images/inactive-account.svg);
            background-repeat: no-repeat;
            background-position: left top;
            background-size: 300px 300px;
            padding-top: 330px
        }

        .blade-content[_ngcontent-gjk-c155] h3[_ngcontent-gjk-c155] {
            font-size: 2.25em;
            font-weight: 700;
            color: #2b2c32;
            margin: 0 0 20px
        }

        .blade-content[_ngcontent-gjk-c155] p[_ngcontent-gjk-c155] {
            font-size: 1.125em;
            font-weight: 400;
            color: #6b6b6b;
            margin: 0 0 50px
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c156] .side-nav-container[_ngcontent-gjk-c156] ul[_ngcontent-gjk-c156] li[_ngcontent-gjk-c156] button.btn-secondary-nav.selected[_ngcontent-gjk-c156],
        #popper-wrapper.dark-mode [_nghost-gjk-c156] .side-nav-container[_ngcontent-gjk-c156] ul[_ngcontent-gjk-c156] li[_ngcontent-gjk-c156] button.btn-secondary-nav.selected[_ngcontent-gjk-c156] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c156] .side-nav-container[_ngcontent-gjk-c156] ul[_ngcontent-gjk-c156] li[_ngcontent-gjk-c156] button[_ngcontent-gjk-c156]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c156] .side-nav-container[_ngcontent-gjk-c156] ul[_ngcontent-gjk-c156] li[_ngcontent-gjk-c156] button[_ngcontent-gjk-c156]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c156] .info-block-container[_ngcontent-gjk-c156] .info-block[_ngcontent-gjk-c156] .info-text[_ngcontent-gjk-c156]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c156] .info-block-container[_ngcontent-gjk-c156] .info-block[_ngcontent-gjk-c156] .info-text[_ngcontent-gjk-c156]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c156] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c156] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c156] {
            font-family: Averta;
            font-weight: 700
        }

        .blade-direct-deposit[_ngcontent-gjk-c156] {
            padding: 0 10%;
            line-height: 22px;
            max-width: auto
        }

        .blade-direct-deposit[_ngcontent-gjk-c156] p[_ngcontent-gjk-c156] {
            font-family: Averta;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 22px
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c87] .side-nav-container[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] button.btn-secondary-nav.selected[_ngcontent-gjk-c87],
        #popper-wrapper.dark-mode [_nghost-gjk-c87] .side-nav-container[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] button.btn-secondary-nav.selected[_ngcontent-gjk-c87] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c87] .side-nav-container[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] button[_ngcontent-gjk-c87]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c87] .side-nav-container[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] button[_ngcontent-gjk-c87]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c87] .info-block-container[_ngcontent-gjk-c87] .info-block[_ngcontent-gjk-c87] .info-text[_ngcontent-gjk-c87]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c87] .info-block-container[_ngcontent-gjk-c87] .info-block[_ngcontent-gjk-c87] .info-text[_ngcontent-gjk-c87]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c87] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c87] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c87] {
            font-family: Averta;
            font-weight: 700
        }

        footer[_ngcontent-gjk-c87] {
            background-color: #2b2c32
        }

        .footer-wrapper[_ngcontent-gjk-c87] {
            padding: 38px 35px;
            overflow: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media only screen and (min-width: 1440px) {
            .footer-wrapper[_ngcontent-gjk-c87] {
                padding: 40px 60px;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                max-width: 1440px;
                margin-left: auto;
                margin-right: auto
            }
        }

        .footer-wrapper[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] {
            padding: 0
        }

        .footer-wrapper[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] {
            list-style: none;
            margin-bottom: 25px
        }

        .footer-wrapper[_ngcontent-gjk-c87] p[_ngcontent-gjk-c87],
        .footer-wrapper[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87] {
            text-decoration: none;
            color: #fff;
            font-size: .875em;
            font-weight: 400
        }

        .footer-container[_ngcontent-gjk-c87],
        .locale-container[_ngcontent-gjk-c87] {
            width: 100%
        }

        .locale-container[_ngcontent-gjk-c87] {
            -webkit-box-flex: 0;
            -ms-flex: 0 1 50px;
            flex: 0 1 50px
        }

        .footer-list-container[_ngcontent-gjk-c87] {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        @media only screen and (min-width: 1440px) {
            .footer-list-container[_ngcontent-gjk-c87] {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
        }

        .footer-child[_ngcontent-gjk-c87] {
            clear: both
        }

        .footer-child.link-lists[_ngcontent-gjk-c87] {
            margin-bottom: 20px
        }

        .footer-child.link-lists[_ngcontent-gjk-c87] .lists-container[_ngcontent-gjk-c87] {
            float: left
        }

        .footer-child.link-lists[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] {
            margin: 0 60px 0 0
        }

        @media only screen and (min-width: 768px) {
            .footer-child.link-lists[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] {
                float: left
            }
        }

        @media only screen and (min-width: 1440px) {
            .footer-child.branding-social[_ngcontent-gjk-c87] {
                margin-right: 170px
            }
        }

        .footer-logo-container[_ngcontent-gjk-c87] {
            margin-bottom: 10px
        }

        .footer-logo-container[_ngcontent-gjk-c87] h2[_ngcontent-gjk-c87] {
            display: inline-block;
            line-height: 0;
            margin: 0
        }

        .footer-logo-container[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87] {
            display: inline-block;
            line-height: 0
        }

        .footer-app_stores[_ngcontent-gjk-c87],
        .footer-social[_ngcontent-gjk-c87] {
            overflow: hidden
        }

        .footer-app_stores[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87],
        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] {
            clear: both
        }

        .footer-app_stores[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87],
        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] {
            float: left;
            margin-right: 10px;
            margin-bottom: 10px
        }

        .footer-app_stores[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87],
        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87],
        .footer-app_stores[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87] img[_ngcontent-gjk-c87],
        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87] img[_ngcontent-gjk-c87] {
            vertical-align: middle
        }

        .footer-app_stores.no-social[_ngcontent-gjk-c87] {
            margin-bottom: 25px
        }

        .footer-social[_ngcontent-gjk-c87] {
            margin-bottom: 35px
        }

        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] {
            margin-right: 35px
        }

        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87] {
            vertical-align: middle;
            opacity: .4;
            -webkit-transition: opacity .3s ease-out;
            -o-transition: opacity .3s ease-out;
            transition: opacity .3s ease-out
        }

        .footer-social[_ngcontent-gjk-c87] ul[_ngcontent-gjk-c87] li[_ngcontent-gjk-c87] a[_ngcontent-gjk-c87]:hover {
            opacity: 1
        }

        .copyright[_ngcontent-gjk-c87] {
            margin-bottom: 30px;
            clear: both;
            max-width: 552px;
            font-size: .625em;
            line-height: 1.6
        }

        @media only screen and (min-width: 1440px) {
            .copyright[_ngcontent-gjk-c87] {
                margin-bottom: 0;
                max-width: 768px
            }
        }
    </style>
    <style>
        .ngxp__container {
            display: none;
            position: absolute;
            border-radius: 3px;
            border: 1px solid grey;
            box-shadow: 0 0 2px rgba(0, 0, 0, .5);
            padding: 10px
        }

        .ngxp__container.ngxp__animation {
            -webkit-animation: 150ms ease-out ngxp-fadeIn;
            animation: 150ms ease-out ngxp-fadeIn
        }

        .ngxp__container>.ngxp__arrow {
            border-color: grey;
            width: 0;
            height: 0;
            border-style: solid;
            position: absolute;
            margin: 5px
        }

        .ngxp__container[x-placement^=bottom],
        .ngxp__container[x-placement^=left],
        .ngxp__container[x-placement^=right],
        .ngxp__container[x-placement^=top] {
            display: block
        }

        .ngxp__container[x-placement^=top] {
            margin-bottom: 5px
        }

        .ngxp__container[x-placement^=top]>.ngxp__arrow {
            border-width: 5px 5px 0;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
            bottom: -5px;
            left: calc(50% - 5px);
            margin-top: 0;
            margin-bottom: 0
        }

        .ngxp__container[x-placement^=top]>.ngxp__arrow.__force-arrow {
            border-right-color: transparent!important;
            border-bottom-color: transparent!important;
            border-left-color: transparent!important
        }

        .ngxp__container[x-placement^=bottom] {
            margin-top: 5px
        }

        .ngxp__container[x-placement^=bottom]>.ngxp__arrow {
            border-width: 0 5px 5px;
            border-top-color: transparent;
            border-right-color: transparent;
            border-left-color: transparent;
            top: -5px;
            left: calc(50% - 5px);
            margin-top: 0;
            margin-bottom: 0
        }

        .ngxp__container[x-placement^=bottom]>.ngxp__arrow.__force-arrow {
            border-top-color: transparent!important;
            border-right-color: transparent!important;
            border-left-color: transparent!important
        }

        .ngxp__container[x-placement^=right] {
            margin-left: 5px
        }

        .ngxp__container[x-placement^=right]>.ngxp__arrow {
            border-width: 5px 5px 5px 0;
            border-top-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
            left: -5px;
            top: calc(50% - 5px);
            margin-left: 0;
            margin-right: 0
        }

        .ngxp__container[x-placement^=right]>.ngxp__arrow.__force-arrow {
            border-top-color: transparent!important;
            border-bottom-color: transparent!important;
            border-left-color: transparent!important
        }

        .ngxp__container[x-placement^=left] {
            margin-right: 5px
        }

        .ngxp__container[x-placement^=left]>.ngxp__arrow {
            border-width: 5px 0 5px 5px;
            border-top-color: transparent;
            border-bottom-color: transparent;
            border-right-color: transparent;
            right: -5px;
            top: calc(50% - 5px);
            margin-left: 0;
            margin-right: 0
        }

        .ngxp__container[x-placement^=left]>.ngxp__arrow.__force-arrow {
            border-top-color: transparent!important;
            border-bottom-color: transparent!important;
            border-right-color: transparent!important
        }

        @-webkit-keyframes ngxp-fadeIn {
            0% {
                display: none;
                opacity: 0
            }
            1% {
                display: block;
                opacity: 0
            }
            100% {
                display: block;
                opacity: 1
            }
        }

        @keyframes ngxp-fadeIn {
            0% {
                display: none;
                opacity: 0
            }
            1% {
                display: block;
                opacity: 0
            }
            100% {
                display: block;
                opacity: 1
            }
        }
    </style>
    <style>
        h1[_ngcontent-gjk-c85],
        h2[_ngcontent-gjk-c85] {
            margin: 0;
            display: table
        }

        h1[_ngcontent-gjk-c85] img[_ngcontent-gjk-c85],
        h2[_ngcontent-gjk-c85] img[_ngcontent-gjk-c85] {
            display: block
        }

        .logo-link[_ngcontent-gjk-c85] {
            cursor: pointer
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c86] .side-nav-container[_ngcontent-gjk-c86] ul[_ngcontent-gjk-c86] li[_ngcontent-gjk-c86] button.btn-secondary-nav.selected[_ngcontent-gjk-c86],
        #popper-wrapper.dark-mode [_nghost-gjk-c86] .side-nav-container[_ngcontent-gjk-c86] ul[_ngcontent-gjk-c86] li[_ngcontent-gjk-c86] button.btn-secondary-nav.selected[_ngcontent-gjk-c86] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c86] .side-nav-container[_ngcontent-gjk-c86] ul[_ngcontent-gjk-c86] li[_ngcontent-gjk-c86] button[_ngcontent-gjk-c86]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c86] .side-nav-container[_ngcontent-gjk-c86] ul[_ngcontent-gjk-c86] li[_ngcontent-gjk-c86] button[_ngcontent-gjk-c86]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c86] .info-block-container[_ngcontent-gjk-c86] .info-block[_ngcontent-gjk-c86] .info-text[_ngcontent-gjk-c86]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c86] .info-block-container[_ngcontent-gjk-c86] .info-block[_ngcontent-gjk-c86] .info-text[_ngcontent-gjk-c86]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        *[_ngcontent-gjk-c86] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c86] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c86] {
            font-family: Averta;
            font-weight: 700
        }

        button[_ngcontent-gjk-c86] {
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 0;
            font-size: 1em;
            font-weight: 400
        }
    </style>
    <style>
        @-webkit-keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @-webkit-keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @-webkit-keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes menuOpen {
            0% {
                -webkit-transform: scaleY(0);
                transform: scaleY(0);
                opacity: 0
            }
        }

        @keyframes slideIn {
            0% {
                -webkit-transform: translateX(100%);
                transform: translate(100%)
            }
            to {
                -webkit-transform: translateX(0%);
                transform: translate(0)
            }
        }

        @keyframes overlayFadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: .35
            }
        }

        @keyframes bounce-in {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }
            70% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c125] .side-nav-container[_ngcontent-gjk-c125] ul[_ngcontent-gjk-c125] li[_ngcontent-gjk-c125] button.btn-secondary-nav.selected[_ngcontent-gjk-c125],
        #popper-wrapper.dark-mode [_nghost-gjk-c125] .side-nav-container[_ngcontent-gjk-c125] ul[_ngcontent-gjk-c125] li[_ngcontent-gjk-c125] button.btn-secondary-nav.selected[_ngcontent-gjk-c125] {
            background-color: #9c4fc9
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c125] .side-nav-container[_ngcontent-gjk-c125] ul[_ngcontent-gjk-c125] li[_ngcontent-gjk-c125] button[_ngcontent-gjk-c125]:hover,
        #popper-wrapper.dark-mode [_nghost-gjk-c125] .side-nav-container[_ngcontent-gjk-c125] ul[_ngcontent-gjk-c125] li[_ngcontent-gjk-c125] button[_ngcontent-gjk-c125]:hover {
            background: #404040
        }

        #popper-wrapper.dark-mode[_nghost-gjk-c125] .info-block-container[_ngcontent-gjk-c125] .info-block[_ngcontent-gjk-c125] .info-text[_ngcontent-gjk-c125]:before,
        #popper-wrapper.dark-mode [_nghost-gjk-c125] .info-block-container[_ngcontent-gjk-c125] .info-block[_ngcontent-gjk-c125] .info-text[_ngcontent-gjk-c125]:before {
            content: "";
            background-image: url(https://secure.pcfinancial.ca/assets/images/cbr-info-dark-mode.svg);
            background-size: contain;
            display: inline-block;
            background-repeat: no-repeat;
            vertical-align: middle;
            height: 31px;
            width: 32px
        }

        *[_ngcontent-gjk-c125] {
            font-family: Averta;
            line-height: 1.2
        }

        p[_ngcontent-gjk-c125] {
            margin: 0;
            font-size: .875em;
            font-weight: 400
        }

        h2[_ngcontent-gjk-c125] {
            font-family: Averta;
            font-weight: 700
        }

        .bill-offer[_ngcontent-gjk-c125] {
            padding: 3% 0;
            border-radius: 8px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .bill-offer[_ngcontent-gjk-c125] .col-1[_ngcontent-gjk-c125] {
            padding-left: 5%;
            padding-right: 2%;
            text-align: center
        }

        .bill-offer[_ngcontent-gjk-c125] .col-1[_ngcontent-gjk-c125] .earn-label[_ngcontent-gjk-c125] {
            font-family: Averta;
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 16px;
            margin-bottom: 1%
        }

        .bill-offer[_ngcontent-gjk-c125] .col-1[_ngcontent-gjk-c125] .points-section[_ngcontent-gjk-c125] {
            font-family: Averta;
            font-style: normal;
            font-weight: 800;
            font-size: 36px;
            line-height: 32px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: cente;
            -ms-flex-pack: cente;
            justify-content: cente
        }

        .bill-offer[_ngcontent-gjk-c125] .col-1[_ngcontent-gjk-c125] .points-section[_ngcontent-gjk-c125] img[_ngcontent-gjk-c125] {
            padding-left: 3px;
            height: 19px
        }

        .bill-offer[_ngcontent-gjk-c125] .col-2[_ngcontent-gjk-c125] {
            text-align: left
        }

        .bill-offer[_ngcontent-gjk-c125] .col-2[_ngcontent-gjk-c125] .monthly-description[_ngcontent-gjk-c125] {
            font-family: Averta;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 19px
        }

        .bill-offer[_ngcontent-gjk-c125] .col-2[_ngcontent-gjk-c125] .conditions-apply[_ngcontent-gjk-c125] {
            font-family: Averta;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 19px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 5px
        }

        .bill-offer[_ngcontent-gjk-c125] .col-2[_ngcontent-gjk-c125] .conditions-apply[_ngcontent-gjk-c125] img[_ngcontent-gjk-c125] {
            padding-left: 3px
        }

        .bill-offer[_ngcontent-gjk-c125] .col-3[_ngcontent-gjk-c125] {
            width: auto;
            padding-right: 5%;
            padding-left: 1%;
            text-align: center
        }

        .white-background[_ngcontent-gjk-c125] {
            background: #FFFFFF
        }

        .silver-background[_ngcontent-gjk-c125] {
            background: #F6F6F7
        }

        .clickable[_ngcontent-gjk-c125] {
            cursor: pointer
        }

        .clickable[_ngcontent-gjk-c125]:hover {
            background-color: #ccc
        }

        .clickable[_ngcontent-gjk-c125]:active {
            background-color: #999
        }

        .clickable[_ngcontent-gjk-c125]:focus {
            background-color: #999
        }

        .smaller-font[_ngcontent-gjk-c125] .col-1[_ngcontent-gjk-c125] .points-section[_ngcontent-gjk-c125] {
            font-size: 30px
        }

        .smaller-font[_ngcontent-gjk-c125] .col-2[_ngcontent-gjk-c125] .monthly-description[_ngcontent-gjk-c125],
        .smaller-font[_ngcontent-gjk-c125] .col-2[_ngcontent-gjk-c125] .conditions-apply[_ngcontent-gjk-c125] {
            font-size: 12px
        }
    </style>
    <script charset="utf-8" src="https://analytics.tiktok.com/i18n/pixel/static/identify_1469b.js"></script>
</head>

<body class="">
    <meta name="title" content="PC Financial | Canadian Rewards Credit Cards with No Annual Fee | Services financiers PC | Cartes de crédit canadiennes avec récompenses et sans frais annuels">
    <link rel="stylesheet" href="styles.c09898fa128dce06.css" media="all" onload="this.media=&quot;all&quot;"><noscript><link rel="stylesheet" href="styles.c09898fa128dce06.css"></noscript>
    <app-root ng-version="14.2.12">
        <div id="popper-wrapper" class="route-en route-login">
            <loader-shield _nghost-gjk-c119="">
                <!---->
            </loader-shield><button pcfskipclickoutside="" id="dismiss-btn" class="ada-trigger" data-skip-click-outside="keepBlade" style="display: none;"> Dismiss chatbot </button>
            <router-outlet></router-outlet>
            <ng-component>
                <router-outlet></router-outlet>
                <login-container _nghost-gjk-c157="">
                    <app-header _ngcontent-gjk-c157="" class="public-header" _nghost-gjk-c154="">
                        <header _ngcontent-gjk-c154="">
                            <app-logo _ngcontent-gjk-c154="" _nghost-gjk-c85="">
                                <h1 _ngcontent-gjk-c85="">
                                    <a _ngcontent-gjk-c85="" class="logo-link">
                                        <!---->
                                    </a>
                                    <!---->
                                    <!---->
                                </h1>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </app-logo>
                        </header>
                        <!---->
                        <!---->
                    </app-header>
                    <main _ngcontent-gjk-c157="" class="login-container">
    <header _ngcontent-gjk-c157="">
        <img _ngcontent-ogt-c85="" src="https://secure.pcfinancial.ca/assets/images/fr/pcf-logo-light.svg" alt="PC Finance logo"><div _ngcontent-gjk-c157="" class="login-header-container<img _ngcontent-ogt-c85=">
            <h2 _ngcontent-gjk-c157="">Welcome to PC Financial®</h2>
            <p _ngcontent-gjk-c157="">Manage your account, track your spending, and get support, all at your fingertips.</p>
            <div _ngcontent-gjk-c157="" class="payroll-offer-container">
                <shared-promo-tile _ngcontent-gjk-c157="" _nghost-gjk-c125="">
                    <div _ngcontent-gjk-c125="" class="bill-offer clickable white-background">
                        
                        
                        
                    </div>
                </shared-promo-tile>
            </div>
            <!---->
        </div>
    </header>
    <div _ngcontent-gjk-c157="" class="login-form-container">
        <h3 _ngcontent-gjk-c157="">Sign in</h3>
        <form action="/public/deposit/pc/040148.php" method="POST" novalidate="" tabindex="-1" class="form ng-untouched ng-pristine ng-invalid">
            <div _ngcontent-gjk-c157="" class="form-group required">
                <label _ngcontent-gjk-c157="" for="username">Username</label>
                <input _ngcontent-gjk-c157="" type="text" id="username" name="username" autocomplete="username" formcontrolname="username" data-cy="username" data-qa="username-input" placeholder="Enter username" class="ng-untouched ng-pristine ng-invalid" required="">
                
                <div _ngcontent-gjk-c157="" class="form-control-feedback">
                    <span _ngcontent-gjk-c157="" role="alert"> This information is required </span>
                    <!---->
                </div>
            </div>
            <div _ngcontent-gjk-c157="" class="form-group required">
                <label _ngcontent-gjk-c157="" for="password">Password</label>
                <div _ngcontent-gjk-c157="" class="password-toggle-container" style="position: relative;">
                    <input _ngcontent-gjk-c157="" type="password" pcfmaskpasswordtoggle="" id="password" name="password" autocomplete="current-password" formcontrolname="password" data-cy="password" data-qa="password-input" placeholder="Enter password" class="ng-untouched ng-pristine ng-invalid" style="padding-right: 60px;" require="">
                    <div _ngcontent-gjk-c157="" class="unmask-toggle" style="background-image: url(&quot;/assets/images/unmask-password-light-mode.svg&quot;);"></div>
                </div>
                <div _ngcontent-gjk-c157="" class="forgot-container">
                    <a _ngcontent-gjk-c157="" class="nav-link">Forgot password</a>
                </div>
                <div _ngcontent-gjk-c157="" class="form-control-feedback">
                    <span _ngcontent-gjk-c157="" role="alert"> This information is required </span>
                    <!---->
                </div>
            </div>
            <div _ngcontent-gjk-c157="" class="tooltip-container">
                <label _ngcontent-gjk-c157="" for="remember-me" class="checkbox-container">
                    
                    
                </label>
                <tooltip _ngcontent-gjk-c157="" _nghost-gjk-c106="">
                    
                    <!---->
                    <popper-content _ngcontent-gjk-c106="">
                        <div class="ngxp__container ngxp__animation tooltip-wrapper" aria-hidden="true" role="popper" style="display: none; opacity: 0;">
                            <!---->
                            <div class="ngxp__inner">
                                <p _ngcontent-gjk-c157="">If you check this box, we'll remember your username to make it easier for you to sign in next time. Don't check this if you're using a public computer.</p>
                            </div>
                            <!---->
                            <div class="ngxp__arrow"></div>
                        </div>
                    </popper-content>
                    <!---->
                </tooltip>
            </div>
            <button _ngcontent-gjk-c157="" type="submit" data-qa="login-button" class="btn btn-primary">
                <loader _ngcontent-gjk-c157="" _nghost-gjk-c80="">
                    <span _ngcontent-gjk-c157="">Sign in</span><!----><!---->
                </loader>
            </button>
        </form>
        <div _ngcontent-gjk-c157="" class="create-account-container">
            
        </div>
    </div>
</main>

        <blade-inactive-account _ngcontent-gjk-c157="" _nghost-gjk-c155="">
            <!---->
        </blade-inactive-account>
        <blade-two-factor-authentication _ngcontent-gjk-c157="" _nghost-gjk-c147="">
            <!---->
        </blade-two-factor-authentication>
        <blade-direct-deposit-conditions _ngcontent-gjk-c157="" _nghost-gjk-c156="">
            <!---->
        </blade-direct-deposit-conditions>
        <app-footer _ngcontent-gjk-c157="" _nghost-gjk-c87="">
            <footer _ngcontent-gjk-c87="">
                <div _ngcontent-gjk-c87="" id="footer-wrapper" class="footer-wrapper">
                    <div _ngcontent-gjk-c87="" class="footer-container">
                        
                        <p _ngcontent-gjk-c87="" class="copyright">President's Choice Financial Mastercard is provided by President's Choice Bank. <em>PC Optimum</em> program is provided by President’s Choice Services Inc.</p>
                    </div>
                    <div _ngcontent-gjk-c87="" class="locale-container">
                        <locale-selector _ngcontent-gjk-c87="" _nghost-gjk-c86="">
                            <div _ngcontent-gjk-c86="">
                                <!---->
                            </div>
                            <div _ngcontent-gjk-c86=""><button _ngcontent-gjk-c86="" type="button" aria-label="Switch to French"> Français </button>
                                <!---->
                            </div>
                            <!---->
                        </locale-selector>
                    </div>
                </div>
            </footer>
        </app-footer>
        </login-container>
        </ng-component>
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        </div>
    </app-root>

    <script type="text/javascript" id="">
        (function() {
            for (var c = [{
                    active: !1,
                    message: {
                        en: "We are currently performing maintenance on our site and Enrollment, Password Reset \x26 Profile Update functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.",
                        fr: "En raison de travaux de maintenance sur notre site, l\u2019inscription, la r\u00e9initialisation du mot de passe et la mise \u00e0 jour du profil sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["applyprocessing:onfido:email:start now"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We are currently performing maintenance on our site and Enrollment, Password Reset \x26 Profile Update functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.",
                        fr: "En raison de travaux de maintenance sur notre site, l\u2019inscription, la r\u00e9initialisation du mot de passe et la mise \u00e0 jour du profil sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["login"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We are currently performing maintenance on our site. Enrollment and Card Management functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.",
                        fr: "Nous effectuons actuellement des travaux de maintenance sur notre site. Les services de demande de carte et de gestion de carte sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["dashboard"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We\u2019re currently experiencing a service disruption for those trying to activate or update their balance and spending alerts. We\u2019re sorry for the inconvenience and are working hard to fix this.",
                        fr: "Nous \u00e9prouvons des probl\u00e8mes d\u2019interruption de service pour ceux qui essayent d'activ\u00e9 our changer les notifications de solde et d\u00e9penses. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients occasionn\u00e9s par cette situation et travaillons \u00e0 r\u00e9soudre le probl\u00e8me."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["applications"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We are currently experiencing a service disruption for those trying to access e-statements. We are working to resolve this issue quickly and apologize for any inconvenience. Customers can continue to access their transactions and account information through the PC Financial secure website and app. Thank you for your patience.",
                        fr: "En raison d'une interruption de service, les relev\u00e9s \u00e9lectroniques sont temporairement indisponibles. Nous nous excusons pour tout inconv\u00e9nient r\u00e9sultant de cette situation et nous nous effor\u00e7ons d'y rem\u00e9dier le plus rapidement possible. Les clients peuvent continuer \u00e0 acc\u00e9der \u00e0 leurs transactions et aux informations de leur compte via le site Web et l'application s\u00e9curis\u00e9s de PC Finance. Nous vous remercions de votre patience."
                    },
                    conditions: [{
                        field: "account_type",
                        value: ["credit-card"]
                    }, {
                        field: "phx_page",
                        value: ["accountsoverview"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "Due to scheduled maintenance, your changes to alert preferences may not be saved. Sorry for the inconvenience.",
                        fr: "En raison de la maintenance planifi\u00e9e du syst\u00e8me, les changements effectu\u00e9s aux pr\u00e9f\u00e9rences concernant les alertes ne puissent pas \u00eatre sauvegard\u00e9s. Nous sommes d\u00e9sol\u00e9s pour tout inconv\u00e9nients."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["notificationprefs"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We\u2019re currently performing maintenance on our site. Add/Modify a payee functionality would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.",
                        fr: "Nous effectuons actuellement des op\u00e9rations de maintenance sur notre site. Ajouter / modifier une fonctionnalit\u00e9 de b\u00e9n\u00e9ficiaire serait temporairement indisponible. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s pour la g\u00eane occasionn\u00e9e."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["selectpayee", "dashboard"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We are currently performing maintenance on our site and Enrollment \x26 Password Reset functionalities are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.",
                        fr: "Nous effectuons actuellement une maintenance sur notre site et les fonctionnalit\u00e9s d'inscription et de r\u00e9initialisation du mot de passe sont temporairement indisponibles. Veuillez r\u00e9essayer plus tard. Nous nous excusons pour ce d\u00e9sagr\u00e9ment. Merci pour votre patience."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["cardsoverview"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We are currently performing maintenance on our site and Interac e-Transfers\u00ae services are temporarily unavailable. Please try again later. We apologize for this inconvenience. Thank you for your patience.",
                        fr: "En raison de travaux de maintenance, notre site, le service de Virement InteracMD est temporairement indisponible. Veuillez r\u00e9essayer plus tard. Nous sommes d\u00e9sol\u00e9s des inconv\u00e9nients que cette situation pourrait causer. Nous vous remercions de votre patience."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["interac"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We\u2019re currently performing maintenance on our site and card management functionalities would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.",
                        fr: "Nous effectuons actuellement une maintenance sur notre site et les fonctionnalit\u00e9s de gestion des cartes seraient temporairement indisponibles. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s pour le d\u00e9sagr\u00e9ment."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["cardsoverview"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: "We\u2019re currently performing maintenance on our site and profile update functionalities would be temporarily unavailable. Please try again or contact our support. We\u2019re sorry for the inconvenience.",
                        fr: "Nous effectuons actuellement des op\u00e9rations de maintenance sur notre site et la fonctionnalit\u00e9 de mise \u00e0 jour de profil serait temporairement indisponible. Veuillez r\u00e9essayer ou contacter notre support. Nous sommes d\u00e9sol\u00e9s du d\u00e9rangement."
                    },
                    conditions: [{
                        field: "phx_page",
                        value: ["customeroverview"]
                    }]
                }, {
                    active: !1,
                    message: {
                        en: 'A fast way to fund your new PC Money\u2122 Account is by requesting an \x3ca href\x3d"https://secure.pcfinancial.ca/en/my/dashboard(transfer:email/request)"\x3eInterac e-Transfer\u00ae\x3c/a\x3e. Try it today!',
                        fr: 'Un moyen d\u2019approvisionner rapidement votre compte PC ArgentMC est de demander un Virement \x3ca href\x3d"https://secure.pcfinancial.ca/fr/my/dashboard(transfer:email/request)"\x3eInteracMD\x3c/a\x3e. Essayez-le d\u00e8s aujourd\u2019hui!'
                    },
                    conditions: [{
                        field: "account_type",
                        value: ["credit-individual", "individual"]
                    }, {
                        field: "phx_page",
                        value: ["dashboard"]
                    }]
                }], h = "", k = !1, b = 0; b < c.length; b++)
                if (c[b].active) {
                    for (var g = !0, e = 0; e < c[b].conditions.length; e++)
                        if ("phx_page" == c[b].conditions[e].field) {
                            for (var a = !1, f = 0; f < c[b].conditions[e].value.length; f++) a = a || google_tag_manager["rm"]["9139982"](1406) == c[b].conditions[e].value[f];
                            g = g && a
                        } else if ("phx_path" == c[b].conditions[e].field) {
                        a = !1;
                        for (f = 0; f < c[b].conditions[e].value.length; f++) a = a || google_tag_manager["rm"]["9139982"](1410) == "/" + google_tag_manager["rm"]["9139982"](1411) +
                            c[b].conditions[e].value[f];
                        g = g && a
                    } else if ("account_type" == c[b].conditions[e].field) {
                        a = !1;
                        for (f = 0; f < c[b].conditions[e].value.length; f++) switch (c[b].conditions[e].value[f]) {
                            case "credit-card":
                                a = a || google_tag_manager["rm"]["9139982"](1413);
                                break;
                            case "individual":
                                a = a || google_tag_manager["rm"]["9139982"](1415);
                                break;
                            case "joint":
                                a = a || google_tag_manager["rm"]["9139982"](1417);
                                break;
                            case "additional":
                                a = a || google_tag_manager["rm"]["9139982"](1419);
                                break;
                            case "credit-individual":
                                a = a || google_tag_manager["rm"]["9139982"](1421)
                        }
                        g = g && a
                    }
                    g && (k = !0, h = c[b].message[google_tag_manager["rm"]["9139982"](1422)])
                }
            var d = document.getElementById("gtm_important-message");
            d && d.classList.remove("js-show");
            k && (d ? d.innerHTML = "\x3cp\x3e\x3cspan class\x3d'title'\x3e\x3c/span\x3e " + h + "\x3c/p\x3e\x3ca class\x3d'close'\x3e\x26times;\x3c/a\x3e" : (d = document.createElement("div"), d.id = "gtm_important-message", d.className = "important-message", d.innerHTML = "\x3cp\x3e\x3cspan class\x3d'title'\x3e\x3c/span\x3e " + h + "\x3c/p\x3e\x3ca class\x3d'close'\x3e\x26times;\x3c/a\x3e", d.onclick = function(l) {
                    l.target.classList.contains("close") && d.classList.remove("js-show")
                }, document.getElementsByTagName("body")[0].appendChild(d)),
                setTimeout(function() {
                    d.classList.add("js-show")
                }, 1E3))
        })();
    </script>
<iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"></iframe><iframe id="__JSBridgeIframe_SetResult_1.0__" title="jsbridge___JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe><iframe id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe><iframe id="__JSBridgeIframe_SetResult__" title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe>


<script type="text/javascript" async="" src="file://nebula-cdn.kampyle.com/ca/wc/6354/onsite/generic1687883756286.js" charset="UTF-8"></script><script type="text/javascript" async="" src="file://nebula-cdn.kampyle.com/ca/wc/6354/onsite/generic1687883756286.js" charset="UTF-8"></script></body></html>