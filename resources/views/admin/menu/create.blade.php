@extends("themes.$theme.layout")

@section('page_title')
    Menu Create - LaraDockGinx
@endsection
@section('card_title')
    Menu Create
@endsection

@section('content')

  <!-- Main content -->

    <div class="container-fluid">
              @include('includes.form-error')
              @include('includes.message')
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 mx-auto">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form  action="{{route('store_menu')}}" id="form-gerneral" method="POST">
            @csrf
              <div class="card-body">
                @include('admin.menu.form')
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                @include('includes.button-form-create')
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  <!-- /.content -->
@endsection
