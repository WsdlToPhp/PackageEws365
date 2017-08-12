[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackageEws365/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageEws365/?branch=develop)
[![Latest Stable Version](https://poser.pugx.org/wsdltophp/package-ews365/v/stable)](https://packagist.org/packages/wsdltophp/package-ews365)
[![Dependency Status](https://www.versioneye.com/user/projects/55fc8608ddc3cf0014000209/badge.svg)](https://www.versioneye.com/user/projects/55fc8608ddc3cf0014000209)
[![StyleCI](https://styleci.io/repos/41913278/shield)](https://styleci.io/repos/41913278)
[![Total Downloads](https://poser.pugx.org/wsdltophp/package-ews365/downloads)](https://packagist.org/packages/wsdltophp/package-ews365)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/fca54b99-a6f2-4ed8-97c7-cb1cbe437c66/mini.png)](https://insight.sensiolabs.com/projects/fca54b99-a6f2-4ed8-97c7-cb1cbe437c66)

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

## Determine your Office 365 endpoint action location
Determining the Office 365 endpoint action location can be tricky so below is indicated 2 ways to do it. This location must be defined in the `setLocation` call into the sample files.
The default location has been defined so it might work fine with you too. If not, you should try determining it. If you don't understand, don't hesitate to contact me at contact@wsdltophp.com. 

### Manually from the endpoint itself
You should be able to get the endpoint action location from the services.wsdl by opening your browser and browsing to [outlook.office365.com/EWS/Exchange.asmx](https://outlook.office365.com/EWS/Exchange.asmx).
You must enter your Office 365 credentials then it should display a page where it indicates something such as `svcutil.exe https://**.outlook.com/EWS/Services.wsdl`.
This is in the `https://**.outlook.com/EWS/Services.wsdl` that you can find at the end the endpoint action location such as `<soap:address location="**https://outlook.office365.com/EWS/Exchange.asmx**" />`.

### From your Office 365 account
Following this [Tech Blog article](http://blog.skysoft-is.com/?p=78), I simply used the endpoint location action indicated in the article as https://pod51036.outlook.com/ews/services.wsdl and it worked :).

## Start from the samples
Sample scripts are available under the [samples](samples) folder:

- [GetServerTimeZones](samples/GetServerTimeZones.php)
- [Inbox](samples/inbox)
    - [FindItems](samples/inbox/FindItems.php)
    - [FindUnreadItems](samples/inbox/FindUnreadItems.php)
    - [GetItem](samples/inbox/GetItem.php)
- [Contact](samples/contact)
    - [FindItems](samples/contact/FindItems.php)
    - [GetItem](samples/contact/GetItem.php)
- [Calendar](samples/calendar)
    - [FindItems](samples/calendar/FindItems.php)
    - [GetItem](samples/calendar/GetItem.php)
- [Task](samples/task)
    - [CreateItem](samples/task/CreateItem.php)
    - [FindItems](samples/task/FindItems.php)
    - [GetItem](samples/task/GetItem.php)

# Need support or having a question?
We can help you understand how to use it and how to customize it. Feel free to contact us at contact@wsdltophp.com.
