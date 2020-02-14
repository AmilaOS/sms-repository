  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/salary/delete?salary_id='+selected_id,
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
        <th>From</th>
        <th>To</th>
        <th>Lecturer Name</th>
        <th>Address</th>
        <th>Account No</th>
        <th style="text-align: right;">Percentage %</th>
        <th style="text-align: right;">Revenue</th>
        <th style="text-align: right;">Salary</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($salary))
    <?php $num=1; $total=0; $total_=0; ?>
      @foreach ($salary as $salaryies)

       
        <tr>
          <td scope="row">{{ $num}}</td>
          <td>{{ $request->from_date }}</td>
          <td>{{ $request->to_date }}</td>
          <td>{{ $salaryies->lecturer_name }}</td>
          <td>{{ $salaryies->address }}</td>
          <td>{{ $salaryies->acc_number }}</td>
          <td style="text-align: center;color: green;">{{ $salaryies->revenue_percentage }}%</td>
          <td style="text-align: right;color: green;">{{ number_format($salaryies->salary,2) }}</td>
          <td style="text-align: right;color: green;"><?php echo number_format((($salaryies->salary/100)*$salaryies->revenue_percentage),2); ?></td>
        </tr>
         <?php $num++; ?>
         <?php $total=$total+$salaryies->salary; ?>
         <?php $total_=$total_+(($salaryies->salary/100)*$salaryies->revenue_percentage); ?>
     @endforeach
        <tr>
          <td scope="row">Total</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td style="text-align: right;color: red;">{{ number_format($total,2) }}</td>
          <td style="text-align: right;color: red;">{{ number_format($total_,2) }}</td>
        </tr>
        <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      </tbody>
    </table>

  @else
    </tbody>
  </table>
  @endif

