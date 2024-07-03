@extends('backend.dash')

@section('main-content')
<div class="card">
  <h5 class="card-header">Ajax Sourced Server-side</h5>
  <div class="card-datatable text-nowrap">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="table-responsive"><table class="datatables-ajax table dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
      <thead>
        <tr>
          <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Full name: activate to sort column descending" style="width: 157.781px;">Full name</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 97.5312px;">Email</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 135.578px;">Position</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 108.172px;">Office</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 162.844px;">Start date</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 111.094px;">Status</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 111.094px;">Action</th>
        </tr>

      </thead><tbody>
        @foreach ($registeruser as  $index=>$singleuser)
        <tr class="odd">
          <td valign="top"  class="dataTables_empty">1</td>
          <td valign="top"  class="dataTables_empty">1</td>
          <td valign="top"  class="dataTables_empty">1</td>
          <td valign="top"  class="dataTables_empty">1</td>
          <td valign="top"  class="dataTables_empty">1</td>
          <td valign="top"  class="dataTables_empty">
           
            @if ($singleuser->status==1)
            {{ "Active" }}
            @elseif ($singleuser->status==2)
            {{ "Pending" }}
                @else
                {{ "Cancel" }}
            @endif
          

          </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="ti ti-dots-vertical"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i> Edit</a>
                <a  data-userid="{{ $singleuser->id }}" class="approve-btn dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>Approved</a>
                <a  data-userid="{{ $singleuser->id }}" class="cancel-btn dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>Cancel</a>
              </div>
            </div>
          </td>

         
        </tr>
        @endforeach
        
      </tbody>
    </table></div><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a></li></ul></div></div></div></div>
  </div>
</div>

@endsection


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script >
  
   $(document).ready(function(){
  $(".approve-btn").click(function(){   
    var userid = $(this).attr('data-userid');
        $.ajax({
                url: '{{ route("user.approved", ":userid") }}'.replace(':userid', userid),
                type: 'GET',
                dataType: 'json',
                success: function(response){              
                    $.each(response, function(id, data) {
                     
                      window.location()
                      
                                                                
                    });

                }
            });
    
  });

  $(".cancel-btn").click(function(){   
    var userid = $(this).attr('data-userid');
        $.ajax({
                url: '{{ route("user.cancel", ":userid") }}'.replace(':userid', userid),
                type: 'GET',
                dataType: 'json',
                success: function(response){              
                    $.each(response, function(id, data) {
                     
                      window.location()
                      
                                                                
                    });

                }
            });
    
  });
  //var value = $('#dropDownId').val();

});
   
</script>