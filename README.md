[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackageEws365/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageEws365/?branch=develop)
[![Latest Stable Version](https://poser.pugx.org/wsdltophp/package-ews365/v/stable)](https://packagist.org/packages/wsdltophp/package-ews365)
[![Dependency Status](https://www.versioneye.com/user/projects/55fc8608ddc3cf0014000209/badge.svg)](https://www.versioneye.com/user/projects/55fc8608ddc3cf0014000209)
[![StyleCI](https://styleci.io/repos/41913278/shield)](https://styleci.io/repos/41913278)
[![Total Downloads](https://poser.pugx.org/wsdltophp/package-ews365/downloads)](https://packagist.org/packages/wsdltophp/package-ews365)

# PackageEws365
This package has been generated from the [Office 365 Exchange Web Services](wsdl/services.wsdl) WSDL using the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

The complete list of operations is available at the [Office Dev Center](https://msdn.microsoft.com/fr-fr/library/office/bb409286(v=exchg.150).aspx).

# Summary
- [Generating again the package](#generating-again-the-package)
- [How to use the generated package?](#how-to-use-the-generated-package)
    - [Install the project](#install-the-project)
    - [Learn from the tutorial](#learn-from-the-tutorial)
    - [Start from the samples](#start-from-the-samples)
- [Need support or having a question?](#need-support-or-having-a-question)

# Generating again the package
You can generate again the package's sources using the [generate.sh](generate.sh) script:
```bash
$ git clone https://github.com/WsdlToPhp/PackageEws365.git package-ews365
$ cd package-ews365
$ ./generate.sh
```
To learn how to customize the generated package, please read the PackageGenerator's [README](https://github.com/WsdlToPhp/PackageGenerator/blob/master/README.md).

# How to use the generated package?

## Install the project
```bash
$ git clone https://github.com/WsdlToPhp/PackageEws365.git package-ews365
$ cd package-ews365
$ composer update
```

## Learn from the tutorial
Start looking into the auto-generated [tutorial.php](tutorial.php) file. This file contains the starting code to use this package. In addition it contains all the operations provided by the Exchange Web Services and the way to call them.

## Start from the samples
Sample scripts are available under the [samples](samples) folder:

- [GetServerTimeZones](samples/GetServerTimeZones.php)
- [Inbox](samples/inbox)
    - [FindItems](samples/inbox/FindItems.php)
- [Contact](samples/contact)
    - [FindItems](samples/contact/FindItems.php)
- [Calendar](samples/calendar)
    - [FindItems](samples/calendar/FindItems.php)
- [Task](samples/task)
    - [FindItems](samples/task/FindItems.php)

# Need support or having a question?
We can help you understand how to use it and how to customize it. Feel free to contact us at contact@wsdltophp.com.