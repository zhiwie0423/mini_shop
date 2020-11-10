<?php
/* Smarty version 3.1.29, created on 2020-11-08 03:39:39
  from "C:\UniServerZ\www\mini_shop\templates\goods_display.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa7687b121553_56363903',
  'file_dependency' => 
  array (
    'f8929e122a9688fefadb2bd14d9d4b075a8c63c2' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop\\templates\\goods_display.html',
      1 => 1604806720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa7687b121553_56363903 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
    <p>售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
元整</p>
    <p>人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
    <div>
      <a href="index.php?op=add_to_cart&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&goods_title=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
&goods_amount=1"
        class="btn btn-primary" role="button">加入購物車</a>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
      <a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-warning">編輯商品</a>
      <a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-danger">刪除商品</a>
      <?php }?>
    </div>
  </div>
</div>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#goods" aria-controls="goods" role="tab" data-toggle="tab">商品介紹</a></li>
  <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab">退換或須知</a></li>
  <li role="presentation"><a href="#service" aria-controls="service" role="tab" data-toggle="tab">付款方式</a></li>
  <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">歷史沿革</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="goods">
    <h3>商品介紹</h3>
    <ul>
      <li>主要授權麻糬爸『原創IP角色圖像』，如品牌、商品、服飾、包裝、遊戲、廣告、活動、代言等…
        白爛貓家族全角色每個個性鮮明，『溫柔的麻糬狗、冷酷的臭跩貓、欠扁的白爛貓等』各角色間好玩的互動及直白嗆辣的對話，解放了上班族的內心苦悶與大眾對生活的無奈。
      </li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="note">
    <h3>退換貨須知</h3>
    <ol>
      <li><span class="text-danger">（注意！猶豫期非試用期）</span>退貨因素若非新品不良，且商品已有使用痕跡，恕無法辦理退貨。</li>
      <li>商品完整性將影響退換貨權限，退換貨的商品寄回時，請務必保持商品的完整性，並使用另外的袋子(紙箱)包裝完整，避免商品在運送途中受到碰撞損壞。</li>
    </ol>
  </div>
  <div role="tabpanel" class="tab-pane" id="service">
    <h3>付款方式</h3>
    <ul>
      <li><span class="text-danger">ATM轉帳</span>只要將購買款項直接匯入系統指定帳號即可完成付款。每個指定帳號只能用在該筆訂單。</li>
      <li><span class="text-danger">信用卡線上刷卡</span>您可以安心使用信用卡（VISA、MASTER、JCB）即時線上刷卡，馬上就可以付款完成。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="other">
    <h3>歷史沿革</h3>
    <ul>
      <li>2019</li>
      <ul>
        <li>隨你填貼圖全球銷售第二名</li>
        <li>原創貼圖第一名</li>
      </ul>
      <li>2018</li>
      <ul>
        <li>原創貼圖總銷售排行榜第一名</li>
      </ul>
      <li>2017</li>
      <ul>
        <li>年度貼圖總銷售排行榜第一名</li>
      </ul>
    </ul>
  </div>
</div><?php }
}
