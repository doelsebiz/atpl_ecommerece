 <div class="tab-pane fade" id="tab11">
   <div class="row">
        <div class="col-md-12"> 
            <select name="faq_id" class="form-control">
                <option value="">Select Category</option>
                @foreach(DB::table('blogcategories')->where('status' , '1')->orderby('id' , 'asc')->get() as $r)
                <option @if($data->faq_id == $r->id) selected @endif value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
        </div>
   </div>
</div>