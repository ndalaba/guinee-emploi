function isValid(){
    if(!is_string('secteur')) return false;   
    return true;  
}

function supprimerSecteur(id){  
    if(confirm("Voulez vous supprimer ce Secteur d'activite ?")) {
         $.ajax({
            type:"POST",
            url:host+'offre/deleteSecteur',            
            data:"id="+id,
            success:function(data){            
                $('.tr'+id).fadeOut();                
            }
        });
    }   
}
 function error(data){
    alert(data);
 }