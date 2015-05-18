<?php if(!class_exists('raintpl')){exit;}?><html>
<head>
<title>0bin.cf</title>
<meta name="robots" content="all" />
<meta name="keywords" content="pastebin,pastebin clone,zerobin"/>
<meta name="description" content="Minimalist and opensource online pastebin where the server has zero knowledge of pasted data. Data is encrypted/decrypted in the browser using 256 bits AES"/>
<link type="text/css" rel="stylesheet" href="css/zerobin.css?<?php echo rawurlencode( $VERSION );?>" /> 
<link href="http://sx.root.sx/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<script src="js/jquery.js?<?php echo rawurlencode( $VERSION );?>"></script>
<script src="js/sjcl.js?<?php echo rawurlencode( $VERSION );?>"></script>
<script src="js/base64.js?<?php echo rawurlencode( $VERSION );?>"></script>
<script src="js/rawdeflate.js?<?php echo rawurlencode( $VERSION );?>"></script>
<script src="js/rawinflate.js?<?php echo rawurlencode( $VERSION );?>"></script>
<script src="js/zerobin.js?<?php echo rawurlencode( $VERSION );?>"></script>
<link type="text/css" rel="stylesheet" href="js/highlight.styles/monokai.css?<?php echo rawurlencode( $VERSION );?>">
<script src="js/highlight.pack.js?<?php echo rawurlencode( $VERSION );?>"></script>

<!--[if lt IE 10]>
<style> body {padding-left:60px;padding-right:60px;} div#ienotice {display:block;} </style>
<![endif]-->

<!--[if lt IE 10]>
<style> div#ienotice {display:block; }  div#oldienotice {display:block; } </style>
<![endif]-->

</head>
  <body>
      <div id="aboutbox">
          Note: This is a test service: 
          Data may be deleted anytime. Kittens will die if you abuse this service.
</div>
    <h1 title="0bin.cf" onclick="window.location.href=scriptLocation();return false;">0bin.cf</h1><br>
    <noscript><div class="nonworking">Javascript is required for 0bin.cf to work.<br>Sorry for the inconvenience.</div></noscript>
    <div id="oldienotice" class="nonworking">0bin.cf requires a modern browser to work.</div>
    <div id="ienotice">Still using Internet Explorer ? &nbsp;Do yourself a favor, switch to a modern browser: 
        <a href="http://www.mozilla.org/firefox/">Firefox</a>, 
        <a href="http://www.opera.com/">Opera</a>, 
        <a href="http://www.google.com/chrome">Chrome</a>, 
        <a href="http://www.apple.com/safari">Safari</a>...
    </div>
    <div id="status"><?php echo $STATUS;?></div>
    <div id="errormessage" style="display:none"><?php echo htmlspecialchars( $ERRORMESSAGE );?></div>
    <div id="toolbar">
    <button id="newbutton" onclick="window.location.href=scriptLocation();return false;" style="display:none;"><img src="img/icon_new.png" width="11" height="15" />New</button>
    <button id="sendbutton" onclick="send_data();return false;" style="display:none;"><img src="img/icon_send.png" width="18" height="15" />Send</button>
    <button id="clonebutton" onclick="clonePaste();return false;" style="display:none;"><img src="img/icon_clone.png" width="15" height="17" />Clone</button>
    <button id="rawtextbutton" onclick="rawText();return false;" style="display:none; "><img src="img/icon_raw.png" width="15" height="15" style="padding:1px 0px 1px 0px;"/>Raw text</button>
      <div id="expiration" style="display:none;">Expires: 
      <select id="pasteExpiration" name="pasteExpiration">
        <option value="5min">5 minutes</option>
        <option value="10min">10 minutes</option>
        <option value="1hour">1 hour</option>
        <option value="1day">1 day</option>
        <option value="1week">1 week</option>
        <option value="1month" selected="selected">1 month</option>
        <option value="1year">1 year</option>
        <option value="never">Never</option>
      </select>
      </div>
      <div id="remainingtime" style="display:none;"></div>
      <div id="burnafterreadingoption" class="button" style="display:none;">
         <input type="checkbox" id="burnafterreading" name="burnafterreading" />
         <label for="burnafterreading">Burn after reading</label>
      </div>
      <div id="opendisc" class="button" style="display:none;">
         <input type="checkbox" id="opendiscussion" name="opendiscussion" />
         <label for="opendiscussion">Open discussion</label>
      </div>
      <div id="syntaxcoloringoption" class="button" style="display:none;">
         <input type="checkbox" id="syntaxcoloring" name="syntaxcoloring" />
         <label for="syntaxcoloring">Syntax coloring</label>
      </div>
    </div>
    <div id="pasteresult" style="display:none;">
      <div id="deletelink"></div>
      <div id="pastelink"></div>
    </div>
    <div id="cleartext" style="display:none;"></div>
    <textarea id="message" name="message" cols="80" rows="25" style="display:none;"></textarea>
    <div id="discussion" style="display:none;">
        <h4>Discussion</h4>
        <div id="comments"></div>
    </div>
    <div id="cipherdata" style="display:none;"><?php echo $CIPHERDATA;?></div>
  </body>

<br><br>
  <center>Powered by <a href="http://www.vaskir.com"><font color="black">Vaskir</font></a> | Made by <a href="https://github.com/sebsauvage/ZeroBin"><font color="black">sebsauvage</font></a><br>Improved version of ZeroBin : <a href="https://github.com/demogorgonz/0bin.cf-PasteBin-clone"><font color="black">DemogorgonZ</font></a> <br><br> <font color="orange">Donate BTC to DemogorgonZ:</font>1FGBdQobW1Cw9u3yapfcro7i7xzYLQKMoF <br> <font color="yellow">Donate DogeCoin to DemogorgonZ:</font> DMus2qFMjrZB1U7ouQ3Eo1RDfnbLjhgEAx </center>

</html>
