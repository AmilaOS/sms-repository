  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/student/delete?student_id='+selected_id,
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
        <th>Barcode</th>
        <th>Type</th>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Age</th>
        <th>NIC</th>
        <th>Contact</th>
        <th>Guardian</th>
        <th>Status</th>
        <th style="text-align: right;">Operations</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($data_sets_students))
      @foreach ($data_sets_students as $data_set_student)

       
        <tr>
          <th scope="row">{{ $data_set_student->id }}</th>
          <td>{{ $data_set_student->created_at }}</td>
          <td>{{ $data_set_student->created_by }}</td>
          <td>{{ $data_set_student->student_barcode }}</td>
          <td>{{ $data_set_student->student_type }}</td>
          <td>{{ $data_set_student->student_name }}</td>
          <td>{{ $data_set_student->student_address }}</td>
          <td>{{ $data_set_student->student_gender }}</td>
          <td>{{ $data_set_student->student_age }}</td>
          <td>{{ $data_set_student->student_nic }}</td>
          <td>{{ $data_set_student->student_private_contact }}</td>
          <td>{{ $data_set_student->student_guardian_contact }}</td>

          <?php 
          if($data_set_student->student_status==1){
            echo '<td style="color:green;">Acive</td>';
          }else{
            echo '<td style="color:red;">Removed</td>';
          }
          ?>

          <td style="text-align:right;">
            <a class="ml-2" target="_blank" href="/student/preview?student_id={{ $data_set_student->id }}"><i class="fa fa-eye"></i></a>
            <a class="ml-2" target="_blank" href="/student/modify?student_id={{ $data_set_student->id }}"><i class="fa fa-edit"></i></a>
            <a class="ml-2" href="" id="{{ $data_set_student->id }}" onclick="deleteClassroom(this.id);"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
         
     @endforeach
      </tbody>
    </table>
    {!! $data_sets_students->render() !!}

  @else
    </tbody>
  </table>
  @endif

