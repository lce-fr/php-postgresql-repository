<?php
/*
echo 'starting postgresql docker image';
system('docker run -p 5432:5432 -d --name test-postgres -e POSTGRES_PASSWORD=test -v /var/docker/postgres postgres');
sleep(5);
*/
/* Without it test fails, might be required for postgre server to setup. Sadly it lowers docker 
 * If for each class working with database 4 secondes must be waited, tests are dramatically slower 
 */

/*
  This file will automatically be included before EACH run.

  Use it to configure atoum or anything that needs to be done before EACH run.

  More information on documentation:
  [en] http://docs.atoum.org/en/latest/chapter3.html#configuration-files
  [fr] http://docs.atoum.org/fr/latest/lancement_des_tests.html#fichier-de-configuration
 */

use \mageekguy\atoum;

$report = $script->addDefaultReport();

/*
  LOGO

  // This will add the atoum logo before each run.
  $report->addField(new atoum\report\fields\runner\atoum\logo());
 */

// This will add a green or red logo after each run depending on its status.
//$report->addField(new atoum\report\fields\runner\result\logo());

/*
  CODE COVERAGE SETUP

  // Please replace in next line "Project Name" by your project name and "/path/to/destination/directory" by your destination directory path for html files.
  $coverageField = new atoum\report\fields\runner\coverage\html('Project Name', '/path/to/destination/directory');

  // Please replace in next line http://url/of/web/site by the root url of your code coverage web site.
  $coverageField->setRootUrl('http://url/of/web/site');

  $report->addField($coverageField);
 */

/*
  TEST GENERATOR SETUP

  $testGenerator = new atoum\test\generator();

  // Please replace in next line "/path/to/your/tests/units/classes/directory" by your unit test's directory.
  $testGenerator->setTestClassesDirectory('path/to/your/tests/units/classes/directory');

  // Please replace in next line "your\project\namespace\tests\units" by your unit test's namespace.
  $testGenerator->setTestClassNamespace('your\project\namespace\tests\units');

  // Please replace in next line "/path/to/your/classes/directory" by your classes directory.
  $testGenerator->setTestedClassesDirectory('path/to/your/classes/directory');

  // Please replace in next line "your\project\namespace" by your project namespace.
  $testGenerator->setTestedClassNamespace('your\project\namespace');

  // Please replace in next line "path/to/your/tests/units/runner.php" by path to your unit test's runner.
  $testGenerator->setRunnerPath('path/to/your/tests/units/runner.php');

  $script->getRunner()->setTestGenerator($testGenerator);
 */
/*

echo "coucou";

function shutdown() {
    echo "coucou";
    echo "stopping docker image and removing it ";
    system('docker kill test-postgres');
    system('docker rm -v test-postgres');
}

register_shutdown_function(function() {
    echo "coucou";
    echo "stopping docker image and removing it ";
    system('docker kill test-postgres');
    system('docker rm -v test-postgres');
});
*/