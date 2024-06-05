<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>study_materials</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
	<nav class="navbar">
    <div class="navdiv">
      <div class="logo">
		<img src="https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA5L2pvYjk2MC0xMzgtcC5wbmc.png" alt="All in one Logo">
	  </div>

      <ul>
        <li><a href="front.html">Home</a></li>
        <li><a href="mat_post.html">upload</a></li>
        <li><a href="viewing.php">download</a></li>
      </ul>
      <button><a href="sign_up.html">sign up</a></button>
      <button><a href="sign_up.html">sign in</a></button>
    </div>
  </nav>
        <?php
        require_once("db.php");

        $sql = "SELECT * FROM study_materials";
        $qry = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($qry);

        if ($row == 0) {
            echo "Error";
        } else {
        ?>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Subject</th>
						<th>Class</th>
                        <th>Unit</th>
                        <th>Chapter</th>
                        <th>Material Name</th>
                        <th>Download Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($res = mysqli_fetch_assoc($qry)) {
                        $subject = $res['subject'];
						$class = $res['grade'];
                        $unit = $res['unit'];
                        $chapter = $res['chapter'];
                        $material = $res['material'];
                    ?>
                        <tr>
                            <td><?php echo $subject; ?></td>
                            <td><?php echo $class; ?></td>
                            <td><?php echo $unit; ?></td>
                            <td><?php echo $chapter; ?></td>
                            <td><?php echo $material; ?></td>
                            <td><a href="<?php echo $material; ?>" class="btn btn-primary" download>Download</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
</body>

</html>
