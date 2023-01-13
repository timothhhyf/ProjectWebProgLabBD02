<div class="modal fade" id="actionModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Change Status</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
            </div>
            <form action="" method="POST" id="change-status">
                {{ csrf_field() }}
                <div class="modal-body">
                    <select class="form-select watchlist-status-select" name="status" id="status">
                        <option selected value="Current Value">Current Value</option>
                        <option value="Planned">Planned</option>
                        <option value="Watching">Watching</option>
                        <option value="Finished">Finished</option>
                        <option value="Remove">Remove</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn save-changes">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#actionModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        $('#change-status').attr('action', '/watchlist/' + id + '/changeStatus')
    })
</script>
