<?php

require_once 'auth.php';

$user = auth_current_user();

// echo ($user['username']);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Homepage </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/styles/css/homepage.css">

</head>

<body>
  <div class="main">
    <div class="navbar">
      <div class="contentNavBar">
        <img src="/assets/simbolo-logo.png" alt="logo" class="logo" />
        <div class="textContent">
          <h3> Olá, <?php echo ($user['username']) ?>! </h3>
          <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis varius vestibulum. Orci varius natoque penatibus et magnis dis parturient montes. </span>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="showContent">

        <div class="mainlyContent">
          <div class="text1" id="text1">
            <h3> Lorem ipsum dolor sit amet </h3>
            <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis varius vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer sed ornare quam. Nulla varius in quam quis efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus rhoncus placerat convallis. Nulla at tortor et lectus mollis eleifend. Aliquam in eros nec eros varius lobortis. Curabitur porttitor eu lacus eget auctor. Quisque a elit libero. Nullam in placerat nisl, in viverra risus. Nunc a facilisis sem. <br /> <br />

              Pellentesque non egestas quam, vitae scelerisque felis. Integer suscipit enim sit amet porta facilisis. Fusce ex quam, commodo eget ligula id, ultricies fringilla diam. Donec ac finibus neque. Maecenas convallis odio rhoncus aliquam accumsan. Nulla interdum est id tellus tempus dapibus sit amet ac arcu. Vestibulum suscipit diam et orci cursus sodales. Aliquam hendrerit mi id eros dignissim, ac fringilla nunc vehicula. Integer ligula ante, elementum vel venenatis at, sollicitudin vitae risus. Etiam ultricies tempor tortor, vitae blandit massa imperdiet eget.
            </span>
          </div>
          <div class="text2" id="text2">
            <h3> Donec venenatis varius vestibulum </h3>
            <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis varius vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer sed ornare quam. Nulla varius in quam quis efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus rhoncus placerat convallis. Nulla at tortor et lectus mollis eleifend. Aliquam in eros nec eros varius lobortis. Curabitur porttitor eu lacus eget auctor. Quisque a elit libero. Nullam in placerat nisl, in viverra risus. Nunc a facilisis sem. <br /> <br />

              Pellentesque non egestas quam, vitae scelerisque felis. Integer suscipit enim sit amet porta facilisis. Fusce ex quam, commodo eget ligula id, ultricies fringilla diam. Donec ac finibus neque. Maecenas convallis odio rhoncus aliquam accumsan. Nulla interdum est id tellus tempus dapibus sit amet ac arcu. Vestibulum suscipit diam et orci cursus sodales. Aliquam hendrerit mi id eros dignissim, ac fringilla nunc vehicula. Integer ligula ante, elementum vel venenatis at, sollicitudin vitae risus. Etiam ultricies tempor tortor, vitae blandit massa imperdiet eget.
            </span>
          </div>
          <div class="text3" id="text3">
            <h3> Nulla varius in quam quis efficitur </h3>
            <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis varius vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer sed ornare quam. Nulla varius in quam quis efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus rhoncus placerat convallis. Nulla at tortor et lectus mollis eleifend. Aliquam in eros nec eros varius lobortis. Curabitur porttitor eu lacus eget auctor. Quisque a elit libero. Nullam in placerat nisl, in viverra risus. Nunc a facilisis sem. <br /> <br />

              Pellentesque non egestas quam, vitae scelerisque felis. Integer suscipit enim sit amet porta facilisis. Fusce ex quam, commodo eget ligula id, ultricies fringilla diam. Donec ac finibus neque. Maecenas convallis odio rhoncus aliquam accumsan. Nulla interdum est id tellus tempus dapibus sit amet ac arcu. Vestibulum suscipit diam et orci cursus sodales. Aliquam hendrerit mi id eros dignissim, ac fringilla nunc vehicula. Integer ligula ante, elementum vel venenatis at, sollicitudin vitae risus. Etiam ultricies tempor tortor, vitae blandit massa imperdiet eget.
            </span>
          </div>
        </div>

        <div class="anchors">
          <ul>
            <li> <a href="#text1"> Lorem ipsum dolor sit amet </a> </li>
            <li> <a href="#text2"> Donec venenatis varius vestibulum </a> </li>
            <li> <a href="#text3"> Nulla varius in quam quis efficitur </a> </li>
          </ul>
        </div>

      </div>
    </div>

  </div>
</body>

</html>