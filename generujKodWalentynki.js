const nazwaStrony = () => {

kod = "";
for (i=0;i<12;i++){
nrZnaku = Math.floor(Math.random()*34);
literki = ["a","b","c","d","e","f","g","h","i","k","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
            "0","1","2","3","4","5","6","7","8","9"];
kod = kod + literki[nrZnaku];
}
return kod;
}
nazwaStrony();
document.walentynka.nazwaStrony.value = kod;
console.log("Nowe value: "  + document.walentynka.nazwaStrony.value);