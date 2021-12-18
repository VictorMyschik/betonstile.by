<table class="table table-sm table-striped mr-middle">
  <thead>
  <tr class="mr-table-head">
    <td>ID</td>
    <td>Title</td>
    <td>Description</td>
    <td>Date</td>
  </tr>
  </thead>
  <tbody>
  @foreach($rows as $row)
    <tr>
      @foreach($row as $data)
        <td>{!! $data !!}</td>
      @endforeach
    </tr>
  @endforeach
  </tbody>
</table>