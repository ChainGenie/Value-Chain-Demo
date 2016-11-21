<?php
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Range, Content-Disposition, Content-Type, Authorization');
header('Access-Control-Allow-Credentials: true');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
/*find account balance of user*/
/*
var form = new FormData();
form.append("accountId", "0x76d35be899fe3834ac5f74c96e3bc060d90282a7");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/basicfns/GetAccountBalance",
  "method": "POST",
  "headers": {
    "ApiKey": "email magic@chaingenie.com for your apikey",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>

<script>
/*Generic reporting*/
/*
var form = new FormData();
form.append("filterValue", "none");
form.append("filterField", "none");
form.append("onSaleOnly", "false");
form.append("sortField", "itemValidUntil");
form.append("onSaleOnly", "true");
form.append("sortOrder", "desc");
form.append("maxPrice", "0");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/tradechain/GetItemsFilterSort",
  "method": "POST",
  "headers": {
    "ApiKey": "email magic@chaingenie.com for your apikey",
    "cache-control": "no-cache",
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>

<script>
/*Create trade agreement contract by seller*/
/*
var form = new FormData();
form.append("itemName", "doodle craft");
form.append("itemPartNum", "#XYZ123");
form.append("itemValue", "20");
form.append("itemSellerName", "yoda");
form.append("itemValidUntil", "12/11/2016");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/tradechain/CreateTradeContract",
  "method": "POST",
  "headers": {
    "ApiKey": "email magic@chaingenie.com for your apikey",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>

<script>
/*Confirm purchase by buyer*/
/*
var form = new FormData();
form.append("itemContractId", "0xe47744f1fcc935704cd1efb7eed4e35b917a222b"); //replace the value here with contract id
form.append("itemBuyerName", "darth");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/tradechain/ConfirmPurchase",
  "method": "POST",
  "headers": {
    "ApiKey": "email magic@chaingenie.com for your apikey",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>

<script>
/*Get funds locked in contract - escrow collected*/
/*
var form = new FormData();
form.append("itemContractId", "0xe47744f1fcc935704cd1efb7eed4e35b917a222b"); //replace the value here with contract id

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/tradechain/GetFundsLockedInContract",
  "method": "POST",
  "headers": {
    "ApiKey": "email magic@chaingenie.com for your apikey",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>

<script>
/*confirm receipt of item by buyer*/
/*
var form = new FormData();
form.append("itemContractId", "0xe47744f1fcc935704cd1efb7eed4e35b917a222b"); //replace the value here with contract id
form.append("itemBuyerName", "darth");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/tradechain/ConfirmReceived",
  "method": "POST",
  "headers": {
    "ApiKey": "email magic@chaingenie.com for your apikey",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>

<script>
/*Get state of contract - 0=Created; 1=Locked; 2=Inactive*/
/*
var form = new FormData();
form.append("itemContractId", "0xe47744f1fcc935704cd1efb7eed4e35b917a222b"); //replace the value here with contract id

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.chaingenie.com/api/v1/tradechain/GetStateOfContract",
  "method": "POST",
  "headers": {
    "ApiKey": "",
    "cache-control": "no-cache"
  },
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
*/
</script>
