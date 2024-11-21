@extends('master.backend')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1><span class="text-success" style="border-bottom: 1px dotted green;">View Learning Management</span></h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">

            <div class="d-flex justify-content-center">
                {{ $all_data->links() }}
            </div>
  
          <div class="row">

           
            @foreach($all_data as $key=>$item)
          
            <div class="col-md-3">
                <div class="card shadow p-2 text-center">
                    <h4>{{ $item->title }}</h4>


                    <a href="{{ route('view.manage.learning', $item->id) }}" 
                        class="btn btn-sm btn-info delete-btn" 
                        data-id="{{ $item->id }}">
                         <i class="fa fa-eye"></i> View
                     </a>


                </div>
            </div>

            @endforeach

           
            

          </div>

        </div>

    </section>


</div>

@endsection