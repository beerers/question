$(function () {
  const $btn = $("#btn07");
  const $sideMenu = $(".header__side__menu");
  const $menuText = $(".menu-text");
  const $carousel = $(".carousel");
  const isMobile = $(window).width() <= 767;

  // slick
  $(".slider")
    .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
    })

    .slick({
      autoplay: true,
      fade: true,
      arrows: false,
      speed: 5000,
      autoplaySpeed: 7000,
      pauseOnFocus: false,
      pauseOnHover: false,
    })

    .on({
      beforeChange: function (event, slick, currentSlide, nextSlide) {
        $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
        $(".slick-slide", this)
          .eq(currentSlide)
          .addClass("remove-animation")
          .attr("aria-hidden", "true")
          .attr("tabindex", "-1"); // ★修正箇所
      },
      afterChange: function (event, slick, currentSlide) {
        $(".remove-animation", this).removeClass("remove-animation add-animation");
        $('.slick-slide[data-slick-index="' + slick.currentSlide + '"]')
          .attr("aria-hidden", "false")
          .removeAttr("tabindex");
        $(".slick-slide")
          .not('[data-slick-index="' + slick.currentSlide + '"]')
          .attr("aria-hidden", "true")
          .attr("tabindex", "-1"); // ★修正箇所
      },
    });

  // 文字を1文字ずつ表示
  function animateSequentialText($element, delayPerChar) {
    $element.find("span").each(function (index) {
      $(this)
        .delay(index * delayPerChar)
        .queue(function (next) {
          $(this).addClass("visible");
          next();
        });
    });
  }

  // 文字アニメーション（スクロール判定）
  function checkVisibility() {
    $(".sequential-text-partial").each(function () {
      const $el = $(this);
      const top = $el.offset().top;
      const bottom = top + $el.outerHeight();
      const vTop = $(window).scrollTop();
      const vBottom = vTop + $(window).height();

      if (bottom > vTop && top < vBottom && !$el.data("animated")) {
        $el.data("animated", true).addClass("animate");
        animateSequentialText($el, 100);
      }
    });
  }

  // モバイル専用：文章レイアウト調整
  if (isMobile) {
    const $conceptText = $("#concept .fade-in-target p").eq(2);
    if ($conceptText.length) {
      $conceptText.html(`当店のコーヒー、フードは、<br>全てオーガニックの物を使用しています。`);
    }

    const $healthyText1 = $(".healthy-set-text p").eq(0);
    if ($healthyText1.length) {
      $healthyText1.html(
        `私たちのヘルシーフードは、<br>
        厳選されたオーガニック食材を使用し、<br>
        栄養バランスを考慮して調理されています。<br>
        添加物や保存料を一切使用していません。`
      );
    }

    const $healthyText2 = $(".healthy-set-text p").eq(1);
    if ($healthyText2.length) {
      $healthyText2.html(
        `旬の野菜や果物を中心に、<br>
        身体に優しい調理法でその素材本来の味と栄養を最大限に引き出しています。`
      );
    }

    const $menuText = $(".healthy-menu-text");
    if ($menuText.length) {
      $menuText.html(
        `当店のコーヒー、フードは、<br>全てオーガニックの物を使用しています。<br>お子様でも安心してお召し上がりください。`
      );
    }
  }

  // メニュー画像の追加（スマホ専用）
  function addResponsiveMenuImage() {
    const moreLink = document.querySelector("#menu .menu-more-link");
    const existingImage = document.getElementById("responsive-menu-image");

    if (existingImage && window.innerWidth > 767) {
      existingImage.remove();
    }
  }

  addResponsiveMenuImage();
  window.addEventListener("resize", addResponsiveMenuImage);
});
