<html>
<head>
<title>Photo Gallery</title>

<script type="text/javascript">
/* <![CDATA[ */

window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
/*]]>*/
</script>

</head>
<body>
<h2>Photo Gallery</h2>
<h4>
<?php

  $filelist = glob("images/img*.gif");
    if ($filelist != false) {
      print "<p>Here are some pictures:</p>";
      foreach ($filelist as $file) {
        $url = "http://karensuda.com/images/" . substr($file, strrpos($file, '/') + 1);
        print "<p><img src='$url'></p>";
      }
    }
    else {
      print "There are no pictures to display! ";
    }

?>
<a href="projects_php.html"> Click Here to Add a Photo to Gallery</a><br />
</h4>
</body>
</html>