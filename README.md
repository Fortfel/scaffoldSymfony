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


To run all functional tests using Behat / Mink - run in terminal

```
npm run test
```

or if you want to run selected tests type e.g.

```
npm run test-behat -- features/test-name.feature
npm run test-behat -- features/test-name.feature:18   // will run scenario under line 18
npm run test-behat -- --suite=suite-name
npm run test-behat -- --suite=suite-name features/test-name.feature
```

If you want to run tests in the browser to test JS, you can do this with help of the selenium server.  
Add '@javascript' on top of your tested scenario
```
@javascript
Scenario: some scenario
(...)
```
then boot up selenium-standalone-server by running in the terminal
```
npm run selenium-server-start
```
finally you can run tests just as it was shown above.

**Note:**
By default browser tests with selenium driver are run 'silent' in background without even showing browser.
If you want to see it to debug or whatever, you can turn this off by editing behat.yaml
```
selenium2:
  browser: chrome
  capabilities:
    chrome:
      switches:
        - "--headless"
```
and removing '--headless' option.


## Author

* **Marcin Dubiel** - [Twitter](https://twitter.com/fortel91)
