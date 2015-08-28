<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Pencere Başlığı</h4>
</div>
<div class="modal-body">
    <?php
		$id = isset($_GET['id']) ? $_GET['id'] : '';
        echo $id . ' numaralı sayfa çağrıldı.';
	?>
</div>
<div class="modal-footer" id="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">İptal</button>
    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Sil</button>
</div>