<link href="style.css" rel="stylesheet" type="text/css" />
  <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="  Search" />
  </form>