    
    
    <div class="form-group">
      <label for="name" class="require">Nombre</label>
      <input type="text" name="name" id="name" class="form-control " value="{{old('name')}}" >
    </div>
    <div class="form-group">
      <label for="url" class="require">url</label>
      <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" >
    </div>
    <div class="form-group">
      <label for="icon" class="require">Icono</label>
      <input type="text" name="icon" id="icon" class="form-control" value="{{old('icon')}}" >
      {{-- <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="exampleInputFile">
          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text" id="">Upload</span>
        </div>
      </div> --}}
    </div>
    {{-- <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}