<!-- COMENTARIOS -->
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$post}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info p-2" style="--bs-bg-opacity: .5;">
        <h5 class="modal-title fw-bolder" id="exampleModalLabel">COMENTARIOS</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="modal-body card">
      @comments(['model' => $post])
      </div>
    </div>
  </div>
</div>