<?php echo $this->element('header'); ?>
<body>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
    		<div class="container">
    			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</a>
    			<a class="brand" href="#">Lean開発_デザインパターン</a>
    			<h4>新規登録画面</h4>
    		</div>
    	</div>
    </div>
    <div class="container">
    	<header class="header">
    		<?php print(
    		$this->Form->create('UserRegistration') .
    		$this->Form->input('mail_address', array('class' => 'span5','placeholder' => 'login_name')) .
    		$this->Form->input('password', array('class' => 'span5')) .
    		$this->Form->end(array('label' => '新規登録','class' => 'btn-warning btn-large is_mT15'))
    		); ?>
    	</header>
        <!-- overview
        ================================================== -->


            <!--//row-->
            <?php echo $this->element('footer'); ?>

            <script type="text/javascript" charset="utf-8">
            	$(document).ready(function() {
            		$('#picker').farbtastic('#color');
            		$('#js-modal-demo').click(function(){
            			$('#js-modal-overlay, #js-modal-content').fadeIn('fast');
            		});

            		$('#js-modal-close, #js-modal-overlay').click(function(){
            			$(this).closest('.md-modal-overlay-wrap').children().fadeOut('fast');
            		});
            	});
            </script>
          </body>
          </html>
