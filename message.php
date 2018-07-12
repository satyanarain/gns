<div class="box-header">
    
    <?php if ($_SESSION['msg'])
    {
            ?>
    <div class="alert-new-success" id="successMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo $_SESSION['msg']; ?></strong>
    </div>
   <?php } ?>

    @if ($message = Session::get('flash_message_warning'))
    <div class="alert alert-warning alert-block" id="successMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php $message ?></strong>
    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-warning alert-block" id="successMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php $message ?></strong>
    </div>
    @endif
</div>