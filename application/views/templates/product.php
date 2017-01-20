<table class="table table-striped">
    <thead>
    <tr>
        <th>SL.</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Comment</th>

    </tr>
    </thead>
    <tbody>
    <tr ng-repeat="i in productDataJson">
        <td>{{$index+1}}</td>
        <td>{{i.name}}</td>
        <td><img src="{{i.main_list_image}}" style="width: 120px;height: 120px"/></td>
        <td>{{i.main_list_comment}}</td>
    </tr>
    </tbody>
</table>