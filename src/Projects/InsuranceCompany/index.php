<?php
include('includes/arrays.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>InsuranceCompany | We Secure Your Future</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="top"></div>
  <nav id="header">
    <div class="nav-wrapper">
      <p class="brand-logo">Company<span>Logo</span></p>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons collapseIcon">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <?php
        foreach ($navItems as $item) {
        ?>

        <li>
          <a href="<?php echo $item["link"]; ?>">
            <?php echo $item["title"]; ?>
          </a>
        </li>

        <?php
        }
         ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php
        foreach ($navItems as $item) {
        ?>

        <li>
          <a href="<?php echo $item["link"]; ?>">
            <?php echo $item["title"]; ?>
          </a>
        </li>

        <?php
        }
         ?>
      </ul>
    </div>
  </nav>

  <header>
    <div class="headerLogo">
      <span class="firstLine">-</span>
      <span class="lineOne">The Most</span>
      <span class="lineTwo">Reliable</span>
      <span class="lineThree">Insurance</span>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <h2>How It Works</h2>
      <div class="row">
        <div class="col s12">
          <img src="img\hand_shake_002_small.jpg" alt="">
        </div>
        <div class="col s12">
          <h3>Meet and Sign</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam animi dolore blanditiis est, ad debitis voluptatem explicabo. Ducimus magnam voluptatum mollitia saepe, optio modi unde natus incidunt. Numquam rerum provident porro, veniam fugit illo eveniet voluptatibus, architecto unde doloremque, optio sit voluptas ad cupiditate. Asperiores possimus ratione dolorum, beatae placeat aliquid mollitia consectetur dolore vero nisi, modi perferendis enim doloribus laboriosam nesciunt. Doloribus sapiente reiciendis provident quaerat nobis voluptatem possimus aperiam voluptate nemo vel eveniet porro, velit pariatur, repellendus debitis.
          </p>
        </div>
      </div>
      <div class="chevron">
        <img src="img/chevron.png" alt="Chevron">
      </div>
      <div class="row">
        <div class="col s12">
          <img src="img\medical_001_small.jpg" alt="">
        </div>
        <div class="col s12">
          <h3>Health Insurance</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum reprehenderit porro temporibus, non maxime eaque quia. Vitae obcaecati, quibusdam neque et officiis eveniet assumenda beatae praesentium, ipsam doloremque commodi velit officia temporibus non rerum magnam veritatis tempora. Excepturi labore, commodi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil natus amet quis repellat rerum eaque quisquam illo sint hic. Vero explicabo officiis sapiente iste voluptatum nam ullam similique ipsum amet suscipit autem quia quis labore, accusamus, error quod ad voluptate maxime perspiciatis ex facilis fugiat enim aliquid! Minus nemo optio, natus minima quaerat totam veritatis, velit ut fuga, atque omnis.
          </p>
        </div>
      </div>
      <div class="chevron">
        <img src="img/chevron.png" alt="Chevron">
      </div>
      <div class="row">
        <div class="col s12">
          <img src="img\old_age_001_small.jpg" alt="">
        </div>
        <div class="col s12">
          <h3>Pension Scheme</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae iste reprehenderit officiis qui ab non obcaecati natus reiciendis architecto unde! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias sit quia quasi sapiente possimus cumque hic amet magni, magnam dicta aperiam dignissimos recusandae, culpa tenetur quam reprehenderit in? Nulla repudiandae earum quasi deleniti harum sint porro, beatae in quod consequuntur ipsa reiciendis commodi quas facere voluptatibus distinctio tempore assumenda, expedita. Nesciunt ipsum tenetur incidunt, dolor corrupti cumque architecto, magnam numquam!
          </p>
        </div>
      </div>



      <button class="waves-effect z-depth-3" type="button" name="ReadMore"><a href="#orderProcess">Read More</a></button>
    </div>
  </section>

  <div class="chevron">
    <img src="img/chevron.png" alt="Chevron">
  </div>

  <section id="orderProcess">
    <div class="container">
      <h2>Order Process</h2>
      <div class="processGrafics">
        <div class="circle03 circle"></div>
        <div class="circle02 circle"></div>
        <div class="circle01 circle"></div>
        <div class="centerLine">
          <div class="pointingCircle">2</div>
          <div class="pointingLine"></div>
          <!-- INFO BOX -->
          <?php
          foreach ($processInfo as $info) {
          ?>

          <div class="<?php echo "infoContainer" . $info["id"]; ?> infoContainer">
            <div class="<?php echo "infoBox" . $info["id"]; ?> infoBox">
              <h5><?php echo $info["step"]; ?></h5>
              <p>
                <?php echo $info["descr"]; ?>
              </p>
            </div>
          </div>

          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <section id="plans">
    <div class="container">
      <h2>Plans</h2>
      <div class="row">

        <?php
        foreach ($planInfo as $plan) {
        ?>

        <div class="col s12 l4">
          <div class="<?php echo "card" . $plan["id"] ?> card">
            <div class="title">
              <h3><?php echo $plan["plan"] ?></h3>
            </div>
            <div class="planContent">
              <div class="price">
                <h5><?php echo "&pound; " . $plan["price"] . " / Month" ?></h5>
              </div>
              <ul>
                <?php
                for ($i=0; $i < count($plan["options"]); $i++) {
                  ?>

                  <li class="option"><?php echo $plan["options"][$i] ?></li>

                  <?php
                }
                ?>
              </ul>
            </div>
            <button class="waves-effect z-depth-3" type="button" name="orderPlan">Order</button>
          </div>
        </div>

        <?php
        }
        ?>

      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <h2>Features</h2>
      <div class="row flex">
        <div class="col s12 l4">
          <div class="feature">
            <h5 class="center-align">Feature 1</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, labore, nemo autem est reprehenderit deserunt voluptatum consectetur. Vel harum rerum voluptates molestias nesciunt sunt iste quam exercitationem officia aliquid dignissimos, dicta repellendus quaerat, placeat corporis quis commodi architecto maxime enim.
            </p>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="feature">
            <h5 class="center-align">Feature 2</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur harum nihil perspiciatis ipsum magnam, libero! Exercitationem neque eum in fugit, culpa aut sunt ullam consectetur? Eum deserunt quisquam totam officiis saepe earum consequatur sunt? Possimus dolores ullam fugit error quod!
            </p>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="feature">
            <h5 class="center-align">Feature 3</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, facilis earum perferendis autem atque quia rem nam blanditiis nulla doloribus ducimus quam error libero voluptatibus totam nisi sed dolorem incidunt reiciendis laboriosam est culpa. Aperiam dignissimos culpa, maxime qui facere.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="title">
        <h4>Frequently Asked Questions</h4>
      </div>
      <div class="faq">
        <ul>
          <?php foreach ($faq as $item) {
            ?>
            <li class="q"><img src="img/arrow.png" alt="">
              <?php echo $item['q']; ?>
            </li>
            <li class="a">
              <?php echo $item['a']; ?>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="container">
      <h4 class="left-align">Contact Us.</h4>
      <div class="row valign-wrapper">
        <div class="col s1">
          <i class="fas fa-phone"></i>
        </div>
        <div class="col s11">
          <h3><?php echo $phoneNumber; ?></h3>
        </div>
      </div>
      <div class="row valign-wrapper">
        <div class="col s1">
          <i class="fas fa-at"></i>
        </div>
        <div class="col s11">
          <h3><a href="<?php echo "mailto:" . $email . "?subject=feedback" ?>"><?php echo $email; ?></a></h3>
        </div>
      </div>
      <div class="row valign-wrapper">
        <div class="col s1">
          <i class="far fa-envelope"></i>
        </div>
        <div class="col s11">
          <h3><?php echo $address; ?></h3>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div id="footerNav">
      <ul class="hide-on-small-and-down">
        <?php
        foreach ($navItems as $item) {
        ?>

        <li>
          <a href="<?php echo $item["link"]; ?>">
            <?php echo $item["title"]; ?>
          </a>
        </li>

        <?php
        }
         ?>
      </ul>
    </div>
  </footer>

  <div class="backToTop">
    <a href="#top"><i class="fas fa-chevron-circle-up"></i></a>
  </div>
  <!-- SCRIPTS -->
  <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="js/materialize.min.js" charset="utf-8"></script>
  <script src="js/jquery.scrollTo.min.js" charset="utf-8"></script>
  <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
