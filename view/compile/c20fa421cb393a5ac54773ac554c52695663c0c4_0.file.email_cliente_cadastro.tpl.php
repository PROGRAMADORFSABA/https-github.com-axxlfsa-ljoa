<?php
/* Smarty version 3.1.31, created on 2017-09-05 00:25:40
  from "C:\xampp\htdocs\loja\view\email_cliente_cadastro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59add2e4ef7989_66677388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c20fa421cb393a5ac54773ac554c52695663c0c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\email_cliente_cadastro.tpl',
      1 => 1504563136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59add2e4ef7989_66677388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<p>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</p>
<?php }
}
