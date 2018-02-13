function isValid(){    
    if(!is_string('login')) return false;
    if(!is_string('nom')) return false;
    if(!is_string('droit')) return false;
    if(!is_string('adresse')) return false;   
    return true;  
}

function supprimerUser(id){  
    if(confirm("Voulez vous supprimer cet utilisateur?")) {
         $.ajax({
            type:"POST",
            url:host+'user/deleteuser',            
            data:"id="+id,
            success:function(data){            
                $('.tr'+id).fadeOut();                
            }
        });
    }   
}