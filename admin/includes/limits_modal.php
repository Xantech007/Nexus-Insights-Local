<!-- includes/limits_modal.php -->
<div class="modal fade" id="editLimits">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title"><b>Edit Deposit & Withdrawal Limits</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="limitsForm">
          <div class="form-group">
            <label for="edit_min_deposit" class="col-sm-3 control-label">Min Deposit</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="edit_min_deposit" name="min_deposit" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_max_deposit" class="col-sm-3 control-label">Max Deposit</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="edit_max_deposit" name="max_deposit" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_min_withdraw" class="col-sm-3 control-label">Min Withdraw</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="edit_min_withdraw" name="min_withdraw" required>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_max_withdraw" class="col-sm-3 control-label">Max Withdraw</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="edit_max_withdraw" name="max_withdraw" required>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
          <i class="fa fa-close"></i> Close
        </button>
        <button type="submit" class="btn btn-primary btn-flat" id="saveLimits">
          <i class="fa fa-save"></i> Save
        </button>
      </div>
    </div>
  </div>
</div>
