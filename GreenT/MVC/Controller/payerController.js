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

    

    var numc = document.getElementById("numc");
    var numbers = /^[0-9]+$/;
    //|| (pass.value.match(/\d/))

   if ((!(numc.value.length == 16 )) /*|| (numc.value.match(numbers))*/) {
        document.getElementById('err').innerHTML = '';
        err.append('Un numero de compte doit etre seulement des nombres et 16 nombres seulements.');
        count += 1;
        //alert("Valider votre password");
        //return false;
    }

    
    /*if (count == 0) {
        alert("Payment sucess");
    }    */
}