@extends('master.backend')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.27/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.27/dist/sweetalert2.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1><span class="text-success" style="border-bottom: 1px dotted green;">Add Learning Management</span></h1>
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
              <form action="{{ route('store.manage.learning')}}" method="post" >
              @csrf

                <div class="card-body">

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
                 
                <div class="form-group">
                    <label >Description <code>*</code></label><br>

                    <textarea class="form-control" id="summernote" cols="15" rows="15" name="description" > </textarea>


                    <span style="color: red;">
                        @error('description')
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

                        <table  class="table table-bordered table-striped">
                            <thead>
                            <tr>
                             
                            <th>Sl</th>
                            <th>Title</th>
                            <th >Action</th>
                            
                            </tr>
                            </thead>
                            <tbody>
          
                           @foreach ($all_data as $key=>$row)

                           <tr>
                            <td>{{ $key + 1 + ($all_data->currentPage() - 1) * $all_data->perPage() }}</td>
                            <td>{{ $row->title}}</td>

                            <td>
                                <!-- Delete Button -->
                                <a href="{{ route('delete.manage.learning', $row->id) }}" 
                                   class="btn btn-sm btn-danger delete-btn" 
                                   data-id="{{ $row->id }}">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                           </tr>
                               
                           @endforeach
                          
                           
                            </tbody>
                           
                          </table>

                          <div class="d-flex justify-content-center">
                            {{ $all_data->links() }}
                        </div>

                    </div>
                    </div>


                </div>

            </div>
          </div>



          <div class="col-md-6">
          
          </div>


          <div class="col-md-6">

            <div class="card card-dark">
                <div class="card-header">
               <h3 class="card-title">Multi Deleted</h3> 
                </div>


                <div class="card-body">

                    <div class="card-body">
                    <div class="table-responsive">


                        <form method="POST" action="{{ route('bulk.delete') }}">
                            @csrf
                            @method('DELETE')
                            
                            <button type="button" id="select-all">Select All</button> <!-- Select All Button -->
                            <button type="submit" id="delete-selected" disabled>Delete Selected</button> <!-- Submit Button -->
                        
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="select-all-checkbox">
                                        </th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_data as $item)
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="items[]" value="{{ $item->id }}" class="item-checkbox">
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>
                                                <!-- Optionally individual delete buttons -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        
                        <script>
                            // Select/Deselect all checkboxes when "Select All" button is clicked
                            document.getElementById('select-all').addEventListener('click', function() {
                                const checkboxes = document.querySelectorAll('.item-checkbox');
                                const selectAllCheckbox = document.getElementById('select-all-checkbox');
                                let isAllChecked = true;
                                
                                // Check if all checkboxes are already selected
                                checkboxes.forEach(checkbox => {
                                    if (!checkbox.checked) {
                                        isAllChecked = false;
                                    }
                                });
                        
                                // Toggle select all based on current state
                                checkboxes.forEach(checkbox => {
                                    checkbox.checked = !isAllChecked;
                                });
                        
                                // Toggle "Select All" button text based on whether all are selected
                                selectAllCheckbox.checked = !isAllChecked;
                        
                                // Enable/Disable delete button based on selection
                                toggleDeleteButton();
                            });
                        
                            // Enable/Disable delete button based on selected checkboxes
                            function toggleDeleteButton() {
                                const deleteButton = document.getElementById('delete-selected');
                                const checkboxes = document.querySelectorAll('.item-checkbox');
                                const anySelected = Array.from(checkboxes).some(checkbox => checkbox.checked);
                                deleteButton.disabled = !anySelected;
                            }
                        
                            // Watch for individual checkbox changes to enable/disable delete button
                            document.querySelectorAll('.item-checkbox').forEach(checkbox => {
                                checkbox.addEventListener('change', toggleDeleteButton);
                            });
                        </script>
                        

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
    // Get all delete buttons
    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior

            const deleteUrl = this.href; // Get the href attribute (delete route)

            // SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the delete route after confirmation
                    window.location.href = deleteUrl;
                } else {
                    Swal.fire(
                        'Cancelled',
                        'Your item was not deleted.',
                        'error'
                    );
                }
            });
        });
    });

   </script>

<script>
    // "Select All" button functionality
    document.getElementById('select-all-btn').addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.item-checkbox');
        const selectAllCheckbox = document.getElementById('select-all-checkbox');
        const isChecked = !selectAllCheckbox.checked; // Toggle the state

        // Set the state of all checkboxes to match the "Select All" checkbox
        checkboxes.forEach(checkbox => {
            checkbox.checked = isChecked;
        });

        // Set the "Select All" checkbox state based on the individual checkboxes
        selectAllCheckbox.checked = isChecked;

        // Enable/Disable delete button based on selection
        toggleDeleteButton();
    });

    // Toggle the delete button based on selected checkboxes
    function toggleDeleteButton() {
        const deleteButton = document.getElementById('delete-selected');
        const checkboxes = document.querySelectorAll('.item-checkbox');
        const anySelected = Array.from(checkboxes).some(checkbox => checkbox.checked);
        deleteButton.disabled = !anySelected;
    }

    // Watch for changes in individual checkboxes to enable/disable delete button
    document.querySelectorAll('.item-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', toggleDeleteButton);
    });
</script>


@endsection