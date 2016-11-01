<?php
/*
    * Config for PayPal specific values
*/

//Whether Sandbox environment is being used, Keep it true for testing
define("SANDBOX_FLAG", true);

//PayPal REST API endpoints
define("SANDBOX_ENDPOINT", "https://api.sandbox.paypal.com");
define("LIVE_ENDPOINT", "https://api.paypal.com");

//Merchant ID
define("MERCHANT_ID", "XSGBWWLU42BHA");

//PayPal REST App SANDBOX Client Id and Client Secret
define("SANDBOX_CLIENT_ID", "AT7PLemk-OGFBzrMAZoNO2qAjzj2mUhO_gjg1nfcSe2bHKMb7kZJaI7p2cHv4fpGznYGBwZwT_Hsq0Ol");
define("SANDBOX_CLIENT_SECRET", "EJ7HvacBjlc-6sb5e8X0bch6InZ2JOJKhlM6lOGzWHB4AAAKW9BZIktZh11ag8JKzrrlrALK2qln75fO");

//Environments -Sandbox and Production/Live
define("SANDBOX_ENV", "sandbox");
define("LIVE_ENV", "production");

//PayPal REST App SANDBOX Client Id and Client Secret
define("LIVE_CLIENT_ID", "live_Client_Id");
define("LIVE_CLIENT_SECRET", "live_Client_Secret");

//ButtonSource Tracker Code
define("SBN_CODE", "PP-DemoPortal-EC-IC-php-REST");

?>