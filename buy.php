<?php 
for($i=0; $i<10;$i++){ 
  $htmlElement = "<link href="../buy_card/buy_card.css" rel="stylesheet" type="text/css"/>


  <div id="card">
      <div id="top">
        <div class="row">
          <div id="rating">
            <p>97</p>
          </div>
          <div id="name">
            <p>MESSI</p> 
          </div>
        </div>
        <div class="row">
          <div id="pos">
            <p>CF</p>
          </div>
          <div id="form">
            <p>Barcelona</p>
          </div>
        </div>
      </div>
      <div id="middle"></div>
      <div id="bottom"></div>
    </div>"; 
  echo $htmlElement; 
  echo '<br/>'; 
} 
?> 