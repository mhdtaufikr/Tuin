<!DOCTYPE html>
<html>
<head>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container" >
    <!-- HAPUS NANTI -->
    <h1>USDT</h1>
    <h1 id="USDTAmountTitle"></h1>
    <input type="number" id="USDTAmount" placeholder="0.1"><br>
    <h1>TT</h1>
    <h1 id="TTAmountTitle"></h1>
    <input type="number" id="TTAmount" placeholder="0.1"><br>
    <button id="fundButton">Swap</button>

    <form>
      <div class="form-group">
        <label for="fromBalance">From Balance:</label>
        <input type="text" class="form-control" id="fromBalance" value="0">
      </div>
      <div class="form-group">
        <label for="toBalance">To Balance:</label>
        <input type="text" class="form-control" id="toBalance" value="0">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS (Optional if you don't need any JavaScript functionality) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

  <!--  -->
  <script src="js/swap-contract.js" type="module"></script>
</html>
