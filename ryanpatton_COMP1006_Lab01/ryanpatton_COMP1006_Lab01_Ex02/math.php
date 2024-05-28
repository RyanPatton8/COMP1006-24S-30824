<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02</title>
</head>
<body>
    <?php 
        $grades = array(60, 70, 40, 90, 50);

        function highest($arr){
            // find highest number 
            $highest = 0;
            // I know I could just print the maximum number using the max method on the whole array
            // but I felt like you'd prefer this for the purpose of the assignment
            foreach ($arr as $grade) {
                //max function returns the largest number from an array
                $highest = max($highest, $grade);
            }

            echo "the highest grade is {$highest} <br>";
        }

        function lowest($arr){
            $lowest = 101;

            foreach ($arr as $grade) {
                //min function returns the smallest number in an array
                $lowest = min($lowest, $grade);
            }
            
            echo "the lowest grade is {$lowest} <br>";
        }

        //adds each number in an array together and divides by the number of numbers
        function average($arr){
            $count = 0;
            $total = 0;

            foreach ($arr as $grade) {
                $total = $total + $grade;
                $count++;
            }

            $total = $total / $count;

            echo "the class average is {$total} <br>";
        }


        highest($grades);
        lowest($grades);
        average($grades);
    ?>
</body>
</html>