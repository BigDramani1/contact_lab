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
            alert("payment have been made"+ response.reference);
            $.ajax({
              url:"processing.php?reference="+ response.reference,
              method:'GET',
              success: function (response){
                alert(response);
              }

            });
		}
	});
	handler.openIframe();
}
</script> 
