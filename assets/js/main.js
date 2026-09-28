/* Estoria theme interactions — vanilla JS, no dependencies. */
(function () {
  "use strict";

  /* Count-up stats */
  var statsBlock = document.getElementById("statsBlock");
  function runCountUp() {
    var nums = statsBlock ? statsBlock.querySelectorAll("[data-count]") : [];
    nums.forEach(function (el) {
      var target = parseFloat(el.getAttribute("data-count")) || 0;
      var prefix = el.getAttribute("data-prefix") || "";
      var suffix = el.getAttribute("data-suffix") || "";
      var decimals = parseInt(el.getAttribute("data-decimals") || "0", 10);
      var start = performance.now();
      function tick(t) {
        var p = Math.min((t - start) / 1400, 1);
        var eased = 1 - Math.pow(1 - p, 3);
        var v = target * eased;
        var out = decimals ? v.toFixed(decimals) : Math.round(v).toLocaleString("en-US");
        el.textContent = prefix + out + suffix;
        if (p < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    });
  }
  if (statsBlock && "IntersectionObserver" in window) {
    var statsIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { runCountUp(); statsIO.disconnect(); } });
    }, { threshold: 0.3 });
    statsIO.observe(statsBlock);
  }

  /* Income calculator */
  var calcAmount = document.getElementById("calcAmount");
  var calcYield = document.getElementById("calcYield");
  function fmtMoney(n) { return "$" + Math.round(n).toLocaleString("en-US"); }
  function updateCalc() {
    if (!calcAmount || !calcYield) return;
    var amount = Number(calcAmount.value);
    var y = Number(calcYield.value);
    var annual = amount * (y / 100);
    var monthly = annual / 12;
    var amtVal = document.getElementById("calcAmountVal");
    var yVal = document.getElementById("calcYieldVal");
    var mVal = document.getElementById("calcMonthly");
    var aVal = document.getElementById("calcAnnual");
    var tVal = document.getElementById("calcTen");
    if (amtVal) amtVal.textContent = fmtMoney(amount);
    if (yVal) yVal.textContent = y.toFixed(1) + "%";
    if (mVal) mVal.textContent = fmtMoney(monthly);
    if (aVal) aVal.textContent = fmtMoney(annual);
    if (tVal) tVal.textContent = fmtMoney(annual * 10);
  }
  if (calcAmount) calcAmount.addEventListener("input", updateCalc);
  if (calcYield) calcYield.addEventListener("input", updateCalc);
  updateCalc();

  /* Sticky header shadow */
  var header = document.getElementById("siteHeader");
  function onScroll() {
    if (!header) return;
    header.classList.toggle("is-scrolled", window.scrollY > 8);
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* Mobile drawer */
  var burger = document.getElementById("burger");
  var drawerRoot = document.getElementById("drawerRoot");
  function setDrawer(open) {
    if (!drawerRoot) return;
    drawerRoot.classList.toggle("open", open);
    drawerRoot.setAttribute("aria-hidden", open ? "false" : "true");
    if (burger) burger.setAttribute("aria-expanded", open ? "true" : "false");
    document.body.style.overflow = open ? "hidden" : "";
  }
  if (burger) burger.addEventListener("click", function () {
    setDrawer(!drawerRoot.classList.contains("open"));
  });
  document.querySelectorAll("[data-close-drawer]").forEach(function (el) {
    el.addEventListener("click", function () { setDrawer(false); });
  });

  /* Callback modal */
  var modal = document.getElementById("callbackModal");
  var lastFocus = null;
  function setModal(open) {
    if (!modal) return;
    modal.classList.toggle("open", open);
    modal.setAttribute("aria-hidden", open ? "false" : "true");
    document.body.style.overflow = open ? "hidden" : "";
    if (open) {
      lastFocus = document.activeElement;
      var phone = document.getElementById("cbPhone");
      setTimeout(function () { if (phone) phone.focus(); }, 60);
    } else if (lastFocus && lastFocus.focus) {
      lastFocus.focus();
    }
  }
  document.querySelectorAll("[data-open-callback]").forEach(function (el) {
    el.addEventListener("click", function () {
      setDrawer(false);
      // reset to form view each time it opens
      var fw = document.getElementById("modalFormWrap");
      var sw = document.getElementById("modalSuccessWrap");
      if (fw) fw.hidden = false;
      if (sw) sw.hidden = true;
      setModal(true);
    });
  });
  document.querySelectorAll("[data-close-modal]").forEach(function (el) {
    el.addEventListener("click", function () { setModal(false); });
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") { setModal(false); setDrawer(false); }
  });

  /* AJAX helper (falls back to success UI when not inside WP) */
  function postAjax(action, data, cb) {
    if (typeof estoriaData === "undefined" || !estoriaData.ajaxUrl) {
      setTimeout(function () { cb(true); }, 600);
      return;
    }
    var body = new URLSearchParams();
    body.append("action", action);
    body.append("nonce", estoriaData.nonce);
    Object.keys(data).forEach(function (k) { body.append(k, data[k]); });
    fetch(estoriaData.ajaxUrl, { method: "POST", body: body })
      .then(function (r) { cb(r.ok); })
      .catch(function () { cb(false); });
  }

  /* Hero + modal callback forms */
  function bindCallbackForm(formId, phoneId, errId, submitId) {
    var form = document.getElementById(formId);
    if (!form) return;
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var phoneEl = document.getElementById(phoneId);
      var err = errId ? document.getElementById(errId) : null;
      var submit = submitId ? document.getElementById(submitId) : null;
      var phone = phoneEl ? phoneEl.value : "";
      var digits = phone.replace(/\D/g, "");
      if (digits.length < 7) {
        if (err) err.hidden = false;
        if (phoneEl) phoneEl.focus();
        return;
      }
      if (err) err.hidden = true;
      if (submit) { submit.disabled = true; submit.textContent = "Sending…"; }
      var nameEl = document.getElementById("cbName");
      postAjax("estoria_callback", { phone: phone, name: nameEl ? nameEl.value : "" }, function () {
        if (formId === "callbackForm") {
          var fw = document.getElementById("modalFormWrap");
          var sw = document.getElementById("modalSuccessWrap");
          if (fw) fw.hidden = true;
          if (sw) sw.hidden = false;
        } else {
          setModal(true);
          var fw2 = document.getElementById("modalFormWrap");
          var sw2 = document.getElementById("modalSuccessWrap");
          if (fw2) fw2.hidden = true;
          if (sw2) sw2.hidden = false;
        }
        if (submit) { submit.disabled = false; submit.textContent = "Call me back"; }
        form.reset();
      });
    });
  }
  bindCallbackForm("callbackForm", "cbPhone", "cbError", "cbSubmit");
  bindCallbackForm("heroForm", "heroPhone", "heroError", null);

  /* Contact form */
  var contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      var err = document.getElementById("contactError");
      var btn = document.getElementById("contactSubmit");
      var name = document.getElementById("cName").value.trim();
      var email = document.getElementById("cEmail").value.trim();
      var msg = document.getElementById("cMsg").value.trim();
      var phoneEl = document.getElementById("cPhone");
      var intEl = document.getElementById("cInterest");
      if (!name || email.indexOf("@") < 0 || !msg) {
        if (err) err.hidden = false;
        return;
      }
      if (err) err.hidden = true;
      if (btn) { btn.disabled = true; btn.textContent = "Sending…"; }
      postAjax("estoria_contact", {
        name: name, email: email, message: msg,
        phone: phoneEl ? phoneEl.value : "",
        interest: intEl ? intEl.value : ""
      }, function () {
        var wrap = document.getElementById("contactWrap");
        var done = document.getElementById("contactDone");
        var doneName = document.getElementById("contactDoneName");
        if (wrap) wrap.hidden = true;
        if (done) done.hidden = false;
        if (doneName) doneName.textContent = name.split(" ")[0];
      });
    });
  }

  /* Apartment filter */
  var filterBtns = document.querySelectorAll("[data-filter]");
  var aptCards = document.querySelectorAll("[data-building]");
  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      filterBtns.forEach(function (b) { b.classList.remove("is-active"); });
      btn.classList.add("is-active");
      var f = btn.getAttribute("data-filter");
      aptCards.forEach(function (card) {
        var b = card.getAttribute("data-building");
        var show = f === "all" || b === f;
        card.style.display = show ? "" : "none";
      });
    });
  });

  /* Testimonial slider */
  var slides = document.querySelectorAll(".testi-slide");
  var dots = document.querySelectorAll("[data-slide]");
  var current = 0;
  function go(i) {
    if (!slides.length) return;
    current = (i + slides.length) % slides.length;
    slides.forEach(function (s, idx) { s.classList.toggle("is-active", idx === current); });
    dots.forEach(function (d, idx) { d.classList.toggle("is-active", idx === current); });
  }
  document.querySelectorAll("[data-testi-prev]").forEach(function (b) { b.addEventListener("click", function () { go(current - 1); }); });
  document.querySelectorAll("[data-testi-next]").forEach(function (b) { b.addEventListener("click", function () { go(current + 1); }); });
  dots.forEach(function (d) {
    d.addEventListener("click", function () { go(parseInt(d.getAttribute("data-slide"), 10) || 0); });
  });

  /* FAQ accordion */
  document.querySelectorAll(".faq-item").forEach(function (item) {
    var btn = item.querySelector(".faq-q");
    if (!btn) return;
    btn.addEventListener("click", function () {
      var wasOpen = item.classList.contains("open");
      document.querySelectorAll(".faq-item.open").forEach(function (o) {
        o.classList.remove("open");
        var b = o.querySelector(".faq-q");
        if (b) b.setAttribute("aria-expanded", "false");
      });
      if (!wasOpen) {
        item.classList.add("open");
        btn.setAttribute("aria-expanded", "true");
      }
    });
  });

  /* Scroll reveal */
  var revealEls = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window && revealEls.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("in-view");
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add("in-view"); });
  }
})();
