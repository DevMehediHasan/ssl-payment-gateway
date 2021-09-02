    <!-- <div class="container">
    
     <h2>Make Form</h2>

        <form method="POST" action="..\wp-content\plugins\payment form/SSLCommerz-PHP/checkout_hosted.php"> Full name:

            <input type="text" name="customer_name"> <br> Email:

            <input type="email" name="customer_email"> <br> Phone:
            <input type="phone" name="customer_mobile"> <br> TK:

            <input type="number" name="amount"> <br>

            <input type="submit" value="Submit" name="submitbtn">

        </form>
    </div> -->
<style>
      input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=phone], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=number], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

</style>
    <h3>Quick Payment</h3>

<div>
  <form method="POST" action="..\wp-content\plugins\payment form/SSLCommerz-PHP/checkout_hosted.php">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="customer_name" placeholder="Your name.." required>

    <label for="lname">Email</label>
    <input type="text" id="email" name="customer_email" placeholder="Your Email.." required>

    <label for="country">Phone No.</label>
    <input type="phone" id="phone" name="customer_mobile" placeholder="Your Phone.." required>
  
    <label for="country">Amount</label>
    <input type="number" id="tk" name="amount" placeholder="Taka.." required>
    
    <input type="submit" value="Submit" name="submitbtn">
  </form>
</div>