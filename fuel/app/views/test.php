

    <form id="ggg_form" action="<?php echo \Fuel\Core\Uri::create('front/test'); ?>" method="POST">
        <input type="text" name="nom" class="form-control">
        <input type="text" name="prenom" class="form-control">
        <input id="ggg" type="submit" name="valider" value="valide" class="btn btn-default">
    </form>

<script type="text/javascript">
    $(document).ready(function(){
        $('#ggg_form').submit(function(event){
            var data = {bender:'29 ans',delmo:'34 ans'};
            $.ajax({
                type:'POST',
                data:data,
                dataType:'html',
                success:function(data){
                    alert(data);
                }
            });
            event.preventDefault();
        });
    });
</script>
