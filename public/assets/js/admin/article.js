function isValid(){  
    //var cont= window.monEditeur.document.getElementById('editor').innerHTML;   
   // $('#contenu').html(cont);
   // if($.trim($('#contenu').val())=="<br>")
     //   $('#contenu').val('');
    
    if(!is_string('title')) return false;
    if(!is_string('image')) return false;   
    if(!is_string('contenu')) return false;   
    if(!is_string('cat')) return false;       
    return true;
}
 
function supprimerArticle(id){
    if(confirm("Voulez vous supprimer cet article ?")) {
         $.ajax({
            type:"POST",
            url:host+'article/deletearticle/',            
            data:"id="+id,
            success:function(data){            
                $('.tr'+id).fadeOut();                
            }
        });
    }   
}