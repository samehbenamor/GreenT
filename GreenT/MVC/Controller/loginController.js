function verif() {
    var count = 0;
    let err = document.querySelector('#err');
    
    var pass = document.getElementById("pass");

    //|| (pass.value.match(/\d/))

    if ((pass.value.length <= 8 ) || (!pass.value.match(/\d/)) || (!/[A-Z]/.test(pass.value)) || (!/[a-z]/.test(pass.value))) {
        document.getElementById('err').innerHTML = '';
        err.append('Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.');
        count += 1;
        //alert("Valider votre password");
        //return false;
    }

    var e = document.getElementById("email");
    var verif = "@gmail.tn";
    if (!((e.value).includes(verif))) {
        document.getElementById('err').innerHTML = '';
        err.append('Valider votre Email');
        count += 1;
        //alert("Valider si votre mail contien @esprit.tn");
        //return false;
    }

    /*if (count == 0) {
        alert("login successfull");
    }  */
}