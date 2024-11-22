@extends('master.backend')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1><span class="text-success" style="border-bottom: 1px dotted green;">Add Developer Code</span></h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">


          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
             <h3 class="card-title">Add Data</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('store.manage.code')}}" method="post" >
              @csrf

                <div class="card-body">

                  <div class="form-group">
                    <label class="custom-label">Status <code>*</code></label><br>
                    <div>
                      <label>
                          <input type="radio" name="status" value="0" checked> Inactive
                      </label>
                  </div>
                  <div>
                      <label>
                          <input type="radio" name="status" value="1" > Active
                      </label>
                  </div>
                    <span style="color: red;">
                        @error('status')
                            {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                <label class="custom-label">Title <code>*</code></label>
                <input type="text" name="title" class="form-control" id="textString">
           
                <span style="color: red;">
                        @error('title')
                            {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                <label class="custom-label">Slug <code>(SEO)</code></label>
                <input type="text" name="slug" class="form-control" id="textSlug" readonly>
               
                <span style="color: red;">
                        @error('slug')
                            {{$message}}
                        @enderror
                    </span>
                </div>
              
                
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>

     

          <div class="col-md-6">
            <div class="card card-dark">
                <div class="card-header">
               <h3 class="card-title">List Data</h3> 
                </div>


                <div class="card-body">

                    <div class="card-body">
                    <div class="table-responsive">

                        <div>
                            <p class="text-success text-bold">Total Data: {{ $all_data->total() }}</p>
                          
                        </div>
                        <form id="bulk-delete-form" method="POST" action="{{ route('bulk.delete.manage.code') }}">
                            @csrf
                            @method('DELETE')
                            
                            <button type="button" id="select-all-btn" class="btn btn-primary btn-sm">Select All</button> <!-- Select All Button -->
                            <button type="button" id="confirm-delete-btn" class="btn btn-success btn-sm" disabled>Delete Selected</button> <!-- Trigger SweetAlert -->

                            <a href="{{ route('view.page.manage.learning')}}" class="btn btn-info btn-sm">View Page</a> 
                        
                            <table  class="table table-bordered table-striped mt-2">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="select-all-checkbox"> <!-- Select All Checkbox -->
                                        </th>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_data as $key=>$item)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="items[]" value="{{ $item->id }}" class="item-checkbox">
                                            </td>
                                            <td>{{ $key + 1 + ($all_data->currentPage() - 1) * $all_data->perPage() }}</td>
                                            <td>{{ $item->title }}</td>
                                            
                                              @if($item->status == 0)
                                              <td><span class="badge bg-danger">inactive</span></td>
                                              @else
                                              <td><span class="badge bg-success">active</span></td>
                                              @endif

                                            <td>

                                              <a href="{{ route('edit.manage.code', $item->id) }}" 
                                                class="btn btn-sm btn-primary " 
                                                data-id="{{ $item->id }}">
                                                 <i class="fa fa-pencil-alt"></i> edit
                                             </a>
                                                
                                                <a href="{{ route('delete.manage.code', $item->id) }}" 
                                                   class="btn btn-sm btn-danger delete-btn" 
                                                   data-id="{{ $item->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>

                          <div class="d-flex justify-content-center">
                            {{ $all_data->links() }}
                        </div>

                    </div>
                    </div>


                </div>

            </div>
          </div>



     
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <script>
    document.getElementById("textString").addEventListener("input", function () {
    let theSlug = string_to_slug(this.value);
    document.getElementById("textSlug").value = theSlug;
  });
  
  function string_to_slug(str) {
    str = str.replace(/^\s+|\s+$/g, ""); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";
    for (var i = 0, l = from.length; i < l; i++) {
      str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
    }
  
    str = str
      .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
      .replace(/\s+/g, "-") // collapse whitespace and replace by -
      .replace(/-+/g, "-"); // collapse dashes
  
    return str;
  }
  
  </script>

<script>
    $('#summernote').summernote({

      tabsize: 2,
      height: 100
    });

    $('#summernote1').summernote({

    tabsize: 2,
    height: 100
    });
  </script>

                               
<script>
    // Attach click event listeners to all elements with the 'delete-btn' class
    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default link behavior

            const deleteUrl = this.href; // Get the href attribute (delete route)

            // SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover the deleted item!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true // Move the Cancel button to the left
            }).then((result) => {
                if (result.isConfirmed) {
                    // Navigate to the delete URL if confirmed
                    window.location.href = deleteUrl;
                }
            });
        });
    });
</script>


<script>
     // Select/Deselect all checkboxes when "Select All" button is clicked
     document.getElementById('select-all-btn').addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.item-checkbox');
        const isAllChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);

        checkboxes.forEach(checkbox => {
            checkbox.checked = !isAllChecked;
        });

        // Enable/Disable delete button based on selection
        toggleDeleteButton();
    });

    // Enable/Disable delete button based on selected checkboxes
    function toggleDeleteButton() {
        const deleteButton = document.getElementById('confirm-delete-btn');
        const checkboxes = document.querySelectorAll('.item-checkbox');
        const anySelected = Array.from(checkboxes).some(checkbox => checkbox.checked);
        deleteButton.disabled = !anySelected;
    }

    // Watch for individual checkbox changes to enable/disable delete button
    document.querySelectorAll('.item-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', toggleDeleteButton);
    });

    // SweetAlert Confirmation
    document.getElementById('confirm-delete-btn').addEventListener('click', function() {
        const form = document.getElementById('bulk-delete-form');
        const checkboxes = document.querySelectorAll('.item-checkbox');
        const anySelected = Array.from(checkboxes).some(checkbox => checkbox.checked);

     
Swal.fire({
    title: 'Are you sure?',
    text: 'You will not be able to recover the deleted items!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete them!',
    cancelButtonText: 'Cancel',
    reverseButtons: true, // Move cancel button to the left
}).then((result) => {
    if (result.isConfirmed) {
        form.submit(); // Submit the form if confirmed
    }
});



    });
</script>


@endsection