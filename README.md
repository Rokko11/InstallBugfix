InstallBugfix
=============

Solves the MySQL > 5.6-Bug of Magento

## Problem
See [Post on Stackoverflow](http://stackoverflow.com/questions/15443448/magento-complains-missing-innodb-when-it-is-available)

## Solution
The Model `Mage_Install_Model_Installer_Db_Mysql4` got overridden. If the former InnoDB-Check via `SHOW VARIABLES` fails, Magento tries with `SHOW ENGINES`.
