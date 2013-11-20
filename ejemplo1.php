<!DOCTYPE html>
<html ng-app="myApp">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>AngularJS :: 1</title>
<script src="js/lib/angular.min.js"></script>
</head>

<body>
<div ng-controller="Example1"  class="container">
<h1>Controller in Module</h1>
<ul><li ng-repeat="person in people | filter:searchWord"> {{person.name}} : {{person.age}}</li></ul>
</div>
<div class="container">
  <h1>Data Binding</h1>
  <label>Message: </label>
  <input type="text" ng-model="message" placeholder="Enter a message">
  <label>Name: </label>
  <input type="text" ng-model="name" placeholder="Enter your name">
  <hr>
  <h3>{{message}}&nbsp;{{name}}</h3>
</div>
<div class="container">
  <div ng-controller="Ctrl">
    <h1>Controller</h1>
    <h3>{{name}} &nbsp; {{age}}</h3>
  </div>
  <hr>
  <div ng-controller="AnotherCtrl">
    <h1>Another Controller</h1>
    <label>Name: </label>
    <input type="text" ng-model="name" placeholder="Enter your name">
    <h3>{{name}} &nbsp; {{age}}</h3>
    <div class="console">{{CtrlResult}}&nbsp;</div>
  </div>
</div>
<div class="container">
  <h1>ng-show & ng-hide</h1>
  <div>
    <label>Name: </label>
    <input type="text" ng-model="nameA" placeholder="Enter your name">
    <input type="checkbox" ng-model="checkA">
    <label>Show?</label>
  </div>
  <hr>
  <h3 ng-show="checkA"> Hello {{nameA || "world"}}! </h3>
</div>
<div class="container" ng-controller="List">
  <h1>ng-repeat, First Filter,</h1>
  <h1>ng-click & Angular variables</h1>
  <div>
    <input type="search" ng-model="searchWord">
  </div>
  <ul>
    <li ng-repeat="person in people | filter:searchWord"> {{person.name}} : {{person.age}}
    <button ng-click="remove($index)">x</button>
    <span ng-show="$first">First!</span>
    <span ng-show="$middle">Middle!</span>
    <span ng-show="$last">Last!</span>
    </li>
  </ul>
  <div class="console">There are {{people.length}} people in the list.</div>
  <hr>
  <div>
  
  <label>Name: </label>
  <input type="text" ng-model="new_name" placeholder="Enter your name">
  <label>Age: </label>
  <input type="number" ng-model="new_age" placeholder="Enter an age">
  <button ng-click="add()">Add</button>
  </div>
</div>
<div class="container" ng-controller="ngChangeDiv">
<h1>ng-change & ng-options</h1>
<input type="text" ng-change="clean()" ng-model="url">
<hr>
<div class="console">{{url}}&nbsp;</div>
<hr>
<div><input type="search" ng-model="searchWord"></div>
<select ng-model="selected_person" ng-options="person.name for person in people | filter:searchWord">
<option value="">Select a person</option>
</select>
<h3>{{selected_person.name}}&nbsp;{{selected_person.number}}</h3>
<div>
<label>Name: </label>
  <input type="text" ng-model="selected_person.name" placeholder="Enter your name">
  <label>Number: </label>
  <input type="text" ng-model="selected_person.number" placeholder="Enter an number">
</div>
</div>
<script src="js/app/ejemplo1.js"></script>
</body>
</html>