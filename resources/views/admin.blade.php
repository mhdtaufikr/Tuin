<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>HELD</p>
    <p id="tuinTokenSupply"></p>
    <p id="tuinBscSupply"></p>
    <p id="tuinEthHeld"></p>

    <button class="btn btn-info btn-block" id="connectWallet">Connect to Wallet</button><br>

    <button class="btn btn-info btn-block" id="showData">Show Data</button><br>
    
    <input type="number" id="exchangeRateInput">
    <button id="setExchangeRateSubmitButton">Set Exchange Rate</button><br>

    <input type="text" id="acceptedToken1Input">
    <button id="setAcceptedToken1SubmitButton">Set Accepted Token 1</button><br>

    <input type="text" id="acceptedToken2Input">
    <button id="setAcceptedToken2SubmitButton">Set Accepted Token 2</button><br>

    <input type="text" id="acceptedToken3Input">
    <button id="setAcceptedToken3SubmitButton">Set Accepted Token 3</button><br>
</body>
  <!--  -->
  <script src="js/tuin-wallet.js" type="module"></script>
</html>