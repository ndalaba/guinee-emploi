function isValid(){
    if(!is_string('cat_secteur')) return false;   
    return true;  
}

function supprimerCatSecteur(id){  
    if(confirm("Voulez vous supprimer cette Categorie ?")) {
         $.ajax({
            type:"POST",
            url:host+'offre/deleteCatSecteur',            
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