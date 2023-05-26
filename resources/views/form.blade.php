<!DOCTYPE html>
<html>
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
  
<body style="background-image:url('assets/img/OIG.jpg');
background-repeat: repeat;" >
  <div class="container" >
    <div class="text-center">
      <br>
     
      <img style="max-width: 500px; height: auto;" src="assets/img/TUINSWAP-removebg-preview.png" class="img-fluid logo-image" alt="">
    
      <br>     
      

      <div class="row justify-content-center">
        <div class="col-xl-5 col-md-8">
            <div class="bg-white  rounded-5 shadow-5-strong p-5">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <div  class="dropdown">
                  <button class="btn btn-warning dropdown-toggle" type="button" id="currencyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Token
                  </button>
                  <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                    <a class="dropdown-item" href="#" data-value="default">
                      <img src="{{ asset('assets/img/tuin_logo.png') }}" alt="Default" class="currency-icon"> -
                    </a>
                    <a id='usdt' class="dropdown-item" href="#" data-value="usdt">
                      <img src="{{ asset('assets/img/Usdt.png') }}" alt="USDT" class="currency-icon"> USDT
                    </a>
                    <a id='busd' class="dropdown-item" href="#" data-value="busd">
                      <img src="{{ asset('assets/img/Busd.png') }}" alt="BUSD" class="currency-icon"> BUSD
                    </a>
                    <a id='usdc' class="dropdown-item" href="#" data-value="usdc">
                      <img src="{{ asset('assets/img/usdc.png') }}" alt="USDC" class="currency-icon"> USDC
                    </a>
                  </div>
                </div>
                
                <div id="selectedCurrency">
                  <p id="selectCurrencyMessage"></p>
                  <p>Selected Token: <span id="selectedCurrencyText">Default</span></p>
                  <img id="selectedCurrencyImage" src="{{ asset('assets/img/tuin_logo.png') }}" alt="Default" class="currency-icon">
                </div>
                
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

                <p class="form-label" id="fromBalance"></p>
                <input  class="form-control" type="number" id="FromInput" placeholder="0.1"><br>
              
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                
                <img style="max-width: 20px; height: auto;" src="assets/img/arrow.png" class="img-fluid logo-image" alt=""><br><br><br>
                <p class="form-label" for="form1Example2"><img style="max-width: 50px; height: auto;" src="assets/img/tuin_logo.png" class="img-fluid logo-image" alt=""> Tuin Token</p>
                <p class="form-label" id="TTBalance"></p>
              <input  class="form-control"  type="number" id="ToInput" placeholder="0.1"><br>
                
              </div>

              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                {{--  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3">
                      Remember me
                    </label>
                  </div> --}}
                </div>

              </div>
              <!-- Submit button -->
              <button class="btn btn-info btn-block" id="connectWallet">Connect to Wallet</button>
              <button class="btn btn-primary btn-block" id="swapButton">Swap</button>
            </div>
        </div>
      </div>

    {{--   <h1>USDT</h1>
      <h1>From</h1>
      <h1 id="USDTBalance"></h1>
      <input type="number" id="USDTAmount" placeholder="0.1"><br>
      <h1>TT</h1>
      <h1>To</h1>
      <h1 id="TTBalance"></h1>
      <input type="number" id="TTAmount" placeholder="0.1"><br>
      <button id="fundButton">Swap</button> --}}
    </div>
    <!-- Pakai yang ini -->
    

    <!-- <form>
      <div class="form-group">
        <label for="fromBalance">From Balance:</label>
        <input type="text" class="form-control" id="fromBalance" value="0">
      </div>
      <div class="form-group">
        <label for="toBalance">To Balance:</label>
        <input type="text" class="form-control" id="toBalance" value="0">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->
  </div>

  <!-- Include Bootstrap JS (Optional if you don't need any JavaScript functionality) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

  <!--  -->
  <script src="js/swap-contract.js" type="module"></script>
</html>
