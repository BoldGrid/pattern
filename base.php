<?php
/**
 * Base Template
 *
 * This file contains the base structure of a BoldGrid Theme.
 *
 * @since 2.0
 */

global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<?php get_template_part( 'templates/head' ); ?>
	<body <?php body_class(); ?>>
		<?php do_action( 'boldgrid_header_before' ); ?>
		<div class="site-header">
			<?php do_action( 'get_header' ); ?>
			<?php get_template_part( 'templates/header/header', $configs['template']['header'] ); ?>
		</div>
		<?php do_action( 'boldgrid_header_after' ); ?>
		<?php do_action( 'boldgrid_content_before' ); ?>
		<div class="site-content container" role="document">

		<!-- BoldGrid Pattern Library -->
			<ul id="bgpl-navigation" class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#elements" aria-controls="elements" role="tab" data-toggle="tab">Elements</a></li>
			    <li role="presentation"><a href="#modules" aria-controls="modules" role="tab" data-toggle="tab">Modules</a></li>
			    <li role="presentation"><a href="#gridblocks" aria-controls="gridblocks" role="tab" data-toggle="tab">Gridblocks</a></li>
			    <li role="presentation"><a href="#templates" aria-controls="templates" role="tab" data-toggle="tab">Templates</a></li>
			</ul>

			<div id="bgpl-content" class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="elements">
			    	<div class="bgpl-key">
				    	<ul>
					    	<li class="key-boldgrid">BoldGrid</li>
					    	<li class="key-wordpress">WordPress</li>
					    	<li class="key-bootstrap">Bootstrap</li>
					    </ul>
			    	</div>

			    	<div class="bgpl-section">
			    		<div class="bgpl-title-background background-boldgrid">
			    			<h2 class="bgpl-title">Colors</h2>
			    		</div>
				   		<p class="bgpl-variables">$palette-primary_1, $palette-primary_2, $palette-primary_3, $palette-primary_4, $palette-primary_5, $palette-primary_6</p>
				    	<hr class="hr-boldgrid" />

				    	<!-- Colors -->
					    	<div class="color-circle background-color-1"><p>1</p></div>
					    	<div class="color-circle background-color-2"><p>2</p></div>
					    	<div class="color-circle background-color-3"><p>3</p></div>
					    	<div class="color-circle background-color-4"><p>4</p></div>
					    	<div class="color-circle background-color-5"><p>5</p></div>
					    	<div class="color-circle background-color-6"><p>N</p></div>
				    		<div class="clearfix"></div>
				    	<!-- /Colors -->
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Headings</h2>
			    		</div>
						<p class="bgpl-variables">h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6</p>
				    	<hr class="hr-bootstrap" />
						
						<!-- Headings -->
					    	<h1 class="h1">H1 Heading</h1>
					    	<h2 class="h2">H2 Heading</h2>
					    	<h3 class="h3">H3 Heading</h3>
					    	<h4 class="h4">H4 Heading</h4>
					    	<h5 class="h5">H5 Heading</h5>
					    	<h6 class="h6">H6 Heading</h6>
					    <!-- /Headings -->
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Lead Paragraphs</h2>
			    		</div>
				    	<p class="bgpl-variables">.lead</p>
						<hr class="hr-bootstrap" />
						
						<!-- Lead Paragraphs -->
			    			<p class=".lead">Donec sit amet facilisis lacus, ac cursus enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed efficitur ipsum, in laoreet metus.</p>
			    		<!-- /Lead Paragraphs -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Paragraphs</h2>
			    		</div>
				    	<p class="bgpl-variables">body, p</p>
						<hr class="hr-bootstrap" />
						
						<!-- Paragraphs -->
				    		<p>Donec sit amet facilisis lacus, ac cursus enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed efficitur ipsum, in laoreet metus. Phasellus vehicula massa augue, vitae ultrices ante porta ut. Donec mollis pharetra mi, at elementum diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi orci orci, viverra id vehicula quis, commodo non orci.</p>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam malesuada erat aliquet interdum bibendum. Donec lacinia facilisis laoreet. Praesent blandit iaculis elit vel bibendum. Duis ipsum quam, sollicitudin eget egestas eget, condimentum consectetur nisl. Nunc neque dui, aliquet sit amet libero non, accumsan rutrum quam. Nam placerat diam nulla, a placerat urna accumsan cursus.</p>
				    	<!-- /Paragraphs -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-boldgrid">
			    			<h2 class="bgpl-title">Links</h2>
			    		</div>
				    	<p class="bgpl-variables">a, .link-primary, .link-secondary</p>
						<hr class="hr-boldgrid" />
						
						<!-- Links -->
							<p><a href="#">Link</a></p>
				    		<p><a class="link-primary" href="#">Link Primary</a></p>
				    		<p><a class="link-secondary" href="#">Link Secondary</a></p>
			    		<!-- /Links -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Unordered Lists</h2>
			    		</div>
				    	<p class="bgpl-variables">ul</p>
						<hr class="hr-bootstrap" />
						
						<!-- Unordered Lists -->
							<ul>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit</li>
								<li>Integer molestie lorem at massa</li>
								<li>Facilisis in pretium nisl aliquet</li>
								<li>Nulla volutpat aliquam velit</li>
								<ul>
									<li>Phasellus iaculis neque</li>
									<li>Purus sodales ultricies</li>
									<li>Vestibulum laoreet portitor sem</li>
									<li>Ac tristique libero volutpat at</li>
								</ul>
								<li>Faucibus porta lacus fringilla vel</li>
								<li>Aenean sit amet erat nunc</li>
								<li>Eget portitor lorem</li>
							</ul>
						<!-- /Unordered Lists -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Ordered Lists</h2>
			    		</div>
				    	<p class="bgpl-variables">ol</p>
						<hr class="hr-bootstrap" />
			    		
						<!-- Ordered Lists -->
				    		<ol>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit</li>
								<li>Integer molestie lorem at massa</li>
								<li>Facilisis in pretium nisl aliquet</li>
								<li>Nulla volutpat aliquam velit</li>
								<li>Faucibus porta lacus fringilla vel</li>
								<li>Aenean sit amet erat nunc</li>
								<li>Eget portitor lorem</li>
							</ol>
						<!-- /Ordered Lists -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Blockquotes</h2>
			    		</div>
				    	<p class="bgpl-variables">blockquote > p</p>
						<hr class="hr-bootstrap" />
						
						<!-- Blockquotes -->
							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
							</blockquote>
						<!-- /Blockquotes -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-boldgrid">
			    			<h2 class="bgpl-title">Buttons</h2>
			    		</div>
				    	<p class="bgpl-variables">.button-primary, .button-secondary</p>
						<hr class="hr-boldgrid" />

						<!-- Buttons -->
							<p class="p-button-primary"><a class="button-primary" href="#">Primary Button</a> <a class="button-secondary" href="#">Secondary Button</a></p>
						<!-- /Buttons -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Buttons</h2>
			    		</div>
				    	<p class="bgpl-variables">.btn, .btn-primary, .btn-default, .btn-lg, .btn-sm, .btn-xs</p>
						<hr class="hr-bootstrap" />

						<!-- Buttons -->
							<p><a class="btn btn-primary btn-lg" href="#">Primary Large</a> <a class="btn btn-default btn-lg" href="#">Default Large</a></p>
							<p><a class="btn btn-primary" href="#">Primary Medium</a> <a class="btn btn-default" href="#">Default Medium</a></p>
							<p><a class="btn btn-primary btn-sm" href="#">Primary Small</a>  <a class="btn btn-default btn-sm" href="#">Default Small</a></p>
							<p><a class="btn btn-primary btn-xs" href="#">Extra Small</a>  <a class="btn btn-default btn-xs" href="#">Extra Small</a></p>
						<!-- /Buttons -->
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Images</h2>
			    		</div>
				    	<p class="bgpl-variables">img</p>
						<hr class="hr-bootstrap" />

						<!-- Images -->
							<p><img src="https://source.unsplash.com/150x250/?pineapple" /></p>
				    		<p><img src="https://source.unsplash.com/200x200/?pineapple" /></p>
				    		<p><img src="https://source.unsplash.com/250x150/?pineapple" /></p>
				    	<!-- /Images -->
			    	</div>
			    </div>

			    <div role="tabpanel" class="tab-pane" id="modules">
					<div class="bgpl-key">
				    	<ul>
					    	<li class="key-boldgrid">BoldGrid</li>
					    	<li class="key-wordpress">WordPress</li>
					    	<li class="key-bootstrap">Bootstrap</li>
					    </ul>
			    	</div>
			    	<div class="bgpl-section">
			    		<div class="bgpl-title-background background-boldgrid">
			    			<h2 class="bgpl-title">Navbars</h2>
			    		</div>
				   		<p class="bgpl-variables">.navbar, .navbar-default</p>
				    	<hr class="hr-boldgrid" />

				    	<!-- Navbars -->
					    	<nav id="site-navigation" class="navbar navbar-default" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navbar">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="primary-navbar" class="collapse navbar-collapse primary-menu">
									<ul id="menu-primary" class="nav navbar-nav">
										<li id="menu-item-1" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1 current_page_item menu-item-1 active"><a title="One" href="#">One</a></li>
										<li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2"><a title="Two" href="#">Two</a></li>
										<li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3"><a title="Three" href="#">Three</a></li>
										<li id="menu-item-4" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4"><a title="Four" href="#">Four</a></li>
										<li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5"><a title="Five" href="#">Five</a></li>
									</ul>
								</div>				
							</nav>
						<!-- /Navbars -->
				    </div>

					<div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Panels</h2>
			    		</div>
				   		<p class="bgpl-variables">.panel, .panel-heading, .panel-title, .panel-footer</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Column -->
				    	<div class="row">
				    		<div class="col-md-4">

				    	<!-- Panels -->
					    	<div class="panel panel-default">
							  	<div class="panel-heading">Panel heading without title</div>
							  	<div class="panel-body">
							    	<p>Panel content</p>
								</div>
							</div>
							<div class="panel panel-default">
							  	<div class="panel-heading">
							    	<h3 class="panel-title">Panel title</h3>
							  	</div>
							  	<div class="panel-body">
							    	<p>Panel content</p>
							  	</div>
							</div>
							<div class="panel panel-default">
							  	<div class="panel-body">
							    	<p>Panel content</p>
							  	</div>
							  	<div class="panel-footer">Panel footer</div>
							</div>
						<!-- /Panels -->
						<!-- /Column -->
							</div>
						</div>
				    </div>

					<div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Wells</h2>
			    		</div>
				   		<p class="bgpl-variables">.well</p>
				    	<hr class="hr-bootstrap" />

						<!-- Column -->
				    	<div class="row">
				    		<div class="col-md-4">

				    	<!-- Wells -->
				    		<div class="well">Look, I'm in a well!</div>
				    		<div class="well well-lg">I'm in a large well!</div>
				    		<div class="well well-sm">I'm in a small well!</div>
				    	<!-- /Wells -->
						<!-- /Column -->
							</div>
						</div>
				    </div>

					<div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Thumbnails</h2>
			    		</div>
				   		<p class="bgpl-variables">.thumbnail</p>
				    	<hr class="hr-bootstrap" />

						<!-- Column -->
				    	<div class="row">
				    		<div class="col-md-2">

				    	<!-- Thumbnails -->
				    		<a href="#" class="thumbnail">
						    	<img src="https://source.unsplash.com/200x200/?pineapple" alt="pineapple" />
						    </a>
						<!-- /Thumbnails -->
						<!-- /Column -->
							</div>
						</div>
				    </div>

					<div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Cards (BS 4)</h2>
			    		</div>
				   		<p class="bgpl-variables">.card, .card-block</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Column -->
				    	<div class="row">
				    		<div class="col-md-4">

				    	<!-- Cards -->
							<div class="card">
							  	<img class="card-img-top" src="https://source.unsplash.com/250x150/?pineapple" alt="pineapple" />
							  	<div class="card-block">
							    	<h4 class="card-title">Card title</h4>
							    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    	<a href="#" class="btn btn-primary">Go somewhere</a>
							  	</div>
							</div>
						<!-- /Cards -->
				    	<!-- /Column -->
							</div>
						</div>
				    </div>

				   <div class="bgpl-section">
			    		<div class="bgpl-title-background background-boldgrid">
			    			<h2 class="bgpl-title">Profiles</h2>
			    		</div>
				   		<p class="bgpl-variables">.mod-profile</p>
				    	<hr class="hr-boldgrid" />

				    	<!-- Column -->
				    	<div class="row">
				    		<div class="col-md-4">

				    	<!-- Profiles -->
				    		<div class="mod-profile">
								<p><img src="https://source.unsplash.com/150x250/?pineapple" alt="pineapple" /></p>
								<h3>David Jones</h3>
								<h4>Fitness Trainer</h4>	
							</div>
						<!-- /Profiles -->
				    	<!-- /Column -->
							</div>
						</div>
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-wordpress">
			    			<h2 class="bgpl-title">Post Tags</h2>
			    		</div>
				   		<p class="bgpl-variables">.post-tags</p>
				    	<hr class="hr-wordpress" />

				    	<!-- Post Tags -->
				    		<p><a class="post-tags" href="#">html</a> <a class="post-tags" href="#">wordpress</a></p>
						<!-- /Post Tags -->
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Labels (BS 3)</h2>
			    		</div>
				   		<p class="bgpl-variables">.label, .label-default</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Labels -->
				    		<h4>Example heading <span class="label label-default">New</span></h4>
				    		<h5>Example heading <span class="label label-default">New</span></h5>
				    		<h6>Example heading <span class="label label-default">New</span></h6>
						<!-- /Labels -->
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Tags (BS 4)</h2>
			    		</div>
				   		<p class="bgpl-variables">.tag, .tag-default</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Tags -->
				    		<p>Example</p>
						<!-- /Tags -->
				    </div>
			    </div>

			    <div role="tabpanel" class="tab-pane" id="gridblocks">
			    	<div class="bgpl-key">
				    	<ul>
					    	<li class="key-boldgrid">BoldGrid</li>
					    	<li class="key-wordpress">WordPress</li>
					    	<li class="key-bootstrap">Bootstrap</li>
					    </ul>
			    	</div>

			    	<div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Example</h2>
			    		</div>
				   		<p class="bgpl-variables">.example</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Example -->
				    		<p>Example</p>
						<!-- /Example -->
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Example</h2>
			    		</div>
				   		<p class="bgpl-variables">.example</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Example -->
				    		<p>Example</p>
						<!-- /Example -->
				    </div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Example</h2>
			    		</div>
				   		<p class="bgpl-variables">.example</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Example -->
				    		<p>Example</p>
						<!-- /Example -->
				    </div>
			    </div>

			    <div role="tabpanel" class="tab-pane" id="templates">
			    	<div class="bgpl-key">
				    	<ul>
					    	<li class="key-boldgrid">BoldGrid</li>
					    	<li class="key-wordpress">WordPress</li>
					    	<li class="key-bootstrap">Bootstrap</li>
					    </ul>
			    	</div>

				    <div class="bgpl-section">
			    		<div class="bgpl-title-background background-bootstrap">
			    			<h2 class="bgpl-title">Example</h2>
			    		</div>
				   		<p class="bgpl-variables">.example</p>
				    	<hr class="hr-bootstrap" />

				    	<!-- Example -->
				    		<p>Example</p>
						<!-- /Example -->
				    </div>
			    </div>
			</div>
		</div>
		<?php do_action( 'boldgrid_content_after' ); ?>
		<?php do_action( 'boldgrid_footer_before' ); ?>
		<div class="site-footer">
			<?php do_action( 'get_footer' ); ?>
			<?php get_template_part( 'templates/footer/footer', $configs['template']['footer'] ); ?>
			<?php wp_footer(); ?>
		</div>
		<?php do_action( 'boldgrid_footer_after' ); ?>
	</body>
</html>
