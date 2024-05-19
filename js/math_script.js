document.addEventListener('DOMContentLoaded', function() {
    const radioButtons = document.querySelectorAll('input[name="type"]');
    const inputK = document.getElementById('k');
    const inputN = document.getElementById('n');
    const inputP = document.getElementById('p');
    const labelK = document.getElementById('labelK');
    const labelN = document.getElementById('labelN');
    const labelP = document.getElementById('labelP');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
           
            switch(this.value){
                case 'facto':
                    inputK.style.display ="none";
                    inputN.style.display ="";
                    inputP.style.display ="none";
                    labelK.style.display ="none";
                    labelN.style.display ="";
                    labelP.style.display ="none";
                    break;
                case 'power':
                    inputK.style.display ="none";
                    inputN.style.display ="";
                    inputP.style.display ="";
                    labelK.style.display ="none";
                    labelN.style.display ="";
                    labelP.style.display ="";
                break;
                case 'choose':
                    inputK.style.display ="";
                    inputN.style.display ="";
                    inputP.style.display ="none";
                    labelK.style.display ="";
                    labelN.style.display ="";
                    labelP.style.display ="none";
                    break;
                    case 'reset':
                        inputK.style.display ="";
                        inputN.style.display ="";
                        inputP.style.display ="";
                        labelK.style.display ="";
                        labelN.style.display ="";
                        labelP.style.display ="";
                        break;
            }
        });
    });
});

function selectButton(option) {
    // Réinitialiser la classe active pour tous les boutons
    var buttons = document.getElementById('boutons').getElementsByTagName('button');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('active');
    }

    // Sélectionner le bouton cliqué
    var selectedButton = document.getElementById('boutons').getElementsByTagName('button')[option - 1];
    selectedButton.classList.add('active');

    // Mettre à jour la valeur du champ caché
    document.getElementById('selectedOption').value = selectedButton.textContent;
}

