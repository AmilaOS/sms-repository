  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/teacher/delete?teacher_id='+selected_id,
            type: "get", //send it through get method,
            success: function(data) {
              if($.isEmptyObject(data.error)){
                  alert('Deleted!');
              }else{
                alert('Not deleted!');
              }
            },
            error:function(){
              alert("Error ocured!");
            }
          });
        }
      }
  </script>

<table class="table table-hover">
    <thead>
     <tr>
        <th>#</th>
        <th>Created At</th>
        <th>Created By</th>
        <th>Name</th>
        <th>Group</th>
        <th>Address</th>
        <th>NIC</th>
        <th>Mobile</th>
        <th>Subject</th>
        <th>NIC</th>
        <th>Remarks</th>
        <th>Bank Acc.</th>
        <th>Status</th>
        <th style="text-align: right;">Operations</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($data_sets_teachers))
      @foreach ($data_sets_teachers as $data_set_teacher)

       
        <tr>
          <th scope="row">{{ $data_set_teacher->id }}</th>
          <td>{{ $data_set_teacher->created_at }}</td>
          <td>{{ $data_set_teacher->created_by }}</td>
          <td>{{ $data_set_teacher->teacher_name }}</td>
          <td>{{ $data_set_teacher->teacher_group }}</td>
          <td>{{ $data_set_teacher->teacher_address }}</td>
          <td>{{ $data_set_teacher->teacher_nic }}</td>
          <td>{{ $data_set_teacher->teacher_mobile }}</td>
          <td>{{ $data_set_teacher->teacher_subject }}</td>
          <td>{{ $data_set_teacher->teacher_nic }}</td>
          <td>{{ $data_set_teacher->teacher_notes }}</td>
          <td>{{ $data_set_teacher->teacher_bank_account }}</td>

          <?php 
          if($data_set_teacher->teacher_status==1){
            echo '<td style="color:green;">Acive</td>';
          }else{
            echo '<td style="color:red;">Removed</td>';
          }
          ?>

          <td style="text-align:right;">
            <!-- <a class="ml-2" target="_blank" href="/teacher/preview?teacher_id={{ $data_set_teacher->id }}"><i class="fa fa-eye"></i></a> -->
            <a class="ml-2 text-primary" target="_blank" href="/teacher/modify?teacher_id={{ $data_set_teacher->id }}"><i class="fa fa-edit"></i></a>
            <a class="ml-2 text-danger" href="" id="{{ $data_set_teacher->id }}" onclick="deleteClassroom(this.id);"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
         
     @endforeach
      </tbody>
    </table>
    {!! $data_sets_teachers->render() !!}

  @else
    </tbody>
  </table>
  @endif

