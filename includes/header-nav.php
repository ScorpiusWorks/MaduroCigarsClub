<?php 
  $siteroot = '';
?>
 
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-65392990-1', 'auto');
      ga('send', 'pageview');
</script>     

<div id="header">
 <div id="wrapper">      
  <div id="logo_maduro">
    <a href="<?php echo $siteroot; ?>/index.php">    
      <img src="<?php echo $siteroot; ?>/style/images/logo-MCC.png" alt="Logo Maduro">
    </a>
  </div>
  <div id="trabuc">
    <img src="<?php echo $siteroot; ?>/style/images/cigar_without_smoke_opt.png" alt="Trabuc aprins">
  </div>
 </div>
 <div id="menubar">
  <ul id="menu">
    <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
    <li class="<?php if($currentPage =='despre'){echo 'selected';}?>"><a href="<?php echo $siteroot; ?>/despre.php">Despre noi</a></li>
    <li class="<?php if($currentPage =='trabucuri'){echo 'selected';}?>"><a href="<?php echo $siteroot; ?>/trabucuri.php">Arta trabucului</a></li>
    <li class="<?php if($currentPage =='evenimente'){echo 'selected';}?>"><a href="<?php echo $siteroot; ?>/evenimente.php">Evenimente</a></li>
    <li class="<?php if($currentPage =='contact'){echo 'selected';}?>"><a href="<?php echo $siteroot; ?>/contact.php">Contact</a></li>
  </ul>
 </div>
</div>
 
