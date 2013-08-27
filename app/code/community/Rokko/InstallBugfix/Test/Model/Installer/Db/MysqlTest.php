<?php

class Rokko_InstallBugfix_Test_Model_Installer_Db_MysqlTest extends EcomDev_PHPUnit_Test_Case {

    /**
     * @test
     *
     */
    public function checkIfMysqlSupportsEngine(){
        $model = Mage::getModel('install/installer_db_mysql4');
        $model->setConfig(
            array(
                 'db_host' => (string) Mage::getConfig()->getNode('global/resources/default_setup/connection/host'),
                 'db_user' => (string) Mage::getConfig()->getNode('global/resources/default_setup/connection/username'),
                 'db_pass' => (string) Mage::getConfig()->getNode('global/resources/default_setup/connection/password'),
                 'db_name' => (string) Mage::getConfig()->getNode('global/resources/default_setup/connection/dbname'),
                 'db_type' => 'pdo_mysql'
            )
        );
       $this->assertTrue($model->supportEngine());
    }
}
