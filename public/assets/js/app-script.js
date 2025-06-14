const navAppBg = document.getElementById('navapp');
const hamburger = document.getElementById('hamburger-toggle');
const navAppTitle = document.getElementById('navTitle');
const navAppMenu0 = document.getElementById('navMenu-0');
const navAppMenu1 = document.getElementById('navMenu-1');
const navAppMenu2 = document.getElementById('navMenu-2');
const navAppMenu3 = document.getElementById('navMenu-3');
const navAppMenu4 = document.getElementById('navMenu-4');
const navAppMenu5 = document.getElementById('navMenu-5');
const navAppMenu6 = document.getElementById('navMenu-6');
const navAppMenu7 = document.getElementById('navMenu-7');
const spanlogo = document.getElementById('spanNavTitle');
const bgLogin = document.getElementById('navLogin');

// if (window.location.href.includes("index.html") || window.location.href.includes("daftarRuangan.html") || window.location.href.includes("detailRuangan.html") || window.location.href.includes("pinjamRuangan.html") || window.location.href.includes("profile.html") || window.location.href.includes("notifikasi.html") || window.location.href.includes("detailNotifikasi.html") || window.location.href.includes("editPinjamRuang.html")) {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 100) {
      navAppBg.classList.add('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 90) {
      navAppBg.classList.add('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 80) {
      navAppBg.classList.add('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 70) {
      navAppBg.classList.add('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 60) {
      navAppBg.classList.add('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      // navAppTitle.classList.add('text-dark');
      // navAppMenu0.classList.add('text-dark');
      // navAppMenu1.classList.add('text-dark');
      // navAppMenu2.classList.add('text-dark');
      // navAppMenu3.classList.add('text-dark');
      // navAppMenu4.classList.add('text-dark');
      // navAppMenu5.classList.add('text-dark');
      // navAppMenu6.classList.add('text-dark');
      // navAppMenu7.classList.add('text-dark');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 50) {
      navAppBg.classList.add('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      // navAppTitle.classList.add('text-dark');
      // navAppMenu0.classList.add('text-dark');
      // navAppMenu1.classList.add('text-dark');
      // navAppMenu2.classList.add('text-dark');
      // navAppMenu3.classList.add('text-dark');
      // navAppMenu4.classList.add('text-dark');
      // navAppMenu5.classList.add('text-dark');
      // navAppMenu6.classList.add('text-dark');
      // navAppMenu7.classList.add('text-dark');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    }else if (window.scrollY > 40) {
      navAppBg.classList.add('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      // navAppTitle.classList.add('text-dark');
      // navAppMenu0.classList.add('text-dark');
      // navAppMenu1.classList.add('text-dark');
      // navAppMenu2.classList.add('text-dark');
      // navAppMenu3.classList.add('text-dark');
      // navAppMenu4.classList.add('text-dark');
      // navAppMenu5.classList.add('text-dark');
      // navAppMenu6.classList.add('text-dark');
      // navAppMenu7.classList.add('text-dark');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 30) {
      navAppBg.classList.add('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-10');
      // navAppTitle.classList.add('text-dark');
      // navAppMenu0.classList.add('text-dark');
      // navAppMenu1.classList.add('text-dark');
      // navAppMenu2.classList.add('text-dark');
      // navAppMenu3.classList.add('text-dark');
      // navAppMenu4.classList.add('text-dark');
      // navAppMenu5.classList.add('text-dark');
      // navAppMenu6.classList.add('text-dark');
      // navAppMenu7.classList.add('text-dark');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 20) {
      navAppBg.classList.add('navbar-scrolled-20');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-10');
      // navAppTitle.classList.add('text-dark');
      // navAppMenu0.classList.add('text-dark');
      // navAppMenu1.classList.add('text-dark');
      // navAppMenu2.classList.add('text-dark');
      // navAppMenu3.classList.add('text-dark');
      // navAppMenu4.classList.add('text-dark');
      // navAppMenu5.classList.add('text-dark');
      // navAppMenu6.classList.add('text-dark');
      // navAppMenu7.classList.add('text-dark');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else if (window.scrollY > 10) {
      navAppBg.classList.add('navbar-scrolled-10');
      navAppBg.classList.remove('navbar-scrolled-100');
      navAppBg.classList.remove('navbar-scrolled-90');
      navAppBg.classList.remove('navbar-scrolled-80');
      navAppBg.classList.remove('navbar-scrolled-70');
      navAppBg.classList.remove('navbar-scrolled-60');
      navAppBg.classList.remove('navbar-scrolled-50');
      navAppBg.classList.remove('navbar-scrolled-40');
      navAppBg.classList.remove('navbar-scrolled-30');
      navAppBg.classList.remove('navbar-scrolled-20');
      // navAppTitle.classList.add('text-dark');
      // navAppMenu0.classList.add('text-dark');
      // navAppMenu1.classList.add('text-dark');
      // navAppMenu2.classList.add('text-dark');
      // navAppMenu3.classList.add('text-dark');
      // navAppMenu4.classList.add('text-dark');
      // navAppMenu5.classList.add('text-dark');
      // navAppMenu6.classList.add('text-dark');
      // navAppMenu7.classList.add('text-dark');
      hamburger.classList.add('text-dark');
      spanlogo.classList.add('dotlogo-white');
      bgLogin.classList.add('nav-login-menu-scroll')
      spanlogo
      if (window.innerWidth <= 1280) {
        // navAppMenu0.classList.remove('text-dark');
        // navAppMenu1.classList.remove('text-dark');
        // navAppMenu2.classList.remove('text-dark');
        // navAppMenu3.classList.remove('text-dark');
        // navAppMenu4.classList.remove('text-dark');
        // navAppMenu5.classList.remove('text-dark');
        // navAppMenu6.classList.remove('text-dark');
        // navAppMenu7.classList.remove('text-dark');
      }
    } else {
      navAppBg.classList.remove('navbar-scrolled-10', 'navbar-scrolled-20', 'navbar-scrolled-30', 'navbar-scrolled-40', 'navbar-scrolled-50', 'navbar-scrolled-60', 'navbar-scrolled-70', 'navbar-scrolled-80', 'navbar-scrolled-90', 'navbar-scrolled-100');
      navAppTitle.classList.remove('text-dark');
      navAppMenu0.classList.remove('text-dark');
      navAppMenu1.classList.remove('text-dark');
      navAppMenu2.classList.remove('text-dark');
      navAppMenu3.classList.remove('text-dark');
      navAppMenu4.classList.remove('text-dark');
      navAppMenu5.classList.remove('text-dark');
      navAppMenu6.classList.remove('text-dark');
      navAppMenu7.classList.remove('text-dark');
      hamburger.classList.remove('text-dark');
      spanlogo.classList.remove('dotlogo-white')
      bgLogin.classList.remove('nav-login-menu-scroll')
    }
  });
// }
