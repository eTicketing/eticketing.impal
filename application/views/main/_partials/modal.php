
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="window.location.href = '<?php echo site_url('main') ?>'">Home</button>
        <a id="btn-login" class="btn btn-danger" href="#">Login</a>
      </div>
    </div>
  </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn draw-border" type="button" data-dismiss="modal">Cancel</button>
        <a href="" id="btn-logout"><button class="btn draw-border">Logout</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Beli Tiket Modal-->
<div class="modal fade" id="beliModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelBeli"></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="hasilnyaaa"></div>
      <div class="modal-footer">
        <button class="btn draw-border" type="button" data-dismiss="modal">Batal</button>
        <a href="" id="btn-beli"><button class="btn draw-border2">Beli</button></a>
      </div>
    </div>
  </div>
</div>