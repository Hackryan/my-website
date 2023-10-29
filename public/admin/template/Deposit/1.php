<!DOCTYPE html>
<html>
<head>
    <title>Edit a contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <add-contact>
        <page-header title="Edit a contact" show-close="true" is-loading="false" solid="true">
            <div class="pageHeader">
                <div class="header ng-star-inserted">
                    <div class="headerIcon left">
                        <button android-back-button aria-label="Close" class="ng-star-inserted">
                            <span class="icon">
                                <span class="icon-close"></span>
                            </span>
                        </button>
                    </div>
                    <div class="headerCenter ng-star-inserted">
                        <span></span>
                        <h1 class="title ng-star-inserted" aria-label="Edit a contact">Edit a contact</h1>
                    </div>
                    <div class="headerIcon right"></div>
                </div>
                <div class="headerContent ng-star-inserted"></div>
            </div>
        </page-header>
        <error-banner></error-banner>
        <page-scroller>
            <div class="title">Contact information</div>
            <picker-list>
                <!-- Add your HTML for contact information here -->
                <textfield-container>
                    <div class="icon left ng-star-inserted">
                        <span class="icon-user"></span>
                    </div>
                    <textfield name="name" ng-reflect-name="name" ng-reflect-form="[object Object]" ng-reflect-placeholder="Name" ng-reflect-max-length="80" ng-reflect-max-input-length="80" class="ng-star-inserted">
                        <div class="textfield">
                            <form novalidate class="example-form">
                                <mat-form-field class="mat-form-field ng-tns-c103-44 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-should-float mat-form-field-has-label ng-untouched ng-valid ng-star-inserted mat-focused ng-dirty">
                                    <div class="mat-form-field-wrapper ng-tns-c103-44">
                                        <div class="mat-form-field-flex ng-tns-c103-44">
                                            <div class="mat-form-field-infix ng-tns-c103-44">
                                                <div class="ng-tns-c103-44">
                                                    <input autocomplete="off" select="input" inputblurkeyboard matinput type="text" ng-reflect-type="text" ng-reflect-md-input-accessibility="Name" ng-reflect-name="name" maxlength="80" ng-reflect-analytics="Name" aria-labelledby="y1697944224835" id="mat-input-18" aria-invalid="false" aria-required="false" placeholder="" aria-label="Name">
                                                </div>
                                                <span class="mat-form-field-label-wrapper ng-tns-c103-44">
                                                    <label class="mat-form-field-label ng-tns-c103-44 ng-star-inserted" ng-reflect-disabled="true" id="mat-form-field-label-37" for="mat-input-18" aria-owns="mat-input-18">
                                                        <mat-label class="ng-tns-c103-44 ng-star-inserted" aria-hidden="true">Name</mat-label>
                                                    </label>
                                                </span>
                                            </div>
                                            <div class="mat-form-field-underline ng-tns-c103-44 ng-star-inserted">
                                                <span class="mat-form-field-ripple ng-tns-c103-44"></span>
                                            </div>
                                            <div class="mat-form-field-subscript-wrapper ng-tns-c103-44">
                                                <div class="mat-form-field-hint-wrapper ng-tns-c103-44 ng-trigger ng-trigger-transitionMessages ng-star-inserted"></div>
                                            </div>
                                        </div>
                                    </div>
                                </mat-form-field>
                            </form>
                            <inline-error></inline-error>
                        </div>
                    </textfield>
                </textfield-container>
                <!-- Continue adding your contact information HTML here -->
            </picker-list>
            <div class="title">Notification language</div>
            <div class="info">Choose the language you’d like INTERAC to use for the notifications they’ll send to your contact.</div>
            <div class="language">
                <boolean-radio-button-group full-width="true" current-value="true" yes-button-text="English" no-button-text="French">
                    <div class="input-wrap box-radio-wrap full-width">
                        <input type="radio" value="true" id="8c86c426-1bef-b152-2146-a41e50076cd5-radio-box-true" name="8c86c426-1bef-b152-2146-a41e50076cd5">
                        <label class="box-radio-label" for="8c86c426-1bef-b152-2146-a41e50076cd5">English</label>
                        <input type="radio" value="false" id="8c86c426-1bef-b152-2146-a41e50076cd5-radio-box-false" name="8c86c426-1bef-b152-2146-a41e50076cd5">
                        <label class="box-radio-label" for="8c86c426-1bef-b152-2146-a41e50076cd5-radio-box-false">French</label>
                        <inline-error></inline-error>
                    </div>
                </boolean-radio-button-group>
            </div>
        </page-scroller>
        <page-footer>
            <!-- Add your footer buttons here -->
            <round-button uppercase="true">
                <div class="roundButton ng-star-inserted">
                    <button class="uppercase" type="" aria-invalid="false" aria-disabled="false">
                        <span aria-hidden="true">Save Contact</span>
                        <span class="visuallyHidden lowerCase">Save Contact</span>
                    </button>
                </div>
            </round-button>
            <round-button class="fullTransparent ng-star-inserted">
                <div class="roundButton fullTransparent ng-star-inserted">
                    <button class="uppercase" type="" aria-invalid="false" aria-disabled="false">
                        <span aria-hidden="true">
                            <span class="buttonText">Cancel</span>
                        </span>
                        <span class="visuallyHidden lowerCase">
                            <span class="buttonText">Cancel</span>
                        </span>
                    </button>
                </div>
            </round-button>
        </page-footer>
    </add-contact>
</body>
</html>
