<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>

<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  // PAYMENT FUNCTION
  function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: 'pk_test_9a66f0be5bdc776def0d8776416b637dc1060720', // Replace with your public key
		email: document.getElementById("email-address").value,
		amount: document.getElementById("amount").value * 100,
		currency:'GHS',
		onClose: function(){
		alert('Window closed.');
		},
		callback: function(response){
            alert("payment have been made");
		}
	});
	handler.openIframe();
}
</script> 
<!-- <script type="text/javascript">
    function myAjax(){
        event.preventDefault();
        alert("this is me from javascript");
        const xhttp=new XMLHttpRequest();
        xhttp.onload = function(){
            alert(this.repsonseText);
        }
        xttp.open("GET", "../actions/location of the processing.php", true);
        xttp.send();
    }
</script>

    //query. get will be the location of the file. make an id for the button and then replace the button  with button name with # infront
    <script>
$(document).ready(function(){
  $("#button_id").click(function(){
    event.preventDefault();
    alert(this is jquery");
    function(data, status)
    $.get("demo_test.asp", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script> -->
