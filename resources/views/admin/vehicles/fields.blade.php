<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($vehicles))
    <input name="_method" type="hidden" value="PATCH">
@endif



<div class="col-sm-12 col-md-12">
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" placeholder="ex. Paramide" value="@if(isset($vehicles)){{ $vehicles->name }}@else {{ old('name') }}@endif">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
          <label for="name">Vehicle Number</label>
          <input type="text" name="vehicle_number" id="vehicle_number" class="form-control" placeholder="ex. Paramide" value="@if(isset($vehicles)){{ $vehicles->vehicle_number }}@else {{ old('vehicle_number') }} @endif">
        </div>
    </div>

</div>

<div class="col-sm-12 col-md-12">
  <div class="col-md-6">
      <div class="form-group">
          <label>Model</label>
          <select class="form-control select2" id="model" name="model" style="width: 100%;">
          </select>
      </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Vehicle Specification</label>
      <select class="form-control" id="vehicle_specification" name="specifications[]" multiple="multiple" data-placeholder="Select a specification" style="width: 100%;">
        @if (isset($vehicleSpecifications))
          @if(isset($vehicleHasSpecifications))
            @foreach($vehicleSpecifications as $vehicleSpecification)
              <option value="{{ $vehicleSpecification->id }}" 
                @php 
                  foreach($vehicleHasSpecifications as $vehicleHasSpecification) {
                    if ( $vehicleHasSpecification->vehicle_specification_id == $vehicleSpecification->id ) {
                      echo 'selected="selected"';
                    }
                  }
                @endphp
              >{{ $vehicleSpecification->name }}</option>
            @endforeach
          @else
            @foreach($vehicleSpecifications as $vehicleSpecification)
              <option value="{{ $vehicleSpecification->id }}">{{ $vehicleSpecification->name }}</option>
            @endforeach
          @endif

        @endif
      </select>
    </div>
  </div>
</div>

<div class="col-sm-12 col-md-12">

    <div class="col-md-6">
        <div class="form-group">
            <label>Vendor</label>
            <select class="form-control select2" name="vehicle_type_id" style="width: 100%;">
                @if (isset($vehicleTypes))
                    @if (isset($vehicles))
                        @foreach($vehicleTypes as $vehicleType)
                            @if ($vehicles->vehicle_type_id == $vehicleType->id)
                                <option value="{{ $vehicleType->id }}" selected="selected">{{ $vehicleType->name }}</option>
                            @else
                                <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($vehicleTypes as $vehicleType)
                            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                        @endforeach
                    @endif
                @endif
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Vehicle Type</label>
            <select class="form-control select2" name="vendor_id" style="width: 100%;">
                @if (isset($vendors))
                    @if (isset($vehicles))
                        @foreach($vendors as $vendor)
                            @if ($vehicles->vendor_id == $vendor->id) 
                                <option value="{{ $vendor->id }}" selected="selected">{{ $vendor->name }}</option>
                            @else
                                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($vendors as $vendor)
                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                        @endforeach
                    @endif
                @endif
            </select>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <div class="form-group">
          <label for="">Gallery</label>
          <input type="file" name="docFiles" class="form-control uploadFiles">
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">@if(isset($vehicles)) <i class="fa fa-refresh"></i>  Update @else <i class="fa fa-plus"></i>  Add Vehicle @endif</button>
        <a href="{!! route('admin.vehicles.index') !!}" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>


@section('js')

<script type="text/javascript">



    var editVehicle = "{{ isset($vehicles) ? $vehicles->id: 0 }}";

    var year = (new Date()).getFullYear();
    var current = year;
    var numberOfYearBack = 10;
    var backYear = current - numberOfYearBack;
    
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#vehicle_specification').select2();    

    $('#vehicle_specification').on('select2:unselecting', function (e) {
        var jsObj = {
          'vehicle_id': editVehicle,
          'id'        : e.params.args.data.id,
          'name'      : e.params.args.data.text
        };

        $.post('{{ route('admin.vehicles.remove.specification') }}', jsObj, function (response) {
          alert(response.message);
        });

    });

    if(editVehicle != 0)
    {
        
        var model = "{{ isset($vehicles) ? $vehicles->model: 0 }}";

        for(var i = current ; i >= backYear ; i--) {
            if (i == model) {
                $('#model').append('<option value="' + (i) + '" selected>' + (i) + '</option>');
            } else {
                $('#model').append('<option value="' + (i) + '">' + (i) + '</option>');
            }
        }

        var images = '<?php if(isset($imagesFiles)){ echo json_encode($imagesFiles); }  ?>';
        var pictures = JSON.parse(images);

        $('.uploadFiles').fileuploader({
             theme: 'thumbnails',
             enableApi: true,
             addMore: true,
             limit: 4,
             fileMaxSize: 2,
             thumbnails: {
                 box: '<div class="fileuploader-items">' +
                           '<ul class="fileuploader-items-list">' +
                               '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner">+</div></li>' +
                           '</ul>' +
                       '</div>',
                 item: '<li class="fileuploader-item">' +
                            '<div class="fileuploader-item-inner">' +
                                '<div class="thumbnail-holder">${image}</div>' +
                                '<div class="actions-holder">' +
                                    '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                                '</div>' +
                                '<div class="progress-holder">${progressBar}</div>' +
                            '</div>' +
                        '</li>',
                 item2: '<li class="fileuploader-item">' +
                            '<div class="fileuploader-item-inner">' +
                                '<div class="thumbnail-holder">${image}</div>' +
                                '<div class="actions-holder">' +
                                    '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                                '</div>' +
                            '</div>' +
                        '</li>',
                 startImageRenderer: true,
                 canvasImage: false,
                 _selectors: {
                     list: '.fileuploader-items-list',
                     item: '.fileuploader-item',
                     start: '.fileuploader-action-start',
                     retry: '.fileuploader-action-retry',
                     remove: '.fileuploader-action-remove'
                 },
                 onItemShow: function(item, listEl) {
                     var plusInput = listEl.find('.fileuploader-thumbnails-input');
                     
                     plusInput.insertAfter(item.html);
                     
                     if(item.format == 'image') {
                         item.html.find('.fileuploader-item-icon').hide();
                     }
                 }
             },
             afterRender: function(listEl, parentEl, newInputEl, inputEl) {
                 var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                     api = $.fileuploader.getInstance(inputEl.get(0));
             
                 plusInput.on('click', function() {
                     api.open();
                 });
             },
              allowDuplicates: false,
              files: pictures,
              limit: null,
              fileMaxSize:2,
              extensions: ['jpg','gif','png','jpeg','bmp','pdf','txt','docx','doc','odt','rtf'],
             onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){

                 var jsObj = {
                   'image' : itemEl.name,
                   'id'    : editVehicle
                 };

                 console.log(jsObj);
                 
                 $.ajax({
                   url : "{{ route('admin.vehicles.image_remove') }}",
                   type : "POST",
                   data : jsObj,
                   dataType : "json",
                   success : function(response){
                     alert(response.msg);
                   }
                 });
             },
         });
    }
    else 
    {

        for(var i = current ; i >= backYear ; i--) {
            $('#model').append('<option value="' + (i) + '">' + (i) + '</option>');
        }

        $('input[name="docFiles"]').fileuploader({
             extensions: ['jpg', 'jpeg', 'png', 'gif', 'bmp'],
             changeInput: ' ',
             theme: 'thumbnails',
             enableApi: true,
             addMore: true,
             limit: 4,
             fileMaxSize: 2,
             thumbnails: {
                box: '<div class="fileuploader-items">' +
                             '<ul class="fileuploader-items-list">' +
                            '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner">+</div></li>' +
                             '</ul>' +
                         '</div>',
                item: '<li class="fileuploader-item">' +
                          '<div class="fileuploader-item-inner">' +
                                  '<div class="thumbnail-holder">${image}</div>' +
                                  '<div class="actions-holder">' +
                                      '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                                  '</div>' +
                                  '<div class="progress-holder">${progressBar}</div>' +
                              '</div>' +
                          '</li>',
                item2: '<li class="fileuploader-item">' +
                          '<div class="fileuploader-item-inner">' +
                                  '<div class="thumbnail-holder">${image}</div>' +
                                  '<div class="actions-holder">' +
                                      '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                                  '</div>' +
                              '</div>' +
                          '</li>',
                startImageRenderer: true,
                canvasImage: false,
                _selectors: {
                   list: '.fileuploader-items-list',
                   item: '.fileuploader-item',
                   start: '.fileuploader-action-start',
                   retry: '.fileuploader-action-retry',
                   remove: '.fileuploader-action-remove'
                },
                onItemShow: function(item, listEl) {
                   var plusInput = listEl.find('.fileuploader-thumbnails-input');
                   
                   plusInput.insertAfter(item.html);
                   
                   if(item.format == 'image') {
                      item.html.find('.fileuploader-item-icon').hide();
                   }
                }
             },
             afterRender: function(listEl, parentEl, newInputEl, inputEl) {
                var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                   api = $.fileuploader.getInstance(inputEl.get(0));
             
                plusInput.on('click', function() {
                   api.open();
                });
             },
        });
    }





  // $(function () {
  //   // Replace the <textarea id="editor1"> with a CKEditor
  //   // instance, using default configuration.
  //   CKEDITOR.replace('editor1', {
  //       resize_enabled : false
  //   })
  // });

</script>

@endsection