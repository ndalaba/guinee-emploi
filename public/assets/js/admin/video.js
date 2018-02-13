function isValid(){
    if(!is_string('video')) return false;   
    return true;  
}

function supprimerVideo(id){  
    if(confirm("Voulez vous supprimer cette Video ?")) {
         $.ajax({
            type:"POST",
            url:host+'admin/deletevideo',            
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
 
 