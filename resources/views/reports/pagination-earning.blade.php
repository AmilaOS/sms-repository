  <script>
    function deleteClassroom(selected_id){
      event.preventDefault(selected_id);
       var conf = confirm("Are you sure?");
        if(conf){
          $.ajax({
            url: '/earning/delete?earning_id='+selected_id,
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
<div class="col-6">
<table class="table table-hover">
    <thead>
     <tr>
        <th>#</th>
        <th>Lecturer ID</th>
        <th>Lecturer Name</th>
        <th style="text-align: right;">Percentage %</th>
        <th style="text-align: right;">Revenue</th>
        <th style="text-align: right;">Profit</th>

      </tr>
    </thead>
    <tbody>
    @if(isset($data_sets_earnings))
    <?php $num=1; $total=0; $total_=0; ?>
      @foreach ($data_sets_earnings as $data_set_earning)

       
        <tr>
          <td><?php echo $num; ?></td>
          <td>{{ $data_set_earning->lecturer_name }}</td>
          <td>{{ $data_set_earning->acc_number }}</td>
          <td style="text-align: center;color: green;">{{ $data_set_earning->revenue_percentage }}%</td>
          <td style="text-align: right;color: green;">{{ number_format($data_set_earning->salary,2) }}</td>
          <td style="text-align: right;color: green;"><?php echo number_format((($data_set_earning->salary/100)*$data_set_earning->revenue_percentage),2); ?></td>

        </tr>
         <?php $num++; ?>
         <?php $total=$total+$data_set_earning->salary; ?>
         <?php $total_=$total_+(($data_set_earning->salary/100)*$data_set_earning->revenue_percentage); ?>
     @endforeach
     <tr>
          <td scope="row">Total</td>
          <td></td>
          <td></td>
          <td></td>
          <td style="text-align: right;color: red;">{{ number_format($total,2) }}</td>
          <td style="text-align: right;color: red;">{{ number_format($total_,2) }}</td>
        </tr>
        <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
      </tbody>
    </table>
    {!! $data_sets_earnings->render() !!}

  @else
    </tbody>
  </table>
  @endif
</div>
