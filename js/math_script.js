document.addEventListener("DOMContentLoaded", function () {
  const description = document.getElementById("description");
  const calcul = document.getElementById("calcul");

  const radioButtons = document.querySelectorAll('input[name="type"]');
  const inputK = document.getElementById("k");
  const inputN = document.getElementById("n");
  const inputP = document.getElementById("p");
  const labelK = document.getElementById("labelK");
  const labelN = document.getElementById("labelN");
  const labelP = document.getElementById("labelP");
  inputK.disabled = true;
  inputN.disabled = true;
  inputP.disabled = true;
  labelK.disabled = true;
  labelN.disabled = true;
  labelP.disabled = true;
  description.innerText =
    "Choisissez le calcul souhaité, les champs concernés seront alors activés.";

  radioButtons.forEach((radio) => {
    radio.addEventListener("change", function () {
      switch (this.value) {
        case "facto":
          inputK.disabled = true;
          inputN.disabled = false;
          inputP.disabled = true;
          labelK.disabled = true;
          labelN.disabled = false;
          labelP.disabled = true;
          description.innerText =
            "Permet de calculer le factoriel de n. C'est à dire : ";
          calcul.classList.add("light-block");
          calcul.innerText = "n! = 1 x 2 x 3 x ... x (n-1) x n ";
          break;
        case "power":
          inputK.disabled = true;
          inputN.disabled = false;
          inputP.disabled = false;
          labelK.disabled = true;
          labelN.disabled = false;
          labelP.disabled = false;
          description.innerText =
            "Permet de calculer la puissance de n. C'est à dire : ";
          calcul.classList.add("light-block");
          calcul.innerText = "n^p = n x n x ... x n (p fois)";
          break;
        case "choose":
          inputK.disabled = false;
          inputN.disabled = false;
          inputP.disabled = true;
          labelK.disabled = false;
          labelN.disabled = false;
          labelP.disabled = true;
          description.innerText =
            "Permet de calculer les combinaisons de n parmi k. C'est à dire : ";
          calcul.classList.add("light-block");
          calcul.innerText = "C(n, k) = n! / (k!(n-k)!)";
          break;
        case "bernoulli":
          inputK.disabled = false;
          inputN.disabled = false;
          inputP.disabled = false;
          labelK.disabled = false;
          labelN.disabled = false;
          labelP.disabled = false;
          description.innerHTML =
            "Permet de calculer la distribution de Bernoulli. </br> <h5>n correspond au nombre d'essaies' qui vont être efectués </br> p correspond à la probabilité de succès </br> k correspond au nombre de succès que l'on veut obtenir</h5> ";
          calcul.classList.add("light-block");
          calcul.innerText = "P(X = k) = nCk * p^k * (1-p)^(n-k)";
          break;
        case "reset":
          inputK.disabled = true;
          inputN.disabled = true;
          inputP.disabled = true;
          labelK.disabled = true;
          labelN.disabled = true;
          labelP.disabled = true;
          description.innerText =
            "Choisissez le calcul souhaité, les champs concernés seront alors activés.";
          calcul.innerText = "";
          calcul.classList.remove("light-block");
          break;
      }
    });
  });
});

function selectButton(option) {
  // Réinitialiser la classe active pour tous les boutons
  var buttons = document
    .getElementById("boutons")
    .getElementsByTagName("button");
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].classList.remove("active");
  }

  // Sélectionner le bouton cliqué
  var selectedButton = document
    .getElementById("boutons")
    .getElementsByTagName("button")[option - 1];
  selectedButton.classList.add("active");

  // Mettre à jour la valeur du champ caché
  document.getElementById("selectedOption").value = selectedButton.textContent;
}
