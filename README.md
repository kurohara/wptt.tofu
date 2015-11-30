# wptt, the WordPress Theme Template.

This is a phpjade template for WordPress theme.  
Dummy port from the 'Twenty Fifteen' theme which bundled with WordPress.

**Produced theme uses the 'namespace' facility of php >= version 5.3, so you can not use the theme produced by this solution if your php engine is less than version 5.3.**

## Getting Started
1. Get this source from github.  
  ```
  git clone https://github.com/kurohara/wptt
  ```
2. Install dependencies.  
  Under the 'wptt' directory, do  
  ```
  npm install
  ```
3. Run setup script  
  ```
  grunt setup
  ```
  You will see some questions from setup script, answer  
  * the name of theme.  
  * the name of author.  
  * the location where to put compiled theme files.  
    (I recommend to set this the location under the WordPress theme directory, off cource the directroy with your theme name)  

  Or you can edit 'wpttenv.json' file by hand instead of runnint ```grunt setup```  

  ```json  
  {
    "name": "mytheme",
    "uri": "",
    "author": "Hiroyoshi Kurohara(Microgadget,inc.)",
    "authoruri": "",
    "description": "",
    "version": "1.0.0",
    "license": "GNU General Public License v2 or later",
    "licenseuri": "http://www.gnu.org/licenses/gpl-2.0.html",
    "tags": "",
    "themedir": "/Users/kurohara/work/wordpress/wp-content/theme/mytheme",
    "jadedir": "./src",
    "styldir": "./src",
    "prebuilt": "./src",
    "tmpdir": "./tmp"
  }
  ```  

  The 'wpttenv.json' file contains the information which will be used for new theme.  
3. Edit the source files under the 'src' directory as you like.  
4. Compile 'src' to WordPress theme.  
  Run the command:  

  ```shell  
  grunt
  ```  

5. You will get compiled theme under the 'theme' directory(this directory is the directory you answered at setup process), use it as WordPress theme.

6. Debugging tips  
  You can partially compile some portions:  
  a. Just compile Jade templates.  
    ```
    grunt jade
    ```
  b. Just generate php files and pot file. (compile Jade templates and generate pot file)
    ```
    grunt php
    ```
  c. Just generate css files.  
    ```
    grunt style
    ```

## Contributing
In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests for any new or changed functionality. Lint and test your code using [Grunt](http://gruntjs.com/).

## Release History
1.0.0 Jun 09 2015

## License
The 'src' directory is Licensed under the 'Gnu General Public License Version 2' (see src/LICENSE.txt).  
The license of produced theme is same as 'src'.  
(Currently, it may possible to use another license for produced files, but I'm not sure about this.)

Other files are:  
Copyright (c) 2015 Hiroyoshi Kurohara  
Licensed under the MIT license.  

## Related projects
* [phpjade](https://github.com/kurohara/phpjade)  
* [grunt-jade-mod](https://github.com/kurohara/grunt-jade-mod)  
Grunt task module for Jade with modifier support, phpjade can be used with this module.
* [jade-mod-cli](https://github.com/kurohara/jade-mod-cli)  
Jade cli with modifier support, phpjade can be used with this.
