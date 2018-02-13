function isValid(){
    if(!is_string('fonction')) return false;   
    return true;  
}

function supprimerFonction(id){  
    if(confirm("Voulez vous supprimer cette Fonction ?")) {
         $.ajax({
            type:"POST",
            url:host+'offre/deletefonction',            
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
 
 