$("#cart-count").html(Cookies.get("productSum"));

var pumpkin = parseInt(Cookies.get("pumpkin"));
var vanilla = parseInt(Cookies.get("vanilla"));
var pepermint = parseInt(Cookies.get("pepermint"));

var total;
total = parseInt(Cookies.get("productSum"));
$("#total").html(total * 80);

$("#pumpkin-quantity").html(pumpkin);
$("#vanilla-quantity").html(vanilla);
$("#pepermint-quantity").html(pepermint);

$(".minus").click(function () {
  var selected = $(this).parent().attr("id");
  if (selected == "pumpkin-prod" && pumpkin > 0) {
    pumpkin--;
    Cookies.set("pumpkin", pumpkin);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set("productSum", sum);
    $("#pumpkin-quantity").html(pumpkin);
    $("#cart-count").html(Cookies.get("productSum"));
    $("#total").html(sum * 80);
  } else if (selected == "vanilla-prod" && vanilla > 0) {
    vanilla--;
    Cookies.set("vanilla", vanilla);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set("productSum", sum);
    $("#vanilla-quantity").html(vanilla);
    $("#cart-count").html(Cookies.get("productSum"));
    $("#total").html(sum * 80);
  } else if (selected == "pepermint-prod" && pepermint > 0) {
    pepermint--;
    Cookies.set("pepermint", pepermint);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set("productSum", sum);
    $("#pepermint-quantity").html(pepermint);
    $("#cart-count").html(Cookies.get("productSum"));
    $("#total").html(sum * 80);
  }
});

$(".plus").click(function () {
  var selected = $(this).parent().attr("id");
  if (selected == "pumpkin-prod") {
    pumpkin++;
    Cookies.set("pumpkin", pumpkin);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set("productSum", sum);
    $("#pumpkin-quantity").html(pumpkin);
    $("#cart-count").html(Cookies.get("productSum"));
    $("#total").html(sum * 80);
  } else if (selected == "vanilla-prod") {
    vanilla++;
    Cookies.set("vanilla", vanilla);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set("productSum", sum);
    $("#vanilla-quantity").html(vanilla);
    $("#cart-count").html(Cookies.get("productSum"));
    $("#total").html(sum * 80);
  } else {
    pepermint++;
    Cookies.set("pepermint", pepermint);
    var sum = vanilla + pepermint + pumpkin;
    Cookies.set("productSum", sum);
    $("#pepermint-quantity").html(pepermint);
    $("#cart-count").html(Cookies.get("productSum"));
    $("#total").html(sum * 80);
  }
});

$("button[type='submit']").hover(function () {
  var sum = parseInt(Cookies.get("productSum"));
  $("#form-pumpkin").val(pumpkin);
  $("#form-vanilla").val(vanilla);
  $("#form-pepermint").val(pepermint);
  $("#form-total").val(sum * 80);
});

console.log(pumpkin, vanilla, pepermint);
//# sourceMappingURL=cart.js.map
