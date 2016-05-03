<footer class="footer">
  <p class="pull-right"><a href="bootstrap.html#">Back to top</a></p>
  <p>フッターです。フッターです。</p>
</footer>
</div>
<div id="js-modal-overlay-wrap" class="md-modal-overlay-wrap">
    <div id="js-modal-overlay" class="md-modal-overlay"></div>
    <div id="js-modal-content" class="md-modal-content">
        <div class="row">
            <div class="span4">
              <p>背景色を選択してください</p>
              <form action="">
                <div class="form-item">
                    <label for="color">Color:</label>
                    <input type="text" id="color"
                    name="color" value="#123456" />
                </div>
                    <div id="picker"></div>
                </form>
            </div>
            <div class="span4">
              <p>背景色を選択してください</p>
              <form action="">
                <div class="form-item"><label for="color">Color:</label><input type="text" id="color"
                    name="color" value="#123456" /></div>
                    <div id="picker"></div>
                </form>
            </div>
        </div>
        <span class="btn btn-warning btn-large" id="js-modal-demo">この設定を保存する</span>
        <p><a id="js-modal-close" class="md-button-link">✕</a></p>
    </div>
    <div id="js-modal-contentXls" class="js-modal-contentXls">
        <div class="row">
            <div class="span10">
            <h2 class="is_txtAcenter">カセットの追加</h2>
              <a href="<?php echo Router::url('/');?>addCassette.xlsx" class="md_ico_excel">テンプレートをダウンロード</a>
              <div id="dragandrophandler">ここにドロップしてください。</div>
              <div id="status1"></div>
            </div>
        </div>
        <p id="js-modal-close" class="md-button-link">✕</p>
    </div>
</div>
<!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <?php
    echo $this->Html->script('dev_set')."\n";
    echo $this->Html->script('module')."\n";
    echo $this->Html->script('common')."\n";
    echo $this->Html->script('widgets')."\n";
    echo $this->Html->script('prettify')."\n";
    echo $this->Html->script('bootstrap-transition')."\n";
    echo $this->Html->script('bootstrap-alert')."\n";
    echo $this->Html->script('bootstrap-modal')."\n";
    echo $this->Html->script('bootstrap-modal')."\n";
    echo $this->Html->script('bootstrap-dropdown')."\n";
    echo $this->Html->script('bootstrap-scrollspy')."\n";
    echo $this->Html->script('bootstrap-tab')."\n";
    echo $this->Html->script('bootstrap-tooltip')."\n";
    echo $this->Html->script('bootstrap-popover')."\n";
    echo $this->Html->script('bootstrap-button')."\n";
    echo $this->Html->script('bootstrap-collapse')."\n";
    echo $this->Html->script('bootstrap-carousel')."\n";
    echo $this->Html->script('bootstrap-typeahead')."\n";
    echo $this->Html->script('application')."\n";
    echo $this->Html->script('farbtastic')."\n";
    ?>

<!--準拠footer.tcp-->