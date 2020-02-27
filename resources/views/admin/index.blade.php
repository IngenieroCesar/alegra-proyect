  @extends("themes.$theme.layout")
  
  @section('page_title')
      Admin - LaraDock
  @endsection
  @section('card_title')
      Admin Lobby
  @endsection
  @section('content')
        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lobby</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover tUploadext-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($permissions as $permission )
                    <tr>
                      <td>{{$permission->id}}</td>
                      <td>{{$permission->name}}</td>
                      <td>{{$permission->updated_at}}</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>{{$permission->slug}}</td>
                    </tr>
                    @endforeach --}}
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  @endsection
