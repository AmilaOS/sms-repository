  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/systemuser/delete?systemuser_id='+selected_id,
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
        <th>Updated At</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th style="text-align: right;">Operations</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($data_sets_systemusers))
      @foreach ($data_sets_systemusers as $data_set_systemuser)

       
        <tr>
          <th scope="row">{{ $data_set_systemuser->id }}</th>
          <td>{{ $data_set_systemuser->created_at }}</td>
          <td>{{ $data_set_systemuser->updated_at }}</td>
          <td>{{ $data_set_systemuser->name }}</td>
          <td>{{ $data_set_systemuser->email }}</td>
          <td>{{ $data_set_systemuser->role }}</td>

          <td style="text-align:right;">
            <a class="ml-2" target="_blank" href="/systemuser/preview?systemuser_id={{ $data_set_systemuser->id }}"><i class="fa fa-eye"></i></a>
            <a class="ml-2" target="_blank" href="/systemuser/modify?systemuser_id={{ $data_set_systemuser->id }}"><i class="fa fa-edit"></i></a>
            <a class="ml-2" href="" id="{{ $data_set_systemuser->id }}" onclick="deleteClassroom(this.id);"><i class="fa fa-trash text-danger"></i></a>
          </td>
        </tr>
         
     @endforeach
      </tbody>
    </table>
    {!! $data_sets_systemusers->render() !!}

  @else
    </tbody>
  </table>
  @endif

