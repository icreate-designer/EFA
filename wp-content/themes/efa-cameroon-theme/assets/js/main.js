/**
 * EFA Cameroon – main.js
 */

(function () {
  'use strict';

  /* ── Sticky glass navbar ── */
  var navbar = document.getElementById('mainNavbar');
  var header = document.getElementById('site-header');

  if (navbar && header) {
    function onScroll() {
      var headerBottom = header.getBoundingClientRect().bottom;
      if (headerBottom <= 0) {
        navbar.classList.add('navbar-glass');
        document.body.classList.add('navbar-is-fixed');
      } else {
        navbar.classList.remove('navbar-glass');
        document.body.classList.remove('navbar-is-fixed');
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── Newsletter AJAX ── */
  var submitBtn = document.getElementById('newsletter-submit');
  var emailInput = document.getElementById('newsletter-email');
  var msgEl = document.getElementById('newsletter-msg');

  if (submitBtn && emailInput && typeof efaAjax !== 'undefined') {
    submitBtn.addEventListener('click', function () {
      var email = emailInput.value.trim();
      if (!email) return;

      var formData = new FormData();
      formData.append('action', 'efa_newsletter');
      formData.append('nonce', efaAjax.nonce);
      formData.append('email', email);

      submitBtn.disabled = true;
      submitBtn.textContent = '…';

      fetch(efaAjax.ajaxurl, { method: 'POST', body: formData })
        .then(function (r) { return r.json(); })
        .then(function (data) {
          if (msgEl) {
            msgEl.style.display = 'block';
            msgEl.textContent = data.data.message;
          }
          emailInput.value = '';
          submitBtn.disabled = false;
          submitBtn.textContent = "S'inscrire";
        })
        .catch(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = "S'inscrire";
        });
    });
  }

})();
