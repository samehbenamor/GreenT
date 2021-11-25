function verif() {
    var count = 0;
    let err = document.querySelector('#err');
    var t = document.getElementById("titre");
    if ((!/^[a-zA-Z()]+$/.test(t.value)) || (t.value[0] != t.value[0].toUpperCase())) {
        document.getElementById('err').innerHTML = '';
        err.append('Le titre doit être composé uniquement de caractères et commence par une majuscule.');
        count += 1;
        //alert("Valider votre nom et prenom");
        //return false;
    }

    var d = document.getElementById("descp");
    if (d.value.length < 8 ) {
        document.getElementById('err').innerHTML = '';
        err.append('La description doit être plus longue.');
        count += 1;
        //alert("Valider votre password");
        //return false;
    }

    var e = document.getElementById("etat");
    
    if (e.value > 4) {
        document.getElementById('err').innerHTML = '';
        err.append('Etat doit être soit 1, 2 ou 3. Pour 1 étant un utilisateur libre, pour 2 étant un utilisateur amateur et 3 pour être un utilisateur professionnel.');
        count += 1;
        //alert("Valider si votre mail contien @esprit.tn");
        //return false;
    }

   
    if (count == 0) {
        alert("Formation successfully registered");
    }    
}