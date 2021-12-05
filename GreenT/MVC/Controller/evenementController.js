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

    var v = document.getElementById("ville");
    if ((!/^[a-zA-Z()]+$/.test(v.value)) || (v.value[0] != v.value[0].toUpperCase())) {
        document.getElementById('err').innerHTML = '';
        err.append('La ville doit être composé uniquement de caractères et commence par une majuscule.');
        count += 1;
        //alert("Valider votre nom et prenom");
        //return false;
    }

    var d = document.getElementById("descrip");
    if (d.value.length < 8 ) {
        document.getElementById('err').innerHTML = '';
        err.append('La description doit être plus longue.');
        count += 1;
        //alert("Valider votre password");
        //return false;
    }

    var e = document.getElementById("dateeve");
    
    if (Date.parse(e.value) == NaN) {
        document.getElementById('err').innerHTML = '';
        err.append('Le date doit etre valide.');
        count += 1;
        return false;
        
        //alert("Valider si votre mail contien @esprit.tn");
        //return false;
    }

   
    if (count != 0) {
        alert("Validate your informations");
        return false;
    }
    else {
        alert("Evenement successfully registered")
    }
}