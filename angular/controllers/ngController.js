app
  .controller('MainCrtl', function ($scope) {
    $scope.message = 'Angular & CodeIgniter 3 Tutorial';
  })
  .controller('StdCtrl', function ($scope, $http, toaster) {
    $http.get(base_url + "student/student_list").success(function (res) {
      $scope.stdData = res.data;
      toaster.pop({type: res.status, title: res.status, body: res.message, showCloseButton: true, closeHtml: '<button>Close</button>'});
    }).error(function (res) {
      console.log(res);
    });
    $scope.studentMessage = 'Welcome to Student Page';
  })
  .controller('product',function($scope, $http, toaster){
    $http.get(base_url+"product/productList").success(function(res){
      $scope.productDataJson = res.data
      toaster.pop({type: res.status, title: res.status, body: res.message, showCloseButton: true, closeHtml: '<button>Close</button>'});
    }).error(function(res){
      console.log(res);
    })
  })


