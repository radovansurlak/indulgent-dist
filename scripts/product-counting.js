
var productCount = {
  pumpkin: parseInt(Cookies.get("pumpkin")),
  vanilla: parseInt(Cookies.get("vanilla")),
  pepermint: parseInt(Cookies.get("pepermint"))
};

$("#cart-count").html(Cookies.get("productSum"));

$('button[type="buy-now"]').click(function () {

  var selected = $(this).parent().parent().attr('id');

  if (selected == "pumpkin") {
    productCount.pumpkin++;
    Cookies.set("pumpkin", productCount.pumpkin);
  } else if (selected == "vanilla") {
    productCount.vanilla++;
    Cookies.set("vanilla", productCount.vanilla);
  } else {
    productCount.pepermint++;
    Cookies.set("pepermint", productCount.pepermint);
  };

  var productSum = productCount.pumpkin + productCount.vanilla + productCount.pepermint;

  Cookies.set("productSum", productSum);

  $("#cart-count").html(Cookies.get("productSum"));

  console.log(productCount);
});
//# sourceMappingURL=product-counting.js.map
