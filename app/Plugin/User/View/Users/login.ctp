<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('class'=>'form-signin'));?>
    <fieldset>
        <h2 class="form-signin-heading">Area Administrativa</h2>
        <?php echo $this->Form->input('username',array('class'=>'form-control', 'placeholder'=>'exemplo@exemplo.com','label' => false));
              echo $this->Form->input('password', array('class'=>'form-control', 'placeholder'=>'Senha','label' => false));
    ?>
    </fieldset>
<?php echo $this->Form->button(__('Entrar'), array('class'=>'btn btn-lg btn-primary btn-block','type' => 'submit')); ?>
</div>