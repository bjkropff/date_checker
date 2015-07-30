<?php
    require_once "src/DateFormatter.php";

    class DateFormatterTest extends PHPUnit_Framework_TestCase
    {
      // Basic test to return input as one string.
      function test_changeDate_getInput()
      {
        //Arrange
        $test_DateFormatter = new DateFormatter;
        $start_date = "Jan";
        $end_date = "Feb";

        //Act
        $result = $test_DateFormatter->changeDate($start_date, $end_date);

        //Assert
        $this->assertEquals("Jan Feb",  $result);
      }

      // Basic test to two full dates.
      // function test_"name"()
      // {
      //   //Arrange
      //  $test_DateFormatter = new DateFormatter;
      //  $input = "";
      //
      //   //Act
      //   $result = $test_DateFormatter->changeDate($input);
      //
      //   //Assert
      //   $this->assertEquals("", $result);
      // }

      // function test_"name"()
      // {
      //   //Arrange
      //  $test_DateFormatter = new DateFormatter;
      //  $input = "";
      //
      //   //Act
      //   $result = $test_DateFormatter->changeDate($input);
      //
      //   //Assert
      //   $this->assertEquals("", $result);
      // }


    }
?>
