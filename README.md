# Elementor Starter

Base Code for all Elementor Plugins by [WEB6](https://www.web6)

### Plugin Structure:

```
assets/
      /js   
      /csd
widgets/
      /starter.php
      /inline-editing.php
index.php
elementor-starter.phps
plugin.php
```

* `assets` directory - Holds plugin JavaScript and CSS assets
  * `/js` directory - Holds plugin Javascript Files
  * `/css` directory - Holds plugin CSS Files
* `widgets` directory - Holds Plugin widgets
  * `/starter.php` - Starter demo Widget class
  * `/inline-editing.php` - Inline Editing demo Widget class
* `index.php`	- Prevent direct access to directories
* `elementor-starter.php`	- Main plugin file, used as a loader if plugin minimum requirements are met.
* `plugin.php` - The actual Plugin file/Class.

### Based on

- [Elementor Hello World](https://github.com/elementor/elementor-hello-world)
- [VS Code setup by WP Migrate](https://deliciousbrains.com/vs-code-wordpress)


























# Starter Plugin for WordPress

A WordPress plugin boilerplate that emphasizes code quality. 

This boilerplate provides you with a solid foundation to rapidly start your custom plugin development project.  It's fully compliant with PHPCS and WPCS coding standards. It's modular in design. Emphasis is given to SOLID principles.  Validators are built right into the plugin, pre-configured and pre-wired for you to use.

You are free to use this plugin.  Rename it.  Change the namespace and author information.  It's yours to use. 

## Features
 
 ### Smart Architecture
 
 - Provides modular, well-organized architecture to group functionality and features together.
 - No Constants. Eliminates the need for constant definitions. No more polluting the global space. Instead it uses private helper functions.
 - Purposeful, expressive naming strategies to clearly _tell you_ what is happening and why.
 - No prefixes. Prefixes make it harder to read. This plugin uses namespacing instead, providing for better conflict protection and intent expression.
 - Better asset versioning by using each file's modification timestamp instead of hard-coded version numbers.
 
 ### Pre-wired Test Suites
 
 Wiring up test suites can be challenging.  This plugin handles it for you.
 
 - Separation of [Unit and Integration](https://www.web6.cloud/labs/unit-integration-testing-basics/episode-4) testing suites.
 - Bootstrapping for each suite is all done for you.
 - Test cases are built in for you.
 - [Brain Monkey](https://brain-wp.github.io/BrainMonkey/) is built in and ready for you to use.
 - Initial integration tests are provided for the helper functionality in the plugin's bootstrap file.
 - Sample unit test is provided too.
 - Composer scripts are configured (for Mac and Windows), providing a fast, easy shortcut to run each test suite and all of the tests:
    - Run the unit tests via `composer test-unit`.
    - Run the integration tests via `composer test-integration`.
    - Run all of the tests via `composer run-tests`.
 
 Psst, need help getting rolling? Check out this hands-on coding labs:
  
 - [Unit & Integration Testing Basics](https://www.web6.cloud/labs/unit-integration-testing-basics)
 - [Unit Testing with Brain Monkey](https://www.web6.cloud/labs/unit-testing-brain-monkey)
 - [Testing Hooks with Brain Monkey](https://www.web6.cloud/labs/testing-hooks-brain-monkey)
 
 ### Code Validation
 
 Code validators _sniff out_ any compliance issues in your code.  It looks for issues with your code's formatting, naming conventions, security, construction, and more.  This plugin includes:
 
 - PHPCS and WordPress Coding Standard (WPCS) sniffers.
 - Variable analyzer.
 - Pre-configured composer scripts (for Mac and Windows), providing a fast, easy shortcut to run validators on the `src`, tests, or both:
    - Run for just the plugin's code via `composer phpcs-src`.
    - Run for just the tests via `composer phphcs-tests`.
    - Run all of the code via `composer run-phpcs`.
