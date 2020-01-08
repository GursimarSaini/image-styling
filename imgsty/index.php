<!DOCTYPE html>
<html>
<title>Image Styling</title>
<body  style="height:100%; width:100%">
    <div style="height:670px; width:100%; position:static">
        <?php
          include('header.html');
        ?>
    </div>
    <div style="width:100%; height:475px; position:static">
      <div style="width:50% float:left">
          <?php
            include('image.html');
          ?>
      </div>
      <div style="width:50%; float:right">
          <?php
            include('style.html');
          ?>
      </div>
    </div>
    <div style="height:75px; width:100%; position:absolute">
        <?php
          include('middle.html');
        ?>
    </div>
    <div style="height:75px; width:100%; position:absolute">
        <?php
          include('footer.html');
        ?>
    </div>
</body>
</html>
