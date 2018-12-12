# Fortel Symfony web app skeleton

Startup template for web application. Based on Symfony4.


These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.


What things you need to install the software and how to install them


* [NPM](https://www.npmjs.com/get-npm) - Node Package Module
* [Composer](https://getcomposer.org/download/) - Dependency Manager for PHP
* [Vagrant](https://www.vagrantup.com/downloads.html) - Tool for building and managing virtual machine environments in
a single workflow
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads) or [other](https://www.vagrantup.com/docs/providers/)
virtualization tool (required by Vagrant)



A step by step series of examples that tell you how to get a development env running

Clone the repository using Git

```
git clone https://Fortfel@bitbucket.org/Fortfel/basic-symfony-web-template.git project-name
cd project-name/
```

Configure some essencial files such as:
* Homestead.yaml (project name etc.)
* package.json (name / descriptopn, etc.)
* composer.json (name / descriptopn, etc.)

Then run in terminal

```
npm install
composer install
git add .
git commit -m "Initial commit"
```

To boot up the server and set up the watchers for CSS, JS and PHP, run in terminal
```
npm run start
```

To stop and shut down the server run in terminal
```
npm run stop
```

## How to run automated tests

To run all linters (on localhost):
```
npm run lint
```

The following commands you can run only on virtual machine. It will not work on localhost due to different slashes. 
For windows you need `\\`

To run functional tests using Behat / Mink:
```
npm run test-behat
```

To run unit tests using PHPUnit:
```
npm run test-unit
```

To run functional and unit tests:
```
npm run test
```

or if you want to run selected tests type e.g.

```
For Behat:
npm run test-behat -- features/test-name.feature
npm run test-behat -- features/test-name.feature:18   // will run scenario under line 18
npm run test-behat -- --suite=suite-name
npm run test-behat -- --suite=suite-name features/test-name.feature

For PHPUnit:
npm run test-phpunit -- --filter testNameOfSpecificTest
npm run test-phpunit -- --filter testNameOfSpecificTest --debug
Test with selected provider
npm run test-phpunit -- --filter "testNameOfSpecificTest #1" --debug
npm run test-phpunit -- --filter "testNameOfSpecificTest @default response"
After setting test suites in phpunit.xml
npm run test-phpunit -- --testsuite entities --debug
```

## Selenium server

If you want to run tests in the browser to test JS, you can do this with help of the selenium server.  
Add '@javascript' on top of your tested scenario
```
@javascript
Scenario: some scenario
(...)
```
then boot up selenium-standalone-server:

#### For testing on local host
Make sure you have java installed. Check by typing in terminal:
```
java -version
```
Then run in local terminal:
```
npm run selenium-server
```
Finally you can run tests just as it was shown above.

#### For testing on remote machine (Homestead)
Make sure you have java installed. Check by typing in terminal - locally and on virtual machine (vagrant ssh):
```
java -version
```
If its not installed on Homestead (by default its not), you can install it by typing:
```
sudo apt install default-jre
```

Then run on virtual machine terminal (make sure you are in project directory (with node_modules)):
```
npm run selenium-hub
```

Then run on local host terminal:
```
npm run selenium-node
```
Finally you can run tests on remote machine, just as it was shown above. Tests should be opening
in local browser.

**Note:**
If you want to run browser tests with selenium driver as 'silent' in background without even showing browser,
you can turn this functionality on by editing behat.yaml
```
selenium2:
  browser: chrome
  capabilities:
    chrome:
      switches:
        - "--headless"
```
and uncommenting '--headless' option.


## Author

* **Marcin Dubiel** - [Twitter](https://twitter.com/fortel91)
