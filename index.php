<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
    <style type="text/css">
      .container {
          margin-top: 20px;
      }
    </style>
    <script type="text/javascript">
      function EmailController($scope) {
        $scope.emails = [
          { from: 'John', subject: 'I love angular', date: 'Jan 1' },
          { from: 'Jack', subject: 'Angular and I are just friends', date: 'Feb 15' },
          { from: 'Ember', subject: 'I hate you Angular!', date: 'Dec 8' }
        ];
      }
    </script>
</head>
<body>
    <div class="container" ng-app >
      <table class="table table-bordered table-condensed" ng-controller="EmailController">
        <tbody>
     
            <tr ng-repeat="email in emails">
                <td>{{email.from}}</td>
                <td>{{email.subject}}</td>
                <td>{{email.date}}</td>
            </tr>
           
        </tbody>
      </table>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script  src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
    
</body>
</html>