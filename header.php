<?php ?>
<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container-fluid navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="index.php"><img src="images/icons/logo.png"></a></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($nav == 1){ ?>class="active" <?php }?>><a href="index.php">Home</a></li>
                        <li <?php if($nav == 2){ ?>class="active" <?php }?>><a href="approach.php">Our Approach</a></li>
                        <li <?php if($nav == 3){ ?>class="active" <?php }?>><a href="contact.php">Contact</a></li>

                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
