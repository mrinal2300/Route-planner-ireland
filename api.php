<?php

if(!isset($_GET['from']) || !isset($_GET['to'])){
  echo "Invalid location";
  die;
}

$from = $_GET['from'];
$to = $_GET['to'];

$gdata = array(
'origin' => $from,
'destination'=> $to,
'mode' => 'transit',
'transit_mode' => 'bus',
'key'=>'AIzaSyDnzXPt-q902_heeubVtRMG5b1eJe3oRfw'
);
$url = "https://maps.googleapis.com/maps/api/directions/json?".http_build_query($gdata);
$jsonData   = file_get_contents($url);
$data = json_decode($jsonData, true);
if($data["status"] != "OK"){
  die("No bus route result found.");
}

$info = $data["routes"][0]["legs"][0];
$data = $info["steps"];
?>



    <p><strong>From:</strong> <?php echo $info["start_address"]; ?></p>
    <p><strong>To:</strong> <?php echo $info["end_address"]; ?></p>
    <p><strong>Distance:</strong> <?php echo $info["distance"]["text"]; ?></p>
    <p><strong>Depart at:</strong> <?php echo $info["departure_time"]["text"]; ?></p>
    <p><strong>Arrive at:</strong> <?php echo $info["arrival_time"]["text"]; ?></p>
    <p><strong>Total journey time:</strong> <?php echo $info["duration"]["text"]; ?></p>

    <?php foreach ($data as $key => $value) { ?>
      <div class="well">
      <h4><?php echo $value["html_instructions"]; ?></h4>
        <?php if($value["travel_mode"] == "TRANSIT"){ ?>
          <div class="row">
          <div class="col-md-6">
          <p><strong>Departure stop</strong> <?php echo $value["transit_details"]["departure_stop"]["name"]; ?></p>
          <p><strong>Departure time</strong> <?php echo $value["transit_details"]["departure_time"]["text"]; ?></p>
          </div>
          <div class="col-md-6">
          <p><strong>Arrival stop</strong> <?php echo $value["transit_details"]["arrival_stop"]["name"]; ?></p>
          <p><strong>Arrival time</strong> <?php echo $value["transit_details"]["arrival_time"]["text"]; ?></p>
          </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
