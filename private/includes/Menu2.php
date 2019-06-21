<?php
require __DIR__ . '/link.php';


echo '
<ul>
  <li class="dropdown" id="top">
    <a href="javascript:void(0)" class="dropbtn">More &#x25BC;</a>
    <a href="javascript:void(0)" class="dropbtn2">More &#x25B2;</a>
    <div class="dropdown-content">
      <a href="'.$link.'about">About us</a>
			<a href="'.$link.'contact">Contact</a>
			<a href="'.$link.'channel">Channels</a>
			<a href="'.$link.'projects">Projects</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Other page &#x25BC;</a>
    <a href="javascript:void(0)" class="dropbtn2">Other page &#x25B2;</a>
    <div class="dropdown-content">
      <a href="'.$link.'home">Home</a>
      <a href="'.$link.'search">Search</a>
      <a href="'.$link.'agenda">Agenda</a>
    </div>
  </li>
</ul>
';


 ?>
