<?php
/* Smarty version 3.1.29, created on 2020-11-08 03:01:54
  from "C:\UniServerZ\www\mini_shop\templates\list_bill.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa75fa2c8b954_67490077',
  'file_dependency' => 
  array (
    'fa271d4e02de8acce4d403355c7a749c95620b05' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop\\templates\\list_bill.html',
      1 => 1604386714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa75fa2c8b954_67490077 ($_smarty_tpl) {
?>
<h1><?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>訂單管理<?php } else { ?>我的訂單<?php }?></h1>
<div class="row">
  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <div class="col-md-2">
      <select size=10 class="form-control" onChange="location.href='bill.php?user_sn='+this.value">
        <?php
$_from = $_smarty_tpl->tpl_vars['all_users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_mem_0_saved_item = isset($_smarty_tpl->tpl_vars['mem']) ? $_smarty_tpl->tpl_vars['mem'] : false;
$_smarty_tpl->tpl_vars['mem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['mem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mem']->value) {
$_smarty_tpl->tpl_vars['mem']->_loop = true;
$__foreach_mem_0_saved_local_item = $_smarty_tpl->tpl_vars['mem'];
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['mem']->value['user_sn'];?>
" <?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value == $_smarty_tpl->tpl_vars['mem']->value['user_sn']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mem']->value['user_name'];?>
</option>
        <?php
$_smarty_tpl->tpl_vars['mem'] = $__foreach_mem_0_saved_local_item;
}
if ($__foreach_mem_0_saved_item) {
$_smarty_tpl->tpl_vars['mem'] = $__foreach_mem_0_saved_item;
}
?>
      }
      </select>
    </div>
  <?php }?>
  <div class="col-md-10">
    <?php if ($_smarty_tpl->tpl_vars['bill_arr']->value) {?>
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->tpl_vars['bill_arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bill_1_saved_item = isset($_smarty_tpl->tpl_vars['bill']) ? $_smarty_tpl->tpl_vars['bill'] : false;
$_smarty_tpl->tpl_vars['bill'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['bill']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->_loop = true;
$__foreach_bill_1_saved_local_item = $_smarty_tpl->tpl_vars['bill'];
?>
        <li class="list-group-item">
          <span class="badge"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_total'];?>
</span>
          <a href="bill.php?op=display_bill&bill_sn=<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_date'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['bill']->value['bill_status']) {?><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_status'];?>
</span><?php }?>
        </li>
      <?php
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_1_saved_local_item;
}
if ($__foreach_bill_1_saved_item) {
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_1_saved_item;
}
?>
    </ul>
    <?php } else { ?>
      尚無訂單
    <?php }?>
  </div>
</div>
<?php }
}
