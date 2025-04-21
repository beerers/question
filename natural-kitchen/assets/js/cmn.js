$(function () {
  // カーソル用のdivタグを取得してcursorに格納
  const cursor = document.getElementById("cursor");

  // スマホサイズ以下の場合は処理を行わない
  if (window.innerWidth > 767) {
    // カーソル用の div タグをマウスに追従させる
    document.addEventListener("mousemove", function (e) {
      cursor.style.transform = "translate(" + e.clientX + "px, " + e.clientY + "px)";
    });

    // リンクにホバーした時にクラス追加、離れたらクラス削除
    const link = document.querySelectorAll("a, .btn-trigger");
    for (let i = 0; i < link.length; i++) {
      link[i].addEventListener("mouseover", function (e) {
        cursor.classList.add("cursor--hover");
      });
      link[i].addEventListener("mouseout", function (e) {
        cursor.classList.remove("cursor--hover");
      });
    }
  }
  // ハンバーガーメニュー操作
  $btn.on("click", function () {
    $sideMenu.toggleClass("active");
    $btn.toggleClass("active"); // hovered クラスは mouseenter/mouseleave で管理
    $menuText.toggleClass("active");

    if ($btn.hasClass("active")) {
      // 開くアニメーションが完了したら was-active を付与
      $btn.removeClass("was-active"); // 開くときは was-active を削除
    } else {
      // 閉じるアニメーションが完了したら was-active を付与
      $btn.addClass("was-active");
    }
    // MENU ⇄ CLOSE切り替え
    if ($menuText.text() === "MENU") {
      $menuText.text("CLOSE");
    } else {
      $menuText.text("MENU");
    }
  });

  $btn
    .on("mouseenter", function () {
      $btn.addClass("hovered");
    })
    .on("mouseleave", function () {
      $btn.removeClass("hovered");
    });

  // fade-in 表示
  $(window).on("scroll", function () {
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    $(".fade-in-target").each(function () {
      if (scroll > $(this).offset().top - windowHeight + 100) {
        $(this).addClass("fade-in");
      }
    });
  });

  // スムーススクロール
  $(".back-to-top-link").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 1000);
  });

  // scroll_down の a 要素がクリックされた時の処理
  $(".scroll_down a").on("click", function (e) {
    e.preventDefault();

    // 現在の画面の中心の Y 座標を取得
    const windowHeight = $(window).height();
    const currentCenter = $(window).scrollTop() + windowHeight / 2;

    let nextSection = null;
    let minDistance = Infinity;

    // 各セクションの位置を確認
    $("section").each(function () {
      const sectionTop = $(this).offset().top;
      const distance = sectionTop - currentCenter;

      // 現在の中心より下にあり、最も近いセクションを探す
      if (distance > 0 && distance < minDistance) {
        minDistance = distance;
        nextSection = $(this);
      }
    });

    // 次のセクションが存在する場合はスクロール
    if (nextSection) {
      const scrollToPosition = nextSection.offset().top;
      $("html, body").animate({ scrollTop: scrollToPosition }, 1000);
    }
  });

  // Intersection Observer登録
  const observerOptions = { threshold: 1 };
  function createObserver(selector, animationClass) {
    const element = document.querySelector(selector);
    if (!element) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add(animationClass);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    observer.observe(element);
  }

  createObserver("#news .coffee-text", "start-animation");
  createObserver(".healthy-food-animate-target", "start-animation-healthy");
  createObserver(".menu-animate-target", "start-animation-healthy");
  createObserver(".access-animate-target", "start-animation-healthy");

  // 初期アニメ判定
  setTimeout(checkVisibility, 100);
  $(window).on("scroll", checkVisibility);
});
