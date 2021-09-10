<div class="col-lg-12 center">
  <div class="card">
    <div class="card-header">{{$table['title']}}</div>
    <div class="card-body">
      <table class="table table-responsive-sm">
        <thead>
          <tr>
            @foreach ($table['columns'] as $column)
            <th>{{$column}}</th>
            @endforeach
            <th>actions</th>
          </tr>
        </thead>


        <tbody>
          @foreach ($table['rows'] as $row)
          <tr>
            @foreach ($table['columns'] as $column)
            <td>{{$row[$column]}}</td>
            @endforeach
            <td>
              <div class="dropdown ">
                <button class="btn btn-defult dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="c-icon cil-options"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <form action="{{route('users.destroy',$row['id'])}}" method="POST">
                  @method('DELETE')
                  @csrf
                 <!--   custom actions-->

                  @if(!empty($table['other_actions']))
                  @foreach ($table['other_actions'] as  $action)
                  <a class="dropdown-item" href="#">{{$action['title']}}</a>
                 @endforeach
                 @endif

                 <!--  dufalt actions-->
                 <a class="dropdown-item" href="{{ route('users.show', $row['id']) }}">عرض</a>
                 <a class="dropdown-item" href="{{ route('users.edit', $row['id']) }}">تعديل</a>
                 <button type="submit" class="dropdown-item">حذف</button>
               </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!--  $table['rows']->links('pagination::bootstrap-4') -->
     @if(!empty($table['links']))
     {{$table['links']}}
                 @endif
    </div>
  </div>
</div>
<!-- /.col-->
