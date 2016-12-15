//This module handles cookies and adding items to cart
//by clicking the "buy now" buttons

//Initialize cookies

if (isNaN(parseInt(Cookies.get('pumpkin'))) || isNaN(parseInt(Cookies.get('vanilla'))) || isNaN(parseInt(Cookies.get('pepermint')))) {
  console.log('cookie unset');
  Cookies.set('pumpkin', 0);
  Cookies.set('vanilla', 0);
  Cookies.set('pepermint', 0);
}

//This block initializes local item count with values stored in cookies

var productCount = {
  pumpkin: parseInt(Cookies.get('pumpkin')),
  vanilla: parseInt(Cookies.get('vanilla')),
  pepermint: parseInt(Cookies.get('pepermint'))
};

if (!isNaN(Cookies.get('productSum'))) {
  $('#cart-count').html(Cookies.get('productSum'));
}

//Add product to cart by clicking the "buy now" button
//jQuery parent() function is used to traverse the DOM
//and identify the parent section ID of clicked button

$('button[type="buy-now"]').click(function () {

  var selected = $(this).parent().parent().attr('id');

  //Increment corresponding item count

  if (selected == 'pumpkin') {
    productCount.pumpkin++;
    Cookies.set('pumpkin', productCount.pumpkin);
  } else if (selected == 'vanilla') {
    productCount.vanilla++;
    Cookies.set('vanilla', productCount.vanilla);
  } else if (selected == 'pepermint') {
    productCount.pepermint++;
    Cookies.set('pepermint', productCount.pepermint);
  };

  //Update total product count and store this in productSum variable

  var productSum = productCount.pumpkin + productCount.vanilla + productCount.pepermint;

  //Set productSum cookie variable

  Cookies.set('productSum', productSum);

  //Initialize display of cart count

  $('#cart-count').html(Cookies.get('productSum'));
});
//# sourceMappingURL=product-counting.js.map
