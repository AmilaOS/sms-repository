  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/lecture/delete?lecture_id='+selected_id,
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
        <th>Lecture Name</th>
        <th>Teacher</th>
        <th>Fee</th>
        <th>Lec. Operator</th>
        <th>Classroom</th>
        <th>More Info</th>
        <th>Started</th>
        <th>Ending</th>
        <th>Status</th>
        <th style="text-align: right;">Operations</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($data_sets_lectures))
      @foreach ($data_sets_lectures as $data_set_lecture)

       
        <tr>
          <th scope="row">{{ $data_set_lecture->id }}</th>
          <td>{{ $data_set_lecture->created_at }}</td>
          <td>{{ $data_set_lecture->created_by }}</td>
          <td>{{ $data_set_lecture->lecture_name }}</td>
          <td>{{ $data_set_lecture->lecturer_name }}</td>
          <td>{{ $data_set_lecture->lecture_fee }}</td>
          <td>{{ $data_set_lecture->lecture_hall_operator }}</td>
          <td>{{ $data_set_lecture->lecture_classroom }}</td>
          <td>{{ $data_set_lecture->lecture_more_information }}</td>
          <td>{{ $data_set_lecture->lecture_start_date }}</td>
          <td>{{ $data_set_lecture->lecture_end_date }}</td>

          <?php 
          if($data_set_lecture->lecture_status=='on'){
            echo '<td style="color:green;">Acive</td>';
          }else{
            echo '<td style="color:red;">Removed</td>';
          }
          ?>

          <td style="text-align:right;">
            <a class="ml-2" target="_blank" href="/lecture/preview?lecture_id={{ $data_set_lecture->id }}"><i class="fa fa-eye"></i></a>
            <a class="ml-2" target="_blank" href="/lecture/modify?lecture_id={{ $data_set_lecture->id }}"><i class="fa fa-edit"></i></a>
            <a class="ml-2" href="" id="{{ $data_set_lecture->id }}" onclick="deleteClassroom(this.id);"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
         
     @endforeach
      </tbody>
    </table>
    {!! $data_sets_lectures->render() !!}

  @else
    </tbody>
  </table>
  @endif

