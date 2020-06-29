<?php
use XoopsModules\Tadtools\Utility;
if (empty($op)) {
    $op = 'index';
}
if (empty($op_prfix)) {
    $op_prfix = substr(basename($_SERVER['PHP_SELF']), 0, -4);
}
$xoopsTpl->assign('now_op', "{$op_prfix}_{$op}");

$xoTheme->addStylesheet(XOOPS_URL . '/modules/' . $xoopsModule->dirname() . '/css/module.css');
$xoTheme->addStylesheet(XOOPS_URL . '/modules/tadtools/css/my-input.css');

echo '<div align="center"><a href="https://xoops.org" target="_blank"><img src="../images/admin/xoopsmicrobutton.gif" alt="XOOPS" title="XOOPS"></a></div>';
echo "<div class='center smallsmall italic pad5'><strong>" . $xoopsModule->getVar('name') . "</strong> is maintained by the <a class='tooltip' rel='external' href='https://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>";

xoops_cp_footer();
