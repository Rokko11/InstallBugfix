<?php

class Rokko_InstallBugfix_Test_Config_RewriteTest extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * This test checks, if the configuration is set properly.
     *
     * @test
     */
    public function checkRewriteOfInstallerDbModel()
    {
        $this->assertModelAlias(
            'install/installer_db_mysql4', 'Rokko_InstallBugfix_Model_Installer_Db_Mysql4'
        );

        $model = Mage::getModel('install/installer_db_mysql4');
        $this->assertInstanceOf(
            'Rokko_InstallBugfix_Model_Installer_Db_Mysql4', $model
        );
    }


}
