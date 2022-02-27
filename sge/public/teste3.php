
<!--<a href='#myModal' data-id-pergunta='<?php echo $jm->IdCodFotos; ?>' type="button" class="btn btn-success"  data-toggle="modal" title="Alterar sua foto">Alterar</a>-->
<a href='#myModal' data-id-pergunta='999' type="button" class="btn btn-success"  data-toggle="modal" title="#">Alterar</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Alterar Foto</h4>
            </div>
            <div class="modal-body">
            	<h1>   </h1>
                <input type="text" id="perguntaId" name="perguntaId" class="form-control" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
	var idPergunta;
	$('#myModal').on('show.bs.modal', function(e) {
    idPergunta = $(e.relatedTarget).data('id-pergunta');
    $(e.currentTarget).find('input[name="perguntaId"]').val(idPergunta);
});
</script>
