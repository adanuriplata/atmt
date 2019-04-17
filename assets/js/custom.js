"use strict";

var socialMediaIcos = {
  "twitter.com": "fa-twitter-square",
  "facebook.com": "fa-facebook",
  "youtube.com": "fa-youtube-square",
  "pinterest.com": "fa-pinterest-square",
  "instagram.com": "fa-instagram",
  "linkedin.com": "fa-linkedin",
  "wordpress.com": "fa-wordpress",
  "tumblr.com": "fa-tumblr-square",
  "plus.google.com": "fa-google-plus-square"
},
    addIconsSocial = function addIconsSocial(a, o) {
  for (var e = document.querySelectorAll('a[href*="' + a + '"]'), i = 0; i < e.length; i++) {
    e[i].previousElementSibling.classList.add("" + o);
  }
},
    iterarIcosSocialMedia = function iterarIcosSocialMedia(a) {
  for (var o in a) {
    addIconsSocial(o, a[o]);
  }
};

iterarIcosSocialMedia(socialMediaIcos);