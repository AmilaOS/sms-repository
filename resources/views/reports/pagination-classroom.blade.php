  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/classroom/delete?classroom_id='+selected_id,
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
        <th>Room ID</th>
        <th>Category</th>
        <th>Name</th>
        <th>Stud. Amount</th>
        <th>Remarks</th>
        <th>Status</th>
        <th style="text-align: right;">Operations</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($data_sets))
      @foreach ($data_sets as $data_set)

       
        <tr>
          <th scope="row">{{ $data_set->id }}</th>
          <td>{{ $data_set->created_at }}</td>
          <td>user not attached</td>
          <td>{{ $data_set->room_number }}</td>
          <td>{{ $data_set->room_category }}</td>
          <td>{{ $data_set->room_name }}</td>
          <td>{{ $data_set->room_student_amount }}</td>
          <td>{{ $data_set->room_description }}</td>

          <?php 
          if($data_set->room_status==1){
            echo '<td style="color:green;">Acive</td>';
          }else{
            echo '<td style="color:red;">Removed</td>';
          }
          ?>

          <td style="text-align:right;">
           <!--  <a class="ml-2" target="_blank" href="/classroom/preview?classroom_id={{ $data_set->id }}"><i class="fa fa-eye"></i></a> -->
            <a class="ml-2 text-primary" target="_blank" href="/classroom/modify?classroom_id={{ $data_set->id }}"><i class="fa fa-edit"></i></a>
            <a class="ml-2 text-danger" href="" id="{{ $data_set->id }}" onclick="deleteClassroom(this.id);"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
         
     @endforeach
      </tbody>
    </table>
    {!! $data_sets->render() !!}

  @else
    </tbody>
  </table>
  @endif

