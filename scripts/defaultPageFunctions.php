<!-- Author: Elisabeth Long -->
<?php
    class PageDetails {
        private $title;
        private $siteTitle;
        
        function __construct($title) {
            $this->title = $title;
            $this->siteTitle = "Twisted Vanilla";
        }
        
        function setDefaultHead() {
            $this->setDefaultPageTitle();
            $this->setDefaultStylsheet();
        }
        
        function createDefaultBodyTop() {
            $this->createDefaultNavBar();
            $this->createDefaultHeader();
        }
        
        function createDefaultBodyBottom() {
            $this->createDefaultFooter();
        }
        
        function setDefaultStylsheet() {
            print '<link type="text/css" rel=stylesheet href="stylesheets/stylesheet.css"/>';
            print ('<meta charset="UTF-8"/>');
        }
        
        function setDefaultPageTitle() {
            print '<title>'.$this->title.': '.$this->siteTitle.'</title>';
        }

        function createDefaultHeader() {
            print '<header class="header">
                <h1>TWISTED VANILLA</h1>
            </header>';
        }
        
        function createDefaultNavBar() {
            print ('<nav><ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="plugins.php">Plugins</a></li>
                <li><a href="about.php">About</a></li>');
            if (empty($_SESSION['username'])) {
                print ('<li><a href="login.php">Login</a></li>');
            }
            else if (!empty($_SESSION['username'])) {
                print "<li>Welcome ".$_SESSION['username']."!</li>";
                print ('<li><a href="createNewAccount.php">Create Staff Account</a></li>');
                print '<li><a href="logout.php">Logout</a></li>';
            }
            print('</ul></nav>');
        }
        
        function createDefaultFooter() {
           print '<footer>
                <ul>
                    <li>Copyright © TwistedVanilla 2016</li>
                </ul>
            </footer>';
        }
    }
?>