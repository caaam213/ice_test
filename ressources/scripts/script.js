//Permet de séléctionner la bonne page html selon si l'utilisateur utilise un ordinateur ou un téléphone
function rechargerPage()
{
    if($(window).width()>992)
    {
        $("#contenuPortable").load("ordinateur_vue.html");
        $( "#statistiqueBouton").unbind( "click" );
        $( "#patientBouton").unbind( "click" );
    }
    else
    {
        $("#contenuPortable").load("statistiques_portable_vue.html");
        $("#statistiqueBouton").click(function()
        {
            $("#contenuPortable").load("statistiques_portable_vue.html");
        });

        $("#patientBouton").click(function()
        {
            $("#contenuPortable").load("patient_portable_vue.html");
        });
        
    }
    
    
    

}

rechargerPage();

//Permet de détecter lorsque la page est redimensionnée
$( window ).resize(function() {
        
    rechargerPage();
});