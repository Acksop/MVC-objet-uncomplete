<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Démo FbootStrap - Site2</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/fbootstrap.css">
  <link rel="stylesheet" href="/css/docs.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
 <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
		<h1>Projet site2</h1>
  </header>
  <div role="main">
	<div class="container canvas">
    
    <div class="topbar" data-scrollspy="scrollspy">
      <div class="topbar-inner">
        <div class="container canvas">
          <a class="brand" href="/demo-javascript-fBootstrap.html">Retour aux exemples Javascript</a>
          <ul class="nav">
            <li class="active"><a href="#overview">Overview</a></li>
            <li><a href="#grid-system">Grid</a></li>
            <li><a href="#typography">Type</a></li>
            <li><a href="#media">Media</a></li>
            <li><a href="#tables">Tables</a></li>
            <li><a href="#forms">Forms</a></li>
            <li><a href="#navigation">Navigation</a></li>
            <li><a href="#alerts">Alerts</a></li>
            <li><a href="#popovers">Popovers</a></li>
            <li><a href="#javascript">Javascript</a></li>
          </ul>
        </div>
      </div>
    </div>
    
<section id="overview">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Demo of Fbootstrap - Styled Facebook's CSS Bootstrap</h1>
        <p>
            Fbootstrapp is a toolkit designed to kickstart development of facebook iframe apps in both relevant sizes.
            It includes base CSS and HTML for typography, forms, buttons, tables, grids, navigation, and more, styled in the typical facebook look and feel.
        <p>
        <p><a href="http://github.com/ckrack/fbootstrapp" class="btn primary large">Visit the github project &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span-one-third">
          <h2>Based on Bootstrap</h2>
          <p>Fbootstrap is based on Twitter's excellent Bootstrap, as the name might indicate.</p>
          <p><a class="btn" href="http://twitter.github.com/bootstrap">View details &raquo;</a></p>
        </div>
        <div class="span-one-third">
          <h2>Built with less</h2>
           <p>Fbootstrapp comes with the same less goodness as Bootstrap.</p>
       </div>
        <div class="span-one-third">
          <h2>Styled for Facebook</h2>
          <p>As some researchers found out, it is more intuitive for users to style elements within apps and fanpages in the same look as the parenting facebook site.</p>
          <p><a class="btn primary" href="#typography">View details &raquo;</a></p>
        </div>
      </div>
      
      <div class="row">
        <div class="span-one-third">
          <h5 class="tab">Build fanpage tabs</h5>
          <p>Fbootstrapp includes a 520px grid perfectly suited to create fanpage tabs.</p>
          <p><a class="btn" href="#grid-system">View details &raquo;</a></p>
        </div>
        <div class="span-one-third">
          <h5 class="tab">Build canvas apps</h5>
           <p>Additionally to the 520px grid, a 760px grid suitable to the bigger standalone app canvas is included.</p>
          <p><a class="btn" href="#grid-system">View details &raquo;</a></p>
       </div>
        <div class="span-one-third">
          <h5 class="tab">
            Twitter
            <a href="http://twitter.com/clmnsk" class="pull-right">@clmnsk</a>
          </h5>
          <p>Go and build awesome apps for facebook! Then tell me about it on twitter:</p>
          <p>
              <a href="https://twitter.com/clmnsk" class="twitter-follow-button pull-right" data-show-count="false">Follow @clmnsk</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </p>
        </div>
      </div>
      
</section>      


<!-- Grid system
================================================== -->
<section id="grid-system">
  <div class="page-header">
    <h1>Grid system <small>Rock the standard grid or create your own</small></h1>
  </div>
  <h2>Default grids</h2>
  <p>
    The default grid systems provided as part of FBootstrappp are a 760px and a 520px wide 12-column grids.
    They are a flavor of the popular 960 grid system, but without the additional margin/padding on the left and right sides.
  </p>
  <h3>760 px grid</h3>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span6"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    ...</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span10"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">    ...</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
  <div class="row show-grid" title="12 column layout">
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
    <div class="span1">1</div>
  </div><!-- /row -->
  <div class="row show-grid" title="6 column layout">
    <div class="span2">2</div>
    <div class="span2">2</div>
    <div class="span2">2</div>
    <div class="span2">2</div>
    <div class="span2">2</div>
    <div class="span2">2</div>
  </div><!-- /row -->
  <div class="row show-grid" title="4 column layout">
    <div class="span3">3</div>
    <div class="span3">3</div>
    <div class="span3">3</div>
    <div class="span3">3</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Three column layout">
    <div class="span4">4</div>
    <div class="span4">4</div>
    <div class="span4">4</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Default three column layout">
    <div class="span-one-third">1/3</div>
    <div class="span-one-third">1/3</div>
    <div class="span-one-third">1/3</div>
  </div><!-- /row -->
  <div class="row show-grid" title="One-third and two-thirds layout">
    <div class="span-one-third">1/3</div>
    <div class="span-two-thirds">2/3</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Irregular three column layout">
    <div class="span2">2</div>
    <div class="span5">5</div>
    <div class="span5">5</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Half and half">
    <div class="span6">6</div>
    <div class="span6">6</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Example uncommon two-column layout">
    <div class="span3">3</div>
    <div class="span9">9</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Unnecessary single column layout">
    <div class="span12">12</div>
  </div><!-- /row -->

  <br>

  <h2>Offsetting columns</h2>
  <div class="row show-grid">
    <div class="span4">4</div>
    <div class="span4 offset4">4 offset 4</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span-one-third offset-two-thirds">1/3 offset 2/3s</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span4 offset2">4 offset 2</div>
    <div class="span4 offset2">4 offset 2</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span10 offset2">10 offset 2</div>
  </div><!-- /row -->

  <br>

  <div class="row">
    <div class="span4">
      <h2>Nesting columns</h2>
      <p>Nest your content if you must by creating a <code>.row</code> within an existing column.</p>
    </div>
    <div class="span12">
      <h4>Example of nested columns</h4>
      <div class="row show-grid">
        <div class="span12">
          Level 1 of column
          <div class="row show-grid">
            <div class="span6">
              Level 2
            </div>
            <div class="span6">
              Level 2
            </div>
          </div>
        </div>
      </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span12"</span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">    Level 1 of column</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"row"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span6"</span><span class="tag">&gt;</span></li><li class="L5"><span class="pln">        Level 2</span></li><li class="L6"><span class="pln">      </span><span class="tag">&lt;/div&gt;</span></li><li class="L7"><span class="pln">      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"span6"</span><span class="tag">&gt;</span></li><li class="L8"><span class="pln">        Level 2</span></li><li class="L9"><span class="pln">      </span><span class="tag">&lt;/div&gt;</span></li><li class="L0"><span class="pln">    </span><span class="tag">&lt;/div&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L2"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="span10">
      <h2>Roll your own grid</h2>
      <p>Built into Bootstrap are a handful of variables for customizing the default grid system. With a bit of customization, you can modify the size of columns, their gutters, and the container they reside in.</p>
    </div>
    <div class="span12">
      <h3>Inside the grid</h3>
      <p>The variables needed to modify the grid system currently all reside in <code>variables.less</code>.</p>
      <table class="bordered-table zebra-striped">
        <thead>
          <tr>
            <th>Variable</th>
            <th>Default value</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>@gridColumns</code></td>
            <td>16</td>
            <td>The number of columns within the grid</td>
          </tr>
          <tr>
            <td><code>@gridColumnWidth</code></td>
            <td>40px</td>
            <td>The width of each column within the grid</td>
          </tr>
          <tr>
            <td><code>@gridGutterWidth</code></td>
            <td>20px</td>
            <td>The negative space between each column</td>
          </tr>
          <tr>
            <td><code>@siteWidth</code></td>
            <td><em>Computed sum of all columns and gutters</em></td>
            <td>We use some basic match to count the number of columns and gutters and set the width of the <code>.fixed-container()</code> mixin.</td>
          </tr>
        </tbody>
      </table>
      <h3>Now to customize</h3>
      <p>Modifying the grid means changing the three <code>@grid-*</code> variables and recompiling the Less files.</p>
      <p>Bootstrap comes equipped to handle a grid system with up to 24 columns; the default is just 16. Here's how your grid variables would look customized to a 24-column grid.</p>
      <pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="lit">@gridColumns</span><span class="pun">:</span><span class="pln">       </span><span class="lit">24</span><span class="pun">;</span></li><li class="L1"><span class="lit">@gridColumnWidth</span><span class="pun">:</span><span class="pln">   </span><span class="lit">20px</span><span class="pun">;</span></li><li class="L2"><span class="lit">@gridGutterWidth</span><span class="pun">:</span><span class="pln">   </span><span class="lit">20px</span><span class="pun">;</span></li></ol></pre>
      <p>Once recompiled, you'll be set!</p>
    </div>
  </div>
</section>



<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
  </div>

  <!-- Headings & Paragraph Copy -->
  <h2>Headings &amp; copy</h2>
  <p>A standard typographic hierarchy for structuring your webpages.</p>
  <p>The entire typographic grid is based on two Less variables in our variables.less file: <code>@basefont</code> and <code>@baseline</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
  <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
  <div class="row">
    <div class="span4">
      <h1>h1. Heading 1</h1>
      <h2>h2. Heading 2</h2>
      <h3>h3. Heading 3</h3>
      <h4>h4. Heading 4</h4>
      <h5>h5. Heading 5</h5>
      <h6>h6. Heading 6</h6>
    </div>
    <div class="span8">
      <h3>Example paragraph</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <h1>Example heading <small>Has sub-heading…</small></h1>
      <h5 class="tab">Tab heading<a href="#" class="pull-right">Test link</a></h1>
      <code>&lt;h5 class="tab"&gt;</code>
    </div>
  </div>

  <!-- Misc Elements -->
  <div class="row">
    <div class="span4">
      <h2>Misc. elements</h2>
      <p>Using emphasis, addresses, &amp; abbreviations</p>
      <p>
        <code>&lt;strong&gt;</code>
        <code>&lt;em&gt;</code>
        <code>&lt;address&gt;</code>
        <code>&lt;abbr&gt;</code>
      </p>
    </div>
    <div class="span12">
      <h3>When to use</h3>
      <p>Emphasis tags (<code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code>) should be used to indicate additional importance or emphasis of a word or phrase relative to its surrounding copy. Use <code>&lt;strong&gt;</code> for importance and <code>&lt;em&gt;</code> for <em>stress</em> emphasis.</p>
      <h3>Emphasis in a paragraph</h3>
      <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
      <p><strong>Note:</strong> It's still okay to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> tags in HTML5 and they don't have to be styled bold and italic, respectively (although if there is a more semantic element, use it). <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance, while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
      <h3>Addresses</h3>
      <p>The <code>&lt;address&gt;</code> element is used for contact information for its nearest ancestor, or the entire body of work. Here are two examples of how it could be used:</p>

      <div class="row">
        <div class="span4">
          <address>
            <strong>Twitter, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
        </div>
        <div class="span4">
          <address>
            <strong>Full Name</strong><br>
            <a mailto="">first.last@gmail.com</a>
          </address>
        </div>
      </div>

      <p><strong>Note:</strong> Each line in an <code>&lt;address&gt;</code> must end with a line-break (<code>&lt;br /&gt;</code>) or be wrapped in a block-level tag (e.g., <code>&lt;p&gt;</code>) to properly structure the content.</p>
      <h3>Abbreviations</h3>
      <p>For abbreviations and acronyms, use the <code>&lt;abbr&gt;</code> tag (<code>&lt;acronym&gt;</code> is deprecated in <abbr title="HyperText Markup Langugage 5">HTML5</abbr>). Put the shorthand form within the tag and set a title for the complete name.</p>
    </div>
  </div><!-- /row -->

  <!-- Blockquotes -->
  <div class="row">
    <div class="span4">
      <h2>Blockquotes</h2>
      <p>
        <code>&lt;blockquote&gt;</code>
        <code>&lt;p&gt;</code>
        <code>&lt;small&gt;</code>
      </p>
    </div>
    <div class="span12">
      <h3>How to quote</h3>
      <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around <code>&lt;p&gt;</code> and <code>&lt;small&gt;</code> tags. Use the <code>&lt;small&gt;</code> element to cite your source and you'll get an em dash <code>&amp;mdash;</code> before it.</p>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <small>Dr. Julius Hibbert</small>
      </blockquote>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;blockquote&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;p&gt;</span><span class="pln">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</span><span class="tag">&lt;/p&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;small&gt;</span><span class="pln">Dr. Julius Hibbert</span><span class="tag">&lt;/small&gt;</span></li><li class="L3"><span class="tag">&lt;/blockquote&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->

  <h2>Lists</h2>
  <div class="row">
    <div class="span4">
      <h4>Unordered <code>&lt;ul&gt;</code></h4>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span4">
      <h4>Unstyled <code>&lt;ul.unstyled&gt;</code></h4>
      <ul class="unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span4">
      <h4>Ordered <code>&lt;ol&gt;</code></h4>
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
    <div class="span4">
      <h4>Description <code>dl</code></h4>
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
  </div><!-- /row -->





  <!-- Code -->
  <div class="row">
    <div class="span4">
      <h2>Code</h2>
      <p>
        <code>&lt;code&gt;</code>
        <code>&lt;pre&gt;</code>
      </p>
      <p>Pimp your code in style with two simple tags. For even more awesomeness through javascript, drop in Google's code prettify library and you're set.</p>
    </div>
    <div class="span12">
      <h3>Presenting code</h3>
      <p>Code, blocks of or just snippets inline, can be displayed with style just by wrapping in the right tag. For blocks of code spanning multiple lines, use the <code>&lt;pre&gt;</code> element. For inline code, use the <code>&lt;code&gt;</code> element.</p>
      <table class="bordered-table zebra-striped">
        <thead>
          <tr>
            <th style="width: 190px;">Element</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>&lt;code&gt;</code></td>
            <td>In a line of text like this, your wrapped code will look like this <code>&lt;html&gt;</code> element.</td>
          </tr>
          <tr>
            <td><code>&lt;pre&gt;</code></td>
            <td>
<pre>&lt;div&gt;
  &lt;h1&gt;Heading&lt;/h1&gt;
  &lt;p&gt;Something right here...&lt;/p&gt;
&lt;/div&gt;</pre>
              <p><strong>Note:</strong> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
            </td>
          </tr>
          <tr>
            <td><code>&lt;pre class="prettyprint"&gt;</code></td>
            <td>
              <p>Using the google-code-prettify library, your blocks of code get a slightly different visual style and automatic syntax highlighting.</p>
<pre class="prettyprint"><span class="tag">&lt;div&gt;</span><span class="pln">
  </span><span class="tag">&lt;h1&gt;</span><span class="pln">Heading</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
  </span><span class="tag">&lt;p&gt;</span><span class="pln">Something right here...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
              <p><a href="http://code.google.com/p/google-code-prettify/">Download google-code-prettify</a> and view the readme for <a href="http://google-code-prettify.googlecode.com/svn/trunk/README.html">how to use</a>.</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div><!-- /row -->

  <!-- Labels -->
  <div class="row">
    <div class="span4">
      <h2>Inline labels</h2>
      <p>
        <code>&lt;span class="label"&gt;</code>
      </p>
      <p>Call attention to or flag any phrase in your body text.</p>
    </div>
    <div class="span12">
      <h3>Label anything</h3>
      <p>Ever needed one of those fancy <span class="label success">New!</span> or <span class="label important">Important</span> flags when writing code? Well, now you have them. Here's what's included by default:</p>
      <table class="bordered-table zebra-striped">
        <thead>
          <tr>
            <th style="width: 50%;">Label</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
            </td>
            <td>
              <span class="label">Default</span>
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;span class="label success"&gt;New&lt;/span&gt;</code>
            </td>
            <td>
              <span class="label success">New</span>
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;span class="label warning"&gt;Warning&lt;/span&gt;</code>
            </td>
            <td>
              <span class="label warning">Warning</span>
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;span class="label important"&gt;Important&lt;/span&gt;</code>
            </td>
            <td>
              <span class="label important">Important</span>
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;span class="label notice"&gt;Notice&lt;/span&gt;</code>
            </td>
            <td>
              <span class="label notice">Notice</span>
            </td>
          </tr>
          <tr>
            <td>
              <code>Some Text&lt;span class="label num"&gt;Numeric Indication&lt;/span&gt;</code>
            </td>
            <td>
              Some Text<span class="label num">13</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div><!-- /row -->

</section>



<!-- Media
================================================== -->
<section id="media">
  <div class="page-header">
    <h1>Media <small>Displaying images and videos</small></h1>
  </div>
  <!-- Table structure -->
  <h2>Media grid</h2>
  <p>Display thumbnails of varying sizes on pages with a low HTML footprint and minimal styles.</p>
  <div class="row">
    <div class="span12">
      <h3>Example thumbnails</h3>
      <p>Thumbnails in the <code>.media-grid</code> can be any size, but they work best when mapped directly to the built-in Bootstrap grid system. Image widths like 90, 210, and 330 combine with a few pixels of padding to equal the <code>.span2</code>, <code>.span4</code>, and <code>.span6</code> column sizes.</p>
      <h4>Large</h4>
      <ul class="media-grid">
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/360x200" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/360x200" alt="">
          </a>
        </li>
      </ul>
      <h4>Medium</h4>
      <ul class="media-grid">
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/165x140" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/165x140" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/165x140" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/165x140" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/165x140" alt="">
          </a>
        </li>
      </ul>
      <h4>Small</h4>
      <ul class="media-grid">
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/100x80" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/100x80" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/100x80" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/100x80" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/100x80" alt="">
          </a>
        </li>
        <li>
          <a href="#">
            <img class="thumbnail" src="http://placehold.it/100x80" alt="">
          </a>
        </li>
      </ul>
      <h4>Coding them</h4>
      <p>Media grids are easy to use and rather simple on the markup side. Their dimensions are purely based on the size of the images included.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"media-grid"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L3"><span class="pln">      </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"thumbnail"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"http://placehold.it/330x230"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;li&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span></li><li class="L8"><span class="pln">      </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"thumbnail"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"http://placehold.it/330x230"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span></li><li class="L9"><span class="pln">    </span><span class="tag">&lt;/a&gt;</span></li><li class="L0"><span class="pln">  </span><span class="tag">&lt;/li&gt;</span></li><li class="L1"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->
</section>



<!-- Tables
================================================== -->
<section id="tables">
  <div class="page-header">
    <h1>Tables <small>For, you guessed it, tabular data</small></h1>
  </div>
  <!-- Table structure -->
  <h2>Building tables</h2>
  <p>
    <code>&lt;table&gt;</code>
    <code>&lt;thead&gt;</code>
    <code>&lt;tbody&gt;</code>
    <code>&lt;tr&gt;</code>
    <code>&lt;th&gt;</code>
    <code>&lt;td&gt;</code>
    <code>&lt;colspan&gt;</code>
    <code>&lt;caption&gt;</code>
  </p>
  <p>Tables are great—for a lot of things. Great tables, however, need a bit of markup love to be useful, scalable, and readable (at the code level). Here are a few tips to help.</p>
  <p>Always wrap your column headers in a <code>&lt;thead&gt;</code> such that hierarchy is <code>&lt;thead&gt;</code> &gt; <code>&lt;tr&gt;</code> &gt; <code>&lt;th&gt;</code>.</p>
  <p>Similar to the column headers, all your table’s body content should be wrapped in a <code>&lt;tbody&gt;</code> so your hierarchy is <code>&lt;tbody&gt;</code> &gt; <code>&lt;tr&gt;</code> &gt; <code>&lt;td&gt;</code>.</p>
  <div class="row">
    <div class="span12">
      <h3>Example: Default table styles</h3>
      <p>All tables will be automatically styled with only the essential borders to ensure readability and maintain structure. No need to add extra classes or attributes.</p>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Some</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
        </tbody>
      </table>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
      <h3>Example: Condensed table</h3>
      <p>For tables that require more data in tighter spaces, use the condensed flavor that cuts padding in half. It can also be used in conjunction with borders and zebra-stripes, just like the default table styles.</p>
      <table class="condensed-table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Some</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
        </tbody>
      </table>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"condensed-table"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
      <h3>Example: Bordered table</h3>
      <p>Make your tables look just a wee bit sleeker by rounding their corners and adding borders on all sides.</p>
      <table class="bordered-table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Some</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <th>2</th>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <th>3</th>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
        </tbody>
      </table>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"bordered-table"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
      <h3>Example: Zebra-striped</h3>
      <p>Get a little fancy with your tables by adding zebra-striping—just add the <code>.zebra-striped</code> class.</p>
      <table class="bordered-table zebra-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Some</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
          <tr>
            <td colspan="4">
              span 4 columns
            </td>
          </tr>
          <tr>
            <td colspan="2">
              span 2 columns
            </td>
            <td colspan="2">
              span 2 columns
            </td>
          </tr>
        </tbody>
      </table>
      <p><strong>Note:</strong> Zebra-striping is a progressive enhancement not available for older browsers like IE8 and below.</p>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"zebra-striped"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  ...</span></li><li class="L2"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
      <h3>Example: Zebra-striped w/ TableSorter.js</h3>
      <p>Taking the previous example, we improve the usefulness of our tables by providing sorting functionality via <a href="http://jquery.com">jQuery</a> and the <a href="http://tablesorter.com/docs/">Tablesorter</a> plugin. <strong>Click any column’s header to change the sort.</strong></p>
      <table class="zebra-striped" id="sortTableExample">
        <thead>
          <tr>
            <th class="header">#</th>
            <th class="yellow header headerSortDown">First Name</th>
            <th class="blue header">Last Name</th>
            <th class="green header">Language</th>
          </tr>
        </thead>
        <tbody>
          
          
          
        <tr>
            <td>2</td>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr><tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr><tr>
            <td>1</td>
            <td>Your</td>
            <td>One</td>
            <td>English</td>
          </tr></tbody>
      </table>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"js/jquery/jquery.tablesorter.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span></li><li class="L1"><span class="tag">&lt;script</span><span class="pln"> </span><span class="tag">&gt;</span></li><li class="L2"><span class="pln">  $</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L3"><span class="pln">    $</span><span class="pun">(</span><span class="str">"table#sortTableExample"</span><span class="pun">).</span><span class="pln">tablesorter</span><span class="pun">({</span><span class="pln"> sortList</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[[</span><span class="lit">1</span><span class="pun">,</span><span class="lit">0</span><span class="pun">]]</span><span class="pln"> </span><span class="pun">});</span></li><li class="L4"><span class="pln">  </span><span class="pun">});</span></li><li class="L5"><span class="tag">&lt;/script&gt;</span></li><li class="L6"><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"zebra-striped"</span><span class="tag">&gt;</span></li><li class="L7"><span class="pln">  ...</span></li><li class="L8"><span class="tag">&lt;/table&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->
</section>



<!-- Forms
================================================== -->
<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>

  <h2>Default styles</h2>
  <p>All forms are given default styles to present them in a readable and scalable way. Styles are provided for text inputs, select lists, textareas, radio buttons and checkboxes, and buttons.</p>
  <div class="row">
    <div class="span12">
      <form>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label for="xlInput">X-Large input</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="normalSelect">Select</label>
            <div class="input">
              <select name="normalSelect" id="normalSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="mediumSelect">Select</label>
            <div class="input">
              <select class="medium" name="mediumSelect" id="mediumSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="multiSelect">Multiple select</label>
            <div class="input">
              <select class="medium" size="5" multiple="multiple" name="multiSelect" id="multiSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label>Uneditable input</label>
            <div class="input">
              <span class="uneditable-input">Some value here</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="disabledInput">Disabled input</label>
            <div class="input">
              <input class="xlarge disabled" id="disabledInput" name="disabledInput" size="30" type="text" placeholder="Disabled input here… carry on." disabled="">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="disabledInput">Disabled textarea</label>
            <div class="input">
              <textarea class="xxlarge" name="textarea" id="textarea" rows="3" disabled=""></textarea>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix error">
            <label for="errorInput">Input with error</label>
            <div class="input">
              <input class="xlarge error" id="errorInput" name="errorInput" size="30" type="text">
              <span class="help-inline">Small snippet of help text</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix success">
            <label for="successInput">Input with success</label>
            <div class="input">
              <input class="xlarge error" id="successInput" name="successInput" size="30" type="text">
              <span class="help-inline">Success!</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix warning">
            <label for="warningInput">Input with warning</label>
            <div class="input">
              <input class="xlarge error" id="warningInput" name="warningInput" size="30" type="text">
              <span class="help-inline">Ruh roh!</span>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label for="prependedInput">Prepended text</label>
            <div class="input">
              <div class="input-prepend">
                <span class="add-on">@</span>
                <input class="medium" id="prependedInput" name="prependedInput" size="16" type="text">
              </div>
              <span class="help-block">Here's some help text</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="prependedInput2">Prepended checkbox</label>
            <div class="input">
              <div class="input-prepend">
                <label class="add-on"><input type="checkbox" name="" id="" value=""></label>
                <input class="mini" id="prependedInput2" name="prependedInput2" size="16" type="text">
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="appendedInput">Appended checkbox</label>
            <div class="input">
              <div class="input-append">
                <input class="mini" id="appendedInput" name="appendedInput" size="16" type="text">
                <label class="add-on active"><input type="checkbox" name="" id="" value="" checked="checked"></label>
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="fileInput">File input</label>
            <div class="input">
              <input class="input-file" id="fileInput" name="fileInput" type="file">
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label id="optionsCheckboxes">List of options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option1">
                    <span>Option one is this and that—be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2">
                    <span>Option two can also be checked and included in form results</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2">
                    <span>Option three can—yes, you guessed it—also be checked and included in form results. Let's make it super long so that everyone can see how it wraps, too.</span>
                  </label>
                </li>
                <li>
                  <label class="disabled">
                    <input type="checkbox" name="optionsCheckboxes" value="option2" disabled="">
                    <span>Option four cannot be checked as it is disabled.</span>
                  </label>
                </li>
              </ul>
              <span class="help-block">
                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
              </span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label>Date range</label>
            <div class="input">
              <div class="inline-inputs">
                <input class="small" type="text" value="May 1, 2011">
                <input class="mini" type="text" value="12:00am">
                to
                <input class="small" type="text" value="May 8, 2011">
                <input class="mini" type="text" value="11:59pm">
                <span class="help-block">All times are shown as Pacific Standard Time (GMT -08:00).</span>
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="textarea">Textarea</label>
            <div class="input">
              <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
              <span class="help-block">
                Block of help text to describe the field above if need be.
              </span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label id="optionsRadio">List of options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="radio" checked="" name="optionsRadios" value="option1">
                    <span>Option one is this and that—be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="radio" name="optionsRadios" value="option2">
                    <span>Option two is something else and selecting it will deselect option 1</span>
                  </label>
                </li>
              </ul>
            </div>
          </div><!-- /clearfix -->
          <div class="actions">
            <input type="submit" class="btn primary" value="Save changes">&nbsp;<button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div><!-- /row -->

  <br>

  <div class="row">
    <div class="span4">
      <h2>Stacked forms</h2>
      <p>Add <code>.form-stacked</code> to your form’s HTML and you’ll have labels on top of their fields instead of to their left. This works great if your forms are short or you have two columns of inputs for heavier forms.</p>
    </div>
    <div class="span12">
      <form action="" class="form-stacked">
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label for="xlInput3">X-Large input</label>
            <div class="input">
              <input class="xlarge" id="xlInput3" name="xlInput3" size="30" type="text">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="stackedSelect">Select</label>
            <div class="input">
              <select name="stackedSelect" id="stackedSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix error">
            <label for="xlInput4">X-Large input</label>
            <div class="input">
              <input class="xlarge error" id="xlInput4" name="xlInput4" size="30" type="text">
              <span class="help-inline">Small snippet of help text</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label id="optionsCheckboxes">List of options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option1">
                    <span>Option one is this and that—be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2">
                    <span>Option two can also be checked and included in form results</span>
                  </label>
                </li>
              </ul>
              <span class="help-block">
                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
              </span>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <div class="actions">
          <button type="submit" class="btn primary">Save changes</button>&nbsp;<button type="reset" class="btn">Cancel</button>
        </div>
      </form>
    </div>
  </div><!-- /row -->

  <div class="row">
    <div class="span4">
      <h2>Form field sizes</h2>
      <p>Customize any form <code>input</code>, <code>select</code>, or <code>textarea</code> width by adding just a few classes to your markup.</p>
      <p>As of v1.3.0, we have added the grid-based sizing classes for form elements. <strong>Please use the these over the existing <code>.mini</code>, <code>.small</code>, etc classes.</strong></p>
    </div>
    <div class="span12">
      <form action="">
        <div class="clearfix"><input class="span2" id="" name="" type="text" placeholder=".span2"></div>
        <div class="clearfix"><input class="span3" id="" name="" type="text" placeholder=".span3"></div>
        <div class="clearfix"><input class="span4" id="" name="" type="text" placeholder=".span4"></div>
        <div class="clearfix"><input class="span5" id="" name="" type="text" placeholder=".span5"></div>
        <div class="clearfix"><input class="span6" id="" name="" type="text" placeholder=".span6"></div>
        <div class="clearfix"><input class="span7" id="" name="" type="text" placeholder=".span7"></div>
        <div class="clearfix"><input class="span8" id="" name="" type="text" placeholder=".span8"></div>
        <div class="clearfix"><input class="span9" id="" name="" type="text" placeholder=".span9"></div>
        <div class="clearfix"><input class="span10" id="" name="" type="text" placeholder=".span10"></div>
        <div class="clearfix"><input class="span11" id="" name="" type="text" placeholder=".span11"></div>
        <div class="clearfix"><input class="span12" id="" name="" type="text" placeholder=".span12"></div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="span4">
      <h2>Buttons</h2>
      <p>As a convention, buttons are used for actions while links are used for objects. For instance, "Download" could be a button and "recent activity" could be a link.</p>
      <p>All buttons default to a light gray style, but a number of functional classes can be applied for different color styles. These classes include a blue <code>.primary</code> class, a light-blue <code>.info</code> class, a green <code>.success</code> class, and a red <code>.danger</code> class.</p>
    </div>
    <div class="span12">
      <h3>Example buttons</h3>
      <p>Button styles can be applied to anything with the <code>.btn</code> applied. Typically you’ll want to apply these to only <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, and select <code>&lt;input&gt;</code> elements. Here’s how it looks:</p>
      <div class="well" style="padding: 14px 19px;">
        <button class="btn primary">Primary</button>&nbsp;<button class="btn">Default</button>&nbsp;<button class="btn info">Info</button>&nbsp;<button class="btn success">Success</button>&nbsp;<button class="btn danger">Danger</button>
      </div>
      <h3>Alternate sizes</h3>
      <p>Fancy larger or smaller buttons? Have at it!</p>
      <div class="well">
        <a href="#" class="btn large primary">Primary action</a>
        <a href="#" class="btn large">Action</a>
      </div>
      <div class="well" style="padding: 16px 19px;">
        <a href="#" class="btn small primary">Primary action</a>
        <a href="#" class="btn small">Action</a>
      </div>
      <h3>Disabled state</h3>
      <p>For buttons that are not active or are disabled by the app for one reason or another, use the disabled state. That’s <code>.disabled</code> for links and <code>:disabled</code> for <code>&lt;button&gt;</code> elements.</p>
      <h4>Links</h4>
      <div class="well">
        <a href="#" class="btn large primary disabled">Primary action</a>
        <a href="#" class="btn large disabled">Action</a>
      </div>
      <h4>Buttons</h4>
      <div class="well">
        <button class="btn large primary disabled" disabled="disabled">Primary action</button>&nbsp;<button class="btn large" disabled="">Action</button>
      </div>
    </div>
  </div><!-- /row -->
</section>



<!-- Navigation
================================================== -->
<section id="navigation">
  <div class="page-header">
    <h1>Navigation</h1>
  </div>

  <h2>Tabs and pills</h2>
  <p>Create simple secondary navigation with a <code>&lt;ul&gt;</code>. Swap between tabs or pills by adding the appropriate class.</p>
  <p>Great for sub-sections of content like our account settings pages and user timelines for toggling between pages of like content. Available in tabbed or pill styles.</p>
  <div class="row">
    <div class="span12">
      <h3>Basic tabs example</h3>
      <p>Tabs can be used as regular navigation (loading external pages in the same tab) or as tabbable content areas for swapping out panes of content. We have a <a href="./demo-javascript-fBootstrap.html#tabs">tabs plugin</a> that can be used to integrate the latter.</p>
      <ul class="tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Contact</a></li>
        <li class="dropdown" data-dropdown="dropdown">
          <a href="#" class="dropdown-toggle">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a href="#">Secondary link</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Another link</a></li>
          </ul>
        </li>
      </ul>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"tabs"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Profile</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Messages</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Settings</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Contact</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
      <h3>Basic pills example</h3>
      <ul class="pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pills"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Profile</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Messages</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Settings</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Contact</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->

  <!-- Breadcrumbs -->
  <div class="row">
    <div class="span4">
      <h2>Breadcrumbs</h2>
      <p>Breadcrumb navigation is used as a way to show users where they are within an app or a site, but not for primary navigation.</p>
    </div>
    <div class="span12">
      <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">&gt;</span></li>
        <li class="active">Middle page</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">&gt;</span></li>
        <li><a href="#">Middle page</a> <span class="divider">&gt;</span></li>
        <li class="active">Another one</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">&gt;</span></li>
        <li><a href="#">Middle page</a> <span class="divider">&gt;</span></li>
        <li><a href="#">Another one</a> <span class="divider">&gt;</span></li>
        <li class="active">You are here</li>
      </ul>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"breadcrumb"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Home</span><span class="tag">&lt;/a&gt;</span><span class="pln"> </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;</span><span class="pln">/</span><span class="tag">&lt;/span&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Middle page</span><span class="tag">&lt;/a&gt;</span><span class="pln"> </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;</span><span class="pln">/</span><span class="tag">&lt;/span&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another one</span><span class="tag">&lt;/a&gt;</span><span class="pln"> </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"divider"</span><span class="tag">&gt;</span><span class="pln">/</span><span class="tag">&lt;/span&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;</span><span class="pln">You are here</span><span class="tag">&lt;/li&gt;</span></li><li class="L5"><span class="tag">&lt;/ul&gt;</span></li></ol></pre>
    </div>
  </div>

  <!-- Pagination -->
  <div class="row">
    <div class="span4">
      <h2>Pagination</h2>
      <p>Ultra simplistic and minimally styled pagination inspired by Rdio. The large block is hard to miss, easily scalable, and provides large click areas.</p>
    </div>
    <div class="span12">
      <div class="pagination">
        <ul>
          <li class="prev disabled"><a href="#">? Previous</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="next"><a href="#">Next ?</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li class="prev"><a href="#">? Previous</a></li>
          <li class="active"><a href="#">10</a></li>
          <li><a href="#">11</a></li>
          <li><a href="#">12</a></li>
          <li class="disabled"><a href="#">…</a></li>
          <li><a href="#">19</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">21</a></li>
          <li class="next"><a href="#">Next ?</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li class="prev"><a href="#">? Previous</a></li>
          <li><a href="#">12</a></li>
          <li><a href="#">13</a></li>
          <li><a href="#">14</a></li>
          <li class="active"><a href="#">15</a></li>
          <li><a href="#">16</a></li>
          <li><a href="#">17</a></li>
          <li class="next"><a href="#">Next ?</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;ul&gt;</span></li><li class="L2"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"prev disabled"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">&amp;larr; Previous</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">3</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">4</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="pln">    </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">5</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L8"><span class="pln">    </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"next"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Next &amp;rarr;</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L9"><span class="pln">  </span><span class="tag">&lt;/ul&gt;</span></li><li class="L0"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->

</section>



<!-- Alerts & Messages
================================================== -->
<section id="alerts">
  <div class="page-header">
    <h1>Alerts &amp; Errors <small>Styles for success, warning, error, and info messages</small></h1>
  </div>
  <!-- Basic alert messages -->
  <h2>Basic alerts</h2>
  <p><code>.alert-message</code></p>
  <p>One-line messages for highlighting the failure, possible failure, or success of an action. Particularly useful for forms.</p>
  <p><a class="btn js-btn" href="./demo-javascript-fBootstrap.html#alerts">Get the javascript »</a></p>
  <div class="row">
    <div class="span12">
      <div class="alert-message warning">
        <a class="close" href="#">×</a>
        <p><strong>Holy guacamole!</strong> Best check yo self, you’re not <a href="#">looking too good</a>.</p>
      </div>
      <div class="alert-message error">
        <a class="close" href="#">×</a>
        <p><strong>Oh snap!</strong> Change this and that and <a href="#">try again</a>.</p>
      </div>
      <div class="alert-message success">
        <a class="close" href="#">×</a>
        <p><strong>Well done!</strong> You successfully <a href="#">read this</a> alert message.</p>
      </div>
      <div class="alert-message info">
        <a class="close" href="#">×</a>
        <p><strong>Heads up!</strong> This is an alert that needs your attention, but it’s not <a href="#">a huge priority</a> just yet.</p>
      </div>

      <h4>Example code</h4>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert-message warning"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"close"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">×</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;p&gt;&lt;strong&gt;</span><span class="pln">Holy guacamole!</span><span class="tag">&lt;/strong&gt;</span><span class="pln"> Best check yo self, you’re not looking too good.</span><span class="tag">&lt;/p&gt;</span></li><li class="L3"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->
  <!-- Block messages -->
  <div class="row">
    <div class="span4">
      <h2>Block messages</h2>
      <p><code>.alert-message.block-message</code></p>
      <p>For messages that require a bit of explanation, we have paragraph style alerts. These are perfect for bubbling up longer error messages, warning a user of a pending action, or just presenting information for more emphasis on the page.</p>
      <p><a class="btn js-btn" href="./demo-javascript-fBootstrap.html#alerts">Get the javascript »</a></p>
    </div>
    <div class="span12">
      <div class="alert-message block-message warning">
        <a class="close" href="#">×</a>
        <p><strong>Holy guacamole! This is a warning!</strong> Best check yo self, you’re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="alert-message block-message error">
        <a class="close" href="#">×</a>
        <p><strong>Oh snap! You got an error!</strong> Change this and that and <a href="#">try again</a>.</p>
        <ul>
          <li>Duis mollis est non commodo luctus</li>
          <li>Nisi erat porttitor ligula</li>
          <li>Eget lacinia odio sem nec elit</li>
        </ul>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="alert-message block-message success">
        <a class="close" href="#">×</a>
        <p><strong>Well done!</strong> You successfully read this alert message. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="alert-message block-message info">
        <a class="close" href="#">×</a>
        <p><strong>Heads up!</strong> This is an alert that needs your attention, but it’s not a huge priority just yet.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>

      <h4>Example code</h4>
<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert-message block-message warning"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"close"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">×</span><span class="tag">&lt;/a&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;p&gt;&lt;strong&gt;</span><span class="pln">Holy guacamole! This is a warning!</span><span class="tag">&lt;/strong&gt;</span><span class="pln"> Best check yo self, you’re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</span><span class="tag">&lt;/p&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"alert-actions"</span><span class="tag">&gt;</span></li><li class="L4"><span class="pln">    </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn small"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Take this action</span><span class="tag">&lt;/a&gt;</span><span class="pln"> </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"btn small"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Or do this</span><span class="tag">&lt;/a&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;/div&gt;</span></li><li class="L6"><span class="tag">&lt;/div&gt;</span></li></ol></pre>
    </div>
  </div><!-- /row -->
</section>



<!-- Popovers
================================================== -->
<section id="popovers">
  <div class="page-header">
    <h1>Popovers <small>Components for displaying content in modals, tooltips, and popovers</small></h1>
  </div>
  <h2>Modals</h2>
  <p>Modals—dialogs or lightboxes—are great for contextual actions in situations where it’s important that the background context be maintained.</p>
  <p><a class="btn js-btn" href="./demo-javascript-fBootstrap.html#modal">Get the javascript »</a></p>
  <div class="row">
    <div class="span12">
      <div class="well" style="background-color: #888; border: none; padding: 40px;">
        <!-- Modal -->
        <div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1">
          <div class="modal-header">
            <a href="#" class="close">×</a>
            <h3>Modal Heading</h3>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn primary">Primary</a>
            <a href="#" class="btn secondary">Secondary</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /row -->

  <!-- Tooltips --
  <div class="row">
    <div class="span4">
      <h2>Tooltips</h2>
      <p>Twipsies are super useful for aiding a confused user and pointing them in the right direction.</p>
      <p><a class="btn js-btn" href="./javascript.html#twipsy">Get the javascript »</a></p>
    </div>
    <div class="span12">
      <div class="twipsies well">
        <div style="position: relative">
          <p class="muted" style="margin-bottom: 0">
Lorem ipsum dolar sit amet illo error <a href="#" data-original-title="below">ipsum</a> veritatis aut iste perspiciatis iste voluptas natus illo quasi odit aut natus consequuntur consequuntur, aut natus illo voluptatem odit perspiciatis laudantium rem doloremque totam voluptas. <a href="#" data-original-title="right">Voluptasdicta</a> eaque beatae aperiam ut enim voluptatem explicabo explicabo, voluptas quia odit fugit accusantium totam totam architecto explicabo sit quasi fugit fugit, totam doloremque unde sunt <a href="#" data-original-title="left">sed</a> dicta quae accusantium fugit voluptas nemo voluptas voluptatem <a href="#" data-original-title="above">rem</a> quae aut veritatis quasi quae.
          </p>
        </div>
      </div>
    </div>
  </div><!-- /row -->

  <!-- Popovers -->
  <div class="row">
    <div class="span4">
      <h2>Popovers</h2>
      <p>Use popovers to provide subtextual information to a page without affecting layout.</p>
      <p><a class="btn js-btn" href="./demo-javascript-fBootstrap.html#popover">Get the javascript »</a></p>
    </div>
    <div class="span12">
      <div class="popover-well">
         <div class="popover-wrapper">
          <div class="popover left">
            <div class="arrow"></div>
            <div class="inner">
              <h3 class="title">Popover Title</h3>
              <div class="content">
                <p>Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /row -->
</section>





<!-- Using Javascript w/ Bootstrap
 ================================================== -->
 <section id="javascript">
   <div class="page-header">
     <h1>Using javascript with Bootstrap <small>An index of plugins to get you started</small></h1>
   </div>
   <h2>Getting started</h2>
   <p>Integrating javascript with the Bootstrap library is super easy. Below we go over the basics and provide you with some awesome plugins to get you started!</p>
   <p><a class="btn primary" href="./demo-javascript-fBootstrap.html">View javascript docs »</a></p>
   <div class="row">
     <div class="span12">
      <h3>What's included</h3>
       <p>Bring some of Bootstrap's primary components to life with new custom plugins that work with <a href="http://jquery.com/" target="_blank">jQuery</a> and <a href="http://ender.no.de" target="_blank">Ender</a>. We encourage you to extend and modify them to fit your specific development needs.</p>
        <table class="bordered-table zebra-striped">
          <thead>
            <tr>
              <th style="width: 150px;">File</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#modal">bootstrap-modal.js</a></td>
              <td>Our Modal plugin is a <strong>super</strong> slim take on the traditional modal js plugin! We took special care to include only the bare functionality that we require at twitter.</td>
            </tr>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#alerts">bootstrap-alerts.js</a></td>
              <td>The alert plugin is a super tiny class for adding close functionality to alerts.</td>
            </tr>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#dropdown">bootstrap-dropdown.js</a></td>
              <td>This plugin is for adding dropdown interaction to the bootstrap topbar or tabbed navigations.</td>
            </tr>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#scrollspy">bootstrap-scrollspy.js</a></td>
              <td>The ScrollSpy plugin is for adding an auto updating nav based on scroll position to the bootstrap topbar.</td>
            </tr>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#buttons">bootstrap-buttons.js</a></td>
              <td>This plugin offers additional functionality for managing button state.</td>
            </tr>
            <tr>
             <td><a href="./demo-javascript-fBootstrap.html#tabs">bootstrap-tabs.js</a></td>
              <td>This plugin adds quick, dynamic tab and pill functionality for cycling through local content.</td>
            </tr>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#twipsy">bootstrap-twipsy.js</a></td>
              <td>Based on the excellent jQuery.tipsy plugin written by Jason Frame; twipsy is an updated version, which doesn't rely on images, uses css3 for animations, and data-attributes for local title storage!</td>
            </tr>
            <tr>
              <td><a href="./demo-javascript-fBootstrap.html#popover">bootstrap-popover.js</a></td>
              <td>The popover plugin provides a simple interface for adding popovers to your application. It extends the <a href="#twipsy">boostrap-twipsy.js</a> plugin, so be sure to grab that file as well when including popovers in your project!</td>
            </tr>
          </tbody>
       </table>
       <h3>Is javascript necessary?</h3>
       <p><strong>Nope!</strong> Bootstrap is designed first and foremost to be a CSS library. This javascript provides a basic interactive layer on top of the included styles.</p>
       <p>However, for those who do need javascript, we've provided the plugins above to help you understand how to integrate Bootstrap with javascript and to give you a quick, lightweight option for the basic functionality right away.</p>
       <p>For more information and to see some live demos, please refer to our <a href="./demo-javascript-fBootstrap.html">plugin documentation page</a>.</p>
     </div>
   </div>
 </section>

    <footer>
        <p>&copy; Company 2011</p>
    </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="/js/plugins.js"></script>
  <script src="/js/script.js"></script>
  <script src="http://autobahn.tablesorter.com/jquery.tablesorter.min.js"></script>
  
  <script src="/js/bootstrap-dropdown.js"></script>
  <script src="/js/bootstrap-twipsy.js"></script>
  <script src="/js/bootstrap-scrollspy.js"></script>
  <script src="/js/bootstrap-scrollspy.js"></script>
  <script src="/js/assets/application.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
