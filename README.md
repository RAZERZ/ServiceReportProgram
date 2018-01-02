# ServiceReportProgram
Service report program written in php.

# Database

Create a mysql database called ServiceRapportProgram;

```SQL
CREATE DATABASE ServiceRapportProgram;
```

Then, create a table with colums containing the info;

```SQL
CREATE TABLE serviceRapport (serviceNummer varchar(255), repairName varchar(255), kNamn varchar(255), kAdress varchar(255), kMail varchar(255), kNummer int, daCheckMobo bit, daErrMobo varchar(255), daCheckGpu bit, daErrGpu varchar(255), daCheckCpu bit, daErrCpu varchar(255), daCheckPsu bit, daErrPsu varchar(255), daCheckHdd bit, daErrHdd varchar(255), daCheckCool bit, daErrCool varchar(255), daCheckOther bit, daOtherValue varchar(255), daErrOther varchar(255), ccCheckSearch bit, ccCheckMac bit, ccCheckPC bit, ccCheckMobo bit, ccPriceMobo int, ccCheckGpu bit, ccPriceGpu int, ccCheckCpu bit, ccPriceCpu int, ccCheckPsu bit, ccPricePsu int, ccCheckHdd bit, ccPriceHdd int, ccCheckCool bit, ccPriceCool int, ccCheckOther bit, ccValueOther varchar(255), ccPriceOther int, totalPrice int);
```

Now, create a table for the login, make sure to have an account called 'admin' and or 'razerz' to access the admin panel

```SQL
CREATE TABLE login (userid varchar(255), salt varchar(255), passwd varchar(255), name varchar(255));
```

# Todo

Add English language + comments along the code.

Add more styles.

Add more functionality.

Create a setup page so that others don't have to dig through source code to set up.

# Installation

Pretty obvious, clone the repo, insert into server directory and run!

