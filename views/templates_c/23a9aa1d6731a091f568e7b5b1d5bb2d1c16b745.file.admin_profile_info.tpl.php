<?php /* Smarty version Smarty-3.1.16, created on 2017-09-08 13:18:09
         compiled from "\xampp\htdocs\MLM\\views\templates\office\admin_profile_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244959b27b7e3ba806-48789237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a9aa1d6731a091f568e7b5b1d5bb2d1c16b745' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\office\\admin_profile_info.tpl',
      1 => 1504869301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244959b27b7e3ba806-48789237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59b27b7e3f1307_58637936',
  'variables' => 
  array (
    'displayMsg' => 0,
    'id' => 0,
    'GetDetails_Qry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b27b7e3f1307_58637936')) {function content_59b27b7e3f1307_58637936($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("office/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
           <?php if ($_smarty_tpl->tpl_vars['displayMsg']->value!='') {?>
            <div class="alert alert-info" style="color:#27A0E6;"><?php echo $_smarty_tpl->tpl_vars['displayMsg']->value;?>
</div>
            <?php }?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADMIN INFORMATION<small>UPDATE</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form action="" method="post" id="AdminForm" name="AdminForm" enctype="multipart/form-data">
                   		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                   		<div class="col-md-12">
                          
                        	<div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Username <span class="red">*</span></label>
                                <input type="text" class="form-control" name="username" id="username"  required="required" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['username'];?>
">
                           </div>
                          
                       
                           <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" required="required"  id="email" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['email'];?>
">
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Website Name </label>
                                <input type="text" class="form-control" name="website_name"  id="website_name" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['website_name'];?>
">
                           </div>
                            <div class="form-group  col-md-4">
                                <label for="exampleInputEmail1">Contact Number</label>
                                <input type="tel" class="form-control" name="phone"  id="phone" value="<?php echo $_smarty_tpl->tpl_vars['GetDetails_Qry']->value['phone'];?>
">
                           </div>

                        </div>
                             <div class="clearfix"></div>
                                
                            <div class="entry col-md-12">
                                <button type="submit" name="admin_info" value="admin_info" class="btn btn-primary">Update</button>
                                
                            </div>
                            
                        </form>
                  </div>
                </div>
          </div>
          </div>

        <!-- /page content -->
<?php echo $_smarty_tpl->getSubTemplate ("office/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
