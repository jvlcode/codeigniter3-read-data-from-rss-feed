<style>
	* {margin: 0; padding: 0;}
 
 div {
   margin: 20px;
 }
  
 ul {
   list-style-type: none;
   width: 500px;
 }
  
 h3 {
   font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
 }
  
 li img {
   float: left;
   margin: 0 15px 0 0;
 }
  
 li p {
   font: 200 12px/1.5 Georgia, Times New Roman, serif;
 }
  
 li {
   padding: 10px;
   overflow: auto;
 }
  
 li:hover {
   background: #eee;
   cursor: pointer;
 }
</style>
<div style="margin-left:500px">
<h3>Blog List</h3>	
  <ul>
	  <?php foreach($data as $feed):?>
  <li>
      <img width="100" height="20" src="<?=$feed['image']?>" />
	  <a href="<?=$feed['link']?>"><b><?=$feed['title']?></b></a>
      <p><?=$feed['description']?></p>
	  <small><strong><?=$feed['pub_date']?></strong></small>
    </li></a>
	<?php endforeach; ?>
  </ul>
</div>
