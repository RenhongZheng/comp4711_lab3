<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
      <?php
    include('Student.php');
    $students = array();
    
    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home','john@doe.com');
    $first->add_email('work','jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $first->status = "Senior";
    $students['j123'] = $first;
    
    $second = new Student();
    $second->surname = "Einstein";
    $second->first_name = "Albert";
    $second->add_email('home','albert@braniacs.com');
    $second->add_email('work1','a_einstein@bcit.ca');
    $second->add_email('work2','albert@physics.mit.edu');
    $second->add_grade(95);
    $second->add_grade(80);
    $second->add_grade(50);
    $second->status = "Junior";
    $students['a456'] = $second;
    
    $third = new Student();
    $third->surname = "Renhong";
    $third->first_name = "Zheng";
    $third->add_email('home','2859550360@qq.com');
    $third->add_email('work1','2859550360@qq.com');
    $third->add_grade(96);
    $third->add_grade(84);
    $third->add_grade(60);
    $third->status = "Freshman";
    $students['Z996'] = $third;
    
    $fourth = new Student();
    $fourth->surname = "Kaizhong";
    $fourth->first_name = "Luo";
    $fourth->add_email('home','15256549988@qq.com');
    $fourth->add_email('work1','15256549988@qq.com');
    $fourth->add_grade(96);
    $fourth->add_grade(82);
    $fourth->add_grade(77);
    $fourth->status = "Freshman";
    $students['Z986'] = $fourth;
    

    

    
    ksort($students); // one of the many sort functions
    
    foreach($students as $student)
    echo $student->toString();
    ?>
    </body>
</html>
