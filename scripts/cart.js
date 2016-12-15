//This module handles product ordering at cart.php page
//Transfer of variables between pages is handled by cookies

//Checking if cookies are set

if (isNaN(parseInt(Cookies.get('pumpkin'))) || isNaN(parseInt(Cookies.get('vanilla'))) || isNaN(parseInt(Cookies.get('pepermint'))))

  //If cookies are not set - initialize cookie variables

  {
    console.log('cookie unset');
    Cookies.set('pumpkin', 0);
    Cookies.set('vanilla', 0);
    Cookies.set('pepermint', 0);
  };

//If variable for product sum is initialized - update cart items counter in the menu

if (!isNaN(Cookies.get('productSum'))) {
  $('#cart-count').html(Cookies.get('productSum'));
};

$('#cart-count').html(Cookies.get('productSum'));

//Initialize local variables for products with values obtained from cookies

var pumpkin = parseInt(Cookies.get('pumpkin'));
var vanilla = parseInt(Cookies.get('vanilla'));
var pepermint = parseInt(Cookies.get('pepermint'));

var total = parseInt(Cookies.get('productSum'));
$('#total').html(total * 80);

//Display item quantities in the product bar

$('#pumpkin-quantity').html(pumpkin);
$('#vanilla-quantity').html(vanilla);
$('#pepermint-quantity').html(pepermint);

//Decresing quantity of products using jQuery's click event
//when "-" sign is clicked

$('.minus').click(function () {
  var selected = $(this).parent().attr('id');
  if (selected == 'pumpkin-prod' && pumpkin > 0) {
    pumpkin--;
    Cookies.set('pumpkin', pumpkin);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set('productSum', sum);
    $('#pumpkin-quantity').html(pumpkin);
    $('#cart-count').html(Cookies.get('productSum'));
    $('#total').html(sum * 80);
  } else if (selected == 'vanilla-prod' && vanilla > 0) {
    vanilla--;
    Cookies.set('vanilla', vanilla);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set('productSum', sum);
    $('#vanilla-quantity').html(vanilla);
    $('#cart-count').html(Cookies.get('productSum'));
    $('#total').html(sum * 80);
  } else if (selected == 'pepermint-prod' && pepermint > 0) {
    pepermint--;
    Cookies.set('pepermint', pepermint);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set('productSum', sum);
    $('#pepermint-quantity').html(pepermint);
    $('#cart-count').html(Cookies.get('productSum'));
    $('#total').html(sum * 80);
  }
});

//And this block handles increasing quantity by clicking the "+" sign

$('.plus').click(function () {
  var selected = $(this).parent().attr('id');
  if (selected == 'pumpkin-prod') {
    pumpkin++;
    Cookies.set('pumpkin', pumpkin);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set('productSum', sum);
    $('#pumpkin-quantity').html(pumpkin);
    $('#cart-count').html(Cookies.get('productSum'));
    $('#total').html(sum * 80);
  } else if (selected == 'vanilla-prod') {
    vanilla++;
    Cookies.set('vanilla', vanilla);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set('productSum', sum);
    $('#vanilla-quantity').html(vanilla);
    $('#cart-count').html(Cookies.get('productSum'));
    $('#total').html(sum * 80);
  } else {
    pepermint++;
    Cookies.set('pepermint', pepermint);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set('productSum', sum);
    $('#pepermint-quantity').html(pepermint);
    $('#cart-count').html(Cookies.get('productSum'));
    $('#total').html(sum * 80);
  }
});

//Block below sets values of hidden input elements for PHP form

$('button[type=\'submit\']').hover(function () {
  var sum = parseInt(Cookies.get('productSum'));
  $('#form-pumpkin').val(pumpkin);
  $('#form-vanilla').val(vanilla);
  $('#form-pepermint').val(pepermint);
  $('#form-total').val(sum * 80);
});
//# sourceMappingURL=cart.js.map
