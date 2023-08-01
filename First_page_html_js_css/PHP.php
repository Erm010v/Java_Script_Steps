<?php //php

    echo "Hello, Eugene!! "
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

    class User {
        public $name;
        public $date;

        public function show()
        {
            echo $this->name, ' ', $this->date;
        }
    }
    $eugene = new User;
    $eugene->name = 'Евгений';
    $eugene->date = 35;
    $eugene->show(); //Евгений 35



 

?>