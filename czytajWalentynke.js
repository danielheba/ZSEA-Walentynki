function JSONtoDiv()
{
    const kod = document.odczyt.kodwalentynki.value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", `walentynki22/${kod}.json`, true);
    xmlhttp.send();
    console.log(xmlhttp);

    xmlhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
            {
            var myObj = JSON.parse(this.responseText);

            pokazwalentynke = document.getElementById("trescwalentynki");
            pokazwalentynke.classList.remove("srodek");
            pokazwalentynke.classList.add("pokazwalentynke")
            
            pokazwalentynke.innerHTML = 
            `<p id="adresatw">Adresat: <b>${myObj.adresat}</b> z klasy ${myObj.klasa}</p><p id="trescw">${myObj.tresc}</p><p id="nadawcaw">${myObj.nadawca}</p>`;
            }  
        
        if (this.readyState == 4 && this.status == 404)
            {console.log("Pomyśl o tym")
            pokazwalentynke = document.getElementById("trescwalentynki");
            pokazwalentynke.classList.add("srodek");
            pokazwalentynke.classList.remove("pokazwalentynke")
            document.getElementById("trescwalentynki").innerHTML = "W tym roku nie mamy dla Ciebie walentynki :(";
            }
    };
}
