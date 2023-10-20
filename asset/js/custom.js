// 初期表示
document.addEventListener('DOMContentLoaded', function() {

  // AOS option
  AOS.init({
    duration: 400,
    easing: 'ease'
  })

  // // Materialize option
  // // sidenav
  // var sidenavElem = document.querySelectorAll('.sidenav');
  // var sidenavInstance = M.Sidenav.init(sidenavElem, {
  //   // specify options here
  //   edge: 'right',
  //   draggable: true
  // });


  // // collapsible
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, {
  // // specify options here
  // });

  // // slider
  // var sliderElem = document.querySelectorAll('.slider');
  // var sliderInstance = M.Slider.init(sliderElem, {
  //   indeicators: true,
  //   height: 720,
  //   duration: 500,
  //   interval: 5000,
  //   pauseOnFocus: false,
  //   pauseOnHover: true,
  //   indeicatorLabelFunc: null,
  // });

  // // sliderのスライド処理をボタンに用いる
  // var sliderElem2 = document.querySelector('.slider');
  // var l = M.Slider.getInstance(sliderElem2);
  // const btnPrev = document.querySelector('#prev');
  // const btnNext = document.querySelector('#next');
  // btnPrev.addEventListener('click', e => {
  //   l.prev();
  // });
  // btnNext.addEventListener('click', e => {
  //   l.next();
  // })

  // テーマを変更するボタンの処理
  const currentTheme = localStorage.getItem('theme');
  const switchElems = document.getElementsByName('theme-switch');
  
  const setTheme = (isDark) => {
    if (isDark) {
      switchElems.forEach( (switchElem) => {
        switchElem.classList.add('is-dark');
        switchElem.querySelector('i').innerText = 'light_mode';
        switchElem.title = 'Switch to light mode';
      });
    }
    else {
      switchElems.forEach( (switchElem) => {
        switchElem.classList.remove('is-dark');
        switchElem.querySelector('i').innerText = 'dark_mode';
        switchElem.title = 'Switch to dark mode';
      });
    }
  }

  if (switchElems) {
    // Load
    if (currentTheme) setTheme(true);
    // Change
    window.changeTheme = function() {
      if (!switchElems[0].classList.contains('is-dark')) {
        // Dark Theme
        document.documentElement.setAttribute('theme', 'dark');
        localStorage.setItem('theme', 'dark');
        setTheme(true);
      }
      else {
        // Light Theme
        document.documentElement.removeAttribute('theme');
        localStorage.removeItem('theme');
        setTheme(false);
      }
    }
  }
});

// --------------------------------------------------------
// メニュー展開時に背景を固定する関数
// --------------------------------------------------------
const backgroundFix = (bool) => {
  // スムーズスクロールの実装
  const scrollingElement = () => {
    // Web ページにアクセスしてきた利用者のOSやブラウザの種類などの情報が含まれるUgerAgentの情報を取得
    // const browser = window.navigator.userAgent.toLowerCase();
    // スムーズスクロール非対応ブラウザに対応
    if ("scrollingElement" in document) {
      return document.scrollingElement;
    }
    return document.documentElement;
  };

  // 現在のスクロール位置を取得
  const scrollY = bool
    ? scrollingElement().scrollTop
    : parseInt(document.body.style.top || "0");

  // 背景を固定するときの設定値を決める
  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw"
  };

  // 背景を固定するときはスタイルに設定値を、外すときは空にする
  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";
  });

  // 固定を外すときはスクロール位置を元に戻す
  if (!bool) {
    window.scrollTo(0, scrollY * -1);
  }
};

// 変数定義
const CLASS = "-active";
let flg = false;
let accordionFlg = false;

let trigger = document.getElementById("sidenav-trigger");
let focusTrap = document.getElementById("focus-trap");
let menu = document.querySelector(".sidenav-area");
let accordionTrigger = document.querySelectorAll(".sidenav-accordion-trigger");

// メニュー開閉制御
trigger.addEventListener("click", (e) => { 
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);
  if (flg) {// flgの状態で制御内容を切り替え
    // backgroundFix(false);
    trigger.setAttribute("aria-expanded", "false");
    trigger.focus();
    flg = false;
  } else {
    // backgroundFix(true);
    trigger.setAttribute("aria-expanded", "true");
    flg = true;
  }
});
// escキー押下でメニューを閉じられるように
window.addEventListener("keydown", () => { //escキー押下でメニューを閉じられるように
  if (event.key === "Escape") {
    trigger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    // backgroundFix(false);
    trigger.focus();
    trigger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});

// メニュー内アコーディオン制御
accordionTrigger.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle(CLASS);
    e.currentTarget.nextElementSibling.classList.toggle(CLASS);
    if (accordionFlg) {
      e.currentTarget.setAttribute("aria-expanded", "false");
      accordionFlg = false;
    } else {
      e.currentTarget.setAttribute("aria-expanded", "true");
      accordionFlg = true;
    }
  });

});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  trigger.focus();
});


// ページトップボタンの表示
$(function() {
	// 該当なしでも
  if ( $('.pagetop').length > 0 ) {
    var topBtn = $('.pagetop');    
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        topBtn.fadeIn();
      } else {
        topBtn.fadeOut();
      }
    });
    //スクロールしてトップ
    topBtn.click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  }
});