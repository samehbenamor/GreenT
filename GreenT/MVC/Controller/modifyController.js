function verif() {
    var count = 0;
    let err = document.querySelector('#err');
    var n = document.getElementById("nom");
    var p = document.getElementById("prenom");
    if ((!/^[a-zA-Z()]+$/.test(n.value)) || (!/^[a-zA-Z()]+$/.test(p.value)) || (n.value[0] != n.value[0].toUpperCase()) || (p.value[0] != p.value[0].toUpperCase())) {
        document.getElementById('err').innerHTML = '';
        err.append('Nom et Prénom doivent être des lettres et commençant par des majuscules.');
        count += 1;
        //alert("Valider votre nom et prenom");
        //return false;
    }

    var v = document.getElementById("ville");
    if ((!/^[a-zA-Z()]+$/.test(v.value)) || (v.value[0] != n.value[0].toUpperCase())) {
        document.getElementById('err').innerHTML = '';
        err.append('La ville doit être des lettres et commençant par un majuscule.');
        count += 1;
        //alert("Valider votre nom et prenom");
        //return false;
    }


    var e = document.getElementById("email");
    var verif = "@";
    if (!((e.value).includes(verif))) {
        document.getElementById('err').innerHTML = '';
        err.append('Valider votre Email');
        count += 1;
        //alert("Valider si votre mail contien @esprit.tn");
        //return false;
    }

    var pass = document.getElementById("pass");

    //|| (pass.value.match(/\d/))

    if ((pass.value.length <= 8 ) || (!pass.value.match(/\d/)) || (!/[A-Z]/.test(pass.value)) || (!/[a-z]/.test(pass.value))) {
        document.getElementById('err').innerHTML = '';
        err.append('Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.');
        count += 1;
        //alert("Valider votre password");
        //return false;
    }

    var verifpass = document.getElementById("repass");
    
    if (verifpass.value != pass.value) {
        document.getElementById('err').innerHTML = '';
        err.append('Valider votre mot de pass confirmation');
        count += 1;
        //alert("Valider votre mail confirmation");
        //return false;
    }
    /*if (count == 0) {
        alert("Register successfull");
    }    */
}