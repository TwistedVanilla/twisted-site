<!-- Author: Elisabeth Long -->
<?php
    class PageDetails {
        private $title;
        private $siteTitle;
        
        function __construct($title) {
            $this->title = $title;
            $this->siteTitle = "twisted vanilla";
        }
        
        function set_default_head() {
            $this->set_default_page_title();
            $this->set_default_stylsheet();
        }
        
        function create_default_body_top() {
            $this->create_login_bar();
            $this->create_default_header();
            $this->create_default_nav_bar();
        }
        
        function create_default_body_bottom() {
            $this->create_default_footer();
        }
        
        function set_default_stylsheet() {
            print '<link type="text/css" rel=stylesheet href="stylesheets/stylesheet.css"/>';
        }
        
        function set_default_page_title() {
            print '<title>'.$this->title.': '.$this->siteTitle.'</title>';
        }
        
        function create_login_bar() {
            print '<nav class="login_bar"><ul>';
            
            if (empty($_SESSION['username'])) {
                print '<li><a href="createNewAccount.php">Create Account</a></li>';
                print '<li><a href="login.php">Login</a></li>';
            }
            else if (!empty($_SESSION['username'])) {
                print "<li>Welcome ".$_SESSION['username']."!</li>";
                print '<li><a href="logout.php">Logout</a></li>';
            }
            
            print '</ul></nav>';
        }

        function create_default_header() {
            print '<header class="header">
                <h1>TWISTED VANILLA</h1>
                <p>'.$this->title.'</p>
            </header>';
        }
        
        function create_default_nav_bar() {
            print '<nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="plugins.php">Plugins</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>';
        }
        
        function create_default_footer() {
            print '<footer>
                <ul>
                    <li>Copyright: TwistedVanilla, Elisabeth Long</li>
                </ul>
            </footer>';
        }
    }
?>