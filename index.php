<html>
<head>
<title>Test Page</title>
</head>
<body>
<h1>It works!</h1>
<ul>
  <li>Test list item</li>
  <li>Test another item</li>
  <li>Updated list to prove openshift redeploy works.</li>
  <?php 
    date_default_timezone_set("UTC"); 
    echo "UTC:".time();  
    phpinfo(); ?>
</ul>
</body>
</html>
