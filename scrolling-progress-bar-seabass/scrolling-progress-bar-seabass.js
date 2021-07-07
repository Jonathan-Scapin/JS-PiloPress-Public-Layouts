window.onscroll = function() {progressScrollingBar()};

function progressScrollingBar() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("progress-bar").style.width = scrolled + "%";
  document.getElementById("contain-progress-bar").classList.remove('z-0');
  document.getElementById("contain-progress-bar").classList.add('z-10');
}