<?php
require_once 'PHPUnit/Util/Filter.php';

PHPUnit_Util_Filter::addFileToFilter( __FILE__ );

return array (
	"ezcTestRunner" => "UnitTest/test/runner.php",
	"ezcTestCase" => "UnitTest/test/case.php",
	"ezcImageTestCase" => "UnitTest/test/image_case.php",
	"ezcTestSuite" => "UnitTest/test/suite.php",
	"ezcTestPrinter" => "UnitTest/test/printer.php",

	"ezcTestConstraintSimilarImage" => "UnitTest/constraint/image.php",

	"ezcTestSettings" => "UnitTest/test/settings.php",
	"ezcTestDatabaseSettings" => "UnitTest/test/database_settings.php"
);
?>
