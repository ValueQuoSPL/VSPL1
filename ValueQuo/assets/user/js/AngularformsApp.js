//var angularFormApp = angular.module('angularFormApp', []);
//angularFormApp.controller('regController', ['$scope', '$http',
//    function Formcontroller($scope, $http) {
//        $scope.welcome = 'hi welcome to Angularjs coding';
//        $scope.user = {};
//        $scope.submitForm = function () {
//            $http({
//                method: 'post',
//                url: 'insert_data',
//                data: $scope.user, //forms user object
//                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
//            }).success(function (data) {
//                $scope.message = data;
//            });
//        };
//    }]);
//angular.bootstrap(document, ['angularFormApp']);