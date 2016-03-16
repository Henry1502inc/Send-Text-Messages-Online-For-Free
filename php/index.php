<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="index.js"></script>
</head>

<body>
    <header>
        <h1>Send Text Messages Online For Free</h1>
    </header>
    
    <section class="input">
        <form action="main.class.php" method="POST">
            <label for="uipn">Your Number: </label>
            <input type="number" id="uipn" />
            
            <label for="uipnc">My cell phone carrier: </label>
            <select id="uipnc">
                <option value="@sms.3rivers.net">3 River Wireless</option>
                <option value="@message.alltel.com">Alltel</option>
                <option value="@txt.att.net">AT&T</option>
                <option value="@message.alltel.com">Alltel</option>
                <option value="@txt.bellmobility.ca">Bell Canada</option>
                <option value="@bellmobility.ca">Bell Mobile Option 2</option>
                <option value="@txt.bell.ca">Bell Mobility (Canada)</option>
                <option value="@blueskyfrog.com">Blue Sky Frog</option>
                <option value="@sms.bluecell.com">Bluegrass Cellular</option>
                <option value="@myboostmobile.com">Boost Mobile</option>
                <option value="@mobile.celloneusa.com">Cellular One</option>
                <option value="@csouth1.com">Cellular South</option>
                <option value="@cwemail.com">Centennial Wireless</option>
                <option value="@messaging.sprintpcs.com">Helio</option>
                <option value="@text.houstoncellular.net">Houston Cellular</option>
                <option value="@mymetropcs.com">Metro PCS</option>
                <option value="@messaging.sprintpcs.com">Sprint</option>
                <option value="@tmomail.net">T-Mobile</option>
                <option value="@email.uscc.net">US Cellular</option>
                <option value="@vtext.com">Verizon</option>
                <option value="@vmobile.com">Virgin Mobile</option>
                <option value="@sms.wcc.net">Virgin Mobile Canada</option>
                <option value="@comviq.se">Comviq</option>
                <option value="@airtelmail.com">Delhi Aritel</option>
                <option value="@t-mobile-sms.de">DT T-Mobile</option>
                <option value="@sms.orange.nl">Dutchtone / Orange-NL</option>
                <option value="@t-mobile-sms.de">German T-Mobile</option>
                <option value="@mobistar.be">Mobistar Belgium</option>
                <option value="@sms.co.tz">Mobitel Tanzania</option>
                <option value="@o2.co.uk">02</option>
                <option value="@onemail.at">One Connect Austria</option>
                <option value="@optusmobile.com.au">Optus Mobile</option>
                <option value="@mysunrise.ch">Sunrise Mobile</option>
                <option value="@bluewin.ch">Swisscom</option>
                <option value="@sms.t-mobile.at">T-Mobile Austria</option>
                <option value="@t-d1-sms.de">T-Mobile Germany</option>
                <option value="@t-mobile.uk.net">T-Mobile UK</option>
                <option value="@gsm1800.telia.dk">Telia Denmark</option>
                <option value="@sms.vodafone.it">Vodafone Italy</option>
                <option value="@c.vodafone.ne.jp">Vodafone Japan</option>
                <option value="@h.vodafone.jp">Vodafone Japan Option 2</option>
                <option value="@vodafone.net">Vodafone UK</option>
                <option value="@t-d1-sms.de">T-Mobile Germany</option>
                <option value="@t-mobile.uk.net">T-Mobile UK</option>
            </select>
            
            <label for="uepn">Friends Number: </label>
            <input type="number" id="uepn" />
            
            <label for="uepnc">Friends cell phone carrier: </label>
            <select id="uepnc">
                <option value="@sms.3rivers.net">3 River Wireless</option>
                <option value="@message.alltel.com">Alltel</option>
                <option value="@txt.att.net">AT&T</option>
                <option value="@message.alltel.com">Alltel</option>
                <option value="@txt.bellmobility.ca">Bell Canada</option>
                <option value="@bellmobility.ca">Bell Mobile Option 2</option>
                <option value="@txt.bell.ca">Bell Mobility (Canada)</option>
                <option value="@blueskyfrog.com">Blue Sky Frog</option>
                <option value="@sms.bluecell.com">Bluegrass Cellular</option>
                <option value="@myboostmobile.com">Boost Mobile</option>
                <option value="@mobile.celloneusa.com">Cellular One</option>
                <option value="@csouth1.com">Cellular South</option>
                <option value="@cwemail.com">Centennial Wireless</option>
                <option value="@messaging.sprintpcs.com">Helio</option>
                <option value="@text.houstoncellular.net">Houston Cellular</option>
                <option value="@mymetropcs.com">Metro PCS</option>
                <option value="@messaging.sprintpcs.com">Sprint</option>
                <option value="@tmomail.net">T-Mobile</option>
                <option value="@email.uscc.net">US Cellular</option>
                <option value="@vtext.com">Verizon</option>
                <option value="@vmobile.com">Virgin Mobile</option>
                <option value="@sms.wcc.net">Virgin Mobile Canada</option>
                <option value="@comviq.se">Comviq</option>
                <option value="@airtelmail.com">Delhi Aritel</option>
                <option value="@t-mobile-sms.de">DT T-Mobile</option>
                <option value="@sms.orange.nl">Dutchtone / Orange-NL</option>
                <option value="@t-mobile-sms.de">German T-Mobile</option>
                <option value="@mobistar.be">Mobistar Belgium</option>
                <option value="@sms.co.tz">Mobitel Tanzania</option>
                <option value="@o2.co.uk">02</option>
                <option value="@onemail.at">One Connect Austria</option>
                <option value="@optusmobile.com.au">Optus Mobile</option>
                <option value="@mysunrise.ch">Sunrise Mobile</option>
                <option value="@bluewin.ch">Swisscom</option>
                <option value="@sms.t-mobile.at">T-Mobile Austria</option>
                <option value="@t-d1-sms.de">T-Mobile Germany</option>
                <option value="@t-mobile.uk.net">T-Mobile UK</option>
                <option value="@gsm1800.telia.dk">Telia Denmark</option>
                <option value="@sms.vodafone.it">Vodafone Italy</option>
                <option value="@c.vodafone.ne.jp">Vodafone Japan</option>
                <option value="@h.vodafone.jp">Vodafone Japan Option 2</option>
                <option value="@vodafone.net">Vodafone UK</option>
                <option value="@t-d1-sms.de">T-Mobile Germany</option>
                <option value="@t-mobile.uk.net">T-Mobile UK</option>
            </select>    
            
            <input type="textarea" name="message" />
            
            <input type="submit" value="Submit"/>
        </form>            
        
        
        
    </section>




</body>
</html>
