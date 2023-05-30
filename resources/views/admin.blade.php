<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button class="btn btn-info btn-block" id="connectWallet">Connect to Wallet</button><br>

    <h1>Token Contract</h1>
    <h3 id="tokenAddress">ADDRESS: </h3>
    <h3 id="tokenOwner">OWNER: </h3>
    <h3 id="pool">POOL: </h3>
    <h3 id="name">NAME: </h3>
    <h3 id="symbol">SYMBOL: </h3>
    <p id="init_maxsupply_on_eth">INIT MAX SUPPLY ON ETH: </p>
    <p id="init_maxsupply_on_bsc">INIT MAX SUPPLY ON BSC: </p>
    <p id="maxSupply">MAX SUPPLY: </p>
    <p id="totalSupply">TOTAL SUPPLY: </p>
    <p id="maxsupply_on_eth">MAX SUPPLY ON ETH: </p>
    <p id="maxsupply_on_bsc">MAX SUPPLY ON BSC: </p>
    <p id="decimals">DECIMALS: </p>

    <h1>Pool Contract</h1>
    <h3 id="poolAddress">ADDRESS: </h3>
    <h3 id="poolOwner">OWNER: </h3>
    <h3 id="deploymentChainId">DEPLOYMENT CHAIN ID: </h3>
    <p id="tuinHeld">TUIN HELD: </p>
    <p id="acceptedToken1">ACCEPTED TOKEN 1: </p>
    <input type="text" id="acceptedToken1Input">
    <button id="setAcceptedToken1SubmitButton">Set Accepted Token 1</button><br>

    <p id="acceptedToken2">ACCEPTED TOKEN 2: </p>
    <input type="text" id="acceptedToken2Input">
    <button id="setAcceptedToken2SubmitButton">Set Accepted Token 2</button><br>

    <p id="acceptedToken3">ACCEPTED TOKEN 3: </p>
    <input type="text" id="acceptedToken3Input">
    <button id="setAcceptedToken3SubmitButton">Set Accepted Token 3</button><br>

    <p id="amountDepositedAcceptedToken1">AMOUNT DEPOSITED ACCEPTED TOKEN 1: </p>
    <p id="amountDepositedAcceptedToken2">AMOUNT DEPOSITED ACCEPTED TOKEN 2: </p>
    <p id="amountDepositedAcceptedToken3">AMOUNT DEPOSITED ACCEPTED TOKEN 3: </p>
    <p id="amountWithdrawnacceptedToken1">AMOUNT WITHDRAWN ACCEPTED TOKEN 1: </p>
    <p id="amountWithdrawnacceptedToken2">AMOUNT WITHDRAWN ACCEPTED TOKEN 2: </p>
    <p id="amountWithdrawnacceptedToken3">AMOUNT WITHDRAWN ACCEPTED TOKEN 3: </p>
    
    <p id="exchangeRateTuin">EXCHANGE RATE TUIN: </p>
    <input type="number" id="exchangeRateTuinInput" min="1">
    <button id="setExchangeRateTuinSubmitButton">Set Exchange Rate TUIN</button><br>

    <p id="exchangeRateUsd">EXCHANGE RATE USD: </p>
    <input type="number" id="exchangeRateUsdInput" min="1">
    <button id="setExchangeRateUsdSubmitButton">Set Exchange Rate USD</button><br>

    <p id="yieldToken">YIELD TOKEN: </p>
    <p id="isApproved">IS APPROVED: </p>
    <p id="isPaused">IS PAUSED: </p>

    <h1>Wallet Contract</h1>
    <h3 id="walletAddress">ADDRESS: </h3>
    <h3 id="walletOwner">OWNER: </h3>

    <!-- <input type="text" id="poolOwnerInput">
    <button id="setPoolOwnerSubmitButton">Set Pool Owner</button><br> -->

    <!-- <input type="text" id="tokenOwnerInput">
    <button id="setTokenOwnerSubmitButton">Set Token Owner</button><br> -->

    <a href="{{ url('/logout') }}" class="dropdown-item dropdown-footer">
      <i class="fas fa-sign-out-alt"></i> Logout
  </a>

</body>
  <!--  -->
  <script src="js/tuin-wallet.js" type="module"></script>
</html>