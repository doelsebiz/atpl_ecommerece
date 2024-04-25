<div class="tab-pane fade show active" id="tab1">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label>Main Image</label>
                <input type="file" style="height:45px;" class="form-control" name="main_image">
            </div>
        </div>
        <div class="col-md-4">
            <label>Main Image</label>
            <button data-toggle="modal" data-target="#viewmainimage" type="button"
                class="btn btn-primary form-control">View Image</button>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Main Heading</label>
                <input value="{{ $data->main_heading }}" type="text" class="form-control" name="main_heading">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Sub Heading <small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                <input value="{{ $data->sub_heading }}" type="text" class="form-control" name="sub_heading">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Button Text</label>
                <input value="{{ $data->main_button_text }}" type="text" class="form-control" name="btn_text">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Button Link</label>
                <input value="{{ $data->main_button_link }}" type="text" class="form-control" name="btn_link">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewmainimage" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">View Main Image</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="width: 100%;" src="{{ url('public/images') }}/{{ $data->main_image }}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>