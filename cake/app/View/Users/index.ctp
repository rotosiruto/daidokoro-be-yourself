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
          <div class="nav-collapse">
            <ul class="nav">
              <li class="<?php if ($this->name == 'Users' && $this->action == 'index') {
               echo 'active';}?>"><a href="">Top</a></li>
              <li><a href="#">チームのステージングへ</a></li>
              <li><a href="#">あなたのステージングへ</a></li>
              <li class="<?php if ($this->name == 'Users' && $this->action == 'mypage') {
               echo 'active';}?>"><a href="<?php echo $this->name;?>/mypage">マイページへ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    ログイン済み：<?php print(h($userRegistration['mail_address'])); ?>さん<br />
<?php print($this->Html->link('ログアウト', '../user_registrations/logout')); ?>
      <header class="header">
        <h1>Lean開発の業務・デザインに特化したWebアプリです。</h1>
        <p>Front&nbsp;End&nbsp;developer&nbsp;&nbsp;Watari</p>
        <p>チーム全体でのデザインパターンは現在策定中です。</p>
        <div class="progress progress-danger progress-striped active">

<div class="bar" style="width: 40%;"></div>
</div>
<p>チーム全体でのロジックパターンは現在策定中です。</p>
<div class="progress progress-danger progress-striped active is_devlope">

<div class="bar" style="width: 20%;"></div>
</div>
      </header>
      <div class="subnav">
        <ul class="nav nav-pills">
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">基本デザイン・レイアウト<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#deviceWidth">フォント</a></li>
              <li><a href="#deviceWidth">デバイス別</a></li>
              <li><a href="#deviceTablet">カラーバリエーション</a></li>
              <li><a href="#deviceSp">角丸</a></li>
              <li><a href="#deviceSp">余白</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ボタン <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#buttonGroups">ボタンパターン</a></li>
              <li><a href="#buttonSize">ボタンサイズ</a></li>
            </ul>
          </li>
          <li><a href="#forms">フォームパーツ</a></li>
          <li><a href="#thumbnails">モーダルウィンドウ</a></li>
          <li><a href="#thumbnails">カセットパターン</a></li>
          <li><a href="#labels">ラベル</a></li>
          <li><a href="#badges">バッジ</a>
            <ul class="dropdown-menu">
              <li><a href="#navs">ナビ・タブ・丸ボタン</a></li>
              <li><a href="#navbar">ナビボタン</a></li>
              <li><a href="#breadcrumbs">パンくずリスト</a></li>
              <li><a href="#pagination">ページネーション</a></li>
            </ul>
          </li>

        </ul>
      </div>
        <!-- overview
        ================================================== -->
        <div class="row is_mT20">
          <div class="span6">
            <div class="alert alert-info">
              <h2>チームの課題</h2>
              <div class="progress progress-danger progress-striped active is_tearm">
                <div class="bar" style="width: 20%;"></div>
              </div>
            </div>
            <a href="https://jira.misosiru.io/secure/RapidBoard.jspa?rapidView=171&projectKey=CSPONLEAN&view=planning.nodetail" target="_blank">Jiraへ</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>URL</th>
                  <th>締切日</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <code>&lt;strong&gt;</code>
                  </td>
                  <td> テキストのスニペットを強調するために<strong>重要</strong></td>
                  <td>
                    <span class="muted">None</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>&lt;em&gt;</code>
                  </td>
                  <td> テキストのスニペットを強調するために<em>ストレス</em></td>
                  <td>
                    <span class="muted">None</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>&lt;abbr&gt;</code>
                  </td>
                  <td> マウスオーバーにて略語や頭字語の正式名称を表示 </td>
                  <td>
                    オプション含む<code>title</code>展開されたテキスト </td>
                  </tr>
                  <tr>
                    <td>
                      <code>&lt;address&gt;</code>
                    </td>
                    <td> 最も近い祖先&#8203;&#8203;や仕事の全体のボディのための連絡先については、
                      <br>
                    </td>
                    <td>
                      すべての行を終了して書式設定を保持 <code>&lt;br&gt;</code>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="span6">
            <div class="alert alert-error">
              <h2>あなたの課題</h2>
              <div class="progress progress-danger progress-striped active is_your">
                <div class="bar" style="width: 20%;"></div>
              </div>
            </div>
              <a href="https://jira.misosiru.io/secure/RapidBoard.jspa?rapidView=171&projectKey=CSPONLEAN&view=planning.nodetail&quickFilter=986" target="_blank">Jiraへ</a>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>URL</th>
                    <th>締切日</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td> テキストのスニペットを強調するために<strong>重要</strong></td>
                    <td>
                      <span class="muted">None</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td> テキストのスニペットを強調するために<em>ストレス</em></td>
                    <td>
                      <span class="muted">None</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                     3
                   </td>
                   <td> マウスオーバーにて略語や頭字語の正式名称を表示 </td>
                   <td>
                    オプション含む<code>title</code>展開されたテキスト </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td> 最も近い祖先&#8203;&#8203;や仕事の全体のボディのための連絡先については、
                      <br>
                    </td>
                    <td>
                      すべての行を終了して書式設定を保持 <code>&lt;br&gt;</code>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="span9">
                <!-- layout
                ================================================== -->
                <!-- Grid
                ================================================== -->
                <section id="grid">
                  <div class="page-header">
                    <h2>グリッドシステム<small>12カラムで本来970px</small></h2>
                  </div>
                  <p>グリッドシステムは幅970px、12列のグリッドで構成されています。スマートフォン、モバイルタブレット、タブレットPCと小さなデスクトップ、大型ワイドデスクトップ：4つのさまざまなデバイスや解像度の応答のバリエーションがあります。</p>
                  <p>ここに示すように、基本的なレイアウトは、2つの"列"グリッドシステムの一部として定義されている。基本12列の数を各スパニングで作成することができます。</p>
                  <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span4"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span8"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></li><li class="L3"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                  <div class="row">
                    <div class="span4">
                      <h3>相殺グリッド</h3>
                      <p>カラムの間に余白をとったり幅を取らせてレイアウトする方法です</p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span4"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span4 offset4"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></li><li class="L3"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span8 offset4"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <div class="span5">
                      <h3>ネストカラムも可能です</h3>
                      <p>改修中改修中のグリッドシステムでは、ネストもとても簡単です。ネストコンテンツに、新しい行と業とのセットを追加。コレだけです。</p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span12"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">Level 1 of column</span></li><li class="L3"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L4"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span6"</span><span class="tag">&gt;</span><span class="pln">Level 2</span><span class="tag">&lt;/div&gt;</span></li><li class="L5"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span6"</span><span class="tag">&gt;</span><span class="pln">Level 2</span><span class="tag">&lt;/div&gt;</span></li><li class="L6"><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li><li class="L8"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <!--//row-->
                </section>
                <!-- Response
                ================================================== -->
                <section id="response">
                  <div class="page-header">
                    <h2>応答の設計<small>各種デバイスや解像度のメディアクエリ</small></h2>
                  </div>
                  <h3>サポートされているデバイス</h3>
                  <p>改修中改修中は、さまざまなデバイスや画面の解像度で、プロジェクトをより適切にするのに役立つメディアクエリの一握りをサポートしています。ここには含まれている内容は次のとおりです</p>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ラベル</th>
                        <th>レイアウト幅</th>
                        <th>カラム幅</th>
                        <th>余白幅</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>スマートフォン</td>
                        <td>480px以下</td>
                        <td class="muted" colspan="2">可変カラム, 無固定幅 </td>
                      </tr>
                      <tr>
                        <td>モバイルタブレット</td>
                        <td>480px ～ 768px</td>
                        <td class="muted" colspan="2">可変カラム, 無固定幅 </td>
                      </tr>
                      <tr>
                        <td>タブレットPC</td>
                        <td>768px ～ 980px</td>
                        <td>44px</td>
                        <td>20px</td>
                      </tr>
                      <tr>
                        <td>デフォルト</td>
                        <td>最大980px</td>
                        <td>60px</td>
                        <td>20px</td>
                      </tr>
                      <tr>
                        <td>大型ディスプレイ</td>
                        <td>最大1210px</td>
                        <td>70px</td>
                        <td>30px</td>
                      </tr>
                    </tbody>
                  </table>
                  <h4>何をすればよいか</h4>
                  <p>メディア合わせ、多くの条件比率に基づいた幅、表示方式、などカスタムCSSを考慮に入れます。変更はmin-widthおよびmax-widhtの近くを確認してください。
                    <br> 必要なところならどこでも、フロートの代わりにグリッド・スタック要素の中でカラムの幅を修正し、より適切に標題とテキストをリサイズします。
                  </p>
                  <h5>メディアクエリの使い方</h5>
                  <p>改修中改修中は自動的にこれらのメディア対応していません。しかし、それらのメディアに対応することはとても簡単で、最小のセットアップで済みます。
                    <br> 改修中改修中特徴を活かすための応答は少数のオプションを持っています。
                    <br> コンパイルされた反応するバージョンを使用する、bootstrap-responsive.cssをリンクすれば4つのメディアと対応しています。
                    <br> すべてに対応する必要がありません。以下がメディア対応の例になります。
                  </p>
                  <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">  </span><span class="com">// Landscape phones and down</span></li><li class="L1"><span class="pln">  </span><span class="lit">@media</span><span class="pln"> </span><span class="pun">(</span><span class="pln">max</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">480px</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">...</span><span class="pln"> </span><span class="pun">}</span></li><li class="L2"><span class="pln">&nbsp;</span></li><li class="L3"><span class="pln">  </span><span class="com">// Landscape phone to portrait tablet</span></li><li class="L4"><span class="pln">  </span><span class="lit">@media</span><span class="pln"> </span><span class="pun">(</span><span class="pln">max</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">768px</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">...</span><span class="pln"> </span><span class="pun">}</span></li><li class="L5"><span class="pln">&nbsp;</span></li><li class="L6"><span class="pln">  </span><span class="com">// Portrait tablet to landscape and desktop</span></li><li class="L7"><span class="pln">  </span><span class="lit">@media</span><span class="pln"> </span><span class="pun">(</span><span class="pln">min</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">768px</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">and</span><span class="pln"> </span><span class="pun">(</span><span class="pln">max</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">980px</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">...</span><span class="pln"> </span><span class="pun">}</span></li><li class="L8"><span class="pln">&nbsp;</span></li><li class="L9"><span class="pln">  </span><span class="com">// Large desktop</span></li><li class="L0"><span class="pln">  </span><span class="lit">@media</span><span class="pln"> </span><span class="pun">(</span><span class="pln">min</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1200px</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">..</span><span class="pln"> </span><span class="pun">}</span></li></ol></pre>
                </section>
                <!-- Typo
                ================================================== -->
                <section id="typo">
                  <div class="page-header">
                    <h2>タイポグラフィ<small>見出し、段落、リスト、および他のインラインタイプの要素</small></h2>
                  </div>
                  <div class="row">
                    <div class="span5">
                      <h3>表記上のスケール</h3>
                      <p>私たちはすべての文字列およびのマージン、パディング、ラインの高さを作成するために変数と計算をしています。</p>
                      <p>note:HTML5の中で自由に&lt;b&gt; と&lt;i&gt;を使用してください。しかし、それらの使用法はビットを変更しました。
                        <br> &lt;b&gt; &lt;i&gt;がほとんど音声、専門用語など向けである間補足重要性を伝えずに、言葉または句を強調するというつもりです。</p>
                      </div>
                      <div class="span4">
                        <div class="well">
                          <h1>H1-見出し1</h1>
                          <h2>H2-見出し2</h2>
                          <h3>H3-見出し3</h3>
                          <h4>H4-見出し4</h4>
                          <h5>H5-見出し5</h5>
                          <h6>H6-見出し6</h6>
                        </div>
                      </div>
                    </div>
                    <h3>強調、アドレスおよび省略</h3>
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>URL</th>
                          <th>締切日</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <code>&lt;strong&gt;</code>
                          </td>
                          <td> テキストのスニペットを強調するために<strong>重要</strong></td>
                          <td>
                            <span class="muted">None</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <code>&lt;em&gt;</code>
                          </td>
                          <td> テキストのスニペットを強調するために<em>ストレス</em></td>
                          <td>
                            <span class="muted">None</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <code>&lt;abbr&gt;</code>
                          </td>
                          <td> マウスオーバーにて略語や頭字語の正式名称を表示 </td>
                          <td>
                            オプション含む<code>title</code>展開されたテキスト </td>
                          </tr>
                          <tr>
                            <td>
                              <code>&lt;address&gt;</code>
                            </td>
                            <td> 最も近い祖先&#8203;&#8203;や仕事の全体のボディのための連絡先については、
                              <br>
                            </td>
                            <td>
                              すべての行を終了して書式設定を保持 <code>&lt;br&gt;</code>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <h3>codeの使用例</h3>
                      <p>単語やタグを強調表示します。</p>
                      <div class="row">
                        <div class="span5">
                          <pre class="prettyprint"><span class="tag">&lt;p&gt;</span><span class="pln"> </span><span class="tag">&lt;code&gt;&lt;address&gt;&lt;/code&gt;</span><span class="pln">タグがどのように使われることができるかという2つの例が、ここにあります。</span><span class="tag">&lt;/p&gt;</span></pre>
                        </div>
                        <div class="span4">
                          <p><code>&lt;address&gt;</code>タグがどのように使われることができるかという2つの例が、ここにあります</p>
                        </div>
                      </div>
                      <!--//row-->
                      <h3>addressの使用例</h3>
                      <p>住所やメールアドレスを表記するときに使います。</p>
                      <div class="row">
                        <div class="span5">
                          <pre class="prettyprint"><span class="tag">&lt;address&gt;&lt;strong&gt;</span><span class="pln">Twitter, Inc.</span><span class="tag">&lt;/strong&gt;&lt;br&gt;</span><span class="pln">
                            795 Folsom Ave, Suite 600</span><span class="tag">&lt;br&gt;</span><span class="pln">
                            San Francisco, CA 94107</span><span class="tag">&lt;br&gt;</span><span class="pln">
                          </span><span class="tag">&lt;abbr</span><span class="pln"> </span><span class="atn">title</span><span class="pun">=</span><span class="atv">"Phone"</span><span class="tag">&gt;</span><span class="pln">P:</span><span class="tag">&lt;abbr&gt;</span><span class="pln"> (123) 456-7890</span><span class="tag">&lt;/address&gt;</span><span class="pln">
                        </span><span class="tag">&lt;address&gt;&lt;strong&gt;</span><span class="pln">Full Name</span><span class="tag">&lt;/strong&gt;&lt;br&gt;</span><span class="pln">
                      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"mailto:#"</span><span class="tag">&gt;</span><span class="pln">first.last@gmail.com</span><span class="tag">&lt;/a&gt;</span><span class="pln">
                    </span><span class="tag">&lt;/address&gt;</span></pre>
                  </div>
                  <div class="span4">
                    <address>
                      <strong>Twitter, Inc.</strong>
                      <br> 795 Folsom Ave, Suite 600
                      <br> San Francisco, CA 94107
                      <br>
                      <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <address>
                      <strong>Full Name</strong>
                      <br>
                      <a href="mailto:#">first.last@gmail.com</a>
                    </address>
                  </div>
                </div>
                <!--//row-->
                <h3>abbr使用例</h3>
                <p>略語はテキストと下点線の境界でスタイリングされています。本来の意味がホバーした時にタイトル表示されます。ホバーしたときヘルプカーソルも表示されます。</p>
                <div class="row">
                  <div class="span5">
                    <pre class="prettyprint"><span class="tag">&lt;p&gt;&lt;abbr</span><span class="pln"> </span><span class="atn">title</span><span class="pun">=</span><span class="atv">"HyperText Markup Language"</span><span class="tag">&gt;</span><span class="pln">HTML</span><span class="tag">&lt;/abbr&gt;</span><span class="pln">はスライスされたパン以来の最高のものです。</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                    </span><span class="tag">&lt;p&gt;&lt;abbr</span><span class="pln"> </span><span class="atn">title</span><span class="pun">=</span><span class="atv">"attribute"</span><span class="tag">&gt;</span><span class="pln">attr</span><span class="tag">&lt;/abbr&gt;</span><span class="pln">は単語属性の略語である。</span><span class="tag">&lt;/p&gt;</span></pre>
                  </div>
                  <div class="span4">
                    <p>
                      <abbr title="HyperText Markup Language">HTML</abbr>はスライスされたパン以来の最高のものです。</p>
                      <p>
                        <abbr title="attribute">attr</abbr>は単語属性の略語である。</p>
                      </div>
                    </div>
                    <!--//row-->
                    <h3>blockquote使用例</h3>
                    <p><code>.pull-right</code>クラスを追加すると右側に表示されます。</p>
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>URL</th>
                          <th>締切日</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <code>&lt;blockquote&gt;</code>
                          </td>
                          <td> 別のソースからコンテンツを引用するためのブロックレベル要素 </td>
                          <td>
                            <p>追加&lt;引用元&gt;URL属性</p>
                            フローとオプションで<code>.pull-left</code> （左寄り）と <code>.pull-right</code>（右寄り） が使用できます。
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <code>&lt;small&gt;</code>
                          </td>
                          <td> 通常、省略可能な要素で、作品のタイトルや作者名などに利用する。</td>
                          <td>&lt;引用する&gt;出典のタイトルか名前の間に置く</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="span5">
                        <pre class="prettyprint"><span class="tag">&lt;blockquote&gt;</span><span class="pln">
                        </span><span class="tag">&lt;p&gt;</span><span class="pln">ツイッター改修中改修中は毎回すごい進化を遂げている！バージョンアップのたびにすごい機能が追加されている！</span><span class="tag">&lt;/p&gt;</span><span class="pln">
                      </span><span class="tag">&lt;small&gt;</span><span class="pln">誰かがつぶやいていたよ</span><span class="tag">&lt;/small&gt;</span><span class="pln">
                    </span><span class="tag">&lt;/blockquote&gt;</span></pre>
                  </div>
                  <div class="span4">
                    <blockquote>
                      <p>ツイッター改修中改修中は毎回すごい進化を遂げている！バージョンアップのたびにすごい機能が追加されている！</p>
                      <small>誰かがつぶやいていたよ</small>
                    </blockquote>
                    <blockquote class="pull-right">
                      <p>ツイッター改修中改修中は毎回すごい進化を遂げている！バージョンアップのたびにすごい機能が追加されている！</p>
                      <small>誰かがつぶやいていたよ</small>
                    </blockquote>
                  </div>
                </div>
                <!--//row-->
                <h3>リスト</h3>
                <div class="row">
                  <div class="span5">
                    <pre class="prettyprint"><span class="tag">&lt;ul&gt;</span><span class="pln">
                    </span><span class="tag">&lt;li&gt;</span><span class="pln">ツイッター</span><span class="tag">&lt;/li&gt;</span><span class="pln">
                  </span><span class="tag">&lt;li&gt;</span><span class="pln">ブート</span><span class="tag">&lt;/li&gt;</span><span class="pln">
                </span><span class="tag">&lt;li&gt;</span><span class="pln">ストラップ</span><span class="tag">&lt;/li&gt;</span><span class="pln">
              </span><span class="tag">&lt;li&gt;</span><span class="pln">バージョン2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
          </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"unstyled"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;li&gt;</span><span class="pln">リスト</span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;</span><span class="pln">タグ</span><span class="tag">&lt;/li&gt;</span><span class="pln">
    </span><span class="tag">&lt;li&gt;</span><span class="pln">なし</span><span class="tag">&lt;/li&gt;</span><span class="pln">
  </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;ol&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">数字の付いた</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;i&gt;</span><span class="pln">リストタイプ</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;li&gt;</span><span class="pln">です</span><span class="tag">&lt;/li&gt;</span><span class="pln">
</span><span class="tag">&lt;/ol&gt;</span><span class="pln">
</span><span class="tag">&lt;dl&gt;</span><span class="pln">
</span><span class="tag">&lt;dt&gt;</span><span class="pln">記述リスト</span><span class="tag">&lt;/dt&gt;</span><span class="pln">
</span><span class="tag">&lt;dd&gt;</span><span class="pln">説明リストは、用語を定義するのに最適です。</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
</span><span class="tag">&lt;dt&gt;</span><span class="pln">ツイッター改修中改修中</span><span class="tag">&lt;/dt&gt;</span><span class="pln">
</span><span class="tag">&lt;dd&gt;</span><span class="pln">CSSフレームワークの大本命！ツイッターのデザインをそのままお届け！</span><span class="tag">&lt;/dd&gt;</span><span class="pln">
</span><span class="tag">&lt;/dl&gt;</span></pre>
</div>
<div class="span4">
  <ul>
    <li>ツイッター</li>
    <li>ブート</li>
    <li>ストラップ</li>
    <li>バージョン2</li>
  </ul>
  <ul class="unstyled">
    <li>リスト</li>
    <li>タグ</li>
    <li>なし</li>
  </ul>
  <ol>
    <li>数字の付いた</li>
    <li>リストタイプ</li>
    <li>です</li>
  </ol>
  <dl>
    <dt>記述リスト</dt>
    <dd>説明リストは、用語を定義するのに最適です。</dd>
    <dt>ツイッター改修中改修中</dt>
    <dd>CSSフレームワークの大本命！ツイッターのデザインをそのままお届け！</dd>
  </dl>
</div>
</div>
<!--//row-->
<h3>code使用例</h3>
<div class="row">
  <div class="span4">
    <h4>ベーシック</h4>
    <p>適切なレンダリングをするため複数行のコードを表記する場合は&lt;pre&gt;を使用。
    </p>
    <p>
    </p><pre>&lt;p&gt;Sample text here...&lt;/p&gt;
  </pre>
  <pre class="prettyprint linenums" style="margin-bottom: 9px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;pre&gt;</span></li><li class="L1"><span class="tag">&lt;p&gt;</span><span class="pln">Sample text here...</span><span class="tag">&lt;/p&gt;</span></li><li class="L2"><span class="tag">&lt;/pre&gt;</span></li></ol></pre>
</div>
<div class="span5">
  <h4>Google Prettify</h4>
  <p>グーグルのコードハイライトです。&lt;pre&gt;の要素をオプションクラスで強化されたレンダリング表示します。</p>
  <pre class="prettyprint linenums" style="margin-bottom: 9px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;p&gt;</span><span class="pln">Sample text here...</span><span class="tag">&lt;/p&gt;</span></li></ol></pre>
  <pre class="prettyprint linenums" style="margin-bottom: 9px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;pre</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"prettyprint linenums"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;p&gt;</span><span class="pln">Sample text here...</span><span class="tag">&lt;/p&gt;</span></li><li class="L2"><span class="tag">&lt;/pre&gt;</span></li></ol></pre>
  <p><a href="">ダウンロードはコチラ</a> そして <a href="">使い方はコチラ</a>を参照してください</p>
</div>
</div>
<!--//row-->
</section>
                <!-- Tables
                ================================================== -->
                <section id="table">
                  <div class="page-header">
                    <h2>テーブル</h2>
                  </div>
                  <p>テーブルが自動的に読みやすさを確保し、構造を維持するために、ほんの数枠でスタイリングされています。2.0では、テーブルのクラスが必要になります。</p>
                  <div class="row">
                    <div class="span6">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>タグ</th>
                            <th>説明</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <code>&lt;table&gt;</code>
                            </td>
                            <td> データを表形式で表示するための要素をラップする </td>
                          </tr>
                          <tr>
                            <td>
                              <code>&lt;thead&gt;</code>
                            </td>
                            <td> テーブルのヘッダー行のコンテナ要素（&lt;TR&gt;は）テーブルの列にラベルを付け </td>
                          </tr>
                          <tr>
                            <td>
                              <code>&lt;tbody&gt;</code>
                            </td>
                            <td> テーブルの行のコンテナ要素（&lt;TR&gt;テーブルのボディに） </td>
                          </tr>
                          <tr>
                            <td>
                              <code>&lt;tr&gt;</code>
                            </td>
                            <td> 表のセルのセットのコンテナエレメント（&lt;TD&gt;または&lt;TH&gt;単一の行に表示されます） </td>
                          </tr>
                          <tr>
                            <td>
                              <code>&lt;td&gt;</code>
                            </td>
                            <td> デフォルトのテーブルセル </td>
                          </tr>
                          <tr>
                            <td>
                              <code>&lt;th&gt;</code>
                            </td>
                            <td> 列（または行、範囲、および配置に依存します）のための特別なテーブルセルがラベル
                              <br> 内で使用する必要があります&lt;THEAD&gt; </td>
                            </tr>
                            <tr>
                              <td>
                                <code>&lt;caption&gt;</code>
                              </td>
                              <td> スクリーンリーダーのために特に有用なテーブルが保持する内容の説明や概要、 </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="span3">
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table&gt;</span></li><li class="L1"><span class="tag">&lt;thead&gt;</span></li><li class="L2"><span class="tag">&lt;tr&gt;</span></li><li class="L3"><span class="tag">&lt;th&gt;</span><span class="pln">…</span><span class="tag">&lt;/th&gt;</span></li><li class="L4"><span class="tag">&lt;th&gt;</span><span class="pln">…</span><span class="tag">&lt;/th&gt;</span></li><li class="L5"><span class="tag">&lt;/tr&gt;</span></li><li class="L6"><span class="tag">&lt;/thead&gt;</span></li><li class="L7"><span class="tag">&lt;tbody&gt;</span></li><li class="L8"><span class="tag">&lt;tr&gt;</span></li><li class="L9"><span class="tag">&lt;td&gt;</span><span class="pln">…</span><span class="tag">&lt;/td&gt;</span></li><li class="L0"><span class="tag">&lt;td&gt;</span><span class="pln">…</span><span class="tag">&lt;/td&gt;</span></li><li class="L1"><span class="tag">&lt;/tr&gt;</span></li><li class="L2"><span class="tag">&lt;/tbody&gt;</span></li><li class="L3"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
                      </div>
                    </div>
                    <!--//row-->
                    <h3>テーブルオプション</h3>
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>名前</th>
                          <th>クラス</th>
                          <th>説明</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>デフォルト</td>
                          <td class="muted">None</td>
                          <td>単に列と行でスタイルはありません。</td>
                        </tr>
                        <tr>
                          <td>ベーシック</td>
                          <td>
                            <code>.table</code>
                          </td>
                          <td>行と行の間だけのボーダー線</td>
                        </tr>
                        <tr>
                          <td>ボーダー</td>
                          <td>
                            <code>.table-bordered</code>
                          </td>
                          <td> テーブル内の境界線をボーダーで囲みます。 </td>
                        </tr>
                        <tr>
                          <td>ゼブラストライプ</td>
                          <td>
                            <code>.table-striped</code>
                          </td>
                          <td> 奇数行（1,3,5など）に薄い灰色の背景色を追加します。 </td>
                        </tr>
                        <tr>
                          <td>コンデンス</td>
                          <td>
                            <code>.table-condensed</code>
                          </td>
                          <td> テーブル内のパディングが8pxから4pxの半分にカット。 </td>
                        </tr>
                      </tbody>
                    </table>
                    <h3>1.デフォルトのテーブルスタイル</h3>
                    <div class="row">
                      <div class="span4">
                        <p>2.0では<code>.table</code>のクラスを追加すると自動的に読みやすさを確保し、構造を維持するためのスタイリングが施されます。</p>
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"table"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  …</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
                      </div>
                      <div class="span5">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>名</th>
                              <th>姓</th>
                              <th>言語</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>マーク</td>
                              <td>オットー</td>
                              <td>CSS</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>ジェイコブ</td>
                              <td>トマソン</td>
                              <td>Javascript</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>シュチュー</td>
                              <td>デント</td>
                              <td>HTML</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <h3>2. ゼブラストライプテーブル</h3>
                    <div class="row">
                      <div class="span4">
                        <p><code>.table-striped</code>ゼブラストライプクラスを追加して白と灰色の背景を交互に表示します。</p>
                        <p class="muted"><strong>Note:</strong> ストライプの表はの使用は<code>：nth-child</code>セレクタはCSS3の仕様なのでIE7、IE8では使用できません。</p>
                        <pre class="prettyprint linenums" style="margin-bottom: 18px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"table table-striped"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  …</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
                      </div>
                      <div class="span5">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>名</th>
                              <th>姓</th>
                              <th>言語</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>マーク</td>
                              <td>オットー</td>
                              <td>CSS</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>ジェイコブ</td>
                              <td>トマソン</td>
                              <td>Javascript</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>シュチュー</td>
                              <td>デント</td>
                              <td>HTML</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <h3>3. ボーダーテーブル</h3>
                    <div class="row">
                      <div class="span4">
                        <p> テーブル全体の周りに罫線を追加し、角を丸くします。 </p>
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"table table-bordered"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  …</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
                      </div>
                      <div class="span5">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>名</th>
                              <th>姓</th>
                              <th>言語</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td colspan="2">マークオットー</td>
                              <td>CSS</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>ジェイコブ</td>
                              <td>トマソン</td>
                              <td rowspan="2">Javascript</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>シュチュー</td>
                              <td>デント</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>ボロゾフ</td>
                              <td>スターリン</td>
                              <td>HTML</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--//row-->
                    <h3>4. コンデンステーブル</h3>
                    <div class="row">
                      <div class="span4">
                        <p>テーブルをよりコンパクトに凝縮、パディングを半分に（8pxから4pxに）削減するための<code>.table-condensed</code>クラスです。</p>
                        <pre class="prettyprint linenums" style="margin-bottom: 18px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"table table-condensed"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  …</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
                      </div>
                      <div class="span5">
                        <table class="table table-condensed">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>名</th>
                              <th>姓</th>
                              <th>言語</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>マーク</td>
                              <td>オットー</td>
                              <td>CSS</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>ジェイコブ</td>
                              <td>トマソン</td>
                              <td>Javascript</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>シュチュー</td>
                              <td>デント</td>
                              <td>HTML</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--//row-->
                    <h3>5. 全部込みテーブル</h3>
                    <div class="row">
                      <div class="span4">
                        <p>利用可能なクラスのいずれかを利用すれば、色々な外観を自由に表現ができます。</p>
                        <pre class="prettyprint linenums" style="margin-bottom: 18px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"table table-striped table-bordered table-condensed"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
                      </div>
                      <div class="span5">
                        <table class="table table-striped table-bordered table-condensed">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th class="yellow">名</th>
                              <th class="blue">姓</th>
                              <th class="green">言語</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>マーク</td>
                              <td>オットー</td>
                              <td>CSS</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>ジェイコブ</td>
                              <td>トマソン</td>
                              <td>Javascript</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>シュチュー</td>
                              <td>デント</td>
                              <td>HTML</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>ボロゾフ</td>
                              <td>スターリン</td>
                              <td>HTML</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!--//row-->
                  </section>
                <!-- Forms
                ================================================== -->
                <section id="forms">
                  <div class="page-header">
                    <h2>フォーム</h2>
                  </div>
                  <!--//row-->
                  <h3>フォームの4つのタイプ</h3>
                  <p>改修中改修中は、一般的なWebフォームの4つのスタイルのためのシンプルなマークアップとスタイルを提供しています。</p>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>名前</th>
                        <th>クラス</th>
                        <th>説明</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>垂直(default)</th>
                        <td><code>.form-vertical</code> <span class="muted">(not required)</span></td>
                        <td> コントロールの上に積み重ねられ、左揃えのラベル </td>
                      </tr>
                      <tr>
                        <th>インライン</th>
                        <td><code>.form-inline</code></td>
                        <td> コンパクトなスタイルの左揃えのラベルとインラインブロックコントロール </td>
                      </tr>
                      <tr>
                        <th>検索</th>
                        <td><code>.form-search</code></td>
                        <td> 典型的な検索の美学のために余分な丸みを帯びたテキスト入力 </td>
                      </tr>
                      <tr>
                        <th>水平</th>
                        <td><code>.form-horizontal</code></td>
                        <td> コントロールと同じ行に左、右揃えのラベルをフロート </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="page-header">
                    <h2>フォーム例 <small>フォームコントロールを使用して、マークアップ方法を見てみる</small></h2>
                  </div>
                  <h3>基本形</h3>
                  <div class="row">
                    <div class="span3">
                      <p>v2.0には、フォームのスタイルの軽量かつスマートなデフォルトを持っています。余分なマークアップがなく、単にフォームコントロール</p>
                    </div>
                    <div class="span6">
                      <form class="well">
                        <label>ラベル名</label>
                        <input type="text" class="span3" placeholder="Type something…"> <span class="help-inline">関連付けられたヘルプ·テキスト！</span>
                        <label class="checkbox">
                          <input type="checkbox"> チェックする
                        </label>
                        <button type="submit" class="btn"> 送 信 </button>
                      </form>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"well"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;label&gt;</span><span class="pln">ラベル名</span><span class="tag">&lt;/label&gt;</span></li><li class="L2"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span3"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Type something…"</span><span class="tag">&gt;</span></li><li class="L3"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"help-inline"</span><span class="tag">&gt;</span><span class="pln">関連付けられたヘルプテキスト!</span><span class="tag">&lt;/span&gt;</span></li><li class="L4"><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="tag">&gt;</span></li><li class="L5"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln"> チェックする</span></li><li class="L6"><span class="tag">&lt;/label&gt;</span></li><li class="L7"><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="tag">&gt;</span><span class="pln"> 送 信 </span><span class="tag">&lt;/button&gt;</span></li><li class="L8"><span class="tag">&lt;/form&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <!--//row-->
                  <h3>検索フォーム</h3>
                  <div class="row">
                    <div class="span3">
                      <p>デフォルトWebKitのスタイルを反映して、ただ<code>.form-search</code>を記述するだけで余分な丸い検索フィールドが追加されます。</p>
                    </div>
                    <div class="span6">
                      <form class="well form-search">
                        <input type="text" class="input-medium search-query">
                        <button type="submit" class="btn"> 検 索 </button>
                      </form>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"well form-search"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-medium search-query"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="tag">&gt;</span><span class="pln"> 検 索 </span><span class="tag">&lt;/button&gt;</span></li><li class="L3"><span class="tag">&lt;/form&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <!--//row-->
                  <h3>インライン</h3>
                  <div class="row">
                    <div class="span3">
                      <p>入力は始めるべきブロック・レベルです。ブロックレベルの<code>.form-inline</code> と <code>.form-horizontal</code>
                        <code>.form-inline</code>と<code>.form-horizontal</code>はインラインブロックの時に使用します。</p>
                      </div>
                      <div class="span6">
                        <form class="well form-inline">
                          <input type="text" class="input-small" placeholder="Email">
                          <input type="password" class="input-small" placeholder="Password">
                          <label class="checkbox">
                            <input type="checkbox"> 忘れた？
                          </label>
                          <button type="submit" class="btn">サインイン</button>
                        </form>
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"well form-inline"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-small"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Email"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"password"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-small"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pun">=</span><span class="atv">"Password"</span><span class="tag">&gt;</span></li><li class="L3"><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="tag">&gt;</span></li><li class="L4"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln"> 忘れた?</span></li><li class="L5"><span class="tag">&lt;/label&gt;</span></li><li class="L6"><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="tag">&gt;</span><span class="pln">サインイン</span><span class="tag">&lt;/button&gt;</span></li><li class="L7"><span class="tag">&lt;/form&gt;</span></li></ol></pre>
                      </div>
                    </div>
                    <!-- //row -->
                    <h3>水平方向の形</h3>
                    <div class="row">
                      <div class="span5">
                        <form class="form-horizontal">
                          <fieldset>
                            <legend>改修中改修中がサポートするコントロール</legend>
                            <div class="control-group">
                              <label class="control-label" for="input01">テキスト入力</label>
                              <div class="controls">
                                <input type="text" class="input-large" id="input01">
                                <p class="help-block">自由形式のテキストに加えて、任意のHTML5テキストベースの入力はこのように表示されます。</p>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="optionsCheckbox">チェックボックス</label>
                              <div class="controls">
                                <label class="checkbox">
                                  <input type="checkbox" id="optionsCheckbox" value="option1"> オプション1はこれです。確認です。
                                </label>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="select01">セレクトリスト</label>
                              <div class="controls">
                                <select id="select01">
                                  <option>something</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="multiSelect">マルチセレクト</label>
                              <div class="controls">
                                <select multiple="multiple" id="multiSelect">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="fileInput">ファイル入力</label>
                              <div class="controls">
                                <input class="input-file" id="fileInput" type="file">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="textarea">テキストエリア</label>
                              <div class="controls">
                                <textarea class="input-large" id="textarea" rows="3"></textarea>
                              </div>
                            </div>
                            <div class="form-actions">
                              <button type="submit" class="btn btn-primary">変更を保存する</button>
                              <button type="reset" class="btn">キャンセル</button>
                            </div>
                          </fieldset>
                        </form>
                        <h3>マークアップ例</h3>
                        <p>上記の例ではフォームのレイアウトを考えると、ここでは、最初の入力とコントロール群に関連付けられたマークアップです。<code>.control-group</code>と<code>.control-label</code>と<code>.controls</code> のすべてのスタイルが必要になります。</p>
                        <pre class="prettyprint"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-horizontal"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;fieldset&gt;</span><span class="pln">
                      </span><span class="tag">&lt;legend&gt;</span><span class="pln">テキスト項目</span><span class="tag">&lt;/legend&gt;</span><span class="pln">
                    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"input01"</span><span class="tag">&gt;</span><span class="pln">テキスト入力</span><span class="tag">&lt;/label&gt;</span><span class="pln">
                </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span><span class="pln">
              </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-xlarge"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"input01"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"help-block"</span><span class="tag">&gt;</span><span class="pln">補助説明</span><span class="tag">&lt;/p&gt;</span><span class="pln">
          </span><span class="tag">&lt;/div&gt;</span><span class="pln">
        </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"form-actions"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn btn-primary"</span><span class="tag">&gt;</span><span class="pln">変更を保存する</span><span class="tag">&lt;/button&gt;</span><span class="pln">
  </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"reset"</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="tag">&gt;</span><span class="pln">キャンセル</span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/fieldset&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
</div>
<div class="span4">
  <h3>含まれるもの</h3>
  <p>すべてのデフォルトのフォームは私たちがサポートするコントロールは左に示します。ここで箇条書きリストは次のとおりです。</p>
  <ul>
    <li>テキスト入力（テキスト/パスワード/電子メールetc）</li>
    <li>チェックボックス</li>
    <li>ラジオボタン</li>
    <li>セレクト</li>
    <li>マルチセレクト</li>
    <li>ファイル入力</li>
    <li>テキストエリア</li>
  </ul>
  <hr>
  <h3>v2.0の新しいデフォルト</h3>
  <p>v1.4まで、改修中改修中のデフォルト形式スタイルは水平レイアウトを使用しました。
    <br> 改修中改修中2で、任意の形式にするために、賢明で計量可能なデフォルトを持つためにその強制レイアウトを削除しました。
  </p>
</div>
</div>
<!--//row-->
<br>
<div class="row">
  <div class="span5">
    <form class="form-horizontal">
      <fieldset>
        <legend>フォームコントロールの状態</legend>
        <div class="control-group">
          <label class="control-label" for="focusedInput">フォーカス入力</label>
          <div class="controls">
            <input class="input-large focused" id="focusedInput" type="text" value="This is focused…">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">編集不可の入力項目</label>
          <div class="controls">
            <span class="input-large uneditable-input">ここに何か値を入れる</span>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="disabledInput">入力無効</label>
          <div class="controls">
            <input class="input-large disabled" id="disabledInput" type="text" placeholder="ここには入力できません…" disabled="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="optionsCheckbox2">チェック無効</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" id="optionsCheckbox2" value="option1" disabled=""> これは無効なチェックボックス
            </label>
          </div>
        </div>
        <div class="control-group warning">
          <label class="control-label" for="inputError">入力の警告</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline">何かが間違っている可能性があります</span>
          </div>
        </div>
        <div class="control-group error">
          <label class="control-label" for="inputError">入力エラー</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline">エラーを修正してください</span>
          </div>
        </div>
        <div class="control-group success">
          <label class="control-label" for="inputSuccess">成功した入力</label>
          <div class="controls">
            <input type="text" id="inputSuccess">
            <span class="help-inline">OK!</span>
          </div>
        </div>
        <div class="control-group success">
          <label class="control-label" for="selectError">選択成功</label>
          <div class="controls">
            <select id="selectError">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <span class="help-inline">OK!</span>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary">保存する</button>
          <button type="reset" class="btn">キャンセル</button>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="span4">
    <h3>再設計されたブラウザの状態</h3>
    <p>改修中改修中は、ブラウザに支援された集中し<code>disabled</code>の状態のためのスタイルを特色とします。
      <br> 私たちはデフォルトWebkit
      <code>outline</code>を削除し、<code>:focus</code>の場所で<code>box-shadow</code>を適用します、</p>
      <hr>
      <h3>フォームのバリデーション</h3>
      <p>さらに、それは、エラー、警告および成功のための確認スタイルを含んでいます。
        <br> 使用するためには、周囲の
        <code>.control-group</code>にエラー・クラスを加えてください。
        <br>
      </p>
      <pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group error"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"inputError"</span><span class="tag">&gt;</span><span class="pln">入力エラー</span><span class="tag">&lt;/label&gt;</span><span class="pln">
    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"inputError"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"help-inline"</span><span class="tag">&gt;</span><span class="pln">エラーを修正してください</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group success"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"inputSuccess"</span><span class="tag">&gt;</span><span class="pln">成功した入力</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"inputSuccess"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"help-inline"</span><span class="tag">&gt;</span><span class="pln">OK!</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
</div>
</div>
<!--//row-->
<br>
<div class="row">
  <div class="span5">
    <form class="form-horizontal">
      <fieldset>
        <legend>拡張フォームコントロール</legend>
        <div class="control-group">
          <label class="control-label">入力サイズ</label>
          <div class="controls docs-input-sizes">
            <input class="span1" type="text" placeholder=".span1">
            <input class="span2" type="text" placeholder=".span2">
            <input class="span3" type="text" placeholder=".span3">
            <select class="span1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <select class="span2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <select class="span3">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <p class="help-block">入力サイズをグリッドシステムの<code>.span*</code>クラスと同じものを使用。</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">代替えサイズ</label>
          <div class="controls docs-input-sizes">
            <input class="input-mini" type="text" placeholder=".input-mini">
            <input class="input-small" type="text" placeholder=".input-small">
            <input class="input-medium" type="text" placeholder=".input-medium">
            <input class="input-large" type="text" placeholder=".input-large">
            <p class="help-block">また、コントロールの種類<code>.input-mini</code>から<code>.input-xxlarge</code>までを利用できます。（例えば、<code>input</code>vs<code>select</code>を変化させるために対応するCSSスタイルをグリッドにマッピングされない静的クラスに使用することができます）</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="prependedInput">前に付加テキスト</label>
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on">@</span>
              <input class="span2" id="prependedInput" size="16" type="text">
            </div>
            <p class="help-block">ここではいくつかのヘルプ·テキストがある</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="appendedInput">追加されたテキスト</label>
          <div class="controls">
            <div class="input-append">
              <input class="span2" id="appendedInput" size="16" type="text">
              <span class="add-on">.00</span>
            </div>
            <p class="help-block">ここでは詳細なヘルプ·テキストがある</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inlineCheckboxes">インラインチェックボックス</label>
          <div class="controls">
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="optionsCheckboxList">チェックボックス</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckboxList1" value="option1"> オプション1はこれである、それは素晴らしいことだ、なぜ含まれていることを確認していること、である
            </label>
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckboxList2" value="option2"> オプション2は、フォームの結果にチェックを含めることができます
            </label>
            <label class="checkbox">
              <input type="checkbox" name="optionsCheckboxList3" value="option3"> オプション3 CAN-はい、あなたは、それが、また、フォームの結果でチェックし、含まれると推測
            </label>
            <p class="help-block"><strong>Note:</strong> ラベルははるかに大きいのクリック領域とより使いやすいフォームのすべてのオプションを囲みます。</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">ラジオボタン</label>
          <div class="controls">
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> オプション1はこれである、それは素晴らしいことだ、なぜ含まれていることを確認していること、である
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> オプション2は、何か他のものであることができ、それを選択すると、オプション1の選択を解除します。
            </label>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary">変更を保存する</button>
          <button type="reset" class="btn">キャンセル</button>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="span4">
    <h3>先頭＆後方に追加</h3>
    <p>入力項目で、予め決められているマークや数字を先頭もしくは後方に表示させておくことができます。
      <br> 例えば、ツイッター・ユーザー名のための@マーク、あるいは財源用$マークや数字などです。
      <br>
    </p>
    <hr>
    <h3>チェックボックスとラジオボタン</h3>
    <p>v1.4まで、改修中改修中は、をチェックボックスとラジオボタンのまわりの余分な積み重ねをしました。
      <br> 実はこれは繰り返すだけの単純な問題です。
      <code>&lt;label class="checkbox"&gt;</code>で<code>&lt;input type="checkbox"&gt;</code>をくくれば良いです。</p>
      <p>インラインのチェックボックスおよびラジオボタンも
        <br> 任意の
        <code>.checkbox</code>あるいは<code>.radio</code>に<code>.inline</code>をただ加えてください。そうすれば、完了です。</p>
        <pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group"</span><span class="tag">&gt;</span><span class="pln">
        </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"inlineCheckboxes"</span><span class="tag">&gt;</span><span class="pln">インラインチェックボックス</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span><span class="pln">
    </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"checkbox inline"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"inlineCheckbox1"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"option1"</span><span class="tag">&gt;</span><span class="pln"> 1
</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"checkbox inline"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"inlineCheckbox2"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"option2"</span><span class="tag">&gt;</span><span class="pln"> 2
</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"checkbox inline"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"inlineCheckbox3"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"option3"</span><span class="tag">&gt;</span><span class="pln"> 3
</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span></pre>
<hr>
<h4>インラインフォームと追加/プリペンド</h4>
<p>プリペンドを使用するかあるいはインラインの形式に入力を追加するためには、必ずスペースなしで、同じラインに<code>.add-on</code>と<code>input</code>を置いてください。</p>
<hr>
<h4>フォームのヘルプ·テキスト</h4>
<p>インラインのヘルプ·テキストが含まれ、フォーム入力用のヘルプテキストを追加するには入力要素の後に<code>span class="help-inline"</code>かヘルプテキストのブロックの場合は<code>p class="help-block"</code>になります。 </p>
<pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"prependedInput"</span><span class="tag">&gt;</span><span class="pln">前に付加テキスト</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-prepend"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"add-on"</span><span class="tag">&gt;</span><span class="pln">@</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span2"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"prependedInput"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"16"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"help-block"</span><span class="tag">&gt;</span><span class="pln">ここではいくつかのヘルプ·テキストがある</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-group"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"control-label"</span><span class="pln"> </span><span class="atn">for</span><span class="pun">=</span><span class="atv">"appendedInput"</span><span class="tag">&gt;</span><span class="pln">追加されたテキスト</span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"controls"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"input-append"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span2"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"appendedInput"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"16"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"add-on"</span><span class="tag">&gt;</span><span class="pln">.00</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"help-block"</span><span class="tag">&gt;</span><span class="pln">ここでは詳細なヘルプ·テキストがある</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span></pre>
</div>
</div>
<!--//row-->
</section>
                <!-- Buttons
                ================================================== -->
                <section id="buttons">
                  <div class="page-header">
                    <h2>ボタン</h2>
                  </div>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ボタン</th>
                        <th>クラス</th>
                        <th>説明</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="btn" href="#">Default</a></td>
                        <td><code>.btn</code></td>
                        <td> グラデーションを持つ標準灰色のボタン </td>
                      </tr>
                      <tr>
                        <td><a class="btn btn-primary" href="#">Primary</a></td>
                        <td><code>.btn-primary</code></td>
                        <td> 青色グラデーションボタン。主なアクションを識別 </td>
                      </tr>
                      <tr>
                        <td><a class="btn btn-info" href="#">Info</a></td>
                        <td><code>.btn-info</code></td>
                        <td> 水色グラデーションボタン。デフォルトのスタイルへの代替として使用 </td>
                      </tr>
                      <tr>
                        <td><a class="btn btn-success" href="#">Success</a></td>
                        <td><code>.btn-success</code></td>
                        <td> 緑色グラデーションボタン。成功や積極的な行動を示します。 </td>
                      </tr>
                      <tr>
                        <td><a class="btn btn-warning" href="#">Warning</a></td>
                        <td><code>.btn-warning</code></td>
                        <td> オレンジグラデーションボタン。注意ボタン </td>
                      </tr>
                      <tr>
                        <td><a class="btn btn-danger" href="#">Danger</a></td>
                        <td><code>.btn-danger</code></td>
                        <td> 赤色グラデーションボタン。危険なまたは負の作用を示します。 </td>
                      </tr>
                      <tr>
                        <td><a class="btn btn-inverse" href="#">Inverse</a></td>
                        <td><code>.btn-inverse</code></td>
                        <td>代替え濃灰色グラデーションボタン(意味的な行為か使用に結び付けられなかった)</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="span3">
                      <h3>ボタンのアクション</h3>
                      <p>ハイパーリンクがオブジェクトに使用されていることになっている一方、ボタンは単にアクションに使用されるべきです。</p>
                      <p>例えば、「ダウンロード」はボタンであるべきです。その一方で「最近の活動」はリンクであるべきです。 ボタン・スタイルは
                        <code>.btn</code>クラスを応用で、何でもに適用することができます。 単に
                        <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> 要素にこれらを適用することが可能です</p>
                        <h3>ブラウザ互換性</h3>
                        <p>IE9は、角丸上の背景グラデーションしません。したがって、適応外としました。 関連して、IE9 jankifiesは<code>.button</code>要素を修正できないのでテキストシャドウを不能にしました。</p>
                      </div>
                      <div class="span3">
                        <h3>複数のサイズ</h3>
                        <p>大きいサイズから小さいサイズまでを設定できます。 <code>.btn-large</code>（大）、<code>.btn-small</code>（小）、 <code>.btn-mini</code> （ミニ）クラスを追加すれば出来ます。</p>
                        <p>
                          <button class="btn btn-large btn-primary">主要アクション</button>
                          <button class="btn btn-large">アクション</button>
                        </p>
                        <p>
                          <button class="btn btn-small btn-primary">主要アクション</button>
                          <button class="btn btn-small">アクション</button>
                        </p>
                        <p>
                          <button class="btn btn-mini btn-primary">主要アクション</button>
                          <button class="btn btn-mini">アクション</button>
                        </p>
                        <br>
                        <h3>無効の状態</h3>
                        <p>無効なボタンについては、<code>.disabled</code>クラスを <code>&lt;button&gt;</code>要素や<code>&lt;a&gt;</code>要素に追加すれば可能です。</p>
                        <p>
                          <a href="#" class="btn btn-large btn-primary disabled">主要リンク</a>
                          <a href="#" class="btn btn-large disabled">リンク</a>
                        </p>
                        <p style="margin-bottom: 18px;">
                          <button class="btn btn-large btn-primary disabled" disabled="disabled">主要ボタン</button>
                          <button class="btn btn-large" disabled="">ボタン</button>
                        </p>
                        <p>
                          <span class="label label-info">注目!</span> ユーティリティークラスとして <code>.disabled</code>使いますが、似ている<code>.active</code>の接頭語は不要です。
                        </p>
                      </div>
                      <div class="span3">
                        <h3>複数の要素はひとつのクラスでボタンが生成できます</h3>
                        <p><code>&lt;a&gt;</code>、<code>&lt;button&gt;</code>、<code>&lt;input&gt;</code>要素はひとつの<code>.btn</code>クラスで簡単にボタンが生成します。</p>
                        <form>
                          <a class="btn" href="#">Link</a>
                          <button class="btn" type="submit">Button</button>
                          <input class="btn" type="button" value="Input">
                          <input class="btn" type="submit" value="Submit">
                        </form>
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">Link</span><span class="tag">&lt;/a&gt;</span></li><li class="L1"><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">  Button</span></li><li class="L3"><span class="tag">&lt;/button&gt;</span></li><li class="L4"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span></li><li class="L5"><span class="pln">         </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Input"</span><span class="tag">&gt;</span></li><li class="L6"><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span></li><li class="L7"><span class="pln">         </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="tag">&gt;</span></li></ol></pre>
                        <p>ベスト・プラクティスとして、マッチング、クロスブラウザのレ&#8203;&#8203;ンダリングを確保するコンテキストの要素に一致するようにしてみてください。 <code>input</code>、<code>&lt;input type="submit"&gt;</code>ボタンのようになります</p>
                      </div>
                    </div>
                  </section>
                <!-- Icons
                ================================================== -->
                <section id="icons">
                  <div class="page-header">
                    <h2>アイコン <small><a href="" target="_blank">Glyphicons</a>により上品に提供されています</small></h2>
                  </div>
                  <div class="row">
                    <div class="span3">
                      <ul class="the-icons">
                        <li><i class="icon-glass"></i> icon-glass</li>
                        <li><i class="icon-music"></i> icon-music</li>
                        <li><i class="icon-search"></i> icon-search</li>
                        <li><i class="icon-envelope"></i> icon-envelope</li>
                        <li><i class="icon-heart"></i> icon-heart</li>
                        <li><i class="icon-star"></i> icon-star</li>
                        <li><i class="icon-star-empty"></i> icon-star-empty</li>
                        <li><i class="icon-user"></i> icon-user</li>
                        <li><i class="icon-film"></i> icon-film</li>
                        <li><i class="icon-th-large"></i> icon-th-large</li>
                        <li><i class="icon-th"></i> icon-th</li>
                        <li><i class="icon-th-list"></i> icon-th-list</li>
                        <li><i class="icon-ok"></i> icon-ok</li>
                        <li><i class="icon-remove"></i> icon-remove</li>
                        <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
                        <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
                        <li><i class="icon-off"></i> icon-off</li>
                        <li><i class="icon-signal"></i> icon-signal</li>
                        <li><i class="icon-cog"></i> icon-cog</li>
                        <li><i class="icon-trash"></i> icon-trash</li>
                        <li><i class="icon-home"></i> icon-home</li>
                        <li><i class="icon-file"></i> icon-file</li>
                        <li><i class="icon-time"></i> icon-time</li>
                        <li><i class="icon-road"></i> icon-road</li>
                        <li><i class="icon-download-alt"></i> icon-download-alt</li>
                        <li><i class="icon-download"></i> icon-download</li>
                        <li><i class="icon-upload"></i> icon-upload</li>
                        <li><i class="icon-inbox"></i> icon-inbox</li>
                        <li><i class="icon-play-circle"></i> icon-play-circle</li>
                        <li><i class="icon-repeat"></i> icon-repeat</li>
                        <li><i class="icon-refresh"></i> icon-refresh</li>
                        <li><i class="icon-list-alt"></i> icon-list-alt</li>
                        <li><i class="icon-lock"></i> icon-lock</li>
                        <li><i class="icon-flag"></i> icon-flag</li>
                        <li><i class="icon-headphones"></i> icon-headphones</li>
                        <li><i class="icon-volume-off"></i> icon-volume-off</li>
                        <li><i class="icon-volume-down"></i> icon-volume-down</li>
                        <li><i class="icon-volume-up"></i> icon-volume-up</li>
                        <li><i class="icon-qrcode"></i> icon-qrcode</li>
                        <li><i class="icon-barcode"></i> icon-barcode</li>
                      </ul>
                    </div>
                    <div class="span3">
                      <ul class="the-icons">
                        <li><i class="icon-tag"></i> icon-tag</li>
                        <li><i class="icon-tags"></i> icon-tags</li>
                        <li><i class="icon-book"></i> icon-book</li>
                        <li><i class="icon-bookmark"></i> icon-bookmark</li>
                        <li><i class="icon-print"></i> icon-print</li>
                        <li><i class="icon-camera"></i> icon-camera</li>
                        <li><i class="icon-font"></i> icon-font</li>
                        <li><i class="icon-bold"></i> icon-bold</li>
                        <li><i class="icon-italic"></i> icon-italic</li>
                        <li><i class="icon-text-height"></i> icon-text-height</li>
                        <li><i class="icon-text-width"></i> icon-text-width</li>
                        <li><i class="icon-align-left"></i> icon-align-left</li>
                        <li><i class="icon-align-center"></i> icon-align-center</li>
                        <li><i class="icon-align-right"></i> icon-align-right</li>
                        <li><i class="icon-align-justify"></i> icon-align-justify</li>
                        <li><i class="icon-list"></i> icon-list</li>
                        <li><i class="icon-indent-left"></i> icon-indent-left</li>
                        <li><i class="icon-indent-right"></i> icon-indent-right</li>
                        <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
                        <li><i class="icon-picture"></i> icon-picture</li>
                        <li><i class="icon-pencil"></i> icon-pencil</li>
                        <li><i class="icon-map-marker"></i> icon-map-marker</li>
                        <li><i class="icon-adjust"></i> icon-adjust</li>
                        <li><i class="icon-tint"></i> icon-tint</li>
                        <li><i class="icon-edit"></i> icon-edit</li>
                        <li><i class="icon-share"></i> icon-share</li>
                        <li><i class="icon-check"></i> icon-check</li>
                        <li><i class="icon-move"></i> icon-move</li>
                        <li><i class="icon-step-backward"></i> icon-step-backward</li>
                        <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
                        <li><i class="icon-backward"></i> icon-backward</li>
                        <li><i class="icon-play"></i> icon-play</li>
                        <li><i class="icon-pause"></i> icon-pause</li>
                        <li><i class="icon-stop"></i> icon-stop</li>
                        <li><i class="icon-forward"></i> icon-forward</li>
                        <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
                        <li><i class="icon-step-forward"></i> icon-step-forward</li>
                        <li><i class="icon-eject"></i> icon-eject</li>
                        <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
                        <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
                      </ul>
                    </div>
                    <div class="span3">
                      <ul class="the-icons">
                        <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
                        <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
                        <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
                        <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
                        <li><i class="icon-question-sign"></i> icon-question-sign</li>
                        <li><i class="icon-info-sign"></i> icon-info-sign</li>
                        <li><i class="icon-screenshot"></i> icon-screenshot</li>
                        <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
                        <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
                        <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
                        <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
                        <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
                        <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
                        <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
                        <li><i class="icon-share-alt"></i> icon-share-alt</li>
                        <li><i class="icon-resize-full"></i> icon-resize-full</li>
                        <li><i class="icon-resize-small"></i> icon-resize-small</li>
                        <li><i class="icon-plus"></i> icon-plus</li>
                        <li><i class="icon-minus"></i> icon-minus</li>
                        <li><i class="icon-asterisk"></i> icon-asterisk</li>
                        <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
                        <li><i class="icon-gift"></i> icon-gift</li>
                        <li><i class="icon-leaf"></i> icon-leaf</li>
                        <li><i class="icon-fire"></i> icon-fire</li>
                        <li><i class="icon-eye-open"></i> icon-eye-open</li>
                        <li><i class="icon-eye-close"></i> icon-eye-close</li>
                        <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
                        <li><i class="icon-plane"></i> icon-plane</li>
                        <li><i class="icon-calendar"></i> icon-calendar</li>
                        <li><i class="icon-random"></i> icon-random</li>
                        <li><i class="icon-comment"></i> icon-comment</li>
                        <li><i class="icon-magnet"></i> icon-magnet</li>
                        <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
                        <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
                        <li><i class="icon-retweet"></i> icon-retweet</li>
                        <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
                        <li><i class="icon-folder-close"></i> icon-folder-close</li>
                        <li><i class="icon-folder-open"></i> icon-folder-open</li>
                        <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
                        <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
                      </ul>
                    </div>
                  </div>
                  <div class="alert alert-info">
                    <strong>注目！</strong> アイコンのクラス名はCSSの<code>:after</code>属性によって表示されています。 このドキュメントでは、マウスオーバーすると明るい赤背景色を示し、アイコンをハイライトします。
                  </div>
                  <div class="row">
                    <div class="span3">
                      <h3>CSSスプライトで構築</h3>
                      <p>すべての一枚づつアイコン画像を参照するよりもスプライトを利用シたほうが効率的です。複数のアイコン画像を1つの画像ファイルにして配置して背景画像として参照します。これはTwitter.comでより利用している方法と同じです。</p>
                      <p>多くの他のコンポーネントと同じように、適切に絞り込んだアイコンネームはすべての<code>.icon-</code>アイコンクラスは接頭辞が付きます。他のツールとの競合を避けるのに役立ちます。</p>
                      <p>私たちがドキュメント中でここでリンクとクレジットを提供する限り、Glyphiconsは、私たちのオープン・ソース・ツールキット中のHalflingsのアイコンセットの使用許可をいただきました。あなたのプロジェクトで同じことを考慮してください。 </p>
                    </div>
                    <div class="span3">
                      <h3>使い方</h3>
                      <p>V2.0.1では、すべてのアイコンのタグは<code>&lt;i&gt;</code>要素を使用することにしました。しかし、それらのケースは共有される接頭辞クラスのみにしておきません、。 </p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-search"</span><span class="tag">&gt;&lt;/i&gt;</span></li></ol></pre>
                      <p>黒アイコンを反転した白アイコンも利用可能なクラススタイルがあります</p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-search icon-white"</span><span class="tag">&gt;&lt;/i&gt;</span></li></ol></pre>
                      <p>アイコンは120種類あります。<code>&lt;i&gt;</code>タグにアイコンクラス名を追加するだけです。そうすれば、セットされます。 このドキュメントに
                        <strong>sprites.less</strong>の中の、や上記に記したリストをご参照ください。</p>
                      </div>
                      <div class="span3">
                        <h3>使用ケース</h3>
                        <p>アイコン群は素晴らしいです。しかしどこで使いますか？いくつかの例を紹介します。</p>
                        <ul>
                          <li>サイドバーのナビゲーション用のビジュアルとして</li>
                          <li>純粋なアイコン駆動型ナビゲーション</li>
                          <li>ボタンのアクションの意味を伝えるに役立つ</li>
                          <li>を持つユーザの宛先にコンテキストを共有するためのリンク</li>
                        </ul>
                        <p>どこにでも置くことができます<code>&lt;i&gt;</code>タグは、アイコンを置くことができます。</p>
                      </div>
                    </div>
                    <h3>例</h3>
                    <p>ナビゲーションツールバーのボタン、ボタングループにそれらを使用するか、フォームの入力を付加していました。</p>
                    <div class="row">
                      <div class="span3">
                        <div class="btn-toolbar" style="margin-bottom: 9px">
                          <div class="btn-group">
                            <a class="btn" href="#"><i class="icon-align-left"></i></a>
                            <a class="btn" href="#"><i class="icon-align-center"></i></a>
                            <a class="btn" href="#"><i class="icon-align-right"></i></a>
                            <a class="btn" href="#"><i class="icon-align-justify"></i></a>
                          </div>
                          <div class="btn-group">
                            <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                              <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                              <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="i"></i> Make admin</a></li>
                            </ul>
                          </div>
                        </div>
                        <p>
                          <a class="btn" href="#"><i class="icon-refresh"></i> Refresh</a>
                          <a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-white"></i> Checkout</a>
                          <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a>
                        </p>
                        <p>
                          <a class="btn btn-large" href="#"><i class="icon-comment"></i> Comment</a>
                          <a class="btn btn-small" href="#"><i class="icon-cog"></i> Settings</a>
                          <a class="btn btn-small btn-info" href="#"><i class="icon-info-sign icon-white"></i> More Info</a>
                        </p>
                      </div>
                      <div class="span3">
                        <div class="well" style="padding: 8px 0;">
                          <ul class="nav nav-list">
                            <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                            <li><a href="#"><i class="icon-book"></i> Library</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                            <li><a href="#"><i class="i"></i> Misc</a></li>
                          </ul>
                        </div>
                        <!-- /well -->
                      </div>
                      <div class="span3">
                        <form>
                          <div class="control-group">
                            <label class="control-label" for="inputIcon">Email address</label>
                            <div class="controls">
                              <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span>
                                <input class="span2" id="inputIcon" type="text">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </section>
                <!-- Button Groups
                ================================================== -->
                <section id="buttonGroups">
                  <div class="page-header">
                    <h2>ボタングループ <small>よりツールバーのような機能性のためにボタンを連結します。</small></h2>
                  </div>
                  <div class="row">
                    <div class="span3">
                      <h3>ボタングループ</h3>
                      <p>1つの合成コンポーネントとして多数のボタンをともに連結するボタン・グループが使用できます。一連の<code>&lt;a&gt;</code> もしくは <code>&lt;button&gt;</code>要素で構築してください</p>
                      <p>さらにセットを組み合わせることができます。より複雑なプロジェクトのために<code>&lt;div class="btn-toolbar"&gt;</code>の中に<code>&lt;div class="btn-group"&gt;</code>記述します </p>
                      <div class="btn-toolbar" style="margin-top: 18px;">
                        <div class="btn-group">
                          <a class="btn" href="#">Left</a>
                          <a class="btn" href="#">Middle</a>
                          <a class="btn" href="#">Right</a>
                        </div>
                      </div>
                      <div class="btn-toolbar">
                        <div class="btn-group">
                          <a class="btn" href="#">1</a>
                          <a class="btn" href="#">2</a>
                        </div>
                        <div class="btn-group">
                          <a class="btn" href="#">3</a>
                          <a class="btn" href="#">4</a>
                          <a class="btn" href="#">5</a>
                        </div>
                        <div class="btn-group">
                          <a class="btn" href="#">6</a>
                          <a class="btn" href="#">7</a>
                        </div>
                      </div>
                    </div>
                    <div class="span3">
                      <h3>マークアップ例</h3>
                      <p>ここに、アンカー・タグ・ボタンで構築された標準ボタン・グループをHTMLでの記述方法があります:</p>
                      <pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
                      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">1</span><span class="tag">&lt;/a&gt;</span><span class="pln">
                    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">2</span><span class="tag">&lt;/a&gt;</span><span class="pln">
                  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">3</span><span class="tag">&lt;/a&gt;</span><span class="pln">
                </span><span class="tag">&lt;/div&gt;</span></pre>
                <p>そして多数のグループ用のツールバーでの使用方法:</p>
                <pre class="prettyprint"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-toolbar"</span><span class="tag">&gt;</span><span class="pln">
                </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
                ...
              </span><span class="tag">&lt;/div&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span></pre>
          </div>
          <div class="span3">
            <h3>チェックボックスとラジオボタン風</h3>
            <p>ラジオボタンのような1つのボタンだけが選択した状態にすることができます、あるいは複数選択可能のチェックボックスのような動きができます。 詳しくはJavascriptドキュメントをご覧下さい。
            </p>
            <hr>
            <h4 class="muted">注目</h4>
            <p class="muted">ボタン・グループ用のCSSは個別のファイル、button-groups.lessにあります。</p>
          </div>
        </div>
      </section>
                <!-- Split button dropdowns
                ================================================== -->
                <section id="buttonDropdowns">
                  <div class="page-header">
                    <h2>ボタンのドロップダウン <small>ボタングループ上に構築されたコンテキストドロップダウンメニュー</small></h2>
                  </div>
                  <div class="row">
                    <div class="span3">
                      <h3>ボタンのドロップダウン</h3>
                      <p>内に配置することにより、ドロップダウンメニューをトリガするために任意のボタンを使用してください。<code>.btn-group</code>と適切なメニューのマークアップを提供しています。</p>
                      <div class="btn-toolbar" style="margin-top: 18px;">
                        <div class="btn-group">
                          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">アクション</a></li>
                            <li><a href="#">別アクション</a></li>
                            <li><a href="#">ここで何か他のもの</a></li>
                            <li class="divider"></li>
                            <li><a href="#">区切られたリンク</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">アクション</a></li>
                            <li><a href="#">別アクション</a></li>
                            <li><a href="#">ここで何か他のもの</a></li>
                            <li class="divider"></li>
                            <li><a href="#">区切られたリンク</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">Danger <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">アクション</a></li>
                            <li><a href="#">別アクション</a></li>
                            <li><a href="#">ここで何か他のもの</a></li>
                            <li class="divider"></li>
                            <li><a href="#">区切られたリンク</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                      </div>
                      <div class="btn-toolbar">
                        <div class="btn-group">
                          <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Success <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">アクション</a></li>
                            <li><a href="#">別アクション</a></li>
                            <li><a href="#">ここで何か他のもの</a></li>
                            <li class="divider"></li>
                            <li><a href="#">区切られたリンク</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">Info <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">アクション</a></li>
                            <li><a href="#">別アクション</a></li>
                            <li><a href="#">ここで何か他のもの</a></li>
                            <li class="divider"></li>
                            <li><a href="#">区切られたリンク</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                      </div>
                    </div>
                    <div class="span6">
                      <h3>マークアップ例</h3>
                      <p>ボタングループと同様に、我々のマークアップは通常のボタンのマークアップを使用していますが、しか しスタイルを洗練し、かつ改修中改修中のdropdown jQuery pluginを使用しています。</p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">Action</span></li><li class="L3"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span></li><li class="L4"><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L6"><span class="com">&lt;!-- dropdown menu links --&gt;</span></li><li class="L7"><span class="tag">&lt;/ul&gt;</span></li><li class="L8"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <div class="row">
                    <div class="span3">
                      <h3>分離したドロップダウンボタン</h3>
                      <p>ボタン・グループ文体および値上げに基礎を置くと、私たちは容易に分離したボタンを作成することができます。 分離したボタンは、左側に対する標準行為、および文脈上のリンクを備えた右側上のdropdownトグルを特色とします。
                      </p>
                      <div class="btn-toolbar" style="margin-top: 18px;">
                        <div class="btn-group">
                          <a class="btn" href="#">Action</a>
                          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#">Action</a>
                          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                          <a class="btn btn-danger" href="#">Danger</a>
                          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                      </div>
                      <div class="btn-toolbar">
                        <div class="btn-group">
                          <a class="btn btn-success" href="#">Success</a>
                          <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="btn-group">
                          <a class="btn btn-info" href="#">Info</a>
                          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                      </div>
                    </div>
                    <div class="span6">
                      <h3>Example markup</h3>
                      <p> 我々は独立したドロップダウンをトリガーとして動作する第二ボタンのアクションを提供するために、通常のボタンのドロップダウンに展開します。 </p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn-group"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L3"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span></li><li class="L4"><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L6"><span class="com">&lt;!-- dropdown menu links --&gt;</span></li><li class="L7"><span class="tag">&lt;/ul&gt;</span></li><li class="L8"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                </section>
                <!-- Nav, Tabs, & Pills
                ================================================== -->
                <section id="navs">
                  <div class="page-header">
                    <h2>ナビゲーション、タブ、およびナビボタン<small>高度にカスタマイズ可能なリストスタイルのナビゲーション</small></h2>
                  </div>
                  <h3>軽量のデフォルト<small>同じマークアップ、異なるクラス</small></h3>
                  <div class="row">
                    <div class="span3">
                      <h4>強力な基底クラス</h4>
                      <p>すべてのnavコンポーネントここにタブ(錠剤)、また<code>.nav</code> クラスによって 同じベースのマークアップとスタイルを共有。</p>
                      <h4>するときに使用する</h4>
                      <p>タブやナビボタンは、コンテンツまたは関連するコンテンツのページ間をナビゲートセクションのために大きいです。</p>
                      <h4>コンポーネントの整列</h4>
                      <p>ナビゲーションリンクを整列させるためには、<code>.pull-left</code>クラスか<code>.pull-right</code>クラスを使用してください。 両方のクラスは、指定された方向にCSSのfloatを追加します。 </p>
                    </div>
                    <div class="span3">
                      <h4>基本的なタブ</h4>
                      <p>定期的に取る<code>&lt;ul&gt;</code>のリンクを追加し<code>.nav-tabs</code>タブを加えます。 </p>
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h4>Basic pills</h4>
                      <p>その同じHTMLをとってください。ただし、<code>.nav-pills</code>を代わりに使用してください:</p>
                      <ul class="nav nav-pills">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-pills"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">...</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <h3>スタッカブル<small>確認タブまたは垂直ナビボタン</small></h3>
                  <div class="row">
                    <div class="span3">
                      <h4>'emをスタックする方法</h4>
                      <p>タブやナビボタンは、デフォルトでは水平なので、2番目のクラスをそれらを垂直に積み重ね表示されるように、<code>.nav-stacked</code>クラスを追加。</p>
                    </div>
                    <div class="span3">
                      <h4>積み上げタブ</h4>
                      <ul class="nav nav-tabs nav-stacked">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs nav-stacked"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h3>スタックされたナビボタン</h3>
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-pills nav-stacked"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <h3>ドロップダウン<small>高度なナビゲーション·コンポーネントの場合</small></h3>
                  <div class="row">
                    <div class="span3">
                      <h4>豊富なメニューが簡単に</h4>
                      <p>改修中改修中のタブおよびナビボタンのドロップダウンメニューは非常に容易で、ほんの少しのタグと軽量のjQuery pluginが必要です。</p>
                      <p>改修中改修中中のドロップダウンの初期化についてのドキュメントを読むために<a href="">Javascript</a>ページ上へでご覧になれます。</p>
                    </div>
                    <div class="span3">
                      <h4>ドロップダウンのタブ</h4>
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-toggle"</span></li><li class="L3"><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span></li><li class="L4"><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">Dropdown</span></li><li class="L6"><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span></li><li class="L7"><span class="tag">&lt;/a&gt;</span></li><li class="L8"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L9"><span class="com">&lt;!-- links --&gt;</span></li><li class="L0"><span class="tag">&lt;/ul&gt;</span></li><li class="L1"><span class="tag">&lt;/li&gt;</span></li><li class="L2"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h4>ドロップダウンのナビボタン</h4>
                      <ul class="nav nav-pills">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-pills"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-toggle"</span></li><li class="L3"><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"dropdown"</span></li><li class="L4"><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">Dropdown</span></li><li class="L6"><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span></li><li class="L7"><span class="tag">&lt;/a&gt;</span></li><li class="L8"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span></li><li class="L9"><span class="com">&lt;!-- links --&gt;</span></li><li class="L0"><span class="tag">&lt;/ul&gt;</span></li><li class="L1"><span class="tag">&lt;/li&gt;</span></li><li class="L2"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <h3>ナビゲーションリスト<small>ナビリストは単純な積み重ねられたサイドバーを構築します。</small></h3>
                  <div class="row">
                    <div class="span3">
                      <h4>アプリケーションスタイルのナビゲーション</h4>
                      <p>ナビリストは、OS Xの中のファインダのようなサイドバーの中で最も使用されるオプションのheaders.ナビリンクのグループを構築する、単純で容易な方法を提供します。</p>
                      <p>構造上、それらはタブとナビボタンと同じ中核ナビスタイルに構築されます。したがって、使用法とカスタマイゼーションは真直ぐです。</p>
                      <h5>アイコン</h5>
                      <p>さらに、ナビリストはアイコンを装備するのが簡単です。クラスを備えた適切な<code>&lt;i&gt;</code>タグを加えてください。そうすれば、セットされます</p>
                    </div>
                    <div class="span3">
                      <h4>ナビリスト例</h4>
                      <p>リンクのリストを取得して <code>class="nav nav-list"</code>クラスを追加:</p>
                      <div class="well" style="padding: 8px 0;">
                        <ul class="nav nav-list">
                          <li class="nav-header">List header</li>
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="#">Library</a></li>
                          <li><a href="#">Applications</a></li>
                          <li class="nav-header">Another list header</li>
                          <li><a href="#">Profile</a></li>
                          <li><a href="#">Settings</a></li>
                          <li><a href="#">Help</a></li>
                        </ul>
                      </div>
                      <!-- /well -->
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-list"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav-header"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">List header</span></li><li class="L3"><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span></li><li class="L5"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="tag">&lt;/li&gt;</span></li><li class="L7"><span class="tag">&lt;li&gt;</span></li><li class="L8"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Library</span><span class="tag">&lt;/a&gt;</span></li><li class="L9"><span class="tag">&lt;/li&gt;</span></li><li class="L0"><span class="pln">...</span></li><li class="L1"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h4>アイコン使用例</h4>
                      <p><code>&lt;i&gt;</code>タグでアイコンを使用した同じ例です。</p>
                      <div class="well" style="padding: 8px 0;">
                        <ul class="nav nav-list">
                          <li class="nav-header">List header</li>
                          <li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
                          <li><a href="#"><i class="icon-book"></i> Library</a></li>
                          <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                          <li class="nav-header">Another list header</li>
                          <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="icon-flag"></i> Help</a></li>
                        </ul>
                      </div>
                      <!-- /well -->
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-list"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">...</span></li><li class="L2"><span class="tag">&lt;li&gt;</span></li><li class="L3"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L4"><span class="tag">&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"icon-book"</span><span class="tag">&gt;&lt;/i&gt;</span></li><li class="L5"><span class="pln">Library</span></li><li class="L6"><span class="tag">&lt;/a&gt;</span></li><li class="L7"><span class="tag">&lt;/li&gt;</span></li><li class="L8"><span class="pln">...</span></li><li class="L9"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <h3>タブナビ<small>javascriptを経由して生活にタブを持参</small></h3>
                  <div class="row">
                    <div class="span3">
                      <h4>含まれるもの</h4>
                      <p>タブを介してコンテンツを切り替えるためのシンプルなプラグインでの生活に、タブを持参してください。トップ（デフォルト）、右、下、左：改修中改修中は、4つのスタイルでtabbableタブを統合しています。</p>
                      <p>それらの間の変更は簡単であり、唯一のほと&#8203;&#8203;んどのマークアップを変更する必要があります。</p>
                    </div>
                    <div class="span3">
                      <h4>タブナビ例</h4>
                      <p>タブナビにするには、<code>.nav-tabs</code>クラスを持つ別のdivで<code>.tabbable</code>クラスをくくる</p>
                      <div class="tabbable" style="margin-bottom: 9px;">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#1" data-toggle="tab">Section 1</a></li>
                          <li><a href="#2" data-toggle="tab">Section 2</a></li>
                          <li><a href="#3" data-toggle="tab">Section 3</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="1">
                            <p>I'm in Section 1.</p>
                          </div>
                          <div class="tab-pane" id="2">
                            <p>Howdy, I'm in Section 2.</p>
                          </div>
                          <div class="tab-pane" id="3">
                            <p>What up girl, this is Section 3.</p>
                          </div>
                        </div>
                      </div>
                      <!-- /tabbable -->
                    </div>
                    <div class="span3">
                      <h4>カスタムjQueryプラグイン</h4>
                      <p>すべてのタブナビは軽量のjQueryプラグインによって供給されます。JavaScriptをドキュメントページ上の生命にタブナビをもたらす方法の詳細についてをお読みください。</p>
                    </div>
                  </div>
                  <h4>簡単なマーク例</h4>
                  <p>タブバブルを使用して折り返しのdiv、一連のタブ、およびコンテンツのタブバブルペインのセットが必要になります。</p>
                  <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tabbable"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#1"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"tab"</span><span class="tag">&gt;</span><span class="pln">Section 1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#2"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pun">=</span><span class="atv">"tab"</span><span class="tag">&gt;</span><span class="pln">Section 2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;/ul&gt;</span></li><li class="L5"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tab-content"</span><span class="tag">&gt;</span></li><li class="L6"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tab-pane active"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span></li><li class="L7"><span class="tag">&lt;p&gt;</span><span class="pln">I'm in Section 1.</span><span class="tag">&lt;/p&gt;</span></li><li class="L8"><span class="tag">&lt;/div&gt;</span></li><li class="L9"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tab-pane"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;</span></li><li class="L0"><span class="tag">&lt;p&gt;</span><span class="pln">Howdy, I'm in Section 2.</span><span class="tag">&lt;/p&gt;</span></li><li class="L1"><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li><li class="L3"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                  <h4>任意の方向にタブバブル</h4>
                  <div class="row">
                    <div class="span3">
                      <h4>下部タブ</h4>
                      <p>HTMLの順序を反転し、下部にタブを配置するクラスを追加します。</p>
                      <div class="tabbable tabs-below">
                        <div class="tab-content">
                          <div class="tab-pane active" id="A">
                            <p>I'm in Section A.</p>
                          </div>
                          <div class="tab-pane" id="B">
                            <p>Howdy, I'm in Section B.</p>
                          </div>
                          <div class="tab-pane" id="C">
                            <p>What up girl, this is Section C.</p>
                          </div>
                        </div>
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
                          <li><a href="#B" data-toggle="tab">Section 2</a></li>
                          <li><a href="#C" data-toggle="tab">Section 3</a></li>
                        </ul>
                      </div>
                      <!-- /tabbable -->
                      <pre class="prettyprint linenums" style="margin-top: 11px;"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tabbable tabs-below"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tab-content"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">...</span></li><li class="L3"><span class="tag">&lt;/div&gt;</span></li><li class="L4"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">...</span></li><li class="L6"><span class="tag">&lt;/ul&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h5>左側のタブ</h5>
                      <p>左側にタブを配置するクラスを入れ替えます。</p>
                      <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#lA" data-toggle="tab">Section 1</a></li>
                          <li><a href="#lB" data-toggle="tab">Section 2</a></li>
                          <li><a href="#lC" data-toggle="tab">Section 3</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="lA">
                            <p>I'm in Section A.</p>
                          </div>
                          <div class="tab-pane" id="lB">
                            <p>Howdy, I'm in Section B.</p>
                          </div>
                          <div class="tab-pane" id="lC">
                            <p>What up girl, this is Section C.</p>
                          </div>
                        </div>
                      </div>
                      <!-- /tabbable -->
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tabbable tabs-left"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">...</span></li><li class="L3"><span class="tag">&lt;/ul&gt;</span></li><li class="L4"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tab-content"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">...</span></li><li class="L6"><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h5>右側のタブ</h5>
                      <p>右側にタブを配置するクラスを入れ替えます。</p>
                      <div class="tabbable tabs-right">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#rA" data-toggle="tab">Section 1</a></li>
                          <li><a href="#rB" data-toggle="tab">Section 2</a></li>
                          <li><a href="#rC" data-toggle="tab">Section 3</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="rA">
                            <p>I'm in Section A.</p>
                          </div>
                          <div class="tab-pane" id="rB">
                            <p>Howdy, I'm in Section B.</p>
                          </div>
                          <div class="tab-pane" id="rC">
                            <p>What up girl, this is Section C.</p>
                          </div>
                        </div>
                      </div>
                      <!-- /tabbable -->
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tabbable tabs-right"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"nav nav-tabs"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">...</span></li><li class="L3"><span class="tag">&lt;/ul&gt;</span></li><li class="L4"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tab-content"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">...</span></li><li class="L6"><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                </section>


                <!-- Breadcrumbs
                ================================================== -->
                <section id="breadcrumbs">
                  <div class="page-header">
                    <h2>パンくずリスト<small></small></h2>
                  </div>
                  <div class="row">
                    <div class="span5">
                      <h3>なぜそれらを使用する</h3>
                      <p>パンくずナビゲーションは、アプリケーションやサイト内ではなく、主要なナビゲーション状況をユーザに示す方法として使用されます。
                        <br> それらの使用をとても有効であるためにシンプルにしておいてください。
                        <br>
                      </p>
                      <h3>例</h3>
                      <p>それは複数のページにわたって表示される場合があります。として示され、単一の例を示します。</p>
                      <ul class="breadcrumb">
                        <li class="active">Home</li>
                      </ul>
                      <ul class="breadcrumb">
                        <li><a href="#">Home</a> <span class="divider">/</span></li>
                        <li class="active">Library</li>
                      </ul>
                      <ul class="breadcrumb">
                        <li><a href="#">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Library</a> <span class="divider">/</span></li>
                        <li class="active">Data</li>
                      </ul>
                    </div>
                    <div class="span4">
                      <h3>マークアップ</h3>
                      <p>HTML is your standard unordered list with links.</p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"breadcrumb"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;</span><span class="pln"> </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;</span><span class="pln">/</span><span class="tag">&lt;/span&gt;</span></li><li class="L3"><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;li&gt;</span></li><li class="L5"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Library</span><span class="tag">&lt;/a&gt;</span><span class="pln"> </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;</span><span class="pln">/</span><span class="tag">&lt;/span&gt;</span></li><li class="L6"><span class="tag">&lt;/li&gt;</span></li><li class="L7"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span></li><li class="L8"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Data</span><span class="tag">&lt;/a&gt;</span></li><li class="L9"><span class="tag">&lt;/li&gt;</span></li><li class="L0"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                  </div>
                </section>
                <!-- Pagination
                ================================================== -->
                <section id="pagination">
                  <div class="page-header">
                    <h2>ページネーション<small>コンテンツをページングするための2つのオプション</small></h2>
                  </div>
                  <h3>マルチアイコンページネーション</h3>
                  <div class="row">
                    <div class="span3">
                      <h4>するときに使用する</h4>
                      <p>アプリと検索結果の表示に初期設定で公開になって、大きな触発され、超単純で最小限のスタイルページネーション。大きなブロックを簡単にスケーラブルで、見逃すことは困難である、大規模クリック領域を提供します。</p>
                      <h4>ステートフルなページへのリンク</h4>
                      <p>リンクはカスタマイズ可能で、正しいクラスを備えた多くの状況で動きます。クリック可能でないリンクは<code>.disabled</code>クラスを、そして現在のページでは<code>.active</code>を使用します</p>
                      <h4>柔軟な配置</h4>
                      <p>改ページのリンクの配置を変更するには、2つのオプションのクラスのいずれかを追加します。<code>.pagination-centered</code>クラスもしくは<code>.pagination-right</code>クラス。</p>
                    </div>
                    <div class="span3">
                      <h4>例</h4>
                      <p>デフォルトのページネーションのコンポーネントは柔軟性があり、バリエーションの数で動作します。</p>
                      <div class="pagination">
                        <ul>
                          <li class="disabled"><a href="#">«</a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">»</a></li>
                        </ul>
                      </div>
                      <div class="pagination">
                        <ul>
                          <li><a href="#">«</a></li>
                          <li><a href="#">10</a></li>
                          <li class="active"><a href="#">11</a></li>
                          <li><a href="#">12</a></li>
                          <li><a href="#">»</a></li>
                        </ul>
                      </div>
                      <div class="pagination">
                        <ul>
                          <li><a href="#">←</a></li>
                          <li class="active"><a href="#">10</a></li>
                          <li class="disabled"><a href="#">...</a></li>
                          <li><a href="#">20</a></li>
                          <li><a href="#">→</a></li>
                        </ul>
                      </div>
                      <div class="pagination pagination-centered">
                        <ul>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="span3">
                      <h4>マークアップ</h4>
                      <p><code>&lt;div&gt;</code>要素のページネーションクラスは, <code>&lt;ul&gt;</code>要素を使用します。</p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Prev</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span></li><li class="L4"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">1</span><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="tag">&lt;/li&gt;</span></li><li class="L6"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">3</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L8"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">4</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L9"><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Next</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L0"><span class="tag">&lt;/ul&gt;</span></li><li class="L1"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <!-- /row -->
                  <h2>ページャー <small>迅速に前と次のリンクについて</small></h2>
                  <div class="row">
                    <div class="span3">
                      <h3>ページャーについて</h3>
                      <p>ページャー・コンポーネントは、ブログまたはマガジンのような単純なサイトのマークアップと軽量化にもスタイルを持つシンプルなページネーションを実装するためのリンクのセットです。</p>
                    </div>
                    <div class="span3">
                      <h3>デフォルトの例</h3>
                      <p>デフォルトでは、ページャーはセンタリングしています</p>
                      <ul class="pager">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pager"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Previous</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;li&gt;</span></li><li class="L5"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Next</span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="tag">&lt;/li&gt;</span></li><li class="L7"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h3>整列のリンク</h3>
                      <p>また、両側に各リンクを位置合わせすることができます。</p>
                      <ul class="pager">
                        <li class="previous"><a href="#">← Older</a></li>
                        <li class="next"><a href="#">Newer →</a></li>
                      </ul>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pager"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"previous"</span><span class="tag">&gt;</span></li><li class="L2"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">&amp;larr; Older</span><span class="tag">&lt;/a&gt;</span></li><li class="L3"><span class="tag">&lt;/li&gt;</span></li><li class="L4"><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"next"</span><span class="tag">&gt;</span></li><li class="L5"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Newer &amp;rarr;</span><span class="tag">&lt;/a&gt;</span></li><li class="L6"><span class="tag">&lt;/li&gt;</span></li><li class="L7"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <!-- /row -->
                </section>
                <!-- Labels
                ================================================== -->
                <section id="labels">
                  <div class="page-header">
                    <h2>インラインラベル<small>ラベルと注釈テキスト</small></h2>
                  </div>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ラベル</th>
                        <th>マークアップ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="label">Default</span>
                        </td>
                        <td>
                          <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-success">Success</span>
                        </td>
                        <td>
                          <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-warning">Warning</span>
                        </td>
                        <td>
                          <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-important">Important</span>
                        </td>
                        <td>
                          <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="label label-info">Info</span>
                        </td>
                        <td>
                          <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </section>
                <!-- Badges
                ================================================== -->
                <section id="badges">
                  <div class="page-header">
                    <h2>バッジ <small>インジケータおよび未読件数</small></h2>
                  </div>
                  <div class="row">
                    <div class="span3">
                      <h4>バッジについて</h4>
                      <p>バッジが何らかの指標やカウントを表示するための、小型でシンプルなコンポーネントです。これらは一般的にMail.appのようなまたはプッシュ通知のための携帯アプリのメールクライアントで利用されます。</p>
                    </div>
                    <!-- /.span -->
                    <div class="span6">
                      <h3>利用できるクラス</h3>
                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Example</th>
                            <th>Markup</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              Default
                            </td>
                            <td>
                              <span class="badge">1</span>
                            </td>
                            <td>
                              <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Success
                            </td>
                            <td>
                              <span class="badge badge-success">2</span>
                            </td>
                            <td>
                              <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Warning
                            </td>
                            <td>
                              <span class="badge badge-warning">4</span>
                            </td>
                            <td>
                              <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Important
                            </td>
                            <td>
                              <span class="badge badge-important">6</span>
                            </td>
                            <td>
                              <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Info
                            </td>
                            <td>
                              <span class="badge badge-info">8</span>
                            </td>
                            <td>
                              <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Inverse
                            </td>
                            <td>
                              <span class="badge badge-inverse">10</span>
                            </td>
                            <td>
                              <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.span -->
                  </div>
                  <!-- /.row -->
                </section>

                <!-- Thumbnails
                ================================================== -->
                <section id="thumbnails">
                  <div class="page-header">
                    <h2>モーダルウィンドウ</h2>
                    <span class="btn btn-warning btn-large" id="js-modal-demo">現在セッティングのデモを確認する</span>
                  </div>
                </section>
                <!-- Alerts & Messages
                ================================================== -->
                <section id="alerts">
                  <div class="page-header">
                    <h2>アラート <small>成功、警告、およびエラーメッセージのスタイル</small></h2>
                  </div>
                  <h3>軽量デフォルト</h3>
                  <div class="row">
                    <div class="span3">
                      <h4>書き換えられた基底クラス</h4>
                      <p>改修中改修中2では、我々は、基本クラスを簡素化しました。<code>.alert</code>の代わりに<code>.alert-message</code>が表示されます。また、最低限必要なマークアップには減少したちょうど外側の <code>&lt;div&gt;</code>や<code>&lt;p&gt;</code>はデフォルトでは必要ありません。</p>
                      <h4>単一のアラートメッセージ</h4>
                      <p>少ないコードでより耐久性のあるコンポーネントについて、我々は、ブロック、アラート、より多くのパディング、通常より多くのテキストが付属してメッセージの差別化を見て削除しました。クラスには、<code>.alert-block</code>に変更されました。 </p>
                      <hr>
                      <h4>javascriptで大きな行く</h4>
                      <p>改修中改修中は、彼らが迅速かつ容易に却下することは、警告メッセージをサポートして偉大なjQueryプラグインが付属しています。</p>
                    </div>
                    <div class="span6">
                      <h4>アラート例</h4>
                      <p>あなたのメッセージと単純なクラスを持つdivのオプションの[閉じる]アイコンをラップします。</p>
                      <div class="alert">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>警告！</strong> 自己チェック、あまりにも格好悪い。
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"close"</span><span class="pln"> </span><span class="atn">data-dismiss</span><span class="pun">=</span><span class="atv">"alert"</span><span class="tag">&gt;</span><span class="pln">×</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="tag">&lt;strong&gt;</span><span class="pln">警告！</span><span class="tag">&lt;/strong&gt;</span><span class="pln"> 自己チェック, あまりにも格好悪い。</span></li><li class="L3"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                      <p>簡単に2つのオプションクラスを使用して標準の警告メッセージをパディングおよびテキストコントロール拡張した<code>.alert-block</code>見出しマッチングのために、<code>.alert-heading</code>。</p>
                      <div class="alert alert-block">
                        <a class="close" data-dismiss="alert">×</a>
                        <h4 class="alert-heading">警告！</h4>
                        <p>自己チェック、あまりにも格好悪い！テストテストテストサンプルサンプルサンプルテストテストテストサンプルサンプルサンプルテストテストテストサンプルサンプルサンプル</p>
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert alert-block"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"close"</span><span class="pln"> </span><span class="atn">data-dismiss</span><span class="pun">=</span><span class="atv">"alert"</span><span class="tag">&gt;</span><span class="pln">×</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="tag">&lt;h4</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert-heading"</span><span class="tag">&gt;</span><span class="pln">警告！</span><span class="tag">&lt;/h4&gt;</span></li><li class="L3"><span class="pln">  自己チェック、あまりにも格好悪い...</span></li><li class="L4"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <h2>文脈上の選択肢 <small>アラートの含蓄を変更するには、オプションクラスを追加</small></h2>
                  <div class="row">
                    <div class="span3">
                      <h3>エラーや危険</h3>
                      <div class="alert alert-error">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>おおっと！</strong> いくつかを変更して、再度送信してください。
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert alert-error"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h3>成功</h3>
                      <div class="alert alert-success">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>よくやった！</strong> あなたは成功し、この重要な警告メッセージを読んでください。</div>
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert alert-success"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                      </div>
                      <div class="span3">
                        <h3>情報</h3>
                        <div class="alert alert-info">
                          <a class="close" data-dismiss="alert">×</a>
                          <strong>気をつけろ！</strong> この警告は、あなたの注意を必要とするが、それほど重要ではありません。
                        </div>
                        <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert alert-info"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                      </div>
                    </div>
                  </section>
                <!-- Progress bars
                ================================================== -->
                <section id="progress">
                  <div class="page-header">
                    <h2>プログレスバー<small>読み込み、リダイレクト、またはアクションのステータスについて</small></h2>
                  </div>
                  <h3>マークアップ例</h3>
                  <div class="row">
                    <div class="span3">
                      <h4>基本</h4>
                      <p>垂直方向のグラデーションデフォルトのプログレスバー。</p>
                      <div class="progress">
                        <div class="bar" style="width: 60%;"></div>
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"progress"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"bar"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">60</span><span class="pun">%;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h4>縞模様</h4>
                      <p>縞模様の効果を作成するために勾配を使用しています。</p>
                      <div class="progress progress-info progress-striped">
                        <div class="bar" style="width: 20%;"></div>
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"progress progress-info progress-striped"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"bar"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">20</span><span class="pun">%;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <div class="span3">
                      <h4>アニメーション</h4>
                      <p>縞模様の例とアニメーションそれを取る。</p>
                      <div class="progress progress-danger progress-striped active">
                        <div class="bar" style="width: 45%"></div>
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"progress progress-danger progress-striped active"</span><span class="tag">&gt;</span></li><li class="L1"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"bar"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40</span><span class="pun">%;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                  </div>
                  <h3>オプションとブラウザのサポー</h3>
                  <div class="row">
                    <div class="span3">
                      <h4>追加の色</h4>
                      <p>プログレスバーは、同様のスタイルのボタンやアラートと同じクラス名の一部を利用しています。</p>
                      <ul>
                        <li><code>.progress-info</code></li>
                        <li><code>.progress-success</code></li>
                        <li><code>.progress-danger</code></li>
                      </ul>
                      <p>また、より少ないファイルをカスタマイズして独自の色とサイズをロールバックすることができます。</p>
                    </div>
                    <div class="span3">
                      <h4>行動</h4>
                      <p>動的にjavascriptを経由して幅を調整する場合は、プログレスバーは、CSS3のトランジションを使用するので、それがスムーズにサイズが変更されます。</p>
                      <p><code>.active</code>クラス使用した場合、<code>.progress-striped</code>のプログレスバーが左から右にストライプをアニメートします。 </p>
                    </div>
                    <div class="span3">
                      <h4>ブラウザのサポート</h4>
                      <p>プログレスバーがすべてのそれらの効果を達成するためにCSS3グラデーション、トランジション、アニメーションを使用しています。これらの機能は、Firefoxの古いバージョンやIE7-8それ以前のバージョンでサポートされていません。</p>
                      <p>Operaは、この時点ではアニメーションをサポートしていません。</p>
                    </div>
                  </div>
                </section>
                <!-- Miscellaneous
                ================================================== -->
                <section id="misc">
                  <div class="page-header">
                    <h2>その他<small>軽量のユーティリティ·コンポーネント</small></h2>
                  </div>
                  <div class="row">
                    <div class="span5">
                      <h3>ウェルズ</h3>
                      <p>それをはめ込み効果を与えるために、要素の単純なエフェクトとしてよく使用してください。</p>
                      <div class="well">
                        見よ！でかした！
                      </div>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"well"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
                    </div>
                    <!--/span-->
                    <div class="span4">
                      <h3>アイコンを閉じます。</h3>
                      <p>モーダルウィンドウの警告のようなコンテンツを却下するための汎用閉じるアイコンを使用しています。</p>
                      <p><a class="close" style="float: none;">×</a></p>
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"close"</span><span class="tag">&gt;</span><span class="pln">&amp;times;</span><span class="tag">&lt;/button&gt;</span></li></ol></pre> IOSデバイスでのアンカーを使用する場合は、、クリックイベントのhref="#"をする必要があります。
                      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"close"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">&amp;times;</span><span class="tag">&lt;/a&gt;</span></li></ol></pre>
                    </div>
                    <!--/span-->
                  </div>
                  <!--/row-->
                </section>
              </div>
              <!--//row-->
              <!--//row-->
            </div>
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
