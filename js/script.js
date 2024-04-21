function myFunction() {
  var element = document.body;
  var btn = document.getElementById('btn-dm');

  element.classList.toggle("dark-mode");
  btn.classList.toggle("btn-warning");
  if (btn.innerHTML === "Mode Nuit") {
    btn.innerHTML = "Mode Jour";
    localStorage.setItem("theme", "Mode Jour");
  } else {
    btn.innerHTML = "Mode Nuit";
    localStorage.setItem("theme", "Mode Nuit");
  }
}

function initializeTheme() {
  var btn = document.getElementById('btn-dm');
  var theme = localStorage.getItem("theme");

  if (theme === "Mode Jour") {
    document.body.classList.add("dark-mode");
    btn.classList.add("btn-warning");
    btn.innerHTML = "Mode Jour";
  } else {
    document.body.classList.remove("dark-mode");
    btn.classList.remove("btn-warning");
    btn.innerHTML = "Mode Nuit";
  }
}



initializeTheme();

