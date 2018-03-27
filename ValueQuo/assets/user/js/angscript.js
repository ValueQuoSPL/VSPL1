var app = angular.module('myApp', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(true);

    $routeProvider
            .when('/home', {
                templateUrl: "application/views/user/home.php"
            })
            .when('/aboutus', {
                templateUrl: "application/views/user/about.php"
            })
            .when('/myservices', {
                templateUrl: "application/views/user/services.php"
            })
            .when('/contactus', {
                templateUrl: "application/views/user/contact.php"
            })
            .when('/blogs', {
                templateUrl: "application/views/user/blogs.php"
            })
//            .when('/blogs-detail', {
//                templateUrl: "application/views/user/blogs-detail.php"
//            })
            .when('/blogs-detail/:id', {
                templateUrl: "application/views/user/blogs-detail.php",
                controller: 'commentsController'
            })
            .when('/login', {
                templateUrl: "application/views/user/login.php"
            })
            .when('/register', {
                templateUrl: "application/views/user/register.php"
            })
            .when("/", {
                templateUrl: "application/views/user/home.php"
            })
            .when("/portfolio", {
                templateUrl: "application/views/user/portfolio.php"
            })
            .when("/itservice", {
                templateUrl: "application/views/user/itservice.php"
            }).
            otherwise({redirectTo: "/home"});
});

app.controller('menucontroller', function ($scope) {
    $scope.activeMenu = 'home';
});

//app.controller('blogdtlcontroller', function ($scope, $window) {
//    $scope.setFocus = function () {
//        var name = $window.document.getElementById('cmmntfocus');
//        name.focus();
//    };
//});



app.controller('blogdtlcontroller', ['$scope', '$http',
    function bdetailcontroller($scope, $http, $routeParams) {

        $scope.blogdetails = [];
        $http({
            method: 'get',
            url: 'blog_details/' + $scope.blogdetails,
            data: $scope.blogdetails,
        }).success(function ($data) {

            $scope.blogdetails = $data;
        });
    }
]);

//Contact us controller
app.controller('regController', ['$scope', '$http',
    function Formcontroller($scope, $http) {
        $scope.user = {};
        $scope.subsc = {};
//        $scope.submitForm = function () {
//            $http({
//                method: 'post',
//                url: 'insert_data',
//                data: $scope.user, //forms user object
//                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
//            }).success(function (data) {
//                alert("Message Sent Successfully!");
//                location.reload();
//            });
//        };

        $scope.sayhello = function () {
            $http({
                method: 'post',
                url: 'insert_data',
                data: $scope.user, //forms user object
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (data) {
                if (data) {
                    alert("Message Sent Successfully!");
                    location.reload();
                } else {
                    alert("Message Sending Failed!");
//                    location.reload();
                }
            });
        };
        $scope.subscribe = function () {
            $http({
                method: 'post',
                url: 'subscribe_email',
                data: $scope.subsc, //forms user object
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (data) {
                if (data) {
                    alert("You are Subscribed Successfully!");
                    location.reload();
                } else {
                    alert("Subscription Failed!");
//                    location.reload();
                }
            });
        };
    }
]);
// End Contact us controller

//Contact Details Controller
app.controller('contactdetailsController', ['$scope', '$http',
    function contactdetailsController($scope, $http) {
        $scope.contactDetails = [];
        $http({
            method: 'get',
            url: 'fetch_contact_data',
            data: $scope.contactDetails,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function ($data) {
            $scope.contactDetails = $data;
        });
    }
]);
// End Contact Details Controller

//Google Map Controller
//app.controller('googleMapController', ['$scope', '$http',
//    function googleMapController($scope, $http) {
//      
//        $scope.googleMap = [];
//           //Setting the Map options.
//            $scope.MapOptions = {
////                center: new google.maps.LatLng($scope.googleMap[0].lat, $scope.googleMap[0].lng),
//                zoom: 8,
//                mapTypeId: google.maps.MapTypeId.ROADMAP
//            };
//            
//              //Initializing the InfoWindow, Map and LatLngBounds objects.
//            $scope.InfoWindow = new google.maps.InfoWindow();
//            $scope.Latlngbounds = new google.maps.LatLngBounds();
//            $scope.Map = new google.maps.Map(document.getElementById("dvMap"), $scope.MapOptions);
//            
//            //Looping through the Array and adding Markers.
//            for (var i = 0; i < $scope.googleMap.length; i++) {
//                var data = $scope.googleMap[i];
//                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
//            
//           //Initializing the Marker object.
//                var marker = new google.maps.Marker({
//                    position: myLatlng,
//                    map: $scope.Map,
//                    title: data.address
//                }); 
//            //Adding InfoWindow to the Marker.
//                (function (marker, data) {
//                    google.maps.event.addListener(marker, "click", function (e) {
//                        $scope.InfoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
//                        $scope.InfoWindow.open($scope.Map, marker);
//                    });
//                })(marker, data);
//             //Plotting the Marker on the Map.
//                $scope.Latlngbounds.extend(marker.position);
//            }
// 
//            //Adjusting the Map for best display.
//            $scope.Map.setCenter($scope.Latlngbounds.getCenter());
//            $scope.Map.fitBounds($scope.Latlngbounds);
//        
//        $http({
//            method: 'get',
//            url: 'fetch_google_map_data',
//            data: $scope.googleMap,
//            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
//        }).success(function ($data) {
//            $scope.googleMap = $data;
//        });
//    }
//]);
//


app.controller('MyController', function ($scope, $http) {
    $scope.Markers = [];

    $http({
        method: 'get',
        url: 'fetch_google_map_data',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function ($data) {


        $scope.Markers = $data;
        console.log($scope.Markers);
        $scope.MapOptions = {
//                center: new google.maps.LatLng($scope.Markers[0].lat, $scope.Markers[0].lng),
            zoom: 4,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        //Initializing the InfoWindow, Map and LatLngBounds objects.
        $scope.InfoWindow = new google.maps.InfoWindow();
        $scope.Latlngbounds = new google.maps.LatLngBounds();
        $scope.Map = new google.maps.Map(document.getElementById("dvMap"), $scope.MapOptions);

        //Looping through the Array and adding Markers.
        for (var i = 0; i < $scope.Markers.length; i++) {
            var data = $scope.Markers[i];
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);

            //Initializing the Marker object.
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: $scope.Map,
                address: data.address
            });

            //Adding InfoWindow to the Marker.
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    $scope.InfoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                    $scope.InfoWindow.open($scope.Map, marker);
                });
            })(marker, data);

            //Plotting the Marker on the Map.
            $scope.Latlngbounds.extend(marker.position);
        }

        //Adjusting the Map for best display.
        $scope.Map.setCenter($scope.Latlngbounds.getCenter());
        $scope.Map.fitBounds($scope.Latlngbounds);
    });

//    $scope.Markers = [
//        {
//            "address": 'Aksa Beach',
//            "lat": '19.1759668',
//            "lng": '72.79504659999998'
//        }];

    //Setting the Map options.
//    $scope.MapOptions = {
////                center: new google.maps.LatLng($scope.Markers[0].lat, $scope.Markers[0].lng),
//        zoom: 8,
//        mapTypeId: google.maps.MapTypeId.ROADMAP
//    };
//
//    //Initializing the InfoWindow, Map and LatLngBounds objects.
//    $scope.InfoWindow = new google.maps.InfoWindow();
//    $scope.Latlngbounds = new google.maps.LatLngBounds();
//    $scope.Map = new google.maps.Map(document.getElementById("dvMap"), $scope.MapOptions);
//
//    //Looping through the Array and adding Markers.
//    for (var i = 0; i < $scope.Markers.length; i++) {
//        var data = $scope.Markers[i];
//        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
//
//        //Initializing the Marker object.
//        var marker = new google.maps.Marker({
//            position: myLatlng,
//            map: $scope.Map,
//            address: data.address
//        });
//
//        //Adding InfoWindow to the Marker.
//        (function (marker, data) {
//            google.maps.event.addListener(marker, "click", function (e) {
//                $scope.InfoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
//                $scope.InfoWindow.open($scope.Map, marker);
//            });
//        })(marker, data);
//
//        //Plotting the Marker on the Map.
//        $scope.Latlngbounds.extend(marker.position);
//    }
//
//    //Adjusting the Map for best display.
//    $scope.Map.setCenter($scope.Latlngbounds.getCenter());
//    $scope.Map.fitBounds($scope.Latlngbounds);
});
// End Google Map  Controller


//Blogs Controller
app.controller('blogController', ['$scope', '$http',
    function blogController($scope, $http) {
        $scope.blogs = [];
        $http({
            method: 'get',
            url: 'fetch_blog_data',
            data: $scope.user,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function ($data) {

            $scope.blogs = $data;
        });




    }
]);
// End Blogs Controller

//Insert Comment Data
app.controller('blogDetailCntrl', ['$scope', '$http',
    function Formcontroller($scope, $http) {
        $scope.user = {};
        $scope.submitForm = function () {
            $http({
                method: 'post',
                url: 'insert_comment',
                data: $scope.user, //forms user object
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (data) {
                alert("Your Comment Submitted Successfully!");
                location.reload();
            });
        };
    }
]);

// End Insert Comment Data


// Fetch comment data

app.controller('commentsController', ['$scope', '$http', '$routeParams',
    function commentsController($scope, $http, $routeParams) {
//        $scope.comments = [];
        $scope.blog_detail = [];
        $scope.id = $routeParams.id;
        $http({
            method: 'get',
            url: 'fetch_comments_data/' + $scope.id,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (data) {
            $scope.comments = data;

        });
        $http({
            method: 'get',
            url: 'commentsCount/' + $scope.id,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function ($data) {
            $scope.commentCount = $data;
        });

        $http({
            method: 'get',
            url: 'blogCommentsCount',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function ($data) {
            $scope.blogcommentCount = $data;
        });

        $http({
            method: 'get',
            url: 'blog_details/' + $scope.id,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function ($data) {
            $scope.blog_detail = $data;
        });
        $scope.user = {};
        $scope.submitForm = function () {
            $scope.id = $routeParams.id;
            $http({
                method: 'post',
                url: 'insert_comment/' + $scope.id,
                data: $scope.user, //forms user object
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (data) {
                alert("Your Comment Submitted Successfully!");
                location.reload();
            });
        };
        $scope.likeBlog = [];
        $scope.submitlikesCount = function (count) {
            count++;
            var data = {count: count, id: $scope.id};
            $http({
                method: 'post',
                url: 'insert_blog_likes_count',
                data: data, //forms user object
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function ($data) {
//                alert(count);
                $scope.blog_detail['likes'] = count;
            });
        };
    }
]);

// End Fetch comment data

