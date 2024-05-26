function myFunction() {
  var element = document.body;
  var btn = document.getElementById('btn-dm');

  element.classList.toggle("dark-mode");
  btn.classList.toggle("btn-warning");
  if (btn.innerHTML === "Mode Sombre") {
    btn.innerHTML = "Mode Clair";
    localStorage.setItem("theme", "Mode Clair");
  } else {
    btn.innerHTML = "Mode Sombre";
    localStorage.setItem("theme", "Mode Sombre");
  }
}

function initializeTheme() {
  var btn = document.getElementById('btn-dm');
  var theme = localStorage.getItem("theme");

  if (theme === "Mode Clair") {
    document.body.classList.add("dark-mode");
    btn.classList.add("btn-warning");
    btn.innerHTML = "Mode Clair";
  } else {
    document.body.classList.remove("dark-mode");
    btn.classList.remove("btn-warning");
    btn.innerHTML = "Mode Sombre";
  }
}



initializeTheme();

