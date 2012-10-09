#Kohana Simple Test Module

Module for use Simple Test in Kohana.

The module contain one example controller in kohana-simpletest/classes/controller/simpletest.php

The test run only in development mode. To change this behavior change the controller kohana-simpletest/classes/controller/simpletest.php - *This care can be dangerous*

of

	…
	function action_index() {
    	if(Kohana::$environment == 'development'){
      		$this->runall();  
    	}
  	}
  	...

for

	…
	function action_index() {
    	$this->runall();  
  	}
  	...





## Simpletest Oficial Page

![SimpleTest](http://beto.euqueroserummacaco.com/blog/wp-content/uploads/2012/10/simpletest-logo.png)


	http://www.simpletest.org/
	
Methods
	
	http://www.lastcraft.com/first_test_tutorial.php
	

## Example of Use

access:

	localhost/YOU-KOHANA-PROJECT/simpletest

The module read all PHP files in tests/ folders !

#### Remove folders from test

To remove folders from test, configure remove folder in config file. Original in the modules/kohana-simpletest/config/simpletest.php

