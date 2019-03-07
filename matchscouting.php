<?php
  require "headerselection.php";
?>
  <main>
      &#160;
    <form action="includes/matchscouting.inc.php" method="post" align="center">
    <input type="text" name="teamid" placeholder="Team Name">
    &#160;
    <input type="text" name="matchid" placeholder="Match Number">
    <p><li><img src="images/Field.PNG" alt="Missing Map!" usemap="#2019Scout" style="width:690px;height:281px;"></li></p>
      <map name="2019Scout">
        <area shape="rect" coords="" alt="RedLevel1Platform" >
        <area shape="rect" coords="" alt="RedLevel2Platform" >
        <area shape="rect" coords="" alt="RedLevel3Platform" >
        <area shape="rect" coords="" alt="BlueLevel1Platform" >
        <area shape="rect" coords="" alt="BlueLevel2Platform" >
        <area shape="rect" coords="" alt="BlueLevel3Platform" >

      </map>
    <button type="submit" name="scoutform-submit">Submit</button>
  </main>
