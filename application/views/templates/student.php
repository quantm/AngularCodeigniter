<table class="table table-striped">
    <thead>
      <tr>
        <th>SL.</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
        <tr ng-repeat="i in stdData">
        <td>{{$index+1}}</td>
        <td>{{i.first_name}}</td>
        <td>{{i.last_name}}</td>
        <td>{{i.email}}</td>
        <td>{{i.address}}</td>
      </tr>
    </tbody>
  </table>