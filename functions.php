<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}


function makeEsports($type) {
  if ($type == 'counterstrike') {
    $valid = true;
    $description = 'Counter-Strike is a series of multiplayer first-person shooter video games, in which teams of terrorists and counter-terrorists battle to, respectively, perpetrate an act of terror and prevent it.';
  } else if ($type == 'leagueoflegends') {
    $valid = true;
    $description = 'League of Legends is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and macOS.';
  } else if ($type == 'dota2') {
    $valid = true;
    $description = 'Dota 2 is a free-to-play multiplayer online battle arena video game developed and published by Valve Corporation.';
  } else if ($type == 'overwatch') {
    $valid = true;
    $description = 'Overwatch is a team-based multiplayer first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Microsoft Windows, PlayStation 4, and Xbox One.';
  } else if ($type == 'streetfighter') {
    $valid = true;
    $description = 'Street Fighter, commonly abbreviated as SF or スト, is a fighting video game franchise by Capcom. The second game in the series is credited with establishing many of the conventions of the one-on-one fighting genre.';
  } else if ($type == 'supersmashbros') {
    $valid = true;
    $description = 'Super Smash Bros., known in Japan as Dairantō Smash Brothers, is a series of crossover fighting games published by Nintendo, that primarily features characters from franchises established on its systems.';
  } else if ($type == 'callofduty') {
    $valid = true;
    $description = 'Call of Duty is a first-person shooter video game franchise. The series began on Microsoft Windows, and later expanded to consoles and handhelds. Several spin-off games have been released.';
  } else if ($type == 'gearsofwar') {
    $valid = true;
    $description = 'Gears of War is a video game franchise created and originally owned by Epic Games, developed and managed by The Coalition, and owned and published by Microsoft Studios.';
   } else if ($type == 'halo') {
    $valid = true;
    $description = 'Halo is a military science fiction first-person shooter video game franchise created by Bungie and now managed and developed by 343 Industries, a subsidiary of Microsoft Studios.';
  
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'</strong> is not an Esport. Do your research next time!</p>
      </div>
    ');
  }
}
