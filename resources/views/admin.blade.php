<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Tuin Token</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/tuin_logo.png" rel="icon">
    <link href="assets/img/tuin_logo.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Arsha
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
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

    <p id="acceptedToken2">ACCEPTED TOKEN 2: </p>

    <p id="acceptedToken3">ACCEPTED TOKEN 3: </p>

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

    <h6>Set Accepted Token 1</h6>
    <input type="text" id="acceptedToken1Input">
    <button id="setAcceptedToken1SubmitButton">Set Accepted Token 1</button><br>

    <h6>Set Accepted Token 2</h6>
    <input type="text" id="acceptedToken2Input">
    <button id="setAcceptedToken2SubmitButton">Set Accepted Token 2</button><br>

    <h6>Set Accepted Token 3</h6>
    <input type="text" id="acceptedToken3Input">
    <button id="setAcceptedToken3SubmitButton">Set Accepted Token 3</button><br>
    
    <h6>Change Supply on BSC</h6>
    <input type="number" id="changeSupplyOnBscInput" min="0.0">
    <button id="changeSupplyOnBscSubmitButton">Change Supply on BSC</button> <br><br>

    <h6>Mint Token</h6>
    <label for="mintTokenInput">Number of Token To Be Minted</label>
    <input type="number" min="0.0" id="mintTokenInput"><br>
    <label for="addressToBeMinted">Destination Address</label>
    <input type="text" id="addressToBeMinted"> <br>
    <button id="mintTokenSubmitButton">Mint Token</button> <br> <br>


    <h6>Withdraw Token</h6>
    <div  class="dropdown">
      <button class="btn btn-warning dropdown-toggle" type="button" id="currencyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select Token
      </button>
      <div class="dropdown-menu" aria-labelledby="currencyDropdown">
        <a class="dropdown-item" href="#" data-value="default">
          <img src="{{ asset('assets/img/tuin_logo.png') }}" alt="Default" class="currency-icon"> -
        </a>
        <a id='usdc' class="dropdown-item" href="#" data-value="usdc">
          <img src="{{ asset('assets/img/usdc.png') }}" alt="USDC" class="currency-icon"> USDC
        </a>
        <a id='usdt' class="dropdown-item" href="#" data-value="usdt">
          <img src="{{ asset('assets/img/Usdt.png') }}" alt="USDT" class="currency-icon"> USDT
        </a>
        <a id='busd' class="dropdown-item" href="#" data-value="busd">
          <img src="{{ asset('assets/img/Busd.png') }}" alt="BUSD" class="currency-icon"> BUSD
        </a>
      </div>
    </div>
    <label for="withdrawAmountInput">Amount To Withdraw</label>
    <input type="number" id="withdrawAmountInput"><br>
    <button id="withdrawSubmitButton">Withdraw</button><br>

    <!-- Add the necessary Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Add the necessary CSS -->
    <style>
      .currency-icon {
        width: 24px;
        height: 24px;
        margin-right: 5px;
      }
    </style>
    <!-- Include Bootstrap JS (Optional if you don't need any JavaScript functionality) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add the JavaScript code -->
    <script>
      $(document).ready(function() {
        $('.dropdown-item').click(function() {
          var selectedOption = $(this);
          var value = selectedOption.data('value');
          var text = selectedOption.text();
          var imageUrl = selectedOption.find('img').attr('src');
    
          $('#selectedCurrencyText').text(text);
          $('#selectedCurrencyImage').attr('src', imageUrl);
    
          // You can also use the 'value' variable to perform additional actions based on the selected option
          console.log('Selected value: ' + value);
        });
      });
    </script>

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