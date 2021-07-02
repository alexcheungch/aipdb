<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <?php
        $bararr = array(
            'TableAdm' => array(
                'name' => 'Table Administration', 
                'li' => array(
                    array('TableAdm/liststafflist', 'System Maintenance', 'List'), 
                    array('TableAdm/listacmgr', 'System Maintenance', 'List'), 
                    array('sysparam/index', 'SysParam', 'SysParam List'), 
                    array('asuser/index', 'ASUser', 'ASUser List'),
//                    array('TableAdm/listdocloc', 'System Maintenance', 'Document Location List'), 
//                    array('TableAdm/listsentoutvia', 'System Maintenance', 'Send Out Via List')
                )
            ),
            'ClientMtn' => array(
                'name' => 'Client Maintenance', 
                'li' => array(
                    array('ClientMtn', 'Client List', 'list'), 
                    // array('ClientMtn/create', 'Create new Client', 'Create')
                )
            ),
            'JobMtn' => array(
                'name' => 'Job Maintenance', 
                'li' => array(
                    array('JobMtn', 'Job List', 'list'), 
                    // array('JobMtn/create', 'Create New Job', 'Create')
                )
            ),
            'JobProg' => array(
                'name' => 'Job Progress', 
                'li' => array(
                    array('JobProg', 'Job Progess List', 'list')
                )
            ),
            'Allocation' => array(
                'name' => 'Allocation', 
                'li' => array(
                    array('Allocation', 'Allocation List', 'list'),
                    array('Allocation/defaultvalue', 'Allocation Default Value', 'default value')
                )
            ),
//            'SystemAdm' => array(
//                'name' => 'System Administration', 
//                'li' => array(
//                    array('sysparam/index', 'SysParam', 'SysParam List'), 
//                    array('asuser/index', 'ASUser', 'ASUser List')
//                )
//            ),
        );
//        if (defined('ROLE0')) {
//            $ROLE = array(ROLE0, ROLE1, ROLE2, ROLE3, ROLE4, ROLE5, ROLE6, ROLE7);
//            $adminBar = explode(',', $ROLE[$admin_role]);
//            if ($adminBar[0] != 'all') {
//                foreach ($adminBar as $key => $value) {
//                    if ($value != '') {
//                        $bardatares[] = $bararr[$value];
//                    }
//                }
//            } else {
//                $bardatares = $bararr;
//            }
//        } else {
//            $bardatares = $bararr;
//        }
        foreach ($bararr as $key => $value) {
            echo '<dl id="" >' .
                     '<dt><i class="Hui-iconfont">&#xe616;</i>' . $value['name'] . '<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>' .
                     '<dd>' .
                         '<ul>';
            foreach ($value['li'] as $kl => $vl) {
//                if ($kl < 2) {
                    echo '<li><a href="' . base_url($vl[0]) . '" title="' . $vl[1] . '">' . $vl[2] . '</a></li>';
//                } else if ($kl == 2) {
//                    echo "<li><a href=" . '"' . $vl[0] . '" title="' . $vl[1] . '">' . $vl[2] . '</a></li>';
//                }
            }
            echo         '</ul>' .
                     '</dd>' .
                 '</dl>';
        }
        ?>
    </div>
</aside>
