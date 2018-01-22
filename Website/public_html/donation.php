<html >
<head>
  <meta charset="UTF-8">
  <title>CSS Donation Thermometer</title>
  
	<style>

	body {
	  font-family: Helvetica; 
	}

	.donation-meter {
		
	  margin-left: 30px;
	  width: 100px;
	  
	  .glass {
	    background: #e5e5e5;
	    border-radius: 100px 100px 0 0;
	    display: block;
	    height: 300px;
	    margin: 0 35px 10px;
	    padding: 5px;
	    position: relative;
	    width: 20px;
	  }
	  .amount {
	    background: #f34e54;
	    border-radius: 100px;
	    display: block;
	    width: 20px;
	    position: absolute;
	     bottom: 5px;
	  }
	  strong { display: block; text-align: center; }
	  .goal {
	    font-size: 30px;
	  }
	  .total {
	    font-size: 16px;
	    position: absolute;
	    right: 35px;
	  }
	}

	.bulb {
	  background: #e5e5e5;
	  border-radius: 100px;
	  display: block;
	  height: 50px;
	  margin: 0 35px 10px;
	  padding: 5px;
	  position: relative;
	    top: -20px;
	    right: 15px;
	  width: 50px;
	  .red-circle {
	    background: #f34e54;
	    border-radius: 100px;
	    display: block;
	    height: 50px;
	    width: 50px;
	  }
	  .filler {
	    background: #f34e54;
	    border-radius: 100px 100px 0 0;
	    display: block;
	    height: 30px;
	    width: 20px;
	    position: relative;
	      top: -65px;
	      right: -15px;
	    z-index: 30;
	  }
	}
	</STYLE>
</head>

<body>
  <div class="donation-meter">
  <strong>Our Goal</strong>
  <strong class="goal">$9,001</strong>
  <span class="glass">
      <strong class="total" style="bottom: 30%">$4,500</strong>
      <span class="amount" style="height: 30%"></span>
  </span>
  <div class="bulb">
      <span class="red-circle"></span>
      <span class="filler">
          <span></span>
      </span>
  </div>
</div>
  
  
</body>
</html>
