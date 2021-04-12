<?php 
#██╗░░██╗░█████╗░██████╗░██████╗░██╗░░░██╗  
#██║░░██║██╔══██╗██╔══██╗██╔══██╗╚██╗░██╔╝
#███████║███████║██████╔╝██████╔╝░╚████╔╝░
#██╔══██║██╔══██║██╔═══╝░██╔═══╝░░░╚██╔╝░░
#██║░░██║██║░░██║██║░░░░░██║░░░░░░░░██║░░░
#╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░░░░╚═╝░░░░░░░░╚═╝░░░

#█████████████████████████████████████████████████████████████████████████████████████████████████████████
# 			 					change the below code to your desire
#█████████████████████████████████████████████████████████████████████████████████████████████████████████

$xml = simplexml_load_file('/home/server/cod4files/serverstatus.xml'); // cod4 installation directory where 'serverstatus.xml' is present. 	
$server_ip = '192.168.124.142';
$server_location = 'Mumbai';
$server_name = '[AL]PROMOD[DM]';

#█████████████████████████████████████████████████████████████████████████████████████████████████████████
# 			 			Dont change the below code , unless you know what your doing
#█████████████████████████████████████████████████████████████████████████████████████████████████████████



include 'rcon.ini.php';

$indexno = 1;

foreach($xml->Clients->attributes() as $player_data => $data){
    if ($player_data = 'Total'){
        $players_online = $data;
    }
}

foreach($xml->Game->Data as $Game_data){
     foreach($Game_data->attributes() as $game => $data){
             //echo $game.'='.$data.'<br>';
             if(($game = 'Name') && ($data == 'sv_maxclients')){
                 $need_value = $Game_data;
                 $max_players =  $need_value->attributes()->Value;
             }elseif(($game = 'Name') && ($data == 'mapname')){
                $need_value = $Game_data;
                $map_name =  $need_value->attributes()->Value;
             }elseif(($game = 'Name') && ($data == 'gamename')){
                $need_value = $Game_data;
                $game_name =  $need_value->attributes()->Value;
             }elseif(($game = 'Name') && ($data == 'g_gametype')){
                $need_value = $Game_data;
                $gametype_name =  $need_value->attributes()->Value;				
             }
     }
}
 
   	if (!$x = @fsockopen($server_IP, $server_port)) // attempt to connect
        {
            $server_status = 'Offline  <i class="fa fa-circle" style="color:red; font-size: 10px;"></i>';
        }
        else
        {
            $server_status = 'Online   <i class="fa fa-circle" style="color:green; font-size: 10px;"></i>';
            if ($x)
            {
                @fclose($x); //close connection
    	    }
        } 


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Anime Lover Gaming</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body style="background-color: #101820FF; color: #FEE715FF;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.algaming.tk">Anime Lover Gaming</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://www.algaming.tk">Home</a></li>
        <li><a href="http://www.algaming.tk/screenshots/">Screenshots</a></li>
        <!--- <li><a href="http://www.algaming.tk/statistics.php">Statistics</a></li> -->
        <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
		<!-- Modal -->
  	<div class="modal fade alert alert-info" id="contactModal" role="dialog">
    	  <div class="modal-dialog modal-sm">
      	    <div class="modal-content ">
              <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
              <div> <center>For any queries Contact<br><h2>[AL]Happy#9833</h2><br>At Discord</div>
            </div>
          </div>
        </div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid ">    
  <div class="row content">
    <div class="col-sm-2" style="margin-top:40px;">	
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="http://www.algaming.tk">Home</a></li>
        <li><a href="http://www.algaming.tk/screenshots/">Screenshots</a></li>
        <!---<li><a href="http://www.algaming.tk/adminslist.php">Adminslist</a></li>--->
	<li><a href="http://www.algaming.tk/b3">B3 commands</a></li>
	<!---<li><a href="https://github.com/ultra-hash">GitHub</a></li>--->
      </ul>
    </div>
    <div class="col-sm-7 text-left">
	 <h2><?php echo $game_name;?></h2>
	  <div class="panel panel-default">
		<div class="panel-heading"><b>Players Online</b><span class="badge navbar-right" style="margin-right: 10px"> <?php echo $players_online.' / '. $max_players;?></span></div>
		  <div class="panel-body" style="background-color: #101820FF; color: #FEE715FF;">
			<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
				  <tr>
					<th>S.no</th>
					<th>PLAYER NAME</th>
					<th>SCORE</th>
					<th>KILLS</th>
					<th>DEATHS</th>
					<th>PING</th>
					<th>SCREENSHOTS</th>
				  </tr>
				</thead>
				<tbody>
<?php
foreach($xml as $xml_data){
    if($xml_data == $xml->Clients->Client){
		foreach($xml_data as $player){
            //print_r($player->attributes());
			echo '<tr>';
			$once = True;
			foreach($player->attributes() as $player_data => $data){
				$only_need = array('CID','ColorName','Score','Kills','Deaths','Ping');
				if(in_array($player_data, $only_need)){
					//echo $player_data.':'.$data.'<br>';
					//array_push($player_info_got, $data);
					if($player_data == "CID"){
						$player_CID = $data;
					}

					if($once == true){
						echo '<td>'.$indexno.'</td>';
						$once = False;
						$indexno++;
					}
					if($player_data != "CID"){
						echo '<td>'.$data.'</td>';
					}
					if($player_data == 'Ping' ){
						echo '<td>  <form method="POST"><button type="submit" class="btn btn-primary btn-block" data-somestringvalue-text="Screenshot Requested" autocomplete="off" name="player_CID" value="'.$player_CID.'">Take Screenshot</button></form></td>';
					}
				}
			}
			echo '</tr>';
		}
	}
}

echo '</tbody></table></div>';
?>

		</div>
	  </div>
    </div>
    <div class="col-sm-3" style="margin-top:62px;">
		<div class="panel panel-default">
			<div class="panel-heading"><b>Server Name: <?php echo $server_name;?> </b></div>
				<div class="panel-body" style="background-color: #101820FF; color: #FEE715FF;">
					<?php echo '<img src="images/maps/'.$map_name.'.jpg" class="img img-thumbnail" alt="'.$map_name.'"></img>'?>
				</div>
				<div class="panel-footer">
					<ul class="list-group">
					  <li class="list-group-item" style="color: black;">Server Status: <b><?php echo $server_status;?></b></li>
					  <li class="list-group-item" style="color: black;">Map: <b><?php echo $map_name_alias;?></b></li>
					  <li class="list-group-item" style="color: black;">Game Type: <b><?php echo $gametype_name;?></b></li>						
					  <li class="list-group-item" style="color: black;">server ip: <b><?php echo $server_ip; ?></b></li>
					  <li class="list-group-item" style="color: black;">Players online: <b><?php echo $players_online; ?></b></li>
					  <li class="list-group-item" style="color: black;">Location: <b><?php  echo $server_location; ?></b></li>
					</ul>
				</div>
			</div>  
		</div>
	</div>
  </div>
</div>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $(this).button('loading').delay(1000).queue(function(){
      $(this).button('somestringvalue');
      $(this).dequeue().delay(2000).queue(function(){
      	$(this).button("reset");
      	$(this).dequeue();
      });
    });
  });
});
</script>

<footer class="container-fluid text-center">
<p>Copyright 2020-2021 by <a href="http://algaming.tk">Anime Lover Gaming</a>. All Rights Reserved.</p>
</footer>

</body>

<?php 

include 'rcon.php';

?> 
</html>



