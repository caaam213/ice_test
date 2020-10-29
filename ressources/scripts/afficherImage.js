//Cette fonction permet de faire apparaître les images d'une ligne du tableau lorsque l'utilisateur passe la souris dessus
function afficherImages()
{
    var lignes = document.getElementsByTagName("tr");

    for(var i =0;i<lignes.length;i++)
    {
        var ligne = lignes[i];
        
        //Permet d'afficher les 2 icones d'interaction du tableau lorsqu'on passe la souris sur une personne
        ligne.addEventListener("mouseover", function(){
            var eltLigne = this.childNodes;
            console.log(eltLigne[9]);
            eltLigne[9].firstElementChild.style.visibility= "visible";
            eltLigne[11].firstChild.style.visibility= "visible";
            this.style.backgroundColor="#F8F8FF";
            
        })

        //Permet de retirer les 2 icones d'interaction du tableau lorsqu'on la souris n'est plus sur une personne
        ligne.addEventListener("mouseout", function(){
            var eltLigne = this.childNodes;
            eltLigne[9].firstElementChild.style.visibility= "hidden";
            eltLigne[11].firstChild.style.visibility= "hidden";
            this.style.backgroundColor="white";
        })
    }
}

afficherImages();