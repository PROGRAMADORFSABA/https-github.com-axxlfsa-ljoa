<?php
/* Smarty version 3.1.33, created on 2019-01-15 20:55:59
  from '/home/u325780549/domains/devnogueira.online/public_html/view/clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3e64ff44d1c6_65195085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0f5536f603b2850e586d4dcd1106953a6d16ac' => 
    array (
      0 => '/home/u325780549/domains/devnogueira.online/public_html/view/clientes_recovery.tpl',
      1 => 1547515624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3e64ff44d1c6_65195085 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form><?php }
}
