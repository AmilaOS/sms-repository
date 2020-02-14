  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/invoice/delete?invoice_id='+selected_id,
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
        <th>Ceated By</th>
        <th>Type</th>
        <th>Stud. ID</th>
        <th>Student</th>
        <th>Id/Lecture</th>
        <th style="text-align: right;">Received Amount</th>
        <th style="text-align: right;">Fee</th>
        <th style="text-align: right;">Due</th>
        <th style="text-align: right;">Operations</th>
      </tr>
    </thead>
    <tbody>
     
    @if(isset($data_sets_invoices))
      @foreach ($data_sets_invoices as $data_set_invoice)

       
        <tr>
          <th scope="row">{{ $data_set_invoice->id }}</th>
          <td>{{ $data_set_invoice->created_at }}</td>
          <td>{{ $data_set_invoice->updated_at }}</td>
          <td>{{ $data_set_invoice->created_by }}</td>
          <td>{{ $data_set_invoice->invoice_type }}</td>
          <td>{{ $data_set_invoice->invoice_student_id }}</td>
          <td>{{ $data_set_invoice->invoice_student_name }}</td>
          <td>{{ $data_set_invoice->invoice_lecture_id }} / {{ $data_set_invoice->invoice_lecture_title }}</td>
          <td style="text-align: right;">{{ $data_set_invoice->invoice_amount_received }}</td>
          <td style="text-align: right;">{{ $data_set_invoice->invoice_amount }}</td>
          <td style="text-align: right;">{{ $data_set_invoice->invoice_amount_due }}</td>

          <td style="text-align:right;">
            <!-- <a class="ml-2" target="_blank" href="/invoice/preview?invoice_id={{ $data_set_invoice->id }}"><i class="fa fa-eye"></i></a> -->
            <a class="ml-2" target="_blank" style="color: green;" href="/invoice/modify?invoice_id={{ $data_set_invoice->id }}"><i class="fa fa-edit"></i></a>
            <a class="ml-2" href="" style="color: red;" id="{{ $data_set_invoice->id }}" onclick="deleteClassroom(this.id);"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
         
     @endforeach
      </tbody>
    </table>
    {!! $data_sets_invoices->render() !!}
 
  @else
    </tbody>
  </table>
  @endif
