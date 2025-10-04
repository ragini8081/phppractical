<?php
$theme = $_COOKIE['theme'] ?? 'light';
if(isset($_GET['set'])){
    $theme = $_GET['set'];
    setcookie("theme",$theme,time()+3600);
    header("Location: ".$_SERVER['PHP_SELF']);
}
?>
<body style="background:<?php echo $theme=='dark'?'black':'white'; ?>;
             color:<?php echo $theme=='dark'?'white':'black'; ?>">
<h2><?php echo ucfirst($theme); ?> Mode</h2>
<a href="?set=light">Light</a> | <a href="?set=dark">Dark</a>
</body>
