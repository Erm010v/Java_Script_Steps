<?php //php

    // echo "Hello, Eugene!! "
    // $_name    // правильно
    // $13       // неправильно
    // $_13      // правильно
    // $name_13  // правильно
    //name-13    // неправильно
    
    // $name = 'Петя';
    // $bool = true;
    // $num = 15.28;
    // echo "Привет, $name"; // Привет, Петя
    // echo "Это булевский тип? $bool"; // Это булевский тип? 1
    // echo "Это дробь = $num"; // Это дробь = 15.28


    // Масcивы - это значение(переменная), которое может содержать в 
    // себе сразу несколько значений = []
    
    // $herous = ['Шварц','Рэмбо','X'];

    // class User {
    //     public $name;
    //     public $date;

    //     public function show()
    //     {
    //         echo $this->name, ' ', $this->date;
    //     }
    // }
    // $eugene = new User;
    // $eugene->name = 'Евгений';
    // $eugene->date = 35;
    // $eugene->show(); //Евгений 35


	$name = "Eugene ERM010V";
    $prof = "BI Analyst";
    $town_country = "Moscow, Russia";
    $pochta = "BI@analyst.com";
    $phone = "+79859854444";
    $skills = "BI Analysis";
    $birthYear = "1990";
    // echo date("Y") - $birthYear;
    $day = "1997-03-21";
    $diff = date("Ymd") - date("Ymd", strtotime($day));
    echo substr($diff, 0,  -4); // обрезаются крайние 4 цифры
    $obj = [
    'abilities' => ['Web', 'Adobe', 'Figma', 'BI Analysis'],
    'grades'    => [80, 70, 40, 90]
    ];
    $obj_1 = [
    'languages' => ['Arabic', 'English', 'German', 'Russian'],
    'levels'    => [45, 35, 25, 50]
    ];

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://www.selecthub.com/wp-content/uploads/2022/05/11-Important-Features-of-Business-Intelligence-V4.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomright w3-container w3-text-white">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $town_country; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $pochta; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone;?></p>
          <p><i class="fa fa-mars fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo substr($diff, 0,  -4); ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p><?php echo $obj['abilities'][0];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $obj['grades'][0];?>%"><?php echo $obj['grades'][0];?>%</div>
          </div>
          <p><?php echo $obj['abilities'][1];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $obj['grades'][1];?>%">
              <div class="w3-center w3-text-white"><?php echo $obj['grades'][1];?>%</div>
            </div>
          </div>
          <p><?php echo $obj['abilities'][2];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $obj['grades'][2];?>%"><?php echo $obj['grades'][2];?>%</div>
          </div>
          <p><?php echo $obj['abilities'][3];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $obj['grades'][3];?>%"><?php echo $obj['grades'][3];?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p><?php echo $obj_1['languages'][0];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $obj_1['levels'][0];?>%"></div>
          </div>
          <p><?php echo $obj_1['languages'][1];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $obj_1['levels'][1];?>%"></div>
          </div>
          <p><?php echo $obj_1['languages'][2];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $obj_1['levels'][2];?>%"></div>
          </div>
          <p><?php echo $obj_1['languages'][3];?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo $obj_1['levels'][3];?>%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Создал самый чёткий интренет магазин</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Сделал целую кучу множеств и подмножеств веб-сайтов</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Воплощал в жизнь самые крутые идеи, которые спёр Артемий Лебедев</p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>


 

?>