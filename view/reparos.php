<link rel="stylesheet" href="../assets/css/reparo.css">
<div class="card">
  <div class="products">
    <div class="product active" product-id="1" product-color="#D18B49">
      <div class="thumbnail"><img src=""/></div>
      <h1 class="title">The Magnificent Stag</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="2" product-color="#542F13">
      <div class="thumbnail"><img src=""/></div>
      <h1 class="title">The Courageous Bear</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="3" product-color="#A5AAAE">
      <div class="thumbnail"><img src=""/></div>
      <h1 class="title">The Sneaky Mouse</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="4" product-color="#ED8D1F">
      <div class="thumbnail"><img src=""/></div>
      <h1 class="title">The Cunning Fox</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="5" product-color="#C4C8CB">
      <div class="thumbnail"><img src=""/></div>
      <h1 class="title">The Jumpy Rabbit</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
  </div>
  <div class="footer"><a class="btn" id="prev" href="#" ripple="" ripple-color="#666666">Voltar</a><a class="btn" id="next" href="#" ripple="" ripple-color="#666666">Próximo</a></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
  var getProductHeight = $(".product.active").height();

  $(".products").css({
    height: getProductHeight
  });

  function calcProductHeight() {
    getProductHeight = $(".product.active").height();

    $(".products").css({
      height: getProductHeight
    });
  }

  function animateContentColor() {
    var getProductColor = $(".product.active").attr("product-color");

    $("body").css({
      background: getProductColor
    });

    $(".title").css({
      color: getProductColor
    });

    $(".btn").css({
      color: getProductColor
    });
  }

  var productItem = $(".product"),
    productCurrentItem = productItem.filter(".active");

  $("#next").on("click", function (e) {
    e.preventDefault();

    var nextItem = productCurrentItem.next();

    productCurrentItem.removeClass("active");

    if (nextItem.length) {
      productCurrentItem = nextItem.addClass("active");
    } else {
      productCurrentItem = productItem.first().addClass("active");
    }

    calcProductHeight();
    animateContentColor();
  });

  $("#prev").on("click", function (e) {
    e.preventDefault();

    var prevItem = productCurrentItem.prev();

    productCurrentItem.removeClass("active");

    if (prevItem.length) {
      productCurrentItem = prevItem.addClass("active");
    } else {
      productCurrentItem = productItem.last().addClass("active");
    }

    calcProductHeight();
    animateContentColor();
  });

  // Ripple
  $("[ripple]").on("click", function (e) {
    var rippleDiv = $('<div class="ripple" />'),
      rippleSize = 60,
      rippleOffset = $(this).offset(),
      rippleY = e.pageY - rippleOffset.top,
      rippleX = e.pageX - rippleOffset.left,
      ripple = $(".ripple");

    rippleDiv
      .css({
        top: rippleY - rippleSize / 2,
        left: rippleX - rippleSize / 2,
        background: $(this).attr("ripple-color")
      })
      .appendTo($(this));

    window.setTimeout(function () {
      rippleDiv.remove();
    }, 1900);
  });
});

</script>