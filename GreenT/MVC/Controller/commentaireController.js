function verif() {
    var count = 0;
    let err = document.querySelector('#err');
    

    var d = document.getElementById("email");
    if (d.value.length < 8 ) {
        document.getElementById('err').innerHTML = '';
        err.append('Le commentaire doit être plus longue.');
        count += 1;
        //alert("Valider votre password");
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