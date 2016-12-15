/*
Eat-all-cookies script is run after PHP order submission
to delete all cookie variables and "empty" the shopping cart
*/

Cookies.remove('pepermint');
Cookies.remove('vanilla');
Cookies.remove('pumpkin');
Cookies.remove('productSum');

//Update carts item count to 0

$('#cart-count').html('');

//Redirect to index.php after 6 seconds

setTimeout(function () {
  window.location = 'index.php';
}, 6000);
//# sourceMappingURL=eat-all-cookies.js.map
