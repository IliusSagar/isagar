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

          <div>
            <input type="text" id="search-input" class="form-control"  placeholder="Search...">
            <div id="product-results"></div>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#search-input').on('keyup', function() {
            let query = $(this).val();
            let results = $('#product-results');
            
            // Clear results if the search input is empty
            if (query === '') {
                results.empty();
                return;
            }
    
            $.ajax({
                url: '{{ route("search.manage.learning") }}',
                type: 'GET',
                data: { query: query },
                success: function(data) {
                    results.empty();  // Clear previous results
    
                    if (data.length > 0) {
                        data.forEach(learn => {
                            results.append(`
                                <div style="
                                    background-color: #f9f9f9; 
                                    padding: 15px; 
                                    margin-bottom: 10px; 
                                    border-radius: 8px; 
                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                    border: 1px solid #ddd;
                                ">
                                    <p style="font-weight: bold; font-size: 16px; margin: 0;">
                                        <a href="/manage/learning/view/${learn.id}" style="color: #333; text-decoration: none;">
                                            ${learn.title}
                                        </a>
                                    </p>
                                </div>
                            `);
                        });
                    } else {
                        results.append('<p>No products found.</p>');
                    }
                }
            });
        });
    });
    </script>

@endsection